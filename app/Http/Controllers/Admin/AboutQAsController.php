<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\AboutQA;
use Illuminate\Http\Request;

class AboutQAsController extends Controller
{
    public function index() {
      
        return view('backend.aboutus-qa');
    }

    public function store() {
        // Validate the inputs including both images
        request()->validate([
            'question' => ['required'],
            'answer' => ['required'],
        ]);
    
        AboutQA::create([
            'question' => request()->question,
            'answer' => request()->answer
        ]);
        return to_route('backend.aboutus')->with('success-create', 'تم اضافة العنصر بنجاح');
    }
}
