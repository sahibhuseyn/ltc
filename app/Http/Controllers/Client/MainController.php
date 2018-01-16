<?php

namespace App\Http\Controllers\Client;

use App\Course;
use App\Post;
use App\Slider;
use App\Teacher;
use App\Testimonial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function index(){
        $language = session('language');
        $courses = Course::getCourses($language);
        $testimonials = Testimonial::getTestimonial($language);
        $posts = Post::getPostsDesc($language);
        $teachers = Teacher::getTeachers($language);
        $sliders = Slider::getSliders($language);

        return view('client.index.index', compact("courses", "teachers", "testimonials", "posts", "galleries", "sliders"));
    }
}
