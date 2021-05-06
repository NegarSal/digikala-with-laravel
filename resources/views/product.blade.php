<title>
    @yield('title') مشخصات , قیمت و خرید گوشی موبایل
</title>

<x-header/>

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
                        <ul class="readMore">
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
                        <div class="plusbox flex">
                            <div class="plusbox1"><i class="fas fa-cog"></i>خدمات ویژه کاربران دیجی‌پلاس</div>
                            <div class="plusbox2">شما هم عضو شوید <i class="fas fa-angle-left" id="angle"></i></div>
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
                        <a href="" class="basket">افزودن به سبد </a>
                    </div>
                </div>
                <div class="bestPrice">آیا قیمت مناسب تری سراغ دارید؟<i class="fas fa-tag"></i></div>
            </section>
        </article>
        <article class="deliver container">
            <div class="deltitle">لیست فروشندگان این کالا</div>
            <div class="supplier flex">
                <div class="suppliergaranti"><i class="fas fa-archive"></i> کالا پلاس <button>برگزیده</button>
                    <div class="supplierrating">عملکرد: ۴ از ۵</div>
                </div>
                <div class="suppliertruck"><i class="fas fa-truck"></i> ارسال دیجی کالا</div>
                <div class="suppliergaranti"><i class="	fas fa-shield-alt"></i> گارانتی۱۸ماهه وی دو سل</div>
                <div class="supplierproprice">۴,۸۴۰,۰۰۰ <span>تومان</span></div>
                <a href="" class="supplierbasket">افزودن به سبد </a>
            </div>

            <div class="supplier flex">
                <div class="suppliergaranti"><i class="fas fa-archive"></i> راتین رایا
                    <div class="supplierrating">عملکرد: ۴ از ۵</div>
                </div>
                <div class="suppliertruck"><i class="fas fa-truck"></i> ارسال دیجی کالا</div>
                <div class="suppliergaranti"><i class="	fas fa-shield-alt"></i>گارانتی ۱۸ ماهه پارس پردیس</div>
                <div class="supplierproprice">۴,۸۴۰,۰۰۰ <span>تومان</span></div>
                <a href="" class="supplierbasket">افزودن به سبد </a>
            </div>

            <div class="supplier flex" id="suplast">
                <div class="suppliergaranti"><i class="fas fa-archive"></i> رانسب شاپ</div>
                <div class="suppliertruck"><i class="fas fa-truck"></i> ارسال دیجی کالا</div>
                <div class="suppliergaranti"><i class="	fas fa-shield-alt"></i> گارانتی ۱۸ ماهه کسری پارس</div>
                <div class="supplierproprice">۴,۸۴۰,۰۰۰ <span>تومان</span></div>
                <a href="" class="supplierbasket">افزودن به سبد </a>
            </div>
        </article>
