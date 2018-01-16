<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    public static function getSliders ($language_code){

        $language_id = Language::getLanguageByCode($language_code)->id;

        return Slider::where('language_id', $language_id)->get();
    }
}
