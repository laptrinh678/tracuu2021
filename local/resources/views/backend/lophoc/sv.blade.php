
@foreach($arrsv as $v)
 <input type="checkbox" name="hocvien[]" class="hocvien" value="{{$v->id}}">
  <label>
  	<?php 
     $name = DB::table('sinhvien')->where('id',$v->id)->select('ten','ho_tendem','lop')->first();
    if(isset($name))
    {
      echo $name->ho_tendem.'&nbsp'. $name->ten.'-'.$name->lop;
    }else
    {
      echo '';
    }
 
  ?> </label><br>
 @endforeach
<input id="check1" type="radio" name="chosse">
<label for="check1">Chọn all</label>
<input id="check2" type="radio" name="chosse">
<label for="check2">bỏ chọn all</label>
<script>
$(document).ready(function(){
$('#check1').click(function()
{ 
$('.hocvien').prop("checked",true);
});
$('#check2').click(function()
{ 
$('.hocvien').prop("checked",false);
})
})
</script>
