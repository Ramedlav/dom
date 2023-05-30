<?php

namespace App\Http\Controllers;

use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class MapController extends Controller
{
    public function show()
    {
        $user = Auth::user();
	$posts = Post::where('status_id',1)->where('user_id','<>',Auth::user()->id)->get();
        return view('map', compact('user','posts'));
    }
}
