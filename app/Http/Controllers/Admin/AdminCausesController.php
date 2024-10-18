<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Helpers\FileUploadHelper;
use App\Models\Causes;
use Illuminate\Http\Request;

class AdminCausesController extends Controller
{
    public function index() {
        $cause = Causes::all();
        return view('backend.causes', ['causes'=> $cause]);
    }

    public function store() {
        // Validate the inputs including the image
        request()->validate([
            'title' => ['required'],
            'text1' => ['required'],
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
        ]);
    
        // Process the image upload after validation has passed
        if (request()->hasFile('image')) {
            $image = request()->file('image');
            $folder = 'causes'; // Define your folder for uploads
            $imageName = FileUploadHelper::uploadFile($image, $folder); // Assuming this helper uploads the file and returns its name
        } else {
            return back()->withErrors(['image' => 'Image upload failed.']);
        }
    
        // Insert data into the Causes table
        Causes::create([
            'title' => request()->title,
            'text1' => request()->text1,
            'text2' => request()->text2,
            'image' => $imageName, // Use the uploaded image name
        ]);
    
        // Redirect
        return to_route('backend.causes')->with('success-create', 'تم اضافة العنصر بنجاح');
        }
    
        public function edit($CauseId) {
            $cause = Causes::where('id', $CauseId)->first();
            // dd($cause);
            return view('backend.cause-edit', ['causes' => $cause]);
        }
    
        public function update($CauseId)
        {
            $cause = Causes::find($CauseId);
            request()->validate([ 
                'image' => ['image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            ]);
            $title = request()->title;
            $text1 = request()->text1;
            $text2 = request()->text2;
           
            // Handle image upload if a new image is provided
            if (request()->hasFile('image')) {
                // Delete the old image
                $oldImagePath = public_path('uploads/slider/' . $cause->image);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath); // Deletes the old image file
                }
                // Upload new image
                $image = request()->file('image');
                $folder = 'causes';
                $imageName = FileUploadHelper::uploadFile($image, $folder);
            } else {
                $imageName = $cause->image; // Keep the current image
            }
    
            $cause->update([
                'title' => $title,
                'text1' => $text1,
                'text2' => $text2,
                'image' => $imageName
            ]);
    
            return to_route('backend.causes')->with('success-update', 'تم تحديث العنصر بنجاح');
        }
    
        public function destroy($CauseId) {
            $Causes = Causes::find($CauseId);
            $Causes -> delete();
            return to_route('backend.causes')->with('success', 'تم حذف العنصر بنجاح');
        }
}
