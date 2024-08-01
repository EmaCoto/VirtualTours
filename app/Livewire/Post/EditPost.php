<?php

namespace App\Livewire\Post;

use App\Models\PostFlayer;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditPost extends Component
{
    use WithFileUploads;
    public $open = false;
    public $img, $title, $description, $duration, $prices;
    public $postId, $post;
    public $imgKey;

    public function mount($postId)
    {
        $this->postId = $postId;
        $this->post = PostFlayer::find($postId);

        $this->title = $this->post->title;
        $this->description = $this->post->description;
        $this->duration = $this->post->duration;
        $this->prices = $this->post->prices;
        $this->imgKey = rand();
    }

    public function update()
    {
        // $this->validate([
        //     'title' => 'required|string|max:255',
        //     'description' => 'required|string',
        //     'duration' => 'required|numeric',
        //     'prices' => 'required|string',
        //     'img' => 'nullable|image|mimes:jpg,png,jpeg,gif'
        // ]);

        $post = PostFlayer::find($this->postId);
        $post->title = $this->title;
        $post->description = $this->description;
        $post->duration = $this->duration;
        $post->prices = $this->prices;

        if($this->img) {
            $post->img = $this->img->store('posts');
        }

        $post->save();
        $this->reset('open');
        $this->dispatch('render');
    }


    public function render()
    {
        return view('livewire.post.edit-post');
    }
}
