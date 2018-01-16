<?php

namespace App\Http\Controllers\Client;

use App\Teacher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function about(){
        $language = session('language');
        $teachers = Teacher::getTeachers($language);


        return view('client.about.about', compact('teachers'));
    }
}
