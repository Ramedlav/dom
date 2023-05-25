<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\Post;
use App\Models\User;
use App\Models\Province;
use App\Models\Town;
use App\Models\Status;
use App\Models\Sale;
use App\Models\Floor;
use App\Models\Material;
use App\Models\Construction;
use App\Models\Windows;
use App\Models\Heating;
use App\Models\Finish_condition;
use App\Models\Announcements;
use App\Models\Wishlist;
//use http\Client\Curl\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
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
	$post = Post::find($photo->post_id);

        return view('postEditGallery',compact('photos','post'));
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
	$post = Post::find($request->post_id);

        return view('postEditGallery',compact('photos', 'post'));
    }

    public function deletePhoto(Request $request){
	$photo = Photo::find($request->photo_id)->delete();
        $photos = Post::find($request->post_id)->photos;
	$post = Post::find($request->post_id);
        return view('postEditGallery',compact('photos','post'));
    }

    public function createForm(){
	$statuses=Status::all();
	$sales=Sale::all();
	$constructions = Construction::all();
	$floors=Floor::all();
	$materials=Material::all();
	$windows=Windows::all();
	$heatings=Heating::all();
	$finish_conditions=Finish_condition::all();
	$announcements=Announcements::all();
        // dd($statuses);
        return view('postCreate', compact('statuses', 'sales', 'constructions', 'floors', 'windows', 'materials', 'heatings', 'finish_conditions', 'announcements'));
    }

    public function editForm($id_post){
        $post = Post::find($id_post);
        $statuses=Status::all();
        $sales=Sale::all();
	$constructions = Construction::all();
	$floors=Floor::all();
	$materials=Material::all();
	$windows=Windows::all();
	$heatings=Heating::all();
	$finish_conditions=Finish_condition::all();
	$announcements=Announcements::all();

        if(!$post){
            return redirect()->to(route('home'));
        }

        $photos = Post::find($id_post)->photos;
        if (Auth::user()->id != $post->user->id && Auth::user()->role_id != 1){
            return back()->withInput();
        }else{
            return view('postEdit',compact('post','photos', 'statuses', 'sales', 'constructions', 'floors', 'windows', 'materials', 'heatings', 'finish_conditions', 'announcements'));
        }
    }

