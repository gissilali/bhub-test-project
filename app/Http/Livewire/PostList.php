<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class PostList extends Component
{
    protected $listeners = ['postCreated' => 'refreshPosts'];

    public $posts;

    public function render()
    {
        $this->refreshPosts();
        return view('livewire.post-list');
    }

    public function refreshPosts()
    {
        $this->posts = Post::orderBy('created_at', 'desc')->get();
    }
}
