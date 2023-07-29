<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nhatkysanxuatmodel extends Model
{
     protected $fillable = [
            'mathe', 
            'hoten',
            'tongthhoigian', 
            'madonhang', 
            'masanpham', 
            'btp', 
            'hangmucgc', 
            'sanluong', 
            'slhangdat', 
            'slhangxau',
            'dongia', 
            'thanhtien', 
            'phucap', 
            'congnhatkhoan', 
            'ghichu',
    ];
    protected $table ="nhatkysanxuat";
    public $timestamps = false;
}
