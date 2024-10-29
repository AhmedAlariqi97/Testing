<?php

namespace App\View\Composers;

use App\Models\ContentManagement;
use App\Models\ImageManagement;
use illuminate\View\View;

class FrontDataComposer
{

    public function compose(View $view)
    {


        $content = ContentManagement::all()->where('is_active', '1')->groupBy('key');
        $images = ImageManagement::all()->where('is_active', '1')->groupBy('key');

        $view->with('content', $content)
            ->with('images', $images);
    }
}
