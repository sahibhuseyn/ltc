<?php

namespace App\Http\Controllers\Admin;

use App\Language;
use App\Translation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;

class TranslationController extends Controller
{
    public function listKeys($file_name) {
        $languages = Language::getAllLanguages();
        $keys = Translation::getTranslationByFileName($file_name);
        $keys = $this->sortKeys($keys);

        return view('admin.translations.translations', compact('keys', 'file_name', 'languages'));

    }

    public function add ($file_name, $key, Request $req) {
        $language = Language::find($req->language_id);
        $language_code = $language->code;

        $file = '../resources/lang/' . $language_code . '/' . $file_name . '.php';
        $exists_file = file_exists($file);
        $exists_translation = Translation::checkIfTranslationExists($req->language_id, $file_name, $key);

        if ($exists_translation) {
            Session::flash('fail', 'Translation already exists');
            return back();
        } else {
            Translation::create([
                'language_id' => $req->language_id,
                'file_name' => $file_name,
                'key' => $key,
                'value' => $req->value
            ]);
        }

        if (!$exists_file) {
            $handle = fopen($file, 'w');

            $data = "<?php
                use App\Translation;
                
                return Translation::getLang('$file_name', '$language_code');
                ";

            fwrite($handle, $data);
        }

        Session::flash('success', 'Successfully created.');
        return back();
    }

    public function update ($file_name, $key, Request $req) {
        $trans = Translation::getTranslationByFileNameAndKeyAndLanguage($file_name, $key, $req->language_id);

        if ($trans) {
            $trans->value = $req->value;
            $trans->update();

            Session::flash('success', 'Successfully updated !');
        } else {
            Session::flash('fail', 'Error Occured. Please try again.');
        }

        return back();
    }

    public function sortKeys ($keys) {
        $sorted = [];

        foreach ($keys as $count => $key) {
            foreach ($keys as $sec_count => $second) {
                if ($key->key == $second->key) {
                    $sorted[$key->key][$sec_count] = $second;
                }
            }
        }
        return $sorted;
    }
}
