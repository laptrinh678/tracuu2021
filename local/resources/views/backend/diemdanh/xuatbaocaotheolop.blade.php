<table class="table2excel" data-tableName="Test Table 1">
  <thead>
    <tr class="noExl tra">
      <td>Tháng </td>
      <td>Lớp</td>
      <td>Ngày học</td>
      <td>Môn học</td>
      <td>Học viên</td>
      
    </tr>
  </thead>
  <tbody>
@foreach($data as $v)
<tr class="tra">
<td>{{$v->thang2}}</td>
<td>{{$v->dcm}}</td>
<td>
  {{$v->ngay}}
</td>
<td>
  {{$v->ten}}
  <br>
  {{$v->hocphi}}
</td>

<td>
<?php
 $hocvDecode = json_decode($v->hocvien_hocphi);
if(isset($hocvDecode))
{
    foreach($hocvDecode as $k=>$a)
    {

        $name = DB::table('congnhan')->where('id',$a->id)->select('ten')->first();
        if(isset($name))
        {
          echo $k+1 .'-'.'<span class="name">'. $name->ten.'</span>'.'-'. 'Hoc phi:'.'<input type="number" readonly class="hphv"'.'value='.'"'.$a->hptheomon.'"'.'>' .'</br>';
          
        }else
        {
          echo '';
        }
    }
}
                                                


?>
</td>

</tr>
@endforeach
  </tbody>
 
</table>
<button class="exportToExcel btn btn-danger" style="margin-top: 5px;">Export to XLS</button>
<button class="btn tonghstheolop">Tổng HV:{{$tshv}}</button>
<button class="btn sethp btn-success">Tính Tổng HP</button>
<button class="btn btn-info" id="tonghp"></button>



<!-- <script>
  $(window).load(function() {
            $('.hp').text('3000');
      });
</script> -->