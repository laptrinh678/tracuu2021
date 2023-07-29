 @extends('fontend.master.index')
 @section('title')
  {{$post_detail->post_name}}
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
                    <div class="col-xl-5c col-lg-5c col-md-5c item">
                        <a href="#" title="" class="item-wrap thar">
                            <div class="imgc0"><img src="{{url('public/fontend/images')}}/sq1.png"></div>
                            <div class="item-body">báo giá dịch vụ <span>tư vấn thiết kế</span></div>
                        </a>
                    </div>
                    <div class="col-xl-5c col-lg-5c col-md-5c item">
                        <a href="#" title="" class="item-wrap thar">
                            <div class="imgc0"><img src="{{url('public/fontend/images')}}/sq2.png"></div>
                            <div class="item-body">báo giá dịch vụ <span>cung cấp nhân công thi công xây dựng</span></div>
                        </a>
                    </div>
                    <div class="col-xl-5c col-lg-5c col-md-5c item">
                        <a href="#" title="" class="item-wrap thar">
                            <div class="imgc0"><img src="{{url('public/fontend/images')}}/sq3.png"></div>
                            <div class="item-body">báo giá dịch vụ <span>thi công xây dựng phần thô</span></div>
                        </a>
                    </div>
                    <div class="col-xl-5c col-lg-5c col-md-5c item">
                        <a href="#" title="" class="item-wrap thar">
                            <div class="imgc0"><img src="{{url('public/fontend/images')}}/sq4.png"></div>
                            <div class="item-body">báo giá dịch vụ <span>thi công xây dựng hoàn thiện cơ bản</span></div>
                        </a>
                    </div>
                    <div class="col-xl-5c col-lg-5c col-md-5c item">
                        <a href="#" title="" class="item-wrap thar">
                            <div class="imgc0"><img src="{{url('public/fontend/images')}}/sq5.png"></div>
                            <div class="item-body">báo giá dịch vụ <span>thi công xây dựng hoàn thiện trọn gói</span></div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- #endregion service-quoets -->
    </section>
    <div class="breadcrumb-wrap">
        <nav class="container" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#" title="">Trang chủgggggggggg</a></li>
                <li class="breadcrumb-item"><a href="#" title=""> {{$post_detail->post_name}}</a></li>
              
            </ol>
        </nav>
    </div>
  <section class="subpage gallery-video projectpage">
    <div class="container">
        <div class="subpage-left">
            <h1>
               {{$post_detail->post_name}}
            </h1>
            

<div class="post-entry">
    <div class="post-date"><i class="fa fa-calendar"></i> 06/11/2019 - 10:20 AM - 36 lượt xem</div>
    <div class="right">
        <div class="post-size">
            <a class="normal" href="javascript:void(0);">Cỡ chữ </a>
            <a class="large" href="javascript:void(0);"><i class="fa fa-plus"></i></a>
            <a class="small" href="javascript:void(0);"><i class="fa fa-minus"></i></a>
        </div>
        <div class="social">
           
        </div>
    </div>
</div>
<div class="post-content">
                

<div class="psmall slick-slider slick-initialized" data-slick="{&quot;slidesToShow&quot;: 7,&quot;slidesToScroll&quot;: 1,&quot;arrows&quot;: false,&quot;asNavFor&quot;:&quot;.pbig&quot;,&quot;focusOnSelect&quot;: true, &quot;responsive&quot;:[{&quot;breakpoint&quot;:1199,&quot;settings&quot;:{&quot;slidesToShow&quot;:5}},{&quot;breakpoint&quot;:767,&quot;settings&quot;:{&quot;slidesToShow&quot;:3}}]}">
    
</div>
                 
