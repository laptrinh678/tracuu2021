@foreach($datanew as $k=>$v)
  <tr>
      <td>{{$k}}</td>
      <td>{{$v->name}}</td>
   
      <td>
         <button data="{{$v->id}}" class="btn btn-danger delete"><i class="fa fa-trash" aria-hidden="true"></i></button>
          <button class="btn btn-warning edit_tabel" data-toggle="modal" data-target="#edititem" 
          data='
          <?php 
          $arr=[];
           $arr['id']= $v->id;
          $arr['name'] = $v->name;
          $arrjson = json_encode($arr);
          echo $arrjson;
          ?>'>
             <i class="fa fa-pencil" aria-hidden="true"></i>
         </button> 
      </td>
  </tr>
  @endforeach