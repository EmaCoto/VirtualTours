<?php

namespace App\Livewire\Form;

use App\Models\PostFlayer;
use Livewire\Component;

class ReservationForm extends Component
{
    public $postId, $post;

    public function mount($postId)
    {
        $this->postId = $postId;
        $this->post = PostFlayer::find($postId);
    }
    public function render()
    {
        return view('livewire.form.reservation-form', [
            'postId' => $this->postId,
        ]);
    }
}
