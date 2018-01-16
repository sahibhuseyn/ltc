<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public static function getPosts ($language_code){
        $language_id = Language::getLanguageByCode($language_code)->id;

        return Post::where('language_id', $language_id)->paginate(9);
    }

    public static function getPostsDesc($language_code){

        $language_id = Language::getLanguageByCode($language_code)->id;
        $posts = Post::where('language_id', $language_id)->orderBy('created_at','desc')->take(6)->get();

        return $posts;
    }

    public static function getPostBySlug ($slug) {
        return Post::where('slug', $slug)->first();
    }
}
