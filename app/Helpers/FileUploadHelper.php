<?php

namespace App\Helpers;

use Illuminate\Http\UploadedFile;




class FileUploadHelper
{
    /**
     * Handle the file upload process.
     *
     * @param UploadedFile $file
     * @param string $folder
     * @return string $fileName
     */
    
    
    
     public static function uploadFile(UploadedFile $file, string $folder): string
    {
        $fileName = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('uploads/' . $folder), $fileName);
        return $fileName;
    }

    // Handles multiple file uploads for two image fields
    public static function uploadMultipleFiles(array $files, string $folder): array
    {
        $fileNames = [];

        foreach ($files as $key => $file) {
            if ($file instanceof UploadedFile) {
                $fileName = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('uploads/' . $folder), $fileName);
                $fileNames[$key] = $fileName;
            }
        }

        return $fileNames; // Returns an array of uploaded file names
    }
}
