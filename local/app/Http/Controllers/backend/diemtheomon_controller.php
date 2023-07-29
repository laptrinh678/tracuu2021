<?php

namespace App\Http\Controllers\backend;
use App\Exports\dsDuDieuKienThi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\diemtheomon_model;
use App\monhocModel;
use App\sinhvienModel;
use App\lophocmodel;
use App\ketquahoctapModel;
use App\diemtongketModel;
use Auth;
use Maatwebsite\Excel\Facades\Excel;
use DB;
use Carbon\Carbon;
class diemtheomon_controller extends Controller 
{
    public function getlist()
    {
    	
    	$sinhvien = sinhvienModel::orderBy('id','desc')->get();
		$lophoc = lophocmodel::orderBy('id','desc')->get();
		$monhoc = monhocModel::orderBy('id','desc')->get();
		$data = DB::table('diemtheomon')
		->select('diemtheomon.*','monhoc.ten','monhoc.tinchi','sinhvien.ho_tendem','sinhvien.ma','sinhvien.ten AS tensv','lophoc.name AS tenlop')
        ->leftjoin('monhoc', 'diemtheomon.id_mon', '=', 'monhoc.id')
		->leftjoin('sinhvien','diemtheomon.id_sv','=','sinhvien.id')
		->leftjoin('lophoc','diemtheomon.id_lophoc','=','lophoc.id')
		->orderBy('diemtheomon.id','desc')
		->paginate(15);
    	return view('backend.diemtheomon.list', compact('data','lophoc','monhoc'));

	}

	public function list_datatable()
	{
		$sinhvien = sinhvienModel::orderBy('id','desc')->get();
		$lophoc = lophocmodel::orderBy('id','desc')->get();
		$monhoc = monhocModel::orderBy('id','desc')->get();
		$data = DB::table('diemtheomon')
		->select('diemtheomon.*','monhoc.ten','monhoc.tinchi','sinhvien.ho_tendem','sinhvien.ma','sinhvien.ten AS tensv','lophoc.name AS tenlop')
        ->leftjoin('monhoc', 'diemtheomon.id_mon', '=', 'monhoc.id')
		->leftjoin('sinhvien','diemtheomon.id_sv','=','sinhvien.id')
		->leftjoin('lophoc','diemtheomon.id_lophoc','=','lophoc.id')
		->orderBy('diemtheomon.id','desc')
		->get();
    	return view('backend.diemtheomon.list_datatabel', compact('data','lophoc','monhoc'));
	}
	public function getadd()
	{
		$lophoc = lophocmodel::orderBy('id','desc')->get();
		$monhoc = monhocModel::orderBy('id','desc')
		->select('id','ten','mamon')
		->where('mamon','!=','GDTC')
		->where('mamon','!=','GDQP')->get();	
		return view('backend.diemtheomon.add', compact('monhoc','lophoc'));
	}



