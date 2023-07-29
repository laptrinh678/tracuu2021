<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Congnhan extends Model
{ 
	protected $fillable = [
         'ma', 'ten','tuoi','gioitinh','ngaysinh','diachi'
    ];
    protected $table ="congnhan";
    public $timestamps = false;
}
