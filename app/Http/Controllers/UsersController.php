<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Group;

class UsersController extends Controller
{
    public function getUsers(){
    	$users = User::with('group')->get();

    	return view('partials.users', ['users' => $users]);
    }

    public function addUser(){
    	$groups = Group::all();

    	return view('partials.addUser', ['groups' => $groups]);
    }

    public function saveUser(Request $request){
    	User::create([
            'name' => $request->input('name'),
            'group_id' => $request->input('group_id')
    	]);

    	//redirects to users page
    	return redirect()->action('UsersController@getUsers');
    }
}
