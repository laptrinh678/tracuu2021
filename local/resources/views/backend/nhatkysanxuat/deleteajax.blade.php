@foreach($datanew as $k=>$v)
<tr>
    <td>{{$k}}</td>
    <td>{{$v->mathe}}</td>
    <td>
       {{$v->hoten}}
    </td>
    <td>{{$v->tongthhoigian}}</td>
    <td>{{$v->madonhang}}</td>
    <td>{{$v->masanpham}}</td>
  <!--   <td>{{$v->btp}}</td> -->
  <!--   <td>{{$v->hangmucgc}}</td> -->
    <td>{{$v->sanluong}}</td> 
   <!--  <td>{{$v->slhangdat}}</td> 
    <td>{{$v->slhangxau}}</td>  -->
    <td>{{$v->dongia}}</td>
    <td>{{$v->thanhtien}}</td> 
    <td>
       <button data="{{$v->id}}"class="btn btn-danger delete"><i class="fa fa-trash" aria-hidden="true"></i></button>
      
       <button class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i></button>
    </td>
</tr>
@endforeach