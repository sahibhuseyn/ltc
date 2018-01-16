<?php

namespace App\Http\Controllers\Admin;

use App\Gallery;
use App\Language;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class GalleryController extends Controller
{
    public function listGalleries ($language_code) {
        $language_id = Language::getLanguageByCode($language_code);
        $galleries = Gallery::getGallery($language_code);

        return view('admin.gallery.galleries', compact('galleries', 'language_id'));
    }

    public function delete (Gallery $gallery) {
        $gallery->delete();

        Session::flash('success', 'Successfully Deleted');

        return back();
    }

    public function add ($language_id, Request $request) {

        if (!$request->image) {
            Session::flash('fail', 'Please upload image');

            return back();
        } else if (!$request->category) {
            Session::flash('fail', 'Category is empty');

            return back();
        }

        $gallery = new Gallery;
        $gallery->language_id = $language_id;
        $gallery->name = $request->name;
        $gallery->category = $request->category;

        $image = $request->file('image');
        $filename  = time() . '.' . $image->getClientOriginalExtension();

        $path = public_path('uploads/');

        $image->move($path, $filename);

        $gallery->image = $filename;

        $gallery->save();
        Session::flash('success', 'Successfully changed');

        return back();

    }

    public function update (Gallery $gallery, Request $request) {
        if (!$request->category) {
            Session::flash('fail', 'Category is empty');

            return back();
        }

        $gallery->name = $request->name;
        $gallery->category = $request->category;
        $gallery->update();

        Session::flash('success', 'Successfully changed');

        return back();
    }
}
