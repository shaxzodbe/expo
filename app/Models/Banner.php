<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'heading',
        'background_image',
        'video_url',
        'register_button_text',
        'register_button_link',
        'view_more_button_text',
        'view_more_button_link',
    ];

    protected $casts = [
        'attachments' => 'array',
    ];
}
