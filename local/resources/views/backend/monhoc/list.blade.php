@extends('backend.master.index')
@section('title')
Danh sách môn học
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
@endsection('style')
@section('content')
  <aside class="right-side">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <!--section starts-->
                <h1>DANH SÁCH MÔN HỌC</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.html">
                            <i class="livicon" data-name="home" data-size="14" data-loop="true"></i> Trang chủ
                        </a>
                    </li>
                    <li>
                        <a href="#">Tổng hợp</a>
                    </li>
                    <li class="active">Danh sách môn học</li>
                </ol>
            </section>
            <!--section ends-->
            <section class="content">
                
                  <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-success filterable" style="overflow:auto;">
                            <div class="panel-heading">
                                 <a  style="color: white; font-weight: bold" data-toggle="modal" data-target="#add">
                                             <i class="livicon" data-name="camera" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Thêm mới môn học
                                        </a>
                            </div>
                            <div class="panel-body table-responsive">
                                <table class="table table-striped table-bordered" id="table2">
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>Mã môn học</th>
                                            <th>Tên môn học</th>
                                            <th>Tín chỉ</th>
                                            <th>
                                                HÀNH ĐỘNG
                                            </th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody class="dataadd">
                                        @foreach($data as $k=>$v)
                                        <tr>
                                            <td>{{$k}}</td>
                                            <td>{{$v->mamon}}</td>
                                            <td>{{$v->ten}}</td>
                                            <td>{{$v->tinchi}}</td> 
                                            <td>
                                               <button data="{{$v->id}}" class="btn btn-danger delete"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                                <button class="btn btn-warning edit_tabel" data-toggle="modal" data-target="#edititem" 
                                                data='
                                                <?php 
                                                $arr=[];
                                                $arr['mamon']= $v->mamon;
                                                $arr['ten'] = $v->ten;
                                                $arr['tinchi']=$v->tinchi;
                                                $arrjson = json_encode($arr);
                                                echo $arrjson;
                                                ?>'>
                                                   <i class="fa fa-pencil" aria-hidden="true"></i>
                                               </button> 
                                            </td>
                                        </tr>
                                        @endforeach
                                        
                                       
                                    </tbody>
                                </table>
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
                                    Thêm mới môn học
                                </h4>
                            </div>
                            <div class="modal-body">
                               <div id="add_form">
                                  <div class="form-group">
                                  <label for="email">Tên môn</label>
                                  <input type="text" class="form-control" id="email" placeholder="Enter Value" name="ten">
                                </div>
                                <div class="form-group">
                                  <label for="email">Mã môn</label>
                                  <input type="text" class="form-control" id="email" placeholder="Enter Value" name="mamon">
                                </div>
                                 <div class="form-group">
                                  <label for="email">Tín chỉ</label>
                                  <input type="text" class="form-control" id="email" placeholder="Enter Value" name="tinchi">
                                </div>
                                <div class="form-group">
                                   <button type="submit" class="btn btn-primary additem2">Thêm mới</button>
                                </div>
                               
                             
                             </div>
                              </div>
                            <div class="modal-footer ">
                               
                                <button type="button" class="btn btn-warning" data-dismiss="modal">
                                    <span class="glyphicon glyphicon-remove"></span> No
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.modal ends here -->
                  <!--edit modal starts here-->
                <div class="modal fade" id="edititem" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title custom_align" id="edit">
                                    Sửa thông tin môn học
                                </h4>
                            </div>
                            <div class="modal-body">
                               <div id="edit_form">
                                  <div class="form-group">
                                  <label for="email">Tên môn</label>
                                  <input type="text" class="form-control tenmon" placeholder="Enter Value" name="ten">
                                </div>
                                <div class="form-group">
                                  <label for="email">Mã môn</label>
                                  <input type="text" class="form-control mam" id="email" placeholder="Enter Value" name="mamon">
                                </div>
                                 <div class="form-group">
                                  <label for="email">Học phí</label>
                                  <input type="text" class="form-control " id="hocphiedit" placeholder="Enter Value" name="hocphi">
                                </div>
                                <div class="form-group">
                                   <button type="submit" class="btn btn-primary additem2">Sửa</button>
                                </div>
                               
                             
                             </div>
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
                <input type="hidden" id="url" name="" value="{{url('')}}">
            </section>
            <!-- content -->
        </aside>
            
@endsection('content')
@section('script')
 <script> 
        $(document).ready(function()
        {
           
           $('body').on('click','.additem2', function()
           {
                var ten =   $("input[name*='ten']").val();
                var mamon =   $("input[name*='mamon']").val();
                var tinchi =   $("input[name*='tinchi']").val();
                var url = $('#url').val();
               $.get(url+'/admin/monhoc/add/'+ten+'/'+mamon+'/'+tinchi, function(data)
               {
                        $('.dataadd').html(data);
                         $('#add').hide();
                         $('.modal-backdrop').hide();
                         $('.alertNotification').show(3000);
                         $('.alertNotification').text('Thêm thành công');
                         $('.alertNotification').css({'background':'#01bc8c'});
                          setTimeout(function(){ $('.alertNotification').hide(5000);}, 5000);
               });

           });

           $('body').on('click','.delete', function()
           {
                var id = $(this).attr('data');
                var url = $('#url').val();
               $.get(url+'/admin/monhoc/delete/'+id, function(data)
               {
                    $('.dataadd').html(data);
               });

           });

           $('body').on('click','.edit_tabel', function()
           {
                var data = $(this).attr('data');
                var datadecode  = JSON.parse(data);
                $(".tenmon").val(datadecode.ten);
                $(".mam").val(datadecode.manon);
                $("#hocphiedit").val(datadecode.hocphi);
                /*var url = $('#url').val();
               $.get(url+'/admin/monhoc/delete/'+id, function(data)
               {
                    $('.dataadd').html(data);
               });*/

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
@endsection('script')

