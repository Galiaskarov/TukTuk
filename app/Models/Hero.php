<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    protected $fillable = [
        'title',
        'text',
        'description',
        'button_title',
        'button_url',
        'image_url',
    ];
}