<!-- <table>
    <tbody>
        <tr>
            <td><img src="/Themes/Theme01/Assets/Css/Images/_Icon/user.png" class=" lazyloaded" data-src="/Themes/Theme01/Assets/Css/Images/_Icon/user.png"> Chủ đầu tư</td>
            <td>Anh Lâm </td>
        </tr>
        <tr>
            <td><img src="/Themes/Theme01/Assets/Css/Images/_Icon/map-maker.png" class=" lazyloaded" data-src="/Themes/Theme01/Assets/Css/Images/_Icon/map-maker.png"> Địa chỉ</td>
            <td>Thanh Khê - Đà Nẵng</td>
        </tr>
        <tr>
            <td><img src="/Themes/Theme01/Assets/Css/Images/_Icon/pen.png" class=" lazyloaded" data-src="/Themes/Theme01/Assets/Css/Images/_Icon/pen.png"> Loại hình</td>
            <td>Nhà phố</td>
        </tr>
        <tr>
            <td><img src="/Themes/Theme01/Assets/Css/Images/_Icon/build.png" class=" lazyloaded" data-src="/Themes/Theme01/Assets/Css/Images/_Icon/build.png"> Số tầng</td>
            <td>3 tầng</td>
        </tr>
        <tr>
            <td><img src="/Themes/Theme01/Assets/Css/Images/_Icon/alt.png" class=" lazyloaded" data-src="/Themes/Theme01/Assets/Css/Images/_Icon/alt.png"> Mặt tiền</td>
            <td>4,5x12 m</td>
        </tr>
        <tr>
            <td><img src="/Themes/Theme01/Assets/Css/Images/_Icon/map.png" class=" lazyloaded" data-src="/Themes/Theme01/Assets/Css/Images/_Icon/map.png"> Tổng diện tích</td>
            <td>60m2</td>
        </tr>
        <tr>
            <td><img src="/Themes/Theme01/Assets/Css/Images/_Icon/gear.png" class=" lazyloaded" data-src="/Themes/Theme01/Assets/Css/Images/_Icon/gear.png"> Công năng</td>
            <td></td>
        </tr>
        <tr>
            <td><img src="/Themes/Theme01/Assets/Css/Images/_Icon/share.png" class=" lazyloaded" data-src="/Themes/Theme01/Assets/Css/Images/_Icon/share.png"> Đơn vị thiết kế</td>
            <td></td>
        </tr>
        <tr>
            <td><img src="/Themes/Theme01/Assets/Css/Images/_Icon/calendar.png" class=" lazyloaded" data-src="/Themes/Theme01/Assets/Css/Images/_Icon/calendar.png"> Năm thực hiện</td>
            <td></td>
        </tr>
    </tbody>
</table>  -->
                
<div style="text-align: justify;">
{!! $post_detail->post_gtchitiet!!}
                                
</div>
            

