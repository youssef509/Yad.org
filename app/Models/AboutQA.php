<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutQA extends Model
{
    use HasFactory;
    protected $fillable = [
        'question',
        'answer',
    ];

    protected $table = 'aboutqa';
}
