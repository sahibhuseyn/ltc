<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Translation extends Model
{
    protected $fillable = ['language_id', 'file_name', 'key', 'value'];

    public function language () {
        return $this->belongsTo(Language::class, 'language_id');
    }

    public static function getLang($file_name, $language)
    {
        $data = Translation::join('languages', 'languages.id', '=', 'translations.language_id')
            ->where('file_name', $file_name)
            ->where('code', $language)->get();
        $sorted = [];
        foreach ($data as $key => $value) {
            $sorted[$value->key] = $value->value;
        }
        return $sorted;
    }

    public static function getTranslationByFileName($file_name) {
        return Translation::where('file_name', $file_name)->get();
    }

    public static function getTranslationByKey($key) {
        return Translation::where('key', $key)->get();
    }

    public static function getAllFileNameList() {
        return Translation::distinct()->get(['file_name']);
    }

    public static function getTranslationByFileNameAndKeyAndLanguage($file_name, $key, $language_id) {
        return Translation::where('key', $key)
            ->where('language_id', $language_id)
            ->where('file_name', $file_name)
            ->first();
    }

    public static function checkIfTranslationExists($language_id, $file_name, $key) {
        return Translation::where('language_id', $language_id)
            ->where('file_name', $file_name)
            ->where('key', $key)
            ->first();
    }
}
