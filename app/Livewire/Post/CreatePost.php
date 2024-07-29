<?php

namespace App\Livewire\Post;

use App\Models\PostFlayer;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreatePost extends Component
{
    use WithFileUploads;

    public $open = false;
    public $title, $description, $duration, $prices, $img;
    public $imgKey;

    public function save (){
        $post = PostFlayer::create($this->only('title', 'description', 'duration', 'prices'));

        if($this->img){
            $post->img = $this->img->store('posts');
            $post->save();
        }

        $this->reset();
        $this->reset('open');
        $this->dispatch('render');
        $this->imgKey = rand();
    }


    public function render()
    {

        return view('livewire.post.create-post');
    }
}
