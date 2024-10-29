<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Spatie\Translatable\HasTranslations;
use App\Models\Tags\Tag;
use Illuminate\Support\Str;

class SEOManagement extends Model
{
    use HasFactory, HasTranslations;

    protected $table = 'seo_management';

    protected $fillable = [
        'title',
        'meta',
        'keywords',
    ];

    protected $translatable = [
        'title',
        'meta',
        'keywords'
    ];


    public static function setSeo($data, $customKewords = false)
    {
        if ($customKewords) {
            $keywords = !$data->tags->isEmpty() ? explode(',', $data->tags[0]->tag_ids) : '';
            if ($keywords != '') {
                $tags =   Tag::whereIN('id', $keywords)->pluck('title')->toarray();
                SEOMeta::addKeyword($tags);
            }
        }
        $details = strip_tags(Str::limit($data->details, 65));
        $image = $data->getFirstMediaUrl('covers', 'thumb') == '' ?
            asset('admin\img\logo.png') : $data->getFirstMediaUrl('covers', 'thumb');
        SEOMeta::setTitle($data->title, false);
        SEOMeta::setDescription($details);
        OpenGraph::setDescription($details);
        OpenGraph::setTitle($data->title);
        OpenGraph::addImage($image);
        TwitterCard::setType('summary_large_image'); // type of twitter card tag
        TwitterCard::setTitle($data->title); // title of twitter card tag
        TwitterCard::setDescription($details); // description of twitter card tag
        TwitterCard::setImage(asset($image));
    }
}
