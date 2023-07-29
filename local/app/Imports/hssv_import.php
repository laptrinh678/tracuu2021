<?php

namespace App\Imports;

use App\sinhvienModel;
use Excel;
use Maatwebsite\Excel\Concerns\ToModel;
use Auth;

class hssv_import implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        //dd('ok2');
           //dd (Auth::user()->name);
     // dd($row);
    //  if($row[1]=null||$row[2]=null||$row[3]=null||$row[4]=null||
    //  $row[5]=null||$row[6]=null||$row[7]=null||$row[8]=null||$row[9]=null||$row[10]=null)
    //  {
    //     $row[1]='xxx';
    //     $row[2]='xxx';
    //     $row[3]='xxx';
    //     $row[4]='xxx';
    //     $row[5]='xxx';
    //     $row[6]='xxx';
    //     $row[7]='xxx';
    //     $row[8]='xxx';
    //     $row[9]='xxx';
    //     $row[10]='xxx';
    //  }
                return new sinhvienModel([
                'lop' => $row[0],
                'ma'    => $row[1], 
                'ho_tendem' => $row[2],
                'ten' => $row[3],
                'ghichu' => $row[4],
                'ngaysinh' => $row[5],
                'gioitinh' => $row[6], 
                'noisinh' => $row[7],
                'nhaphoc' => $row[8],
                'password' => $row[9],
                'nganh' => $row[10],
                'nguoitao' => Auth::user()->name,
                
            ]);
          

                
            
       
           
           
      
    }
}
