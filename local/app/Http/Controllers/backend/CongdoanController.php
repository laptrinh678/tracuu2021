<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Imports\DongiaImport;
use App\Exports\dongiaexport;
use Maatwebsite\Excel\Facades\Excel;
use App\dongiamodel;

class CongdoanController extends Controller
{
    public function getlist()
    {
    	//$data = dongiamodel::all();
    	return view('backend.congdoan.list');
    }
    public function getadd()
    {
    	return view('backend.congdoan.add');
    }
    public function postadd()
    {
    	Excel::import(new DongiaImport,request()->file('file'));
        return redirect('admin/dongia/list');
    }
     public function export()
    {
       return Excel::download(new dongiaexport, 'dongia.xlsx');
    }
     public function getdelete($id)
    {
    	 $delete = dongiamodel::find($id);
         $delete->delete();
         $datanew = dongiamodel::orderBy('id','desc')->get();
         return view('backend.dongia.deleteajax', compact('datanew'));
    }
}
