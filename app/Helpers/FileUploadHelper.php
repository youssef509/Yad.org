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
}