	public  function postadd(Request $request)
	{
		$data = new diemtheomon_model;
		$data->id_mon= $request->monhoc;
		$data->id_lophoc= $request->lophoc;
		$data->namhoc= $request->namhoc;
		$datasv = explode(',',$request->id_sv);
		$data->id_sv = $datasv[0];
		$data->masv = $datasv[1];
		$data->hocky= $request->hocky;
		$data->diemthilan1= $request->diemthilan1;
		$data->diemthilan2= $request->diemthilan2;
		$data->diem_tbkt= $request->diem_tbkt;
		// 0 tinh vao diem tk; 1 kg tinh
		$data->mon_tinhvaodiemtk = 0;
			$data->tkmon= $request->diem_tbkt*0.4+$request->diemthilan1*0.6;
			//$data->tkmonchung= $request->diem_tbkt*0.4+$request->diemthilan1*0.6;
			$tkmon =round($data->tkmon, 1);
			if($tkmon>=8.5)
			{
				$data->diemchu_lan1 ='A';
				$data->diemso_theodiemchu= 4;
				$data->diemtheo_td4_chung=4;
				$data->mon_tinvaodiemtichluy =1;
			}elseif($tkmon<8.5 and $tkmon>=8.0)
			{
				$data->diemchu_lan1 ='B+';
				$data->diemso_theodiemchu= 3.5;
				$data->diemtheo_td4_chung=3.5;
				$data->mon_tinvaodiemtichluy =1;
			}elseif($tkmon<8.0 and $tkmon>=7.0)
			{
				$data->diemchu_lan1 ='B';
				$data->diemso_theodiemchu= 3;
				$data->diemtheo_td4_chung=3;
				$data->mon_tinvaodiemtichluy =1;
			}elseif($tkmon<7.0 and $tkmon>=6.5)
			{
				$data->diemchu_lan1 ='C+';
				$data->diemso_theodiemchu= 2.5;
				$data->diemtheo_td4_chung=2.5;
				$data->mon_tinvaodiemtichluy =1;
			}elseif($tkmon<6.5 and $tkmon>=5.5)
			{
				$data->diemchu_lan1 ='C';
				$data->diemso_theodiemchu= 2;
				$data->diemtheo_td4_chung=2;
				$data->mon_tinvaodiemtichluy =1;
			}elseif($tkmon<5.5 and $tkmon>=5.0)
			{
				$data->diemchu_lan1 ='D+';
				$data->diemso_theodiemchu= 1.5;
				$data->diemtheo_td4_chung=1.5;
				$data->mon_tinvaodiemtichluy =1;
			}elseif($tkmon<5.0 and $tkmon>=4.0)
			{
				$data->diemchu_lan1 ='D';
				$data->diemso_theodiemchu= 1;
				$data->diemtheo_td4_chung=1;
				$data->mon_tinvaodiemtichluy =1;
			}else
			{
				$data->diemchu_lan1 ='F';
				$data->diemso_theodiemchu= 0;
				$data->diemtheo_td4_chung=0;
				$data->mon_tinvaodiemtichluy =0;
			}
		if(isset($request->diemthilan2))
		{
			$data->tkmon_td10_l2= $request->diem_tbkt*0.4+$request->diemthilan2*0.6;
			$tkmonl2 =round($data->tkmon_td10_l2, 1);
			//dd($tkmonl2);
			if($tkmonl2>=8.5)
			{
				$data->diemchu ='A';
				$data->diemtheo_td4_l2= 4;
				$data->diemtheo_td4_chung=4;
				$data->mon_tinvaodiemtichluy =1;
			}elseif($tkmonl2<8.5 and $tkmonl2>=8.0)
			{
				$data->diemchu ='B+';
				$data->diemtheo_td4_l2= 3.5;
				$data->diemtheo_td4_chung=3.5;
				$data->mon_tinvaodiemtichluy =1;
			}elseif($tkmonl2<8.0 and $tkmonl2>=7.0)
			{
				$data->diemchu ='B';
				$data->diemtheo_td4_l2= 3;
				$data->diemtheo_td4_chung=3;
				$data->mon_tinvaodiemtichluy =1;
			}elseif($tkmonl2<7.0 and $tkmonl2>=6.5)
			{
				$data->diemchu ='C+';
				$data->diemtheo_td4_l2= 2.5;
				$data->diemtheo_td4_chung=2.5;
				$data->mon_tinvaodiemtichluy =1;
			}elseif($tkmonl2<6.5 and $tkmonl2>=5.5)
			{
				$data->diemchu ='C';
				$data->diemtheo_td4_l2= 2;
				$data->diemtheo_td4_chung=2;
				$data->mon_tinvaodiemtichluy =1;
			}elseif($tkmonl2<5.5 and $tkmonl2>=5.0)
			{
				$data->diemchu ='D+';
				$data->diemtheo_td4_l2= 1.5;
				$data->diemtheo_td4_chung=1.5;
				$data->mon_tinvaodiemtichluy =1;
			}elseif($tkmonl2<5.0 and $tkmonl2>=4.0)
			{
				$data->diemchu ='D';
				$data->diemtheo_td4_l2= 1;
				$data->diemtheo_td4_chung=1;
				$data->mon_tinvaodiemtichluy =1;
			}else
			{
				$data->diemchu ='F';
				$data->diemtheo_td4_l2= 0;
				$data->diemtheo_td4_chung=0;
				$data->mon_tinvaodiemtichluy =0;
			}
		}
		//$data->tkmon= $request->tkmon;
		$data->save();

		return redirect('admin/diemtheomon/list');

	}

