<?php

namespace App\View\Composers;


use illuminate\View\View;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use App\Models\SEOManagement;

class SEOSetupComposer
{
    function compose()
    {
        $seoData = SEOManagement::first();
        if ($seoData) {
            $keywords = explode(',', $seoData->keywords);
            SEOMeta::setTitle($seoData->title, false);
            SEOMeta::setDescription($seoData->meta);
            SEOMeta::addKeyword($keywords);
            OpenGraph::setDescription($seoData->meta);
            OpenGraph::setTitle($seoData->title);
            OpenGraph::addImage(asset('front/images/asset-2.svg'));
            TwitterCard::setType('summary_large_image'); // type of twitter card tag
            TwitterCard::setTitle($seoData->title); // title of twitter card tag
            TwitterCard::setDescription($seoData->meta); // description of twitter card tag
            TwitterCard::setImage(asset('front/images/asset-2.svg'));
        }
    }
}
