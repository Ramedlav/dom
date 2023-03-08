<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\Post;
use App\Models\User;
use App\Models\Province;
use App\Models\Town;

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
        return view('postCreate');
    }

    public function editForm($id_post){
        $post = Post::find($id_post);
        $photos = Post::find($id_post)->photos;
        return view('postEdit',compact('post'),compact('photos'));
    }

    public function getTown(Request $request)
    {
        $towns = Town::where('province_id', $request->province)->get();
        return (compact('towns'));
    }

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
//        $validation = $request->validate([
//           'title'=> 'required|min:5|max:50',
//            'description'=> 'required|min:5',
//           'index'=> 'required|max:7',
//           'address'=> 'required|min:5',
//            'images' => 'image|mimes:jpeg,jpg,bmp,png',
//        ]);



        $post = [
            'user_id' => Auth::user()->id,
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'index' => $request->input('index'),
            'address' => $request->input('address'),
            'rooms' => $request->input('rooms'),
            'square' => $request->input('square'),
            'bedrooms' => $request->input('bedrooms'),
            'garage' => $request->input('garage'),
            'balcony' => $request->input('balcony'),
            'terrace' => $request->input('terrace'),
            'garden' => $request->input('garden'),
            'price' => $request->input('price'),
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
        $post->title = $request->title;
        $post->description = $request->description;
        $post->index = $request->index;
        $post->address = $request->address;
        $post->rooms = $request->rooms;
        $post->square = $request->square;
        $post->bedrooms = $request->bedrooms;
        if($request->garage){$post->garage = $request->garage;}else{$post->garage = 0;}
        if($request->balcony){$post->balcony = $request->balcony;}else{$post->garage = 0;}
        if($request->terrace){$post->terrace = $request->terrace;}else{$post->terrace = 0;}
        if($request->garden){$post->garden = $request->garden;}else{$post->garden = 0;}
        $post->price = $request->price;
        $post->address_latitude = $request->address_latitude;
        $post->address_longitude = $request->address_longitude;

	$post->update();

        return Redirect::route("showMy");
    }

    public function upload($id_post)
    {
        $post = Post::find($id_post);
        dd($post);
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
     $posts = Post::where('address','LIKE','%'.$query.'%')->orderBy('id','desc')->paginate(3);
    //   dd($posts);
	//  $city = $request->city;
    //     $posts = Post::where('price','>=',$request->from_price)->where('price','<=',$request->to_price)
	// 	            ->when($city, function ($query) use ($city) {

    //                     return $query->where('index','like', '%'.$city.'%')
	// 			->orWhere('address','like', '%'.$city.'%');
    //                 })
	// 	->paginate(100);
        return view('filterPosts', compact('posts'));
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
