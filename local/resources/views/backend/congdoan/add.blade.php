@extends('backend.master.index')
@section('content')
        <aside class="right-side">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <!--section starts-->
                <h1>THÊM MỚI CÔNG ĐOẠN</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.html">
                            <i class="livicon" data-name="home" data-size="14" data-loop="true"></i> Trang chủ
                        </a>
                    </li>
                    <li>
                        <a href="#">Công đoạn</a>
                    </li>
                    <li class="active">Thêm mới công đoạn</li>
                </ol>
            </section>
            <!--section ends-->
            <section class="content">
                <div class="row">
                    <div class="col-lg-12">
                          <form action="" method="POST" enctype="multipart/form-data">
							    <div class="form-group">
							      <label for="email">Import file</label>
							      <input type="file" class="form-control" id="email" placeholder="Enter email" name="file">
							    </div>
							   
							   <!--  <button type="submit" class="btn btn-primary">Thêm mới</button> -->
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
            
   

@endsection('content')

	