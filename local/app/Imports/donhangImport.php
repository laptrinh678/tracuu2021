<?php

namespace App\Imports;

use App\donhangmodel;
use Maatwebsite\Excel\Concerns\ToModel;

class donhangImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        //dd($row);
       return new donhangmodel([
            'khachhang'=>$row[0],
            'madonhang'=>$row[1],
            'madhkh'=>$row[2],
            'masanpham'=>$row[3],
            'maspkhachhang'=>$row[4],
            'soluong'=>$row[5],
            'ngayxuat'=>$row[6]
          
           
        ]);
    }
}
