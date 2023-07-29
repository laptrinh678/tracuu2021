@extends('backend.master.index')
@section('title')
Thêm mới Điểm danh
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
                <h1>THÊM MỚI ĐIỂM DANH</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.html">
                            <i class="livicon" data-name="home" data-size="14" data-loop="true"></i> Trang chủ
                        </a>
                    </li>
                    <li>
                        <a href="#">Điểm danh</a>
                    </li>
                    <li class="active">Danh sách Điểm danh</li>
                </ol>
            </section>
            <!--section ends-->
              <!-- Main content -->
            <section class="content">
                <!--main content-->
                <div class="row">
                    <div class="col-md-6">
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="livicon" data-name="calendar" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Điểm danh 
                                </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                            </div>
                            <div class="panel-body">
                                <div class="box-body">
                                   
                                   <form action="" method="POST">
                                    <!-- IP mask -->
                                    <div class="form-group">
                                        <label>Thời gian điểm danh</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="livicon" data-name="calendar" data-size="14" data-loop="true"></i>
                                            </div>
                                            <input class="form-control flatpickr" data-enabletime=true data-time_24hr=true data-timeFormat="H:i" name="ngay" required="">
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                     <div class="form-group">
                                  <label for="select21" class="control-label">
                                     Ca học
                                  </label>
                                  <select id="select21" class="form-control select2" name="ca">
                                      <option value="">Select value...</option>
                                      <option value="1">Sáng</option>
                                       <option value="2">Chiều</option>
                                         <option value="3">Tối</option>
                                     
                                  </select>
                              </div>
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
                                  <select id="lophocid" class="form-control" name="lophoc" required="">
                                      <option value="">Select value...</option>
                                     @foreach($lophoc as $v)
                                          <option value="{{$v->id}}">{{$v->name}}</option>
                                      @endforeach 
                                    
                                     
                                  </select>
                              </div>
                              <div class="form-group hocvienlist">
                                <label for="select22" class="control-label">
                                      Học viên
                                  </label>
                                 <!--  <select id="select22" class="form-control select2" multiple name="hocvien[]">
                                    
                                        <option value="">Select value...</option>
                                   @foreach($hocvien as $v)
                                        <option value="{{$v->id}}">{{$v->ten}}</option>
                                    @endforeach 
                                  
                                        
                                                                  </select> 
                                    -->
                                  <!--   <select id="multiselect2" multiple="multiple" required="" class="form-control" name="hocvien[]">
                                  @foreach($hocvien as $v)
                                  <option value="{{$v->id}}">{{$v->ten}}</option>
                                  @endforeach                                      
                                  </select>  -->
                                  <div class="form-group" style="border: 1px solid #bdb6b6; border-radius: 4px; padding: 10px; min-height: 20px;">
                                   
                                  
                                  </div>
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
                    <div class="col-md-6">
                        <!--select2 starts-->
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="livicon" data-name="calendar" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Custom Date Pickers
                                </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                            </div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <label>Disable Date Intervals:</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="livicon" data-name="calendar" data-size="14" data-loop="true"></i>
                                        </div>
                                        <input class="form-control" id="disableRangeMultiple" placeholder="disabled November 1-12 &amp; December 08-14 2016">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label>Check-In, Check-out Date Picker:</label>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="livicon" data-name="calendar" data-size="14" data-loop="true"></i>
                                            </div>
                                            <input class="form-control" id="check_in_date" placeholder="Check-In Date">
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="livicon" data-name="calendar" data-size="14" data-loop="true"></i>
                                            </div>
                                            <input class="form-control" id="check_out_date" placeholder="Check Out Date">
                                        </div>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                              

                               
                            </div>
                            <!--ends-->
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
        $('#lophocid').change(function()
        {
               var id = $(this).val();
               var url = $('#url').val();
               $.get(url+'/admin/diemdanh/getsv/'+id, function(data)
               {
              
                  $('.hocvienlist').html(data);
               });

        })
      });
    </script>
@endsection('script')

	