<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'is_pinned',
        'start_date',
        'end_date'
    ];

    protected $casts = [
        'is_pinned' => 'boolean',
        'start_date' => 'datetime',
        'end_date' => 'datetime'
    ];
}
