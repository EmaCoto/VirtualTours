<?php

namespace App\Livewire;

use App\Models\PostFlayer;
use Livewire\Component;

class ContentTour extends Component
{
    public $posts;

    public function mount(){
        $this->posts=PostFlayer::all();
    }
    public function render()
    {
        return view('livewire.content-tour');
    }
}
