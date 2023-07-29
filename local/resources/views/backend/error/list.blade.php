@extends('backend.master.index')
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
                <h1>QUẢN LÝ ĐƠN HÀNG</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.html">
                            <i class="livicon" data-name="home" data-size="14" data-loop="true"></i> Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="#">Data Tables</a>
                    </li>
                    <li class="active">Advanced Data Tables</li>
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
                                        <i class="livicon" data-name="camera" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> TableTools
                                    </div>
                                </div>
                                <div class="tools pull-right"></div>
                            </div>
                            <div class="panel-body table-responsive">
                                <table class="table table-striped table-bordered" id="table1">
                                    <thead>
                                        <tr>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>User Name</th>
                                            <th>
                                                User E-mail
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>Markotto</td>
                                            <td>
                                                Markotto@test.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>
                                                JacobThornton
                                            </td>
                                            <td>
                                                JacobThornton@test.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>
                                                Larrythe Bird
                                            </td>
                                            <td>
                                                LarrytheBird@test.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>
                                                Larrythe Bird
                                            </td>
                                            <td>
                                                LarrytheBird@test.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>Markotto</td>
                                            <td>
                                                Markotto@test.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>
                                                JacobThornton
                                            </td>
                                            <td>
                                                JacobThornton@test.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>
                                                Larrythe Bird
                                            </td>
                                            <td>
                                                LarrytheBird@test.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>
                                                Larrythe Bird
                                            </td>
                                            <td>
                                                LarrytheBird@test.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>Markotto</td>
                                            <td>
                                                Markotto@test.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>
                                                JacobThornton
                                            </td>
                                            <td>
                                                JacobThornton@test.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>
                                                Larrythe Bird
                                            </td>
                                            <td>
                                                LarrytheBird@test.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>
                                                Larrythe Bird
                                            </td>
                                            <td>
                                                LarrytheBird@test.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>Markotto</td>
                                            <td>
                                                Markotto@test.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>
                                                JacobThornton
                                            </td>
                                            <td>
                                                JacobThornton@test.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>
                                                Larrythe Bird
                                            </td>
                                            <td>
                                                LarrytheBird@test.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>
                                                Larrythe Bird
                                            </td>
                                            <td>
                                                LarrytheBird@test.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>Markotto</td>
                                            <td>
                                                Markotto@test.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>
                                                JacobThornton
                                            </td>
                                            <td>
                                                JacobThornton@test.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>
                                                Larrythe Bird
                                            </td>
                                            <td>
                                                LarrytheBird@test.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>
                                                Larrythe Bird
                                            </td>
                                            <td>
                                                LarrytheBird@test.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>Markotto</td>
                                            <td>
                                                Markotto@test.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>
                                                JacobThornton
                                            </td>
                                            <td>
                                                JacobThornton@test.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>
                                                Larrythe Bird
                                            </td>
                                            <td>
                                                LarrytheBird@test.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>
                                                Larrythe Bird
                                            </td>
                                            <td>
                                                LarrytheBird@test.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>Markotto</td>
                                            <td>
                                                Markotto@test.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>
                                                JacobThornton
                                            </td>
                                            <td>
                                                JacobThornton@test.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>
                                                Larrythe Bird
                                            </td>
                                            <td>
                                                LarrytheBird@test.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>
                                                Larrythe Bird
                                            </td>
                                            <td>
                                                LarrytheBird@test.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>Markotto</td>
                                            <td>
                                                Markotto@test.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>
                                                JacobThornton
                                            </td>
                                            <td>
                                                JacobThornton@test.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>
                                                Larrythe Bird
                                            </td>
                                            <td>
                                                LarrytheBird@test.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>
                                                Larrythe Bird
                                            </td>
                                            <td>
                                                LarrytheBird@test.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>Markotto</td>
                                            <td>
                                                Markotto@test.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>
                                                JacobThornton
                                            </td>
                                            <td>
                                                JacobThornton@test.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>
                                                Larrythe Bird
                                            </td>
                                            <td>
                                                LarrytheBird@test.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>
                                                Larrythe Bird
                                            </td>
                                            <td>
                                                LarrytheBird@test.com
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
               
                <!-- Third Basic Table Ends Here-->
                <!--delete modal starts here-->
                <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title custom_align" id="edit">
                                    Delete this entry
                                </h4>
                            </div>
                            <div class="modal-body">
                                <div class="alert alert-warning">
                                    <span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete this Record?
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
            </section>
            <!-- content -->
        </aside>
            
