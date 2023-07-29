@extends('frontend.master.index')
@section('title')
Trang chủ
@endsection('title')
@section('header_style')

@endsection('header_style')
  
@section('content')
<style type="text/css">
  .tb{ text-align: center; font-size: 20px; color: red; margin-top: 40px; }
</style>

    <!-- Layout Section Start -->
    <section class="feature-main">
         @if(session('success'))
         <p class="alert_width">{{session('success')}} -Xin chào {{$_SESSION['admin']}} </p>
          @endif
        <div class="container">
        
          
      
            <div class="row">
                  <div class="text-center">
                <h3 class="border-success"><span class="heading_border bg-success">TRA CỨU KẾT QUẢ HỌC TẬP THEO KỲ <br> <br> (THỬ NGHIỆM LỚP CX20.1 - KỲ 1 NĂM HỌC 2019-2020)</span></h3>
                <label class=" text-center">Nhập mã sinh viên và lớp để tra cứu kết quả học tập</label>
            </div>
                
                <div class="col-md-3 col-sm-3 col-xs-12">
                   <div class="panel panel-success" style="border: 1px solid #ced4da; border-radius: 4px; margin: 2px; padding:5px">
                            
                            <div class="panel-body">
                                <div class="box-body">
                                   
                                   <div  id="masv_lop">
                                    <!-- IP mask -->
                                    <div class="form-group">
                                        <label>Mã sinh viên</label>
                                        <input type="text" name="masv" class="form-control" id="masv" required="">
                                    </div>
                                     
                                   
                               <div class="form-group">
                                  <label for="select21" class="control-label">
                                     Lớp học
                                  </label>
                                  <select class="form-control" name="lophoc" id="lophoc">
                                    <option>Vui lòng chọn lớp</option>
                                    @foreach($lop as $v)
                                    <option value="{{$v->id}}">{{$v->name}}</option>
                                    @endforeach
                                  </select>
                                  
                               </div>
                               <div class="form-group">
                              <label for="email">Học Kỳ</label>
                              <select name="" id="hocky" class="form-control" required="" >
                                <option value="">Chọn học kỳ</option>
                                <option value="1">Học Kỳ 1</option>
                                <option value="2">Học kỳ 2</option>
                              </select>
                            </div>
                              <div class="form-group">
                              <label for="email">Năm học</label>
                              <select id="namhoc" class="form-control" required="">
                                <option value="">Chọn năm</option>
                                <option value="2018-2019">2018-2019</option>
                                <option value="2019-2020">2019-2020</option>
                                <option value="2020-2021">2020-2021</option>
                              </select>
                            </div>
                              
                              <div class="form-group">
                                <button  class="btn btn-primary" id="tracuu_theomasv_lop">Tra cứu</button>
                              </div>
                             
                              </div>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="col-md-9 col-sm-9 col-xs-12">
                   <div id="data_ketqua" style="border: 1px solid #ced4da; border-radius: 4px; margin: 2px padding:5px; min-height: 400px">
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //Layout Section Start -->
      <section class="feature-main">
        <div class="container">
            <div class="row">
                  <div class="text-center title_kq">
                <h3 class="border-danger"><span class="heading_border bg-danger">TRA CỨU KẾT QUẢ HỌC TẬP THEO MÃ SINH VIÊN  <br> <br> (THỬ NGHIỆM LỚP CX20.1 - KỲ 1 NĂM HỌC 2019-2020)</span></h3>
                <label class="text-center">Nhập mã sinh viên và lớp để tra cứu kết quả học tập</label>
            </div>
                
                <div class="col-md-3 col-sm-3 col-xs-12">
                   <div class="panel panel-success" style="border: 1px solid #ced4da; border-radius: 4px; margin: 2px; padding:5px">
                            
                            <div class="panel-body">
                                <div class="box-body">
                                   
                                   <div  id="masv_lop">
                                    <!-- IP mask -->
                                    <div class="form-group">
                                        <label>Mã sinh viên</label>
                                        <input type="text" name="masv" class="form-control" id="tracuu_theomasv" required>
                                       
                                    </div>
                              <div class="form-group">
                                <button  class="btn btn-primary" id="tracuu_theomasv_only">Tra cứu</button>
                              </div>
                             
                              </div>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="col-md-9 col-sm-9 col-xs-12">
                   <div id="data_ketqua_masv" style="border: 1px solid #ced4da; border-radius: 4px; margin: 2px padding:5px; min-height: 400px">
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- tra cuu theo nam -->
    <!-- Layout Section Start -->
    <section class="feature-main">
        <div class="container">
            <div class="row">
                  <div class="text-center">
                <h3 class="border-success"><span class="heading_border bg-success">TRA CỨU KẾT QUẢ HỌC TẬP THEO NĂM <br> <br> (THỬ NGHIỆM LỚP CK7.1 - NĂM HỌC 2018-2019)</span></h3>
                <label class=" text-center">Nhập mã sinh viên và lớp để tra cứu kết quả học tập</label>
            </div>
                
                <div class="col-md-3 col-sm-3 col-xs-12">
                   <div class="panel panel-success" style="border: 1px solid #ced4da; border-radius: 4px; margin: 2px; padding:5px">
                            
                            <div class="panel-body">
                                <div class="box-body">
                                   
                                   <div  id="masv_lop_namhoc">
                                    <!-- IP mask -->
                                    <div class="form-group">
                                        <label>Mã sinh viên</label>
                                        <input type="text" name="masv" class="form-control" id="masv3" required="">
                                    </div>
                                     
                                   
                               <div class="form-group">
                                  <label for="select21" class="control-label">
                                     Lớp học
                                  </label>
                                  <select class="form-control" name="lophoc" id="lophoc3">
                                    <option>Vui lòng chọn lớp</option>
                                    @foreach($lop as $v)
                                    <option value="{{$v->id}}">{{$v->name}}</option>
                                    @endforeach
                                  </select>
                                  
                               </div>
                            
                              <div class="form-group">
                              <label for="email">Năm học</label>
                              <select id="namhoc3" class="form-control" required="">
                                <option value="">Chọn năm</option>
                                <option value="2018-2019">2018-2019</option>
                                <option value="2019-2020">2019-2020</option>
                                <option value="2020-2021">2020-2021</option>
                              </select>
                            </div>
                              
                              <div class="form-group">
                                <button  class="btn btn-primary" id="tracuu_theo_namhoc">Tra cứu</button>
                              </div>
                             
                              </div>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="col-md-9 col-sm-9 col-xs-12">
                   <div id="data_ketqua_namhoc" style="border: 1px solid #ced4da; border-radius: 4px; margin: 2px padding:5px; min-height: 400px">
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <input type="hidden" name="" id="url" value="{{url('')}}">
@endsection('content')

