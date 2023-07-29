<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Imports\PhongbanImport;
use Maatwebsite\Excel\Facades\Excel;
use App\monhocModel;
use DB, Auth;
class monhocController extends Controller
{
    public function getlist()
    {


        /*nếu 2 bảng có 2 tên cột trùng nhau AS hỗ trợ định danh lại tên cột ở bảng nào đó muốn lấy thành tên khác*/

      /*  $data = DB::table('phongban')->select('phongban.*','bophan_xuong.name AS gantencotnametrongbophan_xuong')
        ->leftjoin('bophan_xuong', 'phongban.mabophanxuong', '=', 'bophan_xuong.ma_bophanxuong')
        ->get();*/
        $data = monhocModel::orderBy('id','desc')->get();
    	return view('backend.monhoc.list', compact('data'));
    }
    public function postadd(Request $request ,$ten ,$mamon,$tinchi)
    {
	     	$data = new monhocModel;
	     	$data->ten = $ten;
	     	$data->mamon = $mamon;
            $data->tinchi = $tinchi;
	     	$data->nguoitao = Auth::user()->name;
	     	$data->save();
            $datanew = monhocModel::orderBy('id','desc')->get();
	     	return view('backend.monhoc.addajax',compact('datanew'));
    }
    public function getdelete($id)
    {
    	 $delete = monhocModel::find($id);
         $delete->delete();
         $datanew = monhocModel::orderBy('id','desc')->get();
         return view('backend.monhoc.delete', compact('datanew'));
    }

    public function getimport()
    {
        return view('backend.monhoc.add');
    } 
    public function postimport()
    {
        Excel::import(new PhongbanImport,request()->file('file'));
        return redirect('admin/phongban/list');
    }




}
