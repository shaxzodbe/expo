<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Testimonial extends Model
{
    use HasFactory, HasTranslations;

    protected $fillable = [
        'name',
        'position',
        'company',
        'message',
        'rating',
        'image',
    ];

    public $translatable = [
        'name',
        'company',
        'message',
    ];
}
