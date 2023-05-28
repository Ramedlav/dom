<?php

namespace App\Http\Controllers;

use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Feedback;

class FeedbackController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        return view('feedback.list', [
            'user' => $user,
        ]);
    }

    public function listmessages(Request $request)
    {
	$query=Feedback::query();
	if (!empty($request->name)) $query=$query->where('name','like','%'.$request->name.'%');
	if (!empty($request->email)) $query=$query->where('email','like','%'.$request->email.'%');
	if (!empty($request->message)) $query=$query->where('message','like','%'.$request->message.'%');
	if (!empty($request->start_date)) $query=$query->whereRaw("date(created_at) >= '".date('Y-m-d', strtotime($request->start_date))."'");
	if (!empty($request->finish_date)) $query=$query->whereRaw("date(created_at) <= '".date('Y-m-d', strtotime($request->finish_date))."'");
	$users=$query->orderByDesc('created_at')->get();
        return view('feedback.listmessages', [
            'users' => $users,
        ]);
    }

}
