<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\SEO;
use Illuminate\Http\Request;

class CausesSeoController extends Controller
{
    public function index() {
        $DataFromDB = SEO::where('page_name', 'home')->first();
        return view('backend.Seo.causespage', ['Data' => $DataFromDB]);
    }

    public function store() {
        $page_name = "causes";
        // Validate the inputs including the image
        request()->validate([
            'meta_title' => ['required'],
            'meta_keywords' => ['required'],
            'meta_description' => ['required'],
        ]);
       
        SEO::create([
            'page_name' => $page_name,
            'meta_title' => request()->meta_title,
            'meta_keywords' => request()->meta_keywords,
            'meta_description' => request()->meta_description,
        ]);
        return to_route('seo-homepage')->with('success-create', 'تم اضافة العنصر بنجاح');
    }

    public function update(SEO $Data) {
        request()->validate([
            'meta_title' => ['required'],
            'meta_keywords' => ['required'],
            'meta_description' => ['required'],
        ]);

        // Update the other fields
        $Data->update([
            'meta_title' => request()->meta_title,
            'meta_keywords' => request()->meta_keywords,
            'meta_description' => request()->meta_description,
        ]);
        return to_route('seo-homepage')->with('success-update', 'تم تحديث العنصر بنجاح');
    }
}
