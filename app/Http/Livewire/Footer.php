<?php

namespace App\Http\Livewire;

use App\Models\Hospital;
use Livewire\Component;

class Footer extends Component
{
    public $hospital;

    public function mount()
    {
        $this->hospital = Hospital::first();
    }
    
    public function render()
    {
        return view('livewire.footer');
    }
}
