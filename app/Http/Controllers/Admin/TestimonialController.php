<?php

namespace App\Http\Controllers\Admin;

use App\Language;
use App\Testimonial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class TestimonialController extends Controller
{
    public function show ($language_code) {
        $language_id = Language::getLanguageByCode($language_code);
        $testimonials = Testimonial::getTestimonialsByLanguageCode($language_code);

        return view('admin.testimonials.testimonials', compact('testimonials', 'language_id'));
    }

    public function add ($language_id, Request $request) {

        if (!$request->name || !$request->position || !$request->image || !$request->feedback) {
            Session::flash('fail', 'Please fill all the information');

            return back();
        }

        $testimonial = new Testimonial();
        $testimonial->language_id = $request->language_id;
        $testimonial->name = $request->name;
        $testimonial->position = $request->position;
        $testimonial->feedback = $request->feedback;

        $image = $request->file('image');
        $filename  = time() . '.' . $image->getClientOriginalExtension();

        $path = public_path('uploads/');

        $image->move($path, $filename);

        $testimonial->image = $filename;

        $testimonial->save();

        Session::flash('success', 'Successfully added');

        return back();

    }

    public function update (Testimonial $testimonial, Request $request) {
        if (!$request->name || !$request->position || !$request->feedback) {
            Session::flash('fail', 'Please fill all the information');

            return back();
        }

        if ($request->image) {
            $image = $request->file('image');
            $filename  = time() . '.' . $image->getClientOriginalExtension();

            $path = public_path('uploads/');

            $image->move($path, $filename);

            $testimonial->image = $filename;

        }

        $testimonial->name = $request->name;
        $testimonial->position = $request->position;
        $testimonial->feedback = $request->feedback;
        $testimonial->save();

        Session::flash('success', 'Successfully updated');

        return back();

    }

    public function delete (Testimonial $testimonial) {
        $testimonial->delete();

        Session::flash('success', 'Successfully Deleted');

        return back();
    }
}
