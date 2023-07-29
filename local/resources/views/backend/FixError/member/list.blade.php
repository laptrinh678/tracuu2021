@extends('backend.master.index')
@section('title')
Danh sách user
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
                <h1>Danh sách thành viên</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.html">
                            <i class="livicon" data-name="home" data-size="14" data-loop="true"></i> Trang chủ
                        </a>
                    </li>
                    <li>
                        <a href="#">QL thành viên</a>
                    </li>
                    <li class="active">Danh sách thành viên/li>
                </ol>
            </section>
            <!--section ends-->
            <section class="content">
                 <div class="alertNotification"></div>
                  <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-success filterable" style="overflow:auto;">
                            <div class="panel-heading">
                                <a href="javascript::voild(0)" style="color: white; font-weight: bold" data-toggle="modal" data-target="#add">
                                             <i class="livicon" data-name="camera" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Thêm mới user
                                        </a>
                            </div>
                            <div class="panel-body table-responsive">
                                 <table class="table table-striped table-bordered" id="table2">
                                    <thead>
                                        <tr>
                                           
                                            <th>TT</th>
                                            <th>Tên</th>
                                            <th>
                                                Email
                                            </th>
                                             <th>
                                               Level
                                            </th>
                                         
                                           
                                             <th>
                                                Hành động
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="data">
                                       @foreach($users as $k=>$v)
                                        <tr>
                                           
                                            <td>{{$k}}</td>
                                            <td>{{$v->name}}</td>
                                            <td>
                                               {{$v->email}}
                                            </td>
                                            <td>{{$v->level}}</td>
                                            
                                            <td>
                                               <button data="{{$v->id}}"class="btn btn-danger delete"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                                                                             
                                               <button class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i></button> 
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
                <div class="modal fade addusser" id="add" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title custom_align" id="edit">
                                    Thêm user
                                </h4>
                            </div>
                            <div class="modal-body">
                               <form action="" method="post" id="upload_form">
                                 <div class="form-group">
                                <label for="email">Tên đăng nhập:</label>
                                <input type="text" class="form-control" name="name">
                              </div>
                               <div class="form-group">
                                <label for="email">Email address:</label>
                                <input type="email" class="form-control" name="email">
                              </div>
                              <div class="form-group">
                                <label for="pwd">Password:</label>
                                <input type="password" class="form-control" name="pass">
                              </div>
                             <div class="form-group">
                                <select class="form-control" name="level">
                                    <option>Chọn quyền truy cập</option>
                                    <option value="1">Root</option>
                                    <option value="2">Admin</option>
                                    <option value="3">User</option>
                                </select>
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
               $.get(url+'/admin/member/delete/'+id, function(data)
               {

                    $('.data').html(data);
                    $('.alertNotification').show(3000);
                    $('.alertNotification').text('Thêm thành công');
                    $('.alertNotification').css({'background':'#01bc8c'});
                         // setTimeout(function(){ $('.alertNotification').hide(2000);}, 2000);
               });

           });

           $('#upload_form').on('submit', function(event){
              event.preventDefault();
              $.ajax({
               url:"{{route('addmember')}}",
               method:"POST",
               data:new FormData(this),
               //dataType:'JSON',
               contentType: false,
               cache: false,
               processData: false,
               success:function(data)
               {

                  $('.data').html(data);
                  $('.addusser').hide();
                  $('.modal-backdrop').hide();
                
               /* $('#message').css('display', 'block');
                $('#message').html(data.message);
                $('#message').addClass(data.class_name);
                $('#uploaded_image').html(data.uploaded_image);*/
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
@endsection('script')



