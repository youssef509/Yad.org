<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Helpers\FileUploadHelper;
use App\Models\HeroSection;
use Illuminate\Http\Request;

class HeroSectionController extends Controller
{
    public function index() {
        
        $HeroSection = HeroSection::first();
        return view('backend.hero-section', ['HeroSection' => $HeroSection]);
    }

    public function store() {
        // Validate the inputs including both images
        request()->validate([
            'title1' => ['required'],
            'title2' => ['required'],
            'button_text' => ['required'],
            'button_url' => ['required'],
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048']
        ]);
    
         // Process the image upload after validation has passed
         if (request()->hasFile('image')) {
            $image = request()->file('image');
            $folder = 'herosection'; // Define your folder for uploads
            $imageName = FileUploadHelper::uploadFile($image, $folder); // Assuming this helper uploads the file and returns its name
        } else {
            return back()->withErrors(['image' => 'Image upload failed.']);
        }
    
        // Insert data into the table
        HeroSection::create([
            'title1' => request()->title1,
            'title2' => request()->title2,
            'button_text' => request()->button_text,
            'button_url' => request()->button_url,
            'image' => $imageName
            
        ]);
    
        return to_route('backend.hero')->with('success-create', 'تم اضافة العنصر بنجاح');
    }

    // public function update(HeroSection $HeroSection) {
    //     // Validate the inputs including both images
    //     request()->validate([
    //         'title1' => ['required'],
    //         'title2' => ['required'],
    //         'button_text' => ['required'],
    //         'button_url' => ['required'],
    //         'image' => ['image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048']
           
    //     ]);
    
    //     // Check if a new image is uploaded
    //     if (request()->hasFile('image')) {
    //         // Delete the old image if it exists
    //         if ($HeroSection->image && file_exists(public_path('uploads/herosection/' . $HeroSection->image))) {
    //             unlink(public_path('uploads/herosection/' . $HeroSection->image)); // Delete old image
    //         }
    
    //         // Upload the new image and get the filename
    //         $uploadedImage = FileUploadHelper::uploadFile(request()->file('image'), 'herosection');
    //         $HeroSection->image = $uploadedImage; // Update the image field
    //     }
    
    //     // Update the other fields
    //     $HeroSection->update([
    //         'title1' => request()->title1,
    //         'title2' => request()->title2,
    //         'button_text' => request()->button_text,
    //         'button_url' => request()->button_url
    //     ]);
    //     return to_route('backend.hero')->with('success-update', 'تم تحديث العنصر بنجاح');
    // }

    public function update(HeroSection $heroSection) {
        // Validate the inputs including both images
        request()->validate([
            'title1' => ['required'],
            'title2' => ['required'],
            'button_text' => ['required'],
            'button_url' => ['required'],
            'image' => ['image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],  // Not required, since it may not be uploaded again
        ]);
    
        // Check and upload both images if present
        $uploadedImages = FileUploadHelper::uploadMultipleFiles([
            'image' => request()->file('image'),
           
        ], 'HeroSection');
    
        // Delete old images if new ones are uploaded
        if (!empty($uploadedImages['image'])) {
            if (file_exists(public_path('uploads/herosection/' . $heroSection->image))) {
                unlink(public_path('uploads/herosection/' . $heroSection->image));  // Delete old image1
            }
            $heroSection->image = $uploadedImages['image'];
        }
    
        
    
        // Update the other fields
        $heroSection->update([
            'title1' => request()->title1,
            'title2' => request()->title2,
            'button_text' => request()->button_text,
            'button_url' => request()->button_url,
            
        ]);
    
        // Redirect back to the homeabout list or any other route
        return to_route('backend.hero')->with('success-update', 'تم تحديث العنصر بنجاح');
    }
}
