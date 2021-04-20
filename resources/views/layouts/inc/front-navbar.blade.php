<nav class="py-2 fixed-top bg-light">
    <div class="container d-flex">
      <ul class="nav me-auto">
        <li class="nav-item">
          <form class="navbar-form navbar-left" action="/action_page.php">
            <div class="input-group">
                <div class="input-group-btn">
                   <a href="cart"> <i class='fas fa-cart-plus' style='font-size:15px'></i></a>
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

          <a class="navbar-brand" href="#"><b class="text-danger">digikala</b></a>
    </div>
    <header class="py-3 border-bottom">
      <div class="container d-flex ">

        <ul class="nav">
          <li class="nav-item"><a href="#" class="nav-link link-dark px-3">فروشنده شوید</a></li>
          <li class="nav-item"><a href="#" class="nav-link link-dark px-3">سوالی دارید؟</a></li>
          <li class="dropdown"><a a class="dropdown-toggle" data-toggle="dropdown" href="#"> <i class="fa fa-crosshairs"></i> دیجی کلاب</a>
            <ul class="dropdown-menu">
              <li><a href="#">
              <div class="club">
              <div><img src='{{ asset('img/club.png') }}' class='iconDetails'></div>
              </div></a></li>
            </ul>
          </li>
          <li class="dropdown"><a a class="dropdown-toggle" data-toggle="dropdown" href="#"> <i class="fa fa-crosshairs"></i> دیجی پلاس</a>
            <ul class="dropdown-menu">
              <li><a href="#">
              <div class="club">
              <div><img src='{{ asset('img/plus.png') }}' class='iconDetails'></div>
              </div></a></li>
            </ul>
          </li>
          <li class="nav-item"><a href="#" class="nav-link link-dark px-3"> دیجی کالای من <i class="fas fa-medal"></i> </a></li>
          <li class="dropdown"><a a class="dropdown-toggle" data-toggle="dropdown" href="#"> <i class="fa fa-crosshairs"></i> تخفیف ها وپیشنهاد</a>
            <ul class="dropdown-menu">
              <li><a href="#">
              <div class="club">
              <div><img src='{{ asset('img/suggestion.png') }}' class='iconDetails'></div>
              </div></a></li>
            </ul>
          </li>
          <li class="nav-item"><a href="#" class="nav-link link-dark px-3">سوپرمارکت <i class="fa fa-shopping-basket"></i> </a></li>
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">  دسته بندی کالاها<i class="fas fa-bars"></i></a>
            <ul class="dropdown-menu">
              <li><a href="#">کالای دیجیتال<i class='fas fa-laptop'></i></a></li>
              <li><a href="#">خودرو ابزار و تجهیزات صنعتی<i class='fas fa-wrench'></i></a></li>
              <li><a href="#">مد و پوشاک<i class='fas fa-tshirt'></i></a></li>
              <li><a href="#">اسباب بازی کودک و نوازاد<i class='far fa-smile'></i></a></li>
              <li><a href="#">کالاهای سوپرمارکتی <i class='fas fa-shopping-cart'></i></a></li>
              <li><a href="#">زیبایی و سلامت<i class='fas fa-heart'></i></a></li>
              <li><a href="#">خانه و آشپزخانه<i class='fas fa-couch'></i></a></li>
              <li><a href="#">کتاب لوازم تحریر و هنر<i class='far fa-edit'></i></a></li>
              <li><a href="#">ورزش و سفر<i class='fas fa-campground'></i></a></li>
            </ul>
          </li>
        </ul>

  <button type="button" class="btn btn-outline-secondary bg-white" data-toggle="modal" data-target="#myModal">لطفا شهر و استان خود را انتخاب کنید</button>

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
  </style>


