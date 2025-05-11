<?php

namespace App\Traits;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

trait UploadImages
{

    /**
     * @param Request $request
     * @return $this|false|string
     */
    public function uploadImagesOnServer($directory, $file, $disk = 'upload_images')
    {
        if ($file) {
            // Get the original file extension
            $extension = $file->getClientOriginalExtension();
            // Generate a unique filename using hash
            $filename = hash('sha256', time() . $file->getClientOriginalName()) . '.' . $extension;
            // Store file on server
            $path = $file->storeAs($directory, $filename, $disk);

            return $filename; // Return the new filename
        }
        return null;
    }


    public function deleteImagesOnServer($directory, $file_name, $disk = 'upload_images')
    {
        // Check if this file exists on the server
        $exists = Storage::disk($disk)->exists($directory . '/' . $file_name);

        if ($exists) {
            // Delete this file from the server
            Storage::disk($disk)->delete($directory . '/' . $file_name);
        }
    }

    public function deleteMultiImages($directory, array $file_names, $disk = 'upload_images')
    {
        foreach ($file_names as $file_name) {
            // Check if the file exists on the server
            $exists = Storage::disk($disk)->exists($directory . '/' . $file_name);

            if ($exists) {
                // Delete the file from the server
                Storage::disk($disk)->delete($directory . '/' . $file_name);
            }
        }
    }

    public function uploadMultiImages($directory, $files, $disk = 'upload_images')
    {
        $uploadedFiles = [];
        foreach ($files as $file) {
            if ($file) {
                // Get the original file extension
                $extension = $file->getClientOriginalExtension();
                // Generate a unique filename using hash
                $filename = hash('sha256', time() . $file->getClientOriginalName()) . '.' . $extension;
                // Store file on server
                $path = $file->storeAs($directory, $filename, $disk);
                $uploadedFiles[] = $filename; // Store the filename for further use
            }
        }
        return $uploadedFiles;
    }
        }
