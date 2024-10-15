<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Helpers\FileUploadHelper;
use App\Models\AboutUsPage;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function index() {
        $AboutUsPageFromDB = AboutUsPage::first();
        return view('backend.aboutus', ['singleAboutUsPage' => $AboutUsPageFromDB]);
    }

    public function store() {
        // Validate the inputs including both images
        request()->validate([
            'title1' => ['required'],
            'title2' => ['required'],
            'our_vision' => ['required'],
            'vision' => ['required'],
            'our_messege' => ['required'],
            'messege' => ['required'],
            'our_goals' => ['required'],
            'goals' => ['required'],
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048']
        ]);
    
        // Process the image upload after validation has passed
        if (request()->hasFile('image')) {
            $image = request()->file('image');
            $folder = 'aboutus'; // Define your folder for uploads
            $imageName = FileUploadHelper::uploadFile($image, $folder); // Assuming this helper uploads the file and returns its name
        } else {
            return back()->withErrors(['image' => 'Image upload failed.']);
        }
    
        // Insert data into the table including the uploaded image name
        AboutUsPage::create([
            'title1' => request()->title1,
            'title2' => request()->title2,
            'our_vision' => request()->our_vision,
            'vision' => request()->vision,
            'our_messege' => request()->our_messege,
            'messege' => request()->messege,
            'our_goals' => request()->our_goals,
            'goals' => request()->goals,
            'image' => $imageName
        ]);
        return to_route('backend.aboutus')->with('success-create', 'تم اضافة العنصر بنجاح');
    }

    public function update(AboutUsPage $singleAboutUsPage) {
        request()->validate([
            'title1' => ['required'],
            'title2' => ['required'],
            'our_vision' => ['required'],
            'vision' => ['required'],
            'our_messege' => ['required'],
            'messege' => ['required'],
            'our_goals' => ['required'],
            'goals' => ['required'],
        ]);
    
        // Check and upload image if present
        $uploadedImages = FileUploadHelper::uploadMultipleFiles([
            'image' => request()->file('image')
        ], 'aboutus');
    
        // Delete old image if new one are uploaded
        if (!empty($uploadedImages['image'])) {
            if (file_exists(public_path('uploads/aboutus/' . $singleAboutUsPage->image))) {
                unlink(public_path('/uploads/aboutus/' . $singleAboutUsPage->image));  
            }
            $singleAboutUsPage->image = $uploadedImages['image'];
        }
    
        // Update the other fields
        $singleAboutUsPage->update([
            'title1' => request()->title1,
            'title2' => request()->title2,
            'our_vision' => request()->our_vision,
            'vision' => request()->vision,
            'our_messege' => request()->our_messege,
            'messege' => request()->messege,
            'our_goals' => request()->our_goals,
            'goals' => request()->goals
        ]);
    
        return to_route('backend.aboutus')->with('success-update', 'تم تحديث العنصر بنجاح');
    }
}
