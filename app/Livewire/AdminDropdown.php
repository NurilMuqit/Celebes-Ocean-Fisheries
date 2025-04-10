<?php

namespace App\Livewire;

use Livewire\Component;

class AdminDropdown extends Component
{   
    public $isOpen = false;
    
    public function toggle()
    {
        $this->isOpen = !$this->isOpen;
    }
    
    public function render()
    {
        return view('livewire.admin-dropdown');
    }
}
