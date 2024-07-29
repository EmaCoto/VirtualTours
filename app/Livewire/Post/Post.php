<?php

namespace App\Livewire\Post;

use App\Models\PostFlayer;
use Livewire\Attributes\On;
use Livewire\Component;

class Post extends Component
{
    public $posts;

    #[On('render')]

    public function mount(){
        $this->posts=PostFlayer::all();
    }
    public function randomColor(){
        $this->dispatch('generateRandomColor');
    }
    public function render()
    {
        return view('livewire.post.post');
    }
}
