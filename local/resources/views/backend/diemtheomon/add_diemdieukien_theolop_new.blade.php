@extends('backend.master.index')
@section('title')
Thêm mới Điểm điều kiện theo lớp
@endsection('title')
@section('style')
<!-- datepicker -->
    <link href="vendors/pickadate/css/default.css" rel="stylesheet" type="text/css">
    <link href="vendors/pickadate/css/default.date.css" rel="stylesheet" type="text/css">
    <link href="vendors/pickadate/css/default.time.css" rel="stylesheet" type="text/css">
    <link href="vendors/flatpickr-calendar/css/flatpickr.min.css" rel="stylesheet" type="text/css" />
    <link href="vendors/air-datepicker/css/datepicker.min.css" rel="stylesheet" type="text/css" />
 <!--page level css -->
    <link href="vendors/bootstrap-multiselect/css/bootstrap-multiselect.css" rel="stylesheet" type="text/css">
   <link href="vendors/select2/css/select2.min.css" rel="stylesheet" type="text/css">
   <link href="vendors/select2/css/select2-bootstrap.css" rel="stylesheet" type="text/css">
   <link href="vendors/selectize/css/selectize.css" rel="stylesheet" type="text/css">
   <link href="vendors/selectize/css/selectize.bootstrap3.css" rel="stylesheet" type="text/css">
   <link href="vendors/iCheck/css/all.css" rel="stylesheet" type="text/css">
   <Link href="vendors/iCheck/css/line/line.css" rel="stylesheet" type="text/css">
   <link href="css/pages/formelements.css" rel="stylesheet" type="text/css">
   <link href="css/pages/customform_elements.css" rel="stylesheet" type="text/css"> 

@endsection('style')
@section('content')
        <aside class="right-side">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <!--section starts-->
                <h1>THÊM MỚI ĐIỂM ĐIỀU KIỆN THEO LỚP</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.html">
                            <i class="livicon" data-name="home" data-size="14" data-loop="true"></i> Trang chủ
                        </a>
                    </li>
                    <li>
                        <a href="#">Thêm điểm điều kiện theo lớp</a>
                    </li>
                    <li class="active">Thêm mới</li>
                </ol>
            </section>
            <!--section ends-->
              <!-- Main content -->
            <section class="content">
                <!--main content-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="livicon" data-name="calendar" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Điểm điều kiện theo lớp
                                </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                            </div>
                            <div class="panel-body">
                                <div class="box-body">
                                  
                                   
                                   <form action="" method="POST">
                                    <!-- IP mask -->
                                   <div class="row">
                                         <div class="col-sm-6">
                                      
                                       <div class="form-group">
                                  <label for="select21" class="control-label">
                                     Môn học
                                  </label>
                                  <select id="select21" class="form-control select2" name="monhoc" required="">
                                      <option value="">Select value...</option>
                                     @foreach($monhoc as $v)
                                          <option value="{{$v->id}}">{{$v->ten}}</option>
                                      @endforeach 

                                  </select>
                              </div>
                               <div class="form-group">
                                  <label for="select21" class="control-label">
                                     Lớp học
                                  </label>
                                  <select id="laydanhsachlop" class="form-control select2" name="lophoc" required="">
                                      <option value="">Select value...</option>
                                     @foreach($lophoc as $v)
                                          <option value="{{$v->id}}">{{$v->name}}</option>
                                      @endforeach 
                                    
                                     
                                  </select>
                              </div>
                               
                             
                                    </div>
                                    <!-- left-->
                                    <!-- right -->
                                    <div class="col-sm-6">
                                       <div class="form-group">
                              <label for="email">Học Kỳ</label>
                              <select name="hocky" id="" class="form-control hocky" required="">
                                <option value="">Chọn học kỳ</option>
                                <option value="1">Học Kỳ 1</option>
                                <option value="2">Học kỳ 2</option>
                              </select>
                            </div>
                              <div class="form-group">
                              <label for="email">Năm học</label>
                              <select name="namhoc" id="" class="form-control namhoc" required="">
                                <option value="">Chọn năm</option>
                                <option value="1">2018-2019</option>
                                <option value="2">2019-2020</option>
                                <option value="3">2020-2021</option>
                              </select>
                            </div>
                                      </div>
                            </div>
                                    <!-- end -->
                                
                                  <!-- row2 -->
                                  <div class="row">
                                    <div class="col-md-12" id="datasinhvien_theolop">
                                      
                                     </div>
                                    <div class="col-md-12">
                                      <br>
                                       <button type="submit" class="btn btn-success">Thêm mới</button>
                                    </div>
                                  </div>
                                  <!-- end row -->
                              {{csrf_field()}}
                              </form>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                   
                </div>
                <!--main content ends-->
            </section>
            <!-- content -->
         <input type="hidden" id="url" name="" value="{{url('')}}">
        </aside>
@endsection('content')
@section('script')
   <script src="vendors/bootstrap-multiselect/js/bootstrap-multiselect.js" type="text/javascript"></script>
   <script src="vendors/select2/js/select2.js" type="text/javascript"></script>
   <script src="vendors/selectize/js/standalone/selectize.min.js" type="text/javascript"></script>
   <script src="vendors/iCheck/js/icheck.js" type="text/javascript"></script>
   <script src="vendors/bootstrap-switch/js/bootstrap-switch.js" type="text/javascript"></script>
   <script src="vendors/switchery/js/switchery.js" type="text/javascript"></script>
   <script src="js/pages/custom_elements.js" type="text/javascript"></script>
     <!-- begining of page level js -->
    <script src="vendors/pickadate/js/picker.js" type="text/javascript"></script>
    <script src="vendors/pickadate/js/picker.date.js" type="text/javascript"></script>
    <script src="vendors/pickadate/js/picker.time.js" type="text/javascript"></script>
    <script src="vendors/air-datepicker/js/datepicker.min.js" type="text/javascript"></script>
    <script src="vendors/air-datepicker/js/datepicker.en.js" type="text/javascript"></script>
    <script type="text/javascript" src="vendors/flatpickr-calendar/js/flatpickr.min.js"></script>
    <script src="js/pages/custom_datepicker.js" type="text/javascript"></script>
    <!-- end of page level js -->
    <script>
      $(document).ready(function()
      {
        $('#laydanhsachlop').change(function()
        {
    
               var id = $(this).val();
               var url = $('#url').val();
              
               $.get(url+'/admin/diemtheomon/danhsachlop/'+id, function(data)
               {

                    //alert(data);
                  $('#datasinhvien_theolop').html(data);
               });

        })
      });
    </script>
@endsection('script')

	