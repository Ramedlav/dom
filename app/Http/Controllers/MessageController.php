<?php

namespace App\Http\Controllers;

use App\Models\Dialog;
use App\Models\Message;
use App\Models\Post;
use App\Models\User;
use App\Mail\messageDialog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\DialogRequest;

class MessageController extends Controller
{
    public function getUsers($user_id) {
        $out = Dialog::where('sub_id',$user_id)->orWhere('user_id',$user_id)->orderBy('updated_at','desc')->get();

	$dialog_messages=array();
	$all_count=0;
	$state_users='';
	foreach ($out as $dialog) {
		$dialog_messages[$dialog->id]=0;
		foreach($dialog->messages as $message) {
			if ($message->user_id <> $user_id && $message->read == 0) $dialog_messages[$dialog->id]+=1;
			$all_count+=1;
			if ($message->read == 0) $all_count+=1;
		}
	}
	foreach ($out as $dialog) {
                $img='photo/agent.jpg';
		$post=Post::find($dialog->post_id);
                foreach($post->photos as $photo) {
			if ($img == 'photo/agent.jpg') $img = $photo->img;
                 }
		$dialog->img=$img;
		$dialog->address=$post->address;
		$dialog->count=$dialog_messages[$dialog->id];
//		$all_count+=$dialog->count;
		if (Auth::user()->id == $dialog->user_id) {
			$dialog->online=(Auth::user()->onLine($dialog->sub_id));
			$dialog->avatar=$dialog->sub_id.Auth::user()->find($dialog->sub_id)->logo;
			$dialog->user_name=Auth::user()->find($dialog->sub_id)->name;
		}
		else {
			$dialog->online=(Auth::user()->onLine($dialog->user_id));
			$dialog->avatar=$dialog->user_id.Auth::user()->find($dialog->user_id)->logo;
			$dialog->user_name=Auth::user()->find($dialog->user_id)->name;
		}
		$state_users.=($dialog->online?"1":"0");
	}
	return array('out' => $out, 'all_count' => $all_count, 'state_users' => $state_users);
    }

    public function ShowDialogs(){
        $user_id = Auth::user()->id;
        $dialogs =  Dialog::where('user_id',$user_id)->orderBy('updated_at','desc'); // User::find($user_id)->dialogs->orderBy('created_at'.'desc');

	$users = $this->getUsers($user_id);
	$out = $users["out"];
	$all_count = $users["all_count"];
	$state_users = $users["state_users"];
	$text_search="";
        return view('messages',compact('dialogs', 'out', 'all_count', 'state_users', 'text_search'));
    }

