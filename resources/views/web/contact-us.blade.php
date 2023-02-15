<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
          name='viewport'/>
    <title>contact-us</title>
    <!--    font------------------------------------>
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/materialdesignicons.css">
    <link rel="stylesheet" href="assets/css/materialdesignicons.css.map">
    <!--    bootstrap------------------------------->
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <!--    responsive------------------------------>
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!--    main style------------------------------>
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="{{asset('assets/toastr/toastr.min.css')}}">
</head>
<body>
<!--header------------------------------------->
<header>
    <aside class="adplacement-top-header">
        <a href="index.html" class="adplacement-item" title="شگفت سوپرمارکتی"></a>
    </aside>
    <div class="container-main">
        <div class="col-lg-8 col-md-8 col-xs-12 pull-right">
            <div class="header-right">
                <div class="logo">
                    <a href="#"><img src="assets/images/logo.png"></a>
                </div>
                <div class="col-lg-9 col-md-9 col-xs-12 pull-right">
                    <div class="search-header">
                        <form action="#">
                            <input type="text" class="search-input" placeholder="نام کالا، برند و یا دسته مورد نظر خود را جستجو کنید…">
                            <button type="submit" class="button-search">
                                <img src="assets/images/search.png">
                            </button>
                        </form>
                        <div class="search-result">
                            <ul class="search-result-list mb-0">
                                <li>
                                    <a href="#"><i class="mdi mdi-clock-outline"></i>
                                        فروشگاه ها
                                        <button class="btn btn-light btn-remove-search" type="submit">
                                            <i class="mdi mdi-close"></i>
                                        </button>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><i class="mdi mdi-clock-outline"></i>
                                        محصولات
                                        <button class="btn btn-light btn-remove-search" type="submit">
                                            <i class="mdi mdi-close"></i>
                                        </button>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><i class="mdi mdi-clock-outline"></i>
                                        کالای دیجیتال
                                        <button class="btn btn-light btn-remove-search" type="submit">
                                            <i class="mdi mdi-close"></i>
                                        </button>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><i class="mdi mdi-clock-outline"></i>
                                        ثبت فروشگاه
                                        <button class="btn btn-light btn-remove-search" type="submit">
                                            <i class="mdi mdi-close"></i>
                                        </button>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><i class="mdi mdi-clock-outline"></i>
                                        ظروف
                                        <button class="btn btn-light btn-remove-search" type="submit">
                                            <i class="mdi mdi-close"></i>
                                        </button>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-xs-12 pull-left">
            <div class="header-left">
                <ul class="nav-lr">
                    <li class="nav-item-account">
                        <a href="#">
                            <img src="assets/images/user.png" alt="user">
                            حساب کاربری
                            <div class="dropdown-menu">
                                <ul>
                                    <li class="dropdown-menu-item">
                                        <a href="#" class="dropdown-item">
                                            <i class="mdi mdi-account-card-details-outline"></i>
                                            حساب کاربری من
                                        </a>
                                    </li>
                                    <li class="dropdown-menu-item">
                                        <a href="#" class="dropdown-item">
                                            <i class="mdi mdi-comment-text-outline"></i>
                                            پیام ها
                                            <span class="count">1</span>
                                        </a>
                                    </li>
                                    <li class="dropdown-menu-item">
                                        <a href="#" class="dropdown-item">
                                            <i class="mdi mdi-logout-variant"></i>
                                            خروج از حساب
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="overlay-search-box"></div>
    </div>
    <!--        menu------------------------------->
    <nav class="main-menu">
        <div class="container-main">
            <div>
                <ul class="list-menu">
                    <li class="item-list-menu megamenu">
                        <a href="#" class="list-category"> فروشگاه ها</a>
                    </li>
                    <li class="item-list-menu megamenu nav-overlay">
                        <a href="#" class="list-category">محصولات<i class="fa fa-angle-down"></i></a>
                        <ul class="sub-menu">
                            <li class="list-item-children">
                                <a href="#" class="list-item-children-category">
                                    <img src="assets/images/menu/icon/carpet.png">
                                    فروش تابلو فرش
                                </a>
                                <ul class="megamenu-level-3" style="display:block">
                                    <a href="#" class="list-category-megamenu">همه دسته بندی های فرش و تابلو فرش</a>
                                    <div class="level-three-menu">
                                        <a class="mega-menu-sublist-title" href="#">فرش دست باف
                                            <i class="fa fa-angle-left"></i>
                                        </a>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">فرش و تابلو فرش </a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">فرش و تابلو فرش </a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">فرش و تابلو فرش </a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">فرش و تابلو فرش </a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">فرش و تابلو فرش </a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">فرش و تابلو فرش </a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">فرش و تابلو فرش </a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">فرش و تابلو فرش </a>
                                        </li>
                                    </div>
                                    <div class="level-three-menu">
                                        <a class="mega-menu-sublist-title" href="#">فرش ماشینی
                                            <i class="fa fa-angle-left"></i>
                                        </a>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">فرش و تابلو فرش </a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">فرش و تابلو فرش </a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">فرش و تابلو فرش </a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">فرش و تابلو فرش </a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">فرش و تابلو فرش </a>
                                        </li>
                                        <a class="mega-menu-sublist-title" href="#">فرش طرح دار
                                            <i class="fa fa-angle-left"></i>
                                        </a>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">فرش و تابلو فرش </a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">فرش و تابلو فرش </a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">فرش و تابلو فرش </a>
                                        </li>
                                    </div>
                                    <div class="level-three-menu">
                                        <a class="mega-menu-sublist-title" href="#">فرش بزرگ
                                            <i class="fa fa-angle-left"></i>
                                        </a>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">فرش و تابلو فرش </a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">فرش و تابلو فرش </a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">فرش و تابلو فرش </a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">فرش و تابلو فرش </a>
                                        </li>
                                        <a class="mega-menu-sublist-title" href="#">فرش کوچک
                                            <i class="fa fa-angle-left"></i>
                                        </a>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">فرش و تابلو فرش </a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">فرش و تابلو فرش </a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">فرش و تابلو فرش </a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">فرش و تابلو فرش </a>
                                        </li>
                                    </div>
                                    <div class="level-three-menu">
                                        <a class="mega-menu-sublist-title" href="#">تابلوفرش
                                            <i class="fa fa-angle-left"></i>
                                        </a>
                                        <a class="mega-menu-sublist-title" href="#">تابلوفرش کوچک
                                            <i class="fa fa-angle-left"></i>
                                        </a>
                                        <a class="mega-menu-sublist-title" href="#">تابلوفرش تزئینی
                                            <i class="fa fa-angle-left"></i>
                                        </a>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">فرش و تابلو فرش </a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">فرش و تابلو فرش </a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">فرش و تابلو فرش </a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">فرش و تابلو فرش </a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">فرش و تابلو فرش </a>
                                        </li>
                                    </div>
                                    <div class="images-menu-list">
                                        <a href="#">
                                            <img src="assets/images/menu/ryan-christodoulou-789566-unsplash.jpg">
                                            <div class="box-shadow"></div>
                                        </a>
                                    </div>
                                </ul>
                            </li>
                            <li class="list-item-children">
                                <a href="#" class="list-item-children-category">
                                    <img src="assets/images/menu/icon/necklace.png">
                                    طلا و جواهر
                                </a>
                                <ul class="megamenu-level-3">
                                    <a href="#" class="list-category-megamenu">همه دسته بندی های طلا و جواهر</a>
                                    <div class="level-three-menu">
                                        <a class="mega-menu-sublist-title" href="#">طلای زرد
                                            <i class="fa fa-angle-left"></i>
                                        </a>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">طلا و جواهر </a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">طلا و جواهر </a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">طلا و جواهر </a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">طلا و جواهر </a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">طلا و جواهر </a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">طلا و جواهر </a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">طلا و جواهر </a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">طلا و جواهر </a>
                                        </li>
                                    </div>
                                    <div class="level-three-menu">
                                        <a class="mega-menu-sublist-title" href="#">طلای سفید
                                            <i class="fa fa-angle-left"></i>
                                        </a>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">طلا و جواهر </a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">طلا و جواهر </a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">طلا و جواهر </a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">طلا و جواهر </a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">طلا و جواهر </a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">طلا و جواهر </a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">طلا و جواهر </a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">طلا و جواهر </a>
                                        </li>
                                    </div>
                                    <div class="level-three-menu">
                                        <a class="mega-menu-sublist-title" href="#">طلای تزئینی
                                            <i class="fa fa-angle-left"></i>
                                        </a>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">طلا و جواهر </a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">طلا و جواهر </a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">طلا و جواهر </a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">طلا و جواهر </a>
                                        </li>
                                        <a class="mega-menu-sublist-title" href="#">النگو زنانه
                                            <i class="fa fa-angle-left"></i>
                                        </a>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">طلا و جواهر </a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">طلا و جواهر </a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">طلا و جواهر </a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">طلا و جواهر </a>
                                        </li>
                                    </div>
                                    <div class="level-three-menu">
                                        <a class="mega-menu-sublist-title" href="#">انگشتر عتیقه
                                            <i class="fa fa-angle-left"></i>
                                        </a>
                                        <a class="mega-menu-sublist-title" href="#">گردنبند
                                            <i class="fa fa-angle-left"></i>
                                        </a>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">طلا و جواهر </a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">طلا و جواهر </a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">طلا و جواهر </a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">طلا و جواهر </a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">طلا و جواهر </a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">طلا و جواهر </a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">طلا و جواهر </a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">طلا و جواهر </a>
                                        </li>
                                    </div>
                                    <div class="images-menu-list">
                                        <a href="#">
                                            <img src="assets/images/menu/Jewelry.jpg">
                                            <div class="box-shadow"></div>
                                        </a>
                                    </div>
                                </ul>
                            </li>
                            <li class="list-item-children">
                                <a href="#" class="list-item-children-category">
                                    <img src="assets/images/menu/icon/digital.png">
                                    کالای دیجیتال
                                </a>
                                <ul class="megamenu-level-3">
                                    <a href="#" class="list-category-megamenu">همه دسته بندی های کالای دیجیتال</a>
                                    <div class="level-three-menu">
                                        <a class="mega-menu-sublist-title" href="#">لوازم جانبی گوشی
                                            <i class="fa fa-angle-left"></i>
                                        </a>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">کالای دیجیتال</a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">کالای دیجیتال</a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">کالای دیجیتال</a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">کالای دیجیتال</a>
                                        </li>
                                        <a class="mega-menu-sublist-title" href="#">گوشی موبایل
                                            <i class="fa fa-angle-left"></i>
                                        </a>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">کالای دیجیتال</a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">کالای دیجیتال</a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">کالای دیجیتال</a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">کالای دیجیتال</a>
                                        </li>
                                    </div>
                                    <div class="level-three-menu">
                                        <a class="mega-menu-sublist-title" href="#">دوربین
                                            <i class="fa fa-angle-left"></i>
                                        </a>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">کالای دیجیتال</a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">کالای دیجیتال</a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">کالای دیجیتال</a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">کالای دیجیتال</a>
                                        </li>
                                        <a class="mega-menu-sublist-title" href="#">لوازم جانبی دوربین
                                            <i class="fa fa-angle-left"></i>
                                        </a>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">کالای دیجیتال</a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">کالای دیجیتال</a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">کالای دیجیتال</a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">کالای دیجیتال</a>
                                        </li>
                                    </div>
                                    <div class="level-three-menu">
                                        <a class="mega-menu-sublist-title" href="#">تلسکوپ
                                            <i class="fa fa-angle-left"></i>
                                        </a>
                                        <a class="mega-menu-sublist-title" href="#">اسپیکر بلوتوث باسیم
                                            <i class="fa fa-angle-left"></i>
                                        </a>
                                        <a class="mega-menu-sublist-title" href="#">فلش و هارد SSD
                                            <i class="fa fa-angle-left"></i>
                                        </a>
                                        <a class="mega-menu-sublist-title" href="#">کامپیوتر و تجهیزات جانبی
                                            <i class="fa fa-angle-left"></i>
                                        </a>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">کالای دیجیتال</a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">کالای دیجیتال</a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">کالای دیجیتال</a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">کالای دیجیتال</a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">کالای دیجیتال</a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">کالای دیجیتال</a>
                                        </li>
                                    </div>
                                    <div class="level-three-menu">
                                        <a class="mega-menu-sublist-title" href="#">تبلت
                                            <i class="fa fa-angle-left"></i>
                                        </a>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">کالای دیجیتال</a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">کالای دیجیتال</a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">کالای دیجیتال</a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">کالای دیجیتال</a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">کالای دیجیتال</a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">کالای دیجیتال</a>
                                        </li>
                                        <a class="mega-menu-sublist-title" href="#">لپ تاپ
                                            <i class="fa fa-angle-left"></i>
                                        </a>
                                        <a class="mega-menu-sublist-title" href="#">لوازم جانبی لپ تاپ
                                            <i class="fa fa-angle-left"></i>
                                        </a>
                                        <a class="mega-menu-sublist-title" href="#">باتری
                                            <i class="fa fa-angle-left"></i>
                                        </a>
                                    </div>
                                    <div class="images-menu-list">
                                        <a href="#">
                                            <img src="assets/images/menu/311-3114215_macbook-pro-office-photography.jpg">
                                            <div class="box-shadow"></div>
                                        </a>
                                    </div>
                                </ul>
                            </li>
                            <li class="list-item-children">
                                <a href="#" class="list-item-children-category">
                                    <img src="assets/images/menu/icon/dishes.png">
                                    ظروف
                                </a>
                                <ul class="megamenu-level-3">
                                    <a href="#" class="list-category-megamenu">همه دسته بندی های ظروف</a>
                                    <div class="level-three-menu">
                                        <a class="mega-menu-sublist-title" href="#">ظروف چینی
                                            <i class="fa fa-angle-left"></i>
                                        </a>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">ظروف</a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">ظروف</a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">ظروف</a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">ظروف</a>
                                        </li>
                                        <a class="mega-menu-sublist-title" href="#">ظروف یکبار مصرف
                                            <i class="fa fa-angle-left"></i>
                                        </a>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">ظروف</a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">ظروف</a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">ظروف</a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">ظروف</a>
                                        </li>
                                    </div>
                                    <div class="level-three-menu">
                                        <a class="mega-menu-sublist-title" href="#">ظروف چدن
                                            <i class="fa fa-angle-left"></i>
                                        </a>
                                        <a class="mega-menu-sublist-title" href="#">ظروف تفلن
                                            <i class="fa fa-angle-left"></i>
                                        </a>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">ظروف</a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">ظروف</a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">ظروف</a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">ظروف</a>
                                        </li>
                                        <a class="mega-menu-sublist-title" href="#">ظروف مسی
                                            <i class="fa fa-angle-left"></i>
                                        </a>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">ظروف</a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">ظروف</a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">ظروف</a>
                                        </li>
                                    </div>
                                    <div class="level-three-menu">
                                        <a class="mega-menu-sublist-title" href="#">دسته قابلمه
                                            <i class="fa fa-angle-left"></i>
                                        </a>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">ظروف</a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">ظروف</a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">ظروف</a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">ظروف</a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">ظروف</a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">ظروف</a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">ظروف</a>
                                        </li>
                                        <a class="mega-menu-sublist-title" href="#">سر قابلمه
                                            <i class="fa fa-angle-left"></i>
                                        </a>
                                    </div>
                                    <div class="level-three-menu">
                                        <a class="mega-menu-sublist-title" href="#">ظروف طرح دار
                                            <i class="fa fa-angle-left"></i>
                                        </a>
                                        <a class="mega-menu-sublist-title" href="#">ظروف تکی
                                            <i class="fa fa-angle-left"></i>
                                        </a>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">ظروف</a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">ظروف</a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">ظروف</a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">ظروف</a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">ظروف</a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">ظروف</a>
                                        </li>
                                        <a class="mega-menu-sublist-title" href="#">قاشق و چنگال دست کامل
                                            <i class="fa fa-angle-left"></i>
                                        </a>
                                        <a class="mega-menu-sublist-title" href="#">چاقو میوه خوری
                                            <i class="fa fa-angle-left"></i>
                                        </a>
                                    </div>
                                    <div class="images-menu-list">
                                        <a href="#">
                                            <img src="assets/images/menu/viennese_waffles_waffles_fruits_178672_1920x1080.jpg">
                                            <div class="box-shadow"></div>
                                        </a>
                                    </div>
                                </ul>
                            </li>
                            <li class="list-item-children">
                                <a href="#" class="list-item-children-category">
                                    <img src="assets/images/menu/icon/dress.png">
                                    پوشاک
                                </a>
                                <ul class="megamenu-level-3">
                                    <a href="#" class="list-category-megamenu">همه دسته بندی های پوشاک</a>
                                    <div class="level-three-menu">
                                        <a class="mega-menu-sublist-title" href="#">مردانه
                                            <i class="fa fa-angle-left"></i>
                                        </a>
                                        <a class="mega-menu-sublist-title" href="#">لباس مردانه
                                            <i class="fa fa-angle-left"></i>
                                        </a>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">پوشاک</a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">پوشاک</a>
                                        </li>
                                        <a class="mega-menu-sublist-title" href="#">کفش مردانه
                                            <i class="fa fa-angle-left"></i>
                                        </a>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">پوشاک</a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">پوشاک</a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">پوشاک</a>
                                        </li>
                                        <a class="mega-menu-sublist-title" href="#">اکسسوری مردانه
                                            <i class="fa fa-angle-left"></i>
                                        </a>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">پوشاک</a>
                                        </li>
                                    </div>
                                    <div class="level-three-menu">
                                        <a class="mega-menu-sublist-title" href="#">زنانه
                                            <i class="fa fa-angle-left"></i>
                                        </a>
                                        <a class="mega-menu-sublist-title" href="#">لباس زنانه
                                            <i class="fa fa-angle-left"></i>
                                        </a>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">پوشاک</a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">پوشاک</a>
                                        </li>
                                        <a class="mega-menu-sublist-title" href="#">کفش زنانه
                                            <i class="fa fa-angle-left"></i>
                                        </a>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">پوشاک</a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">پوشاک</a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">پوشاک</a>
                                        </li>
                                        <a class="mega-menu-sublist-title" href="#">اکسسوری زنانه
                                            <i class="fa fa-angle-left"></i>
                                        </a>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">پوشاک</a>
                                        </li>
                                    </div>
                                    <div class="level-three-menu">
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">پوشاک</a>
                                        </li>
                                        <a class="mega-menu-sublist-title" href="#">زیورآلات زنانه
                                            <i class="fa fa-angle-left"></i>
                                        </a>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">پوشاک</a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">پوشاک</a>
                                        </li>
                                        <a class="mega-menu-sublist-title" href="#">زیورآلات طلا زنانه
                                            <i class="fa fa-angle-left"></i>
                                        </a>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">پوشاک</a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">پوشاک</a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">پوشاک</a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">پوشاک</a>
                                        </li>
                                        <a class="mega-menu-sublist-title" href="#">زیورآلات نقره زنانه
                                            <i class="fa fa-angle-left"></i>
                                        </a>
                                    </div>
                                    <div class="level-three-menu">
                                        <a class="mega-menu-sublist-title" href="#">پوشاک ورزشی مردانه
                                            <i class="fa fa-angle-left"></i>
                                        </a>
                                        <a class="mega-menu-sublist-title" href="#">پوشاک ورزشی زنانه
                                            <i class="fa fa-angle-left"></i>
                                        </a>
                                        <a class="mega-menu-sublist-title" href="#">کفش ورزشی مردانه
                                            <i class="fa fa-angle-left"></i>
                                        </a>
                                        <a class="mega-menu-sublist-title" href="#">کفش ورزشی زنانه
                                            <i class="fa fa-angle-left"></i>
                                        </a>
                                        <a class="mega-menu-sublist-title" href="#">کوله پشتی مردانه
                                            <i class="fa fa-angle-left"></i>
                                        </a>
                                        <a class="mega-menu-sublist-title" href="#">بچه گانه
                                            <i class="fa fa-angle-left"></i>
                                        </a>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">پوشاک</a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">پوشاک</a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">پوشاک</a>
                                        </li>
                                    </div>
                                    <div class="images-menu-list">
                                        <a href="#">
                                            <img src="assets/images/menu/190-1900787_image-may-contain-clothing-apparel-boutique-and-shop.jpg">
                                            <div class="box-shadow"></div>
                                        </a>
                                    </div>
                                </ul>
                            </li>
                            <li class="list-item-children">
                                <a href="#" class="list-item-children-category">
                                    <img src="assets/images/menu/icon/couch.png">
                                    خانه و آشپزخانه
                                </a>
                                <ul class="megamenu-level-3">
                                    <a href="#" class="list-category-megamenu">همه دسته بندی های مبلمان</a>
                                    <div class="level-three-menu">
                                        <a class="mega-menu-sublist-title" href="#">صوتی و تصویری
                                            <i class="fa fa-angle-left"></i>
                                        </a>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">مبلمان</a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">مبلمان</a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">مبلمان</a>
                                        </li>
                                        <a class="mega-menu-sublist-title" href="#">دکوراتیو
                                            <i class="fa fa-angle-left"></i>
                                        </a>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">مبلمان</a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">مبلمان</a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">مبلمان</a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">مبلمان</a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">مبلمان</a>
                                        </li>
                                    </div>
                                    <div class="level-three-menu">
                                        <a class="mega-menu-sublist-title" href="#">لوازم خانگی برقی
                                            <i class="fa fa-angle-left"></i>
                                        </a>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">مبلمان</a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">مبلمان</a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">مبلمان</a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">مبلمان</a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">مبلمان</a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">مبلمان</a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">مبلمان</a>
                                        </li>
                                        <a class="mega-menu-sublist-title" href="#">نور و روشنایی
                                            <i class="fa fa-angle-left"></i>
                                        </a>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">مبلمان</a>
                                        </li>
                                    </div>
                                    <div class="level-three-menu">
                                        <a class="mega-menu-sublist-title" href="#">آشپزخانه
                                            <i class="fa fa-angle-left"></i>
                                        </a>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">مبلمان</a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">مبلمان</a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">مبلمان</a>
                                        </li>
                                        <a class="mega-menu-sublist-title" href="#">مواد شوینده
                                            <i class="fa fa-angle-left"></i>
                                        </a>
                                        <a class="mega-menu-sublist-title" href="#">دستمال کاغذی
                                            <i class="fa fa-angle-left"></i>
                                        </a>
                                        <a class="mega-menu-sublist-title" href="#">حوله و وسایل حمام
                                            <i class="fa fa-angle-left"></i>
                                        </a>
                                        <a class="mega-menu-sublist-title" href="#">فندک و لوازم جانبی
                                            <i class="fa fa-angle-left"></i>
                                        </a>
                                        <a class="mega-menu-sublist-title" href="#">لوازم دستشویی و پادری
                                            <i class="fa fa-angle-left"></i>
                                        </a>
                                    </div>
                                    <div class="level-three-menu">
                                        <a class="mega-menu-sublist-title" href="#">سرو پذیرایی
                                            <i class="fa fa-angle-left"></i>
                                        </a>
                                        <a class="mega-menu-sublist-title" href="#">پادری، کمد، لوازم اتاق خواب
                                            <i class="fa fa-angle-left"></i>
                                        </a>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">مبلمان</a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">مبلمان</a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">مبلمان</a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">مبلمان</a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">مبلمان</a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">مبلمان</a>
                                        </li>
                                        <li class="megamenu-list-item">
                                            <a href="#" class="megamenu-category">مبلمان</a>
                                        </li>
                                        <a class="mega-menu-sublist-title" href="#">ملحفه، سرویس، لوازم خواب
                                            <i class="fa fa-angle-left"></i>
                                        </a>
                                    </div>
                                    <div class="images-menu-list">
                                        <a href="#">
                                            <img src="assets/images/menu/sofa_decoration_interior_vase_lamp_white_background_80205_1920x1080.jpg">
                                            <div class="box-shadow"></div>
                                        </a>
                                    </div>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="item-list-menu megamenu">
                        <a href="#" class="list-category">ثبت فروشگاه</a>
                    </li>
                    <li class="item-list-menu megamenu">
                        <a href="#" class="list-category">دیجی اسمارت من</a>
                    </li>
                    <li class="item-list-menu megamenu">
                        <a href="#" class="list-category">مقالات</a>
                    </li>
                    <li class="item-list-menu megamenu">
                        <a href="#" class="list-category">درباره ما</a>
                    </li>
                    <li class="item-list-menu megamenu">
                        <a href="#" class="list-category">تماس با ما</a>
                    </li>
                    <li class="nav-item-account nav-item-cart">
                        <a href="#">
                            <span class="mdi mdi-shopping"></span>
                            سبد خرید
                            <span class="count">۴</span>
                        </a>
                        <div class="dropdown-menu-cart">
                            <div class="dropdown-header">
                                <a href="#" class="view-cart">مشاهده سبد خرید</a>
                            </div>
                            <div class="wrapper">
                                <div class="scrollbar" id="style-1">
                                    <div class="force-overflow">
                                        <ul class="dropdown-list">
                                            <a href="#">
                                                <li class="dropdown-item">
                                                    <div class="title-cart">
                                                        <img src="assets/images/cart/lenovo-ideapadl3-15iml05.jpg">
                                                        <h3>لپ تاپ 15 اینچی لنوو مدل Ideapad L3 - 15IML05</h3>
                                                        <div class="price">۲۶,۰۰۰,۰۰۰
                                                            <span>تومان</span>
                                                        </div>
                                                        <button class="btn-delete">
                                                            <span class="mdi mdi-close"></span>
                                                        </button>
                                                    </div>
                                                </li>
                                                <li class="dropdown-item">
                                                    <div class="title-cart">
                                                        <img src="assets/images/cart/huawei-p40pro.jpg">
                                                        <h3>گوشی موبایل هوآوی مدل P40 Pro ELS-NX9 دو سیم</h3>
                                                        <div class="price">۳۰,۰۰۰,۰۰۰
                                                            <span>تومان</span>
                                                        </div>
                                                        <button class="btn-delete">
                                                            <span class="mdi mdi-close"></span>
                                                        </button>
                                                    </div>
                                                </li>
                                                <li class="dropdown-item">
                                                    <div class="title-cart">
                                                        <img src="assets/images/cart/asus-ZenBookDuo-UX481FL.jpg">
                                                        <h3>لپ تاپ 14 اینچی ایسوس مدل ZenBook Duo UX481FL </h3>
                                                        <div class="price">۳۸,۸۵۰,۰۰۰
                                                            <span>تومان</span>
                                                        </div>
                                                        <button class="btn-delete">
                                                            <span class="mdi mdi-close"></span>
                                                        </button>
                                                    </div>
                                                </li>
                                                <li class="dropdown-item">
                                                    <div class="title-cart">
                                                        <img src="assets/images/cart/galaxy-watch-active2.jpg">
                                                        <h3>ساعت هوشمند سامسونگ مدل Galaxy Watch Active2 </h3>
                                                        <div class="price">۵,۲۸۰,۰۰۰
                                                            <span>تومان</span>
                                                        </div>
                                                        <button class="btn-delete">
                                                            <span class="mdi mdi-close"></span>
                                                        </button>
                                                    </div>
                                                </li>
                                            </a>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="footer-dropdown">
                                <div class="amount-total-buy">
                                    <div class="price">
                                        <span class="total">مبلغ کل خرید :</span>
                                        <span class="toman">۱۰۰,۰۰۰,۰۰۰
                                                     <span>تومان</span>
                                                 </span>
                                    </div>
                                </div>
                                <a href="#" class="checkout">تسویه حساب</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="nav-btn nav-slider">
            <span class="linee1"></span>
            <span class="linee2"></span>
            <span class="linee3"></span>
        </div>
    </nav>
    <!--        menu------------------------------->

    <!--    menu-responsiver----------------------->
    <nav class="sidebar">
        <div class="nav-header">
            <!--              <img class="pic-header" src="images/header-pic.jpg" alt="">-->
            <div class="header-cover"></div>
            <div class="logo-wrap">
                <a class="logo-icon" href="#"><img alt="logo-icon" src="assets/images/logo.png" width="40"></a>
            </div>
        </div>
        <ul class="nav-categories ul-base">
            <li><a href="#">فروشگاه</a></li>
            <li><a href="#" class="collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne"><i class="mdi mdi-chevron-down"></i>محصولات</a>
                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample" style="">
                    <ul>
                        <li class="has-sub"><a href="#" class="category-level-2">فرش و تابلو فرش</a>
                            <ul>
                                <li><a href="#" class="category-level-3">فرش و تابلو فرش</a></li>
                                <li><a href="#" class="category-level-3">فرش و تابلو فرش</a></li>
                                <li><a href="#" class="category-level-3">فرش و تابلو فرش</a></li>
                                <li><a href="#" class="category-level-3">فرش و تابلو فرش</a></li>
                            </ul>
                        </li>
                        <li class="has-sub"><a href="#" class="category-level-2">طلا و جواهر</a>
                            <ul>
                                <li><a href="#" class="category-level-3">طلا و جواهر</a></li>
                                <li><a href="#" class="category-level-3">طلا و جواهر</a></li>
                                <li><a href="#" class="category-level-3">طلا و جواهر</a></li>
                                <li><a href="#" class="category-level-3">طلا و جواهر</a></li>
                            </ul>
                        </li>
                        <li class="has-sub"><a href="#" class="category-level-2">کالای دیجیتال</a>
                            <ul>
                                <li><a href="#" class="category-level-3">کالای دیجیتال</a></li>
                                <li><a href="#" class="category-level-3">کالای دیجیتال</a></li>
                                <li><a href="#" class="category-level-3">کالای دیجیتال</a></li>
                            </ul>
                        </li>
                        <li class="has-sub"><a href="#" class="category-level-2">ظروف</a>
                            <ul>
                                <li><a href="#" class="category-level-3">ظروف</a></li>
                                <li><a href="#" class="category-level-3">ظروف</a></li>
                                <li><a href="#" class="category-level-3">ظروف</a></li>
                                <li><a href="#" class="category-level-3">ظروف</a></li>
                                <li><a href="#" class="category-level-3">ظروف</a></li>
                            </ul>
                        </li>
                        <li class="has-sub"><a href="#" class="category-level-2">پوشاک</a>
                            <ul>
                                <li><a href="#" class="category-level-3">پوشاک</a></li>
                                <li><a href="#" class="category-level-3">پوشاک</a></li>
                                <li><a href="#" class="category-level-3">پوشاک</a></li>
                                <li><a href="#" class="category-level-3">پوشاک</a></li>
                            </ul>
                        </li>
                        <li class="has-sub"><a href="#" class="category-level-2">مبلمان</a>
                            <ul>
                                <li><a href="#" class="category-level-3">مبلمان</a></li>
                                <li><a href="#" class="category-level-3">مبلمان</a></li>
                                <li><a href="#" class="category-level-3">مبلمان</a></li>
                                <li><a href="#" class="category-level-3">مبلمان</a></li>
                                <li><a href="#" class="category-level-3">مبلمان</a></li>
                                <li><a href="#" class="category-level-3">مبلمان</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </li>
            <li><a href="#">ثبت فروشگاه</a></li>
            <li><a href="#">مقالات</a></li>
            <li><a href="#">درباره ما</a></li>
            <li><a href="#">تماس با ما</a></li>
        </ul>
    </nav>
    <div class="overlay"></div>
    <!--    menu-responsiver----------------------->

