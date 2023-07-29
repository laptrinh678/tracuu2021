
@foreach($datanew as $k=>$v)
<tr> 
 
    <td>{{$k}}</td>
    <td>
       {{$v->ma}}
    </td>
    <td>{{$v->ten}}</td>
    <td>{{$v->tuoi}}</td>
    <td>{{$v->gioitinh}}</td>
    <td>{{$v->ngaysinh}}</td>
      <td>{{$v->diachi}}</td>                                       
    <td>
    <button data="{{$v->id}}" class="btn btn-danger delete"><i class="fa fa-trash" aria-hidden="true"></i></button>
      
    <button class="btn btn-warning edit_tabel" data-toggle="modal" data-target="#edititem" data="">
        <i class="fa fa-pencil" aria-hidden="true"></i>
    </button>
    </td>
 
</tr>
@endforeach