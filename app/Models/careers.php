<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Spatie\Translatable\Events\TranslationHasBeenSet;

class careers extends Model
{
    use HasTranslations;

    public $translatable = ['paragraph1','paragraph2'];

    protected $table = 'careers';

    protected $fillable = [
        'paragraph1', 'paragraph2', 'email',
    ];
}
