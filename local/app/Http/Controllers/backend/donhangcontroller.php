<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Imports\donhangImport;
use App\Exports\donhangExport;
use Maatwebsite\Excel\Facades\Excel;
use App\donhangmodel;


class donhangcontroller extends Controller
{
    public function getlist()
    {
    	$data = donhangmodel::orderBy('id','desc')->get();
    	return view('backend.donhang.list',compact('data'));
    }
    public function getadd()
    {
    	return view('backend.donhang.add');
    }
    public function postadd()
    {
    	Excel::import(new donhangImport,request()->file('file'));
        return redirect('admin/donhang/list');
    }
     public function export()
    {
       return Excel::download(new donhangExport, 'donhang.xlsx');
    }
     public function getdelete($id)
    {
    	 $delete = donhangmodel::find($id);
         $delete->delete();
         $datanew = donhangmodel::orderBy('id','desc')->get();
         return view('backend.donhang.deleteajax', compact('datanew'));
    }
}
