@extends('backend.master.index')
@section('title')
Đơn hàng
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

    <!--end of page level css-->
@endsection('style')
@section('content')
  <aside class="right-side">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <!--section starts-->
                <h1>DANH SÁCH ĐƠN HÀNG</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.html">
                            <i class="livicon" data-name="home" data-size="14" data-loop="true"></i> Trang chủ
                        </a>
                    </li>
                    <li>
                        <a href="#">Đơn hàng</a>
                    </li>
                    <li class="active">Danh sách đơn hàng</li>
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
                                            <i class="livicon" data-name="camera" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Thêm mới đơn hàng
                                       </a>
                                      
                               
                                   </div>
                               </div> -->
                                <div class="panel-title pull-left">
                                    <div class="caption">
                                       <a href="{{url('admin/donhang/add')}}" style="color: white; font-weight: bold">
                                            <i class="livicon" data-name="plus-alt" data-size="16" data-c="#fff" data-hc="#fff" data-loop="true" id="livicon-153" style="width: 50px; height: 50px;"></i>

                                             Import đơn hàng
                                        </a>
                                       

                                    </div>
                                </div>
                                <div class="tools pull-right"></div>
                            </div>
                            <div class="panel-body table-responsive">
                                <table class="table table-striped table-bordered" id="table1">
                                    <thead>
                                        <tr>
                                           
                                            <th>TT</th>
                                            <th>Khách hàng</th>
                                            <th>
                                                Mã đơn hàng
                                            </th>
                                             <th>
                                               Mã ĐH Khách hàng
                                            </th>
                                         
                                            <th>Mã Sản phẩm</th>
                                            <th>Mã SP KH</th>
                                            <th>Số lượng</th>
                                            <th>Ngày xuất</th>
                                            <!-- <th>CDSX_2</th> -->
                                           <!--  <th>GIAY_PCS</th> -->
                                            <!-- <th>SL8H</th> -->
                                            <!-- <th>SL11H</th>
                                            <th>SL27D8H</th> -->
                                          
                                             <th>
                                                Hành động
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="data">
                                      @foreach($data as $k=>$v)
                                        <tr>
                                           
                                            <td>{{$k}}</td>
                                            <td>{{$v->khachhang}}</td>
                                            <td>
                                               {{$v->madonhang}}
                                            </td>
                                            <td>{{$v->madhkh}}</td>
                                            <td>{{$v->masanpham}}</td>
                                            <td>{{$v->maspkhachhang}}</td>
                                            <td>{{$v->soluong}}</td>
                                            <td>{{$v->ngayxuat}}</td>
                                           <!--  <td>{{$v->CDSX_2}}</td> -->
                                           <!--  <td>{{$v->GIAY_PCS}}</td> -->
                                            <!-- <td>{{$v->SL8H}}</td> -->
                                           <!--  <td>{{$v->SL11H}}</td>
                                            <td>{{$v->SL27D8H}}</td> -->
                                            <td>
                                               <button data="{{$v->id}}"class="btn btn-danger delete"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                              
                                              <!--  <button class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i></button> -->
                                            </td>
                                        </tr>
                                      @endforeach
                                    
                                    
                                        
                                        
                                    </tbody>
                                </table>
                                <button class="btn btn-warning">
                                  <a class="btn btn-warning" href="{{ route('exportdonhang') }}">Export  Data</a>
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
                                    Thêm đơn hàng
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

                //console.log(id + url);
               $.get(url+'/admin/donhang/delete/'+id, function(data)
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

