<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;

    protected $fillable = [
        'text_1',
        'text_2',
        'button1_text',
        'button2_text',
        'button1_url',
        'button2_url',
        'image'
    ];

    // Specify the table name explicitly
    protected $table = 'slider';

    public function getImageUrlAttribute()
    {
        return asset('uploads/slider/' . $this->image);
    }
}
