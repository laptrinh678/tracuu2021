<?php

namespace App\Imports;

use App\Congnhan;
use Excel;
use Maatwebsite\Excel\Concerns\ToModel;

class CongnhanImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
           
           if($row[0] != null)
           {

                    return new Congnhan([
                    'ma'    => $row[0], 
                    'ten' => $row[1],
                    'tuoi' => $row[2],
                    'gioitinh' => $row[3],
                    'ngaysinh' => $row[4],
                    'diachi' => $row[5]
                   
                ]);
           }

                
            
       
           
           
      
    }
}
