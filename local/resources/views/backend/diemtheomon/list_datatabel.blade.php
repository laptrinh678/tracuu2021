@extends('backend.master.index')
@section('title')
Điểm theo môn
@endsection('title')
@section('style')
 <!--page level css -->
<link rel="stylesheet" type="text/css" href="vendors/datatables/css/dataTables.bootstrap.css" />
<link rel="stylesheet" type="text/css" href="vendors/datatables/css/buttons.bootstrap.css" />
<link rel="stylesheet" type="text/css" href="vendors/datatables/css/colReorder.bootstrap.css" />
<link rel="stylesheet" type="text/css" href="vendors/datatables/css/dataTables.bootstrap.css" />
<link rel="stylesheet" type="text/css" href="vendors/datatables/css/rowReorder.bootstrap.css">
<link rel="stylesheet" type="text/css" href="vendors/datatables/css/buttons.bootstrap.css" />
<link rel="stylesheet" type="text/css" href="vendors/datatables/css/scroller.bootstrap.css" />
<link href="css/pages/tables.css" rel="stylesheet" type="text/css">
<link href="vendors/bootstrap-multiselect/css/bootstrap-multiselect.css" rel="stylesheet" type="text/css">
<link href="vendors/select2/css/select2.min.css" rel="stylesheet" type="text/css">
<link href="vendors/select2/css/select2-bootstrap.css" rel="stylesheet" type="text/css">
<link href="vendors/selectize/css/selectize.css" rel="stylesheet" type="text/css">
<link href="vendors/selectize/css/selectize.bootstrap3.css" rel="stylesheet" type="text/css">
<link href="vendors/iCheck/css/all.css" rel="stylesheet" type="text/css">
<Link href="vendors/iCheck/css/line/line.css" rel="stylesheet" type="text/css">
<link href="css/pages/formelements.css" rel="stylesheet" type="text/css">
<link href="css/pages/customform_elements.css" rel="stylesheet" type="text/css"> 
@endsection('style')
@section('content')
  <aside class="right-side">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <!--section starts-->
                <h1>DANH SÁCH ĐIỂM</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.html">
                            <i class="livicon" data-name="home" data-size="14" data-loop="true"></i> Trang chủ
                        </a>
                    </li>
                    <li>
                        <a href="#">Điểm theo môn</a>
                    </li>
                    <li class="active">Danh sách điểm</li>
                </ol>
            </section>
            <!--section ends-->
            <section class="content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-primary filterable">
                            <div class="panel-heading clearfix  ">
                                <!--  <div class="panel-title pull-left">
                                   <div class="caption">
                                      <a href="javascript::voild(0)" style="color: white; font-weight: bold" data-toggle="modal" data-target="#add">
                                            <i class="livicon" data-name="camera" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Thêm mới Học viên
                                       </a>
                                      
                                   
                                   </div>
                                </div> -->
                                 <div class="panel-title pull-left">
                                    <div class="caption">
                                      <a  style="color: white; font-weight: bold"  href="{{url('admin/diemtheomon/add')}}">
                                             <i class="livicon" data-name="camera" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Thêm mới điểm học viên
                                        </a>
                                      <!--  <a href="{{url('admin/hocvien/add')}}" style="color: white; font-weight: bold">
                                           <i class="livicon" data-name="plus-alt" data-size="16" data-c="#fff" data-hc="#fff" data-loop="true" id="livicon-153" style="width: 50px; height: 50px;"></i>
                                      
                                            Import Học viên
                                       </a> -->
                                       

                                    </div>
                                </div>
                                <div class="tools pull-right">
                                   <a  style="color: white; font-weight: bold"  href="{{url('admin/diemtheomon/add_tcqp')}}">
                                             <i class="livicon" data-name="camera" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Thêm mới điểm GDTC-GDQP
                                        </a>
                                </div>
                            </div>
                            <div class="panel-body table-responsive">
                             <!--  <form id="form_search" action="" method="post" class="col-sm-5" style="margin-bottom: 20px; margin-top: 10px;">
                                 <input type="text" value="" name="key" placeholder="" class="form-control" style="width: 80%; float: left">
                                 <button class="btn btn-warning" type="submit" style="width: 20%; float: left; margin-left: -5px; border-radius: 0px;"> Search</button>
                                 {{csrf_field()}}
                              </form> -->
                            <table class="table table-striped table-bordered" id="table2">
                                    <thead>
                                        <tr>
                                           
                                            <th>#</th>
                                            
                                            
                                            <th>
                                               Lớp/Tên/Mã
                                            </th>
                                            <th>Môn học/Tín chỉ</th>

                                            <th>Năm học/Học kỳ</th>
                                            <th>Điểm TB kiểm tra</th>
                                            <th>Điểm thi</th>
                                            <th>Tổng kết môn</th>
                                            
                                             <th>
                                                Hành động
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="datahocvien">
                                      @foreach($data as $k=>$v)
                                        <tr> 
                                            <td>{{$k+1}}</td>
                                            <td>
                                                @if(isset($v->tenlop)) {{$v->tenlop}} @endif
                                                <br>
                                              {{$v->ho_tendem}} {{$v->tensv}} <br> {{$v->ma}}:
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
                                     
                                        
                                    </tbody>
                                </table>
                             
                                <!-- <button class="btn btn-warning">
                                  <a class="btn btn-warning" href="{{ route('exportcongnhan') }}">Export  Excel</a>
                                </button> -->
                            </div>
                        </div>
                    </div>
                </div>
               
                <!-- Third Basic Table Ends Here-->
               
                <!-- /.modal ends here -->
                 <!--delete modal starts here-->
                <div class="modal fade" id="edititem" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title custom_align" id="edit">
                                    Sửa thông tin diểm sinh viên
                                </h4>
                            </div>
                            <div class="modal-body">
                                <form action="" method="POST">
                                    <!-- IP mask -->
                                   
                                    <div class="col-sm-6">
                                      
                                       <div class="form-group">
                                  <label for="select21" class="control-label">
                                     Môn học
                                  </label>
                                  <select id="select21" class="form-control select2" name="monhoc" required="" style="width: 100%">
                                      <option value="">Select value...</option>
                                     @foreach($monhoc as $v)
                                          <option value="{{$v->id}}">{{$v->ten}}</option>
                                      @endforeach 
                                    
                                     
                                  </select>
                              </div>
                               <div class="form-group">
                                  <label for="select21" class="control-label">
                                     Lớp học
                                  </label>
                                  <select id="select22" class="form-control select2" name="lophoc" required="" style="width: 100%">
                                      <option value="">Select value...</option>
                                     @foreach($lophoc as $v)
                                          <option value="{{$v->id}}">{{$v->name}}</option>
                                      @endforeach 
                                    
                                     
                                  </select>
                              </div>
                               <div class="form-group hocvienlist">
                                <label for="" class="control-label">
                                     Sinh viên
                                  </label>
                                
                                  <select id="select23" class="form-control select2" name="id_sv" required="" style="width: 100%">
                                     
                                   
                                    
                                     
                                  </select>
                              </div>
                              <div class="form-group">
                              <label for="email">Học Kỳ</label>
                              <select name="hocky" id="" class="form-control hocky" required="">
                                <option value="">Chọn học kỳ</option>
                                <option value="1">Học Kỳ 1</option>
                                <option value="2">Học kỳ 2</option>
                              </select>
                            </div>
                              <div class="form-group">
                              <label for="email">Năm học</label>
                              <select name="namhoc" id="" class="form-control namhoc" required="">
                                <option value="">Chọn năm</option>
                                <option value="2018-2019">2018-2019</option>
                                <option value="2019-2020">2019-2020</option>
                                <option value="2020-2021">2020-2021</option>
                              </select>
                            </div>
                                    </div>
                                    <!-- left-->
                                    <div class="col-sm-6">
                                       <div class="form-group">
                              <label for="email">Điểm thi</label>
                              <select name="diemthi" id="" class="form-control namhoc" required="">
                                <option value="">Chọn điểm</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                              </select>
                            </div>
                            <div class="form-group">
                              <label for="email">Điểm chuyên cần</label>
                              <select name="diemchuyencan" id="" class="form-control namhoc" required="">
                                <option value="">Chọn điểm chuyên cần</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                              </select>
                            </div>
                            <div class="form-group">
                              <label for="email">Điểm hệ số 1</label>
                              <select name="diemhs1" id="" class="form-control" required="">
                                <option value="">Chọn điểm hệ số 1</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                              </select>
                            </div>
                            <div class="form-group">
                              <label for="email">Điểm hệ số 2</label>
                              <select name="diemhs2" id="" class="form-control namhoc" required="">
                                <option value="">Chọn điểm hệ số 2</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                              </select>
                            </div>
                            <div class="form-group">
                              <label for="email">Điểm tổng kết môn</label>
                              <input type="text" class='form-control' name="tkmon" >
                            </div>
                            </div>
                                   
                             
                          
                           
                              <div class="form-group">
                                <button type="submit" class="btn btn-primary">Thêm mơi</button>
                              </div>
                              {{csrf_field()}}
                              </form>
                              </div>
                            <div class="modal-footer ">
                                <button type="button" class="btn btn-warning">
                                    <span class="glyphicon glyphicon-ok-sign"></span> Yes
                                </button>
                                <button type="button" class="btn btn-warning" data-dismiss="modal">
                                    <span class="glyphicon glyphicon-remove"></span> No
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.modal ends here -->
                <input type="hidden" id="url" name="" value="{{url('')}}">
            </section>
            <!-- content -->
        </aside>
            
