  <!--menu desktop -->
  <nav class="navbar navbar-inverse menudesktop ">
    <div id="menu_click">
     <div class="row">
  	    <ul class="nav navbar-nav" >
          <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="{{url('')}}">TRANG CHỦ</a> 
          </li>
          <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="{{url('')}}">GIỚI THIỆU</a> 
          </li>

          @foreach($listcatepro as $v)
          @if($v->parent_id==0)
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="">
                  {{$v->cat_name}}
                <i class="fa fa-chevron-down" aria-hidden="true"></i>
          </a>

          <div class="xoaydiv"></div>
            <ul class="dropdown-menu" id="dropdownlaptrinh">
              <?php 
                 $datacon = DB::table('cateproduct')->where('parent_id', $v->id)->where('status','>',0)->get();
                ?>
         
              @foreach($datacon as $val)
                 <li> <a href="{{url("$val->cat_slug.html")}}"><i class="fa fa-angle-double-right" aria-hidden="true"></i>  {{$val->cat_name}}</a></li>
              @endforeach()
             
            
            </ul>

          </li>
          @endif
          @endforeach()

          <li style="border-right: none !important"><a href="{{url("$lienhe->cat_slug.html")}}">{{$lienhe->cat_name}}</a></li> 
      
  	     
  	    </ul>
  	</div>
    </div>
  </nav>
<!-- endmenudestop-->
<!-- menu mobi-->
<nav class="navbar navbar-inverse menutopmobi">
  <div class="container">
    <div class="row">
    <div class="navbar-header">
      <a class="logodangquang" href="{{url('')}}">
        <img src="{{url('public/backend/header')}}/{{$HF->logo1}}" alt="">
      </a>
    </div>
    <ul class="nav navbar-nav content_menu">
      <div class="mottram">
          <div class="nammuoi">
         <a class="navbar-brand logolap logolapmobi" href="{{url('')}}">
        <img src="{{url('public/backend/header')}}/{{$HF->logo1}}" alt="">
      </a>
      </div>
      <div class="nammuoi clickitem">
          <a href="javascript:void(0)">
        <i class="fa fa-times" id="clickitemfatime" aria-hidden="true"></i></a>
      </div>
      </div>
      
       
      
      
    <ul class="list-group mottram">
          <li class="list-group-item catename">DANH SÁCH DANH MỤC</li>
          @foreach($listcatepro as $v)
          @if($v->parent_id==0)
          <li class="list-group-item itemcate itemcate2">
            <div> <i class="fa fa-angle-double-right" aria-hidden="true"></i> 
              <a class="dropdown-toggle" data-toggle="dropdown" href="">
                  {{$v->cat_name}}
                
             </a>
           
          </div>
           
            <ul class="catemenu">
              <?php 
                 $datacon = DB::table('cateproduct')->where('parent_id', $v->id)->get();
                ?>
              @foreach($datacon as $val)
              <li ><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="{{url("danh-muc/$val->cat_slug.html")}}">{{$val->cat_name}}</a></li>
               @endforeach()
            </ul>

          </li>
            @endif
          @endforeach()
         
        </ul>

     
      




    </ul>
    <a id="clickmenu" href="javascript:void(0)" style="display: none;">
    <i class="fa fa-bars" id="clickitem" aria-hidden="true"></i>
    </a>

  </div>
</div>
  </div>
</nav>





<!-- end menu mobi-->
<script>
  $(document).ready(function()
  {
    $('#clickitem').click(function()
    {
      $('.content_menu').show(300);
    });
    $('#clickitemfatime').click(function()
    {
      $('.content_menu').hide(300);
      $('#clickitem').show();
    });
  });
</script>
<script>
  $(document).ready(function()
  {
    $('.menudesktop .dropdown').hover(
    function()
    {
      $(this).find("ul:first").slideDown(200);
       $(this).find(".xoaydiv:first").show();

    },function()
    {
       $(this).find("ul:first").hide(100);
       $(this).find(".xoaydiv:first").hide();
    });

    $('.menutopmobi .dropdown').hover( function()
    {
       $(this).find("ul:first").slideDown(200);
       $(this).find(".fa-chevron-up").show();
       $(this).find(".fa-chevron-down").hide();


    }, function()
    {
       $(this).find("ul:first").hide(200);
        $(this).find(".fa-chevron-up").hide();
       $(this).find(".fa-chevron-down").show();
    });





  });
</script>