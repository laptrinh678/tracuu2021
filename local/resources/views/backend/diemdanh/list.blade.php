@extends('backend.master.index')
@section('title')
Điểm danh
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

    <!-- select2 -->
     <link href="vendors/bootstrap-multiselect/css/bootstrap-multiselect.css" rel="stylesheet" type="text/css">
   <link href="vendors/select2/css/select2.min.css" rel="stylesheet" type="text/css">
   <link href="vendors/select2/css/select2-bootstrap.css" rel="stylesheet" type="text/css">
   <link href="vendors/selectize/css/selectize.css" rel="stylesheet" type="text/css">
   <link href="vendors/selectize/css/selectize.bootstrap3.css" rel="stylesheet" type="text/css">
   <link href="vendors/iCheck/css/all.css" rel="stylesheet" type="text/css">
   <Link href="vendors/iCheck/css/line/line.css" rel="stylesheet" type="text/css">
   <link href="css/pages/formelements.css" rel="stylesheet" type="text/css">
   <link href="css/pages/customform_elements.css" rel="stylesheet" type="text/css"> 
    <!-- end select2 -->

    <!--end of page level css-->
@endsection('style')
@section('content')
<style>
  .hphv{ border: 0px;
    background: #f7f5f5;
    margin: 3px;
    border-radius: 4px;
    /* text-align: right; */
    width: 75px; }
