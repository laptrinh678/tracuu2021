<?php

namespace App\Imports;

use App\phongbanModel;
use Maatwebsite\Excel\Concerns\ToModel;

class PhongbanImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        //dd($row);
       return new phongbanModel([
            'mamon'     => $row[0],
            'ten'    => $row[1], 
            'hocphi'=>$row[3]
          
           
           
           
        ]);
    }
}