	public function getadd_tc()
	{
		$lophoc = lophocmodel::orderBy('id','desc')->get();
		$monhoc = monhocModel::orderBy('id','desc')->select('id','ten','mamon')
		->where('mamon','=','GDTC')
		->orWhere('mamon','=','GDQP')
		->get();		
		return view('backend.diemtheomon.add_tcqp', compact('monhoc','lophoc'));
	}
	public function postadd_tc(Request $request)
	{
		$data = new diemtheomon_model;
		$data->id_mon= $request->monhoc;
		$data->id_lophoc= $request->lophoc;
		$data->namhoc= $request->namhoc;
		$datasv = explode(',',$request->id_sv);
		$data->id_sv = $datasv[0];
		$data->masv = $datasv[1];
		$data->hocky= $request->hocky;
		$data->mon_tinhvaodiemtk = 1;
		$data->tkmon= $request->tkmon;
			$tkmon =round($data->tkmon, 1);
			if($tkmon>=8.5)
			{
				$data->diemchu_lan1 ='A';
				$data->diemso_theodiemchu= 4;
			}elseif($tkmon<8.5 and $tkmon>=8.0)
			{
				$data->diemchu_lan1 ='B+';
				$data->diemso_theodiemchu= 3.5;
			}elseif($tkmon<8.0 and $tkmon>=7.0)
			{
				$data->diemchu_lan1 ='B';
				$data->diemso_theodiemchu= 3;
			}elseif($tkmon<7.0 and $tkmon>=6.5)
			{
				$data->diemchu_lan1 ='C+';
				$data->diemso_theodiemchu= 2.5;
			}elseif($tkmon<6.5 and $tkmon>=5.5)
			{
				$data->diemchu_lan1 ='C';
				$data->diemso_theodiemchu= 2;
			}elseif($tkmon<5.5 and $tkmon>=5.0)
			{
				$data->diemchu_lan1 ='D+';
				$data->diemso_theodiemchu= 1.5;
			}elseif($tkmon<5.0 and $tkmon>=4.0)
			{
				$data->diemchu_lan1 ='D';
				$data->diemso_theodiemchu= 1;
			}else
			{
				$data->diemchu_lan1 ='F';
				$data->diemso_theodiemchu= 0;
			}
		$data->save();
		return redirect('admin/diemtheomon/list');

	}
	public function getsv($id)
    {
		
		$sv = DB::table('lophoc')->where('id',$id)->select('id_hocvien')->first(); 
		
		$arrsv= explode(',',$sv->id_hocvien);
		//var_dump($arrsv);

        return view('backend.diemtheomon.sinhvien', compact('arrsv'));
	}
	public function getdelete($id)
	{
		$delete = diemtheomon_model::find($id);
		$delete->delete();
		$data = DB::table('diemtheomon')
		->select('diemtheomon.*','monhoc.ten','monhoc.tinchi','sinhvien.ho_tendem','sinhvien.ma','sinhvien.ten AS tensv','lophoc.name AS tenlop')
        ->leftjoin('monhoc', 'diemtheomon.id_mon', '=', 'monhoc.id')
		->leftjoin('sinhvien','diemtheomon.id_sv','=','sinhvien.id')
		->leftjoin('lophoc','diemtheomon.id_lophoc','=','lophoc.id')
		->orderBy('diemtheomon.id','desc')
		->get();
    	return view('backend.diemtheomon.delete', compact('data'));

	}
	public function getadd_diembaoluu()
	{
		$lophoc = lophocmodel::orderBy('id','desc')->get();
		$monhoc = monhocModel::orderBy('id','desc')
		->select('id','ten','mamon')
		->where('mamon','!=','GDTC')
		->where('mamon','!=','GDQP')->get();
		return view('backend.diemtheomon.add_diembaoluu', compact('monhoc','lophoc'));
	}

	public function postadd_diembaoluu(Request $request)
	{		
			$data = new diemtheomon_model;
			$data->id_mon= $request->monhoc;
			$data->id_lophoc= $request->lophoc;
			$data->namhoc= $request->namhoc;
			$datasv = explode(',',$request->id_sv);
			$data->id_sv = $datasv[0];
			$data->masv = $datasv[1];
			$data->hocky= $request->hocky;
			$data->mon_tinhvaodiemtk = 0;
			$data->tkmon= $request->tkmon;
			$tkmon =round($data->tkmon, 1);
			if($tkmon>=8.5)
			{
				$data->diemchu_lan1 ='A';
				$data->diemso_theodiemchu= 4;
				$data->diemtheo_td4_chung=4;
			}elseif($tkmon<8.5 and $tkmon>=8.0)
			{
				$data->diemchu_lan1 ='B+';
				$data->diemso_theodiemchu= 3.5;
				$data->diemtheo_td4_chung= 3.5;
			}elseif($tkmon<8.0 and $tkmon>=7.0)
			{
				$data->diemchu_lan1 ='B';
				$data->diemso_theodiemchu= 3;
				$data->diemtheo_td4_chung= 3;
			}elseif($tkmon<7.0 and $tkmon>=6.5)
			{
				$data->diemchu_lan1 ='C+';
				$data->diemso_theodiemchu= 2.5;
				$data->diemtheo_td4_chung= 2.5;
			}elseif($tkmon<6.5 and $tkmon>=5.5)
			{
				$data->diemchu_lan1 ='C';
				$data->diemso_theodiemchu= 2;
				$data->diemtheo_td4_chung= 2;
			}elseif($tkmon<5.5 and $tkmon>=5.0)
			{
				$data->diemchu_lan1 ='D+';
				$data->diemso_theodiemchu= 1.5;
				$data->diemtheo_td4_chung= 1.5;
			}elseif($tkmon<5.0 and $tkmon>=4.0)
			{
				$data->diemchu_lan1 ='D';
				$data->diemso_theodiemchu= 1;
				$data->diemtheo_td4_chung= 1;
			}else
			{
				$data->diemchu_lan1 ='F';
				$data->diemso_theodiemchu= 0;
				$data->diemtheo_td4_chung= 0;
			}
			//dd($data);
		$data->save();
		return redirect('admin/diemtheomon/list');

	}

