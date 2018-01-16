<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    public function language () {
        return $this->belongsTo(Language::class, 'language_id');
    }

    public static function getTestimonial($language_code){
        $language_id = Language::getLanguageByCode($language_code)->id;

        return Testimonial::where('language_id', $language_id)->get();
    }

    public static function getTestimonialsByLanguageCode($language_code){
        $language_id = Language::getLanguageByCode($language_code)->id;

        return Testimonial::where('language_id', $language_id)->get();
    }
}
