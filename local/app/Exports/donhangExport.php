<?php

namespace App\Exports;

use App\donhangmodel;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class donhangExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return donhangmodel::orderBy('id','desc')->get();
    }
     public function headings(): array
    {
        return [
            'Id',
            'Khách hàng',
            'Mã đơn hàng', 
            'Mã đơn hàng khách hàng', 
            'Mã sản phẩm', 
            'Mã Sản phẩm khách hàng', 
            'Số lượng', 
            'Ngày sản xuất', 
        ];
    }
}
