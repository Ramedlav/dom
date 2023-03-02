<?php

namespace App\Http\Controllers;

use App\Models\Dialog;
use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function ShowDialogs(){
        $user_id = Auth::user()->id;
        $dialogs = User::find($user_id)->dialogs;
        return view('messages',compact('dialogs'));
    }

    public function ShowDialog($id_dialog){
        $dialog = Dialog::find($id_dialog);
        $messages = Message::find($id_post)->messages;
        return view('message',compact('messages'));
    }

}
