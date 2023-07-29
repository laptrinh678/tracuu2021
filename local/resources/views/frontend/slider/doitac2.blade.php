<div class="container-fluid slider_patner"> 
             <div class="large-12 columns">
            <div class="owl-carousel owl-theme patner">
              @foreach($slider as $val)
              <div class="item">
                <img src="{{url('public/backend/slider')}}/{{$val->img}}" alt="">
              </div> 
              @endforeach     
            </div>
        </div>  
</div>
<script>
  $(document).ready(function() {
              var owl = $('.patner');
              owl.owlCarousel({
                margin: 10,
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
          
            });
</script>