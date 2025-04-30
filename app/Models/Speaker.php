<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Speaker extends Model
{
    use HasTranslations;

    protected $fillable = [
        'name',
        'title',
        'image',
        'facebook',
        'instagram',
        'twitter',
        'pinterest',
    ];

    public $translatable = [
        'name',
        'title',
    ];
}
