<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreatePostForm extends Component
{
    use WithFileUploads;

    public $postBody;
    public $photo;

    protected $rules = [
        'postBody' => 'required',
        'photo' => 'image'
    ];

    public function render()
    {
        return view('livewire.create-post-form');
    }

    public function submitPost()
    {
//        $this->validate();
        Post::create([
            'post_body' => $this->postBody,
            'photo_url' => $this->photo ? $this->photo->store('public/photos') : null
        ]);

        $this->resetForm();
        $this->emit('postCreated');

    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    private function resetForm()
    {
        $this->postBody = '';
    }
}
