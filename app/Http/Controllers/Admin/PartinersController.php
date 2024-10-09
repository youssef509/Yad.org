<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Helpers\FileUploadHelper;
use App\Models\Partiners;
use Illuminate\Http\Request;

class PartinersController extends Controller
{
    public function index() {
        $PartinersFromDB = Partiners::all();
        return view('backend.partiners', ['partiners'=> $PartinersFromDB]);
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
            $folder = 'partiners'; // Define your folder for uploads
            $imageName = FileUploadHelper::uploadFile($image, $folder); // Assuming this helper uploads the file and returns its name
        } else {
            return back()->withErrors(['image' => 'Image upload failed.']);
        }
    
        // Insert data into the slider table
        partiners::create([
            'image' => $imageName, // Use the uploaded image name
            'alt' => request()->alt
        ]);

        return to_route('backend.partiners')->with('success-create', 'تم اضافة العنصر بنجاح');
        }

        public function destroy($partinerId)
{
    $partiner = partiners::find($partinerId);
    
    if ($partiner) {
        // Delete the record from the database
        $partiner->delete();
        
        // Remove the image file from the uploads folder
        if (file_exists(public_path('uploads/partiners/' . $partiner->image))) {
            unlink(public_path('uploads/partiners/' . $partiner->image));
        }

        // Redirect with success message
        return to_route('backend.partiners')->with('success', 'تم حذف العنصر بنجاح');
    }

    return back()->with('error', 'العنصر غير موجود');
}
}
