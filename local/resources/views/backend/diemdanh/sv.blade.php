
@foreach($arrsv as $v)
 <input type="checkbox" name="hocvien[]" class="hocvien" value="{{$v}}">
  <label for="vehicle1">
  	<?php 
     $name = DB::table('congnhan')->where('id',$v)->select('ten')->first();
    if(isset($name))
    {
      echo $name->ten;
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