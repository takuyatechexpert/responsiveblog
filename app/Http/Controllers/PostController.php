<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //

    public function store(Request $request) {

        $post = new Post;

        $post->image = $request->input('image');
        $post->title = $request->input('title');
        $post->description = $request->input('description');

        $post->save();
        return redirect() -> route('admin.home');
    }

}