@endsection('content')
@section('script')
    <!-- begining of page level js -->
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
    <!-- end of page level js -->
    <script>
    $(document).ready(function() {
        /*đoạn này liên quan đến phân trang của datatable*/
         $('#table').dataTable();
         $('body').on('click','.deleteitem', function()
        {
            var id = $(this).attr('dataid');
            var error_code = $(this).attr('error_code');
            var url = $('#url').val();
           $.get(url+'/admin/error/delete/'+id + '/'+ error_code, function(data)
           {
                 $('.listservice').html(data);
                 $('.alertNotification').show(3000);
                 $('.alertNotification').text('Xóa thành công');
                 $('.alertNotification').css({'background':'#e63834'});
                setTimeout(function(){ $('.alertNotification').hide(6000);}, 6000);
           });
        });
         /*chức năng sửa*/
         $('body').on('click','.editdata', function()
         {
                var data = $(this).attr('data');
                var data2 = JSON.parse(data);
                // console.log(data2.solve);
                $('#editerror .error_code_e').val(data2.error_code);
                $("#editerror .process_code").val(data2.process_code);
                $("#editerror .error_name").val(data2.error_name);
                $("#editerror .lonnhu").val(data2.solve);
                $(".phone_number").val(data2.phonenumber);
                //$("#editerror .filenameedit").val(data2.filename);
                $("#iditem").val(data2.id);
                
                if(data2.statusmess==1)
                {
                    $('#editerror .statusmess').val(1);
                    $('#editerror .statusmess').prop('checked',true);
                }else
                {
                      $('#editerror .statusmess').val(0);
                      $('#editerror .statusmess').prop('checked',false);
                }
                 if(data2.status==1)
                {
                    $('#editerror .status').val(1);
                    $('#editerror .status').prop('checked',true);
                }else
                {
                    $('#editerror .status').val(0);
                    $('#editerror .status').prop('checked',false);
                }
                $("#iditem").val(data2.id);

         });
          
        /*thêm mới lỗi*/
         $('#upload_form').on('submit', function(event)
         {
            event.preventDefault();
            $.ajax({
             url:"{{ route('erroradd')}}",
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
                         $('#listdatatable').html(data);
                         $('#adderror .error_code_e').val('');
                         $('#adderror .process_code').val('');
                         $("#adderror .error_name").val('');
                         $("#addsolve").val('');
                         $('#adderror .statusmess').prop('checked', false);
                         $("#adderror .status").val('');
                         $('.stretchLeft').hide();
                         $('.modal-backdrop').hide();
                         $('.alertNotification').show(3000);
                         $('.alertNotification').text('Thêm thành công');
                         $('.alertNotification').css({'background':'#01bc8c'});
                          setTimeout(function(){ $('.alertNotification').hide(5000);}, 5000);
                    }
             }
            })
         });

