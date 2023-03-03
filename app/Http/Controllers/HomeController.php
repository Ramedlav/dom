<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

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

    public function index(Request $request, Post $post)
    {
        // $posts = Post::orderBy('id','desc')->take(3)->get()->reverse();
        // $posts = Post::query()->limit(3)->get();
        $posts = $post->getPostsBySearch($request)->paginate(6);

// dd($posts);
        return view('home', compact('posts'));
    }

}