//    public function getTown(Request $request)
//    {
//        $towns = Town::where('province_id', $request->province)->get();
//        return (compact('towns'));
//    }

    public function showAll()

    {
	$statuses=Status::all();
	$sales=Sale::all();
	$constructions = Construction::all();
	$floors=Floor::all();
	$materials=Material::all();
	$windows=Windows::all();
	$heatings=Heating::all();
	$finish_conditions=Finish_condition::all();
	$announcements=Announcements::all();
	$wishlists = [];
	if (Auth::check()) { 
		$user_id = Auth::user()->id;
		$wishlists = User::find($user_id)->wishlists;
		$posts = Post::where('status_id',1)->where('user_id','<>',$user_id)->paginate(10);
	}
	else 	$posts = Post::where('status_id',1)->paginate(10);
        return view('allPosts',compact('posts', 'statuses', 'sales', 'constructions', 'floors', 'windows', 'materials', 'heatings', 'finish_conditions', 'announcements', 'wishlists'));
    }

    public function index()
    {
//        $posts = Post::All();
	$posts = Post::paginate(10);
        return view('home',compact('posts'));
    }


    public function myPosts(){
        $user_id = Auth::user()->id;
	$posts = Post::where('status_id',1)->where('user_id','=',Auth::user()->id)->paginate(10);
//        $posts = User::find($user_id)->posts->where('status_id',1)->paginate(10);
        return view('myPosts',compact('posts'));
    }

    public function view($id_post)
    {
        $post = Post::find($id_post);

        if(!$post){
            return redirect()->to(route('home'));
        }

        $photos = Post::find($id_post)->photos;
	$constructions = Construction::all();
	$finish_conditions=Finish_condition::all();
	$floors=Floor::all();
	$wishlists = [];
	if (Auth::check()) { 
		$user_id = Auth::user()->id;
		$wishlists = User::find($user_id)->wishlists;
	}
        return view('post',compact('post', 'photos', 'finish_conditions', 'constructions', 'floors', 'wishlists'));
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
	if (Auth::user()->id != $post->user->id) return Redirect::route("showAll");
        else return Redirect::route("showMy");
    }



    public function create(PostRequest $request)
    {


        $post = [
            'user_id' => Auth::user()->id,
            'title' => $request->input('title'),
            'type_announcement' => $request->input('type_announcement'),
            'description' => $request->input('description'),
            'address' => $request->input('address'),
            'rooms' => $request->input('rooms'),
            'square' => $request->input('square'),
            'bedrooms' => $request->input('bedrooms'),
            'garage' => (empty($request->input('garage')))?0:$request->input('garage'),
            'balcony' => (empty($request->input('balcony')))?0:$request->input('balcony'),
            'terrace' => (empty($request->input('terrace')))?0:$request->input('terrace'),
            'garden' => (empty($request->input('garden')))?0:$request->input('garden'),
            'room_utilitarian' => (empty($request->input('room_utilitarian')))?0:$request->input('room_utilitarian'),
            'two_level' => (empty($request->input('two_level')))?0:$request->input('two_level'),
            'separate_kitchen' => (empty($request->input('separate_kitchen')))?0:$request->input('separate_kitchen'),
            'only_for_non_smokers' => (empty($request->input('only_for_non_smokers')))?0:$request->input('only_for_non_smokers'),
            'air_conditioning' => (empty($request->input('air_conditioning')))?0:$request->input('air_conditioning'),
            'elevator' => (empty($request->input('elevator')))?0:$request->input('elevator'),
            'basement' => (empty($request->input('basement')))?0:$request->input('basement'),
            'furniture' => (empty($request->input('furniture')))?0:$request->input('furniture'),
            'washing_machine' => (empty($request->input('washing_machine')))?0:$request->input('washing_machine'),
            'dishwasher' => (empty($request->input('dishwasher')))?0:$request->input('dishwasher'),
            'refrigerator' => (empty($request->input('refrigerator')))?0:$request->input('refrigerator'),
            'stove' => (empty($request->input('stove')))?0:$request->input('stove'),
            'oven' => (empty($request->input('oven')))?0:$request->input('oven'),
            'tv_set' => (empty($request->input('tv_set')))?0:$request->input('tv_set'),
            'anti_burglary_blinds' => (empty($request->input('anti_burglary_blinds')))?0:$request->input('anti_burglary_blinds'),
            'anti_burglar_doors_windows' => (empty($request->input('anti_burglary_door')))?0:$request->input('anti_burglary_door'),
            'intercom_videophone' => (empty($request->input('intercom_videophone')))?0:$request->input('intercom_videophone'),
            'monitoring_protection' => (empty($request->input('monitoring_protection')))?0:$request->input('monitoring_protection'),
            'alarm_system' => (empty($request->input('alarm_system')))?0:$request->input('alarm_system'),
            'closed_area' => (empty($request->input('closed_area')))?0:$request->input('closed_area'),
            'internet' => (empty($request->input('internet')))?0:$request->input('internet'),
            'cable_tv' => (empty($request->input('cable_tv')))?0:$request->input('cable_tv'),
            'telephone' => (empty($request->input('telephone')))?0:$request->input('telephone'),
            'finish_condition' => $request->input('finish_condition'),
            'year_construction' => $request->input('year_construction'),
            'available_date' => $request->input('available_date'),
            'heating' => $request->input('heating'),
            'windows' => $request->input('windows'),
            'material' => $request->input('material'),
            'floors' => $request->input('floors'),
            'floor' => $request->input('floor'),
            'type_construction' => $request->construction,
            'price' => $request->input('price'),
            'rent_price' => $request->input('rent_price'),
            'sale_id' => $request->input('sale_id'),
            'status_id' => $request->input('status_id'),
            'movie_link' => $request->input('movie_link'),
            'wirtual_link' => $request->input('wirtual_link'),
            'address_latitude' => $request->input('address_latitude'),
            'address_longitude' => $request->input('address_longitude'),

        ];

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

	if (isset($request->price)) $price=$request->price; else $price=0;
	if (isset($request->rent_price)) $rent_price=$request->rent_price; else $rent_price=0;
        $post->title = $request->title;
        $post->description = $request->description;
        // $post->index = $request->index;
        $post->address = $request->address;
        $post->rooms = $request->rooms;
        $post->square = $request->square;
        $post->bedrooms = $request->bedrooms;
        if(isset($request->garage)){$post->garage = 1;}else{$post->garage = 0;}
        if($request->balcony){$post->balcony = $request->balcony;}else{$post->garage = 0;}
        if($request->terrace){$post->terrace = $request->terrace;}else{$post->terrace = 0;}
        if($request->garden){$post->garden = $request->garden;}else{$post->garden = 0;}
        $post->price = $price;
        $post->sale_id = $request->sale_id;
        $post->status_id = $request->status_id;
        $post->address_latitude = $request->address_latitude;
        $post->address_longitude = $request->address_longitude;
        $post->type_announcement = $request->input('type_announcement');
        $post->room_utilitarian = (empty($request->input('room_utilitarian')))?0:$request->input('room_utilitarian');
        $post->two_level = (empty($request->input('two_level')))?0:$request->input('two_level');
        $post->separate_kitchen = (empty($request->input('separate_kitchen')))?0:$request->input('separate_kitchen');
        $post->only_for_non_smokers = (empty($request->input('only_for_non_smokers')))?0:$request->input('only_for_non_smokers');
        $post->air_conditioning = (empty($request->input('air_conditioning')))?0:$request->input('air_conditioning');
        $post->elevator = (empty($request->input('elevator')))?0:$request->input('elevator');
        $post->basement = (empty($request->input('basement')))?0:$request->input('basement');
        $post->furniture = (empty($request->input('furniture')))?0:$request->input('furniture');
        $post->washing_machine = (empty($request->input('washing_machine')))?0:$request->input('washing_machine');
        $post->dishwasher = (empty($request->input('dishwasher')))?0:$request->input('dishwasher');
        $post->refrigerator = (empty($request->input('refrigerator')))?0:$request->input('refrigerator');
        $post->stove = (empty($request->input('stove')))?0:$request->input('stove');
        $post->oven = (empty($request->input('oven')))?0:$request->input('oven');
        $post->tv_set = (empty($request->input('tv_set')))?0:$request->input('tv_set');
        $post->anti_burglary_blinds = (empty($request->input('anti_burglary_blinds')))?0:$request->input('anti_burglary_blinds');
        $post->anti_burglar_doors_windows = (empty($request->input('anti_burglary_door')))?0:$request->input('anti_burglary_door');
        $post->intercom_videophone = (empty($request->input('intercom_videophone')))?0:$request->input('intercom_videophone');
        $post->monitoring_protection = (empty($request->input('monitoring_protection')))?0:$request->input('monitoring_protection');
        $post->alarm_system = (empty($request->input('alarm_system')))?0:$request->input('alarm_system');
        $post->closed_area = (empty($request->input('closed_area')))?0:$request->input('closed_area');
        $post->internet = (empty($request->input('internet')))?0:$request->input('internet');
        $post->cable_tv = (empty($request->input('cable_tv')))?0:$request->input('cable_tv');
        $post->telephone = (empty($request->input('telephone')))?0:$request->input('telephone');
        $post->finish_condition = $request->input('finish_condition');
        $post->year_construction = $request->input('year_construction');
        $post->available_date = $request->input('available_date');
        $post->heating = $request->input('heating');
        $post->windows = $request->input('windows');
        $post->material = $request->input('material');
        $post->floors = $request->input('floors');
        $post->floor = $request->input('floor');
        $post->type_construction = $request->construction;
        $post->rent_price = $rent_price;
        $post->movie_link = $request->input('movie_link');
        $post->wirtual_link = $request->input('wirtual_link');

	$post->update();

	if (Auth::user()->id != $post->user->id) return Redirect::route("showAll");
        else return Redirect::route("showMy");
    }

    public function delete($id_post)
    {
        $post = Post::find($id_post);
        $post->status_id=0;
	$post->update();
	if (Auth::user()->id != $post->user->id) return Redirect::route("showAll");
        else return Redirect::route("showMy");
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
	if (Auth::check()) { $user_id = Auth::user()->id; } else { $user_id = 0; }

	$query = $request->get('query');
	$lat = $request->address_latitude;
	$lng = $request->address_longitude;
	$km = ($request->filter_km)?$request->filter_km:1;
	$from_price = ($request->from_price)?$request->from_price:0;
	$to_price = ($request->to_price)?$request->to_price:5000000;
	$rooms = ($request->rooms)?$request->rooms:0;
	$square = ($request->square)?$request->square:0;
	$bedrooms = ($request->bedrooms)?$request->bedrooms:0;
	$garage = ($request->garage)?1:0;
	$balcony = ($request->balcony)?1:0;
	$terrace = ($request->terrace)?1:0;
	$garden = ($request->garden)?1:0;
	$type_announcement = ($request->input('type_announcement'))?$request->input('type_announcement'):0;
	$sale = ($request->input('sale'))?$request->input('sale'):0;
        $room_utilitarian = (empty($request->input('room_utilitarian')))?0:$request->input('room_utilitarian');
        $two_level = (empty($request->input('two_level')))?0:$request->input('two_level');
        $separate_kitchen = (empty($request->input('separate_kitchen')))?0:$request->input('separate_kitchen');
        $only_for_non_smokers = (empty($request->input('only_for_non_smokers')))?0:$request->input('only_for_non_smokers');
        $air_conditioning = (empty($request->input('air_conditioning')))?0:$request->input('air_conditioning');
        $elevator = (empty($request->input('elevator')))?0:$request->input('elevator');
        $basement = (empty($request->input('basement')))?0:$request->input('basement');
        $furniture = (empty($request->input('furniture')))?0:$request->input('furniture');
        $washing_machine = (empty($request->input('washing_machine')))?0:$request->input('washing_machine');
        $dishwasher = (empty($request->input('dishwasher')))?0:$request->input('dishwasher');
        $refrigerator = (empty($request->input('refrigerator')))?0:$request->input('refrigerator');
        $stove = (empty($request->input('stove')))?0:$request->input('stove');
        $oven = (empty($request->input('oven')))?0:$request->input('oven');
        $tv_set = (empty($request->input('tv_set')))?0:$request->input('tv_set');
        $anti_burglary_blinds = (empty($request->input('anti_burglary_blinds')))?0:$request->input('anti_burglary_blinds');
        $anti_burglar_doors_windows = (empty($request->input('anti_burglary_door')))?0:$request->input('anti_burglary_door');
        $intercom_videophone = (empty($request->input('intercom_videophone')))?0:$request->input('intercom_videophone');
        $monitoring_protection = (empty($request->input('monitoring_protection')))?0:$request->input('monitoring_protection');
        $alarm_system = (empty($request->input('alarm_system')))?0:$request->input('alarm_system');
        $closed_area = (empty($request->input('closed_area')))?0:$request->input('closed_area');
        $internet = (empty($request->input('internet')))?0:$request->input('internet');
        $cable_tv = (empty($request->input('cable_tv')))?0:$request->input('cable_tv');
        $telephone = (empty($request->input('telephone')))?0:$request->input('telephone');
        $finish_condition = (empty($request->input('finish_condition')))?0:$request->input('finish_condition');
        $year_construction = (empty($request->input('year_construction')))?0:$request->input('year_construction');
        $heating = (empty($request->input('heating')))?0:$request->input('heating');
        $windows = (empty($request->input('windows')))?0:$request->input('windows');
        $material = (empty($request->input('material')))?0:$request->input('material');
        $floors = (empty($request->input('floors')))?0:$request->input('floors');
        $floor = (empty($request->input('floor')))?0:$request->input('floor');
        $type_construction = (empty($request->input('construction')))?0:$request->input('construction');

	if ($sale == 2) $field_price="rent_price"; else $field_price="price";
	$lat_lng = (empty($lat) || ($request->address == ""))?"(1 = 1)":"(6371 * acos(cos(radians($lat)) * cos(radians(address_latitude)) * cos(radians(address_longitude) - radians($lng)) + sin(radians($lat)) * sin(radians(address_latitude))) <= $km)";
	$posts = Post::whereRaw("$lat_lng")
		->whereRaw("$field_price BETWEEN $from_price AND $to_price")
		->whereRaw("(rooms = $rooms OR $rooms = 0)")
		->whereRaw("(square >= $square)")
		->whereRaw("((bedrooms = $bedrooms) OR ($bedrooms = 5 AND bedrooms > 5) OR $bedrooms = 0)")
		->whereRaw("(garage = $garage OR $garage = 0)")
		->whereRaw("(balcony = $balcony OR $balcony = 0)")
		->whereRaw("(terrace = $terrace OR $terrace = 0)")
		->whereRaw("(garden = $garden OR $garden = 0)")
		->whereRaw("(type_announcement = $type_announcement OR $type_announcement = 0)")
		->whereRaw("(sale_id = $sale OR $sale = 0)")
		->whereRaw("(type_construction = $type_construction OR $type_construction = 0)")
		->whereRaw("(room_utilitarian = $room_utilitarian OR $room_utilitarian = 0)")
		->whereRaw("(two_level = $two_level OR $two_level = 0)")
		->whereRaw("(separate_kitchen = $separate_kitchen OR $separate_kitchen = 0)")
		->whereRaw("(only_for_non_smokers = $only_for_non_smokers OR $only_for_non_smokers = 0)")
		->whereRaw("(air_conditioning = $air_conditioning OR $air_conditioning = 0)")
		->whereRaw("(elevator = $elevator OR $elevator = 0)")
		->whereRaw("(basement = $basement OR $basement = 0)")
		->whereRaw("(furniture = $furniture OR $furniture = 0)")
		->whereRaw("(washing_machine = $washing_machine OR $washing_machine = 0)")
		->whereRaw("(dishwasher = $dishwasher OR $dishwasher = 0)")
		->whereRaw("(refrigerator = $refrigerator OR $refrigerator = 0)")
		->whereRaw("(stove = $stove OR $stove = 0)")
		->whereRaw("(oven = $oven OR $oven = 0)")
		->whereRaw("(tv_set = $tv_set OR $tv_set = 0)")
		->whereRaw("(anti_burglary_blinds = $anti_burglary_blinds OR $anti_burglary_blinds = 0)")
		->whereRaw("(anti_burglar_doors_windows = $anti_burglar_doors_windows OR $anti_burglar_doors_windows = 0)")
		->whereRaw("(intercom_videophone = $intercom_videophone OR $intercom_videophone = 0)")
		->whereRaw("(monitoring_protection = $monitoring_protection OR $monitoring_protection = 0)")
		->whereRaw("(alarm_system = $alarm_system OR $alarm_system = 0)")
		->whereRaw("(closed_area = $closed_area OR $closed_area = 0)")
		->whereRaw("(internet = $internet OR $internet = 0)")
		->whereRaw("(cable_tv = $cable_tv OR $cable_tv = 0)")
		->whereRaw("(telephone = $telephone OR $telephone = 0)")
		->whereRaw("(finish_condition = $finish_condition OR $finish_condition = 0)")
		->whereRaw("(year_construction = $year_construction OR $year_construction = 0)")
		->whereRaw("(heating = $heating OR $heating = 0)")
		->whereRaw("(windows = $windows OR $windows = 0)")
		->whereRaw("(material = $material OR $material = 0)")
		->whereRaw("(floors = $floors OR $floors = 0)")
		->whereRaw("(floor = $floor OR $floor = 0)")
		->whereRaw("(is_published = 1)")
		->where('user_id','<>',$user_id)
		->paginate(10);

	$statuses=Status::all();
	$sales=Sale::all();
	$constructions = Construction::all();
	$floors=Floor::all();
	$materials=Material::all();
	$windows=Windows::all();
	$heatings=Heating::all();
	$finish_conditions=Finish_condition::all();
	$announcements=Announcements::all();
	$wishlists = [];
	if (Auth::check()) { 
		$user_id = Auth::user()->id;
		$wishlists = User::find($user_id)->wishlists;
	}
        return view('allPosts', compact('posts', 'statuses', 'sales', 'constructions', 'floors', 'windows', 'materials', 'heatings', 'finish_conditions', 'announcements', 'request', 'wishlists'));
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

    public function setWishlist(Request $request)
    {
	Wishlist::where('post_id',$request->post_id)->where('user_id',Auth::user()->id)->delete();
	if ($request->add_del == 1) Wishlist::create(['user_id' => Auth::user()->id,'post_id' => $request->post_id]);
    }

    public function getWishlist(Request $request)
    {
	$user_id = Auth::user()->id;
	$wishlists=Wishlist::where('user_id',Auth::user()->id)->get();
	$posts=Post::whereRaw("exists(select * from wishlists where wishlists.user_id = $user_id and posts.id = wishlists.post_id)")->paginate(10);
        return view('Wishlists', compact('posts','wishlists'));
    }

    public function setSavedSearch(Request $request)
    {
	Auth::user()->saved_search=$request->filter;
	Auth::user()->update();
    }

    public function SavedSearch(Request $request)
    {
	$info_search = json_decode(Auth::user()->saved_search, true);
	$detail_search = array ();
	if (!empty($info_search["type_announcement"])) $detail_search[] = Announcements::find($info_search["type_announcement"])->title;
	if (!empty($info_search["sale"])) $detail_search[] = Sale::find($info_search["sale"])->title;
	if (!empty($info_search["construction"])) $detail_search[] = Construction::find($info_search["construction"])->title;
	if (!empty($info_search["floor"])) $detail_search[] = Floor::find($info_search["floor"])->title;
	if (!empty($info_search["material"])) $detail_search[] = Material::find($info_search["material"])->title;
	if (!empty($info_search["windows"])) $detail_search[] = Windows::find($info_search["windows"])->title;
	if (!empty($info_search["finish_condition"])) $detail_search[] = Finish_condition::find($info_search["finish_condition"])->title;
	if (!empty($info_search["heating"])) $detail_search[] = Heating::find($info_search["heating"])->title;
	if (!empty($info_search["internet"])) $detail_search[] = "internet";
	if (!empty($info_search["cable_tv"])) $detail_search[] = "cable TV";
	if (!empty($info_search["telephone"])) $detail_search[] = "telephone";
	if (!empty($info_search["anti_burglary_blinds"])) $detail_search[] = "anti-burglary blinds";
	if (!empty($info_search["anti_burglary_door"])) $detail_search[] = "anti-burglary doors / windows";
	if (!empty($info_search["intercom_videophone"])) $detail_search[] = "intercom / videophone";
	if (!empty($info_search["monitoring_protection"])) $detail_search[] = "monitoring / protection";
	if (!empty($info_search["alarm_system"])) $detail_search[] = "alarm system";
	if (!empty($info_search["closed_area"])) $detail_search[] = "closed area";
	if (!empty($info_search["furniture"])) $detail_search[] = "furniture";
	if (!empty($info_search["washing_machine"])) $detail_search[] = "washing machine";
	if (!empty($info_search["dishwasher"])) $detail_search[] = "dishwasher";
	if (!empty($info_search["refrigerator"])) $detail_search[] = "refrigerator";
	if (!empty($info_search["stove"])) $detail_search[] = "stove";
	if (!empty($info_search["oven"])) $detail_search[] = "oven";
	if (!empty($info_search["tv_set"])) $detail_search[] = "TV set";
	if (!empty($info_search["garage"])) $detail_search[] = "with garage";
	if (!empty($info_search["balcony"])) $detail_search[] = "with balcony";
	if (!empty($info_search["terrace"])) $detail_search[] = "with terrace";
	if (!empty($info_search["garden"])) $detail_search[] = "with garden";
	if (!empty($info_search["room_utilitarian"])) $detail_search[] = "room utilitarian";
	if (!empty($info_search["two_level"])) $detail_search[] = "two level";
	if (!empty($info_search["separate_kitchen"])) $detail_search[] = "separate kitchen";
	if (!empty($info_search["only_for_non_smokers"])) $detail_search[] = "only for non smokers";
	if (!empty($info_search["air_conditioning"])) $detail_search[] = "air conditioning";
	if (!empty($info_search["elevator"])) $detail_search[] = "elevator";
	if (!empty($info_search["basement"])) $detail_search[] = "basement";

        return view('Savedsearch', compact('info_search', 'detail_search'));
    }

    public function setEmailNotify(Request $request)
    {
	Auth::user()->email_notify = $request->email_notify;
	Auth::user()->update();
    }
    public function delSavedSearch(Request $request)
    {
	Auth::user()->saved_search = '';
	Auth::user()->update();
    }
}
