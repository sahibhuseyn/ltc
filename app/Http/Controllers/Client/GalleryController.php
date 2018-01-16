<?php

namespace App\Http\Controllers\Client;

use App\Gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GalleryController extends Controller
{
    public function gallery(){
        $language = session('language');
        $galleries = Gallery::getGallery($language);
        $categories = Gallery::getAllCategories($language);
        return view('client.gallery.gallery', compact('galleries', 'categories'));
    }
}