	public function getedit_monchinh($id)
	{
		$data = DB::table('diemtheomon')
		->select('diemtheomon.*','monhoc.ten','monhoc.id','sinhvien.ho_tendem','sinhvien.ma','sinhvien.ten AS tensv','lophoc.name AS tenlop')
        ->leftjoin('monhoc', 'diemtheomon.id_mon', '=', 'monhoc.id')
		->leftjoin('sinhvien','diemtheomon.id_sv','=','sinhvien.id')
		->leftjoin('lophoc','diemtheomon.id_lophoc','=','lophoc.id')
		->where('diemtheomon.id',$id)
		->first();
		//dd($data);
		//$datadiem = diemtheomon_model::find($id)->first();
		$lophoc = lophocmodel::orderBy('id','desc')->get();
		$monhoc = monhocModel::orderBy('id','desc')->select('id','ten')->get();	
		 return view('backend.diemtheomon.edit_monchinh', compact('lophoc','monhoc','data'));
	}

	public function posgetedit_monchinh(Request $request, $id)
	{

		$data = diemtheomon_model::find($id);
		$data->id_mon= $request->monhoc;
		$data->id_lophoc= $request->lophoc;
		$data->namhoc= $request->namhoc;
		$datasv = explode(',',$request->id_sv);
		$data->id_sv = $datasv[0];
		$data->masv = $datasv[1];
		$data->hocky= $request->hocky;
		$data->diemthilan1= $request->diemthilan1;
		$data->diemthilan2= $request->diemthilan2;
		$data->diem_tbkt= $request->diem_tbkt;
		// 0 tinh vao diem tk; 1 kg tinh
		$data->mon_tinhvaodiemtk = 0;
			$data->tkmon= $request->diem_tbkt*0.4+$request->diemthilan1*0.6;
			//$data->tkmonchung= $request->diem_tbkt*0.4+$request->diemthilan1*0.6;
			$tkmon =round($data->tkmon, 1);
			if($tkmon>=8.5)
			{
				$data->diemchu_lan1 ='A';
				$data->diemso_theodiemchu= 4;
				$data->diemtheo_td4_chung=4;
				
				$data->mon_tinvaodiemtichluy =1;
			}elseif($tkmon<8.5 and $tkmon>=8.0)
			{
				$data->diemchu_lan1 ='B+';
				$data->diemso_theodiemchu= 3.5;
				$data->diemtheo_td4_chung=3.5;
				$data->mon_tinvaodiemtichluy =1;
			}elseif($tkmon<8.0 and $tkmon>=7.0)
			{
				$data->diemchu_lan1 ='B';
				$data->diemso_theodiemchu= 3;
				
				$data->diemtheo_td4_chung=3;
				$data->mon_tinvaodiemtichluy =1;
			}elseif($tkmon<7.0 and $tkmon>=6.5)
			{
				$data->diemchu_lan1 ='C+';
				$data->diemso_theodiemchu= 2.5;
				$data->diemtheo_td4_chung=2.5;
				$data->mon_tinvaodiemtichluy =1;
			}elseif($tkmon<6.5 and $tkmon>=5.5)
			{
				$data->diemchu_lan1 ='C';
				$data->diemso_theodiemchu= 2;
				$data->diemtheo_td4_chung=2;
				$data->mon_tinvaodiemtichluy =1;
			}elseif($tkmon<5.5 and $tkmon>=5.0)
			{
				$data->diemchu_lan1 ='D+';
				$data->diemso_theodiemchu= 1.5;
				$data->diemtheo_td4_chung=1.5;
				$data->mon_tinvaodiemtichluy =1;
			}elseif($tkmon<5.0 and $tkmon>=4.0)
			{
				$data->diemchu_lan1 ='D';
				$data->diemso_theodiemchu= 1;
				$data->diemtheo_td4_chung=1;
				$data->mon_tinvaodiemtichluy =1;
			}else
			{
				$data->diemchu_lan1 ='F';
				$data->diemso_theodiemchu= 0;
				$data->diemtheo_td4_chung=0;
				$data->mon_tinvaodiemtichluy =0;
			}
		if(isset($request->diemthilan2))
		{
			$data->tkmon_td10_l2= $request->diem_tbkt*0.4+$request->diemthilan2*0.6;
			$tkmonl2 =round($data->tkmon_td10_l2, 1);
			if($tkmonl2>=8.5)
			{
				$data->diemchu ='A';
				$data->diemtheo_td4_l2= 4;
				$data->diemtheo_td4_chung=4;
				$data->mon_tinvaodiemtichluy =1;
			}elseif($tkmonl2<8.5 and $tkmonl2>=8.0)
			{
				$data->diemchu ='B+';
				$data->diemtheo_td4_l2= 3.5;
				$data->diemtheo_td4_chung=3.5;
				$data->mon_tinvaodiemtichluy =1;
			}elseif($tkmonl2<8.0 and $tkmonl2>=7.0)
			{
				$data->diemchu ='B';
				$data->diemtheo_td4_l2= 3;
				$data->diemtheo_td4_chung=3;
				$data->mon_tinvaodiemtichluy =1;
			}elseif($tkmonl2<7.0 and $tkmonl2>=6.5)
			{
				$data->diemchu ='C+';
				$data->diemtheo_td4_l2= 2.5;
				$data->diemtheo_td4_chung=2.5;
				$data->mon_tinvaodiemtichluy =1;
			}elseif($tkmonl2<6.5 and $tkmonl2>=5.5)
			{
				$data->diemchu ='C';
				$data->diemtheo_td4_l2= 2;
				$data->diemtheo_td4_chung=2;
				$data->mon_tinvaodiemtichluy =1;
			}elseif($tkmonl2<5.5 and $tkmonl2>=5.0)
			{
				$data->diemchu ='D+';
				$data->diemtheo_td4_l2= 1.5;
				$data->diemtheo_td4_chung=1.5;
				$data->mon_tinvaodiemtichluy =1;
			}elseif($tkmonl2<5.0 and $tkmonl2>=4.0)
			{
				$data->diemchu ='D';
				$data->diemtheo_td4_l2= 1;
				$data->diemtheo_td4_chung=1;
				$data->mon_tinvaodiemtichluy =1;
			}else
			{
				$data->diemchu ='F';
				$data->diemtheo_td4_l2= 0;
				$data->diemtheo_td4_chung=0;
				$data->mon_tinvaodiemtichluy =0;
			}
		}
		$data->save();
		return redirect('admin/diemtheomon/list');

	}
	public function getaddnew()
	{
		$lophoc = lophocmodel::orderBy('id','desc')->get();
		$monhoc = monhocModel::orderBy('id','desc')
		->select('id','ten','mamon')
		->where('mamon','!=','GDTC')
		->where('mamon','!=','GDQP')->get();	
		return view('backend.diemtheomon.add_diemdieukien_theolop_new', compact('monhoc','lophoc'));
	}
	public function postsearch(Request $request)
	{	$masv = trim($request->key);
		$idsv = DB::table('sinhvien')->where('ma',$masv)->first();
		$data = DB::table('diemtheomon')
		->select('diemtheomon.*','monhoc.ten','monhoc.tinchi','sinhvien.ho_tendem','sinhvien.ma','sinhvien.ten AS tensv','lophoc.name AS tenlop')
        ->leftjoin('monhoc', 'diemtheomon.id_mon', '=', 'monhoc.id')
		->leftjoin('sinhvien','diemtheomon.id_sv','=','sinhvien.id')
		->leftjoin('lophoc','diemtheomon.id_lophoc','=','lophoc.id')
		->where('id_sv',$idsv->id)
		->orderBy('diemtheomon.id','desc')
		->get();
		return view('backend.diemtheomon.search', compact('data'));
	}
	public function get_dslop($id)
	{
		 $data_lophoc = lophocmodel::where('id',$id)->first();
		 //dd($data_lophoc);
		 $dssv = $data_lophoc->id_hocvien;
		 $dssv_arr = explode(",",$dssv);
		 $arr_sv =[];
		 foreach ($dssv_arr as $v) 
		 {
		 	$thongtin = DB::table('sinhvien')->where('id', $v)->select('ho_tendem','ma','ten','id')->first();
		 	$arr_sv[] = $thongtin;	
		 }
		 return view('backend.diemtheomon.ds_svtheolop', compact('arr_sv'));
	}
	public function postdiemtheolop(Request $request)
	{
		$data = new ketquahoctapModel;
		$data->id_lop= $request->lophoc;
		$data->namhoc= $request->namhoc;
		$data->hocky= $request->hocky;
		$data->id_monhoc = $request->monhoc;
		$data->id_sv = json_encode($request->id_sv);
		$data->diemtrungbinhkiemtra= json_encode($request->diemtrungbinhkiemtra);
		$data->dieukienthi= json_encode($request->dieukienthi);
		$data->masv= json_encode($request->masv);
		$data->gv_tao = Auth::user()->name;
		$data->save();
		return redirect('admin/diemtheomon/diemtheolop');
		
	}
	public function getdiemtheolop()
	{
		//$data = ketquahoctapModel::orderBy('id', 'desc')->get();
		$data = DB::table('ketquahoctap')
		->select('ketquahoctap.*','ketquahoctap.id AS id_kqht','monhoc.ten','monhoc.id','lophoc.name AS tenlop')
        ->leftjoin('monhoc', 'ketquahoctap.id_monhoc', '=', 'monhoc.id')
		->leftjoin('lophoc','ketquahoctap.id_lop','=','lophoc.id')
		->orderBy('ketquahoctap.id','desc')
		->where('ketquahoctap.status_view','=',1)
		->where('ketquahoctap.status_diemthi','=',0)
		->get();
		//dd($data);
		 return view('backend.diemtheomon.diemtheoloplist',compact('data'));
	}
	public function getdiemtheolop_edit($id)
	{
		$lophoc = lophocmodel::orderBy('id','desc')->get();
		$monhoc = monhocModel::orderBy('id','desc')
		->select('id','ten','mamon')
		->where('mamon','!=','GDTC')
		->where('mamon','!=','GDQP')->get();
		$data_diem = ketquahoctapModel::where ('id', $id)->first();
		$id_sv = json_decode($data_diem->id_sv);
		$diem_tb_kt = json_decode($data_diem->diemtrungbinhkiemtra);
		$dieukienthi = json_decode($data_diem->dieukienthi);
		//dd($dieukienthi );
		$arr=[];
		if(isset($id_sv))
        {
        	foreach ($id_sv as $k=>$v) 
        {
        	$thongtinsv = DB::table('sinhvien')->select('ho_tendem','ten','ma')->where('id',$v)->first();
        	$arr2['id_sv'] = $v;
        	$arr2['ho_tendem'] = $thongtinsv->ho_tendem;
        	$arr2['ten'] = $thongtinsv->ten;
        	$arr2['ma'] = $thongtinsv->ma;
			$arr2['dieukienthi'] = $dieukienthi[$k];
        	$arr2['tb_kt'] =$diem_tb_kt[$k];
        	$arr[]= $arr2;
        }
        }
		return view('backend.diemtheomon.edit_diem_theolop', compact('monhoc','lophoc','data_diem','arr'));
	}

