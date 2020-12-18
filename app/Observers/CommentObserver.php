<?php

namespace App\Observers;

use App\Mail\CommentCreatedMail;
use App\Models\Comment;
use Illuminate\Support\Facades\Mail;

class CommentObserver
{

    public function created(Comment $comment)
    {
        Mail::to('admin@bhub.com')
        ->send(new CommentCreatedMail($comment));
    }


    public function updated(Comment $comment)
    {
        //
    }


    public function deleted(Comment $comment)
    {
        //
    }
    public function restored(Comment $comment)
    {
        //
    }

    public function forceDeleted(Comment $comment)
    {
        //
    }
}
