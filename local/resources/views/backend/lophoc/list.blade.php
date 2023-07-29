@extends('backend.master.index')
@section('title')
Danh sách lớp học
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
                <h1>DANH SÁCH LỚP HỌC</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.html">
                            <i class="livicon" data-name="home" data-size="14" data-loop="true"></i> Trang chủ
                        </a>
                    </li>
                    <li>
                        <a href="#">Tổng hợp</a>
                    </li>
                    <li class="active">Danh sách lớp học</li>
                </ol>
            </section>
            <!--section ends-->
            <section class="content">
                
                  <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-success filterable" style="overflow:auto;">
                            <div class="panel-heading">
                                 <a  style="color: white; font-weight: bold" data-toggle="modal" data-target="#add">
                                             <i class="livicon" data-name="camera" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Thêm mới lớp học
                                        </a>
                            </div>
                            <div class="panel-body table-responsive">
                                <table class="table table-striped table-bordered" id="table2">
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                           
                                            <th>Tên lớp học</th>
                                            <th>Học sinh</th>
                                           
                                            <th>
                                                HÀNH ĐỘNG
                                            </th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody class="dataadd">
                                        @foreach($data as $k=>$v)
                                        <tr>
                                            <td>{{$k}}</td>
                                            <td>{{$v->name}}</td>
                                            <td>
                                              <?php 
                                     
                                              if($v->id_hocvien != null)
                                              {
                                                $arr_idhv = explode(",", $v->id_hocvien);

                                                foreach($arr_idhv as $k=>$a)
                                                    {
                                                        $name = DB::table('sinhvien')->where('id',$a)->select('ten','ho_tendem','ma')->first();
                                                        if(isset($name))
                                                        {
                                                          echo '<div class="thongtin">'. $k.'-'.$name->ma .'-'.$name->ho_tendem.'&nbsp'.$name->ten.'</div>';
                                                        }else
                                                        {
                                                          echo '';
                                                        }
                                                      
                                                    }
                                              }
                                              
                                              ?>
                                            </td>
                                         
                                            <td>
                                               <button data="{{$v->id}}" class="btn btn-danger delete"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                                <button class="btn btn-warning edit_tabel" data-toggle="modal" data-target="#edititem" 
                                                data='
                                                <?php 
                                                $arr=[];
                                                $arr['id_lop']= $v->id;
                                                $arr['name'] = $v->name;
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
                                    Thêm mới lớp học và sinh viên
                                </h4>
                            </div>
                            <div class="modal-body">
                               <div id="add_form">
                                  <div class="form-group">
                                  <label for="email">Tên lớp</label>
                                  <input type="text" class="form-control" id="email" placeholder="Enter Value" name="name">
                                </div>
                                  <div class="form-group">
                                  <label for="email">Lấy danh sách sinh viên</label>
                                  <select class="form-control" name="danhsachsvtheolop" id="locnhanh_dssv">
                                    <option>Lọc nhanh danh sách sinh viên</option>
                                    @foreach($keylophoc as $v)
                                    <option value="{{$v->lop}}">{{$v->lop}}</option>
                                    @endforeach()
                                  </select>
                                </div>
                               
                                <div class="form-group">
                                <label for="select22" class="control-label">
                                      Học viên
                                  </label>

                              
                                  <div class="form-group" id="dssv_theolop" style="border: 1px solid #bdb6b6; border-radius: 4px; padding: 10px; min-height: 20px;">
                                    
                                  </div>
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
                                    Sửa thông tin lớp học
                                </h4>
                            </div>
                            <div class="modal-body">
                               <div id="edit_form">
                                  <div class="form-group">
                                  <label for="email">Tên lớp</label>
                                  <input type="text" class="form-control tenlop" placeholder="Enter Value" name="nameedit">
                                  <input type="hidden" id="idlop" name="idedit">
                                </div>
                                 <div class="form-group hocvienlist">
                                <label for="select22" class="control-label">
                                      Học viên
                                  </label>

                              
                                  <div class="form-group" style="border: 1px solid #bdb6b6; border-radius: 4px; padding: 10px; min-height: 20px;">
                                    
                                  </div>
                              </div>
                               
                               
                                <div class="form-group">
                                   <button type="submit" class="btn btn-primary edititem2">Sửa</button>
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
           
           $('body').on('click','.additem2', function()
           {    
                //var hocvien = $('.hocvien').val();
                var id_hocvien = $(".hocvien:checked").map(function(){return $(this).val();}).get();
                var ten =   $("input[name*='name']").val();
                var url = $('#url').val();
               $.get(url+'/admin/lophoc/add/'+ ten+'/'+id_hocvien, function(data)
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
               $.get(url+'/admin/lophoc/delete/'+id, function(data)
               {
                    $('.dataadd').html(data);
               });

           });

           $('body').on('click','.edit_tabel', function()
           {
                var data = $(this).attr('data');
                var datadecode  = JSON.parse(data);
                $(".tenlop").val(datadecode.name);
                $("#idlop").val(datadecode.id);
                
           });

            $('body').on('click','.edititem2', function()
           {
                var nameedit =   $("input[name*='nameedit']").val();
                var idedit = $("input[name*='idedit']").val();
                var url = $('#url').val();
               $.get(url+'/admin/lophoc/edit/'+ nameedit +'/'+idedit, function(data)
               {
            
                         $('.dataadd').html(data);
                         $('#edititem').hide();
                         $('.modal-backdrop').hide();
                         $('.alertNotification').show(3000);
                         $('.alertNotification').text('Thêm thành công');
                         $('.alertNotification').css({'background':'#01bc8c'});
                          setTimeout(function(){ $('.alertNotification').hide(5000);}, 5000);
               });

           });

            $('#check1').click(function()
              { 
              $('.hocvien').prop("checked",true);
              });
              $('#check2').click(function()
              { 
              $('.hocvien').prop("checked",false);
              })

        });

     
        $('#locnhanh_dssv').change(function()
        {
              
               var lop = $(this).val();
               var url = $('#url').val();
              $.get(url+'/admin/lophoc/getsv/'+lop, function(data)
              {
                //alert(data);
                 $('#dssv_theolop').html(data);
              });

        })
    </script>
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

