<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Language;
use Illuminate\Http\Request;
use Session;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function show ($language_code) {
        $language_id = Language::getLanguageByCode($language_code);
        $categories = Category::getCategoriesByLanguage($language_code);

        return view('admin.categories.categories', compact('categories', 'language_id'));
    }

    public function update (Category $category, Request $request) {
        $slug = str_slug($request->name);
        $check_slug = Category::where('slug', $slug)->get();

        if ($category->name == $request->name) {
            $category->parent_id = $request->parent_id;
            $category->update();
            Session::flash('success', 'Successfully changed');
        } else {
            if ($check_slug->isNotEmpty()) {
                Session::flash('fail', 'Name already exists');
                return back();

            } else {
                $category->name = $request->name;
                $category->parent_id = $request->parent_id;
                $category->slug = $slug;
                $category->update();
                Session::flash('success', 'Successfully changed');
            }
        }

        return back();
    }

    public function delete (Category $category) {
        $category->delete();

        Session::flash('success', 'Successfully Deleted');

        return back();
    }

    public function add ($language_id, Request $request) {
        $slug = str_slug($request->name);
        $check_slug = Category::where('slug', $slug)->get();

        if ($check_slug->isNotEmpty()) {
            Session::flash('fail', 'Name already exists');
            return back();
        } else {
            $category = new Category;
            $category->language_id = $language_id;
            $category->parent_id = 0;
            $category->name = $request->name;
            $category->slug = $slug;
            $category->save();
            Session::flash('success', 'Successfully changed');
        }

        return back();

    }
}
