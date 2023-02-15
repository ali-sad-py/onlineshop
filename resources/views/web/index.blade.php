<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
    name='viewport'/>
    <title>فروشگاه اینترنتی دیجی اسمارت</title>
    <!--    font------------------------------------>
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/materialdesignicons.css">
    <link rel="stylesheet" href="assets/css/materialdesignicons.css.map">
    <!--    bootstrap------------------------------->
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <!--    owl.carousel---------------------------->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <!-- sweetalert2-------------------------------->
    <link rel="stylesheet" href="assets/css/sweetalert2.min.css">
    <!--    responsive------------------------------>
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!--    main style------------------------------>
    <link rel="stylesheet" href="assets/css/main.css">
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
                    @php
                    use Illuminate\Support\Facades\Auth;
                    //  $user=Auth::user()->id;
                        @endphp
                    <ul class="nav-lr">
                        <li class="nav-item-account">
                            @if(Auth::check())
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



                                                @else

                                            <a href="#">
                                <img src="assets/images/user.png" alt="user">
                                ورود / ثبت نام
                                <div class="dropdown-menu">
                                    <ul>
                                        <li class="dropdown-menu-item">
                                            <a href="#" class="dropdown-item">
                                                <i class="mdi mdi-account-card-details-outline"></i>
                                                ثبت نام
                                            </a>
                                        </li>
                                        <li class="dropdown-menu-item">
                                            <a href="#" class="dropdown-item">
                                                <i class="mdi mdi-comment-text-outline"></i>
                                                ورود
                                                <span class="count">1</span>
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                            </a>
                            @endif
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
                                        <li class="level-three-menu">
                                            <ul>
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
                                            </ul>
                                        </li>
                                        <li class="level-three-menu">
                                            <ul>
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
                                            </ul>
                                        </li>
                                        <li class="level-three-menu">
                                            <ul>
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
                                            </ul>
                                        </li>
                                        <li class="level-three-menu">
                                            <ul>
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
                                            </ul>
                                        </li>
                                        <li class="images-menu-list">
                                            <a href="#">
                                                <img src="assets/images/menu/ryan-christodoulou-789566-unsplash.jpg">
                                                <div class="box-shadow"></div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="list-item-children">
                                    <a href="#" class="list-item-children-category">
                                        <img src="assets/images/menu/icon/necklace.png">
                                        طلا و جواهر
                                    </a>
                                    <ul class="megamenu-level-3">
                                        <a href="#" class="list-category-megamenu">همه دسته بندی های طلا و جواهر</a>
                                        <li class="level-three-menu">
                                            <ul>
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
                                            </ul>
                                        </li>
                                        <li class="level-three-menu">
                                            <ul>
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
                                            </ul>
                                        </li>
                                        <li class="level-three-menu">
                                            <ul>
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
                                            </ul>
                                        </li>
                                        <li class="level-three-menu">
                                            <ul>
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
                                            </ul>
                                        </li>
                                        <li class="images-menu-list">
                                            <a href="#">
                                                <img src="assets/images/menu/Jewelry.jpg">
                                                <div class="box-shadow"></div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="list-item-children">
                                    <a href="#" class="list-item-children-category">
                                        <img src="assets/images/menu/icon/digital.png">
                                        کالای دیجیتال
                                    </a>
                                    <ul class="megamenu-level-3">
                                        <a href="#" class="list-category-megamenu">همه دسته بندی های کالای دیجیتال</a>
                                        <li class="level-three-menu">
                                            <ul>
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
                                            </ul>
                                        </li>
                                        <li class="level-three-menu">
                                            <ul>
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
                                            </ul>
                                        </li>
                                        <li class="level-three-menu">
                                            <ul>
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
                                            </ul>
                                        </li>
                                        <li class="level-three-menu">
                                            <ul>
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
                                            </ul>
                                        </li>
                                        <li class="images-menu-list">
                                            <a href="#">
                                                <img src="assets/images/menu/311-3114215_macbook-pro-office-photography.jpg">
                                                <div class="box-shadow"></div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="list-item-children">
                                    <a href="#" class="list-item-children-category">
                                        <img src="assets/images/menu/icon/dishes.png">
                                        ظروف
                                    </a>
                                    <ul class="megamenu-level-3">
                                        <a href="#" class="list-category-megamenu">همه دسته بندی های ظروف</a>
                                        <li class="level-three-menu">
                                            <ul>
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
                                            </ul>
                                        </li>
                                        <li class="level-three-menu">
                                            <ul>
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
                                            </ul>
                                        </li>
                                        <li class="level-three-menu">
                                            <ul>
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
                                            </ul>
                                        </li>
                                        <li class="level-three-menu">
                                            <ul>
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
                                            </ul>
                                        </li>
                                        <li class="images-menu-list">
                                            <a href="#">
                                                <img src="assets/images/menu/viennese_waffles_waffles_fruits_178672_1920x1080.jpg">
                                                <div class="box-shadow"></div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="list-item-children">
                                    <a href="#" class="list-item-children-category">
                                        <img src="assets/images/menu/icon/dress.png">
                                        پوشاک
                                    </a>
                                    <ul class="megamenu-level-3">
                                        <a href="#" class="list-category-megamenu">همه دسته بندی های پوشاک</a>
                                        <li class="level-three-menu">
                                            <ul>
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
                                            </ul>
                                        </li>
                                        <li class="level-three-menu">
                                            <ul>
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
                                            </ul>
                                        </li>
                                        <li class="level-three-menu">
                                            <ul>
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
                                            </ul>
                                        </li>
                                        <li class="level-three-menu">
                                            <ul>
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
                                            </ul>
                                        </li>
                                        <li class="images-menu-list">
                                            <a href="#">
                                                <img src="assets/images/menu/190-1900787_image-may-contain-clothing-apparel-boutique-and-shop.jpg">
                                                <div class="box-shadow"></div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="list-item-children">
                                    <a href="#" class="list-item-children-category">
                                        <img src="assets/images/menu/icon/couch.png">
                                        خانه و آشپزخانه
                                    </a>
                                    <ul class="megamenu-level-3">
                                        <a href="#" class="list-category-megamenu">همه دسته بندی های مبلمان</a>
                                        <li class="level-three-menu">
                                            <ul>
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
                                            </ul>
                                        </li>
                                        <li class="level-three-menu">
                                            <ul>
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
                                            </ul>
                                        </li>
                                        <li class="level-three-menu">
                                            <ul>
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
                                            </ul>
                                        </li>
                                        <li class="level-three-menu">
                                            <ul>
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
                                            </ul>
                                        </li>
                                        <li class="images-menu-list">
                                            <a href="#">
                                                <img src="assets/images/menu/sofa_decoration_interior_vase_lamp_white_background_80205_1920x1080.jpg">
                                                <div class="box-shadow"></div>
                                            </a>
                                        </li>
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
                            <a href="{{route('contact.us')}}" class="list-category">تماس با ما</a>
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
    <div class="nav-categories-overlay"></div>
<!--header------------------------------------->
<!--    slider--------------------------------->
        <article class="container-main">
            <div class="page-row-main-top">
                <div class="col-lg-8 col-md-8 col-xs-12 pull-right">
                    <div class="main-slider-container">
                          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                          <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                          </ol>
                          <div class="carousel-inner">
                            <div class="carousel-item active">
                              <img class="d-block w-100" src="assets/images/main-slider/1.jpg" alt="First slide">
                            </div>
                            <div class="carousel-item">
                              <img class="d-block w-100" src="assets/images/main-slider/2.jpg" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                              <img class="d-block w-100" src="assets/images/main-slider/3.jpg" alt="Third slide">
                            </div>
                            <div class="carousel-item">
                              <img class="d-block w-100" src="assets/images/main-slider/4.jpg" alt="Third slide">
                            </div>
                          </div>
                          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                          </a>
                          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                          </a>
                        </div>
                    </div>
                </div>
<!--    slider--------------------------------->
<!--adplacement-------------------------------->
                <div class="col-lg-4 col-md-4 col-xs-12 pull-left">
                    <aside class="adplacement-container-column">
                        <a href="#" class="adplacement-item adplacement-item-column">
                            <div class="adplacement-sponsored-box">
                                <img src="assets/images/adplacement/1.gif">
                            </div>
                        </a>
                        <a href="#" class="adplacement-item adplacement-item-column">
                            <div class="adplacement-sponsored-box">
                                <img src="assets/images/adplacement/2.jpg">
                            </div>
                        </a>
                    </aside>
                </div>
            </div>
<!--adplacement-------------------------------->