<!--first-slider-->
<div class="swiper-container s1 swiper1">
    <div class="headline">
        <span>محصولات مرتبط</span>
    </div>
    <div class="swiper-wrapper">
        <div class="swiper-slide">
          <a class="card"  href="">
            <div class="image">
                <img src="{{ asset('img/m.1.jpg') }}">
            </div>
            <div class="title">
                محصول شماره ۱
            </div>
            <div class="price">
                <div class="oldPrice">
                  <del>۲۳۰۰۰</del>
                  <span class="percent">۲۰٪</span>
                </div>
                <div class="newPrice">
                    <span>۲۸۰۰۰</span>
                    <span>تومان</span>
                </div>
            </div>
          </a>
        </div>
        <div class="swiper-slide">
          <a class="card" href="">
            <div class="image">
                <img src="{{ asset('img/m.3.jpg') }}" alt="">
            </div>
            <div class="title">
                محصول شماره ۲
            </div>
            <div class="price">
                <div class="oldPrice">
                  <del>۲۳۰۰۰</del>
                  <span class="percent">۲۰٪</span>
                </div>
                <div class="newPrice">
                    <span>۲۸۰۰۰</span>
                    <span>تومان</span>
                </div>
            </div>
          </a>
        </div>
        <div class="swiper-slide">
         <a class="card" href="">
            <div class="image">
                <img src="{{ asset('img/m.6.jpg') }}" alt="">
            </div>
            <div class="title">
                محصول شماره ۳
            </div>
            <div class="price">
                <div class="oldPrice">
                  <del>۲۳۰۰۰</del>
                  <span class="percent">۲۰٪</span>
                </div>
                <div class="newPrice">
                    <span>۲۸۰۰۰</span>
                    <span>تومان</span>
                </div>
            </div>
         </a>
        </div>
        <div class="swiper-slide">
         <a class="card" href="">
            <div class="image">
                <img src="{{ asset('img/m.4.jpg') }}" alt="">
            </div>
            <div class="title">
                محصول شماره ۴
            </div>
            <div class="price">
                <div class="oldPrice">
                  <del>۲۳۰۰۰</del>
                  <span class="percent">۲۰٪</span>
                </div>
                <div class="newPrice">
                    <span>۲۸۰۰۰</span>
                    <span>تومان</span>
                </div>
            </div>
         </a>
        </div>
        <div class="swiper-slide">
         <a class="card" href="">
            <div class="image">
                <img src="{{ asset('img/m.5.jpg') }}" alt="">
            </div>
            <div class="title">
                محصول شماره ۵
            </div>
            <div class="price">
                <div class="oldPrice">
                  <del>۲۳۰۰۰</del>
                  <span class="percent">۲۰٪</span>
                </div>
                <div class="newPrice">
                    <span>۲۸۰۰۰</span>
                    <span>تومان</span>
                </div>
            </div>
         </a>
        </div>
        <div class="swiper-slide">
         <a class="card" href="">
            <div class="image">
                <img src="{{ asset('img/m.3.jpg') }}" alt="">
            </div>
            <div class="title">
                محصول شماره ۶
            </div>
            <div class="price">
                <div class="oldPrice">
                  <del>۲۳۰۰۰</del>
                  <span class="percent">۲۰٪</span>
                </div>
                <div class="newPrice">
                    <span>۲۸۰۰۰</span>
                    <span>تومان</span>
                </div>
            </div>
         </a>
        </div>
    </div>
    <div class="swiper-button-next next"></div>
    <div class="swiper-button-prev prev"></div>
    </div>

    </section>
