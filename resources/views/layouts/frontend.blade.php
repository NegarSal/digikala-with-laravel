<!DOCTYPE html>
<html lang="fa">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>
        @yield('title')فروشگاه اینترنتی دیجی‌کالا
    </title>
    <link rel="icon" type="image/jpeg" href="{{ asset('img/logo.jpeg') }}"/>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  </head>
  <body>

    <!-- Start project here-->
       @include('layouts.inc.front-navbar')
    <main>
        @yield('content')
    </main>

       @include('layouts.inc.middle')

       @include('layouts.inc.front-footer')

    <!-- End project here-->

    <script src="js/jquery-3.6.0.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/swiper-bundle.min.js"></script>

<script>
    var swiper0 = new Swiper('.s0', {
      slidesPerView: 1,
      spaceBetween: 30,
      loop: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
</script>
<script>
        var swiper1 = new Swiper('.s1', {
          slidesPerView: 4,
          spaceBetween: 20,
          direction: getDirection(),
          navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
          },
          on: {
            resize: function () {
              swiper.changeDirection(getDirection());
            }
          }
        });

        function getDirection() {
          var windowWidth = window.innerWidth;
          var direction = window.innerWidth <= 760 ? 'vertical' : 'horizontal';

          return direction;
        }
</script>
<script>
    $('[data-countdown]').each(function() {
  var $this = $(this), finalDate = $(this).data('countdown');
  $this.countdown(finalDate, function(event) {
    $this.html(event.strftime('%H:%M:%S'));
  });
});
</script>

  </body>
</html>

