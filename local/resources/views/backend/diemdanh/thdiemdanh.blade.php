<table class="table2excel" data-tableName="Test Table 1">
  <thead>
    <tr class="noExl tra">
      <td>TT</td>
      <td>Môn học</td>
      <td>Tên HV</td>
      <td>Tháng</td>
      <td>Ngày học</td>
      <td>Ca</td>
      <td>Học phí</td>
    </tr>
  </thead>
  <tbody>
    @foreach($arrhocvien as $k=>$v)
<tr class="tra">
<td>{{$k}}</td>
<td>
{{$v['tenmon']}}
</td>
<td>{{$v['ten']}}</td>
<td>
{{$v['thang']}}
</td>
<td>{{$v['ngayhoc']}}</td>
<td>
@if($v['ca']==1)
{{'Sáng'}}
@elseif($v['ca']==2)
{{'Chiều'}}
@elseif($v['ca']==3)
{{'Tối'}}
@endif
</td>
<td class="hocphi">
{{$v['hocphi']}}
</td>
</tr>
@endforeach
<tr class="tra">
<td>Tổng học phí: </td>
<br>
<td class="ketqua">{{number_format($hocphi,0)}}</td>
</tr>
  </tbody>
</table>
<button class="exportToExcel btn btn-success" style="margin-top: 5px;">Export to XLS</button>


