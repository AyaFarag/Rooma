<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class facebook extends Model
{
    protected $table = 'facebooks';

    protected $fillable = [
        'fb_link'
    ];
}
