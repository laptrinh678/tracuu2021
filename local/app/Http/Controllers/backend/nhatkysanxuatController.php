<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Imports\nhatkysanxuatImport;
use App\Exports\nhatkysanxuatexport;
use Maatwebsite\Excel\Facades\Excel;
use App\nhatkysanxuatmodel;
use App\bophanxuongmodell;
use App\phongbanModel;
use Auth,DB;
use App\phieuModel;
class nhatkysanxuatController extends Controller
{
    public function getlist()
    {
    	$data = nhatkysanxuatmodel::orderBy('id','desc')->get();
    	return view('backend.nhatkysanxuat.list',compact('data'));
    }
    public function getadd()
    {
    	return view('backend.nhatkysanxuat.add');
    }
    public function postadd(Request $request)
    {
        $rows = Excel::toArray(new nhatkysanxuatImport, $request->file('file'));
        $arrb = [];
        if($rows[0][0][0] != null)
        {
             foreach($rows[0] as $v)
                {   
                    $arr=[];
                    $arr['mathe'] = $v[0];
                    $arr['hoten'] = $v[1];
                    $arr['tongthoigian'] = $v[2];
                    $arr['madonhang'] = $v[3];
                    $arr['masanpham'] = $v[4];
                    $arr['btp'] = $v[5];
                    $arr['hangmucgiacong'] = $v[6];
                    $arr['sanluong'] = $v[7];
                    $arr['sanluonghangdat'] = $v[8];
                    $arr['sanluonghangxau'] = $v[9];
                    $arr['dongia'] = $v[10];
                    $arr['thanhtien'] = $v[11];
                    $arr['phucap'] = $v[12];
                    $arr['congnhat'] = $v[13];
                    $arr['ghichu'] = $v[14];
                    $arrb[]=$arr;
                }

        }
       
        $datarow = json_encode($arrb);
        $phieu = new phieuModel;
        $phieu->nguoitao = Auth::user()->name;
        $phieu->data = $datarow;
        $phieu->status = 0;
        $phieu->save();
        return redirect('admin/nhatkysanxuat/danhsachphieu');
    }

    public function getchangestatus($status,$id)
    {
         DB::table('phieu')
                ->where('id', $id)
                ->update(['status' => $status]);
         $data = DB::table('phieu')->select('status','id')->where('id', $id)->first();
         return view('backend.nhatkysanxuat.danhsachphieustatus', compact('data'));

    }




     public function export()
    {
       return Excel::download(new nhatkysanxuatexport, 'nhatkysanxuat.xlsx');
    }
     public function getdelete($id)
    {
    	 $delete = nhatkysanxuatmodel::find($id);
         $delete->delete();
         $datanew = nhatkysanxuatmodel::orderBy('id','desc')->get();
         return view('backend.nhatkysanxuat.deleteajax', compact('datanew'));
    }
    public function getsoluongsp()
    {
        return view('backend.nhatkysanxuat.soluongsp');
    }
     public function getbaocaothongke()
    {
        return view('backend.nhatkysanxuat.bctksxhangngay');
    }

    public function getaddphieu()
    {
        $bophan = bophanxuongmodell::select('name','ma_bophanxuong')->orderBy('id','desc')->get();
        return view('backend.nhatkysanxuat.addphieu',compact('bophan'));
    }
    public function getphongbanto($val)
    {
         $data = phongbanModel::select('maphongban','name')->where('mabophanxuong','=',$val)->get();
         return view('backend.nhatkysanxuat.addphongbanto',compact('data'));
    }
    public function getdanhsachphieu()
    {
        $data = phieuModel::orderBy('id','desc')->get();
        return view('backend.nhatkysanxuat.danhsachphieu',compact('data'));
    }
    
}
