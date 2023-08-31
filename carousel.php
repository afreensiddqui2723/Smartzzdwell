<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<style>
body {
                background: #eee;
                font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
                font-size: 14px;
                color: #000;
                background: #404449;
                margin: 0;
                padding: 0;
              }
              
              .swiper-container {
                height: calc(100vh - 120px);
                margin: 60px;
              }
              
              .swiper-slide {
                overflow: hidden;
              }
              
              .slide-inner {
                position: absolute;
                width: 100%;
                height: 100%;
                left: 0;
                top: 0;
                background-size: cover;
                background-position: center;
              }
              img{
                display:block;
                width:100%;
                height:100%;
              }
              .copy {
                position: absolute;
                bottom: 15px;
                left: 0;
                right: 0;
                color: white;
                text-align: center;
                letter-spacing: 0.06em;
              }
              a {
                color: white;
              }
              @media (min-width: 200px) and (max-width: 700px) {
              .swiper-container {
               display: none;
              }
                }
                @media (min-width: 700px) and (max-width: 2000px) {
                  .resp{
                  display: none;
                }
                /* @media (min-width: 900px) and (max-width: 900px) {
                  .resp{
                  display: none;
                } */
                }
                            
</style>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/css/swiper.min.css">
          <div class="resp">
          <img src= assets/img/mobilelogo.gif>
          </div>
    
            <div class="swiper-container">
            
                <div class="swiper-wrapper">
              
                  <div class="swiper-slide">
                    <div class="slide-inner">
                    <img src="assets/img/banner.png" >
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="slide-inner" style="background-image:url(assets/img/banner2.png)"></div>
                  </div>
                  <div class="swiper-slide">
                    <div class="slide-inner">
                       <img src="assets/img/banner1.jpeg">
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="slide-inner">
                      <img src="assets/img/banner2.jpeg">
                    </div>
                  </div>

                </div>
                <div class="swiper-button-next swiper-button-white"></div>
                <div class="swiper-button-prev swiper-button-white"></div>
              </div>
              <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/js/swiper.min.js"></script>
           <script>
                var interleaveOffset = 0.5;

                var swiperOptions = {
                  loop: true,
                  speed: 1000,
                  grabCursor: true,
                  autoplay: true,
                  watchSlidesProgress: true,
                  mousewheelControl: true,
                  keyboardControl: true,
                  navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev"
                  },
                  on: {
                    progress: function() {
                      var swiper = this;
                      for (var i = 0; i < swiper.slides.length; i++) {
                        var slideProgress = swiper.slides[i].progress;
                        var innerOffset = swiper.width * interleaveOffset;
                        var innerTranslate = slideProgress * innerOffset;
                        swiper.slides[i].querySelector(".slide-inner").style.transform =
                          "translate3d(" + innerTranslate + "px, 0, 0)";
                      }      
                    },
                    touchStart: function() {
                      var swiper = this;
                      for (var i = 0; i < swiper.slides.length; i++) {
                        swiper.slides[i].style.transition = "";
                      }
                    },
                    setTransition: function(speed) {
                      var swiper = this;
                      for (var i = 0; i < swiper.slides.length; i++) {
                        swiper.slides[i].style.transition = speed + "ms";
                        swiper.slides[i].querySelector(".slide-inner").style.transition =
                          speed + "ms";
                      }
                    }
                  }
                };
                
                var swiper = new Swiper(".swiper-container", swiperOptions);

           </script> 