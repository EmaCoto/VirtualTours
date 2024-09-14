<?php

namespace App\Livewire;

use Livewire\Component;

class NavbarResponsive extends Component
{
    public $isOpen = false;

    // Método para alternar el estado del menú
    public function toggleMenu()
    {
        $this->isOpen = !$this->isOpen;
    }
    public function render()
    {
        return view('livewire.navbar-responsive');
    }
}
