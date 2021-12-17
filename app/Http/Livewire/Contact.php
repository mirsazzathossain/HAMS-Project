<?php

namespace App\Http\Livewire;

use App\Mail\ContactMailable;
use App\Models\Message;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Contact extends Component
{
    public $name = '';
    public $subject= '';
    public $email = '';
    public $phone = '';
    public $message = '';

    protected $rules = [
        'name' => 'required|min:3',
        'subject' => 'required|min:10',
        'email' => 'required|email',
        'phone' => 'required',
        'message' => 'required',
    ];

    public function submit()
    {
        $this->validate();

        Message::create([
            'name' => $this->name,
            'subject' => $this->subject,
            'email' => $this->email,
            'phone' => $this->phone,
            'message' => $this->message,
        ]);
        
        Mail::to('binbeast01@gmail.com')->send(
            new ContactMailable(
                $this->name,
                $this->subject,
                $this->email,
                $this->phone,
                $this->message
            )
        );

        $this->name ='';
        $this->subject ='';
        $this->email ='';
        $this->phone ='';
        $this->message ='';

        return redirect()->route('mail-success');
    }

    public function render()
    {
        return view('livewire.contact');
    }
}
