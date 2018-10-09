<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Group;

class GroupsController extends Controller
{   
	public function getGroups(){
		$groups = Group::get();

    	return view('partials.groups', ['groups' => $groups]);
    }

    public function addGroup(){
    	return view('partials.addGroup');
    }

    public function saveGroup(Request $request){
    	Group::create([
            'name' => $request->input('name')
    	]);

    	//redirects to groups page
    	return redirect()->action('GroupsController@getGroups');
    }
}
