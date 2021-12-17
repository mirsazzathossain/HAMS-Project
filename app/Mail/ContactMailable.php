<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMailable extends Mailable
{
    use Queueable, SerializesModels;

    protected $name;
    protected $sub;
    protected $mail;
    protected $phone;
    protected $message;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $subject, $email, $phone, $message)
    {
        $this->name = $name;
        $this->sub = $subject;
        $this->mail = $email;
        $this->phone = $phone;
        $this->message = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->mail)
                    ->subject('New mail arrived from HAMS!')
                    ->markdown('emails.contact-mail')
                    ->with([
                        'name' => $this->name,
                        'subject' => $this->sub,
                        'email' => $this->mail,
                        'phone' => $this->phone,
                        'message' => $this->message,
                    ]);
    }
}
