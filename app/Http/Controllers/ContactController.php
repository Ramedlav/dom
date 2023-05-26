<?php
 
namespace App\Http\Controllers;
 
use App\Notifications\InboxMessage;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactFormRequest;
use App\Admin;
 
class ContactController extends Controller
{
    public function show()
    {
        return view('contact');
    }
 
    public function mailToAdmin(ContactFormRequest $message, Admin $admin)
    {
        //send the admin an notification
        $admin->notify(new InboxMessage($message));
        // redirect the user back
	$message=__('Thank you for your feedback! Your message has been successfully sent to the site administrator!');
        return redirect()->back()->with('message', $message);
    }
}