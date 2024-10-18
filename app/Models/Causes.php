<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Causes extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'text1',
        'text2',
        'image'
    ];
    
    // Specify the table name explicitly
    protected $table = 'causes';

    public function getImageUrlAttribute()
    {
        return asset('uploads/causes/' . $this->image);
    }
}
