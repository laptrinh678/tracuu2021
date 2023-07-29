<?php

namespace App\Http\Controllers\fontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\postmodel;
use App\productmodel;
use App\cateproductmodel;
use App\catepostmodel;
use App\productimgdetail;
use Validator;
use DB,Session;
use Response, File;
use App\blockmodel;
use App\khachhangmodel;
use App\customer;
use App\QuestionModel;
use Auth;
use App\sinhvienModel;
class homecontroller extends Controller
{
     public function __construct() {
        @session_start();        
    }    
    public function getlogin()
    {
         return view('frontend.home.home_josh_login');
    }
    public function getthongtin($id)
    {
        $thongtinsv= DB::table('sinhvien')->where('id',$id)->first();
        $datadiem = DB::table('diemtheomon')
        ->select('diemtheomon.*','monhoc.ten','monhoc.tinchi','monhoc.mamon','sinhvien.ho_tendem','sinhvien.ma','sinhvien.ten AS tensv','lophoc.name AS tenlop')
        ->leftjoin('monhoc', 'diemtheomon.id_mon', '=', 'monhoc.id')
        ->leftjoin('sinhvien','diemtheomon.id_sv','=','sinhvien.id')
        ->leftjoin('lophoc','diemtheomon.id_lophoc','=','lophoc.id')
        ->orderBy('diemtheomon.id','desc')
        ->where('id_sv',$id)
        ->get();
        //dd($datadiem);

        return view('frontend.home.detailitem', compact('thongtinsv','datadiem'));
    }
    public function postdoimk(Request $request, $id)
    {
                DB::table('sinhvien')
                ->where('id', $id)
                ->where('ma', $request->ma)
                ->update(['password' => $request->passwornew]);
                return back()->with('successmk','Đổi mật khẩu thành công');

    }
    public function postlogin(Request $request)
    {
           $data = sinhvienModel::where('ma',$request->masv)->where('password',$request->password)->count();
           $datasv = sinhvienModel::where('ma',$request->masv)->select('id')->first();
          //d($datasv);
            if($data==1)
            {
                $_SESSION['admin'] = $request->masv;
                $_SESSION['id'] = $datasv->id;

                return redirect('list')->with('success','Đăng nhập thành công');
            }
            else
            {
                return redirect()->back()->with('err','Vui lòng nhập chính xác mã sinh viên hoặc password');
            }
    }

