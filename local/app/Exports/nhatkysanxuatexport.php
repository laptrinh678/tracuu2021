<?php

namespace App\Exports;

use App\nhatkysanxuatmodel;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use DB;

class nhatkysanxuatexport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DB::table('nhatkysanxuat')->get();
    }
     public function headings(): array
    {
        return [
            'Id',
            'Mã thẻ', 
            'Họ tên',
            'Tổng thời gian', 
            'Mã đơn hàng', 
            'Mã sản phẩm', 
            'Btp', 
            'Hạng mục gia công', 
            'Sản lượng', 
            'SL hàng đạt', 
            'SL hàng xấu',
            'Đơn giá', 
            'Thành tiền', 
            'Phụ cấp', 
            'Công nhật-khoán', 
            'Ghi chú',
        ];
    }
}
