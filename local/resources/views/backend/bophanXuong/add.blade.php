@foreach($datanew as $k=>$v)
<tr>
    <td>{{$k}}</td>
    <td>{{$v->id}}</td>
    <td>{{$v->name}}</td>
    <td>
        {{$v->mabophanxuong}}
    </td>
    <td>
        {{$v->nguoitao}}
    </td>
    <td>
      {{date('d-m-Y H:i:s',strtotime($v->created_at))}}
    </td>
    <td>
         <button data="{{$v->id}}" class="btn btn-danger delete"><i class="fa fa-trash" aria-hidden="true"></i></button>
      
   <!--  <button class="btn btn-warning edit_tabel" data-toggle="modal" data-target="#edititem" data="{{$v}}">
       <i class="fa fa-pencil" aria-hidden="true"></i>
   </button> -->
    </td>
</tr>
@endforeach