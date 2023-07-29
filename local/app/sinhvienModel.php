<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sinhvienModel extends Model
{
	protected $fillable = [
          'lop','ma','ho_tendem','ten','ghichu','ngaysinh', 'gioitinh','noisinh','nhaphoc','nguoitao'
    ];
    protected $table ="sinhvien";
    public $timestamps = true;
}
