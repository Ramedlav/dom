<?php
 
namespace App\Notifications;
 
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use App\Http\Requests\ContactFormRequest;
use App\Mail\mailToAdmin;
use Illuminate\Support\Facades\Mail;
 
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

	Mail::to($admin_email)->send(new mailToAdmin($name, $mail, $ms));
/* 
       return (new MailMessage)
            ->subject(config('admin.name') . ", новое сообщение с сайта dmitxe.ru!")
            ->greeting(" ")
            ->salutation(" ")
            ->from('mail.username', 'no-reply')
            ->line('Имя: ' . 'sssssss')
            ->line('E-mail: ' . 'bob@ps.zp.ua')
            ->line('Сообщение: ')
            ->line('sssssssssssssssssssssssss');
*/
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