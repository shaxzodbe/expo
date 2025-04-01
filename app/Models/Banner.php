<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;

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

    protected $casts = [
        'attachments' => 'array',
    ];
}
