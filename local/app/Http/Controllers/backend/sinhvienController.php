<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Imports\hssv_import;
use App\Exports\congnhanExport;
use Excel;
use App\Congnhan;
use Illuminate\Support\Facades\Schema;
use DB;
use App\product;
use App\lophocmodel;
use App\sinhvienModel;
use File;
class sinhvienController extends Controller
{
    public function getlist()
    {

       
        $data = DB::table('sinhvien')
        ->orderBy('id','desc')
        ->get();
        $lop = lophocmodel::orderBy('id','desc')->get();
        return view('backend.hocsinh.list', compact('data','lop'));
    }
    public function getadd()
    {   
        return view('backend.hocsinh.add');
    }

    public function postadd()
    {
       Excel::import(new CongnhanImport,request()->file('file'));
       return redirect('admin/congnhan/list');
    }

    public function export()
    {
       return Excel::download(new congnhanExport, 'congnhan.xlsx');
    }

    public function getedit($itemJson,$id)
    {	
        $itemdecode = json_decode($itemJson);
        $data = errorModel::find($id);
        $errnameOld = $data->error_code;
        DB::table('limited_value')->where('error_code', $errnameOld)
        ->update(['error_code' => $itemdecode->error_code]);

        $data->error_code = $itemdecode->error_code;
        $data->process_code = $itemdecode->process_code;
        $data->error_name = $itemdecode->error_name;
        $data->solve = $itemdecode->solve;
        $data->status = $itemdecode->status;
        if($itemdecode->statusmess==null)
        {
            $data->statusmess = 0;
        }else
        {
            $data->statusmess = $itemdecode->statusmess;
        }
        $data->user = Auth::user()->name;
        $data->save();

    	$datanew = DB::table('list_error')
            ->leftJoin('process', 'list_error.process_code', '=', 'process.process_id')
            ->select('list_error.*', 'process.process_name', 'process.tag')
            ->orderBy('id','desc')
            ->get();

        return view('backend.error.editajax', compact('datanew'));
    }


     public function postedit(Request $Request, $id)
    {
        $data = errorModel::find($id);
        $errnameOld = $data->error_code;
        DB::table('limited_value')->where('error_code', $errnameOld)->update(['error_code' => $Request->error_code]);

        $data->error_code = $Request->error_code;
    	$data->process_code = $Request->process_code;
    	$data->error_name = $Request->error_name;
    	$data->solve = $Request->solve;
        if($Request->statusmess==null)
        {
            $data->statusmess = 0;
        }else
        {
            $data->statusmess = $Request->statusmess;
        }
    	$data->user = Auth::user()->name;
        $data->save();
    return redirect('admin/error/list')->with('editsucess','Sửa thành công');
    }
    public function getdelete($id)
    {
    	 $delete = Congnhan::find($id);
         $delete->delete();
         $datanew = Congnhan::orderBy('id','desc')->get();
         return view('backend.hocsinh.deleteajax', compact('datanew'));
    }
    public function getstatus($ac, $id)
    {
         DB::table('list_error')
                ->where('id', $id)
                ->update(['status' => $ac]);
         $data = DB::table('list_error')->select('status','id')->where('id', $id)->first();
         return view('backend.error.ajaxstatus', compact('data'));
    }
    public function getstatusMe($ac,$id)
    {
         DB::table('list_error')
                ->where('id', $id)
                ->update(['statusmess' => $ac]);
         $data = DB::table('list_error')->select('statusmess','id')->where('id', $id)->first();
         return view('backend.error.ajaxmess', compact('data'));
    }
    public function getaddhocsinh(Request $request)
    {
        $data = new sinhvienModel;
        $data->ten = $request->ten;
        $data->ngaysinh = $request->ngaysinh;
        $data->gioitinh = $request->gioitinh;
        $data->ma = $request->ma;
        $data->diachi = $request->diachi;
        $data->chinhsach = $request->chinhsach;
        $data->save();
        $datanew = DB::table('sinhvien')
        ->orderBy('id','desc')
        ->get();
        return view('backend.hocsinh.add', compact('datanew'));
    }
    public function getimport()
    {
        return view('backend.hocsinh.import_hssv');
    }
    public function postimport(Request $request)
    {
        // return 'ok';
        Excel::import(new hssv_import,request()->file('file'));
        return redirect('admin/hocvien/list');
       
    }

}
