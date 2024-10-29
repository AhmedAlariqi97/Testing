<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Exception;

class ImageManagement extends Model
{
    use HasFactory, HasTranslations;

    protected $fillable = [
        'key',
        'image',
        'title',
        'is_active'
    ];
    public $translatable = [
        'title',
        'icon'

    ];


    public static function boot()
    {
        Parent::boot();
        self::deleting(
            function ($item) {
                $path = public_path() . '/assets/uploaded_images/' . $item->image;
                try {
                    if (file_exists($path)) {
                        unlink($path);
                    };
                } catch (Exception $e) {
                    //     return back()->with(['error' => __('feedBackMessage.deleteFailed')]);
                }
            }
        );
    }
}
