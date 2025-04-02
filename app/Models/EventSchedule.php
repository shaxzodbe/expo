<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventSchedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image',
        'date',
        'start_time',
        'end_time',
        'location',
        'description',
    ];
}