// edit item

 $('#edit_item').on('submit', function(event)
         {
            event.preventDefault();
            $.ajax({
             url:"{{route('erroredit')}}",
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
                        //console.log(data);
                         $('#listdatatable').html(data);
                         $('.error_code_e').html('');
                         $('.process_code').val('');
                         $(".error_name").val('');
                         $(".solve").val('');
                          $('#editerror .statusmess').prop('checked', false);
                         //$(".statusmess").val('');

                         $(".status").val('');   
                         $('.stretchLeft').hide();
                         $('.modal-backdrop').hide();
                        $('.alertNotification').show(3000);
                        $('.alertNotification').text('Sửa thành công');
                        $('.alertNotification').css({'background':'#F89A14'});
                          setTimeout(function(){ $('.alertNotification').hide(5000);}, 5000);
                    }
             }
            })
         });


       /* $( ".additemerror" ).click(function() 
        {     
              var slove = $(".solve").val().trim();
              var item ={};
              item.error_code = $(".error_code_e").val();
              item.process_code = $(".process_code").val();
              item.error_name = $(".error_name").val();
              item.solve = slove;
              item.statusmess = $('.statusmess').val();
              item.status = $('.status').val();
              if(item.error_code=='' || item.process_code=='' || item.error_name==''||item.solve=='')
              {
                alert('Bạn vui lòng nhập đầy đủ thông tin các phần error_code,process_code,error_name,solve')
              }else
              {
                  var itemJson = JSON.stringify(item);
                  var url = $('#url').val();
                  $.get(url+'/admin/error/add/'+itemJson, function(data)
                  {
                    if(data=='0')
                    {
                        alert('Error_code và Process_code bị trùng Bạn vui lòng sửa lại')
                    }else
                    {     
                         $('#listdatatable').html(data);
                         $('.stretchLeft').hide();
                         $('.modal-backdrop').hide();
                         $('.error_code_e').html('');
                         $('.process_code').val('');
                         $(".error_name").val('');
                         $(".solve").val('');
                         $(".statusmess").val('');
                         $(".status").val('');
                        $('.alertNotification').show(3000);
                        $('.alertNotification').text('Thêm thành công');
                        $('.alertNotification').css({'background':'#01bc8c'});
                          setTimeout(function(){ $('.alertNotification').hide(5000);}, 5000);
                    }
                  });
              }
        });*/





        /*thay doi trang thai nut tat bat canh báo*/
        var ckbox1 = $('.statusmess');
        $('.statusmess').on('click',function () 
        {

                    if (ckbox1.is(':checked')) {
                        $(this).val(1);
                    } else {
                        $(this).val(0);
                    }
        });
        /*end thay doi trang thai nut tat bat canh báo*/
        /*thay doi trang thai*/
         var ckbox = $('#adderror .status');
        $('#adderror .status').on('click',function () {
                    if (ckbox.is(':checked')) {
                        $(this).val(1);
                    } else {
                        $(this).val(0);
                    }
                });
        /*end thay doi trang thai*/
         var ckbox3 = $('#editerror .status');
        $('#editerror .status').on('click',function () {
                    if (ckbox3.is(':checked')) {
                        $(this).val(1);
                    } else {
                        $(this).val(0);
                    }
                });

        /*thay doi trang thai nut tat bat canh báo*/
        var ckbox2 = $('#editerror .statusmess');
        $('#editerror .statusmess').on('click',function () 
        {

                    if (ckbox2.is(':checked')) {
                        $(this).val(1);
                    } else {
                        $(this).val(0);
                    }
        });
        /*sửa thông tin lỗi 18/5/2018 */
       $( ".editItem" ).click(function() 
        {     
              var slove = $("#editerror .solve").val().trim();
              var item ={};
              item.error_code = $("#editerror .error_code_e").val();
              item.process_code = $("#editerror .process_code").val();
              item.error_name = $("#editerror .error_name").val();
              item.solve = slove;
              item.statusmess = $('#editerror .statusmess').val();
              item.status = $('#editerror .status').val();
              var id = $('#iditem').val();
              if(item.error_code=='' || item.process_code=='' || item.error_name==''||item.solve=='')
              {
                alert('Bạn vui lòng nhập đầy đủ thông tin các phần error_code,process_code,error_name,solve')
              }else
              {
                  var itemJson = JSON.stringify(item);
                  var url = $('#url').val();
                  $.get(url+'/admin/error/edit/'+itemJson+'/'+id, function(data)
                  {
                    if(data=='0')
                    {
                        alert('Error_code và Process_code bị trùng Bạn vui lòng sửa lại')
                    }else
                    {
                        //console.log(data);
                         $('#listdatatable').html(data);
                         $('.error_code_e').html('');
                         $('.process_code').val('');
                         $(".error_name").val('');
                         $(".solve").val('');
                         $(".statusmess").val('');
                         $(".status").val('');   
                         $('.stretchLeft').hide();
                        $('.modal-backdrop').hide();
                        $('.alertNotification').show(3000);
                        $('.alertNotification').text('Sửa thành công');
                        $('.alertNotification').css({'background':'#F89A14'});
                          setTimeout(function(){ $('.alertNotification').hide(5000);}, 5000);
                    }
                  });
              }
        });
       /*end sửa thông tin lỗi*/  
       /*ajax thay doi trang thai loi*/

           $('body').on('click','.activebt', function()
        {
           var id = $(this).attr('dataid');
           var active = $(this).attr('data');
           if(active==1)
           {
               var ac=0;
               var url = $('#url').val();
               var thiss = $(this);
               //console.log(ac);
              $.get(url+'/admin/error/status/'+ac +'/'+id, function(data)
               {
                    //console.log(data);
                    thiss.parent().html(data); 
               });
           }else
           {
              var ac = 1;
              var url = $('#url').val();
              var thiss = $(this);
               //console.log(ac);
              $.get(url+'/admin/error/status/'+ac +'/'+id, function(data)
               {
                    thiss.parent().html(data); 
               });
           }
         });
       /*end thay doi trang thai loi*/
        /*thay doi trang thai nút nhận tin nhắn về diện thoại*/

         $('body').on('click','.statusMe ', function()
        {
           var id = $(this).attr('dataid');
           var active = $(this).attr('data');
           if(active==1)
           {
               var ac=0;
               var url = $('#url').val();
               var thiss = $(this);
              $.get(url+'/admin/error/statusMe/'+ac +'/'+id, function(data)
               {
                    thiss.parent().html(data); 
               });
           }else
           {
              var ac = 1;
              var url = $('#url').val();
              var thiss = $(this);
             $.get(url+'/admin/error/statusMe/'+ac +'/'+id, function(data)
               {
                    thiss.parent().html(data); 
               });
           }
         });
        /*end trạng thai nut nhận tin nhắn về điện thoại*/
    });


    </script>
@endsection('script')