	public function postdiemtheolop_edit(Request $request, $id)
	{
		$data = ketquahoctapModel::find($id);
		$data->id_lop= $request->lophoc;
		$data->namhoc= $request->namhoc;
		$data->hocky= $request->hocky;
		$data->id_monhoc = $request->monhoc;
		$data->id_sv = json_encode($request->id_sv);
		$data->diemtrungbinhkiemtra= json_encode($request->diemtrungbinhkiemtra);
		$data->dieukienthi= json_encode($request->dieukienthi);
		$data->gv_sua = Auth::user()->name;
		$data->ngaysua = Carbon::now('Asia/Ho_Chi_Minh');
		$data->save();
		return redirect('admin/diemtheomon/diemtheolop');
	}
	public function getdelete_diemtheolop($id)
	{
		 $data = ketquahoctapModel::find($id);
		 $data->status_view=0;
		 $data->save();
		 return 'Dữ liệu đã được chuyển vào thùng rác';
	}
	public function diemtheolop_bomonduyet($id)
	{
		//return $id;
		DB::table('ketquahoctap')
            ->where('id', $id)
            ->update( 
            	[
            		'status_bomon' => 2,
            		'bomon_duyet'=>Auth::user()->name,
            		'gio_bomonduyet'=>Carbon::now('Asia/Ho_Chi_Minh')
                ]
            );
		 $dataduyet = ketquahoctapModel::where('id',$id)->select('bomon_duyet','gio_bomonduyet')->first();
		 return view('backend.diemtheomon.bomonduyet', compact('dataduyet'));
		 // return '<button class="btn btn-success bomonduyet"'. 'data='.$dataduyet->status_bomon.'>'.'BM đã duyệt</button>';
		 
	}
	public function diemtheolop_khoaduyet($id)
	{
		DB::table('ketquahoctap')
            ->where('id', $id)
            ->update( 
            	[
            		'khoaduyet' => 1,
            		'nguoiduyet_khoa'=>Auth::user()->name,
            		'gio_khoaduyet'=>Carbon::now('Asia/Ho_Chi_Minh')
                ]
            );
        $khoaduyet = ketquahoctapModel::where('id',$id)->where('khoaduyet',1)->select('nguoiduyet_khoa','gio_khoaduyet')->first();
         return  '<button class="btn btn-success" data=1> Khoa, TT đã duyệt'. $khoaduyet->nguoiduyet_khoa.':'.date('d-m-Y:H', strtotime($khoaduyet->gio_khoaduyet)).'</button>';
	}
	public function diemtheolop_daotaoduyet($id)
	{
		DB::table('ketquahoctap')
            ->where('id', $id)
            ->update( 
            	[
            		'status_daotao' => 1,
            		'daotaoduyet'=>Auth::user()->name,
            		'gio_daotaoduyet'=>Carbon::now('Asia/Ho_Chi_Minh')
                ]
            );
         $dtduyet = ketquahoctapModel::where('id',$id)->where('status_daotao',1)->select('daotaoduyet','gio_daotaoduyet')->first();
         return  '<button class="btn btn-success" data=1> TP Đào tạo đã duyệt'. $dtduyet->daotaoduyet.':'.date('d-m-Y:H', strtotime($dtduyet->gio_daotaoduyet)).'</button>';
	}

