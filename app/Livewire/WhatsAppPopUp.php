<?php

namespace App\Livewire;

use Livewire\Component;

class WhatsAppPopup extends Component
{
    public bool $showPopup = false;

    public function togglePopup()
    {
        $this->showPopup = !$this->showPopup;
    }

    public function render()
    {
        return view('livewire.whats-app-pop-up');
    }
}
