<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class twitter extends Model
{
    protected $table = 'twitters';

    protected $fillable = [
        'twitter_link'
    ];
}
