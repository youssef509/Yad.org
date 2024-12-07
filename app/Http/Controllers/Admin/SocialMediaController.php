<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\SocialMedia;
use Illuminate\Http\Request;

class SocialMediaController extends Controller
{
    public function index() {
        $DataFromDB = SocialMedia::first();
        return view('backend.socialmedia', ['Data' => $DataFromDB]);
    }

    public function store() {
        // Validate the inputs including the image
        request()->validate([
            'facebook' => ['required'],
            'instagram' => ['required'],
            'tiktok' => ['required'],
            'linkedin' => ['required'],
        ]);
       
        SocialMedia::create([
            'facebook' => request()->facebook,
            'instagram' => request()->instagram,
            'tiktok' => request()->tiktok,
            'linkedin' => request()->linkedin,
        ]);
        return to_route('settings-socialmedia')->with('success-create', 'تم اضافة العنصر بنجاح');
    }

    public function update(SocialMedia $Data) {
        request()->validate([
            'facebook' => ['required'],
            'instagram' => ['required'],
            'tiktok' => ['required'],
            'linkedin' => ['required'],
        ]);

        // Update the other fields
        $Data->update([
            'facebook' => request()->facebook,
            'instagram' => request()->instagram,
            'tiktok' => request()->tiktok,
            'linkedin' => request()->linkedin,
        ]);
        return to_route('settings-socialmedia')->with('success-update', 'تم تحديث العنصر بنجاح');
    }
}