<!--    product-slider------------------------->
            <div class="col-lg-9 col-md-9 col-xs-12 pull-right">
                <div class="section-slider-product mb-4 mt-3">
                    <div class="widget widget-product card">
                        <header class="card-header">
                            <span class="title-one">محبوب ترین ها</span>
                                <h3 class="card-title">مشاهده همه</h3>
                            </header>
                                <div class="product-carousel owl-carousel owl-theme owl-rtl owl-loaded owl-drag">
                                <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 2234px;"><div class="owl-item active" style="width: 309.083px; margin-left: 10px;"><div class="item">
                                    <a href="#">
                                       <div class="stars-plp">
                                                <span class="mdi mdi-star active"></span>
                                                <span class="mdi mdi-star active"></span>
                                                <span class="mdi mdi-star active"></span>
                                                <span class="mdi mdi-star active"></span>
                                                <span class="mdi mdi-star active"></span>
                                            </div>
                                        <img src="assets/images/slider-product/tev-1.jpg"
                                         class="img-fluid" alt="">
                                    </a>
                                    <h2 class="post-title">
                                        <a href="#">
                                            تلویزیون ال ای دی هوشمند سامسونگ مدل 82NU8900 سایز 82 اینچ
                                        </a>
                                    </h2>
                                    <div class="price">
                                        <ins>
                                            <span>۳,۳۹۵,۰۰۰<span>تومان</span></span>
                                        </ins>
                                    </div>
                                    </div></div><div class="owl-item active" style="width: 309.083px; margin-left: 10px;"><div class="item">
                                    <a href="#">
                                       <div class="stars-plp">
                                                <span class="mdi mdi-star active"></span>
                                                <span class="mdi mdi-star active"></span>
                                                <span class="mdi mdi-star active"></span>
                                                <span class="mdi mdi-star active"></span>
                                                <span class="mdi mdi-star active"></span>
                                            </div>
                                        <img src="assets/images/slider-product/tev-2.jpg"
                                         class="img-fluid" alt="">
                                    </a>
                                    <h2 class="post-title">
                                        <a href="#">
                                            تلویزیون ال ای دی هوشمند ایکس ویژن مدل 55XT515 سایز 55 اینچ
                                        </a>
                                    </h2>
                                    <div class="price">
                                        <ins>
                                            <span>۳,۳۹۵,۰۰۰<span>تومان</span></span>
                                        </ins>
                                    </div>
                                        </div></div><div class="owl-item active" style="width: 309.083px; margin-left: 10px;"><div class="item">
                                        <a href="#">
                                           <div class="stars-plp">
                                                    <span class="mdi mdi-star active"></span>
                                                    <span class="mdi mdi-star active"></span>
                                                    <span class="mdi mdi-star active"></span>
                                                    <span class="mdi mdi-star active"></span>
                                                    <span class="mdi mdi-star active"></span>
                                                </div>
                                            <img src="assets/images/slider-product/tev-3.jpg"
                                             class="img-fluid" alt="">
                                        </a>
                                        <h2 class="post-title">
                                            <a href="#">
                                                تلویزیون ال ای دی هوشمند مجیک تی وی مدل MT65D2400 سایز 65 اینچ
                                            </a>
                                        </h2>
                                        <div class="price">
                                            <ins>
                                                <span>۳,۳۹۵,۰۰۰<span>تومان</span></span>
                                            </ins>
                                        </div>
                                        </div>
                                    </div>
                                        <div class="owl-item active" style="width: 309.083px; margin-left: 10px;">
                                           <div class="item">
                                    <a href="#">
                                       <div class="stars-plp">
                                                <span class="mdi mdi-star active"></span>
                                                <span class="mdi mdi-star active"></span>
                                                <span class="mdi mdi-star active"></span>
                                                <span class="mdi mdi-star active"></span>
                                                <span class="mdi mdi-star active"></span>
                                            </div>
                                        <img src="assets/images/slider-product/tev-4.jpg"
                                         class="img-fluid" alt="">
                                    </a>
                                    <h2 class="post-title">
                                        <a href="#">
                                            تلویزیون ال ای دی ال جی مدل 43LJ52100 سایز 43 اینچ
                                        </a>
                                    </h2>
                                    <div class="price">
                                        <ins>
                                            <span>۳,۳۹۵,۰۰۰<span>تومان</span></span>
                                        </ins>
                                    </div>
                                    </div>
                                    </div>
                                        <div class="owl-item" style="width: 309.083px; margin-left: 10px;">
                                           <div class="item">
                                    <a href="#">
                                       <div class="stars-plp">
                                                <span class="mdi mdi-star active"></span>
                                                <span class="mdi mdi-star active"></span>
                                                <span class="mdi mdi-star active"></span>
                                                <span class="mdi mdi-star active"></span>
                                                <span class="mdi mdi-star active"></span>
                                            </div>
                                        <img src="assets/images/slider-product/tev-5.jpg"
                                         class="img-fluid" alt="">
                                    </a>
                                    <h2 class="post-title">
                                        <a href="#">
                                            تلویزیون ال ای دی هوشمند ایکس ویژن مدل 49XTU725 سایز 49 اینچ
                                        </a>
                                    </h2>
                                    <div class="price">
                                        <ins>
                                            <span>۳,۳۹۵,۰۰۰<span>تومان</span></span>
                                        </ins>
                                    </div>
                                    </div>
                                    </div>
                                    <div class="owl-item" style="width: 309.083px; margin-left: 10px;">
                                        <div class="item">
                                    <a href="#">
                                       <div class="stars-plp">
                                                <span class="mdi mdi-star active"></span>
                                                <span class="mdi mdi-star active"></span>
                                                <span class="mdi mdi-star active"></span>
                                                <span class="mdi mdi-star active"></span>
                                                <span class="mdi mdi-star active"></span>
                                            </div>
                                        <img src="assets/images/slider-product/tev-6.jpg"
                                         class="img-fluid" alt="">
                                    </a>
                                    <h2 class="post-title">
                                        <a href="#">
                                            تلویزیون ال ای دی هوشمند ایکس ویژن مدل 43XT725 سایز 43 اینچ
                                        </a>
                                    </h2>
                                    <div class="price">
                                        <ins>
                                            <span>۳,۳۹۵,۰۰۰<span>تومان</span></span>
                                        </ins>
                                    </div>
                                    </div>
                                    </div>
                                    <div class="owl-item" style="width: 309.083px; margin-left: 10px;">
                                        <div class="item">
                                    <a href="#">
                                       <div class="stars-plp">
                                                <span class="mdi mdi-star active"></span>
                                                <span class="mdi mdi-star active"></span>
                                                <span class="mdi mdi-star active"></span>
                                                <span class="mdi mdi-star active"></span>
                                                <span class="mdi mdi-star active"></span>
                                            </div>
                                        <img src="assets/images/slider-product/tev-7.jpg"
                                         class="img-fluid" alt="">
                                    </a>
                                    <h2 class="post-title">
                                        <a href="#">
                                            تلویزیون ال ای دی هوشمند ایکس ویژن مدل 55XTU725 سایز 55 اینچ
                                        </a>
                                    </h2>
                                    <div class="price">
                                        <ins>
                                            <span>۳,۳۹۵,۰۰۰<span>تومان</span></span>
                                        </ins>
                                    </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!--    product-slider------------------------->
<!--slider-sidebar----------------------------->
            <div class="col-lg-3 col-md-3 col-xs-12 pull-left">
                <div class="promo-single mb-4 mt-3">
                    <div class="widget-suggestion widget card">
                        <header class="card-header cart-sidebar">
                            <h3 class="card-title ts-3">پیشنهادهای لحظه‌ای</h3>
                        </header>
                        <div id="progressBar">
                            <div class="slide-progress" style="width: 100%; transition: width 5000ms ease 0s;"></div>
                                </div>
                                    <div id="suggestion-slider" class="owl-carousel owl-theme owl-rtl owl-loaded owl-drag">
                                    <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(1369px, 0px, 0px); transition: all 0.25s ease 0s; width: 2190px;"><div class="owl-item cloned" style="width: 273.75px;"><div class="item">
                                            <a href="#">
                                                <img src="assets/images/sidebar/1.jpg" class="w-100" alt="">
                                            </a>
                                            <h3 class="product-title">
                                                <a href="#"> کارت گرافیک ای ام دی مدل Radeon HD 6450 </a>
                                            </h3>
                                            <div class="price">
                                                <span class="new-price-discount">%10</span>
                                                <span class="amount">2,515,00<span>تومان</span></span>
                                                <div class="stars-plp">
                                                    <span class="mdi mdi-star active"></span>
                                                    <span class="mdi mdi-star active"></span>
                                                    <span class="mdi mdi-star active"></span>
                                                    <span class="mdi mdi-star active"></span>
                                                    <span class="mdi mdi-star active"></span>
                                                </div>
                                            </div>
                                        </div></div><div class="owl-item cloned" style="width: 273.75px;"><div class="item">
                                            <a href="#">
                                                <img src="assets/images/sidebar/2.jpg" class="w-100" alt="">
                                            </a>
                                            <h3 class="product-title">
                                                <a href="#"> هندزفری بلوتوث مدل SP01  </a>
                                            </h3>
                                            <div class="price">
                                                <span class="new-price-discount">%10</span>
                                                <span class="amount">2,515,00<span>تومان</span></span>
                                                <div class="stars-plp">
                                                    <span class="mdi mdi-star active"></span>
                                                    <span class="mdi mdi-star active"></span>
                                                    <span class="mdi mdi-star active"></span>
                                                    <span class="mdi mdi-star"></span>
                                                    <span class="mdi mdi-star"></span>
                                                </div>
                                            </div>
                                        </div></div><div class="owl-item" style="width: 273.75px;"><div class="item">
                                            <a href="#">
                                                <img src="assets/images/sidebar/3.jpg" class="w-100" alt="">
                                            </a>
                                            <h3 class="product-title">
                                                <a href="#"> هدفون بی سیم نیا مدل Q8-851S</a>
                                            </h3>
                                            <div class="price">
                                                <span class="new-price-discount">%10</span>
                                                <span class="amount">2,515,00<span>تومان</span></span>
                                                <div class="stars-plp">
                                                    <span class="mdi mdi-star active"></span>
                                                    <span class="mdi mdi-star active"></span>
                                                    <span class="mdi mdi-star active"></span>
                                                    <span class="mdi mdi-star active"></span>
                                                    <span class="mdi mdi-star active"></span>
                                                </div>
                                            </div>
                                        </div></div><div class="owl-item" style="width: 273.75px;"><div class="item">
                                            <a href="#">
                                                <img src="assets/images/sidebar/4.jpg" class="w-100" alt="">
                                            </a>
                                            <h3 class="product-title">
                                                <a href="#"> هدفون آیوان مدل E47
                                                </a>
                                            </h3>
                                            <div class="price">
                                                <span class="new-price-discount">%10</span>
                                                <span class="amount">2,515,00<span>تومان</span></span>
                                                <div class="stars-plp">
                                                    <span class="mdi mdi-star active"></span>
                                                    <span class="mdi mdi-star active"></span>
                                                    <span class="mdi mdi-star active"></span>
                                                    <span class="mdi mdi-star active"></span>
                                                    <span class="mdi mdi-star"></span>
                                                </div>
                                            </div>
                                        </div></div>
                                           </div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button>
                                        </div>
                                        <div class="owl-dots disabled"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