<!--tabs-->
<section class="tab">
    <ul class="flex" id="tabs">
        <li class="active"><a>نقد و بررسی</a></li>
        <li><a>بررسی تخصصی</a></li>
        <li><a>مشخصات</a></li>
        <li><a>دیدگاه کاربران</a></li>
        <li><a>پرسش و پاسخ</a></li>
    </ul>
    <div id="tabChildes">
        <div class="tab1 hidden">
            <div class="tba1Container">
                <h2 class="h2">نقد و بررسی اجمالی
                    <span>Xiaomi POCO M3 M2010J19CG Dual SIM 128GB Mobile Phone</span>
                </h2>
                <section class="expertSummary flex">
                    <div class="right">
                        گوشی موبایل شیائومی مدل POCO M3 M2010J19CG دو سیم‌ کارت ظرفیت 128 گیگابایت از جمله اولین سری محصولات برند شیائومی است. این محصول دارای ساختاری متوازن و خوش‌ساخت بدون پشتیبانی از تکنولوژی 5G در تاریخ نوامبر 2020 روانه بازار شده است. این محصول از فریم پلاستیکی ساخته شده است که قاب جلو شیشه‌ای جلوه ویژه‌ای به این مدل بخشیده است.
                        صفحه‌نمایش گوشی موبایل شیائومی مدل POCO M3 M2010J19CG دو سیم‌ کارت ظرفیت 128 گیگابایت در اندازه 6.53 منتشر شده است. این صفحه‌نمایش کاملاً تمام‌صفحه است و در بالا وسط اثری از بریدگی یا حفره دوربین سلفی وجود دیده می‌شود. دوربین سلفی این محصول دارای حسگر 8 مگاپیکسلی است .
                        صحفه‌نمایش گوشی موبایل شیائومی مدل POCO M3 M2010J19CG با استفاده از فناوری Corning Gorilla Glass 3 در برابر خط‌وخش و صدمات احتمالی محافظت می‌شود. ویژگی دیگر Poco M3 مجهز شدن به حسگر اثرانگشت در زیر کنار گوشی که نشان از بالارده بودن محصول دارد.
                        گفتنی است ۳ دوربین که سنسور اصلی آن 48 مگاپیکسلی است در قسمت پشتی این گوشی جا خوش کرده‌اند. این دوربین‌ها قادر
                           هستند ویدئوی Full HD را ثبت و ضبط کنند. دوربین‌ سلفی این محصول هم به سنسوری 8 مگاپیکسلی مجهز شده است. بلوتوث نسخه 5.0، نسخه 10 سیستم عامل اندروید و باتری شگفت‌انگیز 6000 میلی‌آمپرساعتی از دیگر ویژگی‌‌های این گوشی جدید هستند.
                           گوشی موبایل شیائومی مدل POCO M3 M2010J19CG دو سیم‌ کارت ظرفیت 128 گیگابایت دارای قابلیت reverse charging است.
                            شارژ معکوس یا همون (reverse charging) ویژگی است که به شما این امکان را می‌دهد که از تلفن خود برای شارژ دستگاه‌های دیگر مانند تلفن‌های هوشمند، ساعت‌های هوشمند و باندهای هوشمندی که از شارژ بی‌سیم پشتیبانی می‌کنند، استفاده کنید.
                             برای اینکه بتوانید آنها را به‌صورت بی‌سیم شارژ کنید، دستگاه شما باید از پروتکل شارژ بی‌سیم Qi پشتیبانی کند.
                    </div>
                    <div class="miniBox">
                        <div class="card">
                            <div class="proCard1"><img src="{{ asset('img/m0.jpg') }}" alt=""></div>
                            <div class="title2">
                               <div class="proCard2">گوشی موبایل شیائومی مدل POCO M3 M2010J19CG دو سیم‌ کارت ظرفیت 128 گیگابایت</div>
                               <div class="color"><i class="fas fa-circle"></i>مشکی</div>
                            </div>
                        </div>
                        <div class="garanti2"><i class="fas fa-archive"></i> کالا پلاس</div>
                        <div class="garanti2"><i class="fas fa-shield-alt"></i> گارانتی۱۸ماهه وی دو سل</div>
                        <div class="garanti2"><i class="far fa-save" style="color: #0fabc6;"></i> موجود در انبار دیجی کالا</div>
                        <div class="price2">
                            <div class="proprice2">۴,۸۴۰,۰۰۰ <span>تومان</span></div>
                            <a href="" class="basket2">افزودن به سبد خرید</a>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div class="tab2 hidden">
            <div class="tba2Container">
                <h2 class="h2">نقد و بررسی تخصصی
                    <span>Xiaomi POCO M3 M2010J19CG Dual SIM 128GB Mobile Phone</span>
                </h2>
                <section class="expertSummary2">
                   <div>جنجالی دیگر</div>
                   <img src="{{ asset('img/b1.jpg') }}">
                   <div class="tab2text">
                    شرکت «شیائومی» (xiaomi)، جزو شرکت‌هایی است
                    که سال‌هاست برای ارائه گوشی‌هایی با کیفیت بالا تلاش می‌کند. با ارائه گوشی  POCO M3 M2010J19CG،
                     شاید ایندفعه در این هدف موفق شده باشد. این گوشی دارای ظاهری خاص و بدنه‌ای مقاوم بوده
                      که در کنار باتری بزرگ خود توانسته است وزن مناسب گوشی را حفظ کند.
                   </div>
                </section>
            </div>
        </div>
        <div class="tab3 hidden">
            <div class="tba3Container">
                <h2 class="h2">مشخصات کالا
                    <span>Xiaomi POCO M3 M2010J19CG Dual SIM 128GB Mobile Phone</span>
                </h2>
                <section class="flex">
                    <h3 class="title">مشخصات کلی</h3>
                    <ul>
                        <li class="flex">
                            <div class="property">ابعاد</div>
                            <div class="value">162.3x77.3x9.6 میلی‌متر</div>
                        </li>
                        <li class="flex">
                            <div class="property">توضیحات سیم کارت</div>
                            <div class="value">سایز نانو (8.8 × 12.3 میلی‌متر)</div>
                        </li>
                        <li class="flex">
                            <div class="property">وزن</div>
                            <div class="value">198 گرم</div>
                        </li>
                        <li class="flex">
                            <div class="property">ساختار بدنه</div>
                            <div class="value">
                                قاب جلو از شیشه با محافظ گوریلا گلس ۳
                                قاب پشت از جنس پلاستیک
                                فریم از جنس پلاستیک
                            </div>
                        </li>
                        <li class="flex">
                            <div class="property">ویژگی‌های خاص</div>
                            <div class="value">مجهز به حس‌گر اثرانگشت , مناسب عکاسی , مناسب عکاسی سلفی , مناسب بازی , دارای بدنه مقاوم</div>
                        </li>
                        <li class="flex">
                            <div class="property">تعداد سیم کارت</div>
                            <div class="value">دو سیم کارت</div>
                        </li>
                        <li class="flex">
                            <div class="property">زمان معرفی</div>
                            <div class="value">24 نوامبر 2020</div>
                        </li>
                        <li class="flex">
                            <div class="property">شیار مجزا برای کارت حافظه</div>
                            <div class="value">دارد</div>
                        </li>
                        <li class="flex">
                            <div class="property">مدل</div>
                            <div class="value">
                                (جهانی) Xiaomi POCO M3 M2010J19CG - Global</div>
                        </li>
                        <li class="flex">
                            <div class="property">شناسه کالا</div>
                            <div class="value">2800000492908</div>
                        </li>
                    </ul>
                </section>
            </div>
        </div>
        <div class="tab4 hidden">
            <div class="tba4Container">
                <h2 class="h2">امتیاز و دیدگاه کاربران
                    <span>Xiaomi POCO M3 M2010J19CG Dual SIM 128GB Mobile Phone</span>
                </h2>
            </div>
            <section>
                <div class="flex">
                    <div class="rating">
                        <ul>
                            <li>
                                <div class="items">کیفیت ساخت</div>
                                <div class="value">
                                    <div class="rate"></div>
                                </div>4.2
                            </li>
                            <li>
                                <div class="items">ارزش خرید به نسبت قیمت</div>
                                <div class="value">
                                    <div class="rate"></div>
                                </div>4.1
                            </li>
                            <li>
                                <div class="items">نوآوری</div>
                                <div class="value">
                                    <div class="rate"></div>
                                </div>4.1
                            </li>
                            <li>
                                <div class="items">امکانات و قابلیت ها</div>
                                <div class="value">
                                    <div class="rate"></div>
                                </div>4.1
                            </li>
                            <li>
                                <div class="items">سهولت استفاده</div>
                                <div class="value">
                                    <div class="rate"></div>
                                </div>4.1
                            </li>
                            <li>
                                <div class="items">طراحی و ظاهر</div>
                                <div class="value">
                                    <div class="rate"></div>
                                </div>4.1
                            </li>
                        </ul>
                    </div>
                    <div class="comment">
                        <span><i class="far fa-lightbulb"></i>بیش از ۲۹۰ نفر از خریداران این محصول را پیشنهاد داده‌اند</span>
                    </div>
                </div>
            </section>
        </div>
        <div class="tab5 hidden">
            <div class="tba5Container">
                <h2 class="h2">پرسش و پاسخ
                    <span>Xiaomi POCO M3 M2010J19CG Dual SIM 128GB Mobile Phone</span>
                </h2>
            </div>
        </div>
    </div>
