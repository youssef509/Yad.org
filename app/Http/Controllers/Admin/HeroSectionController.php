<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Helpers\FileUploadHelper;
use App\Models\HeroSection;
use Illuminate\Http\Request;

class HeroSectionController extends Controller
{
    public function index() {
        
        $HeroSectionfromDB = HeroSection::first();
        return view('backend.hero-section', ['theherosection' => $HeroSectionfromDB]);
    }

    public function store() {
        // Validate the inputs
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

    public function update(HeroSection $theherosection) {
        request()->validate([
            'title1' => ['required'],
            'title2' => ['required'],
            'button_text' => ['required'],
            'button_url' => ['required'],
            'image' => ['image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048']
        ]);
    
        // Check and upload image if present
        $uploadedImages = FileUploadHelper::uploadMultipleFiles([
            'image' => request()->file('image')
        ], 'herosection');
    
        // Delete old image if new one are uploaded
        if (!empty($uploadedImages['image'])) {
            if (file_exists(public_path('uploads/herosection/' . $theherosection->image))) {
                unlink(public_path('/uploads/herosection/' . $theherosection->image));  
            }
            $theherosection->image = $uploadedImages['image'];
        }
    
        // Update the other fields
        $theherosection->update([
            'title1' => request()->title1,
            'title2' => request()->title2,
            'button_text' => request()->button_text,
            'button_url' => request()->button_url
        ]);
    
        return to_route('backend.hero')->with('success-update', 'تم تحديث العنصر بنجاح');
    }
    
    
}
