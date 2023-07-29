@foreach($datanew as $k=>$v)
<tr>
    <td>{{$k}}</td>
    <td>{{$v->ngay}}</td>
    <td>
       {{$v->thang2}}
    </td>
    <td>
        @if($v->ca==1)
        {{'Sáng'}}
        @elseif($v->ca==2)
        {{'Chiều'}}
        @elseif($v->ca==3)
        {{'Tối'}}
        @endif
    </td>
    <td>{{$v->ten}}</td>
    <td  class="relative relative2">
       <?php
        $hocvDecode = json_decode($v->hocvien);

        if(isset($hocvDecode))
        {
            foreach($hocvDecode as $a)
            {
                $name = DB::table('congnhan')->where('id',$a)->select('ten')->first();
                echo $name->ten .'<br>';
            }
        }
        
       ?>

    </td>
   
  
    <td>
       <button data="{{$v->id}}"class="btn btn-danger delete"><i class="fa fa-trash" aria-hidden="true"></i></button>
      <button data='
      <?php
      $arr=[];
      $arr['ngay'] = $v->ngay;
       ?>' class="btn btn-warning edititem"><i class="fa fa-pencil" aria-hidden="true"></i></button>
        <button data="{{$v->id}}"class="btn btn-success" data-toggle="modal" data-target="#viewmore"><i class="fa fa-eye" aria-hidden="true"></i></button>
    </td>
</tr>
@endforeach
