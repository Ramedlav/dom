<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\User;
use App\Http\Requests\FormMapRequest;
use App\Models\Boxmap;

class GoogleController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        return view('google-maps.googleAutocomplete');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexMap()
    {
        $boxmap = Boxmap::all();

        $dataMap  = Array();
        $dataMap['type']='FeatureCollection';
        $dataMap['features']=array();
    foreach($boxmap as $value){
                $feaures = array();
                $feaures['type']='Feature';
                $geometry = array("type"=>"Point","coordinates"=>[$value->lng, $value->lat]);
                $feaures['geometry']=$geometry;
                $properties=array('title'=>$value->title,"description"=>$value->description);
                $feaures['properties']= $properties;
                array_push($dataMap['features'],$feaures);
    }
        return View('google-maps.google-map')->with('dataArray',json_encode($dataMap));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FormMapRequest $request)
    {
        $validated = $request->validated();
        Boxmap::create($request->all());
        return redirect('/google-maps')->with('success',"Add map success!");

    }
}
