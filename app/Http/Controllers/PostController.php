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



}
