<?php

namespace App\Exports;
use App\sinhvienModel;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use DB;
class dsDuDieuKienThi implements FromCollection,WithHeadings
{

    /**
    * @return \Illuminate\Support\Collection
    */
    public $id_mon_lop;
    public function collection()
    {
        $data = DB::table('ketquahoctap')
        ->where('id',$this->id_mon_lop)
        ->select('dieukienthi','masv','kgdu_dkthi','id_sv')
        ->first();
        $data2['id_sv']= json_decode($data->id_sv);
        $data2['masv']= json_decode($data->masv);
        $data2['dieukienthi']= json_decode($data->dieukienthi);
        $arr = [];
        foreach ($data2['id_sv'] as $k=>$v)
        {

            $arr['id_sv']= $v;
            $dataSv= DB::table('sinhvien')->where('id',$v)->select('ho_tendem','ten')->first();
            $arr['maSv']=$data2['masv'][$k];
            $arr['tenSv']= $dataSv->ho_tendem.$dataSv->ten;
           
            $arr['dieukienthi']=$data2['dieukienthi'][$k];
            $arr2[]= $arr;
        }
        return collect($arr2);
      
    }
    public function headings(): array
    {
        return [
            'id_sv',
            'Mã SV',
            'Họ tên',
            'Điều kiện thi'
            
        ];
    }
}
