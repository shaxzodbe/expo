<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Countdown extends Model
{
    use HasFactory, HasTranslations;

    protected $fillable = [
        'title',
        'button_text',
        'button_link',
        'event_time',
    ];

    public $translatable = [
        'title',
        'button_text',
    ];
}
