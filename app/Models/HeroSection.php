<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeroSection extends Model
{
    use HasFactory;
    protected $fillable = [
        'title1',
        'title2',
        'button_text',
        'button_url',
        'image'
    ];

    // Specify the table name explicitly
    protected $table = 'herosection';

    public function getImageUrlAttribute()
    {
        return asset('uploads/herosection/' . $this->image);
    }
}
