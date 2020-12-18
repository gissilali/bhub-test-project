<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function store($post_id, Request $request)
    {
        $this->validate($request,[
            'comment_body' => 'required'
        ]);


    }
}
