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
        dd($dialogs);
        return view('messages',compact('dialogs'));
    }

    public function ShowDialog($id_dialog){

//        $messages = Message::where('dialog_id',$id_dialog)->latest()->get();
        $messages = Dialog::find($id_dialog)->messages;
        return view('message',compact('messages'));
    }

    public function SendMessage(Request $request){

        $message = [
            'dialog_id' => $request->input('dialog_id'),
            'user_id' =>  Auth::user()->id,
            'message' => $request->input('message'),
            'read' => 0,
        ];

        Message::create($message);
        return redirect()->to(route('ShowDialog',['dialog_id'=>$request->dialog_id]));
    }

    public function CreateDialogForm(Request $request){
        $post_id = $request->post_id;

        $dialog = Dialog::where('post_id', $post_id)->where('sub_id', Auth::user()->id)->first();
        if ($dialog){
            return $this->ShowDialog($dialog->id);
        }else{
            return view('CreateDialog', compact('post_id'));}
    }

    public function CreatePostDialog(Request $request){

        dd($request->post_id);

//        $post = Post::find($request->post_id);
//        $user_id = $post->user_id;
//        $dialog = [
//            'user_id' => $user_id,
//            'sub_id' => Auth::user()->id,
//            'post_id' => $request->input('post_id'),
//        ];
//
//
//        $model = Dialog::create($dialog);
//        dd($model);
//        $message = [
//            'read' => 0,
//            'dialog_id' => $model->id,
//            'user_id' =>  Auth::user()->id,
//            'message' => $request->input('message'),
//        ];
//
//        Message::create($message);
//        $this->ShowDialog($model->id);
    }


}