<div class="post-toolbar">
    <div class="tool-left">
        <a href="javascript:history.go(-1)" class="prev-page" title="">Về trang trước</a>
        <a href="javascript:void(0);" class="email addthis_button_email" title="">Gửi email</a>
        <a href="javascript:window.print();" class="print" title="">In trang</a>
    </div>
    <div class="tool-right">
        <div class="social">
            <div id="fb-root" class=" fb_reset"><div style="position: absolute; top: -10000px; width: 0px; height: 0px;"><div><iframe name="fb_xdm_frame_https" id="fb_xdm_frame_https" aria-hidden="true" title="Facebook Cross Domain Communication Frame" tabindex="-1" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://staticxx.facebook.com/connect/xd_arbiter.php?version=44#channel=f2a0d59c3b78898&amp;origin=https%3A%2F%2Fvcchomes.vn" style="border: none;"></iframe></div><div></div></div></div>
            <div class="fb-share-button fb_iframe_widget" data-href="https://vcchomes.vn/du-an-mau-nha-pho-3-tang-hien-dai.html" data-layout="button_count" data-size="small" data-mobile-iframe="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=&amp;container_width=0&amp;href=https%3A%2F%2Fvcchomes.vn%2Fdu-an-mau-nha-pho-3-tang-hien-dai.html&amp;layout=button_count&amp;locale=vi_VN&amp;mobile_iframe=true&amp;sdk=joey&amp;size=small"><span style="vertical-align: bottom; width: 0px; height: 0px;"><iframe name="f1a955262d22154" width="1000px" height="1000px" title="fb:share_button Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v2.9/plugins/share_button.php?app_id=&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter.php%3Fversion%3D44%23cb%3Dfb00bb61d3388%26domain%3Dvcchomes.vn%26origin%3Dhttps%253A%252F%252Fvcchomes.vn%252Ff2a0d59c3b78898%26relation%3Dparent.parent&amp;container_width=0&amp;href=https%3A%2F%2Fvcchomes.vn%2Fdu-an-mau-nha-pho-3-tang-hien-dai.html&amp;layout=button_count&amp;locale=vi_VN&amp;mobile_iframe=true&amp;sdk=joey&amp;size=small" style="border: none; visibility: visible; width: 0px; height: 0px;" class=""></iframe></span></div>
            <div class="fb-like fb_iframe_widget" data-href="https://vcchomes.vn/du-an-mau-nha-pho-3-tang-hien-dai.html" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="false" fb-xfbml-state="rendered" fb-iframe-plugin-query="action=like&amp;app_id=&amp;container_width=0&amp;href=https%3A%2F%2Fvcchomes.vn%2Fdu-an-mau-nha-pho-3-tang-hien-dai.html&amp;layout=button_count&amp;locale=vi_VN&amp;sdk=joey&amp;share=false&amp;show_faces=true&amp;size=small"><span style="vertical-align: bottom; width: 76px; height: 20px;"><iframe name="f25e0b01992626" width="1000px" height="1000px" title="fb:like Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v2.9/plugins/like.php?action=like&amp;app_id=&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter.php%3Fversion%3D44%23cb%3Df33bcc7d3332624%26domain%3Dvcchomes.vn%26origin%3Dhttps%253A%252F%252Fvcchomes.vn%252Ff2a0d59c3b78898%26relation%3Dparent.parent&amp;container_width=0&amp;href=https%3A%2F%2Fvcchomes.vn%2Fdu-an-mau-nha-pho-3-tang-hien-dai.html&amp;layout=button_count&amp;locale=vi_VN&amp;sdk=joey&amp;share=false&amp;show_faces=true&amp;size=small" style="border: none; visibility: visible; width: 76px; height: 20px;" class=""></iframe></span></div>
        </div>
        <div class="shareSocial">
            <div class="addthis_sharing_toolbox"></div>
        </div>
    </div>
</div>

<script>
    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.9";
        fjs.parentNode.insertBefore(js, fjs);
    }
        (document, 'script', 'facebook-jssdk'));
</script>
            

<div class="advice-form">
    <div class="list-header">
        <h2 class="list-title">Gửi yêu cầu tư vấn</h2>
        <div class="list-desc">Sau khi nhận được yêu cầu của quý khách, Viettel sẽ liên hệ sớm nhất có thể để tư vấn cho quý vị </div>  
    </div>
    <div class="list-body row" id="guiYeuCauTuVan2">
        <div class="col-6">
            <div class="input">
                <span>Họ tên *</span>
                <input name="DisplayLoadControl$ctl00$ctl00$SubFormTuVan$tbHoTen_RQ2" type="text" id="DisplayLoadControl_ctl00_ctl00_SubFormTuVan_tbHoTen_RQ2" class="required" placeholder="Điền họ tên đầy đủ của bạn">
            </div>
            <div class="input">
                <span>Địa chỉ</span>
                <input name="DisplayLoadControl$ctl00$ctl00$SubFormTuVan$tbDiaChi_RQ2" type="text" id="DisplayLoadControl_ctl00_ctl00_SubFormTuVan_tbDiaChi_RQ2" placeholder="Địa chỉ bạn ở đâu">
            </div>
            <div class="input">
                <span>Email *</span>
                <input name="DisplayLoadControl$ctl00$ctl00$SubFormTuVan$tbEmail_RQ2" type="text" id="DisplayLoadControl_ctl00_ctl00_SubFormTuVan_tbEmail_RQ2" class="required" placeholder="Email của bạn">
            </div>
            <div class="input">
                <span>Điện thoại *</span>
                <input name="DisplayLoadControl$ctl00$ctl00$SubFormTuVan$tbDienThoai_RQ2" type="text" id="DisplayLoadControl_ctl00_ctl00_SubFormTuVan_tbDienThoai_RQ2" class="required" placeholder="Số điện thoại của bạn">
            </div>
            <div class="input">
                <span>Loại công trình *</span>
                <select name="DisplayLoadControl$ctl00$ctl00$SubFormTuVan$tbLoaiCongTrinh_RQ2" id="DisplayLoadControl_ctl00_ctl00_SubFormTuVan_tbLoaiCongTrinh_RQ2" class="ddlLoaiCongTrinh required">
    <option value="">Chọn loại công trình</option>
    <option value="Biệt thự nhà vườn">Biệt thự nhà vườn</option>
    <option value="Lâu đài dinh thự">Lâu đài dinh thự</option>
    <option value="Nhà ống">Nhà ống</option>
    <option value="Văn phòng - Công sở">Văn phòng - Công sở</option>
    <option value="Không xác định">Không xác định</option>

