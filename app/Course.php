<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function language () {
        return $this->belongsTo(Language::class, 'language_id');
    }

    public static function getCourses ($language_code) {
        $language_id = Language::getLanguageByCode($language_code)->id;
        return Course::where('language_id', $language_id)->paginate(10);
    }

    public static function getCourseBySlug ($slug) {
        return Course::where('slug', $slug)->first();
    }

    public static function getCoursesByCategoryId($category_id, $language_code){
        $language_id = Language::getLanguageByCode($language_code)->id;

        return Course::where('id', $category_id)->where('language_id', $language_id)->paginate(8);
    }
}
