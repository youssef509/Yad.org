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
        'image'
    ];

    // Specify the table name explicitly
    protected $table = 'slider';

    public function getImageUrlAttribute()
    {
        return asset('uploads/slider/' . $this->image);
    }
}
