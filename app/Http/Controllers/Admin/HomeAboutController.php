<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Helpers\FileUploadHelper;
use App\Models\HomeAbout;
use Illuminate\Http\Request;

class HomeAboutController extends Controller
{
    public function index() {
        // Assuming you always want to get the first record
        $HomeAbout = HomeAbout::first();
        return view('backend.homeabout', ['homeAbout' => $HomeAbout]);
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

    public function update(HomeAbout $homeAbout) {
        // Validate the inputs including both images
        request()->validate([
            'title1' => ['required'],
            'title2' => ['required'],
            'text1' => ['required'],
            'text2' => ['required'],
            'our_vision' => ['required'],
            'our_messege' => ['required'],
            'image1' => ['image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],  // Not required, since it may not be uploaded again
            'image2' => ['image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],  // Same as above
        ]);
    
        // Check and upload both images if present
        $uploadedImages = FileUploadHelper::uploadMultipleFiles([
            'image1' => request()->file('image1'),
            'image2' => request()->file('image2')
        ], 'homeabout');
    
        // Delete old images if new ones are uploaded
        if (!empty($uploadedImages['image1'])) {
            if (file_exists(public_path('uploads/homeabout/' . $homeAbout->image1))) {
                unlink(public_path('uploads/homeabout/' . $homeAbout->image1));  // Delete old image1
            }
            $homeAbout->image1 = $uploadedImages['image1'];
        }
    
        if (!empty($uploadedImages['image2'])) {
            if (file_exists(public_path('uploads/homeabout/' . $homeAbout->image2))) {
                unlink(public_path('uploads/homeabout/' . $homeAbout->image2));  // Delete old image2
            }
            $homeAbout->image2 = $uploadedImages['image2'];
        }
    
        // Update the other fields
        $homeAbout->update([
            'title1' => request()->title1,
            'title2' => request()->title2,
            'text1' => request()->text1,
            'text2' => request()->text2,
            'our_vision' => request()->our_vision,
            'our_messege' => request()->our_messege,
            'button_text' => request()->button_text,
            'button_url' => request()->button_url,
            'video_url' => request()->video_url,
        ]);
    
        // Redirect back to the homeabout list or any other route
        return to_route('backend.homeabout')->with('success-update', 'تم تحديث العنصر بنجاح');
    }
    

    
    
}
