<?php

namespace App\Livewire;

use Livewire\Component;

class AdminDropdown extends Component
{   
    public $isOpen = false;
    public $showLogoutModal = false;
    
    public function toggle()
    {
        $this->isOpen = !$this->isOpen;
    }

    public function confirmLogout()
    {
    $this->showLogoutModal = true;
    }

    public function logout()
    {
    auth()->guard()->logout();
    return redirect('/');
    }
    
    public function render()
    {
        return view('livewire.admin-dropdown');
    }
}
