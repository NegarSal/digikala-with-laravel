<header>
    <div class="header">
        <div class="headerRight">
            <a href="#" class="logo"></a>
            <i class="fa fa-fw fa-search"></i>
            <input type="text" class="searchBox" placeholder="جستجو در دیجی کالا...">
        </div>
        <div class="headerLeft">
            <a href="login">
                <i class="far fa-user"></i>
                ورود به حساب کاربري
            </a>
            <a href="cart">
                <i class='fas fa-cart-plus'></i>
            </a>
        </div>
    </div>
    <nav>
        <div class="container">
            <ul class="flex">
                <li class="menu1">
                    <ul class="flex">
                        <li><i class="fas fa-bars"></i> دسته بندی کالاها</li>
                        <li><a href=""><i class="fa fa-shopping-basket"></i> سوپرمارکت</a></li>
                        <li><a href="">تخفیف ها و پیشنهادها</a></li>
                        <li><a href=""><i class="fas fa-medal"></i> دیجی کالای من</a></li>
                        <li><a href=""><i class="fa fa-crosshairs"></i> دیجی پلاس</a></li>
                        <li><a href=""><i class="fa fa-crosshairs"></i> دیجی کلاب</a></li>
                        <li><a href="">سوالی دارید؟</a></li>
                        <li><a href="">فروشنده شوید</a></li>
                    </ul>
                </li>
                <li class="location">
                   <button type="button" class="btn btn-outline-secondary bg-white btn-sm" data-toggle="modal" data-target="#myModal"> لطفا شهر و استان خود را انتخاب کنید <i class="fas fa-map-marker-alt"></i></button>
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

                </li>
            </ul>
        </div>
    </nav>
</header>



<style>
*{
    direction: rtl;
    font-family: sans-serif;
    padding: 0;
    margin: 0;
}
body{
    background-color: #f5f5f5;
}
a{
    text-decoration: none;
}
li{
    list-style: none;
}
header{
    background-color: white;
}
header .header{
    max-width: 1676px;
    min-width: 1009px;
    margin: 0 auto;
    padding: 12px 14px;
}
header .header .headerRight .logo{
    background-size: contain;
    background: url("img/logo.svg") no-repeat center;
    display: block;
    width: 120px;
    height: 30px;
    margin-left: 10px;
}
header .header .headerRight{
    display: flex;
    align-items: center;
    width: 50%;
    position:relative;
}
header .headerRight .searchBox{
    background-color:#f0f0f1;
    color: #a1a3a8;
    border: none;
    border-radius: 8px;
    outline: none;
    padding: 14px 45px 14px 14px;
    width: 70%;
}
header .header .headerLeft {
    justify-content: flex-end;
    align-items: center;
    position: relative;
    display: flex;
    margin-top: -50px;
    margin-left:5px;
}
header .header .headerLeft a:nth-child(1){
    border: 1px solid #e0e0e2 ;
    border-radius: 8px ;
    padding: 10px 12px;
    margin-left: 15px;
    color: #616161;
    font-size:12px ;
}
header .header .headerLeft a:nth-child(2){
   padding-right: 20px;
   border-right: 1px solid;
   color: #616161;
}
header .header .headerLeft a i{
    font-size: 20px;
}
header .headerRight .fa-search{
    position: absolute;
    right: 145px;
    color: #a1a3a8;
    font-size: 18px;
}
.flex{
    display: flex;
    align-items: center;
}
.container{
    padding: 0;
    max-width: 1676px;
    min-width: 1009px;
    margin: 0;
}
.container > ul{
    justify-content: space-between;
    line-height: 30px;
}
.container ul li ul li a{
    padding: 10px;
    display: block;
    padding: 10px;
    display: block;
    color:#616161;
    font-size:12px ;
    margin-right: 12px;
}
.container ul li ul li:nth-child(1){
    color: #616161;
    font-size:12px ;
    display: flex;
    align-items: center;
    border-left: 1px solid #f0f0f1;
    padding-left: 10px;
}
.container ul .location{
    color:#616161;
    font-size:12px ;
    margin-left:-180px;
}

</style>
