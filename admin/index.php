<?php
session_start();
if (isset($_SESSION['role']) && $_SESSION['role'] == 0) {
} else {
    header('Location: ../');
}
?>

<!DOCTYPE html>

<html lang="en">
<!--begin::Head-->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <title>Metronic - The World's #1 Selling Bootstrap Admin Template by Keenthemes</title>
    <meta charset="utf-8" />
    <meta name="description" content="
            The most advanced Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, 
            Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel versions. 
            Grab your copy now and get life-time updates for free.
        " />
    <meta name="keywords" content="
            metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, 
            Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates, 
            free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, 
            bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon
        " />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="
            Metronic - Bootstrap Admin Template, HTML, VueJS, React, Angular. Laravel, Asp.Net Core, Ruby on Rails, 
            Spring Boot, Blazor, Django, Express.js, Node.js, Flask Admin Dashboard Theme & Template
        " />
    <meta property="og:url" content="https://keenthemes.com/metronic" />
    <meta property="og:site_name" content="Keenthemes | Metronic" />
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
    <link rel="shortcut icon" href="./assets/media/logos/favicon.ico" />

    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" /> <!--end::Fonts-->

    <!--begin::Vendor Stylesheets(used for this page only)-->
    <link href="./assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
    <link href="./assets/plugins/custom/vis-timeline/vis-timeline.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Vendor Stylesheets-->


    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="./assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="./assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->

    <!--Begin::Google Tag Manager -->

</head>
<!--end::Head-->

<!--begin::Body-->

