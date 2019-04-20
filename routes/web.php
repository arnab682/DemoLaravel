<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/lol', function () {
    return view('lol');
});

Route::get('/condition', function () {
	$user = array("ami", "tumi", "tomra");
	$name = "ADA";
	$check="";
    return view('pages.condition', compact('user', 'name', 'check'));
});


//Contoller
Route::get('/demo','DemoController@index');
Route::get('/main','DemoController@main');
Route::get('/home','DemoController@home');
Route::get('/about','DemoController@about');
Route::get('/dynamic','DemoController@dynamic');


