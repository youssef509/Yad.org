<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Helpers\FileUploadHelper;

use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function index() {
        return view('backend.aboutus');
    }

    public function store() {
        // Validate the inputs including both images
        request()->validate([
            'title1' => ['required'],
            'title2' => ['required'],
            'text1' => ['required'],
            'text2' => ['required'],
            'our_vision' => ['required'],
            'our_messege' => ['required'],
            'image1' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048']
        ]);
    
        // Check and upload both images
        $uploadedImages = FileUploadHelper::uploadMultipleFiles([
            'image1' => request()->file('image1'),
            'image2' => request()->file('image2')
        ], 'homeabout'); // 'homeabout' is the folder where images will be uploaded
    
        // If the images failed to upload, return an error
        if (!$uploadedImages['image1'] || !$uploadedImages['image2']) {
            return back()->withErrors(['image' => 'Image upload failed.']);
        }
    
        // Insert data into the homeabout table including the uploaded image names
        HomeAbout::create([
            'title1' => request()->title1,
            'title2' => request()->title2,
            'text1' => request()->text1,
            'text2' => request()->text2,
            'our_vision' => request()->our_vision,
            'our_messege' => request()->our_messege,
            'button_text' => request()->button_text,
            'button_url' => request()->button_url,
            'image1' => $uploadedImages['image1'],  // Store the name of the uploaded image1
            'image2' => $uploadedImages['image2'],  // Store the name of the uploaded image2
            'video_url' => request()->video_url,
        ]);
    
        // Redirect to the homeabout list or any other route
        return to_route('backend.homeabout')->with('success-create', 'تم اضافة العنصر بنجاح');
    }
}
