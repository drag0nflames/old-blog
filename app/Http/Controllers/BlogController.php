<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

use App\Http\Requests;

class BlogController extends Controller
{
    public function getSingle($slug){
        //fetch from the database based on slug
        $post=Post::where('slug', "=", $slug)->get();

        //return the view and pass in the Post object
        return view('blog.single')->withPost($post);
    }
}
