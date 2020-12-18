<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use Livewire\Component;

class CreateCommentForm extends Component
{
    public $postId;
    public $commentBody;

    protected $rules = [
        'commentBody' => 'required'
    ];

    public function render()
    {
        return view('livewire.create-comment-form');
    }

    public function submitPost()
    {
        $this->validate();
        Comment::create([
            'body' => $this->commentBody,
            'post_id' => $this->postId
        ]);

        $this->resetForm();
    }

    public function mount($post)
    {
        $this->postId = $post->id;
    }

    private function resetForm()
    {
        $this->commentBody = '';
    }
}