</style>
  <aside class="right-side">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <!--section starts-->
                <h1>DANH SÁCH Điểm danh</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.html">
                            <i class="livicon" data-name="home" data-size="14" data-loop="true"></i> Trang chủ
                        </a>
                    </li>
                    <li>
                        <a href="#">Điểm danh</a>
                    </li>
                    <li class="active">Danh sách Điểm danh</li>
                </ol>
            </section>
            <!--section ends-->
            <section class="content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-primary filterable">
                            <div class="panel-heading clearfix  ">
                               
                                 <div class="panel-title pull-left">
                                    <div class="caption">
                                       <a href="{{url('admin/diemdanh/add')}}" style="color: white; font-weight: bold">
                                            <i class="livicon" data-name="plus-alt" data-size="16" data-c="#fff" data-hc="#fff" data-loop="true" id="livicon-153" style="width: 50px; height: 50px;"></i>

                                             Thêm mới Điểm danh
                                        </a>
                                       

                                    </div>
                                </div>
                                <div class="tools pull-right"></div>
                            </div>
                            <div class="panel-body table-responsive">
                                <table class="table table-striped table-bordered" id="table2">
                                    <thead>
                                        <tr>
                                           
                                            <th>TT</th>
                                            <th>Ngày</th>
                                            <th>
                                                Tháng
                                            </th>
                                             <th>
                                               Ca
                                            </th>
                                            <th>Môn học</th>
                                            <th>Lớp</th>
                                            <th>Học viên</th>
                                            
                                             <th>
                                                Hành động
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="data">
                                      
                                        @foreach($data as $k=>$v)
                                        <tr>
                                           
                                            <td>{{$k}}</td>
                                            <td>{{$v->ngay}}</td>
                                            <td>
                                               {{$v->thang2}}
                                            </td>
                                            <td>
                                                @if($v->ca==1)
                                                {{'Sáng'}}
                                                @elseif($v->ca==2)
                                                {{'Chiều'}}
                                                @elseif($v->ca==3)
                                                {{'Tối'}}
                                                @endif
                                            </td>
                                            <td>{{$v->ten}}</td>
                                            <td>{{$v->dcm}}</td>
                                            <td  class="relative relative2">
                                               <?php
                                                $hocvDecode = json_decode($v->hocvien_hocphi);
                                              if(isset($hocvDecode))
                                                {
                                                    foreach($hocvDecode as $a)
                                                    {

                                                        $name = DB::table('congnhan')->where('id',$a->id)->select('ten')->first();
                                                        if(isset($name))
                                                        {
                                                       
                                                          echo $name->ten.'-Hoc phi:'.$a->hptheomon.'<br>';
                                                        }else
                                                        {
                                                          echo '';
                                                        }

                                                        
                                                      
                                                    }
                                                }
                                                
                                               ?>

                                            </td>
                                           
                                          
                                            <td>
                                               <a href="{{url("admin/diemdanh/delete/$v->id")}}"><button class="btn btn-danger "><i class="fa fa-trash" aria-hidden="true"></i>
                                               </button></a>

                                              
                                              <button data='
                                              <?php
                                              $arr=[];
                                              $arr['ngay'] = $v->ngay;
                                               ?>' class="btn btn-warning edititem">
                                               <i class="fa fa-pencil" aria-hidden="true"></i>
                                             </button>
                                                <button data="{{$v->id}}"class="btn btn-success" data-toggle="modal" data-target="#viewmore"><i class="fa fa-eye" aria-hidden="true"></i></button>
                                            </td>
                                        </tr>
                                      @endforeach
                                    
                                        
                                        
                                    </tbody>
                                </table>
                               <!--  <button class="btn btn-warning">
                                 <a class="btn btn-warning" href="{{ route('exportdongia') }}">Export  Data</a>
                               </button> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                      <!--main content-->
                <!--main content-->
                <div class="row">
                    <div class="col-md-5">

                        <div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="livicon" data-name="calendar" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Xuất báo cáo Tổng hợp với từng học sinh
                                </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                            </div>
                            <div class="panel-body">
                                <div class="box-body">
                                   
                                   <form action="" method="POST" id="xuatbc_tonghop_hs">
                                    <!-- IP mask -->
                                    
                                     <div class="form-group">
                                  <label for="select22" class="control-label">
                                     Tháng
                                  </label>
                                  <select id="select22" class="form-control select2" name="thang">
                                      <option value="">Select value...</option>

                                      <option value="1">Tháng 1</option>
                                       <option value="2">Tháng 2</option>
                                       <option value="3">Tháng 3</option>
                                       <option value="4">Tháng 4</option>
                                       <option value="5">Tháng 5</option>
                                       <option value="6">Tháng 6</option>
                                      
                                     
                                  </select>
                              </div>
                            
                               <div class="form-group">
                                  <label for="select21" class="control-label">
                                    Học viên
                                  </label>
                                  <select id="select21" class="form-control select2" name="hocvien">
                                       <option value="">Select value...</option>
                                     @foreach($hocvien as $v)
                                          <option value="{{$v->id}}">{{$v->ten}}</option>
                                      @endforeach 
                                  </select>
                              </div>
                                   
                              
                              <div class="form-group">
                                <button type="submit" class="btn btn-primary">Xuất báo cáo</button>
                              </div>
                              {{csrf_field()}}
                              </form>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                    <div class="col-md-7">
                        <!--select2 starts-->
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="livicon" data-name="calendar" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Tổng hợp báo cáo
                                </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                            </div>
                            <div class="panel-body datadiemdanhtonghop">
                            </div>
                            <!--ends-->
                        </div>
                      
                    </div>
                </div>
                <!--main content ends-->
                <div class="row">
                    <div class="col-md-5">

                        <div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="livicon" data-name="calendar" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Xuất báo cáo chi tiết với từng học sinh
                                </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                            </div>
                            <div class="panel-body">
                                <div class="box-body">
                                   
                                   <form action="" method="POST" id="xuatbccths">
                                    <!-- IP mask -->
                                    
                                     <div class="form-group">
                                  <label for="select22" class="control-label">
                                     Tháng
                                  </label>
                                  <select id="select22" class="form-control select2" name="thang">
                                      <option value="">Select value...</option>

                                      <option value="1">Tháng 1</option>
                                       <option value="2">Tháng 2</option>
                                       <option value="3">Tháng 3</option>
                                       <option value="4">Tháng 4</option>
                                       <option value="5">Tháng 5</option>
                                       <option value="6">Tháng 6</option>
                                      
                                     
                                  </select>
                              </div>
                            
                               <div class="form-group">
                                  <label for="select21" class="control-label">
                                    Học viên
                                  </label>
                                  <select id="select21" class="form-control select2" name="hocvien">
                                       <option value="">Select value...</option>
                                     @foreach($hocvien as $v)
                                          <option value="{{$v->id}}">{{$v->ten}}</option>
                                      @endforeach 
                                  </select>
                              </div>
                                   
                              
                              <div class="form-group">
                                <button type="submit" class="btn btn-danger">Xuất báo cáo</button>
                              </div>
                              {{csrf_field()}}
                              </form>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                    <div class="col-md-7">
                        <!--select2 starts-->
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="livicon" data-name="calendar" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Tổng hợp báo cáo
                                </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                            </div>
                            <div class="panel-body datadiemdanhchitieths">
                            </div>
                            <!--ends-->
                        </div>
                      
                    </div>
                </div>
                <!--main content ends-->
                <!-- xuat bc theo lop-->
                 <!--main content ends-->
                <div class="row">
                    <div class="col-md-5">

                        <div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="livicon" data-name="calendar" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Xuất báo cáo theo lớp
                                </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                            </div>
                            <div class="panel-body">
                                <div class="box-body">
                                   
                                   <form action="" method="POST" id="xuatbaocaotonghoptheolop">
                                    <!-- IP mask -->
                                    
                                     <div class="form-group">
                                  <label for="select22" class="control-label">
                                     Tháng
                                  </label>
                                  <select id="select22" class="form-control select2" name="thang">
                                      <option value="">Select value...</option>

                                      <option value="1">Tháng 1</option>
                                       <option value="2">Tháng 2</option>
                                       <option value="3">Tháng 3</option>
                                       <option value="4">Tháng 4</option>
                                       <option value="5">Tháng 5</option>
                                       <option value="6">Tháng 6</option>
                                      
                                     
                                  </select>
                              </div>
                            
                               <div class="form-group">
                                  <label for="select21" class="control-label">
                                   Lớp
                                  </label>
                                  <select id="select21" class="form-control select2" name="lop">
                                       <option value="">Select value...</option>
                                     @foreach($lophoc as $v)
                                          <option value="{{$v->id}}">{{$v->name}}</option>
                                      @endforeach 
                                  </select>
                              </div>
                                   
                              
                              <div class="form-group">
                                <button type="submit" class="btn btn-danger">Xuất BC theo lớp</button>
                              </div>
                              {{csrf_field()}}
                              </form>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                    <div class="col-md-7">
                        <!--select2 starts-->
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="livicon" data-name="calendar" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Tổng hợp báo cáo
                                </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                            </div>
                            <div class="panel-body xuatbaocaotonghoptheolop">
                            </div>
                            <!--ends-->
                        </div>
                      
                    </div>
                </div>
                <!--main content ends-->
                </div>
               
                <!-- Third Basic Table Ends Here-->
                <!--delete modal starts here-->
                <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title custom_align" id="edit">
                                    Thêm Điểm danh
                                </h4>
                            </div>
                            <div class="modal-body">
                               <form action="" method="POST" enctype="multipart/form-data" id="upload_form">
                              <div class="form-group">
                              <label for="email">Import file</label>
                              <input type="file" class="form-control" id="email" placeholder="Enter email" name="file">
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
                 <!--delete modal starts here-->
                <div class="modal fade" id="viewmore" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title custom_align" id="edit">
                                    Thông tin Điểm danh
                                </h4>
                            </div>
                            <div class="modal-body">
                              <table class="table table-striped table-bordered" id="table2">
                                    <thead>
                                        <tr>
                                           
                                           
                                            <th>Ngày điểm danh</th>
                                            <th>
                                                Người điểm danh
                                            </th>
                                            
 
                                        </tr>
                                    </thead>
                                    <tbody class="data">
                                        <tr>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="modal-footer ">
                               
                                <button type="button" class="btn btn-warning" data-dismiss="modal">
                                    <span class="glyphicon glyphicon-remove"></span> Close
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.modal ends here -->
            </section>
            <!-- content -->
            <input type="hidden" id="url" name="" value="{{url('')}}">
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
               $.get(url+'/admin/diemdanh/delete/'+id, function(data)
               {
                    $('.data').html(data);
               });
           });
        $('#xuatbc_tonghop_hs').on('submit', function(event)
         {

            event.preventDefault();
             $.ajax({
               url:"{{route('xuatbcthtunghs')}}",
               method:"POST",
               data:new FormData(this),
               //dataType:'JSON',
               contentType: false,
               cache: false,
               processData: false,
               success:function(data)
               {
            
                  $('.datadiemdanhtonghop').html(data);
               }
              })
         });
          $('#xuatbccths').on('submit', function(event)
         {

            event.preventDefault();
             $.ajax({
               url:"{{route('xuatbaocaochitieths')}}",
               method:"POST",
               data:new FormData(this),
               //dataType:'JSON',
               contentType: false,
               cache: false,
               processData: false,
               success:function(data)
               {
            
                  $('.datadiemdanhchitieths').html(data);
               }
              })
         });


           $('#xuatbaocaotonghoptheolop').on('submit', function(event)
         {
          event.preventDefault();
             $.ajax({
               url:"{{route('xuatbaocaotheolop')}}",
               method:"POST",
               data:new FormData(this),
               //dataType:'JSON',
               contentType: false,
               cache: false,
               processData: false,
               success:function(data)
               {
            
                  $('.xuatbaocaotonghoptheolop').html(data);
                 
               }
              })
         });


        $('body').on('click','.sethp', function()
        {
              var id_hocvien = $(".hphv").map(function(){return Number($(this).val());}).get();
              var sum = id_hocvien.reduce(function(a, b){
                  return a + b;
              }, 0);
              var hp_fomat= new Intl.NumberFormat().format(sum);
              $('#tonghp').text('Tổng HP:'+hp_fomat);

        });

       

        });
    </script>
    <!-- select 2 -->
    <script src="vendors/bootstrap-multiselect/js/bootstrap-multiselect.js" type="text/javascript"></script>
   <script src="vendors/select2/js/select2.js" type="text/javascript"></script>
   <script src="vendors/selectize/js/standalone/selectize.min.js" type="text/javascript"></script>
   <script src="vendors/iCheck/js/icheck.js" type="text/javascript"></script>
   <script src="vendors/bootstrap-switch/js/bootstrap-switch.js" type="text/javascript"></script>
   <script src="vendors/switchery/js/switchery.js" type="text/javascript"></script>
   <script src="js/pages/custom_elements.js" type="text/javascript"></script>
   <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script> -->
    <script src="excel/jquery.table2excel.js"></script>
    <!-- end select 2 -->
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

