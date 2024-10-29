<?php

namespace App\Models\Tags;

use App\Models\Posts\Post;
use App\Models\Posts\PostTag;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Arr;

class Tag extends Model
{
    use HasFactory;
    protected $fillable = ['title'];

    public static function getTagsLocaleString()
    {
        $tags = PostTag::get('tag_ids')->toArray();
        $tagsLocal = Arr::pluck($tags, 'tag_ids.' . App::getLocale() . '');
        $filteredTags = array_filter($tagsLocal, function ($item) {
            return $item != " ";
        });
        $tagIdsArr = explode(',', implode(',', $filteredTags));
        $tagsTitles = Tag::whereIn('id', $tagIdsArr)->pluck('title');
        $tagsString =  $tagsTitles->implode(', ');
        return  $tagsString;
    }

    // public function posts()
    // {
    //     return $this->belongsToMany(Post::class);
    // }
}
