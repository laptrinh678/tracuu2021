
 <div class="large-12 columns">
<div class="owl-carousel owl-theme slider_caroseltop">
  
  <div class="item"><img src="{{url('public/frontend/frontend_josh')}}/images/s1.jpg" alt="slider-image">
        </div>
       
        <div class="item"><img src="{{url('public/frontend/frontend_josh')}}/images/s3.jpg" alt="slider-image">
        </div>
</div>  

<script>
  $(document).ready(function()
  {

              var owl = $('.slider_caroseltop');
              owl.owlCarousel({
                margin: 0,
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
              });

              var widthBrowser = window.innerWidth;
              var wi = $('.columns .owl-dots').width();
              var hieu = (widthBrowser - wi)/2;

              $(".columns .owl-dots").css("margin-left",hieu);
             console.log(widthBrowser);
             console.log(hieu);
             console.log(wi);

    });
  
 
</script>