<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Imports\diemdanhImport;
use App\Exports\diemdanhexport;
use Maatwebsite\Excel\Facades\Excel;
use App\diemdanhmodel;
use App\phongbanModel;
use App\lophocmodel;
use App\Congnhan;
use Carbon\Carbon;
use DB;
class diemdanhController extends Controller
{
    public function getlist()
    {
    	$hocvien = Congnhan::orderBy('id','desc')->select('ten','id')->get();
        $data = DB::table('diemdanh')->select('diemdanh.*','phongban.ten','lophoc.name AS dcm')
        ->leftjoin('phongban', 'diemdanh.monhoc', '=', 'phongban.id')
        ->leftjoin('lophoc','diemdanh.idlophoc','=','lophoc.id')
        ->get();
        $lophoc = lophocmodel::orderBy('id','desc')->select('id','name')->get();
    	return view('backend.diemdanh.list',compact('data','hocvien','lophoc'));
    }
    public function getadd()
    {   $monhoc= phongbanModel:: orderBy('id','desc')->get();
        $hocvien = Congnhan::orderBy('id','desc')->get();
         $lophoc = DB::table('lophoc')->orderBy('id','desc')->select('id','name')->get();
    	return view('backend.diemdanh.add', compact('monhoc','hocvien','lophoc'));
    }
    public function postadd(Request $request)
    {
        $dt = Carbon::now('Asia/Ho_Chi_Minh');

        $data = new diemdanhmodel;
        $data->monhoc = $request->monhoc;

        $datahocphi_mon = DB::table('phongban')->where('id', $request->monhoc)->select('hocphi')->first();
        $data->hocvien =  json_encode($request->hocvien);
        $total_arr_hs_hp = [];
        foreach($request->hocvien as $v)
        {  $arr = [];
           $chinhsachtunghv = DB::table('congnhan')->select('chinhsach')-> where('id',$v)->first();
           $hp_moi_hs_duoc_giam = ($datahocphi_mon->hocphi * $chinhsachtunghv->chinhsach)/100;
           $hp_phainop = $datahocphi_mon->hocphi-$hp_moi_hs_duoc_giam;
           $arr['id'] = $v;
           $arr['hptheomon']= $hp_phainop;
           $total_arr_hs_hp[]= $arr;

        }
        $data->hocvien_hocphi = json_encode($total_arr_hs_hp);
        $data->hocvienchuoi = implode(',', $request->hocvien);
        $data->ngay =$request->ngay;
        $data->thang = $dt->month;
        $data->ca = $request->ca;
        $thang = explode('-',$request->ngay);
        $data->thang2 = ABS($thang[1]);
        $data->idlophoc = $request->lophoc;
        $data->save();
        return redirect('admin/diemdanh/list');
    }
     public function export()
    {
       return Excel::download(new diemdanhexport, 'diemdanh.xlsx');
    }
     public function getdelete($id)
    {
    	 $delete = diemdanhmodel::find($id);
         $delete->delete();
         return redirect('admin/diemdanh/list');
        /* $datanew = DB::table('diemdanh')->select('diemdanh.*','phongban.ten')
        ->leftjoin('phongban', 'diemdanh.monhoc', '=', 'phongban.id')
        ->get();*/
         //return view('backend.diemdanh.deleteajax', compact('datanew'));
    }
    public function xuatbaocaochitieths(Request $request)
    {  
   
        $idhocvien = $request->hocvien;
        $users = DB::table('diemdanh')->where('thang2',$request->thang)
                ->where('hocvienchuoi', 'like', '%'.$request->hocvien.'%')
                ->get();
        //dd($users);
        $arrhocvien =[];
        foreach($users as $v)
        {
            $hocvien =[];
            $hocvien['ngayhoc']=$v->ngay;
            $hocvien['ca']=$v->ca;
            $hocvien['thang']=$v->thang2;
            $hocvien['monhoc']=$v->monhoc;
            $tenmon =DB::table('phongban')->where('id',$v->monhoc)->select('ten','hocphi')->first();
            $hocvien['tenmon'] = $tenmon->ten;
            $hocvien['hocphi'] = $tenmon->hocphi;
            $tenhocvien = DB::table('congnhan') ->select('ten')->where('id',$idhocvien)->first();
            $hocvien['ten']=$tenhocvien->ten;
            $arrhocvien[]=$hocvien;
        }
        $totalhp =[];
        foreach($arrhocvien as $v)
        {
             $totalhp[]=$v['hocphi'];
        }
        $hocphi =array_sum($totalhp);
        return view('backend.diemdanh.xuatbcchitiet_hs', compact('arrhocvien','hocphi'));
    }
    public function xuatbaocaotonghopths(Request $request)
    {  
        //dd('$request->all()');
        $idhocvien = $request->hocvien;
        $users = DB::table('diemdanh')->where('thang2',$request->thang)
                ->where('hocvienchuoi', 'like', '%'.$request->hocvien.'%')
                ->get();
        $sobuoihoc = count($users);
        $thang = $request->thang;
        $tenhocvien = DB::table('congnhan') ->select('ten')->where('id',$idhocvien)->first();
        $arrhocvien =[];
        foreach($users as $k=>$v)
        {
            $hocvien =[];
            $hocvien['ngayhoc']=$v->ngay;
            $hocvien['ca']=$v->ca;
            $hocvien['thang']=$v->thang2;
            $hocvien['monhoc']=$v->monhoc;
            $tenmon =DB::table('phongban')->where('id',$v->monhoc)->select('ten','hocphi')->first();
            $hocvien['tenmon'] = $tenmon->ten;
            $hocvien['hocphi'] = $tenmon->hocphi;
            $tenhocvien = DB::table('congnhan') ->select('ten')->where('id',$idhocvien)->first();
            $hocvien['ten']=$tenhocvien->ten;
            $hocphi['sobuoihoc']= $sobuoihoc;
            $arrhocvien[]=$hocvien;
        }
        $totalhp =[];
        foreach($arrhocvien as $v)
        {
             $totalhp[]=$v['hocphi'];
        }
        $hocphi =array_sum($totalhp);
        return view('backend.diemdanh.thdiemdanhtonghop', compact('tenhocvien','hocphi','sobuoihoc','thang'));
    }

    public function xuatbaocaotheolop(Request $request)
    {
        $tongsohocvien = DB::table('diemdanh')->where('idlophoc',$request->lop)->where('thang2',$request->thang)->select('hocvienchuoi')->get();
        //$hocviendecode = json_decode($tongsohocvien);
        
        $arr =[];
        foreach($tongsohocvien as $v)
        {
           $arr[] = $v->hocvienchuoi;
        }
        $a= implode(',', $arr);
        $pieces = explode(",", $a);
        $tshv= count(($pieces));

       /* $data = DB::table('diemdanh')->where('thang2',$request->thang)->where('idlophoc',$request->lop)->get();*/
        $data = DB::table('diemdanh')->where('thang2',$request->thang)->where('idlophoc',$request->lop)->select('diemdanh.*','phongban.ten','phongban.hocphi','lophoc.name AS dcm')
        ->leftjoin('phongban', 'diemdanh.monhoc', '=', 'phongban.id')
        ->leftjoin('lophoc','diemdanh.idlophoc','=','lophoc.id')
        ->get();

         return view('backend.diemdanh.xuatbaocaotheolop', compact('data','tshv'));
    }
    public function getsv($id)
    {
        $sv = DB::table('lophoc')->where('id',$id)->select('id_hocvien')->first(); 
        $arrsv= explode(',',$sv->id_hocvien);

        return view('backend.diemdanh.sv', compact('arrsv'));
    }
}
