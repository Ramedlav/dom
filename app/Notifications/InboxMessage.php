<?php
 
namespace App\Notifications;
 
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use App\Http\Requests\ContactFormRequest;
use App\Mail\mailToAdmin;
use Illuminate\Support\Facades\Mail;
use App\Models\Feedback;
use Illuminate\Support\Facades\Auth;
 
class InboxMessage extends Notification
{
    use Queueable;
 
    protected $message;
 
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(ContactFormRequest $message)
    {
        $this->message = $message;
    }
 
    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }
 
    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
	$name=$this->message->name;
	$mail=$this->message->email;
	$ms=$this->message->message;
	$admin_email=config('admin.email');

	if (Auth::check()) $user_id=Auth::user()->id; else $user_id=0;
        $message = [
            'user_id' => $user_id,
            'name' => $name,
            'email' => $mail,
            'message' => $ms,
	];
	Feedback::create($message);

	Mail::to($admin_email)->send(new mailToAdmin($name, $mail, $ms));
    }
 
    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}