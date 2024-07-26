<?php

namespace App\Livewire;

use App\Models\PostFlayer;
use Livewire\Component;

class ContentTour extends Component
{
    public $postId;
    public $post;

    public function mount($postId)
    {
        $this->postId = $postId;
        $this->post = PostFlayer::find($postId);
    }

    public function render()
    {
        return view('livewire.content-tour');
    }
}

