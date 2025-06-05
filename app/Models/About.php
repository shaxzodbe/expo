<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class About extends Model
{
    use HasFactory, HasTranslations;

    protected $fillable = [
        'title',
        'subtitle',
        'description',
        'main_image',
        'floating_image',
        'video_link',
        'conference_title',
        'conference_description',
    ];

    public array $translatable = [
        'title',
        'subtitle',
        'description',
        'conference_title',
        'conference_description',
    ];
}
