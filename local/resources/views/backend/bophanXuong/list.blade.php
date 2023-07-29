@extends('backend.master.index')
@section('title')
Danh sách bộ phận-Xưởng
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
                <h1>DANH SÁCH BỘ PHẬN XƯỞNG</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.html">
                            <i class="livicon" data-name="home" data-size="14" data-loop="true"></i> Trang chủ
                        </a>
                    </li>
                    <li>
                        <a href="#">Tổng hợp</a>
                    </li>
                    <li class="active">Danh sách bộ phận xưởng</li>
                </ol>
            </section>
            <!--section ends-->
            <section class="content">
                
                  <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-success filterable" style="overflow:auto;">
                            <div class="panel-heading">
                                 <a href="javascript::voild(0)" style="color: white; font-weight: bold" data-toggle="modal" data-target="#add">
                                             <i class="livicon" data-name="camera" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Thêm mới Bộ phận-Xưởng
                                        </a>
                            </div>
                            <div class="panel-body table-responsive">
                                <table class="table table-striped table-bordered" id="table2">
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>ID</th>
                                            <th>TÊN BỘ PHẬN/XƯỞNG</th>
                                            <th>MÃ BỘ PHẬN/XƯỞNG</th>
                                            <th>NGƯỜI TẠO</th>
                                            
                                            <th>
                                                TG TẠO
                                            </th>
                                            <th>
                                                HÀNH ĐỘNG
                                            </th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody class="dataadd">
                                        @foreach($data as $k=>$v)
                                        <tr>
                                            <td>{{$k}}</td>
                                            <td>{{$v->id}}</td>
                                            <td>{{$v->name}}</td>
                                            <td>
                                                {{$v->ma_bophanxuong}}
                                            </td>
                                            <td>
                                                {{$v->nguoitao}}
                                            </td>
                                            <td>
                                              {{date('d-m-Y H:i:s',strtotime($v->created_at))}}
                                            </td>
                                            <td>
                                                 <button data="{{$v->id}}" class="btn btn-danger delete"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                              
                                          <!--   <button class="btn btn-warning edit_tabel" data-toggle="modal" data-target="#edititem" data="{{$v}}">
                                              <i class="fa fa-pencil" aria-hidden="true"></i>
                                          </button> -->
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
                                    Thêm bộ phận-xưởng
                                </h4>
                            </div>
                            <div class="modal-body">
                               <div id="add_form">
                                  <div class="form-group">
                                  <label for="email">Tên</label>
                                  <input type="text" class="form-control"  name="name">
                                </div>
                                <div class="form-group">
                                  <label for="email">Mã bộ phận - xưởng</label>
                                  <input type="text" class="form-control"   name="mabophanxuong">
                                </div>
                                
                                <button type="submit" class="btn btn-primary additem">Thêm mới</button>
                                {{csrf_field()}}
                             </div>
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
           
           $('body').on('click','.additem', function()
           {
                var name =   $("input[name*='name']").val();
                var mabophanxuong =   $("input[name*='mabophanxuong']").val();
                var url = $('#url').val();
               $.get(url+'/admin/bophanxuong/add/'+name+'/'+mabophanxuong, function(data)
               {
                         $('.dataadd').html(data);
                         $("input[name*='name']").val('');
                         $("input[name*='mabophanxuong']").val('');
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
               $.get(url+'/admin/bophanxuong/delete/'+id, function(data)
               {
                    $('.dataadd').html(data);
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

