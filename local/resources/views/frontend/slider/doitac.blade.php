<div class="container-fluid slider_home"> 
             <div class="large-12 columns">
            <div class="owl-carousel owl-theme patner">
              @foreach($slider as $val)
              <div class="item">
                <img src="{{url('public/backend/slider')}}/{{$val->img}}" alt="">
              </div> 
              @endforeach     
            </div>
        </div>  
  
    <button id="btn-next2">next</button>
    <button id="btn-pre2">Pre</button>  
     
</div>
<script>
  $(document).ready(function() {
              var owl = $('.patner');
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
                    items: 6
                  },
                  1000: {
                    items: 6
                  }
                }
              })
              $('#btn-pre2').click(function() {
            owl.trigger('next.owl.carousel');
              })
              // Go to the previous item
              $('#btn-next2').click(function() {
                    // Parameters has to be in square bracket '[]'
                  owl.trigger('prev.owl.carousel', [300]);
              })     
            });
 /* var hs = $('.slider_carosel .item>img').height();
  var setheight = (hs-19)/2;
  $('.slider_right>div>img').height(setheight);*/
</script>