     public function getlogout()
    {
        $_SESSION['admin'] = '';
        session_unset();
        return redirect('/');
    }
    public function getlist(Request $request)
    {
       //dd($_SESSION['admin']);
        $lop = DB::table('lophoc')->orderBy('id','desc')->select('id','name')->get();
        return view('frontend.master.home', compact('lop'));
    }
    public function getpost($ma_sv,$lop,$hocky2, $namhoc)
    {  
         if($ma_sv==$_SESSION['admin'])
         {
                     $hocky = trim($hocky2);
        $data = DB::table('diemtheomon')->select('diemtheomon.*','monhoc.ten','monhoc.mamon','monhoc.tinchi AS tinchimon','sinhvien.ho_tendem','sinhvien.ma','sinhvien.ten AS tensv','lophoc.name AS tenlop')
        ->leftjoin('monhoc', 'diemtheomon.id_mon', '=', 'monhoc.id')
        ->leftjoin('sinhvien', 'diemtheomon.id_sv', '=', 'sinhvien.id')
        ->leftjoin('lophoc', 'diemtheomon.id_lophoc', '=', 'lophoc.id')
        ->where('diemtheomon.masv',$ma_sv)
        ->where('diemtheomon.hocky',$hocky)
        ->where('diemtheomon.id_lophoc',$lop)
        ->get();
        $data_sv = DB::table('sinhvien')->select('ho_tendem','ten','ma','lop','ngaysinh','noisinh','nganh')
        ->where('ma',$ma_sv)
        ->first();
        $data_tinhdiem = DB::table('diemtheomon')->select('diemtheomon.diemtheo_td4_chung','diemtheomon.mon_tinhvaodiemtk','monhoc.ten','monhoc.tinchi AS tinchimon')
        ->leftjoin('monhoc', 'diemtheomon.id_mon', '=', 'monhoc.id')
        ->leftjoin('sinhvien', 'diemtheomon.id_sv', '=', 'sinhvien.id')
        ->leftjoin('lophoc', 'diemtheomon.id_lophoc', '=', 'lophoc.id')
        ->where('diemtheomon.masv',$ma_sv)
        ->where('diemtheomon.id_lophoc',$lop)
        ->where('diemtheomon.hocky',$hocky)
        ->where('diemtheomon.namhoc',$namhoc)
        ->where ('diemtheomon.mon_tinhvaodiemtk',0)
        ->get();
        $data_diemtichluy= DB::table('diemtheomon')->select('diemtheomon.diemtheo_td4_chung','diemtheomon.mon_tinhvaodiemtk','monhoc.ten','monhoc.tinchi AS tinchimon')
        ->leftjoin('monhoc', 'diemtheomon.id_mon', '=', 'monhoc.id')
        ->leftjoin('sinhvien', 'diemtheomon.id_sv', '=', 'sinhvien.id')
        ->leftjoin('lophoc', 'diemtheomon.id_lophoc', '=', 'lophoc.id')
        ->where('diemtheomon.masv',$ma_sv)
        ->where('diemtheomon.id_lophoc',$lop)
        ->where('diemtheomon.hocky',$hocky)
        ->where('diemtheomon.namhoc',$namhoc)
        ->where ('diemtheomon.mon_tinhvaodiemtk',0)
        ->where('diemtheomon.mon_tinvaodiemtichluy',1)
        ->get();
        if(count($data_tinhdiem)>0)
        {
            $arrdiem_nhan_tinchi =[];
            $arrtinchi =[];
            foreach($data_tinhdiem as $v)
            {
                
                $arrdiem_nhan_tinchi[]= $v->tinchimon * round($v->diemtheo_td4_chung, 1);
                $arrtinchi[]=$v->tinchimon;
            }
            $tongtinchi =array_sum($arrtinchi);
            $tong_diemnhantinchi = array_sum($arrdiem_nhan_tinchi);
            $tbcong_hocky = round($tong_diemnhantinchi/$tongtinchi,2);

            $arrdiem_nhan_tinchi_tichluy =[];
            $arrtinchi_tichluy  =[];
           
           if(count($data_diemtichluy)>0)
           {
                foreach($data_diemtichluy as $v)
                    {
                        $arrdiem_nhan_tinchi_tichluy[]= $v->tinchimon * round($v->diemtheo_td4_chung, 1);
                        $arrtinchi_tichluy[]=$v->tinchimon;
                    }
                    $tongtinchi_tichluy =array_sum($arrtinchi_tichluy);
                    $tong_diemnhantinchi_tichluy = array_sum($arrdiem_nhan_tinchi_tichluy);
                    $tbcong_hocky_tichluy = round($tong_diemnhantinchi_tichluy/$tongtinchi_tichluy,2);
                    return view('frontend.home.table_ajax_tracuu_ma_lop',compact('data','tbcong_hocky','tongtinchi','tbcong_hocky_tichluy','data_sv','tongtinchi_tichluy'));
           }else
           {
                return ' <p class="tb">Sinh viên bị không điểm các môn - vui lòng kiểm tra ở phần tìm kiếm theo mã sinh viên</p>';
           }
           
        }else{
            return '<p class="tb"> Mã sinh viên,lớp, học kỳ, năm học không chính xác</p>';
        }
         }else
        {
            return '<p class="tb">Bạn chỉ có thể xem được điểm của chính mình </p>';
        }

       



    }

