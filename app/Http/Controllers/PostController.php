<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\Post;
use App\Models\User;
use App\Models\Province;
use App\Models\Town;
use App\Models\Status;
use App\Models\Sale;
//use http\Client\Curl\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{


    public function updatePhoto(Request $request){
	$photo = Photo::find($request->photo_id);
        foreach ($request->file as $image){
	        $filename = md5(time().$image->getClientOriginalName()).".".$image->getClientOriginalExtension();
		$image->move(public_path().'/storage/photo', $filename);
	        $filename = 'photo/'.$filename;
		$photo->img = $filename;
		$photo->update();
	}
        $photos = Post::find($photo->post_id)->photos;

        return view('postEditGallery',compact('photos'));
    }

    public function addPhotos(Request $request){
        foreach ($request->file as $image){
	        $filename = md5(time().$image->getClientOriginalName()).".".$image->getClientOriginalExtension();
		$image->move(public_path().'/storage/photo', $filename);
	        $filename = 'photo/'.$filename;
	        Photo::create([
	                'post_id' => $request->post_id,
        	        'img' => $filename,
            	]);
	}
        $photos = Post::find($request->post_id)->photos;

        return view('postEditGallery',compact('photos'));
    }

    public function createForm(){
       $statuses=Status::all();
       $sales=Sale::all();
        // dd($statuses);
        return view('postCreate', compact('statuses', 'sales'));
    }

    public function editForm($id_post){
        $post = Post::find($id_post);
        $statuses=Status::all();
        $sales=Sale::all();

        if(!$post){
            return redirect()->to(route('home'));
        }

        $photos = Post::find($id_post)->photos;
        if (Auth::user()->id != $post->user->id){
            return back()->withInput();
        }else{
            return view('postEdit',compact('post','photos', 'statuses', 'sales'));
        }
    }

