<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ProfileRequest;

class MyProfileController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        return view('auth.profile', [
            'user' => $user,
        ]);
    }

    public function save(ProfileRequest $request)
    {
        $user = Auth::user();
	$user->name=$request->name;
	$user->phone=$request->phone;
	$user->email=$request->email;
	$user->update();
        return redirect()->to(route('home'));
    }

    public function updatePhoto(Request $request){
        foreach ($request->file as $image){
	        $filename = $request->user_id.".".$image->getClientOriginalExtension();
		$image->move(public_path().'/storage/usersphoto', $filename);
		Auth::user()->logo=".".$image->getClientOriginalExtension();
		Auth::user()->update();
	}
    }

    public function deletePhoto(Request $request){
	$user_id=$request->user_id;
	copy(public_path()."/storage/usersphoto/0.jpg", public_path()."/storage/usersphoto/$user_id.jpg");
	Auth::user()->logo=".jpg";
	Auth::user()->update();
    }
}
