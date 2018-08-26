<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Spatie\Translatable\Events\TranslationHasBeenSet;

class news extends Model
{
    use HasTranslations;

    public $translatable = ['title','content'];

    protected $table = 'news';

    protected $fillable = [
        'title','content','image'
    ];
}
