<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Logo extends Model
{
    protected $fillable = [
        'logo_text',
        'logo_image',
        'logo_description',
    ];
}
