<?php

namespace App\Traits;


use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

trait Fileable
{
    /**
     * @param Request $request
     * @param $table_name
     * @param array $options
     * @return string
     */
    public function handleFile(Request $request, $table_name, $options = [])
    {
        if (!$request->hasFile('pdf')) {
            return;
        }

        $files = Arr::wrap($request->file('pdf'));

        $filesPath = [];
        $path = $this->generatePath($table_name);

        foreach ($files as $file) {
            $filename = $this->generateFileNamePdf($file, $path, $options);
            $file->storeAs(
                $path,
                $filename . '.' . $file->getClientOriginalExtension(),
                config('voyager.storage.disk', 'public')
            );

            array_push($filesPath, [
                'download_link' => $path . $filename . '.' . $file->getClientOriginalExtension(),
                'original_name' => $file->getClientOriginalName(),
            ]);
        }

        return json_encode($filesPath);
    }

    /**
     * @param $table_name
     * @return string
     */
    protected function generatePath($table_name)
    {
        return $table_name . DIRECTORY_SEPARATOR . date('FY') . DIRECTORY_SEPARATOR;
    }

    /**
     * @param $file
     * @param $path
     * @param array $options
     * @return string
     */
    protected function generateFileNamePdf($file, $path, $options = [])
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
}
