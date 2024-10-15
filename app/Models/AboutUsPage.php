<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUsPage extends Model
{
    use HasFactory;
    protected $fillable = [
        'title1',
        'title2',
        'our_vision',
        'vision',
        'our_messege',
        'messege',
        'our_goals',
        'goals',
        'image'
    ];

    protected $table = 'aboutus';

    public function getImageUrlAttribute()
    {
        return asset('uploads/aboutus/' . $this->image);
    }
}