<!--slider-sidebar----------------------------->

<!--        category--------------------------->
        <div class="col-12">
            <div class="promotion-categories-container mb-4">
                <span class="promotion-categories-title">بیش از ۱،۵۰۰،۰۰۰ کالا در دسته‌بندی‌های مختلف</span>
                <div class="category-container">
                    <div class="promotion-categories">
                        <a href="#" class="promotion-category">
                            <img src="assets/images/category/macbook.png">
                            <div class="promotion-category-name">کالای دیجیتال</div>
                            <div class="promotion-category-quantity">۲۰۳۰۰۰ کالا</div>
                        </a>
                        <a href="#" class="promotion-category">
                            <img src="assets/images/category/heart-shape-outline-with-lifeline.png">
                            <div class="promotion-category-name">لوازم آرایشی</div>
                            <div class="promotion-category-quantity">۶۰۰۰۰ کالا</div>
                        </a>
                        <a href="#" class="promotion-category">
                            <img src="assets/images/category/support.png">
                            <div class="promotion-category-name">خودرو، ابزار و اداری</div>
                            <div class="promotion-category-quantity">۷۲۰۰۰ کالا</div>
                        </a>
                        <a href="#" class="promotion-category">
                            <img src="assets/images/category/dress.png">
                            <div class="promotion-category-name">مد و پوشاک</div>
                            <div class="promotion-category-quantity">۲۶۱۰۰۰ کالا</div>
                        </a>
                        <a href="#" class="promotion-category">
                            <img src="assets/images/category/sofa.png">
                            <div class="promotion-category-name">خانه و آشپزخانه</div>
                            <div class="promotion-category-quantity">۲۷۷۰۰۰ کالا</div>
                        </a>
                        <a href="#" class="promotion-category">
                            <img src="assets/images/category/pen.png">
                            <div class="promotion-category-name">کتاب، لوازم تحریر و هنر</div>
                            <div class="promotion-category-quantity">۱۰۴۰۰۰ کالا</div>
                        </a>
                        <a href="#" class="promotion-category">
                            <img src="assets/images/category/baby.png">
                            <div class="promotion-category-name">اسباب بازی، کودک و نوزاد</div>
                            <div class="promotion-category-quantity">۳۷۰۰۰ کالا</div>
                        </a>
                        <a href="#" class="promotion-category">
                            <img src="assets/images/category/sports-and-competition.png">
                            <div class="promotion-category-name">ورزش و سفر</div>
                            <div class="promotion-category-quantity">۱۹۰۰۰ کالا</div>
                        </a>
                        <a href="#" class="promotion-category">
                            <img src="assets/images/category/birthday-and-party.png">
                            <div class="promotion-category-name">خوردنی و آشامیدنی</div>
                            <div class="promotion-category-quantity">۲۷۰۰۰ کالا</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
<!--        category--------------------------->



<!--    adplacemen-container----------------------------->
           <div class="col-12">
                <div class="adplacement-container-row mb-4">
                    <div class="col-6 col-lg-3 pull-right" style="padding-left:0;">
                        <a href="#" class="adplacement-item mb-4">
                            <div class="adplacement-sponsored-box">
                                <img src="assets/images/adplacement/3.jpg" alt="خرید خانه - نوشیدنی" title="خرید خانه - نوشیدنی">
                            </div>
                        </a>
                    </div>

                    <div class="col-6 col-lg-3 pull-right" style="padding-left:0;">
                        <a href="#" class="adplacement-item mb-4">
                            <div class="adplacement-sponsored-box">
                                <img src="assets/images/adplacement/4.jpg" alt="خرید خانه - پروتئینی" title="خرید خانه - پروتئینی">
                            </div>
                        </a>
                    </div>

                    <div class="col-6 col-lg-3 pull-right" style="padding-left:0;">
                        <a href="#" class="adplacement-item mb-4">
                            <div class="adplacement-sponsored-box">
                                <img src="assets/images/adplacement/5.jpg" alt="داده پرداز" title="داده پرداز">
                            </div>
                        </a>
                    </div>

                    <div class="col-6 col-lg-3 pull-right" style="padding-left:0;">
                        <a href="#" class="adplacement-item mb-4">
                            <div class="adplacement-sponsored-box">
                                <img src="assets/images/adplacement/6.jpg" alt="خرید خانه - شوینده و سلولزی" title="خرید خانه - شوینده و سلولزی">
                            </div>
                        </a>
                    </div>

                    <div class="col-6 col-lg-6 pull-right" style="padding-left:0;">
                        <a href="#" class="adplacement-item">
                            <div class="adplacement-sponsored-box">
                                <img src="assets/images/adplacement/7.jpg" alt="باراد" title="باراد">
                            </div>
                        </a>
                    </div>

                    <div class="col-6 col-lg-6 pull-right" style="padding-left:0;">
                        <a href="#" class="adplacement-item">
                            <div class="adplacement-sponsored-box">
                                <img src="assets/images/adplacement/8.jpg" alt="پارس حیان" title="پارس حیان">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
<!--    adplacemen-container----------------------------->

<!--    product-slider----------------------------------->
            <div class="col-lg-12 col-md-12 col-xs-12 pull-right">
                <div class="section-slider-product mb-4">
                    <div class="widget widget-product card">
                        <header class="card-header">
                            <span class="title-one">محبوب ترین ها</span>
                                <h3 class="card-title">مشاهده همه</h3>
                            </header>
                                <div class="product-carousel owl-carousel owl-theme owl-rtl owl-loaded owl-drag">
                                <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 2234px;"><div class="owl-item active" style="width: 309.083px; margin-left: 10px;"><div class="item">
                                    <a href="#">
                                        <img src="assets/images/slider-product/tev-1.jpg"
                                         class="img-fluid" alt="">
                                    </a>
                                    <h2 class="post-title">
                                        <a href="#">
                                            تلویزیون ال ای دی هوشمند سامسونگ مدل 82NU8900 سایز 82 اینچ
                                        </a>
                                    </h2>
                                    <div class="price">
                                        <ins>
                                            <span>۳,۳۹۵,۰۰۰<span>تومان</span></span>
                                            <div class="stars-plp">
                                                <span class="mdi mdi-star active"></span>
                                                <span class="mdi mdi-star active"></span>
                                                <span class="mdi mdi-star active"></span>
                                                <span class="mdi mdi-star active"></span>
                                                <span class="mdi mdi-star active"></span>
                                            </div>
                                        </ins>
                                    </div>
                                    </div></div><div class="owl-item active" style="width: 309.083px; margin-left: 10px;"><div class="item">
                                            <a href="#">
                                                <img src="assets/images/slider-product/tev-2.jpg" class="img-fluid" alt="">
                                            </a>
                                            <h2 class="post-title">
                                                <a href="#">
                                                    تلویزیون ال ای دی هوشمند ایکس ویژن مدل 55XT515 سایز 55 اینچ
                                                </a>
                                            </h2>
                                            <div class="price">
                                        <ins>
                                            <span>۳,۳۹۵,۰۰۰<span>تومان</span></span>
                                            <div class="stars-plp">
                                                <span class="mdi mdi-star active"></span>
                                                <span class="mdi mdi-star active"></span>
                                                <span class="mdi mdi-star active"></span>
                                                <span class="mdi mdi-star active"></span>
                                                <span class="mdi mdi-star"></span>
                                            </div>
                                        </ins>
                                    </div>
                                        </div></div><div class="owl-item active" style="width: 309.083px; margin-left: 10px;"><div class="item">
                                            <a href="#">
                                                <img src="assets/images/slider-product/tev-3.jpg" class="img-fluid" alt="">
                                            </a>
                                            <h2 class="post-title">
                                                <a href="#">
                                                    تلویزیون ال ای دی هوشمند مجیک تی وی مدل MT65D2400 سایز 65 اینچ
                                                </a>
                                            </h2>
                                            <div class="price">
                                        <ins>
                                            <span>۳,۳۹۵,۰۰۰<span>تومان</span></span>
                                            <div class="stars-plp">
                                                <span class="mdi mdi-star active"></span>
                                                <span class="mdi mdi-star active"></span>
                                                <span class="mdi mdi-star active"></span>
                                                <span class="mdi mdi-star active"></span>
                                                <span class="mdi mdi-star active"></span>
                                            </div>
                                        </ins>
                                    </div>
                                        </div>
                                    </div>
                                        <div class="owl-item active" style="width: 309.083px; margin-left: 10px;">
                                           <div class="item">
                                            <a href="#">
                                                <img src="assets/images/slider-product/tev-4.jpg" class="img-fluid" alt="">
                                            </a>
                                            <h2 class="post-title">
                                                <a href="#">
                                                تلویزیون ال ای دی ال جی مدل 43LJ52100 سایز 43 اینچ
                                            </a>
                                            </h2>
                                            <div class="price">
                                        <ins>
                                            <span>۳,۳۹۵,۰۰۰<span>تومان</span></span>
                                            <div class="stars-plp">
                                                <span class="mdi mdi-star active"></span>
                                                <span class="mdi mdi-star active"></span>
                                                <span class="mdi mdi-star active"></span>
                                                <span class="mdi mdi-star"></span>
                                                <span class="mdi mdi-star"></span>
                                            </div>
                                        </ins>
                                    </div>
                                        </div>
                                    </div>
                                        <div class="owl-item" style="width: 309.083px; margin-left: 10px;">
                                           <div class="item">
                                            <a href="#">
                                                <img src="assets/images/slider-product/tev-5.jpg" class="img-fluid" alt="">
                                            </a>
                                            <h2 class="post-title">
                                                <a href="#">
                                                تلویزیون ال ای دی هوشمند ایکس ویژن مدل 49XTU725 سایز 49 اینچ
                                            </a>
                                            </h2>
                                            <div class="price">
                                        <ins>
                                            <span>۳,۳۹۵,۰۰۰<span>تومان</span></span>
                                            <div class="stars-plp">
                                                <span class="mdi mdi-star active"></span>
                                                <span class="mdi mdi-star active"></span>
                                                <span class="mdi mdi-star active"></span>
                                                <span class="mdi mdi-star"></span>
                                                <span class="mdi mdi-star"></span>
                                            </div>
                                        </ins>
                                    </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 309.083px; margin-left: 10px;">
                                        <div class="item">
                                            <a href="#">
                                                <img src="assets/images/slider-product/tev-6.jpg" class="img-fluid" alt="">
                                            </a>
                                            <h2 class="post-title">
                                                <a href="#">
                                                    تلویزیون ال ای دی هوشمند ایکس ویژن مدل 43XT725 سایز 43 اینچ
                                                </a>
                                            </h2>
                                            <div class="price">
                                        <ins>
                                            <span>۳,۳۹۵,۰۰۰<span>تومان</span></span>
                                            <div class="stars-plp">
                                                <span class="mdi mdi-star active"></span>
                                                <span class="mdi mdi-star active"></span>
                                                <span class="mdi mdi-star active"></span>
                                                <span class="mdi mdi-star active"></span>
                                                <span class="mdi mdi-star"></span>
                                            </div>
                                        </ins>
                                    </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 309.083px; margin-left: 10px;">
                                        <div class="item">
                                            <a href="#">
                                                <img src="assets/images/slider-product/tev-7.jpg" class="img-fluid" alt="">
                                            </a>
                                            <h2 class="post-title">
                                                <a href="#">
                                                    تلویزیون ال ای دی هوشمند ایکس ویژن مدل 55XTU725 سایز 55 اینچ
                                                </a>
                                            </h2>
                                            <div class="price">
                                        <ins>
                                            <span>۳,۳۹۵,۰۰۰<span>تومان</span></span>
                                            <div class="stars-plp">
                                                <span class="mdi mdi-star active"></span>
                                                <span class="mdi mdi-star active"></span>
                                                <span class="mdi mdi-star active"></span>
                                                <span class="mdi mdi-star active"></span>
                                                <span class="mdi mdi-star"></span>
                                            </div>
                                        </ins>
                                    </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!--    product-slider------------------------->

