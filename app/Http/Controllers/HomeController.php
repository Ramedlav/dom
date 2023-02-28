<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Post $posts)
    {
        // $posts = Post::orderBy('id','desc')->take(3)->get()->reverse();
        // Post::latest()->limit(3)->get();
// dd($posts);
	    $posts = Post::paginate(3);
        return view('home', compact('posts'));
    }
}
