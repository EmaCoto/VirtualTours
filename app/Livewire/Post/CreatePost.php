<?php

namespace App\Livewire\Post;

use App\Models\post;
use Livewire\Component;

class CreatePost extends Component
{
    public $open = true;
    public $title, $description;

    public function save (){
        Post::create($this->only('title', 'description'));
        $this->reset('title', 'description');

    }
    public function render()
    {
        return view('livewire.post.create-post');
    }
}
