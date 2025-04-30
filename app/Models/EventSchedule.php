<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class EventSchedule extends Model
{
    use HasFactory, HasTranslations;

    protected $fillable = [
        'title',
        'image',
        'date',
        'start_time',
        'end_time',
        'location',
        'description',
    ];

    public $translatable = [
        'title',
        'description',
    ];
}
