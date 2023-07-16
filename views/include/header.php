<?php
include_once  './module/lib/database.php';
include_once './module/helpers/format.php';
spl_autoload_register(function ($className) {
    include_once './module/classes/' . $className . '.php';
});
$db = new Database();
$fm = new Format();
$ct = new cart();
$cs = new customer();
$us = new user();
$cat = new category();
$product = new product();
$brand = new brand();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="msapplication-TileColor" content="#0E0E0E" />
    <meta name="template-color" content="#0E0E0E" />
    <meta name="description" content="Index page" />
    <meta name="keywords" content="index, page" />
    <meta name="author" content="" />
    <link rel="shortcut icon" type="image/x-icon" href="./views/assets/imgs/template/favicon.svg" />
    <link href="./views/assets/css/style2513.css?v=3.0.0" rel="stylesheet" />
    <title>AntiPHP</title>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>



</head>

<body>
    <!-- Loading -->
    <!-- Loading -->
    <!-- Loading -->
    <!-- <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="text-center">
                    <img class="mb-10" src="./views/assets/imgs/template/favicon.svg" alt="Ecom" />
                    <div class="preloader-dots"></div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Loading -->
    <!-- Loading -->
    <!-- Loading -->

    <div class="topbar top-gray-1000">
        <div class="container-topbar">
            <div class="menu-topbar-left d-none d-xl-block">
                <ul class="nav-small">
                    <li>
                        <a class="font-xs" href="?page=page-about-us">Về Chúng Tôi</a>
                    </li>
                    <li>
                        <span class="font-xs color-brand-3">Miễn phí vận chuyển cho tất cả các đơn hàng trên</span><span class="font-sm-bold color-success"> $75.00</span>
                    </li>
                </ul>
            </div>
            <div class="info-topbar text-center d-none d-xl-block"></div>
            <div class="menu-topbar-right">
                <span class="font-xs color-brand-3">Cần giúp đỡ? Gọi cho chúng tôi:</span><span class="font-sm-bold color-success"> + 1800 900</span>
                <div class="dropdown dropdown-language">
                    <button class="btn dropdown-toggle" id="dropdownPage" type="button" data-bs-toggle="dropdown" aria-expanded="true" data-bs-display="static">
                        <span class="dropdown-right font-xs color-brand-3"><img style="width: 18px; height: 12px" src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1b/Flag_of_North_Vietnam_%281955%E2%80%931976%29.svg/230px-Flag_of_North_Vietnam_%281955%E2%80%931976%29.svg.png" alt="Ecom" />
                            Việt Nam</span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="dropdownPage" data-bs-popper="static">
                        <li>
                            <a class="dropdown-item" href="#"><img src="./views/assets/imgs/template/flag-en.svg" alt="Ecom" />
                                English</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#"><img style="width: 18px; height: 12px" src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1b/Flag_of_North_Vietnam_%281955%E2%80%931976%29.svg/230px-Flag_of_North_Vietnam_%281955%E2%80%931976%29.svg.png" alt="Ecom" />
                                Việt Nam</a>
                        </li>
                    </ul>
                </div>
                <div class="dropdown dropdown-language">
                    <button class="btn dropdown-toggle" id="dropdownPage2" type="button" data-bs-toggle="dropdown" aria-expanded="true" data-bs-display="static">
                        <span class="dropdown-right font-xs color-brand-3">VND</span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-light dropdown-menu-end" aria-labelledby="dropdownPage2" data-bs-popper="static">
                        <li><a class="dropdown-item active" href="#">VND</a></li>
                        <li><a class="dropdown-item" href="#">USD</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <header class="header header-container sticky-bar">
        <div class="container">
            <div class="main-header">
                <div class="header-left">
                    <div class="header-logo">

                        <a href="?page=home">Logo ở đây</a>
                    </div>
                    <div class="header-search">
                        <div class="box-header-search">
                            <form class="form-search" method="post" action="#">
                                <div class="box-category">
                                    <select class="select-active select2-hidden-accessible" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                        <option>Danh mục</option>
                                        <option value="Computers Accessories">
                                            Computers Accessories
                                        </option>
                                        <option value="Cell Phones">Cell Phones</option>
                                        <option value="Gaming Gatgets">Gaming Gatgets</option>
                                        <option value="Smart watches">Smart watches</option>
                                        <option value="Wired Headphone">Wired Headphone</option>
                                        <option value="Mouse &amp; Keyboard">
                                            Mouse Keyboard
                                        </option>
                                        <option value="Headphone">Headphone</option>
                                        <option value="Bluetooth devices">
                                            Bluetooth devices
                                        </option>
                                        <option value="Cloud Software">Cloud Software</option>
                                    </select>
                                </div>
                                <div class="box-keysearch">
                                    <input class="form-control font-xs" type="text" value="" placeholder="Tìm kiếm sản phẩm" />
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="header-nav text-start">
                        <nav class="nav-main-menu d-none d-xl-block">
                            <ul class="main-menu">
                                <!-- <li><a class="active" href="#">Flash Deals</a></li>
                  <li><a href="#">Special</a></li>
                  <li><a href="#">Top Sellers</a></li> -->
                            </ul>
                        </nav>
                        <div class="burger-icon burger-icon-white">
                            <span class="burger-icon-top"></span><span class="burger-icon-mid"></span><span class="burger-icon-bottom"></span>
                        </div>
                    </div>
                    <div class="header-shop">
                        <div class="d-inline-block box-dropdown-cart">
                            <span class="font-lg icon-list icon-account"><span>Account</span></span>
                            <div class="dropdown-account">
                                <ul>
                                    <li><a href="page-account.php">Tài khoản của tôi</a></li>
                                    <li><a href="page-account.php">Theo dõi đơn hàng</a></li>
                                    <li>
                                        <a href="page-account.php">Đơn đặt hàng của tôi</a>
                                    </li>
                                    <li><a href="page-account.php">Sản phẩm yêu thích</a></li>
                                    <li><a href="?page=login">Đăng Xuất</a></li>
                                </ul>
                            </div>
                        </div>
                        <a class="font-lg icon-list icon-wishlist" href="shop-wishlist.php"><span>Wishlist</span><span class="number-item font-xs">5</span></a>
                        <div class="d-inline-block box-dropdown-cart">
                            <span class="font-lg icon-list icon-cart"><span>Cart</span><span class="number-item font-xs">2</span></span>
                            <div class="dropdown-cart">
                                <div class="item-cart mb-20">
                                    <div class="cart-image">
                                        <img src="./views/assets/imgs/page/homepage1/imgsp5.png" alt="Ecom" />
                                    </div>
                                    <div class="cart-info">
                                        <a class="font-sm-bold color-brand-3" href="shop-single-product.php">2022 Apple iMac with Retina 5K Display 8GB RAM, 256GB
                                            SSD</a>
                                        <p>
                                            <span class="color-brand-2 font-sm-bold">1 x $2856.4</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="item-cart mb-20">
                                    <div class="cart-image">
                                        <img src="./views/assets/imgs/page/homepage1/imgsp4.png" alt="Ecom" />
                                    </div>
                                    <div class="cart-info">
                                        <a class="font-sm-bold color-brand-3" href="shop-single-product-2.php">2022 Apple iMac with Retina 5K Display 8GB RAM, 256GB
                                            SSD</a>
                                        <p>
                                            <span class="color-brand-2 font-sm-bold">1 x $2856.4</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="border-bottom pt-0 mb-15"></div>
                                <div class="cart-total">
                                    <div class="row">
                                        <div class="col-6 text-start">
                                            <span class="font-md-bold color-brand-3">Total</span>
                                        </div>
                                        <div class="col-6">
                                            <span class="font-md-bold color-brand-1">$2586.3</span>
                                        </div>
                                    </div>
                                    <div class="row mt-15">
                                        <div class="col-6 text-start">
                                            <a class="btn btn-cart w-auto" href="?page=shop-cart">View cart</a>
                                        </div>
                                        <div class="col-6">
                                            <a class="btn btn-buy w-auto" href="shop-checkout.php">Checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="font-lg icon-list icon-compare" href="?page=shop-compare"><span>Compare</span></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="container">
                <div class="dropdown d-inline-block">
                    <button class="btn dropdown-toggle btn-category" id="dropdownCategory" type="button" data-bs-toggle="dropdown" aria-expanded="true" data-bs-display="static">
                        <span class="dropdown-right font-sm-bold color-white">Mua Theo Danh Mục</span>
                    </button>
                    <div class="sidebar-left dropdown-menu dropdown-menu-light" aria-labelledby="dropdownCategory" data-bs-popper="static">
                        <ul class="menu-texts menu-close">
                            <li class="has-children">
                                <a href="javascript:;"><span class="img-link"><img src="./views/assets/imgs/template/monitor.svg" alt="Ecom" /></span><span class="text-link">Computers &amp; Accessories</span></a>
                                <ul class="sub-menu">
                                    <li><a href="#">Computer Accessories</a></li>
                                    <li><a href="#">Computer Cases</a></li>
                                    <li><a href="#">Laptop</a></li>
                                    <li><a href="#">HDD</a></li>
                                    <li><a href="#">RAM</a></li>
                                    <li><a href="#">Headphone</a></li>
                                </ul>
                            </li>
                            <li class="has-children">
                                <a class="active" href="javascript:;"><span class="img-link"><img src="./views/assets/imgs/template/mobile.svg" alt="Ecom" /></span><span class="text-link">Cell Phones</span></a>
                                <ul class="sub-menu">
                                    <li><a href="#">Phone Accessories</a></li>
                                    <li><a href="#">Phone Cases</a></li>
                                    <li><a href="#">Postpaid Phones</a></li>
                                    <li><a href="#">Unlocked Phones</a></li>
                                    <li><a href="#">Prepaid Phones</a></li>
                                    <li><a href="#">Prepaid Plans</a></li>
                                    <li><a href="#">Refurbished Phones</a></li>
                                    <li><a href="#">Straight Talk</a></li>
                                    <li><a href="#">iPhone</a></li>
                                    <li><a href="#">Samsung Galaxy</a></li>
                                    <li><a href="#">Samsung Galaxy</a></li>
                                    <li><a href="#">Samsung Galaxy</a></li>
                                    <li><a href="#">Samsung Galaxy</a></li>
                                    <li><a href="#">Samsung Galaxy</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span class="img-link"><img src="./views/assets/imgs/template/game.svg" alt="Ecom" /></span><span class="text-link">Gaming Gatgets</span></a>
                            </li>
                            <li>
                                <a href="#"><span class="img-link"><img src="./views/assets/imgs/template/clock.svg" alt="Ecom" /></span><span class="text-link">Smart watches</span></a>
                            </li>
                            <li>
                                <a href="#"><span class="img-link"><img src="./views/assets/imgs/template/airpod.svg" alt="Ecom" /></span><span class="text-link">Airpod</span></a>
                            </li>
                            <li>
                                <a href="#"><span class="img-link"><img src="./views/assets/imgs/template/airpods.svg" alt="Ecom" /></span><span class="text-link">Wired Headphone</span></a>
                            </li>
                            <li>
                                <a href="#"><span class="img-link"><img src="./views/assets/imgs/template/mouse.svg" alt="Ecom" /></span><span class="text-link">Mouse &amp; Keyboard</span></a>
                            </li>
                            <li>
                                <a href="#"><span class="img-link"><img src="./views/assets/imgs/template/music-play.svg" alt="Ecom" /></span><span class="text-link">Headphone</span></a>
                            </li>
                            <li>
                                <a href="#"><span class="img-link"><img src="./views/assets/imgs/template/bluetooth.svg" alt="Ecom" /></span><span class="text-link">Bluetooth devices</span></a>
                            </li>
                            <li>
                                <a href="#"><span class="img-link"><img src="./views/assets/imgs/template/clound.svg" alt="Ecom" /></span><span class="text-link">Cloud Software</span></a>
                            </li>
                            <li>
                                <a href="#"><span class="img-link"><img src="./views/assets/imgs/template/electricity.svg" alt="Ecom" /></span><span class="text-link">Electric accessories</span></a>
                            </li>
                            <li>
                                <a href="#"><span class="img-link"><img src="./views/assets/imgs/template/cpu.svg" alt="Ecom" /></span><span class="text-link">Mainboard &amp; CPU</span></a>
                            </li>
                            <li>
                                <a href="#"><span class="img-link"><img src="./views/assets/imgs/template/devices.svg" alt="Ecom" /></span><span class="text-link">Desktop</span></a>
                            </li>
                            <li>
                                <a href="#"><span class="img-link"><img src="./views/assets/imgs/template/driver.svg" alt="Ecom" /></span><span class="text-link">Speaker</span></a>
                            </li>
                            <li>
                                <a href="#"><span class="img-link"><img src="./views/assets/imgs/template/lamp.svg" alt="Ecom" /></span><span class="text-link">Computer Decor</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="header-nav d-inline-block">
                    <nav class="nav-main-menu d-none d-xl-block">
                        <ul class="main-menu">
                            <li>
                                <a class="active" href="?page=home">Trang Chủ</a>

                            </li>
                            <li class="has-children">
                                <a href="?page=shop-grid">Cửa Hàng</a>
                                <ul class="sub-menu two-col">
                                    <li><a href="?page=shop-cart">Trang giỏ hàng</a></li>
                                    <li><a href="?page=shop-compare">So sánh sản phẩm</a></li>
                                    <li><a href="?page=shop-wishlist">Sản phẩm yêu thích</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="?page=shop-vendor-list">Nhà Cung Cấp</a>
                            </li>

                            <li>
                                <a href="?page=blog-list">Tin Tức</a>
                            </li>
                            <li><a href="?page=contact">Liên Hệ</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="discount font-16 font-bold">Khuyến mãi</div>
            </div>
        </div>
    </header>