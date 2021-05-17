<!DOCTYPE html>
    <html lang="fa">
      <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <title>
            @yield('title')فروشگاه اینترنتی دیجی‌کالا
        </title>
        <link rel="icon" type="image/jpeg" href="{{ asset('/img/logo.jpeg') }}"/>

        <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/swiper-bundle.min.css') }}">

        <!--fonts-->
        <link rel="stylesheet" href="{{ asset('/fonts/Shabnam-Bold-FD.eot') }}">
        <link rel="stylesheet" href="{{ asset('/fonts/Shabnam-Bold-FD.ttf') }}">
        <link rel="stylesheet" href="{{ asset('/fonts/Shabnam-Bold-FD.woff') }}">
        <link rel="stylesheet" href="{{ asset('/fonts/Shabnam-Bold-FD.woff2') }}">

        <!--fontawesome-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

        <!--bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

      </head>
      <body>
  <!-- Start project here-->
        <header>
           @include('components.header')
        </header>


    @include('sections.slider')

        <main>
            @yield('content')
        </main>


      <!--footer-->
      <footer>
         @include('components.footer')
      </footer>
<!-- End project here-->


<script src="/js/jquery-3.6.0.js"></script>
<script src="/js/jquery.countdown.min.js"></script>
<script src="/js/swiper-bundle.min.js"></script>
<script src="/js/script.js"></script>
<script src="/js/app.js"></script>

<!--bootstrap-->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

</body>
</html>
