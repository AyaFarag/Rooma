<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class youtube extends Model
{
    protected $table = 'youtubes';

    protected $fillable = [
        'youtube_link'
    ];
}