	public function diemtheolop_danhsachthi($id)
	{
		//dd($id);
		$dsDuDieuKienThi = new dsDuDieuKienThi;
		$dsDuDieuKienThi->id_mon_lop = $id;
        return Excel::download($dsDuDieuKienThi, $id.'.xlsx');
		//return Excel::download(new dsDuDieuKienThi, $id.'dsDuDieuKienThi.xlsx');
	}
	public function getadd_diemthi($id)
	{
		$lophoc = lophocmodel::orderBy('id','desc')->get();
		$monhoc = monhocModel::orderBy('id','desc')
		->select('id','ten','mamon')
		->where('mamon','!=','GDTC')
		->where('mamon','!=','GDQP')->get();	
		$data_diem = ketquahoctapModel::where ('id', $id)->first();
		$id_sv = json_decode($data_diem->id_sv);
		$diem_tb_kt = json_decode($data_diem->diemtrungbinhkiemtra);
		$dieukienthi = json_decode($data_diem->dieukienthi);
		$arr=[];
		if(isset($id_sv))
        {
        	foreach ($id_sv as $k=>$v) 
        {
        	$thongtinsv = DB::table('sinhvien')->select('ho_tendem','ten','ma')->where('id',$v)->first();
        	$arr2['id_sv'] = $v;
        	$arr2['ho_tendem'] = $thongtinsv->ho_tendem;
        	$arr2['ten'] = $thongtinsv->ten;
        	$arr2['ma'] = $thongtinsv->ma;
        	$arr2['tb_kt'] =$diem_tb_kt[$k];
        	$arr2['dieukienthi'] =$dieukienthi[$k];
        	$arr[]= $arr2;
        }
        }
		return view('backend.diemtheomon.add_diemthitheolop', compact('lophoc', 'monhoc','data_diem','arr'));
	}

