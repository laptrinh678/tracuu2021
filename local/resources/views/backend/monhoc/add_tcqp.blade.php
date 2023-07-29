@extends('backend.master.index')
@section('title')
Thêm mới Điểm theo môn
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
                <h1>THÊM MỚI ĐIỂM THEO MÔN -GDTC/GDQP</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.html">
                            <i class="livicon" data-name="home" data-size="14" data-loop="true"></i> Trang chủ
                        </a>
                    </li>
                    <li>
                        <a href="#">Điểm theo môn</a>
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
                                    <i class="livicon" data-name="calendar" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Điểm theo môn
                                </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                            </div>
                            <div class="panel-body">
                                <div class="box-body">
                                   
                                   <form action="" method="POST">
                                    <!-- IP mask -->
                                   
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
                                  <select id="select22" class="form-control select2" name="lophoc" required="">
                                      <option value="">Select value...</option>
                                     @foreach($lophoc as $v)
                                          <option value="{{$v->id}}">{{$v->name}}</option>
                                      @endforeach 
                                    
                                     
                                  </select>
                              </div>
                               <div class="form-group hocvienlist">
                                <label for="" class="control-label">
                                     Sinh viên
                                  </label>
                                
                                  <select id="select23" class="form-control select2" name="id_sv" required="">
                                     
                                   
                                    
                                     
                                  </select>
                              </div>
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
                                <option value="2018-2019">2018-2019</option>
                                <option value="2019-2020">2019-2020</option>
                                <option value="2020-2021">2020-2021</option>
                              </select>
                            </div>
                                    </div>
                                    <!-- left-->
                                    <div class="col-sm-6">
                                       <div class="form-group">
                              <label for="email">Điểm tổng kết môn</label>
                              <input type="text" name="tkmon" class="form-control" placeholder="Nhâp điêm tk môn">
                            </div>                       
                              <div class="form-group">
                                <button type="submit" class="btn btn-primary">Thêm mơi</button>
                              </div>
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
        $('#select22').change(function()
        {
    
               var id = $(this).val();
               var url = $('#url').val();
               $.get(url+'/admin/diemtheomon/getsv/'+id, function(data)
               {
                   
                  $('#select23').html(data);
               });

        })
      });
    </script>
@endsection('script')

	