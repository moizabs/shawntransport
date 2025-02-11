<?php

namespace App\Traits;

trait ImageUploadTrait
{
    public function uploadImage($folder, $file)
    {
        if ($file) {
            $filename = uniqid() . '.' . $file->getClientOriginalExtension();

            $file->move(public_path($folder), $filename);

            return $folder . '/' . $filename;
        }

        return null;
    }

    public function deleteImage($path)
    {
        if ($path) {
            unlink(public_path($path));
        }
    }
}
