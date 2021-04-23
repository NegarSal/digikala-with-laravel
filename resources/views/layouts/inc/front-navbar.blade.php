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
</header>



<style>
*{
    direction: rtl;
    font-family: sans-serif;
    padding: 0;
    margin: 0;
}
a{
    text-decoration: none;
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
    margin-left:40px;
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

</style>
