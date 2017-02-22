<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(){
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
	return view('admin.users.index',compact('users'));
    }
    public function create(){

    	return view('admin.users.create');
    }
    /*

    public function store(Request $request){

    	return $request->all();
    }

*/

}
