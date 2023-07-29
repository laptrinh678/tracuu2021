@extends('backend.master.index')
@section('title')
Danh sách phiếu
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
                <h1>DANH SÁCH PHIẾU</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.html">
                            <i class="livicon" data-name="home" data-size="14" data-loop="true"></i> Trang chủ
                        </a>
                    </li>
                    <li>
                        <a href="#">Tổng hợp</a>
                    </li>
                    <li class="active">Tổng hợp số lượng sp</li>
                </ol>
            </section>
            <!--section ends-->
            <section class="content">
                
                  <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-success filterable" style="overflow:auto;">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <a href="{{url('admin/nhatkysanxuat/add')}}" style="color: white; font-weight: bold">
                                             <i class="livicon" data-name="camera" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Tạo phiếu
                                        </a>
                                </h3>

                                 
                            </div>
                            <div class="panel-body table-responsive">
                                 
                                      
                                    @foreach($data as $v)
                                    <div class="row item">
                                    <div class="col-sm-2">
                                        
                                        <label class="control-label input-label" for="startTime">Mã phiếu</label>
                                        <div class="controls bootstrap-timepicker">
                                            <button class="btn btn-primary"> {{date('d-m-Y H:i:s',strtotime($v->created_at))}}</button>
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <label class="control-label input-label" for="startTime">Hành động</label>
                                        <div class="itemstatus">
                                             @if($v->status==0)
                                        <div class="controls bootstrap-timepicker">
                                            <button class="btn btn-danger changestatus" data="{{$v->status}}" dataid="{{$v->id}}"> Chờ duyệt</button>
                                        </div>
                                        @elseif($v->status==1)
                                        <div class="controls bootstrap-timepicker">
                                            <button class="btn btn-success changestatus" data="{{$v->status}}" dataid="{{$v->id}}">Đã duyệt</button>
                                        </div> 
                                        @endif
                                        </div>
                                       
                                    </div>
                                    <div class="col-sm-3">
                                         <label class="control-label input-label" for="startTime">Người tạo</label>
                                        <div class="controls bootstrap-timepicker">
                                            <button class="btn btn-success"> {{$v->nguoitao}}</button>
                                        </div>
                                    </div>
                                    <br><br>
                                     <div class="col-sm-12 imformation">
                                        <label class="control-label input-label" for="startTime">Thông tin</label>
                                            <table class="table table-striped table-bordered" id="table2">
                                    <thead>
                                        <tr>
                                         
                                            <th>Mã thẻ</th>
                                            <th>
                                                Tên
                                            </th>
                                            
                                            <th>Tổng TG</th>
                                            <th>Mã ĐH</th>
                                              <th>Btp</th>
                                            <th>Hang mục GC</th>
                                          
                                         
                                            <th>Sản lương</th>
                                         
                                             <th>Đơn giá</th>
                                             <th>Thành tiền</th>
                                            <th>Phụ cấp</th>
                                             <th>
                                                Công nhật
                                            </th>
                                           <!--  <th>Ghi chú</th> -->
                                        </tr>
                                    </thead>
                                    <tbody class="data">
                                     <?php 
                                     $itemnhanvien = json_decode($v->data);
                                     ?>
                                    
                                    <?php 
                                    //if($itemnhanvien[0]['mathe'])
                                       foreach ($itemnhanvien as $val)
                                        {
                                            if($val->mathe != null)
                                            {
                                                 echo '<tr>';
                                                    echo '<td>'.$val->mathe.'</td>';
                                                    echo '<td>'.$val->hoten.'</td>';
                                                    echo '<td>'.$val->tongthoigian.'</td>';
                                                    echo '<td>'.$val->madonhang.'</td>';
                                                    echo '<td>'.$val->btp.'</td>';
                                                     echo '<td>'.$val->hangmucgiacong.'</td>';
                                                    echo '<td>'.'Sản lượng:'.$val->sanluong .'<br>'.'Sản lượng HĐ:'.$val->sanluonghangdat .'<br>'.'Sản lượng HX:'.$val->sanluonghangxau .'<br>'.'</td>';
                                                   
                                                  
                                                    echo '<td>'.$val->dongia.'</td>';
                                                    echo '<td>'.$val->thanhtien.'</td>';
                                                   echo '<td>'.$val->phucap.'</td>';
                                                   echo '<td>'.$val->congnhat.'</td>';
                                                 /*  echo '<td>'.$val->ghichu.'</td>';*/
                                                    echo '</tr>';
                                            }
                                           
                                        }

                                    ?>
                                        
                                        
                                    </tbody>
                            </table>
                                    </div>
                                    
                                   
                                  
                                   
                                     </div>
                                     @endforeach
                                     <!-- end item -->
                                     
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
           $('body').on('click','.changestatus', function()
           {

                var data = $(this).attr('data');
                var status ='';
                if(data==0)
                {
                    status=1;
                }
                else{
                    status=0;
                }
                var id = $(this).attr('dataid');
                var url = $('#url').val();
               $.get(url+'/admin/nhatkysanxuat/changestatus/'+status +'/'+ id, function(data)
               {
                    $('.itemstatus').html(data);
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

