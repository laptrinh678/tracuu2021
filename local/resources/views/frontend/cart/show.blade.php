@extends('fontend.master.index')
@section('title')
Giở hàng của bạn tại dangquangauto.vn
@endsection('title')
@section('content')
<script>
      function updatecart(qty,rowId)
      {
            $.get(
                  '{{url('cart/update')}}',
                  {qty:qty,rowId:rowId},
                  function()
                  {
                        location.reload();

                  }



                  );

      }
</script>
<section class="shopingcart">
  <div class="container">
      <div class="row">
            <h3 class="title_gh"> <i class="fa fa-shopping-bag" aria-hidden="true"></i> <span>GIỎ HÀNG</span></h3>
      	<table class="table_shop">
      		<tr class="tr_title">
      			<td>Ảnh sản phẩm</td>
      			<td>Tên sản phẩm</td>
      			<td>Số lượng</td>
      			<td>Đơn Giá</td>
      			<td>Thành tiền</td>
      			<td>Xóa</td>
      		</tr>
      		@foreach($data as $val)
      		<tr class="tr_content">
      			<td><img src="{{url('public/backend/product')}}/{{$val->options->img}}" alt="" width="50" height="50"></td>
      			<td>{{$val->name}}</td>
      			<td><input type="number" value="{{$val->qty}}" class="form-control" onchange="updatecart(this.value,'{{$val->rowId}}')" ></td>
      			<td>{{number_format($val->price)}}</td>
      			<td>{{number_format($val->price*$val->qty)}}</td>
      			<td><a href="{{url('cart/delete')}}/{{$val->rowId}}"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
      		</tr>
      		@endforeach
      	</table>
            <h3 class="title_gh"> <i class="fa fa-money" aria-hidden="true"></i>THANH TOÁN</h3>
            <div class="col-md-12">
                  <div class="thanhtoan">
                        <span class="tongtt">TỔNG THANH TOÁN:{{$total}}</span>
                        <span class=" btn btn-success"><a href="">Mua Tiếp</a></span>
                        <span class=" btn btn-warning"><a href="">Cập Nhật</a></span>
                        <span class="btn btn-danger" ><a href="{{url('cart/delete')}}/all">Xóa giỏ hàng</a></span>
                  </div>
            </div>
             <h3 class="title_gh"><i class="fa fa-envelope-o" aria-hidden="true"></i> GỬI EMAIL THÔNG TIN ĐƠN HÀNG CỦA BẠN CHO CHÚNG TÔI</h3>
            <div class="col-md-6">
                  
                  <form action="" method="post">

                           <div class="form-group">
                            <label for="exampleInputPassword1">Họ và tên người mua</label>
                            <input type="text" class="form-control" id="" placeholder="Bạn vi lòng nhập tên" name="name" required="">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Địa chỉ Email của bạn</label>
                            <input type="email" class="form-control" id="" aria-describedby="emailHelp" name="email" required="" placeholder="Bạn vui lòng nhập email">
                          </div>
                         
                           <div class="form-group">
                            <label for="exampleInputPassword1">Số điện thoại của bạn</label>
                            <input type="number" class="form-control" id="" placeholder="Bạn vi lòng nhập số điện thoại" required="" name="phone">
                          </div>
                           <div class="form-group">
                            <label for="exampleInputPassword1">Địa chỉ nhận hàng của bạn</label>
                            <input type="text" class="form-control" id="" placeholder="Bạn vi lòng nhập địa chỉ" required="" name="adress">
                          </div>
                          <button type="submit" class="btn btn-primary">Gửi</button>
                          <br>
                          {{csrf_field()}}
                  </form>
             </div>
             <div class="col-md-6">
               <script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyBynM-M9Wbv9_qEK3QwTRVcpuygF9Lttqo">
               </script>
               <div id="gmap_canvas" style="height:250px;width:100%;">
                <style>
                    #gmap_canvas img {
                        max-width:none!important;
                        background:none!important
                    }
                
                </style>
                </div>
                  <script type="text/javascript">
                                function init_map() {
                                    var myOptions = {
                                        zoom: 14,
                                        center: new google.maps.LatLng(20.982430, 105.787930),
                                        mapTypeId: google.maps.MapTypeId.ROADMAP
                                    };
                                    map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);
                                    marker = new google.maps.Marker({
                                        map: map,
                                        position: new google.maps.LatLng(20.982430, 105.787930)
                                    });
                                    infowindow = new google.maps.InfoWindow({
                                        content: "<b>{{$header_footer->adress}}</b> "
                                    });
                                    google.maps.event.addListener(marker, "click", function () {
                                        infowindow.open(map, marker);
                                    });
                                    infowindow.open(map, marker);
                                }
                                google.maps.event.addDomListener(window, 'load', init_map);
                            
                            </script>
<!-- tích hợp bản dồ tại https://www.latlong.net/-->
          <div class="nammuoi adressmap">
            <div class="left_10">
              <i class="fa fa-map-marker" aria-hidden="true"></i>
            </div>
            <div class="right_90">
              <p><span>Trụ sở Hà Nội</span></p>
              <p>{{$header_footer->adress}}</p>
            </div>
            <div class="left_10">
             <i class="fa fa-phone" aria-hidden="true"></i>
            </div>
            <div class="right_90">
              <p><span>Điện thoại</span></p>
              <p>{{$header_footer->hotline}}</p>
            </div>
             <div class="left_10">
            <i class="fa fa-envelope-o" aria-hidden="true"></i>
            </div>
            <div class="right_90">
              <p><span>Email</span></p>
              <p>{{$header_footer->email}}</p>
            </div>
          </div>
         <!--  <div class="nammuoi">
             <div class="left_10">
             <i class="fa fa-map-marker" aria-hidden="true"></i>
           </div>
           <div class="right_90">
             <p><span>Thành phố Hồ Chí Minh</span></p>
             <p>Tầng 2 tòa nhà Pico, 20 Cộng Hòa, Phường 12, Quận Tân Bình, Thành phố Hồ Chí Minh</p>
           </div>
           <div class="left_10">
            <i class="fa fa-phone" aria-hidden="true"></i>
           </div>
           <div class="right_90">
             <p><span>Điện thoại</span></p>
             <p>028 3948 1500</p>
           </div>
            <div class="left_10">
           <i class="fa fa-envelope-o" aria-hidden="true"></i>
           </div>
           <div class="right_90">
             <p><span>Email</span></p>
             <p>inforhcm@egroup.vn</p>
           </div>
         </div> -->
       
           </div>
           
      
      </div>
    </div>
</section>
@endsection
