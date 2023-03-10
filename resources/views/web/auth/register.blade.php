<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
    name='viewport'/>
    <title>register</title>
    <!--    font------------------------------------>
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/materialdesignicons.css">
    <link rel="stylesheet" href="assets/css/materialdesignicons.css.map">
    <!--    bootstrap------------------------------->
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <!--    owl.carousel---------------------------->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <!--    responsive------------------------------>
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!--    main style------------------------------>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
<!--page-login-------------------------->
        <div class="container-main">
            <div class="col-12">
                <div class="semi-modal-layout">
                    <section class="page-account-box">
                        <div class="col-lg-7 col-md-7 col-xs-12 mx-auto">
                            <div class="account-box" style="padding-bottom:40px;">
                                <a href="#" class="account-box-logo">digistore</a>
                                <div class="account-box-headline">
                                    <a href="signin" class="login-ds">ورود</a>
                                    <a href="signup" class="register-ds active-account">ثبت نام</a>
                                </div>
                                <div class="massege-light">ثبت نام تنها با شماره تلفن همراه امکان پذیر است.</div>
                                <div class="account-box-content">
                                    <form method="POST" action="{{route('user.register')}}" class="form-account">
                                        @csrf
                                        <div class="form-account-title">
                                            <label for="email-phone">ایمبل:</label>
                                            <input type="email" name="email" class="number-email-input" id="email-phone" placeholder=" شماره اینیل خود را وارد نمایید">
                                            <span class="mdi mdi-account-outline"></span>
                                        </div>
                                        <div class="form-account-title">
                                            <label for="password">کلمه عبور</label>
                                            <input type="password" name="password" class="password-input" placeholder="کلمه عبور خود را وارد نمایید">
                                            <span class="mdi mdi-lock"></span>
                                        </div>
                                        <div class="form-auth-row">
                                            <label for="#" class="ui-checkbox">
                                                <input type="checkbox" value="1" name="login" checked="" id="remember" name="remember">
                                                <span class="ui-checkbox-check"></span>
                                            </label>
                                            <label for="remember" class="remember-me"><a href="#">حریم خصوصی</a> و <a href="#">شرایط قوانین</a>استفاده از سرویس های سایت دیجی‌اسمارت را مطالعه نموده و با کلیه موارد آن موافقم.</label>
                                        </div>
                                        <div class="parent-btn lr-ds">
                                            <button class="dk-btn dk-btn-info">
                                                    ثبت نام به دیجی اسمارت
                                                <i class="fa fa-sign-in sign-in"></i>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </section>
                    <footer class="footer-light">
                        <div class="container">
                            <ul class="footer-light-link">
                                <li><a href="#">درباره دیجی اسمارت</a></li>
                                <li><a href="#">فرصت‌های شغلی</a></li>
                                <li><a href="#">تماس با ما</a></li>
                                <li><a href="#">همکاری با سازمان‌ها</a></li>
                            </ul>

                            <p class="title-footer">استفاده از مطالب فروشگاه اینترنتی دیجی‌اسمارت فقط برای مقاصد غیرتجاری و با ذکر منبع بلامانع است. کلیه حقوق این سایت متعلق به شرکت نوآوران فن آوازه (فروشگاه آنلاین دیجی‌اسمارت) می‌باشد.</p>

                            <p class="copy-right-footer-light">Copyright © 2006 - 2019 DigiSmart.com</p>
                        </div>
                    </footer>
                </div>
            </div>
        </div>
<!--page-login-------------------------->
</body>
<!--jquery--------------------------------------->
<script src="assets/js/jquery-3.2.1.min.js"></script>
<!--    bootstrap-------------------------------->
<script src="assets/js/bootstrap.js"></script>
<!--    owl.carousel----------------------------->
<script src="assets/js/owl.carousel.min.js"></script>
<!--main----------------------------------------->
<script src="assets/js/main.js"></script>
</html>