</select>
            </div>
            <div class="input">
                <span>Mức đầu tư *</span>
                <select name="DisplayLoadControl$ctl00$ctl00$SubFormTuVan$tbMucDauTu_RQ2" id="DisplayLoadControl_ctl00_ctl00_SubFormTuVan_tbMucDauTu_RQ2" class="ddlMucDauTu required">
    <option value="">Chọn mức đầu tư</option>
    <option value="< 1 tỷ">&lt; 1 tỷ</option>
    <option value="1 - 1.5 tỷ">1 - 1.5 tỷ</option>
    <option value="1.5 - 2 tỷ">1.5 - 2 tỷ</option>
    <option value="2 - 3 tỷ">2 - 3 tỷ</option>
    <option value="3 - 5 tỷ">3 - 5 tỷ</option>
    <option value="5 - 10 tỷ">5 - 10 tỷ</option>
    <option value="> 10 tỷ">&gt; 10 tỷ</option>
    <option value="Không xác định">Không xác định</option>

</select>
            </div>
        </div>
        <div class="col-6">
            <div class="input">
                <span>Đính kèm tệp tin</span>
                <div class="file">
                    <span><b style="font-weight: normal;" id="filename2">Chọn tệp tin</b> <i class="fa fa-paperclip" aria-hidden="true"></i></span>
                    <input type="file" name="DisplayLoadControl$ctl00$ctl00$SubFormTuVan$flImage2" id="DisplayLoadControl_ctl00_ctl00_SubFormTuVan_flImage2" class="flImage2 required" accept=".doc,.docx,.pdf,.xls,.xlsx,.rar,.zip,.jpg,.png">
                </div>
                <script>
                    $(document).ready(function () {
                        $('.flImage2').change(function () {
                            var filename = $(this).val();
                            var lastIndex = filename.lastIndexOf("\\");
                            if (lastIndex >= 0) {
                                filename = filename.substring(lastIndex + 1);
                            }
                            $('#filename2').text(filename);
                        });
                    });
                </script>
            </div>
            <div class="input">
                <span>Tiêu đề</span>
                <input name="DisplayLoadControl$ctl00$ctl00$SubFormTuVan$tbTieuDe_RQ2" type="text" id="DisplayLoadControl_ctl00_ctl00_SubFormTuVan_tbTieuDe_RQ2" placeholder="Gõ tiêu đề thư">
            </div>
            <div class="input">
                <span>Yêu cầu cụ thể</span>
                <textarea name="DisplayLoadControl$ctl00$ctl00$SubFormTuVan$tbYeuCau_RQ2" rows="2" cols="20" id="DisplayLoadControl_ctl00_ctl00_SubFormTuVan_tbYeuCau_RQ2" placeholder="Gõ nội dung yêu cầu tư vấn"></textarea>
            </div>
            <div class="item-link">
                <span>Gửi yêu cầu</span>
                <a onclick="return SendTuVan2();" id="DisplayLoadControl_ctl00_ctl00_SubFormTuVan_lbt_Submit" class="thar" href="javascript:__doPostBack('DisplayLoadControl$ctl00$ctl00$SubFormTuVan$lbt_Submit','')">Gửi yêu cầu <i class="fa fa-angle-double-right"></i></a>
            </div>
        </div>
    </div>
    <div class="list-text">
        <div class="item-note">(Ghi chú: Các thông tin bạn cung cấp càng chi tiết thì chúng tôi càng có cơ sở để đưa ra phương án tối ưu hơn)</div>
        <div class="item-deco">Một số gợi ý để bạn viết yêu cầu:</div>
        <div class="item-text">
            <span>- Ghi rõ kích thước các cạnh</span>
            <span>- Đường giao thông mà mảnh đất tiếp giáp (loại đường, bề rộng đường, bề rộng vỉa hè…)</span>
            <span>- Bạn định xây mấy tầng. Số tiền dự kiến đầu tư là bao nhiêu</span>
            <span>- Cơ cấu các tầng (nếu đã có định hướng): mỗi tầng bạn yêu cầu các phòng nào, không gian nào…(gara oto, để xe máy, khách, sinh hoạt chung, bếp, ăn, ngủ, wc chung hay riêng, tắm, phòng thờ, phòng giặt, sân chơi, sân phơi…)</span>
            <span>- Sơ qua ý thích của bạn về kiểu dáng kiến trúc, các sở thích riêng, các yêu cầu kỹ thuật khác…(nếu có thể)</span>
            <span>- Dư định khi nào khởi công xây nhà </span>
        </div>
    </div>