</header>
<!--header------------------------------------->

<!--contact-us--------------------------------->
<div class="container-main">
    <div class="col-12">
        <section class="contact-us">
            <div class="page-content-contact-us">
                <h1 class="page-content-contact-us-title">تماس با دیجی‌اسمارت</h1>
                <div class="page-content-contact-us-row">
                    <div class="col-lg-8 col-md-8 col-xs-12 pull-right">
                        <div class="page-content-contact-us-col-big">
                            <p class="page-content-contact-us-full-paragraph">
                                کاربر گرامی، لطفاً در صورت وجود هرگونه سوال یا ابهامی،
                                پیش از ارسال ایمیل یا تماس تلفنی با دیجی‌کالا، بخش
                                <a href="#" class="btn-link-spoiler">پرسش‏های متداول</a>
                                را ملاحظه فرمایید و در
                                صورتی که پاسخ خود را نیافتید، با ما تماس بگیرید.
                            </p>
                            <br>
                            <br>
                            <p class="page-content-contact-us-full-paragraph">برای پیگیری یا سوال درباره سفارش  و ارسال پیام بهتر است از فرم زیر استفاده کنید.</p>
                            <div class="page-content-contact-us-row-col">
                                <form action="{{route('submit.contact.us')}}" class="contact-us-form" method="post" enctype="multipart/form-data">
                                @csrf
                                    <div class="contact-us-form-body">
                                        <div class="form-legal-item">
                                            <label for="#" class="form-legal-label">
                                                نام و نام‌خانوادگی
                                                <span class="required-star" style="color:red;">*</span>
                                            </label>
                                            <input type="text" class="ui-input-field form-control" value="{{old('full_name')}}" name="full_name">
                                        </div>
                                        <div class="form-legal-item">
                                            <label for="#" class="form-legal-label">
                                                ایمیل
                                                <span class="required-star" style="color:red;">*</span>
                                            </label>
                                            <input type="email" class="ui-input-field form-control" name="email" value="{{old('email')}}">
                                        </div>
                                        <div class="form-legal-item">
                                            <label for="#" class="form-legal-label">
                                                تلفن تماس
                                                <span class="required-star" style="color:red;">*</span>
                                            </label>
                                            <input type="text" class="ui-input-field form-control" value="{{old('number')}}" name="number">
                                        </div>
                                        <div class="form-legal-item">
                                            <label for="#" class="form-legal-label">
                                                موضوع
                                                <span class="required-star" style="color:red;">*</span>
                                            </label>
                                            <select name="subject" id="province" class="ui-select-field form-control">
                                                <option value="subject" selected="selected">انتخاب کنید</option>
                                                <option value="1">پیشنهاد</option>
                                                <option value="2">انتقاد یا شکایت</option>
                                                <option value="3">پیگیری سفارش</option>
                                                <option value="4">خدمات پس از فروش</option>
                                            </select>
                                        </div>
                                        <div class="form-legal-item">
                                            <label for="#" class="form-legal-label">
                                                شماره سفارش
                                            </label>
                                            <input type="text" class="ui-input-field form-control" value="{{old('number_of_order')}}" name="number_of_order">
                                        </div>
                                        <div class="form-legal-item">
                                            <label for="#" class="form-legal-label">
                                                متن پیام
                                                <span class="required-star" style="color:red;">*</span>
                                            </label>
                                            <textarea name="message" id="" cols="30" rows="10" class="ui-textarea-field form-control">{{old('message')}}</textarea>
                                        </div>
                                        <div class="upload-drag">
                                            <div class="upload-drag-message">
                                                عکس و یا ویدیو خود را جهت بارگذاری داخل کادر بیاندازید.
                                                <br>
                                                ( ۵ تصویر jpeg  یا  PNG حداکثر ۱ مگابایت، یک ویدیو MP4 حداکثر ۵۰ مگابایت )
                                            </div>
                                            <div class="upload-drag-btn"><input type="file" name="image">انتخاب فایل</div>
                                        </div>
                                        <div class="upload-drag-uploaded-and-submit">
                                            <button class="contact-us-form-submit">ثبت اطلاعات</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <hr class="info-page-separator">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <br>
                            <div class="message-light">
                                <span>روزهایی که در سال جاری به دلیل تعطیلی، دیجی‌کالا هیچ‌گونه پاسخگویی، سرویس‌دهی و خدماتی ندارد، به شرح زیر است:</span>
                                <ul>
                                    <li>۱۳ فروردین</li>
                                    <li>۱۴ خرداد</li>
                                    <li>۱۸ شهریور (تاسوعا)</li>
                                    <li>۱۹ شهریور (عاشورا)</li>
                                    <li>۲۷ مهر (اربعین)</li>
                                    <li>۵ آبان (رحلت حضرت رسول اکرم)</li>
                                    <li>۲۲ بهمن</li>
                                </ul>
                            </div>
                            <div class="message-light-success">
                                        <span class="info-page-bold">
                                            تلفن تماس و فکس:

                                            <a href="tel: +982161930000">۶۱۹۳۰۰۰۰ - ۰۲۱</a> ، <a href="tel: +982195119095"> ۹۵۱۱۹۰۹۵ - ۰۲۱</a>
                                        </span>
                                پاسخگویی ۲۴ ساعته، ٧ روز هفته)
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-xs-12 pull-left">
                        <div class="page-content-contact-us-image-container text-left">
                            <img src="assets/images/footer/page-contact-us.svg">
                        </div>
                    </div>
                    <br>
                    <h2 class="page-content-contact-us-title-smaller">دفتر مرکزی:
                        <p class="page-content-contact-us-full-paragraph">استان تهران - شهر تهران - خیابان گاندی جنوبی - نبش خیابان ۲۱ - پلاک ۲۸</p>
                    </h2>
                    <h2 class="page-content-contact-us-title-smaller">مرکز امور مشتریان:
                        <p class="page-content-contact-us-full-paragraph">لطفاً کالا را برای    بازگرداندن و ارسال آن به خدمات پس از فروش
                            دیجی‌کالا از طریق پست، تنها به صندوق پستی 3469-15875 ارسال نمایید.
                        </p>
                    </h2>
                    <div class="message-light-error">
                        لطفاً قبل از هر اقدامی با کارشناسان پشتیبانی خدمات پس از فروش تماس گرفته و از ارسال کالا بدون هماهنگی با خدمات پس از فروش دیجی‌کالا جداً، خودداری کنید
                    </div>
                    <p class="page-content-contact-us-full-paragraph">
                        <span>ایمیل سازمانی دیجی‌اسمارت:</span>
                        <a href="#">info@digismart.com</a>
                    </p>
                    <div class="message-light pull-right">
                        توجه داشته باشید که 300061930000 و 100061930000 تنها شماره‌هایی است که دیجی‌کالا از طریق آن برای
                        کاربران و مشتریان خود پیامک (اس ام اس) ارسال می‌کند. بنابراین ارسال هرگونه پیامک تحت عنوان
                        دیجی‌کالا، با هر شماره دیگری تخلف و سوء استفاده از نام دیجی‌کالا است و در صورت دریافت چنین پیامکی،
                        لطفاً جهت پیگیری قانونی آن را به
                        <a href="#">
                            info@digismart.com
                        </a>
                        اطلاع دهید.
                        <br>
                        همچنین 300061930000 و 100061930000، سامانه ارسال پیامک است که وضعیت پردازش سفارش یا رویدادها، خدمات
                        و سرویس‌های ویژه دیجی‌کالا را به اطلاع کاربران می‌رساند و روشن است که امکان دریافت پیام‌های شما از
                        طریق این شماره وجود ندارد.
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<!--contact-us--------------------------------->

