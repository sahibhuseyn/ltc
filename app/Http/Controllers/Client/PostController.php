<?php

namespace App\Http\Controllers\Client;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function postList(){
        $language = session('language');
        $posts = Post::getPosts($language);
        $postLatest = Post::getPostsDesc($language);

        return view('client.post.posts', compact('posts', 'postLatest'));
    }

    public function postSingle($slug){
        $post = Post::getPostBySlug($slug);
        $language = session('language');

        $posts = Post::getPostsDesc($language);

        if(!$post){
            return back();
        }

        return view('client.post.single', compact('post', 'posts'));
    }

}
