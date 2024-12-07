<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\ContactInfo;
use Illuminate\Http\Request;

class ContactInfoController extends Controller
{
    public function index() {
        $DataFromDB = ContactInfo::first();
        return view('backend.contactinfo', ['Data' => $DataFromDB]);
    }

    public function store() {
        // Validate the inputs including the image
        request()->validate([
            'phone' => ['required'],
            'email' => ['required'],
        ]);
       
        ContactInfo::create([
            'phone' => request()->phone,
            'email' => request()->email,
        ]);
        return to_route('settings-contactinfos')->with('success-create', 'تم اضافة العنصر بنجاح');
    }

    public function update(ContactInfo $Data) {
        request()->validate([
            'phone' => ['required'],
            'email' => ['required'],
        ]);

        // Update the other fields
        $Data->update([
           'phone' => request()->phone,
           'email' => request()->email,
        ]);

        return to_route('settings-contactinfos')->with('success-update', 'تم تحديث العنصر بنجاح');
    }
}
