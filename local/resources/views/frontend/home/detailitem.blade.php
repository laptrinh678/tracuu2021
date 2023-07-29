@extends('frontend.master.index')
@section('title')
Trang chủ
@endsection('title')
@section('style')
   <link rel="stylesheet" type="text/css" href="{{url('public/frontend/frontend_josh')}}/css/news.css">
    <link rel="stylesheet" type="text/css" href="{{url('public/frontend/frontend_josh')}}/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{url('public/frontend/frontend_josh')}}/css/blog.css">
@endsection('style')
@section('content')
<style type="text/css">
  .tb{ text-align: center; font-size: 20px; color: red; margin-top: 40px; }
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
  .doimkform{ display: none; }
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

    <!-- Layout Section Start -->
    <section class="feature-main">
         @if(session('success'))
         <p class="alert_width">{{session('success')}} -Xin chào {{$_SESSION['admin']}} </p>
          @endif
        <!-- Container Section Start -->
    <div class="container">
        <div class="row">
            <!-- Jelly-o sesame Section Strat -->
            <div class="col-sm-7 col-md-9">
                <div class="col-md-12">
                    <div class="news_item_image thumbnail">
                        <label>
                            <a href="news_item.html"><h3 class="primary news_headings">THÔNG TIN SINH VIÊN</h3></a>
                        </label>
                   
                        <div class="news_item_text_1">
                           <table class="table">
                                <thead>
                                  <tr class="border">
                                   
                                    <th scope="col">Họ và tên</th>
                                    <th scope="col">Mã sinh viên</th>
                                    <th scope="col">Lớp</th>
                                    <th scope="col">Ngày sinh</th>
                                    <th scope="col">Nơi sinh</th>
                                   
                                    <th scope="col">Ngành</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr  class="border">
                                   
                                    <td>{{$thongtinsv->ho_tendem}}{{$thongtinsv->ten}}</td>
                                    <td>{{$thongtinsv->ma}}</td>
                                    <td>{{$thongtinsv->lop}}</td>
                                    <td>{{$thongtinsv->ngaysinh}}</td>
                                    <td>{{$thongtinsv->noisinh}}</td>
                                  
                                    <td>{{$thongtinsv->nganh}}</td>
                                  
                                  </tr>
                                  
                                </tbody>
                              </table>
                        </div>
                    </div>
                              <div class="news_item_image thumbnail">
                        <label>
                            <a href="news_item.html"><h3 class="primary news_headings">THÔNG TIN HỌC PHÍ</h3></a>
                        </label>
                   
                        <div class="news_item_text_1">
                           <table class="table">
                                <thead>
                                  <tr class="border">
                                   
                                    <th scope="col">Họ và tên</th>
                                    <th scope="col">Mã sinh viên</th>
                                    <th scope="col">Lớp</th>
                                    <th scope="col">Ngày sinh</th>
                                    <th scope="col">Nơi sinh</th>
                                    <th scope="col">Học kỳ</th>
                                    <th scope="col">Năm học</th>
                                    <th scope="col">Trạng thái</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr  class="border">
                                   
                                    <td>{{$thongtinsv->ho_tendem}}{{$thongtinsv->ten}}</td>
                                    <td>{{$thongtinsv->ma}}</td>
                                    <td>{{$thongtinsv->lop}}</td>
                                    <td>{{$thongtinsv->ngaysinh}}</td>
                                    <td>{{$thongtinsv->noisinh}}</td>
                                    <td></td>
                                    <td></td>
                                    <td> <button class="btn btn-success">Đã đóng</button></td>
                                  
                                  </tr>
                                   <tr  class="border">
                                   
                                    <td>{{$thongtinsv->ho_tendem}}{{$thongtinsv->ten}}</td>
                                    <td>{{$thongtinsv->ma}}</td>
                                    <td>{{$thongtinsv->lop}}</td>
                                    <td>{{$thongtinsv->ngaysinh}}</td>
                                    <td>{{$thongtinsv->noisinh}}</td>
                                    <td></td>
                                    <td></td>
                                    <td> <button class="btn btn-danger">Chưa đóng</button></td>
                                  
                                  </tr>
                                  
                                </tbody>
                              </table>
                        </div>
                    </div>
             
                </div>
                <div class="col-md-12">
                </div>
            </div>
            <div class="col-sm-5 col-md-3 col-full-width-left">
                <!-- Featured Author Section Start -->
                <div class="the-box  no-margin more-padding martop3">
                    <h3 style="font-size: 14px; text-align: center;">QUẢN LÝ TÀI KHOẢN</h3>
                    <br>
                    @if(session('successmk'))
                      <p class="alert_width" style="width: 100%; margin:5px;">{{session('successmk')}} </p>
                    @endif
                    <!-- /.row -->
                    <button class="btn btn-success btn-block doimk" dataid="{{$thongtinsv->id}}">ĐỔI MẬT KHẨU</button>
                    <form action="" method="post" class="form-group border doimkform">
                      <label for="">Mã sinh viên</label>
                      <input type="text" class="form-control" required="" placeholder="Mã sinh viên" name="ma">
                      <label for="" >Password mới</label>
                      <input type="password" name="passwornew" required="" placeholder="Tối đa 6 ký tự" class="form-control" maxlength="8" >
                      <br>  
                      <button type="submit" class="btn btn-primary">Đổi mật khẩu</button>
                      {{csrf_field()}}
                    </form>
                </div>
   
            </div>
            <!-- //Jelly-o sesame Section End -->
        </div>
    </div>
   <div class="container">
       <div class="row">
             <div class="col-sm-12 col-md-12">
              
       
               
                              <div class="news_item_image thumbnail">
                        <label>
                            <a href="news_item.html"><h3 class="primary news_headings">KẾT QUẢ HỌC TẬP CÁC MÔN</h3></a>
                        </label>
                   
                        <div class="news_item_text_1">
                          <table class="table2excel" id="source-html-ky" data-tableName="Test Table 1" style="border: 1px solid black">
                                      <thead>
                                        <tr class="top noExl">
                                          <td colspan="15"> <p>BẢNG KẾT QUẢ HỌC TẬP</p>
                                             <table width="100%" class="tb_con ">
                                              <tr class="tr_saumoi">
                                              <td colspan="7">Họ và tên: {{$thongtinsv->ho_tendem}}{{$thongtinsv->ten}} </td>
                                              <td colspan="6" class="none_right">Trường Cao đẳng Xây dựng Số 1</td>
                                             </tr>
                                             <tr class="tr_saumoi">
                                              <td colspan="7">Ngày sinh: {{$thongtinsv->ngaysinh}}</td>
                                              <td colspan="6" class="none_right">Ngành: {{$thongtinsv->nganh}}</td>
                                             </tr>
                                             <tr class="tr_saumoi">
                                              <td colspan="7">Nơi sinh: {{$thongtinsv->noisinh}}</td>
                                              <td colspan="6" class="none_right">Khóa học: 2018-2021</td>
                                             </tr>
                                             <tr class="tr_saumoi">
                                              <td colspan="7">Hệ đào tạo: Cao Đẳng</td>
                                              <td colspan="6" class="none_right">Lớp: {{$thongtinsv->lop}}</td>
                                             </tr>
                                            </table>
                                          </td>
                                         
                                        </tr>
                                        <tr class="tra noExl">
                                          <td>#</td>
                                          <td>Mã HP</td>
                                          <td>Tên HP</td>
                                          <td class="tinchi">Tín chỉ</td>
                                          <td class="tinchi">Học kỳ</td>
                                          <td class="tinchi">Năm học</td>
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
                                        @foreach($datadiem as $k=>$v)
                                            <tr class="trdiem"> 
                                                <td>{{$k+1}}</td>
                                                <td>{{$v->mamon}}</td>
                                                <td>{{$v->ten}}</td>
                                                <td>{{$v->tinchi}}</td>
                                                <td>{{$v->hocky}}</td>
                                                <td>{{$v->namhoc}}</td>
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
                                          <!-- <tr class="trdiem">
                                            <td colspan='3' rowspan="2">Học kỳ : - năm hoc: </td>
                                            <td colspan="5"> Tổng tín chỉ học tập: <span style="color: red"></span></td>
                                            <td colspan="5">TB chung học tập:  <span style="color: red"></span></td>
                                           
                                          </tr>
                                           <tr class="trdiem">
                                          
                                            <td colspan="5"> Tổng tín chỉ tích lũy: <span style="color: red"></span>  </td>
                                            <td colspan="5">TB chung tích lũy: <span style="color: red"></span></td>
                                           
                                          </tr> -->


                                      </tbody>
                                    </table>
                        </div>
                    </div>
               
               
            </div>
       </div>
   </div>
    </section>
   
    
    <input type="hidden" name="" id="url" value="{{url('')}}">
