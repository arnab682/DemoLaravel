<?php

namespace App\Http\Controllers\Api;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
	public function __construct(){

	}
    public function index(){
    	//return User::all();

    	return response()->json([

    		'error' => 'true'
    	]);
    }
}
