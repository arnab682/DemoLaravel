<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
    public function __construct(){

    }

    public function showWelcome(){

    	$data = [];
    	$data['today'] = date('Y-m-d');
    	$data['time'] = date('H:i:s');
    	//dd($data);

    	//return view('welcome', $data);
    	//return view('welcome', compact('data'));
    	//return view('welcome')->with($data);
    	return view('welcome')->with('today', $data['today']);
    }
}