<body id="kt_app_body" data-kt-app-header-fixed-mobile="true" data-kt-app-toolbar-enabled="true" class="app-default">
    <!--begin::Theme mode setup on page load-->

    <?php
    include 'header.php';
    ?><?php
        if (isset($_GET['xuly'])) {
            $order->xuly($_GET['xuly'], $_GET['status']);
            // header("Refresh:1; url=index.php", true, 303);
        }
        if (isset($_GET['deletexuly'])) {
            $order->deleteOrder($_GET['deletexuly']);
        }

        ?>
    <!--begin::App-->
    <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
        <!--begin::Page-->
        <div class="app-page  flex-column flex-column-fluid " id="kt_app_page">


            <!--begin::Header-->

            <!--begin::Wrapper-->
            <div class="app-wrapper  flex-column flex-row-fluid " id="kt_app_wrapper">

                <!--begin::Toolbar-->
                <div id="kt_app_toolbar" class="app-toolbar  py-6 ">

                    <!--begin::Toolbar container-->
                    <div id="kt_app_toolbar_container" class="app-container  container-xxl d-flex align-items-start ">
                        <!--begin::Toolbar container-->
                        <div class="d-flex flex-column flex-row-fluid">
                            <!--begin::Toolbar wrapper-->
                            <div class="d-flex align-items-center pt-1">

                                <!--begin::Breadcrumb-->
                                <ul class="breadcrumb breadcrumb-separatorless fw-semibold">

                                    <!--begin::Item-->
                                    <li class="breadcrumb-item text-white fw-bold lh-1">
                                        <a href="./index.html" class="text-white">
                                            <i class="ki-outline ki-home text-white fs-3"></i>
                                        </a>
                                    </li>
                                    <!--end::Item-->

                                    <!--begin::Item-->
                                    <li class="breadcrumb-item">
                                        <i class="ki-outline ki-right fs-4 text-white mx-n1"></i>
                                    </li>
                                    <!--end::Item-->


                                    <!--begin::Item-->
                                    <li class="breadcrumb-item text-white fw-bold lh-1">
                                        Dashboards </li>
                                    <!--end::Item-->


                                </ul>
                                <!--end::Breadcrumb-->

                            </div>
                            <!--end::Toolbar wrapper--->

                            <!--begin::Toolbar wrapper--->
                            <div class="d-flex flex-stack flex-wrap flex-lg-nowrap gap-4 gap-lg-10 pt-6 pb-18 py-lg-13">

                                <!--begin::Page title-->
                                <div class="page-title d-flex align-items-center me-3">
                                    <img alt="Logo" src="./assets/media/svg/misc/layer.svg" class="h-60px me-5" />

                                    <!--begin::Title-->
                                    <h1 class="page-heading d-flex text-white fw-bolder fs-2 flex-column justify-content-center my-0">
                                        PHP With Love
                                        <!--begin::Description-->
                                        <span class="page-desc text-white opacity-50 fs-6 fw-bold pt-4">
                                            Trang Chủ </span>
                                        <!--end::Description-->
                                    </h1>
                                    <!--end::Title-->
                                </div>
                                <!--end::Page title-->

                                <!--begin::Items-->
                                <div class="d-flex gap-4 gap-lg-13">
                                    <!--begin::Item-->
                                    <div class="d-flex flex-column">
                                        <!--begin::Number-->
                                        <span class="text-white fw-bold fs-3 mb-1"><?php $soluong = 0;
                                                                                    foreach ($product->show_product() as $item) {
                                                                                        $soluong += 1;
                                                                                    }
                                                                                    echo $soluong; ?></span>
                                        <!--end::Number-->

                                        <!--begin::Section-->
                                        <div class="text-white opacity-50 fw-bold">Số Lượng Sản Phẩm</div>
                                        <!--end::Section-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="d-flex flex-column">
                                        <!--begin::Number-->
                                        <span class="text-white fw-bold fs-3 mb-1"><?php
                                                                                    $DoanhThu = 0;
                                                                                    foreach ($order->get_all_order() as $item) {
                                                                                        if ($item['status'] == 4)
                                                                                            $DoanhThu += $item['totalPrice'];
                                                                                    }
                                                                                    echo number_format($DoanhThu);
                                                                                    ?></span>
                                        <!--end::Number-->

                                        <!--begin::Section-->
                                        <div class="text-white opacity-50 fw-bold">Doanh Thu</div>
                                        <!--end::Section-->
                                    </div>

                                    <!--end::Item-->

                                </div>
                                <!--end::Items-->
                            </div>
                            <!--end::Toolbar wrapper--->
                        </div>
                        <!--end::Toolbar container--->
                    </div>
                    <!--end::Toolbar container-->
                </div>
                <!--end::Toolbar-->


                <!--begin::Wrapper container-->
                <div class="app-container  container-xxl ">



                    <!--begin::Main-->
                    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                        <!--begin::Content wrapper-->
                        <div class="d-flex flex-column flex-column-fluid">


                            <!--begin::Content-->
                            <div id="kt_app_content" class="app-content ">

                                <!--begin::Row-->
                                <div class="row g-5 g-xl-10 mb-xl-10">
                                    <!--begin::Col-->

                                    <!--end::Col-->

                                    <!--begin::Col-->

                                    <!--end::Col-->

                                    <!--begin::Col-->

                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->

                                <!--begin::Row-->
                                <div class="row gy-5 g-xl-10">
                                    <!--begin::Col-->
                                    <div class="col-12">

                                        <!--begin::Table widget 2-->
                                        <div class="card h-md-100">
                                            <!--begin::Header-->
                                            <div class="card-header align-items-center border-0">
                                                <!--begin::Title-->
                                                <h3 class="fw-bold text-gray-900 m-0">Đơn gần đây</h3>
                                                <!--end::Title-->

                                                <!--begin::Menu-->
                                                <!-- <button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">

                                                    <i class="ki-outline ki-dots-square fs-1"></i>
                                                </button> -->

                                                <!--begin::Menu 2-->
                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions</div>
                                                    </div>
                                                    <!--end::Menu item-->

                                                    <!--begin::Menu separator-->
                                                    <div class="separator mb-3 opacity-75"></div>
                                                    <!--end::Menu separator-->

                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">
                                                            New Ticket
                                                        </a>
                                                    </div>
                                                    <!--end::Menu item-->

                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">
                                                            New Customer
                                                        </a>
                                                    </div>
                                                    <!--end::Menu item-->

                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                                                        <!--begin::Menu item-->
                                                        <a href="#" class="menu-link px-3">
                                                            <span class="menu-title">New Group</span>
                                                            <span class="menu-arrow"></span>
                                                        </a>
                                                        <!--end::Menu item-->

                                                        <!--begin::Menu sub-->
                                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3">
                                                                    Admin Group
                                                                </a>
                                                            </div>
                                                            <!--end::Menu item-->

                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3">
                                                                    Staff Group
                                                                </a>
                                                            </div>
                                                            <!--end::Menu item-->

                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3">
                                                                    Member Group
                                                                </a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                        </div>
                                                        <!--end::Menu sub-->
                                                    </div>
                                                    <!--end::Menu item-->

                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">
                                                            New Contact
                                                        </a>
                                                    </div>
                                                    <!--end::Menu item-->

                                                    <!--begin::Menu separator-->
                                                    <div class="separator mt-3 opacity-75"></div>
                                                    <!--end::Menu separator-->

                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <div class="menu-content px-3 py-3">
                                                            <a class="btn btn-primary  btn-sm px-4" href="#">
                                                                Generate Reports
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu 2-->

                                                <!--end::Menu-->
                                            </div>
                                            <!--end::Header-->

                                            <!--begin::Body-->
                                            <div class="card-body pt-2">
                                                <!--begin::Nav-->
                                                <ul class="nav nav-pills nav-pills-custom mb-3">
                                                    <!--begin::Item-->
                                                    <li class="nav-item mb-3 me-3 me-lg-6">
                                                        <!--begin::Link-->
                                                        <a class="nav-link d-flex justify-content-between flex-column flex-center overflow-hidden active w-80px h-85px py-4" data-bs-toggle="pill" href="#kt_stats_widget_2_tab_1">
                                                            <!--begin::Icon-->
                                                            <div class="nav-icon">
                                                                <img alt="" src="https://cdn3.iconfinder.com/data/icons/vol-3/128/ipad-512.png" class="" />
                                                            </div>
                                                            <!--end::Icon-->

                                                            <!--begin::Subtitle-->
                                                            <span class="nav-text text-gray-700 fw-bold fs-6 lh-1">
                                                                Tablet
                                                            </span>
                                                            <!--end::Subtitle-->

                                                            <!--begin::Bullet-->
                                                            <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                                            <!--end::Bullet-->
                                                        </a>
                                                        <!--end::Link-->
                                                    </li>
                                                    <!--end::Item-->

                                                    <!--begin::Item-->
                                                    <li class="nav-item mb-3 me-3 me-lg-6">
                                                        <!--begin::Link-->
                                                        <a class="nav-link d-flex justify-content-between flex-column flex-center overflow-hidden w-80px h-85px py-4" data-bs-toggle="pill" href="#kt_stats_widget_2_tab_2">
                                                            <!--begin::Icon-->
                                                            <div class="nav-icon">
                                                                <img alt="" src="https://cdn1.iconfinder.com/data/icons/skateboard-8/512/music_song_headphone_sound-512.png" class="" />
                                                            </div>
                                                            <!--end::Icon-->

                                                            <!--begin::Subtitle-->
                                                            <span class="nav-text text-gray-700 fw-bold fs-6 lh-1">
                                                                TaiNghe
                                                            </span>
                                                            <!--end::Subtitle-->

                                                            <!--begin::Bullet-->
                                                            <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                                            <!--end::Bullet-->
                                                        </a>
                                                        <!--end::Link-->
                                                    </li>
                                                    <!--end::Item-->

                                                    <!--begin::Item-->
                                                    <li class="nav-item mb-3 me-3 me-lg-6">
                                                        <!--begin::Link-->
                                                        <a class="nav-link d-flex justify-content-between flex-column flex-center overflow-hidden w-80px h-85px py-4" data-bs-toggle="pill" href="#kt_stats_widget_2_tab_3">
                                                            <!--begin::Icon-->
                                                            <div class="nav-icon">
                                                                <img alt="" src="https://cdn2.iconfinder.com/data/icons/whcompare-isometric-web-hosting-servers/50/email-laptop-512.png" class="" />
                                                            </div>
                                                            <!--end::Icon-->

                                                            <!--begin::Subtitle-->
                                                            <span class="nav-text text-gray-600 fw-bold fs-6 lh-1">
                                                                Laptop
                                                            </span>
                                                            <!--end::Subtitle-->

                                                            <!--begin::Bullet-->
                                                            <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                                            <!--end::Bullet-->
                                                        </a>
                                                        <!--end::Link-->
                                                    </li>
                                                    <!--end::Item-->

                                                    <!--begin::Item-->
                                                    <li class="nav-item mb-3 me-3 me-lg-6">
                                                        <!--begin::Link-->
                                                        <a class="nav-link d-flex justify-content-between flex-column flex-center overflow-hidden w-80px h-85px py-4" data-bs-toggle="pill" href="#kt_stats_widget_2_tab_4">
                                                            <!--begin::Icon-->
                                                            <div class="nav-icon">
                                                                <img alt="" src="https://cdn3.iconfinder.com/data/icons/network-and-data/64/smatphone_file-512.png" class="nav-icon" />
                                                            </div>
                                                            <!--end::Icon-->

                                                            <!--begin::Subtitle-->
                                                            <span class="nav-text text-gray-600 fw-bold fs-6 lh-1">
                                                                ĐiệnThoại
                                                            </span>
                                                            <!--end::Subtitle-->

                                                            <!--begin::Bullet-->
                                                            <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                                            <!--end::Bullet-->
                                                        </a>
                                                        <!--end::Link-->
                                                    </li>
                                                    <!--end::Item-->

                                                    <!--begin::Item-->

                                                    <!--end::Item-->
                                                </ul>
                                                <!--end::Nav-->

                                                <!--begin::Tab Content-->
                                                <div class="tab-content">

                                                    <!--begin::Tap pane-->
                                                    <div class="tab-pane fade show active" id="kt_stats_widget_2_tab_1">
                                                        <!--begin::Table container-->
                                                        <div class="table-responsive">
                                                            <!--begin::Table-->
                                                            <table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
                                                                <!--begin::Table head-->
                                                                <thead>
                                                                    <tr class="fs-7 fw-bold text-gray-500 border-bottom-0">
                                                                        <th class="ps-0 w-50px">ITEM</th>
                                                                        <th class="min-w-125px"></th>
                                                                        <th class="text-end min-w-100px">QTY</th>
                                                                        <th class="pe-0 text-end min-w-100px">PRICE</th>
                                                                        <th class="pe-0 text-end min-w-100px">TOTAL PRICE</th>
                                                                    </tr>
                                                                </thead>
                                                                <!--end::Table head-->

                                                                <!--begin::Table body-->
                                                                <tbody>
                                                                    <?php
                                                                    foreach ($order->order_admin() as $item) {
                                                                        $showAdmin = $product->get_product_by_id($item['productId']);
                                                                        if ($showAdmin[0]['catId'] == 20) {
                                                                    ?>
                                                                            <tr>
                                                                                <td>
                                                                                    <img src="./assets/media/imageproduct/<?php echo $showAdmin[0]['productImage'] ?>" class="w-50px ms-n1" alt="" />
                                                                                </td>
                                                                                <td class="ps-0">
                                                                                    <a href="./apps/ecommerce/catalog/edit-product.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6 text-start pe-0"><?php echo $showAdmin[0]['productName'] ?></a>
                                                                                    <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">code : <?php echo $item['code'] ?></span>
                                                                                </td>
                                                                                <td>
                                                                                    <span class="text-gray-800 fw-bold d-block fs-6 ps-0 text-end"><?php echo $item['quantity'] ?></span>
                                                                                </td>
                                                                                <td class="text-end pe-0">
                                                                                    <span class="text-gray-800 fw-bold d-block fs-6"><?php echo number_format($showAdmin[0]['productPrice']) ?></span>
                                                                                </td>
                                                                                <td class="text-end pe-0">
                                                                                    <span class="text-gray-800 fw-bold d-block fs-6"><?php echo number_format($showAdmin[0]['productPrice'] * $item['quantity']) ?></span>
                                                                                </td>
                                                                            </tr>
                                                                    <?php
                                                                        }
                                                                    } ?>
                                                                </tbody>
                                                                <!--end::Table body-->
                                                            </table>
                                                            <!--end::Table-->
                                                        </div>
                                                        <!--end::Table container-->
                                                    </div>
                                                    <!--end::Tap pane-->

                                                    <!--begin::Tap pane-->
                                                    <div class="tab-pane fade " id="kt_stats_widget_2_tab_2">
                                                        <!--begin::Table container-->
                                                        <div class="table-responsive">
                                                            <!--begin::Table-->
                                                            <table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
                                                                <!--begin::Table head-->
                                                                <thead>
                                                                    <tr class="fs-7 fw-bold text-gray-500 border-bottom-0">
                                                                        <th class="ps-0 w-50px">ITEM</th>
                                                                        <th class="min-w-125px"></th>
                                                                        <th class="text-end min-w-100px">QTY</th>
                                                                        <th class="pe-0 text-end min-w-100px">PRICE</th>
                                                                        <th class="pe-0 text-end min-w-100px">TOTAL PRICE</th>
                                                                    </tr>
                                                                </thead>
                                                                <!--end::Table head-->

                                                                <!--begin::Table body-->
                                                                <tbody>
                                                                    <?php
                                                                    foreach ($order->order_admin() as $item) {
                                                                        $showAdmin = $product->get_product_by_id($item['productId']);
                                                                        if ($showAdmin[0]['catId'] == 7) {
                                                                    ?>
                                                                            <tr>
                                                                                <td>
                                                                                    <img src="./assets/media/imageproduct/<?php echo $showAdmin[0]['productImage'] ?>" class="w-50px ms-n1" alt="" />
                                                                                </td>
                                                                                <td class="ps-0">
                                                                                    <a href="./apps/ecommerce/catalog/edit-product.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6 text-start pe-0"><?php echo $showAdmin[0]['productName'] ?></a>
                                                                                    <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">code : <?php echo $item['code'] ?></span>
                                                                                </td>
                                                                                <td>
                                                                                    <span class="text-gray-800 fw-bold d-block fs-6 ps-0 text-end"><?php echo $item['quantity'] ?></span>
                                                                                </td>
                                                                                <td class="text-end pe-0">
                                                                                    <span class="text-gray-800 fw-bold d-block fs-6"><?php echo number_format($showAdmin[0]['productPrice']) ?></span>
                                                                                </td>
                                                                                <td class="text-end pe-0">
                                                                                    <span class="text-gray-800 fw-bold d-block fs-6"><?php echo number_format($showAdmin[0]['productPrice'] * $item['quantity']) ?></span>
                                                                                </td>
                                                                            </tr>
                                                                    <?php
                                                                        }
                                                                    } ?>
                                                                </tbody>
                                                                <!--end::Table body-->
                                                            </table>
                                                            <!--end::Table-->
                                                        </div>
                                                        <!--end::Table container-->
                                                    </div>
                                                    <!--end::Tap pane-->

                                                    <!--begin::Tap pane-->
                                                    <div class="tab-pane fade " id="kt_stats_widget_2_tab_3">
                                                        <!--begin::Table container-->
                                                        <div class="table-responsive">
                                                            <!--begin::Table-->
                                                            <table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
                                                                <!--begin::Table head-->
                                                                <thead>
                                                                    <tr class="fs-7 fw-bold text-gray-500 border-bottom-0">
                                                                        <th class="ps-0 w-50px">ITEM</th>
                                                                        <th class="min-w-125px"></th>
                                                                        <th class="text-end min-w-100px">QTY</th>
                                                                        <th class="pe-0 text-end min-w-100px">PRICE</th>
                                                                        <th class="pe-0 text-end min-w-100px">TOTAL PRICE</th>
                                                                    </tr>
                                                                </thead>
                                                                <!--end::Table head-->

                                                                <!--begin::Table body-->
                                                                <tbody>
                                                                    <?php
                                                                    foreach ($order->order_admin() as $item) {
                                                                        $showAdmin = $product->get_product_by_id($item['productId']);
                                                                        if ($showAdmin[0]['catId'] == 6) {
                                                                    ?>
                                                                            <tr>
                                                                                <td>
                                                                                    <img src="./assets/media/imageproduct/<?php echo $showAdmin[0]['productImage'] ?>" class="w-50px ms-n1" alt="" />
                                                                                </td>
                                                                                <td class="ps-0">
                                                                                    <a href="./apps/ecommerce/catalog/edit-product.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6 text-start pe-0"><?php echo $showAdmin[0]['productName'] ?></a>
                                                                                    <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">code : <?php echo $item['code'] ?></span>
                                                                                </td>
                                                                                <td>
                                                                                    <span class="text-gray-800 fw-bold d-block fs-6 ps-0 text-end"><?php echo $item['quantity'] ?></span>
                                                                                </td>
                                                                                <td class="text-end pe-0">
                                                                                    <span class="text-gray-800 fw-bold d-block fs-6"><?php echo number_format($showAdmin[0]['productPrice']) ?></span>
                                                                                </td>
                                                                                <td class="text-end pe-0">
                                                                                    <span class="text-gray-800 fw-bold d-block fs-6"><?php echo number_format($showAdmin[0]['productPrice'] * $item['quantity']) ?></span>
                                                                                </td>
                                                                            </tr>
                                                                    <?php
                                                                        }
                                                                    } ?>
                                                                </tbody>
                                                                <!--end::Table body-->
                                                            </table>
                                                            <!--end::Table-->
                                                        </div>
                                                        <!--end::Table container-->
                                                    </div>
                                                    <!--end::Tap pane-->

                                                    <!--begin::Tap pane-->
                                                    <div class="tab-pane fade " id="kt_stats_widget_2_tab_4">
                                                        <!--begin::Table container-->
                                                        <div class="table-responsive">
                                                            <!--begin::Table-->
                                                            <table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
                                                                <!--begin::Table head-->
                                                                <thead>
                                                                    <tr class="fs-7 fw-bold text-gray-500 border-bottom-0">
                                                                        <th class="ps-0 w-50px">ITEM</th>
                                                                        <th class="min-w-125px"></th>
                                                                        <th class="text-end min-w-100px">QTY</th>
                                                                        <th class="pe-0 text-end min-w-100px">PRICE</th>
                                                                        <th class="pe-0 text-end min-w-100px">TOTAL PRICE</th>
                                                                    </tr>
                                                                </thead>
                                                                <!--end::Table head-->

                                                                <!--begin::Table body-->
                                                                <tbody>
                                                                    <?php
                                                                    foreach ($order->order_admin() as $item) {
                                                                        $showAdmin = $product->get_product_by_id($item['productId']);
                                                                        if ($showAdmin[0]['catId'] == 5) {
                                                                    ?>
                                                                            <tr>
                                                                                <td>
                                                                                    <img src="./assets/media/imageproduct/<?php echo $showAdmin[0]['productImage'] ?>" class="w-50px ms-n1" alt="" />
                                                                                </td>
                                                                                <td class="ps-0">
                                                                                    <a href="./apps/ecommerce/catalog/edit-product.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6 text-start pe-0"><?php echo $showAdmin[0]['productName'] ?></a>
                                                                                    <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">code : <?php echo $item['code'] ?></span>
                                                                                </td>
                                                                                <td>
                                                                                    <span class="text-gray-800 fw-bold d-block fs-6 ps-0 text-end"><?php echo $item['quantity'] ?></span>
                                                                                </td>
                                                                                <td class="text-end pe-0">
                                                                                    <span class="text-gray-800 fw-bold d-block fs-6"><?php echo number_format($showAdmin[0]['productPrice']) ?></span>
                                                                                </td>
                                                                                <td class="text-end pe-0">
                                                                                    <span class="text-gray-800 fw-bold d-block fs-6"><?php echo number_format($showAdmin[0]['productPrice'] * $item['quantity']) ?></span>
                                                                                </td>
                                                                            </tr>
                                                                    <?php
                                                                        }
                                                                    } ?>
                                                                </tbody>
                                                                <!--end::Table body-->
                                                            </table>
                                                            <!--end::Table-->
                                                        </div>
                                                        <!--end::Table container-->
                                                    </div>
                                                    <!--end::Tap pane-->

                                                    <!--begin::Tap pane-->

                                                    <!--end::Tap pane-->
                                                </div>
                                                <!--end::Tab Content-->
                                            </div>
                                            <!--end: Card Body-->
                                        </div>
                                        <!--end::Table widget 2-->
                                    </div>
                                    <!--end::Col-->

                                    <!--begin::Col-->

                                    <!--end::Card body-->
                                </div>
                                <!--end::Chart widget 4-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->

                        <!--begin::Row-->
                        <div class="row gy-5 g-xl-10 mt-5">
                            <!--begin::Col-->

                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-12 mb-5">

                                <!--begin::Table Widget 4-->
                                <div class="card card-flush h-xl-100">
                                    <!--begin::Card header-->
                                    <div class="card-header pt-7">
                                        <!--begin::Title-->
                                        <h3 class="card-title align-items-start flex-column">
                                            <span class="card-label fw-bold text-gray-800">Đơn đặt hàng</span>
                                            <!-- <span class="text-gray-400 mt-1 fw-semibold fs-6">Avg. 57 orders per day</span> -->
                                        </h3>
                                        <!--end::Title-->

                                        <!--begin::Actions-->
                                        <div class="card-toolbar">
                                            <!--begin::Filters-->
                                            <div class="d-flex flex-stack flex-wrap gap-4">
                                                <!--begin::Destination-->
                                                <div class="d-flex align-items-center fw-bold">
                                                    <!--begin::Label-->
                                                    <!-- <div class="text-gray-400 fs-7 me-2">Cateogry</div> -->
                                                    <!--end::Label-->

                                                    <!--begin::Select-->

                                                    <!--end::Select-->
                                                </div>
                                                <!--end::Destination-->

                                                <!--begin::Status-->
                                                <div class="d-flex align-items-center fw-bold">
                                                    <!--begin::Label-->
                                                    <div class="text-gray-400 fs-7 me-2">Tình Trạng</div>
                                                    <!--end::Label-->

                                                    <!--begin::Select-->
                                                    <select class="form-select form-select-transparent text-dark fs-7 lh-1 fw-bold py-0 ps-3 w-auto" data-control="select2" data-hide-search="true" data-dropdown-css-class="w-150px" data-placeholder="Select an option" data-kt-table-widget-4="filter_status">
                                                        <option></option>
                                                        <option value="Show All" selected>Xem Tất Cả</option>
                                                        <option value="Shipped">Shipped</option>
                                                        <option value="Confirmed">Confirmed</option>
                                                        <option value="Rejected">Rejected</option>
                                                        <option value="Pending">Pending</option>
                                                    </select>
                                                    <!--end::Select-->
                                                </div>
                                                <!--end::Status-->

                                                <!--begin::Search-->
                                                <div class="position-relative my-1">
                                                    <i class="ki-outline ki-magnifier fs-2 position-absolute top-50 translate-middle-y ms-4"></i> <input type="text" data-kt-table-widget-4="search" class="form-control w-150px fs-7 ps-12" placeholder="Search" />
                                                </div>
                                                <!--end::Search-->
                                            </div>
                                            <!--begin::Filters-->
                                        </div>
                                        <!--end::Actions-->
                                    </div>
                                    <!--end::Card header-->

                                    <!--begin::Card body-->
                                    <div class="card-body pt-2">
                                        <!--begin::Table-->
                                        <table class="table align-middle table-row-dashed fs-6 gy-3" id="kt_table_widget_4_table">
                                            <!--begin::Table head-->
                                            <thead>
                                                <!--begin::Table row-->
                                                <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                                    <th class="min-w-100px">Order ID</th>
                                                    <th class="text-end min-w-100px">Thời gian</th>
                                                    <th class="text-end min-w-125px">ID Người Dùng</th>
                                                    <th class="text-end min-w-100px">Tổng Giá</th>
                                                    <th class="text-end min-w-50px">Trạng Thái</th>
                                                    <th class="text-end"></th>
                                                </tr>
                                                <!--end::Table row-->
                                            </thead>
                                            <!--end::Table head-->

                                            <!--begin::Table body-->
                                            <tbody class="fw-bold text-gray-600">
                                                <?php
                                                $showOrder = $order->get_all_order();
                                                if (isset($showOrder) && $showOrder != null) {
                                                    foreach ($showOrder as $item) {

                                                ?>
                                                        <tr>
                                                            <td>
                                                                <a href="./vieworder.php?id=<?php echo $item['orderId'] ?>" class="text-gray-800 text-hover-primary">#<?php echo $item['code'] ?></a>
                                                            </td>

                                                            <td class="text-end">
                                                                <?php
                                                                echo $item['dateOrder'];
                                                                ?>
                                                            </td>

                                                            <td class="text-end">
                                                                <a href="#" class="text-gray-600 text-hover-primary"><?php
                                                                                                                        echo $item['name'];
                                                                                                                        ?></a>
                                                            </td>

                                                            <td class="text-end">
                                                                <?php
                                                                echo number_format($item['totalPrice']);
                                                                ?></td>



                                                            <td class="text-end">
                                                                <?php
                                                                $status = $item['status'];
                                                                if ($status == 0) {
                                                                    echo '<a href="?xuly=' . $item['orderId'] . '&status=1" "  class=" btn badge py-3 px-4 fs-7 badge-light-warning">Chờ Xử Lý</button>';
                                                                } else if ($status == 1) {
                                                                    echo '<a href="?xuly=' . $item['orderId'] . '&status=2" "  class=" btn badge py-3 px-4 fs-7 badge-light-primary">Đã Xử Lý</a>';
                                                                } else if ($status == 2) {
                                                                    echo '<a href="?xuly=' . $item['orderId'] . '&status=4" "  class=" btn badge py-3 px-4 fs-7 badge-light-success">Hoàn Thành</button>';
                                                                    echo '<a href="?xuly=' . $item['orderId'] . '&status=3" "  class=" btn badge py-3 px-4 fs-7 badge-light-danger">Hủy Đơn</a>';
                                                                } else if ($status == 3) {
                                                                    echo '<a href="?deletexuly=' . $item['orderId'] . '" "  class=" btn badge py-3 px-4 fs-7 badge-light-danger">Đơn Bị Hủy</a>';
                                                                } else {
                                                                    echo '<span  class=" btn badge py-3 px-4 fs-7 text-success">Thành Công</a>';
                                                                }

                                                                ?>
                                                            </td>

                                                        </tr>
                                                <?php

                                                    }
                                                }
                                                ?>
                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Card body-->
                                </div>
                                <!--end::Table Widget 4-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->

                        <!--begin::Row-->

                        <!--end::Row-->
                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Content wrapper-->


                <!--begin::Footer-->
                <div id="kt_app_footer" class="app-footer  d-flex flex-column flex-md-row align-items-center flex-center flex-md-stack py-2 py-lg-4 ">
                    <!--begin::Copyright-->
                    <div class="text-dark order-2 order-md-1">
                        <span class="text-muted fw-semibold me-1">2023&copy;</span>
                        <a href="https://keenthemes.com/" target="_blank" class="text-gray-800 text-hover-primary">Keenthemes</a>
                    </div>
                    <!--end::Copyright-->

                    <!--begin::Menu-->
                    <ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
                        <li class="menu-item"><a href="" target="_blank" class="menu-link px-2">About</a></li>

                        <li class="menu-item"><a href="" target="_blank" class="menu-link px-2">Support</a></li>

                        <li class="menu-item"><a href="" target="_blank" class="menu-link px-2">Purchase</a></li>
                    </ul>
                    <!--end::Menu-->
                </div>
                <!--end::Footer-->
            </div>
            <!--end:::Main-->


        </div>
        <!--end::Wrapper container-->
    </div>
    <!--end::Wrapper-->


    </div>
    <!--end::Page-->
    </div>
    <!--end::App-->


    <!--end::Modal - Users Search-->
    <!--begin::Modal - Invite Friends-->

    <!--end::Modal - Invite Friend--> <!--end::Modals-->

    <!--begin::Javascript-->
    <?php
    include './footer.php'
    ?>