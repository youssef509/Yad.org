<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Helpers\FileUploadHelper;
use App\Models\Slider;

use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index() {
        $SliderFromDB = Slider::all();
        return view('backend.slider', ['sliders'=> $SliderFromDB]);
    }

    public function store() {
    // Validate the inputs including the image
    request()->validate([
        'text_1' => ['required'],
        'text_2' => ['required'],
        'image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
        'button1_link' => ['url:http,https'],
        'button2_link' => ['url:http,https']
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
    return to_route('backend.slider')->with('success-create', 'تم اضافة العنصر بنجاح');
    }

    public function edit($sliderId) {
        $SliderFromDB = Slider::where('id', $sliderId)->first();
        return view('backend.edit-slider', ['slider' => $SliderFromDB]);
    }

    public function update($sliderId)
    {
        request()->validate([ 
            'image' => ['image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'button1_link' => ['url:http,https'],
            'button2_link' => ['url:http,https']
        ]);

        $text_1 = request()->text_1;
        $text_2 = request()->text_2;
        $button1_text = request()->button1_text;
        $button2_text = request()->button2_text;
        $button1_url = request()->button1_url;
        $button2_url = request()->button2_url;

        $SliderFromDB = Slider::find($sliderId);

        // Handle image upload if a new image is provided
        if (request()->hasFile('image')) {
            // Delete the old image
            $oldImagePath = public_path('uploads/slider/' . $SliderFromDB->image);
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath); // Deletes the old image file
            }
            // Upload new image
            $image = request()->file('image');
            $folder = 'slider';
            $imageName = FileUploadHelper::uploadFile($image, $folder);
        } else {
            $imageName = $SliderFromDB->image; // Keep the current image
        }

        $SliderFromDB->update([
            'text_1' => $text_1,
            'text_2' => $text_2,
            'button1_text' => $button1_text,
            'button2_text' => $button2_text,
            'button1_url' => $button1_url,
            'button2_url' => $button2_url,
            'image' => $imageName
        ]);

        return to_route('backend.slider')->with('success-update', 'تم تحديث العنصر بنجاح');
    }

    public function destroy($sliderId) {
        $SliderFromDB = Slider::find($sliderId);
        $SliderFromDB -> delete();
        return to_route('backend.slider')->with('success', 'تم حذف العنصر بنجاح');
    }

}
