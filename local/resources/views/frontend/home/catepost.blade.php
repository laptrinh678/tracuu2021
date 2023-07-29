 @extends('fontend.master.index')
 @section('title')
  {{$cate->cat_slug}}
 @endsection('title')
 @section('header_style')
     <link rel="stylesheet" href="{{url('public/fontend')}}/css/cate_new.css">
 @endsection('header_style')
 @section('content')
<section class="banner-subpage">
        <a href="#" title="" class="imgc"><img src="{{url('public/fontend/images')}}/slide.jpg"></a>
        <!-- #region service-quotes -->
        <section class="service-quoets">
            <div class="container">
                <div class="list row">
                    @foreach($baogia as $v)      
                    <div class="col-xl-5c col-lg-5c col-md-5c item">
                        <a class="item-wrap thar" href='{{url("bao-gia/$v->post_slug.html")}}' target="" title="">
                            <div class="imgc0"><img src="{{url('public/backend/post')}}/{{$v->post_img2}}" class=" lazyloaded" alt="" data-src="{{url('public/backend/post')}}/{{$v->post_img2}}"></div>
                            <div class="item-body">Báo giá dịch vụ <span>{{$v->post_name}}</span></div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- #endregion service-quoets -->
    </section>
    <div class="breadcrumb-wrap">
        <nav class="container" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#" title="">Trang chủ</a></li>
                <li class="breadcrumb-item"><a href="#" title="">{{$cate->cat_name}}</a></li>
              
            </ol>
        </nav>
    </div>
    <section class="gallery-video news-sub ">
        <div class="container">
            <div class="list listtop">
                <h2 class="list-gheader">
                    <a href="#" title="">{{$cate->cat_name}}</a>
                </h2>
                <div class="list-gdesc">
                  {!!$cate->cat_gtngan!!}
                </div>
                <div class="list-body">
                  
                 

                    <div class="slick-slider slick-initialized" data-slick="{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:1,&quot;autoplay&quot;:true,&quot;responsive&quot;:[{&quot;breakpoint&quot;:1199,&quot;settings&quot;:{&quot;slidesToShow&quot;:3}},{&quot;breakpoint&quot;:767,&quot;settings&quot;:{&quot;slidesToShow&quot;:2}}]}">
                        <button class="slick-prev slick-arrow precate1" aria-label="Previous" type="button" style="">Previous</button>
                 <div class="owl-carousel owl-theme xaydungnhapho1">
                      @foreach($post as $v)
                                  <div class="item slick-slide slick-cloned" data-slick-index="-3" aria-hidden="true" tabindex="-1" style="width: 276px;">
                                <a class="imgc" href="{{url("$cate->cat_slug/$v->post_slug.html")}}" title="Mẫu thiết kế biệt thự 3 tầng đẹp, hiện đại đẳng cấp 17" tabindex="-1">
                                    <img alt="Mẫu thiết kế biệt thự 3 tầng đẹp, hiện đại đẳng cấp 17" class=" lazyloaded" src="{{url('public/backend/post')}}/{{$v->post_img}}" data-src="{{url('public/backend/post')}}/{{$v->post_img}}">
                                </a>
                                <div class="item-body">
                                    <h3 class="item-title">
                                        <a href="{{url("$cate->cat_slug/$v->post_slug.html")}}" title="Mẫu thiết kế biệt thự 3 tầng đẹp, hiện đại đẳng cấp 17" tabindex="-1">{{$v->post_name}}</a>
                                    </h3>
                                    <div class="item-text"><i class="fa fa-user"></i> Chủ đầu tư: {{$v->cdt}}</div>
                                    <div class="item-text"><i class="fa fa-map-marker"></i> Địa chỉ: {{$v->dc}}</div>
                                    <div class="item-text"><i class="fa fa-map"></i> Diện tích: {{$v->dt}}</div>
                                    <div class="item-text"><i class="fa fa-building"></i> Số tầng: {{$v->st}}</div>
                                </div>
                            </div>
                               @endforeach
        
            </div>
                        
                        
                        
                        
                    <button class="slick-next slick-arrow nextcate1"aria-label="Next" type="button" style="">Next</button></div>
                
     
            </div>
           
        </div>
    </section>
    <section class="project hot">
        <div class="container">
            <div class="list listtop">
                <h2 class="list-gheader">
                    <a href="#" title="">Dự án tiêu biểu</a>
                </h2>
                <div class="list-gdesc">
                    Tổng hợp những công trình Nhà phố đã thực hiện trong thời gian qua. Hy vọng Quý vị thấy được chất lượng cũng như chất xám mà {{$HF->youtube}} Công trình đã đưa vào mỗi công trình.
                </div>
                <div class="list-body">
                    <div class="slick-slider slick-initialized" data-slick="{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:1,&quot;autoplay&quot;:true,&quot;responsive&quot;:[{&quot;breakpoint&quot;:1199,&quot;settings&quot;:{&quot;slidesToShow&quot;:3}},{&quot;breakpoint&quot;:767,&quot;settings&quot;:{&quot;slidesToShow&quot;:2}}]}">
                     <button class="slick-prev slick-arrow duantieubieupre" aria-label="Previous" type="button" style="">Previous</button>
                      <div class="owl-carousel owl-theme duantieubieu">
                          @foreach($posttieubieu as $v)
                              <div class="item slick-slide slick-cloned" data-slick-index="-3" aria-hidden="true" tabindex="-1" style="width: 276px;">
                                <a class="imgc" href="{{url("bai-viet/$v->post_slug.html")}}" title="{{$v->post_name}}" tabindex="-1">
                                    <img alt="Mẫu thiết kế biệt thự 3 tầng đẹp, hiện đại đẳng cấp 17" class=" lazyloaded" src="{{url('public/backend/post')}}/{{$v->post_img}}" data-src="http://viettelxaydung.tatthanh.info/pic/Customer/p1_637076107504209866_HasThumb_Thumb.jpg">
                                </a>
                                <div class="item-body">
                                    <h3 class="item-title">
                                        <a href="{{url("bai-viet/$v->post_slug.html")}}" title="{{$v->post_name}}" tabindex="-1">{{$v->post_name}}</a>
                                    </h3>
                                    <div class="item-text"><i class="fa fa-user"></i> Chủ đầu tư: Anh Tuấn</div>
                                    <div class="item-text"><i class="fa fa-map-marker"></i> Địa chỉ: Đống Đa - Hà Nội</div>
                                    <div class="item-text"><i class="fa fa-map"></i> Diện tích: 100m2</div>
                                    <div class="item-text"><i class="fa fa-building"></i> Số tầng: 3 tầng</div>
                                </div>
                            </div>
                        @endforeach
                       
                     </div>
                    <button class="slick-next slick-arrow duantieubieunext" aria-label="Next" type="button" style="">Next</button>

                </div>
                </div>
            </div>
        </div>
    </section>
    <section class="caculator">
        <div class="container">
            <div class="list listtop">
             <h2 class="list-gheader">
                    <a href="#" title="">Tính giá xây dựng</a>
                </h2>
               
           
            <div class="list-gdesc">
                Quý khách vui lòng nhập đày đủ các thông tin bên dưới, trường hợp công năng không có quý khách vui lòng để trống. Lưu ý, quý khách nhập diện tích xây dựng (không phải diện tích đất) để có kết quả tương đối chính xác nhất. Đơn giá phụ thuộc vào nhiều yêu tố như: Diện tích xây dựng, quy mô công trình, điều kiện thi công, chủng loại vật liệu,... kết quả tính này mang tính chất tham khảo, để được tư vấn chính xác nhất vui lòng liên hệ tới hotline 0123 456 789 của công ty chúng tôi. <br>
                Chân thành cảm ơn quý khách!
            </div>
            <div class="list-body">
                <div class="item">
                    <h3 class="item-title"><img src="{{url('public/fontend/images')}}/icon-info.jpg"> Thông tin cơ bản</h3>
                    <div class="item-body">
                        <div class="input">
                            <span>Chọn loại nhà</span>
                            <select>
                                <option>Nhà phố</option>
                                <option>Nhà phố</option>
                            </select>
                        </div>
                        <div class="input">
                            <span>Dịch vụ xây nhà</span>
                            <select>
                                <option>Xây nhà phần thô</option>
                                <option>Xây nhà phần thô</option>
                            </select>
                        </div>
                        <div class="input">
                            <span>Mức đầu tư</span>
                            <select>
                                <option>Trung bình</option>
                                <option>Trung bình</option>
                            </select>
                        </div>
                        <div class="input">
                            <span>Mặt tiền</span>
                            <select>
                                <option>1</option>
                                <option>2</option>
                            </select>
                        </div>
                        <div class="input">
                            <span>Chiều rộng (ví dụ 2.5m)</span>
                            <input type="text" value="" placeholder="Nhập chiều rộng">
                        </div>
                        <div class="input">
                            <span>Chiều dài (ví dụ 10.5m)</span>
                            <input type="text" value="" placeholder="Nhập chiều dài">
                        </div>
                        <div class="input">
                            <span>Số tầng (trừ tum, lửng)</span>
                            <input type="text" value="" placeholder="Nhập số tầng">
                        </div>
                        <div class="input">
                            <span>Hẻm</span>
                            <select>
                                <option>Rộng hơn 5m</option>
                                <option>Rộng hơn 5m</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <h3 class="item-title"><img src="/Themes/Theme01/Assets/Css/Images/_Icon/icon-info.jpg"> Thông tin cơ bản</h3>
                    <div class="item-body">
                        <div class="input">
                            <span>Chọn loại nhà</span>
                            <select>
                                <option>Nhà phố</option>
                                <option>Nhà phố</option>
                            </select>
                        </div>
                        <div class="input">
                            <span>Dịch vụ xây nhà</span>
                            <select>
                                <option>Xây nhà phần thô</option>
                                <option>Xây nhà phần thô</option>
                            </select>
                        </div>
                        <div class="input">
                            <span>Mức đầu tư</span>
                            <select>
                                <option>Trung bình</option>
                                <option>Trung bình</option>
                            </select>
                        </div>
                        <div class="input">
                            <span>Mặt tiền</span>
                            <select>
                                <option>1</option>
                                <option>2</option>
                            </select>
                        </div>
                        <div class="input">
                            <span>Chiều rộng (ví dụ 2.5m)</span>
                            <input type="text" value="" placeholder="Nhập chiều rộng">
                        </div>
                        <div class="input">
                            <span>Chiều dài (ví dụ 10.5m)</span>
                            <input type="text" value="" placeholder="Nhập chiều dài">
                        </div>
                        <div class="input">
                            <span>Số tầng (trừ tum, lửng)</span>
                            <input type="text" value="" placeholder="Nhập số tầng">
                        </div>
                        <div class="input">
                            <span>Hẻm</span>
                            <select>
                                <option>Rộng hơn 5m</option>
                                <option>Rộng hơn 5m</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="item-link">
                    <a href="#" title="" class="thar">Tính kết quả</a>
                    <a href="#!" title="" class="thar extend">Mở rộng</a>
                </div>
            </div>
        </div>
        </div>
    </section>
    

