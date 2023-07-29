<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class diemdanhmodel extends Model
{
    protected $fillable = [
        'SourceName', 'tosx','KHACHHANG','MASANPHAM','TENLINHKIEN','TENXUONG','CDSX_1','CDSX_2','GIAY_PCS','SL8H','SL11H','SL27D8H',
            'SL27D11H', 
            'DG_CU', 
            'DG_MOI', 
            'TILEDIEUCHINH', 
            'DieuChinh', 
            'TT8H', 
            'TT11H', 
            'TT27D8H',
            'TT27D11H', 
            'GHICHU', 
            'TT26D8H', 
            'NGAYKY', 
            'NGAYHIEULUC',
            'PDF_FILENAME', 
            'PDF_LINK', 
            'EXCEL_FILENAME', 
            'EXCEL_LINK', 
    ];
    protected $table ="diemdanh";
    public $timestamps = true;
}
