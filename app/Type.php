<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    public function language () {
        return $this->belongsTo(Language::class, 'language_id');
    }

    public static function getTypesByLanguage($language_code) {
        $language = Language::getLanguageByCode($language_code);

        return Type::where('language_id', $language->id)->get();
    }
}
