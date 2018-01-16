<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Course;
use App\Language;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class CourseController extends Controller
{
    public function show ($language_code) {
        $language_id = Language::getLanguageByCode($language_code);
        $courses = Course::getCourses($language_code);
        $categories = Category::getCategoriesByLanguage($language_code);

        return view('admin.courses.courses', compact('courses', 'language_id', 'categories'));
    }

    public function add ($language_id, Request $request) {
        $slug = str_slug($request->title);
        $exists = Course::where('slug', $slug)->first();

        if ($exists) {
            Session::flash('fail', 'Post with the same name already exists');

            return back();
        }

        if (!$request->image) {
            Session::flash('fail', 'Please upload an image');

            return back();
        }

        $course = new Course;
        $course->language_id = $language_id;
        $course->category_id = $request->category;
        $course->slug = $slug;
        $course->title = $request->title;
        $course->type = $request->type;
        $course->short_description = $request->short_description;
        $course->description = $request->description;
        $course->price = $request->price;
        $course->class_time = $request->class_time;
        $course->course_duration = $request->course_duration;
        $course->selected = $request->selected;

        $image = $request->file('image');
        $filename  = time() . '.' . $image->getClientOriginalExtension();

        $path = public_path('uploads/');

        $image->move($path, $filename);

        $course->image = $filename;

        $course->save();
        Session::flash('success', 'Successfully added');

        return back();
    }

    public function edit (Course $course, $code) {
        $categories = Category::getCategoriesByLanguage($code);

        return view('admin.courses.edit', compact('course', 'categories'));
    }

    public function update (Course $course, Request $request) {
        $slug = str_slug($request->title);
        $exists = Course::getCourseBySlug($slug);

        if ($request->image) {

            $image = $request->file('image');
            $filename  = time() . '.' . $image->getClientOriginalExtension();

            $path = public_path('uploads/');

            $image->move($path, $filename);

            $course->image = $filename;
        }

        if (!$exists) {
            $course->title = $request->title;
            $course->slug = $slug;
            $course->category_id = $request->category;
            $course->short_description = $request->short_description;
            $course->description = $request->description;
            $course->type = $request->type;
            $course->price = $request->price;
            $course->class_time = $request->class_time;
            $course->course_duration = $request->course_duration;
            $course->selected = $request->selected;

            $course->update();
        } else {
            if ($exists->id == $course->id) {
                $course->title = $request->title;
                $course->slug = $slug;
                $course->category_id = $request->category;
                $course->short_description = $request->short_description;
                $course->description = $request->description;
                $course->type = $request->type;
                $course->price = $request->price;
                $course->class_time = $request->class_time;
                $course->course_duration = $request->course_duration;
                $course->selected = $request->selected;

                $course->update();

            } else if ($exists) {
                Session::flash('fail', 'Post with the same name already exists');

                return back();
            }
        }

        Session::flash('success', 'Successfully updated');
        return back();
    }

    public function delete (Course $course) {
        $course ->delete();

        Session::flash('success', 'Successfully Deleted');

        return back();
    }
}
