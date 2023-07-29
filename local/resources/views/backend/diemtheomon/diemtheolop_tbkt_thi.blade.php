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
   <style>
   	.diemsv>span{font-weight: bold;padding: 5px;
    display: inline-block;}
    .alert{ display: none; widows: 50%; float: right; }
    .diemsv {font-size: 12px }
      .diemsv .bamuoi{ width: 30% !important; float: left; }

    .diemsv>div>span{font-weight: bold;}

   </style>
@endsection('style')
@section('content')
  <aside class="right-side">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <!--section starts-->
                <h1>DANH SÁCH ĐIỂM TB KIỂM TRA ĐIỂM THI</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.html">
                            <i class="livicon" data-name="home" data-size="14" data-loop="true"></i> Trang chủ
                        </a>
                    </li>
                    <li>
                        <a href="#">Điểm trung bình kiểm tra, điểm thi theo môn</a>
                    </li>
                    <li class="active">Danh sách điểm</li>
                </ol>
            </section>
            <!--section ends-->
            <section class="content">
                <div class="row">
                	<div class="alert">aaa</div>
                    <div class="col-lg-12">
                        <div class="panel panel-primary filterable">
                            <div class="panel-heading clearfix  ">
                                 <div class="panel-title pull-left">
                                   <div class="caption">
                                      <a href="javascript::voild(0)" style="color: white; font-weight: bold" data-toggle="modal" data-target="#add">
                                            <i class="livicon" data-name="camera" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Điểm trung bình kiểm tra, điểm thi theo môn
                                       </a>
                                      
                                   
                                   </div>
                                </div>
                                 <div class="panel-title pull-left">
                                    <div class="caption">
                                      <!-- <a  style="color: white; font-weight: bold"  href="{{url('admin/diemtheomon/add')}}">
                                             <i class="livicon" data-name="camera" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Thêm mới điểm học viên
                                        </a> -->
                                      <!--  <a href="{{url('admin/hocvien/add')}}" style="color: white; font-weight: bold">
                                           <i class="livicon" data-name="plus-alt" data-size="16" data-c="#fff" data-hc="#fff" data-loop="true" id="livicon-153" style="width: 50px; height: 50px;"></i>
                                      
                                            Import Học viên
                                       </a> -->
                                       

                                    </div>
                                </div>
                                <div class="tools pull-right">
                                  <!--  <a  style="color: white; font-weight: bold"  href="{{url('admin/diemtheomon/add_tcqp')}}">
                                             <i class="livicon" data-name="camera" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Thêm mới điểm GDTC-GDQP
                                        </a> -->
                                </div>
                            </div>
                            <div class="panel-body table-responsive">
                              <!-- <form id="form_search" action="" method="post" class="col-sm-5" style="margin-bottom: 20px; margin-top: 10px;">
                                 <input type="text" value="" name="key" placeholder="" class="form-control" style="width: 80%; float: left">
                                 <button class="btn btn-warning" type="submit" style="width: 20%; float: left; margin-left: -5px; border-radius: 0px;"> Search</button>
                                 {{csrf_field()}}
                              </form> -->
                            <table class="table table-striped table-bordered">
                                    <thead>
                                        <tr style="border: 1px solid #ddd">
                                           
                                            <th>#</th>
                                            
                                            
                                            <th style="max-width: 30px;">
                                               Lớp/Học kỳ/Năm học
                                            </th>
                                            <th>Danh sách điểm</th>

                                            
                                            
                                            
                                        </tr>
                                    </thead>
                                    <tbody class="datahocvien">
                                      @foreach($data as $k=>$v)
                                        <tr> 
                                            <td>{{$k+1}}</td>
                                            <td style="max-width: 150px">
                                              <p>Năm học:{{$v->namhoc}}</p> 
                                              <p>Học kỳ:{{$v->hocky}}</p> 
                                              <p>Lớp học:{{$v->tenlop}}</p> 
                                              <p>Môn:{{$v->ten}}</p> 
                                              <p>
                                                 <button data="{{$v->id_kqht}}" class="btn btn-danger delete"><i class="fa fa-trash" aria-hidden="true"></i></button> 
                                              
                                              <a href="{{url('admin/diemtheomon/diemtheolop_edit')}}/{{$v->id_kqht}}">   
                                            <button class="btn btn-warning edit_tabel">
                                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                            </button>
                                            </a>
                                                
                                              </p>
                                              <p>
                                              	          
                                          
                                            <span>
                                            @if($v->tp_khaothiduyet==0)
                                            <button class="btn btn-warning tp_khaothiduyet" data={{$v->id_kqht}}>Chờ TP <br>khảo thí duyệt</button>
                                            @else
                                           
                                          <button class="btn btn-success" data={{$v->id_kqht}}> TP Khảo thí đã duyệt</button>
                                           @endif
                                            </span>
                                          

                                            <span>
                                              <a href="{{url('admin/diemtheomon/dongbo')}}/{{$v->id_kqht}}">
                                               <button class="btn btn-danger">Đồng bộ</button>
                                             </a>
                                            </span>
                                            <span>
                                             
                                              
                                                 <!--  <button class="btn btn-primary daotaoduyet" data="{{$v->id_kqht}}"> Chờ đào tạo duyệt</button> -->
                                               
                                               
                                            </span>
                                            <br>
                                            <br>
                                            <span>
                                             
                                             <!--  <a href="{{url('admin/diemtheomon/danhsachthi')}}/{{$v->id_kqht}}">
                                                  <button class="btn btn-danger dsthi" data="{{$v->id_kqht}}"> DS thi</button>
                                               </a> -->
                                               
                                            </span>
                                             <span>
                                             
                                             <!--  <a href="{{url('admin/diemtheomon/add_diemthi')}}/{{$v->id_kqht}}">
                                                  <button class="btn btn-warning dsthi" data="{{$v->id_kqht}}"> Add điểm thi</button>
                                               </a> -->
                                               
                                            </span>



                                           
                                              </p>
                                             

                                            </td>
                                            <td class="diemsv">
                                            <?php
                                            $id_sv= json_decode($v->id_sv);
                                            $diem_tb_kt = json_decode($v->diemtrungbinhkiemtra);
 											                      $diemthilan1 = json_decode($v->diemthilan1);
                                            $kgdu_dkthi = json_decode($v->kgdu_dkthi);

                                            $arr=[];
                                            if(isset($id_sv))
                                            {
                                            	foreach ($id_sv as $k=>$v) 
                                              {
                                              	$arr2['id_sv'] = $v;
                                              	$arr2['tb_kt'] =$diem_tb_kt[$k];
                                              	$arr2['diemthilan1'] =$diemthilan1[$k];
                                                $arr2['kgdu_dkthi'] = $kgdu_dkthi[$k];
                                              	$arr[]= $arr2;
                                              }
                                            }
                                            
                                            foreach ($arr as $val) 
                                            {
                                            	$id_sv = $val['id_sv'];
                                            	$tensv = DB::table('sinhvien')
                                              ->select('ho_tendem','ten','ma')
                                              ->where('id',$id_sv)->first();

                                           echo '<div class="col-sm-2"> <span>MSV:</span>'.$tensv->ma.'</div>'.
                                             '<div class="hoten col-sm-3"><span> Họ tên:</span>'.$tensv->ho_tendem. '&nbsp;'.$tensv->ten .'</div>'
                                             .'<div class="col-sm-2">
                                             <span>TB kiểm tra:</span>'.$val['tb_kt'].'</div>'.
                                             '<div class="col-sm-2"><span>Điểm thi lần 1:</span>'.$val['diemthilan1'].'</div>'
                                               .'<div class="col-sm-2"><span></span>'
                                               .$val['kgdu_dkthi']
                                               .'</div>';
                                            	
                                            	echo '<br>';
                                            	
                                            }
                                           
                                             ?> 

                                            
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
           $('body').on('click','.tp_khaothiduyet', function()
           { 

                var id = $(this).attr('data');
                var url = $('#url').val();
                var thiss = $(this);
               $.get(url+'/admin/diemtheomon/tp_khaothiduyet/'+id, function(data)
               {
                	    thiss.parent().html(data);
                        // $('.alert').show(1000);
                        // $('.alert').text(data);
                        // $('.alert').css({'background':'#F89A14'});
                        //   setTimeout(function()
                        //   { 
                        //   	$('.alert').hide(2000);
                        //   	location.reload();
                        //   }, 2000
                        //   );
               });

           });
           //bomonduyet
            $('body').on('click','.bomonduyet', function()
           { 
           		
                var id = $(this).attr('data');
                var url = $('#url').val();
                var thiss = $(this);
               $.get(url+'/admin/diemtheomon/diemtheolop_bomonduyet/'+id, function(data)
               {
                  thiss.parent().parent().html(data);
                  // thiss.parent().next().html('<button class="btn btn-primary">Chờ ĐT duyệt</button>');
               
                      
               });

           });
            // dao tao duyet
             //bomonduyet
            $('body').on('click','.daotaoduyet', function()
           { 
              
                var id = $(this).attr('data');
                var url = $('#url').val();
                var thiss = $(this);
               $.get(url+'/admin/diemtheomon/diemtheolop_daotaoduyet/'+id, function(data)
               {
                alert(data);
                  // thiss.parent().html('<button class="btn btn-success">BM đã duyệt</button>');
                  // thiss.parent().parent().next().html('<button class="btn btn-primary">Chờ ĐT duyệt</button>');
               
                      
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

