<?php

namespace App\Livewire\Post;

use App\Models\post;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreatePost extends Component
{
    use WithFileUploads;

    public $open = true;
    public $title, $description, $img;
    public $imgKey;

    public function save (){
        $post = Post::create($this->only('title', 'description'));

        if($this->img){
            $post->img = $this->img->store('posts');
            $post->save();
        }

        $this->reset();
        $this->imgKey = rand();
    }
    public function render()
    {
        return view('livewire.post.create-post');
    }
}