@endsection('content')
@section('script')
 <script> 
        $(document).ready(function()
        {
           $('body').on('click','.delete', function()
           { 

                var id = $(this).attr('data');
                var url = $('#url').val();
               $.get(url+'/admin/diemtheomon/delete/'+id, function(data)
               {
                
                    $('.datahocvien').html(data);
               });

           });


 $('#form_search').on('submit', function(event)
         {
            event.preventDefault();
            $.ajax({
             url:"{{route('search_diem')}}",
             method:"POST",
             data:new FormData(this),
             //dataType:'JSON',
             contentType: false,
             cache: false,
             processData: false,
             success:function(data)
             {  
                  $('.datahocvien').html(data);
                  // if(data=='0')
                  //   {
                  //       alert('Error_code và Process_code bị trùng Bạn vui lòng sửa lại')
                  //   }else
                  //   {
                       
                  //        $('#listdatatable').html(data);
                  //        $('.error_code_e').html('');
                  //        $('.process_code').val('');
                  //        $(".error_name").val('');
                  //        $(".solve").val('');
                  //         $('#editerror .statusmess').prop('checked', false);
            
                  //        $(".status").val('');   
                  //        $('.stretchLeft').hide();
                  //        $('.modal-backdrop').hide();
                  //       $('.alertNotification').show(3000);
                  //       $('.alertNotification').text('Sửa thành công');
                  //       $('.alertNotification').css({'background':'#F89A14'});
                  //         setTimeout(function(){ $('.alertNotification').hide(5000);}, 5000);
                  //   }
             }
            })
         });

           $('body').on('click','.edit_tabel', function()
           {
                var data = $(this).attr('data');
                var dataparse = JSON.parse(data);
                console.log(dataparse.ma);
                $("input[name*='ma']").val(dataparse.ma);
                $("input[name*='ten']").val(dataparse.ten);
                $("input[name*='tennuoc']").val(dataparse.tennuoc);
                $("input[name*='bophan']").val(dataparse.bophan);
                $("input[name*='chucvu']").val(dataparse.chucvu);
                $("input[name*='quoctich']").val(dataparse.quoctich);
                $("input[name*='tuoi']").val(dataparse.tuoi);
                $("input[name*='capbac']").val(dataparse.capbac);
                $("input[name*='ngaysinh']").val(dataparse.ngaysinh);
                $("input[name*='ngaycongtac']").val(dataparse.ngaycongtac);
                $("input[name*='cmnd']").val(dataparse.cmnd);
                $("input[name*='ngaycapcmnd']").val(dataparse.ngaycapcmnd);
                $("input[name*='noicap']").val(dataparse.noicap);
                $("input[name*='diachi']").val(dataparse.diachi);
                /*var url = $('#url').val();
               $.get(url+'/admin/congnhan/delete/'+id, function(data)
               {
                    $('.data').html(data);
               });*/

           });

           $('#select22').change(function()
        {
    
               var id = $(this).val();
               var url = $('#url').val();
               $.get(url+'/admin/diemtheomon/getsv/'+id, function(data)
               {
                   
                  $('#select23').html(data);
               });

        })

            $('#edit_form').on('submit', function(event)
         {
            event.preventDefault();
            $.ajax({
             url:"{{ route('editdiemsv')}}",
             method:"POST",
             data:new FormData(this),
             //dataType:'JSON',
             contentType: false,
             cache: false,
             processData: false,
             success:function(data)
             {
              alert(data);
                  // if(data=='0')
                  //   {
                  //       alert('Error_code và Process_code bị trùng Bạn vui lòng sửa lại')
                  //   }else
                  //   {     
                  //        $('.datahocvien').html(data);
                  //        $('#add_form .tenhs').val('');
                  //        $('#add_form .tuoi').val('');
                  //        $("#add_form .gioitinh").val('');
                  //        $('#add_form .ngaysinh').val('');
                  //        $('#add').hide();
                  //        $('.modal-backdrop').hide();
                  //        $('.alertNotification').show(3000);
                  //        $('.alertNotification').text('Thêm thành công');
                  //        $('.alertNotification').css({'background':'#01bc8c'});
                  //         setTimeout(function(){ $('.alertNotification').hide(5000);}, 5000);
                  //   }
             }
            })
         });


        });
