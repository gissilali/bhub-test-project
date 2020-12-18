<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class PostList extends Component
{
    protected $listeners = ['postCreated' => 'refreshPosts'];

    public $posts;

    public function __construct($id = null)
    {
        parent::__construct($id);
        $this->refreshPosts();
    }

    public function render()
    {
        return view('livewire.post-list');
    }

    public function refreshPosts()
    {
        $this->posts = Post::orderBy('created_at', 'desc')->get();
    }

    public function postSelected($post)
    {
        $this->emit('postCreated', $post);
    }
}
