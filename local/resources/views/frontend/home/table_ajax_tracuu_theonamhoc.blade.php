<style type="text/css">
  .trdiem>td{border: 1px solid black;padding: 2px;
    color: black;
   }
  .trdiem,.tra{border: 1px solid black;}
  .tra>td{border: 1px solid black; text-align: center;
    font-size: 14px;
    font-weight: 600;
    background: #2A88B8;
    color: white;
  }
  .data_ketqua{ padding: 10px; }

  .table2excel{ width: 95%;margin: 25px; }
  .tinchi{ width: 50px; }
  .tr_saumoi>td{width: 62px;
    border-bottom: none;
    font-size: 14px;
    border-left: none;
    border-right: 1px solid black;
  }
  .saumoi{width: 60px;}
  .tb_con{ border:none; }
  .none_left{ border-left: none !important; }
  .none_right{ border-right: none !important }
  .tr_saumoi{border-top: 1px solid black;}
  .top{ font-size: 13px; color: black; }
  .top p{text-align: center; font-size: 18px; font-weight: bold;}
</style>
<table class="table2excel" id="source-html-ky" data-tableName="Test Table 1" style="border: 1px solid black">
  <thead>
    <tr class="top noExl">
      <td colspan="13"> <p>BẢNG KẾT QUẢ HỌC TẬP</p>
         <table width="100%" class="tb_con ">
          <tr class="tr_saumoi">
          <td colspan="7">Họ và tên: {{$data_sv->ho_tendem}} {{$data_sv->ten}} </td>
          <td colspan="6" class="none_right">Trường Cao đẳng Xây dựng Số 1</td>
         </tr>
         <tr class="tr_saumoi">
          <td colspan="7">Ngày sinh: {{$data_sv->ngaysinh}}</td>
          <td colspan="6" class="none_right">Ngành: {{$data_sv->nganh}}</td>
         </tr>
         <tr class="tr_saumoi">
          <td colspan="7">Nơi sinh: {{$data_sv->noisinh}}</td>
          <td colspan="6" class="none_right">Khóa học: 2018-2021</td>
         </tr>
         <tr class="tr_saumoi">
          <td colspan="7">Hệ đào tạo: Cao Đẳng</td>
          <td colspan="6" class="none_right">Lớp: {{$data_sv->lop}}</td>
         </tr>
        </table>
      </td>
     
    </tr>
    <tr class="tra noExl">
      <td>#</td>
      <td>Mã HP</td>
      <td>Tên HP</td>
      <td class="tinchi">Tín chỉ</td>
      <td colspan="5"> 
        Thang điểm 10
        <table width="100%" class="tb_con">
          <tr class="tr_saumoi">
          <td class="none_left">Điểm QT</td>
          <td>Thi lần 1</td>
          <td>Thi lần 2</td>
          <td>TB lần 1</td>
          <td class="none_right">TB lần 2</td>
       </tr>
        </table>
      </td> 
       <td colspan="2"> 
        Thang điểm 4
        <table width="100%">
             <tr class="tr_saumoi">
                   
       
          <td class="none_left">TB lần 1</td>
          <td class="none_right">TB lần 2</td>
       </tr>
        </table>
      

      
      </td> 
       <td colspan="2"> 
        Điểm chữ
        <table  width="100%">
             <tr class="tr_saumoi">
                   
       
          <td class="none_left">TB lần 1</td>
          <td class="none_right">TB lần 2</td>
       </tr>
        </table>
      

      
      </td> 
    </tr>
  </thead>
  <tbody>
    @foreach($data as $k=>$v)
        <tr class="trdiem"> 
            <td>{{$k+1}}</td>
            <td>{{$v->mamon}}</td>
            <td>{{$v->ten}}</td>
            <td>{{$v->tinchimon}}</td>
            <td class="saumoi">{{$v->diem_tbkt}}</td>
             <td class="saumoi">{{$v->diemthilan1}}</td>
             <td class="saumoi">{{$v->diemthilan2}}</td>
             <td class="saumoi">
               <?php 
              echo  round($v->tkmon, 1);
              ?>
             </td>
             <td class="saumoi">
               <?php 
               if(isset($v->tkmon_td10_l2))
               {
                  echo  round($v->tkmon_td10_l2, 1);
               }else
               {
                  echo '';
               }
              
              ?>
             </td>
           
           <!--  <td>
            Năm:{{$v->namhoc}} <br>
            Kỳ:{{$v->hocky}}
            </td> -->
            <td class="saumoi" >{{$v->diemso_theodiemchu}}</td>
            <td class="saumoi"> 
              <?php 
              if(isset($v->diemtheo_td4_l2))
              {
                 echo  round($v->diemtheo_td4_l2, 1);
               }else
               {
                 echo '';
               }
             
              ?>
               
            </td>
            <td class="saumoi">{{$v->diemchu_lan1}}</td>
            <td class="saumoi">@if(isset($v->diemchu)) {{$v->diemchu}} @else {{''}}@endif</td>
            
           <!--  <td>
            Thang điểm 10:
            <?php 
              echo  round($v->tkmon, 1);
            ?>
            <br>
            Điểm chữ:
            {{$v->diemchu}}
            <br>
            Thang điểm 4:
            
            </td> -->
                                              
        </tr>
      @endforeach
      <tr class="trdiem">
        <td colspan='3' rowspan="2">Học kỳ :{{$v->hocky}} - năm hoc: {{$v->namhoc}}</td>
        <td colspan="5"> Tổng tín chỉ học tập: <span style="color: red">{{$tongtinchi}}</span></td>
        <td colspan="5">TB chung học tập:  <span style="color: red">{{$tbcong_hocky}}</span></td>
       
      </tr>
       <tr class="trdiem">
      
        <td colspan="5"> Tổng tín chỉ tích lũy: <span style="color: red">{{$tongtinchi_tichluy}}</span>  </td>
        <td colspan="5">TB chung tích lũy: <span style="color: red">{{$tbcong_hocky_tichluy}}</span></td>
       
      </tr>


  </tbody>
</table>
<button class="exportToExcel btn btn-success" style="margin: 5px; margin-left: 25px;">Lưu file excel</button>
 <!-- <button id="btn-export" class=" btn btn-success" onclick="exportHTMLky();">Lưu file
        word </button> -->

<script>
    function exportHTMLky(){
       var header = "<html xmlns:o='urn:schemas-microsoft-com:office:office' "+
            "xmlns:w='urn:schemas-microsoft-com:office:word' "+
            "xmlns='http://www.w3.org/TR/REC-html40'>"+
            "<head><meta charset='utf-8'><title>Export HTML to Word Document with JavaScript</title></head><body>";
       var footer = "</body></html>";
       var sourceHTML = header+document.getElementById("source-html-ky").innerHTML+footer;
       
       var source = 'data:application/vnd.ms-word;charset=utf-8,' + encodeURIComponent(sourceHTML);
       var fileDownload = document.createElement("a");
       document.body.appendChild(fileDownload);
       fileDownload.href = source;
       fileDownload.download = 'document.doc';
       fileDownload.click();
       document.body.removeChild(fileDownload);
    }
</script>