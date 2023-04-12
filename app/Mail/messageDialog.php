<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class messageDialog extends Mailable
{
    use Queueable, SerializesModels;

    protected $user_name;
    protected $email;
    protected $message;
    protected $name;
    protected $phone;
    protected $post;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user_name, $name, $email, $phone, $message, $post, $dialog_id)
    {
	$this->user_name = $user_name;
	$this->email = $email;
	$this->message = $message;
	$this->name = $name;
	$this->phone = $phone;
	$this->post = $post;
	$this->dialog_id = $dialog_id;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.mail')
		->with([
			'user_name' => $this->user_name,
			'name' => $this->name,
			'email' => $this->email,
			'phone' => $this->phone,
			'new_message' => $this->message,
			'post' => $this->post,
			'dialog_id' => $this->dialog_id
			])
		->subject('New message');
    }
}