	public function postadd_diemthi(Request $request, $id)
	{
		$data = ketquahoctapModel::find($id);
		$data->diemthilan1= json_encode($request->diemthi);
		$data->masv= json_encode($request->masv);
		$data->kgdu_dkthi= json_encode($request->kgdu_dkthi);
		$data->save();
		return redirect('admin/diemtheomon/diemtbkt_diemthi');
	}


	public function getadd_diemthi_lan2($id)
	{
		$lophoc = lophocmodel::orderBy('id','desc')->select('id','name')->get();
		$monhoc = monhocModel::orderBy('id','desc')
		->select('id','ten','mamon')
		->where('mamon','!=','GDTC')
		->where('mamon','!=','GDQP')->get();	
		$data_diem = ketquahoctapModel::where ('id', $id)->first();
		//dd($data_diem->id_lop);
		$id_sv = json_decode($data_diem->id_sv);
		$diem_tb_kt = json_decode($data_diem->diemtrungbinhkiemtra);
		$diemthilan1 = json_decode($data_diem->diemthilan1);
		$dieukienthi = json_decode($data_diem->dieukienthi);
		$arr=[];
		if(isset($id_sv))
        {
        	foreach ($id_sv as $k=>$v) 
        {
        	$thongtinsv = DB::table('sinhvien')->select('ho_tendem','ten','ma')->where('id',$v)->first();
        	$arr2['id_sv'] = $v;
        	$arr2['ho_tendem'] = $thongtinsv->ho_tendem;
        	$arr2['ten'] = $thongtinsv->ten;
        	$arr2['ma'] = $thongtinsv->ma;
        	$arr2['tb_kt'] =$diem_tb_kt[$k];
        	$arr2['diemthi'] =$diemthilan1[$k];
        	$arr2['dieukienthi'] =$dieukienthi[$k];
        	$arr[]= $arr2;
        }
        }
		return view('backend.diemtheomon.add_diemthitheolopLan2', compact('lophoc', 'monhoc','data_diem','arr'));
	}

