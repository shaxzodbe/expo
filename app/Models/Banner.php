<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Banner extends Model
{
    use HasFactory, HasTranslations;

    protected $fillable = [
        'title',
        'subtitle',
        'image',
        'video_url',
        'button_text',
        'button_link',
        'button_text_secondary',
        'button_link_secondary',
        'background_color',
    ];

    public array $translatable = [
        'title',
        'subtitle',
        'button_text',
        'button_text_secondary',
    ];
}
