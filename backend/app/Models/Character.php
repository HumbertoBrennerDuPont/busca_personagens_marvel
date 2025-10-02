<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Character extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image_url',
        'occupation',
        'real_name',
        'first_appearance',
        'description'
    ];
}

