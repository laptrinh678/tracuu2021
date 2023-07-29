<table class="table table-striped table-bordered" id="table2">
<thead>
    <tr>
       
        <th>TT</th>
        <th>Lớp</th>
        <th>Mã</th>
        <th>
            Tên
        </th>
        <th>Môn học</th>
        <th>Năm học/Học kỳ</th>
        <th>Điểm thi</th>
        <th>Điểm chuyên cần</th>
        <th>Điểm hs1</th>
        <th>Điểm hs2</th>
        <th>Tổng kết</th>
         <th>
            Hành động
        </th>
    </tr>
</thead>
<tbody class="datahocvien">
  
  @foreach($data as $k=>$v)
    <tr> 
     
        <td>{{$k}}</td>
        <td>
        @if(isset($v->tenlop)) {{$v->tenlop}} @endif
        </td>
        <td>
           {{$v->ma}}
        </td>
        <td>{{$v->ho_tendem}} {{$v->tensv}}</td>
        <td>{{$v->ten}}</td>
        <td>
        Năm:{{$v->namhoc}} <br>
        Kỳ:{{$v->hocky}}
        </td>
        <td>{{$v->diemthi}}</td>
        <td>{{$v->diemchuyencan}}</td>
        <td>
        {{$v->diemhs1}}

        </td>
        <td>
        {{$v->diemhs2}}
        </td>
                                          
        <td>
          {{$v->tkmon}}
        </td> 
        <td>          
       <button data="{{$v->id}}" class="btn btn-danger delete"><i class="fa fa-trash" aria-hidden="true"></i></button> 
          
        <button class="btn btn-warning edit_tabel" data-toggle="modal" data-target="#edititem" data="">
            <i class="fa fa-pencil" aria-hidden="true"></i>
        </button>
        </td>
     
    </tr>
  @endforeach
 
    
</tbody>
</table>