<!--   arrivals-product------------------------>
        <div class="col-12">
            <div class="arrivals-product">
                <div class="main-product-tab-area">
                    <div class="tab-menu mb-5">
                        <ul class="nav tabs-area">
                            <li class="nav-item nav-active">
                                <a href="#" class="nav-link" data-toggle="tab">همه</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-toggle="tab">ویژه</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-toggle="tab">جدید ترین ها</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-toggle="tab">پیشنهاد شده</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <section class="main-content">
                            <ul class="content-area">
                                <li class="item-content" style="display:block;">
                                    <a href="#" class="link-content">
                                        <div class="col-lg-3 col-md-4 col-xs-12 pull-right mb-3">
                                            <div class="product-vertical">
                                                <div class="vertical-product-thumb">
                                                    <a href="#">
                                                        <img src="assets/images/content-product/1.jpg">
                                                    </a>
                                                </div>
                                                <div class="card-vertical-product-content">
                                                    <div class="card-vertical-product-title">
                                                        <a href="#">
                                                            ساعت هوشمند جی-تب مدل W101 Hero
                                                        </a>
                                                    </div>
                                                    <div class="card-vertical-product-price">
                                                        ۱۲۷,۰۰۰
                                                        <span class="price-currency">تومان</span>
                                                        <div class="stars-plp">
                                                            <span class="mdi mdi-star active"></span>
                                                            <span class="mdi mdi-star active"></span>
                                                            <span class="mdi mdi-star active"></span>
                                                            <span class="mdi mdi-star active"></span>
                                                            <span class="mdi mdi-star"></span>
                                                        </div>
                                                    </div>
                                                    <div class="product-actions-secondary">
                                                        <div class="heart" title="افزودن به لیست علاقه مندی">
                                                            <span class="mdi mdi-heart"></span>
                                                        </div>
                                                        <div class="product-introduction-cart" title="افزودن به سبد خرید">
                                                            <span class="c-introduction">
                                                                افزودن به سبد خرید
                                                            </span>
                                                        </div>
                                                        <div class="comparison" title="افزودن برای مقایسه">
                                                            <i class="fa fa-random" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-md-4 col-xs-12 pull-right mb-3">
                                            <div class="product-vertical">
                                                <div class="vertical-product-thumb">
                                                    <a href="#">
                                                        <img src="assets/images/content-product/2.jpg">
                                                    </a>
                                                </div>
                                                <div class="card-vertical-product-content">
                                                    <div class="card-vertical-product-title">
                                                        <a href="#">
                                                            ساعت هوشمند جی-تب مدل W101 Hero
                                                        </a>
                                                    </div>
                                                    <div class="card-vertical-product-price">
                                                        ۱۲۷,۰۰۰
                                                        <span class="price-currency">تومان</span>
                                                        <div class="stars-plp">
                                                             <span class="mdi mdi-star active"></span>
                                                             <span class="mdi mdi-star active"></span>
                                                             <span class="mdi mdi-star active"></span>
                                                             <span class="mdi mdi-star"></span>
                                                             <span class="mdi mdi-star"></span>
                                                         </div>
                                                    </div>
                                                    <div class="product-actions-secondary">
                                                        <div class="heart" title="افزودن به لیست علاقه مندی">
                                                            <span class="mdi mdi-heart"></span>
                                                        </div>
                                                        <div class="product-introduction-cart" title="افزودن به سبد خرید">
                                                            <span class="c-introduction">
                                                                افزودن به سبد خرید
                                                            </span>
                                                        </div>
                                                        <div class="comparison" title="افزودن برای مقایسه">
                                                            <i class="fa fa-random" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-md-4 col-xs-12 pull-right mb-3">
                                            <div class="product-vertical">
                                                <div class="vertical-product-thumb">
                                                    <a href="#">
                                                        <img src="assets/images/content-product/3.jpg">
                                                    </a>
                                                </div>
                                                <div class="card-vertical-product-content">
                                                    <div class="card-vertical-product-title">
                                                        <a href="#">
                                                            ساعت هوشمند جی-تب مدل W101 Hero
                                                        </a>
                                                    </div>
                                                    <div class="card-vertical-product-price">
                                                        ۱۲۷,۰۰۰
                                                        <span class="price-currency">تومان</span>
                                                        <div class="stars-plp">
                                                             <span class="mdi mdi-star active"></span>
                                                             <span class="mdi mdi-star active"></span>
                                                             <span class="mdi mdi-star active"></span>
                                                             <span class="mdi mdi-star active"></span>
                                                             <span class="mdi mdi-star active"></span>
                                                         </div>
                                                    </div>
                                                    <div class="product-actions-secondary">
                                                        <div class="heart" title="افزودن به لیست علاقه مندی">
                                                            <span class="mdi mdi-heart"></span>
                                                        </div>
                                                        <div class="product-introduction-cart" title="افزودن به سبد خرید">
                                                            <span class="c-introduction">
                                                                افزودن به سبد خرید
                                                            </span>
                                                        </div>
                                                        <div class="comparison" title="افزودن برای مقایسه">
                                                            <i class="fa fa-random" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-md-4 col-xs-12 pull-right mb-3">
                                            <div class="product-vertical">
                                                <div class="vertical-product-thumb">
                                                    <a href="#">
                                                        <img src="assets/images/content-product/4.jpg">
                                                    </a>
                                                </div>
                                                <div class="card-vertical-product-content">
                                                    <div class="card-vertical-product-title">
                                                        <a href="#">
                                                            ساعت هوشمند جی-تب مدل W101 Hero
                                                        </a>
                                                    </div>
                                                    <div class="card-vertical-product-price">
                                                        ۱۲۷,۰۰۰
                                                        <span class="price-currency">تومان</span>
                                                        <div class="stars-plp">
                                                             <span class="mdi mdi-star active"></span>
                                                             <span class="mdi mdi-star active"></span>
                                                             <span class="mdi mdi-star active"></span>
                                                             <span class="mdi mdi-star active"></span>
                                                             <span class="mdi mdi-star"></span>
                                                         </div>
                                                    </div>
                                                    <div class="product-actions-secondary">
                                                        <div class="heart" title="افزودن به لیست علاقه مندی">
                                                            <span class="mdi mdi-heart"></span>
                                                        </div>
                                                        <div class="product-introduction-cart" title="افزودن به سبد خرید">
                                                            <span class="c-introduction">
                                                                افزودن به سبد خرید
                                                            </span>
                                                        </div>
                                                        <div class="comparison" title="افزودن برای مقایسه">
                                                            <i class="fa fa-random" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-md-4 col-xs-12 pull-right mb-3">
                                            <div class="product-vertical">
                                                <div class="vertical-product-thumb">
                                                    <a href="#">
                                                        <img src="assets/images/content-product/1.jpg">
                                                    </a>
                                                </div>
                                                <div class="card-vertical-product-content">
                                                    <div class="card-vertical-product-title">
                                                        <a href="#">
                                                            ساعت هوشمند جی-تب مدل W101 Hero
                                                        </a>
                                                    </div>
                                                    <div class="card-vertical-product-price">
                                                        ۱۲۷,۰۰۰
                                                        <span class="price-currency">تومان</span>
                                                        <div class="stars-plp">
                                                             <span class="mdi mdi-star active"></span>
                                                             <span class="mdi mdi-star active"></span>
                                                             <span class="mdi mdi-star active"></span>
                                                             <span class="mdi mdi-star active"></span>
                                                             <span class="mdi mdi-star active"></span>
                                                         </div>
                                                    </div>
                                                    <div class="product-actions-secondary">
                                                        <div class="heart" title="افزودن به لیست علاقه مندی">
                                                            <span class="mdi mdi-heart"></span>
                                                        </div>
                                                        <div class="product-introduction-cart" title="افزودن به سبد خرید">
                                                            <span class="c-introduction">
                                                                افزودن به سبد خرید
                                                            </span>
                                                        </div>
                                                        <div class="comparison" title="افزودن برای مقایسه">
                                                            <i class="fa fa-random" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-md-4 col-xs-12 pull-right mb-3">
                                            <div class="product-vertical">
                                                <div class="vertical-product-thumb">
                                                    <a href="#">
                                                        <img src="assets/images/content-product/2.jpg">
                                                    </a>
                                                </div>
                                                <div class="card-vertical-product-content">
                                                    <div class="card-vertical-product-title">
                                                        <a href="#">
                                                            ساعت هوشمند جی-تب مدل W101 Hero
                                                        </a>
                                                    </div>
                                                    <div class="card-vertical-product-price">
                                                        ۱۲۷,۰۰۰
                                                        <span class="price-currency">تومان</span>
                                                        <div class="stars-plp">
                                                             <span class="mdi mdi-star active"></span>
                                                             <span class="mdi mdi-star active"></span>
                                                             <span class="mdi mdi-star active"></span>
                                                             <span class="mdi mdi-star"></span>
                                                             <span class="mdi mdi-star"></span>
                                                         </div>
                                                    </div>
                                                    <div class="product-actions-secondary">
                                                        <div class="heart" title="افزودن به لیست علاقه مندی">
                                                            <span class="mdi mdi-heart"></span>
                                                        </div>
                                                        <div class="product-introduction-cart" title="افزودن به سبد خرید">
                                                            <span class="c-introduction">
                                                                افزودن به سبد خرید
                                                            </span>
                                                        </div>
                                                        <div class="comparison" title="افزودن برای مقایسه">
                                                            <i class="fa fa-random" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-md-4 col-xs-12 pull-right mb-3">
                                            <div class="product-vertical">
                                                <div class="vertical-product-thumb">
                                                    <a href="#">
                                                        <img src="assets/images/content-product/3.jpg">
                                                    </a>
                                                </div>
                                                <div class="card-vertical-product-content">
                                                    <div class="card-vertical-product-title">
                                                        <a href="#">
                                                            ساعت هوشمند جی-تب مدل W101 Hero
                                                        </a>
                                                    </div>
                                                    <div class="card-vertical-product-price">
                                                        ۱۲۷,۰۰۰
                                                        <span class="price-currency">تومان</span>
                                                        <div class="stars-plp">
                                                             <span class="mdi mdi-star active"></span>
                                                             <span class="mdi mdi-star active"></span>
                                                             <span class="mdi mdi-star active"></span>
                                                             <span class="mdi mdi-star active"></span>
                                                             <span class="mdi mdi-star"></span>
                                                         </div>
                                                    </div>
                                                    <div class="product-actions-secondary">
                                                        <div class="heart" title="افزودن به لیست علاقه مندی">
                                                            <span class="mdi mdi-heart"></span>
                                                        </div>
                                                        <div class="product-introduction-cart" title="افزودن به سبد خرید">
                                                            <span class="c-introduction">
                                                                افزودن به سبد خرید
                                                            </span>

                                                        </div>
                                                        <div class="comparison" title="افزودن برای مقایسه">
                                                            <i class="fa fa-random" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-md-4 col-xs-12 pull-right mb-3">
                                            <div class="product-vertical">
                                                <div class="vertical-product-thumb">
                                                    <a href="#">
                                                        <img src="assets/images/content-product/4.jpg">
                                                    </a>
                                                </div>
                                                <div class="card-vertical-product-content">
                                                    <div class="card-vertical-product-title">
                                                        <a href="#">
                                                            ساعت هوشمند جی-تب مدل W101 Hero
                                                        </a>
                                                    </div>
                                                    <div class="card-vertical-product-price">
                                                        ۱۲۷,۰۰۰
                                                        <span class="price-currency">تومان</span>
                                                        <div class="stars-plp">
                                                             <span class="mdi mdi-star active"></span>
                                                             <span class="mdi mdi-star active"></span>
                                                             <span class="mdi mdi-star active"></span>
                                                             <span class="mdi mdi-star active"></span>
                                                             <span class="mdi mdi-star active"></span>
                                                         </div>
                                                    </div>
                                                    <div class="product-actions-secondary">
                                                        <div class="heart" title="افزودن به لیست علاقه مندی">
                                                            <span class="mdi mdi-heart"></span>
                                                        </div>
                                                        <div class="product-introduction-cart" title="افزودن به سبد خرید">
                                                            <span class="c-introduction">
                                                                افزودن به سبد خرید
                                                            </span>
                                                        </div>
                                                        <div class="comparison" title="افزودن برای مقایسه">
                                                            <i class="fa fa-random" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-md-4 col-xs-12 pull-right mb-3">
                                            <div class="product-vertical">
                                                <div class="vertical-product-thumb">
                                                    <a href="#">
                                                        <img src="assets/images/content-product/1.jpg">
                                                    </a>
                                                </div>
                                                <div class="card-vertical-product-content">
                                                    <div class="card-vertical-product-title">
                                                        <a href="#">
                                                            ساعت هوشمند جی-تب مدل W101 Hero
                                                        </a>
                                                    </div>
                                                    <div class="card-vertical-product-price">
                                                        ۱۲۷,۰۰۰
                                                        <span class="price-currency">تومان</span>
                                                        <div class="stars-plp">
                                                             <span class="mdi mdi-star active"></span>
                                                             <span class="mdi mdi-star active"></span>
                                                             <span class="mdi mdi-star active"></span>
                                                             <span class="mdi mdi-star active"></span>
                                                             <span class="mdi mdi-star"></span>
                                                         </div>
                                                    </div>
                                                    <div class="product-actions-secondary">
                                                        <div class="heart" title="افزودن به لیست علاقه مندی">
                                                            <span class="mdi mdi-heart"></span>
                                                        </div>
                                                        <div class="product-introduction-cart" title="افزودن به سبد خرید">
                                                            <span class="c-introduction">
                                                                افزودن به سبد خرید
                                                            </span>
                                                        </div>
                                                        <div class="comparison" title="افزودن برای مقایسه">
                                                            <i class="fa fa-random" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-md-4 col-xs-12 pull-right mb-3">
                                            <div class="product-vertical">
                                                <div class="vertical-product-thumb">
                                                    <a href="#">
                                                        <img src="assets/images/content-product/2.jpg">
                                                    </a>
                                                </div>
                                                <div class="card-vertical-product-content">
                                                    <div class="card-vertical-product-title">
                                                        <a href="#">
                                                            ساعت هوشمند جی-تب مدل W101 Hero
                                                        </a>
                                                    </div>
                                                    <div class="card-vertical-product-price">
                                                        ۱۲۷,۰۰۰
                                                        <span class="price-currency">تومان</span>
                                                        <div class="stars-plp">
                                                             <span class="mdi mdi-star active"></span>
                                                             <span class="mdi mdi-star active"></span>
                                                             <span class="mdi mdi-star active"></span>
                                                             <span class="mdi mdi-star active"></span>
                                                             <span class="mdi mdi-star"></span>
                                                         </div>
                                                    </div>
                                                    <div class="product-actions-secondary">
                                                        <div class="heart" title="افزودن به لیست علاقه مندی">
                                                            <span class="mdi mdi-heart"></span>
                                                        </div>
                                                        <div class="product-introduction-cart" title="افزودن به سبد خرید">
                                                            <span class="c-introduction">
                                                                افزودن به سبد خرید
                                                            </span>
                                                        </div>
                                                        <div class="comparison" title="افزودن برای مقایسه">
                                                            <i class="fa fa-random" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="item-content">
                                    <a href="#" class="link-content">
                                        <div class="col-lg-3 col-md-4 col-xs-12 pull-right mb-3">
                                            <div class="product-vertical">
                                                <div class="vertical-product-thumb">
                                                    <a href="#">
                                                        <img src="assets/images/content-product/1.jpg">
                                                    </a>
                                                </div>
                                                <div class="card-vertical-product-content">
                                                    <div class="card-vertical-product-title">
                                                        <a href="#">
                                                            ساعت هوشمند جی-تب مدل W101 Hero
                                                        </a>
                                                    </div>
                                                    <div class="card-vertical-product-price">
                                                        ۱۲۷,۰۰۰
                                                        <span class="price-currency">تومان</span>
                                                        <div class="stars-plp">
                                                             <span class="mdi mdi-star active"></span>
                                                             <span class="mdi mdi-star active"></span>
                                                             <span class="mdi mdi-star active"></span>
                                                             <span class="mdi mdi-star active"></span>
                                                             <span class="mdi mdi-star"></span>
                                                         </div>
                                                    </div>
                                                    <div class="product-actions-secondary">
                                                        <div class="heart" title="افزودن به لیست علاقه مندی">
                                                            <span class="mdi mdi-heart"></span>
                                                        </div>
                                                        <div class="product-introduction-cart" title="افزودن به سبد خرید">
                                                            <span class="c-introduction">
                                                                افزودن به سبد خرید
                                                            </span>
                                                        </div>
                                                        <div class="comparison" title="افزودن برای مقایسه">
                                                            <i class="fa fa-random" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-md-4 col-xs-12 pull-right mb-3">
                                            <div class="product-vertical">
                                                <div class="vertical-product-thumb">
                                                    <a href="#">
                                                        <img src="assets/images/content-product/2.jpg">
                                                    </a>
                                                </div>
                                                <div class="card-vertical-product-content">
                                                    <div class="card-vertical-product-title">
                                                        <a href="#">
                                                            ساعت هوشمند جی-تب مدل W101 Hero
                                                        </a>
                                                    </div>
                                                    <div class="card-vertical-product-price">
                                                        ۱۲۷,۰۰۰
                                                        <span class="price-currency">تومان</span>
                                                        <div class="stars-plp">
                                                             <span class="mdi mdi-star active"></span>
                                                             <span class="mdi mdi-star active"></span>
                                                             <span class="mdi mdi-star active"></span>
                                                             <span class="mdi mdi-star active"></span>
                                                             <span class="mdi mdi-star"></span>
                                                         </div>
                                                    </div>
                                                    <div class="product-actions-secondary">
                                                        <div class="heart" title="افزودن به لیست علاقه مندی">
                                                            <span class="mdi mdi-heart"></span>
                                                        </div>
                                                        <div class="product-introduction-cart" title="افزودن به سبد خرید">
                                                            <span class="c-introduction">
                                                                افزودن به سبد خرید
                                                            </span>
                                                        </div>
                                                        <div class="comparison" title="افزودن برای مقایسه">
                                                            <i class="fa fa-random" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-md-4 col-xs-12 pull-right mb-3">
                                            <div class="product-vertical">
                                                <div class="vertical-product-thumb">
                                                    <a href="#">
                                                        <img src="assets/images/content-product/3.jpg">
                                                    </a>
                                                </div>
                                                <div class="card-vertical-product-content">
                                                    <div class="card-vertical-product-title">
                                                        <a href="#">
                                                            ساعت هوشمند جی-تب مدل W101 Hero
                                                        </a>
                                                    </div>
                                                    <div class="card-vertical-product-price">
                                                        ۱۲۷,۰۰۰
                                                        <span class="price-currency">تومان</span>
                                                        <div class="stars-plp">
                                                             <span class="mdi mdi-star active"></span>
                                                             <span class="mdi mdi-star active"></span>
                                                             <span class="mdi mdi-star active"></span>
                                                             <span class="mdi mdi-star active"></span>
                                                             <span class="mdi mdi-star"></span>
                                                         </div>
                                                    </div>
                                                    <div class="product-actions-secondary">
                                                        <div class="heart" title="افزودن به لیست علاقه مندی">
                                                            <span class="mdi mdi-heart"></span>
                                                        </div>
                                                        <div class="product-introduction-cart" title="افزودن به سبد خرید">
                                                            <span class="c-introduction">
                                                                افزودن به سبد خرید
                                                            </span>
                                                        </div>
                                                        <div class="comparison" title="افزودن برای مقایسه">
                                                            <i class="fa fa-random" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-md-4 col-xs-12 pull-right mb-3">
                                            <div class="product-vertical">
                                                <div class="vertical-product-thumb">
                                                    <a href="#">
                                                        <img src="assets/images/content-product/4.jpg">
                                                    </a>
                                                </div>
                                                <div class="card-vertical-product-content">
                                                    <div class="card-vertical-product-title">
                                                        <a href="#">
                                                            ساعت هوشمند جی-تب مدل W101 Hero
                                                        </a>
                                                    </div>
                                                    <div class="card-vertical-product-price">
                                                        ۱۲۷,۰۰۰
                                                        <span class="price-currency">تومان</span>
                                                        <div class="stars-plp">
                                                             <span class="mdi mdi-star active"></span>
                                                             <span class="mdi mdi-star active"></span>
                                                             <span class="mdi mdi-star active"></span>
                                                             <span class="mdi mdi-star active"></span>
                                                             <span class="mdi mdi-star"></span>
                                                         </div>
                                                    </div>
                                                    <div class="product-actions-secondary">
                                                        <div class="heart" title="افزودن به لیست علاقه مندی">
                                                            <span class="mdi mdi-heart"></span>
                                                        </div>
                                                        <div class="product-introduction-cart" title="افزودن به سبد خرید">
                                                            <span class="c-introduction">
                                                                افزودن به سبد خرید
                                                            </span>
                                                        </div>
                                                        <div class="comparison" title="افزودن برای مقایسه">
                                                            <i class="fa fa-random" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-md-4 col-xs-12 pull-right mb-3">
                                            <div class="product-vertical">
                                                <div class="vertical-product-thumb">
                                                    <a href="#">
                                                        <img src="assets/images/content-product/1.jpg">
                                                    </a>
                                                </div>
                                                <div class="card-vertical-product-content">
                                                    <div class="card-vertical-product-title">
                                                        <a href="#">
                                                            ساعت هوشمند جی-تب مدل W101 Hero
                                                        </a>
                                                    </div>
                                                    <div class="card-vertical-product-price">
                                                        ۱۲۷,۰۰۰
                                                        <span class="price-currency">تومان</span>
                                                        <div class="stars-plp">
                                                             <span class="mdi mdi-star active"></span>
                                                             <span class="mdi mdi-star active"></span>
                                                             <span class="mdi mdi-star active"></span>
                                                             <span class="mdi mdi-star active"></span>
                                                             <span class="mdi mdi-star"></span>
                                                         </div>
                                                    </div>
                                                    <div class="product-actions-secondary">
                                                        <div class="heart" title="افزودن به لیست علاقه مندی">
                                                            <span class="mdi mdi-heart"></span>
                                                        </div>
                                                        <div class="product-introduction-cart" title="افزودن به سبد خرید">
                                                            <span class="c-introduction">
                                                                افزودن به سبد خرید
                                                            </span>
                                                        </div>
                                                        <div class="comparison" title="افزودن برای مقایسه">
                                                            <i class="fa fa-random" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-md-4 col-xs-12 pull-right mb-3">
                                            <div class="product-vertical">
                                                <div class="vertical-product-thumb">
                                                    <a href="#">
                                                        <img src="assets/images/content-product/2.jpg">
                                                    </a>
                                                </div>
                                                <div class="card-vertical-product-content">
                                                    <div class="card-vertical-product-title">
                                                        <a href="#">
                                                            ساعت هوشمند جی-تب مدل W101 Hero
                                                        </a>
                                                    </div>
                                                    <div class="card-vertical-product-price">
                                                        ۱۲۷,۰۰۰
                                                        <span class="price-currency">تومان</span>
                                                        <div class="stars-plp">
                                                             <span class="mdi mdi-star active"></span>
                                                             <span class="mdi mdi-star active"></span>
                                                             <span class="mdi mdi-star active"></span>
                                                             <span class="mdi mdi-star active"></span>
                                                             <span class="mdi mdi-star"></span>
                                                         </div>
                                                    </div>
                                                    <div class="product-actions-secondary">
                                                        <div class="heart" title="افزودن به لیست علاقه مندی">
                                                            <span class="mdi mdi-heart"></span>
                                                        </div>
                                                        <div class="product-introduction-cart" title="افزودن به سبد خرید">
                                                            <span class="c-introduction">
                                                                افزودن به سبد خرید
                                                            </span>
                                                        </div>
                                                        <div class="comparison" title="افزودن برای مقایسه">
                                                            <i class="fa fa-random" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-md-4 col-xs-12 pull-right mb-3">
                                            <div class="product-vertical">
                                                <div class="vertical-product-thumb">
                                                    <a href="#">
                                                        <img src="assets/images/content-product/3.jpg">
                                                    </a>
                                                </div>
                                                <div class="card-vertical-product-content">
                                                    <div class="card-vertical-product-title">
                                                        <a href="#">
                                                            ساعت هوشمند جی-تب مدل W101 Hero
                                                        </a>
                                                    </div>
                                                    <div class="card-vertical-product-price">
                                                        ۱۲۷,۰۰۰
                                                        <span class="price-currency">تومان</span>
                                                        <div class="stars-plp">
                                                             <span class="mdi mdi-star active"></span>
                                                             <span class="mdi mdi-star active"></span>
                                                             <span class="mdi mdi-star active"></span>
                                                             <span class="mdi mdi-star active"></span>
                                                             <span class="mdi mdi-star"></span>
                                                         </div>
                                                    </div>
                                                    <div class="product-actions-secondary">
                                                        <div class="heart" title="افزودن به لیست علاقه مندی">
                                                            <span class="mdi mdi-heart"></span>
                                                        </div>
                                                        <div class="product-introduction-cart" title="افزودن به سبد خرید">
                                                            <span class="c-introduction">
                                                                افزودن به سبد خرید
                                                            </span>
                                                        </div>
                                                        <div class="comparison" title="افزودن برای مقایسه">
                                                            <i class="fa fa-random" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-md-4 col-xs-12 pull-right mb-3">
                                            <div class="product-vertical">
                                                <div class="vertical-product-thumb">
                                                    <a href="#">
                                                        <img src="assets/images/content-product/4.jpg">
                                                    </a>
                                                </div>
                                                <div class="card-vertical-product-content">
                                                    <div class="card-vertical-product-title">
                                                        <a href="#">
                                                            ساعت هوشمند جی-تب مدل W101 Hero
                                                        </a>
                                                    </div>
                                                    <div class="card-vertical-product-price">
                                                        ۱۲۷,۰۰۰
                                                        <span class="price-currency">تومان</span>
                                                        <div class="stars-plp">
                                                             <span class="mdi mdi-star active"></span>
                                                             <span class="mdi mdi-star active"></span>
                                                             <span class="mdi mdi-star active"></span>
                                                             <span class="mdi mdi-star active"></span>
                                                             <span class="mdi mdi-star"></span>
                                                         </div>
                                                    </div>
                                                    <div class="product-actions-secondary">
                                                        <div class="heart" title="افزودن به لیست علاقه مندی">
                                                            <span class="mdi mdi-heart"></span>
                                                        </div>
                                                        <div class="product-introduction-cart" title="افزودن به سبد خرید">
                                                            <span class="c-introduction">
                                                                افزودن به سبد خرید
                                                            </span>
                                                        </div>
                                                        <div class="comparison" title="افزودن برای مقایسه">
                                                            <i class="fa fa-random" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="item-content">
                                    <a href="#" class="link-content">
                                        <div class="col-lg-3 col-md-4 col-xs-12 pull-right mb-3">
                                            <div class="product-vertical">
                                                <div class="vertical-product-thumb">
                                                    <a href="#">
                                                        <img src="assets/images/content-product/1.jpg">
                                                    </a>
                                                </div>
                                                <div class="card-vertical-product-content">
                                                    <div class="card-vertical-product-title">
                                                        <a href="#">
                                                            ساعت هوشمند جی-تب مدل W101 Hero
                                                        </a>
                                                    </div>
                                                    <div class="card-vertical-product-price">
                                                        ۱۲۷,۰۰۰
                                                        <span class="price-currency">تومان</span>
                                                        <div class="stars-plp">
                                                             <span class="mdi mdi-star active"></span>
                                                             <span class="mdi mdi-star active"></span>
                                                             <span class="mdi mdi-star active"></span>
                                                             <span class="mdi mdi-star active"></span>
                                                             <span class="mdi mdi-star"></span>
                                                         </div>
                                                    </div>
                                                    <div class="product-actions-secondary">
                                                        <div class="heart" title="افزودن به لیست علاقه مندی">
                                                            <span class="mdi mdi-heart"></span>
                                                        </div>
                                                        <div class="product-introduction-cart" title="افزودن به سبد خرید">
                                                            <span class="c-introduction">
                                                                افزودن به سبد خرید
                                                            </span>
                                                        </div>
                                                        <div class="comparison" title="افزودن برای مقایسه">
                                                            <i class="fa fa-random" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-md-4 col-xs-12 pull-right mb-3">
                                            <div class="product-vertical">
                                                <div class="vertical-product-thumb">
                                                    <a href="#">
                                                        <img src="assets/images/content-product/2.jpg">
                                                    </a>
                                                </div>
                                                <div class="card-vertical-product-content">
                                                    <div class="card-vertical-product-title">
                                                        <a href="#">
                                                            ساعت هوشمند جی-تب مدل W101 Hero
                                                        </a>
                                                    </div>
                                                    <div class="card-vertical-product-price">
                                                        ۱۲۷,۰۰۰
                                                        <span class="price-currency">تومان</span>
                                                        <div class="stars-plp">
                                                             <span class="mdi mdi-star active"></span>
                                                             <span class="mdi mdi-star active"></span>
                                                             <span class="mdi mdi-star active"></span>
                                                             <span class="mdi mdi-star active"></span>
                                                             <span class="mdi mdi-star"></span>
                                                         </div>
                                                    </div>
                                                    <div class="product-actions-secondary">
                                                        <div class="heart" title="افزودن به لیست علاقه مندی">
                                                            <span class="mdi mdi-heart"></span>
                                                        </div>
                                                        <div class="product-introduction-cart" title="افزودن به سبد خرید">
                                                            <span class="c-introduction">
                                                                افزودن به سبد خرید
                                                            </span>
                                                        </div>
                                                        <div class="comparison" title="افزودن برای مقایسه">
                                                            <i class="fa fa-random" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-md-4 col-xs-12 pull-right mb-3">
                                            <div class="product-vertical">
                                                <div class="vertical-product-thumb">
                                                    <a href="#">
                                                        <img src="assets/images/content-product/3.jpg">
                                                    </a>
                                                </div>
                                                <div class="card-vertical-product-content">
                                                    <div class="card-vertical-product-title">
                                                        <a href="#">
                                                            ساعت هوشمند جی-تب مدل W101 Hero
                                                        </a>
                                                    </div>
                                                    <div class="card-vertical-product-price">
                                                        ۱۲۷,۰۰۰
                                                        <span class="price-currency">تومان</span>
                                                        <div class="stars-plp">
                                                             <span class="mdi mdi-star active"></span>
                                                             <span class="mdi mdi-star active"></span>
                                                             <span class="mdi mdi-star active"></span>
                                                             <span class="mdi mdi-star active"></span>
                                                             <span class="mdi mdi-star"></span>
                                                         </div>
                                                    </div>
                                                    <div class="product-actions-secondary">
                                                        <div class="heart" title="افزودن به لیست علاقه مندی">
                                                            <span class="mdi mdi-heart"></span>
                                                        </div>
                                                        <div class="product-introduction-cart" title="افزودن به سبد خرید">
                                                            <span class="c-introduction">
                                                                افزودن به سبد خرید
                                                            </span>
                                                        </div>
                                                        <div class="comparison" title="افزودن برای مقایسه">
                                                            <i class="fa fa-random" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-md-4 col-xs-12 pull-right mb-3">
                                            <div class="product-vertical">
                                                <div class="vertical-product-thumb">
                                                    <a href="#">
                                                        <img src="assets/images/content-product/4.jpg">
                                                    </a>
                                                </div>
                                                <div class="card-vertical-product-content">
                                                    <div class="card-vertical-product-title">
                                                        <a href="#">
                                                            ساعت هوشمند جی-تب مدل W101 Hero
                                                        </a>
                                                    </div>
                                                    <div class="card-vertical-product-price">
                                                        ۱۲۷,۰۰۰
                                                        <span class="price-currency">تومان</span>
                                                        <div class="stars-plp">
                                                             <span class="mdi mdi-star active"></span>
                                                             <span class="mdi mdi-star active"></span>
                                                             <span class="mdi mdi-star active"></span>
                                                             <span class="mdi mdi-star active"></span>
                                                             <span class="mdi mdi-star"></span>
                                                         </div>
                                                    </div>
                                                    <div class="product-actions-secondary">
                                                        <div class="heart" title="افزودن به لیست علاقه مندی">
                                                            <span class="mdi mdi-heart"></span>
                                                        </div>
                                                        <div class="product-introduction-cart" title="افزودن به سبد خرید">
                                                            <span class="c-introduction">
                                                                افزودن به سبد خرید
                                                            </span>
                                                        </div>
                                                        <div class="comparison" title="افزودن برای مقایسه">
                                                            <i class="fa fa-random" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4 col-xs-12 pull-right mb-3">
                                            <div class="product-vertical">
                                                <div class="vertical-product-thumb">
                                                    <a href="#">
                                                        <img src="assets/images/content-product/1.jpg">
                                                    </a>
                                                </div>
                                                <div class="card-vertical-product-content">
                                                    <div class="card-vertical-product-title">
                                                        <a href="#">
                                                            ساعت هوشمند جی-تب مدل W101 Hero
                                                        </a>
                                                    </div>
                                                    <div class="card-vertical-product-price">
                                                        ۱۲۷,۰۰۰
                                                        <span class="price-currency">تومان</span>
                                                        <div class="stars-plp">
                                                             <span class="mdi mdi-star active"></span>
                                                             <span class="mdi mdi-star active"></span>
                                                             <span class="mdi mdi-star active"></span>
                                                             <span class="mdi mdi-star active"></span>
                                                             <span class="mdi mdi-star"></span>
                                                         </div>
                                                    </div>
                                                    <div class="product-actions-secondary">
                                                        <div class="heart" title="افزودن به لیست علاقه مندی">
                                                            <span class="mdi mdi-heart"></span>
                                                        </div>
                                                        <div class="product-introduction-cart" title="افزودن به سبد خرید">
                                                            <span class="c-introduction">
                                                                افزودن به سبد خرید
                                                            </span>
                                                        </div>
                                                        <div class="comparison" title="افزودن برای مقایسه">
                                                            <i class="fa fa-random" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="item-content">
                                    <a href="#" class="link-content">
                                        <div class="col-lg-3 col-md-4 col-xs-12 pull-right mb-3">
                                            <div class="product-vertical">
                                                <div class="vertical-product-thumb">
                                                    <a href="#">
                                                        <img src="assets/images/content-product/1.jpg">
                                                    </a>
                                                </div>
                                                <div class="card-vertical-product-content">
                                                    <div class="card-vertical-product-title">
                                                        <a href="#">
                                                            ساعت هوشمند جی-تب مدل W101 Hero
                                                        </a>
                                                    </div>
                                                    <div class="card-vertical-product-price">
                                                        ۱۲۷,۰۰۰
                                                        <span class="price-currency">تومان</span>
                                                        <div class="stars-plp">
                                                             <span class="mdi mdi-star active"></span>
                                                             <span class="mdi mdi-star active"></span>
                                                             <span class="mdi mdi-star active"></span>
                                                             <span class="mdi mdi-star active"></span>
                                                             <span class="mdi mdi-star"></span>
                                                         </div>
                                                    </div>
                                                    <div class="product-actions-secondary">
                                                        <div class="heart" title="افزودن به لیست علاقه مندی">
                                                            <span class="mdi mdi-heart"></span>
                                                        </div>
                                                        <div class="product-introduction-cart" title="افزودن به سبد خرید">
                                                            <span class="c-introduction">
                                                                افزودن به سبد خرید
                                                            </span>
                                                        </div>
                                                        <div class="comparison" title="افزودن برای مقایسه">
                                                            <i class="fa fa-random" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-md-4 col-xs-12 pull-right mb-3">
                                            <div class="product-vertical">
                                                <div class="vertical-product-thumb">
                                                    <a href="#">
                                                        <img src="assets/images/content-product/2.jpg">
                                                    </a>
                                                </div>
                                                <div class="card-vertical-product-content">
                                                    <div class="card-vertical-product-title">
                                                        <a href="#">
                                                            ساعت هوشمند جی-تب مدل W101 Hero
                                                        </a>
                                                    </div>
                                                    <div class="card-vertical-product-price">
                                                        ۱۲۷,۰۰۰
                                                        <span class="price-currency">تومان</span>
                                                        <div class="stars-plp">
                                                             <span class="mdi mdi-star active"></span>
                                                             <span class="mdi mdi-star active"></span>
                                                             <span class="mdi mdi-star active"></span>
                                                             <span class="mdi mdi-star active"></span>
                                                             <span class="mdi mdi-star"></span>
                                                         </div>
                                                    </div>
                                                    <div class="product-actions-secondary">
                                                        <div class="heart" title="افزودن به لیست علاقه مندی">
                                                            <span class="mdi mdi-heart"></span>
                                                        </div>
                                                        <div class="product-introduction-cart" title="افزودن به سبد خرید">
                                                            <span class="c-introduction">
                                                                افزودن به سبد خرید
                                                            </span>
                                                        </div>
                                                        <div class="comparison" title="افزودن برای مقایسه">
                                                            <i class="fa fa-random" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-md-4 col-xs-12 pull-right mb-3">
                                            <div class="product-vertical">
                                                <div class="vertical-product-thumb">
                                                    <a href="#">
                                                        <img src="assets/images/content-product/3.jpg">
                                                    </a>
                                                </div>
                                                <div class="card-vertical-product-content">
                                                    <div class="card-vertical-product-title">
                                                        <a href="#">
                                                            ساعت هوشمند جی-تب مدل W101 Hero
                                                        </a>
                                                    </div>
                                                    <div class="card-vertical-product-price">
                                                        ۱۲۷,۰۰۰
                                                        <span class="price-currency">تومان</span>
                                                        <div class="stars-plp">
                                                             <span class="mdi mdi-star active"></span>
                                                             <span class="mdi mdi-star active"></span>
                                                             <span class="mdi mdi-star active"></span>
                                                             <span class="mdi mdi-star active"></span>
                                                             <span class="mdi mdi-star"></span>
                                                         </div>
                                                    </div>
                                                    <div class="product-actions-secondary">
                                                        <div class="heart" title="افزودن به لیست علاقه مندی">
                                                            <span class="mdi mdi-heart"></span>
                                                        </div>
                                                        <div class="product-introduction-cart" title="افزودن به سبد خرید">
                                                            <span class="c-introduction">
                                                                افزودن به سبد خرید
                                                            </span>
                                                        </div>
                                                        <div class="comparison" title="افزودن برای مقایسه">
                                                            <i class="fa fa-random" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </section>
                    </div>
                </div>
            </div>
        </div>
