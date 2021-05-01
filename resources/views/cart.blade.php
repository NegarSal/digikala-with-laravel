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
 <x-header/>

<!--tabs in header-->
<div class="tab" style="padding-top: 80px" >
    <button class="tablinks" onclick="Cart(event, 'Buy')">سبد خرید</button>
    <button class="tablinks" onclick="Cart(event, 'Nextbuy')">لیست خرید بعدی</button>
  </div>

  <!--TAB 1-->
  <div id="Buy" class="tabcontent"  style="display:block;">
    <div class="row">
        <div class="col-sm-3">
            <a href="login" style="text-decoration: none;">
            <div class="card">
              <div class="card-body" dir="rtl">
                <h5 class="card-title"><i class='fas fa-file-import' style='font-size:18px; color:orange;'></i> ورود به حساب کاربری </h5><br>
                <p class="card-text">
                  برای مشاهده محصولاتی که پیش‌تر به سبد خود اضافه کرده‌اید لطفا وارد شوید.
                </p>
              </div>
            </div>
            </a>
          </div>
        <div class="col-sm-9">
            <div class="card mb-3">
                <img src="{{ asset('img/shopping-cart-Top.jpg') }}" class="card-img-top mx-auto" style="width: 95px; height:95px;">
                <div class="card-body" style="text-align: center">
                  <h5 class="card-title">سبد خرید شما خالی است!</h5>
                  <p class="card-text">می‌توانید برای مشاهده محصولات بیشتر به صفحات زیر بروید</p>
                  <p class="card-text"><a href="#">تخفیف‌ها و پیشنهادها </a> | <a href="#">محصولات پرفروش روز </a></p>
                </div>
              </div>
        </div>
      </div>
    </div>
    <!--END TAB 1-->

  <!--TAB 2-->
  <div id="Nextbuy" class="tabcontent">
  <div class="row">
      <div class="col-sm-3">
        <a href="login" style="text-decoration: none;">
          <div class="card">
            <div class="card-body" dir="rtl">
              <h5 class="card-title"><i class='fas fa-file-import' style='font-size:18px; color:orange;'></i> ورود به حساب کاربری </h5><br>
              <p class="card-text">
                برای مشاهده محصولاتی که پیش‌تر به سبد خود اضافه کرده‌اید لطفا وارد شوید.
              </p>
            </div>
          </div>
        </a>
        </div>
      <div class="col-sm-9">
          <div class="card mb-3">
              <img src="{{ asset('img/checklist.jpg') }}" class="card-img-top mx-auto" style="width: 80px; height:80px;">
              <div class="card-body" style="text-align: center">
                <h5 class="card-title">!لیست خرید بعدی شما خالی است</h5><br>
                <p class="card-text">شما می‌توانید محصولاتی که به سبد خرید خود افزوده‌اید و فعلا قصد خرید آن‌ها را</p>
                <p class="card-text">ندارید، در لیست خرید بعدی قرار داده و هر زمان مایل بودید آن‌ها را به سبد خرید</p>
                <p class="card-text">اضافه کرده و خرید آن‌ها را تکمیل کنید.</p>
              </div>
            </div>
      </div>
    </div>
  </div>
  <!--END TAB 2-->

 <!--CardPart-->
 <section>
    <div class="container"  style="padding-top: 50px" >
        <div class="row my-4">
        </div>
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <a href="#"><img src="{{ asset('img/a.png') }}" alt="branch1" class="img-thumbnail"></a>
            </div>
            <div class="col-lg-3 col-sm-6">
              <a href="#"><img src="{{ asset('img/b.png') }}" alt="branch1" class="img-thumbnail"></a>
            </div>
            <div class="col-lg-3 col-sm-6">
              <a href="#"><img src="{{ asset('img/c.png') }}" alt="branch1" class="img-thumbnail"></a>
            </div>
            <div class="col-lg-3 col-sm-6">
              <a href="#"><img src="{{ asset('img/d.png') }}" alt="branch1" class="img-thumbnail"></a>
            </div>
        </div>
    </div>
  </section>
<!--End CardPart-->

<!--headphone-btn-->
   <button class="btn btn-danger btn-lg"><i class='fas fa-headset' style='font-size:30px; color:White'></i></button>


<!--footer-->
<x-footer/>


<script src="js/jquery-3.6.0.js"></script>
<script src="js/jquery.countdown.min.js"></script>
<script src="js/swiper-bundle.min.js"></script>
<script src="js/script.js"></script>
  </body>
  </html>
