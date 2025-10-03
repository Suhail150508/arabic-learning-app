<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LettersTwo extends Model
{
    use HasFactory;

    protected $fillable = [
        'char', 'name','sound', 'example', 'sort_order'
    ];

    protected $casts = [
        'sound' => 'array',
        'example' => 'array',
    ];
}
