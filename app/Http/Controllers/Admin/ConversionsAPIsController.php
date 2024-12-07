<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\ConversionsAPIs;
use Illuminate\Http\Request;

class ConversionsAPIsController extends Controller
{
    public function index() {
        $DataFromDB = ConversionsAPIs::first();
        return view('backend.conversionsAPI', ['Data' => $DataFromDB]);
    }

    public function store() {
        // Validate the inputs including the image
        request()->validate([
            'google' => ['required'],
            'meta' => ['required'],
            'tiktok' => ['required'],
            'linkedin' => ['required'],
        ]);
       
        ConversionsAPIs::create([
            'google' => request()->google,
            'meta' => request()->meta,
            'tiktok' => request()->tiktok,
            'linkedin' => request()->linkedin,
        ]);
        return to_route('settings-ConversionsAPIs')->with('success-create', 'تم اضافة العنصر بنجاح');
    }

    public function update(ConversionsAPIs $Data) {
        request()->validate([
            'google' => ['required'],
            'meta' => ['required'],
            'tiktok' => ['required'],
            'linkedin' => ['required'],
        ]);

        // Update the other fields
        $Data->update([
            'google' => request()->google,
            'meta' => request()->meta,
            'tiktok' => request()->tiktok,
            'linkedin' => request()->linkedin,
        ]);
        return to_route('settings-ConversionsAPIs')->with('success-update', 'تم تحديث العنصر بنجاح');
    }
}
