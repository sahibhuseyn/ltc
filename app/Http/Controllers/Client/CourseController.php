<?php

namespace App\Http\Controllers\Client;

use App\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CourseController extends Controller
{
    public function courseList(){
        $language = session('language');
        $courses = Course::getCourses($language);

        return view('client.courses.courses', compact('courses'));
    }

    public function courseSingle($slug){

        $course = Course::getCourseBySlug($slug);

        if(!$course){
            return back();
        }

        return view('client.courses.single', compact('course'));
    }
}
