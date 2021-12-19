<?php

namespace App\Http\Livewire;

use App\Models\Hospital;
use App\Models\User;
use Livewire\Component;

class Home extends Component
{
    public $hospital;
    public $doctors;
    public $color = ['first', 'middle', 'last'];
    public $icon = ['bi-window', 'bi-house-door', 'bi-briefcase'];

    public function mount()
    {
        $this->hospital = Hospital::first();
        $this->doctors = User::where('role', 'doctor')->take(4)->get();
    }
    
    public function render()
    {
        return view('livewire.home');
    }
}
