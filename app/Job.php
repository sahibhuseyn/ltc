<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    public function language () {
        return $this->belongsTo(Language::class, 'language_id');
    }

    public static function getJobs($language_code){
        $language_id = Language::getLanguageByCode($language_code)->id;

        return Job::where('language_id', $language_id)->get();
    }

    public static function getJobsByLanguage($language_code) {
        $language = Language::getLanguageByCode($language_code);

        return Job::where('language_id', $language->id)->get();
    }

    public static function getJobBySlug ($slug) {
        return Job::where('slug', $slug)->first();
    }
}
