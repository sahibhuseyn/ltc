<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Language;
use Illuminate\Http\Request;
use Session;

class LanguageController extends Controller
{
    public function show()
    {
        $languages = Language::getAllLanguages();
        return view('admin.languages.languages', compact('languages'));

    }

    public function add(Request $req)
    {
        $image = $req->file('photo');
        $filename  = time() . '.' . $image->getClientOriginalExtension();

        $path = public_path('uploads/');

        $image->move($path, $filename);

        Language::create([
            'name' => $req->name,
            'code' => $req->code,
            'status' => $req->status,
            'position' => $req->position,
            'image' => $filename
        ]);

        mkdir('../resources/lang/' . $req->code, 0775, true);

        Session::flash('success', 'Created Successfully');

        return back();
    }

    public function update(Request $req)
    {
        $language = Language::find($req->id);

        if ($req->key == 'code') {
            rename('../resources/lang/' . $language->code, '../resources/lang/' . $req->value);
        }

        $language->update([$req->key => $req->value]);

    }

    public function delete(Language $language)
    {
        $language->delete();
        Session::flash('success', 'Successfully Removed');
        return back();
    }
}
