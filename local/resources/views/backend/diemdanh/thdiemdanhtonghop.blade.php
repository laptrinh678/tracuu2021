<table class="table2excel" data-tableName="Test Table 1">
  <thead>
    <tr class="noExl tra">
      <td>Tháng</td>
      <td>Học viên</td>
      <td>Số buổi học</td>
      <td>Học phí</td>
      
    </tr>
  </thead>
  <tbody>
<tr class="tra">
  <td>{{$thang}}</td>
<td>{{$tenhocvien->ten}}</td>
<td>
{{$sobuoihoc}}
</td>

<td>
{{number_format($hocphi,0)}}
</td>

</td>
</tr>
   
  </tbody>
 
</table>
<button class="exportToExcel btn btn-success" style="margin-top: 5px;">Export to XLS</button>


