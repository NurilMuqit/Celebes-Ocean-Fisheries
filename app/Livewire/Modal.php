<?php

namespace App\Livewire;

use Livewire\Component;

class Modal extends Component
{   
    public $isOpen = false;

    protected $listeners = [
        'showModal' => 'showModal',
        'hideModal' => 'hideModal',
    ];

    public function showModal()
    {
        $this->isOpen = true;
    }

    public function hideModal()
    {
        $this->isOpen = false;
    }
    
    public function render()
    {
        return view('livewire.modal');
    }
}
