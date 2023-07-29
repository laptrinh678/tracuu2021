@foreach($data as $k=>$v)
<tr> 
<td>{{$k+1}}</td>
<td>
    @if(isset($v->tenlop)) {{$v->tenlop}} @endif
    <br>
  {{$v->ho_tendem}} {{$v->tensv}} <br> {{$v->ma}}
  {{$v->id_sv}}
</td>
<td>
  Môn:{{$v->ten}} <br>Tín chỉ: {{$v->tinchi}}
  <br>
  Tính điểm tk:
  @if($v->mon_tinhvaodiemtk==0)
  {{'Có'}}
  @else
  {{'Không'}}
  @endif

</td>
<td>
Năm:{{$v->namhoc}} <br>
Kỳ:{{$v->hocky}}
</td>
<td>{{$v->diem_tbkt}}</td>
<td>
  Lần 1:{{$v->diemthilan1}}
  <br>
  Lần 2: {{$v->diemthilan2}}
</td>

<td>
TĐ10 lần 1:

<?php 
  echo  round($v->tkmon, 1);
?>
<br>
TĐ10 lần 2:

<?php 
  echo  round($v->tkmon_td10_l2, 1);
?>
<br>
Điểm chữ lần 1:
{{$v->diemchu_lan1}}
<br>
Điểm chữ lần 2:
{{$v->diemchu}}
<br>
TĐ4 lần 1:
 <?php 
  echo  round($v->diemso_theodiemchu, 1);
?>

 <br>
 TĐ4 lần 2:
 <?php 
  echo  round($v->diemtheo_td4_l2, 1);
?>
 <br>
TĐ4 chung
 <?php 
  echo  round($v->diemtheo_td4_chung, 1);
?>

</td>
                                  

<td>
       
<button data="{{$v->id}}" class="btn btn-danger delete"><i class="fa fa-trash" aria-hidden="true"></i></button> 
  
  <a href="{{url('admin/diemtheomon/edit')}}/{{$v->id}}">   
<button class="btn btn-warning edit_tabel">
    <i class="fa fa-pencil" aria-hidden="true"></i>
</button>
</a>
<span>{{$v->id}}</span>
</td>

</tr>
@endforeach