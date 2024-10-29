<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class ContentManagement extends Model
{
    use HasFactory, HasTranslations;

    protected $fillable = [
        'key',
        'title',
        'value',
        'is_active',
    ];
    public $translatable = [
        'title',
        'value'
    ];


}