@section('script') 
<script src="{{url('public/backend/josh')}}/excel/jquery.table2excel.js"></script>
<script type="text/javascript">
    $(document).ready(function()
    {
        $('body').on('click','#tracuu_theomasv_lop', function()
           {
                var masv = $('#masv').val();
                var lophoc = $('#lophoc').val();
                var hocky2 = Number($('#hocky').val());
                var namhoc =$('#namhoc').val();
                var url = $('#url').val();
                if(masv == '' || lophoc == '' || hocky2 == '' || namhoc =='')
                {
                   alert ('Bạn vui lòng nhập đầy đủ thông tin vào các ô');
                }
                else
                {
                      $.get(url+'/theoma_lop/'+masv+'/'+lophoc+'/'+hocky2+'/'+namhoc, function(data)
                       {
                                 $('#data_ketqua').html(data); 
                       });
                }
           });
        // tra cuu theo nam hoc
         $('body').on('click','#tracuu_theo_namhoc', function()
           {
                var masv = $('#masv3').val();
                var lophoc = $('#lophoc3').val();
                var namhoc =$('#namhoc3').val();
                var url = $('#url').val();
                if(masv == '' || lophoc == ''|| namhoc =='')
                {
                   alert ('Bạn vui lòng nhập đầy đủ thông tin vào các ô');
                }
                else
                {
                      $.get(url+'/theoma_lop_namhoc/'+masv+'/'+lophoc+'/'+namhoc, function(data)
                       {
                                //alert(data);
                                 $('#data_ketqua_namhoc').html(data); 
                       });
                }
           });

        $('body').on('click','#tracuu_theomasv_only', function()
           {
                var masv = $('#tracuu_theomasv').val();
                var url = $('#url').val();
                if(masv == '')
                {
                  alert('Vui lòng nhập mã sinh viên');

                }else
                {
                    $.get(url+'/theo_masv/'+masv, function(data)
                     {
                          
                              $('#data_ketqua_masv').html(data);
                          
                     });
                }
             
           });
         $('.alert_width').delay(2000).slideUp(300);
        var size = $( window ).width();
        if(size<1024)
        {
          $('.heading_border').css({'font-size':12});
        }

    });
</script>  
<script>
      $(function() {

          $('body').on('click','.exportToExcel', function()
        {
            var table = $(this).prev('.table2excel');
            if(table && table.length){
              var preserveColors = (table.hasClass('table2excel_with_colors') ? true : false);
              $(table).table2excel({
                exclude: ".noExl",
                name: "Excel Document Name",
                filename: "myFileName" + new Date().toISOString().replace(/[\-\:\.]/g, "") + ".xls",
                fileext: ".xls",
                exclude_img: true,
                exclude_links: true,
                exclude_inputs: true,
                preserveColors: preserveColors
              });
            }

        })

        
      });

    </script>
@endsection('script')