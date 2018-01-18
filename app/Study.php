<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Study extends Model
{
    public function language () {
        return $this->belongsTo(Language::class, 'language_id');
    }

    public function type () {
        return $this->belongsTo(Type::class, 'type_id');
    }

    public static function getStudies ($language_code){
        $language_id = Language::getLanguageByCode($language_code)->id;

        return Study::where('language_id', $language_id)->paginate(9);
    }

    public static function getStudyByLanguageCode($language_code) {
        $language = Language::getLanguageByCode($language_code);

        return Study::where('language_id', $language->id)->get();
    }

    public static function getStudiesDesc($language_code){

        $language_id = Language::getLanguageByCode($language_code)->id;
        $studies = Study::where('language_id', $language_id)->orderBy('created_at','desc')->take(9)->get();

        return $studies;
    }

    public static function getStudyBySlug ($slug) {
        return Study::where('slug', $slug)->first();
    }
    public static function getStudyByTypeId($type_id, $language_code){
        $language_id = Language::getLanguageByCode($language_code)->id;

        return Study::where('type_id', $type_id)->where('language_id', $language_id)->paginate(8);
    }
}