</script>
<script type="text/javascript" src="vendors/datatables/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="vendors/jeditable/js/jquery.jeditable.js"></script>
<script type="text/javascript" src="vendors/datatables/js/dataTables.bootstrap.js"></script>
<script type="text/javascript" src="vendors/datatables/js/dataTables.buttons.js"></script> 
<script type="text/javascript" src="vendors/datatables/js/dataTables.colReorder.js"></script>  
<script type="text/javascript" src="vendors/datatables/js/dataTables.responsive.js"></script>
<script type="text/javascript" src="vendors/datatables/js/dataTables.rowReorder.js"></script>
<script type="text/javascript" src="vendors/datatables/js/buttons.colVis.js"></script>
<script type="text/javascript" src="vendors/datatables/js/buttons.html5.js"></script>
<script type="text/javascript" src="vendors/datatables/js/buttons.print.js"></script>
<script type="text/javascript" src="vendors/datatables/js/buttons.bootstrap.js"></script>
<script type="text/javascript" src="vendors/datatables/js/pdfmake.js"></script>
<script type="text/javascript" src="vendors/datatables/js/vfs_fonts.js"></script>
<script type="text/javascript" src="vendors/datatables/js/dataTables.scroller.js"></script>
<script type="text/javascript" src="js/pages/table-advanced.js"></script> 
   
   <script src="vendors/bootstrap-multiselect/js/bootstrap-multiselect.js" type="text/javascript"></script>
   <script src="vendors/select2/js/select2.js" type="text/javascript"></script>
   <script src="vendors/selectize/js/standalone/selectize.min.js" type="text/javascript"></script>
   <script src="vendors/iCheck/js/icheck.js" type="text/javascript"></script>
   <script src="vendors/bootstrap-switch/js/bootstrap-switch.js" type="text/javascript"></script>
   <script src="vendors/switchery/js/switchery.js" type="text/javascript"></script>
   <script src="js/pages/custom_elements.js" type="text/javascript"></script>
     <!-- begining of page level js -->
    <script src="vendors/pickadate/js/picker.js" type="text/javascript"></script>
    <script src="vendors/pickadate/js/picker.date.js" type="text/javascript"></script>
    <script src="vendors/pickadate/js/picker.time.js" type="text/javascript"></script>
    <script src="vendors/air-datepicker/js/datepicker.min.js" type="text/javascript"></script>
    <script src="vendors/air-datepicker/js/datepicker.en.js" type="text/javascript"></script>
    <script type="text/javascript" src="vendors/flatpickr-calendar/js/flatpickr.min.js"></script>
    <script src="js/pages/custom_datepicker.js" type="text/javascript"></script>
@endsection('script')

