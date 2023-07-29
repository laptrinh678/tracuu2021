<?php

namespace App\Imports;

use App\nhatkysanxuatmodel;
use Maatwebsite\Excel\Concerns\ToModel;

class nhatkysanxuatImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        dd($row[0]);
        /*if($row[0] != null)
        {
             return new nhatkysanxuatmodel([
                    'mathe'     => $row[0],
                    'hoten'    => $row[1], 
                    'tongthhoigian' => $row[2],
                    'madonhang' => $row[3],
                    'masanpham' => $row[4],
                    'btp' => $row[5],
                    'hangmucgc' => $row[6],
                    'sanluong' => $row[7],
                    'slhangdat' => $row[8],
                    'slhangxau' => $row[9],
                    'dongia' => $row[10],
                    'thanhtien' => $row[11],
                    'phucap' => $row[12],
                    'congnhatkhoan' => $row[13],
                    'ghichu' => $row[14],
                   
                ]);
        }*/
      
    }
}
