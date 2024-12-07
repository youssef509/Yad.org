<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConversionsAPIs extends Model
{
    protected $fillable = [
        'google',
        'meta',
        'tiktok',
        'linkedin'
    ];

    // Specify the table name explicitly
    protected $table = 'conversions_apis';
}
