<title>
    @yield('title')ورود/ثبت نام|فروشگاه اینترنتی دیجی کالا
</title>

<div class="container11">
    <form action="user" method="post">
        @csrf
        <div class="login-header-logo">
           <a href="/">
             <img alt="DIGIKALA.COM" src="https://www.digikala.com/static/files/bc60cf05.svg">
           </a>
        </div><br>
        <div>
            ورود / ثبت‌نام
        </div><br>
        <div>
            شماره موبایل یا پست الکترونیک  خود را وارد کنید
        </div><br>
        <div>
          <label>
            <div>
              <input name="user" type="text"/>
            </div>
          </label>
        </div>
        <a href="#">
        <button type="submit" class="btn" >
            ورود به دیجی‌کالا
        </button>
        </a>
        <p>
            با ورود و یا ثبت نام در دیجی‌کالا شما شرایط و قوانین  استفاده از سرویس<br> های
            سایت دیجی‌کالا و قوانین حریم خصوصی  آن را می‌پذیرید
        </p>
    </form>
</div>

<style>

form {
    border: 3px solid #f1f1f1;
    padding: 40px;
}

input[type=text]{
  width: 30%;
  padding: 14px 10px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: rgb(248, 19, 19);
  color: white;
  padding: 14px 10px;
  margin: 8px 0;
  border: none;
  border-radius: 10px;
  cursor: pointer;
  width: 30%;
}

.container {
  padding: 70px;
  text-align: center;
  }

</style>
