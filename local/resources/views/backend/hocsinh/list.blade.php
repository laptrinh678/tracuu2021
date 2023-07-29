@extends('backend.master.index')
@section('title')
Danh sách Sinh viên
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
                <h1>DANH SÁCH SINH VIÊN</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.html">
                            <i class="livicon" data-name="home" data-size="14" data-loop="true"></i> Trang chủ
                        </a>
                    </li>
                    <li>
                        <a href="#">Sinh viên</a>
                    </li>
                    <li class="active">Danh sách Sinh viên</li>
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
                                            <i class="livicon" data-name="camera" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Thêm mới Sinh viên
                                       </a>
                                      
                                   
                                   </div>
                                </div> -->
                                 <div class="panel-title pull-left">
                                    <div class="caption">
                                      <a  style="color: white; font-weight: bold" data-toggle="modal" data-target="#add">
                                             <i class="livicon" data-name="camera" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Thêm mới sinh viên
                                        </a>
                                      <!--  <a href="{{url('admin/hocvien/add')}}" style="color: white; font-weight: bold">
                                           <i class="livicon" data-name="plus-alt" data-size="16" data-c="#fff" data-hc="#fff" data-loop="true" id="livicon-153" style="width: 50px; height: 50px;"></i>
                                      
                                            Import Sinh viên
                                       </a> -->
                                       

                                    </div>
                                </div>
                                <div class="tools pull-right"></div>
                            </div>
                            <div class="panel-body table-responsive">
                            <table class="table table-striped table-bordered" id="table2">
                                    <thead>
                                        <tr>
                                           
                                            <th>TT</th>
                                            <th>Mã SV</th>
                                            <th>
                                                Họ tên đệm
                                            </th>
                                            <th>Tên</th>
                                            <th>Lớp</th>
                                            
                                             <th>
                                                Hành động
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="datahocvien">
                                      
                                      @foreach($data as $k=>$v)
                                        <tr> 
                                         
                                            <td>{{$k}}</td>
                                            <td>
                                               {{$v->ma}}
                                            </td>
                                            <td>{{$v->ho_tendem}}</td>
                                            <td> {{$v->ten}}</td>
                                          
                                            <td>
                                              {{$v->lop}}

                                            </td>
                                                                                 
                                            <td>
                                           <button data="{{$v->id}}" class="btn btn-danger delete"><i class="fa fa-trash" aria-hidden="true"></i></button> 
                                              
                                            <button class="btn btn-warning edit_tabel" data-toggle="modal" data-target="#edititem" data="">
                                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                            </button>
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
                <!--delete modal starts here-->
                <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title custom_align" id="edit">
                                    Thêm danh sách Sinh viên
                                </h4>
                            </div>
                            <div class="modal-body">
                               <form action="" method="POST" enctype="multipart/form-data" id="add_form">
                              <div class="form-group">
                              <label for="email">Họ tên</label>
                              <input type="text" class="form-control tenhs" required="" id="email" placeholder="" name="ten">
                            </div>
                            <div class="form-group">
                              <label for="email">Ngày sinh</label>
                              <input type="date" class="form-control ngaysinh" required="" id="email" placeholder="" name="ngaysinh">
                            </div>
                           
                            <div class="form-group">
                              <label for="email">Giới tính</label>
                              <select name="gioitinh" id="" class="form-control gioitinh" required="">
                                <option value="">Chọn giới tính</option>
                                <option value="1">Nam</option>
                                <option value="2">Nữ</option>
                              </select>
                            </div>
                            
                            <div class="form-group">
                              <label for="email">Mã Sinh viên</label>
                              <input type="text" class="form-control mahocvien" required="" id="email"  name="ma">
                            </div>
                              <div class="form-group">
                              <label for="email">Chính sách</label>
                              <!-- <input type="number" class="form-control lop" required="" id="email"  name="lop"> -->
                              <select name="chinhsach"  class="form-control ">
                               
                               
                                @for($i=0; $i<=10; $i++)
                                <option value="{{$i}}0">Giảm {{$i}}0%</option>
                                @endfor
                               
                              </select>

                           
                            </div>
                             <div class="form-group">
                              <label for="email">Quê quán</label>
                              <input type="text" class="form-control" required="" id="email"  name="diachi">
                            </div>

                           
                            <button type="submit" class="btn btn-primary">Thêm mới</button>
                            {{csrf_field()}}
                             </form>
                              </div>
                            <div class="modal-footer ">
                                <button type="button" class="btn btn-warning">
                                    <span class="glyphicon glyphicon-ok-sign"></span> Yes
                                </button>
                                <button type="button" class="btn btn-warning" data="" data-dismiss="modal">
                                    <span class="glyphicon glyphicon-remove"></span> No
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.modal ends here -->
                 <!--delete modal starts here-->
                <div class="modal fade" id="edititem" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title custom_align" id="edit">
                                    Sửa thông tin Sinh viên
                                </h4>
                            </div>
                            <div class="modal-body">
                               <form action="" method="POST" enctype="multipart/form-data" id="upload_form">
                                  <div class="form-group">
                                   <div class="fivety">
                                        <label for="pwd">Mã</label>
                                 <input type="text" class="form-control"  placeholder="" name="ma">
                                   </div>
                                   <div class="fivety fivety_right">
                                        <label for="pwd">Tên</label>
                                 <input type="text" class="form-control"  placeholder="" name="ten">
                                   </div>
                                   
                               </div>
                               <div class="form-group">
                                   <div class="fivety">
                                        <label for="pwd">Phòng ban</label>
                                 <input type="text" class="form-control"  placeholder="" name="phongban">
                                   </div>
                                   <div class="fivety fivety_right">
                                        <label for="pwd">Bộ phận</label>
                                 <input type="text" class="form-control"  placeholder="" name="bophan">
                                   </div>
                                   
                               </div>
                                <div class="form-group">
                                   <div class="fivety">
                                        <label for="pwd">Chức vụ</label>
                                 <input type="text" class="form-control"  placeholder="" name="chucvu">
                                   </div>
                                   <div class="fivety fivety_right">
                                        <label for="pwd">Quốc tịch</label>
                                 <input type="text" class="form-control"  placeholder="" name="quoctich">
                                   </div>
                                   
                               </div>
                                <div class="form-group">
                                   <div class="fivety">
                                        <label for="pwd">Tuổi</label>
                                 <input type="text" class="form-control"  placeholder="" name="tuoi">
                                   </div>
                                   <div class="fivety fivety_right">
                                        <label for="pwd">Giới tính</label>
                                 <input type="text" class="form-control"  placeholder="" name="gioitinh">
                                   </div>
                                   
                               </div>
                               <div class="form-group">
                                   <div class="fivety">
                                        <label for="pwd">Cấp bậc</label>
                                 <input type="text" class="form-control"  placeholder="" name="capbac">
                                   </div>
                                   <div class="fivety fivety_right">
                                        <label for="pwd">Ngày sinh</label>
                                 <input type="text" class="form-control"  placeholder="" name="ngaysinh">
                                   </div>
                                   
                               </div>
                               <div class="form-group">
                                   <div class="fivety">
                                        <label for="pwd">Ngày công tác</label>
                                 <input type="text" class="form-control"  placeholder="" name="ngaycongtac">
                                   </div>
                                   <div class="fivety fivety_right">
                                        <label for="pwd">CMTND</label>
                                 <input type="text" class="form-control"  placeholder="" name="cmnd">
                                   </div>
                                   
                               </div>
                               <div class="form-group">
                                   <div class="fivety">
                                        <label for="pwd">Ngày cấp CMTND</label>
                                 <input type="text" class="form-control"  placeholder="" name="ngaycapcmnd">
                                   </div>
                                   <div class="fivety fivety_right">
                                        <label for="pwd">Nơi cấp</label>
                                 <input type="text" class="form-control"  placeholder="" name="noicap">
                                   </div>
                                   
                               </div>
                               <div class="form-group">
                                   <div class="fivety">
                                        <label for="pwd">Địa chỉ</label>
                                 <input type="text" class="form-control"  placeholder="" name="diachi">
                                   </div>
                                   <div class="fivety fivety_right">
                                        <label for="pwd">Tên chi nhánh</label>
                                 <input type="text" class="form-control"  placeholder="" name="tenchinhanh">
                                   </div>
                                   
                               </div>
                           
                            <button type="submit" class="btn btn-primary">Thêm mới</button>
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
               $.get(url+'/admin/hocvien/delete/'+id, function(data)
               {
                    $('.datahocvien').html(data);
               });

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

            $('#add_form').on('submit', function(event)
         {
            event.preventDefault();
            $.ajax({
             url:"{{ route('addhocvien')}}",
             method:"POST",
             data:new FormData(this),
             //dataType:'JSON',
             contentType: false,
             cache: false,
             processData: false,
             success:function(data)
             {
                  if(data=='0')
                    {
                        alert('Error_code và Process_code bị trùng Bạn vui lòng sửa lại')
                    }else
                    {     
                         $('.datahocvien').html(data);
                         $('#add_form .tenhs').val('');
                         $("#add_form .gioitinh").val('');
                         $('#add_form .ngaysinh').val('');
                         $('#add').hide();
                         $('.modal-backdrop').hide();
                         $('.alertNotification').show(3000);
                         $('.alertNotification').text('Thêm thành công');
                         $('.alertNotification').css({'background':'#01bc8c'});
                          setTimeout(function(){ $('.alertNotification').hide(5000);}, 5000);
                    }
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

