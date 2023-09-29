<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddGames extends Model
{
    protected $fillable = [
        'title',
        'image',
        'description',
        'play_link',
        'tags',
        'icon',
        'youtube',
        'user_id'
    ];

    protected $perPage = 8;
}

