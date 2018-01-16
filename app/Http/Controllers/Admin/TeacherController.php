<?php

namespace App\Http\Controllers\Admin;

use App\Language;
use App\Teacher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class TeacherController extends Controller
{
    public function show ($language_code) {
        $language_id = Language::getLanguageByCode($language_code);
        $teachers = Teacher::getTeachersByLanguage($language_code);

        return view('admin.teachers.teachers', compact('teachers', 'language_id'));
    }

    public function add ($language_id, Request $request) {

        if (!$request->title || !$request->name || !$request->image || !$request->short_description) {
            Session::flash('fail', 'Please fill all the information');

            return back();
        }

        $teacher = new Teacher;
        $teacher->language_id = $request->language_id;
        $teacher->name = $request->name;
        $teacher->title = $request->title;
        $teacher->short_description = $request->short_description;

        $image = $request->file('image');
        $filename  = time() . '.' . $image->getClientOriginalExtension();

        $path = public_path('uploads/');

        $image->move($path, $filename);

        $teacher->image = $filename;

        $teacher->save();

        Session::flash('success', 'Successfully added');

        return back();

    }

    public function update (Teacher $teacher, Request $request) {
        if (!$request->title || !$request->name || !$request->short_description) {
            Session::flash('fail', 'Please fill all the information');

            return back();
        }

        if ($request->image) {
            $image = $request->file('image');
            $filename  = time() . '.' . $image->getClientOriginalExtension();

            $path = public_path('uploads/');

            $image->move($path, $filename);

            $teacher->image = $filename;

        }

        $teacher->name = $request->name;
        $teacher->title = $request->title;
        $teacher->short_description = $request->short_description;
        $teacher->save();

        Session::flash('success', 'Successfully updated');

        return back();

    }

    public function delete (Teacher $teacher) {
        $teacher->delete();

        Session::flash('success', 'Successfully Deleted');

        return back();
    }
}
