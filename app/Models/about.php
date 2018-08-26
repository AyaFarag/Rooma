<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Spatie\Translatable\Events\TranslationHasBeenSet;


class about extends Model
{
    use HasTranslations;

    public $translatable = ['content','title','description'];
    
    protected $table = 'abouts';

    protected $fillable = [
        'content', 'title', 'description',
    ];
}
