<?php

namespace App\Imports;

use App\dongiamodel;
use Maatwebsite\Excel\Concerns\ToModel;

class DongiaImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        //dd($row);
       return new dongiamodel([
            'SourceName'     => $row[0],
            'tosx'           => $row[1], 
            'KHACHHANG' => $row[2],
            'MASANPHAM' => $row[3],
            'TENLINHKIEN' => $row[4],
            'TENXUONG' => $row[5],
            'CDSX_1' => $row[6],
            'CDSX_2' => $row[7],
            'GIAY_PCS' => $row[8],
            'SL8H' => $row[9],
            'SL11H' => $row[10],
            'SL27D8H' => $row[11],
            'SL27D11H' => $row[12],
            'DG_CU' => $row[13],
            'DG_MOI' => $row[14],
            'TILEDIEUCHINH' => $row[15],
            'DieuChinh' => $row[16],
            'TT8H' => $row[17],
            'TT11H' => $row[18],
            'TT27D8H' => $row[19],
            'TT27D11H' => $row[20],
            'GHICHU' => $row[21],
            'TT26D8H' => $row[22],
            'NGAYKY' => $row[23],
            'NGAYHIEULUC' => $row[24],
            'PDF_FILENAME' => $row[25],
            'PDF_LINK' => $row[26],
            'EXCEL_FILENAME' => $row[27],
            'EXCEL_LINK' => $row[28]
          
           
        ]);
    }
}
