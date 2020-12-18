<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostsController
{
    public function __invoke()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('welcome', get_defined_vars());
    }
}
