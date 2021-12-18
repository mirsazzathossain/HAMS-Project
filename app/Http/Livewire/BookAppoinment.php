<?php

namespace App\Http\Livewire;

use App\Models\Appointment;
use App\Models\Department;
use App\Models\User;
use Livewire\Component;

class BookAppoinment extends Component
{
    public $name = '';
    public $email = '';
    public $phone = '';
    public $date = '';
    public $message = '';
    public $doctors = '';
    public $doctor = '';
    public $departments = '';
    public $department = '';

    protected $rules = [
        'name' => 'required|min:3',
        'email' => 'required|email',
        'phone' => 'required',
        'date' => 'required',
        'message' => 'required',
        'doctor' => 'required',
    ];
    
    public function submit(){
        $this->validate();

        Appointment::create([
            'patient_name' => $this->name,
            'patient_email' => $this->email,
            'patient_phone' => $this->phone,
            'doctor_id' => $this->doctor,
            'message' => $this->message,
            'appointment_date' => $this->date
        ]);

        $this->name ='';
        $this->email ='';
        $this->phone ='';
        $this->date ='';
        $this->message ='';
        $this->doctor ='';

        session()->flash('success', 'Appointment Booked Successfully');
        return redirect()->route('patient.appointments');
    }
    
    public function mount()
    {
        $this->departments = Department::all();
        $this->doctors = collect();
    }

    public function render()
    {
        return view('livewire.book-appoinment');
    }

    public function updatedDepartment($value)
    {
        if (!is_null($value)) {
            $this->doctors = User::where('department_id', $value)->get();
        }
    }
}
