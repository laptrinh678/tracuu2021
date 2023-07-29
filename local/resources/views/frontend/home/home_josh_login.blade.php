@extends('frontend.master.index')
@section('title')
 Đăng nhập
@endsection('title')
@section('meta')
@section('style')
    <!--page level css starts-->
    <link type="text/css" rel="stylesheet" href="vendors/icheck/skins/all.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <!--end of page level css-->
@endsection('style')
@section('content')
<div class="container-fluid" style="background: #e4e4e4">
    

<div class="container">
    <!--Content Section Start -->
    <div class="row text-center">
    	<div class="text-center" style=" margin: auto; width: 30%; min-width: 300px;">
    		<div class="box animation flipInX" style="background: white;">
            <div class="box1 text-center">
            	
            		 
            
           
            <h3 class="text-center">HỆ THỐNG TRA CỨU</h3>
            <div style="padding: 20px;">
            				  <img src="{{url('public/frontend/frontend_josh')}}/images/f.png" alt="logo" class="img-responsive mar" style="height: 50px; margin: auto;">
            	</div>
          
            <form action="#" method="post">
                <div class="form-group">
                    <label class="title">Nhập mã sinh viên</label>
                    <input class="form-control" type="text" name="masv" required="" placeholder="Nhập mã sinh viên">
                </div>
                <div class="form-group">
                    <label class="title" >Nhập password</label>
                    <input class="form-control" type="password" required="" name="password" placeholder="Password">
                </div>
                <!-- <div class="checkbox text-left">
                    <label>
                        <input type="checkbox">  Remember Password
                    </label>
                </div> -->
                <input type="submit" class="btn btn-block btn-primary" value="Đăng nhập">
               <!--  <p>Don't have an account? <a href="register.html"><strong> Sign up</strong></a></p> -->
                {{csrf_field()}}
            </form>
             @if(session('err'))
             <p class="alert_width" style="width: 100%; margin:5px;">{{session('err')}} </p>
              @endif
            </div>
        <!-- <div class="bg-light animation flipInX">
            <a href="forgot.html">Forgot Password?</a>
        </div> -->
        </div>
    	</div>
        
    </div>
    <!-- //Content Section End -->
</div>
</div>
@endsection('content')
@section('script') 
<!--global js starts-->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!--global js end-->
<script type="text/javascript" src="vendors/icheck/icheck.min.js"></script>
<script>
    $(document).ready(function(){
        $("input[type='checkbox']").iCheck({
            checkboxClass: 'icheckbox_minimal-blue'
        });
    });
     // $('.alert_width').delay(5000).slideUp(300);
   
</script>
@endsection('script')
