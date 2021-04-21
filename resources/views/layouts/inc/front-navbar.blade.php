<nav class="py-2 fixed-top bg-light">
    <div class="container d-flex">
      <ul class="nav me-auto">
        <li class="nav-item">
          <form class="navbar-form navbar-left" action="/action_page.php">
            <div class="input-group">
                <div class="input-group-btn">
                   <a href="cart"> <i class='fas fa-cart-plus' style='font-size:25px'></i></a>
                 </div>
              <a href="login"><input type="text" class="form-control" placeholder="ورود به حساب کاربري" name="search"></a>
            </div>
          </form>
        </li>
      </ul>
      <div class="input-group">
        <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-search"></i>
          <input type="search" class="form-control " placeholder="جستجو در دیجی کالا...">
        </span>
      </div>
      <img src="{{ asset('img/digikala-logo.png') }}" style="width:130px; height:40px">
    </div>
    <header class="py-3 border-bottom">
      <div class="container d-flex ">
        <ul class="nav">
          <li class="nav-item"><a href="#" class="nav-link link-dark px-3">فروشنده شوید</a></li>
          <li class="nav-item"><a href="#" class="nav-link link-dark px-3">سوالی دارید؟</a></li>
          <li class="dropdown"><a a class="dropdown-toggle" data-toggle="dropdown" href="#"> <i class="fa fa-crosshairs"></i> دیجی کلاب</a>
            <ul class="dropdown-menu">
              <div class="card mb-3" style="width: 600px;">
                <div class="row g-0">
                  <div class="col-md-6">
                    <img src="{{ asset('img/club.jpg') }}" style="width:400px; height:250px;">
                  </div>
                  <div class="col-md-6">
                    <div class="card-body">
                      <h5 class="card-title"><b>digi</b> <a style="color:blue;">club</a>  </h5>
                      <p class="card-text">صفحه اصلی دیجی کلاب</p>
                      <p class="card-text">جوایز دیجی کلاب<i class="fa fa-calendar"></i></p>
                      <p class="card-text" style="color: #777">تاریخچه امتیازات دیجی کلاب <i class="far fa-clock"></i></p>
                      <p class="card-text">ماموریت های دیجی کلاب<i class="fa fa-flag"></i></p>
                      <p class="card-text">قرعه کشی<i class="fa fa-gift"></i></p>
                    </div>
                  </div>
                </div>
              </div>
            </ul>
          </li>
          <li class="dropdown"><a a class="dropdown-toggle" data-toggle="dropdown" href="#"> <i class="fa fa-crosshairs"></i> دیجی پلاس</a>
            <ul class="dropdown-menu">
                <div class="card mb-3" style="width:660px;">
                    <div class="row g-0">
                      <div class="col-md-4">
                        <img src="{{ asset('img/plus.jpg') }}" style="width:320px; height:250px;">
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title">خدمات ویژه کاربران <a style="color: purple;">دیجی پلاس</a></h5><br>
                          <p class="card-text" style="color: #777">ارسال رایگان بدون محدودیت قیمت هدیه نقدی و بازگشت </p>
                          <p class="card-text" style="color: #777">  کالا تا ۳۰روز پس از تحویل</p><br>
                          <p><a href="">اطلاعات بیشتر و عضویت</a></p><hr>
                          کالاهای <a style="color: purple;">دیجی پلاس</a>
                        </div>
                      </div>
                    </div>
                  </div>
            </ul>
          </li>
          <li class="nav-item"><a href="#" class="nav-link link-dark px-3"> دیجی کالای من <i class="fas fa-medal"></i> </a></li>
          <li class="dropdown"><a a class="dropdown-toggle" data-toggle="dropdown" href="#"> <i class="fa fa-crosshairs"></i> تخفیف ها وپیشنهاد</a>
            <ul class="dropdown-menu">
                <div class="card mb-2" style="width:800px;">
                    <div class="row g-0">
                      <div class="col-md-6">
                        <img src="{{ asset('img/suggestion.png') }}" style="width:400px; height:350px;">
                      </div>
                      <div class="col-md-3">
                        <div class="card-body">
                          <h5 class="card-title"></h5>
                          <p class="card-text" style="color: #777">سایر لوازم جانبی موتورسیکلت کمتراز۲۰۰هزارتومان</p>
                          <p class="card-text" style="color: #777">شمش و پلاک طلا کمتر از ۱۵۰هزارتومان</p>
                          <p class="card-text">پرفروشترین کالاها <i class="fas fa-fire"></i></p>
                          <p class="card-text">باهرخرید هدیه بگیرید <i class="fa fa-gift"></i></p>
                          <p class="card-text">تخفیف پایان سال <i class="fa fa-tags"></i></p>
                          <p class="card-text">کارت هدیه خرید از دیجی کالا <i class="far fa-credit-card"></i></p>
                          <p class="card-text">تازه های فروشنده های جدید <i class="fa fa-shopping-basket"></i></p>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="card-body">
                          <h5 class="card-title">مشاهده همه تخفیف ها و پیشنهادها</h5>
                          <p class="card-text">کالاهای شگفت انگیز</p>
                          <p class="card-text">شگفت انگیز سوپرمارکتی</p>
                          <p class="card-text">فروش ویژه</p>
                          <p style="color: #777">کالای دیجیتال<br>
                           خودرو ابزار و تجهیزات صنعتی<br>
                           مد و پوشاک<br>
                           اسباب بازی کودک و نوازاد<br>
                           کالاهای سوپرمارکتی<br>
                           زیبایی و سلامت<br>
                           خانه و آشپزخانه<br>
                           کتاب لوازم تحریر و هنر<br>
                           ورزش و سفر</p>
                        </div>
                       </div>
                    </div>
                  </div>
            </ul>
          </li>
          <li class="nav-item"><a href="#" class="nav-link link-dark px-3">سوپرمارکت <i class="fa fa-shopping-basket"></i> </a></li>
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">  دسته بندی کالاها<i class="fas fa-bars"></i></a>
            <ul class="dropdown-menu" >
              <li style="float: right"><a href="#">کالای دیجیتال<i class='fas fa-laptop'></i></a></li>
              <li style="float: right"><a href="#">خودرو ابزار و تجهیزات صنعتی<i class='fas fa-wrench'></i></a></li>
              <li style="float: right"><a href="#">مد و پوشاک<i class='fas fa-tshirt'></i></a></li>
              <li style="float: right"><a href="#">اسباب بازی کودک و نوازاد<i class='far fa-smile'></i></a></li>
              <li style="float: right"><a href="#">کالاهای سوپرمارکتی <i class='fas fa-shopping-cart'></i></a></li>
              <li style="float: right"><a href="#">زیبایی و سلامت<i class='fas fa-heart'></i></a></li>
              <li style="float: right"><a href="#">خانه و آشپزخانه<i class='fas fa-couch'></i></a></li>
              <li style="float: right"><a href="#">کتاب لوازم تحریر و هنر<i class='far fa-edit'></i></a></li>
              <li style="float: right"><a href="#">ورزش و سفر<i class='fas fa-campground'></i></a></li>
            </ul>
          </li>
        </ul>
  <button type="button" class="btn btn-outline-secondary bg-white" data-toggle="modal" data-target="#myModal"><i class="fas fa-map-marker-alt"></i> لطفا شهر و استان خود را انتخاب کنید</button>
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-dialog-scrollable">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">انتخاب استان</h4>
        </div>
        <div class="modal-body" dir="rtl">
          <p class="text-primary"><i class="fa fa-crosshairs"></i> مکان یابی خودکار</p><hr>
          <p >آذربایجان شرقی</p><hr>
          <p>آذربایجان غربی</p><hr>
          <p>اردبیل</p><hr>
          <p>اصفهان </p><hr>
          <p>البرز</p><hr>
          <p>ایلام</p><hr>
          <p>بوشهر</p><hr>
          <p>تهران</p><hr>
          <p>خراسان رضوی</p><hr>
          <p>خراسان جنوبی</p><hr>
          <p>خراسان شمالی</p><hr>
          <p>خوزستان</p><hr>
          <p>زنجان</p><hr>
          <p> سمنان</p><hr>
          <p>سیستان و بلوچستان</p><hr>
          <p>فارس</p><hr>
          <p>قزوین</p><hr>
          <p>قم</p><hr>
          <p>لرستان</p><hr>
          <p>مازندران</p><hr>
          <p>مرکزی </p><hr>
          <p>هرمزگان  </p><hr>
          <p> همدان</p><hr>
          <p>چهار محال و بختیاری</p><hr>
          <p>کردستان</p><hr>
          <p> کرمان</p><hr>
          <p>کرمانشاه </p><hr>
          <p>کهگیلویه و بویراحمد</p><hr>
          <p>گلستان</p><hr>
          <p> گیلان</p><hr>
          <p>یزد </p>
        </div>
      </div>

    </div>
  </div>
  </div>
      </div>
    </header>
  </nav>

  <style>
   .modal-backdrop {
      z-index: 0 !important;
     }
.card-body{
    text-align: right;
    font-display: bold;
}
</style>
