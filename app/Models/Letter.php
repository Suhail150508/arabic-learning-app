<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Letter extends Model
{
    /** @use HasFactory<\Database\Factories\LetterFactory> */
    use HasFactory;

    protected $fillable = [
        'char', 'name', 'makhraj_text', 'makhraj_images', 'audio', 'examples', 'sort_order'
    ];

    protected $casts = [
        'makhraj_images' => 'array',
        'audio' => 'array',
        'examples' => 'array',
    ];
}
