@foreach($arrsv as $k=>$v)
<option value="">Chọn sinh viên</option>
<?php 
     $name = DB::table('sinhvien')->where('id',$v)->select('ten','ho_tendem','ma')->first();
    if(isset($name))
    {
      echo '<option'.' value='.'"'.$v.','.$name->ma.'">'.$k.'-'.$name->ho_tendem.'&nbsp'. $name->ten.'-'. $name->ma.'</option>';
    }else
    {
      echo '';
    }
 
  ?> 

@endforeach 