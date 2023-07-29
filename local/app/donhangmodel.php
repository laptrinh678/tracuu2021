<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class donhangmodel extends Model
{
     protected $fillable = [
            'khachhang',
            'madonhang', 
            'madhkh', 
            'masanpham', 
            'maspkhachhang', 
            'soluong', 
            'ngayxuat', 
    ];
    protected $table ="donhang";
    public $timestamps = false;
}