//    public function getTown(Request $request)
//    {
//        $towns = Town::where('province_id', $request->province)->get();
//        return (compact('towns'));
//    }

    public function showAll()

    {

//        $posts = Post::All();
	$posts = Post::paginate(10);
        return view('allPosts',compact('posts'));
    }

    public function index()
    {
//        $posts = Post::All();
	$posts = Post::paginate(10);
        return view('home',compact('posts'));
    }


    public function myPosts(){
        $user_id = Auth::user()->id;
        $posts = User::find($user_id)->posts;
        return view('myPosts',compact('posts'));
    }

    public function view($id_post)
    {
        $post = Post::find($id_post);

        if(!$post){
            return redirect()->to(route('home'));
        }

        $photos = Post::find($id_post)->photos;
        return view('post',compact('post'),compact('photos'));
    }

    public function PhotoAll($id_post)
    {
        $post = Post::find($id_post);
        $photos = Post::find($id_post)->photos;



        return view('allPhotos',compact('post'),compact('photos'));
    }

    public function publish($id_post)
    {

        $post = Post::find($id_post);
        if ($post->is_published < 1){

            $post->update([
            'is_published'=> '1',
        ]);
        }else{
        $post->update([
            'is_published'=> '0',
        ]);
        }
        return Redirect::route("showMy");

    }



    public function create(PostRequest $request)
    {


        $post = [
            'user_id' => Auth::user()->id,
            'title' => $request->input('title'),
            'description' => $request->input('description'),
//            'index' => $request->input('index'),
            'address' => $request->input('address'),
            'rooms' => $request->input('rooms'),
            'square' => $request->input('square'),
            'bedrooms' => $request->input('bedrooms'),
            'garage' => $request->input('garage'),
            'balcony' => $request->input('balcony'),
            'terrace' => $request->input('terrace'),
            'garden' => $request->input('garden'),
            'price' => $request->input('price'),
            'sale_id' => $request->input('sale_id'),
            'status_id' => $request->input('status_id'),
            'address_latitude' => $request->input('address_latitude'),
            'address_longitude' => $request->input('address_longitude'),

        ];

        if(empty($post['garage'])){
            $post['garage'] = 0;
        }
        if(empty($post['balcony'])){
            $post['balcony'] = 0;
        }
        if(empty($post['terrace'])){
            $post['terrace'] = 0;
        }
        if(empty($post['garden'])){
            $post['garden'] = 0;
        }


        $model = Post::create($post);

        foreach ($request->images as $image){
		    $filename = md5(time().$image->getClientOriginalName()).".".$image->getClientOriginalExtension();
                    $image->move(public_path().'/storage/photo', $filename);
                    $filename = 'photo/'.$filename;


            Photo::create([
                'post_id' => $model->id,
                'img' => $filename,
            ]);
        }
        return Redirect::route("showMy");
    }

    public function edit(PostRequest $request, $id_post)
    {
        $post = Post::find($id_post);

        if(!$post){
            return redirect()->to(route('home'));
        }

        $post->title = $request->title;
        $post->description = $request->description;
        // $post->index = $request->index;
        $post->address = $request->address;
        $post->rooms = $request->rooms;
        $post->square = $request->square;
        $post->bedrooms = $request->bedrooms;
        if($request->garage){$post->garage = $request->garage;}else{$post->garage = 0;}
        if($request->balcony){$post->balcony = $request->balcony;}else{$post->garage = 0;}
        if($request->terrace){$post->terrace = $request->terrace;}else{$post->terrace = 0;}
        if($request->garden){$post->garden = $request->garden;}else{$post->garden = 0;}
        $post->price = $request->price;
        $post->sale_id = $request->sale_id;
        $post->status_id = $request->status_id;
        $post->address_latitude = $request->address_latitude;
        $post->address_longitude = $request->address_longitude;

	$post->update();

        return Redirect::route("showMy");
    }

    public function delete($id_post)
    {
        $post = Post::find($id_post);
        dd($post);
    }

    public function filters(Request $request)
    {

        $query = Post::query();

        if ($request->rooms){
            $query = $query->where('rooms' , $request->rooms);
        }
        if ($request->square){
            $query = $query->where('square' , '>=' , $request->square);
        }
        if ($request->bedrooms){
            $query = $query->where('bedrooms' , $request->bedrooms);
        }
        if ($request->garage){
            $query = $query->where('garage' , 'true');
        }
        if ($request->balcony){
            $query = $query->where('balcony' , 'true');
        }
        if ($request->terrace){
            $query = $query->where('terrace' , 'true');
        }
        if ($request->garden){
            $query = $query->where('garden' , 'true');
        }

        $posts = $query->paginate(10);
        return view('allPosts', compact('posts'));
    }

    public function getCity(Request $request)
    {
	$towns = Town::where('name','like', '%'.$request->keyword.'%')->distinct()->select('name')->get();
        $html = '<ul class="list-circle zebra" id="city-list" >';

        foreach ($towns as $row) {
            $html .= "<li style='cursor: pointer;' onClick='selectCity(".'"'.addslashes($row->name).'"'.");'>".$row->name.'</li>';
        }
        $html .= '</ul>';
        return ($html);
    }



    public function home_filters(Request $request)
    {
	$query = $request->get('query');
	$lat = $request->address_latitude;
	$lng = $request->address_longitude;
	$km = ($request->filter_km)?$request->filter_km:1;
	$from_price = $request->from_price;
	$to_price = ($request->to_price)?$request->to_price:1000000;
	$rooms = ($request->rooms)?$request->rooms:0;
	$square = ($request->square)?$request->square:0;
	$bedrooms = ($request->bedrooms)?$request->bedrooms:0;
	$garage = ($request->garage)?1:0;
	$balcony = ($request->balcony)?1:0;
	$terrace = ($request->terrace)?1:0;
	$garden = ($request->garden)?1:0;

	$posts = Post::whereRaw("(6371 * acos(cos(radians($lat)) * cos(radians(address_latitude)) * cos(radians(address_longitude) - radians($lng)) + sin(radians($lat)) * sin(radians(address_latitude))) <= $km)")
		->whereRaw("price BETWEEN $from_price AND $to_price")
		->whereRaw("(rooms = $rooms OR $rooms = 0)")
		->whereRaw("(square >= $square)")
		->whereRaw("((bedrooms = $bedrooms) OR ($bedrooms = 5 AND bedrooms > 5) OR $bedrooms = 0)")
		->whereRaw("(garage = $garage OR $garage = 0)")
		->whereRaw("(balcony = $balcony OR $balcony = 0)")
		->whereRaw("(terrace = $terrace OR $terrace = 0)")
		->whereRaw("(garden = $garden OR $garden = 0)")
		->whereRaw("(is_published = 1)")
		->paginate(10);

        return view('allPosts', compact('posts'));
    }

    public function filterPosts(Request $request)
    {

        $query = Post::query();

	if ($request->days != "") {
		$diff_date = date('Y-m-d', strtotime(date("Y-m-d"). " -".$request->days." day"));
		$query = $query->whereDate('created_at', $diff_date);
	}

        if ($request->price){
            $query = $query->where('price' , '>=' , $request->price);
        }
        if ($request->rooms){
            $query = $query->where('rooms' , $request->rooms);
        }
        if ($request->square){
            $query = $query->where('square' , '>=' , $request->square);
        }
        if ($request->bedrooms){
            $query = $query->where('bedrooms' , $request->bedrooms);
        }
        if ($request->garage){
            $query = $query->where('garage' , 1);
        }
        if ($request->balcony){
            $query = $query->where('balcony' , 1);
        }
        if ($request->terrace){
            $query = $query->where('terrace' , 1);
        }
        if ($request->garden){
            $query = $query->where('garden' , 1);
        }

        $posts = $query->paginate(100);
        return view('gridPosts', compact('posts'));
    }

}
