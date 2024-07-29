<?php

namespace App\Livewire\Post;

    use App\Models\PostFlayer;
    use Illuminate\Support\Facades\Storage;
    use Livewire\Component;
    use Livewire\WithFileUploads;

    class EditPost extends Component
    {
        use WithFileUploads;

        public $open = false;
        public $img, $title, $description, $duration, $prices;
        public $postId, $post;
        public $imgKey; // Agrega imgKey si lo necesitas para la carga de imágenes

        public function mount($postId)
        {
            $this->postId = $postId;
            $this->post = PostFlayer::find($postId);

            $this->title = $this->post->title;
            $this->description = $this->post->description;
            $this->duration = $this->post->duration;
            $this->prices = $this->post->prices;
            // Si deseas manejar imágenes, podrías inicializar imgKey aquí también
            $this->imgKey = rand();
        }

        public function update()
    {
        $this->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'duration' => 'required|numeric',
            'prices' => 'required|string',
            'img' => 'nullable|image|mimes:jpg,png,jpeg,gif' // Validación de imagen si aplica
        ]);

        $post = PostFlayer::find($this->postId);
        $post->title = $this->title;
        $post->description = $this->description;
        $post->duration = $this->duration;
        $post->prices = $this->prices;

        if ($this->img) {
            // Borra la imagen anterior si existe
            if ($post->img) {
                Storage::delete('public/posts/' . $post->img);
            }
            $imagePath = $this->img->store('public/posts');
            $post->img = basename($imagePath);
        }

        $post->save();

        session()->flash('message', 'Post actualizado exitosamente.');

    }
    public function render()
    {
        return view('livewire.post.edit-post');
    }
}
