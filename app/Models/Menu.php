<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = [
        'name',
        'url',
        'is_button',
    ];

    protected $casts = [
        'is_button' => 'boolean',
    ];
}
