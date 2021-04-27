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

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">


        <style>
            header .header .headerRight .logo{
               background-size: contain;
               background: url("img/logo.svg") no-repeat center;
               display: block;
               width: 120px;
               height: 30px;
               margin-left: 10px;
           }
           </style>

      </head>
<body>
<!--navbar-->
@include('layouts.inc.front-navbar')

<!--middlepart-->
<main>
    <div class="container" id="product">
        <div class="navBar flex">
            <nav>
                <ul class="flex">
                    <li><a href="">دیجی کالا</a></li>
                    <li><a href="">کالای دیجیتال</a></li>
                    <li><a href="">موبایل</a></li>
                    <li><a href="">گوشی موبایل</a></li>
                </ul>
            </nav>
            <div class="feedback">
                <a href="">کالای خود را در دیجی کالا بفروشید</a>
            </div>
        </div>
        <article class="flex">
            <section class="gallery">
                <div class="galleryOption">
                    <ul>
                        <li class="flex">
                            <i class='far fa-heart'></i>
                            <div class="tooltip">افزودن به علاقه مندی</div>
                        </li>
                        <li class="flex">
                            <i class='fas fa-share-alt'></i>
                            <div class="tooltip">اشتراک گذاری</div>
                        </li>
                        <li class="flex">
                            <i class='far fa-bell'></i>
                            <div class="tooltip">اطلاع رسانی شگفت انگیز</div>
                        </li>
                        <li class="flex">
                            <i class='fas fa-chart-line'></i>
                            <div class="tooltip">نمودار قیمت</div>
                        </li>
                        <li class="flex">
                            <i class='far fa-copy'></i>
                            <div class="tooltip">مقایسه</div>
                        </li>
                    </ul>
                </div>
                <div class="image">
                    <img src="img/image1280/p1.jpg" alt="">
                </div>
                <div class="imgGallery">
                    <ul class="flex">
                        <li><img src="{{ asset('img/thumbnail/p.1.jpg') }}" alt=""></li>
                        <li><img src="{{ asset('img/thumbnail/p.2.jpg') }}" alt=""></li>
                        <li><img src="{{ asset('img/thumbnail/p.3.jpg') }}" alt=""></li>
                        <li><img src="{{ asset('img/thumbnail/p.4.jpg') }}" alt=""></li>
                        <li><img src="{{ asset('img/thumbnail/p.5.jpg') }}" alt=""></li>
                    </ul>
                </div>
            </section>
            <section class="description">
                <div class="proTitle">
                    <h1>گوشی موبایل شیائومی مدل POCO M3 M2010J19CG دو سیم‌ کارت ظرفیت 128 گیگابایت</h1>
                </div>
                <div class="proText">
                    <span class="proTitle2">Xiaomi POCO X3 M2007J20CG Dual SIM 128GB Mobile Phone</span>
                    <div class="star flex">
                        <div class="item"><i class="fas fa-star"></i>۴.۳(۴۱۳)</div>
                        <div class="comments">۵۱۶ دیدگاه کاربران</div>
                        <div class="qa">۱۵۷ پرسش و پاسخ</div>
                    </div>
                    <div class="text"><i class="far fa-lightbulb"></i>پیشنهاد شده توسط بیش از ۲۳۰ نفر از خریداران</div>
                    <div class="proColor">رنگ:
                       <i class="fa fa-circle"  style="color: #ffeb3b"></i><i class="fa fa-circle"  style="color: #2196f3"></i><i class="fa fa-circle"></i>
                    </div>
                    <div class="proFeatures">ویژگی های کالا
                        <ul class="more">
                            <li>حافظه داخلی:128 گیگابایت</li>
                            <li>شبکه های ارتباطی: 4G، 3G، 2G</li>
                            <li>دوربین‌های پشت گوشی: 3 ماژول دوربین</li>
                            <li>سیستم عامل:Android</li>
                            <li>توضیحات سیم کارت: سایز نانو (8.8 × 12.3 میلی‌متر)</li>
                            <span id="dots" style="color: #2196f3">+</span>
                            <span id="more">
                            <li>مقدار RAM:4 گیگابایت</li>
                            <li>رزولوشن عکس:48 مگاپیکسل</li>
                            <li>نسخه سیستم عامل: Android 10</li>
                            <li>فناوری صفحه‌نمایش:IPS</li>
                            <li>تعداد سیم کارت:دو</li>
                            </span>
                        <button onclick="myFunction()" id="myBtn">موارد بیشتر</button>
                        </ul>
                        <div class="information flex"><i class="fas fa-info-circle"></i>
                            هشدار سامانه همتا: حتما در زمان تحویل دستگاه،
                             به کمک کد فعال‌سازی چاپ شده روی جعبه یا کارت گارانتی، دستگاه را از طریق #7777*،
                             برای سیم‌کارت خود فعال‌سازی کنید. آموزش تصویری در آدرس اینترنتی hmti.ir/05
                        </div>
                    </div>
                </div>
            </section>
            <section class="details">
                <div class="probox">
                    <div class="seller flex">
                        <div class="seller1">فروشنده</div>
                        <div class="seller2">۴ فروشنده دیگر</div>
                    </div>
                    <div class="garanti"><i class="fas fa-archive"></i> کالا پلاس <button>برگزیده</button><i class="fas fa-angle-left" id="angle"></i>
                        <div>عملکرد: ۵از۵ | ۸۸.۶٪ رضایت از کالا</div>
                    </div>
                    <div class="garanti"><i class="	fas fa-shield-alt"></i> گارانتی۱۸ماهه وی دو سل</div>
                    <div class="info"><i class="far fa-save"></i> موجود در انبار دیجی کالا<i class="fas fa-angle-left" id="angle"></i>
                       <div class="truck"><i class="fas fa-truck"></i> ارسال دیجی کالا</div>
                    </div>
                    <div class="price">
                        <div>قیمت فروشنده<i class="far fa-question-circle"></i></div>
                        <div class="proprice">۴,۸۴۰,۰۰۰ <span>تومان</span></div>
                        <div class="eye"><i class="far fa-eye"></i>۲۰+ نفر در حال بازدید این کالا می‌باشند.</div>
                        <a href="" class="basket">افزودن به سبد خرید</a>
                    </div>
                </div>
            </section>
        </article>
    </div>
</main>








<!--footer-->
@include('layouts.inc.front-footer')




<script>
    function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "موارد بیشتر";
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "بستن";
    moreText.style.display = "inline";
  }
}
</script>
</body>
</html>


