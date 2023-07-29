@foreach($datanew as $k=>$v)
<tr>
<td>{{$k}}</td>
<td>{{$v->name}}</td>
<td>
    <?php 

    if($v->id_hocvien != null)
    {
    $arr_idhv = explode(",", $v->id_hocvien);

    foreach($arr_idhv as $k=>$a)
        {
            $name = DB::table('sinhvien')->where('id',$a)->select('ten','ho_tendem')->first();
            if(isset($name))
            {
                echo $k.'-'.$name->ho_tendem.'&nbsp'. $name->ten.',';
            }else
            {
                echo '';
            }
            
        }
    }
    
    ?>
</td>

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
