<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public static function getEvents ($language_code) {
        $language_id = Language::getLanguageByCode($language_code)->id;

        return Event::where('language_id', $language_id)->get();
    }

}
