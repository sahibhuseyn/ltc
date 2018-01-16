<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    public function language () {
        return $this->belongsTo(Language::class, 'language_id');
    }

    public static function getTeachers ($language_code) {
        $language_id = Language::getLanguageByCode($language_code)->id;
        return Teacher::where('language_id', $language_id)->get();
    }


    public static function getTeacherBySlug($slug){
        return Teacher::where('slug', $slug)->first();
    }

    public static function getTeachersByLanguage ($language_code) {
        $language_id = Language::getLanguageByCode($language_code)->id;
        return Teacher::where('language_id', $language_id)->get();
    }
}