    public function get_theonamhoc($ma_sv, $lop, $namhoc)
    {
        if($ma_sv==$_SESSION['admin'])
        {
                $data = DB::table('diemtheomon')->select('diemtheomon.*','monhoc.ten','monhoc.mamon','monhoc.tinchi AS tinchimon','sinhvien.ho_tendem','sinhvien.ma','sinhvien.ten AS tensv','lophoc.name AS tenlop')
        ->leftjoin('monhoc', 'diemtheomon.id_mon', '=', 'monhoc.id')
        ->leftjoin('sinhvien', 'diemtheomon.id_sv', '=', 'sinhvien.id')
        ->leftjoin('lophoc', 'diemtheomon.id_lophoc', '=', 'lophoc.id')
        ->where('diemtheomon.masv',$ma_sv)
        ->where('diemtheomon.namhoc',$namhoc)
        ->where('diemtheomon.id_lophoc',$lop)
        ->get();
        $data_sv = DB::table('sinhvien')->select('ho_tendem','ten','ma','lop','ngaysinh','noisinh','nganh')
        ->where('ma',$ma_sv)
        ->first();
        $data_tinhdiem = DB::table('diemtheomon')->select('diemtheomon.diemtheo_td4_chung','diemtheomon.mon_tinhvaodiemtk','monhoc.ten','monhoc.tinchi AS tinchimon')
        ->leftjoin('monhoc', 'diemtheomon.id_mon', '=', 'monhoc.id')
        ->leftjoin('sinhvien', 'diemtheomon.id_sv', '=', 'sinhvien.id')
        ->leftjoin('lophoc', 'diemtheomon.id_lophoc', '=', 'lophoc.id')
        ->where('diemtheomon.masv',$ma_sv)
        ->where('diemtheomon.id_lophoc',$lop)
        ->where('diemtheomon.namhoc',$namhoc)
        ->where ('diemtheomon.mon_tinhvaodiemtk',0)
        ->get();
        $data_diemtichluy= DB::table('diemtheomon')->select('diemtheomon.diemtheo_td4_chung','diemtheomon.mon_tinhvaodiemtk','monhoc.ten','monhoc.tinchi AS tinchimon')
        ->leftjoin('monhoc', 'diemtheomon.id_mon', '=', 'monhoc.id')
        ->leftjoin('sinhvien', 'diemtheomon.id_sv', '=', 'sinhvien.id')
        ->leftjoin('lophoc', 'diemtheomon.id_lophoc', '=', 'lophoc.id')
        ->where('diemtheomon.masv',$ma_sv)
        ->where('diemtheomon.id_lophoc',$lop)
        ->where('diemtheomon.namhoc',$namhoc)
        ->where ('diemtheomon.mon_tinhvaodiemtk',0)
        ->where('diemtheomon.mon_tinvaodiemtichluy',1)
        ->get();

        if(count($data_tinhdiem)>0)
        {
            $arrdiem_nhan_tinchi =[];
            $arrtinchi =[];
            foreach($data_tinhdiem as $v)
            {
                
                $arrdiem_nhan_tinchi[]= $v->tinchimon * round($v->diemtheo_td4_chung, 1);
                $arrtinchi[]=$v->tinchimon;
            }
            $tongtinchi =array_sum($arrtinchi);
            $tong_diemnhantinchi = array_sum($arrdiem_nhan_tinchi);
            $tbcong_hocky = round($tong_diemnhantinchi/$tongtinchi,2);

            $arrdiem_nhan_tinchi_tichluy =[];
            $arrtinchi_tichluy  =[];
           
           if(count($data_diemtichluy)>0)
           {
                foreach($data_diemtichluy as $v)
                    {
                        $arrdiem_nhan_tinchi_tichluy[]= $v->tinchimon * round($v->diemtheo_td4_chung, 1);
                        $arrtinchi_tichluy[]=$v->tinchimon;
                    }
                    $tongtinchi_tichluy =array_sum($arrtinchi_tichluy);
                    $tong_diemnhantinchi_tichluy = array_sum($arrdiem_nhan_tinchi_tichluy);
                    $tbcong_hocky_tichluy = round($tong_diemnhantinchi_tichluy/$tongtinchi_tichluy,2);
                    return view('frontend.home.table_ajax_tracuu_theonamhoc',compact('data','tbcong_hocky','tongtinchi','tbcong_hocky_tichluy','data_sv','tongtinchi_tichluy'));
           }else
           {
                return ' <p class="tb">Sinh viên bị không điểm các môn - vui lòng kiểm tra ở phần tìm kiếm theo mã sinh viên</p>';
           }
           
        }else{
            return '<p class="tb"> Mã sinh viên,lớp, học kỳ, năm học không chính xác</p>';
        }

        }else
        {
            return '<p class="tb">Bạn chỉ có thể xem được điểm của chính mình </p>';
        }


   
    }

    // tra cuu theo ma sv

     public function get_theomasv($ma_svv)
    { 

        if($ma_svv==$_SESSION['admin'])
        {
            $ma_sv = trim($ma_svv);
            $data = DB::table('diemtheomon')->select('diemtheomon.*','monhoc.ten','monhoc.mamon','monhoc.tinchi AS tinchimon','sinhvien.ho_tendem','sinhvien.ma','sinhvien.ten AS tensv','lophoc.name AS tenlop')
            ->leftjoin('monhoc', 'diemtheomon.id_mon', '=', 'monhoc.id')
            ->leftjoin('sinhvien', 'diemtheomon.id_sv', '=', 'sinhvien.id')
            ->leftjoin('lophoc', 'diemtheomon.id_lophoc', '=', 'lophoc.id')
            ->where('diemtheomon.masv',$ma_sv)
            ->get();
             $data_sv = DB::table('sinhvien')->select('ho_tendem','ten','ma','lop','ngaysinh','noisinh','nganh')
            ->where('ma',$ma_sv)
            ->first();
            if(count($data)>0)
            {
                 
                return view('frontend.home.table_ajax_tracuu_theo_masv',compact('data','data_sv'));
            }else{
                return '<p class="tb">Mã sinh viên không chính xác </p>';
            }
        }else
        {
            return '<p class="tb">Bạn chỉ có thể xem được điểm của chính mình </p>';
        }

    }

   





   
        
    
}