</div>

<script type="text/javascript">
    function SendTuVan2() {
        var obError = undefined;
        $("#guiYeuCauTuVan2 .required").each(function () {
            $(this).removeClass("boxShadow");
            if (obError == undefined && $(this).val() == "") {
                obError = $(this);
                return;
            }
        });

        if (obError != undefined) {
            obError.focus();
            obError.addClass("boxShadow");
            alert("Vui lòng nhập đầy đủ thông tin trong các ô có dấu * trước khi gửi");
            return false;
        }

        if (!CheckEmailValue($("#DisplayLoadControl_ctl00_ctl00_SubFormTuVan_tbEmail_RQ2").val())) {
            $("#DisplayLoadControl_ctl00_ctl00_SubFormTuVan_tbEmail_RQ2").focus();
            $("#DisplayLoadControl_ctl00_ctl00_SubFormTuVan_tbEmail_RQ2").addClass("boxShadow");
            alert("Bạn đã nhập email chưa chính xác, vui lòng nhập lại email");
            return false;
        }

        loading(true);
    };
</script>
            

<!-- <div class="post-slide">
    <h2 class="item-title">Các dự án khác</h2>
    <div class="list-body slick-slider slick-initialized" data-slick="{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:1,&quot;autoplay&quot;:true,&quot;responsive&quot;:[{&quot;breakpoint&quot;:767,&quot;settings&quot;:{&quot;slidesToShow&quot;:2}}]}">
        
<div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 298px; transform: translate3d(0px, 0px, 0px);">
    <div class="item slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" tabindex="0" style="width: 276px;">
    <a class="imgc" href="https://vcchomes.vn/du-an-mau-nha-pho-4-tang-hien-dai.html" title="Dự án mẫu nhà phố 4 tầng hiện đại" tabindex="0">
        <img alt="Dự án mẫu nhà phố 4 tầng hiện đại" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw" data-src="https://vcchomes.vn/pic/Customer/Picture_637086351107518544_HasThumb_Thumb.jpg">
    </a>
    <div class="item-body">
        <h3 class="item-title">
            <a href="https://vcchomes.vn/du-an-mau-nha-pho-4-tang-hien-dai.html" title="Dự án mẫu nhà phố 4 tầng hiện đại" tabindex="0">Dự án mẫu nhà phố 4 tầng hiện đại</a>
        </h3>
        <div class="item-text"><i class="fa fa-user"></i> Chủ đầu tư: Anh Tình</div>
        <div class="item-text"><i class="fa fa-map-marker"></i> Địa chỉ: Gia Lâm- Hà Nội</div>
        <div class="item-text"><i class="fa fa-map"></i> Diện tích: </div>
        <div class="item-text"><i class="fa fa-building"></i> Số tầng: 4 tầng</div>
    </div>
