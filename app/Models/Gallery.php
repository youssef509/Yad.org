<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'alt'
    ];

    // Specify the table name explicitly
    protected $table = 'gallery';

    public function getImageUrlAttribute()
    {
        return asset('uploads/gallery/' . $this->image);
    }
}