<!--footer------------------------------------->
<footer class="footer mt-3">
    <div class="row">
        <div class="footer-jumpup">
            <div class="container">
                <a href="#">
                    <span href="#" class="footer-jumpup-container"><i class="fa fa-angle-up"></i></span>
                </a>
            </div>
        </div>
    </div>
    <div class="col-12">
        <nav class="footer-feature-innerbox mb-1">
            <div class="footer-badge-item">
                <a href="#" class="footer-badge-link">
                    <img src="assets/images/footer/delivery.svg">
                    <span class="footer-badge-title">تحویل اکسپرس</span>
                </a>
            </div>
            <div class="footer-badge-item">
                <a href="#" class="footer-badge-link">
                    <img src="assets/images/footer/contact-us.svg">
                    <span class="footer-badge-title">پشتیبانی 24 ساعته</span>
                </a>
            </div>
            <div class="footer-badge-item">
                <a href="#" class="footer-badge-link">
                    <img src="assets/images/footer/payment-terms.svg">
                    <span class="footer-badge-title">پرداخت درمحل</span>
                </a>
            </div>
            <div class="footer-badge-item">
                <a href="#" class="footer-badge-link">
                    <img src="assets/images/footer/return-policy.svg">
                    <span class="footer-badge-title">۷ روز ضمانت بازگشت</span>
                </a>
            </div>
            <div class="footer-badge-item">
                <a href="#" class="footer-badge-link">
                    <img src="assets/images/footer/origin-guarantee.svg">
                    <span class="footer-badge-title">ضمانت اصل بودن کالا</span>
                </a>
            </div>
        </nav>
    </div>
    <article class="container-main">
        <div class="footer-middlebar">
            <div class="col-lg-8 col-md-8 col-xs-12 pull-right">
                <div class="footer-links">
                    <div class="col-lg-4 col-md-4 col-xs-12 pull-right">
                        <nav class="footer-links-col">
                            <div class="headline-links mb-3">
                                <a href="#">
                                    راهنمای خرید از دیجی‌اسمارت
                                </a>
                            </div>
                            <ul class="footer-links-ul">
                                <li>
                                    <a href="#">
                                        نحوه ثبت سفارش
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        رویه ارسال سفارش
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        شیوه‌های پرداخت
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-4 col-md-4 col-xs-12 pull-right">
                        <nav class="footer-links-col">
                            <div class="headline-links mb-3">
                                <a href="#">
                                    خدمات مشتریان
                                </a>
                            </div>
                            <ul class="footer-links-ul">
                                <li>
                                    <a href="#">
                                        پاسخ به پرسش‌های متداول
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        رویه های بازگرداندن کالا
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        شرایط استفاده
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        حریم خصوصی
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        گزارش باگ
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-4 col-md-4 col-xs-12 pull-right">
                        <nav class="footer-links-col">
                            <div class="headline-links mb-3">
                                <a href="#">
                                    با دیجی‌اسمارت
                                </a>
                            </div>
                            <ul class="footer-links-ul">
                                <li>
                                    <a href="#">
                                        اتاق خبر دیجی‌اسمارت
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        فروش در دیجی‌اسمارت
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        فرصت های شغلی
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        تماس با دیجی‌اسمارت
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        درباره ما دیجی‌اسمارت
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-12 pull-left">
                <div class="footer-form">
                    <form action="#" class="form-newsletter mb-4 mt-4">
                        <fieldset>
                            <span class="form-newsletter-title">از تخفیف‌ها و جدیدترین‌های دیجی‌اسمارت باخبرشوید:</span>
                            <div class="form-newsletter-row">
                                <input type="text" class="input-field-send-email" placeholder="آدرس ایمیل خود را وارد کنید">
                                <button type="submit" class="btn-secondary-send">ارسال</button>
                            </div>
                        </fieldset>
                    </form>
                    <div class="footer-community">
                        <div class="footer-social mb-4 mt-4">
                            <span>دیجی‌اسمارت را در شبکه‌های اجتماعی دنبال کنید:</span>
                            <div class="footer-social">
                                <ul class="footer-ul-social">
                                    <li class="footer-social-item">
                                        <a href="#" class="footer-social-link">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li class="footer-social-item">
                                        <a href="#" class="footer-social-link">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="footer-social-item">
                                        <a href="#" class="footer-social-link">
                                            <i class="fa fa-linkedin-square"></i>
                                        </a>
                                    </li>
                                    <li class="footer-social-item">
                                        <a href="#" class="footer-social-link">
                                            <i class="fa fa-telegram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-more-info">
            <div class="footer-description-content">
                <div class="col-xs-8 col-md-8 col-xs-12 pull-right">
                    <div class="footer-content">
                        <article class="footer-seo mt-3">
                            <h1>فروشگاه اینترنتی دیجی‌اسمارت، بررسی، انتخاب و خرید آنلاین</h1>
                            <p>دیجی‌اسمارت به عنوان یکی از قدیمی‌ترین فروشگاه های اینترنتی با بیش از یک دهه تجربه، با پایبندی به سه اصل، پرداخت در محل، 7 روز ضمانت بازگشت کالا و تضمین اصل‌بودن کالا موفق شده تا همگام با فروشگاه‌های معتبر جهان، به بزرگ‌ترین فروشگاه اینترنتی ایران تبدیل شود. به محض ورود به سایت دیجی‌اسمارت با دنیایی از کالا رو به رو می‌شوید! هر آنچه که نیاز دارید و به ذهن شما خطور می‌کند در اینجا پیدا خواهید کرد.</p>
                        </article>
                    </div>
                </div>
                <div class="">
                    <div class="col-lg-4 col-md-4 col-xs-12 pull-left">
                        <aside>
                            <ul class="footer-safety-partner mt-4 pull-left">
                                <li class="footer-safety-partner-1">
                                    <a href="#">
                                        <img src="assets/images/footer/license/L-2.png">
                                    </a>
                                </li>
                                <li class="footer-safety-partner-1">
                                    <a href="#">
                                        <img src="assets/images/footer/license/L-1.png">
                                    </a>
                                </li>
                            </ul>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="footer-copyright-text">
                استفاده از مطالب فروشگاه اینترنتی دیجی‌اسمارت فقط برای مقاصد غیرتجاری و با ذکر منبع
                بلامانع است. کلیه حقوق این سایت متعلق به شرکت نوآوران فن آوازه (فروشگاه آنلاین دیجی‌اسمارت) می‌باشد.
            </div>
        </div>
    </article>
</footer>
<!--footer------------------------------------->

</body>
<!--jquery--------------------------------------->
<script src="assets/js/jquery-3.2.1.min.js"></script>
<!--    bootstrap-------------------------------->
<script src="assets/js/bootstrap.js"></script>
<!--main----------------------------------------->
<script src="assets/js/main.js"></script>
<script src="{{asset('assets/toastr/toastr.min.js')}}"></script>
</html>
