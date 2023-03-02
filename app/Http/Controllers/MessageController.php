<?php

namespace App\Http\Controllers;

use App\Models\Dialog;
use App\Models\Message;
use App\Models\Post;
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

        $messages = Message::find($id_dialog)->messages;
        return view('message',compact('messages'));
    }

    public function SendMessage(Request $request){

        $message = [
            'dialog_id' => $request->input('dialog_id'),
            'user_id' =>  Auth::user()->id,
            'message' => $request->input('dialog_id'),
        ];

        Message::create($message);
    }

    public function CreateDialog(Request $request){

        $user_id = Post::find($request->post_id)->('user_id')->get();

        $dialog = [
            'user_id' => $user_id,
            'sub_id' => Auth::user()->id,
            'post_id' => $request->post_id,
        ];

        $model = Dialog::create($dialog);

        $message = [
            'dialog_id' => $request->input($model->id),
            'user_id' =>  Auth::user()->id,
            'message' => $request->input('dialog_id'),
        ];

        Message::create($message);
    }



}
