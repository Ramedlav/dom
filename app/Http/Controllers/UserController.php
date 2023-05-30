<?php

namespace App\Http\Controllers;

use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Http\Requests\UsersRequest;

class UserController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        return view('users.list', [
            'user' => $user,
        ]);
    }

    public function listusers(Request $request)
    {
	$query=User::query();
	if (!empty($request->name)) $query=$query->where('name','like','%'.$request->name.'%');
	if (!empty($request->phone)) $query=$query->where('phone','like','%'.$request->phone.'%');
	if (!empty($request->email)) $query=$query->where('email','like','%'.$request->email.'%');
	if (!empty($request->role_id)) $query=$query->where('role_id','=',$request->role_id);
	if (!empty($request->status_id)) $query=$query->where('status_id','=',$request->status_id);
	$users=$query->get();
        return view('users.listusers', [
            'users' => $users,
        ]);
    }

    public function edituser($id_user)
    {
        if (Auth::user()->role_id != 1){
            abort(403);
	}

        $user = User::find($id_user);
        return view('users.edit', [
            'user' => $user,
        ]);
    }

    public function save(UsersRequest $request)
    {
        $user = User::find($request->user_id);
	$user->name=$request->name;
	$user->phone=$request->phone;
	$user->email=$request->email;
	$user->role_id=$request->role_id;
	$user->status_id=$request->status_id;
	$user->update();
        return redirect()->to(route('users'));
    }
}
