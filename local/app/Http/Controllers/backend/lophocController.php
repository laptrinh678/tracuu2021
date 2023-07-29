<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\lophocmodel;
use App\sinhvienModel;
use Auth, DB;
class lophocController extends Controller
{
    public function getlist()
    {
      $data = lophocmodel::orderBy('id','desc')->get();
      $sv = sinhvienModel::orderBy('id','desc')->get();
      $keylophoc = sinhvienModel::orderBy('id','desc')->select('lop')->distinct()->get();
    	return view('backend.lophoc.list',compact('data','sv','keylophoc'));
    } 

    public function getsv($lop)
    {
       $arrsv = sinhvienModel::orderBy('id','desc')->where('lop',$lop)->get();
       return view('backend.lophoc.sv',compact('arrsv'));
    }
   public function getadd($name,$id_hocvien)
   {

   		$lophoc = new lophocmodel;
   		$lophoc->name = $name;
      $lophoc->id_hocvien = $id_hocvien;
   		$lophoc->usercreat = Auth::user()->name;
   		$lophoc->save();
   		$datanew = lophocmodel::orderBy('id','desc')->get();
	    return view('backend.lophoc.addajax',compact('datanew'));
   }
    public function getdelete($id)
    {
    	 $delete = lophocmodel::find($id);
         $delete->delete();
         $datanew = lophocmodel::orderBy('id','desc')->get();
         return view('backend.lophoc.delete', compact('datanew'));
    }

     public function getedit($nameedit, $idedit)
    {
    	 $dataedit = lophocmodel::find($idedit);
    	 $dataedit->name = $nameedit;
         $dataedit->save();
         $datanew = lophocmodel::orderBy('id','desc')->get();
         return view('backend.lophoc.edit', compact('datanew'));
    }
}