@endsection
@section('script')
<script>
    $(document).ready(function()
    {
         var owl = $('.xaydungnhapho1');
              owl.owlCarousel({
                margin: 20,
                nav: true,
                loop: true,
                autoplay: false,
                autoplayTimeout: 5000,
                responsive: {
                  0: {
                    items: 2
                  },
                  600: {
                    items: 4
                  },
                  1000: {
                    items: 4
                  }
                }
              });

              $('.nextcate1').click(function() 
              {
                owl.trigger('next.owl.carousel');
              });
              $('.precate1').click(function() {
                  owl.trigger('prev.owl.carousel', [300]);
              });
    })
</script>
<script>
    $(document).ready(function()
    {
         var owl = $('.xaydungnhapho2');
              owl.owlCarousel({
                margin: 20,
                nav: true,
                loop: true,
                autoplay: false,
                autoplayTimeout: 5000,
                responsive: {
                  0: {
                    items: 3
                  },
                  600: {
                    items: 4
                  },
                  1000: {
                    items: 4
                  }
                }
              });

              $('.nextcate2').click(function() 
              {
                owl.trigger('next.owl.carousel');
              });
              $('.precate2').click(function() {
                  owl.trigger('prev.owl.carousel', [300]);
              });
    })
</script>
<script>
  $(document).ready(function() {
             
               var owl = $('.duantieubieu');
              owl.owlCarousel({
                margin: 20,
                nav: true,
                loop: true,
                autoplay: false,
                autoplayTimeout: 5000,
                responsive: {
                  0: {
                    items: 3
                  },
                  600: {
                    items: 3
                  },
                  1000: {
                    items: 4
                  }
                }
              });

              $('.duantieubieunext').click(function() {
            owl.trigger('next.owl.carousel');
              });
              $('.duantieubieupre').click(function() {
                  owl.trigger('prev.owl.carousel', [300]);
              });
          
            });
</script>
@endsection('script')