</div>

</div></div>

                
    </div>
</div> -->
</div>
</div>

<div class="subpage-right">
<div class="sidebar-1">
    <div class="list-header">
        <a class="list-title" href="/du-an.html" title="Danh mục">Danh mục</a>
    </div>
    <div class="list-body">
        <ul>
@foreach($xdnha as $v)
<li class="dropdown active show">
    <a href='{{url("$v->cat_slug.html")}}' title="{{$v->cat_name}}">
       {{$v->cat_name}}    
    </a>
    
</li> 
@endforeach


        </ul>
    </div>
</div>
            

<div class="advice gclass" id="guiYeuCauTuVan">
    <h2 class="list-title">Gửi yêu cầu tư vấn</h2>
    <div class="item-text">Sau khi nhận được yêu cầu của quý khách, Viettel sẽ liên hệ sớm nhất có thể để tư vấn cho quý vị </div>
    <div class="input">
        <input name="DisplayLoadControl$ctl00$ctl00$SubFormTuVanRight$tbHoTen_RQ" type="text" id="DisplayLoadControl_ctl00_ctl00_SubFormTuVanRight_tbHoTen_RQ" class="required" placeholder="Họ tên *">
    </div>
    <div class="input">
        <input name="DisplayLoadControl$ctl00$ctl00$SubFormTuVanRight$tbDiaChi_RQ" type="text" id="DisplayLoadControl_ctl00_ctl00_SubFormTuVanRight_tbDiaChi_RQ" placeholder="Địa chỉ">
    </div>
    <div class="input">
        <input name="DisplayLoadControl$ctl00$ctl00$SubFormTuVanRight$tbEmail_RQ" type="text" id="DisplayLoadControl_ctl00_ctl00_SubFormTuVanRight_tbEmail_RQ" class="required" placeholder="Email *">
    </div>
    <div class="input">
        <input name="DisplayLoadControl$ctl00$ctl00$SubFormTuVanRight$tbDienThoai_RQ" type="text" id="DisplayLoadControl_ctl00_ctl00_SubFormTuVanRight_tbDienThoai_RQ" class="required" placeholder="Điện thoại *">
    </div>
    <div class="input">
        <select name="DisplayLoadControl$ctl00$ctl00$SubFormTuVanRight$tbLoaiCongTrinh_RQ" id="DisplayLoadControl_ctl00_ctl00_SubFormTuVanRight_tbLoaiCongTrinh_RQ" class="ddlLoaiCongTrinh required">
    <option value="">Chọn loại công trình *</option>
    <option value="Biệt thự nhà vườn">Biệt thự nhà vườn</option>
    <option value="Lâu đài dinh thự">Lâu đài dinh thự</option>
    <option value="Nhà ống">Nhà ống</option>
    <option value="Văn phòng - Công sở">Văn phòng - Công sở</option>
    <option value="Không xác định">Không xác định</option>

</select>
    </div>
    <div class="input">
        <select name="DisplayLoadControl$ctl00$ctl00$SubFormTuVanRight$tbMucDauTu_RQ" id="DisplayLoadControl_ctl00_ctl00_SubFormTuVanRight_tbMucDauTu_RQ" class="ddlMucDauTu required">
    <option value="">Chọn mức đầu tư *</option>
    <option value="< 1 tỷ">&lt; 1 tỷ</option>
    <option value="1 - 1.5 tỷ">1 - 1.5 tỷ</option>
    <option value="1.5 - 2 tỷ">1.5 - 2 tỷ</option>
    <option value="2 - 3 tỷ">2 - 3 tỷ</option>
    <option value="3 - 5 tỷ">3 - 5 tỷ</option>
    <option value="5 - 10 tỷ">5 - 10 tỷ</option>
    <option value="> 10 tỷ">&gt; 10 tỷ</option>
    <option value="Không xác định">Không xác định</option>

