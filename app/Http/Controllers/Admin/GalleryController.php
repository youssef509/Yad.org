<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Helpers\FileUploadHelper;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index() {
        $GalleryFromDB = Gallery::all();
        return view('backend.gallery', ['gallery'=> $GalleryFromDB]);
    }

    public function store() {
        // Validate the inputs including the image
        request()->validate([
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'alt' => ['required']
        ]);
    
        // Process the image upload after validation has passed
        if (request()->hasFile('image')) {
            $image = request()->file('image');
            $folder = 'gallery'; // Define your folder for uploads
            $imageName = FileUploadHelper::uploadFile($image, $folder); // Assuming this helper uploads the file and returns its name
        } else {
            return back()->withErrors(['image' => 'Image upload failed.']);
        }
    
        // Insert data into the slider table
        Gallery::create([
            'image' => $imageName, // Use the uploaded image name
            'alt' => request()->alt
        ]);

        return to_route('backend.gallery')->with('success-create', 'تم اضافة العنصر بنجاح');
        }

        public function destroy($singelgalleryId) {
        $gallery = Gallery::find($singelgalleryId);
        
        if ($gallery) {
            // Delete the record from the database
            $gallery->delete();
            
            // Remove the image file from the uploads folder
            if (file_exists(public_path('uploads/gallery/' . $gallery->image))) {
                unlink(public_path('uploads/gallery/' . $gallery->image));
            }

            // Redirect with success message
            return to_route('backend.gallery')->with('success', 'تم حذف العنصر بنجاح');
        }

            return back()->with('error', 'العنصر غير موجود');
        }
}
