@extends('backend.master.index')
@section('content')
        <aside class="right-side">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <!--section starts-->
                <h1>THÊM MỚI PHIẾU SẢN XUẤT</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.html">
                            <i class="livicon" data-name="home" data-size="14" data-loop="true"></i> Trang chủ
                        </a>
                    </li>
                    <li>
                        <a href="#">Nhật ký</a>
                    </li>
                    <li class="active">Danh sách nhật ký</li>
                </ol>
            </section>
            <!--section ends-->
            <section class="content">
                <div class="row">
                    <div class="col-lg-12">
                          <form action="" method="POST" enctype="multipart/form-data">
          							    <div class="form-group">
                                    <div class="fivety">
                                 <label for="email">Bộ phận</label>
                                  <select class="form-control" id="bophanxuong">
                                    <option>Lựa chọn Bộ phận - Xưởng</option>
                                    @foreach($bophan as $v)
                                    <option value="{{$v->ma_bophanxuong}}">{{$v->name}}</option>
                                    @endforeach
                                  </select>
                               </div>
                                   <div class="fivety fivety_right">
                                     <label class="" for="pwd">Tổ</label>
                                      <select class="form-control" id="phongbanto">
                                   
                                      </select>
                                   </div>
                               </div>
                              
                            
                                      <fieldset class="scheduler-border">
                                    <legend class="scheduler-border">Công nhân</legend>
                                   <button class="btn  btn-success additem"> Thêm Item</button>

                                    <div class="row item">
                                    <div class="col-sm-1">
                                        <label class="control-label input-label" for="startTime">Mã thẻ</label>
                                        <div class="controls bootstrap-timepicker">
                                            <input type="text" class="form-control" type="text" id="startTime" name="startTime" placeholder="" />
                                            <i class="icon-time"></i>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <label class="control-label input-label" for="startTime">Họ tên</label>
                                        <div class="controls bootstrap-timepicker">
                                            <select class="form-control">
                                              <option>Lựa chọn công nhân</option>
                                              <option>Lựa chọn công nhân</option>
                                              <option>Lựa chọn công nhân</option>
                                              <option>Lựa chọn công nhân</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-1">
                                        <label class="control-label input-label" for="startTime">Tổng TG</label>
                                        <div class="controls bootstrap-timepicker">
                                            <input type="text" class="form-control" type="text" id="startTime" name="startTime" placeholder="" />
                                            <i class="icon-time"></i>
                                        </div>
                                    </div>
                                     <div class="col-sm-1">
                                        <label class="control-label input-label" for="startTime">Tổng TG</label>
                                        <div class="controls bootstrap-timepicker">
                                            <input type="text" class="form-control" type="text" id="startTime" name="startTime" placeholder="" />
                                            <i class="icon-time"></i>
                                        </div>
                                    </div>
                                     <div class="col-sm-1">
                                        <label class="control-label input-label" for="startTime">Tổng TG</label>
                                        <div class="controls bootstrap-timepicker">
                                            <input type="text" class="form-control" type="text" id="startTime" name="startTime" placeholder="" />
                                            <i class="icon-time"></i>
                                        </div>
                                    </div>
                                     <div class="col-sm-1">
                                        <label class="control-label input-label" for="startTime">Mã ĐH</label>
                                        <div class="controls bootstrap-timepicker">
                                            <input type="text" class="form-control" type="text" id="startTime" name="startTime" placeholder="" />
                                            <i class="icon-time"></i>
                                        </div>
                                    </div>
                                     <div class="col-sm-1">
                                        <label class="control-label input-label" for="startTime">Mã Sp</label>
                                        <div class="controls bootstrap-timepicker">
                                            <input type="text" class="form-control" type="text" id="startTime" name="startTime" placeholder="" />
                                            <i class="icon-time"></i>
                                        </div>
                                    </div>
                                     <div class="col-sm-1">
                                        <label class="control-label input-label" for="startTime">BTP</label>
                                        <div class="controls bootstrap-timepicker">
                                            <input type="text" class="form-control" type="text" id="startTime" name="startTime" placeholder="" />
                                            <i class="icon-time"></i>
                                        </div>
                                    </div>
                                     <div class="col-sm-1">
                                        <label class="control-label input-label" for="startTime">HM GC</label>
                                        <div class="controls bootstrap-timepicker">
                                            <input type="text" class="form-control" type="text" id="startTime" name="startTime" placeholder="" />
                                            <i class="icon-time"></i>
                                        </div>
                                    </div>
                                     <div class="col-sm-1">
                                        <label class="control-label input-label" for="startTime">Sản lượng</label>
                                        <div class="controls bootstrap-timepicker">
                                            <input type="text" class="form-control" type="text" id="startTime" name="startTime" placeholder="" />
                                            <i class="icon-time"></i>
                                        </div>
                                    </div>
                                    <div class="col-sm-1">
                                        <label class="control-label input-label" for="startTime">SL HĐ</label>
                                        <div class="controls bootstrap-timepicker">
                                            <input type="text" class="form-control" type="text" id="startTime" name="startTime" placeholder="" />
                                            <i class="icon-time"></i>
                                        </div>
                                    </div>
                                    <div class="col-sm-1">
                                        <label class="control-label input-label" for="startTime">SL HX</label>
                                        <div class="controls bootstrap-timepicker">
                                            <input type="text" class="form-control" type="text" id="startTime" name="startTime" placeholder="" />
                                            <i class="icon-time"></i>
                                        </div>
                                    </div>
                                    <div class="col-sm-1">
                                        <label class="control-label input-label" for="startTime">Đơn giá</label>
                                        <div class="controls bootstrap-timepicker">
                                            <input type="text" class="form-control" type="text" id="startTime" name="startTime" placeholder="" />
                                            <i class="icon-time"></i>
                                        </div>
                                    </div>
                                    <div class="col-sm-1">
                                        <label class="control-label input-label" for="startTime">Thành tiền</label>
                                        <div class="controls bootstrap-timepicker">
                                            <input type="text" class="form-control" type="text" id="startTime" name="startTime" placeholder="" />
                                            <i class="icon-time"></i>
                                        </div>
                                    </div>
                                    <div class="col-sm-1">
                                        <label class="control-label input-label" for="startTime">Phụ cấp</label>
                                        <div class="controls bootstrap-timepicker">
                                            <input type="text" class="form-control" type="text" id="startTime" name="startTime" placeholder="" />
                                            <i class="icon-time"></i>
                                        </div>
                                    </div>
                                    <div class="col-sm-1">
                                        <label class="control-label input-label" for="startTime">Công nhật</label>
                                        <div class="controls bootstrap-timepicker">
                                            <input type="text" class="form-control" type="text" id="startTime" name="startTime" placeholder="" />
                                            <i class="icon-time"></i>
                                        </div>
                                    </div>
                                    <div class="col-sm-1">
                                        <label class="control-label input-label" for="startTime">Khoán</label>
                                        <div class="controls bootstrap-timepicker">
                                            <input type="text" class="form-control" type="text" id="startTime" name="startTime" placeholder="" />
                                            <i class="icon-time"></i>
                                        </div>
                                    </div>
                                     <div class="col-sm-1">
                                        <label class="control-label input-label" for="startTime"></label>
                                        <div class="controls bootstrap-timepicker">
                                            <button class="btn btn-danger deleteitem">Xóa</button>
                                        </div>
                                    </div>
                                     </div>
                                     <!-- end item -->
                                      <div class="row item">
                                    <div class="col-sm-1">
                                        <label class="control-label input-label" for="startTime">Mã thẻ</label>
                                        <div class="controls bootstrap-timepicker">
                                            <input type="text" class="form-control" type="text" id="startTime" name="startTime" placeholder="" />
                                            <i class="icon-time"></i>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <label class="control-label input-label" for="startTime">Họ tên</label>
                                        <div class="controls bootstrap-timepicker">
                                            <select class="form-control">
                                              <option>Lựa chọn công nhân</option>
                                              <option>Lựa chọn công nhân</option>
                                              <option>Lựa chọn công nhân</option>
                                              <option>Lựa chọn công nhân</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-1">
                                        <label class="control-label input-label" for="startTime">Tổng TG</label>
                                        <div class="controls bootstrap-timepicker">
                                            <input type="text" class="form-control" type="text" id="startTime" name="startTime" placeholder="" />
                                            <i class="icon-time"></i>
                                        </div>
                                    </div>
                                     <div class="col-sm-1">
                                        <label class="control-label input-label" for="startTime">Tổng TG</label>
                                        <div class="controls bootstrap-timepicker">
                                            <input type="text" class="form-control" type="text" id="startTime" name="startTime" placeholder="" />
                                            <i class="icon-time"></i>
                                        </div>
                                    </div>
                                     <div class="col-sm-1">
                                        <label class="control-label input-label" for="startTime">Tổng TG</label>
                                        <div class="controls bootstrap-timepicker">
                                            <input type="text" class="form-control" type="text" id="startTime" name="startTime" placeholder="" />
                                            <i class="icon-time"></i>
                                        </div>
                                    </div>
                                     <div class="col-sm-1">
                                        <label class="control-label input-label" for="startTime">Mã ĐH</label>
                                        <div class="controls bootstrap-timepicker">
                                            <input type="text" class="form-control" type="text" id="startTime" name="startTime" placeholder="" />
                                            <i class="icon-time"></i>
                                        </div>
                                    </div>
                                     <div class="col-sm-1">
                                        <label class="control-label input-label" for="startTime">Mã Sp</label>
                                        <div class="controls bootstrap-timepicker">
                                            <input type="text" class="form-control" type="text" id="startTime" name="startTime" placeholder="" />
                                            <i class="icon-time"></i>
                                        </div>
                                    </div>
                                     <div class="col-sm-1">
                                        <label class="control-label input-label" for="startTime">BTP</label>
                                        <div class="controls bootstrap-timepicker">
                                            <input type="text" class="form-control" type="text" id="startTime" name="startTime" placeholder="" />
                                            <i class="icon-time"></i>
                                        </div>
                                    </div>
                                     <div class="col-sm-1">
                                        <label class="control-label input-label" for="startTime">HM GC</label>
                                        <div class="controls bootstrap-timepicker">
                                            <input type="text" class="form-control" type="text" id="startTime" name="startTime" placeholder="" />
                                            <i class="icon-time"></i>
                                        </div>
                                    </div>
                                     <div class="col-sm-1">
                                        <label class="control-label input-label" for="startTime">Sản lượng</label>
                                        <div class="controls bootstrap-timepicker">
                                            <input type="text" class="form-control" type="text" id="startTime" name="startTime" placeholder="" />
                                            <i class="icon-time"></i>
                                        </div>
                                    </div>
                                    <div class="col-sm-1">
                                        <label class="control-label input-label" for="startTime">SL HĐ</label>
                                        <div class="controls bootstrap-timepicker">
                                            <input type="text" class="form-control" type="text" id="startTime" name="startTime" placeholder="" />
                                            <i class="icon-time"></i>
                                        </div>
                                    </div>
                                    <div class="col-sm-1">
                                        <label class="control-label input-label" for="startTime">SL HX</label>
                                        <div class="controls bootstrap-timepicker">
                                            <input type="text" class="form-control" type="text" id="startTime" name="startTime" placeholder="" />
                                            <i class="icon-time"></i>
                                        </div>
                                    </div>
                                    <div class="col-sm-1">
                                        <label class="control-label input-label" for="startTime">Đơn giá</label>
                                        <div class="controls bootstrap-timepicker">
                                            <input type="text" class="form-control" type="text" id="startTime" name="startTime" placeholder="" />
                                            <i class="icon-time"></i>
                                        </div>
                                    </div>
                                    <div class="col-sm-1">
                                        <label class="control-label input-label" for="startTime">Thành tiền</label>
                                        <div class="controls bootstrap-timepicker">
                                            <input type="text" class="form-control" type="text" id="startTime" name="startTime" placeholder="" />
                                            <i class="icon-time"></i>
                                        </div>
                                    </div>
                                    <div class="col-sm-1">
                                        <label class="control-label input-label" for="startTime">Phụ cấp</label>
                                        <div class="controls bootstrap-timepicker">
                                            <input type="text" class="form-control" type="text" id="startTime" name="startTime" placeholder="" />
                                            <i class="icon-time"></i>
                                        </div>
                                    </div>
                                    <div class="col-sm-1">
                                        <label class="control-label input-label" for="startTime">Công nhật</label>
                                        <div class="controls bootstrap-timepicker">
                                            <input type="text" class="form-control" type="text" id="startTime" name="startTime" placeholder="" />
                                            <i class="icon-time"></i>
                                        </div>
                                    </div>
                                    <div class="col-sm-1">
                                        <label class="control-label input-label" for="startTime">Khoán</label>
                                        <div class="controls bootstrap-timepicker">
                                            <input type="text" class="form-control" type="text" id="startTime" name="startTime" placeholder="" />
                                            <i class="icon-time"></i>
                                        </div>
                                    </div>
                                     <div class="col-sm-1">
                                        <label class="control-label input-label" for="startTime"></label>
                                        <div class="controls bootstrap-timepicker">
                                            <button class="btn btn-danger deleteitem">Xóa</button>
                                        </div>
                                    </div>
                                     </div>
                                </fieldset>

                                 
                                
          							   
          							    <button type="submit" class="btn btn-primary">Thêm mới</button>
          							    {{csrf_field()}}
          							 </form>
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
                                    Thêm mới nhật ký SX
                                </h4>
                            </div>
                            <div class="modal-body">
                                 <form action="/action_page.php">
                               <div class="form-group">
                                    <div class="fivety">
                                 <label for="email">Mã thẻ ID</label>
                                 <input type="email" class="form-control" id="email" placeholder="" name="khachhang">
                               </div>
                                   <div class="fivety fivety_right">
                                     <label class="" for="pwd">Họ tên</label>
                                     <input type="text" class=" form-control" id="pwd" placeholder="" name="madonhang">
                                   </div>
                               </div>
                              
                               <div class="form-group">
                                   <div class="fivety">
                                        <label for="pwd">Tổng TG</label>
                                 <input type="text" class="form-control" id="pwd" placeholder="Enter password" name="madonhang">
                                   </div>
                                   <div class="fivety fivety_right">
                                        <label for="pwd">Mã đơn hàng</label>
                                 <input type="text" class="form-control" id="pwd" placeholder="" name="madonhang">
                                   </div>
                               </div>
                             
                                <div class="form-group">
                                   <div class="fivety">
                                       <label for="pwd">Mã SP</label>
                                 <input type="text" class="form-control" id="pwd" placeholder="Nhập số lượng" name="madonhang">
                                   </div>
                                   <div class="fivety fivety_right">
                                       <label for="pwd">BTB</label>
                                 <input type="text" class="form-control" id="pwd" placeholder="Nhập ngày xuất" name="madonhang">
                                   </div>
                                 
                               </div>
                             
                             
                                <div class="form-group">
                                   <div class="fivety">
                                       <label for="pwd">Hạng mục gia công</label>
                                 <input type="text" class="form-control" id="pwd" placeholder="Nhập ngày xuất" name="madonhang">
                                   </div>
                                   <div class="fivety fivety_right">
                                        <label for="pwd">Sản lượng</label>
                                 <input type="text" class="form-control" id="pwd" placeholder="Nhập ngày xuất" name="madonhang">
                                   </div>
                                 
                               </div>
                             
                             
                                <div class="form-group">
                                   <div class="fivety">
                                        <label for="pwd">SL hàng đạt</label>
                                 <input type="text" class="form-control" id="pwd" placeholder="Nhập ngày xuất" name="madonhang">
                                   </div>
                                   <div class="fivety fivety_right">
                                       <label for="pwd">SL hàng xấu</label>
                                 <input type="text" class="form-control" id="pwd" placeholder="Nhập ngày xuất" name="madonhang">
                                   </div>
                                 
                               </div>
                               
                               <div class="form-group">
                                   <div class="fivety">
                                       <label for="pwd">Đơn giá</label>
                                 <input type="text" class="form-control" id="pwd" placeholder="Nhập ngày xuất" name="madonhang">
                                   </div>
                                   <div class="fivety fivety_right">
                                       <label for="pwd">Thành tiền</label>
                                 <input type="text" class="form-control" id="pwd" placeholder="Nhập ngày xuất" name="madonhang">
                                   </div>
                                 
                               </div>
                                <div class="form-group">
                                   <div class="fivety">
                                       <label for="pwd">Phụ cấp</label>
                                 <input type="text" class="form-control" id="pwd" placeholder="Nhập ngày xuất" name="madonhang">
                                   </div>
                                   <div class="fivety fivety_right">
                                       <label for="pwd">Công nhật -Khoán</label>
                                 <input type="text" class="form-control" id="pwd" placeholder="Nhập ngày xuất" name="madonhang">
                                   </div>
                                 
                               </div>
                                <div class="form-group">
                                   <div class="fivety">
                                       <label for="pwd">Ghi chú</label>
                                 <input type="text" class="form-control" id="pwd" placeholder="Nhập ngày xuất" name="madonhang">
                                   </div>
                                   <div class="fivety fivety_right">
                                         <button type="submit" class="btn btn-primary">Tạo nhật ký</button>
                                   </div>
                                 
                               </div>
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
        </aside>
            <input type="hidden" id="url" name="" value="{{url('')}}">
@endsection('content')
@section('script')
<script type="text/javascript">
  $(document).ready(function()
  {
     $('#bophanxuong').change(function()
     {
                var val =   $(this).val();
                var url = $('#url').val();
              $.get(url+'/admin/nhatkysanxuat/phongbanto/'+val, function(data)
               {
                         $('#phongbanto').html(data);       
               });

     })

  })
</script>
@endsection('script')

	