</select>
    </div>
    <div class="input file">
        <span><b style="font-weight: normal;" id="filename">Chọn tệp tin</b> <i class="fa fa-paperclip" aria-hidden="true"></i></span>
        <input type="file" name="DisplayLoadControl$ctl00$ctl00$SubFormTuVanRight$flImage" id="DisplayLoadControl_ctl00_ctl00_SubFormTuVanRight_flImage" class="flImage required" accept=".doc,.docx,.pdf,.xls,.xlsx,.rar,.zip,.jpg,.png">
        <script>
            $(document).ready(function () {
                $('.flImage').change(function () {
                    var filename = $(this).val();
                    var lastIndex = filename.lastIndexOf("\\");
                    if (lastIndex >= 0) {
                        filename = filename.substring(lastIndex + 1);
                    }
                    $('#filename').text(filename);
                });
            });
        </script>
    </div>
    <div class="input">
        <input name="DisplayLoadControl$ctl00$ctl00$SubFormTuVanRight$tbTieuDe_RQ" type="text" id="DisplayLoadControl_ctl00_ctl00_SubFormTuVanRight_tbTieuDe_RQ" placeholder="Tiêu đề">
    </div>
    <div class="input">
        <textarea name="DisplayLoadControl$ctl00$ctl00$SubFormTuVanRight$tbYeuCau_RQ" rows="2" cols="20" id="DisplayLoadControl_ctl00_ctl00_SubFormTuVanRight_tbYeuCau_RQ" placeholder="Nội dung yêu cầu tư vấn"></textarea>
    </div>
    <div class="item-link">
        <a onclick="return SendTuVan();" id="DisplayLoadControl_ctl00_ctl00_SubFormTuVanRight_lbt_Submit" class="thar" href="javascript:__doPostBack('DisplayLoadControl$ctl00$ctl00$SubFormTuVanRight$lbt_Submit','')">Gửi yêu cầu <i class="fa fa-angle-double-right"></i></a>
    </div>
</div>

<script type="text/javascript">
    function SendTuVan() {
        var obError = undefined;
        $("#guiYeuCauTuVan .required").each(function () {
            $(this).removeClass("boxShadow");
            if (obError == undefined && $(this).val() == "") {
                obError = $(this);
                return;
            }
        });

        if (obError != undefined) {
            obError.focus();
            obError.addClass("boxShadow");
            alert("Vui lòng nhập đầy đủ thông tin trong các ô có dấu * trước khi gửi");
            return false;
        }

        if (!CheckEmailValue($("#DisplayLoadControl_ctl00_ctl00_SubFormTuVanRight_tbEmail_RQ").val())) {
            $("#DisplayLoadControl_ctl00_ctl00_SubFormTuVanRight_tbEmail_RQ").focus();
            $("#DisplayLoadControl_ctl00_ctl00_SubFormTuVanRight_tbEmail_RQ").addClass("boxShadow");
            alert("Bạn đã nhập email chưa chính xác, vui lòng nhập lại email");
            return false;
        }

        loading(true);
    };
</script>
            

<div class="project-hot gclass">
    <h2 class="list-title">
        <a class="rs" href="https://vcchomes.vn/cong-trinh-noi-bat.html" title="Công trình nối bật">Công trình nối bật</a>
    </h2>
    @foreach($postnoibat as $v)
<div class="item">
    <a class="imgc" href="{{url("bai-viet/$v->post_slug.html")}}" title="Dự án mẫu thiết kế nhà 2 tầng mái thái ">
        <img alt="Dự án mẫu thiết kế nhà 2 tầng mái thái " class=" lazyloaded" src="{{url('public/backend/post')}}/{{$v->post_img}}" data-src="{{url('public/backend/post')}}/{{$v->post_img}}">
    </a>
    <div class="item-body">
        <h3 class="item-title">
            <a href='{{url("bai-viet/$v->post_slug.html")}}' title="{{$v->post_name}}">{{$v->post_name}} </a>
        </h3>
        <div class="item-date"><i class="fa fa-calendar"></i> 07.11.2019 - 19 lượt xem</div>
    </div>
