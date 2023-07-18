<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Metronic 
Product Version: 8.1.8
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
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
    <!--end::Vendor Stylesheets-->


    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="./assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="./assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->

    <!--Begin::Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                '././www.googletagmanager.com/gtm5445.html?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5FS8GGP');
    </script>
    <!--End::Google Tag Manager -->

    <script>
        // Frame-busting to prevent site from being loaded within a frame without permission (click-jacking)
        if (window.top != window.self) {
            window.top.location.replace(window.self.location.href);
        }
    </script>
</head>
<!--end::Head-->

<!--begin::Body-->

<body id="kt_app_body" data-kt-app-header-fixed-mobile="true" data-kt-app-toolbar-enabled="true" class="app-default">
    <!--begin::Theme mode setup on page load-->
    <script>
        var defaultThemeMode = "light";
        var themeMode;

        if (document.documentElement) {
            if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
                themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
            } else {
                if (localStorage.getItem("data-bs-theme") !== null) {
                    themeMode = localStorage.getItem("data-bs-theme");
                } else {
                    themeMode = defaultThemeMode;
                }
            }

            if (themeMode === "system") {
                themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
            }

            document.documentElement.setAttribute("data-bs-theme", themeMode);
        }
    </script>
    <!--end::Theme mode setup on page load-->
    <!--Begin::Google Tag Manager (noscript) -->
    <?php
    include './header.php';
    ?>
    <!--end::Header-->
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
                                eCommerce </li>
                            <!--end::Item-->

                            <!--begin::Item-->
                            <li class="breadcrumb-item">
                                <i class="ki-outline ki-right fs-4 text-white mx-n1"></i>
                            </li>
                            <!--end::Item-->


                            <!--begin::Item-->
                            <li class="breadcrumb-item text-white fw-bold lh-1">
                                product </li>
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
                                Sản Phẩm

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
                                <span class="text-white fw-bold fs-3 mb-1">$23,467.92</span>
                                <!--end::Number-->

                                <!--begin::Section-->
                                <div class="text-white opacity-50 fw-bold">Avg. Monthly Sales</div>
                                <!--end::Section-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex flex-column">
                                <!--begin::Number-->
                                <span class="text-white fw-bold fs-3 mb-1">$1,748.03</span>
                                <!--end::Number-->

                                <!--begin::Section-->
                                <div class="text-white opacity-50 fw-bold">Today Spending</div>
                                <!--end::Section-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex flex-column">
                                <!--begin::Number-->
                                <span class="text-white fw-bold fs-3 mb-1">3.8%</span>
                                <!--end::Number-->

                                <!--begin::Section-->
                                <div class="text-white opacity-50 fw-bold">Overall Share</div>
                                <!--end::Section-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex flex-column">
                                <!--begin::Number-->
                                <span class="text-white fw-bold fs-3 mb-1">-7.4%</span>
                                <!--end::Number-->

                                <!--begin::Section-->
                                <div class="text-white opacity-50 fw-bold">7 Days</div>
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

                        <!--begin::Products-->
                        <div class="card card-flush">
                            <!--begin::Card header-->
                            <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                                <!--begin::Card title-->
                                <div class="card-title">
                                    <!--begin::Search-->
                                    <div class="d-flex align-items-center position-relative my-1">
                                        <i class="ki-outline ki-magnifier fs-3 position-absolute ms-4"></i> <input type="text" data-kt-ecommerce-product-filter="search" class="form-control form-control-solid w-250px ps-12" placeholder="Search Product" />
                                    </div>
                                    <!--end::Search-->
                                </div>
                                <!--end::Card title-->

                                <!--begin::Card toolbar-->
                                <div class="card-toolbar flex-row-fluid justify-content-end gap-5">


                                    <!--begin::Add product-->
                                    <a href="add-product.php" class="btn btn-primary">
                                        Thêm Sản Phẩm
                                    </a>
                                    <!--end::Add product-->
                                </div>
                                <!--end::Card toolbar-->
                            </div>
                            <!--end::Card header-->

                            <!--begin::Card body-->
                            <div class="card-body pt-0">

                                <!--begin::Table-->
                                <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_products_table">
                                    <thead>
                                        <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                            <th class="w-10px pe-2">
                                                <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                                    <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_ecommerce_products_table .form-check-input" value="1" />
                                                </div>
                                            </th>
                                            <th class="min-w-200px">Tên Sản Phẩm</th>
                                            <th class="text-end min-w-100px">Ngày Tạo</th>
                                            <th class="text-end min-w-70px">Số Lượng</th>
                                            <th class="text-end min-w-100px">Giá</th>
                                            <th class="text-end min-w-100px">Đánh Giá</th>
                                            <th class="text-end min-w-100px">Trạng Thái</th>
                                            <th class="text-end min-w-70px">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody class="fw-semibold text-gray-600">
                                        <?php
                                        if (isset($_GET['delete'])) {
                                            $delete = $_GET['delete'];
                                            $product->delete_product($delete);
                                        }
                                        $show = $product->show_product();
                                        foreach ($show as $item) {
                                            # code...
                                        ?>
                                            <tr>
                                                <td>
                                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="checkbox" value="1" />
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Thumbnail-->
                                                        <a href="edit-product.php?edit=<?php echo $item['productId'] ?>" class="symbol symbol-50px">
                                                            <span class="symbol-label" style="background-image:url(./assets/media/imageproduct/<?php echo $item['productImage'] ?>);"></span>
                                                        </a>
                                                        <!--end::Thumbnail-->

                                                        <div class="ms-5">
                                                            <!--begin::Title-->
                                                            <a href="edit-product.php?edit=<?php echo $item['productId'] ?>" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name"><?php echo $item['productName'] ?></a>
                                                            <!--end::Title-->
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-end pe-0">
                                                    <span class="fw-bold"><?php echo $item['createdAt'] ?></span>
                                                </td>
                                                <td class="text-end pe-0" data-order="50">
                                                    <span class="fw-bold ms-3"><?php echo $item['productQuantity'] ?></span>
                                                </td>
                                                <td class="text-end pe-0">
                                                    <?php echo $item['productPrice'] ?> </td>
                                                <td class="text-end pe-0" data-order="rating-3">
                                                    <div class="rating justify-content-end">
                                                        <div class="rating-label checked">
                                                            <i class="ki-outline ki-star fs-6"></i>
                                                        </div>
                                                        <div class="rating-label checked">
                                                            <i class="ki-outline ki-star fs-6"></i>
                                                        </div>
                                                        <div class="rating-label checked">
                                                            <i class="ki-outline ki-star fs-6"></i>
                                                        </div>
                                                        <div class="rating-label ">
                                                            <i class="ki-outline ki-star fs-6"></i>
                                                        </div>
                                                        <div class="rating-label ">
                                                            <i class="ki-outline ki-star fs-6"></i>
                                                        </div>
                                                    </div>
                                                </td>
                                                <?php
                                                if ($item['productType'] == 1) { ?>
                                                    <td class="text-end pe-0" data-order="Published">
                                                        <div class="badge badge-light-success">Mở Bán</div>
                                                    </td>
                                                <?php
                                                } elseif ($item['productType'] == 2) { ?>
                                                    <td class="text-end pe-0" data-order="Scheduled">
                                                        <div class="badge badge-light-primary">Lên Kế Hoạch</div>
                                                    </td>
                                                <?php
                                                } elseif ($item['productType'] == 3) { ?>
                                                    <td class="text-end pe-0" data-order="Inactive">
                                                        <div class="badge badge-light-danger">Hết Hàng</div>
                                                    </td>

                                                <?php
                                                } else { ?>
                                                    <td class="text-end pe-0" data-order="Inactive">
                                                        <div class="badge badge-light-danger">Trạng Thái Lỗi ???</div>
                                                    </td>

                                                <?php
                                                }
                                                ?>


                                                <td class="text-end">
                                                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                        Actions
                                                        <i class="ki-outline ki-down fs-5 ms-1"></i> </a>
                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                                        <div class="menu-item px-3">
                                                            <a href="edit-product.php?edit=<?php echo $item['productId'] ?>" class="menu-link px-3">
                                                                Edit
                                                            </a>
                                                        </div>
                                                        <div class="menu-item px-3">
<<<<<<< HEAD
                                                            <a href="?delete=<?php $item['productId'] ?>" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">
=======
                                                            <a href="?delete=<?php echo $item['productId'] ?>" class="menu-link px-3">
>>>>>>> 5a647c1f81f0fb1871b63fa7150b09f17820fd2b
                                                                Delete
                                                            </a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu-->
                                                </td>
                                            </tr>
                                        <?php
                                        }
                                        ?>


                                    </tbody>
                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Products-->
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
                        <li class="menu-item"><a href="https://keenthemes.com/" target="_blank" class="menu-link px-2">About</a></li>

                        <li class="menu-item"><a href="https://devs.keenthemes.com/" target="_blank" class="menu-link px-2">Support</a></li>

                        <li class="menu-item"><a href="https://1.envato.market/EA4JP" target="_blank" class="menu-link px-2">Purchase</a></li>
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


    <!--begin::App layout builder-->
    <div id="kt_app_layout_builder" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="app-settings" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'300px', 'lg': '380px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_app_layout_builder_toggle" data-kt-drawer-close="#kt_app_layout_builder_close">

        <!--begin::Card-->
        <div class="card border-0 shadow-none rounded-0 w-100">
            <!--begin::Card header-->
            <div class="card-header bgi-position-y-bottom bgi-position-x-end bgi-size-cover bgi-no-repeat rounded-0 border-0 py-4" id="kt_app_layout_builder_header" style="background-image:url('./assets/media/misc/layout/customizer-header-bg.jpg')">

                <!--begin::Card title-->
                <h3 class="card-title fs-3 fw-bold text-white flex-column m-0">
                    Metronic Builder

                    <small class="text-white opacity-50 fs-7 fw-semibold pt-1">
                        Get your product deeply customized
                    </small>
                </h3>
                <!--end::Card title-->

                <!--begin::Card toolbar-->
                <div class="card-toolbar">
                    <button type="button" class="btn btn-sm btn-icon btn-color-white p-0 w-20px h-20px rounded-1" id="kt_app_layout_builder_close">
                        <i class="ki-outline ki-cross-square fs-2"></i> </button>
                </div>
                <!--end::Card toolbar-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body position-relative" id="kt_app_layout_builder_body">
                <!--begin::Content-->
                <div id="kt_app_settings_content" class="position-relative scroll-y me-n5 pe-5" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_app_layout_builder_body" data-kt-scroll-dependencies="#kt_app_layout_builder_header, #kt_app_layout_builder_footer" data-kt-scroll-offset="5px">

                    <!--begin::Form-->
                    <form class="form" method="POST" id="kt_app_layout_builder_form" action="https://preview.keenthemes.com/metronic8/demo30/index.php">
                        <input type="hidden" id="kt_app_layout_builder_action" name="layout-builder[action]" />

                        <!--begin::Card body-->
                        <div class="card-body p-0">

                            <!--begin::Form group-->
                            <div class="form-group">
                                <!--begin::Heading-->
                                <div class="mb-6">
                                    <h4 class="fw-bold text-dark">Theme Mode</h4>
                                    <div class="fw-semibold text-muted fs-7 d-block lh-1">
                                        Enjoy Dark & Light modes.

                                        <a class="fw-semibold" href="https://preview.keenthemes.com/html/metronic/docs/getting-started/dark-mode" target="_blank">See docs</a>
                                    </div>
                                </div>
                                <!--end::Heading-->

                                <!--begin::Options-->
                                <div class="row " data-kt-buttons="true" data-kt-buttons-target=".form-check-image,.form-check-input">
                                    <!--begin::Col-->
                                    <div class="col-6">
                                        <!--begin::Option-->
                                        <label class="form-check-image form-check-success">
                                            <!--begin::Image-->
                                            <div class="form-check-wrapper border-gray-200 border-2">
                                                <img src="./assets/media/preview/demos/demo30/light-ltr.png" class="form-check-rounded mw-100" alt="" />
                                            </div>
                                            <!--end::Image-->

                                            <!--begin::Check-->
                                            <div class="form-check form-check-custom form-check-solid form-check-sm form-check-success">
                                                <input class="form-check-input" type="radio" value="light" name="theme_mode" id="kt_layout_builder_theme_mode_light" />

                                                <!--begin::Label-->
                                                <div class="form-check-label text-gray-700">
                                                    Light </div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Check-->
                                        </label>
                                        <!--end::Option-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-6">
                                        <!--begin::Option-->
                                        <label class="form-check-image form-check-success">
                                            <!--begin::Image-->
                                            <div class="form-check-wrapper border-gray-200 border-2">
                                                <img src="./assets/media/preview/demos/demo30/dark-ltr.png" class="form-check-rounded mw-100" alt="" />
                                            </div>
                                            <!--end::Image-->

                                            <!--begin::Check-->
                                            <div class="form-check form-check-custom form-check-solid form-check-sm form-check-success">
                                                <input class="form-check-input" type="radio" value="dark" name="theme_mode" id="kt_layout_builder_theme_mode_dark" />

                                                <!--begin::Label-->
                                                <div class="form-check-label text-gray-700">
                                                    Dark </div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Check-->
                                        </label>
                                        <!--end::Option-->
                                    </div>
                                    <!--end::Col-->

                                </div>
                                <!--end::Options-->
                            </div>
                            <!--end::Form group-->
                            <div class="separator separator-dashed my-5"></div>

                            <!--begin::Form group-->
                            <div class="form-group d-flex flex-stack">
                                <!--begin::Heading-->
                                <div class="d-flex flex-column">
                                    <h4 class="fw-bold text-dark">RTL Mode</h4>
                                    <div class="fs-7 fw-semibold text-muted">
                                        Change Language Direction.

                                        <a class="fw-semibold" href="https://preview.keenthemes.com/html/metronic/docs/getting-started/rtl" target="_blank">See docs</a>
                                    </div>
                                </div>
                                <!--end::Heading-->

                                <!--begin::Option-->
                                <div class="d-flex justify-content-end">
                                    <!--begin::Check-->
                                    <div class="form-check form-check-custom form-check-solid form-check-success form-switch">
                                        <input type="hidden" value="false" name="layout-builder[layout][app][general][rtl]" />

                                        <input class="form-check-input w-45px h-30px" type="checkbox" value="true" name="layout-builder[layout][app][general][rtl]" />
                                    </div>
                                    <!--end::Check-->
                                </div>
                                <!--end::Option-->
                            </div>
                            <!--end::Form group-->
                            <div class="separator separator-dashed my-5"></div>


                            <!--begin::Form group-->
                            <div class="form-group ">
                                <!--begin::Heading-->
                                <div class="d-flex flex-column mb-4">
                                    <h4 class="fw-bold text-dark">Width Mode</h4>
                                    <div class="fs-7 fw-semibold text-muted">Page width options</div>
                                </div>
                                <!--end::Heading-->

                                <!--begin::Options-->
                                <div class="d-flex gap-7">
                                    <!--begin::Check-->
                                    <div class="form-check form-check-custom form-check-success form-check-solid form-check-sm">
                                        <input class="form-check-input" type="radio" checked value="default" id="kt_layout_builder_page_width_default" name="layout-builder[layout][app][general][page-width]" />

                                        <!--begin::Label-->
                                        <label class="form-check-label text-gray-700 fw-bold text-nowrap" for="kt_layout_builder_page_width_default">
                                            Default </label>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Check-->
                                    <!--begin::Check-->
                                    <div class="form-check form-check-custom form-check-success form-check-solid form-check-sm">
                                        <input class="form-check-input" type="radio" value="fluid" id="kt_layout_builder_page_width_fluid" name="layout-builder[layout][app][general][page-width]" />

                                        <!--begin::Label-->
                                        <label class="form-check-label text-gray-700 fw-bold text-nowrap" for="kt_layout_builder_page_width_fluid">
                                            Fluid </label>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Check-->
                                    <!--begin::Check-->
                                    <div class="form-check form-check-custom form-check-success form-check-solid form-check-sm">
                                        <input class="form-check-input" type="radio" value="fixed" id="kt_layout_builder_page_width_fixed" name="layout-builder[layout][app][general][page-width]" />

                                        <!--begin::Label-->
                                        <label class="form-check-label text-gray-700 fw-bold text-nowrap" for="kt_layout_builder_page_width_fixed">
                                            Fixed </label>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Check-->
                                </div>
                                <!--end::Options-->
                            </div>
                            <!--end::Form group-->
                            <div class="separator separator-dashed my-5"></div>


                            <!--begin::Form group-->
                            <div class="form-group ">
                                <!--begin::Heading-->
                                <div class="d-flex flex-column mb-4">
                                    <h4 class="fw-bold text-dark">KeenIcons Style</h4>

                                    <div>
                                        <span class="fs-7 fw-semibold text-muted">Select global UI icons style.</span>
                                        <a class="fw-semibold" href="https://preview.keenthemes.com/html/metronic/docs/icons/keenicons" target="_blank">Learn more</a>
                                    </div>
                                </div>
                                <!--end::Heading-->

                                <!--begin::Options-->
                                <div class="d-flex flex-stack gap-3 " data-kt-buttons="true" data-kt-buttons-target=".form-check-image,.form-check-input">

                                    <!--begin::Option-->
                                    <label class="form-check-image form-check-success w-100 parent-active parent-hover ">
                                        <!--begin::Image-->
                                        <div class="form-check-wrapper d-flex flex-center border-gray-200 border-2 mb-0 py-3 px-4">
                                            <i class="ki-duotone ki-picture fs-1 text-gray-500 parent-active-gray-700 parent-hover-gray-700"><span class="path1"></span><span class="path2"></span></i>
                                            <span class="fs-7 fw-semibold ms-2 text-gray-500 parent-active-gray-700 parent-hover-gray-700">Duotone</span>
                                        </div>
                                        <!--end::Image-->

                                        <!--begin::Check-->
                                        <div style="visibility: hidden; height: 0 !important; width: 0 ; overflow:hidden">
                                            <input class="form-check-input" type="radio" value="duotone" name="layout-builder[layout][app][general][icons]" />
                                        </div>
                                        <!--end::Check-->
                                    </label>
                                    <!--end::Option-->

                                    <!--begin::Option-->
                                    <label class="form-check-image form-check-success w-100 parent-active parent-hover active">
                                        <!--begin::Image-->
                                        <div class="form-check-wrapper d-flex flex-center border-gray-200 border-2 mb-0 py-3 px-4">
                                            <i class="ki-outline ki-picture fs-1 text-gray-500 parent-active-gray-700 parent-hover-gray-700"></i>
                                            <span class="fs-7 fw-semibold ms-2 text-gray-500 parent-active-gray-700 parent-hover-gray-700">Outline</span>
                                        </div>
                                        <!--end::Image-->

                                        <!--begin::Check-->
                                        <div style="visibility: hidden; height: 0 !important; width: 0 ; overflow:hidden">
                                            <input class="form-check-input" type="radio" value="outline" checked name="layout-builder[layout][app][general][icons]" />
                                        </div>
                                        <!--end::Check-->
                                    </label>
                                    <!--end::Option-->

                                    <!--begin::Option-->
                                    <label class="form-check-image form-check-success w-100 parent-active parent-hover ">
                                        <!--begin::Image-->
                                        <div class="form-check-wrapper d-flex flex-center border-gray-200 border-2 mb-0 py-3 px-4">
                                            <i class="ki-solid ki-picture fs-1 text-gray-500 parent-active-gray-700 parent-hover-gray-700"></i>
                                            <span class="fs-7 fw-semibold ms-2 text-gray-500 parent-active-gray-700 parent-hover-gray-700">Solid</span>
                                        </div>
                                        <!--end::Image-->

                                        <!--begin::Check-->
                                        <div style="visibility: hidden; height: 0 !important; width: 0 ; overflow:hidden">
                                            <input class="form-check-input" type="radio" value="solid" name="layout-builder[layout][app][general][icons]" />
                                        </div>
                                        <!--end::Check-->
                                    </label>
                                    <!--end::Option-->

                                </div>
                                <!--end::Options-->
                            </div>
                            <!--end::Form group-->
                            <div class="separator separator-dashed my-5"></div>


                            <!--begin::Form group-->
                            <div class="form-group d-flex flex-stack">
                                <!--begin::Heading-->
                                <div class="d-flex flex-column">
                                    <h4 class="fw-bold text-dark">Sticky Header</h4>

                                    <div class="fs-7 fw-semibold text-muted">
                                        Enable sticky header

                                        <a href="./layout-builder.html" class="fw-semibold text-primary">
                                            More layout options
                                        </a>
                                    </div>
                                </div>
                                <!--end::Heading-->

                                <!--begin::Option-->
                                <div class="d-flex justify-content-end">
                                    <!--begin::Check-->
                                    <div class="form-check form-check-solid form-check-custom form-check-success form-switch">
                                        <input type="hidden" value="false" name="layout-builder[layout][app][header][default][sticky][enabled]" />

                                        <input class="form-check-input w-45px h-30px" type="checkbox" checked value="true" name="layout-builder[layout][app][header][default][sticky][enabled]" />
                                    </div>
                                    <!--end::Check-->
                                </div>
                                <!--end::Option-->
                            </div>
                            <!--end::Form group-->

                        </div>
                        <!--end::Card body-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Card body-->

            <!--begin::Card footer-->
            <div class="card-footer border-0 d-flex gap-3 pb-9 pt-0" id="kt_app_layout_builder_footer">
                <button type="button" id="kt_app_layout_builder_preview" class="btn btn-primary flex-grow-1 fw-semibold">

                    <!--begin::Indicator label-->
                    <span class="indicator-label">
                        Preview</span>
                    <!--end::Indicator label-->

                    <!--begin::Indicator progress-->
                    <span class="indicator-progress">
                        Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </span>
                    <!--end::Indicator progress--> </button>

                <button type="button" id="kt_app_layout_builder_reset" class="btn btn-light flex-grow-1 fw-semibold">

                    <!--begin::Indicator label-->
                    <span class="indicator-label">
                        Reset</span>
                    <!--end::Indicator label-->

                    <!--begin::Indicator progress-->
                    <span class="indicator-progress">
                        Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </span>
                    <!--end::Indicator progress--> </button>
            </div>
            <!--end::Card footer-->
        </div>
        <!--end::Card-->
    </div>
    <!--end::App layout builder-->

    <!--begin::App settings toggle-->
    <button id="kt_app_layout_builder_toggle" class="btn btn-dark app-layout-builder-toggle lh-1 py-4 " title="Metronic Builder" data-bs-custom-class="tooltip-inverse" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-dismiss="click" data-bs-trigger="hover">
        <i class="ki-outline ki-setting-4 fs-4 me-1"></i> Customize
    </button>
    <!--end::App settings toggle-->
    <!--begin::Drawers-->
    <!--begin::Activities drawer-->
    <div id="kt_activities" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="activities" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'300px', 'lg': '900px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_activities_toggle" data-kt-drawer-close="#kt_activities_close">

        <div class="card shadow-none border-0 rounded-0">
            <!--begin::Header-->
            <div class="card-header" id="kt_activities_header">
                <h3 class="card-title fw-bold text-dark">Activity Logs</h3>

                <div class="card-toolbar">
                    <button type="button" class="btn btn-sm btn-icon btn-active-light-primary me-n5" id="kt_activities_close">
                        <i class="ki-outline ki-cross fs-1"></i> </button>
                </div>
            </div>
            <!--end::Header-->

            <!--begin::Body-->
            <div class="card-body position-relative" id="kt_activities_body">
                <!--begin::Content-->
                <div id="kt_activities_scroll" class="position-relative scroll-y me-n5 pe-5" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_activities_body" data-kt-scroll-dependencies="#kt_activities_header, #kt_activities_footer" data-kt-scroll-offset="5px">

                    <!--begin::Timeline items-->
                    <div class="timeline">
                        <!--begin::Timeline item-->
                        <div class="timeline-item">
                            <!--begin::Timeline line-->
                            <div class="timeline-line w-40px"></div>
                            <!--end::Timeline line-->

                            <!--begin::Timeline icon-->
                            <div class="timeline-icon symbol symbol-circle symbol-40px me-4">
                                <div class="symbol-label bg-light">
                                    <i class="ki-outline ki-message-text-2 fs-2 text-gray-500"></i>
                                </div>
                            </div>
                            <!--end::Timeline icon-->

                            <!--begin::Timeline content-->
                            <div class="timeline-content mb-10 mt-n1">
                                <!--begin::Timeline heading-->
                                <div class="pe-3 mb-5">
                                    <!--begin::Title-->
                                    <div class="fs-5 fw-semibold mb-2">There are 2 new tasks for you in “AirPlus Mobile App” project:</div>
                                    <!--end::Title-->

                                    <!--begin::Description-->
                                    <div class="d-flex align-items-center mt-1 fs-6">
                                        <!--begin::Info-->
                                        <div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
                                        <!--end::Info-->

                                        <!--begin::User-->
                                        <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
                                            <img src="./assets/media/avatars/300-14.jpg" alt="img" />
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Timeline heading-->

                                <!--begin::Timeline details-->
                                <div class="overflow-auto pb-5">
                                    <!--begin::Record-->
                                    <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-5">
                                        <!--begin::Title-->
                                        <a href="../../projects/project.html" class="fs-5 text-dark text-hover-primary fw-semibold w-375px min-w-200px">Meeting with customer</a>
                                        <!--end::Title-->

                                        <!--begin::Label-->
                                        <div class="min-w-175px pe-2">
                                            <span class="badge badge-light text-muted">Application Design</span>
                                        </div>
                                        <!--end::Label-->

                                        <!--begin::Users-->
                                        <div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px pe-2">
                                            <!--begin::User-->
                                            <div class="symbol symbol-circle symbol-25px">
                                                <img src="./assets/media/avatars/300-2.jpg" alt="img" />
                                            </div>
                                            <!--end::User-->

                                            <!--begin::User-->
                                            <div class="symbol symbol-circle symbol-25px">
                                                <img src="./assets/media/avatars/300-14.jpg" alt="img" />
                                            </div>
                                            <!--end::User-->

                                            <!--begin::User-->
                                            <div class="symbol symbol-circle symbol-25px">
                                                <div class="symbol-label fs-8 fw-semibold bg-primary text-inverse-primary">A</div>
                                            </div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Users-->

                                        <!--begin::Progress-->
                                        <div class="min-w-125px pe-2">
                                            <span class="badge badge-light-primary">In Progress</span>
                                        </div>
                                        <!--end::Progress-->

                                        <!--begin::Action-->
                                        <a href="../../projects/project.html" class="btn btn-sm btn-light btn-active-light-primary">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Record-->

                                    <!--begin::Record-->
                                    <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-0">
                                        <!--begin::Title-->
                                        <a href="../../projects/project.html" class="fs-5 text-dark text-hover-primary fw-semibold w-375px min-w-200px">Project Delivery Preparation</a>
                                        <!--end::Title-->

                                        <!--begin::Label-->
                                        <div class="min-w-175px">
                                            <span class="badge badge-light text-muted">CRM System Development</span>
                                        </div>
                                        <!--end::Label-->

                                        <!--begin::Users-->
                                        <div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px">
                                            <!--begin::User-->
                                            <div class="symbol symbol-circle symbol-25px">
                                                <img src="./assets/media/avatars/300-20.jpg" alt="img" />
                                            </div>
                                            <!--end::User-->

                                            <!--begin::User-->
                                            <div class="symbol symbol-circle symbol-25px">
                                                <div class="symbol-label fs-8 fw-semibold bg-success text-inverse-primary">B</div>
                                            </div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Users-->

                                        <!--begin::Progress-->
                                        <div class="min-w-125px">
                                            <span class="badge badge-light-success">Completed</span>
                                        </div>
                                        <!--end::Progress-->

                                        <!--begin::Action-->
                                        <a href="../../projects/project.html" class="btn btn-sm btn-light btn-active-light-primary">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Record-->
                                </div>
                                <!--end::Timeline details-->
                            </div>
                            <!--end::Timeline content-->
                        </div>
                        <!--end::Timeline item-->
                        <!--begin::Timeline item-->
                        <div class="timeline-item">
                            <!--begin::Timeline line-->
                            <div class="timeline-line w-40px"></div>
                            <!--end::Timeline line-->

                            <!--begin::Timeline icon-->
                            <div class="timeline-icon symbol symbol-circle symbol-40px">
                                <div class="symbol-label bg-light">
                                    <i class="ki-outline ki-flag fs-2 text-gray-500"></i>
                                </div>
                            </div>
                            <!--end::Timeline icon-->

                            <!--begin::Timeline content-->
                            <div class="timeline-content mb-10 mt-n2">
                                <!--begin::Timeline heading-->
                                <div class="overflow-auto pe-3">
                                    <!--begin::Title-->
                                    <div class="fs-5 fw-semibold mb-2">Invitation for crafting engaging designs that speak human workshop</div>
                                    <!--end::Title-->

                                    <!--begin::Description-->
                                    <div class="d-flex align-items-center mt-1 fs-6">
                                        <!--begin::Info-->
                                        <div class="text-muted me-2 fs-7">Sent at 4:23 PM by</div>
                                        <!--end::Info-->

                                        <!--begin::User-->
                                        <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Alan Nilson">
                                            <img src="./assets/media/avatars/300-1.jpg" alt="img" />
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Timeline heading-->
                            </div>
                            <!--end::Timeline content-->
                        </div>
                        <!--end::Timeline item-->
                        <!--begin::Timeline item-->
                        <div class="timeline-item">
                            <!--begin::Timeline line-->
                            <div class="timeline-line w-40px"></div>
                            <!--end::Timeline line-->

                            <!--begin::Timeline icon-->
                            <div class="timeline-icon symbol symbol-circle symbol-40px">
                                <div class="symbol-label bg-light">
                                    <i class="ki-outline ki-disconnect fs-2 text-gray-500"></i>
                                </div>
                            </div>
                            <!--end::Timeline icon-->

                            <!--begin::Timeline content-->
                            <div class="timeline-content mb-10 mt-n1">
                                <!--begin::Timeline heading-->
                                <div class="mb-5 pe-3">
                                    <!--begin::Title-->
                                    <a href="#" class="fs-5 fw-semibold text-gray-800 text-hover-primary mb-2">3 New Incoming Project Files:</a>
                                    <!--end::Title-->

                                    <!--begin::Description-->
                                    <div class="d-flex align-items-center mt-1 fs-6">
                                        <!--begin::Info-->
                                        <div class="text-muted me-2 fs-7">Sent at 10:30 PM by</div>
                                        <!--end::Info-->

                                        <!--begin::User-->
                                        <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Jan Hummer">
                                            <img src="./assets/media/avatars/300-23.jpg" alt="img" />
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Timeline heading-->

                                <!--begin::Timeline details-->
                                <div class="overflow-auto pb-5">
                                    <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-5">
                                        <!--begin::Item-->
                                        <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                                            <!--begin::Icon-->
                                            <img alt="" class="w-30px me-3" src="./assets/media/svg/files/pdf.svg" />
                                            <!--end::Icon-->

                                            <!--begin::Info-->
                                            <div class="ms-1 fw-semibold">
                                                <!--begin::Desc-->
                                                <a href="../../projects/project.html" class="fs-6 text-hover-primary fw-bold">Finance KPI App Guidelines</a>
                                                <!--end::Desc-->

                                                <!--begin::Number-->
                                                <div class="text-gray-400">1.9mb</div>
                                                <!--end::Number-->
                                            </div>
                                            <!--begin::Info-->
                                        </div>
                                        <!--end::Item-->

                                        <!--begin::Item-->
                                        <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                                            <!--begin::Icon-->
                                            <img alt="/metronic8/demo30/../demo30/apps/projects/project.html" class="w-30px me-3" src="./assets/media/svg/files/doc.svg" />
                                            <!--end::Icon-->

                                            <!--begin::Info-->
                                            <div class="ms-1 fw-semibold">
                                                <!--begin::Desc-->
                                                <a href="#" class="fs-6 text-hover-primary fw-bold">Client UAT Testing Results</a>
                                                <!--end::Desc-->

                                                <!--begin::Number-->
                                                <div class="text-gray-400">18kb</div>
                                                <!--end::Number-->
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Item-->

                                        <!--begin::Item-->
                                        <div class="d-flex flex-aligns-center">
                                            <!--begin::Icon-->
                                            <img alt="/metronic8/demo30/../demo30/apps/projects/project.html" class="w-30px me-3" src="./assets/media/svg/files/css.svg" />
                                            <!--end::Icon-->

                                            <!--begin::Info-->
                                            <div class="ms-1 fw-semibold">
                                                <!--begin::Desc-->
                                                <a href="#" class="fs-6 text-hover-primary fw-bold">Finance Reports</a>
                                                <!--end::Desc-->

                                                <!--begin::Number-->
                                                <div class="text-gray-400">20mb</div>
                                                <!--end::Number-->
                                            </div>
                                            <!--end::Icon-->
                                        </div>
                                        <!--end::Item-->
                                    </div>
                                </div>
                                <!--end::Timeline details-->
                            </div>
                            <!--end::Timeline content-->
                        </div>
                        <!--end::Timeline item-->
                        <!--begin::Timeline item-->
                        <div class="timeline-item">
                            <!--begin::Timeline line-->
                            <div class="timeline-line w-40px"></div>
                            <!--end::Timeline line-->

                            <!--begin::Timeline icon-->
                            <div class="timeline-icon symbol symbol-circle symbol-40px">
                                <div class="symbol-label bg-light">
                                    <i class="ki-outline ki-abstract-26 fs-2 text-gray-500"></i>
                                </div>
                            </div>
                            <!--end::Timeline icon-->

                            <!--begin::Timeline content-->
                            <div class="timeline-content mb-10 mt-n1">
                                <!--begin::Timeline heading-->
                                <div class="pe-3 mb-5">
                                    <!--begin::Title-->
                                    <div class="fs-5 fw-semibold mb-2">
                                        Task <a href="#" class="text-primary fw-bold me-1">#45890</a>
                                        merged with <a href="#" class="text-primary fw-bold me-1">#45890</a> in “Ads Pro Admin Dashboard project:
                                    </div>
                                    <!--end::Title-->

                                    <!--begin::Description-->
                                    <div class="d-flex align-items-center mt-1 fs-6">
                                        <!--begin::Info-->
                                        <div class="text-muted me-2 fs-7">Initiated at 4:23 PM by</div>
                                        <!--end::Info-->

                                        <!--begin::User-->
                                        <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
                                            <img src="./assets/media/avatars/300-14.jpg" alt="img" />
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Timeline heading-->
                            </div>
                            <!--end::Timeline content-->
                        </div>
                        <!--end::Timeline item-->
                        <!--begin::Timeline item-->
                        <div class="timeline-item">
                            <!--begin::Timeline line-->
                            <div class="timeline-line w-40px"></div>
                            <!--end::Timeline line-->

                            <!--begin::Timeline icon-->
                            <div class="timeline-icon symbol symbol-circle symbol-40px">
                                <div class="symbol-label bg-light">
                                    <i class="ki-outline ki-pencil fs-2 text-gray-500"></i>
                                </div>
                            </div>
                            <!--end::Timeline icon-->

                            <!--begin::Timeline content-->
                            <div class="timeline-content mb-10 mt-n1">
                                <!--begin::Timeline heading-->
                                <div class="pe-3 mb-5">
                                    <!--begin::Title-->
                                    <div class="fs-5 fw-semibold mb-2">3 new application design concepts added:</div>
                                    <!--end::Title-->

                                    <!--begin::Description-->
                                    <div class="d-flex align-items-center mt-1 fs-6">
                                        <!--begin::Info-->
                                        <div class="text-muted me-2 fs-7">Created at 4:23 PM by</div>
                                        <!--end::Info-->

                                        <!--begin::User-->
                                        <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Marcus Dotson">
                                            <img src="./assets/media/avatars/300-2.jpg" alt="img" />
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Timeline heading-->

                                <!--begin::Timeline details-->
                                <div class="overflow-auto pb-5">
                                    <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-7">
                                        <!--begin::Item-->
                                        <div class="overlay me-10">
                                            <!--begin::Image-->
                                            <div class="overlay-wrapper">
                                                <img alt="img" class="rounded w-150px" src="./assets/media/stock/600x400/img-29.jpg" />
                                            </div>
                                            <!--end::Image-->

                                            <!--begin::Link-->
                                            <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                                <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                            </div>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::Item-->

                                        <!--begin::Item-->
                                        <div class="overlay me-10">
                                            <!--begin::Image-->
                                            <div class="overlay-wrapper">
                                                <img alt="img" class="rounded w-150px" src="./assets/media/stock/600x400/img-31.jpg" />
                                            </div>
                                            <!--end::Image-->

                                            <!--begin::Link-->
                                            <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                                <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                            </div>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::Item-->

                                        <!--begin::Item-->
                                        <div class="overlay">
                                            <!--begin::Image-->
                                            <div class="overlay-wrapper">
                                                <img alt="img" class="rounded w-150px" src="./assets/media/stock/600x400/img-40.jpg" />
                                            </div>
                                            <!--end::Image-->

                                            <!--begin::Link-->
                                            <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                                <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                            </div>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::Item-->
                                    </div>
                                </div>
                                <!--end::Timeline details-->
                            </div>
                            <!--end::Timeline content-->
                        </div>
                        <!--end::Timeline item-->
                        <!--begin::Timeline item-->
                        <div class="timeline-item">
                            <!--begin::Timeline line-->
                            <div class="timeline-line w-40px"></div>
                            <!--end::Timeline line-->

                            <!--begin::Timeline icon-->
                            <div class="timeline-icon symbol symbol-circle symbol-40px">
                                <div class="symbol-label bg-light">
                                    <i class="ki-outline ki-sms fs-2 text-gray-500"></i>
                                </div>
                            </div>
                            <!--end::Timeline icon-->

                            <!--begin::Timeline content-->
                            <div class="timeline-content mb-10 mt-n1">
                                <!--begin::Timeline heading-->
                                <div class="pe-3 mb-5">
                                    <!--begin::Title-->
                                    <div class="fs-5 fw-semibold mb-2">
                                        New case <a href="#" class="text-primary fw-bold me-1">#67890</a>
                                        is assigned to you in Multi-platform Database Design project
                                    </div>
                                    <!--end::Title-->

                                    <!--begin::Description-->
                                    <div class="overflow-auto pb-5">
                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center mt-1 fs-6">
                                            <!--begin::Info-->
                                            <div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
                                            <!--end::Info-->

                                            <!--begin::User-->
                                            <a href="#" class="text-primary fw-bold me-1">Alice Tan</a>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Timeline heading-->
                            </div>
                            <!--end::Timeline content-->
                        </div>
                        <!--end::Timeline item-->
                        <!--begin::Timeline item-->
                        <div class="timeline-item">
                            <!--begin::Timeline line-->
                            <div class="timeline-line w-40px"></div>
                            <!--end::Timeline line-->

                            <!--begin::Timeline icon-->
                            <div class="timeline-icon symbol symbol-circle symbol-40px">
                                <div class="symbol-label bg-light">
                                    <i class="ki-outline ki-pencil fs-2 text-gray-500"></i>
                                </div>
                            </div>
                            <!--end::Timeline icon-->

                            <!--begin::Timeline content-->
                            <div class="timeline-content mb-10 mt-n1">
                                <!--begin::Timeline heading-->
                                <div class="pe-3 mb-5">
                                    <!--begin::Title-->
                                    <div class="fs-5 fw-semibold mb-2">You have received a new order:</div>
                                    <!--end::Title-->

                                    <!--begin::Description-->
                                    <div class="d-flex align-items-center mt-1 fs-6">
                                        <!--begin::Info-->
                                        <div class="text-muted me-2 fs-7">Placed at 5:05 AM by</div>
                                        <!--end::Info-->

                                        <!--begin::User-->
                                        <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Robert Rich">
                                            <img src="./assets/media/avatars/300-4.jpg" alt="img" />
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Timeline heading-->

                                <!--begin::Timeline details-->
                                <div class="overflow-auto pb-5">

                                    <!--begin::Notice-->
                                    <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed min-w-lg-600px flex-shrink-0 p-6">
                                        <!--begin::Icon-->
                                        <i class="ki-outline ki-devices-2 fs-2tx text-primary me-4"></i> <!--end::Icon-->

                                        <!--begin::Wrapper-->
                                        <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                                            <!--begin::Content-->
                                            <div class="mb-3 mb-md-0 fw-semibold">
                                                <h4 class="text-gray-900 fw-bold">Database Backup Process Completed!</h4>

                                                <div class="fs-6 text-gray-700 pe-7">Login into Admin Dashboard to make sure the data integrity is OK</div>
                                            </div>
                                            <!--end::Content-->

                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-primary px-6 align-self-center text-nowrap">
                                                Proceed </a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Notice-->

                                </div>
                                <!--end::Timeline details-->
                            </div>
                            <!--end::Timeline content-->
                        </div>
                        <!--end::Timeline item-->
                        <!--begin::Timeline item-->
                        <div class="timeline-item">
                            <!--begin::Timeline line-->
                            <div class="timeline-line w-40px"></div>
                            <!--end::Timeline line-->

                            <!--begin::Timeline icon-->
                            <div class="timeline-icon symbol symbol-circle symbol-40px">
                                <div class="symbol-label bg-light">
                                    <i class="ki-outline ki-basket fs-2 text-gray-500"></i>
                                </div>
                            </div>
                            <!--end::Timeline icon-->

                            <!--begin::Timeline content-->
                            <div class="timeline-content mt-n1">
                                <!--begin::Timeline heading-->
                                <div class="pe-3 mb-5">
                                    <!--begin::Title-->
                                    <div class="fs-5 fw-semibold mb-2">
                                        New order <a href="#" class="text-primary fw-bold me-1">#67890</a>
                                        is placed for Workshow Planning & Budget Estimation
                                    </div>
                                    <!--end::Title-->

                                    <!--begin::Description-->
                                    <div class="d-flex align-items-center mt-1 fs-6">
                                        <!--begin::Info-->
                                        <div class="text-muted me-2 fs-7">Placed at 4:23 PM by</div>
                                        <!--end::Info-->

                                        <!--begin::User-->
                                        <a href="#" class="text-primary fw-bold me-1">Jimmy Bold</a>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Timeline heading-->
                            </div>
                            <!--end::Timeline content-->
                        </div>
                        <!--end::Timeline item-->
                    </div>
                    <!--end::Timeline items-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Body-->

            <!--begin::Footer-->
            <div class="card-footer py-5 text-center" id="kt_activities_footer">
                <a href="./pages/user-profile/activity.html" class="btn btn-bg-body text-primary">
                    View All Activities <i class="ki-outline ki-arrow-right fs-3 text-primary"></i> </a>
            </div>
            <!--end::Footer-->
        </div>
    </div>
    <!--end::Activities drawer-->

    <!--begin::Chat drawer-->
    <div id="kt_drawer_chat" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="chat" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'300px', 'md': '500px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_drawer_chat_toggle" data-kt-drawer-close="#kt_drawer_chat_close">

        <!--begin::Messenger-->
        <div class="card w-100 border-0 rounded-0" id="kt_drawer_chat_messenger">
            <!--begin::Card header-->
            <div class="card-header pe-5" id="kt_drawer_chat_messenger_header">
                <!--begin::Title-->
                <div class="card-title">
                    <!--begin::User-->
                    <div class="d-flex justify-content-center flex-column me-3">
                        <a href="#" class="fs-4 fw-bold text-gray-900 text-hover-primary me-1 mb-2 lh-1">Brian Cox</a>

                        <!--begin::Info-->
                        <div class="mb-0 lh-1">
                            <span class="badge badge-success badge-circle w-10px h-10px me-1"></span>
                            <span class="fs-7 fw-semibold text-muted">Active</span>
                        </div>
                        <!--end::Info-->
                    </div>
                    <!--end::User-->
                </div>
                <!--end::Title-->

                <!--begin::Card toolbar-->
                <div class="card-toolbar">
                    <!--begin::Menu-->
                    <div class="me-0">
                        <button class="btn btn-sm btn-icon btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                            <i class="ki-outline ki-dots-square fs-2"></i> </button>

                        <!--begin::Menu 3-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
                            <!--begin::Heading-->
                            <div class="menu-item px-3">
                                <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">
                                    Contacts
                                </div>
                            </div>
                            <!--end::Heading-->

                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_users_search">
                                    Add Contact
                                </a>
                            </div>
                            <!--end::Menu item-->

                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link flex-stack px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">
                                    Invite Contacts

                                    <span class="ms-2" data-bs-toggle="tooltip" title="Specify a contact email to send an invitation">
                                        <i class="ki-outline ki-information fs-7"></i> </span>
                                </a>
                            </div>
                            <!--end::Menu item-->

                            <!--begin::Menu item-->
                            <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                                <a href="#" class="menu-link px-3">
                                    <span class="menu-title">Groups</span>
                                    <span class="menu-arrow"></span>
                                </a>

                                <!--begin::Menu sub-->
                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">
                                            Create Group
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">
                                            Invite Members
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">
                                            Settings
                                        </a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu sub-->
                            </div>
                            <!--end::Menu item-->

                            <!--begin::Menu item-->
                            <div class="menu-item px-3 my-1">
                                <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">
                                    Settings
                                </a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu 3-->
                    </div>
                    <!--end::Menu-->

                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" id="kt_drawer_chat_close">
                        <i class="ki-outline ki-cross-square fs-2"></i>
                    </div>
                    <!--end::Close-->
                </div>
                <!--end::Card toolbar-->
            </div>
            <!--end::Card header-->

            <!--begin::Card body-->
            <div class="card-body" id="kt_drawer_chat_messenger_body">
                <!--begin::Messages-->
                <div class="scroll-y me-n5 pe-5" data-kt-element="messages" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_drawer_chat_messenger_header, #kt_drawer_chat_messenger_footer" data-kt-scroll-wrappers="#kt_drawer_chat_messenger_body" data-kt-scroll-offset="0px">



                    <!--begin::Message(in)-->
                    <div class="d-flex justify-content-start mb-10 ">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column align-items-start">
                            <!--begin::User-->
                            <div class="d-flex align-items-center mb-2">
                                <!--begin::Avatar-->
                                <div class="symbol  symbol-35px symbol-circle "><img alt="Pic" src="./assets/media/avatars/300-25.jpg" /></div><!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-3">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
                                    <span class="text-muted fs-7 mb-1">2 mins</span>
                                </div>
                                <!--end::Details-->

                            </div>
                            <!--end::User-->

                            <!--begin::Text-->
                            <div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start" data-kt-element="message-text">
                                How likely are you to recommend our company to your friends and family ? </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Message(in)-->

                    <!--begin::Message(out)-->
                    <div class="d-flex justify-content-end mb-10 ">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column align-items-end">
                            <!--begin::User-->
                            <div class="d-flex align-items-center mb-2">
                                <!--begin::Details-->
                                <div class="me-3">
                                    <span class="text-muted fs-7 mb-1">5 mins</span>
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
                                </div>
                                <!--end::Details-->

                                <!--begin::Avatar-->
                                <div class="symbol  symbol-35px symbol-circle "><img alt="Pic" src="./assets/media/avatars/300-1.jpg" /></div><!--end::Avatar-->
                            </div>
                            <!--end::User-->

                            <!--begin::Text-->
                            <div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end" data-kt-element="message-text">
                                Hey there, we’re just writing to let you know that you’ve been subscribed to a repository on GitHub. </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Message(out)-->

                    <!--begin::Message(in)-->
                    <div class="d-flex justify-content-start mb-10 ">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column align-items-start">
                            <!--begin::User-->
                            <div class="d-flex align-items-center mb-2">
                                <!--begin::Avatar-->
                                <div class="symbol  symbol-35px symbol-circle "><img alt="Pic" src="./assets/media/avatars/300-25.jpg" /></div><!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-3">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
                                    <span class="text-muted fs-7 mb-1">1 Hour</span>
                                </div>
                                <!--end::Details-->

                            </div>
                            <!--end::User-->

                            <!--begin::Text-->
                            <div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start" data-kt-element="message-text">
                                Ok, Understood! </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Message(in)-->

                    <!--begin::Message(out)-->
                    <div class="d-flex justify-content-end mb-10 ">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column align-items-end">
                            <!--begin::User-->
                            <div class="d-flex align-items-center mb-2">
                                <!--begin::Details-->
                                <div class="me-3">
                                    <span class="text-muted fs-7 mb-1">2 Hours</span>
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
                                </div>
                                <!--end::Details-->

                                <!--begin::Avatar-->
                                <div class="symbol  symbol-35px symbol-circle "><img alt="Pic" src="./assets/media/avatars/300-1.jpg" /></div><!--end::Avatar-->
                            </div>
                            <!--end::User-->

                            <!--begin::Text-->
                            <div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end" data-kt-element="message-text">
                                You’ll receive notifications for all issues, pull requests! </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Message(out)-->

                    <!--begin::Message(in)-->
                    <div class="d-flex justify-content-start mb-10 ">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column align-items-start">
                            <!--begin::User-->
                            <div class="d-flex align-items-center mb-2">
                                <!--begin::Avatar-->
                                <div class="symbol  symbol-35px symbol-circle "><img alt="Pic" src="./assets/media/avatars/300-25.jpg" /></div><!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-3">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
                                    <span class="text-muted fs-7 mb-1">3 Hours</span>
                                </div>
                                <!--end::Details-->

                            </div>
                            <!--end::User-->

                            <!--begin::Text-->
                            <div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start" data-kt-element="message-text">
                                You can unwatch this repository immediately by clicking here: <a href="https://keenthemes.com/">Keenthemes.com</a> </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Message(in)-->

                    <!--begin::Message(out)-->
                    <div class="d-flex justify-content-end mb-10 ">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column align-items-end">
                            <!--begin::User-->
                            <div class="d-flex align-items-center mb-2">
                                <!--begin::Details-->
                                <div class="me-3">
                                    <span class="text-muted fs-7 mb-1">4 Hours</span>
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
                                </div>
                                <!--end::Details-->

                                <!--begin::Avatar-->
                                <div class="symbol  symbol-35px symbol-circle "><img alt="Pic" src="./assets/media/avatars/300-1.jpg" /></div><!--end::Avatar-->
                            </div>
                            <!--end::User-->

                            <!--begin::Text-->
                            <div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end" data-kt-element="message-text">
                                Most purchased Business courses during this sale! </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Message(out)-->

                    <!--begin::Message(in)-->
                    <div class="d-flex justify-content-start mb-10 ">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column align-items-start">
                            <!--begin::User-->
                            <div class="d-flex align-items-center mb-2">
                                <!--begin::Avatar-->
                                <div class="symbol  symbol-35px symbol-circle "><img alt="Pic" src="./assets/media/avatars/300-25.jpg" /></div><!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-3">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
                                    <span class="text-muted fs-7 mb-1">5 Hours</span>
                                </div>
                                <!--end::Details-->

                            </div>
                            <!--end::User-->

                            <!--begin::Text-->
                            <div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start" data-kt-element="message-text">
                                Company BBQ to celebrate the last quater achievements and goals. Food and drinks provided </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Message(in)-->

                    <!--begin::Message(template for out)-->
                    <div class="d-flex justify-content-end mb-10 d-none" data-kt-element="template-out">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column align-items-end">
                            <!--begin::User-->
                            <div class="d-flex align-items-center mb-2">
                                <!--begin::Details-->
                                <div class="me-3">
                                    <span class="text-muted fs-7 mb-1">Just now</span>
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
                                </div>
                                <!--end::Details-->

                                <!--begin::Avatar-->
                                <div class="symbol  symbol-35px symbol-circle "><img alt="Pic" src="./assets/media/avatars/300-1.jpg" /></div><!--end::Avatar-->
                            </div>
                            <!--end::User-->

                            <!--begin::Text-->
                            <div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end" data-kt-element="message-text">
                            </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Message(template for out)-->

                    <!--begin::Message(template for in)-->
                    <div class="d-flex justify-content-start mb-10 d-none" data-kt-element="template-in">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column align-items-start">
                            <!--begin::User-->
                            <div class="d-flex align-items-center mb-2">
                                <!--begin::Avatar-->
                                <div class="symbol  symbol-35px symbol-circle "><img alt="Pic" src="./assets/media/avatars/300-25.jpg" /></div><!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-3">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
                                    <span class="text-muted fs-7 mb-1">Just now</span>
                                </div>
                                <!--end::Details-->

                            </div>
                            <!--end::User-->

                            <!--begin::Text-->
                            <div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start" data-kt-element="message-text">
                                Right before vacation season we have the next Big Deal for you. </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Message(template for in)-->
                </div>
                <!--end::Messages-->
            </div>
            <!--end::Card body-->

            <!--begin::Card footer-->
            <div class="card-footer pt-4" id="kt_drawer_chat_messenger_footer">
                <!--begin::Input-->
                <textarea class="form-control form-control-flush mb-3" rows="1" data-kt-element="input" placeholder="Type a message">

            </textarea>
                <!--end::Input-->

                <!--begin:Toolbar-->
                <div class="d-flex flex-stack">
                    <!--begin::Actions-->
                    <div class="d-flex align-items-center me-2">
                        <button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button" data-bs-toggle="tooltip" title="Coming soon">
                            <i class="ki-outline ki-paper-clip fs-3"></i> </button>
                        <button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button" data-bs-toggle="tooltip" title="Coming soon">
                            <i class="ki-outline ki-cloud-add fs-3"></i> </button>
                    </div>
                    <!--end::Actions-->

                    <!--begin::Send-->
                    <button class="btn btn-primary" type="button" data-kt-element="send">Send</button>
                    <!--end::Send-->
                </div>
                <!--end::Toolbar-->
            </div>
            <!--end::Card footer-->
        </div>
        <!--end::Messenger-->
    </div>
    <!--end::Chat drawer-->

    <!--begin::Chat drawer-->
    <div id="kt_shopping_cart" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="cart" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'300px', 'md': '500px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_drawer_shopping_cart_toggle" data-kt-drawer-close="#kt_drawer_shopping_cart_close">

        <!--begin::Messenger-->
        <div class="card card-flush w-100 rounded-0">
            <!--begin::Card header-->
            <div class="card-header">
                <!--begin::Title-->
                <h3 class="card-title text-gray-900 fw-bold">Shopping Cart</h3>
                <!--end::Title-->

                <!--begin::Card toolbar-->
                <div class="card-toolbar">
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-light-primary" id="kt_drawer_shopping_cart_close">
                        <i class="ki-outline ki-cross fs-2"></i>
                    </div>
                    <!--end::Close-->
                </div>
                <!--end::Card toolbar-->
            </div>
            <!--end::Card header-->

            <!--begin::Card body-->
            <div class="card-body hover-scroll-overlay-y h-400px pt-5">

                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column me-3">
                        <!--begin::Section-->
                        <div class="mb-3">
                            <a href="../sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">Iblender</a>

                            <span class="text-gray-400 fw-semibold d-block">The best kitchen gadget in 2022</span>
                        </div>
                        <!--end::Section-->

                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <span class="fw-bold text-gray-800 fs-5">$ 350</span>
                            <span class="text-muted mx-2">for</span>
                            <span class="fw-bold text-gray-800 fs-5 me-3">5</span>

                            <a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                <i class="ki-outline ki-minus fs-4"></i> </a>

                            <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                <i class="ki-outline ki-plus fs-4"></i> </a>
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Wrapper-->

                    <!--begin::Pic-->
                    <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                        <img src="./assets/media/stock/600x400/img-1.jpg" alt="" />
                    </div>
                    <!--end::Pic-->
                </div>
                <!--end::Item-->

                <!--begin::Separator-->
                <div class="separator separator-dashed my-6"></div>
                <!--end::Separator-->


                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column me-3">
                        <!--begin::Section-->
                        <div class="mb-3">
                            <a href="../sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">SmartCleaner</a>

                            <span class="text-gray-400 fw-semibold d-block">Smart tool for cooking</span>
                        </div>
                        <!--end::Section-->

                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <span class="fw-bold text-gray-800 fs-5">$ 650</span>
                            <span class="text-muted mx-2">for</span>
                            <span class="fw-bold text-gray-800 fs-5 me-3">4</span>

                            <a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                <i class="ki-outline ki-minus fs-4"></i> </a>

                            <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                <i class="ki-outline ki-plus fs-4"></i> </a>
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Wrapper-->

                    <!--begin::Pic-->
                    <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                        <img src="./assets/media/stock/600x400/img-3.jpg" alt="" />
                    </div>
                    <!--end::Pic-->
                </div>
                <!--end::Item-->

                <!--begin::Separator-->
                <div class="separator separator-dashed my-6"></div>
                <!--end::Separator-->


                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column me-3">
                        <!--begin::Section-->
                        <div class="mb-3">
                            <a href="../sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">CameraMaxr</a>

                            <span class="text-gray-400 fw-semibold d-block">Professional camera for edge</span>
                        </div>
                        <!--end::Section-->

                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <span class="fw-bold text-gray-800 fs-5">$ 150</span>
                            <span class="text-muted mx-2">for</span>
                            <span class="fw-bold text-gray-800 fs-5 me-3">3</span>

                            <a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                <i class="ki-outline ki-minus fs-4"></i> </a>

                            <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                <i class="ki-outline ki-plus fs-4"></i> </a>
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Wrapper-->

                    <!--begin::Pic-->
                    <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                        <img src="./assets/media/stock/600x400/img-8.jpg" alt="" />
                    </div>
                    <!--end::Pic-->
                </div>
                <!--end::Item-->

                <!--begin::Separator-->
                <div class="separator separator-dashed my-6"></div>
                <!--end::Separator-->


                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column me-3">
                        <!--begin::Section-->
                        <div class="mb-3">
                            <a href="../sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">$D Printer</a>

                            <span class="text-gray-400 fw-semibold d-block">Manfactoring unique objekts</span>
                        </div>
                        <!--end::Section-->

                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <span class="fw-bold text-gray-800 fs-5">$ 1450</span>
                            <span class="text-muted mx-2">for</span>
                            <span class="fw-bold text-gray-800 fs-5 me-3">7</span>

                            <a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                <i class="ki-outline ki-minus fs-4"></i> </a>

                            <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                <i class="ki-outline ki-plus fs-4"></i> </a>
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Wrapper-->

                    <!--begin::Pic-->
                    <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                        <img src="./assets/media/stock/600x400/img-26.jpg" alt="" />
                    </div>
                    <!--end::Pic-->
                </div>
                <!--end::Item-->

                <!--begin::Separator-->
                <div class="separator separator-dashed my-6"></div>
                <!--end::Separator-->


                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column me-3">
                        <!--begin::Section-->
                        <div class="mb-3">
                            <a href="../sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">MotionWire</a>

                            <span class="text-gray-400 fw-semibold d-block">Perfect animation tool</span>
                        </div>
                        <!--end::Section-->

                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <span class="fw-bold text-gray-800 fs-5">$ 650</span>
                            <span class="text-muted mx-2">for</span>
                            <span class="fw-bold text-gray-800 fs-5 me-3">7</span>

                            <a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                <i class="ki-outline ki-minus fs-4"></i> </a>

                            <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                <i class="ki-outline ki-plus fs-4"></i> </a>
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Wrapper-->

                    <!--begin::Pic-->
                    <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                        <img src="./assets/media/stock/600x400/img-21.jpg" alt="" />
                    </div>
                    <!--end::Pic-->
                </div>
                <!--end::Item-->

                <!--begin::Separator-->
                <div class="separator separator-dashed my-6"></div>
                <!--end::Separator-->


                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column me-3">
                        <!--begin::Section-->
                        <div class="mb-3">
                            <a href="../sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">Samsung</a>

                            <span class="text-gray-400 fw-semibold d-block">Profile info,Timeline etc</span>
                        </div>
                        <!--end::Section-->

                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <span class="fw-bold text-gray-800 fs-5">$ 720</span>
                            <span class="text-muted mx-2">for</span>
                            <span class="fw-bold text-gray-800 fs-5 me-3">6</span>

                            <a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                <i class="ki-outline ki-minus fs-4"></i> </a>

                            <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                <i class="ki-outline ki-plus fs-4"></i> </a>
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Wrapper-->

                    <!--begin::Pic-->
                    <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                        <img src="./assets/media/stock/600x400/img-34.jpg" alt="" />
                    </div>
                    <!--end::Pic-->
                </div>
                <!--end::Item-->

                <!--begin::Separator-->
                <div class="separator separator-dashed my-6"></div>
                <!--end::Separator-->


                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column me-3">
                        <!--begin::Section-->
                        <div class="mb-3">
                            <a href="../sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">$D Printer</a>

                            <span class="text-gray-400 fw-semibold d-block">Manfactoring unique objekts</span>
                        </div>
                        <!--end::Section-->

                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <span class="fw-bold text-gray-800 fs-5">$ 430</span>
                            <span class="text-muted mx-2">for</span>
                            <span class="fw-bold text-gray-800 fs-5 me-3">8</span>

                            <a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                <i class="ki-outline ki-minus fs-4"></i> </a>

                            <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                <i class="ki-outline ki-plus fs-4"></i> </a>
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Wrapper-->

                    <!--begin::Pic-->
                    <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                        <img src="./assets/media/stock/600x400/img-27.jpg" alt="" />
                    </div>
                    <!--end::Pic-->
                </div>
                <!--end::Item-->



            </div>
            <!--end::Card body-->

            <!--begin::Card footer-->
            <div class="card-footer">
                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <span class="fw-bold text-gray-600">Total</span>
                    <span class="text-gray-800 fw-bolder fs-5">$ 1840.00</span>
                </div>
                <!--end::Item-->

                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <span class="fw-bold text-gray-600">Sub total</span>
                    <span class="text-primary fw-bolder fs-5">$ 246.35</span>
                </div>
                <!--end::Item-->

                <!--end::Action-->
                <div class="d-flex justify-content-end mt-9">
                    <a href="#" class="btn btn-primary d-flex justify-content-end">Pleace Order</a>
                </div>
                <!--end::Action-->
            </div>
            <!--end::Card footer-->
        </div>
        <!--end::Messenger-->
    </div>
    <!--end::Chat drawer-->
    <!--end::Drawers-->
    <!--begin::Engage-->
    <div class="app-engage " id="kt_app_engage">
        <!--begin::Prebuilts toggle-->
        <a href="#" data-bs-toggle="modal" data-bs-target="#kt_app_engage_prebuilts_modal" class="app-engage-btn hover-dark">
            <i class="ki-outline ki-abstract-41 fs-1 pt-1 mb-2"></i> Prebuilts
        </a>
        <!--end::Prebuilts toggle-->


        <!--begin::Get help-->
        <a href="https://devs.keenthemes.com/" target="_blank" class="app-engage-btn hover-primary">
            <i class="ki-outline ki-like-shapes fs-1 pt-1 mb-2"></i> Get Help
        </a>
        <!--end::Get help-->

        <!--begin::Prebuilts toggle-->
        <a href="https://1.envato.market/EA4JP" target="_blank" class="app-engage-btn hover-success">
            <i class="ki-outline ki-basket fs-2 pt-1 mb-2"></i> Buy Now
        </a>
        <!--end::Prebuilts toggle-->

        <!--begin::Engage close-->
        <a href="#" id="kt_app_engage_toggle_off" class="app-engage-btn app-engage-btn-toggle-off text-hover-primary p-0">
            <i class="ki-outline ki-cross fs-2x"></i> </a>
        <!--end::Engage close-->

        <!--begin::Engage close-->
        <a href="#" id="kt_app_engage_toggle_on" class="app-engage-btn app-engage-btn-toggle-on text-hover-primary p-0" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-custom-class="tooltip-inverse" data-bs-dimiss="click" title="Explore Metronic">
            <i class="ki-outline ki-question fs-2 text-primary"></i> </a>
        <!--end::Engage close-->
    </div>
    <!--end::Engage-->

    <!--begin::Engage modals-->
    <!--begin::Modal - Sitemap-->
    <div class="modal fade bg-dark bg-opacity-75" id="kt_app_engage_prebuilts_modal" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-fullscreen p-5 p-lg-10" id="kt_engage_prebuilts_modal_dialog">
            <!--begin::Modal content-->
            <div class="modal-content rounded-4">
                <!--begin::Modal header-->
                <div class="modal-header flex-stack border-0 px-10 pt-5 pb-0" id="kt_engage_prebuilts_header">
                    <!--begin::View menu-->
                    <div id="kt_app_engage_prebuilts_view_menu" class="position-relative z-index-1">
                        <!--begin::Toggle-->
                        <button type="button" data-kt-element="selected" class="btn btn-flex px-0 rotate-" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" data-kt-menu-offset="0px, -1px">
                            <!--begin::Title-->
                            <span class="fs-6 fw-bold text-gray-600 me-2" data-kt-element="title">
                                Image View
                            </span>
                            <!--end::Title-->

                            <!--begin::Arrow-->
                            <i class="ki-outline ki-down fs-4 text-gray-600 rotate-180-"></i> <!--end::Arrow-->
                        </button>
                        <!--end::Toggle-->

                        <!--begin::Menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-active-bg menu-state-primary menu-gray-600 menu-rounded w-150px py-3 px-3" data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item">
                                <!--begin::Menu link-->
                                <a href="#" class="menu-link px-4 py-2 active" data-kt-mode="image">
                                    Image View
                                </a>
                                <!--end::Menu link-->
                            </div>
                            <!--end::Menu item-->

                            <!--begin::Menu item-->
                            <div class="menu-item">
                                <!--begin::Menu link-->
                                <a href="#" class="menu-link px-4 py-2" data-kt-mode="text">
                                    Text View
                                </a>
                                <!--end::Menu link-->
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </div>
                    <!--end::View menu-->
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary me-n2 position-relative z-index-1" data-bs-dismiss="modal">
                        <i class="ki-outline ki-cross-square fs-1"></i>
                    </div>
                    <!--end::Close-->
                </div>
                <!--end::Modal header-->

                <!--begin::Modal body-->
                <div class="modal-body pt-0 pb-5 px-15 mt-n5" id="kt_app_engage_prebuilts_body">
                    <div class="container-fluid">

                        <style>
                            .app-prebuilts-thumbnail {
                                border: 1px solid var(--kt-body-bg);
                                filter: drop-shadow(0px 0px 50px rgba(49, 52, 122, 0.12));
                            }
                        </style>

                        <!--begin::Image view-->
                        <div class="d-block" id="kt_app_engage_prebuilts_view_image">
                            <!--begin::Tabs wrapper-->
                            <div class="d-flex flex-center" id="kt_app_engage_prebuilts_view_image_tabs">
                                <!--begin::Tabs-->
                                <ul class="nav nav-tabs border-0 mb-5">
                                    <!--begin::Tab item-->
                                    <li class="nav-item px-2">
                                        <!--begin::Tab link-->
                                        <a class="nav-link btn btn-active-light btn-color-gray-600 btn-active-color-gray-800 fs-5 fw-bold 
						" data-bs-toggle="tab" href="#kt_app_engage_prebuilts_tab_demos">

                                            Layouts </a>
                                        <!--end::Tab link-->
                                    </li>
                                    <!--end::Tab item-->
                                    <!--begin::Tab item-->
                                    <li class="nav-item px-2">
                                        <!--begin::Tab link-->
                                        <a class="nav-link btn btn-active-light btn-color-gray-600 btn-active-color-gray-800 fs-5 fw-bold 
						active" data-bs-toggle="tab" href="#kt_app_engage_prebuilts_tab_dashboards">

                                            Dashboards </a>
                                        <!--end::Tab link-->
                                    </li>
                                    <!--end::Tab item-->
                                    <!--begin::Tab item-->
                                    <li class="nav-item px-2">
                                        <!--begin::Tab link-->
                                        <a class="nav-link btn btn-active-light btn-color-gray-600 btn-active-color-gray-800 fs-5 fw-bold 
						" data-bs-toggle="tab" href="#kt_app_engage_prebuilts_tab_pages">

                                            Pages </a>
                                        <!--end::Tab link-->
                                    </li>
                                    <!--end::Tab item-->
                                    <!--begin::Tab item-->
                                    <li class="nav-item px-2">
                                        <!--begin::Tab link-->
                                        <a class="nav-link btn btn-active-light btn-color-gray-600 btn-active-color-gray-800 fs-5 fw-bold 
						" data-bs-toggle="tab" href="#kt_app_engage_prebuilts_tab_apps">

                                            Apps </a>
                                        <!--end::Tab link-->
                                    </li>
                                    <!--end::Tab item-->
                                </ul>
                                <!--end::Tabs-->
                            </div>
                            <!--end::Tabs wrapper-->

                            <!--begin::Tab content-->
                            <div class="tab-content">
                                <div class="pt-5 tab-pane fade " id="kt_app_engage_prebuilts_tab_demos" role="tabpanel">
                                    <!--begin::Scroll wrapper-->
                                    <div class="hover-scroll-y pe-12 me-n12" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_app_engage_prebuilts_modal, #kt_app_engage_prebuilts_modal_dialog, #kt_app_engage_prebuilts_body" data-kt-scroll-dependencies="#kt_app_engage_prebuilts_header, #kt_app_engage_prebuilts_view_image_tabs" data-kt-scroll-offset="215px">

                                        <!--begin::Row-->
                                        <div class="row gy-10">


                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a href="https://preview.keenthemes.com/metronic8/demo1/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Metronic Original </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo1.png" class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a href="https://preview.keenthemes.com/metronic8/demo2/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        SaaS App </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo2.png" class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a href="./index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Sales Tracking App </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo30.png" class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a href="https://preview.keenthemes.com/metronic8/demo39/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Billing SaaS </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo39.png" class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a href="https://preview.keenthemes.com/metronic8/demo31/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Marketing Automation </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo31.png" class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a href="https://preview.keenthemes.com/metronic8/demo27/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Databox Dashboard </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo27.png" class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a href="https://preview.keenthemes.com/metronic8/demo6/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Time Reporting </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo6.png" class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a href="https://preview.keenthemes.com/metronic8/demo3/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        New Trend </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo3.png" class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a href="https://preview.keenthemes.com/metronic8/demo23/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Member Dashboard </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo23.png" class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a href="https://preview.keenthemes.com/metronic8/demo38/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Email Marketing </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo38.png" class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a href="https://preview.keenthemes.com/metronic8/demo36/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Digital Marketing </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo36.png" class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a href="https://preview.keenthemes.com/metronic8/demo10/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Project Grid </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo10.png" class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a href="https://preview.keenthemes.com/metronic8/demo35/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Traffic Analytics </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo35.png" class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a href="https://preview.keenthemes.com/metronic8/demo8/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Analytics App </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo8.png" class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a href="https://preview.keenthemes.com/metronic8/demo25/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        User Guiding App </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo25.png" class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a href="https://preview.keenthemes.com/metronic8/demo20/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        CRM Software </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo20.png" class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a href="https://preview.keenthemes.com/metronic8/demo7/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        CRM Dashboard </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo7.png" class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a href="https://preview.keenthemes.com/metronic8/demo50/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Micro-SaaS App </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo50.png" class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a href="https://preview.keenthemes.com/metronic8/demo32/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Delivery Management </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo32.png" class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a href="https://preview.keenthemes.com/metronic8/demo42/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Calendar Workspace </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo42.png" class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a href="https://preview.keenthemes.com/metronic8/demo44/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Recruit Automation </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo44.png" class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a href="https://preview.keenthemes.com/metronic8/demo33/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Social Campaings </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo33.png" class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a href="https://preview.keenthemes.com/metronic8/demo37/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Cloud Suite </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo37.png" class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a href="https://preview.keenthemes.com/metronic8/demo11/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Finance Planner </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo11.png" class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a href="https://preview.keenthemes.com/metronic8/demo16/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Podcast App </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo16.png" class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a href="https://preview.keenthemes.com/metronic8/demo26/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Planable App </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo26.png" class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a href="https://preview.keenthemes.com/metronic8/demo22/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Media Publisher </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo22.png" class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a href="https://preview.keenthemes.com/metronic8/demo19/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Reports Panel </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo19.png" class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a href="https://preview.keenthemes.com/metronic8/demo40/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        HR App </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo40.png" class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a href="https://preview.keenthemes.com/metronic8/demo29/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Project Workspace </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo29.png" class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a href="https://preview.keenthemes.com/metronic8/demo24/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Helpdesk App </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo24.png" class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a href="https://preview.keenthemes.com/metronic8/demo4/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Jobs Site </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo4.png" class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a href="https://preview.keenthemes.com/metronic8/demo41/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Business Intelligence </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo41.png" class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a href="https://preview.keenthemes.com/metronic8/demo18/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Goal Tracking </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo18.png" class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a href="https://preview.keenthemes.com/metronic8/demo21/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Monochrome App </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo21.png" class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a href="https://preview.keenthemes.com/metronic8/demo34/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Finance Analytics </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo34.png" class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a href="https://preview.keenthemes.com/metronic8/demo15/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Crypto Planner </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo15.png" class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a href="https://preview.keenthemes.com/metronic8/demo14/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Project Workplace </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo14.png" class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a href="https://preview.keenthemes.com/metronic8/demo9/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Sales Manager </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo9.png" class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a href="https://preview.keenthemes.com/metronic8/demo5/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Support Forum </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo5.png" class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a href="https://preview.keenthemes.com/metronic8/demo13/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Classic Dashboard </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo13.png" class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a href="https://preview.keenthemes.com/metronic8/demo12/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Data Analyzer </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo12.png" class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a href="https://preview.keenthemes.com/metronic8/demo48/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Cloud ERP </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo48.png" class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a href="https://preview.keenthemes.com/metronic8/demo28/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        eCommerce App </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo28.png" class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a href="https://preview.keenthemes.com/metronic8/demo17/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Events Scheduler </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo17.png" class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a href="https://preview.keenthemes.com/metronic8/demo49/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        KPI Tracking </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo49.png" class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a href="https://preview.keenthemes.com/metronic8/demo43/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Healthcare Dashboard </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo43.png" class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a href="https://preview.keenthemes.com/metronic8/demo45/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        OKR Tracking </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo45.png" class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a href="https://preview.keenthemes.com/metronic8/demo47/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Campaign Automation </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo47.png" class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a href="https://preview.keenthemes.com/metronic8/demo46/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Audit Board App </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo46.png" class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->


                                        </div>
                                        <!--end::Row-->
                                    </div>
                                    <!--end::Scroll wrapper-->
                                </div>
                                <div class="pt-5 tab-pane fade show active" id="kt_app_engage_prebuilts_tab_dashboards" role="tabpanel">
                                    <!--begin::Scroll wrapper-->
                                    <div class="hover-scroll-y pe-12 me-n12" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_app_engage_prebuilts_modal, #kt_app_engage_prebuilts_modal_dialog, #kt_app_engage_prebuilts_body" data-kt-scroll-dependencies="#kt_app_engage_prebuilts_header, #kt_app_engage_prebuilts_view_image_tabs" data-kt-scroll-offset="215px">

                                        <!--begin::Row-->
                                        <div class="row gy-10">



                                            <!--begin::Col-->
                                            <div class="col-md-4">

                                                <!--begin::Preview-->
                                                <a href="./dashboards/marketing.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Marketing </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/dashboards/marketing.png" class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-md-4">

                                                <!--begin::Preview-->
                                                <a href="./dashboards/social.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Social </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/dashboards/social.png" class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-md-4">

                                                <!--begin::Preview-->
                                                <a href="./dashboards/ecommerce.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Ecommerce </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/dashboards/ecommerce.png" class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-md-4">

                                                <!--begin::Preview-->
                                                <a href="./dashboards/store-analytics.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Store-analytics </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/dashboards/store-analytics.png" class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-md-4">

                                                <!--begin::Preview-->
                                                <a href="./dashboards/logistics.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Logistics </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/dashboards/logistics.png" class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-md-4">

                                                <!--begin::Preview-->
                                                <a href="./dashboards/delivery.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Delivery </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/dashboards/delivery.png" class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-md-4">

                                                <!--begin::Preview-->
                                                <a href="./dashboards/online-courses.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Online-courses </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/dashboards/online-courses.png" class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-md-4">

                                                <!--begin::Preview-->
                                                <a href="./dashboards/school.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        School </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/dashboards/school.png" class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-md-4">

                                                <!--begin::Preview-->
                                                <a href="./dashboards/crypto.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Crypto </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/dashboards/crypto.png" class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-md-4">

                                                <!--begin::Preview-->
                                                <a href="./dashboards/finance-performance.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Finance-performance </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/dashboards/finance-performance.png" class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-md-4">

                                                <!--begin::Preview-->
                                                <a href="./dashboards/website-analytics.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Website-analytics </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/dashboards/website-analytics.png" class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-md-4">

                                                <!--begin::Preview-->
                                                <a href="./dashboards/bidding.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Bidding </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/dashboards/bidding.png" class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-md-4">

                                                <!--begin::Preview-->
                                                <a href="./dashboards/podcast.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Podcast </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/dashboards/podcast.png" class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-md-4">

                                                <!--begin::Preview-->
                                                <a href="./dashboards/projects.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Projects </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/dashboards/projects.png" class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-md-4">

                                                <!--begin::Preview-->
                                                <a href="./dashboards/call-center.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Call-center </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/dashboards/call-center.png" class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-md-4">

                                                <!--begin::Preview-->
                                                <a href="./dashboards/pos.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        POS </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/dashboards/pos.png" class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                        </div>
                                        <!--end::Row-->
                                    </div>
                                    <!--end::Scroll wrapper-->
                                </div>
                                <div class="pt-5 tab-pane fade " id="kt_app_engage_prebuilts_tab_apps" role="tabpanel">
                                    <!--begin::Scroll wrapper-->
                                    <div class="hover-scroll-y pe-12 me-n12" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_app_engage_prebuilts_modal, #kt_app_engage_prebuilts_modal_dialog, #kt_app_engage_prebuilts_body" data-kt-scroll-dependencies="#kt_app_engage_prebuilts_header, #kt_app_engage_prebuilts_view_image_tabs" data-kt-scroll-offset="215px">

                                        <!--begin::Row-->
                                        <div class="row gy-10">


                                            <!--begin::Col-->
                                            <div class="col-lg-4">

                                                <!--begin::Preview-->
                                                <a href="../../projects/list/list.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Projects </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/apps/projects.png" class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">

                                                <!--begin::Preview-->
                                                <a href="products/products.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Ecommerce </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/apps/ecommerce.png" class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">

                                                <!--begin::Preview-->
                                                <a href="../../customers/list/list.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Customers </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/apps/customers.png" class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">

                                                <!--begin::Preview-->
                                                <a href="../../subscriptions/list/list.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Subscriptions </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/apps/subscriptions.png" class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">

                                                <!--begin::Preview-->
                                                <a href="../../user-management/users/list/list.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        User Management </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/apps/user-management.png" class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">

                                                <!--begin::Preview-->
                                                <a href="../../invoices/create/main.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Invoices </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/apps/invoices.png" class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">

                                                <!--begin::Preview-->
                                                <a href="../../support-center/overview/main.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Support Center </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/apps/support-center.png" class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">

                                                <!--begin::Preview-->
                                                <a href="../../chat/private.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Chat </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/apps/chat.png" class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">

                                                <!--begin::Preview-->
                                                <a href="../../calendar/calendar.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Calendar </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/apps/calendar.png" class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">

                                                <!--begin::Preview-->
                                                <a href="../../file-manager/list/folders.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        File Manager </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/apps/file-manager.png" class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">

                                                <!--begin::Preview-->
                                                <a href="../../inbox/listing/listing.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Inbox </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/apps/inbox.png" class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">

                                                <!--begin::Preview-->
                                                <a href="../../contacts/getting-started.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Contacts </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/apps/contacts.png" class="lozad w-100 rounded" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                        </div>
                                        <!--end::Row-->
                                    </div>
                                    <!--end::Scroll wrapper-->
                                </div>

                                <div class="tab-pane fade" id="kt_app_engage_prebuilts_tab_pages">

                                    <!--begin::Tabs wrapper-->
                                    <div class="d-flex flex-center mb-5">
                                        <div class="border-bottom">
                                            <!--begin::Tabs-->
                                            <ul class="nav nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-6 fw-bold m-0 p-0 gap-4">
                                                <!--begin::Tab item-->
                                                <li class="nav-item p-0 m-0">
                                                    <!--begin::Tab link-->
                                                    <a class="nav-link text-muted text-active-primary pt-0 pb-4 
						active" data-bs-toggle="tab" href="#kt_app_engage_prebuilts_tab_pages_authentication">

                                                        Authentication </a>
                                                    <!--end::Tab link-->
                                                </li>
                                                <!--end::Tab item-->
                                                <!--begin::Tab item-->
                                                <li class="nav-item p-0 m-0">
                                                    <!--begin::Tab link-->
                                                    <a class="nav-link text-muted text-active-primary pt-0 pb-4 
						" data-bs-toggle="tab" href="#kt_app_engage_prebuilts_tab_pages_general">

                                                        General </a>
                                                    <!--end::Tab link-->
                                                </li>
                                                <!--end::Tab item-->
                                                <!--begin::Tab item-->
                                                <li class="nav-item p-0 m-0">
                                                    <!--begin::Tab link-->
                                                    <a class="nav-link text-muted text-active-primary pt-0 pb-4 
						" data-bs-toggle="tab" href="#kt_app_engage_prebuilts_tab_pages_account">

                                                        Account </a>
                                                    <!--end::Tab link-->
                                                </li>
                                                <!--end::Tab item-->
                                                <!--begin::Tab item-->
                                                <li class="nav-item p-0 m-0">
                                                    <!--begin::Tab link-->
                                                    <a class="nav-link text-muted text-active-primary pt-0 pb-4 
						" data-bs-toggle="tab" href="#kt_app_engage_prebuilts_tab_pages_modals">

                                                        Modals </a>
                                                    <!--end::Tab link-->
                                                </li>
                                                <!--end::Tab item-->
                                                <!--begin::Tab item-->
                                                <li class="nav-item p-0 m-0">
                                                    <!--begin::Tab link-->
                                                    <a class="nav-link text-muted text-active-primary pt-0 pb-4 
						" data-bs-toggle="tab" href="#kt_app_engage_prebuilts_tab_pages_wizards">

                                                        Wizards </a>
                                                    <!--end::Tab link-->
                                                </li>
                                                <!--end::Tab item-->
                                                <!--begin::Tab item-->
                                                <li class="nav-item p-0 m-0">
                                                    <!--begin::Tab link-->
                                                    <a class="nav-link text-muted text-active-primary pt-0 pb-4 
						" data-bs-toggle="tab" href="#kt_app_engage_prebuilts_tab_pages_search">

                                                        Search </a>
                                                    <!--end::Tab link-->
                                                </li>
                                                <!--end::Tab item-->
                                                <!--begin::Tab item-->
                                                <li class="nav-item p-0 m-0">
                                                    <!--begin::Tab link-->
                                                    <a class="nav-link text-muted text-active-primary pt-0 pb-4 
						" data-bs-toggle="tab" href="#kt_app_engage_prebuilts_tab_pages_widgets">

                                                        Widgets </a>
                                                    <!--end::Tab link-->
                                                </li>
                                                <!--end::Tab item-->
                                                <!--begin::Tab item-->
                                                <li class="nav-item p-0 m-0">
                                                    <!--begin::Tab link-->
                                                    <a class="nav-link text-muted text-active-primary pt-0 pb-4 
						" data-bs-toggle="tab" href="#kt_app_engage_prebuilts_tab_pages_email-templates">

                                                        Email Templates </a>
                                                    <!--end::Tab link-->
                                                </li>
                                                <!--end::Tab item-->
                                            </ul>
                                            <!--end::Tabs-->
                                        </div>
                                    </div>
                                    <!--end::Tabs wrapper-->

                                    <!--begin::Scroll wrapper-->
                                    <div class="hover-scroll-y pe-12 me-n12" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_app_engage_prebuilts_modal, #kt_app_engage_prebuilts_modal_dialog, #kt_app_engage_prebuilts_body, #kt_app_engage_prebuilts_view_image" data-kt-scroll-dependencies="#kt_app_engage_prebuilts_header, #kt_app_engage_prebuilts_view_text_heading" data-kt-scroll-offset="250px">

                                        <!--begin::Tab content-->
                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="kt_app_engage_prebuilts_tab_pages_authentication" role="tabpanel">


                                                <!--begin::Row-->
                                                <div class="row g-10">

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="./authentication/layouts/corporate/sign-in.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Corporate </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/auth-corporate.png" class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="./authentication/layouts/creative/sign-in.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Creative </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/auth-creative.png" class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="./authentication/layouts/fancy/sign-in.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Fancy </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/auth-fancy.png" class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="./authentication/layouts/overlay/sign-in.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Overlay </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/auth-overlay.png" class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="./authentication/extended/multi-steps-sign-up.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Multi-Step </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/auth-multistep.png" class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="./authentication/layouts/corporate/two-factor.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Two-Factor </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/auth-2factor.png" class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="./authentication/general/password-confirmation.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Password Changed </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/auth-passwordchanged.png" class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="./authentication/general/verify-email.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Verify Email </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/auth-verifyemail.png" class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="./authentication/general/welcome.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Welcome </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/auth-welcome.png" class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="./authentication/general/coming-soon.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Coming Soon </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/auth-comingsoon.png" class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="./authentication/general/account-deactivated.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Account Deactivated </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/auth-accountdeactivated.png" class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="./authentication/general/error-404.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                404 Page </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/auth-404.png" class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="./authentication/general/error-500.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                505 Page </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/auth-500.png" class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->
                                                </div>
                                                <!--end::Row-->

                                            </div>
                                            <div class="tab-pane fade " id="kt_app_engage_prebuilts_tab_pages_general" role="tabpanel">


                                                <div class="mb-5">
                                                    <!--begin::Collapse toggle-->
                                                    <a class="btn btn-flex btn-color-dark flex-stack p-0 mb-5 toggle collapsible active" data-bs-toggle="collapse" href="#kt_app_engage_prebuilts_tab_pages_general_user-profile">

                                                        <span class="fw-bolder fs-2">
                                                            User Profile </span>

                                                        <i class="ki-outline ki-plus-square toggle-off text-primary fs-2 ms-4"></i>
                                                        <i class="ki-outline ki-minus-square toggle-on text-primary fs-2 ms-4"></i>
                                                    </a>
                                                    <!--end::Collapse toggle-->

                                                    <!--begin::Collapse content-->
                                                    <div class="show" id="kt_app_engage_prebuilts_tab_pages_general_user-profile">
                                                        <!--begin::Row-->
                                                        <div class="row g-10 pt-2 pb-5">

                                                            <!--begin::Col-->
                                                            <div class="col-lg-4">

                                                                <!--begin::Preview-->
                                                                <a href="./pages/user-profile/overview.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                                    <!--begin::Title-->
                                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                        Profile Overview </h3>
                                                                    <!--end::Title-->

                                                                    <!--begin::Thumbnail-->
                                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                        <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/profile-overview.png" class="lozad w-100 rounded" />
                                                                    </span>
                                                                    <!--end::Thumbnail-->
                                                                </a>
                                                                <!--end::Preview-->
                                                            </div>
                                                            <!--end::Col-->

                                                            <!--begin::Col-->
                                                            <div class="col-lg-4">

                                                                <!--begin::Preview-->
                                                                <a href="./pages/user-profile/projects.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                                    <!--begin::Title-->
                                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                        User Projects </h3>
                                                                    <!--end::Title-->

                                                                    <!--begin::Thumbnail-->
                                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                        <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/profile-overview.png" class="lozad w-100 rounded" />
                                                                    </span>
                                                                    <!--end::Thumbnail-->
                                                                </a>
                                                                <!--end::Preview-->
                                                            </div>
                                                            <!--end::Col-->

                                                            <!--begin::Col-->
                                                            <div class="col-lg-4">

                                                                <!--begin::Preview-->
                                                                <a href="./pages/user-profile/campaigns.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                                    <!--begin::Title-->
                                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                        User Campaigns </h3>
                                                                    <!--end::Title-->

                                                                    <!--begin::Thumbnail-->
                                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                        <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/profile-campaigns.png" class="lozad w-100 rounded" />
                                                                    </span>
                                                                    <!--end::Thumbnail-->
                                                                </a>
                                                                <!--end::Preview-->
                                                            </div>
                                                            <!--end::Col-->

                                                            <!--begin::Col-->
                                                            <div class="col-lg-4">

                                                                <!--begin::Preview-->
                                                                <a href="./pages/user-profile/documents.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                                    <!--begin::Title-->
                                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                        User Documents </h3>
                                                                    <!--end::Title-->

                                                                    <!--begin::Thumbnail-->
                                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                        <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/profile-documents.png" class="lozad w-100 rounded" />
                                                                    </span>
                                                                    <!--end::Thumbnail-->
                                                                </a>
                                                                <!--end::Preview-->
                                                            </div>
                                                            <!--end::Col-->

                                                            <!--begin::Col-->
                                                            <div class="col-lg-4">

                                                                <!--begin::Preview-->
                                                                <a href="./pages/user-profile/followers.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                                    <!--begin::Title-->
                                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                        User Followers </h3>
                                                                    <!--end::Title-->

                                                                    <!--begin::Thumbnail-->
                                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                        <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/profile-followers.png" class="lozad w-100 rounded" />
                                                                    </span>
                                                                    <!--end::Thumbnail-->
                                                                </a>
                                                                <!--end::Preview-->
                                                            </div>
                                                            <!--end::Col-->

                                                            <!--begin::Col-->
                                                            <div class="col-lg-4">

                                                                <!--begin::Preview-->
                                                                <a href="./pages/user-profile/activity.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                                    <!--begin::Title-->
                                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                        User Activity </h3>
                                                                    <!--end::Title-->

                                                                    <!--begin::Thumbnail-->
                                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                        <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/profile-activity.png" class="lozad w-100 rounded" />
                                                                    </span>
                                                                    <!--end::Thumbnail-->
                                                                </a>
                                                                <!--end::Preview-->
                                                            </div>
                                                            <!--end::Col-->
                                                        </div>
                                                        <!--end::Row-->
                                                    </div>
                                                    <!--end::Collapse content-->
                                                </div>
                                                <div class="mb-5">
                                                    <!--begin::Collapse toggle-->
                                                    <a class="btn btn-flex btn-color-dark flex-stack p-0 mb-5 toggle collapsible collapsed" data-bs-toggle="collapse" href="#kt_app_engage_prebuilts_tab_pages_general_corporate">

                                                        <span class="fw-bolder fs-2">
                                                            Corporate </span>

                                                        <i class="ki-outline ki-plus-square toggle-off text-primary fs-2 ms-4"></i>
                                                        <i class="ki-outline ki-minus-square toggle-on text-primary fs-2 ms-4"></i>
                                                    </a>
                                                    <!--end::Collapse toggle-->

                                                    <!--begin::Collapse content-->
                                                    <div class="collapse" id="kt_app_engage_prebuilts_tab_pages_general_corporate">
                                                        <!--begin::Row-->
                                                        <div class="row g-10 pt-2 pb-5">

                                                            <!--begin::Col-->
                                                            <div class="col-lg-4">

                                                                <!--begin::Preview-->
                                                                <a href="./pages/about.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                                    <!--begin::Title-->
                                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                        About Us </h3>
                                                                    <!--end::Title-->

                                                                    <!--begin::Thumbnail-->
                                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                        <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/corporate-aboutus.png" class="lozad w-100 rounded" />
                                                                    </span>
                                                                    <!--end::Thumbnail-->
                                                                </a>
                                                                <!--end::Preview-->
                                                            </div>
                                                            <!--end::Col-->

                                                            <!--begin::Col-->
                                                            <div class="col-lg-4">

                                                                <!--begin::Preview-->
                                                                <a href="./pages/contact.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                                    <!--begin::Title-->
                                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                        Contact Us </h3>
                                                                    <!--end::Title-->

                                                                    <!--begin::Thumbnail-->
                                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                        <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/corporate-contactus.png" class="lozad w-100 rounded" />
                                                                    </span>
                                                                    <!--end::Thumbnail-->
                                                                </a>
                                                                <!--end::Preview-->
                                                            </div>
                                                            <!--end::Col-->

                                                            <!--begin::Col-->
                                                            <div class="col-lg-4">

                                                                <!--begin::Preview-->
                                                                <a href="./pages/licenses.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                                    <!--begin::Title-->
                                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                        License </h3>
                                                                    <!--end::Title-->

                                                                    <!--begin::Thumbnail-->
                                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                        <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/corporate-license.png" class="lozad w-100 rounded" />
                                                                    </span>
                                                                    <!--end::Thumbnail-->
                                                                </a>
                                                                <!--end::Preview-->
                                                            </div>
                                                            <!--end::Col-->

                                                            <!--begin::Col-->
                                                            <div class="col-lg-4">

                                                                <!--begin::Preview-->
                                                                <a href="./pages/team.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                                    <!--begin::Title-->
                                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                        Our Team </h3>
                                                                    <!--end::Title-->

                                                                    <!--begin::Thumbnail-->
                                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                        <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/corporate-ourteam.png" class="lozad w-100 rounded" />
                                                                    </span>
                                                                    <!--end::Thumbnail-->
                                                                </a>
                                                                <!--end::Preview-->
                                                            </div>
                                                            <!--end::Col-->

                                                            <!--begin::Col-->
                                                            <div class="col-lg-4">

                                                                <!--begin::Preview-->
                                                                <a href="./pages/sitemap.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                                    <!--begin::Title-->
                                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                        Sitemap </h3>
                                                                    <!--end::Title-->

                                                                    <!--begin::Thumbnail-->
                                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                        <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/corporate-sitemap.png" class="lozad w-100 rounded" />
                                                                    </span>
                                                                    <!--end::Thumbnail-->
                                                                </a>
                                                                <!--end::Preview-->
                                                            </div>
                                                            <!--end::Col-->
                                                        </div>
                                                        <!--end::Row-->
                                                    </div>
                                                    <!--end::Collapse content-->
                                                </div>
                                                <div class="mb-5">
                                                    <!--begin::Collapse toggle-->
                                                    <a class="btn btn-flex btn-color-dark flex-stack p-0 mb-5 toggle collapsible collapsed" data-bs-toggle="collapse" href="#kt_app_engage_prebuilts_tab_pages_general_social">

                                                        <span class="fw-bolder fs-2">
                                                            Social </span>

                                                        <i class="ki-outline ki-plus-square toggle-off text-primary fs-2 ms-4"></i>
                                                        <i class="ki-outline ki-minus-square toggle-on text-primary fs-2 ms-4"></i>
                                                    </a>
                                                    <!--end::Collapse toggle-->

                                                    <!--begin::Collapse content-->
                                                    <div class="collapse" id="kt_app_engage_prebuilts_tab_pages_general_social">
                                                        <!--begin::Row-->
                                                        <div class="row g-10 pt-2 pb-5">

                                                            <!--begin::Col-->
                                                            <div class="col-lg-4">

                                                                <!--begin::Preview-->
                                                                <a href="./pages/social/feeds.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                                    <!--begin::Title-->
                                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                        Activity </h3>
                                                                    <!--end::Title-->

                                                                    <!--begin::Thumbnail-->
                                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                        <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/social-activity.png" class="lozad w-100 rounded" />
                                                                    </span>
                                                                    <!--end::Thumbnail-->
                                                                </a>
                                                                <!--end::Preview-->
                                                            </div>
                                                            <!--end::Col-->

                                                            <!--begin::Col-->
                                                            <div class="col-lg-4">

                                                                <!--begin::Preview-->
                                                                <a href="./pages/social/activity.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                                    <!--begin::Title-->
                                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                        Feeds </h3>
                                                                    <!--end::Title-->

                                                                    <!--begin::Thumbnail-->
                                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                        <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/social-feeds.png" class="lozad w-100 rounded" />
                                                                    </span>
                                                                    <!--end::Thumbnail-->
                                                                </a>
                                                                <!--end::Preview-->
                                                            </div>
                                                            <!--end::Col-->

                                                            <!--begin::Col-->
                                                            <div class="col-lg-4">

                                                                <!--begin::Preview-->
                                                                <a href="./pages/social/followers.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                                    <!--begin::Title-->
                                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                        Followers </h3>
                                                                    <!--end::Title-->

                                                                    <!--begin::Thumbnail-->
                                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                        <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/social-followers.png" class="lozad w-100 rounded" />
                                                                    </span>
                                                                    <!--end::Thumbnail-->
                                                                </a>
                                                                <!--end::Preview-->
                                                            </div>
                                                            <!--end::Col-->

                                                            <!--begin::Col-->
                                                            <div class="col-lg-4">

                                                                <!--begin::Preview-->
                                                                <a href="./pages/social/settings.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                                    <!--begin::Title-->
                                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                        Settings </h3>
                                                                    <!--end::Title-->

                                                                    <!--begin::Thumbnail-->
                                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                        <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/social-settings.png" class="lozad w-100 rounded" />
                                                                    </span>
                                                                    <!--end::Thumbnail-->
                                                                </a>
                                                                <!--end::Preview-->
                                                            </div>
                                                            <!--end::Col-->
                                                        </div>
                                                        <!--end::Row-->
                                                    </div>
                                                    <!--end::Collapse content-->
                                                </div>
                                                <div class="mb-5">
                                                    <!--begin::Collapse toggle-->
                                                    <a class="btn btn-flex btn-color-dark flex-stack p-0 mb-5 toggle collapsible collapsed" data-bs-toggle="collapse" href="#kt_app_engage_prebuilts_tab_pages_general_others">

                                                        <span class="fw-bolder fs-2">
                                                            Others </span>

                                                        <i class="ki-outline ki-plus-square toggle-off text-primary fs-2 ms-4"></i>
                                                        <i class="ki-outline ki-minus-square toggle-on text-primary fs-2 ms-4"></i>
                                                    </a>
                                                    <!--end::Collapse toggle-->

                                                    <!--begin::Collapse content-->
                                                    <div class="collapse" id="kt_app_engage_prebuilts_tab_pages_general_others">
                                                        <!--begin::Row-->
                                                        <div class="row g-10 pt-2 pb-5">

                                                            <!--begin::Col-->
                                                            <div class="col-lg-4">

                                                                <!--begin::Preview-->
                                                                <a href="./pages/faq/classic.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                                    <!--begin::Title-->
                                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                        FAQ Classic </h3>
                                                                    <!--end::Title-->

                                                                    <!--begin::Thumbnail-->
                                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                        <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/faq-classic.png" class="lozad w-100 rounded" />
                                                                    </span>
                                                                    <!--end::Thumbnail-->
                                                                </a>
                                                                <!--end::Preview-->
                                                            </div>
                                                            <!--end::Col-->

                                                            <!--begin::Col-->
                                                            <div class="col-lg-4">

                                                                <!--begin::Preview-->
                                                                <a href="./pages/faq/extended.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                                    <!--begin::Title-->
                                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                        FAQ Extended </h3>
                                                                    <!--end::Title-->

                                                                    <!--begin::Thumbnail-->
                                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                        <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/faq-extended.png" class="lozad w-100 rounded" />
                                                                    </span>
                                                                    <!--end::Thumbnail-->
                                                                </a>
                                                                <!--end::Preview-->
                                                            </div>
                                                            <!--end::Col-->

                                                            <!--begin::Col-->
                                                            <div class="col-lg-4">

                                                                <!--begin::Preview-->
                                                                <a href="./pages/blog/home.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                                    <!--begin::Title-->
                                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                        Blog Home </h3>
                                                                    <!--end::Title-->

                                                                    <!--begin::Thumbnail-->
                                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                        <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/blog-home.png" class="lozad w-100 rounded" />
                                                                    </span>
                                                                    <!--end::Thumbnail-->
                                                                </a>
                                                                <!--end::Preview-->
                                                            </div>
                                                            <!--end::Col-->

                                                            <!--begin::Col-->
                                                            <div class="col-lg-4">

                                                                <!--begin::Preview-->
                                                                <a href="./pages/blog/post.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                                    <!--begin::Title-->
                                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                        Blog Post </h3>
                                                                    <!--end::Title-->

                                                                    <!--begin::Thumbnail-->
                                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                        <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/blog-post.png" class="lozad w-100 rounded" />
                                                                    </span>
                                                                    <!--end::Thumbnail-->
                                                                </a>
                                                                <!--end::Preview-->
                                                            </div>
                                                            <!--end::Col-->
                                                        </div>
                                                        <!--end::Row-->
                                                    </div>
                                                    <!--end::Collapse content-->
                                                </div>


                                            </div>
                                            <div class="tab-pane fade " id="kt_app_engage_prebuilts_tab_pages_account" role="tabpanel">


                                                <!--begin::Row-->
                                                <div class="row g-10">

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="./account/overview.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Overview </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/account-overview.png" class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="./account/settings.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Settings </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/account-settings.png" class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="./account/billing.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Billing </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/account-billing.png" class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="./account/security.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Security </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/account-security.png" class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="./account/referrals.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Referrals </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/account-referrals.png" class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="./account/logs.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Logs </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/account-logs.png" class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="./account/api-keys.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                API Keys </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/account-apikeys.png" class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="./account/statements.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Statements </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/account-statements.png" class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="./account/billing.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Billing </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/account-billing.png" class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->
                                                </div>
                                                <!--end::Row-->

                                            </div>
                                            <div class="tab-pane fade " id="kt_app_engage_prebuilts_tab_pages_modals" role="tabpanel">


                                                <!--begin::Row-->
                                                <div class="row g-10">

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="./utilities/modals/general/view-users.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                View Friends </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/modal-viewfriends.png" class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="./utilities/modals/general/upgrade-plan.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Upgrade Plan </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/modal-upgradeplan.png" class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="./utilities/modals/wizards/top-up-wallet.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Topup Wallet </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/modal-topupwallet.png" class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="./utilities/modals/general/share-earn.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Share & Earn </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/modal-shareandearn.png" class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="./utilities/modals/general/select-users.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Select User </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/modal-selectuser.png" class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="./utilities/modals/forms/bidding.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Place Bid </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/modal-placeyourbid.png" class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="./utilities/modals/wizards/offer-a-deal.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Offer Deal </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/modal-offeradeal.png" class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="./utilities/modals/forms/new-target.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                New Target </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/modal-newtarget.png" class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="./utilities/modals/forms/new-card.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                New Card </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/modal-newcard.png" class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="./utilities/modals/forms/new-address.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                New Address </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/modal-newaddress.png" class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="./utilities/modals/general/invite-friends.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Invite Friend </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/modal-invitefriend.png" class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="./utilities/modals/wizards/create-project.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Create Project </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/modal-createproject.png" class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="./utilities/modals/wizards/create-campaign.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Create Campaign </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/modal-createcampaign.png" class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="./utilities/modals/wizards/create-account.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Create Business Account </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/modal-createbusinessacc.png" class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="./utilities/modals/wizards/create-app.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Create App </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/modal-createapp.png" class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="./utilities/modals/forms/create-api-key.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Create Api Key </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/modal-createapikey.png" class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="./utilities/modals/wizards/two-factor-authentication.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                2 Factor Auth </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/modal-2factorauth.png" class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->
                                                </div>
                                                <!--end::Row-->

                                            </div>
                                            <div class="tab-pane fade " id="kt_app_engage_prebuilts_tab_pages_wizards" role="tabpanel">


                                                <!--begin::Row-->
                                                <div class="row g-10">

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="./utilities/wizards/horizontal.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                2 Factor Auth </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/wizard-2factorauth.png" class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="./utilities/wizards/horizontal.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Horizontal </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/wizard-horizontal.png" class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="./utilities/wizards/vertical.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Vertical </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/wizard-vertical.png" class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->
                                                </div>
                                                <!--end::Row-->

                                            </div>
                                            <div class="tab-pane fade " id="kt_app_engage_prebuilts_tab_pages_search" role="tabpanel">


                                                <!--begin::Row-->
                                                <div class="row g-10">

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="./utilities/search/users.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Search Users </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/search-users.png" class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="./utilities/search/horizontal.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Search Horizontal </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/search-horizontal.png" class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="./utilities/search/vertical.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Search Vertical </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/search-vertical.png" class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="./utilities/search/select-location.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Search Location </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/search-location.png" class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->
                                                </div>
                                                <!--end::Row-->

                                            </div>
                                            <div class="tab-pane fade " id="kt_app_engage_prebuilts_tab_pages_widgets" role="tabpanel">


                                                <!--begin::Row-->
                                                <div class="row g-10">

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="./widgets/charts.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Charts </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/widgets-charts.png" class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="./widgets/feeds.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Feeds </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/widgets-feeds.png" class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="./widgets/lists.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Lists </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/widgets-lists.png" class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="./widgets/mixed.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Mixed </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/widgets-mixed.png" class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="./widgets/statistics.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Statistics </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/widgets-stats.png" class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="./widgets/tables.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Tables </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/widgets-tables.png" class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->
                                                </div>
                                                <!--end::Row-->

                                            </div>
                                            <div class="tab-pane fade " id="kt_app_engage_prebuilts_tab_pages_email-templates" role="tabpanel">


                                                <!--begin::Row-->
                                                <div class="row g-10">

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="./authentication/email/welcome-message.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Welcome </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/email-welcome.png" class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="./authentication/email/subscription-confirmed.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Subscription Confirmed </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/email-subscriptionconfirmed.png" class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="./authentication/email/reset-password.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Reset Password </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/email-resetpassword.png" class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="./authentication/email/card-declined.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Card Declined </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/email-creditcarddeclined.png" class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="./authentication/email/promo-1.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Promotion 1 </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/email-promo1.png" class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="./authentication/email/promo-2.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Promotion 2 </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/email-promo2.png" class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a href="./authentication/email/promo-3.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Promotion 3 </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="./assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/email-promo3.png" class="lozad w-100 rounded" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->
                                                </div>
                                                <!--end::Row-->

                                            </div>
                                        </div>
                                        <!--end::Tab content-->
                                    </div>
                                    <!--end::Scroll wrapper-->
                                </div>
                            </div>
                            <!--end::Tab content-->
                        </div>
                        <!--end::Image view-->
                        <!--begin::Text view-->
                        <div class="pt-2 d-none" id="kt_app_engage_prebuilts_view_text">
                            <!--begin::Heading-->
                            <h1 class="fs-2x text-dark fw-bolder text-center mb-4" id="kt_app_engage_prebuilts_view_text_heading">
                                Sitemap
                            </h1>
                            <!--end::Heading-->

                            <!--begin::Wrapper-->
                            <div id="kt_app_engage_prebuilts_view_text_heading" class="hover-scroll-y pe-12 me-n12" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_app_engage_prebuilts_modal, #kt_app_engage_prebuilts_modal_dialog, #kt_app_engage_prebuilts_body, #kt_app_engage_prebuilts_view_text" data-kt-scroll-dependencies="#kt_app_engage_prebuilts_header, #kt_app_engage_prebuilts_view_text_heading" data-kt-scroll-offset="190px">
                                <!--begin::Section-->
                                <div class="mb-10 mb-lg-17">

                                    <!--begin::Title-->
                                    <h3 class="text-dark fw-bolder mb-7">
                                        Layouts
                                    </h3>
                                    <!--end::Title-->

                                    <!--begin::Row-->
                                    <div class="row">

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">


                                                <a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo1/index.html">
                                                    Metronic Original </a>




                                                <a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo2/index.html">
                                                    SaaS App </a>




                                                <a class="fw-6 fw-semibold" href="./index.html">
                                                    Sales Tracking App </a>




                                                <a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo39/index.html">
                                                    Billing SaaS </a>




                                                <a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo31/index.html">
                                                    Marketing Automation </a>




                                                <a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo27/index.html">
                                                    Databox Dashboard </a>




                                                <a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo6/index.html">
                                                    Time Reporting </a>




                                                <a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo3/index.html">
                                                    New Trend </a>




                                                <a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo23/index.html">
                                                    Member Dashboard </a>




                                                <a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo38/index.html">
                                                    Email Marketing </a>




                                                <a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo36/index.html">
                                                    Digital Marketing </a>




                                                <a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo10/index.html">
                                                    Project Grid </a>




                                                <a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo35/index.html">
                                                    Traffic Analytics </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">


                                                <a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo8/index.html">
                                                    Analytics App </a>




                                                <a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo25/index.html">
                                                    User Guiding App </a>




                                                <a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo20/index.html">
                                                    CRM Software </a>




                                                <a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo7/index.html">
                                                    CRM Dashboard </a>




                                                <a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo50/index.html">
                                                    Micro-SaaS App </a>




                                                <a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo32/index.html">
                                                    Delivery Management </a>




                                                <a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo42/index.html">
                                                    Calendar Workspace </a>




                                                <a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo44/index.html">
                                                    Recruit Automation </a>




                                                <a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo33/index.html">
                                                    Social Campaings </a>




                                                <a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo37/index.html">
                                                    Cloud Suite </a>




                                                <a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo11/index.html">
                                                    Finance Planner </a>




                                                <a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo16/index.html">
                                                    Podcast App </a>




                                                <a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo26/index.html">
                                                    Planable App </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">


                                                <a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo22/index.html">
                                                    Media Publisher </a>




                                                <a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo19/index.html">
                                                    Reports Panel </a>




                                                <a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo40/index.html">
                                                    HR App </a>




                                                <a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo29/index.html">
                                                    Project Workspace </a>




                                                <a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo24/index.html">
                                                    Helpdesk App </a>




                                                <a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo4/index.html">
                                                    Jobs Site </a>




                                                <a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo41/index.html">
                                                    Business Intelligence </a>




                                                <a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo18/index.html">
                                                    Goal Tracking </a>




                                                <a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo21/index.html">
                                                    Monochrome App </a>




                                                <a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo34/index.html">
                                                    Finance Analytics </a>




                                                <a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo15/index.html">
                                                    Crypto Planner </a>




                                                <a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo14/index.html">
                                                    Project Workplace </a>




                                                <a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo9/index.html">
                                                    Sales Manager </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">


                                                <a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo5/index.html">
                                                    Support Forum </a>




                                                <a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo13/index.html">
                                                    Classic Dashboard </a>




                                                <a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo12/index.html">
                                                    Data Analyzer </a>




                                                <a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo48/index.html">
                                                    Cloud ERP </a>




                                                <a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo28/index.html">
                                                    eCommerce App </a>




                                                <a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo17/index.html">
                                                    Events Scheduler </a>




                                                <a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo49/index.html">
                                                    KPI Tracking </a>




                                                <a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo43/index.html">
                                                    Healthcare Dashboard </a>




                                                <a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo45/index.html">
                                                    OKR Tracking </a>




                                                <a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo47/index.html">
                                                    Campaign Automation </a>




                                                <a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo46/index.html">
                                                    Audit Board App </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->

                                </div>
                                <!--end::Section-->



                                <!--begin::Section-->
                                <div class="mb-10 mb-lg-17">

                                    <!--begin::Title-->
                                    <h3 class="text-dark fw-bolder mb-7">
                                        Dashboards
                                    </h3>
                                    <!--end::Title-->

                                    <!--begin::Row-->
                                    <div class="row">

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="./index.html">
                                                    Chartmix - Finance Team </a>




                                                <a class="fw-6 fw-semibold" href="./dashboards/marketing.html">
                                                    Marketing Dashboard </a>




                                                <a class="fw-6 fw-semibold" href="./dashboards/social.html">
                                                    Social Dashboard </a>




                                                <a class="fw-6 fw-semibold" href="./dashboards/ecommerce.html">
                                                    eCommerce Dashboard </a>




                                                <a class="fw-6 fw-semibold" href="./dashboards/store-analytics.html">
                                                    Store Analytics </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->


                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="./dashboards/logistics.html">
                                                    Logistics </a>




                                                <a class="fw-6 fw-semibold" href="./dashboards/delivery.html">
                                                    Delivery </a>




                                                <a class="fw-6 fw-semibold" href="./dashboards/online-courses.html">
                                                    Online Courses </a>




                                                <a class="fw-6 fw-semibold" href="./dashboards/school.html">
                                                    Hello Tyler </a>




                                                <a class="fw-6 fw-semibold" href="./dashboards/crypto.html">
                                                    My Balance: 37,045$ </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->


                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="./dashboards/finance-performance.html">
                                                    Finance Performance </a>




                                                <a class="fw-6 fw-semibold" href="./dashboards/website-analytics.html">
                                                    Website Analytics </a>




                                                <a class="fw-6 fw-semibold" href="./dashboards/bidding.html">
                                                    Bidding Dashboard </a>




                                                <a class="fw-6 fw-semibold" href="./dashboards/podcast.html">
                                                    Podcast Dashboard </a>




                                                <a class="fw-6 fw-semibold" href="./dashboards/projects.html">
                                                    Projects Dashboard </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->


                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="./dashboards/call-center.html">
                                                    Call Center </a>




                                                <a class="fw-6 fw-semibold" href="./dashboards/pos.html">
                                                    POS System </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->

                                    </div>
                                    <!--end::Row-->

                                </div>
                                <!--end::Section-->



                                <!--begin::Section-->
                                <div class="mb-10 mb-lg-17">

                                </div>
                                <!--end::Section-->


                                <!--begin::Section-->
                                <div class="mb-10 mb-lg-17">
                                    <!--begin::Title-->
                                    <h3 class="text-dark fw-bolder mb-7">
                                        Pages - Authentication </h3>
                                    <!--end::Title-->

                                    <!--begin::Row-->
                                    <div class="row">

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="./authentication/layouts/corporate/sign-in.html">
                                                    Corporate </a>



                                                <a class="fw-6 fw-semibold" href="./authentication/layouts/creative/sign-in.html">
                                                    Creative </a>



                                                <a class="fw-6 fw-semibold" href="./authentication/layouts/fancy/sign-in.html">
                                                    Fancy </a>



                                                <a class="fw-6 fw-semibold" href="./authentication/layouts/overlay/sign-in.html">
                                                    Overlay </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="./authentication/extended/multi-steps-sign-up.html">
                                                    Multi-Step </a>



                                                <a class="fw-6 fw-semibold" href="./authentication/layouts/corporate/two-factor.html">
                                                    Two-Factor </a>



                                                <a class="fw-6 fw-semibold" href="./authentication/general/password-confirmation.html">
                                                    Password Changed </a>



                                                <a class="fw-6 fw-semibold" href="./authentication/general/verify-email.html">
                                                    Verify Email </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="./authentication/general/welcome.html">
                                                    Welcome </a>



                                                <a class="fw-6 fw-semibold" href="./authentication/general/coming-soon.html">
                                                    Coming Soon </a>



                                                <a class="fw-6 fw-semibold" href="./authentication/general/account-deactivated.html">
                                                    Account Deactivated </a>



                                                <a class="fw-6 fw-semibold" href="./authentication/general/error-404.html">
                                                    404 Page </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="./authentication/general/error-500.html">
                                                    505 Page </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Section-->
                                <!--begin::Section-->
                                <div class="mb-10 mb-lg-17">
                                    <!--begin::Title-->
                                    <h3 class="text-dark fw-bolder mb-7">
                                        Pages - Account </h3>
                                    <!--end::Title-->

                                    <!--begin::Row-->
                                    <div class="row">

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="./account/overview.html">
                                                    Overview </a>



                                                <a class="fw-6 fw-semibold" href="./account/settings.html">
                                                    Settings </a>



                                                <a class="fw-6 fw-semibold" href="./account/billing.html">
                                                    Billing </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="./account/security.html">
                                                    Security </a>



                                                <a class="fw-6 fw-semibold" href="./account/referrals.html">
                                                    Referrals </a>



                                                <a class="fw-6 fw-semibold" href="./account/logs.html">
                                                    Logs </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="./account/api-keys.html">
                                                    API Keys </a>



                                                <a class="fw-6 fw-semibold" href="./account/statements.html">
                                                    Statements </a>



                                                <a class="fw-6 fw-semibold" href="./account/billing.html">
                                                    Billing </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Section-->
                                <!--begin::Section-->
                                <div class="mb-10 mb-lg-17">
                                    <!--begin::Title-->
                                    <h3 class="text-dark fw-bolder mb-7">
                                        Pages - Modals </h3>
                                    <!--end::Title-->

                                    <!--begin::Row-->
                                    <div class="row">

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="./utilities/modals/general/view-users.html">
                                                    View Friends </a>



                                                <a class="fw-6 fw-semibold" href="./utilities/modals/general/upgrade-plan.html">
                                                    Upgrade Plan </a>



                                                <a class="fw-6 fw-semibold" href="./utilities/modals/wizards/top-up-wallet.html">
                                                    Topup Wallet </a>



                                                <a class="fw-6 fw-semibold" href="./utilities/modals/general/share-earn.html">
                                                    Share & Earn </a>



                                                <a class="fw-6 fw-semibold" href="./utilities/modals/general/select-users.html">
                                                    Select User </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="./utilities/modals/forms/bidding.html">
                                                    Place Bid </a>



                                                <a class="fw-6 fw-semibold" href="./utilities/modals/wizards/offer-a-deal.html">
                                                    Offer Deal </a>



                                                <a class="fw-6 fw-semibold" href="./utilities/modals/forms/new-target.html">
                                                    New Target </a>



                                                <a class="fw-6 fw-semibold" href="./utilities/modals/forms/new-card.html">
                                                    New Card </a>



                                                <a class="fw-6 fw-semibold" href="./utilities/modals/forms/new-address.html">
                                                    New Address </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="./utilities/modals/general/invite-friends.html">
                                                    Invite Friend </a>



                                                <a class="fw-6 fw-semibold" href="./utilities/modals/wizards/create-project.html">
                                                    Create Project </a>



                                                <a class="fw-6 fw-semibold" href="./utilities/modals/wizards/create-campaign.html">
                                                    Create Campaign </a>



                                                <a class="fw-6 fw-semibold" href="./utilities/modals/wizards/create-account.html">
                                                    Create Business Account </a>



                                                <a class="fw-6 fw-semibold" href="./utilities/modals/wizards/create-app.html">
                                                    Create App </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="./utilities/modals/forms/create-api-key.html">
                                                    Create Api Key </a>



                                                <a class="fw-6 fw-semibold" href="./utilities/modals/wizards/two-factor-authentication.html">
                                                    2 Factor Auth </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Section-->
                                <!--begin::Section-->
                                <div class="mb-10 mb-lg-17">
                                    <!--begin::Title-->
                                    <h3 class="text-dark fw-bolder mb-7">
                                        Pages - Wizards </h3>
                                    <!--end::Title-->

                                    <!--begin::Row-->
                                    <div class="row">

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="./utilities/wizards/horizontal.html">
                                                    2 Factor Auth </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="./utilities/wizards/horizontal.html">
                                                    Horizontal </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="./utilities/wizards/vertical.html">
                                                    Vertical </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Section-->
                                <!--begin::Section-->
                                <div class="mb-10 mb-lg-17">
                                    <!--begin::Title-->
                                    <h3 class="text-dark fw-bolder mb-7">
                                        Pages - Search </h3>
                                    <!--end::Title-->

                                    <!--begin::Row-->
                                    <div class="row">

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="./utilities/search/users.html">
                                                    Search Users </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="./utilities/search/horizontal.html">
                                                    Search Horizontal </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="./utilities/search/vertical.html">
                                                    Search Vertical </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="./utilities/search/select-location.html">
                                                    Search Location </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Section-->
                                <!--begin::Section-->
                                <div class="mb-10 mb-lg-17">
                                    <!--begin::Title-->
                                    <h3 class="text-dark fw-bolder mb-7">
                                        Pages - Widgets </h3>
                                    <!--end::Title-->

                                    <!--begin::Row-->
                                    <div class="row">

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="./widgets/charts.html">
                                                    Charts </a>



                                                <a class="fw-6 fw-semibold" href="./widgets/feeds.html">
                                                    Feeds </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="./widgets/lists.html">
                                                    Lists </a>



                                                <a class="fw-6 fw-semibold" href="./widgets/mixed.html">
                                                    Mixed </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="./widgets/statistics.html">
                                                    Statistics </a>



                                                <a class="fw-6 fw-semibold" href="./widgets/tables.html">
                                                    Tables </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Section-->
                                <!--begin::Section-->
                                <div class="mb-10 mb-lg-17">
                                    <!--begin::Title-->
                                    <h3 class="text-dark fw-bolder mb-7">
                                        Pages - Email Templates </h3>
                                    <!--end::Title-->

                                    <!--begin::Row-->
                                    <div class="row">

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="./authentication/email/welcome-message.html">
                                                    Welcome </a>



                                                <a class="fw-6 fw-semibold" href="./authentication/email/subscription-confirmed.html">
                                                    Subscription Confirmed </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="./authentication/email/reset-password.html">
                                                    Reset Password </a>



                                                <a class="fw-6 fw-semibold" href="./authentication/email/card-declined.html">
                                                    Card Declined </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="./authentication/email/promo-1.html">
                                                    Promotion 1 </a>



                                                <a class="fw-6 fw-semibold" href="./authentication/email/promo-2.html">
                                                    Promotion 2 </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="./authentication/email/promo-3.html">
                                                    Promotion 3 </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Section-->
                                <!--begin::Section-->
                                <div class="mb-10 mb-lg-17">
                                    <!--begin::Title-->
                                    <h3 class="text-dark fw-bolder mb-7">
                                        Pages - General - User Profile </h3>
                                    <!--end::Title-->

                                    <!--begin::Row-->
                                    <div class="row">

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="./pages/user-profile/overview.html">
                                                    Profile Overview </a>



                                                <a class="fw-6 fw-semibold" href="./pages/user-profile/projects.html">
                                                    User Projects </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="./pages/user-profile/campaigns.html">
                                                    User Campaigns </a>



                                                <a class="fw-6 fw-semibold" href="./pages/user-profile/documents.html">
                                                    User Documents </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="./pages/user-profile/followers.html">
                                                    User Followers </a>



                                                <a class="fw-6 fw-semibold" href="./pages/user-profile/activity.html">
                                                    User Activity </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Section-->
                                <!--begin::Section-->
                                <div class="mb-10 mb-lg-17">
                                    <!--begin::Title-->
                                    <h3 class="text-dark fw-bolder mb-7">
                                        Pages - General - Corporate </h3>
                                    <!--end::Title-->

                                    <!--begin::Row-->
                                    <div class="row">

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="./pages/about.html">
                                                    About Us </a>



                                                <a class="fw-6 fw-semibold" href="./pages/contact.html">
                                                    Contact Us </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="./pages/licenses.html">
                                                    License </a>



                                                <a class="fw-6 fw-semibold" href="./pages/team.html">
                                                    Our Team </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="./pages/sitemap.html">
                                                    Sitemap </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Section-->
                                <!--begin::Section-->
                                <div class="mb-10 mb-lg-17">
                                    <!--begin::Title-->
                                    <h3 class="text-dark fw-bolder mb-7">
                                        Pages - General - Social </h3>
                                    <!--end::Title-->

                                    <!--begin::Row-->
                                    <div class="row">

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="./pages/social/feeds.html">
                                                    Activity </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="./pages/social/activity.html">
                                                    Feeds </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="./pages/social/followers.html">
                                                    Followers </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="./pages/social/settings.html">
                                                    Settings </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Section-->
                                <!--begin::Section-->
                                <div class="mb-10 mb-lg-17">
                                    <!--begin::Title-->
                                    <h3 class="text-dark fw-bolder mb-7">
                                        Pages - General - Others </h3>
                                    <!--end::Title-->

                                    <!--begin::Row-->
                                    <div class="row">

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="./pages/faq/classic.html">
                                                    FAQ Classic </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="./pages/faq/extended.html">
                                                    FAQ Extended </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="./pages/blog/home.html">
                                                    Blog Home </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="./pages/blog/post.html">
                                                    Blog Post </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Section-->



                                <!--begin::Section-->
                                <div class="">

                                    <!--begin::Title-->
                                    <h3 class="text-dark fw-bolder mb-7">
                                        Apps
                                    </h3>
                                    <!--end::Title-->

                                    <!--begin::Row-->
                                    <div class="row">

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="../../projects/list/list.html">
                                                    Projects </a>



                                                <a class="fw-6 fw-semibold" href="products/products.html">
                                                    Ecommerce </a>



                                                <a class="fw-6 fw-semibold" href="../../customers/list/list.html">
                                                    Customers </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="../../subscriptions/list/list.html">
                                                    Subscriptions </a>



                                                <a class="fw-6 fw-semibold" href="../../user-management/users/list/list.html">
                                                    User Management </a>



                                                <a class="fw-6 fw-semibold" href="../../invoices/create/main.html">
                                                    Invoices </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="../../support-center/overview/main.html">
                                                    Support Center </a>



                                                <a class="fw-6 fw-semibold" href="../../chat/private.html">
                                                    Chat </a>



                                                <a class="fw-6 fw-semibold" href="../../calendar/calendar.html">
                                                    Calendar </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="../../file-manager/list/folders.html">
                                                    File Manager </a>



                                                <a class="fw-6 fw-semibold" href="../../inbox/listing/listing.html">
                                                    Inbox </a>



                                                <a class="fw-6 fw-semibold" href="../../contacts/getting-started.html">
                                                    Contacts </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->

                                </div>
                                <!--end::Section-->



                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Text view--->
                    </div>
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
    <!--end::Modal - Sitemap--> <!--end::Engage modals-->
    <!--begin::Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <i class="ki-outline ki-arrow-up"></i>
    </div>
    <!--end::Scrolltop-->

    <!--begin::Modals-->

    <!--begin::Modal - Upgrade plan-->
    <div class="modal fade" id="kt_modal_upgrade_plan" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-xl">
            <!--begin::Modal content-->
            <div class="modal-content rounded">
                <!--begin::Modal header-->
                <div class="modal-header justify-content-end border-0 pb-0">
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <i class="ki-outline ki-cross fs-1"></i>
                    </div>
                    <!--end::Close-->
                </div>
                <!--end::Modal header-->

                <!--begin::Modal body-->
                <div class="modal-body pt-0 pb-15 px-5 px-xl-20">
                    <!--begin::Heading-->
                    <div class="mb-13 text-center">
                        <h1 class="mb-3">Upgrade a Plan</h1>

                        <div class="text-muted fw-semibold fs-5">
                            If you need more info, please check <a href="#" class="link-primary fw-bold">Pricing Guidelines</a>.
                        </div>
                    </div>
                    <!--end::Heading-->

                    <!--begin::Plans-->
                    <div class="d-flex flex-column">
                        <!--begin::Nav group-->
                        <div class="nav-group nav-group-outline mx-auto" data-kt-buttons="true">
                            <button class="btn btn-color-gray-400 btn-active btn-active-secondary px-6 py-3 me-2 active" data-kt-plan="month">
                                Monthly
                            </button>
                            <button class="btn btn-color-gray-400 btn-active btn-active-secondary px-6 py-3" data-kt-plan="annual">
                                Annual
                            </button>
                        </div>
                        <!--end::Nav group-->

                        <!--begin::Row-->
                        <div class="row mt-10">
                            <!--begin::Col-->
                            <div class="col-lg-6 mb-10 mb-lg-0">
                                <!--begin::Tabs-->
                                <div class="nav flex-column">
                                    <!--begin::Tab link-->
                                    <label class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 active mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_startup">

                                        <!--end::Description-->
                                        <div class="d-flex align-items-center me-2">
                                            <!--begin::Radio-->
                                            <div class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
                                                <input class="form-check-input" type="radio" name="plan" checked="checked" value="startup" />
                                            </div>
                                            <!--end::Radio-->

                                            <!--begin::Info-->
                                            <div class="flex-grow-1">
                                                <div class="d-flex align-items-center fs-2 fw-bold flex-wrap">
                                                    Startup
                                                </div>
                                                <div class="fw-semibold opacity-75">
                                                    Best for startups </div>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Description-->

                                        <!--begin::Price-->
                                        <div class="ms-5">
                                            <span class="mb-2">$</span>

                                            <span class="fs-3x fw-bold" data-kt-plan-price-month="39" data-kt-plan-price-annual="399">
                                                39 </span>

                                            <span class="fs-7 opacity-50">/
                                                <span data-kt-element="period">Mon</span>
                                            </span>
                                        </div>
                                        <!--end::Price-->
                                    </label>
                                    <!--end::Tab link-->
                                    <!--begin::Tab link-->
                                    <label class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6  mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_advanced">

                                        <!--end::Description-->
                                        <div class="d-flex align-items-center me-2">
                                            <!--begin::Radio-->
                                            <div class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
                                                <input class="form-check-input" type="radio" name="plan" value="advanced" />
                                            </div>
                                            <!--end::Radio-->

                                            <!--begin::Info-->
                                            <div class="flex-grow-1">
                                                <div class="d-flex align-items-center fs-2 fw-bold flex-wrap">
                                                    Advanced
                                                </div>
                                                <div class="fw-semibold opacity-75">
                                                    Best for 100+ team size </div>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Description-->

                                        <!--begin::Price-->
                                        <div class="ms-5">
                                            <span class="mb-2">$</span>

                                            <span class="fs-3x fw-bold" data-kt-plan-price-month="339" data-kt-plan-price-annual="3399">
                                                339 </span>

                                            <span class="fs-7 opacity-50">/
                                                <span data-kt-element="period">Mon</span>
                                            </span>
                                        </div>
                                        <!--end::Price-->
                                    </label>
                                    <!--end::Tab link-->
                                    <!--begin::Tab link-->
                                    <label class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6  mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_enterprise">

                                        <!--end::Description-->
                                        <div class="d-flex align-items-center me-2">
                                            <!--begin::Radio-->
                                            <div class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
                                                <input class="form-check-input" type="radio" name="plan" value="enterprise" />
                                            </div>
                                            <!--end::Radio-->

                                            <!--begin::Info-->
                                            <div class="flex-grow-1">
                                                <div class="d-flex align-items-center fs-2 fw-bold flex-wrap">
                                                    Enterprise
                                                    <span class="badge badge-light-success ms-2 py-2 px-3 fs-7">Popular</span>
                                                </div>
                                                <div class="fw-semibold opacity-75">
                                                    Best value for 1000+ team </div>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Description-->

                                        <!--begin::Price-->
                                        <div class="ms-5">
                                            <span class="mb-2">$</span>

                                            <span class="fs-3x fw-bold" data-kt-plan-price-month="999" data-kt-plan-price-annual="9999">
                                                999 </span>

                                            <span class="fs-7 opacity-50">/
                                                <span data-kt-element="period">Mon</span>
                                            </span>
                                        </div>
                                        <!--end::Price-->
                                    </label>
                                    <!--end::Tab link-->
                                    <!--begin::Tab link-->
                                    <label class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_custom">

                                        <!--end::Description-->
                                        <div class="d-flex align-items-center me-2">
                                            <!--begin::Radio-->
                                            <div class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
                                                <input class="form-check-input" type="radio" name="plan" value="custom" />
                                            </div>
                                            <!--end::Radio-->

                                            <!--begin::Info-->
                                            <div class="flex-grow-1">
                                                <div class="d-flex align-items-center fs-2 fw-bold flex-wrap">
                                                    Custom
                                                </div>
                                                <div class="fw-semibold opacity-75">
                                                    Requet a custom license </div>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Description-->

                                        <!--begin::Price-->
                                        <div class="ms-5">
                                            <a href="#" class="btn btn-sm btn-success">Contact Us</a>
                                        </div>
                                        <!--end::Price-->
                                    </label>
                                    <!--end::Tab link-->
                                </div>
                                <!--end::Tabs-->
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-lg-6">
                                <!--begin::Tab content-->
                                <div class="tab-content rounded h-100 bg-light p-10">
                                    <!--begin::Tab Pane-->
                                    <div class="tab-pane fade show active" id="kt_upgrade_plan_startup">
                                        <!--begin::Heading-->
                                        <div class="pb-5">
                                            <h2 class="fw-bold text-dark">What’s in Startup Plan?</h2>

                                            <div class="text-muted fw-semibold">
                                                Optimal for 10+ team size and new startup
                                            </div>
                                        </div>
                                        <!--end::Heading-->

                                        <!--begin::Body-->
                                        <div class="pt-1">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                    Up to 10 Active Users </span>
                                                <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                    Up to 30 Project Integrations </span>
                                                <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                    Analytics Module </span>
                                                <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-muted flex-grow-1">
                                                    Finance Module </span>
                                                <i class="ki-outline ki-cross-circle fs-1"></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-muted flex-grow-1">
                                                    Accounting Module </span>
                                                <i class="ki-outline ki-cross-circle fs-1"></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-muted flex-grow-1">
                                                    Network Platform </span>
                                                <i class="ki-outline ki-cross-circle fs-1"></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center ">
                                                <span class="fw-semibold fs-5 text-muted flex-grow-1">
                                                    Unlimited Cloud Space </span>
                                                <i class="ki-outline ki-cross-circle fs-1"></i>
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Tab Pane-->
                                    <!--begin::Tab Pane-->
                                    <div class="tab-pane fade " id="kt_upgrade_plan_advanced">
                                        <!--begin::Heading-->
                                        <div class="pb-5">
                                            <h2 class="fw-bold text-dark">What’s in Startup Plan?</h2>

                                            <div class="text-muted fw-semibold">
                                                Optimal for 100+ team size and grown company
                                            </div>
                                        </div>
                                        <!--end::Heading-->

                                        <!--begin::Body-->
                                        <div class="pt-1">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                    Up to 10 Active Users </span>
                                                <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                    Up to 30 Project Integrations </span>
                                                <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                    Analytics Module </span>
                                                <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                    Finance Module </span>
                                                <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                    Accounting Module </span>
                                                <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-muted flex-grow-1">
                                                    Network Platform </span>
                                                <i class="ki-outline ki-cross-circle fs-1"></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center ">
                                                <span class="fw-semibold fs-5 text-muted flex-grow-1">
                                                    Unlimited Cloud Space </span>
                                                <i class="ki-outline ki-cross-circle fs-1"></i>
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Tab Pane-->
                                    <!--begin::Tab Pane-->
                                    <div class="tab-pane fade " id="kt_upgrade_plan_enterprise">
                                        <!--begin::Heading-->
                                        <div class="pb-5">
                                            <h2 class="fw-bold text-dark">What’s in Startup Plan?</h2>

                                            <div class="text-muted fw-semibold">
                                                Optimal for 1000+ team and enterpise
                                            </div>
                                        </div>
                                        <!--end::Heading-->

                                        <!--begin::Body-->
                                        <div class="pt-1">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                    Up to 10 Active Users </span>
                                                <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                    Up to 30 Project Integrations </span>
                                                <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                    Analytics Module </span>
                                                <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                    Finance Module </span>
                                                <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                    Accounting Module </span>
                                                <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                    Network Platform </span>
                                                <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center ">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                    Unlimited Cloud Space </span>
                                                <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Tab Pane-->
                                    <!--begin::Tab Pane-->
                                    <div class="tab-pane fade " id="kt_upgrade_plan_custom">
                                        <!--begin::Heading-->
                                        <div class="pb-5">
                                            <h2 class="fw-bold text-dark">What’s in Startup Plan?</h2>

                                            <div class="text-muted fw-semibold">
                                                Optimal for corporations
                                            </div>
                                        </div>
                                        <!--end::Heading-->

                                        <!--begin::Body-->
                                        <div class="pt-1">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                    Unlimited Users </span>
                                                <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                    Unlimited Project Integrations </span>
                                                <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                    Analytics Module </span>
                                                <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                    Finance Module </span>
                                                <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                    Accounting Module </span>
                                                <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                    Network Platform </span>
                                                <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center ">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                    Unlimited Cloud Space </span>
                                                <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Tab Pane-->
                                </div>
                                <!--end::Tab content-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Plans-->

                    <!--begin::Actions-->
                    <div class="d-flex flex-center flex-row-fluid pt-12">
                        <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">
                            Cancel
                        </button>

                        <button type="submit" class="btn btn-primary" id="kt_modal_upgrade_plan_btn">

                            <!--begin::Indicator label-->
                            <span class="indicator-label">
                                Upgrade Plan</span>
                            <!--end::Indicator label-->

                            <!--begin::Indicator progress-->
                            <span class="indicator-progress">
                                Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                            </span>
                            <!--end::Indicator progress-->
                        </button>
                    </div>
                    <!--end::Actions-->
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
    <!--end::Modal - Upgrade plan--><!--begin::Modal - Users Search-->
    <div class="modal fade" id="kt_modal_users_search" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header pb-0 border-0 justify-content-end">
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <i class="ki-outline ki-cross fs-1"></i>
                    </div>
                    <!--end::Close-->
                </div>
                <!--begin::Modal header-->

                <!--begin::Modal body-->
                <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                    <!--begin::Content-->
                    <div class="text-center mb-13">
                        <h1 class="mb-3">Search Users</h1>

                        <div class="text-muted fw-semibold fs-5">
                            Invite Collaborators To Your Project
                        </div>
                    </div>
                    <!--end::Content-->

                    <!--begin::Search-->
                    <div id="kt_modal_users_search_handler" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="inline">

                        <!--begin::Form-->
                        <form data-kt-search-element="form" class="w-100 position-relative mb-5" autocomplete="off">
                            <!--begin::Hidden input(Added to disable form autocomplete)-->
                            <input type="hidden" />
                            <!--end::Hidden input-->

                            <!--begin::Icon-->
                            <i class="ki-outline ki-magnifier fs-2 fs-lg-1 text-gray-500 position-absolute top-50 ms-5 translate-middle-y"></i> <!--end::Icon-->

                            <!--begin::Input-->
                            <input type="text" class="form-control form-control-lg form-control-solid px-15" name="search" value="" placeholder="Search by username, full name or email..." data-kt-search-element="input" />
                            <!--end::Input-->

                            <!--begin::Spinner-->
                            <span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5" data-kt-search-element="spinner">
                                <span class="spinner-border h-15px w-15px align-middle text-muted"></span>
                            </span>
                            <!--end::Spinner-->

                            <!--begin::Reset-->
                            <span class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 me-5 d-none" data-kt-search-element="clear">
                                <i class="ki-outline ki-cross fs-2 fs-lg-1 me-0"></i> </span>
                            <!--end::Reset-->
                        </form>
                        <!--end::Form-->

                        <!--begin::Wrapper-->
                        <div class="py-5">
                            <!--begin::Suggestions-->
                            <div data-kt-search-element="suggestions">
                                <!--begin::Heading-->
                                <h3 class="fw-semibold mb-5">Recently searched:</h3>
                                <!--end::Heading-->

                                <!--begin::Users-->
                                <div class="mh-375px scroll-y me-n7 pe-7">
                                    <!--begin::User-->
                                    <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle me-5">
                                            <img alt="Pic" src="./assets/media/avatars/300-6.jpg" />
                                        </div>
                                        <!--end::Avatar-->

                                        <!--begin::Info-->
                                        <div class="fw-semibold">
                                            <span class="fs-6 text-gray-800 me-2">Emma Smith</span>
                                            <span class="badge badge-light">Art Director</span>
                                        </div>
                                        <!--end::Info-->
                                    </a>
                                    <!--end::User-->
                                    <!--begin::User-->
                                    <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle me-5">
                                            <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                                M </span>
                                        </div>
                                        <!--end::Avatar-->

                                        <!--begin::Info-->
                                        <div class="fw-semibold">
                                            <span class="fs-6 text-gray-800 me-2">Melody Macy</span>
                                            <span class="badge badge-light">Marketing Analytic</span>
                                        </div>
                                        <!--end::Info-->
                                    </a>
                                    <!--end::User-->
                                    <!--begin::User-->
                                    <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle me-5">
                                            <img alt="Pic" src="./assets/media/avatars/300-1.jpg" />
                                        </div>
                                        <!--end::Avatar-->

                                        <!--begin::Info-->
                                        <div class="fw-semibold">
                                            <span class="fs-6 text-gray-800 me-2">Max Smith</span>
                                            <span class="badge badge-light">Software Enginer</span>
                                        </div>
                                        <!--end::Info-->
                                    </a>
                                    <!--end::User-->
                                    <!--begin::User-->
                                    <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle me-5">
                                            <img alt="Pic" src="./assets/media/avatars/300-5.jpg" />
                                        </div>
                                        <!--end::Avatar-->

                                        <!--begin::Info-->
                                        <div class="fw-semibold">
                                            <span class="fs-6 text-gray-800 me-2">Sean Bean</span>
                                            <span class="badge badge-light">Web Developer</span>
                                        </div>
                                        <!--end::Info-->
                                    </a>
                                    <!--end::User-->
                                    <!--begin::User-->
                                    <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle me-5">
                                            <img alt="Pic" src="./assets/media/avatars/300-25.jpg" />
                                        </div>
                                        <!--end::Avatar-->

                                        <!--begin::Info-->
                                        <div class="fw-semibold">
                                            <span class="fs-6 text-gray-800 me-2">Brian Cox</span>
                                            <span class="badge badge-light">UI/UX Designer</span>
                                        </div>
                                        <!--end::Info-->
                                    </a>
                                    <!--end::User-->
                                </div>
                                <!--end::Users-->
                            </div>
                            <!--end::Suggestions-->

                            <!--begin::Results(add d-none to below element to hide the users list by default)-->
                            <div data-kt-search-element="results" class="d-none">
                                <!--begin::Users-->
                                <div class="mh-375px scroll-y me-n7 pe-7">
                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="0">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='0']" value="0" />
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="./assets/media/avatars/300-6.jpg" />
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Smith</a>

                                                <div class="fw-semibold text-muted">smith@kpmg.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2" selected>Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->

                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="1">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='1']" value="1" />
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                                    M </span>
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Melody Macy</a>

                                                <div class="fw-semibold text-muted">melody@altbox.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                <option value="1" selected>Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->

                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="2">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='2']" value="2" />
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="./assets/media/avatars/300-1.jpg" />
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Max Smith</a>

                                                <div class="fw-semibold text-muted">max@kt.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3" selected>Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->

                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="3">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='3']" value="3" />
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="./assets/media/avatars/300-5.jpg" />
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sean Bean</a>

                                                <div class="fw-semibold text-muted">sean@dellito.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2" selected>Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->

                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="4">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='4']" value="4" />
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="./assets/media/avatars/300-25.jpg" />
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Brian Cox</a>

                                                <div class="fw-semibold text-muted">brian@exchange.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3" selected>Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->

                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="5">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='5']" value="5" />
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <span class="symbol-label bg-light-warning text-warning fw-semibold">
                                                    C </span>
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Mikaela Collins</a>

                                                <div class="fw-semibold text-muted">mik@pex.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2" selected>Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->

                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="6">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='6']" value="6" />
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="./assets/media/avatars/300-9.jpg" />
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Francis Mitcham</a>

                                                <div class="fw-semibold text-muted">f.mit@kpmg.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3" selected>Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->

                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="7">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='7']" value="7" />
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                                    O </span>
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Olivia Wild</a>

                                                <div class="fw-semibold text-muted">olivia@corpmail.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2" selected>Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->

                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="8">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='8']" value="8" />
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <span class="symbol-label bg-light-primary text-primary fw-semibold">
                                                    N </span>
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Neil Owen</a>

                                                <div class="fw-semibold text-muted">owen.neil@gmail.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                <option value="1" selected>Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->

                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="9">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='9']" value="9" />
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="./assets/media/avatars/300-23.jpg" />
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Dan Wilson</a>

                                                <div class="fw-semibold text-muted">dam@consilting.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3" selected>Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->

                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="10">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='10']" value="10" />
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                                    E </span>
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Bold</a>

                                                <div class="fw-semibold text-muted">emma@intenso.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2" selected>Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->

                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="11">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='11']" value="11" />
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="./assets/media/avatars/300-12.jpg" />
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ana Crown</a>

                                                <div class="fw-semibold text-muted">ana.cf@limtel.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                <option value="1" selected>Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->

                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="12">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='12']" value="12" />
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <span class="symbol-label bg-light-info text-info fw-semibold">
                                                    A </span>
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Robert Doe</a>

                                                <div class="fw-semibold text-muted">robert@benko.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3" selected>Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->

                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="13">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='13']" value="13" />
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="./assets/media/avatars/300-13.jpg" />
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">John Miller</a>

                                                <div class="fw-semibold text-muted">miller@mapple.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3" selected>Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->

                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="14">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='14']" value="14" />
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <span class="symbol-label bg-light-success text-success fw-semibold">
                                                    L </span>
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Lucy Kunic</a>

                                                <div class="fw-semibold text-muted">lucy.m@fentech.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2" selected>Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->

                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="15">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='15']" value="15" />
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="./assets/media/avatars/300-21.jpg" />
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ethan Wilder</a>

                                                <div class="fw-semibold text-muted">ethan@loop.com.au</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                <option value="1" selected>Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->

                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="16">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='16']" value="16" />
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="./assets/media/avatars/300-5.jpg" />
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sean Bean</a>

                                                <div class="fw-semibold text-muted">sean@dellito.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3" selected>Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->


                                </div>
                                <!--end::Users-->

                                <!--begin::Actions-->
                                <div class="d-flex flex-center mt-15">
                                    <button type="reset" id="kt_modal_users_search_reset" data-bs-dismiss="modal" class="btn btn-active-light me-3">
                                        Cancel
                                    </button>

                                    <button type="submit" id="kt_modal_users_search_submit" class="btn btn-primary">
                                        Add Selected Users
                                    </button>
                                </div>
                                <!--end::Actions-->
                            </div>
                            <!--end::Results-->
                            <!--begin::Empty-->
                            <div data-kt-search-element="empty" class="text-center d-none">
                                <!--begin::Message-->
                                <div class="fw-semibold py-10">
                                    <div class="text-gray-600 fs-3 mb-2">No users found</div>

                                    <div class="text-muted fs-6">Try to search by username, full name or email...</div>
                                </div>
                                <!--end::Message-->

                                <!--begin::Illustration-->
                                <div class="text-center px-5">
                                    <img src="./assets/media/illustrations/sketchy-1/1.png" alt="" class="w-100 h-200px h-sm-325px" />
                                </div>
                                <!--end::Illustration-->
                            </div>
                            <!--end::Empty-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Search-->
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
    <!--end::Modal - Users Search-->
    <!--begin::Modal - Invite Friends-->
    <div class="modal fade" id="kt_modal_invite_friends" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header pb-0 border-0 justify-content-end">
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <i class="ki-outline ki-cross fs-1"></i>
                    </div>
                    <!--end::Close-->
                </div>
                <!--begin::Modal header-->

                <!--begin::Modal body-->
                <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                    <!--begin::Heading-->
                    <div class="text-center mb-13">
                        <!--begin::Title-->
                        <h1 class="mb-3">Invite a Friend</h1>
                        <!--end::Title-->

                        <!--begin::Description-->
                        <div class="text-muted fw-semibold fs-5">
                            If you need more info, please check out
                            <a href="#" class="link-primary fw-bold">FAQ Page</a>.
                        </div>
                        <!--end::Description-->
                    </div>
                    <!--end::Heading-->

                    <!--begin::Google Contacts Invite-->
                    <div class="btn btn-light-primary fw-bold w-100 mb-8">
                        <img alt="Logo" src="./assets/media/svg/brand-logos/google-icon.svg" class="h-20px me-3" />
                        Invite Gmail Contacts
                    </div>
                    <!--end::Google Contacts Invite-->

                    <!--begin::Separator-->
                    <div class="separator d-flex flex-center mb-8">
                        <span class="text-uppercase bg-body fs-7 fw-semibold text-muted px-3">or</span>
                    </div>
                    <!--end::Separator-->

                    <!--begin::Textarea-->
                    <textarea class="form-control form-control-solid mb-8" rows="3" placeholder="Type or paste emails here">
                </textarea>
                    <!--end::Textarea-->

                    <!--begin::Users-->
                    <div class="mb-10">
                        <!--begin::Heading-->
                        <div class="fs-6 fw-semibold mb-2">Your Invitations</div>
                        <!--end::Heading-->

                        <!--begin::List-->
                        <div class="mh-300px scroll-y me-n7 pe-7">
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="./assets/media/avatars/300-6.jpg" />
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Smith</a>

                                        <div class="fw-semibold text-muted">smith@kpmg.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2" selected>Owner</option>
                                        <option value="3">Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                            M </span>
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Melody Macy</a>

                                        <div class="fw-semibold text-muted">melody@altbox.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1" selected>Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3">Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="./assets/media/avatars/300-1.jpg" />
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Max Smith</a>

                                        <div class="fw-semibold text-muted">max@kt.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3" selected>Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="./assets/media/avatars/300-5.jpg" />
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sean Bean</a>

                                        <div class="fw-semibold text-muted">sean@dellito.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2" selected>Owner</option>
                                        <option value="3">Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="./assets/media/avatars/300-25.jpg" />
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Brian Cox</a>

                                        <div class="fw-semibold text-muted">brian@exchange.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3" selected>Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <span class="symbol-label bg-light-warning text-warning fw-semibold">
                                            C </span>
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Mikaela Collins</a>

                                        <div class="fw-semibold text-muted">mik@pex.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2" selected>Owner</option>
                                        <option value="3">Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="./assets/media/avatars/300-9.jpg" />
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Francis Mitcham</a>

                                        <div class="fw-semibold text-muted">f.mit@kpmg.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3" selected>Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                            O </span>
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Olivia Wild</a>

                                        <div class="fw-semibold text-muted">olivia@corpmail.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2" selected>Owner</option>
                                        <option value="3">Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <span class="symbol-label bg-light-primary text-primary fw-semibold">
                                            N </span>
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Neil Owen</a>

                                        <div class="fw-semibold text-muted">owen.neil@gmail.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1" selected>Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3">Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="./assets/media/avatars/300-23.jpg" />
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Dan Wilson</a>

                                        <div class="fw-semibold text-muted">dam@consilting.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3" selected>Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                            E </span>
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Bold</a>

                                        <div class="fw-semibold text-muted">emma@intenso.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2" selected>Owner</option>
                                        <option value="3">Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="./assets/media/avatars/300-12.jpg" />
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ana Crown</a>

                                        <div class="fw-semibold text-muted">ana.cf@limtel.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1" selected>Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3">Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <span class="symbol-label bg-light-info text-info fw-semibold">
                                            A </span>
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Robert Doe</a>

                                        <div class="fw-semibold text-muted">robert@benko.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3" selected>Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="./assets/media/avatars/300-13.jpg" />
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">John Miller</a>

                                        <div class="fw-semibold text-muted">miller@mapple.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3" selected>Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <span class="symbol-label bg-light-success text-success fw-semibold">
                                            L </span>
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Lucy Kunic</a>

                                        <div class="fw-semibold text-muted">lucy.m@fentech.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2" selected>Owner</option>
                                        <option value="3">Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="./assets/media/avatars/300-21.jpg" />
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ethan Wilder</a>

                                        <div class="fw-semibold text-muted">ethan@loop.com.au</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1" selected>Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3">Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 ">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="./assets/media/avatars/300-1.jpg" />
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Max Smith</a>

                                        <div class="fw-semibold text-muted">max@kt.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3" selected>Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                        </div>
                        <!--end::List-->
                    </div>
                    <!--end::Users-->

                    <!--begin::Notice-->
                    <div class="d-flex flex-stack">
                        <!--begin::Label-->
                        <div class="me-5 fw-semibold">
                            <label class="fs-6">Adding Users by Team Members</label>
                            <div class="fs-7 text-muted">If you need more info, please check budget planning</div>
                        </div>
                        <!--end::Label-->

                        <!--begin::Switch-->
                        <label class="form-check form-switch form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1" checked="checked" />

                            <span class="form-check-label fw-semibold text-muted">
                                Allowed
                            </span>
                        </label>
                        <!--end::Switch-->
                    </div>
                    <!--end::Notice-->
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
    <!--end::Modal - Invite Friend--> <!--end::Modals-->

    <!--begin::Javascript-->
    <script>
        var hostUrl = "./assets/index.html";
    </script>

    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="./assets/plugins/global/plugins.bundle.js"></script>
    <script src="./assets/js/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->

    <!--begin::Vendors Javascript(used for this page only)-->
    <script src="./assets/plugins/custom/datatables/datatables.bundle.js"></script>
    <!--end::Vendors Javascript-->

    <!--begin::Custom Javascript(used for this page only)-->
    <script src="./assets/js/custom/apps/ecommerce/catalog/products.js"></script>
    <script src="./assets/js/widgets.bundle.js"></script>
    <script src="./assets/js/custom/widgets.js"></script>
    <script src="./assets/js/custom/apps/chat/chat.js"></script>
    <script src="./assets/js/custom/utilities/modals/upgrade-plan.js"></script>
    <script src="./assets/js/custom/utilities/modals/users-search.js"></script>
    <!--end::Custom Javascript-->
    <!--end::Javascript-->

</body>
<!--end::Body-->

</html>