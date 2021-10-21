<?php


namespace App\Traits;


use Illuminate\Support\Facades\Storage;
use TCG\Voyager\Events\FileDeleted;

trait Removable
{
    public function deleteFileIfExists($path)
    {
        if ($path != config('voyager.user.default_avatar')) {
            $imageThumbnailsArray = explode('.', $path);
            $imageThumbnails = $imageThumbnailsArray[0] . '-cropped.' . $imageThumbnailsArray[1];
            if (Storage::disk(config('voyager.storage.disk'))->exists($imageThumbnails)) {
                Storage::disk(config('voyager.storage.disk'))->delete($imageThumbnails);
                event(new FileDeleted($imageThumbnails));
            }
            if (Storage::disk(config('voyager.storage.disk'))->exists($path)) {
                Storage::disk(config('voyager.storage.disk'))->delete($path);
                event(new FileDeleted($path));
            }
        }

    }
}
