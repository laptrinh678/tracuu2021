@extends('backend.master.index')
@section('title')
Danh sách nhật ký
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
                <h1>DANH SÁCH CHI TIẾT NKSX</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.html">
                            <i class="livicon" data-name="home" data-size="14" data-loop="true"></i> Trang chủ
                        </a>
                    </li>
                    <li>
                        <a href="#">Nhật ký</a>
                    </li>
                    <li class="active">Danh sách chi tiết nhật ký sx</li>
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
                                       <a href="{{url('admin/nhatkysanxuat/add')}}" style="color: white; font-weight: bold">
                                             <i class="livicon" data-name="camera" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Import phiếu NKSX
                                        </a>
                                       

                                    </div>
                                </div>

                                <div class="panel-title pull-right">
                                    <div class="caption">
                                       <a href="{{url('admin/nhatkysanxuat/addphieu')}}" style="color: white; font-weight: bold">
                                             <i class="livicon" data-name="camera" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Tạo phiếu
                                        </a>
                                       
                                    </div>
                                </div> 
                            </div>
                            <div class="panel-body table-responsive">
                            <!--   <div class="ten"></div>
                               <div class="ney"></div> -->
                            <table class="table table-striped table-bordered" id="table1">
                                    <thead>
                                        <tr>
                                           
                                            <th>TT</th>
                                            <th>Mã thẻ</th>
                                            <th>
                                                Tên
                                            </th>
                                            
                                            <th>Tổng TG</th>
                                            <th>Mã ĐH</th>
                                            <th>Mã SP</th>
                                           <!--  <th>Btp</th> -->
                                          <!--   <th>Hạng mục gốc</th> -->
                                            <th>Sản lương</th>
                                          <!--   <th>Sl hàng đạt</th>
                                            <th>Sl hàng xấu</th> -->
                                             <th>Đơn giá</th>
                                             <th>Thành tiền</th>
                                             <th>
                                                Hành động
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="data">
                                      @foreach($data as $k=>$v)
                                        <tr>
                                           
                                            <td>{{$k}}</td>
                                            <td>{{$v->mathe}}</td>
                                            <td>
                                               {{$v->hoten}}
                                            </td>
                                            <td>{{$v->tongthhoigian}}</td>
                                            <td>{{$v->madonhang}}</td>
                                            <td>{{$v->masanpham}}</td>
                                          <!--   <td>{{$v->btp}}</td> -->
                                          <!--   <td>{{$v->hangmucgc}}</td> -->
                                            <td>{{$v->sanluong}}</td> 
                                           <!--  <td>{{$v->slhangdat}}</td> 
                                            <td>{{$v->slhangxau}}</td>  -->
                                            <td>{{$v->dongia}}</td>
                                            <td>{{$v->thanhtien}}</td> 
                                            <td>
                                               <button data="{{$v->id}}"class="btn btn-danger delete"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                              
                                               <button class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                                            </td>
                                        </tr>
                                      @endforeach
                                    
                                        
                                    </tbody>
                            </table>
                                <button class="btn btn-warning">
                                  <a class="btn btn-warning" href="{{ route('exportnhatkysanxuat') }}">Export  Data</a>
                                </button>
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
                                    Thêm danh sách công nhân
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
               $.get(url+'/admin/nhatkysanxuat/delete/'+id, function(data)
               {
                    $('.data').html(data);
               });

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

