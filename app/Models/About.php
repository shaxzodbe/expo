<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'subtitle',
        'description',
        'main_image',
        'floating_image',
        'video_link',
        'vector_1',
        'vector_2',
        'vector_3',
    ];
}
