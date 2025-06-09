<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Blog extends Model
{
    use HasTranslations;

    protected $fillable = [
        'title',
        'content',
        'author',
        'comments_count',
        'image_url',
        'published_date',
        'status',
    ];

    public array $translatable = [
        'title',
        'content',
    ];

    public function getPublishedDateAttribute($value)
    {
        return Carbon::parse($value);
    }
}
