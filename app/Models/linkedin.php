<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class linkedin extends Model
{
    protected $table = 'linkedins';

    protected $fillable = [
        'linkedin_link'
    ];
}