	public function postadd_diemthi_lan2(Request $request, $id)
	{
		$data = ketquahoctapModel::find($id);
		$data->diemthilan2= json_encode($request->diemthilan2);
		$data->save();
		return back();
	}


	public function getdiemtbkt_diemthi()
	{
		$data = DB::table('ketquahoctap')
		->select('ketquahoctap.*','ketquahoctap.id AS id_kqht','monhoc.ten','monhoc.id','lophoc.name AS tenlop')
        ->leftjoin('monhoc', 'ketquahoctap.id_monhoc', '=', 'monhoc.id')
		->leftjoin('lophoc','ketquahoctap.id_lop','=','lophoc.id')
		->orderBy('ketquahoctap.id','desc')
		->where('ketquahoctap.status_view','=',1)
		->where('ketquahoctap.status_diemthi','=',0)
		->get();
		//dd($data);
		 return view('backend.diemtheomon.diemtheolop_tbkt_thi',compact('data'));

	}
	public function gettp_khaothiduyet($idkqht)
	{
		DB::table('ketquahoctap')
            ->where('id', $idkqht)
            ->update( 
            	[
            		'tp_khaothiduyet' => 1
                ]
            );
         return  '<button class="btn btn-success" data=1> TP Khảo thí đã duyệt</button>';

	}
	public function dongbo_sangdiemtheomon($idkqht)
	{
		//dd($idkqht);
		$data = DB::table('ketquahoctap')
			->select('id_monhoc','id_lop','id_sv',
				'diemtrungbinhkiemtra','diemthilan1','masv','hocky','namhoc','kgdu_dkthi')
            ->where('id', $idkqht)
            ->first();
        $data2=[];
        $data2['id_sv'] = json_decode($data->id_sv);
        $data2['diemtrungbinhkiemtra'] =json_decode($data->diemtrungbinhkiemtra);
        $data2['diemthilan1'] =json_decode($data->diemthilan1);
        $data2['masv'] =json_decode($data->masv);
        $data2['kgdu_dkthi'] =json_decode($data->kgdu_dkthi);
        $data2['hocky'] =$data->hocky;
        $data2['id_lop'] =$data->id_lop;
        $data2['id_mon'] =$data->id_monhoc;
        $data2['namhoc'] =$data->namhoc;
       foreach ($data2['id_sv'] as $k=>$v) 
       {
       	  DB::table('diemtongket')->insert(
       	  	[
				[
					'id_sv' => $v,
				    'masv' => $data2['masv'][$k],
				    'id_mon' => $data2['id_mon'],
				    'id_lop' => $data2['id_lop'],
				    'diemtrungbinhkiemtra' => $data2['diemtrungbinhkiemtra'][$k],
				    'diemthilan1' => $data2['diemthilan1'][$k],
				    'kgdu_dkthi' => $data2['kgdu_dkthi'][$k],
				    'hocky' => $data2['hocky'],
				    'namhoc'=>$data2['namhoc']
				]
				
			]);
       	
       }
       return redirect('admin/diemtheomon/diemtongket_toantruong');
	}

	public function diemtongket_toantruong()
	{
		
		$data = DB::table('diemtongket')
		->select('diemtongket.*','diemtongket.id AS id_diemtongket','monhoc.ten AS tenmon','lophoc.name AS tenlop','sinhvien.ho_tendem','sinhvien.ten')
		->leftjoin('monhoc', 'diemtongket.id_mon', '=', 'monhoc.id')
		->leftjoin('lophoc', 'diemtongket.id_lop', '=', 'lophoc.id')
		->leftjoin('sinhvien', 'diemtongket.id_sv', '=', 'sinhvien.id')
		->orderBy('diemtongket.id','desc')->get();
		 return view('backend.diemtheomon.diemtongket_toantruong',compact('data'));
	}
	public function diemtongket_dongbo()
	{
		$data = DB::table('diemtongket')
		->select('diemtongket.*','diemtongket.id AS id_diemtongket','monhoc.tinchi')
		->leftjoin('monhoc', 'diemtongket.id_mon', '=', 'monhoc.id')
		->where('kgdu_dkthi','=','Đã thi')
		->orderBy('diemtongket.id','desc')
		->get();
		foreach ($data as $v)
		{
			$data = diemtongketModel::find($v->id);
			$data->tk_monlan1= $v->diemtrungbinhkiemtra*0.4 +$v->diemthilan1*0.6;
			$data->save();
		}
		return back();
	}

}
