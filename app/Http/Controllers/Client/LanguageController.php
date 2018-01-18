<?php

namespace App\Http\Controllers\Client;

use App\Language;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LanguageController extends Controller
{
    public function changeLanguage ($code) {
        $exists = Language::getLanguageByCode($code);

        if ($exists) {
            session(['language' => $code]);
        }

        return back();
    }
}
