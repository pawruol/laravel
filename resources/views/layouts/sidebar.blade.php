<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="{{asset('resources/assets/libs/slick/slick.css')}}"/>
  <link rel="stylesheet" type="text/css" href="{{asset('resources/assets/libs/slick/slick-theme.css')}}"/>
  <link rel="stylesheet" type="text/css" href="{{asset('resources/assets/libs/fancybox/dist/jquery.fancybox.min.css')}}" />

  <link rel="stylesheet" type="text/css" href="{{asset('resources/assets/css/reset.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('resources/assets/css/bootstrap-grid.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('resources/assets/css/main.css')}}">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Title</title>
</head>
<body>

    <div class="notification-bar active">
    <div class="message-box success">Your message goes here!<a href="#">Find more</a><div class="close"><i class="material-icons">close</i></div></div>
    </div>

    @include('parts.header')

    <div class="spacer" style="height: 100px;"></div>

    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4">
                @yield('sidebar')
            </div>
            <div class="col-12 col-md-8">
                @yield('container')
            </div>
        </div>
    </div>

    @include('parts.footer')

    <script type="text/javascript" src="resources/assets/js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="resources/assets/libs/slick/slick.min.js"></script>
    <script type="text/javascript" src="resources/assets/libs/fancybox/dist/jquery.fancybox.min.js"></script>
    <script type="text/javascript" src="resources/assets/js/main.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){
          $('.slider').slick({
            dots: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000
          });
          $('.slider-products-1').slick({
            dots: true,
            slidesToShow: 4,
            slidesToScroll: 1,
            responsive: [
              {
                breakpoint: 1024,
                settings: {
                  slidesToShow: 3,
                  slidesToScroll: 3,
                  infinite: true,
                  dots: true
                }
              },
              {
                breakpoint: 600,
                settings: {
                  slidesToShow: 2,
                  slidesToScroll: 2
                }
              },
              {
                breakpoint: 480,
                settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1
                }
              }
              // You can unslick at a given breakpoint now by adding:
              // settings: "unslick"
              // instead of a settings object
            ]
          });














          /*--------------*/



      // Main/Product image slider for product page
          $('#detail .main-img-slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: true,
            arrows: true,
            fade:true,
            autoplay: true,
            autoplaySpeed: 4000,
            speed: 300,
            lazyLoad: 'ondemand',
            asNavFor: '.thumb-nav',
            prevArrow: '<div class="slick-prev"><i class="i-prev"></i><span class="sr-only sr-only-focusable">Previous</span></div>',
            nextArrow: '<div class="slick-next"><i class="i-next"></i><span class="sr-only sr-only-focusable">Next</span></div>'
          });
      // Thumbnail/alternates slider for product page
          $('.thumb-nav').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            infinite: true,
            centerPadding: '0px',
            asNavFor: '.main-img-slider',
            dots: false,
            arrows: false,
            centerMode: false,
            draggable: true,
            speed:200,
            focusOnSelect: true
          });


      //keeps thumbnails active when changing main image, via mouse/touch drag/swipe
          $('.main-img-slider').on('afterChange', function(event, slick, currentSlide, nextSlide){
            //remove all active class
            $('.thumb-nav .slick-slide').removeClass('slick-current');
            //set active class for current slide
            $('.thumb-nav .slick-slide:not(.slick-cloned)').eq(currentSlide).addClass('slick-current');
          });




        });
      </script>

</body>
</html>
