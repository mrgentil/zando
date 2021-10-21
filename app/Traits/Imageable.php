<?php


namespace App\Traits;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Constraint;
use Intervention\Image\Facades\Image as InterventionImage;

trait Imageable
{
    public function handleImage($file, $table_name, $options = [])
    {
        $path = $table_name . DIRECTORY_SEPARATOR . date('FY') . DIRECTORY_SEPARATOR;
        $filename = $this->generateFileName($file, $path);

        $image = InterventionImage::make($file);

        $fullPath = $path . $filename . '.' . $file->getClientOriginalExtension();

        $resizeWidth = null;
        $resizeHeight = null;

        if (isset($options->resize) && (
                isset($options->resize->width) || isset($options->resize->height)
            )) {
            if (isset($options->resize->width)) {
                $resizeWidth = $options->resize->width;
            }
            if (isset($options->resize->height)) {
                $resizeHeight = $options->resize->height;
            }
        } else {
            $resizeWidth = $image->width();
            $resizeHeight = $image->height();
        }

        $resizeQuality = isset($options->quality) ? intval($options->quality) : 75;

        $image = $image->resize(
            $resizeWidth,
            $resizeHeight,
            function (Constraint $constraint) use ($options) {
                $constraint->aspectRatio();
                if (isset($options->upsize) && !$options->upsize) {
                    $constraint->upsize();
                }
            }
        )->encode($file->getClientOriginalExtension(), $resizeQuality);

        if ($this->is_animated_gif($file)) {
            Storage::disk(config('voyager.storage.disk'))->put($fullPath, file_get_contents($file), 'public');
            $fullPathStatic = $path . $filename . '-static.' . $file->getClientOriginalExtension();
            Storage::disk(config('voyager.storage.disk'))->put($fullPathStatic, (string)$image, 'public');
        } else {
            Storage::disk(config('voyager.storage.disk'))->put($fullPath, (string)$image, 'public');
        }

        if (isset($options->thumbnails)) {
            foreach ($options->thumbnails as $thumbnails) {
                if (isset($thumbnails->name) && isset($thumbnails->scale)) {
                    $scale = intval($thumbnails->scale) / 100;
                    $thumbResizeWidth = $resizeWidth;
                    $thumbResizeHeight = $resizeHeight;

                    if ($thumbResizeWidth != null && $thumbResizeWidth != 'null') {
                        $thumbResizeWidth = intval($thumbResizeWidth * $scale);
                    }

                    if ($thumbResizeHeight != null && $thumbResizeHeight != 'null') {
                        $thumbResizeHeight = intval($thumbResizeHeight * $scale);
                    }

                    $image = InterventionImage::make($file)->resize(
                        $thumbResizeWidth,
                        $thumbResizeHeight,
                        function (Constraint $constraint) use ($options) {
                            $constraint->aspectRatio();
                            if (isset($options->upsize) && !$options->upsize) {
                                $constraint->upsize();
                            }
                        }
                    )->encode($file->getClientOriginalExtension(), $resizeQuality);
                } elseif (isset($thumbnails->crop->width) && isset($thumbnails->crop->height)) {
                    $cropWidth = $thumbnails->crop->width;
                    $cropHeight = $thumbnails->crop->height;
                    $image = InterventionImage::make($file)
                        ->fit($cropWidth, $cropHeight)
                        ->encode($file->getClientOriginalExtension(), $resizeQuality);
                }

                Storage::disk(config('voyager.storage.disk'))->put(
                    $path . $filename . '-' . $thumbnails->name . '.' . $file->getClientOriginalExtension(),
                    (string)$image,
                    'public'
                );
            }
        }
        return $fullPath;
    }

    /**
     * @param UploadedFile $file
     * @param $path
     * @param null $options
     * @return string
     */
    protected function generateFileName($file, $path, $options = null)
    {
        if (isset($options->preserveFileUploadName) && $options->preserveFileUploadName) {
            $filename = basename($file->getClientOriginalName(), '.' . $file->getClientOriginalExtension());
            $filename_counter = 1;

            // Make sure the filename does not exist, if it does make sure to add a number to the end 1, 2, 3, etc...
            while (Storage::disk(config('voyager.storage.disk'))->exists($path . $filename . '.' . $file->getClientOriginalExtension())) {
                $filename = basename($file->getClientOriginalName(), '.' . $file->getClientOriginalExtension()) . (string)($filename_counter++);
            }
        } else {
            $filename = Str::random(20);

            // Make sure the filename does not exist, if it does, just regenerate
            while (Storage::disk(config('voyager.storage.disk'))->exists($path . $filename . '.' . $file->getClientOriginalExtension())) {
                $filename = Str::random(20);
            }
        }

        return $filename;
    }

    private function is_animated_gif($filename)
    {
        $raw = file_get_contents($filename);

        $offset = 0;
        $frames = 0;
        while ($frames < 2) {
            $where1 = strpos($raw, "\x00\x21\xF9\x04", $offset);
            if ($where1 === false) {
                break;
            } else {
                $offset = $where1 + 1;
                $where2 = strpos($raw, "\x00\x2C", $offset);
                if ($where2 === false) {
                    break;
                } else {
                    if ($where1 + 8 == $where2) {
                        $frames++;
                    }
                    $offset = $where2 + 1;
                }
            }
        }

        return $frames > 1;
    }
}
