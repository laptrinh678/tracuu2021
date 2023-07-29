@foreach($datanew as $k=>$v)
  <tr> 
   
      <td>{{$k}}</td>
      <td>
         {{$v->ma}}
      </td>
      <td>{{$v->ten}}</td>
      <td>Giảm {{$v->chinhsach}}%</td>
      <td>
        @if($v->gioitinh==1)
        {{'Nam'}}
        @else($v->gioitinh==2)
        {{'Nữ'}}
        @endif

      </td>
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