    public function ShowDialog($id_dialog){
        $dialog = Dialog::find($id_dialog);

        if(!$dialog){
            return redirect()->to(route('home'));
        }

        $messages = $dialog->messages;

        if (Auth::user()->id != $dialog->user_id & Auth::user()->id != $dialog->sub_id){
            return back()->withInput();
        }else{
            return view('message',compact('messages'));
        }

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
            return redirect()->to(route('ShowDialog',['dialog_id'=> $dialog->id]));
        }else{
            return view('CreateDialog', compact('post_id'));
        }
    }

    public function CreatePostDialog(DialogRequest $request){
        $post = Post::find($request->post_id);
        $user_id = $post->user_id;
	$user = User::find($user_id);
	$user_email = $user->email;
	$user_name  = $user->name;
        $model = Dialog::where('post_id', $request->post_id)->where('user_id', $user_id)->where('sub_id', Auth::user()->id)->first();
	if (!$model) {
	        $dialog = [
			'user_id' => $user_id,
			'sub_id' => Auth::user()->id,
			'post_id' => $request->input('post_id'),
		];
		$model = Dialog::create($dialog);
	}

        $message = [
            'read' => 0,
            'dialog_id' => $model->id,
            'user_id' =>  Auth::user()->id,
            'message' => $request->input('message'),
        ];

        Message::create($message);
	$name = $request->name;
	$email = $request->email;
	$phone = $request->phone;
	$ms = $request->message;
	Mail::to($user_email)->send(new messageDialog($user_name, $name, $email, $phone, $ms, $post, $model->id));
        return redirect()->back();
//to(route('ShowDialogs'));
    }

    public function getNotify(Request $request){
        $user_id = Auth::user()->id;
        $dialogs = Dialog::where('sub_id',$user_id)->orWhere('user_id',$user_id)->orderBy('updated_at','desc')->get();
	$count=0;
	foreach ($dialogs as $dialog) foreach($dialog->messages as $message) if ($message->user_id <> $user_id && $message->read == 0) $count+=1;
	User::where('id',$user_id)->update(['updated_at'=>now()]);
	echo $count;
    }

    public function getChatMessages(Request $request){
        $user_id = Auth::user()->id;
	Message::where('dialog_id',$request->dialog_id)->where('user_id','<>',Auth::user()->id)->update(['read'=>1]);
        $dialogs = Dialog::where('sub_id',$user_id)->orWhere('user_id',$user_id)->orderBy('updated_at','desc')->get();

	$users = $this->getUsers($user_id);
	$out = $users["out"];
	$all_count = $users["all_count"];
	$state_users = $users["state_users"];
        $dialog = Dialog::find($request->dialog_id);
	$post = Post::find($dialog->post_id);
	if (Auth::user()->id == $dialog->user_id) $user = Auth::user()->find($dialog->sub_id);
	else $user = Auth::user()->find($dialog->user_id);
	$text_search=$request->text_search;

	$header=view('messages-parts.chat-field-header', compact('dialog', 'post', 'user'))->render();
	$content=view('messages-parts.chat-field', compact('dialog', 'post', 'user'))->render();
	$users=view('messages-parts.chat-users', compact('out', 'text_search'))->render();
        return response()->json([
            'header' => $header,
            'content' => $content, 
            'users' => $users,
	    'all_count' => $all_count,	 
	    'state_users' => $state_users
            ]);

    }

    public function setChatMessages(Request $request){
        $post = Post::find($request->post_id);
        $user_id = $request->user_id;
	$sub_id = $request->sub_id;
        $model = Dialog::where('post_id', $request->post_id)->where('user_id', $user_id)->where('sub_id', $sub_id)->first();
	if (!$model) {
	        $dialog = [
			'user_id' => $user_id,
			'sub_id' => $sub_id,
			'post_id' => $request->post_id,
		];
		$model = Dialog::create($dialog);
	}

        $message = [
            'read' => 0,
            'dialog_id' => $model->id,
            'user_id' =>  Auth::user()->id,
            'message' => $request->message,
        ];

        Message::create($message);
	Dialog::where('id',$model->id)->update(['updated_at'=>now()]);

	$request->dialog_id = $model->id;
	return $this->getChatMessages($request);
    }

    public function setChatImages(Request $request){
        $post = Post::find($request->post_id);
        $user_id = $request->user_id;
	$sub_id = $request->sub_id;
        $model = Dialog::where('post_id', $request->post_id)->where('user_id', $user_id)->where('sub_id', $sub_id)->first();
	if (!$model) {
	        $dialog = [
			'user_id' => $user_id,
			'sub_id' => $sub_id,
			'post_id' => $request->post_id,
		];
		$model = Dialog::create($dialog);
	}

        foreach ($request->file as $image){
	        $filename = md5(time().$image->getClientOriginalName()).".".$image->getClientOriginalExtension();
		$image->move(public_path().'/storage/dialogs', $filename);
	        $filename = 'dialogs/'.$filename;
	        $message = [
	            'read' => 0,
	            'dialog_id' => $model->id,
	            'user_id' =>  Auth::user()->id,
	            'message' => '[image]'.$filename,
        	];
		Message::create($message);
	}
	Dialog::where('id',$model->id)->update(['updated_at'=>now()]);

	$request->dialog_id = $model->id;
	return $this->getChatMessages($request);
    }

    public function checkChatMessages(Request $request){
        $user_id = Auth::user()->id;
        $dialogs = Dialog::where('sub_id',$user_id)->orWhere('user_id',$user_id)->orderBy('updated_at','desc')->get();
	$users = $this->getUsers($user_id);
	$out = $users["out"];
	$all_count = $users["all_count"];
	$state_users = $users["state_users"];
	$text_search=$request->text_search;
	$users=view('messages-parts.chat-users', compact('out', 'text_search'))->render();
        return response()->json([
            'users' => $users, 
	    'all_count' => $all_count,
	    'state_users' => $state_users,
            ]);

    }

   public function clearDialog(Request $request) {
	$id = $request->dialog_id;
	$messages=Message::where('dialog_id', $id)->get();
	foreach($messages as $message) {
		if(substr($message->message,0,7) == '[image]') {
			$filename=substr($message->message,7);
			unlink(public_path().'/storage/'.$filename);
		}
	}
	Message::where('dialog_id', $id)->delete();
	Dialog::where('id', $id)->delete();
   }

   public function deleteMessage(Request $request) {
	$id = $request->id;
	$message=Message::where('id', $id)->first()->message;
	if(substr($message,0,7) == '[image]') {
		$filename=substr($message,7);
		unlink(public_path().'/storage/'.$filename);
	}
	Message::where('id', $id)->delete();
   }
}
