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
<html lang="en" >
    <!--begin::Head-->
    <!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
        <title>Metronic - The World's #1 Selling Bootstrap Admin Template by Keenthemes</title>
        <meta charset="utf-8"/>
        <meta name="description" content="
            The most advanced Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, 
            Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel versions. 
            Grab your copy now and get life-time updates for free.
        "/>
        <meta name="keywords" content="
            metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, 
            Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates, 
            free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, 
            bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon
        "/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>      
        <meta property="og:locale" content="en_US" />
        <meta property="og:type" content="article" />
        <meta property="og:title" content="
            Metronic - Bootstrap Admin Template, HTML, VueJS, React, Angular. Laravel, Asp.Net Core, Ruby on Rails, 
            Spring Boot, Blazor, Django, Express.js, Node.js, Flask Admin Dashboard Theme & Template
        " />
        <meta property="og:url" content="https://keenthemes.com/metronic"/>
        <meta property="og:site_name" content="Keenthemes | Metronic" />
        <link rel="canonical" href="https://preview.keenthemes.com/metronic8"/>
        <link rel="shortcut icon" href="../../assets/media/logos/favicon.ico"/>

        <!--begin::Fonts(mandatory for all pages)-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700"/>        <!--end::Fonts-->

                    <!--begin::Vendor Stylesheets(used for this page only)-->
                            <link href="../../assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css"/>
                        <!--end::Vendor Stylesheets-->
        
        
                    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
                            <link href="../../assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css"/>
                            <link href="../../assets/css/style.bundle.css" rel="stylesheet" type="text/css"/>
                        <!--end::Global Stylesheets Bundle-->
        
                    <!--Begin::Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'../../../../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5FS8GGP');</script>
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
    <body  id="kt_app_body" data-kt-app-header-fixed-mobile="true" data-kt-app-toolbar-enabled="true"  class="app-default" >
        <!--begin::Theme mode setup on page load-->
<script>
	var defaultThemeMode = "light";
	var themeMode;

	if ( document.documentElement ) {
		if ( document.documentElement.hasAttribute("data-bs-theme-mode")) {
			themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
		} else {
			if ( localStorage.getItem("data-bs-theme") !== null ) {
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
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FS8GGP" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!--End::Google Tag Manager (noscript) -->
        
        
<!--begin::App-->
<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
    <!--begin::Page-->
    <div class="app-page  flex-column flex-column-fluid " id="kt_app_page">     
        
                    
<!--begin::Header-->
<div id="kt_app_header" class="app-header " 
     data-kt-sticky="true" data-kt-sticky-activate="{default: false, lg: true}" data-kt-sticky-name="app-header-sticky" data-kt-sticky-offset="{default: false, lg: '300px'}"  
     >

                        <!--begin::Header container-->
            <div class="app-container  container-xxl d-flex align-items-stretch justify-content-between " id="kt_app_header_container">
                <!--begin::Header mobile toggle-->
<div class="d-flex align-items-center d-lg-none ms-n3 me-2" title="Show sidebar menu">
	<div class="btn btn-icon btn-color-gray-600 btn-active-color-primary w-35px h-35px" id="kt_app_header_menu_toggle">
		<i class="ki-outline ki-abstract-14 fs-2"></i>	</div>
</div>
<!--end::Header mobile toggle-->

<!--begin::Logo-->
<div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0 me-lg-15">
	<a href="../../index.php">
		<img alt="Logo" src="../../assets/media/logos/demo30-small.svg" class="h-25px d-lg-none"/>
		<img alt="Logo" src="../../assets/media/logos/demo30.svg" class="h-25px d-none d-lg-inline app-sidebar-logo-default theme-light-show"/>
		<img alt="Logo" src="../../assets/media/logos/demo30-dark.png" class="h-25px d-none d-lg-inline app-sidebar-logo-default theme-dark-show"/>
	</a>
</div>
<!--end::Logo-->

<!--begin::Header wrapper-->
<div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1" id="kt_app_header_wrapper">
	
<!--begin::Menu wrapper-->
<div 
    class="app-header-menu app-header-mobile-drawer align-items-stretch"

    data-kt-drawer="true"
	data-kt-drawer-name="app-header-menu"
	data-kt-drawer-activate="{default: true, lg: false}"
	data-kt-drawer-overlay="true"
	data-kt-drawer-width="250px"
	data-kt-drawer-direction="start"
	data-kt-drawer-toggle="#kt_app_header_menu_toggle"

    data-kt-swapper="true"
    data-kt-swapper-mode="{default: 'append', lg: 'prepend'}"
    data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}"
>   
    <!--begin::Menu-->
    <div 
        class=" menu  
            menu-rounded 
            menu-active-bg 
            menu-state-primary 
            menu-column 
            menu-lg-row 
            menu-title-gray-700 
            menu-icon-gray-500 
            menu-arrow-gray-500 
            menu-bullet-gray-500 
            my-5 my-lg-0 align-items-stretch fw-semibold px-2 px-lg-0
        "         
        id="kt_app_header_menu"
        data-kt-menu="true"
    >        
        <!--begin:Menu item--><div  data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" data-kt-menu-offset="-50,0"  class="menu-item menu-here-bg menu-lg-down-accordion me-0 me-lg-2" ><!--begin:Menu link--><span class="menu-link" ><span  class="menu-title" >Dashboards</span><span  class="menu-arrow d-lg-none" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown p-0 w-100 w-lg-850px" ><!--begin:Dashboards menu-->
<div class="menu-state-bg menu-extended overflow-hidden overflow-lg-visible" data-kt-menu-dismiss="true">
    <!--begin:Row-->
    <div class="row">
        <!--begin:Col-->
        <div class="col-lg-8 mb-3 mb-lg-0  py-3 px-3 py-lg-6 px-lg-6">
            <!--begin:Row-->
            <div class="row">
                                                        <!--begin:Col-->
                    <div class="col-lg-6 mb-3">
                        <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="../../index.php" class="menu-link ">
                                <span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                    <i class="ki-outline ki-element-11 text-primary fs-1"></i>                                </span>

                                <span class="d-flex flex-column">
                                    <span class="fs-6 fw-bold text-gray-800">Default</span>
                                    <span class="fs-7 fw-semibold text-muted">Reports & statistics</span>
                                </span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                    </div>
                    <!--end:Col-->
                                                        <!--begin:Col-->
                    <div class="col-lg-6 mb-3">
                        <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="../../dashboards/ecommerce.php" class="menu-link ">
                                <span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                    <i class="ki-outline ki-basket text-danger fs-1"></i>                                </span>

                                <span class="d-flex flex-column">
                                    <span class="fs-6 fw-bold text-gray-800">eCommerce</span>
                                    <span class="fs-7 fw-semibold text-muted">Sales reports</span>
                                </span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                    </div>
                    <!--end:Col-->
                                                        <!--begin:Col-->
                    <div class="col-lg-6 mb-3">
                        <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="../../dashboards/projects.php" class="menu-link ">
                                <span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                    <i class="ki-outline ki-abstract-44 text-info fs-1"></i>                                </span>

                                <span class="d-flex flex-column">
                                    <span class="fs-6 fw-bold text-gray-800">Projects</span>
                                    <span class="fs-7 fw-semibold text-muted">Tasts, graphs & charts</span>
                                </span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                    </div>
                    <!--end:Col-->
                                                        <!--begin:Col-->
                    <div class="col-lg-6 mb-3">
                        <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="../../dashboards/online-courses.php" class="menu-link ">
                                <span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                    <i class="ki-outline ki-color-swatch text-success fs-1"></i>                                </span>

                                <span class="d-flex flex-column">
                                    <span class="fs-6 fw-bold text-gray-800">Online Courses</span>
                                    <span class="fs-7 fw-semibold text-muted">Student progress</span>
                                </span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                    </div>
                    <!--end:Col-->
                                                        <!--begin:Col-->
                    <div class="col-lg-6 mb-3">
                        <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="../../dashboards/marketing.php" class="menu-link ">
                                <span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                    <i class="ki-outline ki-chart-simple text-dark fs-1"></i>                                </span>

                                <span class="d-flex flex-column">
                                    <span class="fs-6 fw-bold text-gray-800">Marketing</span>
                                    <span class="fs-7 fw-semibold text-muted">Campaings & conversions</span>
                                </span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                    </div>
                    <!--end:Col-->
                                                        <!--begin:Col-->
                    <div class="col-lg-6 mb-3">
                        <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="../../dashboards/bidding.php" class="menu-link ">
                                <span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                    <i class="ki-outline ki-switch text-warning fs-1"></i>                                </span>

                                <span class="d-flex flex-column">
                                    <span class="fs-6 fw-bold text-gray-800">Bidding</span>
                                    <span class="fs-7 fw-semibold text-muted">Campaings & conversions</span>
                                </span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                    </div>
                    <!--end:Col-->
                                                        <!--begin:Col-->
                    <div class="col-lg-6 mb-3">
                        <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="../../dashboards/pos.php" class="menu-link ">
                                <span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                    <i class="ki-outline ki-abstract-42 text-danger fs-1"></i>                                </span>

                                <span class="d-flex flex-column">
                                    <span class="fs-6 fw-bold text-gray-800">POS System</span>
                                    <span class="fs-7 fw-semibold text-muted">Campaings & conversions</span>
                                </span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                    </div>
                    <!--end:Col-->
                                                        <!--begin:Col-->
                    <div class="col-lg-6 mb-3">
                        <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="../../dashboards/call-center.php" class="menu-link ">
                                <span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                    <i class="ki-outline ki-call text-primary fs-1"></i>                                </span>

                                <span class="d-flex flex-column">
                                    <span class="fs-6 fw-bold text-gray-800">Call Center</span>
                                    <span class="fs-7 fw-semibold text-muted">Campaings & conversions</span>
                                </span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                    </div>
                    <!--end:Col-->
                                                                                                                                                                                                                                    </div>
            <!--end:Row-->

            <div class="separator separator-dashed mx-5 my-5"></div>

            <!--begin:Landing-->
            <div class="d-flex flex-stack flex-wrap flex-lg-nowrap gap-2 mx-5">
                <div class="d-flex flex-column me-5">
                    <div class="fs-6 fw-bold text-gray-800">
                        Landing Page Template
                    </div>
                    <div class="fs-7 fw-semibold text-muted">
                        Onpe page landing template with pricing & others    
                    </div>
                </div>

                <a href="../../landing.php" class="btn btn-sm btn-primary fw-bold">
                    Explore
                </a>
            </div>
            <!--end:Landing-->
        </div>
        <!--end:Col-->       

        <!--begin:Col-->
        <div class="menu-more bg-light col-lg-4 py-3 px-3 py-lg-6 px-lg-6 rounded-end">
            <!--begin:Heading-->
            <h4 class="fs-6 fs-lg-4 text-gray-800 fw-bold mt-3 mb-3 ms-4">More Dashboards</h4>
            <!--end:Heading-->

                                                                                                                                                                            
                <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="../../dashboards/logistics.php" class="menu-link py-2 ">
                        <span class="menu-title">
                            Logistics                        </span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                                            
                <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="../../dashboards/website-analytics.php" class="menu-link py-2 ">
                        <span class="menu-title">
                            Website Analytics                        </span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                                            
                <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="../../dashboards/finance-performance.php" class="menu-link py-2 ">
                        <span class="menu-title">
                            Finance Performance                        </span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                                            
                <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="../../dashboards/store-analytics.php" class="menu-link py-2 ">
                        <span class="menu-title">
                            Store Analytics                        </span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                                            
                <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="../../dashboards/social.php" class="menu-link py-2 ">
                        <span class="menu-title">
                            Social                        </span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                                            
                <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="../../dashboards/delivery.php" class="menu-link py-2 ">
                        <span class="menu-title">
                            Delivery                        </span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                                            
                <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="../../dashboards/crypto.php" class="menu-link py-2 ">
                        <span class="menu-title">
                            Crypto                        </span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                                            
                <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="../../dashboards/school.php" class="menu-link py-2 ">
                        <span class="menu-title">
                            School                        </span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                                            
                <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="../../dashboards/podcast.php" class="menu-link py-2 ">
                        <span class="menu-title">
                            Podcast                        </span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                                    </div>
        <!--end:Col-->     
    </div>
    <!--end:Row-->
</div>
<!--end:Dashboards menu--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" data-kt-menu-offset="-100,0"  class="menu-item menu-lg-down-accordion me-0 me-lg-2" ><!--begin:Menu link--><span class="menu-link" ><span  class="menu-title" >Pages</span><span  class="menu-arrow d-lg-none" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown p-0" ><!--begin:Pages menu-->
<div class="menu-active-bg px-4 px-lg-0">
    <!--begin:Tabs nav-->
    <div class="d-flex w-100 overflow-auto">
        <ul class="nav nav-stretch nav-line-tabs fw-bold fs-6 p-0 p-lg-10 flex-nowrap flex-grow-1">
                                                        <!--begin:Nav item-->
                <li class="nav-item mx-lg-1">
                    <a class="nav-link py-3 py-lg-6 active text-active-primary" href="#" data-bs-toggle="tab" data-bs-target="#kt_app_header_menu_pages_pages">
                        General                    </a>
                </li>
                <!--end:Nav item-->
                                            <!--begin:Nav item-->
                <li class="nav-item mx-lg-1">
                    <a class="nav-link py-3 py-lg-6  text-active-primary" href="#" data-bs-toggle="tab" data-bs-target="#kt_app_header_menu_pages_account">
                        Account                    </a>
                </li>
                <!--end:Nav item-->
                                            <!--begin:Nav item-->
                <li class="nav-item mx-lg-1">
                    <a class="nav-link py-3 py-lg-6  text-active-primary" href="#" data-bs-toggle="tab" data-bs-target="#kt_app_header_menu_pages_authentication">
                        Authentication                    </a>
                </li>
                <!--end:Nav item-->
                                            <!--begin:Nav item-->
                <li class="nav-item mx-lg-1">
                    <a class="nav-link py-3 py-lg-6  text-active-primary" href="#" data-bs-toggle="tab" data-bs-target="#kt_app_header_menu_pages_utilities">
                        Utilities                    </a>
                </li>
                <!--end:Nav item-->
                                            <!--begin:Nav item-->
                <li class="nav-item mx-lg-1">
                    <a class="nav-link py-3 py-lg-6  text-active-primary" href="#" data-bs-toggle="tab" data-bs-target="#kt_app_header_menu_pages_widgets">
                        Widgets                    </a>
                </li>
                <!--end:Nav item-->
                    </ul>
    </div>
    <!--end:Tabs nav-->

    <!--begin:Tab content-->
    <div class="tab-content py-4 py-lg-8 px-lg-7">
        <!--begin:Tab pane-->
        <div class="tab-pane active w-lg-1000px" id="kt_app_header_menu_pages_pages">
            <!--begin:Row-->
<div class="row">
    <!--begin:Col-->
    <div class="col-lg-8">
        <!--begin:Row-->
        <div class="row">
            <!--begin:Col-->
            <div class="col-lg-3 mb-6 mb-lg-0">
                <!--begin:Menu heading-->
                <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">User Profile</h4>
                <!--end:Menu heading-->

                                    <!--begin:Menu item-->
                    <div class="menu-item p-0 m-0">
                        <!--begin:Menu link-->
                        <a href="../../pages/user-profile/overview.php" class="menu-link ">
                            <span class="menu-title">Overview</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                    <div class="menu-item p-0 m-0">
                        <!--begin:Menu link-->
                        <a href="../../pages/user-profile/projects.php" class="menu-link ">
                            <span class="menu-title">Projects</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                    <div class="menu-item p-0 m-0">
                        <!--begin:Menu link-->
                        <a href="../../pages/user-profile/campaigns.php" class="menu-link ">
                            <span class="menu-title">Campaigns</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                    <div class="menu-item p-0 m-0">
                        <!--begin:Menu link-->
                        <a href="../../pages/user-profile/documents.php" class="menu-link ">
                            <span class="menu-title">Documents</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                    <div class="menu-item p-0 m-0">
                        <!--begin:Menu link-->
                        <a href="../../pages/user-profile/followers.php" class="menu-link ">
                            <span class="menu-title">Followers</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                    <div class="menu-item p-0 m-0">
                        <!--begin:Menu link-->
                        <a href="../../pages/user-profile/activity.php" class="menu-link ">
                            <span class="menu-title">Activity</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                            </div>
            <!--end:Col-->

            <!--begin:Col-->
            <div class="col-lg-3 mb-6 mb-lg-0">
                <!--begin:Menu section-->
                <div class="mb-6">
                    <!--begin:Menu heading-->
                    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Corporate</h4>
                    <!--end:Menu heading-->

                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="../../pages/about.php" class="menu-link ">
                                <span class="menu-title">About</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="../../pages/team.php" class="menu-link ">
                                <span class="menu-title">Our Team</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="../../pages/contact.php" class="menu-link ">
                                <span class="menu-title">Contact Us</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="../../pages/licenses.php" class="menu-link ">
                                <span class="menu-title">Licenses</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="../../pages/sitemap.php" class="menu-link ">
                                <span class="menu-title">Sitemap</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                    </div>
                <!--end:Menu section-->

                <!--begin:Menu section-->
                <div class="mb-0">
                    <!--begin:Menu heading-->
                    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Careers</h4>
                    <!--end:Menu heading-->

                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="../../pages/careers/list.php" class="menu-link ">
                                <span class="menu-title">Careers List</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="../../pages/careers/apply.php" class="menu-link ">
                                <span class="menu-title">Careers Apply</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                    </div>
                <!--end:Menu section-->
            </div>
            <!--end:Col-->

            <!--begin:Col-->
            <div class="col-lg-3 mb-6 mb-lg-0"> 
                <!--begin:Menu section-->
                <div class="mb-6">
                    <!--begin:Menu heading-->
                    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">FAQ</h4>
                    <!--end:Menu heading-->

                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="../../pages/faq/classic.php" class="menu-link ">
                                <span class="menu-title">FAQ Classic</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="../../pages/faq/extended.php" class="menu-link ">
                                <span class="menu-title">FAQ Extended</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                    </div>
                <!--end:Menu section-->

                <!--begin:Menu section-->
                <div class="mb-6">
                    <!--begin:Menu heading-->
                    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Blog</h4>
                    <!--end:Menu heading-->

                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="../../pages/blog/home.php" class="menu-link ">
                                <span class="menu-title">Blog Home</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="../../pages/blog/post.php" class="menu-link ">
                                <span class="menu-title">Blog Post</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                    </div>
                <!--end:Menu section-->

                <!--begin:Menu section-->
                <div class="mb-0">
                    <!--begin:Menu heading-->
                    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Pricing</h4>
                    <!--end:Menu heading-->

                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="../../pages/pricing/column.php" class="menu-link ">
                                <span class="menu-title">Column Pricing</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="../../pages/pricing/table.php" class="menu-link ">
                                <span class="menu-title">Table Pricing</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                    </div>
                <!--end:Menu section-->
            </div>
            <!--end:Col-->

            <!--begin:Col-->
            <div class="col-lg-3 mb-6 mb-lg-0">
                <!--begin:Menu section-->
                <div class="mb-0">
                    <!--begin:Menu heading-->
                    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Social</h4>
                    <!--end:Menu heading-->

                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="../../pages/social/feeds.php" class="menu-link ">
                                <span class="menu-title">Feeds</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="../../pages/social/activity.php" class="menu-link ">
                                <span class="menu-title">Activty</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="../../pages/social/followers.php" class="menu-link ">
                                <span class="menu-title">Followers</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="../../pages/social/settings.php" class="menu-link ">
                                <span class="menu-title">Settings</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                    </div>
                <!--end:Menu section-->
            </div>
            <!--end:Col-->
        </div>
        <!--end:Row-->
    </div>
    <!--end:Col-->

    <!--begin:Col-->
    <div class="col-lg-4">
        <img src="../../assets/media/stock/600x600/img-82.jpg" class="rounded mw-100" alt=""/>
    </div>
    <!--end:Col-->
</div>
<!--end:Row-->            
        </div>
        <!--end:Tab pane-->

        <!--begin:Tab pane-->
        <div class="tab-pane  w-lg-600px" id="kt_app_header_menu_pages_account">
            <!--begin:Row-->
<div class="row">
    <!--begin:Col-->
    <div class="col-lg-5 mb-6 mb-lg-0">
        <!--begin:Row-->
        <div class="row">
            <!--begin:Col-->
            <div class="col-lg-6">
                                                                        <!--begin:Menu item-->
                    <div class="menu-item p-0 m-0">
                        <!--begin:Menu link-->
                        <a href="../../account/overview.php" class="menu-link ">
                            <span class="menu-title">Overview</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                    <div class="menu-item p-0 m-0">
                        <!--begin:Menu link-->
                        <a href="../../account/settings.php" class="menu-link ">
                            <span class="menu-title">Settings</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                    <div class="menu-item p-0 m-0">
                        <!--begin:Menu link-->
                        <a href="../../account/security.php" class="menu-link ">
                            <span class="menu-title">Security</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                    <div class="menu-item p-0 m-0">
                        <!--begin:Menu link-->
                        <a href="../../account/activity.php" class="menu-link ">
                            <span class="menu-title">Activity</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                    <div class="menu-item p-0 m-0">
                        <!--begin:Menu link-->
                        <a href="../../account/billing.php" class="menu-link ">
                            <span class="menu-title">Billing</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                                                                                                            </div>
            <!--end:Col-->

            <!--begin:Col-->
            <div class="col-lg-6">
                                                                                                                                                                            <!--begin:Menu item-->
                    <div class="menu-item p-0 m-0">
                        <!--begin:Menu link-->
                        <a href="../../account/statements.php" class="menu-link ">
                            <span class="menu-title">Statements</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                    <div class="menu-item p-0 m-0">
                        <!--begin:Menu link-->
                        <a href="../../account/referrals.php" class="menu-link ">
                            <span class="menu-title">Referrals</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                    <div class="menu-item p-0 m-0">
                        <!--begin:Menu link-->
                        <a href="../../account/api-keys.php" class="menu-link ">
                            <span class="menu-title">API Keys</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                    <div class="menu-item p-0 m-0">
                        <!--begin:Menu link-->
                        <a href="../../account/logs.php" class="menu-link ">
                            <span class="menu-title">Logs</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                            </div>
            <!--end:Col-->
        </div>
        <!--end:Row-->
    </div>
    <!--end:Col-->

    <!--begin:Col-->
    <div class="col-lg-7">
        <img src="../../assets/media/stock/900x600/46.jpg" class="rounded mw-100" alt=""/>
    </div>
    <!--end:Col-->
</div>
<!--end:Row-->        </div>
        <!--end:Tab pane-->

        <!--begin:Tab pane-->
        <div class="tab-pane  w-lg-1000px" id="kt_app_header_menu_pages_authentication">
            <!--begin:Row-->
<div class="row">
    <!--begin:Col-->
    <div class="col-lg-3 mb-6 mb-lg-0">
        <!--begin:Menu section-->
        <div class="mb-6">
            <!--begin:Menu heading-->
            <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Corporate Layout</h4>
            <!--end:Menu heading-->

                            <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="../../authentication/layouts/corporate/sign-in.php" class="menu-link ">
                        <span class="menu-title">Sign-In</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                            <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="../../authentication/layouts/corporate/sign-up.php" class="menu-link ">
                        <span class="menu-title">Sign-Up</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                            <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="../../authentication/layouts/corporate/two-factor.php" class="menu-link ">
                        <span class="menu-title">Two-Factor</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                            <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="../../authentication/layouts/corporate/reset-password.php" class="menu-link ">
                        <span class="menu-title">Reset Password</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                            <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="../../authentication/layouts/corporate/new-password.php" class="menu-link ">
                        <span class="menu-title">New Password</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                    </div>
        <!--end:Menu section-->

        <!--begin:Menu section-->
        <div class="mb-0">
            <!--begin:Menu heading-->
            <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Overlay Layout</h4>
            <!--end:Menu heading-->

                            <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="../../authentication/layouts/overlay/sign-in.php" class="menu-link ">
                        <span class="menu-title">Sign-In</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                            <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="../../authentication/layouts/overlay/sign-up.php" class="menu-link ">
                        <span class="menu-title">Sign-Up</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                            <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="../../authentication/layouts/overlay/two-factor.php" class="menu-link ">
                        <span class="menu-title">Two-Factor</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                            <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="../../authentication/layouts/overlay/reset-password.php" class="menu-link ">
                        <span class="menu-title">Reset Password</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                            <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="../../authentication/layouts/overlay/new-password.php" class="menu-link ">
                        <span class="menu-title">New Password</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                    </div>
        <!--end:Menu section-->
    </div>
    <!--end:Col-->

    <!--begin:Col-->
    <div class="col-lg-3 mb-6 mb-lg-0">
        <!--begin:Menu section-->
        <div class="mb-6">
            <!--begin:Menu heading-->
            <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Creative Layout</h4>
            <!--end:Menu heading-->

                            <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="../../authentication/layouts/creative/sign-in.php" class="menu-link ">
                        <span class="menu-title">Sign-in</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                            <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="../../authentication/layouts/creative/sign-up.php" class="menu-link ">
                        <span class="menu-title">Sign-up</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                            <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="../../authentication/layouts/creative/two-factor.php" class="menu-link ">
                        <span class="menu-title">Two-Factor</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                            <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="../../authentication/layouts/creative/reset-password.php" class="menu-link ">
                        <span class="menu-title">Reset Password</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                            <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="../../authentication/layouts/creative/new-password.php" class="menu-link ">
                        <span class="menu-title">New Password</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                    </div>
        <!--end:Menu section-->

        <!--begin:Menu section-->
        <div class="mb-6">
            <!--begin:Menu heading-->
            <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Fancy Layout</h4>
            <!--end:Menu heading-->

                            <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="../../authentication/layouts/fancy/sign-in.php" class="menu-link ">
                        <span class="menu-title">Sign-In</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                            <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="../../authentication/layouts/fancy/sign-up.php" class="menu-link ">
                        <span class="menu-title">Sign-Up</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                            <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="../../authentication/layouts/fancy/two-factor.php" class="menu-link ">
                        <span class="menu-title">Two-Factor</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                            <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="../../authentication/layouts/fancy/reset-password.php" class="menu-link ">
                        <span class="menu-title">Reset Password</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                            <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="../../authentication/layouts/fancy/new-password.php" class="menu-link ">
                        <span class="menu-title">New Password</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                    </div>
        <!--end:Menu section-->                
    </div>
    <!--end:Col-->

    <!--begin:Col-->
    <div class="col-lg-3 mb-6 mb-lg-0">
        <!--begin:Menu section-->
        <div class="mb-0">
            <!--begin:Menu heading-->
            <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">General</h4>
            <!--end:Menu heading-->

                            <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="../../authentication/extended/multi-steps-sign-up.php" class="menu-link ">
                        <span class="menu-title">Multi-Steps Sign-Up</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                            <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="../../authentication/general/welcome.php" class="menu-link ">
                        <span class="menu-title">Welcome Message</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                            <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="../../authentication/general/verify-email.php" class="menu-link ">
                        <span class="menu-title">Verify Email</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                            <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="../../authentication/general/coming-soon.php" class="menu-link ">
                        <span class="menu-title">Coming Soon</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                            <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="../../authentication/general/password-confirmation.php" class="menu-link ">
                        <span class="menu-title">Password Confirmation</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                            <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="../../authentication/general/account-deactivated.php" class="menu-link ">
                        <span class="menu-title">Account Deactivation</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                            <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="../../authentication/general/error-404.php" class="menu-link ">
                        <span class="menu-title">Error 404</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                            <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="../../authentication/general/error-500.php" class="menu-link ">
                        <span class="menu-title">Error 500</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                    </div>
        <!--end:Menu section-->
    </div>
    <!--end:Col-->

    <!--begin:Col-->
    <div class="col-lg-3 mb-6 mb-lg-0">
        <!--begin:Menu section-->
        <div class="mb-0">
            <!--begin:Menu heading-->
            <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Email Templates</h4>
            <!--end:Menu heading-->

                            <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="../../authentication/email/welcome-message.php" class="menu-link ">
                        <span class="menu-title">Welcome Message</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                            <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="../../authentication/email/reset-password.php" class="menu-link ">
                        <span class="menu-title">Reset Password</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                            <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="../../authentication/email/subscription-confirmed.php" class="menu-link ">
                        <span class="menu-title">Subscription Confirmed</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                            <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="../../authentication/email/card-declined.php" class="menu-link ">
                        <span class="menu-title">Credit Card Declined</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                            <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="../../authentication/email/promo-1.php" class="menu-link ">
                        <span class="menu-title">Promo 1</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                            <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="../../authentication/email/promo-2.php" class="menu-link ">
                        <span class="menu-title">Promo 2</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                            <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="../../authentication/email/promo-3.php" class="menu-link ">
                        <span class="menu-title">Promo 3</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                    </div>
        <!--end:Menu section-->
    </div>
    <!--end:Col-->
</div>
<!--end:Row-->        </div>
        <!--end:Tab pane-->

        <!--begin:Tab pane-->
        <div class="tab-pane  w-lg-1000px" id="kt_app_header_menu_pages_utilities">
            <!--begin:Row-->
<div class="row">
    <!--begin:Col-->
    <div class="col-lg-7">
        <!--begin:Row-->
        <div class="row">
            <!--begin:Col-->
            <div class="col-lg-4 mb-6 mb-lg-0">
                <!--begin:Menu section-->
                <div class="mb-0">
                    <!--begin:Menu heading-->
                    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">General Modals</h4>
                    <!--end:Menu heading-->

                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="../../utilities/modals/general/invite-friends.php" class="menu-link ">
                                <span class="menu-title">Invite Friends</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="../../utilities/modals/general/view-users.php" class="menu-link ">
                                <span class="menu-title">View Users</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="../../utilities/modals/general/select-users.php" class="menu-link ">
                                <span class="menu-title">Select Users</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="../../utilities/modals/general/upgrade-plan.php" class="menu-link ">
                                <span class="menu-title">Upgrade Plan</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="../../utilities/modals/general/share-earn.php" class="menu-link ">
                                <span class="menu-title">Share & Earn</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="../../utilities/modals/forms/new-target.php" class="menu-link ">
                                <span class="menu-title">New Target</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="../../utilities/modals/forms/new-card.php" class="menu-link ">
                                <span class="menu-title">New Card</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="../../utilities/modals/forms/new-address.php" class="menu-link ">
                                <span class="menu-title">New Address</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="../../utilities/modals/forms/create-api-key.php" class="menu-link ">
                                <span class="menu-title">Create API Key</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="../../utilities/modals/forms/bidding.php" class="menu-link ">
                                <span class="menu-title">Bidding</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                    </div>
                <!--end:Menu section-->
            </div>
            <!--end:Col-->

            <!--begin:Col-->
            <div class="col-lg-4 mb-6 mb-lg-0">
                <!--begin:Menu section-->
                <div class="mb-6">
                    <!--begin:Menu heading-->
                    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Advanced Modals</h4>
                    <!--end:Menu heading-->

                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="../../utilities/modals/wizards/create-app.php" class="menu-link ">
                                <span class="menu-title">Create App</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="../../utilities/modals/wizards/create-campaign.php" class="menu-link ">
                                <span class="menu-title">Create Campaign</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="../../utilities/modals/wizards/create-account.php" class="menu-link ">
                                <span class="menu-title">Create Business Acc</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="../../utilities/modals/wizards/create-project.php" class="menu-link ">
                                <span class="menu-title">Create Project</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="../../utilities/modals/wizards/top-up-wallet.php" class="menu-link ">
                                <span class="menu-title">Top Up Wallet</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="../../utilities/modals/wizards/offer-a-deal.php" class="menu-link ">
                                <span class="menu-title">Offer a Deal</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="../../utilities/modals/wizards/two-factor-authentication.php" class="menu-link ">
                                <span class="menu-title">Two Factor Auth</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                    </div>
                <!--end:Menu section-->

                <!--begin:Menu section-->
                <div class="mb-0">
                    <!--begin:Menu heading-->
                    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Search</h4>
                    <!--end:Menu heading-->

                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="../../utilities/search/horizontal.php" class="menu-link ">
                                <span class="menu-title">Horizontal</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="../../utilities/search/vertical.php" class="menu-link ">
                                <span class="menu-title">Vertical</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="../../utilities/modals/search/users.php" class="menu-link ">
                                <span class="menu-title">Users</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="../../utilities/modals/search/select-location.php" class="menu-link ">
                                <span class="menu-title">Select Location</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                    </div>
                <!--end:Menu section-->
            </div>
            <!--end:Col-->

            <!--begin:Col-->
            <div class="col-lg-4 mb-6 mb-lg-0">
                <!--begin:Menu section-->
                <div class="mb-0">
                    <!--begin:Menu heading-->
                    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Wizards</h4>
                    <!--end:Menu heading-->

                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="../../utilities/wizards/horizontal.php" class="menu-link ">
                                <span class="menu-title">Horizontal</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="../../utilities/wizards/vertical.php" class="menu-link ">
                                <span class="menu-title">Vertical</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="../../utilities/wizards/two-factor-authentication.php" class="menu-link ">
                                <span class="menu-title">Two Factor Auth</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="../../utilities/wizards/create-app.php" class="menu-link ">
                                <span class="menu-title">Create App</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="../../utilities/wizards/create-campaign.php" class="menu-link ">
                                <span class="menu-title">Create Campaign</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="../../utilities/wizards/create-account.php" class="menu-link ">
                                <span class="menu-title">Create Account</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="../../utilities/wizards/create-project.php" class="menu-link ">
                                <span class="menu-title">Create Project</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="../../utilities/modals/wizards/top-up-wallet.php" class="menu-link ">
                                <span class="menu-title">Top Up Wallet</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="../../utilities/wizards/offer-a-deal.php" class="menu-link ">
                                <span class="menu-title">Offer a Deal</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                    </div>
                <!--end:Menu section-->
            </div>
            <!--end:Col-->
        </div>
        <!--end:Row-->
    </div>
    <!--end:Col-->

    <!--begin:Col-->
    <div class="col-lg-5 pe-lg-5">
        <img src="../../assets/media/stock/600x600/img-84.jpg" class="rounded mw-100" alt=""/>
    </div>
    <!--end:Col-->
</div>
<!--end:Row-->        </div>
        <!--end:Tab pane-->

        <!--begin:Tab pane-->
        <div class="tab-pane  w-lg-500px" id="kt_app_header_menu_pages_widgets">
            <!--begin:Row-->
<div class="row">
    <!--begin:Col-->
    <div class="col-lg-4 mb-6 mb-lg-0">
                    <!--begin:Menu item-->
            <div class="menu-item p-0 m-0">
                <!--begin:Menu link-->
                <a href="../../widgets/lists.php" class="menu-link ">
                    <span class="menu-title">Lists</span>
                </a>
                <!--end:Menu link-->
            </div>
            <!--end:Menu item-->
                    <!--begin:Menu item-->
            <div class="menu-item p-0 m-0">
                <!--begin:Menu link-->
                <a href="../../widgets/statistics.php" class="menu-link ">
                    <span class="menu-title">Statistics</span>
                </a>
                <!--end:Menu link-->
            </div>
            <!--end:Menu item-->
                    <!--begin:Menu item-->
            <div class="menu-item p-0 m-0">
                <!--begin:Menu link-->
                <a href="../../widgets/charts.php" class="menu-link ">
                    <span class="menu-title">Charts</span>
                </a>
                <!--end:Menu link-->
            </div>
            <!--end:Menu item-->
                    <!--begin:Menu item-->
            <div class="menu-item p-0 m-0">
                <!--begin:Menu link-->
                <a href="../../widgets/mixed.php" class="menu-link ">
                    <span class="menu-title">Mixed</span>
                </a>
                <!--end:Menu link-->
            </div>
            <!--end:Menu item-->
                    <!--begin:Menu item-->
            <div class="menu-item p-0 m-0">
                <!--begin:Menu link-->
                <a href="../../widgets/tables.php" class="menu-link ">
                    <span class="menu-title">Tables</span>
                </a>
                <!--end:Menu link-->
            </div>
            <!--end:Menu item-->
                    <!--begin:Menu item-->
            <div class="menu-item p-0 m-0">
                <!--begin:Menu link-->
                <a href="../../widgets/feeds.php" class="menu-link ">
                    <span class="menu-title">Feeds</span>
                </a>
                <!--end:Menu link-->
            </div>
            <!--end:Menu item-->
            </div>
    <!--end:Col-->

    <!--begin:Col-->
    <div class="col-lg-8">
        <img src="../../assets/media/stock/900x600/44.jpg" class="rounded mw-100" alt=""/>
    </div>
    <!--end:Col-->
</div>
<!--end:Row-->        </div>
        <!--end:Tab pane-->
    </div>
    <!--end:Tab content-->
</div>
<!--end:Pages menu--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start"  class="menu-item here show menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2" ><!--begin:Menu link--><span class="menu-link" ><span  class="menu-title" >Apps</span><span  class="menu-arrow d-lg-none" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-250px" ><!--begin:Menu item--><div  data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start"  class="menu-item menu-lg-down-accordion" ><!--begin:Menu link--><span class="menu-link" ><span  class="menu-icon" ><i class="ki-outline ki-rocket fs-2"></i></span><span  class="menu-title" >Projects</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px" ><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="../projects/list.php" ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >My Projects</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="../projects/project.php" ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >View Project</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="../projects/targets.php" ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Targets</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="../projects/budget.php" ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Budget</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="../projects/users.php" ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Users</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="../projects/files.php" ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Files</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="../projects/activity.php" ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Activity</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="../projects/settings.php" ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Settings</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start"  class="menu-item menu-lg-down-accordion" ><!--begin:Menu link--><span class="menu-link" ><span  class="menu-icon" ><i class="ki-outline ki-handcart fs-2"></i></span><span  class="menu-title" >eCommerce</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px" ><!--begin:Menu item--><div  data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start"  class="menu-item menu-lg-down-accordion" ><!--begin:Menu link--><span class="menu-link" ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Catalog</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px" ><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="../ecommerce/catalog/products.php" ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Products</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="../ecommerce/catalog/categories.php" ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Categories</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="../ecommerce/catalog/add-product.php" ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Add Product</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="../ecommerce/catalog/edit-product.php" ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Edit Product</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="../ecommerce/catalog/add-category.php" ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Add Category</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="../ecommerce/catalog/edit-category.php" ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Edit Category</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  data-kt-menu-trigger="click"  class="menu-item menu-accordion menu-sub-indention" ><!--begin:Menu link--><span class="menu-link" ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Sales</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-accordion" ><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="../ecommerce/sales/listing.php" ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Orders Listing</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="../ecommerce/sales/details.php" ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Order Details</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="../ecommerce/sales/add-order.php" ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Add Order</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="../ecommerce/sales/edit-order.php" ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Edit Order</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  data-kt-menu-trigger="click"  class="menu-item menu-accordion menu-sub-indention" ><!--begin:Menu link--><span class="menu-link" ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Customers</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-accordion" ><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="../ecommerce/customers/listing.php" ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Customers Listing</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="../ecommerce/customers/details.php" ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Customers Details</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  data-kt-menu-trigger="click"  class="menu-item menu-accordion menu-sub-indention" ><!--begin:Menu link--><span class="menu-link" ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Reports</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-accordion" ><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="../ecommerce/reports/view.php" ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Products Viewed</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="../ecommerce/reports/sales.php" ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Sales</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="../ecommerce/reports/returns.php" ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Returns</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="../ecommerce/reports/customer-orders.php" ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Customer Orders</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="../ecommerce/reports/shipping.php" ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Shipping</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="../ecommerce/settings.php" ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Settings</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start"  class="menu-item menu-lg-down-accordion" ><!--begin:Menu link--><span class="menu-link" ><span  class="menu-icon" ><i class="ki-outline ki-chart fs-2"></i></span><span  class="menu-title" >Support Center</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px" ><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="../support-center/overview.php" ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Overview</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start"  class="menu-item menu-lg-down-accordion" ><!--begin:Menu link--><span class="menu-link" ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Tickets</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px" ><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="../support-center/tickets/list.php" ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Ticket List</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="../support-center/tickets/view.php" ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Ticket View</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start"  class="menu-item menu-lg-down-accordion" ><!--begin:Menu link--><span class="menu-link" ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Tutorials</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px" ><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="../support-center/tutorials/list.php" ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Tutorials List</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="../support-center/tutorials/post.php" ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Tutorials Post</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="../support-center/faq.php" ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >FAQ</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="../support-center/licenses.php" ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Licenses</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="../support-center/contact.php" ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Contact Us</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start"  class="menu-item menu-lg-down-accordion" ><!--begin:Menu link--><span class="menu-link" ><span  class="menu-icon" ><i class="ki-outline ki-shield-tick fs-2"></i></span><span  class="menu-title" >User Management</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px" ><!--begin:Menu item--><div  data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start"  class="menu-item menu-lg-down-accordion" ><!--begin:Menu link--><span class="menu-link" ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Users</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px" ><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="../user-management/users/list.php" ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Users List</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="../user-management/users/view.php" ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >View User</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start"  class="menu-item menu-lg-down-accordion" ><!--begin:Menu link--><span class="menu-link" ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Roles</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px" ><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="../user-management/roles/list.php" ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Roles List</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="../user-management/roles/view.php" ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >View Roles</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="../user-management/permissions.php" ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Permissions</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start"  class="menu-item menu-lg-down-accordion" ><!--begin:Menu link--><span class="menu-link" ><span  class="menu-icon" ><i class="ki-outline ki-phone fs-2"></i></span><span  class="menu-title" >Contacts</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px" ><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="../contacts/getting-started.php" ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Getting Started</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="../contacts/add-contact.php" ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Add Contact</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="../contacts/edit-contact.php" ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Edit Contact</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="../contacts/view-contact.php" ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >View Contact</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start"  class="menu-item menu-lg-down-accordion" ><!--begin:Menu link--><span class="menu-link" ><span  class="menu-icon" ><i class="ki-outline ki-basket fs-2"></i></span><span  class="menu-title" >Subscriptions</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px" ><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="../subscriptions/getting-started.php" ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Getting Started</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="../subscriptions/list.php" ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Subscription List</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="../subscriptions/add.php" ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Add Subscription</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="../subscriptions/view.php" ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >View Subscription</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start"  class="menu-item menu-lg-down-accordion" ><!--begin:Menu link--><span class="menu-link" ><span  class="menu-icon" ><i class="ki-outline ki-briefcase fs-2"></i></span><span  class="menu-title" >Customers</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px" ><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="../customers/getting-started.php" ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Getting Started</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="../customers/list.php" ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Customer Listing</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="../customers/view.php" ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Customer Details</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start"  class="menu-item menu-lg-down-accordion" ><!--begin:Menu link--><span class="menu-link" ><span  class="menu-icon" ><i class="ki-outline ki-credit-cart fs-2"></i></span><span  class="menu-title" >Invoice Management</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px" ><!--begin:Menu item--><div  data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start"  class="menu-item menu-lg-down-accordion" ><!--begin:Menu link--><span class="menu-link" ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Profile</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px" ><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="../invoices/view/invoice-1.php" ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Invoice 1</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="../invoices/view/invoice-2.php" ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Invoice 2</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="../invoices/view/invoice-3.php" ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Invoice 3</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="../invoices/create.php" ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Create Invoice</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start"  class="menu-item here show menu-lg-down-accordion" ><!--begin:Menu link--><span class="menu-link" ><span  class="menu-icon" ><i class="ki-outline ki-file-added fs-2"></i></span><span  class="menu-title" >File Manager</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px" ><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="folders.php" ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Folders</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link active"  href="files.php" ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Files</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="blank.php" ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Blank Directory</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="settings.php" ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Settings</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start"  class="menu-item menu-lg-down-accordion" ><!--begin:Menu link--><span class="menu-link" ><span  class="menu-icon" ><i class="ki-outline ki-sms fs-2"></i></span><span  class="menu-title" >Inbox</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px" ><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="../inbox/listing.php" ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Messages</span><span  class="menu-badge" ><span class="badge badge-light-success">3</span></span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="../inbox/compose.php" ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Compose</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="../inbox/reply.php" ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >View & Reply</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start"  class="menu-item menu-lg-down-accordion" ><!--begin:Menu link--><span class="menu-link" ><span  class="menu-icon" ><i class="ki-outline ki-message-text-2 fs-2"></i></span><span  class="menu-title" >Chat</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px" ><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="../chat/private.php" ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Private Chat</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="../chat/group.php" ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Group Chat</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="../chat/drawer.php" ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Drawer Chat</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="../calendar.php" ><span  class="menu-icon" ><i class="ki-outline ki-calendar-8 fs-2"></i></span><span  class="menu-title" >Calendar</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start"  class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2" ><!--begin:Menu link--><span class="menu-link" ><span  class="menu-title" >Help</span><span  class="menu-arrow d-lg-none" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-200px" ><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/html/metronic/docs/base/utilities" target="_blank" title="Check out over 200 in-house components, plugins and ready for use solutions" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right" ><span  class="menu-icon" ><i class="ki-outline ki-rocket fs-2"></i></span><span  class="menu-title" >Components</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/html/metronic/docs" target="_blank" title="Check out the complete documentation" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right" ><span  class="menu-icon" ><i class="ki-outline ki-abstract-26 fs-2"></i></span><span  class="menu-title" >Documentation</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="../../layout-builder.php" title="Build your layout and export HTML for server side integration" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right" ><span  class="menu-icon" ><i class="ki-outline ki-switch fs-2"></i></span><span  class="menu-title" >Layout Builder</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/html/metronic/docs/getting-started/changelog" target="_blank" ><span  class="menu-icon" ><i class="ki-outline ki-code fs-2"></i></span><span  class="menu-title" >Changelog v8.1.8</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item-->    </div>
    <!--end::Menu-->
</div>
<!--end::Menu wrapper-->
	
<!--begin::Navbar-->
<div class="app-navbar flex-shrink-0">
    <!--begin::Search-->    
    <div class="d-flex align-items-center align-items-stretch mx-4">
        
<!--begin::Search-->
<div 
    id="kt_header_search" 
    class="header-search d-flex align-items-center w-lg-200px"
    
    data-kt-search-keypress="true"
    data-kt-search-min-length="2"
    data-kt-search-enter="enter"     
    data-kt-search-layout="menu"
    data-kt-search-responsive="lg"
    
    data-kt-menu-trigger="auto" 
    data-kt-menu-permanent="true" 
    data-kt-menu-placement="bottom-start"

    
        >
    
            <!--begin::Tablet and mobile search toggle-->
        <div data-kt-search-element="toggle" class="search-toggle-mobile d-flex d-lg-none align-items-center">
            <div class="d-flex ">
                                    <i class="ki-outline ki-magnifier fs-1 "></i>                            </div>
        </div>
        <!--end::Tablet and mobile search toggle-->
    
    <!--begin::Form(use d-none d-lg-block classes for responsive search)-->
<form data-kt-search-element="form" class="d-none d-lg-block w-100 position-relative mb-5 mb-lg-0" autocomplete="off">	
    <!--begin::Hidden input(Added to disable form autocomplete)-->
    <input type="hidden"/>
    <!--end::Hidden input-->

    <!--begin::Icon-->
    <i class="ki-outline ki-magnifier search-icon fs-2 text-gray-500 position-absolute top-50 translate-middle-y ms-5"></i>    <!--end::Icon-->

    <!--begin::Input-->
    <input type="text" class="search-input form-control form-control  ps-13" name="search" value="" placeholder="Search..." data-kt-search-element="input"/>
    <!--end::Input-->

    <!--begin::Spinner-->
    <span class="search-spinner  position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5" data-kt-search-element="spinner">
        <span class="spinner-border h-15px w-15px align-middle text-gray-400"></span>
    </span>
    <!--end::Spinner-->

    <!--begin::Reset-->
    <span class="search-reset  btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-4" data-kt-search-element="clear">
        <i class="ki-outline ki-cross fs-2 fs-lg-1 me-0"></i>    </span>
    <!--end::Reset-->
</form>
<!--end::Form-->
    <!--begin::Menu-->
    <div data-kt-search-element="content" class="menu menu-sub menu-sub-dropdown py-7 px-7 overflow-hidden w-300px w-md-350px">
        <!--begin::Wrapper-->
        <div data-kt-search-element="wrapper">
            <!--begin::Recently viewed-->
<div data-kt-search-element="results" class="d-none">
    <!--begin::Items-->
    <div class="scroll-y mh-200px mh-lg-350px">
                    <!--begin::Category title-->
            <h3 class="fs-5 text-muted m-0  pb-5" data-kt-search-element="category-title">
                Users            </h3>
            <!--end::Category title-->

                            
                
                
                                    <!--begin::Item-->
                    <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-40px me-4">
                            <img src="../../assets/media/avatars/300-6.jpg" alt=""/>
                        </div>
                        <!--end::Symbol-->

                        <!--begin::Title-->
                        <div class="d-flex flex-column justify-content-start fw-semibold">
                            <span class="fs-6 fw-semibold">Karina Clark</span>
                            <span class="fs-7 fw-semibold text-muted">Marketing Manager</span>
                        </div>
                        <!--end::Title-->
                    </a>
                    <!--end::Item-->
                                            
                
                
                                    <!--begin::Item-->
                    <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-40px me-4">
                            <img src="../../assets/media/avatars/300-2.jpg" alt=""/>
                        </div>
                        <!--end::Symbol-->

                        <!--begin::Title-->
                        <div class="d-flex flex-column justify-content-start fw-semibold">
                            <span class="fs-6 fw-semibold">Olivia Bold</span>
                            <span class="fs-7 fw-semibold text-muted">Software Engineer</span>
                        </div>
                        <!--end::Title-->
                    </a>
                    <!--end::Item-->
                                            
                
                
                                    <!--begin::Item-->
                    <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-40px me-4">
                            <img src="../../assets/media/avatars/300-9.jpg" alt=""/>
                        </div>
                        <!--end::Symbol-->

                        <!--begin::Title-->
                        <div class="d-flex flex-column justify-content-start fw-semibold">
                            <span class="fs-6 fw-semibold">Ana Clark</span>
                            <span class="fs-7 fw-semibold text-muted">UI/UX Designer</span>
                        </div>
                        <!--end::Title-->
                    </a>
                    <!--end::Item-->
                                            
                
                
                                    <!--begin::Item-->
                    <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-40px me-4">
                            <img src="../../assets/media/avatars/300-14.jpg" alt=""/>
                        </div>
                        <!--end::Symbol-->

                        <!--begin::Title-->
                        <div class="d-flex flex-column justify-content-start fw-semibold">
                            <span class="fs-6 fw-semibold">Nick Pitola</span>
                            <span class="fs-7 fw-semibold text-muted">Art Director</span>
                        </div>
                        <!--end::Title-->
                    </a>
                    <!--end::Item-->
                                            
                
                
                                    <!--begin::Item-->
                    <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-40px me-4">
                            <img src="../../assets/media/avatars/300-11.jpg" alt=""/>
                        </div>
                        <!--end::Symbol-->

                        <!--begin::Title-->
                        <div class="d-flex flex-column justify-content-start fw-semibold">
                            <span class="fs-6 fw-semibold">Edward Kulnic</span>
                            <span class="fs-7 fw-semibold text-muted">System Administrator</span>
                        </div>
                        <!--end::Title-->
                    </a>
                    <!--end::Item-->
                                                <!--begin::Category title-->
            <h3 class="fs-5 text-muted m-0 pt-5 pb-5" data-kt-search-element="category-title">
                Customers            </h3>
            <!--end::Category title-->

                            
                
                                    <!--begin::Item-->
                    <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-40px me-4">
                            <span class="symbol-label bg-light">                             
                                <img class="w-20px h-20px" src="../../assets/media/svg/brand-logos/volicity-9.svg" alt=""/>                          
                            </span>
                        </div>
                        <!--end::Symbol-->

                        <!--begin::Title-->
                        <div class="d-flex flex-column justify-content-start fw-semibold">
                            <span class="fs-6 fw-semibold">Company Rbranding</span>
                            <span class="fs-7 fw-semibold text-muted">UI Design</span>
                        </div>
                        <!--end::Title-->
                    </a>
                    <!--end::Item-->
                
                                            
                
                                    <!--begin::Item-->
                    <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-40px me-4">
                            <span class="symbol-label bg-light">                             
                                <img class="w-20px h-20px" src="../../assets/media/svg/brand-logos/tvit.svg" alt=""/>                          
                            </span>
                        </div>
                        <!--end::Symbol-->

                        <!--begin::Title-->
                        <div class="d-flex flex-column justify-content-start fw-semibold">
                            <span class="fs-6 fw-semibold">Company Re-branding</span>
                            <span class="fs-7 fw-semibold text-muted">Web Development</span>
                        </div>
                        <!--end::Title-->
                    </a>
                    <!--end::Item-->
                
                                            
                
                                    <!--begin::Item-->
                    <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-40px me-4">
                            <span class="symbol-label bg-light">                             
                                <img class="w-20px h-20px" src="../../assets/media/svg/misc/infography.svg" alt=""/>                          
                            </span>
                        </div>
                        <!--end::Symbol-->

                        <!--begin::Title-->
                        <div class="d-flex flex-column justify-content-start fw-semibold">
                            <span class="fs-6 fw-semibold">Business Analytics App</span>
                            <span class="fs-7 fw-semibold text-muted">Administration</span>
                        </div>
                        <!--end::Title-->
                    </a>
                    <!--end::Item-->
                
                                            
                
                                    <!--begin::Item-->
                    <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-40px me-4">
                            <span class="symbol-label bg-light">                             
                                <img class="w-20px h-20px" src="../../assets/media/svg/brand-logos/leaf.svg" alt=""/>                          
                            </span>
                        </div>
                        <!--end::Symbol-->

                        <!--begin::Title-->
                        <div class="d-flex flex-column justify-content-start fw-semibold">
                            <span class="fs-6 fw-semibold">EcoLeaf App Launch</span>
                            <span class="fs-7 fw-semibold text-muted">Marketing</span>
                        </div>
                        <!--end::Title-->
                    </a>
                    <!--end::Item-->
                
                                            
                
                                    <!--begin::Item-->
                    <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-40px me-4">
                            <span class="symbol-label bg-light">                             
                                <img class="w-20px h-20px" src="../../assets/media/svg/brand-logos/tower.svg" alt=""/>                          
                            </span>
                        </div>
                        <!--end::Symbol-->

                        <!--begin::Title-->
                        <div class="d-flex flex-column justify-content-start fw-semibold">
                            <span class="fs-6 fw-semibold">Tower Group Website</span>
                            <span class="fs-7 fw-semibold text-muted">Google Adwords</span>
                        </div>
                        <!--end::Title-->
                    </a>
                    <!--end::Item-->
                
                                                <!--begin::Category title-->
            <h3 class="fs-5 text-muted m-0 pt-5 pb-5" data-kt-search-element="category-title">
                Projects            </h3>
            <!--end::Category title-->

                            
                                    <!--begin::Item-->
                    <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-40px me-4">
                            <span class="symbol-label bg-light">                             
                                <i class="ki-outline ki-notepad fs-2 text-primary"></i>                          
                            </span>
                        </div>
                        <!--end::Symbol-->

                        <!--begin::Title-->
                        <div class="d-flex flex-column">
                            <span class="fs-6 fw-semibold">Si-Fi Project by AU Themes</span>
                            <span class="fs-7 fw-semibold text-muted">#45670</span>
                        </div>
                        <!--end::Title-->
                    </a>
                    <!--end::Item-->
                
                
                                            
                                    <!--begin::Item-->
                    <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-40px me-4">
                            <span class="symbol-label bg-light">                             
                                <i class="ki-outline ki-frame fs-2 text-primary"></i>                          
                            </span>
                        </div>
                        <!--end::Symbol-->

                        <!--begin::Title-->
                        <div class="d-flex flex-column">
                            <span class="fs-6 fw-semibold">Shopix Mobile App Planning</span>
                            <span class="fs-7 fw-semibold text-muted">#45690</span>
                        </div>
                        <!--end::Title-->
                    </a>
                    <!--end::Item-->
                
                
                                            
                                    <!--begin::Item-->
                    <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-40px me-4">
                            <span class="symbol-label bg-light">                             
                                <i class="ki-outline ki-message-text-2 fs-2 text-primary"></i>                          
                            </span>
                        </div>
                        <!--end::Symbol-->

                        <!--begin::Title-->
                        <div class="d-flex flex-column">
                            <span class="fs-6 fw-semibold">Finance Monitoring SAAS Discussion</span>
                            <span class="fs-7 fw-semibold text-muted">#21090</span>
                        </div>
                        <!--end::Title-->
                    </a>
                    <!--end::Item-->
                
                
                                            
                                    <!--begin::Item-->
                    <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-40px me-4">
                            <span class="symbol-label bg-light">                             
                                <i class="ki-outline ki-profile-circle fs-2 text-primary"></i>                          
                            </span>
                        </div>
                        <!--end::Symbol-->

                        <!--begin::Title-->
                        <div class="d-flex flex-column">
                            <span class="fs-6 fw-semibold">Dashboard Analitics Launch</span>
                            <span class="fs-7 fw-semibold text-muted">#34560</span>
                        </div>
                        <!--end::Title-->
                    </a>
                    <!--end::Item-->
                
                
                                        </div>
    <!--end::Items-->
</div>
<!--end::Recently viewed-->
            <!--begin::Recently viewed-->
<div class="" data-kt-search-element="main">
    <!--begin::Heading-->
    <div class="d-flex flex-stack fw-semibold mb-4">
        <!--begin::Label-->
        <span class="text-muted fs-6 me-2">Recently Searched:</span>
        <!--end::Label-->

                    <!--begin::Toolbar-->
            <div class="d-flex" data-kt-search-element="toolbar">
                <!--begin::Preferences toggle-->
                <div data-kt-search-element="preferences-show" class="btn btn-icon w-20px btn-sm btn-active-color-primary me-2 data-bs-toggle="tooltip" title="Show search preferences">
                    <i class="ki-outline ki-setting-2 fs-2"></i>                </div>
                <!--end::Preferences toggle-->

                <!--begin::Advanced search toggle-->
                <div data-kt-search-element="advanced-options-form-show" class="btn btn-icon w-20px btn-sm btn-active-color-primary me-n1" data-bs-toggle="tooltip" title="Show more search options">
                    <i class="ki-outline ki-down fs-2"></i>                </div>
                <!--end::Advanced search toggle-->
            </div>
            <!--end::Toolbar-->
            </div>
    <!--end::Heading-->

    <!--begin::Items-->
    <div class="scroll-y mh-200px mh-lg-325px">
                    <!--begin::Item-->
            <div class="d-flex align-items-center mb-5">
                <!--begin::Symbol-->
                <div class="symbol symbol-40px me-4">
                    <span class="symbol-label bg-light">                             
                        <i class="ki-outline ki-laptop fs-2 text-primary"></i>                          
                    </span>
                </div>
                <!--end::Symbol-->

                <!--begin::Title-->
                <div class="d-flex flex-column">
                    <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">BoomApp by Keenthemes</a>
                    <span class="fs-7 text-muted fw-semibold">#45789</span>
                </div>
                <!--end::Title-->
            </div>
            <!--end::Item-->
                    <!--begin::Item-->
            <div class="d-flex align-items-center mb-5">
                <!--begin::Symbol-->
                <div class="symbol symbol-40px me-4">
                    <span class="symbol-label bg-light">                             
                        <i class="ki-outline ki-chart-simple fs-2 text-primary"></i>                          
                    </span>
                </div>
                <!--end::Symbol-->

                <!--begin::Title-->
                <div class="d-flex flex-column">
                    <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">"Kept API Project Meeting</a>
                    <span class="fs-7 text-muted fw-semibold">#84050</span>
                </div>
                <!--end::Title-->
            </div>
            <!--end::Item-->
                    <!--begin::Item-->
            <div class="d-flex align-items-center mb-5">
                <!--begin::Symbol-->
                <div class="symbol symbol-40px me-4">
                    <span class="symbol-label bg-light">                             
                        <i class="ki-outline ki-chart fs-2 text-primary"></i>                          
                    </span>
                </div>
                <!--end::Symbol-->

                <!--begin::Title-->
                <div class="d-flex flex-column">
                    <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">"KPI Monitoring App Launch</a>
                    <span class="fs-7 text-muted fw-semibold">#84250</span>
                </div>
                <!--end::Title-->
            </div>
            <!--end::Item-->
                    <!--begin::Item-->
            <div class="d-flex align-items-center mb-5">
                <!--begin::Symbol-->
                <div class="symbol symbol-40px me-4">
                    <span class="symbol-label bg-light">                             
                        <i class="ki-outline ki-chart-line-down fs-2 text-primary"></i>                          
                    </span>
                </div>
                <!--end::Symbol-->

                <!--begin::Title-->
                <div class="d-flex flex-column">
                    <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">Project Reference FAQ</a>
                    <span class="fs-7 text-muted fw-semibold">#67945</span>
                </div>
                <!--end::Title-->
            </div>
            <!--end::Item-->
                    <!--begin::Item-->
            <div class="d-flex align-items-center mb-5">
                <!--begin::Symbol-->
                <div class="symbol symbol-40px me-4">
                    <span class="symbol-label bg-light">                             
                        <i class="ki-outline ki-sms fs-2 text-primary"></i>                          
                    </span>
                </div>
                <!--end::Symbol-->

                <!--begin::Title-->
                <div class="d-flex flex-column">
                    <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">"FitPro App Development</a>
                    <span class="fs-7 text-muted fw-semibold">#84250</span>
                </div>
                <!--end::Title-->
            </div>
            <!--end::Item-->
                    <!--begin::Item-->
            <div class="d-flex align-items-center mb-5">
                <!--begin::Symbol-->
                <div class="symbol symbol-40px me-4">
                    <span class="symbol-label bg-light">                             
                        <i class="ki-outline ki-bank fs-2 text-primary"></i>                          
                    </span>
                </div>
                <!--end::Symbol-->

                <!--begin::Title-->
                <div class="d-flex flex-column">
                    <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">Shopix Mobile App</a>
                    <span class="fs-7 text-muted fw-semibold">#45690</span>
                </div>
                <!--end::Title-->
            </div>
            <!--end::Item-->
                    <!--begin::Item-->
            <div class="d-flex align-items-center mb-5">
                <!--begin::Symbol-->
                <div class="symbol symbol-40px me-4">
                    <span class="symbol-label bg-light">                             
                        <i class="ki-outline ki-chart-line-down fs-2 text-primary"></i>                          
                    </span>
                </div>
                <!--end::Symbol-->

                <!--begin::Title-->
                <div class="d-flex flex-column">
                    <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">"Landing UI Design" Launch</a>
                    <span class="fs-7 text-muted fw-semibold">#24005</span>
                </div>
                <!--end::Title-->
            </div>
            <!--end::Item-->
            </div>
    <!--end::Items-->
</div>
<!--end::Recently viewed-->
            <!--begin::Empty-->
<div data-kt-search-element="empty" class="text-center d-none">
    <!--begin::Icon-->
    <div class="pt-10 pb-10">
        <i class="ki-outline ki-search-list fs-4x opacity-50"></i>    </div>
    <!--end::Icon-->

    <!--begin::Message-->
    <div class="pb-15 fw-semibold">
        <h3 class="text-gray-600 fs-5 mb-2">No result found</h3>
        <div class="text-muted fs-7">Please try again with a different query</div>
    </div>
    <!--end::Message-->
</div>
<!--end::Empty-->        </div>
        <!--end::Wrapper-->

        <!--begin::Preferences-->
<form data-kt-search-element="advanced-options-form" class="pt-1 d-none">
    <!--begin::Heading-->
    <h3 class="fw-semibold text-dark mb-7">Advanced Search</h3>
    <!--end::Heading-->

    <!--begin::Input group-->
    <div class="mb-5">
        <input type="text" class="form-control form-control-sm form-control-solid" placeholder="Contains the word" name="query"/>
    </div>
    <!--end::Input group-->

    <!--begin::Input group-->
    <div class="mb-5">
        <!--begin::Radio group-->
        <div class="nav-group nav-group-fluid">       
            <!--begin::Option-->     
            <label>     
                <input type="radio" class="btn-check" name="type" value="has" checked="checked"/>
                <span class="btn btn-sm btn-color-muted btn-active btn-active-primary">
                    All
                </span>
            </label>
            <!--end::Option-->

            <!--begin::Option-->          
            <label>  
                <input type="radio" class="btn-check" name="type" value="users"/>
                <span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">
                    Users
                </span>
            </label>
            <!--end::Option-->

            <!--begin::Option-->        
            <label>    
                <input type="radio" class="btn-check" name="type" value="orders"/>
                <span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">
                    Orders
                </span>
            </label>
            <!--end::Option-->

            <!--begin::Option-->     
            <label>       
                <input type="radio" class="btn-check" name="type" value="projects"/>
                <span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">
                    Projects
                </span>
            </label>
            <!--end::Option-->
        </div>
        <!--end::Radio group-->
    </div>
    <!--end::Input group-->

    <!--begin::Input group-->
    <div class="mb-5">
        <input type="text" name="assignedto" class="form-control form-control-sm form-control-solid" placeholder="Assigned to" value=""/>
    </div>
    <!--end::Input group-->

    <!--begin::Input group-->
    <div class="mb-5">
        <input type="text" name="collaborators" class="form-control form-control-sm form-control-solid" placeholder="Collaborators" value=""/>
    </div>
    <!--end::Input group-->

    <!--begin::Input group-->
    <div class="mb-5">
        <!--begin::Radio group-->
        <div class="nav-group nav-group-fluid"> 
            <!--begin::Option-->     
            <label>     
                <input type="radio" class="btn-check" name="attachment" value="has" checked="checked"/>
                <span class="btn btn-sm btn-color-muted btn-active btn-active-primary">
                    Has attachment
                </span>
            </label>
            <!--end::Option-->

            <!--begin::Option-->          
            <label>  
                <input type="radio" class="btn-check" name="attachment" value="any"/>
                <span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">
                    Any
                </span>
            </label>
            <!--end::Option-->
        </div>
        <!--end::Radio group-->
    </div>
    <!--end::Input group-->

    <!--begin::Input group-->
    <div class="mb-5">
        <select name="timezone" aria-label="Select a Timezone" data-control="select2" data-dropdown-parent="#kt_header_search" data-placeholder="date_period" class="form-select form-select-sm form-select-solid">
            <option value="next">Within the next</option>
            <option value="last">Within the last</option>
            <option value="between">Between</option>
            <option value="on">On</option>
        </select>
    </div>
    <!--end::Input group-->

    <!--begin::Input group-->
    <div class="row mb-8">
        <!--begin::Col-->
        <div class="col-6"> 
            <input type="number" name="date_number" class="form-control form-control-sm form-control-solid" placeholder="Lenght" value=""/>
        </div>
        <!--end::Col-->

        <!--begin::Col-->
        <div class="col-6"> 
            <select name="date_typer" aria-label="Select a Timezone" data-control="select2" data-dropdown-parent="#kt_header_search" data-placeholder="Period" class="form-select form-select-sm form-select-solid">
                <option value="days">Days</option>
                <option value="weeks">Weeks</option>
                <option value="months">Months</option>
                <option value="years">Years</option>
            </select>
        </div>
        <!--end::Col-->
    </div>
    <!--end::Input group-->

    <!--begin::Actions-->
    <div class="d-flex justify-content-end">
        <button type="reset" class="btn btn-sm btn-light fw-bold btn-active-light-primary me-2" data-kt-search-element="advanced-options-form-cancel">Cancel</button>

        <a href="../../pages/search/horizontal.php" class="btn btn-sm fw-bold btn-primary" data-kt-search-element="advanced-options-form-search">Search</a>
    </div>
    <!--end::Actions-->
</form>
<!--end::Preferences-->
        <!--begin::Preferences-->
<form data-kt-search-element="preferences" class="pt-1 d-none">
    <!--begin::Heading-->
    <h3 class="fw-semibold text-dark mb-7">Search Preferences</h3>
    <!--end::Heading-->

    <!--begin::Input group-->
    <div class="pb-4 border-bottom">
        <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
            <span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">
                Projects
            </span>

            <input class="form-check-input" type="checkbox" value="1" checked="checked"/>
        </label>
    </div>
    <!--end::Input group-->

    <!--begin::Input group-->
    <div class="py-4 border-bottom">
        <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
            <span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">
                Targets
            </span>
            <input class="form-check-input" type="checkbox" value="1" checked="checked"/>
        </label>
    </div>
    <!--end::Input group-->

    <!--begin::Input group-->
    <div class="py-4 border-bottom">
        <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
            <span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">
                Affiliate Programs
            </span>
            <input class="form-check-input" type="checkbox" value="1" />
        </label>
    </div>
    <!--end::Input group-->

    <!--begin::Input group-->
    <div class="py-4 border-bottom">
        <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
            <span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">
                Referrals
            </span>
            <input class="form-check-input" type="checkbox" value="1" checked="checked"/>
        </label>
    </div>
    <!--end::Input group-->

    <!--begin::Input group-->
    <div class="py-4 border-bottom">
        <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
            <span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">
                Users
            </span>
            <input class="form-check-input" type="checkbox" value="1" />
        </label>
    </div>
    <!--end::Input group-->

    <!--begin::Actions-->
    <div class="d-flex justify-content-end pt-7">
        <button type="reset" class="btn btn-sm btn-light fw-bold btn-active-light-primary me-2" data-kt-search-element="preferences-dismiss">Cancel</button>
        <button type="submit" class="btn btn-sm fw-bold btn-primary">Save Changes</button>
    </div>
    <!--end::Actions-->
</form>
<!--end::Preferences-->    </div>
    <!--end::Menu-->
</div>
<!--end::Search-->    </div>        
    <!--end::Search-->  
    
    <!--begin::Notifications-->
    <div class="app-navbar-item ms-1 ms-lg-5">
        <!--begin::Menu- wrapper-->
        <div class="btn btn-icon btn-custom btn-color-gray-600 btn-active-light btn-active-color-primary w-35px h-35px w-md-40px h-md-40px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom">
            <i class="ki-outline ki-calendar fs-1"></i>  
        </div>
        
<!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column w-350px w-lg-375px" data-kt-menu="true" id="kt_menu_notifications">
	<!--begin::Heading-->
    <div class="d-flex flex-column bgi-no-repeat rounded-top" style="background-image:url('../../assets/media/misc/menu-header-bg.jpg')">
        <!--begin::Title-->                                   
        <h3 class="text-white fw-semibold px-9 mt-10 mb-6">
            Notifications <span class="fs-8 opacity-75 ps-3">24 reports</span>
        </h3>
        <!--end::Title-->

        <!--begin::Tabs-->
        <ul class="nav nav-line-tabs nav-line-tabs-2x nav-stretch fw-semibold px-9">
            <li class="nav-item">
                <a class="nav-link text-white opacity-75 opacity-state-100 pb-4" data-bs-toggle="tab" href="#kt_topbar_notifications_1">Alerts</a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white opacity-75 opacity-state-100 pb-4 active" data-bs-toggle="tab" href="#kt_topbar_notifications_2">Updates</a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white opacity-75 opacity-state-100 pb-4" data-bs-toggle="tab" href="#kt_topbar_notifications_3">Logs</a>
            </li>
        </ul>
        <!--end::Tabs-->
    </div>
	<!--end::Heading-->

    <!--begin::Tab content-->
    <div class="tab-content">
        <!--begin::Tab panel-->
        <div class="tab-pane fade" id="kt_topbar_notifications_1" role="tabpanel">
            <!--begin::Items-->
            <div class="scroll-y mh-325px my-5 px-8">
                                    <!--begin::Item-->
                    <div class="d-flex flex-stack py-4">
                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-35px me-4">
                                <span class="symbol-label bg-light-primary">      
                                    <i class="ki-outline ki-abstract-28 fs-2 text-primary"></i>                                                    
                                </span>
                            </div>
                            <!--end::Symbol-->

                            <!--begin::Title-->
                            <div class="mb-0 me-2">
                                <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Project Alice</a>
                                <div class="text-gray-400 fs-7">Phase 1 development</div>
                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::Section-->

                        <!--begin::Label-->
                        <span class="badge badge-light fs-8">1 hr</span>
                        <!--end::Label-->
                    </div>
                    <!--end::Item-->
                                    <!--begin::Item-->
                    <div class="d-flex flex-stack py-4">
                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-35px me-4">
                                <span class="symbol-label bg-light-danger">      
                                    <i class="ki-outline ki-information fs-2 text-danger"></i>                                                    
                                </span>
                            </div>
                            <!--end::Symbol-->

                            <!--begin::Title-->
                            <div class="mb-0 me-2">
                                <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">HR Confidential</a>
                                <div class="text-gray-400 fs-7">Confidential staff documents</div>
                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::Section-->

                        <!--begin::Label-->
                        <span class="badge badge-light fs-8">2 hrs</span>
                        <!--end::Label-->
                    </div>
                    <!--end::Item-->
                                    <!--begin::Item-->
                    <div class="d-flex flex-stack py-4">
                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-35px me-4">
                                <span class="symbol-label bg-light-warning">      
                                    <i class="ki-outline ki-briefcase fs-2 text-warning"></i>                                                    
                                </span>
                            </div>
                            <!--end::Symbol-->

                            <!--begin::Title-->
                            <div class="mb-0 me-2">
                                <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Company HR</a>
                                <div class="text-gray-400 fs-7">Corporeate staff profiles</div>
                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::Section-->

                        <!--begin::Label-->
                        <span class="badge badge-light fs-8">5 hrs</span>
                        <!--end::Label-->
                    </div>
                    <!--end::Item-->
                                    <!--begin::Item-->
                    <div class="d-flex flex-stack py-4">
                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-35px me-4">
                                <span class="symbol-label bg-light-success">      
                                    <i class="ki-outline ki-abstract-12 fs-2 text-success"></i>                                                    
                                </span>
                            </div>
                            <!--end::Symbol-->

                            <!--begin::Title-->
                            <div class="mb-0 me-2">
                                <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Project Redux</a>
                                <div class="text-gray-400 fs-7">New frontend admin theme</div>
                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::Section-->

                        <!--begin::Label-->
                        <span class="badge badge-light fs-8">2 days</span>
                        <!--end::Label-->
                    </div>
                    <!--end::Item-->
                                    <!--begin::Item-->
                    <div class="d-flex flex-stack py-4">
                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-35px me-4">
                                <span class="symbol-label bg-light-primary">      
                                    <i class="ki-outline ki-colors-square fs-2 text-primary"></i>                                                    
                                </span>
                            </div>
                            <!--end::Symbol-->

                            <!--begin::Title-->
                            <div class="mb-0 me-2">
                                <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Project Breafing</a>
                                <div class="text-gray-400 fs-7">Product launch status update</div>
                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::Section-->

                        <!--begin::Label-->
                        <span class="badge badge-light fs-8">21 Jan</span>
                        <!--end::Label-->
                    </div>
                    <!--end::Item-->
                                    <!--begin::Item-->
                    <div class="d-flex flex-stack py-4">
                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-35px me-4">
                                <span class="symbol-label bg-light-info">      
                                    <i class="ki-outline ki-picture
 fs-2 text-info"></i>                                                    
                                </span>
                            </div>
                            <!--end::Symbol-->

                            <!--begin::Title-->
                            <div class="mb-0 me-2">
                                <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Banner Assets</a>
                                <div class="text-gray-400 fs-7">Collection of banner images</div>
                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::Section-->

                        <!--begin::Label-->
                        <span class="badge badge-light fs-8">21 Jan</span>
                        <!--end::Label-->
                    </div>
                    <!--end::Item-->
                                    <!--begin::Item-->
                    <div class="d-flex flex-stack py-4">
                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-35px me-4">
                                <span class="symbol-label bg-light-warning">      
                                    <i class="ki-outline ki-color-swatch fs-2 text-warning"></i>                                                    
                                </span>
                            </div>
                            <!--end::Symbol-->

                            <!--begin::Title-->
                            <div class="mb-0 me-2">
                                <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Icon Assets</a>
                                <div class="text-gray-400 fs-7">Collection of SVG icons</div>
                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::Section-->

                        <!--begin::Label-->
                        <span class="badge badge-light fs-8">20 March</span>
                        <!--end::Label-->
                    </div>
                    <!--end::Item-->
                  
            </div>
            <!--end::Items-->

            <!--begin::View more-->
			<div class="py-3 text-center border-top">
                <a href="../../pages/user-profile/activity.php" class="btn btn-color-gray-600 btn-active-color-primary">
                    View All 
                    <i class="ki-outline ki-arrow-right fs-5"></i>                </a>			 
			</div>
			<!--end::View more--> 
        </div>
        <!--end::Tab panel-->      

        <!--begin::Tab panel-->
        <div class="tab-pane fade show active" id="kt_topbar_notifications_2" role="tabpanel">
            <!--begin::Wrapper-->
            <div class="d-flex flex-column px-9">
                <!--begin::Section-->
                <div class="pt-10 pb-0">
                    <!--begin::Title-->
                    <h3 class="text-dark text-center fw-bold">
                        Get Pro Access                
                    </h3>
                    <!--end::Title-->

                    <!--begin::Text-->
                    <div class="text-center text-gray-600 fw-semibold pt-1">
                        Outlines keep you honest. They stoping you from amazing poorly about drive
                    </div>
                    <!--end::Text-->

                    <!--begin::Action-->
                    <div class="text-center mt-5 mb-9">
                        <a href="#" class="btn btn-sm btn-primary px-6"  data-bs-toggle="modal" data-bs-target="#kt_modal_upgrade_plan" >Upgrade</a>                  
                    </div>
                    <!--end::Action-->
                </div>
                <!--end::Section-->

                <!--begin::Illustration-->
                <div class="text-center px-4">
                    <img class="mw-100 mh-200px" alt="image" src="../../assets/media/illustrations/sketchy-1/1.png"/>
                </div>
                <!--end::Illustration-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Tab panel-->
        
        <!--begin::Tab panel-->
        <div class="tab-pane fade" id="kt_topbar_notifications_3" role="tabpanel">
            <!--begin::Items-->
            <div class="scroll-y mh-325px my-5 px-8">
                                    <!--begin::Item-->
                    <div class="d-flex flex-stack py-4">
                        <!--begin::Section-->
                        <div class="d-flex align-items-center me-2">
                            <!--begin::Code-->
                            <span class="w-70px badge badge-light-success me-4">200 OK</span>
                            <!--end::Code-->

                            <!--begin::Title-->
                            <a href="#" class="text-gray-800 text-hover-primary fw-semibold">New order</a>
                            <!--end::Title-->
                        </div>
                        <!--end::Section-->

                        <!--begin::Label-->
                        <span class="badge badge-light fs-8">Just now</span>
                        <!--end::Label-->
                    </div>
                    <!--end::Item-->
                                    <!--begin::Item-->
                    <div class="d-flex flex-stack py-4">
                        <!--begin::Section-->
                        <div class="d-flex align-items-center me-2">
                            <!--begin::Code-->
                            <span class="w-70px badge badge-light-danger me-4">500 ERR</span>
                            <!--end::Code-->

                            <!--begin::Title-->
                            <a href="#" class="text-gray-800 text-hover-primary fw-semibold">New customer</a>
                            <!--end::Title-->
                        </div>
                        <!--end::Section-->

                        <!--begin::Label-->
                        <span class="badge badge-light fs-8">2 hrs</span>
                        <!--end::Label-->
                    </div>
                    <!--end::Item-->
                                    <!--begin::Item-->
                    <div class="d-flex flex-stack py-4">
                        <!--begin::Section-->
                        <div class="d-flex align-items-center me-2">
                            <!--begin::Code-->
                            <span class="w-70px badge badge-light-success me-4">200 OK</span>
                            <!--end::Code-->

                            <!--begin::Title-->
                            <a href="#" class="text-gray-800 text-hover-primary fw-semibold">Payment process</a>
                            <!--end::Title-->
                        </div>
                        <!--end::Section-->

                        <!--begin::Label-->
                        <span class="badge badge-light fs-8">5 hrs</span>
                        <!--end::Label-->
                    </div>
                    <!--end::Item-->
                                    <!--begin::Item-->
                    <div class="d-flex flex-stack py-4">
                        <!--begin::Section-->
                        <div class="d-flex align-items-center me-2">
                            <!--begin::Code-->
                            <span class="w-70px badge badge-light-warning me-4">300 WRN</span>
                            <!--end::Code-->

                            <!--begin::Title-->
                            <a href="#" class="text-gray-800 text-hover-primary fw-semibold">Search query</a>
                            <!--end::Title-->
                        </div>
                        <!--end::Section-->

                        <!--begin::Label-->
                        <span class="badge badge-light fs-8">2 days</span>
                        <!--end::Label-->
                    </div>
                    <!--end::Item-->
                                    <!--begin::Item-->
                    <div class="d-flex flex-stack py-4">
                        <!--begin::Section-->
                        <div class="d-flex align-items-center me-2">
                            <!--begin::Code-->
                            <span class="w-70px badge badge-light-success me-4">200 OK</span>
                            <!--end::Code-->

                            <!--begin::Title-->
                            <a href="#" class="text-gray-800 text-hover-primary fw-semibold">API connection</a>
                            <!--end::Title-->
                        </div>
                        <!--end::Section-->

                        <!--begin::Label-->
                        <span class="badge badge-light fs-8">1 week</span>
                        <!--end::Label-->
                    </div>
                    <!--end::Item-->
                                    <!--begin::Item-->
                    <div class="d-flex flex-stack py-4">
                        <!--begin::Section-->
                        <div class="d-flex align-items-center me-2">
                            <!--begin::Code-->
                            <span class="w-70px badge badge-light-success me-4">200 OK</span>
                            <!--end::Code-->

                            <!--begin::Title-->
                            <a href="#" class="text-gray-800 text-hover-primary fw-semibold">Database restore</a>
                            <!--end::Title-->
                        </div>
                        <!--end::Section-->

                        <!--begin::Label-->
                        <span class="badge badge-light fs-8">Mar 5</span>
                        <!--end::Label-->
                    </div>
                    <!--end::Item-->
                                    <!--begin::Item-->
                    <div class="d-flex flex-stack py-4">
                        <!--begin::Section-->
                        <div class="d-flex align-items-center me-2">
                            <!--begin::Code-->
                            <span class="w-70px badge badge-light-warning me-4">300 WRN</span>
                            <!--end::Code-->

                            <!--begin::Title-->
                            <a href="#" class="text-gray-800 text-hover-primary fw-semibold">System update</a>
                            <!--end::Title-->
                        </div>
                        <!--end::Section-->

                        <!--begin::Label-->
                        <span class="badge badge-light fs-8">May 15</span>
                        <!--end::Label-->
                    </div>
                    <!--end::Item-->
                                    <!--begin::Item-->
                    <div class="d-flex flex-stack py-4">
                        <!--begin::Section-->
                        <div class="d-flex align-items-center me-2">
                            <!--begin::Code-->
                            <span class="w-70px badge badge-light-warning me-4">300 WRN</span>
                            <!--end::Code-->

                            <!--begin::Title-->
                            <a href="#" class="text-gray-800 text-hover-primary fw-semibold">Server OS update</a>
                            <!--end::Title-->
                        </div>
                        <!--end::Section-->

                        <!--begin::Label-->
                        <span class="badge badge-light fs-8">Apr 3</span>
                        <!--end::Label-->
                    </div>
                    <!--end::Item-->
                                    <!--begin::Item-->
                    <div class="d-flex flex-stack py-4">
                        <!--begin::Section-->
                        <div class="d-flex align-items-center me-2">
                            <!--begin::Code-->
                            <span class="w-70px badge badge-light-warning me-4">300 WRN</span>
                            <!--end::Code-->

                            <!--begin::Title-->
                            <a href="#" class="text-gray-800 text-hover-primary fw-semibold">API rollback</a>
                            <!--end::Title-->
                        </div>
                        <!--end::Section-->

                        <!--begin::Label-->
                        <span class="badge badge-light fs-8">Jun 30</span>
                        <!--end::Label-->
                    </div>
                    <!--end::Item-->
                                    <!--begin::Item-->
                    <div class="d-flex flex-stack py-4">
                        <!--begin::Section-->
                        <div class="d-flex align-items-center me-2">
                            <!--begin::Code-->
                            <span class="w-70px badge badge-light-danger me-4">500 ERR</span>
                            <!--end::Code-->

                            <!--begin::Title-->
                            <a href="#" class="text-gray-800 text-hover-primary fw-semibold">Refund process</a>
                            <!--end::Title-->
                        </div>
                        <!--end::Section-->

                        <!--begin::Label-->
                        <span class="badge badge-light fs-8">Jul 10</span>
                        <!--end::Label-->
                    </div>
                    <!--end::Item-->
                                    <!--begin::Item-->
                    <div class="d-flex flex-stack py-4">
                        <!--begin::Section-->
                        <div class="d-flex align-items-center me-2">
                            <!--begin::Code-->
                            <span class="w-70px badge badge-light-danger me-4">500 ERR</span>
                            <!--end::Code-->

                            <!--begin::Title-->
                            <a href="#" class="text-gray-800 text-hover-primary fw-semibold">Withdrawal process</a>
                            <!--end::Title-->
                        </div>
                        <!--end::Section-->

                        <!--begin::Label-->
                        <span class="badge badge-light fs-8">Sep 10</span>
                        <!--end::Label-->
                    </div>
                    <!--end::Item-->
                                    <!--begin::Item-->
                    <div class="d-flex flex-stack py-4">
                        <!--begin::Section-->
                        <div class="d-flex align-items-center me-2">
                            <!--begin::Code-->
                            <span class="w-70px badge badge-light-danger me-4">500 ERR</span>
                            <!--end::Code-->

                            <!--begin::Title-->
                            <a href="#" class="text-gray-800 text-hover-primary fw-semibold">Mail tasks</a>
                            <!--end::Title-->
                        </div>
                        <!--end::Section-->

                        <!--begin::Label-->
                        <span class="badge badge-light fs-8">Dec 10</span>
                        <!--end::Label-->
                    </div>
                    <!--end::Item-->
                  
            </div>
            <!--end::Items-->

            <!--begin::View more-->
			<div class="py-3 text-center border-top">
                <a href="../../pages/user-profile/activity.php" class="btn btn-color-gray-600 btn-active-color-primary">
                    View All 
                    <i class="ki-outline ki-arrow-right fs-5"></i>                </a>			 
			</div>
			<!--end::View more--> 
        </div>
        <!--end::Tab panel-->
    </div>
    <!--end::Tab content-->
</div>
<!--end::Menu-->        <!--end::Menu wrapper-->
    </div>
    <!--end::Notifications-->

    <!--begin::Quick links-->
    <div class="app-navbar-item ms-1 ms-lg-5">
        <!--begin::Menu- wrapper-->
        <div class="btn btn-icon btn-custom btn-color-gray-600 btn-active-light btn-active-color-primary w-35px h-35px w-md-40px h-md-40px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom">
            <i class="ki-outline ki-abstract-26 fs-1"></i>  
        </div>
        
<!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column w-250px w-lg-325px" data-kt-menu="true">
	<!--begin::Heading-->
    <div class="d-flex flex-column flex-center bgi-no-repeat rounded-top px-9 py-10" style="background-image:url('../../assets/media/misc/menu-header-bg.jpg')">
        <!--begin::Title-->
        <h3 class="text-white fw-semibold mb-3">
            Quick Links 
        </h3>
        <!--end::Title-->

        <!--begin::Status-->
        <span class="badge bg-primary text-inverse-primary py-2 px-3">25 pending tasks</span>
        <!--end::Status-->
    </div>
	<!--end::Heading-->

    <!--begin:Nav-->
    <div class="row g-0">
        <!--begin:Item-->
        <div class="col-6">
            <a href="../projects/budget.php" class="d-flex flex-column flex-center h-100 p-6 bg-hover-light border-end border-bottom">
                <i class="ki-outline ki-dollar fs-3x text-primary mb-2"></i>                <span class="fs-5 fw-semibold text-gray-800 mb-0">Accounting</span>
                <span class="fs-7 text-gray-400">eCommerce</span>
            </a>
        </div>
        <!--end:Item-->

        <!--begin:Item-->
        <div class="col-6">
            <a href="../projects/settings.php" class="d-flex flex-column flex-center h-100 p-6 bg-hover-light border-bottom">
                <i class="ki-outline ki-sms fs-3x text-primary mb-2"></i>                <span class="fs-5 fw-semibold text-gray-800 mb-0">Administration</span>
                <span class="fs-7 text-gray-400">Console</span>
            </a>
        </div>
        <!--end:Item-->

        <!--begin:Item-->
        <div class="col-6">
            <a href="../projects/list.php" class="d-flex flex-column flex-center h-100 p-6 bg-hover-light border-end">
                <i class="ki-outline ki-abstract-41 fs-3x text-primary mb-2"></i>                <span class="fs-5 fw-semibold text-gray-800 mb-0">Projects</span>
                <span class="fs-7 text-gray-400">Pending Tasks</span>
            </a>
        </div>
        <!--end:Item-->

        <!--begin:Item-->
        <div class="col-6">
            <a href="../projects/users.php" class="d-flex flex-column flex-center h-100 p-6 bg-hover-light">
                <i class="ki-outline ki-briefcase fs-3x text-primary mb-2"></i>                <span class="fs-5 fw-semibold text-gray-800 mb-0">Customers</span>
                <span class="fs-7 text-gray-400">Latest cases</span>
            </a>
        </div>
        <!--end:Item-->
    </div>
    <!--end:Nav-->

    <!--begin::View more-->
    <div class="py-2 text-center border-top">
        <a href="../../pages/user-profile/activity.php" class="btn btn-color-gray-600 btn-active-color-primary">
            View All 
            <i class="ki-outline ki-arrow-right fs-5"></i>        </a>			 
    </div>
    <!--end::View more--> 
</div>
<!--end::Menu-->
        <!--end::Menu wrapper-->
    </div>
    <!--end::Quick links-->

    <!--begin::Chat-->
    <div class="app-navbar-item ms-1 ms-lg-5">
        <!--begin::Menu wrapper-->
        <div class="btn btn-icon btn-custom btn-color-gray-600 btn-active-light btn-active-color-primary w-35px h-35px w-md-40px h-md-40px position-relative" id="kt_drawer_chat_toggle">
            <i class="ki-outline ki-notification-on fs-1"></i>           
        </div>
        <!--end::Menu wrapper-->
    </div>
    <!--end::Chat-->
    
    <!--begin::User menu-->
    <div class="app-navbar-item ms-3 ms-lg-5" id="kt_header_user_menu_toggle">
        <!--begin::Menu wrapper-->
        <div class="cursor-pointer symbol symbol-35px symbol-md-45px"
            data-kt-menu-trigger="{default: 'click', lg: 'hover'}" 
            data-kt-menu-attach="parent" 
            data-kt-menu-placement="bottom-end">
            <img class="symbol symbol-circle symbol-35px symbol-md-45px" src="../../assets/media/avatars/300-13.jpg" alt="user"/>             
        </div>
        
<!--begin::User account menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <div class="menu-content d-flex align-items-center px-3">
            <!--begin::Avatar-->
            <div class="symbol symbol-50px me-5">
                <img alt="Logo" src="../../assets/media/avatars/300-13.jpg"/>
            </div>
            <!--end::Avatar-->

            <!--begin::Username-->
            <div class="d-flex flex-column">
                <div class="fw-bold d-flex align-items-center fs-5">
                    Max Smith                    <span class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Pro</span>
                </div>

                <a href="#" class="fw-semibold text-muted text-hover-primary fs-7">
                    max@kt.com                </a>
            </div>
            <!--end::Username-->
        </div>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu separator-->
    <div class="separator my-2"></div>
    <!--end::Menu separator-->

    <!--begin::Menu item-->
    <div class="menu-item px-5">
        <a href="../../account/overview.php" class="menu-link px-5">
            My Profile
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-5">
        <a href="../projects/list.php" class="menu-link px-5">
            <span class="menu-text">My Projects</span>
            <span class="menu-badge">
                <span class="badge badge-light-danger badge-circle fw-bold fs-7">3</span>
            </span>
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
        <a href="#" class="menu-link px-5">
            <span class="menu-title">My Subscription</span>
            <span class="menu-arrow"></span>
        </a>

        <!--begin::Menu sub-->
        <div class="menu-sub menu-sub-dropdown w-175px py-4">
            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <a href="../../account/referrals.php" class="menu-link px-5">
                    Referrals
                </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <a href="../../account/billing.php" class="menu-link px-5">
                    Billing
                </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->            
            <div class="menu-item px-3">
                <a href="../../account/statements.php" class="menu-link px-5">
                    Payments
                </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->            
            <div class="menu-item px-3">
                <a href="../../account/statements.php" class="menu-link d-flex flex-stack px-5">
                    Statements

                    <span class="ms-2 lh-0" data-bs-toggle="tooltip" title="View your statements">
                        <i class="ki-outline ki-information-5 fs-5"></i>                    </span>
                </a>
            </div>
            <!--end::Menu item-->
            
            <!--begin::Menu separator-->
            <div class="separator my-2"></div>
            <!--end::Menu separator-->

            <!--begin::Menu item-->            
            <div class="menu-item px-3">
                <div class="menu-content px-3">
                    <label class="form-check form-switch form-check-custom form-check-solid">
                        <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications"/>
                        <span class="form-check-label text-muted fs-7">
                            Notifications
                        </span>
                    </label>
                </div>
            </div>
            <!--end::Menu item-->
        </div>
        <!--end::Menu sub-->
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-5">
        <a href="../../account/statements.php" class="menu-link px-5">
            My Statements
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu separator-->
    <div class="separator my-2"></div>
    <!--end::Menu separator-->

            <!--begin::Menu item-->
        <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
            <a href="#" class="menu-link px-5">
                <span class="menu-title position-relative">
                    Mode 

                    <span class="ms-5 position-absolute translate-middle-y top-50 end-0">
                        <i class="ki-outline ki-night-day theme-light-show fs-2"></i>                        <i class="ki-outline ki-moon theme-dark-show fs-2"></i>                    </span>
                </span>
            </a>

            <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px" data-kt-menu="true" data-kt-element="theme-mode-menu">
    <!--begin::Menu item-->
    <div class="menu-item px-3 my-0">
        <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="light">
            <span class="menu-icon" data-kt-element="icon">
                <i class="ki-outline ki-night-day fs-2"></i>            </span>
            <span class="menu-title">
                Light
            </span>
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3 my-0">
        <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark">
            <span class="menu-icon" data-kt-element="icon">
                <i class="ki-outline ki-moon fs-2"></i>            </span>
            <span class="menu-title">
                Dark
            </span>
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3 my-0">
        <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="system">
            <span class="menu-icon" data-kt-element="icon">
                <i class="ki-outline ki-screen fs-2"></i>            </span>
            <span class="menu-title">
                System
            </span>
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->

        </div>
        <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
        <a href="#" class="menu-link px-5">
            <span class="menu-title position-relative">
                Language 

                <span class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0">
                    English <img class="w-15px h-15px rounded-1 ms-2" src="../../assets/media/flags/united-states.svg" alt=""/>
                </span>
            </span>
        </a>

        <!--begin::Menu sub-->
        <div class="menu-sub menu-sub-dropdown w-175px py-4">
            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <a href="../../account/settings.php" class="menu-link d-flex px-5 active">
                    <span class="symbol symbol-20px me-4">
                        <img class="rounded-1" src="../../assets/media/flags/united-states.svg" alt=""/>
                    </span>
                    English
                </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <a href="../../account/settings.php" class="menu-link d-flex px-5">
                    <span class="symbol symbol-20px me-4">
                        <img class="rounded-1" src="../../assets/media/flags/spain.svg" alt=""/>
                    </span>
                    Spanish
                </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <a href="../../account/settings.php" class="menu-link d-flex px-5">
                    <span class="symbol symbol-20px me-4">
                        <img class="rounded-1" src="../../assets/media/flags/germany.svg" alt=""/>
                    </span>
                    German
                </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <a href="../../account/settings.php" class="menu-link d-flex px-5">
                    <span class="symbol symbol-20px me-4">
                        <img class="rounded-1" src="../../assets/media/flags/japan.svg" alt=""/>
                    </span>
                    Japanese
                </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <a href="../../account/settings.php" class="menu-link d-flex px-5">
                    <span class="symbol symbol-20px me-4">
                        <img class="rounded-1" src="../../assets/media/flags/france.svg" alt=""/>
                    </span>
                    French
                </a>
            </div>
            <!--end::Menu item-->
        </div>
        <!--end::Menu sub-->
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-5 my-1">
        <a href="../../account/settings.php" class="menu-link px-5">
            Account Settings
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-5">
        <a href="../../authentication/layouts/corporate/sign-in.php" class="menu-link px-5">
            Sign Out
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::User account menu-->
         
        <!--end::Menu wrapper-->
    </div>
    <!--end::User menu-->

    <!--begin::Header menu toggle-->
        <!--end::Header menu toggle-->
</div>
<!--end::Navbar-->	
</div>
<!--end::Header wrapper-->            </div>
            <!--end::Header container-->
            </div>
<!--end::Header-->        
        <!--begin::Wrapper-->
        <div class="app-wrapper  flex-column flex-row-fluid " id="kt_app_wrapper">
                            
<!--begin::Toolbar-->
<div id="kt_app_toolbar" class="app-toolbar  py-6 " 
     
         >

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
                                            <a href="../../index.php" class="text-white">
                                                            <i class="ki-outline ki-home text-white fs-3"></i> 
                                                    </a>
                                    </li>
                        <!--end::Item-->

                            <!--begin::Item-->
                <li class="breadcrumb-item">
                    <i class="ki-outline ki-right fs-4 text-white mx-n1"></i>                </li>
                <!--end::Item-->
                                    
                     
            <!--begin::Item-->
                            <li class="breadcrumb-item text-white fw-bold lh-1">
                                            File Manager                                    </li>
                        <!--end::Item-->

                                    
            </ul>
    <!--end::Breadcrumb-->
    
    </div>
    <!--end::Toolbar wrapper--->

    <!--begin::Toolbar wrapper--->
    <div class="d-flex flex-stack flex-wrap flex-lg-nowrap gap-4 gap-lg-10 pt-6 pb-18 py-lg-13">   
        
<!--begin::Page title-->
<div class="page-title d-flex align-items-center me-3">
    <img alt="Logo" src="../../assets/media/svg/misc/layer.svg" class="h-60px me-5"/>

    <!--begin::Title-->
    <h1 class="page-heading d-flex text-white fw-bolder fs-2 flex-column justify-content-center my-0">
        File Manager - Files
                    <!--begin::Description-->
            <span class="page-desc text-white opacity-50 fs-6 fw-bold pt-4">
                Page Description            </span>
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
<!--end::Toolbar container--->        </div>
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
<div id="kt_app_content" class="app-content " >
    
            <!--begin::Card-->
<div 
    class="card card-flush pb-0 bgi-position-y-center bgi-no-repeat mb-10" 
    style="background-size: auto calc(100% + 10rem); background-position-x: 100%; background-image: url('../../assets/media/illustrations/sketchy-1/4.png')">

    <!--begin::Card header-->
    <div class="card-header pt-10">
        <div class="d-flex align-items-center">
            <!--begin::Icon-->
            <div class="symbol symbol-circle me-5">
                <div class="symbol-label bg-transparent text-primary border border-secondary border-dashed">
                    <i class="ki-outline ki-abstract-47 fs-2x text-primary"></i>                </div>
            </div>
            <!--end::Icon-->

            <!--begin::Title-->
            <div class="d-flex flex-column">
                <h2 class="mb-1">File Manager</h2>
                <div class="text-muted fw-bold">
                    <a href="#">Keenthemes</a> <span class="mx-3">|</span> <a href="#">File Manager</a> <span class="mx-3">|</span> 2.6 GB <span class="mx-3">|</span> 758 items
                </div> 
            </div>
            <!--end::Title-->
        </div>
    </div>
    <!--end::Card header-->

    <!--begin::Card body-->
    <div class="card-body pb-0">
        <!--begin::Navs-->
        <div class="d-flex overflow-auto h-55px">
            <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-semibold flex-nowrap">
                <!--begin::Nav item-->
                <li class="nav-item">
                    <a class="nav-link text-active-primary me-6 active" href="folders.php">
                        Files
                    </a>
                </li>
                <!--end::Nav item-->

                <!--begin::Nav item-->
                <li class="nav-item">
                    <a class="nav-link text-active-primary me-6" href="settings.php">
                        Settings
                    </a>
                </li>
                <!--end::Nav item-->
            </ul>
        </div>
        <!--begin::Navs-->
    </div>
    <!--end::Card body-->
</div>
<!--end::Card-->

<!--begin::Card-->
<div class="card card-flush">
    <!--begin::Card header-->
    <div class="card-header pt-8">
        <div class="card-title">
            <!--begin::Search-->
<div class="d-flex align-items-center position-relative my-1">
    <i class="ki-outline ki-magnifier fs-1 position-absolute ms-6"></i>    <input type="text" data-kt-filemanager-table-filter="search" class="form-control form-control-solid w-250px ps-15" placeholder="Search Files & Folders" />
</div>
<!--end::Search--> 
        </div>

        <!--begin::Card toolbar-->
        <div class="card-toolbar">
            <!--begin::Toolbar-->
<div class="d-flex justify-content-end" data-kt-filemanager-table-toolbar="base">
        <!--begin::Back to folders-->
    <a href="folders.php" class="btn btn-icon btn-light-primary me-3">
        <i class="ki-outline ki-exit-up fs-2"></i>    </a>
    <!--end::Back to folders-->
    
    <!--begin::Export-->
    <button type="button" class="btn btn-flex btn-light-primary me-3" id="kt_file_manager_new_folder">
        <i class="ki-outline ki-add-folder fs-2"></i>        New Folder
    </button>
    <!--end::Export-->

    <!--begin::Add customer-->
    <button type="button" class="btn btn-flex btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_upload">
        <i class="ki-outline ki-folder-up fs-2"></i>        Upload Files
    </button>
    <!--end::Add customer--> 
</div>
<!--end::Toolbar-->

<!--begin::Group actions-->
<div class="d-flex justify-content-end align-items-center d-none" data-kt-filemanager-table-toolbar="selected">
    <div class="fw-bold me-5">
        <span class="me-2" data-kt-filemanager-table-select="selected_count"></span> Selected
    </div>

    <button type="button" class="btn btn-danger" data-kt-filemanager-table-select="delete_selected">
        Delete Selected
    </button>
</div>
<!--end::Group actions-->        </div>
        <!--end::Card toolbar-->
    </div>
    <!--end::Card header-->

    <!--begin::Card body-->
    <div class="card-body">
        <!--begin::Table header-->
        <div class="d-flex flex-stack">
            <!--begin::Folder path-->
            <div class="badge badge-lg badge-light-primary">
                <div class="d-flex align-items-center flex-wrap">
                    <i class="ki-outline ki-abstract-32 fs-2x text-primary me-3"></i>                    <a href="folders.php">Keenthemes</a>
                    <i class="ki-outline ki-right fs-2x text-primary mx-1"></i>                    <a href="folders.php">themes</a>
                    <i class="ki-outline ki-right fs-2x text-primary mx-1"></i>                    <a href="folders.php">html</a>
                    <i class="ki-outline ki-right fs-2x text-primary mx-1"></i>                    <a href="folders.php">demo1</a>
                    <i class="ki-outline ki-right fs-2x text-primary mx-1"></i>                    account
                </div>
            </div>
            <!--end::Folder path-->

            <!--begin::Folder Stats-->
            <div class="badge badge-lg badge-primary">
                <span id="kt_file_manager_items_counter">66 items</span>
            </div>
            <!--end::Folder Stats-->
        </div>
        <!--end::Table header-->

        <!--begin::Table-->
        <table id="kt_file_manager_list" data-kt-filemanager-table="files" class="table align-middle table-row-dashed fs-6 gy-5">
            <thead>
                <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                    <th class="w-10px pe-2">
                        <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                            <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_file_manager_list .form-check-input" value="1" />
                        </div>
                    </th>
                    <th class="min-w-250px">Name</th>
                    <th class="min-w-10px">Size</th>
                    <th class="min-w-125px">Last Modified</th>
                    <th class="w-125px"></th>
                </tr>
            </thead>
            <tbody class="fw-semibold text-gray-600">
                                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <i class="ki-outline ki-files fs-2x text-primary me-4"></i>                                <a href="#" class="text-gray-800 text-hover-primary">api-keys.php</a>
                            </div>
                        </td>
                        <td>
                            489 KB                        </td>
                        <td>
                            24 Jun 2023, 6:43 am                        </td>
                        <td class="text-end" data-kt-filemanager-table="action_dropdown">
                            <div class="d-flex justify-content-end">
                                <!--begin::Share link-->
                                <div class="ms-2" data-kt-filemanger-table="copy_link">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-fasten fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-300px" data-kt-menu="true">
    <!--begin::Card-->
    <div class="card card-flush">
        <div class="card-body p-5">
            <!--begin::Loader-->
            <div class="d-flex" data-kt-filemanger-table="copy_link_generator">
                <!--begin::Spinner-->
                <div class="me-5" data-kt-indicator="on">
                    <span class="indicator-progress">
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </span>
                </div>
                <!--end::Spinner-->

                <!--begin::Label-->
                <div class="fs-6 text-dark">Generating Share Link...</div>
                <!--end::Label-->
            </div>
            <!--end::Loader-->

            <!--begin::Link-->
            <div class="d-flex flex-column text-start d-none" data-kt-filemanger-table="copy_link_result">
                <div class="d-flex mb-3">
                    <i class="ki-outline ki-check fs-2 text-success me-3"></i>                    <div class="fs-6 text-dark">Share Link Generated</div>
                </div>
                <input type="text" class="form-control form-control-sm" value="https://path/to/file/or/folder/" />
                <div class="text-muted fw-normal mt-2 fs-8 px-3">Read only. <a href="settings/.php" class="ms-2">Change permissions</a></div>
            </div>
            <!--end::Link-->
        </div>
    </div>
    <!--end::Card-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::Share link-->

                                <!--begin::More-->
                                <div class="ms-2">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-dots-square fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            Download File
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table="rename">
            Rename
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table-filter="move_row" data-bs-toggle="modal" data-bs-target="#kt_modal_move_to_folder">
            Move to folder
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link text-danger px-3" data-kt-filemanager-table-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::More-->
                            </div>
                        </td>
                    </tr>
                                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <i class="ki-outline ki-files fs-2x text-primary me-4"></i>                                <a href="#" class="text-gray-800 text-hover-primary">billing.php</a>
                            </div>
                        </td>
                        <td>
                            554 KB                        </td>
                        <td>
                            22 Sep 2023, 5:30 pm                        </td>
                        <td class="text-end" data-kt-filemanager-table="action_dropdown">
                            <div class="d-flex justify-content-end">
                                <!--begin::Share link-->
                                <div class="ms-2" data-kt-filemanger-table="copy_link">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-fasten fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-300px" data-kt-menu="true">
    <!--begin::Card-->
    <div class="card card-flush">
        <div class="card-body p-5">
            <!--begin::Loader-->
            <div class="d-flex" data-kt-filemanger-table="copy_link_generator">
                <!--begin::Spinner-->
                <div class="me-5" data-kt-indicator="on">
                    <span class="indicator-progress">
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </span>
                </div>
                <!--end::Spinner-->

                <!--begin::Label-->
                <div class="fs-6 text-dark">Generating Share Link...</div>
                <!--end::Label-->
            </div>
            <!--end::Loader-->

            <!--begin::Link-->
            <div class="d-flex flex-column text-start d-none" data-kt-filemanger-table="copy_link_result">
                <div class="d-flex mb-3">
                    <i class="ki-outline ki-check fs-2 text-success me-3"></i>                    <div class="fs-6 text-dark">Share Link Generated</div>
                </div>
                <input type="text" class="form-control form-control-sm" value="https://path/to/file/or/folder/" />
                <div class="text-muted fw-normal mt-2 fs-8 px-3">Read only. <a href="settings/.php" class="ms-2">Change permissions</a></div>
            </div>
            <!--end::Link-->
        </div>
    </div>
    <!--end::Card-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::Share link-->

                                <!--begin::More-->
                                <div class="ms-2">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-dots-square fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            Download File
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table="rename">
            Rename
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table-filter="move_row" data-bs-toggle="modal" data-bs-target="#kt_modal_move_to_folder">
            Move to folder
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link text-danger px-3" data-kt-filemanager-table-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::More-->
                            </div>
                        </td>
                    </tr>
                                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <i class="ki-outline ki-files fs-2x text-primary me-4"></i>                                <a href="#" class="text-gray-800 text-hover-primary">overview.php</a>
                            </div>
                        </td>
                        <td>
                            522 KB                        </td>
                        <td>
                            10 Nov 2023, 6:43 am                        </td>
                        <td class="text-end" data-kt-filemanager-table="action_dropdown">
                            <div class="d-flex justify-content-end">
                                <!--begin::Share link-->
                                <div class="ms-2" data-kt-filemanger-table="copy_link">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-fasten fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-300px" data-kt-menu="true">
    <!--begin::Card-->
    <div class="card card-flush">
        <div class="card-body p-5">
            <!--begin::Loader-->
            <div class="d-flex" data-kt-filemanger-table="copy_link_generator">
                <!--begin::Spinner-->
                <div class="me-5" data-kt-indicator="on">
                    <span class="indicator-progress">
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </span>
                </div>
                <!--end::Spinner-->

                <!--begin::Label-->
                <div class="fs-6 text-dark">Generating Share Link...</div>
                <!--end::Label-->
            </div>
            <!--end::Loader-->

            <!--begin::Link-->
            <div class="d-flex flex-column text-start d-none" data-kt-filemanger-table="copy_link_result">
                <div class="d-flex mb-3">
                    <i class="ki-outline ki-check fs-2 text-success me-3"></i>                    <div class="fs-6 text-dark">Share Link Generated</div>
                </div>
                <input type="text" class="form-control form-control-sm" value="https://path/to/file/or/folder/" />
                <div class="text-muted fw-normal mt-2 fs-8 px-3">Read only. <a href="settings/.php" class="ms-2">Change permissions</a></div>
            </div>
            <!--end::Link-->
        </div>
    </div>
    <!--end::Card-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::Share link-->

                                <!--begin::More-->
                                <div class="ms-2">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-dots-square fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            Download File
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table="rename">
            Rename
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table-filter="move_row" data-bs-toggle="modal" data-bs-target="#kt_modal_move_to_folder">
            Move to folder
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link text-danger px-3" data-kt-filemanager-table-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::More-->
                            </div>
                        </td>
                    </tr>
                                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <i class="ki-outline ki-files fs-2x text-primary me-4"></i>                                <a href="#" class="text-gray-800 text-hover-primary">referrals.php</a>
                            </div>
                        </td>
                        <td>
                            477 KB                        </td>
                        <td>
                            22 Sep 2023, 5:20 pm                        </td>
                        <td class="text-end" data-kt-filemanager-table="action_dropdown">
                            <div class="d-flex justify-content-end">
                                <!--begin::Share link-->
                                <div class="ms-2" data-kt-filemanger-table="copy_link">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-fasten fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-300px" data-kt-menu="true">
    <!--begin::Card-->
    <div class="card card-flush">
        <div class="card-body p-5">
            <!--begin::Loader-->
            <div class="d-flex" data-kt-filemanger-table="copy_link_generator">
                <!--begin::Spinner-->
                <div class="me-5" data-kt-indicator="on">
                    <span class="indicator-progress">
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </span>
                </div>
                <!--end::Spinner-->

                <!--begin::Label-->
                <div class="fs-6 text-dark">Generating Share Link...</div>
                <!--end::Label-->
            </div>
            <!--end::Loader-->

            <!--begin::Link-->
            <div class="d-flex flex-column text-start d-none" data-kt-filemanger-table="copy_link_result">
                <div class="d-flex mb-3">
                    <i class="ki-outline ki-check fs-2 text-success me-3"></i>                    <div class="fs-6 text-dark">Share Link Generated</div>
                </div>
                <input type="text" class="form-control form-control-sm" value="https://path/to/file/or/folder/" />
                <div class="text-muted fw-normal mt-2 fs-8 px-3">Read only. <a href="settings/.php" class="ms-2">Change permissions</a></div>
            </div>
            <!--end::Link-->
        </div>
    </div>
    <!--end::Card-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::Share link-->

                                <!--begin::More-->
                                <div class="ms-2">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-dots-square fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            Download File
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table="rename">
            Rename
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table-filter="move_row" data-bs-toggle="modal" data-bs-target="#kt_modal_move_to_folder">
            Move to folder
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link text-danger px-3" data-kt-filemanager-table-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::More-->
                            </div>
                        </td>
                    </tr>
                                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <i class="ki-outline ki-files fs-2x text-primary me-4"></i>                                <a href="#" class="text-gray-800 text-hover-primary">security.php</a>
                            </div>
                        </td>
                        <td>
                            514 KB                        </td>
                        <td>
                            19 Aug 2023, 8:43 pm                        </td>
                        <td class="text-end" data-kt-filemanager-table="action_dropdown">
                            <div class="d-flex justify-content-end">
                                <!--begin::Share link-->
                                <div class="ms-2" data-kt-filemanger-table="copy_link">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-fasten fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-300px" data-kt-menu="true">
    <!--begin::Card-->
    <div class="card card-flush">
        <div class="card-body p-5">
            <!--begin::Loader-->
            <div class="d-flex" data-kt-filemanger-table="copy_link_generator">
                <!--begin::Spinner-->
                <div class="me-5" data-kt-indicator="on">
                    <span class="indicator-progress">
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </span>
                </div>
                <!--end::Spinner-->

                <!--begin::Label-->
                <div class="fs-6 text-dark">Generating Share Link...</div>
                <!--end::Label-->
            </div>
            <!--end::Loader-->

            <!--begin::Link-->
            <div class="d-flex flex-column text-start d-none" data-kt-filemanger-table="copy_link_result">
                <div class="d-flex mb-3">
                    <i class="ki-outline ki-check fs-2 text-success me-3"></i>                    <div class="fs-6 text-dark">Share Link Generated</div>
                </div>
                <input type="text" class="form-control form-control-sm" value="https://path/to/file/or/folder/" />
                <div class="text-muted fw-normal mt-2 fs-8 px-3">Read only. <a href="settings/.php" class="ms-2">Change permissions</a></div>
            </div>
            <!--end::Link-->
        </div>
    </div>
    <!--end::Card-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::Share link-->

                                <!--begin::More-->
                                <div class="ms-2">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-dots-square fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            Download File
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table="rename">
            Rename
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table-filter="move_row" data-bs-toggle="modal" data-bs-target="#kt_modal_move_to_folder">
            Move to folder
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link text-danger px-3" data-kt-filemanager-table-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::More-->
                            </div>
                        </td>
                    </tr>
                                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <i class="ki-outline ki-files fs-2x text-primary me-4"></i>                                <a href="#" class="text-gray-800 text-hover-primary">settings.php</a>
                            </div>
                        </td>
                        <td>
                            475 KB                        </td>
                        <td>
                            20 Jun 2023, 10:10 pm                        </td>
                        <td class="text-end" data-kt-filemanager-table="action_dropdown">
                            <div class="d-flex justify-content-end">
                                <!--begin::Share link-->
                                <div class="ms-2" data-kt-filemanger-table="copy_link">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-fasten fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-300px" data-kt-menu="true">
    <!--begin::Card-->
    <div class="card card-flush">
        <div class="card-body p-5">
            <!--begin::Loader-->
            <div class="d-flex" data-kt-filemanger-table="copy_link_generator">
                <!--begin::Spinner-->
                <div class="me-5" data-kt-indicator="on">
                    <span class="indicator-progress">
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </span>
                </div>
                <!--end::Spinner-->

                <!--begin::Label-->
                <div class="fs-6 text-dark">Generating Share Link...</div>
                <!--end::Label-->
            </div>
            <!--end::Loader-->

            <!--begin::Link-->
            <div class="d-flex flex-column text-start d-none" data-kt-filemanger-table="copy_link_result">
                <div class="d-flex mb-3">
                    <i class="ki-outline ki-check fs-2 text-success me-3"></i>                    <div class="fs-6 text-dark">Share Link Generated</div>
                </div>
                <input type="text" class="form-control form-control-sm" value="https://path/to/file/or/folder/" />
                <div class="text-muted fw-normal mt-2 fs-8 px-3">Read only. <a href="settings/.php" class="ms-2">Change permissions</a></div>
            </div>
            <!--end::Link-->
        </div>
    </div>
    <!--end::Card-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::Share link-->

                                <!--begin::More-->
                                <div class="ms-2">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-dots-square fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            Download File
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table="rename">
            Rename
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table-filter="move_row" data-bs-toggle="modal" data-bs-target="#kt_modal_move_to_folder">
            Move to folder
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link text-danger px-3" data-kt-filemanager-table-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::More-->
                            </div>
                        </td>
                    </tr>
                                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <i class="ki-outline ki-files fs-2x text-primary me-4"></i>                                <a href="#" class="text-gray-800 text-hover-primary">statements.php</a>
                            </div>
                        </td>
                        <td>
                            552 KB                        </td>
                        <td>
                            25 Oct 2023, 11:30 am                        </td>
                        <td class="text-end" data-kt-filemanager-table="action_dropdown">
                            <div class="d-flex justify-content-end">
                                <!--begin::Share link-->
                                <div class="ms-2" data-kt-filemanger-table="copy_link">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-fasten fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-300px" data-kt-menu="true">
    <!--begin::Card-->
    <div class="card card-flush">
        <div class="card-body p-5">
            <!--begin::Loader-->
            <div class="d-flex" data-kt-filemanger-table="copy_link_generator">
                <!--begin::Spinner-->
                <div class="me-5" data-kt-indicator="on">
                    <span class="indicator-progress">
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </span>
                </div>
                <!--end::Spinner-->

                <!--begin::Label-->
                <div class="fs-6 text-dark">Generating Share Link...</div>
                <!--end::Label-->
            </div>
            <!--end::Loader-->

            <!--begin::Link-->
            <div class="d-flex flex-column text-start d-none" data-kt-filemanger-table="copy_link_result">
                <div class="d-flex mb-3">
                    <i class="ki-outline ki-check fs-2 text-success me-3"></i>                    <div class="fs-6 text-dark">Share Link Generated</div>
                </div>
                <input type="text" class="form-control form-control-sm" value="https://path/to/file/or/folder/" />
                <div class="text-muted fw-normal mt-2 fs-8 px-3">Read only. <a href="settings/.php" class="ms-2">Change permissions</a></div>
            </div>
            <!--end::Link-->
        </div>
    </div>
    <!--end::Card-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::Share link-->

                                <!--begin::More-->
                                <div class="ms-2">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-dots-square fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            Download File
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table="rename">
            Rename
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table-filter="move_row" data-bs-toggle="modal" data-bs-target="#kt_modal_move_to_folder">
            Move to folder
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link text-danger px-3" data-kt-filemanager-table-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::More-->
                            </div>
                        </td>
                    </tr>
                                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <i class="ki-outline ki-files fs-2x text-primary me-4"></i>                                <a href="#" class="text-gray-800 text-hover-primary">widgets-1.php</a>
                            </div>
                        </td>
                        <td>
                            554 KB                        </td>
                        <td>
                            24 Jun 2023, 6:05 pm                        </td>
                        <td class="text-end" data-kt-filemanager-table="action_dropdown">
                            <div class="d-flex justify-content-end">
                                <!--begin::Share link-->
                                <div class="ms-2" data-kt-filemanger-table="copy_link">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-fasten fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-300px" data-kt-menu="true">
    <!--begin::Card-->
    <div class="card card-flush">
        <div class="card-body p-5">
            <!--begin::Loader-->
            <div class="d-flex" data-kt-filemanger-table="copy_link_generator">
                <!--begin::Spinner-->
                <div class="me-5" data-kt-indicator="on">
                    <span class="indicator-progress">
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </span>
                </div>
                <!--end::Spinner-->

                <!--begin::Label-->
                <div class="fs-6 text-dark">Generating Share Link...</div>
                <!--end::Label-->
            </div>
            <!--end::Loader-->

            <!--begin::Link-->
            <div class="d-flex flex-column text-start d-none" data-kt-filemanger-table="copy_link_result">
                <div class="d-flex mb-3">
                    <i class="ki-outline ki-check fs-2 text-success me-3"></i>                    <div class="fs-6 text-dark">Share Link Generated</div>
                </div>
                <input type="text" class="form-control form-control-sm" value="https://path/to/file/or/folder/" />
                <div class="text-muted fw-normal mt-2 fs-8 px-3">Read only. <a href="settings/.php" class="ms-2">Change permissions</a></div>
            </div>
            <!--end::Link-->
        </div>
    </div>
    <!--end::Card-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::Share link-->

                                <!--begin::More-->
                                <div class="ms-2">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-dots-square fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            Download File
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table="rename">
            Rename
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table-filter="move_row" data-bs-toggle="modal" data-bs-target="#kt_modal_move_to_folder">
            Move to folder
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link text-danger px-3" data-kt-filemanager-table-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::More-->
                            </div>
                        </td>
                    </tr>
                                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <i class="ki-outline ki-files fs-2x text-primary me-4"></i>                                <a href="#" class="text-gray-800 text-hover-primary">widgets-2.php</a>
                            </div>
                        </td>
                        <td>
                            522 KB                        </td>
                        <td>
                            25 Oct 2023, 5:20 pm                        </td>
                        <td class="text-end" data-kt-filemanager-table="action_dropdown">
                            <div class="d-flex justify-content-end">
                                <!--begin::Share link-->
                                <div class="ms-2" data-kt-filemanger-table="copy_link">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-fasten fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-300px" data-kt-menu="true">
    <!--begin::Card-->
    <div class="card card-flush">
        <div class="card-body p-5">
            <!--begin::Loader-->
            <div class="d-flex" data-kt-filemanger-table="copy_link_generator">
                <!--begin::Spinner-->
                <div class="me-5" data-kt-indicator="on">
                    <span class="indicator-progress">
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </span>
                </div>
                <!--end::Spinner-->

                <!--begin::Label-->
                <div class="fs-6 text-dark">Generating Share Link...</div>
                <!--end::Label-->
            </div>
            <!--end::Loader-->

            <!--begin::Link-->
            <div class="d-flex flex-column text-start d-none" data-kt-filemanger-table="copy_link_result">
                <div class="d-flex mb-3">
                    <i class="ki-outline ki-check fs-2 text-success me-3"></i>                    <div class="fs-6 text-dark">Share Link Generated</div>
                </div>
                <input type="text" class="form-control form-control-sm" value="https://path/to/file/or/folder/" />
                <div class="text-muted fw-normal mt-2 fs-8 px-3">Read only. <a href="settings/.php" class="ms-2">Change permissions</a></div>
            </div>
            <!--end::Link-->
        </div>
    </div>
    <!--end::Card-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::Share link-->

                                <!--begin::More-->
                                <div class="ms-2">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-dots-square fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            Download File
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table="rename">
            Rename
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table-filter="move_row" data-bs-toggle="modal" data-bs-target="#kt_modal_move_to_folder">
            Move to folder
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link text-danger px-3" data-kt-filemanager-table-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::More-->
                            </div>
                        </td>
                    </tr>
                                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <i class="ki-outline ki-files fs-2x text-primary me-4"></i>                                <a href="#" class="text-gray-800 text-hover-primary">widgets-3.php</a>
                            </div>
                        </td>
                        <td>
                            477 KB                        </td>
                        <td>
                            21 Feb 2023, 6:43 am                        </td>
                        <td class="text-end" data-kt-filemanager-table="action_dropdown">
                            <div class="d-flex justify-content-end">
                                <!--begin::Share link-->
                                <div class="ms-2" data-kt-filemanger-table="copy_link">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-fasten fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-300px" data-kt-menu="true">
    <!--begin::Card-->
    <div class="card card-flush">
        <div class="card-body p-5">
            <!--begin::Loader-->
            <div class="d-flex" data-kt-filemanger-table="copy_link_generator">
                <!--begin::Spinner-->
                <div class="me-5" data-kt-indicator="on">
                    <span class="indicator-progress">
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </span>
                </div>
                <!--end::Spinner-->

                <!--begin::Label-->
                <div class="fs-6 text-dark">Generating Share Link...</div>
                <!--end::Label-->
            </div>
            <!--end::Loader-->

            <!--begin::Link-->
            <div class="d-flex flex-column text-start d-none" data-kt-filemanger-table="copy_link_result">
                <div class="d-flex mb-3">
                    <i class="ki-outline ki-check fs-2 text-success me-3"></i>                    <div class="fs-6 text-dark">Share Link Generated</div>
                </div>
                <input type="text" class="form-control form-control-sm" value="https://path/to/file/or/folder/" />
                <div class="text-muted fw-normal mt-2 fs-8 px-3">Read only. <a href="settings/.php" class="ms-2">Change permissions</a></div>
            </div>
            <!--end::Link-->
        </div>
    </div>
    <!--end::Card-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::Share link-->

                                <!--begin::More-->
                                <div class="ms-2">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-dots-square fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            Download File
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table="rename">
            Rename
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table-filter="move_row" data-bs-toggle="modal" data-bs-target="#kt_modal_move_to_folder">
            Move to folder
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link text-danger px-3" data-kt-filemanager-table-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::More-->
                            </div>
                        </td>
                    </tr>
                                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <i class="ki-outline ki-files fs-2x text-primary me-4"></i>                                <a href="#" class="text-gray-800 text-hover-primary">widgets-4.php</a>
                            </div>
                        </td>
                        <td>
                            514 KB                        </td>
                        <td>
                            21 Feb 2023, 11:30 am                        </td>
                        <td class="text-end" data-kt-filemanager-table="action_dropdown">
                            <div class="d-flex justify-content-end">
                                <!--begin::Share link-->
                                <div class="ms-2" data-kt-filemanger-table="copy_link">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-fasten fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-300px" data-kt-menu="true">
    <!--begin::Card-->
    <div class="card card-flush">
        <div class="card-body p-5">
            <!--begin::Loader-->
            <div class="d-flex" data-kt-filemanger-table="copy_link_generator">
                <!--begin::Spinner-->
                <div class="me-5" data-kt-indicator="on">
                    <span class="indicator-progress">
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </span>
                </div>
                <!--end::Spinner-->

                <!--begin::Label-->
                <div class="fs-6 text-dark">Generating Share Link...</div>
                <!--end::Label-->
            </div>
            <!--end::Loader-->

            <!--begin::Link-->
            <div class="d-flex flex-column text-start d-none" data-kt-filemanger-table="copy_link_result">
                <div class="d-flex mb-3">
                    <i class="ki-outline ki-check fs-2 text-success me-3"></i>                    <div class="fs-6 text-dark">Share Link Generated</div>
                </div>
                <input type="text" class="form-control form-control-sm" value="https://path/to/file/or/folder/" />
                <div class="text-muted fw-normal mt-2 fs-8 px-3">Read only. <a href="settings/.php" class="ms-2">Change permissions</a></div>
            </div>
            <!--end::Link-->
        </div>
    </div>
    <!--end::Card-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::Share link-->

                                <!--begin::More-->
                                <div class="ms-2">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-dots-square fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            Download File
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table="rename">
            Rename
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table-filter="move_row" data-bs-toggle="modal" data-bs-target="#kt_modal_move_to_folder">
            Move to folder
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link text-danger px-3" data-kt-filemanager-table-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::More-->
                            </div>
                        </td>
                    </tr>
                                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <i class="ki-outline ki-files fs-2x text-primary me-4"></i>                                <a href="#" class="text-gray-800 text-hover-primary">widgets-5.php</a>
                            </div>
                        </td>
                        <td>
                            475 KB                        </td>
                        <td>
                            10 Mar 2023, 2:40 pm                        </td>
                        <td class="text-end" data-kt-filemanager-table="action_dropdown">
                            <div class="d-flex justify-content-end">
                                <!--begin::Share link-->
                                <div class="ms-2" data-kt-filemanger-table="copy_link">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-fasten fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-300px" data-kt-menu="true">
    <!--begin::Card-->
    <div class="card card-flush">
        <div class="card-body p-5">
            <!--begin::Loader-->
            <div class="d-flex" data-kt-filemanger-table="copy_link_generator">
                <!--begin::Spinner-->
                <div class="me-5" data-kt-indicator="on">
                    <span class="indicator-progress">
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </span>
                </div>
                <!--end::Spinner-->

                <!--begin::Label-->
                <div class="fs-6 text-dark">Generating Share Link...</div>
                <!--end::Label-->
            </div>
            <!--end::Loader-->

            <!--begin::Link-->
            <div class="d-flex flex-column text-start d-none" data-kt-filemanger-table="copy_link_result">
                <div class="d-flex mb-3">
                    <i class="ki-outline ki-check fs-2 text-success me-3"></i>                    <div class="fs-6 text-dark">Share Link Generated</div>
                </div>
                <input type="text" class="form-control form-control-sm" value="https://path/to/file/or/folder/" />
                <div class="text-muted fw-normal mt-2 fs-8 px-3">Read only. <a href="settings/.php" class="ms-2">Change permissions</a></div>
            </div>
            <!--end::Link-->
        </div>
    </div>
    <!--end::Card-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::Share link-->

                                <!--begin::More-->
                                <div class="ms-2">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-dots-square fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            Download File
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table="rename">
            Rename
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table-filter="move_row" data-bs-toggle="modal" data-bs-target="#kt_modal_move_to_folder">
            Move to folder
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link text-danger px-3" data-kt-filemanager-table-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::More-->
                            </div>
                        </td>
                    </tr>
                                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <i class="ki-outline ki-picture fs-2x text-primary me-4"></i>                                <a href="#" class="text-gray-800 text-hover-primary">pattern-1.jpg</a>
                            </div>
                        </td>
                        <td>
                            11 KB                        </td>
                        <td>
                            05 May 2023, 10:10 pm                        </td>
                        <td class="text-end" data-kt-filemanager-table="action_dropdown">
                            <div class="d-flex justify-content-end">
                                <!--begin::Share link-->
                                <div class="ms-2" data-kt-filemanger-table="copy_link">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-fasten fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-300px" data-kt-menu="true">
    <!--begin::Card-->
    <div class="card card-flush">
        <div class="card-body p-5">
            <!--begin::Loader-->
            <div class="d-flex" data-kt-filemanger-table="copy_link_generator">
                <!--begin::Spinner-->
                <div class="me-5" data-kt-indicator="on">
                    <span class="indicator-progress">
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </span>
                </div>
                <!--end::Spinner-->

                <!--begin::Label-->
                <div class="fs-6 text-dark">Generating Share Link...</div>
                <!--end::Label-->
            </div>
            <!--end::Loader-->

            <!--begin::Link-->
            <div class="d-flex flex-column text-start d-none" data-kt-filemanger-table="copy_link_result">
                <div class="d-flex mb-3">
                    <i class="ki-outline ki-check fs-2 text-success me-3"></i>                    <div class="fs-6 text-dark">Share Link Generated</div>
                </div>
                <input type="text" class="form-control form-control-sm" value="https://path/to/file/or/folder/" />
                <div class="text-muted fw-normal mt-2 fs-8 px-3">Read only. <a href="settings/.php" class="ms-2">Change permissions</a></div>
            </div>
            <!--end::Link-->
        </div>
    </div>
    <!--end::Card-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::Share link-->

                                <!--begin::More-->
                                <div class="ms-2">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-dots-square fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            Download File
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table="rename">
            Rename
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table-filter="move_row" data-bs-toggle="modal" data-bs-target="#kt_modal_move_to_folder">
            Move to folder
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link text-danger px-3" data-kt-filemanager-table-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::More-->
                            </div>
                        </td>
                    </tr>
                                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <i class="ki-outline ki-picture fs-2x text-primary me-4"></i>                                <a href="#" class="text-gray-800 text-hover-primary">pattern-2.jpg</a>
                            </div>
                        </td>
                        <td>
                            11 KB                        </td>
                        <td>
                            20 Dec 2023, 8:43 pm                        </td>
                        <td class="text-end" data-kt-filemanager-table="action_dropdown">
                            <div class="d-flex justify-content-end">
                                <!--begin::Share link-->
                                <div class="ms-2" data-kt-filemanger-table="copy_link">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-fasten fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-300px" data-kt-menu="true">
    <!--begin::Card-->
    <div class="card card-flush">
        <div class="card-body p-5">
            <!--begin::Loader-->
            <div class="d-flex" data-kt-filemanger-table="copy_link_generator">
                <!--begin::Spinner-->
                <div class="me-5" data-kt-indicator="on">
                    <span class="indicator-progress">
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </span>
                </div>
                <!--end::Spinner-->

                <!--begin::Label-->
                <div class="fs-6 text-dark">Generating Share Link...</div>
                <!--end::Label-->
            </div>
            <!--end::Loader-->

            <!--begin::Link-->
            <div class="d-flex flex-column text-start d-none" data-kt-filemanger-table="copy_link_result">
                <div class="d-flex mb-3">
                    <i class="ki-outline ki-check fs-2 text-success me-3"></i>                    <div class="fs-6 text-dark">Share Link Generated</div>
                </div>
                <input type="text" class="form-control form-control-sm" value="https://path/to/file/or/folder/" />
                <div class="text-muted fw-normal mt-2 fs-8 px-3">Read only. <a href="settings/.php" class="ms-2">Change permissions</a></div>
            </div>
            <!--end::Link-->
        </div>
    </div>
    <!--end::Card-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::Share link-->

                                <!--begin::More-->
                                <div class="ms-2">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-dots-square fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            Download File
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table="rename">
            Rename
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table-filter="move_row" data-bs-toggle="modal" data-bs-target="#kt_modal_move_to_folder">
            Move to folder
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link text-danger px-3" data-kt-filemanager-table-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::More-->
                            </div>
                        </td>
                    </tr>
                                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <i class="ki-outline ki-picture fs-2x text-primary me-4"></i>                                <a href="#" class="text-gray-800 text-hover-primary">pattern-3.jpg</a>
                            </div>
                        </td>
                        <td>
                            11 KB                        </td>
                        <td>
                            10 Mar 2023, 6:05 pm                        </td>
                        <td class="text-end" data-kt-filemanager-table="action_dropdown">
                            <div class="d-flex justify-content-end">
                                <!--begin::Share link-->
                                <div class="ms-2" data-kt-filemanger-table="copy_link">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-fasten fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-300px" data-kt-menu="true">
    <!--begin::Card-->
    <div class="card card-flush">
        <div class="card-body p-5">
            <!--begin::Loader-->
            <div class="d-flex" data-kt-filemanger-table="copy_link_generator">
                <!--begin::Spinner-->
                <div class="me-5" data-kt-indicator="on">
                    <span class="indicator-progress">
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </span>
                </div>
                <!--end::Spinner-->

                <!--begin::Label-->
                <div class="fs-6 text-dark">Generating Share Link...</div>
                <!--end::Label-->
            </div>
            <!--end::Loader-->

            <!--begin::Link-->
            <div class="d-flex flex-column text-start d-none" data-kt-filemanger-table="copy_link_result">
                <div class="d-flex mb-3">
                    <i class="ki-outline ki-check fs-2 text-success me-3"></i>                    <div class="fs-6 text-dark">Share Link Generated</div>
                </div>
                <input type="text" class="form-control form-control-sm" value="https://path/to/file/or/folder/" />
                <div class="text-muted fw-normal mt-2 fs-8 px-3">Read only. <a href="settings/.php" class="ms-2">Change permissions</a></div>
            </div>
            <!--end::Link-->
        </div>
    </div>
    <!--end::Card-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::Share link-->

                                <!--begin::More-->
                                <div class="ms-2">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-dots-square fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            Download File
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table="rename">
            Rename
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table-filter="move_row" data-bs-toggle="modal" data-bs-target="#kt_modal_move_to_folder">
            Move to folder
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link text-danger px-3" data-kt-filemanager-table-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::More-->
                            </div>
                        </td>
                    </tr>
                                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <i class="ki-outline ki-picture fs-2x text-primary me-4"></i>                                <a href="#" class="text-gray-800 text-hover-primary">pattern-4.jpg</a>
                            </div>
                        </td>
                        <td>
                            11 KB                        </td>
                        <td>
                            10 Mar 2023, 8:43 pm                        </td>
                        <td class="text-end" data-kt-filemanager-table="action_dropdown">
                            <div class="d-flex justify-content-end">
                                <!--begin::Share link-->
                                <div class="ms-2" data-kt-filemanger-table="copy_link">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-fasten fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-300px" data-kt-menu="true">
    <!--begin::Card-->
    <div class="card card-flush">
        <div class="card-body p-5">
            <!--begin::Loader-->
            <div class="d-flex" data-kt-filemanger-table="copy_link_generator">
                <!--begin::Spinner-->
                <div class="me-5" data-kt-indicator="on">
                    <span class="indicator-progress">
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </span>
                </div>
                <!--end::Spinner-->

                <!--begin::Label-->
                <div class="fs-6 text-dark">Generating Share Link...</div>
                <!--end::Label-->
            </div>
            <!--end::Loader-->

            <!--begin::Link-->
            <div class="d-flex flex-column text-start d-none" data-kt-filemanger-table="copy_link_result">
                <div class="d-flex mb-3">
                    <i class="ki-outline ki-check fs-2 text-success me-3"></i>                    <div class="fs-6 text-dark">Share Link Generated</div>
                </div>
                <input type="text" class="form-control form-control-sm" value="https://path/to/file/or/folder/" />
                <div class="text-muted fw-normal mt-2 fs-8 px-3">Read only. <a href="settings/.php" class="ms-2">Change permissions</a></div>
            </div>
            <!--end::Link-->
        </div>
    </div>
    <!--end::Card-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::Share link-->

                                <!--begin::More-->
                                <div class="ms-2">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-dots-square fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            Download File
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table="rename">
            Rename
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table-filter="move_row" data-bs-toggle="modal" data-bs-target="#kt_modal_move_to_folder">
            Move to folder
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link text-danger px-3" data-kt-filemanager-table-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::More-->
                            </div>
                        </td>
                    </tr>
                                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <i class="ki-outline ki-picture fs-2x text-primary me-4"></i>                                <a href="#" class="text-gray-800 text-hover-primary">pattern-5.jpg</a>
                            </div>
                        </td>
                        <td>
                            11 KB                        </td>
                        <td>
                            25 Jul 2023, 2:40 pm                        </td>
                        <td class="text-end" data-kt-filemanager-table="action_dropdown">
                            <div class="d-flex justify-content-end">
                                <!--begin::Share link-->
                                <div class="ms-2" data-kt-filemanger-table="copy_link">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-fasten fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-300px" data-kt-menu="true">
    <!--begin::Card-->
    <div class="card card-flush">
        <div class="card-body p-5">
            <!--begin::Loader-->
            <div class="d-flex" data-kt-filemanger-table="copy_link_generator">
                <!--begin::Spinner-->
                <div class="me-5" data-kt-indicator="on">
                    <span class="indicator-progress">
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </span>
                </div>
                <!--end::Spinner-->

                <!--begin::Label-->
                <div class="fs-6 text-dark">Generating Share Link...</div>
                <!--end::Label-->
            </div>
            <!--end::Loader-->

            <!--begin::Link-->
            <div class="d-flex flex-column text-start d-none" data-kt-filemanger-table="copy_link_result">
                <div class="d-flex mb-3">
                    <i class="ki-outline ki-check fs-2 text-success me-3"></i>                    <div class="fs-6 text-dark">Share Link Generated</div>
                </div>
                <input type="text" class="form-control form-control-sm" value="https://path/to/file/or/folder/" />
                <div class="text-muted fw-normal mt-2 fs-8 px-3">Read only. <a href="settings/.php" class="ms-2">Change permissions</a></div>
            </div>
            <!--end::Link-->
        </div>
    </div>
    <!--end::Card-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::Share link-->

                                <!--begin::More-->
                                <div class="ms-2">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-dots-square fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            Download File
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table="rename">
            Rename
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table-filter="move_row" data-bs-toggle="modal" data-bs-target="#kt_modal_move_to_folder">
            Move to folder
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link text-danger px-3" data-kt-filemanager-table-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::More-->
                            </div>
                        </td>
                    </tr>
                                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <i class="ki-outline ki-picture fs-2x text-primary me-4"></i>                                <a href="#" class="text-gray-800 text-hover-primary">background-1.jpg</a>
                            </div>
                        </td>
                        <td>
                            48 KB                        </td>
                        <td>
                            10 Nov 2023, 5:20 pm                        </td>
                        <td class="text-end" data-kt-filemanager-table="action_dropdown">
                            <div class="d-flex justify-content-end">
                                <!--begin::Share link-->
                                <div class="ms-2" data-kt-filemanger-table="copy_link">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-fasten fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-300px" data-kt-menu="true">
    <!--begin::Card-->
    <div class="card card-flush">
        <div class="card-body p-5">
            <!--begin::Loader-->
            <div class="d-flex" data-kt-filemanger-table="copy_link_generator">
                <!--begin::Spinner-->
                <div class="me-5" data-kt-indicator="on">
                    <span class="indicator-progress">
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </span>
                </div>
                <!--end::Spinner-->

                <!--begin::Label-->
                <div class="fs-6 text-dark">Generating Share Link...</div>
                <!--end::Label-->
            </div>
            <!--end::Loader-->

            <!--begin::Link-->
            <div class="d-flex flex-column text-start d-none" data-kt-filemanger-table="copy_link_result">
                <div class="d-flex mb-3">
                    <i class="ki-outline ki-check fs-2 text-success me-3"></i>                    <div class="fs-6 text-dark">Share Link Generated</div>
                </div>
                <input type="text" class="form-control form-control-sm" value="https://path/to/file/or/folder/" />
                <div class="text-muted fw-normal mt-2 fs-8 px-3">Read only. <a href="settings/.php" class="ms-2">Change permissions</a></div>
            </div>
            <!--end::Link-->
        </div>
    </div>
    <!--end::Card-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::Share link-->

                                <!--begin::More-->
                                <div class="ms-2">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-dots-square fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            Download File
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table="rename">
            Rename
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table-filter="move_row" data-bs-toggle="modal" data-bs-target="#kt_modal_move_to_folder">
            Move to folder
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link text-danger px-3" data-kt-filemanager-table-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::More-->
                            </div>
                        </td>
                    </tr>
                                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <i class="ki-outline ki-picture fs-2x text-primary me-4"></i>                                <a href="#" class="text-gray-800 text-hover-primary">background-2.jpg</a>
                            </div>
                        </td>
                        <td>
                            48 KB                        </td>
                        <td>
                            25 Jul 2023, 5:30 pm                        </td>
                        <td class="text-end" data-kt-filemanager-table="action_dropdown">
                            <div class="d-flex justify-content-end">
                                <!--begin::Share link-->
                                <div class="ms-2" data-kt-filemanger-table="copy_link">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-fasten fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-300px" data-kt-menu="true">
    <!--begin::Card-->
    <div class="card card-flush">
        <div class="card-body p-5">
            <!--begin::Loader-->
            <div class="d-flex" data-kt-filemanger-table="copy_link_generator">
                <!--begin::Spinner-->
                <div class="me-5" data-kt-indicator="on">
                    <span class="indicator-progress">
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </span>
                </div>
                <!--end::Spinner-->

                <!--begin::Label-->
                <div class="fs-6 text-dark">Generating Share Link...</div>
                <!--end::Label-->
            </div>
            <!--end::Loader-->

            <!--begin::Link-->
            <div class="d-flex flex-column text-start d-none" data-kt-filemanger-table="copy_link_result">
                <div class="d-flex mb-3">
                    <i class="ki-outline ki-check fs-2 text-success me-3"></i>                    <div class="fs-6 text-dark">Share Link Generated</div>
                </div>
                <input type="text" class="form-control form-control-sm" value="https://path/to/file/or/folder/" />
                <div class="text-muted fw-normal mt-2 fs-8 px-3">Read only. <a href="settings/.php" class="ms-2">Change permissions</a></div>
            </div>
            <!--end::Link-->
        </div>
    </div>
    <!--end::Card-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::Share link-->

                                <!--begin::More-->
                                <div class="ms-2">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-dots-square fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            Download File
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table="rename">
            Rename
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table-filter="move_row" data-bs-toggle="modal" data-bs-target="#kt_modal_move_to_folder">
            Move to folder
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link text-danger px-3" data-kt-filemanager-table-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::More-->
                            </div>
                        </td>
                    </tr>
                                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <i class="ki-outline ki-picture fs-2x text-primary me-4"></i>                                <a href="#" class="text-gray-800 text-hover-primary">background-3.jpg</a>
                            </div>
                        </td>
                        <td>
                            48 KB                        </td>
                        <td>
                            10 Mar 2023, 9:23 pm                        </td>
                        <td class="text-end" data-kt-filemanager-table="action_dropdown">
                            <div class="d-flex justify-content-end">
                                <!--begin::Share link-->
                                <div class="ms-2" data-kt-filemanger-table="copy_link">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-fasten fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-300px" data-kt-menu="true">
    <!--begin::Card-->
    <div class="card card-flush">
        <div class="card-body p-5">
            <!--begin::Loader-->
            <div class="d-flex" data-kt-filemanger-table="copy_link_generator">
                <!--begin::Spinner-->
                <div class="me-5" data-kt-indicator="on">
                    <span class="indicator-progress">
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </span>
                </div>
                <!--end::Spinner-->

                <!--begin::Label-->
                <div class="fs-6 text-dark">Generating Share Link...</div>
                <!--end::Label-->
            </div>
            <!--end::Loader-->

            <!--begin::Link-->
            <div class="d-flex flex-column text-start d-none" data-kt-filemanger-table="copy_link_result">
                <div class="d-flex mb-3">
                    <i class="ki-outline ki-check fs-2 text-success me-3"></i>                    <div class="fs-6 text-dark">Share Link Generated</div>
                </div>
                <input type="text" class="form-control form-control-sm" value="https://path/to/file/or/folder/" />
                <div class="text-muted fw-normal mt-2 fs-8 px-3">Read only. <a href="settings/.php" class="ms-2">Change permissions</a></div>
            </div>
            <!--end::Link-->
        </div>
    </div>
    <!--end::Card-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::Share link-->

                                <!--begin::More-->
                                <div class="ms-2">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-dots-square fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            Download File
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table="rename">
            Rename
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table-filter="move_row" data-bs-toggle="modal" data-bs-target="#kt_modal_move_to_folder">
            Move to folder
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link text-danger px-3" data-kt-filemanager-table-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::More-->
                            </div>
                        </td>
                    </tr>
                                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <i class="ki-outline ki-picture fs-2x text-primary me-4"></i>                                <a href="#" class="text-gray-800 text-hover-primary">background-4.jpg</a>
                            </div>
                        </td>
                        <td>
                            48 KB                        </td>
                        <td>
                            25 Oct 2023, 11:05 am                        </td>
                        <td class="text-end" data-kt-filemanager-table="action_dropdown">
                            <div class="d-flex justify-content-end">
                                <!--begin::Share link-->
                                <div class="ms-2" data-kt-filemanger-table="copy_link">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-fasten fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-300px" data-kt-menu="true">
    <!--begin::Card-->
    <div class="card card-flush">
        <div class="card-body p-5">
            <!--begin::Loader-->
            <div class="d-flex" data-kt-filemanger-table="copy_link_generator">
                <!--begin::Spinner-->
                <div class="me-5" data-kt-indicator="on">
                    <span class="indicator-progress">
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </span>
                </div>
                <!--end::Spinner-->

                <!--begin::Label-->
                <div class="fs-6 text-dark">Generating Share Link...</div>
                <!--end::Label-->
            </div>
            <!--end::Loader-->

            <!--begin::Link-->
            <div class="d-flex flex-column text-start d-none" data-kt-filemanger-table="copy_link_result">
                <div class="d-flex mb-3">
                    <i class="ki-outline ki-check fs-2 text-success me-3"></i>                    <div class="fs-6 text-dark">Share Link Generated</div>
                </div>
                <input type="text" class="form-control form-control-sm" value="https://path/to/file/or/folder/" />
                <div class="text-muted fw-normal mt-2 fs-8 px-3">Read only. <a href="settings/.php" class="ms-2">Change permissions</a></div>
            </div>
            <!--end::Link-->
        </div>
    </div>
    <!--end::Card-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::Share link-->

                                <!--begin::More-->
                                <div class="ms-2">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-dots-square fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            Download File
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table="rename">
            Rename
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table-filter="move_row" data-bs-toggle="modal" data-bs-target="#kt_modal_move_to_folder">
            Move to folder
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link text-danger px-3" data-kt-filemanager-table-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::More-->
                            </div>
                        </td>
                    </tr>
                                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <i class="ki-outline ki-picture fs-2x text-primary me-4"></i>                                <a href="#" class="text-gray-800 text-hover-primary">background-5.jpg</a>
                            </div>
                        </td>
                        <td>
                            48 KB                        </td>
                        <td>
                            21 Feb 2023, 2:40 pm                        </td>
                        <td class="text-end" data-kt-filemanager-table="action_dropdown">
                            <div class="d-flex justify-content-end">
                                <!--begin::Share link-->
                                <div class="ms-2" data-kt-filemanger-table="copy_link">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-fasten fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-300px" data-kt-menu="true">
    <!--begin::Card-->
    <div class="card card-flush">
        <div class="card-body p-5">
            <!--begin::Loader-->
            <div class="d-flex" data-kt-filemanger-table="copy_link_generator">
                <!--begin::Spinner-->
                <div class="me-5" data-kt-indicator="on">
                    <span class="indicator-progress">
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </span>
                </div>
                <!--end::Spinner-->

                <!--begin::Label-->
                <div class="fs-6 text-dark">Generating Share Link...</div>
                <!--end::Label-->
            </div>
            <!--end::Loader-->

            <!--begin::Link-->
            <div class="d-flex flex-column text-start d-none" data-kt-filemanger-table="copy_link_result">
                <div class="d-flex mb-3">
                    <i class="ki-outline ki-check fs-2 text-success me-3"></i>                    <div class="fs-6 text-dark">Share Link Generated</div>
                </div>
                <input type="text" class="form-control form-control-sm" value="https://path/to/file/or/folder/" />
                <div class="text-muted fw-normal mt-2 fs-8 px-3">Read only. <a href="settings/.php" class="ms-2">Change permissions</a></div>
            </div>
            <!--end::Link-->
        </div>
    </div>
    <!--end::Card-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::Share link-->

                                <!--begin::More-->
                                <div class="ms-2">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-dots-square fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            Download File
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table="rename">
            Rename
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table-filter="move_row" data-bs-toggle="modal" data-bs-target="#kt_modal_move_to_folder">
            Move to folder
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link text-danger px-3" data-kt-filemanager-table-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::More-->
                            </div>
                        </td>
                    </tr>
                                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <i class="ki-outline ki-files fs-2x text-primary me-4"></i>                                <a href="#" class="text-gray-800 text-hover-primary">api-keys.php</a>
                            </div>
                        </td>
                        <td>
                            489 KB                        </td>
                        <td>
                            15 Apr 2023, 6:05 pm                        </td>
                        <td class="text-end" data-kt-filemanager-table="action_dropdown">
                            <div class="d-flex justify-content-end">
                                <!--begin::Share link-->
                                <div class="ms-2" data-kt-filemanger-table="copy_link">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-fasten fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-300px" data-kt-menu="true">
    <!--begin::Card-->
    <div class="card card-flush">
        <div class="card-body p-5">
            <!--begin::Loader-->
            <div class="d-flex" data-kt-filemanger-table="copy_link_generator">
                <!--begin::Spinner-->
                <div class="me-5" data-kt-indicator="on">
                    <span class="indicator-progress">
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </span>
                </div>
                <!--end::Spinner-->

                <!--begin::Label-->
                <div class="fs-6 text-dark">Generating Share Link...</div>
                <!--end::Label-->
            </div>
            <!--end::Loader-->

            <!--begin::Link-->
            <div class="d-flex flex-column text-start d-none" data-kt-filemanger-table="copy_link_result">
                <div class="d-flex mb-3">
                    <i class="ki-outline ki-check fs-2 text-success me-3"></i>                    <div class="fs-6 text-dark">Share Link Generated</div>
                </div>
                <input type="text" class="form-control form-control-sm" value="https://path/to/file/or/folder/" />
                <div class="text-muted fw-normal mt-2 fs-8 px-3">Read only. <a href="settings/.php" class="ms-2">Change permissions</a></div>
            </div>
            <!--end::Link-->
        </div>
    </div>
    <!--end::Card-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::Share link-->

                                <!--begin::More-->
                                <div class="ms-2">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-dots-square fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            Download File
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table="rename">
            Rename
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table-filter="move_row" data-bs-toggle="modal" data-bs-target="#kt_modal_move_to_folder">
            Move to folder
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link text-danger px-3" data-kt-filemanager-table-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::More-->
                            </div>
                        </td>
                    </tr>
                                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <i class="ki-outline ki-files fs-2x text-primary me-4"></i>                                <a href="#" class="text-gray-800 text-hover-primary">billing.php</a>
                            </div>
                        </td>
                        <td>
                            554 KB                        </td>
                        <td>
                            10 Nov 2023, 6:05 pm                        </td>
                        <td class="text-end" data-kt-filemanager-table="action_dropdown">
                            <div class="d-flex justify-content-end">
                                <!--begin::Share link-->
                                <div class="ms-2" data-kt-filemanger-table="copy_link">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-fasten fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-300px" data-kt-menu="true">
    <!--begin::Card-->
    <div class="card card-flush">
        <div class="card-body p-5">
            <!--begin::Loader-->
            <div class="d-flex" data-kt-filemanger-table="copy_link_generator">
                <!--begin::Spinner-->
                <div class="me-5" data-kt-indicator="on">
                    <span class="indicator-progress">
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </span>
                </div>
                <!--end::Spinner-->

                <!--begin::Label-->
                <div class="fs-6 text-dark">Generating Share Link...</div>
                <!--end::Label-->
            </div>
            <!--end::Loader-->

            <!--begin::Link-->
            <div class="d-flex flex-column text-start d-none" data-kt-filemanger-table="copy_link_result">
                <div class="d-flex mb-3">
                    <i class="ki-outline ki-check fs-2 text-success me-3"></i>                    <div class="fs-6 text-dark">Share Link Generated</div>
                </div>
                <input type="text" class="form-control form-control-sm" value="https://path/to/file/or/folder/" />
                <div class="text-muted fw-normal mt-2 fs-8 px-3">Read only. <a href="settings/.php" class="ms-2">Change permissions</a></div>
            </div>
            <!--end::Link-->
        </div>
    </div>
    <!--end::Card-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::Share link-->

                                <!--begin::More-->
                                <div class="ms-2">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-dots-square fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            Download File
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table="rename">
            Rename
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table-filter="move_row" data-bs-toggle="modal" data-bs-target="#kt_modal_move_to_folder">
            Move to folder
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link text-danger px-3" data-kt-filemanager-table-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::More-->
                            </div>
                        </td>
                    </tr>
                                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <i class="ki-outline ki-files fs-2x text-primary me-4"></i>                                <a href="#" class="text-gray-800 text-hover-primary">overview.php</a>
                            </div>
                        </td>
                        <td>
                            522 KB                        </td>
                        <td>
                            15 Apr 2023, 2:40 pm                        </td>
                        <td class="text-end" data-kt-filemanager-table="action_dropdown">
                            <div class="d-flex justify-content-end">
                                <!--begin::Share link-->
                                <div class="ms-2" data-kt-filemanger-table="copy_link">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-fasten fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-300px" data-kt-menu="true">
    <!--begin::Card-->
    <div class="card card-flush">
        <div class="card-body p-5">
            <!--begin::Loader-->
            <div class="d-flex" data-kt-filemanger-table="copy_link_generator">
                <!--begin::Spinner-->
                <div class="me-5" data-kt-indicator="on">
                    <span class="indicator-progress">
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </span>
                </div>
                <!--end::Spinner-->

                <!--begin::Label-->
                <div class="fs-6 text-dark">Generating Share Link...</div>
                <!--end::Label-->
            </div>
            <!--end::Loader-->

            <!--begin::Link-->
            <div class="d-flex flex-column text-start d-none" data-kt-filemanger-table="copy_link_result">
                <div class="d-flex mb-3">
                    <i class="ki-outline ki-check fs-2 text-success me-3"></i>                    <div class="fs-6 text-dark">Share Link Generated</div>
                </div>
                <input type="text" class="form-control form-control-sm" value="https://path/to/file/or/folder/" />
                <div class="text-muted fw-normal mt-2 fs-8 px-3">Read only. <a href="settings/.php" class="ms-2">Change permissions</a></div>
            </div>
            <!--end::Link-->
        </div>
    </div>
    <!--end::Card-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::Share link-->

                                <!--begin::More-->
                                <div class="ms-2">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-dots-square fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            Download File
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table="rename">
            Rename
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table-filter="move_row" data-bs-toggle="modal" data-bs-target="#kt_modal_move_to_folder">
            Move to folder
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link text-danger px-3" data-kt-filemanager-table-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::More-->
                            </div>
                        </td>
                    </tr>
                                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <i class="ki-outline ki-files fs-2x text-primary me-4"></i>                                <a href="#" class="text-gray-800 text-hover-primary">referrals.php</a>
                            </div>
                        </td>
                        <td>
                            477 KB                        </td>
                        <td>
                            25 Jul 2023, 5:20 pm                        </td>
                        <td class="text-end" data-kt-filemanager-table="action_dropdown">
                            <div class="d-flex justify-content-end">
                                <!--begin::Share link-->
                                <div class="ms-2" data-kt-filemanger-table="copy_link">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-fasten fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-300px" data-kt-menu="true">
    <!--begin::Card-->
    <div class="card card-flush">
        <div class="card-body p-5">
            <!--begin::Loader-->
            <div class="d-flex" data-kt-filemanger-table="copy_link_generator">
                <!--begin::Spinner-->
                <div class="me-5" data-kt-indicator="on">
                    <span class="indicator-progress">
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </span>
                </div>
                <!--end::Spinner-->

                <!--begin::Label-->
                <div class="fs-6 text-dark">Generating Share Link...</div>
                <!--end::Label-->
            </div>
            <!--end::Loader-->

            <!--begin::Link-->
            <div class="d-flex flex-column text-start d-none" data-kt-filemanger-table="copy_link_result">
                <div class="d-flex mb-3">
                    <i class="ki-outline ki-check fs-2 text-success me-3"></i>                    <div class="fs-6 text-dark">Share Link Generated</div>
                </div>
                <input type="text" class="form-control form-control-sm" value="https://path/to/file/or/folder/" />
                <div class="text-muted fw-normal mt-2 fs-8 px-3">Read only. <a href="settings/.php" class="ms-2">Change permissions</a></div>
            </div>
            <!--end::Link-->
        </div>
    </div>
    <!--end::Card-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::Share link-->

                                <!--begin::More-->
                                <div class="ms-2">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-dots-square fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            Download File
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table="rename">
            Rename
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table-filter="move_row" data-bs-toggle="modal" data-bs-target="#kt_modal_move_to_folder">
            Move to folder
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link text-danger px-3" data-kt-filemanager-table-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::More-->
                            </div>
                        </td>
                    </tr>
                                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <i class="ki-outline ki-files fs-2x text-primary me-4"></i>                                <a href="#" class="text-gray-800 text-hover-primary">security.php</a>
                            </div>
                        </td>
                        <td>
                            514 KB                        </td>
                        <td>
                            20 Jun 2023, 6:43 am                        </td>
                        <td class="text-end" data-kt-filemanager-table="action_dropdown">
                            <div class="d-flex justify-content-end">
                                <!--begin::Share link-->
                                <div class="ms-2" data-kt-filemanger-table="copy_link">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-fasten fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-300px" data-kt-menu="true">
    <!--begin::Card-->
    <div class="card card-flush">
        <div class="card-body p-5">
            <!--begin::Loader-->
            <div class="d-flex" data-kt-filemanger-table="copy_link_generator">
                <!--begin::Spinner-->
                <div class="me-5" data-kt-indicator="on">
                    <span class="indicator-progress">
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </span>
                </div>
                <!--end::Spinner-->

                <!--begin::Label-->
                <div class="fs-6 text-dark">Generating Share Link...</div>
                <!--end::Label-->
            </div>
            <!--end::Loader-->

            <!--begin::Link-->
            <div class="d-flex flex-column text-start d-none" data-kt-filemanger-table="copy_link_result">
                <div class="d-flex mb-3">
                    <i class="ki-outline ki-check fs-2 text-success me-3"></i>                    <div class="fs-6 text-dark">Share Link Generated</div>
                </div>
                <input type="text" class="form-control form-control-sm" value="https://path/to/file/or/folder/" />
                <div class="text-muted fw-normal mt-2 fs-8 px-3">Read only. <a href="settings/.php" class="ms-2">Change permissions</a></div>
            </div>
            <!--end::Link-->
        </div>
    </div>
    <!--end::Card-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::Share link-->

                                <!--begin::More-->
                                <div class="ms-2">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-dots-square fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            Download File
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table="rename">
            Rename
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table-filter="move_row" data-bs-toggle="modal" data-bs-target="#kt_modal_move_to_folder">
            Move to folder
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link text-danger px-3" data-kt-filemanager-table-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::More-->
                            </div>
                        </td>
                    </tr>
                                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <i class="ki-outline ki-files fs-2x text-primary me-4"></i>                                <a href="#" class="text-gray-800 text-hover-primary">settings.php</a>
                            </div>
                        </td>
                        <td>
                            475 KB                        </td>
                        <td>
                            19 Aug 2023, 11:05 am                        </td>
                        <td class="text-end" data-kt-filemanager-table="action_dropdown">
                            <div class="d-flex justify-content-end">
                                <!--begin::Share link-->
                                <div class="ms-2" data-kt-filemanger-table="copy_link">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-fasten fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-300px" data-kt-menu="true">
    <!--begin::Card-->
    <div class="card card-flush">
        <div class="card-body p-5">
            <!--begin::Loader-->
            <div class="d-flex" data-kt-filemanger-table="copy_link_generator">
                <!--begin::Spinner-->
                <div class="me-5" data-kt-indicator="on">
                    <span class="indicator-progress">
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </span>
                </div>
                <!--end::Spinner-->

                <!--begin::Label-->
                <div class="fs-6 text-dark">Generating Share Link...</div>
                <!--end::Label-->
            </div>
            <!--end::Loader-->

            <!--begin::Link-->
            <div class="d-flex flex-column text-start d-none" data-kt-filemanger-table="copy_link_result">
                <div class="d-flex mb-3">
                    <i class="ki-outline ki-check fs-2 text-success me-3"></i>                    <div class="fs-6 text-dark">Share Link Generated</div>
                </div>
                <input type="text" class="form-control form-control-sm" value="https://path/to/file/or/folder/" />
                <div class="text-muted fw-normal mt-2 fs-8 px-3">Read only. <a href="settings/.php" class="ms-2">Change permissions</a></div>
            </div>
            <!--end::Link-->
        </div>
    </div>
    <!--end::Card-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::Share link-->

                                <!--begin::More-->
                                <div class="ms-2">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-dots-square fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            Download File
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table="rename">
            Rename
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table-filter="move_row" data-bs-toggle="modal" data-bs-target="#kt_modal_move_to_folder">
            Move to folder
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link text-danger px-3" data-kt-filemanager-table-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::More-->
                            </div>
                        </td>
                    </tr>
                                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <i class="ki-outline ki-files fs-2x text-primary me-4"></i>                                <a href="#" class="text-gray-800 text-hover-primary">statements.php</a>
                            </div>
                        </td>
                        <td>
                            552 KB                        </td>
                        <td>
                            10 Mar 2023, 8:43 pm                        </td>
                        <td class="text-end" data-kt-filemanager-table="action_dropdown">
                            <div class="d-flex justify-content-end">
                                <!--begin::Share link-->
                                <div class="ms-2" data-kt-filemanger-table="copy_link">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-fasten fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-300px" data-kt-menu="true">
    <!--begin::Card-->
    <div class="card card-flush">
        <div class="card-body p-5">
            <!--begin::Loader-->
            <div class="d-flex" data-kt-filemanger-table="copy_link_generator">
                <!--begin::Spinner-->
                <div class="me-5" data-kt-indicator="on">
                    <span class="indicator-progress">
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </span>
                </div>
                <!--end::Spinner-->

                <!--begin::Label-->
                <div class="fs-6 text-dark">Generating Share Link...</div>
                <!--end::Label-->
            </div>
            <!--end::Loader-->

            <!--begin::Link-->
            <div class="d-flex flex-column text-start d-none" data-kt-filemanger-table="copy_link_result">
                <div class="d-flex mb-3">
                    <i class="ki-outline ki-check fs-2 text-success me-3"></i>                    <div class="fs-6 text-dark">Share Link Generated</div>
                </div>
                <input type="text" class="form-control form-control-sm" value="https://path/to/file/or/folder/" />
                <div class="text-muted fw-normal mt-2 fs-8 px-3">Read only. <a href="settings/.php" class="ms-2">Change permissions</a></div>
            </div>
            <!--end::Link-->
        </div>
    </div>
    <!--end::Card-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::Share link-->

                                <!--begin::More-->
                                <div class="ms-2">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-dots-square fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            Download File
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table="rename">
            Rename
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table-filter="move_row" data-bs-toggle="modal" data-bs-target="#kt_modal_move_to_folder">
            Move to folder
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link text-danger px-3" data-kt-filemanager-table-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::More-->
                            </div>
                        </td>
                    </tr>
                                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <i class="ki-outline ki-files fs-2x text-primary me-4"></i>                                <a href="#" class="text-gray-800 text-hover-primary">widgets-1.php</a>
                            </div>
                        </td>
                        <td>
                            554 KB                        </td>
                        <td>
                            20 Jun 2023, 5:30 pm                        </td>
                        <td class="text-end" data-kt-filemanager-table="action_dropdown">
                            <div class="d-flex justify-content-end">
                                <!--begin::Share link-->
                                <div class="ms-2" data-kt-filemanger-table="copy_link">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-fasten fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-300px" data-kt-menu="true">
    <!--begin::Card-->
    <div class="card card-flush">
        <div class="card-body p-5">
            <!--begin::Loader-->
            <div class="d-flex" data-kt-filemanger-table="copy_link_generator">
                <!--begin::Spinner-->
                <div class="me-5" data-kt-indicator="on">
                    <span class="indicator-progress">
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </span>
                </div>
                <!--end::Spinner-->

                <!--begin::Label-->
                <div class="fs-6 text-dark">Generating Share Link...</div>
                <!--end::Label-->
            </div>
            <!--end::Loader-->

            <!--begin::Link-->
            <div class="d-flex flex-column text-start d-none" data-kt-filemanger-table="copy_link_result">
                <div class="d-flex mb-3">
                    <i class="ki-outline ki-check fs-2 text-success me-3"></i>                    <div class="fs-6 text-dark">Share Link Generated</div>
                </div>
                <input type="text" class="form-control form-control-sm" value="https://path/to/file/or/folder/" />
                <div class="text-muted fw-normal mt-2 fs-8 px-3">Read only. <a href="settings/.php" class="ms-2">Change permissions</a></div>
            </div>
            <!--end::Link-->
        </div>
    </div>
    <!--end::Card-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::Share link-->

                                <!--begin::More-->
                                <div class="ms-2">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-dots-square fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            Download File
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table="rename">
            Rename
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table-filter="move_row" data-bs-toggle="modal" data-bs-target="#kt_modal_move_to_folder">
            Move to folder
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link text-danger px-3" data-kt-filemanager-table-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::More-->
                            </div>
                        </td>
                    </tr>
                                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <i class="ki-outline ki-files fs-2x text-primary me-4"></i>                                <a href="#" class="text-gray-800 text-hover-primary">widgets-2.php</a>
                            </div>
                        </td>
                        <td>
                            522 KB                        </td>
                        <td>
                            24 Jun 2023, 5:30 pm                        </td>
                        <td class="text-end" data-kt-filemanager-table="action_dropdown">
                            <div class="d-flex justify-content-end">
                                <!--begin::Share link-->
                                <div class="ms-2" data-kt-filemanger-table="copy_link">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-fasten fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-300px" data-kt-menu="true">
    <!--begin::Card-->
    <div class="card card-flush">
        <div class="card-body p-5">
            <!--begin::Loader-->
            <div class="d-flex" data-kt-filemanger-table="copy_link_generator">
                <!--begin::Spinner-->
                <div class="me-5" data-kt-indicator="on">
                    <span class="indicator-progress">
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </span>
                </div>
                <!--end::Spinner-->

                <!--begin::Label-->
                <div class="fs-6 text-dark">Generating Share Link...</div>
                <!--end::Label-->
            </div>
            <!--end::Loader-->

            <!--begin::Link-->
            <div class="d-flex flex-column text-start d-none" data-kt-filemanger-table="copy_link_result">
                <div class="d-flex mb-3">
                    <i class="ki-outline ki-check fs-2 text-success me-3"></i>                    <div class="fs-6 text-dark">Share Link Generated</div>
                </div>
                <input type="text" class="form-control form-control-sm" value="https://path/to/file/or/folder/" />
                <div class="text-muted fw-normal mt-2 fs-8 px-3">Read only. <a href="settings/.php" class="ms-2">Change permissions</a></div>
            </div>
            <!--end::Link-->
        </div>
    </div>
    <!--end::Card-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::Share link-->

                                <!--begin::More-->
                                <div class="ms-2">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-dots-square fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            Download File
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table="rename">
            Rename
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table-filter="move_row" data-bs-toggle="modal" data-bs-target="#kt_modal_move_to_folder">
            Move to folder
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link text-danger px-3" data-kt-filemanager-table-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::More-->
                            </div>
                        </td>
                    </tr>
                                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <i class="ki-outline ki-files fs-2x text-primary me-4"></i>                                <a href="#" class="text-gray-800 text-hover-primary">widgets-3.php</a>
                            </div>
                        </td>
                        <td>
                            477 KB                        </td>
                        <td>
                            15 Apr 2023, 6:05 pm                        </td>
                        <td class="text-end" data-kt-filemanager-table="action_dropdown">
                            <div class="d-flex justify-content-end">
                                <!--begin::Share link-->
                                <div class="ms-2" data-kt-filemanger-table="copy_link">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-fasten fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-300px" data-kt-menu="true">
    <!--begin::Card-->
    <div class="card card-flush">
        <div class="card-body p-5">
            <!--begin::Loader-->
            <div class="d-flex" data-kt-filemanger-table="copy_link_generator">
                <!--begin::Spinner-->
                <div class="me-5" data-kt-indicator="on">
                    <span class="indicator-progress">
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </span>
                </div>
                <!--end::Spinner-->

                <!--begin::Label-->
                <div class="fs-6 text-dark">Generating Share Link...</div>
                <!--end::Label-->
            </div>
            <!--end::Loader-->

            <!--begin::Link-->
            <div class="d-flex flex-column text-start d-none" data-kt-filemanger-table="copy_link_result">
                <div class="d-flex mb-3">
                    <i class="ki-outline ki-check fs-2 text-success me-3"></i>                    <div class="fs-6 text-dark">Share Link Generated</div>
                </div>
                <input type="text" class="form-control form-control-sm" value="https://path/to/file/or/folder/" />
                <div class="text-muted fw-normal mt-2 fs-8 px-3">Read only. <a href="settings/.php" class="ms-2">Change permissions</a></div>
            </div>
            <!--end::Link-->
        </div>
    </div>
    <!--end::Card-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::Share link-->

                                <!--begin::More-->
                                <div class="ms-2">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-dots-square fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            Download File
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table="rename">
            Rename
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table-filter="move_row" data-bs-toggle="modal" data-bs-target="#kt_modal_move_to_folder">
            Move to folder
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link text-danger px-3" data-kt-filemanager-table-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::More-->
                            </div>
                        </td>
                    </tr>
                                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <i class="ki-outline ki-files fs-2x text-primary me-4"></i>                                <a href="#" class="text-gray-800 text-hover-primary">widgets-4.php</a>
                            </div>
                        </td>
                        <td>
                            514 KB                        </td>
                        <td>
                            24 Jun 2023, 2:40 pm                        </td>
                        <td class="text-end" data-kt-filemanager-table="action_dropdown">
                            <div class="d-flex justify-content-end">
                                <!--begin::Share link-->
                                <div class="ms-2" data-kt-filemanger-table="copy_link">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-fasten fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-300px" data-kt-menu="true">
    <!--begin::Card-->
    <div class="card card-flush">
        <div class="card-body p-5">
            <!--begin::Loader-->
            <div class="d-flex" data-kt-filemanger-table="copy_link_generator">
                <!--begin::Spinner-->
                <div class="me-5" data-kt-indicator="on">
                    <span class="indicator-progress">
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </span>
                </div>
                <!--end::Spinner-->

                <!--begin::Label-->
                <div class="fs-6 text-dark">Generating Share Link...</div>
                <!--end::Label-->
            </div>
            <!--end::Loader-->

            <!--begin::Link-->
            <div class="d-flex flex-column text-start d-none" data-kt-filemanger-table="copy_link_result">
                <div class="d-flex mb-3">
                    <i class="ki-outline ki-check fs-2 text-success me-3"></i>                    <div class="fs-6 text-dark">Share Link Generated</div>
                </div>
                <input type="text" class="form-control form-control-sm" value="https://path/to/file/or/folder/" />
                <div class="text-muted fw-normal mt-2 fs-8 px-3">Read only. <a href="settings/.php" class="ms-2">Change permissions</a></div>
            </div>
            <!--end::Link-->
        </div>
    </div>
    <!--end::Card-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::Share link-->

                                <!--begin::More-->
                                <div class="ms-2">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-dots-square fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            Download File
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table="rename">
            Rename
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table-filter="move_row" data-bs-toggle="modal" data-bs-target="#kt_modal_move_to_folder">
            Move to folder
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link text-danger px-3" data-kt-filemanager-table-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::More-->
                            </div>
                        </td>
                    </tr>
                                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <i class="ki-outline ki-files fs-2x text-primary me-4"></i>                                <a href="#" class="text-gray-800 text-hover-primary">widgets-5.php</a>
                            </div>
                        </td>
                        <td>
                            475 KB                        </td>
                        <td>
                            25 Jul 2023, 8:43 pm                        </td>
                        <td class="text-end" data-kt-filemanager-table="action_dropdown">
                            <div class="d-flex justify-content-end">
                                <!--begin::Share link-->
                                <div class="ms-2" data-kt-filemanger-table="copy_link">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-fasten fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-300px" data-kt-menu="true">
    <!--begin::Card-->
    <div class="card card-flush">
        <div class="card-body p-5">
            <!--begin::Loader-->
            <div class="d-flex" data-kt-filemanger-table="copy_link_generator">
                <!--begin::Spinner-->
                <div class="me-5" data-kt-indicator="on">
                    <span class="indicator-progress">
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </span>
                </div>
                <!--end::Spinner-->

                <!--begin::Label-->
                <div class="fs-6 text-dark">Generating Share Link...</div>
                <!--end::Label-->
            </div>
            <!--end::Loader-->

            <!--begin::Link-->
            <div class="d-flex flex-column text-start d-none" data-kt-filemanger-table="copy_link_result">
                <div class="d-flex mb-3">
                    <i class="ki-outline ki-check fs-2 text-success me-3"></i>                    <div class="fs-6 text-dark">Share Link Generated</div>
                </div>
                <input type="text" class="form-control form-control-sm" value="https://path/to/file/or/folder/" />
                <div class="text-muted fw-normal mt-2 fs-8 px-3">Read only. <a href="settings/.php" class="ms-2">Change permissions</a></div>
            </div>
            <!--end::Link-->
        </div>
    </div>
    <!--end::Card-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::Share link-->

                                <!--begin::More-->
                                <div class="ms-2">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-dots-square fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            Download File
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table="rename">
            Rename
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table-filter="move_row" data-bs-toggle="modal" data-bs-target="#kt_modal_move_to_folder">
            Move to folder
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link text-danger px-3" data-kt-filemanager-table-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::More-->
                            </div>
                        </td>
                    </tr>
                                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <i class="ki-outline ki-picture fs-2x text-primary me-4"></i>                                <a href="#" class="text-gray-800 text-hover-primary">pattern-1.jpg</a>
                            </div>
                        </td>
                        <td>
                            11 KB                        </td>
                        <td>
                            15 Apr 2023, 6:05 pm                        </td>
                        <td class="text-end" data-kt-filemanager-table="action_dropdown">
                            <div class="d-flex justify-content-end">
                                <!--begin::Share link-->
                                <div class="ms-2" data-kt-filemanger-table="copy_link">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-fasten fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-300px" data-kt-menu="true">
    <!--begin::Card-->
    <div class="card card-flush">
        <div class="card-body p-5">
            <!--begin::Loader-->
            <div class="d-flex" data-kt-filemanger-table="copy_link_generator">
                <!--begin::Spinner-->
                <div class="me-5" data-kt-indicator="on">
                    <span class="indicator-progress">
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </span>
                </div>
                <!--end::Spinner-->

                <!--begin::Label-->
                <div class="fs-6 text-dark">Generating Share Link...</div>
                <!--end::Label-->
            </div>
            <!--end::Loader-->

            <!--begin::Link-->
            <div class="d-flex flex-column text-start d-none" data-kt-filemanger-table="copy_link_result">
                <div class="d-flex mb-3">
                    <i class="ki-outline ki-check fs-2 text-success me-3"></i>                    <div class="fs-6 text-dark">Share Link Generated</div>
                </div>
                <input type="text" class="form-control form-control-sm" value="https://path/to/file/or/folder/" />
                <div class="text-muted fw-normal mt-2 fs-8 px-3">Read only. <a href="settings/.php" class="ms-2">Change permissions</a></div>
            </div>
            <!--end::Link-->
        </div>
    </div>
    <!--end::Card-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::Share link-->

                                <!--begin::More-->
                                <div class="ms-2">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-dots-square fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            Download File
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table="rename">
            Rename
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table-filter="move_row" data-bs-toggle="modal" data-bs-target="#kt_modal_move_to_folder">
            Move to folder
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link text-danger px-3" data-kt-filemanager-table-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::More-->
                            </div>
                        </td>
                    </tr>
                                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <i class="ki-outline ki-picture fs-2x text-primary me-4"></i>                                <a href="#" class="text-gray-800 text-hover-primary">pattern-2.jpg</a>
                            </div>
                        </td>
                        <td>
                            11 KB                        </td>
                        <td>
                            21 Feb 2023, 9:23 pm                        </td>
                        <td class="text-end" data-kt-filemanager-table="action_dropdown">
                            <div class="d-flex justify-content-end">
                                <!--begin::Share link-->
                                <div class="ms-2" data-kt-filemanger-table="copy_link">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-fasten fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-300px" data-kt-menu="true">
    <!--begin::Card-->
    <div class="card card-flush">
        <div class="card-body p-5">
            <!--begin::Loader-->
            <div class="d-flex" data-kt-filemanger-table="copy_link_generator">
                <!--begin::Spinner-->
                <div class="me-5" data-kt-indicator="on">
                    <span class="indicator-progress">
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </span>
                </div>
                <!--end::Spinner-->

                <!--begin::Label-->
                <div class="fs-6 text-dark">Generating Share Link...</div>
                <!--end::Label-->
            </div>
            <!--end::Loader-->

            <!--begin::Link-->
            <div class="d-flex flex-column text-start d-none" data-kt-filemanger-table="copy_link_result">
                <div class="d-flex mb-3">
                    <i class="ki-outline ki-check fs-2 text-success me-3"></i>                    <div class="fs-6 text-dark">Share Link Generated</div>
                </div>
                <input type="text" class="form-control form-control-sm" value="https://path/to/file/or/folder/" />
                <div class="text-muted fw-normal mt-2 fs-8 px-3">Read only. <a href="settings/.php" class="ms-2">Change permissions</a></div>
            </div>
            <!--end::Link-->
        </div>
    </div>
    <!--end::Card-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::Share link-->

                                <!--begin::More-->
                                <div class="ms-2">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-dots-square fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            Download File
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table="rename">
            Rename
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table-filter="move_row" data-bs-toggle="modal" data-bs-target="#kt_modal_move_to_folder">
            Move to folder
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link text-danger px-3" data-kt-filemanager-table-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::More-->
                            </div>
                        </td>
                    </tr>
                                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <i class="ki-outline ki-picture fs-2x text-primary me-4"></i>                                <a href="#" class="text-gray-800 text-hover-primary">pattern-3.jpg</a>
                            </div>
                        </td>
                        <td>
                            11 KB                        </td>
                        <td>
                            20 Jun 2023, 6:05 pm                        </td>
                        <td class="text-end" data-kt-filemanager-table="action_dropdown">
                            <div class="d-flex justify-content-end">
                                <!--begin::Share link-->
                                <div class="ms-2" data-kt-filemanger-table="copy_link">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-fasten fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-300px" data-kt-menu="true">
    <!--begin::Card-->
    <div class="card card-flush">
        <div class="card-body p-5">
            <!--begin::Loader-->
            <div class="d-flex" data-kt-filemanger-table="copy_link_generator">
                <!--begin::Spinner-->
                <div class="me-5" data-kt-indicator="on">
                    <span class="indicator-progress">
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </span>
                </div>
                <!--end::Spinner-->

                <!--begin::Label-->
                <div class="fs-6 text-dark">Generating Share Link...</div>
                <!--end::Label-->
            </div>
            <!--end::Loader-->

            <!--begin::Link-->
            <div class="d-flex flex-column text-start d-none" data-kt-filemanger-table="copy_link_result">
                <div class="d-flex mb-3">
                    <i class="ki-outline ki-check fs-2 text-success me-3"></i>                    <div class="fs-6 text-dark">Share Link Generated</div>
                </div>
                <input type="text" class="form-control form-control-sm" value="https://path/to/file/or/folder/" />
                <div class="text-muted fw-normal mt-2 fs-8 px-3">Read only. <a href="settings/.php" class="ms-2">Change permissions</a></div>
            </div>
            <!--end::Link-->
        </div>
    </div>
    <!--end::Card-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::Share link-->

                                <!--begin::More-->
                                <div class="ms-2">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-dots-square fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            Download File
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table="rename">
            Rename
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table-filter="move_row" data-bs-toggle="modal" data-bs-target="#kt_modal_move_to_folder">
            Move to folder
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link text-danger px-3" data-kt-filemanager-table-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::More-->
                            </div>
                        </td>
                    </tr>
                                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <i class="ki-outline ki-picture fs-2x text-primary me-4"></i>                                <a href="#" class="text-gray-800 text-hover-primary">pattern-4.jpg</a>
                            </div>
                        </td>
                        <td>
                            11 KB                        </td>
                        <td>
                            10 Nov 2023, 5:20 pm                        </td>
                        <td class="text-end" data-kt-filemanager-table="action_dropdown">
                            <div class="d-flex justify-content-end">
                                <!--begin::Share link-->
                                <div class="ms-2" data-kt-filemanger-table="copy_link">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-fasten fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-300px" data-kt-menu="true">
    <!--begin::Card-->
    <div class="card card-flush">
        <div class="card-body p-5">
            <!--begin::Loader-->
            <div class="d-flex" data-kt-filemanger-table="copy_link_generator">
                <!--begin::Spinner-->
                <div class="me-5" data-kt-indicator="on">
                    <span class="indicator-progress">
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </span>
                </div>
                <!--end::Spinner-->

                <!--begin::Label-->
                <div class="fs-6 text-dark">Generating Share Link...</div>
                <!--end::Label-->
            </div>
            <!--end::Loader-->

            <!--begin::Link-->
            <div class="d-flex flex-column text-start d-none" data-kt-filemanger-table="copy_link_result">
                <div class="d-flex mb-3">
                    <i class="ki-outline ki-check fs-2 text-success me-3"></i>                    <div class="fs-6 text-dark">Share Link Generated</div>
                </div>
                <input type="text" class="form-control form-control-sm" value="https://path/to/file/or/folder/" />
                <div class="text-muted fw-normal mt-2 fs-8 px-3">Read only. <a href="settings/.php" class="ms-2">Change permissions</a></div>
            </div>
            <!--end::Link-->
        </div>
    </div>
    <!--end::Card-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::Share link-->

                                <!--begin::More-->
                                <div class="ms-2">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-dots-square fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            Download File
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table="rename">
            Rename
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table-filter="move_row" data-bs-toggle="modal" data-bs-target="#kt_modal_move_to_folder">
            Move to folder
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link text-danger px-3" data-kt-filemanager-table-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::More-->
                            </div>
                        </td>
                    </tr>
                                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <i class="ki-outline ki-picture fs-2x text-primary me-4"></i>                                <a href="#" class="text-gray-800 text-hover-primary">pattern-5.jpg</a>
                            </div>
                        </td>
                        <td>
                            11 KB                        </td>
                        <td>
                            20 Dec 2023, 11:30 am                        </td>
                        <td class="text-end" data-kt-filemanager-table="action_dropdown">
                            <div class="d-flex justify-content-end">
                                <!--begin::Share link-->
                                <div class="ms-2" data-kt-filemanger-table="copy_link">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-fasten fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-300px" data-kt-menu="true">
    <!--begin::Card-->
    <div class="card card-flush">
        <div class="card-body p-5">
            <!--begin::Loader-->
            <div class="d-flex" data-kt-filemanger-table="copy_link_generator">
                <!--begin::Spinner-->
                <div class="me-5" data-kt-indicator="on">
                    <span class="indicator-progress">
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </span>
                </div>
                <!--end::Spinner-->

                <!--begin::Label-->
                <div class="fs-6 text-dark">Generating Share Link...</div>
                <!--end::Label-->
            </div>
            <!--end::Loader-->

            <!--begin::Link-->
            <div class="d-flex flex-column text-start d-none" data-kt-filemanger-table="copy_link_result">
                <div class="d-flex mb-3">
                    <i class="ki-outline ki-check fs-2 text-success me-3"></i>                    <div class="fs-6 text-dark">Share Link Generated</div>
                </div>
                <input type="text" class="form-control form-control-sm" value="https://path/to/file/or/folder/" />
                <div class="text-muted fw-normal mt-2 fs-8 px-3">Read only. <a href="settings/.php" class="ms-2">Change permissions</a></div>
            </div>
            <!--end::Link-->
        </div>
    </div>
    <!--end::Card-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::Share link-->

                                <!--begin::More-->
                                <div class="ms-2">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-dots-square fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            Download File
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table="rename">
            Rename
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table-filter="move_row" data-bs-toggle="modal" data-bs-target="#kt_modal_move_to_folder">
            Move to folder
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link text-danger px-3" data-kt-filemanager-table-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::More-->
                            </div>
                        </td>
                    </tr>
                                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <i class="ki-outline ki-picture fs-2x text-primary me-4"></i>                                <a href="#" class="text-gray-800 text-hover-primary">background-1.jpg</a>
                            </div>
                        </td>
                        <td>
                            48 KB                        </td>
                        <td>
                            20 Jun 2023, 6:43 am                        </td>
                        <td class="text-end" data-kt-filemanager-table="action_dropdown">
                            <div class="d-flex justify-content-end">
                                <!--begin::Share link-->
                                <div class="ms-2" data-kt-filemanger-table="copy_link">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-fasten fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-300px" data-kt-menu="true">
    <!--begin::Card-->
    <div class="card card-flush">
        <div class="card-body p-5">
            <!--begin::Loader-->
            <div class="d-flex" data-kt-filemanger-table="copy_link_generator">
                <!--begin::Spinner-->
                <div class="me-5" data-kt-indicator="on">
                    <span class="indicator-progress">
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </span>
                </div>
                <!--end::Spinner-->

                <!--begin::Label-->
                <div class="fs-6 text-dark">Generating Share Link...</div>
                <!--end::Label-->
            </div>
            <!--end::Loader-->

            <!--begin::Link-->
            <div class="d-flex flex-column text-start d-none" data-kt-filemanger-table="copy_link_result">
                <div class="d-flex mb-3">
                    <i class="ki-outline ki-check fs-2 text-success me-3"></i>                    <div class="fs-6 text-dark">Share Link Generated</div>
                </div>
                <input type="text" class="form-control form-control-sm" value="https://path/to/file/or/folder/" />
                <div class="text-muted fw-normal mt-2 fs-8 px-3">Read only. <a href="settings/.php" class="ms-2">Change permissions</a></div>
            </div>
            <!--end::Link-->
        </div>
    </div>
    <!--end::Card-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::Share link-->

                                <!--begin::More-->
                                <div class="ms-2">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-dots-square fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            Download File
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table="rename">
            Rename
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table-filter="move_row" data-bs-toggle="modal" data-bs-target="#kt_modal_move_to_folder">
            Move to folder
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link text-danger px-3" data-kt-filemanager-table-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::More-->
                            </div>
                        </td>
                    </tr>
                                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <i class="ki-outline ki-picture fs-2x text-primary me-4"></i>                                <a href="#" class="text-gray-800 text-hover-primary">background-2.jpg</a>
                            </div>
                        </td>
                        <td>
                            48 KB                        </td>
                        <td>
                            05 May 2023, 9:23 pm                        </td>
                        <td class="text-end" data-kt-filemanager-table="action_dropdown">
                            <div class="d-flex justify-content-end">
                                <!--begin::Share link-->
                                <div class="ms-2" data-kt-filemanger-table="copy_link">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-fasten fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-300px" data-kt-menu="true">
    <!--begin::Card-->
    <div class="card card-flush">
        <div class="card-body p-5">
            <!--begin::Loader-->
            <div class="d-flex" data-kt-filemanger-table="copy_link_generator">
                <!--begin::Spinner-->
                <div class="me-5" data-kt-indicator="on">
                    <span class="indicator-progress">
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </span>
                </div>
                <!--end::Spinner-->

                <!--begin::Label-->
                <div class="fs-6 text-dark">Generating Share Link...</div>
                <!--end::Label-->
            </div>
            <!--end::Loader-->

            <!--begin::Link-->
            <div class="d-flex flex-column text-start d-none" data-kt-filemanger-table="copy_link_result">
                <div class="d-flex mb-3">
                    <i class="ki-outline ki-check fs-2 text-success me-3"></i>                    <div class="fs-6 text-dark">Share Link Generated</div>
                </div>
                <input type="text" class="form-control form-control-sm" value="https://path/to/file/or/folder/" />
                <div class="text-muted fw-normal mt-2 fs-8 px-3">Read only. <a href="settings/.php" class="ms-2">Change permissions</a></div>
            </div>
            <!--end::Link-->
        </div>
    </div>
    <!--end::Card-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::Share link-->

                                <!--begin::More-->
                                <div class="ms-2">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-dots-square fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            Download File
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table="rename">
            Rename
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table-filter="move_row" data-bs-toggle="modal" data-bs-target="#kt_modal_move_to_folder">
            Move to folder
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link text-danger px-3" data-kt-filemanager-table-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::More-->
                            </div>
                        </td>
                    </tr>
                                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <i class="ki-outline ki-picture fs-2x text-primary me-4"></i>                                <a href="#" class="text-gray-800 text-hover-primary">background-3.jpg</a>
                            </div>
                        </td>
                        <td>
                            48 KB                        </td>
                        <td>
                            05 May 2023, 6:05 pm                        </td>
                        <td class="text-end" data-kt-filemanager-table="action_dropdown">
                            <div class="d-flex justify-content-end">
                                <!--begin::Share link-->
                                <div class="ms-2" data-kt-filemanger-table="copy_link">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-fasten fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-300px" data-kt-menu="true">
    <!--begin::Card-->
    <div class="card card-flush">
        <div class="card-body p-5">
            <!--begin::Loader-->
            <div class="d-flex" data-kt-filemanger-table="copy_link_generator">
                <!--begin::Spinner-->
                <div class="me-5" data-kt-indicator="on">
                    <span class="indicator-progress">
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </span>
                </div>
                <!--end::Spinner-->

                <!--begin::Label-->
                <div class="fs-6 text-dark">Generating Share Link...</div>
                <!--end::Label-->
            </div>
            <!--end::Loader-->

            <!--begin::Link-->
            <div class="d-flex flex-column text-start d-none" data-kt-filemanger-table="copy_link_result">
                <div class="d-flex mb-3">
                    <i class="ki-outline ki-check fs-2 text-success me-3"></i>                    <div class="fs-6 text-dark">Share Link Generated</div>
                </div>
                <input type="text" class="form-control form-control-sm" value="https://path/to/file/or/folder/" />
                <div class="text-muted fw-normal mt-2 fs-8 px-3">Read only. <a href="settings/.php" class="ms-2">Change permissions</a></div>
            </div>
            <!--end::Link-->
        </div>
    </div>
    <!--end::Card-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::Share link-->

                                <!--begin::More-->
                                <div class="ms-2">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-dots-square fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            Download File
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table="rename">
            Rename
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table-filter="move_row" data-bs-toggle="modal" data-bs-target="#kt_modal_move_to_folder">
            Move to folder
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link text-danger px-3" data-kt-filemanager-table-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::More-->
                            </div>
                        </td>
                    </tr>
                                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <i class="ki-outline ki-picture fs-2x text-primary me-4"></i>                                <a href="#" class="text-gray-800 text-hover-primary">background-4.jpg</a>
                            </div>
                        </td>
                        <td>
                            48 KB                        </td>
                        <td>
                            25 Jul 2023, 5:30 pm                        </td>
                        <td class="text-end" data-kt-filemanager-table="action_dropdown">
                            <div class="d-flex justify-content-end">
                                <!--begin::Share link-->
                                <div class="ms-2" data-kt-filemanger-table="copy_link">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-fasten fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-300px" data-kt-menu="true">
    <!--begin::Card-->
    <div class="card card-flush">
        <div class="card-body p-5">
            <!--begin::Loader-->
            <div class="d-flex" data-kt-filemanger-table="copy_link_generator">
                <!--begin::Spinner-->
                <div class="me-5" data-kt-indicator="on">
                    <span class="indicator-progress">
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </span>
                </div>
                <!--end::Spinner-->

                <!--begin::Label-->
                <div class="fs-6 text-dark">Generating Share Link...</div>
                <!--end::Label-->
            </div>
            <!--end::Loader-->

            <!--begin::Link-->
            <div class="d-flex flex-column text-start d-none" data-kt-filemanger-table="copy_link_result">
                <div class="d-flex mb-3">
                    <i class="ki-outline ki-check fs-2 text-success me-3"></i>                    <div class="fs-6 text-dark">Share Link Generated</div>
                </div>
                <input type="text" class="form-control form-control-sm" value="https://path/to/file/or/folder/" />
                <div class="text-muted fw-normal mt-2 fs-8 px-3">Read only. <a href="settings/.php" class="ms-2">Change permissions</a></div>
            </div>
            <!--end::Link-->
        </div>
    </div>
    <!--end::Card-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::Share link-->

                                <!--begin::More-->
                                <div class="ms-2">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-dots-square fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            Download File
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table="rename">
            Rename
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table-filter="move_row" data-bs-toggle="modal" data-bs-target="#kt_modal_move_to_folder">
            Move to folder
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link text-danger px-3" data-kt-filemanager-table-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::More-->
                            </div>
                        </td>
                    </tr>
                                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <i class="ki-outline ki-picture fs-2x text-primary me-4"></i>                                <a href="#" class="text-gray-800 text-hover-primary">background-5.jpg</a>
                            </div>
                        </td>
                        <td>
                            48 KB                        </td>
                        <td>
                            05 May 2023, 8:43 pm                        </td>
                        <td class="text-end" data-kt-filemanager-table="action_dropdown">
                            <div class="d-flex justify-content-end">
                                <!--begin::Share link-->
                                <div class="ms-2" data-kt-filemanger-table="copy_link">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-fasten fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-300px" data-kt-menu="true">
    <!--begin::Card-->
    <div class="card card-flush">
        <div class="card-body p-5">
            <!--begin::Loader-->
            <div class="d-flex" data-kt-filemanger-table="copy_link_generator">
                <!--begin::Spinner-->
                <div class="me-5" data-kt-indicator="on">
                    <span class="indicator-progress">
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </span>
                </div>
                <!--end::Spinner-->

                <!--begin::Label-->
                <div class="fs-6 text-dark">Generating Share Link...</div>
                <!--end::Label-->
            </div>
            <!--end::Loader-->

            <!--begin::Link-->
            <div class="d-flex flex-column text-start d-none" data-kt-filemanger-table="copy_link_result">
                <div class="d-flex mb-3">
                    <i class="ki-outline ki-check fs-2 text-success me-3"></i>                    <div class="fs-6 text-dark">Share Link Generated</div>
                </div>
                <input type="text" class="form-control form-control-sm" value="https://path/to/file/or/folder/" />
                <div class="text-muted fw-normal mt-2 fs-8 px-3">Read only. <a href="settings/.php" class="ms-2">Change permissions</a></div>
            </div>
            <!--end::Link-->
        </div>
    </div>
    <!--end::Card-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::Share link-->

                                <!--begin::More-->
                                <div class="ms-2">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-dots-square fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            Download File
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table="rename">
            Rename
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table-filter="move_row" data-bs-toggle="modal" data-bs-target="#kt_modal_move_to_folder">
            Move to folder
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link text-danger px-3" data-kt-filemanager-table-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::More-->
                            </div>
                        </td>
                    </tr>
                                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <i class="ki-outline ki-files fs-2x text-primary me-4"></i>                                <a href="#" class="text-gray-800 text-hover-primary">api-keys.php</a>
                            </div>
                        </td>
                        <td>
                            489 KB                        </td>
                        <td>
                            05 May 2023, 8:43 pm                        </td>
                        <td class="text-end" data-kt-filemanager-table="action_dropdown">
                            <div class="d-flex justify-content-end">
                                <!--begin::Share link-->
                                <div class="ms-2" data-kt-filemanger-table="copy_link">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-fasten fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-300px" data-kt-menu="true">
    <!--begin::Card-->
    <div class="card card-flush">
        <div class="card-body p-5">
            <!--begin::Loader-->
            <div class="d-flex" data-kt-filemanger-table="copy_link_generator">
                <!--begin::Spinner-->
                <div class="me-5" data-kt-indicator="on">
                    <span class="indicator-progress">
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </span>
                </div>
                <!--end::Spinner-->

                <!--begin::Label-->
                <div class="fs-6 text-dark">Generating Share Link...</div>
                <!--end::Label-->
            </div>
            <!--end::Loader-->

            <!--begin::Link-->
            <div class="d-flex flex-column text-start d-none" data-kt-filemanger-table="copy_link_result">
                <div class="d-flex mb-3">
                    <i class="ki-outline ki-check fs-2 text-success me-3"></i>                    <div class="fs-6 text-dark">Share Link Generated</div>
                </div>
                <input type="text" class="form-control form-control-sm" value="https://path/to/file/or/folder/" />
                <div class="text-muted fw-normal mt-2 fs-8 px-3">Read only. <a href="settings/.php" class="ms-2">Change permissions</a></div>
            </div>
            <!--end::Link-->
        </div>
    </div>
    <!--end::Card-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::Share link-->

                                <!--begin::More-->
                                <div class="ms-2">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-dots-square fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            Download File
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table="rename">
            Rename
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table-filter="move_row" data-bs-toggle="modal" data-bs-target="#kt_modal_move_to_folder">
            Move to folder
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link text-danger px-3" data-kt-filemanager-table-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::More-->
                            </div>
                        </td>
                    </tr>
                                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <i class="ki-outline ki-files fs-2x text-primary me-4"></i>                                <a href="#" class="text-gray-800 text-hover-primary">billing.php</a>
                            </div>
                        </td>
                        <td>
                            554 KB                        </td>
                        <td>
                            10 Mar 2023, 8:43 pm                        </td>
                        <td class="text-end" data-kt-filemanager-table="action_dropdown">
                            <div class="d-flex justify-content-end">
                                <!--begin::Share link-->
                                <div class="ms-2" data-kt-filemanger-table="copy_link">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-fasten fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-300px" data-kt-menu="true">
    <!--begin::Card-->
    <div class="card card-flush">
        <div class="card-body p-5">
            <!--begin::Loader-->
            <div class="d-flex" data-kt-filemanger-table="copy_link_generator">
                <!--begin::Spinner-->
                <div class="me-5" data-kt-indicator="on">
                    <span class="indicator-progress">
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </span>
                </div>
                <!--end::Spinner-->

                <!--begin::Label-->
                <div class="fs-6 text-dark">Generating Share Link...</div>
                <!--end::Label-->
            </div>
            <!--end::Loader-->

            <!--begin::Link-->
            <div class="d-flex flex-column text-start d-none" data-kt-filemanger-table="copy_link_result">
                <div class="d-flex mb-3">
                    <i class="ki-outline ki-check fs-2 text-success me-3"></i>                    <div class="fs-6 text-dark">Share Link Generated</div>
                </div>
                <input type="text" class="form-control form-control-sm" value="https://path/to/file/or/folder/" />
                <div class="text-muted fw-normal mt-2 fs-8 px-3">Read only. <a href="settings/.php" class="ms-2">Change permissions</a></div>
            </div>
            <!--end::Link-->
        </div>
    </div>
    <!--end::Card-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::Share link-->

                                <!--begin::More-->
                                <div class="ms-2">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-dots-square fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            Download File
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table="rename">
            Rename
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table-filter="move_row" data-bs-toggle="modal" data-bs-target="#kt_modal_move_to_folder">
            Move to folder
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link text-danger px-3" data-kt-filemanager-table-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::More-->
                            </div>
                        </td>
                    </tr>
                                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <i class="ki-outline ki-files fs-2x text-primary me-4"></i>                                <a href="#" class="text-gray-800 text-hover-primary">overview.php</a>
                            </div>
                        </td>
                        <td>
                            522 KB                        </td>
                        <td>
                            25 Oct 2023, 5:20 pm                        </td>
                        <td class="text-end" data-kt-filemanager-table="action_dropdown">
                            <div class="d-flex justify-content-end">
                                <!--begin::Share link-->
                                <div class="ms-2" data-kt-filemanger-table="copy_link">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-fasten fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-300px" data-kt-menu="true">
    <!--begin::Card-->
    <div class="card card-flush">
        <div class="card-body p-5">
            <!--begin::Loader-->
            <div class="d-flex" data-kt-filemanger-table="copy_link_generator">
                <!--begin::Spinner-->
                <div class="me-5" data-kt-indicator="on">
                    <span class="indicator-progress">
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </span>
                </div>
                <!--end::Spinner-->

                <!--begin::Label-->
                <div class="fs-6 text-dark">Generating Share Link...</div>
                <!--end::Label-->
            </div>
            <!--end::Loader-->

            <!--begin::Link-->
            <div class="d-flex flex-column text-start d-none" data-kt-filemanger-table="copy_link_result">
                <div class="d-flex mb-3">
                    <i class="ki-outline ki-check fs-2 text-success me-3"></i>                    <div class="fs-6 text-dark">Share Link Generated</div>
                </div>
                <input type="text" class="form-control form-control-sm" value="https://path/to/file/or/folder/" />
                <div class="text-muted fw-normal mt-2 fs-8 px-3">Read only. <a href="settings/.php" class="ms-2">Change permissions</a></div>
            </div>
            <!--end::Link-->
        </div>
    </div>
    <!--end::Card-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::Share link-->

                                <!--begin::More-->
                                <div class="ms-2">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-dots-square fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            Download File
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table="rename">
            Rename
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table-filter="move_row" data-bs-toggle="modal" data-bs-target="#kt_modal_move_to_folder">
            Move to folder
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link text-danger px-3" data-kt-filemanager-table-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::More-->
                            </div>
                        </td>
                    </tr>
                                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <i class="ki-outline ki-files fs-2x text-primary me-4"></i>                                <a href="#" class="text-gray-800 text-hover-primary">referrals.php</a>
                            </div>
                        </td>
                        <td>
                            477 KB                        </td>
                        <td>
                            22 Sep 2023, 5:20 pm                        </td>
                        <td class="text-end" data-kt-filemanager-table="action_dropdown">
                            <div class="d-flex justify-content-end">
                                <!--begin::Share link-->
                                <div class="ms-2" data-kt-filemanger-table="copy_link">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-fasten fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-300px" data-kt-menu="true">
    <!--begin::Card-->
    <div class="card card-flush">
        <div class="card-body p-5">
            <!--begin::Loader-->
            <div class="d-flex" data-kt-filemanger-table="copy_link_generator">
                <!--begin::Spinner-->
                <div class="me-5" data-kt-indicator="on">
                    <span class="indicator-progress">
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </span>
                </div>
                <!--end::Spinner-->

                <!--begin::Label-->
                <div class="fs-6 text-dark">Generating Share Link...</div>
                <!--end::Label-->
            </div>
            <!--end::Loader-->

            <!--begin::Link-->
            <div class="d-flex flex-column text-start d-none" data-kt-filemanger-table="copy_link_result">
                <div class="d-flex mb-3">
                    <i class="ki-outline ki-check fs-2 text-success me-3"></i>                    <div class="fs-6 text-dark">Share Link Generated</div>
                </div>
                <input type="text" class="form-control form-control-sm" value="https://path/to/file/or/folder/" />
                <div class="text-muted fw-normal mt-2 fs-8 px-3">Read only. <a href="settings/.php" class="ms-2">Change permissions</a></div>
            </div>
            <!--end::Link-->
        </div>
    </div>
    <!--end::Card-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::Share link-->

                                <!--begin::More-->
                                <div class="ms-2">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-dots-square fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            Download File
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table="rename">
            Rename
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table-filter="move_row" data-bs-toggle="modal" data-bs-target="#kt_modal_move_to_folder">
            Move to folder
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link text-danger px-3" data-kt-filemanager-table-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::More-->
                            </div>
                        </td>
                    </tr>
                                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <i class="ki-outline ki-files fs-2x text-primary me-4"></i>                                <a href="#" class="text-gray-800 text-hover-primary">security.php</a>
                            </div>
                        </td>
                        <td>
                            514 KB                        </td>
                        <td>
                            25 Oct 2023, 8:43 pm                        </td>
                        <td class="text-end" data-kt-filemanager-table="action_dropdown">
                            <div class="d-flex justify-content-end">
                                <!--begin::Share link-->
                                <div class="ms-2" data-kt-filemanger-table="copy_link">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-fasten fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-300px" data-kt-menu="true">
    <!--begin::Card-->
    <div class="card card-flush">
        <div class="card-body p-5">
            <!--begin::Loader-->
            <div class="d-flex" data-kt-filemanger-table="copy_link_generator">
                <!--begin::Spinner-->
                <div class="me-5" data-kt-indicator="on">
                    <span class="indicator-progress">
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </span>
                </div>
                <!--end::Spinner-->

                <!--begin::Label-->
                <div class="fs-6 text-dark">Generating Share Link...</div>
                <!--end::Label-->
            </div>
            <!--end::Loader-->

            <!--begin::Link-->
            <div class="d-flex flex-column text-start d-none" data-kt-filemanger-table="copy_link_result">
                <div class="d-flex mb-3">
                    <i class="ki-outline ki-check fs-2 text-success me-3"></i>                    <div class="fs-6 text-dark">Share Link Generated</div>
                </div>
                <input type="text" class="form-control form-control-sm" value="https://path/to/file/or/folder/" />
                <div class="text-muted fw-normal mt-2 fs-8 px-3">Read only. <a href="settings/.php" class="ms-2">Change permissions</a></div>
            </div>
            <!--end::Link-->
        </div>
    </div>
    <!--end::Card-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::Share link-->

                                <!--begin::More-->
                                <div class="ms-2">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-dots-square fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            Download File
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table="rename">
            Rename
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table-filter="move_row" data-bs-toggle="modal" data-bs-target="#kt_modal_move_to_folder">
            Move to folder
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link text-danger px-3" data-kt-filemanager-table-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::More-->
                            </div>
                        </td>
                    </tr>
                                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <i class="ki-outline ki-files fs-2x text-primary me-4"></i>                                <a href="#" class="text-gray-800 text-hover-primary">settings.php</a>
                            </div>
                        </td>
                        <td>
                            475 KB                        </td>
                        <td>
                            15 Apr 2023, 9:23 pm                        </td>
                        <td class="text-end" data-kt-filemanager-table="action_dropdown">
                            <div class="d-flex justify-content-end">
                                <!--begin::Share link-->
                                <div class="ms-2" data-kt-filemanger-table="copy_link">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-fasten fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-300px" data-kt-menu="true">
    <!--begin::Card-->
    <div class="card card-flush">
        <div class="card-body p-5">
            <!--begin::Loader-->
            <div class="d-flex" data-kt-filemanger-table="copy_link_generator">
                <!--begin::Spinner-->
                <div class="me-5" data-kt-indicator="on">
                    <span class="indicator-progress">
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </span>
                </div>
                <!--end::Spinner-->

                <!--begin::Label-->
                <div class="fs-6 text-dark">Generating Share Link...</div>
                <!--end::Label-->
            </div>
            <!--end::Loader-->

            <!--begin::Link-->
            <div class="d-flex flex-column text-start d-none" data-kt-filemanger-table="copy_link_result">
                <div class="d-flex mb-3">
                    <i class="ki-outline ki-check fs-2 text-success me-3"></i>                    <div class="fs-6 text-dark">Share Link Generated</div>
                </div>
                <input type="text" class="form-control form-control-sm" value="https://path/to/file/or/folder/" />
                <div class="text-muted fw-normal mt-2 fs-8 px-3">Read only. <a href="settings/.php" class="ms-2">Change permissions</a></div>
            </div>
            <!--end::Link-->
        </div>
    </div>
    <!--end::Card-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::Share link-->

                                <!--begin::More-->
                                <div class="ms-2">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-dots-square fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            Download File
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table="rename">
            Rename
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table-filter="move_row" data-bs-toggle="modal" data-bs-target="#kt_modal_move_to_folder">
            Move to folder
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link text-danger px-3" data-kt-filemanager-table-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::More-->
                            </div>
                        </td>
                    </tr>
                                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <i class="ki-outline ki-files fs-2x text-primary me-4"></i>                                <a href="#" class="text-gray-800 text-hover-primary">statements.php</a>
                            </div>
                        </td>
                        <td>
                            552 KB                        </td>
                        <td>
                            20 Dec 2023, 5:20 pm                        </td>
                        <td class="text-end" data-kt-filemanager-table="action_dropdown">
                            <div class="d-flex justify-content-end">
                                <!--begin::Share link-->
                                <div class="ms-2" data-kt-filemanger-table="copy_link">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-fasten fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-300px" data-kt-menu="true">
    <!--begin::Card-->
    <div class="card card-flush">
        <div class="card-body p-5">
            <!--begin::Loader-->
            <div class="d-flex" data-kt-filemanger-table="copy_link_generator">
                <!--begin::Spinner-->
                <div class="me-5" data-kt-indicator="on">
                    <span class="indicator-progress">
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </span>
                </div>
                <!--end::Spinner-->

                <!--begin::Label-->
                <div class="fs-6 text-dark">Generating Share Link...</div>
                <!--end::Label-->
            </div>
            <!--end::Loader-->

            <!--begin::Link-->
            <div class="d-flex flex-column text-start d-none" data-kt-filemanger-table="copy_link_result">
                <div class="d-flex mb-3">
                    <i class="ki-outline ki-check fs-2 text-success me-3"></i>                    <div class="fs-6 text-dark">Share Link Generated</div>
                </div>
                <input type="text" class="form-control form-control-sm" value="https://path/to/file/or/folder/" />
                <div class="text-muted fw-normal mt-2 fs-8 px-3">Read only. <a href="settings/.php" class="ms-2">Change permissions</a></div>
            </div>
            <!--end::Link-->
        </div>
    </div>
    <!--end::Card-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::Share link-->

                                <!--begin::More-->
                                <div class="ms-2">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-dots-square fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            Download File
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table="rename">
            Rename
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table-filter="move_row" data-bs-toggle="modal" data-bs-target="#kt_modal_move_to_folder">
            Move to folder
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link text-danger px-3" data-kt-filemanager-table-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::More-->
                            </div>
                        </td>
                    </tr>
                                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <i class="ki-outline ki-files fs-2x text-primary me-4"></i>                                <a href="#" class="text-gray-800 text-hover-primary">widgets-1.php</a>
                            </div>
                        </td>
                        <td>
                            554 KB                        </td>
                        <td>
                            05 May 2023, 5:30 pm                        </td>
                        <td class="text-end" data-kt-filemanager-table="action_dropdown">
                            <div class="d-flex justify-content-end">
                                <!--begin::Share link-->
                                <div class="ms-2" data-kt-filemanger-table="copy_link">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-fasten fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-300px" data-kt-menu="true">
    <!--begin::Card-->
    <div class="card card-flush">
        <div class="card-body p-5">
            <!--begin::Loader-->
            <div class="d-flex" data-kt-filemanger-table="copy_link_generator">
                <!--begin::Spinner-->
                <div class="me-5" data-kt-indicator="on">
                    <span class="indicator-progress">
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </span>
                </div>
                <!--end::Spinner-->

                <!--begin::Label-->
                <div class="fs-6 text-dark">Generating Share Link...</div>
                <!--end::Label-->
            </div>
            <!--end::Loader-->

            <!--begin::Link-->
            <div class="d-flex flex-column text-start d-none" data-kt-filemanger-table="copy_link_result">
                <div class="d-flex mb-3">
                    <i class="ki-outline ki-check fs-2 text-success me-3"></i>                    <div class="fs-6 text-dark">Share Link Generated</div>
                </div>
                <input type="text" class="form-control form-control-sm" value="https://path/to/file/or/folder/" />
                <div class="text-muted fw-normal mt-2 fs-8 px-3">Read only. <a href="settings/.php" class="ms-2">Change permissions</a></div>
            </div>
            <!--end::Link-->
        </div>
    </div>
    <!--end::Card-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::Share link-->

                                <!--begin::More-->
                                <div class="ms-2">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-dots-square fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            Download File
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table="rename">
            Rename
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table-filter="move_row" data-bs-toggle="modal" data-bs-target="#kt_modal_move_to_folder">
            Move to folder
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link text-danger px-3" data-kt-filemanager-table-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::More-->
                            </div>
                        </td>
                    </tr>
                                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <i class="ki-outline ki-files fs-2x text-primary me-4"></i>                                <a href="#" class="text-gray-800 text-hover-primary">widgets-2.php</a>
                            </div>
                        </td>
                        <td>
                            522 KB                        </td>
                        <td>
                            21 Feb 2023, 10:10 pm                        </td>
                        <td class="text-end" data-kt-filemanager-table="action_dropdown">
                            <div class="d-flex justify-content-end">
                                <!--begin::Share link-->
                                <div class="ms-2" data-kt-filemanger-table="copy_link">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-fasten fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-300px" data-kt-menu="true">
    <!--begin::Card-->
    <div class="card card-flush">
        <div class="card-body p-5">
            <!--begin::Loader-->
            <div class="d-flex" data-kt-filemanger-table="copy_link_generator">
                <!--begin::Spinner-->
                <div class="me-5" data-kt-indicator="on">
                    <span class="indicator-progress">
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </span>
                </div>
                <!--end::Spinner-->

                <!--begin::Label-->
                <div class="fs-6 text-dark">Generating Share Link...</div>
                <!--end::Label-->
            </div>
            <!--end::Loader-->

            <!--begin::Link-->
            <div class="d-flex flex-column text-start d-none" data-kt-filemanger-table="copy_link_result">
                <div class="d-flex mb-3">
                    <i class="ki-outline ki-check fs-2 text-success me-3"></i>                    <div class="fs-6 text-dark">Share Link Generated</div>
                </div>
                <input type="text" class="form-control form-control-sm" value="https://path/to/file/or/folder/" />
                <div class="text-muted fw-normal mt-2 fs-8 px-3">Read only. <a href="settings/.php" class="ms-2">Change permissions</a></div>
            </div>
            <!--end::Link-->
        </div>
    </div>
    <!--end::Card-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::Share link-->

                                <!--begin::More-->
                                <div class="ms-2">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-dots-square fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            Download File
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table="rename">
            Rename
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table-filter="move_row" data-bs-toggle="modal" data-bs-target="#kt_modal_move_to_folder">
            Move to folder
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link text-danger px-3" data-kt-filemanager-table-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::More-->
                            </div>
                        </td>
                    </tr>
                                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <i class="ki-outline ki-files fs-2x text-primary me-4"></i>                                <a href="#" class="text-gray-800 text-hover-primary">widgets-3.php</a>
                            </div>
                        </td>
                        <td>
                            477 KB                        </td>
                        <td>
                            25 Jul 2023, 2:40 pm                        </td>
                        <td class="text-end" data-kt-filemanager-table="action_dropdown">
                            <div class="d-flex justify-content-end">
                                <!--begin::Share link-->
                                <div class="ms-2" data-kt-filemanger-table="copy_link">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-fasten fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-300px" data-kt-menu="true">
    <!--begin::Card-->
    <div class="card card-flush">
        <div class="card-body p-5">
            <!--begin::Loader-->
            <div class="d-flex" data-kt-filemanger-table="copy_link_generator">
                <!--begin::Spinner-->
                <div class="me-5" data-kt-indicator="on">
                    <span class="indicator-progress">
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </span>
                </div>
                <!--end::Spinner-->

                <!--begin::Label-->
                <div class="fs-6 text-dark">Generating Share Link...</div>
                <!--end::Label-->
            </div>
            <!--end::Loader-->

            <!--begin::Link-->
            <div class="d-flex flex-column text-start d-none" data-kt-filemanger-table="copy_link_result">
                <div class="d-flex mb-3">
                    <i class="ki-outline ki-check fs-2 text-success me-3"></i>                    <div class="fs-6 text-dark">Share Link Generated</div>
                </div>
                <input type="text" class="form-control form-control-sm" value="https://path/to/file/or/folder/" />
                <div class="text-muted fw-normal mt-2 fs-8 px-3">Read only. <a href="settings/.php" class="ms-2">Change permissions</a></div>
            </div>
            <!--end::Link-->
        </div>
    </div>
    <!--end::Card-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::Share link-->

                                <!--begin::More-->
                                <div class="ms-2">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-dots-square fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            Download File
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table="rename">
            Rename
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table-filter="move_row" data-bs-toggle="modal" data-bs-target="#kt_modal_move_to_folder">
            Move to folder
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link text-danger px-3" data-kt-filemanager-table-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::More-->
                            </div>
                        </td>
                    </tr>
                                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <i class="ki-outline ki-files fs-2x text-primary me-4"></i>                                <a href="#" class="text-gray-800 text-hover-primary">widgets-4.php</a>
                            </div>
                        </td>
                        <td>
                            514 KB                        </td>
                        <td>
                            20 Dec 2023, 10:10 pm                        </td>
                        <td class="text-end" data-kt-filemanager-table="action_dropdown">
                            <div class="d-flex justify-content-end">
                                <!--begin::Share link-->
                                <div class="ms-2" data-kt-filemanger-table="copy_link">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-fasten fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-300px" data-kt-menu="true">
    <!--begin::Card-->
    <div class="card card-flush">
        <div class="card-body p-5">
            <!--begin::Loader-->
            <div class="d-flex" data-kt-filemanger-table="copy_link_generator">
                <!--begin::Spinner-->
                <div class="me-5" data-kt-indicator="on">
                    <span class="indicator-progress">
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </span>
                </div>
                <!--end::Spinner-->

                <!--begin::Label-->
                <div class="fs-6 text-dark">Generating Share Link...</div>
                <!--end::Label-->
            </div>
            <!--end::Loader-->

            <!--begin::Link-->
            <div class="d-flex flex-column text-start d-none" data-kt-filemanger-table="copy_link_result">
                <div class="d-flex mb-3">
                    <i class="ki-outline ki-check fs-2 text-success me-3"></i>                    <div class="fs-6 text-dark">Share Link Generated</div>
                </div>
                <input type="text" class="form-control form-control-sm" value="https://path/to/file/or/folder/" />
                <div class="text-muted fw-normal mt-2 fs-8 px-3">Read only. <a href="settings/.php" class="ms-2">Change permissions</a></div>
            </div>
            <!--end::Link-->
        </div>
    </div>
    <!--end::Card-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::Share link-->

                                <!--begin::More-->
                                <div class="ms-2">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-dots-square fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            Download File
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table="rename">
            Rename
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table-filter="move_row" data-bs-toggle="modal" data-bs-target="#kt_modal_move_to_folder">
            Move to folder
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link text-danger px-3" data-kt-filemanager-table-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::More-->
                            </div>
                        </td>
                    </tr>
                                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <i class="ki-outline ki-files fs-2x text-primary me-4"></i>                                <a href="#" class="text-gray-800 text-hover-primary">widgets-5.php</a>
                            </div>
                        </td>
                        <td>
                            475 KB                        </td>
                        <td>
                            25 Jul 2023, 10:10 pm                        </td>
                        <td class="text-end" data-kt-filemanager-table="action_dropdown">
                            <div class="d-flex justify-content-end">
                                <!--begin::Share link-->
                                <div class="ms-2" data-kt-filemanger-table="copy_link">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-fasten fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-300px" data-kt-menu="true">
    <!--begin::Card-->
    <div class="card card-flush">
        <div class="card-body p-5">
            <!--begin::Loader-->
            <div class="d-flex" data-kt-filemanger-table="copy_link_generator">
                <!--begin::Spinner-->
                <div class="me-5" data-kt-indicator="on">
                    <span class="indicator-progress">
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </span>
                </div>
                <!--end::Spinner-->

                <!--begin::Label-->
                <div class="fs-6 text-dark">Generating Share Link...</div>
                <!--end::Label-->
            </div>
            <!--end::Loader-->

            <!--begin::Link-->
            <div class="d-flex flex-column text-start d-none" data-kt-filemanger-table="copy_link_result">
                <div class="d-flex mb-3">
                    <i class="ki-outline ki-check fs-2 text-success me-3"></i>                    <div class="fs-6 text-dark">Share Link Generated</div>
                </div>
                <input type="text" class="form-control form-control-sm" value="https://path/to/file/or/folder/" />
                <div class="text-muted fw-normal mt-2 fs-8 px-3">Read only. <a href="settings/.php" class="ms-2">Change permissions</a></div>
            </div>
            <!--end::Link-->
        </div>
    </div>
    <!--end::Card-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::Share link-->

                                <!--begin::More-->
                                <div class="ms-2">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-dots-square fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            Download File
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table="rename">
            Rename
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table-filter="move_row" data-bs-toggle="modal" data-bs-target="#kt_modal_move_to_folder">
            Move to folder
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link text-danger px-3" data-kt-filemanager-table-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::More-->
                            </div>
                        </td>
                    </tr>
                                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <i class="ki-outline ki-picture fs-2x text-primary me-4"></i>                                <a href="#" class="text-gray-800 text-hover-primary">pattern-1.jpg</a>
                            </div>
                        </td>
                        <td>
                            11 KB                        </td>
                        <td>
                            21 Feb 2023, 11:05 am                        </td>
                        <td class="text-end" data-kt-filemanager-table="action_dropdown">
                            <div class="d-flex justify-content-end">
                                <!--begin::Share link-->
                                <div class="ms-2" data-kt-filemanger-table="copy_link">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-fasten fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-300px" data-kt-menu="true">
    <!--begin::Card-->
    <div class="card card-flush">
        <div class="card-body p-5">
            <!--begin::Loader-->
            <div class="d-flex" data-kt-filemanger-table="copy_link_generator">
                <!--begin::Spinner-->
                <div class="me-5" data-kt-indicator="on">
                    <span class="indicator-progress">
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </span>
                </div>
                <!--end::Spinner-->

                <!--begin::Label-->
                <div class="fs-6 text-dark">Generating Share Link...</div>
                <!--end::Label-->
            </div>
            <!--end::Loader-->

            <!--begin::Link-->
            <div class="d-flex flex-column text-start d-none" data-kt-filemanger-table="copy_link_result">
                <div class="d-flex mb-3">
                    <i class="ki-outline ki-check fs-2 text-success me-3"></i>                    <div class="fs-6 text-dark">Share Link Generated</div>
                </div>
                <input type="text" class="form-control form-control-sm" value="https://path/to/file/or/folder/" />
                <div class="text-muted fw-normal mt-2 fs-8 px-3">Read only. <a href="settings/.php" class="ms-2">Change permissions</a></div>
            </div>
            <!--end::Link-->
        </div>
    </div>
    <!--end::Card-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::Share link-->

                                <!--begin::More-->
                                <div class="ms-2">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-dots-square fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            Download File
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table="rename">
            Rename
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table-filter="move_row" data-bs-toggle="modal" data-bs-target="#kt_modal_move_to_folder">
            Move to folder
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link text-danger px-3" data-kt-filemanager-table-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::More-->
                            </div>
                        </td>
                    </tr>
                                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <i class="ki-outline ki-picture fs-2x text-primary me-4"></i>                                <a href="#" class="text-gray-800 text-hover-primary">pattern-2.jpg</a>
                            </div>
                        </td>
                        <td>
                            11 KB                        </td>
                        <td>
                            25 Oct 2023, 6:43 am                        </td>
                        <td class="text-end" data-kt-filemanager-table="action_dropdown">
                            <div class="d-flex justify-content-end">
                                <!--begin::Share link-->
                                <div class="ms-2" data-kt-filemanger-table="copy_link">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-fasten fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-300px" data-kt-menu="true">
    <!--begin::Card-->
    <div class="card card-flush">
        <div class="card-body p-5">
            <!--begin::Loader-->
            <div class="d-flex" data-kt-filemanger-table="copy_link_generator">
                <!--begin::Spinner-->
                <div class="me-5" data-kt-indicator="on">
                    <span class="indicator-progress">
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </span>
                </div>
                <!--end::Spinner-->

                <!--begin::Label-->
                <div class="fs-6 text-dark">Generating Share Link...</div>
                <!--end::Label-->
            </div>
            <!--end::Loader-->

            <!--begin::Link-->
            <div class="d-flex flex-column text-start d-none" data-kt-filemanger-table="copy_link_result">
                <div class="d-flex mb-3">
                    <i class="ki-outline ki-check fs-2 text-success me-3"></i>                    <div class="fs-6 text-dark">Share Link Generated</div>
                </div>
                <input type="text" class="form-control form-control-sm" value="https://path/to/file/or/folder/" />
                <div class="text-muted fw-normal mt-2 fs-8 px-3">Read only. <a href="settings/.php" class="ms-2">Change permissions</a></div>
            </div>
            <!--end::Link-->
        </div>
    </div>
    <!--end::Card-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::Share link-->

                                <!--begin::More-->
                                <div class="ms-2">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-dots-square fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            Download File
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table="rename">
            Rename
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table-filter="move_row" data-bs-toggle="modal" data-bs-target="#kt_modal_move_to_folder">
            Move to folder
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link text-danger px-3" data-kt-filemanager-table-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::More-->
                            </div>
                        </td>
                    </tr>
                                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <i class="ki-outline ki-picture fs-2x text-primary me-4"></i>                                <a href="#" class="text-gray-800 text-hover-primary">pattern-3.jpg</a>
                            </div>
                        </td>
                        <td>
                            11 KB                        </td>
                        <td>
                            24 Jun 2023, 6:43 am                        </td>
                        <td class="text-end" data-kt-filemanager-table="action_dropdown">
                            <div class="d-flex justify-content-end">
                                <!--begin::Share link-->
                                <div class="ms-2" data-kt-filemanger-table="copy_link">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-fasten fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-300px" data-kt-menu="true">
    <!--begin::Card-->
    <div class="card card-flush">
        <div class="card-body p-5">
            <!--begin::Loader-->
            <div class="d-flex" data-kt-filemanger-table="copy_link_generator">
                <!--begin::Spinner-->
                <div class="me-5" data-kt-indicator="on">
                    <span class="indicator-progress">
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </span>
                </div>
                <!--end::Spinner-->

                <!--begin::Label-->
                <div class="fs-6 text-dark">Generating Share Link...</div>
                <!--end::Label-->
            </div>
            <!--end::Loader-->

            <!--begin::Link-->
            <div class="d-flex flex-column text-start d-none" data-kt-filemanger-table="copy_link_result">
                <div class="d-flex mb-3">
                    <i class="ki-outline ki-check fs-2 text-success me-3"></i>                    <div class="fs-6 text-dark">Share Link Generated</div>
                </div>
                <input type="text" class="form-control form-control-sm" value="https://path/to/file/or/folder/" />
                <div class="text-muted fw-normal mt-2 fs-8 px-3">Read only. <a href="settings/.php" class="ms-2">Change permissions</a></div>
            </div>
            <!--end::Link-->
        </div>
    </div>
    <!--end::Card-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::Share link-->

                                <!--begin::More-->
                                <div class="ms-2">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-dots-square fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            Download File
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table="rename">
            Rename
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table-filter="move_row" data-bs-toggle="modal" data-bs-target="#kt_modal_move_to_folder">
            Move to folder
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link text-danger px-3" data-kt-filemanager-table-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::More-->
                            </div>
                        </td>
                    </tr>
                                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <i class="ki-outline ki-picture fs-2x text-primary me-4"></i>                                <a href="#" class="text-gray-800 text-hover-primary">pattern-4.jpg</a>
                            </div>
                        </td>
                        <td>
                            11 KB                        </td>
                        <td>
                            10 Nov 2023, 6:43 am                        </td>
                        <td class="text-end" data-kt-filemanager-table="action_dropdown">
                            <div class="d-flex justify-content-end">
                                <!--begin::Share link-->
                                <div class="ms-2" data-kt-filemanger-table="copy_link">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-fasten fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-300px" data-kt-menu="true">
    <!--begin::Card-->
    <div class="card card-flush">
        <div class="card-body p-5">
            <!--begin::Loader-->
            <div class="d-flex" data-kt-filemanger-table="copy_link_generator">
                <!--begin::Spinner-->
                <div class="me-5" data-kt-indicator="on">
                    <span class="indicator-progress">
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </span>
                </div>
                <!--end::Spinner-->

                <!--begin::Label-->
                <div class="fs-6 text-dark">Generating Share Link...</div>
                <!--end::Label-->
            </div>
            <!--end::Loader-->

            <!--begin::Link-->
            <div class="d-flex flex-column text-start d-none" data-kt-filemanger-table="copy_link_result">
                <div class="d-flex mb-3">
                    <i class="ki-outline ki-check fs-2 text-success me-3"></i>                    <div class="fs-6 text-dark">Share Link Generated</div>
                </div>
                <input type="text" class="form-control form-control-sm" value="https://path/to/file/or/folder/" />
                <div class="text-muted fw-normal mt-2 fs-8 px-3">Read only. <a href="settings/.php" class="ms-2">Change permissions</a></div>
            </div>
            <!--end::Link-->
        </div>
    </div>
    <!--end::Card-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::Share link-->

                                <!--begin::More-->
                                <div class="ms-2">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-dots-square fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            Download File
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table="rename">
            Rename
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table-filter="move_row" data-bs-toggle="modal" data-bs-target="#kt_modal_move_to_folder">
            Move to folder
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link text-danger px-3" data-kt-filemanager-table-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::More-->
                            </div>
                        </td>
                    </tr>
                                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <i class="ki-outline ki-picture fs-2x text-primary me-4"></i>                                <a href="#" class="text-gray-800 text-hover-primary">pattern-5.jpg</a>
                            </div>
                        </td>
                        <td>
                            11 KB                        </td>
                        <td>
                            24 Jun 2023, 11:30 am                        </td>
                        <td class="text-end" data-kt-filemanager-table="action_dropdown">
                            <div class="d-flex justify-content-end">
                                <!--begin::Share link-->
                                <div class="ms-2" data-kt-filemanger-table="copy_link">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-fasten fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-300px" data-kt-menu="true">
    <!--begin::Card-->
    <div class="card card-flush">
        <div class="card-body p-5">
            <!--begin::Loader-->
            <div class="d-flex" data-kt-filemanger-table="copy_link_generator">
                <!--begin::Spinner-->
                <div class="me-5" data-kt-indicator="on">
                    <span class="indicator-progress">
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </span>
                </div>
                <!--end::Spinner-->

                <!--begin::Label-->
                <div class="fs-6 text-dark">Generating Share Link...</div>
                <!--end::Label-->
            </div>
            <!--end::Loader-->

            <!--begin::Link-->
            <div class="d-flex flex-column text-start d-none" data-kt-filemanger-table="copy_link_result">
                <div class="d-flex mb-3">
                    <i class="ki-outline ki-check fs-2 text-success me-3"></i>                    <div class="fs-6 text-dark">Share Link Generated</div>
                </div>
                <input type="text" class="form-control form-control-sm" value="https://path/to/file/or/folder/" />
                <div class="text-muted fw-normal mt-2 fs-8 px-3">Read only. <a href="settings/.php" class="ms-2">Change permissions</a></div>
            </div>
            <!--end::Link-->
        </div>
    </div>
    <!--end::Card-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::Share link-->

                                <!--begin::More-->
                                <div class="ms-2">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-dots-square fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            Download File
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table="rename">
            Rename
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table-filter="move_row" data-bs-toggle="modal" data-bs-target="#kt_modal_move_to_folder">
            Move to folder
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link text-danger px-3" data-kt-filemanager-table-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::More-->
                            </div>
                        </td>
                    </tr>
                                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <i class="ki-outline ki-picture fs-2x text-primary me-4"></i>                                <a href="#" class="text-gray-800 text-hover-primary">background-1.jpg</a>
                            </div>
                        </td>
                        <td>
                            48 KB                        </td>
                        <td>
                            25 Jul 2023, 6:43 am                        </td>
                        <td class="text-end" data-kt-filemanager-table="action_dropdown">
                            <div class="d-flex justify-content-end">
                                <!--begin::Share link-->
                                <div class="ms-2" data-kt-filemanger-table="copy_link">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-fasten fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-300px" data-kt-menu="true">
    <!--begin::Card-->
    <div class="card card-flush">
        <div class="card-body p-5">
            <!--begin::Loader-->
            <div class="d-flex" data-kt-filemanger-table="copy_link_generator">
                <!--begin::Spinner-->
                <div class="me-5" data-kt-indicator="on">
                    <span class="indicator-progress">
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </span>
                </div>
                <!--end::Spinner-->

                <!--begin::Label-->
                <div class="fs-6 text-dark">Generating Share Link...</div>
                <!--end::Label-->
            </div>
            <!--end::Loader-->

            <!--begin::Link-->
            <div class="d-flex flex-column text-start d-none" data-kt-filemanger-table="copy_link_result">
                <div class="d-flex mb-3">
                    <i class="ki-outline ki-check fs-2 text-success me-3"></i>                    <div class="fs-6 text-dark">Share Link Generated</div>
                </div>
                <input type="text" class="form-control form-control-sm" value="https://path/to/file/or/folder/" />
                <div class="text-muted fw-normal mt-2 fs-8 px-3">Read only. <a href="settings/.php" class="ms-2">Change permissions</a></div>
            </div>
            <!--end::Link-->
        </div>
    </div>
    <!--end::Card-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::Share link-->

                                <!--begin::More-->
                                <div class="ms-2">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-dots-square fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            Download File
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table="rename">
            Rename
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table-filter="move_row" data-bs-toggle="modal" data-bs-target="#kt_modal_move_to_folder">
            Move to folder
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link text-danger px-3" data-kt-filemanager-table-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::More-->
                            </div>
                        </td>
                    </tr>
                                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <i class="ki-outline ki-picture fs-2x text-primary me-4"></i>                                <a href="#" class="text-gray-800 text-hover-primary">background-2.jpg</a>
                            </div>
                        </td>
                        <td>
                            48 KB                        </td>
                        <td>
                            10 Nov 2023, 11:05 am                        </td>
                        <td class="text-end" data-kt-filemanager-table="action_dropdown">
                            <div class="d-flex justify-content-end">
                                <!--begin::Share link-->
                                <div class="ms-2" data-kt-filemanger-table="copy_link">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-fasten fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-300px" data-kt-menu="true">
    <!--begin::Card-->
    <div class="card card-flush">
        <div class="card-body p-5">
            <!--begin::Loader-->
            <div class="d-flex" data-kt-filemanger-table="copy_link_generator">
                <!--begin::Spinner-->
                <div class="me-5" data-kt-indicator="on">
                    <span class="indicator-progress">
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </span>
                </div>
                <!--end::Spinner-->

                <!--begin::Label-->
                <div class="fs-6 text-dark">Generating Share Link...</div>
                <!--end::Label-->
            </div>
            <!--end::Loader-->

            <!--begin::Link-->
            <div class="d-flex flex-column text-start d-none" data-kt-filemanger-table="copy_link_result">
                <div class="d-flex mb-3">
                    <i class="ki-outline ki-check fs-2 text-success me-3"></i>                    <div class="fs-6 text-dark">Share Link Generated</div>
                </div>
                <input type="text" class="form-control form-control-sm" value="https://path/to/file/or/folder/" />
                <div class="text-muted fw-normal mt-2 fs-8 px-3">Read only. <a href="settings/.php" class="ms-2">Change permissions</a></div>
            </div>
            <!--end::Link-->
        </div>
    </div>
    <!--end::Card-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::Share link-->

                                <!--begin::More-->
                                <div class="ms-2">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-dots-square fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            Download File
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table="rename">
            Rename
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table-filter="move_row" data-bs-toggle="modal" data-bs-target="#kt_modal_move_to_folder">
            Move to folder
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link text-danger px-3" data-kt-filemanager-table-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::More-->
                            </div>
                        </td>
                    </tr>
                                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <i class="ki-outline ki-picture fs-2x text-primary me-4"></i>                                <a href="#" class="text-gray-800 text-hover-primary">background-3.jpg</a>
                            </div>
                        </td>
                        <td>
                            48 KB                        </td>
                        <td>
                            19 Aug 2023, 10:10 pm                        </td>
                        <td class="text-end" data-kt-filemanager-table="action_dropdown">
                            <div class="d-flex justify-content-end">
                                <!--begin::Share link-->
                                <div class="ms-2" data-kt-filemanger-table="copy_link">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-fasten fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-300px" data-kt-menu="true">
    <!--begin::Card-->
    <div class="card card-flush">
        <div class="card-body p-5">
            <!--begin::Loader-->
            <div class="d-flex" data-kt-filemanger-table="copy_link_generator">
                <!--begin::Spinner-->
                <div class="me-5" data-kt-indicator="on">
                    <span class="indicator-progress">
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </span>
                </div>
                <!--end::Spinner-->

                <!--begin::Label-->
                <div class="fs-6 text-dark">Generating Share Link...</div>
                <!--end::Label-->
            </div>
            <!--end::Loader-->

            <!--begin::Link-->
            <div class="d-flex flex-column text-start d-none" data-kt-filemanger-table="copy_link_result">
                <div class="d-flex mb-3">
                    <i class="ki-outline ki-check fs-2 text-success me-3"></i>                    <div class="fs-6 text-dark">Share Link Generated</div>
                </div>
                <input type="text" class="form-control form-control-sm" value="https://path/to/file/or/folder/" />
                <div class="text-muted fw-normal mt-2 fs-8 px-3">Read only. <a href="settings/.php" class="ms-2">Change permissions</a></div>
            </div>
            <!--end::Link-->
        </div>
    </div>
    <!--end::Card-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::Share link-->

                                <!--begin::More-->
                                <div class="ms-2">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-dots-square fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            Download File
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table="rename">
            Rename
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table-filter="move_row" data-bs-toggle="modal" data-bs-target="#kt_modal_move_to_folder">
            Move to folder
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link text-danger px-3" data-kt-filemanager-table-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::More-->
                            </div>
                        </td>
                    </tr>
                                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <i class="ki-outline ki-picture fs-2x text-primary me-4"></i>                                <a href="#" class="text-gray-800 text-hover-primary">background-4.jpg</a>
                            </div>
                        </td>
                        <td>
                            48 KB                        </td>
                        <td>
                            22 Sep 2023, 11:30 am                        </td>
                        <td class="text-end" data-kt-filemanager-table="action_dropdown">
                            <div class="d-flex justify-content-end">
                                <!--begin::Share link-->
                                <div class="ms-2" data-kt-filemanger-table="copy_link">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-fasten fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-300px" data-kt-menu="true">
    <!--begin::Card-->
    <div class="card card-flush">
        <div class="card-body p-5">
            <!--begin::Loader-->
            <div class="d-flex" data-kt-filemanger-table="copy_link_generator">
                <!--begin::Spinner-->
                <div class="me-5" data-kt-indicator="on">
                    <span class="indicator-progress">
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </span>
                </div>
                <!--end::Spinner-->

                <!--begin::Label-->
                <div class="fs-6 text-dark">Generating Share Link...</div>
                <!--end::Label-->
            </div>
            <!--end::Loader-->

            <!--begin::Link-->
            <div class="d-flex flex-column text-start d-none" data-kt-filemanger-table="copy_link_result">
                <div class="d-flex mb-3">
                    <i class="ki-outline ki-check fs-2 text-success me-3"></i>                    <div class="fs-6 text-dark">Share Link Generated</div>
                </div>
                <input type="text" class="form-control form-control-sm" value="https://path/to/file/or/folder/" />
                <div class="text-muted fw-normal mt-2 fs-8 px-3">Read only. <a href="settings/.php" class="ms-2">Change permissions</a></div>
            </div>
            <!--end::Link-->
        </div>
    </div>
    <!--end::Card-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::Share link-->

                                <!--begin::More-->
                                <div class="ms-2">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-dots-square fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            Download File
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table="rename">
            Rename
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table-filter="move_row" data-bs-toggle="modal" data-bs-target="#kt_modal_move_to_folder">
            Move to folder
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link text-danger px-3" data-kt-filemanager-table-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::More-->
                            </div>
                        </td>
                    </tr>
                                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <i class="ki-outline ki-picture fs-2x text-primary me-4"></i>                                <a href="#" class="text-gray-800 text-hover-primary">background-5.jpg</a>
                            </div>
                        </td>
                        <td>
                            48 KB                        </td>
                        <td>
                            05 May 2023, 11:30 am                        </td>
                        <td class="text-end" data-kt-filemanager-table="action_dropdown">
                            <div class="d-flex justify-content-end">
                                <!--begin::Share link-->
                                <div class="ms-2" data-kt-filemanger-table="copy_link">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-fasten fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-300px" data-kt-menu="true">
    <!--begin::Card-->
    <div class="card card-flush">
        <div class="card-body p-5">
            <!--begin::Loader-->
            <div class="d-flex" data-kt-filemanger-table="copy_link_generator">
                <!--begin::Spinner-->
                <div class="me-5" data-kt-indicator="on">
                    <span class="indicator-progress">
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </span>
                </div>
                <!--end::Spinner-->

                <!--begin::Label-->
                <div class="fs-6 text-dark">Generating Share Link...</div>
                <!--end::Label-->
            </div>
            <!--end::Loader-->

            <!--begin::Link-->
            <div class="d-flex flex-column text-start d-none" data-kt-filemanger-table="copy_link_result">
                <div class="d-flex mb-3">
                    <i class="ki-outline ki-check fs-2 text-success me-3"></i>                    <div class="fs-6 text-dark">Share Link Generated</div>
                </div>
                <input type="text" class="form-control form-control-sm" value="https://path/to/file/or/folder/" />
                <div class="text-muted fw-normal mt-2 fs-8 px-3">Read only. <a href="settings/.php" class="ms-2">Change permissions</a></div>
            </div>
            <!--end::Link-->
        </div>
    </div>
    <!--end::Card-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::Share link-->

                                <!--begin::More-->
                                <div class="ms-2">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-outline ki-dots-square fs-5 m-0"></i>                                    </button>
                                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            Download File
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table="rename">
            Rename
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table-filter="move_row" data-bs-toggle="modal" data-bs-target="#kt_modal_move_to_folder">
            Move to folder
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link text-danger px-3" data-kt-filemanager-table-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->                                </div>
                                <!--end::More-->
                            </div>
                        </td>
                    </tr>
                            </tbody>
        </table>
        <!--end::Table-->
    </div>
    <!--end::Card body-->
</div>
<!--end::Card-->
<!--begin::Upload template-->
<table class="d-none">
    <tr id="kt_file_manager_new_folder_row" data-kt-filemanager-template="upload">
        <td></td>
        <td id="kt_file_manager_add_folder_form" class="fv-row">
            <div class="d-flex align-items-center">
                <!--begin::Folder icon-->
                <span id="kt_file_manager_folder_icon"><i class="ki-outline ki-folder fs-2x text-primary me-4"></i></span>
                <!--end::Folder icon-->

                <!--begin:Input-->
                <input type="text" name="new_folder_name" placeholder="Enter the folder name" class="form-control mw-250px me-3" />
                <!--end:Input-->

                <!--begin:Submit button-->
                <button class="btn btn-icon btn-light-primary me-3" id="kt_file_manager_add_folder">
                    <span class="indicator-label">
                        <i class="ki-outline ki-check fs-1"></i>                    </span>
                    <span class="indicator-progress"><span class="spinner-border spinner-border-sm align-middle"></span></span>
                </button>
                <!--end:Submit button-->

                <!--begin:Cancel button-->
                <button class="btn btn-icon btn-light-danger" id="kt_file_manager_cancel_folder">
                    <span class="indicator-label">
                        <i class="ki-outline ki-cross fs-1"></i>                    </span>
                    <span class="indicator-progress"><span class="spinner-border spinner-border-sm align-middle"></span></span>
                </button>
                <!--end:Cancel button-->
            </div>
        </td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
</table>
<!--end::Upload template-->

<!--begin::Rename template-->
<div class="d-none" data-kt-filemanager-template="rename">
    <div class="fv-row">
        <div class="d-flex align-items-center">
            <span id="kt_file_manager_rename_folder_icon"></span>
            <input type="text" id="kt_file_manager_rename_input" name="rename_folder_name" placeholder="Enter the new folder name" class="form-control mw-250px me-3" value="" />
            <button class="btn btn-icon btn-light-primary me-3" id="kt_file_manager_rename_folder">
                <i class="ki-outline ki-check fs-1"></i>            </button>
            <button class="btn btn-icon btn-light-danger" id="kt_file_manager_rename_folder_cancel">
                <span class="indicator-label">
                    <i class="ki-outline ki-cross fs-1"></i>                </span>
                <span class="indicator-progress"><span class="spinner-border spinner-border-sm align-middle"></span></span>
            </button>
        </div>
    </div>
</div>
<!--end::Rename template-->

<!--begin::Action template-->
<div class="d-none" data-kt-filemanager-template="action">
    <div class="d-flex justify-content-end">
        <!--begin::Share link-->
        <div class="ms-2" data-kt-filemanger-table="copy_link">
            <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                <i class="ki-outline ki-fasten fs-5 m-0"></i>            </button>
            <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-300px" data-kt-menu="true">
    <!--begin::Card-->
    <div class="card card-flush">
        <div class="card-body p-5">
            <!--begin::Loader-->
            <div class="d-flex" data-kt-filemanger-table="copy_link_generator">
                <!--begin::Spinner-->
                <div class="me-5" data-kt-indicator="on">
                    <span class="indicator-progress">
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </span>
                </div>
                <!--end::Spinner-->

                <!--begin::Label-->
                <div class="fs-6 text-dark">Generating Share Link...</div>
                <!--end::Label-->
            </div>
            <!--end::Loader-->

            <!--begin::Link-->
            <div class="d-flex flex-column text-start d-none" data-kt-filemanger-table="copy_link_result">
                <div class="d-flex mb-3">
                    <i class="ki-outline ki-check fs-2 text-success me-3"></i>                    <div class="fs-6 text-dark">Share Link Generated</div>
                </div>
                <input type="text" class="form-control form-control-sm" value="https://path/to/file/or/folder/" />
                <div class="text-muted fw-normal mt-2 fs-8 px-3">Read only. <a href="settings/.php" class="ms-2">Change permissions</a></div>
            </div>
            <!--end::Link-->
        </div>
    </div>
    <!--end::Card-->
</div>
<!--end::Menu-->        </div>
        <!--end::Share link-->

        <!--begin::More-->
        <div class="ms-2">
            <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                <i class="ki-outline ki-dots-square fs-5 m-0"></i>            </button>
            <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3">
            Download File
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table="rename">
            Rename
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-filemanager-table-filter="move_row" data-bs-toggle="modal" data-bs-target="#kt_modal_move_to_folder">
            Move to folder
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link text-danger px-3" data-kt-filemanager-table-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->        </div>
        <!--end::More-->
    </div>
</div>
<!--end::Action template-->

<!--begin::Checkbox template-->
<div class="d-none" data-kt-filemanager-template="checkbox">
    <div class="form-check form-check-sm form-check-custom form-check-solid"><input class="form-check-input" type="checkbox" value="1" /></div>
</div>
<!--end::Checkbox template-->
<!--begin::Modals-->

<!--begin::Modal - Upload File-->
<div class="modal fade" id="kt_modal_upload" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Form-->
            <form class="form" action="https://preview.keenthemes.com/metronic8/demo30/apps/file-manager/none" id="kt_modal_upload_form">
                <!--begin::Modal header-->
                <div class="modal-header">
                    <!--begin::Modal title-->
                    <h2 class="fw-bold">Upload files</h2> 
                    <!--end::Modal title-->

                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                        <i class="ki-outline ki-cross fs-1"></i>                    </div>
                    <!--end::Close-->
                </div>
                <!--end::Modal header-->

                <!--begin::Modal body-->
                <div class="modal-body pt-10 pb-15 px-lg-17">
                    <!--begin::Input group-->
                    <div class="form-group">
                        <!--begin::Dropzone-->
                        <div class="dropzone dropzone-queue mb-2" id="kt_modal_upload_dropzone">
                            <!--begin::Controls-->
                            <div class="dropzone-panel mb-4">
                                <a class="dropzone-select btn btn-sm btn-primary me-2">Attach files</a>
                                <a class="dropzone-upload btn btn-sm btn-light-primary me-2">Upload All</a>
                                <a class="dropzone-remove-all btn btn-sm btn-light-primary">Remove All</a>
                            </div>
                            <!--end::Controls-->

                            <!--begin::Items-->
                            <div class="dropzone-items wm-200px">
                                <div class="dropzone-item p-5" style="display:none">
                                    <!--begin::File-->
                                    <div class="dropzone-file">
                                        <div class="dropzone-filename text-dark" title="some_image_file_name.jpg">
                                            <span data-dz-name>some_image_file_name.jpg</span>
                                            <strong>(<span data-dz-size>340kb</span>)</strong>
                                        </div>

                                        <div class="dropzone-error mt-0" data-dz-errormessage></div>
                                    </div>
                                    <!--end::File-->

                                    <!--begin::Progress-->
                                    <div class="dropzone-progress">
                                        <div class="progress bg-gray-300">
                                            <div class="progress-bar bg-primary" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" data-dz-uploadprogress>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Progress-->

                                    <!--begin::Toolbar-->
                                    <div class="dropzone-toolbar">
                                        <span class="dropzone-start">
                                            <i class="ki-outline ki-to-right fs-1"></i>                                        </span>
                                        <span class="dropzone-cancel" data-dz-remove style="display: none;">
                                            <i class="ki-outline ki-cross fs-2"></i>                                        </span>
                                        <span class="dropzone-delete" data-dz-remove>
                                            <i class="ki-outline ki-cross fs-2"></i>                                        </span>
                                    </div>
                                    <!--end::Toolbar-->
                                </div>
                            </div>
                            <!--end::Items-->
                        </div>
                        <!--end::Dropzone-->

                        <!--begin::Hint-->
                        <span class="form-text fs-6 text-muted">Max file size is 1MB per file.</span>
                        <!--end::Hint-->
                    </div>
                    <!--end::Input group-->
                </div>
                <!--end::Modal body-->
            </form>
            <!--end::Form-->
        </div>
    </div>
</div>
<!--end::Modal - Upload File-->
<!--begin::Modal - New Product-->
<div class="modal fade" id="kt_modal_move_to_folder" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Form-->
            <form class="form" action="#" id="kt_modal_move_to_folder_form">
                <!--begin::Modal header-->
                <div class="modal-header">
                    <!--begin::Modal title-->
                    <h2 class="fw-bold">Move to folder</h2>
                    <!--end::Modal title-->

                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                        <i class="ki-outline ki-cross fs-1"></i>                    </div>
                    <!--end::Close-->
                </div>
                <!--end::Modal header-->

                <!--begin::Modal body-->
                <div class="modal-body pt-10 pb-15 px-lg-17">
                    <!--begin::Input group-->
                    <div class="form-group fv-row">
                                                    <!--begin::Item-->
                            <div class="d-flex">
                                <!--begin::Checkbox-->
                                <div class="form-check form-check-custom form-check-solid">
                                    <!--begin::Input-->
                                    <input class="form-check-input me-3" name="move_to_folder" type="radio" value="0" id="kt_modal_move_to_folder_0" />
                                    <!--end::Input-->

                                    <!--begin::Label-->
                                    <label class="form-check-label" for="kt_modal_move_to_folder_0">
                                        <div class="fw-bold"><i class="ki-outline ki-folder fs-2 text-primary me-2"></i> account</div>
                                    </label>
                                    <!--end::Label-->
                                </div>
                                <!--end::Checkbox-->
                            </div>
                            <!--end::Item-->

                            <div class='separator separator-dashed my-5'></div>                                                    <!--begin::Item-->
                            <div class="d-flex">
                                <!--begin::Checkbox-->
                                <div class="form-check form-check-custom form-check-solid">
                                    <!--begin::Input-->
                                    <input class="form-check-input me-3" name="move_to_folder" type="radio" value="1" id="kt_modal_move_to_folder_1" />
                                    <!--end::Input-->

                                    <!--begin::Label-->
                                    <label class="form-check-label" for="kt_modal_move_to_folder_1">
                                        <div class="fw-bold"><i class="ki-outline ki-folder fs-2 text-primary me-2"></i> apps</div>
                                    </label>
                                    <!--end::Label-->
                                </div>
                                <!--end::Checkbox-->
                            </div>
                            <!--end::Item-->

                            <div class='separator separator-dashed my-5'></div>                                                    <!--begin::Item-->
                            <div class="d-flex">
                                <!--begin::Checkbox-->
                                <div class="form-check form-check-custom form-check-solid">
                                    <!--begin::Input-->
                                    <input class="form-check-input me-3" name="move_to_folder" type="radio" value="2" id="kt_modal_move_to_folder_2" />
                                    <!--end::Input-->

                                    <!--begin::Label-->
                                    <label class="form-check-label" for="kt_modal_move_to_folder_2">
                                        <div class="fw-bold"><i class="ki-outline ki-folder fs-2 text-primary me-2"></i> widgets</div>
                                    </label>
                                    <!--end::Label-->
                                </div>
                                <!--end::Checkbox-->
                            </div>
                            <!--end::Item-->

                            <div class='separator separator-dashed my-5'></div>                                                    <!--begin::Item-->
                            <div class="d-flex">
                                <!--begin::Checkbox-->
                                <div class="form-check form-check-custom form-check-solid">
                                    <!--begin::Input-->
                                    <input class="form-check-input me-3" name="move_to_folder" type="radio" value="3" id="kt_modal_move_to_folder_3" />
                                    <!--end::Input-->

                                    <!--begin::Label-->
                                    <label class="form-check-label" for="kt_modal_move_to_folder_3">
                                        <div class="fw-bold"><i class="ki-outline ki-folder fs-2 text-primary me-2"></i> assets</div>
                                    </label>
                                    <!--end::Label-->
                                </div>
                                <!--end::Checkbox-->
                            </div>
                            <!--end::Item-->

                            <div class='separator separator-dashed my-5'></div>                                                    <!--begin::Item-->
                            <div class="d-flex">
                                <!--begin::Checkbox-->
                                <div class="form-check form-check-custom form-check-solid">
                                    <!--begin::Input-->
                                    <input class="form-check-input me-3" name="move_to_folder" type="radio" value="4" id="kt_modal_move_to_folder_4" />
                                    <!--end::Input-->

                                    <!--begin::Label-->
                                    <label class="form-check-label" for="kt_modal_move_to_folder_4">
                                        <div class="fw-bold"><i class="ki-outline ki-folder fs-2 text-primary me-2"></i> documentation</div>
                                    </label>
                                    <!--end::Label-->
                                </div>
                                <!--end::Checkbox-->
                            </div>
                            <!--end::Item-->

                            <div class='separator separator-dashed my-5'></div>                                                    <!--begin::Item-->
                            <div class="d-flex">
                                <!--begin::Checkbox-->
                                <div class="form-check form-check-custom form-check-solid">
                                    <!--begin::Input-->
                                    <input class="form-check-input me-3" name="move_to_folder" type="radio" value="5" id="kt_modal_move_to_folder_5" />
                                    <!--end::Input-->

                                    <!--begin::Label-->
                                    <label class="form-check-label" for="kt_modal_move_to_folder_5">
                                        <div class="fw-bold"><i class="ki-outline ki-folder fs-2 text-primary me-2"></i> layouts</div>
                                    </label>
                                    <!--end::Label-->
                                </div>
                                <!--end::Checkbox-->
                            </div>
                            <!--end::Item-->

                            <div class='separator separator-dashed my-5'></div>                                                    <!--begin::Item-->
                            <div class="d-flex">
                                <!--begin::Checkbox-->
                                <div class="form-check form-check-custom form-check-solid">
                                    <!--begin::Input-->
                                    <input class="form-check-input me-3" name="move_to_folder" type="radio" value="6" id="kt_modal_move_to_folder_6" />
                                    <!--end::Input-->

                                    <!--begin::Label-->
                                    <label class="form-check-label" for="kt_modal_move_to_folder_6">
                                        <div class="fw-bold"><i class="ki-outline ki-folder fs-2 text-primary me-2"></i> modals</div>
                                    </label>
                                    <!--end::Label-->
                                </div>
                                <!--end::Checkbox-->
                            </div>
                            <!--end::Item-->

                            <div class='separator separator-dashed my-5'></div>                                                    <!--begin::Item-->
                            <div class="d-flex">
                                <!--begin::Checkbox-->
                                <div class="form-check form-check-custom form-check-solid">
                                    <!--begin::Input-->
                                    <input class="form-check-input me-3" name="move_to_folder" type="radio" value="7" id="kt_modal_move_to_folder_7" />
                                    <!--end::Input-->

                                    <!--begin::Label-->
                                    <label class="form-check-label" for="kt_modal_move_to_folder_7">
                                        <div class="fw-bold"><i class="ki-outline ki-folder fs-2 text-primary me-2"></i> authentication</div>
                                    </label>
                                    <!--end::Label-->
                                </div>
                                <!--end::Checkbox-->
                            </div>
                            <!--end::Item-->

                            <div class='separator separator-dashed my-5'></div>                                                    <!--begin::Item-->
                            <div class="d-flex">
                                <!--begin::Checkbox-->
                                <div class="form-check form-check-custom form-check-solid">
                                    <!--begin::Input-->
                                    <input class="form-check-input me-3" name="move_to_folder" type="radio" value="8" id="kt_modal_move_to_folder_8" />
                                    <!--end::Input-->

                                    <!--begin::Label-->
                                    <label class="form-check-label" for="kt_modal_move_to_folder_8">
                                        <div class="fw-bold"><i class="ki-outline ki-folder fs-2 text-primary me-2"></i> dashboards</div>
                                    </label>
                                    <!--end::Label-->
                                </div>
                                <!--end::Checkbox-->
                            </div>
                            <!--end::Item-->

                            <div class='separator separator-dashed my-5'></div>                                                    <!--begin::Item-->
                            <div class="d-flex">
                                <!--begin::Checkbox-->
                                <div class="form-check form-check-custom form-check-solid">
                                    <!--begin::Input-->
                                    <input class="form-check-input me-3" name="move_to_folder" type="radio" value="9" id="kt_modal_move_to_folder_9" />
                                    <!--end::Input-->

                                    <!--begin::Label-->
                                    <label class="form-check-label" for="kt_modal_move_to_folder_9">
                                        <div class="fw-bold"><i class="ki-outline ki-folder fs-2 text-primary me-2"></i> pages</div>
                                    </label>
                                    <!--end::Label-->
                                </div>
                                <!--end::Checkbox-->
                            </div>
                            <!--end::Item-->

                                                                        </div>
                    <!--end::Input group-->

                    <!--begin::Action buttons-->
                    <div class="d-flex flex-center mt-12">
                        <!--begin::Button-->
                        <button type="button" class="btn btn-primary" id="kt_modal_move_to_folder_submit">
                            <span class="indicator-label">
                                Save
                            </span>
                            <span class="indicator-progress">
                                Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                            </span>
                        </button>
                        <!--end::Button-->
                    </div>
                    <!--begin::Action buttons-->
                </div>
                <!--end::Modal body-->
            </form>
            <!--end::Form-->
        </div>
    </div>
</div>
<!--end::Modal - Move file--><!--end::Modals-->
    </div>
<!--end::Content-->					
                </div>
                <!--end::Content wrapper-->

                                    
<!--begin::Footer-->
<div id="kt_app_footer" class="app-footer  d-flex flex-column flex-md-row align-items-center flex-center flex-md-stack py-2 py-lg-4 " >
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
<!--end::Menu-->    </div>
<!--end::Footer-->                            </div>
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
<div 
	id="kt_app_layout_builder" 
	class="bg-body" 

	data-kt-drawer="true" 
	data-kt-drawer-name="app-settings" 
	data-kt-drawer-activate="true" 
	data-kt-drawer-overlay="true" 
	data-kt-drawer-width="{default:'300px', 'lg': '380px'}" 
	data-kt-drawer-direction="end" 
	data-kt-drawer-toggle="#kt_app_layout_builder_toggle" 
	data-kt-drawer-close="#kt_app_layout_builder_close">

	<!--begin::Card-->
	<div class="card border-0 shadow-none rounded-0 w-100">
		<!--begin::Card header-->
<div 
    class="card-header bgi-position-y-bottom bgi-position-x-end bgi-size-cover bgi-no-repeat rounded-0 border-0 py-4" 
    id="kt_app_layout_builder_header"
    style="background-image:url('../../assets/media/misc/layout/customizer-header-bg.jpg')">

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
        <button 
			type="button" 
			class="btn btn-sm btn-icon btn-color-white p-0 w-20px h-20px rounded-1" 
			id="kt_app_layout_builder_close"
		>
            <i class="ki-outline ki-cross-square fs-2"></i>        </button>
    </div>
    <!--end::Card toolbar-->
</div>
<!--end::Card header-->
		<!--begin::Card body-->
		<div class="card-body position-relative" id="kt_app_layout_builder_body">
			<!--begin::Content-->
			<div id="kt_app_settings_content" 
				class="position-relative scroll-y me-n5 pe-5" 
				
				data-kt-scroll="true" 
				data-kt-scroll-height="auto" 
				data-kt-scroll-wrappers="#kt_app_layout_builder_body" 
				data-kt-scroll-dependencies="#kt_app_layout_builder_header, #kt_app_layout_builder_footer" 
				data-kt-scroll-offset="5px">

				<!--begin::Form-->
				<form class="form" method="POST" id="kt_app_layout_builder_form" action="https://preview.keenthemes.com/metronic8/demo30/index.php">
    				<input type="hidden" id="kt_app_layout_builder_action" name="layout-builder[action]"/>
					
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
						<img src="../../assets/media/preview/demos/demo30/light-ltr.png" class="form-check-rounded mw-100" alt=""/>                      
					</div>
					<!--end::Image--> 

					<!--begin::Check--> 
					<div class="form-check form-check-custom form-check-solid form-check-sm form-check-success">
						<input class="form-check-input" type="radio" value="light" name="theme_mode" id="kt_layout_builder_theme_mode_light"/>

						<!--begin::Label--> 
						<div class="form-check-label text-gray-700">
							Light						</div>
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
						<img src="../../assets/media/preview/demos/demo30/dark-ltr.png" class="form-check-rounded mw-100" alt=""/>                      
					</div>
					<!--end::Image--> 

					<!--begin::Check--> 
					<div class="form-check form-check-custom form-check-solid form-check-sm form-check-success">
						<input class="form-check-input" type="radio" value="dark" name="theme_mode" id="kt_layout_builder_theme_mode_dark"/>

						<!--begin::Label--> 
						<div class="form-check-label text-gray-700">
							Dark						</div>
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
			<input type="hidden" value="false" name="layout-builder[layout][app][general][rtl]"/>
			
			<input 
				class="form-check-input w-45px h-30px" 
				type="checkbox" 
				value="true" 
				name="layout-builder[layout][app][general][rtl]" 
							/>
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
			<div class="form-check form-check-custom form-check-success form-check-solid form-check-sm" >
				<input 
					class="form-check-input" type="radio" 
					checked 
					 
					value="default" 
					id="kt_layout_builder_page_width_default" 
					name="layout-builder[layout][app][general][page-width]"
				/>

				<!--begin::Label-->
				<label class="form-check-label text-gray-700 fw-bold text-nowrap" for="kt_layout_builder_page_width_default">
					Default				</label>
				<!--end::Label-->
			</div>
			<!--end::Check-->
								<!--begin::Check-->
			<div class="form-check form-check-custom form-check-success form-check-solid form-check-sm" >
				<input 
					class="form-check-input" type="radio" 
					 
					 
					value="fluid" 
					id="kt_layout_builder_page_width_fluid" 
					name="layout-builder[layout][app][general][page-width]"
				/>

				<!--begin::Label-->
				<label class="form-check-label text-gray-700 fw-bold text-nowrap" for="kt_layout_builder_page_width_fluid">
					Fluid				</label>
				<!--end::Label-->
			</div>
			<!--end::Check-->
								<!--begin::Check-->
			<div class="form-check form-check-custom form-check-success form-check-solid form-check-sm" >
				<input 
					class="form-check-input" type="radio" 
					 
					 
					value="fixed" 
					id="kt_layout_builder_page_width_fixed" 
					name="layout-builder[layout][app][general][page-width]"
				/>

				<!--begin::Label-->
				<label class="form-check-label text-gray-700 fw-bold text-nowrap" for="kt_layout_builder_page_width_fixed">
					Fixed				</label>
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
				<div style="visibility: hidden; height: 0 !important; width: 0 !importnat; overflow:hidden">
					<input 
						class="form-check-input" 
						type="radio" 
						value="duotone" 
						 
						name="layout-builder[layout][app][general][icons]"/>
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
				<div style="visibility: hidden; height: 0 !important; width: 0 !importnat; overflow:hidden">
					<input 
						class="form-check-input" 
						type="radio" 
						value="outline" 
						checked 
						name="layout-builder[layout][app][general][icons]"/>
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
				<div style="visibility: hidden; height: 0 !important; width: 0 !importnat; overflow:hidden">
					<input 
						class="form-check-input" 
						type="radio" 
						value="solid" 
						 
						name="layout-builder[layout][app][general][icons]"/>
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

							<a href="../../layout-builder.php" class="fw-semibold text-primary">
					More layout options
				</a>
					</div>	
	</div>
	<!--end::Heading-->

	<!--begin::Option-->
	<div class="d-flex justify-content-end">
		<!--begin::Check-->
		<div class="form-check form-check-solid form-check-custom form-check-success form-switch">
			<input type="hidden" value="false" name="layout-builder[layout][app][header][default][sticky][enabled]"/>

			<input 
				class="form-check-input w-45px h-30px" 
				type="checkbox" 
				checked 
				value="true" 
				name="layout-builder[layout][app][header][default][sticky][enabled]"
			/>
		</div>
		<!--end::Check-->
	</div>
	<!--end::Option-->
</div>
<!--end::Form group-->		
				
	</div>
<!--end::Card body-->				</form>
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
    Please wait...    <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
</span>
<!--end::Indicator progress-->    </button>

    <button type="button" id="kt_app_layout_builder_reset"  class="btn btn-light flex-grow-1 fw-semibold">
        
<!--begin::Indicator label-->
<span class="indicator-label">
    Reset</span>
<!--end::Indicator label-->

<!--begin::Indicator progress-->
<span class="indicator-progress">
    Please wait...    <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
</span>
<!--end::Indicator progress-->    </button>
</div>
<!--end::Card footer-->	</div>
	<!--end::Card-->
</div>
<!--end::App layout builder-->

<!--begin::App settings toggle-->
<button 
  	id="kt_app_layout_builder_toggle" 
    class="btn btn-dark app-layout-builder-toggle lh-1 py-4 " 
    title="Metronic Builder" 
    data-bs-custom-class="tooltip-inverse" 
    data-bs-toggle="tooltip" 
    data-bs-placement="left" 
    data-bs-dismiss="click" 
    data-bs-trigger="hover"
>
  	<i class="ki-outline ki-setting-4 fs-4 me-1"></i> Customize
</button>
<!--end::App settings toggle-->
<!--begin::Drawers-->
<!--begin::Activities drawer-->
<div 
	id="kt_activities" 
	class="bg-body" 

	data-kt-drawer="true" 
	data-kt-drawer-name="activities" 
	data-kt-drawer-activate="true" 
	data-kt-drawer-overlay="true" 
	data-kt-drawer-width="{default:'300px', 'lg': '900px'}" 
	data-kt-drawer-direction="end" 
	data-kt-drawer-toggle="#kt_activities_toggle" 
	data-kt-drawer-close="#kt_activities_close">

	<div class="card shadow-none border-0 rounded-0">
		<!--begin::Header-->
		<div class="card-header" id="kt_activities_header">
			<h3 class="card-title fw-bold text-dark">Activity Logs</h3>

			<div class="card-toolbar">
				<button type="button" class="btn btn-sm btn-icon btn-active-light-primary me-n5" id="kt_activities_close">
					<i class="ki-outline ki-cross fs-1"></i>				</button>
			</div>
		</div>
		<!--end::Header-->

		<!--begin::Body-->
		<div class="card-body position-relative" id="kt_activities_body">
			<!--begin::Content-->
			<div id="kt_activities_scroll" 
				class="position-relative scroll-y me-n5 pe-5" 
				
				data-kt-scroll="true" 
				data-kt-scroll-height="auto" 
				data-kt-scroll-wrappers="#kt_activities_body" 
				data-kt-scroll-dependencies="#kt_activities_header, #kt_activities_footer" 
				data-kt-scroll-offset="5px">

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
            <i class="ki-outline ki-message-text-2 fs-2 text-gray-500"></i>        </div>
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
                    <img src="../../assets/media/avatars/300-14.jpg" alt="img"/>
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
                <a href="../projects/project.php" class="fs-5 text-dark text-hover-primary fw-semibold w-375px min-w-200px">Meeting with customer</a>                                  
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
                        <img src="../../assets/media/avatars/300-2.jpg" alt="img"/>
                    </div>
                    <!--end::User-->

                    <!--begin::User-->
                    <div class="symbol symbol-circle symbol-25px">
                        <img src="../../assets/media/avatars/300-14.jpg" alt="img"/>
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
                <a href="../projects/project.php" class="btn btn-sm btn-light btn-active-light-primary">View</a>    
                <!--end::Action-->                                
            </div>
            <!--end::Record-->

            <!--begin::Record-->
            <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-0">  
                <!--begin::Title-->                                   
                <a href="../projects/project.php" class="fs-5 text-dark text-hover-primary fw-semibold w-375px min-w-200px">Project Delivery Preparation</a>                                  
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
                        <img src="../../assets/media/avatars/300-20.jpg" alt="img"/>
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
                <a href="../projects/project.php" class="btn btn-sm btn-light btn-active-light-primary">View</a>    
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
            <i class="ki-outline ki-flag fs-2 text-gray-500"></i>        </div>
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
                    <img src="../../assets/media/avatars/300-1.jpg" alt="img"/>
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
            <i class="ki-outline ki-disconnect fs-2 text-gray-500"></i>        </div>
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
                    <img src="../../assets/media/avatars/300-23.jpg" alt="img"/>
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
                    <img alt="" class="w-30px me-3" src="../../assets/media/svg/files/pdf.svg"/>
                    <!--end::Icon--> 

                    <!--begin::Info--> 
                    <div class="ms-1 fw-semibold">
                        <!--begin::Desc--> 
                        <a href="../projects/project.php" class="fs-6 text-hover-primary fw-bold">Finance KPI App Guidelines</a>
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
                    <img alt="/metronic8/demo30/../demo30/apps/projects/project.php" class="w-30px me-3" src="../../assets/media/svg/files/doc.svg"/>
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
                    <img alt="/metronic8/demo30/../demo30/apps/projects/project.php" class="w-30px me-3" src="../../assets/media/svg/files/css.svg"/>
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
            <i class="ki-outline ki-abstract-26 fs-2 text-gray-500"></i>        </div>
    </div>
    <!--end::Timeline icon-->

        <!--begin::Timeline content-->
    <div class="timeline-content mb-10 mt-n1">
        <!--begin::Timeline heading-->
        <div class="pe-3 mb-5">
            <!--begin::Title-->
            <div class="fs-5 fw-semibold mb-2">
                Task <a href="#" class="text-primary fw-bold me-1">#45890</a>  
                merged with <a href="#" class="text-primary fw-bold me-1">#45890</a>  in “Ads Pro Admin Dashboard project:
            </div>
            <!--end::Title-->

            <!--begin::Description-->
            <div class="d-flex align-items-center mt-1 fs-6">
                <!--begin::Info-->
                <div class="text-muted me-2 fs-7">Initiated at 4:23 PM by</div>
                <!--end::Info-->

                <!--begin::User-->
                <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
                    <img src="../../assets/media/avatars/300-14.jpg" alt="img"/>
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
            <i class="ki-outline ki-pencil fs-2 text-gray-500"></i>        </div>
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
                    <img src="../../assets/media/avatars/300-2.jpg" alt="img"/>
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
                        <img alt="img" class="rounded w-150px" src="../../assets/media/stock/600x400/img-29.jpg"/>  
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
                        <img alt="img" class="rounded w-150px" src="../../assets/media/stock/600x400/img-31.jpg"/> 
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
                        <img alt="img" class="rounded w-150px" src="../../assets/media/stock/600x400/img-40.jpg"/>
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
            <i class="ki-outline ki-sms fs-2 text-gray-500"></i>        </div>
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
            <i class="ki-outline ki-pencil fs-2 text-gray-500"></i>        </div>
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
                    <img src="../../assets/media/avatars/300-4.jpg" alt="img"/>
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
        <i class="ki-outline ki-devices-2 fs-2tx text-primary me-4"></i>        <!--end::Icon-->
    
    <!--begin::Wrapper-->
    <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                    <!--begin::Content-->
            <div class="mb-3 mb-md-0 fw-semibold">
                                    <h4 class="text-gray-900 fw-bold">Database Backup Process Completed!</h4>
                
                                    <div class="fs-6 text-gray-700 pe-7">Login into Admin Dashboard to make sure the data integrity is OK</div>
                            </div>
            <!--end::Content-->
        
                    <!--begin::Action-->
            <a href="#" class="btn btn-primary px-6 align-self-center text-nowrap"  > 
                Proceed            </a>
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
            <i class="ki-outline ki-basket fs-2 text-gray-500"></i>        </div>
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
<!--end::Timeline item--> 				</div>
				<!--end::Timeline items-->				 
			</div>
			<!--end::Content-->
		</div>
		<!--end::Body-->

		<!--begin::Footer-->
		<div class="card-footer py-5 text-center" id="kt_activities_footer">
			<a href="../../pages/user-profile/activity.php" class="btn btn-bg-body text-primary">
				View All Activities <i class="ki-outline ki-arrow-right fs-3 text-primary"></i>			</a>
		</div>
		<!--end::Footer-->
	</div>
</div>
<!--end::Activities drawer-->		

<!--begin::Chat drawer-->
<div 
    id="kt_drawer_chat"

    class="bg-body"
    data-kt-drawer="true" 
	data-kt-drawer-name="chat" 
	data-kt-drawer-activate="true" 
	data-kt-drawer-overlay="true" 
	data-kt-drawer-width="{default:'300px', 'md': '500px'}" 
	data-kt-drawer-direction="end" 
	data-kt-drawer-toggle="#kt_drawer_chat_toggle" 
	data-kt-drawer-close="#kt_drawer_chat_close">

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
                        <i class="ki-outline ki-dots-square fs-2"></i>                    </button>
                    
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
        <a href="#" class="menu-link px-3"  data-bs-toggle="modal" data-bs-target="#kt_modal_users_search">
            Add Contact
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link flex-stack px-3"  data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">
            Invite Contacts

            <span class="ms-2" data-bs-toggle="tooltip" title="Specify a contact email to send an invitation">
                <i class="ki-outline ki-information fs-7"></i>            </span>
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
                    <i class="ki-outline ki-cross-square fs-2"></i>                </div>
                <!--end::Close-->
            </div>
            <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->

        <!--begin::Card body-->
        <div class="card-body" id="kt_drawer_chat_messenger_body">
            <!--begin::Messages-->
            <div 
                class="scroll-y me-n5 pe-5"

                data-kt-element="messages"

                data-kt-scroll="true"     
                data-kt-scroll-activate="true"
                data-kt-scroll-height="auto"
                data-kt-scroll-dependencies="#kt_drawer_chat_messenger_header, #kt_drawer_chat_messenger_footer"
                data-kt-scroll-wrappers="#kt_drawer_chat_messenger_body"       
                data-kt-scroll-offset="0px">

                
    
    <!--begin::Message(in)-->
    <div class="d-flex justify-content-start mb-10 " >
        <!--begin::Wrapper-->
        <div class="d-flex flex-column align-items-start">
            <!--begin::User-->
            <div class="d-flex align-items-center mb-2">
                                    <!--begin::Avatar--><div class="symbol  symbol-35px symbol-circle "><img alt="Pic" src="../../assets/media/avatars/300-25.jpg"/></div><!--end::Avatar-->
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
                How likely are you to recommend our company to your friends and family ?            </div>
            <!--end::Text-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Message(in)-->
    
    <!--begin::Message(out)-->
    <div class="d-flex justify-content-end mb-10 " >
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

                    <!--begin::Avatar--><div class="symbol  symbol-35px symbol-circle "><img alt="Pic" src="../../assets/media/avatars/300-1.jpg"/></div><!--end::Avatar-->                 
            </div>
            <!--end::User-->

            <!--begin::Text-->
            <div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end" data-kt-element="message-text">
                Hey there, we’re just writing to let you know that you’ve been subscribed to a repository on GitHub.            </div>
            <!--end::Text-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Message(out)-->
    
    <!--begin::Message(in)-->
    <div class="d-flex justify-content-start mb-10 " >
        <!--begin::Wrapper-->
        <div class="d-flex flex-column align-items-start">
            <!--begin::User-->
            <div class="d-flex align-items-center mb-2">
                                    <!--begin::Avatar--><div class="symbol  symbol-35px symbol-circle "><img alt="Pic" src="../../assets/media/avatars/300-25.jpg"/></div><!--end::Avatar-->
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
                Ok, Understood!            </div>
            <!--end::Text-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Message(in)-->
    
    <!--begin::Message(out)-->
    <div class="d-flex justify-content-end mb-10 " >
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

                    <!--begin::Avatar--><div class="symbol  symbol-35px symbol-circle "><img alt="Pic" src="../../assets/media/avatars/300-1.jpg"/></div><!--end::Avatar-->                 
            </div>
            <!--end::User-->

            <!--begin::Text-->
            <div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end" data-kt-element="message-text">
                You’ll receive notifications for all issues, pull requests!            </div>
            <!--end::Text-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Message(out)-->
    
    <!--begin::Message(in)-->
    <div class="d-flex justify-content-start mb-10 " >
        <!--begin::Wrapper-->
        <div class="d-flex flex-column align-items-start">
            <!--begin::User-->
            <div class="d-flex align-items-center mb-2">
                                    <!--begin::Avatar--><div class="symbol  symbol-35px symbol-circle "><img alt="Pic" src="../../assets/media/avatars/300-25.jpg"/></div><!--end::Avatar-->
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
                You can unwatch this repository immediately by clicking here: <a href="https://keenthemes.com/">Keenthemes.com</a>            </div>
            <!--end::Text-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Message(in)-->
    
    <!--begin::Message(out)-->
    <div class="d-flex justify-content-end mb-10 " >
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

                    <!--begin::Avatar--><div class="symbol  symbol-35px symbol-circle "><img alt="Pic" src="../../assets/media/avatars/300-1.jpg"/></div><!--end::Avatar-->                 
            </div>
            <!--end::User-->

            <!--begin::Text-->
            <div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end" data-kt-element="message-text">
                Most purchased Business courses during this sale!            </div>
            <!--end::Text-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Message(out)-->
    
    <!--begin::Message(in)-->
    <div class="d-flex justify-content-start mb-10 " >
        <!--begin::Wrapper-->
        <div class="d-flex flex-column align-items-start">
            <!--begin::User-->
            <div class="d-flex align-items-center mb-2">
                                    <!--begin::Avatar--><div class="symbol  symbol-35px symbol-circle "><img alt="Pic" src="../../assets/media/avatars/300-25.jpg"/></div><!--end::Avatar-->
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
                Company BBQ to celebrate the last quater achievements and goals. Food and drinks provided            </div>
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

                    <!--begin::Avatar--><div class="symbol  symbol-35px symbol-circle "><img alt="Pic" src="../../assets/media/avatars/300-1.jpg"/></div><!--end::Avatar-->                 
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
                                    <!--begin::Avatar--><div class="symbol  symbol-35px symbol-circle "><img alt="Pic" src="../../assets/media/avatars/300-25.jpg"/></div><!--end::Avatar-->
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
                Right before vacation season we have the next Big Deal for you.            </div>
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
                        <i class="ki-outline ki-paper-clip fs-3"></i>                    </button>
                    <button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button" data-bs-toggle="tooltip" title="Coming soon">
                        <i class="ki-outline ki-cloud-add fs-3"></i>                    </button>
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
<div 
    id="kt_shopping_cart"

    class="bg-body"
    data-kt-drawer="true" 
	data-kt-drawer-name="cart" 
	data-kt-drawer-activate="true" 
	data-kt-drawer-overlay="true" 
	data-kt-drawer-width="{default:'300px', 'md': '500px'}" 
	data-kt-drawer-direction="end" 
	data-kt-drawer-toggle="#kt_drawer_shopping_cart_toggle" 
	data-kt-drawer-close="#kt_drawer_shopping_cart_close">

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
                    <i class="ki-outline ki-cross fs-2"></i>                </div>
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
                            <a href="../ecommerce/sales/details.php" class="text-gray-800 text-hover-primary fs-4 fw-bold">Iblender</a>
                            
                            <span class="text-gray-400 fw-semibold d-block">The best kitchen gadget in 2022</span>
                        </div>                   
                        <!--end::Section-->                    
                             
                        <!--begin::Section-->      
                        <div class="d-flex align-items-center">
                            <span class="fw-bold text-gray-800 fs-5">$ 350</span>
                            <span class="text-muted mx-2">for</span>
                            <span class="fw-bold text-gray-800 fs-5 me-3">5</span>

                            <a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                <i class="ki-outline ki-minus fs-4"></i>                            </a>

                            <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                <i class="ki-outline ki-plus fs-4"></i>                            </a>
                        </div>                          
                        <!--end::Wrapper--> 
                    </div>                   
                    <!--end::Wrapper-->                    

                    <!--begin::Pic--> 
                    <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                        <img src="../../assets/media/stock/600x400/img-1.jpg" alt=""/>   
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
                            <a href="../ecommerce/sales/details.php" class="text-gray-800 text-hover-primary fs-4 fw-bold">SmartCleaner</a>
                            
                            <span class="text-gray-400 fw-semibold d-block">Smart tool for cooking</span>
                        </div>                   
                        <!--end::Section-->                    
                             
                        <!--begin::Section-->      
                        <div class="d-flex align-items-center">
                            <span class="fw-bold text-gray-800 fs-5">$ 650</span>
                            <span class="text-muted mx-2">for</span>
                            <span class="fw-bold text-gray-800 fs-5 me-3">4</span>

                            <a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                <i class="ki-outline ki-minus fs-4"></i>                            </a>

                            <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                <i class="ki-outline ki-plus fs-4"></i>                            </a>
                        </div>                          
                        <!--end::Wrapper--> 
                    </div>                   
                    <!--end::Wrapper-->                    

                    <!--begin::Pic--> 
                    <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                        <img src="../../assets/media/stock/600x400/img-3.jpg" alt=""/>   
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
                            <a href="../ecommerce/sales/details.php" class="text-gray-800 text-hover-primary fs-4 fw-bold">CameraMaxr</a>
                            
                            <span class="text-gray-400 fw-semibold d-block">Professional camera for edge</span>
                        </div>                   
                        <!--end::Section-->                    
                             
                        <!--begin::Section-->      
                        <div class="d-flex align-items-center">
                            <span class="fw-bold text-gray-800 fs-5">$ 150</span>
                            <span class="text-muted mx-2">for</span>
                            <span class="fw-bold text-gray-800 fs-5 me-3">3</span>

                            <a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                <i class="ki-outline ki-minus fs-4"></i>                            </a>

                            <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                <i class="ki-outline ki-plus fs-4"></i>                            </a>
                        </div>                          
                        <!--end::Wrapper--> 
                    </div>                   
                    <!--end::Wrapper-->                    

                    <!--begin::Pic--> 
                    <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                        <img src="../../assets/media/stock/600x400/img-8.jpg" alt=""/>   
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
                            <a href="../ecommerce/sales/details.php" class="text-gray-800 text-hover-primary fs-4 fw-bold">$D Printer</a>
                            
                            <span class="text-gray-400 fw-semibold d-block">Manfactoring unique objekts</span>
                        </div>                   
                        <!--end::Section-->                    
                             
                        <!--begin::Section-->      
                        <div class="d-flex align-items-center">
                            <span class="fw-bold text-gray-800 fs-5">$ 1450</span>
                            <span class="text-muted mx-2">for</span>
                            <span class="fw-bold text-gray-800 fs-5 me-3">7</span>

                            <a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                <i class="ki-outline ki-minus fs-4"></i>                            </a>

                            <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                <i class="ki-outline ki-plus fs-4"></i>                            </a>
                        </div>                          
                        <!--end::Wrapper--> 
                    </div>                   
                    <!--end::Wrapper-->                    

                    <!--begin::Pic--> 
                    <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                        <img src="../../assets/media/stock/600x400/img-26.jpg" alt=""/>   
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
                            <a href="../ecommerce/sales/details.php" class="text-gray-800 text-hover-primary fs-4 fw-bold">MotionWire</a>
                            
                            <span class="text-gray-400 fw-semibold d-block">Perfect animation tool</span>
                        </div>                   
                        <!--end::Section-->                    
                             
                        <!--begin::Section-->      
                        <div class="d-flex align-items-center">
                            <span class="fw-bold text-gray-800 fs-5">$ 650</span>
                            <span class="text-muted mx-2">for</span>
                            <span class="fw-bold text-gray-800 fs-5 me-3">7</span>

                            <a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                <i class="ki-outline ki-minus fs-4"></i>                            </a>

                            <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                <i class="ki-outline ki-plus fs-4"></i>                            </a>
                        </div>                          
                        <!--end::Wrapper--> 
                    </div>                   
                    <!--end::Wrapper-->                    

                    <!--begin::Pic--> 
                    <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                        <img src="../../assets/media/stock/600x400/img-21.jpg" alt=""/>   
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
                            <a href="../ecommerce/sales/details.php" class="text-gray-800 text-hover-primary fs-4 fw-bold">Samsung</a>
                            
                            <span class="text-gray-400 fw-semibold d-block">Profile info,Timeline etc</span>
                        </div>                   
                        <!--end::Section-->                    
                             
                        <!--begin::Section-->      
                        <div class="d-flex align-items-center">
                            <span class="fw-bold text-gray-800 fs-5">$ 720</span>
                            <span class="text-muted mx-2">for</span>
                            <span class="fw-bold text-gray-800 fs-5 me-3">6</span>

                            <a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                <i class="ki-outline ki-minus fs-4"></i>                            </a>

                            <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                <i class="ki-outline ki-plus fs-4"></i>                            </a>
                        </div>                          
                        <!--end::Wrapper--> 
                    </div>                   
                    <!--end::Wrapper-->                    

                    <!--begin::Pic--> 
                    <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                        <img src="../../assets/media/stock/600x400/img-34.jpg" alt=""/>   
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
                            <a href="../ecommerce/sales/details.php" class="text-gray-800 text-hover-primary fs-4 fw-bold">$D Printer</a>
                            
                            <span class="text-gray-400 fw-semibold d-block">Manfactoring unique objekts</span>
                        </div>                   
                        <!--end::Section-->                    
                             
                        <!--begin::Section-->      
                        <div class="d-flex align-items-center">
                            <span class="fw-bold text-gray-800 fs-5">$ 430</span>
                            <span class="text-muted mx-2">for</span>
                            <span class="fw-bold text-gray-800 fs-5 me-3">8</span>

                            <a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                <i class="ki-outline ki-minus fs-4"></i>                            </a>

                            <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                <i class="ki-outline ki-plus fs-4"></i>                            </a>
                        </div>                          
                        <!--end::Wrapper--> 
                    </div>                   
                    <!--end::Wrapper-->                    

                    <!--begin::Pic--> 
                    <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                        <img src="../../assets/media/stock/600x400/img-27.jpg" alt=""/>   
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
					<i class="ki-outline ki-abstract-41 fs-1 pt-1 mb-2"></i>					Prebuilts
				</a>
				<!--end::Prebuilts toggle-->
			
			
							<!--begin::Get help-->
				<a href="https://devs.keenthemes.com/" target="_blank" class="app-engage-btn hover-primary">			
					<i class="ki-outline ki-like-shapes fs-1 pt-1 mb-2"></i>					Get Help
				</a>
				<!--end::Get help-->
			
							<!--begin::Prebuilts toggle-->
				<a href="https://1.envato.market/EA4JP" target="_blank" class="app-engage-btn hover-success">			
					<i class="ki-outline ki-basket fs-2 pt-1 mb-2"></i>					Buy Now
				</a>
				<!--end::Prebuilts toggle-->
			
							<!--begin::Engage close-->
				<a href="#" id="kt_app_engage_toggle_off" class="app-engage-btn app-engage-btn-toggle-off text-hover-primary p-0">			
					<i class="ki-outline ki-cross fs-2x"></i>				</a>
				<!--end::Engage close-->

				<!--begin::Engage close-->
				<a href="#" id="kt_app_engage_toggle_on" class="app-engage-btn app-engage-btn-toggle-on text-hover-primary p-0" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-custom-class="tooltip-inverse" data-bs-dimiss="click" title="Explore Metronic">		
					<i class="ki-outline ki-question fs-2 text-primary"></i>				</a>
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
		<i class="ki-outline ki-down fs-4 text-gray-600 rotate-180-"></i>		<!--end::Arrow-->
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
                    <i class="ki-outline ki-cross-square fs-1"></i>                </div>
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
					<a 
						class="nav-link btn btn-active-light btn-color-gray-600 btn-active-color-gray-800 fs-5 fw-bold 
						" 
						data-bs-toggle="tab" 
						href="#kt_app_engage_prebuilts_tab_demos">
						
						Layouts					</a>
					<!--end::Tab link-->
				</li>
				<!--end::Tab item-->
							<!--begin::Tab item-->
				<li class="nav-item px-2">
					<!--begin::Tab link-->
					<a 
						class="nav-link btn btn-active-light btn-color-gray-600 btn-active-color-gray-800 fs-5 fw-bold 
						active" 
						data-bs-toggle="tab" 
						href="#kt_app_engage_prebuilts_tab_dashboards">
						
						Dashboards					</a>
					<!--end::Tab link-->
				</li>
				<!--end::Tab item-->
							<!--begin::Tab item-->
				<li class="nav-item px-2">
					<!--begin::Tab link-->
					<a 
						class="nav-link btn btn-active-light btn-color-gray-600 btn-active-color-gray-800 fs-5 fw-bold 
						" 
						data-bs-toggle="tab" 
						href="#kt_app_engage_prebuilts_tab_pages">
						
						Pages					</a>
					<!--end::Tab link-->
				</li>
				<!--end::Tab item-->
							<!--begin::Tab item-->
				<li class="nav-item px-2">
					<!--begin::Tab link-->
					<a 
						class="nav-link btn btn-active-light btn-color-gray-600 btn-active-color-gray-800 fs-5 fw-bold 
						" 
						data-bs-toggle="tab" 
						href="#kt_app_engage_prebuilts_tab_apps">
						
						Apps					</a>
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
				<div 
					class="hover-scroll-y pe-12 me-n12" 
					data-kt-scroll="true" 
					data-kt-scroll-height="auto" 
					data-kt-scroll-wrappers="#kt_app_engage_prebuilts_modal, #kt_app_engage_prebuilts_modal_dialog, #kt_app_engage_prebuilts_body" 
					data-kt-scroll-dependencies="#kt_app_engage_prebuilts_header, #kt_app_engage_prebuilts_view_image_tabs" 
					data-kt-scroll-offset="215px">

					<!--begin::Row-->
					<div class="row gy-10"> 
													
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="https://preview.keenthemes.com/metronic8/demo1/index.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Metronic Original	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo1.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="https://preview.keenthemes.com/metronic8/demo2/index.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		SaaS App	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo2.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="../../index.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Sales Tracking App	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo30.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="https://preview.keenthemes.com/metronic8/demo39/index.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Billing SaaS	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo39.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="https://preview.keenthemes.com/metronic8/demo31/index.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Marketing Automation	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo31.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="https://preview.keenthemes.com/metronic8/demo27/index.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Databox Dashboard	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo27.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="https://preview.keenthemes.com/metronic8/demo6/index.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Time Reporting	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo6.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="https://preview.keenthemes.com/metronic8/demo3/index.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		New Trend	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo3.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="https://preview.keenthemes.com/metronic8/demo23/index.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Member Dashboard	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo23.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="https://preview.keenthemes.com/metronic8/demo38/index.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Email Marketing	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo38.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="https://preview.keenthemes.com/metronic8/demo36/index.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Digital Marketing	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo36.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="https://preview.keenthemes.com/metronic8/demo10/index.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Project Grid	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo10.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="https://preview.keenthemes.com/metronic8/demo35/index.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Traffic Analytics	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo35.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="https://preview.keenthemes.com/metronic8/demo8/index.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Analytics App	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo8.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="https://preview.keenthemes.com/metronic8/demo25/index.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		User Guiding App	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo25.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="https://preview.keenthemes.com/metronic8/demo20/index.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		CRM Software	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo20.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="https://preview.keenthemes.com/metronic8/demo7/index.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		CRM Dashboard	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo7.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="https://preview.keenthemes.com/metronic8/demo50/index.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Micro-SaaS App	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo50.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="https://preview.keenthemes.com/metronic8/demo32/index.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Delivery Management	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo32.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="https://preview.keenthemes.com/metronic8/demo42/index.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Calendar Workspace	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo42.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="https://preview.keenthemes.com/metronic8/demo44/index.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Recruit Automation	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo44.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="https://preview.keenthemes.com/metronic8/demo33/index.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Social Campaings	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo33.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="https://preview.keenthemes.com/metronic8/demo37/index.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Cloud Suite	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo37.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="https://preview.keenthemes.com/metronic8/demo11/index.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Finance Planner	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo11.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="https://preview.keenthemes.com/metronic8/demo16/index.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Podcast App	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo16.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="https://preview.keenthemes.com/metronic8/demo26/index.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Planable App	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo26.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="https://preview.keenthemes.com/metronic8/demo22/index.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Media Publisher	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo22.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="https://preview.keenthemes.com/metronic8/demo19/index.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Reports Panel	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo19.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="https://preview.keenthemes.com/metronic8/demo40/index.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		HR App	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo40.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="https://preview.keenthemes.com/metronic8/demo29/index.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Project Workspace	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo29.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="https://preview.keenthemes.com/metronic8/demo24/index.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Helpdesk App	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo24.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="https://preview.keenthemes.com/metronic8/demo4/index.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Jobs Site	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo4.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="https://preview.keenthemes.com/metronic8/demo41/index.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Business Intelligence	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo41.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="https://preview.keenthemes.com/metronic8/demo18/index.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Goal Tracking	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo18.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="https://preview.keenthemes.com/metronic8/demo21/index.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Monochrome App	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo21.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="https://preview.keenthemes.com/metronic8/demo34/index.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Finance Analytics	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo34.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="https://preview.keenthemes.com/metronic8/demo15/index.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Crypto Planner	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo15.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="https://preview.keenthemes.com/metronic8/demo14/index.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Project Workplace	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo14.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="https://preview.keenthemes.com/metronic8/demo9/index.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Sales Manager	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo9.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="https://preview.keenthemes.com/metronic8/demo5/index.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Support Forum	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo5.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="https://preview.keenthemes.com/metronic8/demo13/index.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Classic Dashboard	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo13.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="https://preview.keenthemes.com/metronic8/demo12/index.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Data Analyzer	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo12.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="https://preview.keenthemes.com/metronic8/demo48/index.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Cloud ERP	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo48.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="https://preview.keenthemes.com/metronic8/demo28/index.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		eCommerce App	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo28.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="https://preview.keenthemes.com/metronic8/demo17/index.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Events Scheduler	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo17.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="https://preview.keenthemes.com/metronic8/demo49/index.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		KPI Tracking	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo49.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="https://preview.keenthemes.com/metronic8/demo43/index.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Healthcare Dashboard	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo43.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="https://preview.keenthemes.com/metronic8/demo45/index.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		OKR Tracking	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo45.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="https://preview.keenthemes.com/metronic8/demo47/index.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Campaign Automation	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo47.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="https://preview.keenthemes.com/metronic8/demo46/index.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Audit Board App	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo46.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
					
						  					
					</div>
					<!--end::Row-->
				</div>
				<!--end::Scroll wrapper-->
			</div>
								<div class="pt-5 tab-pane fade show active" id="kt_app_engage_prebuilts_tab_dashboards" role="tabpanel">
				<!--begin::Scroll wrapper-->
				<div 
					class="hover-scroll-y pe-12 me-n12" 
					data-kt-scroll="true" 
					data-kt-scroll-height="auto" 
					data-kt-scroll-wrappers="#kt_app_engage_prebuilts_modal, #kt_app_engage_prebuilts_modal_dialog, #kt_app_engage_prebuilts_body" 
					data-kt-scroll-dependencies="#kt_app_engage_prebuilts_header, #kt_app_engage_prebuilts_view_image_tabs" 
					data-kt-scroll-offset="215px">

					<!--begin::Row-->
					<div class="row gy-10"> 
						  
							
		
	<!--begin::Col-->
	<div class="col-md-4">
		
<!--begin::Preview-->
<a 
	href="../../dashboards/marketing.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Marketing	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/dashboards/marketing.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-md-4">
		
<!--begin::Preview-->
<a 
	href="../../dashboards/social.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Social	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/dashboards/social.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-md-4">
		
<!--begin::Preview-->
<a 
	href="../../dashboards/ecommerce.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Ecommerce	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/dashboards/ecommerce.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-md-4">
		
<!--begin::Preview-->
<a 
	href="../../dashboards/store-analytics.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Store-analytics	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/dashboards/store-analytics.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-md-4">
		
<!--begin::Preview-->
<a 
	href="../../dashboards/logistics.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Logistics	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/dashboards/logistics.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-md-4">
		
<!--begin::Preview-->
<a 
	href="../../dashboards/delivery.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Delivery	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/dashboards/delivery.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-md-4">
		
<!--begin::Preview-->
<a 
	href="../../dashboards/online-courses.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Online-courses	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/dashboards/online-courses.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-md-4">
		
<!--begin::Preview-->
<a 
	href="../../dashboards/school.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		School	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/dashboards/school.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-md-4">
		
<!--begin::Preview-->
<a 
	href="../../dashboards/crypto.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Crypto	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/dashboards/crypto.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-md-4">
		
<!--begin::Preview-->
<a 
	href="../../dashboards/finance-performance.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Finance-performance	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/dashboards/finance-performance.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-md-4">
		
<!--begin::Preview-->
<a 
	href="../../dashboards/website-analytics.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Website-analytics	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/dashboards/website-analytics.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-md-4">
		
<!--begin::Preview-->
<a 
	href="../../dashboards/bidding.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Bidding	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/dashboards/bidding.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-md-4">
		
<!--begin::Preview-->
<a 
	href="../../dashboards/podcast.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Podcast	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/dashboards/podcast.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-md-4">
		
<!--begin::Preview-->
<a 
	href="../../dashboards/projects.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Projects	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/dashboards/projects.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-md-4">
		
<!--begin::Preview-->
<a 
	href="../../dashboards/call-center.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Call-center	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/dashboards/call-center.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-md-4">
		
<!--begin::Preview-->
<a 
	href="../../dashboards/pos.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		POS	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/dashboards/pos.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
						  					
					</div>
					<!--end::Row-->
				</div>
				<!--end::Scroll wrapper-->
			</div>
											<div class="pt-5 tab-pane fade " id="kt_app_engage_prebuilts_tab_apps" role="tabpanel">
				<!--begin::Scroll wrapper-->
				<div 
					class="hover-scroll-y pe-12 me-n12" 
					data-kt-scroll="true" 
					data-kt-scroll-height="auto" 
					data-kt-scroll-wrappers="#kt_app_engage_prebuilts_modal, #kt_app_engage_prebuilts_modal_dialog, #kt_app_engage_prebuilts_body" 
					data-kt-scroll-dependencies="#kt_app_engage_prebuilts_header, #kt_app_engage_prebuilts_view_image_tabs" 
					data-kt-scroll-offset="215px">

					<!--begin::Row-->
					<div class="row gy-10"> 
						  
								
	<!--begin::Col-->
	<div class="col-lg-4">
		
<!--begin::Preview-->
<a 
	href="../projects/list/list.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Projects	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/apps/projects.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
<!--begin::Preview-->
<a 
	href="../ecommerce/catalog/products/products.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Ecommerce	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/apps/ecommerce.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
<!--begin::Preview-->
<a 
	href="../customers/list/list.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Customers	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/apps/customers.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
<!--begin::Preview-->
<a 
	href="../subscriptions/list/list.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Subscriptions	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/apps/subscriptions.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
<!--begin::Preview-->
<a 
	href="../user-management/users/list/list.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		User Management	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/apps/user-management.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
<!--begin::Preview-->
<a 
	href="../invoices/create/main.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Invoices	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/apps/invoices.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
<!--begin::Preview-->
<a 
	href="../support-center/overview/main.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Support Center	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/apps/support-center.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
<!--begin::Preview-->
<a 
	href="../chat/private.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Chat	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/apps/chat.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
<!--begin::Preview-->
<a 
	href="../calendar/calendar.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Calendar	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/apps/calendar.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
<!--begin::Preview-->
<a 
	href="list/folders.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		File Manager	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/apps/file-manager.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
<!--begin::Preview-->
<a 
	href="../inbox/listing/listing.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Inbox	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/apps/inbox.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
<!--begin::Preview-->
<a 
	href="../contacts/getting-started.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Contacts	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/apps/contacts.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
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
					<a 
						class="nav-link text-muted text-active-primary pt-0 pb-4 
						active" 
						data-bs-toggle="tab" 
						href="#kt_app_engage_prebuilts_tab_pages_authentication">
						
						Authentication					</a>
					<!--end::Tab link-->
				</li>
				<!--end::Tab item-->
							<!--begin::Tab item-->
				<li class="nav-item p-0 m-0">
					<!--begin::Tab link-->
					<a 
						class="nav-link text-muted text-active-primary pt-0 pb-4 
						" 
						data-bs-toggle="tab" 
						href="#kt_app_engage_prebuilts_tab_pages_general">
						
						General					</a>
					<!--end::Tab link-->
				</li>
				<!--end::Tab item-->
							<!--begin::Tab item-->
				<li class="nav-item p-0 m-0">
					<!--begin::Tab link-->
					<a 
						class="nav-link text-muted text-active-primary pt-0 pb-4 
						" 
						data-bs-toggle="tab" 
						href="#kt_app_engage_prebuilts_tab_pages_account">
						
						Account					</a>
					<!--end::Tab link-->
				</li>
				<!--end::Tab item-->
							<!--begin::Tab item-->
				<li class="nav-item p-0 m-0">
					<!--begin::Tab link-->
					<a 
						class="nav-link text-muted text-active-primary pt-0 pb-4 
						" 
						data-bs-toggle="tab" 
						href="#kt_app_engage_prebuilts_tab_pages_modals">
						
						Modals					</a>
					<!--end::Tab link-->
				</li>
				<!--end::Tab item-->
							<!--begin::Tab item-->
				<li class="nav-item p-0 m-0">
					<!--begin::Tab link-->
					<a 
						class="nav-link text-muted text-active-primary pt-0 pb-4 
						" 
						data-bs-toggle="tab" 
						href="#kt_app_engage_prebuilts_tab_pages_wizards">
						
						Wizards					</a>
					<!--end::Tab link-->
				</li>
				<!--end::Tab item-->
							<!--begin::Tab item-->
				<li class="nav-item p-0 m-0">
					<!--begin::Tab link-->
					<a 
						class="nav-link text-muted text-active-primary pt-0 pb-4 
						" 
						data-bs-toggle="tab" 
						href="#kt_app_engage_prebuilts_tab_pages_search">
						
						Search					</a>
					<!--end::Tab link-->
				</li>
				<!--end::Tab item-->
							<!--begin::Tab item-->
				<li class="nav-item p-0 m-0">
					<!--begin::Tab link-->
					<a 
						class="nav-link text-muted text-active-primary pt-0 pb-4 
						" 
						data-bs-toggle="tab" 
						href="#kt_app_engage_prebuilts_tab_pages_widgets">
						
						Widgets					</a>
					<!--end::Tab link-->
				</li>
				<!--end::Tab item-->
							<!--begin::Tab item-->
				<li class="nav-item p-0 m-0">
					<!--begin::Tab link-->
					<a 
						class="nav-link text-muted text-active-primary pt-0 pb-4 
						" 
						data-bs-toggle="tab" 
						href="#kt_app_engage_prebuilts_tab_pages_email-templates">
						
						Email Templates					</a>
					<!--end::Tab link-->
				</li>
				<!--end::Tab item-->
					</ul>
		<!--end::Tabs-->
	</div>
</div>
<!--end::Tabs wrapper-->

<!--begin::Scroll wrapper-->
<div 
	class="hover-scroll-y pe-12 me-n12" 
	data-kt-scroll="true" 
	data-kt-scroll-height="auto" 
	data-kt-scroll-wrappers="#kt_app_engage_prebuilts_modal, #kt_app_engage_prebuilts_modal_dialog, #kt_app_engage_prebuilts_body, #kt_app_engage_prebuilts_view_image" 
	data-kt-scroll-dependencies="#kt_app_engage_prebuilts_header, #kt_app_engage_prebuilts_view_text_heading" 
	data-kt-scroll-offset="250px">

	<!--begin::Tab content-->
	<div class="tab-content">
					<div class="tab-pane fade show active" id="kt_app_engage_prebuilts_tab_pages_authentication" role="tabpanel">

				
					<!--begin::Row-->
<div class="row g-10"> 
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="../../authentication/layouts/corporate/sign-in.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Corporate	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/auth-corporate.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="../../authentication/layouts/creative/sign-in.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Creative	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/auth-creative.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="../../authentication/layouts/fancy/sign-in.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Fancy	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/auth-fancy.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="../../authentication/layouts/overlay/sign-in.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Overlay	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/auth-overlay.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="../../authentication/extended/multi-steps-sign-up.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Multi-Step	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/auth-multistep.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="../../authentication/layouts/corporate/two-factor.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Two-Factor	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/auth-2factor.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="../../authentication/general/password-confirmation.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Password Changed	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/auth-passwordchanged.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="../../authentication/general/verify-email.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Verify Email	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/auth-verifyemail.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="../../authentication/general/welcome.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Welcome	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/auth-welcome.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="../../authentication/general/coming-soon.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Coming Soon	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/auth-comingsoon.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="../../authentication/general/account-deactivated.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Account Deactivated	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/auth-accountdeactivated.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="../../authentication/general/error-404.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		404 Page	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/auth-404.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="../../authentication/general/error-500.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		505 Page	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/auth-500.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
	</div>
<!--end::Row-->					
				
			</div>
					<div class="tab-pane fade " id="kt_app_engage_prebuilts_tab_pages_general" role="tabpanel">

				
											<div class="mb-5">
							<!--begin::Collapse toggle-->
<a 
	class="btn btn-flex btn-color-dark flex-stack p-0 mb-5 toggle collapsible active" 
	data-bs-toggle="collapse" 
	href="#kt_app_engage_prebuilts_tab_pages_general_user-profile">
	
	<span class="fw-bolder fs-2">
		User Profile	</span>

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
<a 
	href="../../pages/user-profile/overview.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Profile Overview	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/profile-overview.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->			</div>
			<!--end::Col-->
					
			<!--begin::Col-->
			<div class="col-lg-4">
				
<!--begin::Preview-->
<a 
	href="../../pages/user-profile/projects.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		User Projects	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/profile-overview.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->			</div>
			<!--end::Col-->
					
			<!--begin::Col-->
			<div class="col-lg-4">
				
<!--begin::Preview-->
<a 
	href="../../pages/user-profile/campaigns.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		User Campaigns	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/profile-campaigns.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->			</div>
			<!--end::Col-->
					
			<!--begin::Col-->
			<div class="col-lg-4">
				
<!--begin::Preview-->
<a 
	href="../../pages/user-profile/documents.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		User Documents	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/profile-documents.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->			</div>
			<!--end::Col-->
					
			<!--begin::Col-->
			<div class="col-lg-4">
				
<!--begin::Preview-->
<a 
	href="../../pages/user-profile/followers.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		User Followers	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/profile-followers.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->			</div>
			<!--end::Col-->
					
			<!--begin::Col-->
			<div class="col-lg-4">
				
<!--begin::Preview-->
<a 
	href="../../pages/user-profile/activity.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		User Activity	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/profile-activity.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->			</div>
			<!--end::Col-->
			</div>
	<!--end::Row-->
</div>
<!--end::Collapse content-->						</div>
											<div class="mb-5">
							<!--begin::Collapse toggle-->
<a 
	class="btn btn-flex btn-color-dark flex-stack p-0 mb-5 toggle collapsible collapsed" 
	data-bs-toggle="collapse" 
	href="#kt_app_engage_prebuilts_tab_pages_general_corporate">
	
	<span class="fw-bolder fs-2">
		Corporate	</span>

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
<a 
	href="../../pages/about.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		About Us	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/corporate-aboutus.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->			</div>
			<!--end::Col-->
					
			<!--begin::Col-->
			<div class="col-lg-4">
				
<!--begin::Preview-->
<a 
	href="../../pages/contact.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Contact Us	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/corporate-contactus.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->			</div>
			<!--end::Col-->
					
			<!--begin::Col-->
			<div class="col-lg-4">
				
<!--begin::Preview-->
<a 
	href="../../pages/licenses.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		License	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/corporate-license.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->			</div>
			<!--end::Col-->
					
			<!--begin::Col-->
			<div class="col-lg-4">
				
<!--begin::Preview-->
<a 
	href="../../pages/team.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Our Team	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/corporate-ourteam.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->			</div>
			<!--end::Col-->
					
			<!--begin::Col-->
			<div class="col-lg-4">
				
<!--begin::Preview-->
<a 
	href="../../pages/sitemap.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Sitemap	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/corporate-sitemap.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->			</div>
			<!--end::Col-->
			</div>
	<!--end::Row-->
</div>
<!--end::Collapse content-->						</div>
											<div class="mb-5">
							<!--begin::Collapse toggle-->
<a 
	class="btn btn-flex btn-color-dark flex-stack p-0 mb-5 toggle collapsible collapsed" 
	data-bs-toggle="collapse" 
	href="#kt_app_engage_prebuilts_tab_pages_general_social">
	
	<span class="fw-bolder fs-2">
		Social	</span>

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
<a 
	href="../../pages/social/feeds.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Activity	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/social-activity.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->			</div>
			<!--end::Col-->
					
			<!--begin::Col-->
			<div class="col-lg-4">
				
<!--begin::Preview-->
<a 
	href="../../pages/social/activity.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Feeds	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/social-feeds.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->			</div>
			<!--end::Col-->
					
			<!--begin::Col-->
			<div class="col-lg-4">
				
<!--begin::Preview-->
<a 
	href="../../pages/social/followers.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Followers	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/social-followers.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->			</div>
			<!--end::Col-->
					
			<!--begin::Col-->
			<div class="col-lg-4">
				
<!--begin::Preview-->
<a 
	href="../../pages/social/settings.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Settings	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/social-settings.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->			</div>
			<!--end::Col-->
			</div>
	<!--end::Row-->
</div>
<!--end::Collapse content-->						</div>
											<div class="mb-5">
							<!--begin::Collapse toggle-->
<a 
	class="btn btn-flex btn-color-dark flex-stack p-0 mb-5 toggle collapsible collapsed" 
	data-bs-toggle="collapse" 
	href="#kt_app_engage_prebuilts_tab_pages_general_others">
	
	<span class="fw-bolder fs-2">
		Others	</span>

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
<a 
	href="../../pages/faq/classic.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		FAQ Classic	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/faq-classic.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->			</div>
			<!--end::Col-->
					
			<!--begin::Col-->
			<div class="col-lg-4">
				
<!--begin::Preview-->
<a 
	href="../../pages/faq/extended.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		FAQ Extended	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/faq-extended.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->			</div>
			<!--end::Col-->
					
			<!--begin::Col-->
			<div class="col-lg-4">
				
<!--begin::Preview-->
<a 
	href="../../pages/blog/home.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Blog Home	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/blog-home.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->			</div>
			<!--end::Col-->
					
			<!--begin::Col-->
			<div class="col-lg-4">
				
<!--begin::Preview-->
<a 
	href="../../pages/blog/post.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Blog Post	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/blog-post.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->			</div>
			<!--end::Col-->
			</div>
	<!--end::Row-->
</div>
<!--end::Collapse content-->						</div>
					
				
			</div>
					<div class="tab-pane fade " id="kt_app_engage_prebuilts_tab_pages_account" role="tabpanel">

				
					<!--begin::Row-->
<div class="row g-10"> 
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="../../account/overview.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Overview	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/account-overview.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="../../account/settings.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Settings	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/account-settings.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="../../account/billing.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Billing	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/account-billing.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="../../account/security.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Security	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/account-security.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="../../account/referrals.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Referrals	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/account-referrals.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="../../account/logs.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Logs	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/account-logs.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="../../account/api-keys.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		API Keys	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/account-apikeys.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="../../account/statements.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Statements	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/account-statements.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="../../account/billing.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Billing	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/account-billing.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
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
<a 
	href="../../utilities/modals/general/view-users.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		View Friends	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/modal-viewfriends.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="../../utilities/modals/general/upgrade-plan.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Upgrade Plan	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/modal-upgradeplan.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="../../utilities/modals/wizards/top-up-wallet.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Topup Wallet	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/modal-topupwallet.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="../../utilities/modals/general/share-earn.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Share & Earn	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/modal-shareandearn.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="../../utilities/modals/general/select-users.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Select User	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/modal-selectuser.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="../../utilities/modals/forms/bidding.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Place Bid	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/modal-placeyourbid.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="../../utilities/modals/wizards/offer-a-deal.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Offer Deal	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/modal-offeradeal.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="../../utilities/modals/forms/new-target.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		New Target	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/modal-newtarget.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="../../utilities/modals/forms/new-card.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		New Card	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/modal-newcard.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="../../utilities/modals/forms/new-address.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		New Address	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/modal-newaddress.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="../../utilities/modals/general/invite-friends.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Invite Friend	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/modal-invitefriend.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="../../utilities/modals/wizards/create-project.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Create Project	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/modal-createproject.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="../../utilities/modals/wizards/create-campaign.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Create Campaign	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/modal-createcampaign.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="../../utilities/modals/wizards/create-account.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Create Business Account	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/modal-createbusinessacc.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="../../utilities/modals/wizards/create-app.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Create App	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/modal-createapp.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="../../utilities/modals/forms/create-api-key.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Create Api Key	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/modal-createapikey.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="../../utilities/modals/wizards/two-factor-authentication.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		2 Factor Auth	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/modal-2factorauth.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
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
<a 
	href="../../utilities/wizards/horizontal.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		2 Factor Auth	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/wizard-2factorauth.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="../../utilities/wizards/horizontal.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Horizontal	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/wizard-horizontal.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="../../utilities/wizards/vertical.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Vertical	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/wizard-vertical.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
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
<a 
	href="../../utilities/search/users.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Search Users	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/search-users.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="../../utilities/search/horizontal.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Search Horizontal	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/search-horizontal.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="../../utilities/search/vertical.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Search Vertical	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/search-vertical.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="../../utilities/search/select-location.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Search Location	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/search-location.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
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
<a 
	href="../../widgets/charts.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Charts	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/widgets-charts.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="../../widgets/feeds.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Feeds	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/widgets-feeds.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="../../widgets/lists.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Lists	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/widgets-lists.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="../../widgets/mixed.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Mixed	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/widgets-mixed.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="../../widgets/statistics.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Statistics	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/widgets-stats.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="../../widgets/tables.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Tables	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/widgets-tables.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
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
<a 
	href="../../authentication/email/welcome-message.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Welcome	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/email-welcome.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="../../authentication/email/subscription-confirmed.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Subscription Confirmed	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/email-subscriptionconfirmed.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="../../authentication/email/reset-password.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Reset Password	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/email-resetpassword.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="../../authentication/email/card-declined.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Card Declined	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/email-creditcarddeclined.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="../../authentication/email/promo-1.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Promotion 1	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/email-promo1.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="../../authentication/email/promo-2.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Promotion 2	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/email-promo2.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="../../authentication/email/promo-3.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Promotion 3	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="../../assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/email-promo3.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
	</div>
<!--end::Row-->					
				
			</div>
			</div>
	<!--end::Tab content-->	
</div>
<!--end::Scroll wrapper-->		</div>
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
	<div 
		id="kt_app_engage_prebuilts_view_text_heading" 
		class="hover-scroll-y pe-12 me-n12" 
		data-kt-scroll="true" 
		data-kt-scroll-height="auto" 
		data-kt-scroll-wrappers="#kt_app_engage_prebuilts_modal, #kt_app_engage_prebuilts_modal_dialog, #kt_app_engage_prebuilts_body, #kt_app_engage_prebuilts_view_text" 
		data-kt-scroll-dependencies="#kt_app_engage_prebuilts_header, #kt_app_engage_prebuilts_view_text_heading" 
		data-kt-scroll-offset="190px" 
	>
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
		
			
			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo1/index.php">
				Metronic Original			</a>

					
		
			
			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo2/index.php">
				SaaS App			</a>

					
		
			
			<a class="fw-6 fw-semibold" href="../../index.php">
				Sales Tracking App			</a>

					
		
			
			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo39/index.php">
				Billing SaaS			</a>

					
		
			
			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo31/index.php">
				Marketing Automation			</a>

					
		
			
			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo27/index.php">
				Databox Dashboard			</a>

					
		
			
			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo6/index.php">
				Time Reporting			</a>

					
		
			
			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo3/index.php">
				New Trend			</a>

					
		
			
			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo23/index.php">
				Member Dashboard			</a>

					
		
			
			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo38/index.php">
				Email Marketing			</a>

					
		
			
			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo36/index.php">
				Digital Marketing			</a>

					
		
			
			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo10/index.php">
				Project Grid			</a>

					
		
			
			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo35/index.php">
				Traffic Analytics			</a>

										</div>
				<!--end::List-->
			</div>
			<!--end::Col-->
					
					<!--begin::Col-->
			<div class="col-lg-3">
				<!--begin::List-->
				<div class="d-flex flex-column gap-3 gap-lg-5">
		
			
			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo8/index.php">
				Analytics App			</a>

					
		
			
			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo25/index.php">
				User Guiding App			</a>

					
		
			
			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo20/index.php">
				CRM Software			</a>

					
		
			
			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo7/index.php">
				CRM Dashboard			</a>

					
		
			
			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo50/index.php">
				Micro-SaaS App			</a>

					
		
			
			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo32/index.php">
				Delivery Management			</a>

					
		
			
			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo42/index.php">
				Calendar Workspace			</a>

					
		
			
			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo44/index.php">
				Recruit Automation			</a>

					
		
			
			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo33/index.php">
				Social Campaings			</a>

					
		
			
			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo37/index.php">
				Cloud Suite			</a>

					
		
			
			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo11/index.php">
				Finance Planner			</a>

					
		
			
			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo16/index.php">
				Podcast App			</a>

					
		
			
			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo26/index.php">
				Planable App			</a>

										</div>
				<!--end::List-->
			</div>
			<!--end::Col-->
					
					<!--begin::Col-->
			<div class="col-lg-3">
				<!--begin::List-->
				<div class="d-flex flex-column gap-3 gap-lg-5">
		
			
			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo22/index.php">
				Media Publisher			</a>

					
		
			
			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo19/index.php">
				Reports Panel			</a>

					
		
			
			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo40/index.php">
				HR App			</a>

					
		
			
			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo29/index.php">
				Project Workspace			</a>

					
		
			
			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo24/index.php">
				Helpdesk App			</a>

					
		
			
			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo4/index.php">
				Jobs Site			</a>

					
		
			
			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo41/index.php">
				Business Intelligence			</a>

					
		
			
			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo18/index.php">
				Goal Tracking			</a>

					
		
			
			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo21/index.php">
				Monochrome App			</a>

					
		
			
			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo34/index.php">
				Finance Analytics			</a>

					
		
			
			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo15/index.php">
				Crypto Planner			</a>

					
		
			
			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo14/index.php">
				Project Workplace			</a>

					
		
			
			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo9/index.php">
				Sales Manager			</a>

										</div>
				<!--end::List-->
			</div>
			<!--end::Col-->
					
					<!--begin::Col-->
			<div class="col-lg-3">
				<!--begin::List-->
				<div class="d-flex flex-column gap-3 gap-lg-5">
		
			
			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo5/index.php">
				Support Forum			</a>

					
		
			
			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo13/index.php">
				Classic Dashboard			</a>

					
		
			
			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo12/index.php">
				Data Analyzer			</a>

					
		
			
			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo48/index.php">
				Cloud ERP			</a>

					
		
			
			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo28/index.php">
				eCommerce App			</a>

					
		
			
			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo17/index.php">
				Events Scheduler			</a>

					
		
			
			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo49/index.php">
				KPI Tracking			</a>

					
		
			
			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo43/index.php">
				Healthcare Dashboard			</a>

					
		
			
			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo45/index.php">
				OKR Tracking			</a>

					
		
			
			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo47/index.php">
				Campaign Automation			</a>

					
		
			
			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo46/index.php">
				Audit Board App			</a>

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
		
			<a class="fw-6 fw-semibold" href="../../index.php">
				Chartmix - Finance Team			</a>

		
			
		
			<a class="fw-6 fw-semibold" href="../../dashboards/marketing.php">
				Marketing Dashboard			</a>

		
			
		
			<a class="fw-6 fw-semibold" href="../../dashboards/social.php">
				Social Dashboard			</a>

		
			
		
			<a class="fw-6 fw-semibold" href="../../dashboards/ecommerce.php">
				eCommerce Dashboard			</a>

		
			
		
			<a class="fw-6 fw-semibold" href="../../dashboards/store-analytics.php">
				Store Analytics			</a>

										</div>
				<!--end::List-->
			</div>
			<!--end::Col-->
		
			
					<!--begin::Col-->
			<div class="col-lg-3">
				<!--begin::List-->
				<div class="d-flex flex-column gap-3 gap-lg-5">
		
			<a class="fw-6 fw-semibold" href="../../dashboards/logistics.php">
				Logistics			</a>

		
			
		
			<a class="fw-6 fw-semibold" href="../../dashboards/delivery.php">
				Delivery			</a>

		
			
		
			<a class="fw-6 fw-semibold" href="../../dashboards/online-courses.php">
				Online Courses			</a>

		
			
		
			<a class="fw-6 fw-semibold" href="../../dashboards/school.php">
				Hello Tyler			</a>

		
			
		
			<a class="fw-6 fw-semibold" href="../../dashboards/crypto.php">
				My Balance: 37,045$			</a>

										</div>
				<!--end::List-->
			</div>
			<!--end::Col-->
		
			
					<!--begin::Col-->
			<div class="col-lg-3">
				<!--begin::List-->
				<div class="d-flex flex-column gap-3 gap-lg-5">
		
			<a class="fw-6 fw-semibold" href="../../dashboards/finance-performance.php">
				Finance Performance			</a>

		
			
		
			<a class="fw-6 fw-semibold" href="../../dashboards/website-analytics.php">
				Website Analytics			</a>

		
			
		
			<a class="fw-6 fw-semibold" href="../../dashboards/bidding.php">
				Bidding Dashboard			</a>

		
			
		
			<a class="fw-6 fw-semibold" href="../../dashboards/podcast.php">
				Podcast Dashboard			</a>

		
			
		
			<a class="fw-6 fw-semibold" href="../../dashboards/projects.php">
				Projects Dashboard			</a>

										</div>
				<!--end::List-->
			</div>
			<!--end::Col-->
		
			
					<!--begin::Col-->
			<div class="col-lg-3">
				<!--begin::List-->
				<div class="d-flex flex-column gap-3 gap-lg-5">
		
			<a class="fw-6 fw-semibold" href="../../dashboards/call-center.php">
				Call Center			</a>

		
			
		
			<a class="fw-6 fw-semibold" href="../../dashboards/pos.php">
				POS System			</a>

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
			Pages - Authentication		</h3>
		<!--end::Title-->

		<!--begin::Row-->
		<div class="row">
										
									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">
				
					<a class="fw-6 fw-semibold" href="../../authentication/layouts/corporate/sign-in.php">
						Corporate					</a>

											
				
					<a class="fw-6 fw-semibold" href="../../authentication/layouts/creative/sign-in.php">
						Creative					</a>

											
				
					<a class="fw-6 fw-semibold" href="../../authentication/layouts/fancy/sign-in.php">
						Fancy					</a>

											
				
					<a class="fw-6 fw-semibold" href="../../authentication/layouts/overlay/sign-in.php">
						Overlay					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->
											
									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">
				
					<a class="fw-6 fw-semibold" href="../../authentication/extended/multi-steps-sign-up.php">
						Multi-Step					</a>

											
				
					<a class="fw-6 fw-semibold" href="../../authentication/layouts/corporate/two-factor.php">
						Two-Factor					</a>

											
				
					<a class="fw-6 fw-semibold" href="../../authentication/general/password-confirmation.php">
						Password Changed					</a>

											
				
					<a class="fw-6 fw-semibold" href="../../authentication/general/verify-email.php">
						Verify Email					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->
											
									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">
				
					<a class="fw-6 fw-semibold" href="../../authentication/general/welcome.php">
						Welcome					</a>

											
				
					<a class="fw-6 fw-semibold" href="../../authentication/general/coming-soon.php">
						Coming Soon					</a>

											
				
					<a class="fw-6 fw-semibold" href="../../authentication/general/account-deactivated.php">
						Account Deactivated					</a>

											
				
					<a class="fw-6 fw-semibold" href="../../authentication/general/error-404.php">
						404 Page					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->
											
									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">
				
					<a class="fw-6 fw-semibold" href="../../authentication/general/error-500.php">
						505 Page					</a>

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
			Pages - Account		</h3>
		<!--end::Title-->

		<!--begin::Row-->
		<div class="row">
										
									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">
				
					<a class="fw-6 fw-semibold" href="../../account/overview.php">
						Overview					</a>

											
				
					<a class="fw-6 fw-semibold" href="../../account/settings.php">
						Settings					</a>

											
				
					<a class="fw-6 fw-semibold" href="../../account/billing.php">
						Billing					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->
											
									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">
				
					<a class="fw-6 fw-semibold" href="../../account/security.php">
						Security					</a>

											
				
					<a class="fw-6 fw-semibold" href="../../account/referrals.php">
						Referrals					</a>

											
				
					<a class="fw-6 fw-semibold" href="../../account/logs.php">
						Logs					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->
											
									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">
				
					<a class="fw-6 fw-semibold" href="../../account/api-keys.php">
						API Keys					</a>

											
				
					<a class="fw-6 fw-semibold" href="../../account/statements.php">
						Statements					</a>

											
				
					<a class="fw-6 fw-semibold" href="../../account/billing.php">
						Billing					</a>

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
			Pages - Modals		</h3>
		<!--end::Title-->

		<!--begin::Row-->
		<div class="row">
										
									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">
				
					<a class="fw-6 fw-semibold" href="../../utilities/modals/general/view-users.php">
						View Friends					</a>

											
				
					<a class="fw-6 fw-semibold" href="../../utilities/modals/general/upgrade-plan.php">
						Upgrade Plan					</a>

											
				
					<a class="fw-6 fw-semibold" href="../../utilities/modals/wizards/top-up-wallet.php">
						Topup Wallet					</a>

											
				
					<a class="fw-6 fw-semibold" href="../../utilities/modals/general/share-earn.php">
						Share & Earn					</a>

											
				
					<a class="fw-6 fw-semibold" href="../../utilities/modals/general/select-users.php">
						Select User					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->
											
									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">
				
					<a class="fw-6 fw-semibold" href="../../utilities/modals/forms/bidding.php">
						Place Bid					</a>

											
				
					<a class="fw-6 fw-semibold" href="../../utilities/modals/wizards/offer-a-deal.php">
						Offer Deal					</a>

											
				
					<a class="fw-6 fw-semibold" href="../../utilities/modals/forms/new-target.php">
						New Target					</a>

											
				
					<a class="fw-6 fw-semibold" href="../../utilities/modals/forms/new-card.php">
						New Card					</a>

											
				
					<a class="fw-6 fw-semibold" href="../../utilities/modals/forms/new-address.php">
						New Address					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->
											
									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">
				
					<a class="fw-6 fw-semibold" href="../../utilities/modals/general/invite-friends.php">
						Invite Friend					</a>

											
				
					<a class="fw-6 fw-semibold" href="../../utilities/modals/wizards/create-project.php">
						Create Project					</a>

											
				
					<a class="fw-6 fw-semibold" href="../../utilities/modals/wizards/create-campaign.php">
						Create Campaign					</a>

											
				
					<a class="fw-6 fw-semibold" href="../../utilities/modals/wizards/create-account.php">
						Create Business Account					</a>

											
				
					<a class="fw-6 fw-semibold" href="../../utilities/modals/wizards/create-app.php">
						Create App					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->
											
									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">
				
					<a class="fw-6 fw-semibold" href="../../utilities/modals/forms/create-api-key.php">
						Create Api Key					</a>

											
				
					<a class="fw-6 fw-semibold" href="../../utilities/modals/wizards/two-factor-authentication.php">
						2 Factor Auth					</a>

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
			Pages - Wizards		</h3>
		<!--end::Title-->

		<!--begin::Row-->
		<div class="row">
										
									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">
				
					<a class="fw-6 fw-semibold" href="../../utilities/wizards/horizontal.php">
						2 Factor Auth					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->
											
									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">
				
					<a class="fw-6 fw-semibold" href="../../utilities/wizards/horizontal.php">
						Horizontal					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->
											
									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">
				
					<a class="fw-6 fw-semibold" href="../../utilities/wizards/vertical.php">
						Vertical					</a>

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
			Pages - Search		</h3>
		<!--end::Title-->

		<!--begin::Row-->
		<div class="row">
										
									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">
				
					<a class="fw-6 fw-semibold" href="../../utilities/search/users.php">
						Search Users					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->
											
									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">
				
					<a class="fw-6 fw-semibold" href="../../utilities/search/horizontal.php">
						Search Horizontal					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->
											
									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">
				
					<a class="fw-6 fw-semibold" href="../../utilities/search/vertical.php">
						Search Vertical					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->
											
									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">
				
					<a class="fw-6 fw-semibold" href="../../utilities/search/select-location.php">
						Search Location					</a>

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
			Pages - Widgets		</h3>
		<!--end::Title-->

		<!--begin::Row-->
		<div class="row">
										
									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">
				
					<a class="fw-6 fw-semibold" href="../../widgets/charts.php">
						Charts					</a>

											
				
					<a class="fw-6 fw-semibold" href="../../widgets/feeds.php">
						Feeds					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->
											
									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">
				
					<a class="fw-6 fw-semibold" href="../../widgets/lists.php">
						Lists					</a>

											
				
					<a class="fw-6 fw-semibold" href="../../widgets/mixed.php">
						Mixed					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->
											
									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">
				
					<a class="fw-6 fw-semibold" href="../../widgets/statistics.php">
						Statistics					</a>

											
				
					<a class="fw-6 fw-semibold" href="../../widgets/tables.php">
						Tables					</a>

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
			Pages - Email Templates		</h3>
		<!--end::Title-->

		<!--begin::Row-->
		<div class="row">
										
									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">
				
					<a class="fw-6 fw-semibold" href="../../authentication/email/welcome-message.php">
						Welcome					</a>

											
				
					<a class="fw-6 fw-semibold" href="../../authentication/email/subscription-confirmed.php">
						Subscription Confirmed					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->
											
									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">
				
					<a class="fw-6 fw-semibold" href="../../authentication/email/reset-password.php">
						Reset Password					</a>

											
				
					<a class="fw-6 fw-semibold" href="../../authentication/email/card-declined.php">
						Card Declined					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->
											
									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">
				
					<a class="fw-6 fw-semibold" href="../../authentication/email/promo-1.php">
						Promotion 1					</a>

											
				
					<a class="fw-6 fw-semibold" href="../../authentication/email/promo-2.php">
						Promotion 2					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->
											
									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">
				
					<a class="fw-6 fw-semibold" href="../../authentication/email/promo-3.php">
						Promotion 3					</a>

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
			Pages - General - User Profile		</h3>
		<!--end::Title-->

		<!--begin::Row-->
		<div class="row">
										
									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">
				
					<a class="fw-6 fw-semibold" href="../../pages/user-profile/overview.php">
						Profile Overview					</a>

											
				
					<a class="fw-6 fw-semibold" href="../../pages/user-profile/projects.php">
						User Projects					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->
											
									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">
				
					<a class="fw-6 fw-semibold" href="../../pages/user-profile/campaigns.php">
						User Campaigns					</a>

											
				
					<a class="fw-6 fw-semibold" href="../../pages/user-profile/documents.php">
						User Documents					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->
											
									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">
				
					<a class="fw-6 fw-semibold" href="../../pages/user-profile/followers.php">
						User Followers					</a>

											
				
					<a class="fw-6 fw-semibold" href="../../pages/user-profile/activity.php">
						User Activity					</a>

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
			Pages - General - Corporate		</h3>
		<!--end::Title-->

		<!--begin::Row-->
		<div class="row">
										
									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">
				
					<a class="fw-6 fw-semibold" href="../../pages/about.php">
						About Us					</a>

											
				
					<a class="fw-6 fw-semibold" href="../../pages/contact.php">
						Contact Us					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->
											
									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">
				
					<a class="fw-6 fw-semibold" href="../../pages/licenses.php">
						License					</a>

											
				
					<a class="fw-6 fw-semibold" href="../../pages/team.php">
						Our Team					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->
											
									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">
				
					<a class="fw-6 fw-semibold" href="../../pages/sitemap.php">
						Sitemap					</a>

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
			Pages - General - Social		</h3>
		<!--end::Title-->

		<!--begin::Row-->
		<div class="row">
										
									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">
				
					<a class="fw-6 fw-semibold" href="../../pages/social/feeds.php">
						Activity					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->
											
									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">
				
					<a class="fw-6 fw-semibold" href="../../pages/social/activity.php">
						Feeds					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->
											
									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">
				
					<a class="fw-6 fw-semibold" href="../../pages/social/followers.php">
						Followers					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->
											
									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">
				
					<a class="fw-6 fw-semibold" href="../../pages/social/settings.php">
						Settings					</a>

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
			Pages - General - Others		</h3>
		<!--end::Title-->

		<!--begin::Row-->
		<div class="row">
										
									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">
				
					<a class="fw-6 fw-semibold" href="../../pages/faq/classic.php">
						FAQ Classic					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->
											
									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">
				
					<a class="fw-6 fw-semibold" href="../../pages/faq/extended.php">
						FAQ Extended					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->
											
									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">
				
					<a class="fw-6 fw-semibold" href="../../pages/blog/home.php">
						Blog Home					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->
											
									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">
				
					<a class="fw-6 fw-semibold" href="../../pages/blog/post.php">
						Blog Post					</a>

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
		
			<a class="fw-6 fw-semibold" href="../projects/list/list.php">
				Projects			</a>

					
		
			<a class="fw-6 fw-semibold" href="../ecommerce/catalog/products/products.php">
				Ecommerce			</a>

					
		
			<a class="fw-6 fw-semibold" href="../customers/list/list.php">
				Customers			</a>

										</div>
				<!--end::List-->
			</div>
			<!--end::Col-->
					
					<!--begin::Col-->
			<div class="col-lg-3">
				<!--begin::List-->
				<div class="d-flex flex-column gap-3 gap-lg-5">
		
			<a class="fw-6 fw-semibold" href="../subscriptions/list/list.php">
				Subscriptions			</a>

					
		
			<a class="fw-6 fw-semibold" href="../user-management/users/list/list.php">
				User Management			</a>

					
		
			<a class="fw-6 fw-semibold" href="../invoices/create/main.php">
				Invoices			</a>

										</div>
				<!--end::List-->
			</div>
			<!--end::Col-->
					
					<!--begin::Col-->
			<div class="col-lg-3">
				<!--begin::List-->
				<div class="d-flex flex-column gap-3 gap-lg-5">
		
			<a class="fw-6 fw-semibold" href="../support-center/overview/main.php">
				Support Center			</a>

					
		
			<a class="fw-6 fw-semibold" href="../chat/private.php">
				Chat			</a>

					
		
			<a class="fw-6 fw-semibold" href="../calendar/calendar.php">
				Calendar			</a>

										</div>
				<!--end::List-->
			</div>
			<!--end::Col-->
					
					<!--begin::Col-->
			<div class="col-lg-3">
				<!--begin::List-->
				<div class="d-flex flex-column gap-3 gap-lg-5">
		
			<a class="fw-6 fw-semibold" href="list/folders.php">
				File Manager			</a>

					
		
			<a class="fw-6 fw-semibold" href="../inbox/listing/listing.php">
				Inbox			</a>

					
		
			<a class="fw-6 fw-semibold" href="../contacts/getting-started.php">
				Contacts			</a>

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
<!--end::Text view--->                </div>
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!--end::Modal - Sitemap-->				<!--end::Engage modals-->
<!--begin::Scrolltop-->
<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
	<i class="ki-outline ki-arrow-up"></i></div>
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
                    <i class="ki-outline ki-cross fs-1"></i>                </div>
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
                                                <input class="form-check-input" type="radio" name="plan" checked="checked" value="startup"/>
                                            </div>
                                            <!--end::Radio-->

                                            <!--begin::Info-->
                                            <div class="flex-grow-1">
                                                <div class="d-flex align-items-center fs-2 fw-bold flex-wrap">
                                                    Startup
                                                                                                        </div>
                                                <div class="fw-semibold opacity-75">
                                                    Best for startups                                                </div>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Description-->

                                        <!--begin::Price-->
                                        <div class="ms-5">
                                                                                            <span class="mb-2">$</span>

                                                <span class="fs-3x fw-bold" data-kt-plan-price-month="39" data-kt-plan-price-annual="399">
                                                    39                                                </span>
                                                
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
                                                <input class="form-check-input" type="radio" name="plan"  value="advanced"/>
                                            </div>
                                            <!--end::Radio-->

                                            <!--begin::Info-->
                                            <div class="flex-grow-1">
                                                <div class="d-flex align-items-center fs-2 fw-bold flex-wrap">
                                                    Advanced
                                                                                                        </div>
                                                <div class="fw-semibold opacity-75">
                                                    Best for 100+ team size                                                </div>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Description-->

                                        <!--begin::Price-->
                                        <div class="ms-5">
                                                                                            <span class="mb-2">$</span>

                                                <span class="fs-3x fw-bold" data-kt-plan-price-month="339" data-kt-plan-price-annual="3399">
                                                    339                                                </span>
                                                
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
                                                <input class="form-check-input" type="radio" name="plan"  value="enterprise"/>
                                            </div>
                                            <!--end::Radio-->

                                            <!--begin::Info-->
                                            <div class="flex-grow-1">
                                                <div class="d-flex align-items-center fs-2 fw-bold flex-wrap">
                                                    Enterprise
                                                                                                            <span class="badge badge-light-success ms-2 py-2 px-3 fs-7">Popular</span>
                                                                                                        </div>
                                                <div class="fw-semibold opacity-75">
                                                    Best value for 1000+ team                                                </div>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Description-->

                                        <!--begin::Price-->
                                        <div class="ms-5">
                                                                                            <span class="mb-2">$</span>

                                                <span class="fs-3x fw-bold" data-kt-plan-price-month="999" data-kt-plan-price-annual="9999">
                                                    999                                                </span>
                                                
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
                                                <input class="form-check-input" type="radio" name="plan"  value="custom"/>
                                            </div>
                                            <!--end::Radio-->

                                            <!--begin::Info-->
                                            <div class="flex-grow-1">
                                                <div class="d-flex align-items-center fs-2 fw-bold flex-wrap">
                                                    Custom
                                                                                                        </div>
                                                <div class="fw-semibold opacity-75">
                                                    Requet a custom license                                                </div>
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
                                                            Up to 10 Active Users                                                        </span> 
                                                        <i class="ki-outline ki-check-circle fs-1 text-success"></i>                                                                                                                                                              
                                                </div>
                                                <!--end::Item--> 
                                                                                            <!--begin::Item-->                                               
                                                <div class="d-flex align-items-center mb-7">             
                                                                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                            Up to 30 Project Integrations                                                        </span> 
                                                        <i class="ki-outline ki-check-circle fs-1 text-success"></i>                                                                                                                                                              
                                                </div>
                                                <!--end::Item--> 
                                                                                            <!--begin::Item-->                                               
                                                <div class="d-flex align-items-center mb-7">             
                                                                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                            Analytics Module                                                        </span> 
                                                        <i class="ki-outline ki-check-circle fs-1 text-success"></i>                                                                                                                                                              
                                                </div>
                                                <!--end::Item--> 
                                                                                            <!--begin::Item-->                                               
                                                <div class="d-flex align-items-center mb-7">             
                                                                                                            <span class="fw-semibold fs-5 text-muted flex-grow-1">
                                                            Finance Module                                                        </span> 
                                                        <i class="ki-outline ki-cross-circle fs-1"></i>                                                                                                                                                              
                                                </div>
                                                <!--end::Item--> 
                                                                                            <!--begin::Item-->                                               
                                                <div class="d-flex align-items-center mb-7">             
                                                                                                            <span class="fw-semibold fs-5 text-muted flex-grow-1">
                                                            Accounting Module                                                        </span> 
                                                        <i class="ki-outline ki-cross-circle fs-1"></i>                                                                                                                                                              
                                                </div>
                                                <!--end::Item--> 
                                                                                            <!--begin::Item-->                                               
                                                <div class="d-flex align-items-center mb-7">             
                                                                                                            <span class="fw-semibold fs-5 text-muted flex-grow-1">
                                                            Network Platform                                                        </span> 
                                                        <i class="ki-outline ki-cross-circle fs-1"></i>                                                                                                                                                              
                                                </div>
                                                <!--end::Item--> 
                                                                                            <!--begin::Item-->                                               
                                                <div class="d-flex align-items-center ">             
                                                                                                            <span class="fw-semibold fs-5 text-muted flex-grow-1">
                                                            Unlimited Cloud Space                                                        </span> 
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
                                                            Up to 10 Active Users                                                        </span> 
                                                        <i class="ki-outline ki-check-circle fs-1 text-success"></i>                                                                                                                                                              
                                                </div>
                                                <!--end::Item--> 
                                                                                            <!--begin::Item-->                                               
                                                <div class="d-flex align-items-center mb-7">             
                                                                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                            Up to 30 Project Integrations                                                        </span> 
                                                        <i class="ki-outline ki-check-circle fs-1 text-success"></i>                                                                                                                                                              
                                                </div>
                                                <!--end::Item--> 
                                                                                            <!--begin::Item-->                                               
                                                <div class="d-flex align-items-center mb-7">             
                                                                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                            Analytics Module                                                        </span> 
                                                        <i class="ki-outline ki-check-circle fs-1 text-success"></i>                                                                                                                                                              
                                                </div>
                                                <!--end::Item--> 
                                                                                            <!--begin::Item-->                                               
                                                <div class="d-flex align-items-center mb-7">             
                                                                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                            Finance Module                                                        </span> 
                                                        <i class="ki-outline ki-check-circle fs-1 text-success"></i>                                                                                                                                                              
                                                </div>
                                                <!--end::Item--> 
                                                                                            <!--begin::Item-->                                               
                                                <div class="d-flex align-items-center mb-7">             
                                                                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                            Accounting Module                                                        </span> 
                                                        <i class="ki-outline ki-check-circle fs-1 text-success"></i>                                                                                                                                                              
                                                </div>
                                                <!--end::Item--> 
                                                                                            <!--begin::Item-->                                               
                                                <div class="d-flex align-items-center mb-7">             
                                                                                                            <span class="fw-semibold fs-5 text-muted flex-grow-1">
                                                            Network Platform                                                        </span> 
                                                        <i class="ki-outline ki-cross-circle fs-1"></i>                                                                                                                                                              
                                                </div>
                                                <!--end::Item--> 
                                                                                            <!--begin::Item-->                                               
                                                <div class="d-flex align-items-center ">             
                                                                                                            <span class="fw-semibold fs-5 text-muted flex-grow-1">
                                                            Unlimited Cloud Space                                                        </span> 
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
                                                            Up to 10 Active Users                                                        </span> 
                                                        <i class="ki-outline ki-check-circle fs-1 text-success"></i>                                                                                                                                                              
                                                </div>
                                                <!--end::Item--> 
                                                                                            <!--begin::Item-->                                               
                                                <div class="d-flex align-items-center mb-7">             
                                                                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                            Up to 30 Project Integrations                                                        </span> 
                                                        <i class="ki-outline ki-check-circle fs-1 text-success"></i>                                                                                                                                                              
                                                </div>
                                                <!--end::Item--> 
                                                                                            <!--begin::Item-->                                               
                                                <div class="d-flex align-items-center mb-7">             
                                                                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                            Analytics Module                                                        </span> 
                                                        <i class="ki-outline ki-check-circle fs-1 text-success"></i>                                                                                                                                                              
                                                </div>
                                                <!--end::Item--> 
                                                                                            <!--begin::Item-->                                               
                                                <div class="d-flex align-items-center mb-7">             
                                                                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                            Finance Module                                                        </span> 
                                                        <i class="ki-outline ki-check-circle fs-1 text-success"></i>                                                                                                                                                              
                                                </div>
                                                <!--end::Item--> 
                                                                                            <!--begin::Item-->                                               
                                                <div class="d-flex align-items-center mb-7">             
                                                                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                            Accounting Module                                                        </span> 
                                                        <i class="ki-outline ki-check-circle fs-1 text-success"></i>                                                                                                                                                              
                                                </div>
                                                <!--end::Item--> 
                                                                                            <!--begin::Item-->                                               
                                                <div class="d-flex align-items-center mb-7">             
                                                                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                            Network Platform                                                        </span> 
                                                        <i class="ki-outline ki-check-circle fs-1 text-success"></i>                                                                                                                                                              
                                                </div>
                                                <!--end::Item--> 
                                                                                            <!--begin::Item-->                                               
                                                <div class="d-flex align-items-center ">             
                                                                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                            Unlimited Cloud Space                                                        </span> 
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
                                                            Unlimited Users                                                        </span> 
                                                        <i class="ki-outline ki-check-circle fs-1 text-success"></i>                                                                                                                                                              
                                                </div>
                                                <!--end::Item--> 
                                                                                            <!--begin::Item-->                                               
                                                <div class="d-flex align-items-center mb-7">             
                                                                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                            Unlimited Project Integrations                                                        </span> 
                                                        <i class="ki-outline ki-check-circle fs-1 text-success"></i>                                                                                                                                                              
                                                </div>
                                                <!--end::Item--> 
                                                                                            <!--begin::Item-->                                               
                                                <div class="d-flex align-items-center mb-7">             
                                                                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                            Analytics Module                                                        </span> 
                                                        <i class="ki-outline ki-check-circle fs-1 text-success"></i>                                                                                                                                                              
                                                </div>
                                                <!--end::Item--> 
                                                                                            <!--begin::Item-->                                               
                                                <div class="d-flex align-items-center mb-7">             
                                                                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                            Finance Module                                                        </span> 
                                                        <i class="ki-outline ki-check-circle fs-1 text-success"></i>                                                                                                                                                              
                                                </div>
                                                <!--end::Item--> 
                                                                                            <!--begin::Item-->                                               
                                                <div class="d-flex align-items-center mb-7">             
                                                                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                            Accounting Module                                                        </span> 
                                                        <i class="ki-outline ki-check-circle fs-1 text-success"></i>                                                                                                                                                              
                                                </div>
                                                <!--end::Item--> 
                                                                                            <!--begin::Item-->                                               
                                                <div class="d-flex align-items-center mb-7">             
                                                                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                            Network Platform                                                        </span> 
                                                        <i class="ki-outline ki-check-circle fs-1 text-success"></i>                                                                                                                                                              
                                                </div>
                                                <!--end::Item--> 
                                                                                            <!--begin::Item-->                                               
                                                <div class="d-flex align-items-center ">             
                                                                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                            Unlimited Cloud Space                                                        </span> 
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
    Please wait...    <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
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
                    <i class="ki-outline ki-cross fs-1"></i>                </div>
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
                <div 
                    id="kt_modal_users_search_handler" 
                    
                    data-kt-search-keypress="true"
                    data-kt-search-min-length="2"
                    data-kt-search-enter="enter"     
                    data-kt-search-layout="inline">

                    <!--begin::Form-->
                    <form data-kt-search-element="form" class="w-100 position-relative mb-5" autocomplete="off">	
                        <!--begin::Hidden input(Added to disable form autocomplete)-->
                        <input type="hidden"/>
                        <!--end::Hidden input-->

                        <!--begin::Icon-->
                        <i class="ki-outline ki-magnifier fs-2 fs-lg-1 text-gray-500 position-absolute top-50 ms-5 translate-middle-y"></i>                        <!--end::Icon-->

                        <!--begin::Input-->
                        <input type="text" class="form-control form-control-lg form-control-solid px-15" name="search" value="" placeholder="Search by username, full name or email..." data-kt-search-element="input"/>
                        <!--end::Input-->

                        <!--begin::Spinner-->
                        <span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5" data-kt-search-element="spinner">
                            <span class="spinner-border h-15px w-15px align-middle text-muted"></span>
                        </span>
                        <!--end::Spinner-->

                        <!--begin::Reset-->
                        <span class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 me-5 d-none" data-kt-search-element="clear">
                            <i class="ki-outline ki-cross fs-2 fs-lg-1 me-0"></i>                        </span>
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
                                            <img alt="Pic" src="../../assets/media/avatars/300-6.jpg" />
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
                            M                        </span>
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
                                            <img alt="Pic" src="../../assets/media/avatars/300-1.jpg" />
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
                                            <img alt="Pic" src="../../assets/media/avatars/300-5.jpg" />
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
                                            <img alt="Pic" src="../../assets/media/avatars/300-25.jpg" />
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
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='0']" value="0"/>
                    </label>
                    <!--end::Checkbox-->

                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic" src="../../assets/media/avatars/300-6.jpg" />
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
                        <option value="1" >Guest</option>
                        <option value="2" selected>Owner</option>
                        <option value="3" >Can Edit</option>
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
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='1']" value="1"/>
                    </label>
                    <!--end::Checkbox-->

                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                                                    <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                M                            </span>
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
                        <option value="2" >Owner</option>
                        <option value="3" >Can Edit</option>
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
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='2']" value="2"/>
                    </label>
                    <!--end::Checkbox-->

                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic" src="../../assets/media/avatars/300-1.jpg" />
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
                        <option value="1" >Guest</option>
                        <option value="2" >Owner</option>
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
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='3']" value="3"/>
                    </label>
                    <!--end::Checkbox-->

                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic" src="../../assets/media/avatars/300-5.jpg" />
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
                        <option value="1" >Guest</option>
                        <option value="2" selected>Owner</option>
                        <option value="3" >Can Edit</option>
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
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='4']" value="4"/>
                    </label>
                    <!--end::Checkbox-->

                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic" src="../../assets/media/avatars/300-25.jpg" />
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
                        <option value="1" >Guest</option>
                        <option value="2" >Owner</option>
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
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='5']" value="5"/>
                    </label>
                    <!--end::Checkbox-->

                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                                                    <span class="symbol-label bg-light-warning text-warning fw-semibold">
                                C                            </span>
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
                        <option value="1" >Guest</option>
                        <option value="2" selected>Owner</option>
                        <option value="3" >Can Edit</option>
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
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='6']" value="6"/>
                    </label>
                    <!--end::Checkbox-->

                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic" src="../../assets/media/avatars/300-9.jpg" />
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
                        <option value="1" >Guest</option>
                        <option value="2" >Owner</option>
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
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='7']" value="7"/>
                    </label>
                    <!--end::Checkbox-->

                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                                                    <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                O                            </span>
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
                        <option value="1" >Guest</option>
                        <option value="2" selected>Owner</option>
                        <option value="3" >Can Edit</option>
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
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='8']" value="8"/>
                    </label>
                    <!--end::Checkbox-->

                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                                                    <span class="symbol-label bg-light-primary text-primary fw-semibold">
                                N                            </span>
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
                        <option value="2" >Owner</option>
                        <option value="3" >Can Edit</option>
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
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='9']" value="9"/>
                    </label>
                    <!--end::Checkbox-->

                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic" src="../../assets/media/avatars/300-23.jpg" />
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
                        <option value="1" >Guest</option>
                        <option value="2" >Owner</option>
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
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='10']" value="10"/>
                    </label>
                    <!--end::Checkbox-->

                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                                                    <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                E                            </span>
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
                        <option value="1" >Guest</option>
                        <option value="2" selected>Owner</option>
                        <option value="3" >Can Edit</option>
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
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='11']" value="11"/>
                    </label>
                    <!--end::Checkbox-->

                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic" src="../../assets/media/avatars/300-12.jpg" />
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
                        <option value="2" >Owner</option>
                        <option value="3" >Can Edit</option>
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
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='12']" value="12"/>
                    </label>
                    <!--end::Checkbox-->

                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                                                    <span class="symbol-label bg-light-info text-info fw-semibold">
                                A                            </span>
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
                        <option value="1" >Guest</option>
                        <option value="2" >Owner</option>
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
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='13']" value="13"/>
                    </label>
                    <!--end::Checkbox-->

                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic" src="../../assets/media/avatars/300-13.jpg" />
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
                        <option value="1" >Guest</option>
                        <option value="2" >Owner</option>
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
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='14']" value="14"/>
                    </label>
                    <!--end::Checkbox-->

                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                                                    <span class="symbol-label bg-light-success text-success fw-semibold">
                                L                            </span>
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
                        <option value="1" >Guest</option>
                        <option value="2" selected>Owner</option>
                        <option value="3" >Can Edit</option>
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
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='15']" value="15"/>
                    </label>
                    <!--end::Checkbox-->

                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic" src="../../assets/media/avatars/300-21.jpg" />
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
                        <option value="2" >Owner</option>
                        <option value="3" >Can Edit</option>
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
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='16']" value="16"/>
                    </label>
                    <!--end::Checkbox-->

                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic" src="../../assets/media/avatars/300-21.jpg" />
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
                        <option value="1" >Guest</option>
                        <option value="2" >Owner</option>
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
        <img src="../../assets/media/illustrations/sketchy-1/1.png" alt="" class="w-100 h-200px h-sm-325px"/>        
    </div>
    <!--end::Illustration-->
</div>
<!--end::Empty-->                    </div>
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
                    <i class="ki-outline ki-cross fs-1"></i>                </div>
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
                    <img alt="Logo" src="../../assets/media/svg/brand-logos/google-icon.svg" class="h-20px me-3"/>
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
                                                                                    <img alt="Pic" src="../../assets/media/avatars/300-6.jpg" />
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
                                        <option value="1" >Guest</option>
                                        <option value="2" selected>Owner</option>
                                        <option value="3" >Can Edit</option>
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
                                                M                                            </span>
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
                                        <option value="2" >Owner</option>
                                        <option value="3" >Can Edit</option>
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
                                                                                    <img alt="Pic" src="../../assets/media/avatars/300-1.jpg" />
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
                                        <option value="1" >Guest</option>
                                        <option value="2" >Owner</option>
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
                                                                                    <img alt="Pic" src="../../assets/media/avatars/300-5.jpg" />
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
                                        <option value="1" >Guest</option>
                                        <option value="2" selected>Owner</option>
                                        <option value="3" >Can Edit</option>
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
                                                                                    <img alt="Pic" src="../../assets/media/avatars/300-25.jpg" />
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
                                        <option value="1" >Guest</option>
                                        <option value="2" >Owner</option>
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
                                                C                                            </span>
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
                                        <option value="1" >Guest</option>
                                        <option value="2" selected>Owner</option>
                                        <option value="3" >Can Edit</option>
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
                                                                                    <img alt="Pic" src="../../assets/media/avatars/300-9.jpg" />
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
                                        <option value="1" >Guest</option>
                                        <option value="2" >Owner</option>
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
                                                O                                            </span>
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
                                        <option value="1" >Guest</option>
                                        <option value="2" selected>Owner</option>
                                        <option value="3" >Can Edit</option>
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
                                                N                                            </span>
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
                                        <option value="2" >Owner</option>
                                        <option value="3" >Can Edit</option>
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
                                                                                    <img alt="Pic" src="../../assets/media/avatars/300-23.jpg" />
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
                                        <option value="1" >Guest</option>
                                        <option value="2" >Owner</option>
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
                                                E                                            </span>
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
                                        <option value="1" >Guest</option>
                                        <option value="2" selected>Owner</option>
                                        <option value="3" >Can Edit</option>
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
                                                                                    <img alt="Pic" src="../../assets/media/avatars/300-12.jpg" />
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
                                        <option value="2" >Owner</option>
                                        <option value="3" >Can Edit</option>
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
                                                A                                            </span>
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
                                        <option value="1" >Guest</option>
                                        <option value="2" >Owner</option>
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
                                                                                    <img alt="Pic" src="../../assets/media/avatars/300-13.jpg" />
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
                                        <option value="1" >Guest</option>
                                        <option value="2" >Owner</option>
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
                                                L                                            </span>
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
                                        <option value="1" >Guest</option>
                                        <option value="2" selected>Owner</option>
                                        <option value="3" >Can Edit</option>
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
                                                                                    <img alt="Pic" src="../../assets/media/avatars/300-21.jpg" />
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
                                        <option value="2" >Owner</option>
                                        <option value="3" >Can Edit</option>
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
                                                                                    <img alt="Pic" src="../../assets/media/avatars/300-13.jpg" />
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
                                        <option value="1" >Guest</option>
                                        <option value="2" >Owner</option>
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
                        <input class="form-check-input" type="checkbox" value="1" checked="checked"/>
                        
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
<!--end::Modal - Invite Friend-->            <!--end::Modals-->
        
        <!--begin::Javascript-->
        <script>
            var hostUrl = "../../assets/index.php";        </script>

                    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
                            <script src="../../assets/plugins/global/plugins.bundle.js"></script>
                            <script src="../../assets/js/scripts.bundle.js"></script>
                        <!--end::Global Javascript Bundle-->
        
                    <!--begin::Vendors Javascript(used for this page only)-->
                            <script src="../../assets/plugins/custom/datatables/datatables.bundle.js"></script>
                        <!--end::Vendors Javascript-->
        
                    <!--begin::Custom Javascript(used for this page only)-->
                            <script src="../../assets/js/custom/apps/file-manager/list.js"></script>
                            <script src="../../assets/js/widgets.bundle.js"></script>
                            <script src="../../assets/js/custom/widgets.js"></script>
                            <script src="../../assets/js/custom/apps/chat/chat.js"></script>
                            <script src="../../assets/js/custom/utilities/modals/upgrade-plan.js"></script>
                            <script src="../../assets/js/custom/utilities/modals/users-search.js"></script>
                        <!--end::Custom Javascript-->
                <!--end::Javascript-->
        
            </body>
    <!--end::Body-->
</html>