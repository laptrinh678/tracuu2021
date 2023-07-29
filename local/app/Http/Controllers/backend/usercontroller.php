<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\backend\member\addrequest;
use App\Http\Requests\backend\member\editRequest;
use App\User;
use Validator, DB;

class usercontroller extends Controller
{
    public function getlist()
    {
    	$users = User::orderBy('id','desc')->get();
    	return view('backend.member.list', compact('users'));
    }
    public function postadd(Request $request)
    {


        $users = new User;
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password =  bcrypt($request->pass);
        $users->level = $request->level;
        $users->save();
        $users = User::orderBy('id','desc')->get();
        return view('backend.member.add', compact('users')); 
    }
    public function getdelete($id)
    {

        $users = User::find($id);
        $users->delete();
        $users = User::orderBy('id','desc')->get();
        return view('backend.member.delete', compact('users'));
    }
}