</section>
<!--second slider-->
<div class="swiper-container s1 swiper1">
    <div class="headline">
        <span>خریداران این محصول، محصولات زیر را هم خریده‌اند</span>
    </div>
    <div class="swiper-wrapper">
        <div class="swiper-slide">
          <a class="card"  href="">
            <div class="image">
                <img src="{{ asset('img/m.1.jpg') }}">
            </div>
            <div class="title">
                محصول شماره ۱
            </div>
            <div class="price">
                <div class="oldPrice">
                  <del>۲۳۰۰۰</del>
                  <span class="percent">۲۰٪</span>
                </div>
                <div class="newPrice">
                    <span>۲۸۰۰۰</span>
                    <span>تومان</span>
                </div>
            </div>
          </a>
        </div>
        <div class="swiper-slide">
          <a class="card" href="">
            <div class="image">
                <img src="{{ asset('img/m.3.jpg') }}" alt="">
            </div>
            <div class="title">
                محصول شماره ۲
            </div>
            <div class="price">
                <div class="oldPrice">
                  <del>۲۳۰۰۰</del>
                  <span class="percent">۲۰٪</span>
                </div>
                <div class="newPrice">
                    <span>۲۸۰۰۰</span>
                    <span>تومان</span>
                </div>
            </div>
          </a>
        </div>
        <div class="swiper-slide">
         <a class="card" href="">
            <div class="image">
                <img src="{{ asset('img/m.6.jpg') }}" alt="">
            </div>
            <div class="title">
                محصول شماره ۳
            </div>
            <div class="price">
                <div class="oldPrice">
                  <del>۲۳۰۰۰</del>
                  <span class="percent">۲۰٪</span>
                </div>
                <div class="newPrice">
                    <span>۲۸۰۰۰</span>
                    <span>تومان</span>
                </div>
            </div>
         </a>
        </div>
        <div class="swiper-slide">
         <a class="card" href="">
            <div class="image">
                <img src="{{ asset('img/m.4.jpg') }}" alt="">
            </div>
            <div class="title">
                محصول شماره ۴
            </div>
            <div class="price">
                <div class="oldPrice">
                  <del>۲۳۰۰۰</del>
                  <span class="percent">۲۰٪</span>
                </div>
                <div class="newPrice">
                    <span>۲۸۰۰۰</span>
                    <span>تومان</span>
                </div>
            </div>
         </a>
        </div>
        <div class="swiper-slide">
         <a class="card" href="">
            <div class="image">
                <img src="{{ asset('img/m.5.jpg') }}" alt="">
            </div>
            <div class="title">
                محصول شماره ۵
            </div>
            <div class="price">
                <div class="oldPrice">
                  <del>۲۳۰۰۰</del>
                  <span class="percent">۲۰٪</span>
                </div>
                <div class="newPrice">
                    <span>۲۸۰۰۰</span>
                    <span>تومان</span>
                </div>
            </div>
         </a>
        </div>
        <div class="swiper-slide">
         <a class="card" href="">
            <div class="image">
                <img src="{{ asset('img/m.3.jpg') }}" alt="">
            </div>
            <div class="title">
                محصول شماره ۶
            </div>
            <div class="price">
                <div class="oldPrice">
                  <del>۲۳۰۰۰</del>
                  <span class="percent">۲۰٪</span>
                </div>
                <div class="newPrice">
                    <span>۲۸۰۰۰</span>
                    <span>تومان</span>
                </div>
            </div>
         </a>
        </div>
    </div>
    <div class="swiper-button-next next"></div>
    <div class="swiper-button-prev prev"></div>
    </div>
<!--text-->
<div class="lastText">شناسه کالا :DKP - ۴۱۴۹۰۳۷</div>














</div>
</main>

<!--footer-->
<x-footer/>
