<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use App\Congnhan;

class congnhanExport implements FromCollection,WithHeadings
{
	
     public function collection()
    {
        return Congnhan::all();
    }
    public function headings(): array
    {
        return [
            'Id',
            'name',
            'Mã',
            'Tên',
            'Tên nước',
            'Phòng ban',
            'Bộ phận',
            'Chức vụ',
            'Quốc tịch',
            'Tuổi',
            'Giới tính',
            'Cấp bậc',
            'Ngày sinh',
            'Ngày công tác',
            'CMTND',
            'Ngày cấp CMT',
            'Nơi cấp',
            'Địa chỉ',
            'Tên chi nhánh'
        ];
    }
    
}

