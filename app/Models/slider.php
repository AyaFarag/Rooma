<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Spatie\Translatable\Events\TranslationHasBeenSet;

class slider extends Model
{
    use HasTranslations;

    public $translatable = ['title','content'];

    protected $table = 'sliders';

    protected $fillable = [
        'title','content','image'
    ];
}
