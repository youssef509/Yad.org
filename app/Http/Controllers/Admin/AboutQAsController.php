<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\AboutQA;
use Illuminate\Http\Request;

class AboutQAsController extends Controller
{
    public function index() {
        $QAFromDB = AboutQA::all();
        return view('backend.aboutus-qa', ['AllQA'=> $QAFromDB]);
    }

    public function store() {
        // Validate the inputs including both images
        request()->validate([
            'question' => ['required'],
            'answer' => ['required']
        ]);
    
        AboutQA::create([
            'question' => request()->question,
            'answer' => request()->answer
        ]);
        return to_route('backend.aboutqa')->with('success-create', 'تم اضافة العنصر بنجاح');
    }

    public function destroy($OneQaID) {
        $QAFromDB = AboutQA::find($OneQaID);
        $QAFromDB -> delete();
        return to_route('backend.aboutqa')->with('success', 'تم حذف العنصر بنجاح');
    }
}
