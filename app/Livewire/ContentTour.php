<?php

namespace App\Livewire;

use App\Models\PostFlayer;
use Livewire\Attributes\On;
use Livewire\Component;

class ContentTour extends Component
{


    public $postId;
    public $post;
    public $color;

    public function mount($postId)
    {
        $this->postId = $postId;
        $this->post = PostFlayer::find($postId);

        $this->color = $this->generateRandomColor();
    }

    #[On('generateRandomColor')]
    public function generateRandomColor()
    {
        $colors = ['#B43F3F', '#2E236C', '#DA7297', '#7FA1C3', '#FFB22C'];
        return $colors[array_rand($colors)];
    }

    public function destroy($postId){
        $post = PostFlayer::find($postId);
         if ($post) {
            $post->delete();
        }
        return redirect()->to('/');
    }

    #[On('render')]
    public function render()
    {
        return view('livewire.content-tour');
    }
}

