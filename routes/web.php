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
	return realpath(base_path('resources/views'));
    return view('welcome');

});
Route::get('users' , ['uses' => 'UsersController@index']);
Route::get('users/create' , ['uses' => 'UsersController@create']);
Route::post('users' , ['uses' => 'UsersController@store']);
/*
Route::get('users',function(){
		$users = [
		'0' => [
		'first_name' => 'Somlim',
		'last_name' => 'Khwanyuen',
		'location' => 'Thailand'
		],
		'1' => [
		'first_name' => 'Zine',
		'last_name' =>'Toalek',
		'location' => 'Japan'
		]

	];
	return $users;

});
*/