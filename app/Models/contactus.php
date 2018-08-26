<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Spatie\Translatable\Events\TranslationHasBeenSet;

class contactus extends Model
{
    use HasTranslations;

    public $translatable = ['address','phone','fax'];

    protected $table = 'contactuses';

    protected $fillable = [
        'address', 'phone', 'fax',
    ];
}
