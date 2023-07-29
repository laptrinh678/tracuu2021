<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\bophanxuongmodell;
use Auth,Validator;
class bophanxuongController extends Controller
{
    public function getlist()
    {
    	$data =  bophanxuongmodell::orderBy('id','desc')->get();
    	return view('backend.bophanXuong.list', compact('data'));
    }
    public function postadd(Request $request ,$name ,$mabophanxuong)
    {
	     	$data = new bophanxuongmodell;
	     	$data->name = $name;
	     	$data->mabophanxuong = $mabophanxuong;
	     	$data->nguoitao = Auth::user()->name;
	     	$data->save();
	     	$datanew = bophanxuongmodell::orderBy('id','desc')->get();
	     	return view('backend.bophanXuong.add',compact('datanew'));
    }
    public function getdelete($id)
    {
    	 $delete = bophanxuongmodell::find($id);
         $delete->delete();
         $datanew = bophanxuongmodell::orderBy('id','desc')->get();
         return view('backend.bophanXuong.delete', compact('datanew'));
    }




}