@endsection('content')

@section('script') 
<script src="{{url('public/backend/josh')}}/excel/jquery.table2excel.js"></script>
<script type="text/javascript">
    $(document).ready(function()
    {
        $('body').on('click','#tracuu_theomasv_lop', function()
           {
                var masv = $('#masv').val();
                var lophoc = $('#lophoc').val();
                var hocky2 = Number($('#hocky').val());
                var namhoc =$('#namhoc').val();
                var url = $('#url').val();
                if(masv == '' || lophoc == '' || hocky2 == '' || namhoc =='')
                {
                   alert ('Bạn vui lòng nhập đầy đủ thông tin vào các ô');
                }
                else
                {
                      $.get(url+'/theoma_lop/'+masv+'/'+lophoc+'/'+hocky2+'/'+namhoc, function(data)
                       {
                                 $('#data_ketqua').html(data); 
                       });
                }
           });
        // tra cuu theo nam hoc
         $('body').on('click','#tracuu_theo_namhoc', function()
           {
                var masv = $('#masv3').val();
                var lophoc = $('#lophoc3').val();
                var namhoc =$('#namhoc3').val();
                var url = $('#url').val();
                if(masv == '' || lophoc == ''|| namhoc =='')
                {
                   alert ('Bạn vui lòng nhập đầy đủ thông tin vào các ô');
                }
                else
                {
                      $.get(url+'/theoma_lop_namhoc/'+masv+'/'+lophoc+'/'+namhoc, function(data)
                       {
                                //alert(data);
                                 $('#data_ketqua_namhoc').html(data); 
                       });
                }
           });

        $('body').on('click','.doimk', function()
           {
               $('.doimkform').toggle();
             
           });



         $('.alert_width').delay(5000).slideUp(3000);
        var size = $( window ).width();
        if(size<1024)
        {
          $('.heading_border').css({'font-size':12});
        }

    });
</script>  
<script>
      $(function() {

          $('body').on('click','.exportToExcel', function()
        {
            var table = $(this).prev('.table2excel');
            if(table && table.length){
              var preserveColors = (table.hasClass('table2excel_with_colors') ? true : false);
              $(table).table2excel({
                exclude: ".noExl",
                name: "Excel Document Name",
                filename: "myFileName" + new Date().toISOString().replace(/[\-\:\.]/g, "") + ".xls",
                fileext: ".xls",
                exclude_img: true,
                exclude_links: true,
                exclude_inputs: true,
                preserveColors: preserveColors
              });
            }

        })

        
      });

    </script>
@endsection('script')