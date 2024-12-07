<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactInfo extends Model
{
    protected $fillable = [
        'phone',
        'email',
    ];

    // Specify the table name explicitly
    protected $table = 'contactinformation';
}
