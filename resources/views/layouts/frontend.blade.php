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

    <!--fonts-->
    <link rel="stylesheet" href="{{ asset('fonts/Shabnam-Bold-FD.eot') }}">
    <link rel="stylesheet" href="{{ asset('fonts/Shabnam-Bold-FD.ttf') }}">
    <link rel="stylesheet" href="{{ asset('fonts/Shabnam-Bold-FD.woff') }}">
    <link rel="stylesheet" href="{{ asset('fonts/Shabnam-Bold-FD.woff2') }}">

    <!--fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">


  </head>
  <body>

    <!-- Start project here-->
   

        <main>
            @yield('content')
        </main>

       @include('layouts.inc.middle')

       @include('layouts.inc.front-footer')

    <!-- End project here-->

    <script src="js/jquery-3.6.0.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/swiper-bundle.min.js"></script>
    <script src="js/script.js"></script>

  </body>
</html>

