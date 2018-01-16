<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $fillable = ['name', 'code', 'status', 'position', 'image'];

    public static function getLanguageByCode($code)
    {
        $data = Language::where('code', $code)->get();
        $reseted_data = reset($data);
        return reset($reseted_data);
    }

    public static function getAllLanguages() {
        return Language::all();
    }
}
