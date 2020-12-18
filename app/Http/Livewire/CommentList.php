<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class CommentList extends Component
{
    protected $listeners = ['postCreated' => 'fetchComments'];


    public $comments;
    public $post;

    public function __construct($id = null)
    {
        parent::__construct($id);
        $this->comments = [];
    }

    public function render()
    {
        return view('livewire.comment-list');
    }

    public function fetchComments(Post $post)
    {
        $this->comments = $post->comments;
        $this->post = $post;
    }
}
