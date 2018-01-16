<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function language () {
        return $this->belongsTo(Language::class, 'language_id');
    }

    public static function getCategoriesByLanguage($language_code) {
        $language = Language::getLanguageByCode($language_code);

        return Category::where('language_id', $language->id)->get();
    }
}
