<?php

namespace App\Http\Livewire;

use App\Models\User;
use GuzzleHttp\Psr7\Request;
use Livewire\Component;

class Details extends Component
{
    public $doctors;

    public function mount($id)
    {
        $this->doctors = User::where('id', $id)->get();
    }
    public function render()
    {
        return view('livewire.details');
    }
}
