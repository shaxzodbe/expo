<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Speaker extends Model
{
    protected $fillable = [
        'name',
        'title',
        'image',
        'facebook',
        'instagram',
        'twitter',
        'pinterest',
    ];
}
