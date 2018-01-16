<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    public function language () {
        return $this->belongsTo(Language::class, 'language_id');
    }

    public static function getGallery ($language_code) {
        $language_id = Language::getLanguageByCode($language_code)->id;

        return Gallery::where('language_id', $language_id)->get();
    }

    public static function getGalleriesDesc($language_code){

        $language_id = Language::getLanguageByCode($language_code)->id;
        $galleries = Gallery::where('language_id', $language_id)->orderBy('created_at','desc')->take(12)->get();

        return $galleries;
    }

    public static function getAllCategories($language_code){
        $language_id = Language::getLanguageByCode($language_code)->id;

        return Gallery::distinct()->where('language_id', $language_id)->get(['category']);
    }
}
