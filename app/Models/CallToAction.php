<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class CallToAction extends Model
{
    use HasTranslations;

    protected $fillable = [
        'subtitle',
        'title',
        'description',
        'button_text',
        'button_url',
        'image',
        'background_image',
        'type',
        'map_embed_url',
    ];

    public array $translatable = [
        'subtitle',
        'title',
        'description',
        'button_text',
    ];
}
