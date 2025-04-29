<?php

namespace App\Livewire;

use App\Models\Downloader;
use Livewire\Component;

class DownloadProfile extends Component
{   
    public $name, $phone_number, $email, $company;
    public $showModal = false;

    protected $rules = [
        'name' => 'required|string',
        'phone_number' => 'required|string',
        'email' => 'required|email',
        'company' => 'required|string'
    ];

    public function openModal() {
        $this -> reset(['name', 'phone_number', 'email', 'company']);
        $this -> showModal = true;
    }

    public function closeModal() {
        $this -> showModal = false;
    }

    public function submit() {
        $this->validate();

        Downloader::create([
            'name' => $this->name,
            'phone_number' => $this->phone_number,
            'email' => $this->email,
            'company' => $this->company,
        ]);

        $this->dispatch('download-file', url: route('download.company-profile'));

        $this-> reset (['name', 'phone_number', 'email', 'company']);
        $this-> closeModal();

        session()->put('allow_download', true);

        session()->flash('message', 'Thank you! Your file is downloading.');
    }

    public function render()
    {
        return view('livewire.download-profile');
    }
}
