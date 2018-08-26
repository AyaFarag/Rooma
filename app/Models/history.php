<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Spatie\Translatable\Events\TranslationHasBeenSet;

class history extends Model
{
    use HasTranslations;

    public $translatable = ['content'];

    protected $table = 'histories';

    protected $fillable = [
        'content','image'
    ];
}
