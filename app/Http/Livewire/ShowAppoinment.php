<?php

namespace App\Http\Livewire;

use App\Models\Appointment;
use Livewire\Component;

class ShowAppoinment extends Component
{
    public $appointments = '';

    public function mount()
    {
        $this->appointments = Appointment::where('patient_email', auth()->user()->email)->get();
    }

    public function render()
    {
        return view('livewire.show-appoinment')->layout('layouts.app');
    }
}
