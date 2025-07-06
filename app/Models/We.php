<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class We extends Model
{
    protected $fillable = [
        'text_company',
        'text_team',
        'text_contact',
        'image',
    ];
}
