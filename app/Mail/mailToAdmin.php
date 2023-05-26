<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class mailToAdmin extends Mailable
{
    use Queueable, SerializesModels;

    protected $email;
    protected $message;
    protected $name;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $email, $message)
    {
	$this->email = $email;
	$this->message = $message;
	$this->name = $name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.mailtoadmin')
		->with([
			'name' => $this->name,
			'email' => $this->email,
			'new_message' => $this->message
			])
		->subject('Notification from site '.route('home'));
    }
}
