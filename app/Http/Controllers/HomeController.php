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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Post $posts)
    {
        // $posts = Post::orderBy('id','desc')->take(3)->get()->reverse();
        // $posts = Post::query()->limit(3)->get();
// dd($posts);

	    $posts = Post::paginate(6);
        return view('home', compact('posts'));
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    // public function autosearch(PostRequest $request)
    // {
    //     if ($request->ajax()) {
    //         $data = Post::where('address','LIKE',$request->address.'%')->get();
    //         dd($data);
    //         $output = '';
    //         if (count($data)>0) {
    //             $output = '<ul class="list-group" style="display: block; position: relative; z-index: 1">';
    //             foreach ($data as $row) {
    //                 $output .= '<li class="list-group-item">'.$row->name.'</li>';
    //             }
    //             $output .= '</ul>';
    //         }else {
    //             $output .= '<li class="list-group-item">'.'No Data Found'.'</li>';
    //         }
    //         return $output;
    //     }
    //     return view('home');
    // }
}
