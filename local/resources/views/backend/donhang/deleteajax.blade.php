@foreach($datanew as $k=>$v)
  <tr>
      <td>{{$k}}</td>
      <td>{{$v->khachhang}}</td>
      <td>
         {{$v->madonhang}}
      </td>
      <td>{{$v->madhkh}}</td>
      <td>{{$v->masanpham}}</td>
      <td>{{$v->maspkhachhang}}</td>
      <td>{{$v->soluong}}</td>
      <td>{{$v->ngayxuat}}</td>
      <td>
         <button data="{{$v->id}}"class="btn btn-danger delete"><i class="fa fa-trash" aria-hidden="true"></i></button>
       <!--   <button class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i></button> -->
      </td>
  </tr>
@endforeach