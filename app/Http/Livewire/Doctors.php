<?php

namespace App\Http\Livewire;

use App\Models\Hospital;
use App\Models\User;
use Livewire\Component;

class Doctors extends Component
{
    public $hospital;
    public $doctors;

    public function mount()
    {
        $this->hospital = Hospital::first();
        $this->doctors = User::where('role', 'doctor')->get();
    }
    
    public function render()
    {
        return view('livewire.doctors');
    }
}
