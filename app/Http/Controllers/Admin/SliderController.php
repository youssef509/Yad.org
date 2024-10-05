<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Helpers\FileUploadHelper;
use App\Models\Slider;

use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index()
    {
        return view('backend.slider');
    }

    public function store() 
{
    // Validate the inputs including the image
    request()->validate([
        'text_1' => ['required'],
        'text_2' => ['required'],
        'image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
    ]);

    // Process the image upload after validation has passed
    if (request()->hasFile('image')) {
        $image = request()->file('image');
        $folder = 'slider'; // Define your folder for uploads
        $imageName = FileUploadHelper::uploadFile($image, $folder); // Assuming this helper uploads the file and returns its name
    } else {
        return back()->withErrors(['image' => 'Image upload failed.']);
    }

    // Insert data into the slider table
    Slider::create([
        'text_1' => request()->text_1,
        'text_2' => request()->text_2,
        'button1_text' => request()->button1_text,
        'button2_text' => request()->button2_text,
        'button1_url' => request()->button1_url,
        'button2_url' => request()->button2_url,
        'image' => $imageName, // Use the uploaded image name
    ]);

    // Redirect to the slider list or any other route
    return to_route('backend.slider');
}

}
