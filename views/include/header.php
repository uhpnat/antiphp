<?php
// if (isset($_SESSION['login']) && $_SESSION['login'] == 1) {
//     echo $_SESSION['login'];
//     echo $_SESSION['fullname'];
//     echo  $_SESSION['role'];
// }
if (isset($_SESSION['name'])) {
    $sId = $_SESSION['name'];
    // echo $sId;
} else {
    $random_number = mt_rand(1000, 9999);
    $_SESSION['name'] = $random_number;
    $sId = $_SESSION['name'];
    // echo $_SESSION['name'];
}
// session_destroy();
include_once './module/lib/database.php';
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
$order = new order();

$cart_count = isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0;
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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <!-- <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script> -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>







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
                        <a href="?page=home">
                            <img style="width: 50px;" src="https://cdn1.iconfinder.com/data/icons/hobbies-flat-1/340/shop_sale_purchase_shopping_buy_lifestyle_bag_store-512.png" alt="">
                            <!-- <img style="width: 20px;" src="https://cdn3.iconfinder.com/data/icons/letters-and-numbers-1/32/letter_S_blue-512.png" alt="">
                            <img style="width: 20px;" src="https://cdn3.iconfinder.com/data/icons/letters-and-numbers-1/32/letter_H_blue-512.png" alt="">
                            <img style="width: 20px;" src="https://cdn3.iconfinder.com/data/icons/letters-and-numbers-1/32/letter_O_blue-512.png" alt="">
                            <img style="width: 20px;" src="https://cdn3.iconfinder.com/data/icons/letters-and-numbers-1/32/letter_P_blue-512.png" alt=""> -->

                            <!-- <a href="?page=home">Logo ở đây</a> -->
                        </a>
                    </div>
                    <div class="header-search">
                        <div class="box-header-search">
                            <form class="form-search" method="post" action="#">

                                <div class="box-keysearch">
                                    <input class="form-control font-xs" type="text" name="search" value="" id="searchProduct" placeholder="Tìm kiếm sản phẩm" />
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
                            <span class="font-lg icon-list icon-account"><span>Tài khoản</span></span>
                            <div class="dropdown-account">
                                <ul>
                                    <li><a href="?page=page-account">Tài khoản của tôi</a></li>

                                    <?php
                                    if (isset($_SESSION['login']) && $_SESSION['login'] == 1) {
                                        echo '  <li><a href="?page=logout">Đăng xuất</a></li>';
                                    } else {
                                        echo '  <li><a href="?page=login">Đăng nhập</a></li>';
                                    }

                                    ?>


                                    <!-- <li><a href="?page=page-account">Theo dõi đơn hàng</a></li>
                                    <li><a href="?page=page-account">Sản phẩm yêu thích</a></li> -->
                                    <!-- <li><a href="?page=login">Đăng Xuất</a></li> -->
                                </ul>
                            </div>
                        </div>
                        <!-- <a class="font-lg icon-list icon-wishlist" href="shop-wishlist.php"><span>Wishlist</span><span class="number-item font-xs">5</span></a> -->
                        <div class="d-inline-block box-dropdown-cart">
                            <span class="font-lg icon-list icon-cart"><span>Giỏ Hàng</span><span class="number-item font-xs badge"></span></span>
                            <div class="dropdown-cart" id="cart_details"></div>
                        </div>
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
                            <li>
                                <?php
                                $showCategory = $cat->show_category();
                                foreach ($showCategory as $item) {
                                ?>
                                    <a href="#"><span class="text-link"><?php echo $item['categoryName'] ?></span></a>
                                <?php  } ?>
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
                            <li>
                                <a href="?page=shop-grid">Cửa Hàng</a>
                            </li>
                            <li><a href="?page=contact">Liên Hệ</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="discount font-16 font-bold">Khuyến mãi</div>
            </div>
        </div>
    </header>