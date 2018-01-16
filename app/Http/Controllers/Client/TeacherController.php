<?php

namespace App\Http\Controllers\Client;

use App\Teacher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TeacherController extends Controller
{
    public function teacherList(){
        $language = session('language');
        $teachers = Teacher::getTeachers($language);

        return view('client.teachers.teachers', compact('teachers'));
    }

    public function teacherSingle($slug){

        $teacher = Teacher::getTeacherBySlug($slug);

        if(!$teacher){
            return back();
        }

        return view('client.teachers.single', compact('teacher'));
    }
}