</div>
@endforeach


</div>
            

<div class="news-hot gclass">
    <h2 class="list-title"><a class="rs" href="Tin tức nổi bật" title="Tin tức nổi bật">Tin tức nổi bật</a></h2>
    
@foreach($postnoibat as $v)
<div class="item-wrap">
    <a class="imgc" href='{{url("bai-viet/$v->post_slug.html")}}' title="{{$v->post_name}}">
        <img alt="{{$v->post_name}}" class=" lazyloaded" src="{{url('public/backend/post')}}/{{$v->post_img}}" data-src="{{url('public/backend/post')}}/{{$v->post_img}}">
    </a>
    <div class="item-body">
        <h3 class="item-title">
            <a href='{{url("bai-viet/$v->post_slug.html")}}' title="{{$v->post_name}}">{{$v->post_name}}</a>
        </h3>
    </div>
</div>
@endforeach
        
</div>

            

<div class="banner-qc">
    
<a class="imgc" href="javascript:void(0);" target="" title="">
    <img src="https://vcchomes.vn/pic/banner/banner_637076766604165384.jpg" class=" lazyloaded" alt="" data-src="https://vcchomes.vn/pic/banner/banner_637076766604165384.jpg">
</a>

<a class="imgc" href="javascript:void(0);" target="" title="">
    <img src="https://vcchomes.vn/pic/banner/banner_637076766644809395.jpg" class=" lazyloaded" alt="" data-src="https://vcchomes.vn/pic/banner/banner_637076766644809395.jpg">
</a>
    
</div>
 </div>
</div>

</section>
    <section class="project hot">
        <div class="container">
            <div class="list">
                <h2 class="list-gheader">
                    <a href="#" title="">Dự án tiêu biểu</a>
                </h2>
                <div class="list-gdesc">
                    Tổng hợp những công trình Nhà phố đã thực hiện trong thời gian qua. Hy vọng Quý vị thấy được chất lượng cũng như chất xám mà Viettel đã đưa vào mỗi công trình.
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
          
               
           
            <div class="list-gdesc">
                Quý khách vui lòng nhập đày đủ các thông tin bên dưới, trường hợp công năng không có quý khách vui lòng để trống. Lưu ý, quý khách nhập diện tích xây dựng (không phải diện tích đất) để có kết quả tương đối chính xác nhất. Đơn giá phụ thuộc vào nhiều yêu tố như: Diện tích xây dựng, quy mô công trình, điều kiện thi công, chủng loại vật liệu,... kết quả tính này mang tính chất tham khảo, để được tư vấn chính xác nhất vui lòng liên hệ tới hotline 0123 456 789 của công ty chúng tôi. <br>
                Chân thành cảm ơn quý khách!
            </div>
            <div class="list-body">
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
    </section>
@endsection
@section('script')
<script>
  $(document).ready(function() {
              var owl = $('.sliderdetail');
              owl.owlCarousel({
                margin: 20,
                nav: true,
                loop: true,
                autoplay: false,
                autoplayTimeout: 5000,
                responsive: {
                  0: {
                    items: 1
                  },
                  600: {
                    items: 1
                  },
                  1000: {
                    items: 1
                  }
                }
              })
              $('.predetail').click(function() {
            owl.trigger('next.owl.carousel');
              })
              // Go to the previous item
              $('.nextdetail').click(function() {
                    // Parameters has to be in square bracket '[]'
                  owl.trigger('prev.owl.carousel', [300]);
              })     
            });
 /* var hs = $('.slider_carosel .item>img').height();
  var setheight = (hs-19)/2;
  $('.slider_right>div>img').height(setheight);*/
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