<!--   arrivals-product------------------------>

<!--    adplacemen-container----------------------------->
           <div class="col-12">
                <div class="adplacement-container-row mb-4">

                    <div class="col-6 col-lg-6 pull-right" style="padding-left:0;">
                        <a href="#" class="adplacement-item">
                            <div class="adplacement-sponsored-box">
                                <img src="assets/images/adplacement/9.jpg" alt="پوشاک ورزشی مردانه" title="پوشاک ورزشی مردانه">
                            </div>
                        </a>
                    </div>

                    <div class="col-6 col-lg-6 pull-right" style="padding-left:0;">
                        <a href="#" class="adplacement-item">
                            <div class="adplacement-sponsored-box">
                                <img src="assets/images/adplacement/10.jpg" alt="نوشت افزار" title="نوشت افزار">
                            </div>
                        </a>
                    </div>

                </div>
            </div>
<!--    adplacemen-container----------------------------->

<!--    product-slider------------------------->
            <div class="col-lg-12 col-md-12 col-xs-12 pull-right">
                <div class="section-slider-product mb-4">
                    <div class="widget widget-product card">
                        <header class="card-header">
                            <span class="title-one">محبوب ترین ها</span>
                                <h3 class="card-title">مشاهده همه</h3>
                            </header>
                                <div class="product-carousel owl-carousel owl-theme owl-rtl owl-loaded owl-drag">
                                <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 2234px;"><div class="owl-item active" style="width: 309.083px; margin-left: 10px;"><div class="item">
                                    <a href="#">
                                        <img src="assets/images/slider-product/tev-1.jpg"
                                         class="img-fluid" alt="">
                                    </a>
                                    <h2 class="post-title">
                                        <a href="#">
                                            تلویزیون ال ای دی هوشمند سامسونگ مدل 82NU8900 سایز 82 اینچ
                                        </a>
                                    </h2>
                                    <div class="price">
                                        <ins>
                                            <span>۳,۳۹۵,۰۰۰<span>تومان</span></span>
                                            <div class="stars-plp">
                                                <span class="mdi mdi-star active"></span>
                                                <span class="mdi mdi-star active"></span>
                                                <span class="mdi mdi-star active"></span>
                                                <span class="mdi mdi-star active"></span>
                                                <span class="mdi mdi-star active"></span>
                                            </div>
                                        </ins>
                                    </div>
                                    </div></div><div class="owl-item active" style="width: 309.083px; margin-left: 10px;"><div class="item">
                                            <a href="#">
                                                <img src="assets/images/slider-product/tev-2.jpg" class="img-fluid" alt="">
                                            </a>
                                            <h2 class="post-title">
                                                <a href="#">
                                                    تلویزیون ال ای دی هوشمند ایکس ویژن مدل 55XT515 سایز 55 اینچ
                                                </a>
                                            </h2>
                                            <div class="price">
                                        <ins>
                                            <span>۳,۳۹۵,۰۰۰<span>تومان</span></span>
                                            <div class="stars-plp">
                                                <span class="mdi mdi-star active"></span>
                                                <span class="mdi mdi-star active"></span>
                                                <span class="mdi mdi-star active"></span>
                                                <span class="mdi mdi-star active"></span>
                                                <span class="mdi mdi-star"></span>
                                            </div>
                                        </ins>
                                    </div>
                                        </div></div><div class="owl-item active" style="width: 309.083px; margin-left: 10px;"><div class="item">
                                            <a href="#">
                                                <img src="assets/images/slider-product/tev-3.jpg" class="img-fluid" alt="">
                                            </a>
                                            <h2 class="post-title">
                                                <a href="#">
                                                    تلویزیون ال ای دی هوشمند مجیک تی وی مدل MT65D2400 سایز 65 اینچ
                                                </a>
                                            </h2>
                                            <div class="price">
                                        <ins>
                                            <span>۳,۳۹۵,۰۰۰<span>تومان</span></span>
                                            <div class="stars-plp">
                                                <span class="mdi mdi-star active"></span>
                                                <span class="mdi mdi-star active"></span>
                                                <span class="mdi mdi-star active"></span>
                                                <span class="mdi mdi-star active"></span>
                                                <span class="mdi mdi-star active"></span>
                                            </div>
                                        </ins>
                                    </div>
                                        </div>
                                    </div>
                                        <div class="owl-item active" style="width: 309.083px; margin-left: 10px;">
                                           <div class="item">
                                            <a href="#">
                                                <img src="assets/images/slider-product/tev-4.jpg" class="img-fluid" alt="">
                                            </a>
                                            <h2 class="post-title">
                                                <a href="#">
                                                تلویزیون ال ای دی ال جی مدل 43LJ52100 سایز 43 اینچ
                                            </a>
                                            </h2>
                                            <div class="price">
                                        <ins>
                                            <span>۳,۳۹۵,۰۰۰<span>تومان</span></span>
                                            <div class="stars-plp">
                                                <span class="mdi mdi-star active"></span>
                                                <span class="mdi mdi-star active"></span>
                                                <span class="mdi mdi-star active"></span>
                                                <span class="mdi mdi-star"></span>
                                                <span class="mdi mdi-star"></span>
                                            </div>
                                        </ins>
                                    </div>
                                        </div>
                                    </div>
                                        <div class="owl-item" style="width: 309.083px; margin-left: 10px;">
                                           <div class="item">
                                            <a href="#">
                                                <img src="assets/images/slider-product/tev-5.jpg" class="img-fluid" alt="">
                                            </a>
                                            <h2 class="post-title">
                                                <a href="#">
                                                تلویزیون ال ای دی هوشمند ایکس ویژن مدل 49XTU725 سایز 49 اینچ
                                            </a>
                                            </h2>
                                            <div class="price">
                                        <ins>
                                            <span>۳,۳۹۵,۰۰۰<span>تومان</span></span>
                                            <div class="stars-plp">
                                                <span class="mdi mdi-star active"></span>
                                                <span class="mdi mdi-star active"></span>
                                                <span class="mdi mdi-star active"></span>
                                                <span class="mdi mdi-star"></span>
                                                <span class="mdi mdi-star"></span>
                                            </div>
                                        </ins>
                                    </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 309.083px; margin-left: 10px;">
                                        <div class="item">
                                            <a href="#">
                                                <img src="assets/images/slider-product/tev-6.jpg" class="img-fluid" alt="">
                                            </a>
                                            <h2 class="post-title">
                                                <a href="#">
                                                    تلویزیون ال ای دی هوشمند ایکس ویژن مدل 43XT725 سایز 43 اینچ
                                                </a>
                                            </h2>
                                            <div class="price">
                                        <ins>
                                            <span>۳,۳۹۵,۰۰۰<span>تومان</span></span>
                                            <div class="stars-plp">
                                                <span class="mdi mdi-star active"></span>
                                                <span class="mdi mdi-star active"></span>
                                                <span class="mdi mdi-star active"></span>
                                                <span class="mdi mdi-star active"></span>
                                                <span class="mdi mdi-star"></span>
                                            </div>
                                        </ins>
                                    </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 309.083px; margin-left: 10px;">
                                        <div class="item">
                                            <a href="#">
                                                <img src="assets/images/slider-product/tev-7.jpg" class="img-fluid" alt="">
                                            </a>
                                            <h2 class="post-title">
                                                <a href="#">
                                                    تلویزیون ال ای دی هوشمند ایکس ویژن مدل 55XTU725 سایز 55 اینچ
                                                </a>
                                            </h2>
                                            <div class="price">
                                        <ins>
                                            <span>۳,۳۹۵,۰۰۰<span>تومان</span></span>
                                            <div class="stars-plp">
                                                <span class="mdi mdi-star active"></span>
                                                <span class="mdi mdi-star active"></span>
                                                <span class="mdi mdi-star active"></span>
                                                <span class="mdi mdi-star active"></span>
                                                <span class="mdi mdi-star"></span>
                                            </div>
                                        </ins>
                                    </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!--    product-slider------------------------->
    </article>

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
<!--    owl.carousel----------------------------->
<script src="assets/js/owl.carousel.min.js"></script>
<!-- sweetalert2--------------------------------->
<script src="assets/js/sweetalert2.all.min.js"></script>
<!--main----------------------------------------->
<script src="assets/js/main.js"></script>
</html>
