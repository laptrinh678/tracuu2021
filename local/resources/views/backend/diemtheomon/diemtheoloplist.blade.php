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
    .diemsv .hotenbt{ width: 20%;
    float: left;
    font-size: 12px }
    .hotenbt2{width: 15%;
    float: left;}
    .diemsv .hoten{ width: 30% !important; float: left; font-size: 12px;}
    .diemsv .dieukienthi{ width: 15%; float: left; }
    .diemsv>div>span{font-weight: bold;font-size: 12px;}
    .khongdu_dk{ color: red; font-size: 12px; }
    .dudk{font-size: 12px; }

   </style>
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
                	<div class="alert">aaa</div>
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
                                      <a  style="color: white; font-weight: bold"  href="{{url('admin/diemtheomon/them_diemtheolop')}}">
                                             <i class="livicon" data-name="camera" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Thêm mới điểm Điều kiện theo lớp
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
                              <form id="form_search" action="" method="post" class="col-sm-5" style="margin-bottom: 20px; margin-top: 10px;">
                                 <input type="text" value="" name="key" placeholder="" class="form-control" style="width: 80%; float: left">
                                 <button class="btn btn-warning" type="submit" style="width: 20%; float: left; margin-left: -5px; border-radius: 0px;"> Search</button>
                                 {{csrf_field()}}
                              </form>
                            <table class="table table-striped table-bordered">
                                    <thead>
                                        <tr style="border: 1px solid #ddd">
                                           
                                            <th>#</th>
                                            
                                            
                                            <th>
                                               Lớp/Học kỳ/Năm học
                                            </th>
                                            <th>Danh sách điểm</th>

                                            
                                            
                                            
                                        </tr>
                                    </thead>
                                    <tbody class="datahocvien">
                                      @foreach($data as $k=>$v)
                                        <tr> 
                                            <td>{{$k+1}} </td>
                                            <td style="max-width: 80px">
                                              <p class="tt_lop">Năm học:
                                                @if($v->namhoc==1)
                                                {{'2018-2019'}}
                                                @elseif($v->namhoc==2)
                                                {{'2019-2020'}}
                                                @elseif($v->namhoc==3)
                                                {{'2020-2021'}}
                                                  @elseif($v->namhoc==4)
                                                {{'2021-2022'}}
                                                @endif
                                                {{$v->id_kqht}}
                                              </p> 
                                               
                                              <p class="tt_lop">Lớp học:{{$v->tenlop}}: Học kỳ:{{$v->hocky}}</p> 
                                              <p class="tt_lop">Môn học:{{$v->ten}}</p> 
                                              <p class="tt_lop">Người tạo:{{$v->gv_tao}}: {{date('d-m-Y', strtotime($v->created_at))}}</p>
                                             
                                              <p class="tt_lop">
                                              <p class="tt_lop">Người sửa:{{$v->gv_sua}} @if($v->ngaysua !='') {{date('d-m-Y', strtotime($v->ngaysua))}}@endif</p>
                                             
                                              <!-- <p>BM duyệt:{{$v->bomon_duyet}}:{{date('d-m-Y', strtotime($v->gio_bomonduyet))}}</p> -->
                                              <!--  <p>Khoa,TT duyệt:{{$v->nguoiduyet_khoa}}:{{date('d-m-Y', strtotime($v->gio_khoaduyet))}}</p> -->
                                               <!-- <p>Đào tạo duyệt:{{$v->daotaoduyet}}:{{date('d-m-Y', strtotime($v->gio_daotaoduyet))}}</p> -->
                                                
                                                
                                              <p>
                                                 <button data="{{$v->id_kqht}}" class="btn btn-danger delete"><i class="fa fa-trash" aria-hidden="true"></i></button> 
                                              
                                              <a href="{{url('admin/diemtheomon/diemtheolop_edit')}}/{{$v->id_kqht}}">   
                                            <button class="btn btn-warning edit_tabel">
                                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                            </button>
                                            </a>
                                                
                                              </p>
                                              <p class="duyet">
                                              	          
                                            
                                            <span>
                                            @if($v->status_bomon=='1')
                                            <button class="btn btn-warning bomonduyet" data={{$v->id_kqht}}>Chờ BM duyệt</button>
                                            @elseif($v->status_bomon==2)
                                             <button class="btn btn-success">BM đã duyệt <br>{{$v->bomon_duyet}}:{{date('d-m-Y', strtotime($v->gio_bomonduyet))}}</button>
                                            @endif
                                            </span>

                                            <span>
                                            @if($v->khoaduyet=='0')
                                            <button class="btn btn-warning khoaduyet" data={{$v->id_kqht}}>Chờ Khoa,TT duyệt</button>
                                            @elseif($v->khoaduyet==1)
                                             <button class="btn btn-success">
                                              Khoa,TT đã duyệt <br>
                                              {{$v->nguoiduyet_khoa}}:{{date('d-m-Y', strtotime($v->gio_khoaduyet))}}
                                             </button>
                                            @endif
                                            </span>
                                            
                                            <span>
                                              @if($v->status_daotao==0)
                                              
                                                  <button class="btn btn-primary daotaoduyet" data="{{$v->id_kqht}}"> Chờ ĐT duyệt</button>
                                               @elseif($v->status_daotao==1)
                                              <button class="btn btn-success">
                                                ĐT đã duyệt <br>
                                                {{$v->daotaoduyet}}:{{date('d-m-Y', strtotime($v->gio_daotaoduyet))}}
                                              </button>
                                               
                                                @endif
                                            </span>
                                           
                                            <span>
                                             
                                              <a href="{{url('admin/diemtheomon/danhsachthi')}}/{{$v->id_kqht}}">
                                                  <button class="btn btn-danger dsthi" data="{{$v->id_kqht}}"> DS thi</button>
                                               </a>
                                               
                                            </span>
                                             <span>
                                             
                                              <a href="{{url('admin/diemtheomon/add_diemthi')}}/{{$v->id_kqht}}">
                                                  <button class="btn btn-warning dsthi" data="{{$v->id_kqht}}"> Add điểm thi lần 1</button>
                                               </a>
                                               
                                            </span>
                                            <span>
                                             
                                              <a href="{{url('admin/diemtheomon/add_diemthi_lan2')}}/{{$v->id_kqht}}">
                                                  <button class="btn btn-warning dsthi" data="{{$v->id_kqht}}"> Add điểm thi lần 2</button>
                                               </a>
                                               
                                            </span>



                                           
                                              </p>
                                             

                                            </td>
                                            <td class="diemsv">
                                            <?php
                                            $id_sv= json_decode($v->id_sv);
                                            $diem_tb_kt = json_decode($v->diemtrungbinhkiemtra);
                                            $dieukienthi = json_decode($v->dieukienthi);
                                            $diemthilan1 = json_decode($v->diemthilan1);
                                            $diemthilan2 = json_decode($v->diemthilan2);

                                            $arr=[];
                                            if(isset($id_sv))
                                            {
                                            	foreach ($id_sv as $k=>$v) 
                                            {
                                            	$arr2['id_sv'] = $v;
                                            	$arr2['tb_kt'] =$diem_tb_kt[$k];
                                              $arr2['dieukienthi'] =$dieukienthi[$k];
                                              $arr2['diemthilan1'] =$diemthilan1[$k];
                                              $arr2['diemthilan2'] =$diemthilan[$k];
                                            	$arr[]= $arr2;
                                            }
                                            }
                                            
                                            foreach ($arr as $val) 
                                            {
                                            	$id_sv = $val['id_sv'];
                                            	$tensv = DB::table('sinhvien')->select('ho_tendem','ten','ma')->where('id',$id_sv)->first();

                                        echo '<div class="col-sm-2"> <span>MSV:</span>'.$tensv->ma.'</div>'.
                                             '<div class="col-sm-3"><span> 
                                             Họ tên:</span>'.$tensv->ho_tendem.'&nbsp;'. $tensv->ten .'</div>'
                                                .'<div class="col-sm-2"><span>TB kiểm tra:</span>'.$val['tb_kt'].'</div>';

                                        echo '<div class="col-sm-2"><span>ĐK thi:';
                                        if($val['dieukienthi']=='Được thi')
                                        {
                                          echo '<span class="dudk">Được thi</span>';

                                        }else{echo '<span class="khongdu_dk">KĐT</span>';}
                                        echo '</span></div>';

                                        echo '<div class="col-sm-2"><span>ĐT lần 1:';
                                        echo '<span class="dudk">'.$val['diemthilan1'].'</span>';
                                        echo '</span></div>';

                                        echo '<div class="col-sm-1"><span>ĐT lần 2:';
                                        echo '<span class="dudk">'.$val['diemthilan2'].'</span>';
                                        echo '</span></div>';

                                        
                                            	
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
               
                <!-- Third Basic Table Ends Here-->
               
                <!-- /.modal ends here -->
                 <!--delete modal starts here-->
                
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
               $.get(url+'/admin/diemtheomon/diemtheolop_delete/'+id, function(data)
               {
                	
                  		
                        $('.alert').show(1000);
                        $('.alert').text(data);
                        $('.alert').css({'background':'#F89A14'});
                          setTimeout(function()
                          { 
                          	$('.alert').hide(2000);
                          	location.reload();
                          }, 2000
                          );
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
                  thiss.parent().html(data);
               });

           }); 
            /*khoa,tt duyệt*/
            $('body').on('click','.khoaduyet', function()
           { 
              
                var id = $(this).attr('data');
                var url = $('#url').val();
                var thiss = $(this);
               $.get(url+'/admin/diemtheomon/diemtheolop_khoaduyet/'+id, function(data)
               {
                  thiss.parent().html(data);
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
                    //alert(data);
                  thiss.parent().html(data);
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

