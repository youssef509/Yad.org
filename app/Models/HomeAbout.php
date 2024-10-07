<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeAbout extends Model
{
    use HasFactory;
    protected $fillable = [
        'title1',
        'title2',
        'text1',
        'text2',
        'our_vision',
        'our_messege',
        'button_text',
        'button_url',
        'image1',
        'image2',
        'video_url'
    ];

    // Specify the table name explicitly
    protected $table = 'homeabout';

    public function getImageUrlAttribute()
    {
        return asset('uploads/homeabout/' . $this->image);
    }
}
