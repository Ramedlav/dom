<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Status;
use App\Models\Sale;
use App\Models\Floor;
use App\Models\Material;
use App\Models\Construction;
use App\Models\Windows;
use App\Models\Heating;
use App\Models\Finish_condition;
use App\Models\Announcements;
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
        // $this->middleware('auth');
    }

    public function index()
    {
        // $posts = Post::orderBy('id','desc')->take(3)->get()->reverse();
        // $posts = Post::query()->limit(3)->get();
        // $posts = $post->getPostsBySearch($request)->paginate(6);
        $posts = Post::all();
	$announcements=Announcements::all();
	$sales=Sale::all();
        $statuses=Status::all();
	$constructions = Construction::all();
	$floors=Floor::all();
	$materials=Material::all();
	$windows=Windows::all();
	$heatings=Heating::all();
	$finish_conditions=Finish_condition::all();
// dd($posts);
        return view('home', compact('posts', 'statuses', 'sales', 'constructions', 'floors', 'windows', 'materials', 'heatings', 'finish_conditions', 'announcements'));
    }

    public function action(Request $request, Post $posts)
    {

        if($request->ajax())
        {
        // $lat = $_GET['address_latitude'];
        // dd($lat);
        // $lng = $_GET['longitude'];

            $output = '';
            $query = $request->get('query');
            // dd($query);
            // $lat = $_GET['latitude'];
            // $lng = $_GET['longitude'];
            if ($query !== '') {

                $posts = Post::where('address','LIKE','%'.$query.'%')->orderBy('id','desc')->get();
            }else {
                $posts = Post::orderBy('id','desc')->get();
            }

            $total_row = $posts->count();
            if($total_row > 0){

                foreach($posts as $post)
                {


                    $img = '';
                    foreach($post->photos as $photo){
                        if ($photo){
                            $img = $photo->img;
                        }
                    }

                    $output .= '
                        <div class="form-card col-lg-6 col-xl-4 p-1">
                            <a href="'.route('show',['id_post' => $post->id]).'" class="form-link" title="show '.$post->title.'">
                                <div>
                                    <img class="img-fluid" src="'.asset('/storage/' . $img).'">
                                </div>
                            <div class="form-text text-start">
                                    <div class="post-title">'
                                        .$post->title.'
                                    </div>
                                    <div class="post-title">'
                                        .$post->price.'&nbsp;€
                                    </div>
                                    <div class="post-fulladdress">'
                                        .$post->address.'
                                </div>
                            </div>
                            </a>
                        </div>
                    ';
                }
            } else {
                $output = '
                <div class="form-card col-lg-6 col-xl-4 p-1">
                    <div class="no-found-img">
                        <img class="img-fluid" src="/img/images/agent.jpg">
                        <span>No Data Found</span>
                    </div>
                </div>
                 ';
            }

            $posts = array(
                'table_data' => $output,
                'total_data' => $total_row
            );

            echo json_encode($posts);
        }
    }

}
