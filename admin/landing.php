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
        <link rel="shortcut icon" href="assets/media/logos/favicon.ico"/>

        <!--begin::Fonts(mandatory for all pages)-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700"/>        <!--end::Fonts-->

        
        
                    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
                            <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css"/>
                            <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css"/>
                        <!--end::Global Stylesheets Bundle-->
        
                    <!--Begin::Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'../../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
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
    <body  id="kt_body" data-bs-spy="scroll" data-bs-target="#kt_landing_menu"  class="bg-white position-relative app-blank" >
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
        
        <!--begin::Root-->
<div class="d-flex flex-column flex-root" id="kt_app_root">
    <!--begin::Header Section-->
<div class="mb-0" id="home">
    <!--begin::Wrapper-->
    <div class="bgi-no-repeat bgi-size-contain bgi-position-x-center bgi-position-y-bottom landing-dark-bg" style="background-image: url(assets/media/svg/illustrations/landing.svg)">
        <!--begin::Header-->
<div class="landing-header" 
    data-kt-sticky="true"
	data-kt-sticky-name="landing-header"
	data-kt-sticky-offset="{default: '200px', lg: '300px'}">
    
    <!--begin::Container-->
    <div class="container">
        <!--begin::Wrapper-->
        <div class="d-flex align-items-center justify-content-between">
            <!--begin::Logo-->
            <div class="d-flex align-items-center flex-equal">
                <!--begin::Mobile menu toggle-->
                <button class="btn btn-icon btn-active-color-primary me-3 d-flex d-lg-none" id="kt_landing_menu_toggle">
                    <i class="ki-outline ki-abstract-14 fs-2hx"></i>                </button>
                <!--end::Mobile menu toggle-->

                <!--begin::Logo image-->
                <a href="landing.php">
                    <img alt="Logo" src="assets/media/logos/landing.svg" class="logo-default h-25px h-lg-30px"/>
                    <img alt="Logo" src="assets/media/logos/landing-dark.svg" class="logo-sticky h-20px h-lg-25px"/>
                </a>
                <!--end::Logo image-->
            </div>
            <!--end::Logo-->

            <!--begin::Menu wrapper-->
            <div class="d-lg-block" id="kt_header_nav_wrapper">
                <div 
                    class="d-lg-block p-5 p-lg-0"

                    data-kt-drawer="true"
                    data-kt-drawer-name="landing-menu"
                    data-kt-drawer-activate="{default: true, lg: false}"
                    data-kt-drawer-overlay="true"
                    data-kt-drawer-width="200px"
                    data-kt-drawer-direction="start"
                    data-kt-drawer-toggle="#kt_landing_menu_toggle"
                    
                    data-kt-swapper="true"
                    data-kt-swapper-mode="prepend"
                    data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav_wrapper'}">

                    <!--begin::Menu-->
                    <div class="menu menu-column flex-nowrap menu-rounded menu-lg-row menu-title-gray-500 menu-state-title-primary nav nav-flush fs-5 fw-semibold" id="kt_landing_menu">
                                                <!--begin::Menu item-->
                        <div class="menu-item">
                            <!--begin::Menu link-->
                            <a class="menu-link nav-link active py-3 px-4 px-xxl-6" href="#kt_body" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">
                                Home                            </a>
                            <!--end::Menu link-->
                        </div>
                        <!--end::Menu item-->
                                                <!--begin::Menu item-->
                        <div class="menu-item">
                            <!--begin::Menu link-->
                            <a class="menu-link nav-link  py-3 px-4 px-xxl-6" href="#how-it-works" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">
                                How it Works                            </a>
                            <!--end::Menu link-->
                        </div>
                        <!--end::Menu item-->
                                                <!--begin::Menu item-->
                        <div class="menu-item">
                            <!--begin::Menu link-->
                            <a class="menu-link nav-link  py-3 px-4 px-xxl-6" href="#achievements" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">
                                Achievements                            </a>
                            <!--end::Menu link-->
                        </div>
                        <!--end::Menu item-->
                                                <!--begin::Menu item-->
                        <div class="menu-item">
                            <!--begin::Menu link-->
                            <a class="menu-link nav-link  py-3 px-4 px-xxl-6" href="#team" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">
                                Team                            </a>
                            <!--end::Menu link-->
                        </div>
                        <!--end::Menu item-->
                                                <!--begin::Menu item-->
                        <div class="menu-item">
                            <!--begin::Menu link-->
                            <a class="menu-link nav-link  py-3 px-4 px-xxl-6" href="#portfolio" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">
                                Portfolio                            </a>
                            <!--end::Menu link-->
                        </div>
                        <!--end::Menu item-->
                                                <!--begin::Menu item-->
                        <div class="menu-item">
                            <!--begin::Menu link-->
                            <a class="menu-link nav-link  py-3 px-4 px-xxl-6" href="#pricing" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">
                                Pricing                            </a>
                            <!--end::Menu link-->
                        </div>
                        <!--end::Menu item-->
                                            </div>
                    <!--end::Menu-->
                </div>
            </div>
            <!--end::Menu wrapper-->

            <!--begin::Toolbar-->
            <div class="flex-equal text-end ms-1">
                <a href="authentication/layouts/basic/sign-in.php" class="btn btn-success">Sign In</a>
            </div>
            <!--end::Toolbar-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Container-->
</div>
<!--end::Header-->    

        
<!--begin::Landing hero-->
<div class="d-flex flex-column flex-center w-100 min-h-350px min-h-lg-500px px-9">
    <!--begin::Heading-->
    <div class="text-center mb-5 mb-lg-10 py-10 py-lg-20">
        <!--begin::Title-->
        <h1 class="text-white lh-base fw-bold fs-2x fs-lg-3x mb-15">
            Build An Outstanding Solutions <br/>
            with 
            
            <span style="background: linear-gradient(to right, #12CE5D 0%, #FFD80C 100%);-webkit-background-clip: text;-webkit-text-fill-color: transparent;">
                <span id="kt_landing_hero_text">The Best Theme Ever</span>
            </span>
        </h1>
        <!--end::Title-->

        <!--begin::Action-->
        <a href="index.php" class="btn btn-primary">Try Metronic</a>
        <!--end::Action-->
    </div>
    <!--end::Heading-->

    <!--begin::Clients-->
    <div class="d-flex flex-center flex-wrap position-relative px-5">    
          
            <!--begin::Client-->
            <div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" title="Fujifilm">
                <img src="assets/media/svg/brand-logos/fujifilm.svg" class="mh-30px mh-lg-40px" alt=""/> 
            </div>
            <!--end::Client-->
          
            <!--begin::Client-->
            <div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" title="Vodafone">
                <img src="assets/media/svg/brand-logos/vodafone.svg" class="mh-30px mh-lg-40px" alt=""/> 
            </div>
            <!--end::Client-->
          
            <!--begin::Client-->
            <div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" title="KPMG International">
                <img src="assets/media/svg/brand-logos/kpmg.svg" class="mh-30px mh-lg-40px" alt=""/> 
            </div>
            <!--end::Client-->
          
            <!--begin::Client-->
            <div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" title="Nasa">
                <img src="assets/media/svg/brand-logos/nasa.svg" class="mh-30px mh-lg-40px" alt=""/> 
            </div>
            <!--end::Client-->
          
            <!--begin::Client-->
            <div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" title="Aspnetzero">
                <img src="assets/media/svg/brand-logos/aspnetzero.svg" class="mh-30px mh-lg-40px" alt=""/> 
            </div>
            <!--end::Client-->
          
            <!--begin::Client-->
            <div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" title="AON - Empower Results">
                <img src="assets/media/svg/brand-logos/aon.svg" class="mh-30px mh-lg-40px" alt=""/> 
            </div>
            <!--end::Client-->
          
            <!--begin::Client-->
            <div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" title="Hewlett-Packard">
                <img src="assets/media/svg/brand-logos/hp-3.svg" class="mh-30px mh-lg-40px" alt=""/> 
            </div>
            <!--end::Client-->
          
            <!--begin::Client-->
            <div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" title="Truman">
                <img src="assets/media/svg/brand-logos/truman.svg" class="mh-30px mh-lg-40px" alt=""/> 
            </div>
            <!--end::Client-->
            </div> 
    <!--end::Clients-->    
</div>
<!--end::Landing hero-->


 

 
    
    </div>
    <!--end::Wrapper-->

    <!--begin::Curve bottom-->
<div class="landing-curve landing-dark-color mb-10 mb-lg-20">
    <svg viewBox="15 12 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 11C3.93573 11.3356 7.85984 11.6689 11.7725 12H1488.16C1492.1 11.6689 1496.04 11.3356 1500 11V12H1488.16C913.668 60.3476 586.282 60.6117 11.7725 12H0V11Z" fill="currentColor"></path>
     </svg>
</div>
<!--end::Curve bottom--> 
</div>
<!--end::Header Section-->

<!--begin::How It Works Section-->
<div class="mb-n10 mb-lg-n20 z-index-2">
    <!--begin::Container--> 
    <div class="container"> 
        <!--begin::Heading-->
        <div class="text-center mb-17">
            <!--begin::Title-->
            <h3 class="fs-2hx text-dark mb-5" id="how-it-works" data-kt-scroll-offset="{default: 100, lg: 150}">How it Works</h3>
            <!--end::Title-->

            <!--begin::Text-->
            <div class="fs-5 text-muted fw-bold">
                Save  thousands to millions of bucks by using single tool <br/>
                for different amazing and great useful admin   
            </div>   
            <!--end::Text-->
        </div>  
        <!--end::Heading-->   

        <!--begin::Row-->
        <div class="row w-100 gy-10 mb-md-20"> 
            <!--begin::Col-->
            <div class="col-md-4 px-5">           
                <!--begin::Story-->
<div class="text-center mb-10 mb-md-0">  
    <!--begin::Illustration-->     
    <img src="assets/media/illustrations/sketchy-1/2.png" class="mh-125px mb-9" alt=""/>   
    <!--end::Illustration-->

    <!--begin::Heading--> 
    <div class="d-flex flex-center mb-5">
        <!--begin::Badge-->
        <span class="badge badge-circle badge-light-success fw-bold p-5 me-3 fs-3">1</span>
        <!--end::Badge-->

        <!--begin::Title-->
        <div class="fs-5 fs-lg-3 fw-bold text-dark">
            Jane Miller        </div>       
        <!--end::Title-->
    </div>    
    <!--end::Heading--> 

    <!--begin::Description-->
    <div class="fw-semibold fs-6 fs-lg-4 text-muted">    
        
                            Save  thousands to millions of bucks <br/>
                            by using single tool for different <br/>
                            amazing and great
                            </div>
    <!--end::Description-->               
</div>
<!--end::Story-->

 

             </div>  
            <!--end::Col-->

            <!--begin::Col-->
            <div class="col-md-4 px-5">           
                <!--begin::Story-->
<div class="text-center mb-10 mb-md-0">  
    <!--begin::Illustration-->     
    <img src="assets/media/illustrations/sketchy-1/8.png" class="mh-125px mb-9" alt=""/>   
    <!--end::Illustration-->

    <!--begin::Heading--> 
    <div class="d-flex flex-center mb-5">
        <!--begin::Badge-->
        <span class="badge badge-circle badge-light-success fw-bold p-5 me-3 fs-3">2</span>
        <!--end::Badge-->

        <!--begin::Title-->
        <div class="fs-5 fs-lg-3 fw-bold text-dark">
            Setup Your App        </div>       
        <!--end::Title-->
    </div>    
    <!--end::Heading--> 

    <!--begin::Description-->
    <div class="fw-semibold fs-6 fs-lg-4 text-muted">    
        
                            Save  thousands to millions of bucks <br/>
                            by using single tool for different <br/>
                            amazing and great
                            </div>
    <!--end::Description-->               
</div>
<!--end::Story-->

 

             </div>   
            <!--end::Col-->

            <!--begin::Col-->  
            <div class="col-md-4 px-5">           
                <!--begin::Story-->
<div class="text-center mb-10 mb-md-0">  
    <!--begin::Illustration-->     
    <img src="assets/media/illustrations/sketchy-1/12.png" class="mh-125px mb-9" alt=""/>   
    <!--end::Illustration-->

    <!--begin::Heading--> 
    <div class="d-flex flex-center mb-5">
        <!--begin::Badge-->
        <span class="badge badge-circle badge-light-success fw-bold p-5 me-3 fs-3">3</span>
        <!--end::Badge-->

        <!--begin::Title-->
        <div class="fs-5 fs-lg-3 fw-bold text-dark">
            Enjoy Nautica App        </div>       
        <!--end::Title-->
    </div>    
    <!--end::Heading--> 

    <!--begin::Description-->
    <div class="fw-semibold fs-6 fs-lg-4 text-muted">    
        
                            Save  thousands to millions of bucks <br/>
                            by using single tool for different <br/>
                            amazing and great
                            </div>
    <!--end::Description-->               
</div>
<!--end::Story-->

 

             </div>   
            <!--end::Col-->      
        </div>
        <!--end::Row--> 

        
<!--begin::Product slider-->
<div class="tns tns-default">
    <!--begin::Slider-->
    <div
        data-tns="true"
        data-tns-loop="true"
        data-tns-swipe-angle="false"
        data-tns-speed="2000"
        data-tns-autoplay="true"
        data-tns-autoplay-timeout="18000"
        data-tns-controls="true"
        data-tns-nav="false"
        data-tns-items="1"
        data-tns-center="false"
        data-tns-dots="false"
        data-tns-prev-button="#kt_team_slider_prev1"
        data-tns-next-button="#kt_team_slider_next1">

                    <!--begin::Item-->
            <div class="text-center px-5 pt-5 pt-lg-10 px-lg-10">
                <img src="assets/media/preview/demos/demo1/light-ltr.png" class="card-rounded shadow mh-lg-650px mw-100" alt=""/>                                           
            </div>
            <!--end::Item--> 
                    <!--begin::Item-->
            <div class="text-center px-5 pt-5 pt-lg-10 px-lg-10">
                <img src="assets/media/preview/demos/demo2/light-ltr.png" class="card-rounded shadow mh-lg-650px mw-100" alt=""/>                                           
            </div>
            <!--end::Item--> 
                    <!--begin::Item-->
            <div class="text-center px-5 pt-5 pt-lg-10 px-lg-10">
                <img src="assets/media/preview/demos/demo4/light-ltr.png" class="card-rounded shadow mh-lg-650px mw-100" alt=""/>                                           
            </div>
            <!--end::Item--> 
                    <!--begin::Item-->
            <div class="text-center px-5 pt-5 pt-lg-10 px-lg-10">
                <img src="assets/media/preview/demos/demo5/light-ltr.png" class="card-rounded shadow mh-lg-650px mw-100" alt=""/>                                           
            </div>
            <!--end::Item--> 
             
    </div>
    <!--end::Slider-->

    <!--begin::Slider button-->
    <button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_prev1">
        <i class="ki-outline ki-left fs-2x"></i>    </button>
    <!--end::Slider button-->

    <!--begin::Slider button-->
    <button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_next1">
        <i class="ki-outline ki-right fs-2x"></i>    </button>
    <!--end::Slider button-->
</div>
<!--end::Product slider-->

 

 

 

 
    </div>
    <!--end::Container--> 
</div>
<!--end::How It Works Section-->
 
 
<!--begin::Statistics Section-->
<div class="mt-sm-n10">     
    <!--begin::Curve top-->
<div class="landing-curve landing-dark-color ">
    <svg viewBox="15 -1 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M1 48C4.93573 47.6644 8.85984 47.3311 12.7725 47H1489.16C1493.1 47.3311 1497.04 47.6644 1501 48V47H1489.16C914.668 -1.34764 587.282 -1.61174 12.7725 47H1V48Z" fill="currentColor"></path>
    </svg>
</div>
<!--end::Curve top--> 
 
    <!--begin::Wrapper-->
    <div class="pb-15 pt-18 landing-dark-bg">     
        <!--begin::Container-->
        <div class="container">
            <!--begin::Heading-->
            <div class="text-center mt-15 mb-18" id="achievements" data-kt-scroll-offset="{default: 100, lg: 150}">
                <!--begin::Title-->
                <h3 class="fs-2hx text-white fw-bold mb-5">We Make Things Better</h3>
                <!--end::Title-->

                <!--begin::Description-->
                <div class="fs-5 text-gray-700 fw-bold">
                    Save  thousands to millions of bucks by using single tool <br/>
                    for different amazing and great useful admin   
                </div>   
                <!--end::Description-->
            </div>  
            <!--end::Heading-->   

            <!--begin::Statistics-->
            <div class="d-flex flex-center">
                <!--begin::Items-->
                <div class="d-flex flex-wrap flex-center justify-content-lg-between mb-15 mx-auto w-xl-900px">   
                         
                        <!--begin::Item-->
                        <div class="d-flex flex-column flex-center h-200px w-200px h-lg-250px w-lg-250px m-3 bgi-no-repeat bgi-position-center bgi-size-contain" style="background-image: url('assets/media/svg/misc/octagon.svg')">  
                            <!--begin::Symbol-->
                            <i class="ki-outline ki-element-11 fs-2tx text-white mb-3"></i>                            <!--end::Symbol-->

                            <!--begin::Info-->
                            <div class="mb-0">
                                <!--begin::Value-->
                                <div class="fs-lg-2hx fs-2x fw-bold text-white d-flex flex-center">
                                    <div class="min-w-70px" data-kt-countup="true" data-kt-countup-value="700" data-kt-countup-suffix="+">0</div>
                                </div>
                                <!--end::Value-->

                                <!--begin::Label-->
                                <span class="text-gray-600 fw-semibold fs-5 lh-0">
                                    Known Companies                                </span>
                                <!--end::Label-->
                            </div>
                            <!--end::Info-->      
                        </div>
                        <!--end::Item-->    
                         
                        <!--begin::Item-->
                        <div class="d-flex flex-column flex-center h-200px w-200px h-lg-250px w-lg-250px m-3 bgi-no-repeat bgi-position-center bgi-size-contain" style="background-image: url('assets/media/svg/misc/octagon.svg')">  
                            <!--begin::Symbol-->
                            <i class="ki-outline ki-chart-pie-4 fs-2tx text-white mb-3"></i>                            <!--end::Symbol-->

                            <!--begin::Info-->
                            <div class="mb-0">
                                <!--begin::Value-->
                                <div class="fs-lg-2hx fs-2x fw-bold text-white d-flex flex-center">
                                    <div class="min-w-70px" data-kt-countup="true" data-kt-countup-value="80" data-kt-countup-suffix="K+">0</div>
                                </div>
                                <!--end::Value-->

                                <!--begin::Label-->
                                <span class="text-gray-600 fw-semibold fs-5 lh-0">
                                    Statistic Reports                                </span>
                                <!--end::Label-->
                            </div>
                            <!--end::Info-->      
                        </div>
                        <!--end::Item-->    
                         
                        <!--begin::Item-->
                        <div class="d-flex flex-column flex-center h-200px w-200px h-lg-250px w-lg-250px m-3 bgi-no-repeat bgi-position-center bgi-size-contain" style="background-image: url('assets/media/svg/misc/octagon.svg')">  
                            <!--begin::Symbol-->
                            <i class="ki-outline ki-basket fs-2tx text-white mb-3"></i>                            <!--end::Symbol-->

                            <!--begin::Info-->
                            <div class="mb-0">
                                <!--begin::Value-->
                                <div class="fs-lg-2hx fs-2x fw-bold text-white d-flex flex-center">
                                    <div class="min-w-70px" data-kt-countup="true" data-kt-countup-value="35" data-kt-countup-suffix="M+">0</div>
                                </div>
                                <!--end::Value-->

                                <!--begin::Label-->
                                <span class="text-gray-600 fw-semibold fs-5 lh-0">
                                    Secure Payments                                </span>
                                <!--end::Label-->
                            </div>
                            <!--end::Info-->      
                        </div>
                        <!--end::Item-->    
                            
                </div>
                <!--end::Items-->
            </div>
            <!--end::Statistics-->

            <!--begin::Testimonial-->
            <div class="fs-2 fw-semibold text-muted text-center mb-3"> 
                <span class="fs-1 lh-1 text-gray-700">“</span>

                When you care about your topic, you’ll write about it in a <br/><span class="text-gray-700 me-1">more powerful</span>, emotionally expressive way
                
                <span class="fs-1 lh-1 text-gray-700">“</span>
            </div>
            <!--end::Testimonial-->

            <!--begin::Author-->
            <div class="fs-2 fw-semibold text-muted text-center"> 
                <a href="account/security.php" class="link-primary fs-4 fw-bold">Marcus Levy,</a>   

                <span class="fs-4 fw-bold text-gray-600">KeenThemes CEO</span>
            </div>
            <!--end::Author-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Wrapper-->

    <!--begin::Curve bottom-->
<div class="landing-curve landing-dark-color ">
    <svg viewBox="15 12 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 11C3.93573 11.3356 7.85984 11.6689 11.7725 12H1488.16C1492.1 11.6689 1496.04 11.3356 1500 11V12H1488.16C913.668 60.3476 586.282 60.6117 11.7725 12H0V11Z" fill="currentColor"></path>
     </svg>
</div>
<!--end::Curve bottom--> 
</div>
<!--end::Statistics Section-->

 


<!--begin::Team Section-->
<div class="py-10 py-lg-20">
    <!--begin::Container-->
    <div class="container">        
        <!--begin::Heading-->
        <div class="text-center mb-12">
            <!--begin::Title-->
            <h3 class="fs-2hx text-dark mb-5" id="team" data-kt-scroll-offset="{default: 100, lg: 150}">Our Great Team</h3>
            <!--end::Title-->

            <!--begin::Sub-title-->
            <div class="fs-5 text-muted fw-bold">
                It’s no doubt that when a development takes longer to complete, additional costs to<br/>
                integrate and test each extra feature creeps up and haunts most of us.
            </div>   
            <!--end::Sub-title--->
        </div>  
        <!--end::Heading-->         

        <!--begin::Slider-->
        <div class="tns tns-default" style="direction: ltr">
            <!--begin::Wrapper-->
            <div
                data-tns="true"
                data-tns-loop="true"
                data-tns-swipe-angle="false"
                data-tns-speed="2000"
                data-tns-autoplay="true"
                data-tns-autoplay-timeout="18000"
                data-tns-controls="true"
                data-tns-nav="false"
                data-tns-items="1"
                data-tns-center="false"
                data-tns-dots="false"
                data-tns-prev-button="#kt_team_slider_prev"
                data-tns-next-button="#kt_team_slider_next"
                data-tns-responsive="{1200: {items: 3}, 992: {items: 2}}">

                                    <!--begin::Item-->
                    <div class="text-center">
                        <!--begin::Photo-->
                        <div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/avatars/300-1.jpg')">
                        </div>
                        <!--end::Photo-->

                        <!--begin::Person-->
                        <div class="mb-0">
                            <!--begin::Name-->
                            <a href="#" class="text-dark fw-bold text-hover-primary fs-3">Paul Miles</a>           
                            <!--end::Name-->
                            
                            <!--begin::Position-->
                            <div class="text-muted fs-6 fw-semibold mt-1">Development Lead</div> 
                            <!--begin::Position-->                 
                        </div>
                        <!--end::Person-->                
                    </div>
                    <!--end::Item--> 
                                    <!--begin::Item-->
                    <div class="text-center">
                        <!--begin::Photo-->
                        <div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/avatars/300-2.jpg')">
                        </div>
                        <!--end::Photo-->

                        <!--begin::Person-->
                        <div class="mb-0">
                            <!--begin::Name-->
                            <a href="#" class="text-dark fw-bold text-hover-primary fs-3">Melisa Marcus</a>           
                            <!--end::Name-->
                            
                            <!--begin::Position-->
                            <div class="text-muted fs-6 fw-semibold mt-1">Creative Director</div> 
                            <!--begin::Position-->                 
                        </div>
                        <!--end::Person-->                
                    </div>
                    <!--end::Item--> 
                                    <!--begin::Item-->
                    <div class="text-center">
                        <!--begin::Photo-->
                        <div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/avatars/300-5.jpg')">
                        </div>
                        <!--end::Photo-->

                        <!--begin::Person-->
                        <div class="mb-0">
                            <!--begin::Name-->
                            <a href="#" class="text-dark fw-bold text-hover-primary fs-3">David Nilson</a>           
                            <!--end::Name-->
                            
                            <!--begin::Position-->
                            <div class="text-muted fs-6 fw-semibold mt-1">Python Expert</div> 
                            <!--begin::Position-->                 
                        </div>
                        <!--end::Person-->                
                    </div>
                    <!--end::Item--> 
                                    <!--begin::Item-->
                    <div class="text-center">
                        <!--begin::Photo-->
                        <div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/avatars/300-20.jpg')">
                        </div>
                        <!--end::Photo-->

                        <!--begin::Person-->
                        <div class="mb-0">
                            <!--begin::Name-->
                            <a href="#" class="text-dark fw-bold text-hover-primary fs-3">Anne Clarc</a>           
                            <!--end::Name-->
                            
                            <!--begin::Position-->
                            <div class="text-muted fs-6 fw-semibold mt-1">Project Manager</div> 
                            <!--begin::Position-->                 
                        </div>
                        <!--end::Person-->                
                    </div>
                    <!--end::Item--> 
                                    <!--begin::Item-->
                    <div class="text-center">
                        <!--begin::Photo-->
                        <div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/avatars/300-23.jpg')">
                        </div>
                        <!--end::Photo-->

                        <!--begin::Person-->
                        <div class="mb-0">
                            <!--begin::Name-->
                            <a href="#" class="text-dark fw-bold text-hover-primary fs-3">Ricky Hunt</a>           
                            <!--end::Name-->
                            
                            <!--begin::Position-->
                            <div class="text-muted fs-6 fw-semibold mt-1">Art Director</div> 
                            <!--begin::Position-->                 
                        </div>
                        <!--end::Person-->                
                    </div>
                    <!--end::Item--> 
                                    <!--begin::Item-->
                    <div class="text-center">
                        <!--begin::Photo-->
                        <div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/avatars/300-12.jpg')">
                        </div>
                        <!--end::Photo-->

                        <!--begin::Person-->
                        <div class="mb-0">
                            <!--begin::Name-->
                            <a href="#" class="text-dark fw-bold text-hover-primary fs-3">Alice Wayde</a>           
                            <!--end::Name-->
                            
                            <!--begin::Position-->
                            <div class="text-muted fs-6 fw-semibold mt-1">Marketing Manager</div> 
                            <!--begin::Position-->                 
                        </div>
                        <!--end::Person-->                
                    </div>
                    <!--end::Item--> 
                                    <!--begin::Item-->
                    <div class="text-center">
                        <!--begin::Photo-->
                        <div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/avatars/300-9.jpg')">
                        </div>
                        <!--end::Photo-->

                        <!--begin::Person-->
                        <div class="mb-0">
                            <!--begin::Name-->
                            <a href="#" class="text-dark fw-bold text-hover-primary fs-3">Carles Puyol</a>           
                            <!--end::Name-->
                            
                            <!--begin::Position-->
                            <div class="text-muted fs-6 fw-semibold mt-1">QA Managers</div> 
                            <!--begin::Position-->                 
                        </div>
                        <!--end::Person-->                
                    </div>
                    <!--end::Item--> 
                     
            </div>
            <!--end::Wrapper-->

            <!--begin::Button-->
            <button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_prev">
                <i class="ki-outline ki-left fs-2x"></i>            </button>
            <!--end::Button-->

            <!--begin::Button-->
            <button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_next">
                <i class="ki-outline ki-right fs-2x"></i>            </button>
            <!--end::Button-->
        </div>
        <!--end::Slider-->     
    </div>
    <!--end::Container-->
</div>
<!--end::Team Section--> 


<!--begin::Projects Section-->
<div class="mb-lg-n15 position-relative z-index-2">
    <!--begin::Container-->
    <div class="container">        
        <!--begin::Card-->
        <div class="card" style="filter: drop-shadow(0px 0px 40px rgba(68, 81, 96, 0.08))">
            <!--begin::Card body-->
            <div class="card-body p-lg-20">        
                <!--begin::Heading-->
                <div class="text-center mb-5 mb-lg-10">        
                    <!--begin::Title-->
                    <h3 class="fs-2hx text-dark mb-5" id="portfolio" data-kt-scroll-offset="{default: 100, lg: 250}">Our Projects</h3>
                    <!--end::Title-->       
                </div>
                <!--end::Heading-->

                <!--begin::Tabs wrapper-->
                <div class="d-flex flex-center mb-5 mb-lg-15">
                    <!--begin::Tabs-->
                    <ul class="nav border-transparent flex-center fs-5 fw-bold">
                        <li class="nav-item">
							<a class="nav-link text-gray-500 text-active-primary px-3 px-lg-6 active" href="#" data-bs-toggle="tab" data-bs-target="#kt_landing_projects_latest">Latest</a>
						</li>

                        <li class="nav-item">
							<a class="nav-link text-gray-500 text-active-primary px-3 px-lg-6" href="#" data-bs-toggle="tab" data-bs-target="#kt_landing_projects_web_design">Web Design</a>
						</li>

                        <li class="nav-item">
							<a class="nav-link text-gray-500 text-active-primary px-3 px-lg-6" href="#" data-bs-toggle="tab" data-bs-target="#kt_landing_projects_mobile_apps">Mobile Apps</a>
						</li>

                        <li class="nav-item">
							<a class="nav-link text-gray-500 text-active-primary px-3 px-lg-6" href="#" data-bs-toggle="tab" data-bs-target="#kt_landing_projects_development">Development</a>
						</li>
                    </ul>
                    <!--end::Tabs-->
                </div>
                <!--end::Tabs wrapper-->

                <!--begin::Tabs content-->
                <div class="tab-content">
                    <!--begin::Tab pane-->
                    <div class="tab-pane fade show active" id="kt_landing_projects_latest">
                        <!--begin::Row-->
<div class="row g-10">
    <!--begin::Col-->
    <div class="col-lg-6">
        <!--begin::Item-->
        <a class="d-block card-rounded overlay h-lg-100" data-fslightbox="lightbox-projects" href="assets/media/stock/600x600/img-23.jpg">       
            <!--begin::Image-->
            <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-lg-100 min-h-250px"
                style="background-image:url('assets/media/stock/600x600/img-23.jpg')">                       
            </div>
            <!--end::Image-->

            <!--begin::Action-->
            <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                <i class="ki-outline ki-eye fs-3x text-white"></i>            </div>  
            <!--end::Action-->      
        </a>  
        <!--end::Item-->
    </div>
    <!--end::Col-->

    <!--begin::Col-->
    <div class="col-lg-6">
        <!--begin::Row-->
        <div class="row g-10 mb-10">
            <!--begin::Col-->
            <div class="col-lg-6">
                <!--begin::Item-->
                <a class="d-block card-rounded overlay" data-fslightbox="lightbox-projects" href="assets/media/stock/600x600/img-22.jpg">       
                    <!--begin::Image-->
                    <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px"
                        style="background-image:url('assets/media/stock/600x600/img-22.jpg')">                       
                    </div>
                    <!--end::Image-->

                    <!--begin::Action-->
                    <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                        <i class="ki-outline ki-eye fs-3x text-white"></i>                    </div>  
                    <!--end::Action-->      
                </a>  
                <!--end::Item-->
            </div>
            <!--end::Col-->

            <!--begin::Col-->
            <div class="col-lg-6">
                <!--begin::Item-->
                <a class="d-block card-rounded overlay" data-fslightbox="lightbox-projects" href="assets/media/stock/600x600/img-21.jpg">       
                    <!--begin::Image-->
                    <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px"
                        style="background-image:url('assets/media/stock/600x600/img-21.jpg')">                       
                    </div>
                    <!--end::Image-->

                    <!--begin::Action-->
                    <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                        <i class="ki-outline ki-eye fs-3x text-white"></i>                    </div>  
                    <!--end::Action-->      
                </a>  
                <!--end::Item-->
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->

        <!--begin::Item-->
        <a class="d-block card-rounded overlay" data-fslightbox="lightbox-projects" href="assets/media/stock/600x400/img-20.jpg">       
            <!--begin::Image-->
            <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px"
                style="background-image:url('assets/media/stock/600x600/img-20.jpg')">                       
            </div>
            <!--end::Image-->

            <!--begin::Action-->
            <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                <i class="ki-outline ki-eye fs-3x text-white"></i>            </div>  
            <!--end::Action-->      
        </a>  
        <!--end::Item-->
    </div>
    <!--end::Col-->
</div>
<!--end::Row--> 
                    </div>
                    <!--end::Tab pane-->

                    <!--begin::Tab pane-->
                    <div class="tab-pane fade" id="kt_landing_projects_web_design">
                        <!--begin::Row-->
<div class="row g-10">
    <!--begin::Col-->
    <div class="col-lg-6">
        <!--begin::Item-->
        <a class="d-block card-rounded overlay h-lg-100" data-fslightbox="lightbox-projects" href="assets/media/stock/600x600/img-11.jpg">       
            <!--begin::Image-->
            <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-lg-100 min-h-250px"
                style="background-image:url('assets/media/stock/600x600/img-11.jpg')">                       
            </div>
            <!--end::Image-->

            <!--begin::Action-->
            <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                <i class="ki-outline ki-eye fs-3x text-white"></i>            </div>  
            <!--end::Action-->      
        </a>  
        <!--end::Item-->
    </div>
    <!--end::Col-->

    <!--begin::Col-->
    <div class="col-lg-6">
        <!--begin::Row-->
        <div class="row g-10 mb-10">
            <!--begin::Col-->
            <div class="col-lg-6">
                <!--begin::Item-->
                <a class="d-block card-rounded overlay" data-fslightbox="lightbox-projects" href="assets/media/stock/600x600/img-12.jpg">       
                    <!--begin::Image-->
                    <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px"
                        style="background-image:url('assets/media/stock/600x600/img-12.jpg')">                       
                    </div>
                    <!--end::Image-->

                    <!--begin::Action-->
                    <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                        <i class="ki-outline ki-eye fs-3x text-white"></i>                    </div>  
                    <!--end::Action-->      
                </a>  
                <!--end::Item-->
            </div>
            <!--end::Col-->

            <!--begin::Col-->
            <div class="col-lg-6">
                <!--begin::Item-->
                <a class="d-block card-rounded overlay" data-fslightbox="lightbox-projects" href="assets/media/stock/600x600/img-21.jpg">       
                    <!--begin::Image-->
                    <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px"
                        style="background-image:url('assets/media/stock/600x600/img-21.jpg')">                       
                    </div>
                    <!--end::Image-->

                    <!--begin::Action-->
                    <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                        <i class="ki-outline ki-eye fs-3x text-white"></i>                    </div>  
                    <!--end::Action-->      
                </a>  
                <!--end::Item-->
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->

        <!--begin::Item-->
        <a class="d-block card-rounded overlay" data-fslightbox="lightbox-projects" href="assets/media/stock/600x400/img-20.jpg">       
            <!--begin::Image-->
            <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px"
                style="background-image:url('assets/media/stock/600x600/img-20.jpg')">                       
            </div>
            <!--end::Image-->

            <!--begin::Action-->
            <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                <i class="ki-outline ki-eye fs-3x text-white"></i>            </div>  
            <!--end::Action-->      
        </a>  
        <!--end::Item-->
    </div>
    <!--end::Col-->
</div>
<!--end::Row--> 
                    </div>
                    <!--end::Tab pane-->

                    <!--begin::Tab pane-->
                    <div class="tab-pane fade" id="kt_landing_projects_mobile_apps">
                        <!--begin::Row-->
<div class="row g-10">
    <!--begin::Col-->
    <div class="col-lg-6">
        <!--begin::Row-->
        <div class="row g-10 mb-10">
            <!--begin::Col-->
            <div class="col-lg-6">
                <!--begin::Item-->
                <a class="d-block card-rounded overlay" data-fslightbox="lightbox-projects" href="assets/media/stock/600x600/img-16.jpg">       
                    <!--begin::Image-->
                    <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px"
                        style="background-image:url('assets/media/stock/600x600/img-16.jpg')">                       
                    </div>
                    <!--end::Image-->

                    <!--begin::Action-->
                    <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                        <i class="ki-outline ki-eye fs-3x text-white"></i>                    </div>  
                    <!--end::Action-->      
                </a>  
                <!--end::Item-->
            </div>
            <!--end::Col-->

            <!--begin::Col-->
            <div class="col-lg-6">
                <!--begin::Item-->
                <a class="d-block card-rounded overlay" data-fslightbox="lightbox-projects" href="assets/media/stock/600x600/img-12.jpg">       
                    <!--begin::Image-->
                    <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px"
                        style="background-image:url('assets/media/stock/600x600/img-12.jpg')">                       
                    </div>
                    <!--end::Image-->

                    <!--begin::Action-->
                    <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                        <i class="ki-outline ki-eye fs-3x text-white"></i>                    </div>  
                    <!--end::Action-->      
                </a>  
                <!--end::Item-->
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->

        <!--begin::Item-->
        <a class="d-block card-rounded overlay" data-fslightbox="lightbox-projects" href="assets/media/stock/600x400/img-15.jpg">       
            <!--begin::Image-->
            <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px"
                style="background-image:url('assets/media/stock/600x600/img-15.jpg')">                       
            </div>
            <!--end::Image-->

            <!--begin::Action-->
            <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                <i class="ki-outline ki-eye fs-3x text-white"></i>            </div>  
            <!--end::Action-->      
        </a>  
        <!--end::Item-->
    </div>
    <!--end::Col-->

    <!--begin::Col-->
    <div class="col-lg-6">
        <!--begin::Item-->
        <a class="d-block card-rounded overlay h-lg-100" data-fslightbox="lightbox-projects" href="assets/media/stock/600x600/img-23.jpg">       
            <!--begin::Image-->
            <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-lg-100 min-h-250px"
                style="background-image:url('assets/media/stock/600x600/img-23.jpg')">                       
            </div>
            <!--end::Image-->

            <!--begin::Action-->
            <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                <i class="ki-outline ki-eye fs-3x text-white"></i>            </div>  
            <!--end::Action-->      
        </a>  
        <!--end::Item-->
    </div>
    <!--end::Col-->
</div>
<!--end::Row--> 
                    </div>
                    <!--end::Tab pane-->

                    <!--begin::Tab pane-->
                    <div class="tab-pane fade" id="kt_landing_projects_development">
                        <!--begin::Row-->
<div class="row g-10">
    <!--begin::Col-->
    <div class="col-lg-6">
        <!--begin::Item-->
        <a class="d-block card-rounded overlay h-lg-100" data-fslightbox="lightbox-projects" href="assets/media/stock/600x600/img-15.jpg">       
            <!--begin::Image-->
            <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-lg-100 min-h-250px"
                style="background-image:url('assets/media/stock/600x600/img-15.jpg')">                       
            </div>
            <!--end::Image-->

            <!--begin::Action-->
            <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                <i class="ki-outline ki-eye fs-3x text-white"></i>            </div>  
            <!--end::Action-->      
        </a>  
        <!--end::Item-->
    </div>
    <!--end::Col-->

    <!--begin::Col-->
    <div class="col-lg-6">
        <!--begin::Row-->
        <div class="row g-10 mb-10">
            <!--begin::Col-->
            <div class="col-lg-6">
                <!--begin::Item-->
                <a class="d-block card-rounded overlay" data-fslightbox="lightbox-projects" href="assets/media/stock/600x600/img-22.jpg">       
                    <!--begin::Image-->
                    <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px"
                        style="background-image:url('assets/media/stock/600x600/img-22.jpg')">                       
                    </div>
                    <!--end::Image-->

                    <!--begin::Action-->
                    <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                        <i class="ki-outline ki-eye fs-3x text-white"></i>                    </div>  
                    <!--end::Action-->      
                </a>  
                <!--end::Item-->
            </div>
            <!--end::Col-->

            <!--begin::Col-->
            <div class="col-lg-6">
                <!--begin::Item-->
                <a class="d-block card-rounded overlay" data-fslightbox="lightbox-projects" href="assets/media/stock/600x600/img-21.jpg">       
                    <!--begin::Image-->
                    <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px"
                        style="background-image:url('assets/media/stock/600x600/img-21.jpg')">                       
                    </div>
                    <!--end::Image-->

                    <!--begin::Action-->
                    <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                        <i class="ki-outline ki-eye fs-3x text-white"></i>                    </div>  
                    <!--end::Action-->      
                </a>  
                <!--end::Item-->
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->

        <!--begin::Item-->
        <a class="d-block card-rounded overlay" data-fslightbox="lightbox-projects" href="assets/media/stock/600x400/img-14.jpg">       
            <!--begin::Image-->
            <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px"
                style="background-image:url('assets/media/stock/600x600/img-14.jpg')">                       
            </div>
            <!--end::Image-->

            <!--begin::Action-->
            <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                <i class="ki-outline ki-eye fs-3x text-white"></i>            </div>  
            <!--end::Action-->      
        </a>  
        <!--end::Item-->
    </div>
    <!--end::Col-->
</div>
<!--end::Row--> 
                    </div>
                    <!--end::Tab pane-->
                </div>
                <!--end::Tabs content-->
            </div>
            <!--end::Card body-->       
        </div>
        <!--end::Card-->       
    </div>
    <!--end::Container-->
</div>
<!--end::Projects Section--> 


<!--begin::Pricing Section-->
<div class="mt-sm-n20 ">     
    <!--begin::Curve top-->
<div class="landing-curve landing-dark-color ">
    <svg viewBox="15 -1 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M1 48C4.93573 47.6644 8.85984 47.3311 12.7725 47H1489.16C1493.1 47.3311 1497.04 47.6644 1501 48V47H1489.16C914.668 -1.34764 587.282 -1.61174 12.7725 47H1V48Z" fill="currentColor"></path>
    </svg>
</div>
<!--end::Curve top--> 
 
    <!--begin::Wrapper-->
    <div class="py-20 landing-dark-bg ">     
        <!--begin::Container-->
        <div class="container">
            <!--begin::Plans-->
            <div class="d-flex flex-column container pt-lg-20">
                <!--begin::Heading-->
                <div class="mb-13 text-center">
                    <h1 class="fs-2hx fw-bold text-white mb-5" id="pricing" data-kt-scroll-offset="{default: 100, lg: 150}">Clear Pricing Makes it Easy</h1>

                    <div class="text-gray-600 fw-semibold fs-5">
                        Save  thousands to millions of bucks by using single tool for different <br/>
                        amazing and outstanding cool and great useful admin
                    </div>
                </div>
                <!--end::Heading-->
                
                <!--begin::Pricing-->
                <div class="text-center" id="kt_pricing">
                    <!--begin::Nav group-->
                    <div class="nav-group landing-dark-bg d-inline-flex mb-15" data-kt-buttons="true" style="border: 1px dashed #2B4666;">
                        <a href="#" class="btn btn-color-gray-600 btn-active btn-active-success px-6 py-3 me-2 active" data-kt-plan="month">
                            Monthly
                        </a>

                        <a href="#" class="btn btn-color-gray-600 btn-active btn-active-success px-6 py-3" data-kt-plan="annual">
                            Annual
                        </a>
                    </div>
                    <!--end::Nav group-->

                    <!--begin::Row-->                             
                    <div class="row g-10">
                                                                                    <!--begin::Col-->
                                <div class="col-xl-4">
                                    <div class="d-flex h-100 align-items-center">
                                        <!--begin::Option-->
                                        <div class="w-100 d-flex flex-column flex-center rounded-3 bg-body py-15 px-10">
                                            <!--begin::Heading-->
                                            <div class="mb-7 text-center">
                                                <!--begin::Title-->
                                                <h1 class="text-dark mb-5 fw-boldest">Startup</h1>
                                                <!--end::Title-->

                                                <!--begin::Description-->
                                                <div class="text-gray-400 fw-semibold mb-5">
                                                    Best Settings for Startups                                                 
                                                </div>
                                                <!--end::Description-->

                                                <!--begin::Price-->
                                                <div class="text-center">
                                                    <span class="mb-2 text-primary">$</span>

                                                    <span class="fs-3x fw-bold text-primary" data-kt-plan-price-month="99" data-kt-plan-price-annual="999">
                                                        99                                                    </span>
                                                    
                                                    <span class="fs-7 fw-semibold opacity-50" data-kt-plan-price-month="/ Mon" data-kt-plan-price-annual="/ Ann"> 
                                                        / Mon                                                    </span>
                                                </div>
                                                <!--end::Price-->
                                            </div>
                                            <!--end::Heading-->

                                            <!--begin::Features-->
                                            <div class="w-100 mb-10">  
                                                                                                    <!--begin::Item-->                                               
                                                    <div class="d-flex flex-stack mb-5">             
                                                                                                                    <span class="fw-semibold fs-6 text-gray-800 text-start pe-3">
                                                                Up to 10 Active Users                                                            </span> 
                                                            <i class="ki-outline ki-check-circle fs-1 text-success"></i>                                                                                                                                                                  
                                                    </div>
                                                    <!--end::Item--> 
                                                                                                    <!--begin::Item-->                                               
                                                    <div class="d-flex flex-stack mb-5">             
                                                                                                                    <span class="fw-semibold fs-6 text-gray-800 text-start pe-3">
                                                                Up to 30 Project Integrations                                                            </span> 
                                                            <i class="ki-outline ki-check-circle fs-1 text-success"></i>                                                                                                                                                                  
                                                    </div>
                                                    <!--end::Item--> 
                                                                                                    <!--begin::Item-->                                               
                                                    <div class="d-flex flex-stack mb-5">             
                                                                                                                    <span class="fw-semibold fs-6 text-gray-800">
                                                                Keen Analytics Platform                                                            </span> 
                                                            <i class="ki-outline ki-cross-circle fs-1"></i>                                                                                                                                                                  
                                                    </div>
                                                    <!--end::Item--> 
                                                                                                    <!--begin::Item-->                                               
                                                    <div class="d-flex flex-stack mb-5">             
                                                                                                                    <span class="fw-semibold fs-6 text-gray-800">
                                                                Targets Timelines & Files                                                            </span> 
                                                            <i class="ki-outline ki-cross-circle fs-1"></i>                                                                                                                                                                  
                                                    </div>
                                                    <!--end::Item--> 
                                                                                                    <!--begin::Item-->                                               
                                                    <div class="d-flex flex-stack ">             
                                                                                                                    <span class="fw-semibold fs-6 text-gray-800">
                                                                Unlimited Projects                                                            </span> 
                                                            <i class="ki-outline ki-cross-circle fs-1"></i>                                                                                                                                                                  
                                                    </div>
                                                    <!--end::Item--> 
                                                        
                                            </div>
                                            <!--end::Features-->         

                                            <!--begin::Select-->
                                            <a href="#" class="btn btn-primary">Select</a>
                                            <!--end::Select-->
                                        </div>
                                        <!--end::Option-->
                                    </div>
                                </div>
                                <!--end::Col-->
                                                                                                                <!--begin::Col-->
                                <div class="col-xl-4">
                                    <div class="d-flex h-100 align-items-center">
                                        <!--begin::Option-->
                                        <div class="w-100 d-flex flex-column flex-center rounded-3 bg-primary py-20 px-10">
                                            <!--begin::Heading-->
                                            <div class="mb-7 text-center">
                                                <!--begin::Title-->
                                                <h1 class="text-white mb-5 fw-boldest">Business</h1>
                                                <!--end::Title-->

                                                <!--begin::Description-->
                                                <div class="text-white opacity-75 fw-semibold mb-5">
                                                    Best Settings for Business                                                 
                                                </div>
                                                <!--end::Description-->

                                                <!--begin::Price-->
                                                <div class="text-center">
                                                    <span class="mb-2 text-white">$</span>

                                                    <span class="fs-3x fw-bold text-white" data-kt-plan-price-month="199" data-kt-plan-price-annual="1999">
                                                        199                                                    </span>
                                                    
                                                    <span class="fs-7 fw-semibold text-white opacity-75" data-kt-plan-price-month="/ Mon" data-kt-plan-price-annual="/ Ann"> 
                                                        / Mon                                                    </span>
                                                </div>
                                                <!--end::Price-->
                                            </div>
                                            <!--end::Heading-->

                                            <!--begin::Features-->
                                            <div class="w-100 mb-10">  
                                                                                                    <!--begin::Item-->                                               
                                                    <div class="d-flex flex-stack mb-5">             
                                                                                                                    <span class="fw-semibold fs-6 text-white opacity-75 text-start pe-3">
                                                                Up to 10 Active Users                                                            </span> 
                                                            <i class="ki-outline ki-check-circle fs-1 text-white"></i>                                                                                                                                                                  
                                                    </div>
                                                    <!--end::Item--> 
                                                                                                    <!--begin::Item-->                                               
                                                    <div class="d-flex flex-stack mb-5">             
                                                                                                                    <span class="fw-semibold fs-6 text-white opacity-75 text-start pe-3">
                                                                Up to 30 Project Integrations                                                            </span> 
                                                            <i class="ki-outline ki-check-circle fs-1 text-white"></i>                                                                                                                                                                  
                                                    </div>
                                                    <!--end::Item--> 
                                                                                                    <!--begin::Item-->                                               
                                                    <div class="d-flex flex-stack mb-5">             
                                                                                                                    <span class="fw-semibold fs-6 text-white opacity-75 text-start pe-3">
                                                                Keen Analytics Platform                                                            </span> 
                                                            <i class="ki-outline ki-check-circle fs-1 text-white"></i>                                                                                                                                                                  
                                                    </div>
                                                    <!--end::Item--> 
                                                                                                    <!--begin::Item-->                                               
                                                    <div class="d-flex flex-stack mb-5">             
                                                                                                                    <span class="fw-semibold fs-6 text-white opacity-75 text-start pe-3">
                                                                Targets Timelines & Files                                                            </span> 
                                                            <i class="ki-outline ki-check-circle fs-1 text-white"></i>                                                                                                                                                                  
                                                    </div>
                                                    <!--end::Item--> 
                                                                                                    <!--begin::Item-->                                               
                                                    <div class="d-flex flex-stack ">             
                                                                                                                    <span class="fw-semibold fs-6 text-white opacity-75">
                                                                Unlimited Projects                                                            </span> 
                                                            <i class="ki-outline ki-cross-circle fs-1 text-white"></i>                                                                                                                                                                  
                                                    </div>
                                                    <!--end::Item--> 
                                                        
                                            </div>
                                            <!--end::Features-->         

                                            <!--begin::Select-->
                                            <a href="#" class="btn btn-color-primary btn-active-light-primary btn-light">Select</a>
                                            <!--end::Select-->
                                        </div>
                                        <!--end::Option-->
                                    </div>
                                </div>
                                <!--end::Col-->
                                                                                                                <!--begin::Col-->
                                <div class="col-xl-4">
                                    <div class="d-flex h-100 align-items-center">
                                        <!--begin::Option-->
                                        <div class="w-100 d-flex flex-column flex-center rounded-3 bg-body py-15 px-10">
                                            <!--begin::Heading-->
                                            <div class="mb-7 text-center">
                                                <!--begin::Title-->
                                                <h1 class="text-dark mb-5 fw-boldest">Enterprise</h1>
                                                <!--end::Title-->

                                                <!--begin::Description-->
                                                <div class="text-gray-400 fw-semibold mb-5">
                                                    Best Settings for Enterprise                                                 
                                                </div>
                                                <!--end::Description-->

                                                <!--begin::Price-->
                                                <div class="text-center">
                                                    <span class="mb-2 text-primary">$</span>

                                                    <span class="fs-3x fw-bold text-primary" data-kt-plan-price-month="999" data-kt-plan-price-annual="9999">
                                                        999                                                    </span>
                                                    
                                                    <span class="fs-7 fw-semibold opacity-50" data-kt-plan-price-month="/ Mon" data-kt-plan-price-annual="/ Ann"> 
                                                        / Mon                                                    </span>
                                                </div>
                                                <!--end::Price-->
                                            </div>
                                            <!--end::Heading-->

                                            <!--begin::Features-->
                                            <div class="w-100 mb-10">  
                                                                                                    <!--begin::Item-->                                               
                                                    <div class="d-flex flex-stack mb-5">             
                                                                                                                    <span class="fw-semibold fs-6 text-gray-800 text-start pe-3">
                                                                Up to 10 Active Users                                                            </span> 
                                                            <i class="ki-outline ki-check-circle fs-1 text-success"></i>                                                                                                                                                                  
                                                    </div>
                                                    <!--end::Item--> 
                                                                                                    <!--begin::Item-->                                               
                                                    <div class="d-flex flex-stack mb-5">             
                                                                                                                    <span class="fw-semibold fs-6 text-gray-800 text-start pe-3">
                                                                Up to 30 Project Integrations                                                            </span> 
                                                            <i class="ki-outline ki-check-circle fs-1 text-success"></i>                                                                                                                                                                  
                                                    </div>
                                                    <!--end::Item--> 
                                                                                                    <!--begin::Item-->                                               
                                                    <div class="d-flex flex-stack mb-5">             
                                                                                                                    <span class="fw-semibold fs-6 text-gray-800 text-start pe-3">
                                                                Keen Analytics Platform                                                            </span> 
                                                            <i class="ki-outline ki-check-circle fs-1 text-success"></i>                                                                                                                                                                  
                                                    </div>
                                                    <!--end::Item--> 
                                                                                                    <!--begin::Item-->                                               
                                                    <div class="d-flex flex-stack mb-5">             
                                                                                                                    <span class="fw-semibold fs-6 text-gray-800 text-start pe-3">
                                                                Targets Timelines & Files                                                            </span> 
                                                            <i class="ki-outline ki-check-circle fs-1 text-success"></i>                                                                                                                                                                  
                                                    </div>
                                                    <!--end::Item--> 
                                                                                                    <!--begin::Item-->                                               
                                                    <div class="d-flex flex-stack ">             
                                                                                                                    <span class="fw-semibold fs-6 text-gray-800 text-start pe-3">
                                                                Unlimited Projects                                                            </span> 
                                                            <i class="ki-outline ki-check-circle fs-1 text-success"></i>                                                                                                                                                                  
                                                    </div>
                                                    <!--end::Item--> 
                                                        
                                            </div>
                                            <!--end::Features-->         

                                            <!--begin::Select-->
                                            <a href="#" class="btn btn-primary">Select</a>
                                            <!--end::Select-->
                                        </div>
                                        <!--end::Option-->
                                    </div>
                                </div>
                                <!--end::Col-->
                                                                        </div>
                    <!--end::Row-->   
                </div>
                <!--end::Pricing-->
            </div>   
            <!--end::Plans-->  
        </div>
        <!--end::Container-->
    </div>
    <!--end::Wrapper-->

    <!--begin::Curve bottom-->
<div class="landing-curve landing-dark-color ">
    <svg viewBox="15 12 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 11C3.93573 11.3356 7.85984 11.6689 11.7725 12H1488.16C1492.1 11.6689 1496.04 11.3356 1500 11V12H1488.16C913.668 60.3476 586.282 60.6117 11.7725 12H0V11Z" fill="currentColor"></path>
     </svg>
</div>
<!--end::Curve bottom--> 
</div>
<!--end::Pricing Section-->

 

<!--begin::Testimonials Section-->
<div class="mt-20 mb-n20 position-relative z-index-2"> 
    <!--begin::Container-->
    <div class="container">
        <!--begin::Heading-->
        <div class="text-center mb-17">
            <!--begin::Title-->
            <h3 class="fs-2hx text-dark mb-5" id="clients" data-kt-scroll-offset="{default: 125, lg: 150}">What Our Clients Say</h3>
            <!--end::Title-->

            <!--begin::Description-->
            <div class="fs-5 text-muted fw-bold">
                Save  thousands to millions of bucks by using single tool <br/>
                for different amazing and great useful admin   
            </div>   
            <!--end::Description-->
        </div>  
        <!--end::Heading-->   

        <!--begin::Row-->
        <div class="row g-lg-10 mb-10 mb-lg-20"> 
            <!--begin::Col-->   
            <div class="col-lg-4">           
                <!--begin::Testimonial-->
<div class="d-flex flex-column justify-content-between h-lg-100 px-10 px-lg-0 pe-lg-10 mb-15 mb-lg-0">  
    <!--begin::Wrapper--> 
    <div class="mb-7">
        <!--begin::Rating--> 
        <div class="rating mb-6">
                            <div class="rating-label me-2 checked">
                    <i class="ki-outline ki-star fs-5"></i>                </div>
                            <div class="rating-label me-2 checked">
                    <i class="ki-outline ki-star fs-5"></i>                </div>
                            <div class="rating-label me-2 checked">
                    <i class="ki-outline ki-star fs-5"></i>                </div>
                            <div class="rating-label me-2 checked">
                    <i class="ki-outline ki-star fs-5"></i>                </div>
                            <div class="rating-label me-2 checked">
                    <i class="ki-outline ki-star fs-5"></i>                </div>
                    </div>
        <!--end::Rating-->

        <!--begin::Title-->
        <div class="fs-2 fw-bold text-dark mb-3">
            
                            This is by far the cleanest template <br/>
                            and the most well structured
                                </div>       
        <!--end::Title-->

        <!--begin::Feedback--> 
        <div class="text-gray-500 fw-semibold fs-4">
            
                            The most well thought out design theme I have ever used. The codes are up to tandard. The css styles are very clean.
                            In fact the cleanest and the most up to standard I have ever seen.
                                </div>    
        <!--end::Feedback--> 
    </div>
    <!--end::Wrapper-->     

    <!--begin::Author-->
    <div class="d-flex align-items-center">
        <!--begin::Avatar-->
        <div class="symbol symbol-circle symbol-50px me-5">
            <img src="assets/media/avatars/300-1.jpg" class="" alt=""/> 
        </div>
        <!--end::Avatar-->

        <!--begin::Name-->
        <div class="flex-grow-1">
            <a href="#" class="text-dark fw-bold text-hover-primary fs-6">Paul Miles</a>
            
            <span class="text-muted d-block fw-bold">Development Lead</span>                   
        </div>
        <!--end::Name-->                
    </div>
    <!--end::Author-->             
</div>
<!--end::Testimonial-->

 

             </div>  
            <!--end::Col-->   

            <!--begin::Col-->   
            <div class="col-lg-4">           
                <!--begin::Testimonial-->
<div class="d-flex flex-column justify-content-between h-lg-100 px-10 px-lg-0 pe-lg-10 mb-15 mb-lg-0">  
    <!--begin::Wrapper--> 
    <div class="mb-7">
        <!--begin::Rating--> 
        <div class="rating mb-6">
                            <div class="rating-label me-2 checked">
                    <i class="ki-outline ki-star fs-5"></i>                </div>
                            <div class="rating-label me-2 checked">
                    <i class="ki-outline ki-star fs-5"></i>                </div>
                            <div class="rating-label me-2 checked">
                    <i class="ki-outline ki-star fs-5"></i>                </div>
                            <div class="rating-label me-2 checked">
                    <i class="ki-outline ki-star fs-5"></i>                </div>
                            <div class="rating-label me-2 checked">
                    <i class="ki-outline ki-star fs-5"></i>                </div>
                    </div>
        <!--end::Rating-->

        <!--begin::Title-->
        <div class="fs-2 fw-bold text-dark mb-3">
            
                            This is by far the cleanest template <br/>
                            and the most well structured
                                </div>       
        <!--end::Title-->

        <!--begin::Feedback--> 
        <div class="text-gray-500 fw-semibold fs-4">
            
                            The most well thought out design theme I have ever used. The codes are up to tandard. The css styles are very clean.
                            In fact the cleanest and the most up to standard I have ever seen.
                                </div>    
        <!--end::Feedback--> 
    </div>
    <!--end::Wrapper-->     

    <!--begin::Author-->
    <div class="d-flex align-items-center">
        <!--begin::Avatar-->
        <div class="symbol symbol-circle symbol-50px me-5">
            <img src="assets/media/avatars/300-2.jpg" class="" alt=""/> 
        </div>
        <!--end::Avatar-->

        <!--begin::Name-->
        <div class="flex-grow-1">
            <a href="#" class="text-dark fw-bold text-hover-primary fs-6">Janya Clebert</a>
            
            <span class="text-muted d-block fw-bold">Development Lead</span>                   
        </div>
        <!--end::Name-->                
    </div>
    <!--end::Author-->             
</div>
<!--end::Testimonial-->

 

             </div>  
            <!--end::Col-->   

            <!--begin::Col-->   
            <div class="col-lg-4">           
                <!--begin::Testimonial-->
<div class="d-flex flex-column justify-content-between h-lg-100 px-10 px-lg-0 pe-lg-10 mb-15 mb-lg-0">  
    <!--begin::Wrapper--> 
    <div class="mb-7">
        <!--begin::Rating--> 
        <div class="rating mb-6">
                            <div class="rating-label me-2 checked">
                    <i class="ki-outline ki-star fs-5"></i>                </div>
                            <div class="rating-label me-2 checked">
                    <i class="ki-outline ki-star fs-5"></i>                </div>
                            <div class="rating-label me-2 checked">
                    <i class="ki-outline ki-star fs-5"></i>                </div>
                            <div class="rating-label me-2 checked">
                    <i class="ki-outline ki-star fs-5"></i>                </div>
                            <div class="rating-label me-2 checked">
                    <i class="ki-outline ki-star fs-5"></i>                </div>
                    </div>
        <!--end::Rating-->

        <!--begin::Title-->
        <div class="fs-2 fw-bold text-dark mb-3">
            
                            This is by far the cleanest template <br/>
                            and the most well structured
                                </div>       
        <!--end::Title-->

        <!--begin::Feedback--> 
        <div class="text-gray-500 fw-semibold fs-4">
            
                            The most well thought out design theme I have ever used. The codes are up to tandard. The css styles are very clean.
                            In fact the cleanest and the most up to standard I have ever seen.
                                </div>    
        <!--end::Feedback--> 
    </div>
    <!--end::Wrapper-->     

    <!--begin::Author-->
    <div class="d-flex align-items-center">
        <!--begin::Avatar-->
        <div class="symbol symbol-circle symbol-50px me-5">
            <img src="assets/media/avatars/300-16.jpg" class="" alt=""/> 
        </div>
        <!--end::Avatar-->

        <!--begin::Name-->
        <div class="flex-grow-1">
            <a href="#" class="text-dark fw-bold text-hover-primary fs-6">Steave Brown</a>
            
            <span class="text-muted d-block fw-bold">Development Lead</span>                   
        </div>
        <!--end::Name-->                
    </div>
    <!--end::Author-->             
</div>
<!--end::Testimonial-->

 

             </div>  
            <!--end::Col-->       
        </div>
        <!--end::Row-->   

        <!--begin::Highlight-->
        <div class="d-flex flex-stack flex-wrap flex-md-nowrap card-rounded shadow p-8 p-lg-12 mb-n5 mb-lg-n13" style="background: linear-gradient(90deg, #20AA3E 0%, #03A588 100%);">
            <!--begin::Content-->
            <div class="my-2 me-5">
                <!--begin::Title-->
                <div class="fs-1 fs-lg-2qx fw-bold text-white mb-2">
                    Start With Metronic Today, 

                    <span class="fw-normal">Speed Up Development!</span>
                </div>
                <!--end::Title-->

                <!--begin::Description-->
                <div class="fs-6 fs-lg-5 text-white fw-semibold opacity-75">
                    Join over 100,000 Professionals Community to Stay Ahead
                </div>   
                <!--end::Description-->
            </div>  
            <!--end::Content-->  

            <!--begin::Link-->
            <a href="https://1.envato.market/EA4JP" class="btn btn-lg btn-outline border-2 btn-outline-white flex-shrink-0 my-2">Purchase on Themeforest</a>  
            <!--end::Link-->
        </div>  
        <!--end::Highlight-->    
    </div>
    <!--end::Container-->
</div>
<!--end::Testimonials Section-->
 
 
<!--begin::Footer Section-->
<div class="mb-0">
    <!--begin::Curve top-->
<div class="landing-curve landing-dark-color ">
    <svg viewBox="15 -1 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M1 48C4.93573 47.6644 8.85984 47.3311 12.7725 47H1489.16C1493.1 47.3311 1497.04 47.6644 1501 48V47H1489.16C914.668 -1.34764 587.282 -1.61174 12.7725 47H1V48Z" fill="currentColor"></path>
    </svg>
</div>
<!--end::Curve top--> 
 
    <!--begin::Wrapper-->
    <div class="landing-dark-bg pt-20">
        <!--begin::Container-->   
<div class="container">
    <!--begin::Row-->
    <div class="row py-10 py-lg-20">
        <!--begin::Col-->
        <div class="col-lg-6 pe-lg-16 mb-10 mb-lg-0">
            <!--begin::Block-->
            <div class="rounded landing-dark-border p-9 mb-10">
                <!--begin::Title-->
                <h2 class="text-white">Would you need a Custom License?</h2>
                <!--end::Title-->

                <!--begin::Text-->
                <span class="fw-normal fs-4 text-gray-700">
                    Email us to 
                    
                    <a href="https://keenthemes.com/support" class="text-white opacity-50 text-hover-primary">support@keenthemes.com</a>                    
                </span>
                <!--end::Text-->
            </div>
            <!--end::Block-->

            <!--begin::Block-->
            <div class="rounded landing-dark-border p-9">
                <!--begin::Title-->
                <h2 class="text-white">How About a Custom Project?</h2>
                <!--end::Title-->

                <!--begin::Text-->
                <span class="fw-normal fs-4 text-gray-700">
                    Use Our Custom Development Service.  
                    
                    <a href="pages/user-profile/overview.php" class="text-white opacity-50 text-hover-primary">Click to Get a Quote</a>                    
                </span>
                <!--end::Text-->
            </div>
            <!--end::Block-->
        </div>
        <!--end::Col-->

        <!--begin::Col-->
        <div class="col-lg-6 ps-lg-16">
            <!--begin::Navs-->
            <div class="d-flex justify-content-center">
                <!--begin::Links-->
                <div class="d-flex fw-semibold flex-column me-20">
                    <!--begin::Subtitle-->
                    <h4 class="fw-bold text-gray-400 mb-6">More for Metronic</h4>
                    <!--end::Subtitle-->

                    <!--begin::Link-->
                    <a href="https://keenthemes.com/faqs" class="text-white opacity-50 text-hover-primary fs-5 mb-6">FAQ</a>  
                    <!--end::Link-->  

                    <!--begin::Link-->
                    <a href="https://preview.keenthemes.com/html/metronic/docs" class="text-white opacity-50 text-hover-primary fs-5 mb-6">Documentaions</a>  
                    <!--end::Link-->  

                    <!--begin::Link-->
                    <a href="https://www.youtube.com/c/KeenThemesTuts/videos" class="text-white opacity-50 text-hover-primary fs-5 mb-6">Video Tuts</a>  
                    <!--end::Link--> 

                    <!--begin::Link-->
                    <a href="https://preview.keenthemes.com/html/metronic/docs/getting-started/changelog" class="text-white opacity-50 text-hover-primary fs-5 mb-6">Changelog</a>  
                    <!--end::Link--> 

                    <!--begin::Link-->
                    <a href="https://devs.keenthemes.com/" class="text-white opacity-50 text-hover-primary fs-5 mb-6">Support Forum</a>  
                    <!--end::Link--> 

                    <!--begin::Link-->
                    <a href="https://keenthemes.com/blog" class="text-white opacity-50 text-hover-primary fs-5">Blog</a>  
                    <!--end::Link-->  
                </div>
                <!--end::Links-->

                <!--begin::Links-->
                <div class="d-flex fw-semibold flex-column ms-lg-20">
                    <!--begin::Subtitle-->
                    <h4 class="fw-bold text-gray-400 mb-6">Stay Connected</h4>
                    <!--end::Subtitle-->

                    <!--begin::Link-->
                    <a href="https://www.facebook.com/keenthemes" class="mb-6">
                        <img src="assets/media/svg/brand-logos/facebook-4.svg" class="h-20px me-2" alt=""/> 

                        <span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Facebook</span>  
                    </a>  
                    <!--end::Link-->  

                    <!--begin::Link-->
                    <a href="https://github.com/KeenthemesHub" class="mb-6">
                        <img src="assets/media/svg/brand-logos/github.svg" class="h-20px me-2" alt=""/> 

                        <span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Github</span>  
                    </a> 
                    <!--end::Link-->  

                    <!--begin::Link-->
                    <a href="https://twitter.com/keenthemes" class="mb-6">
                        <img src="assets/media/svg/brand-logos/twitter.svg" class="h-20px me-2" alt=""/> 

                        <span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Twitter</span>  
                    </a>  
                    <!--end::Link--> 

                    <!--begin::Link-->
                    <a href="https://dribbble.com/keenthemes" class="mb-6">
                        <img src="assets/media/svg/brand-logos/dribbble-icon-1.svg" class="h-20px me-2" alt=""/> 

                        <span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Dribbble</span>  
                    </a> 
                    <!--end::Link--> 

                    <!--begin::Link-->
                    <a href="https://www.instagram.com/keenthemes" class="mb-6">
                        <img src="assets/media/svg/brand-logos/instagram-2-1.svg" class="h-20px me-2" alt=""/> 

                        <span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Instagram</span>  
                    </a>  
                    <!--end::Link-->                 
                </div>
                <!--end::Links-->
            </div>
            <!--end::Navs-->
        </div>
        <!--end::Col-->
    </div>
    <!--end::Row-->    
</div>
<!--end::Container-->    

        <!--begin::Separator-->
<div class="landing-dark-separator"></div>
<!--end::Separator-->

<!--begin::Container-->
<div class="container">
    <!--begin::Wrapper-->
    <div class="d-flex flex-column flex-md-row flex-stack py-7 py-lg-10">
        <!--begin::Copyright-->
        <div class="d-flex align-items-center order-2 order-md-1">
            <!--begin::Logo-->
            <a href="landing.php">
                <img alt="Logo" src="assets/media/logos/landing.svg" class="h-15px h-md-20px"/>
            </a>
            <!--end::Logo image-->

            <!--begin::Logo image-->
            <span class="mx-5 fs-6 fw-semibold text-gray-600 pt-1" href="https://keenthemes.com/">
                &copy; 2023 Keenthemes Inc.
            </span>
            <!--end::Logo image-->
        </div>
        <!--end::Copyright-->

        <!--begin::Menu-->
        <ul class="menu menu-gray-600 menu-hover-primary fw-semibold fs-6 fs-md-5 order-1 mb-5 mb-md-0">
            <li class="menu-item">
                <a href="https://keenthemes.com/" target="_blank" class="menu-link px-2">About</a>
            </li>

            <li class="menu-item mx-5">
                <a href="https://devs.keenthemes.com/" target="_blank" class="menu-link px-2">Support</a>
            </li>

            <li class="menu-item">
                <a href="#" target="_blank" class="menu-link px-2">Purchase</a>
            </li>
        </ul>
        <!--end::Menu-->
    </div>
    <!--end::Wrapper-->
</div>
<!--end::Container-->
    </div>
    <!--end::Wrapper-->
</div>
 <!--end::Footer Section-->
 
<!--begin::Scrolltop-->
<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
	<i class="ki-outline ki-arrow-up"></i></div>
<!--end::Scrolltop-->
</div>
<!--end::Root-->
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
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo1.png" class="lozad w-100 rounded"/>
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
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo2.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="index.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Sales Tracking App	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo30.png" class="lozad w-100 rounded"/>
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
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo39.png" class="lozad w-100 rounded"/>
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
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo31.png" class="lozad w-100 rounded"/>
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
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo27.png" class="lozad w-100 rounded"/>
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
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo6.png" class="lozad w-100 rounded"/>
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
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo3.png" class="lozad w-100 rounded"/>
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
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo23.png" class="lozad w-100 rounded"/>
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
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo38.png" class="lozad w-100 rounded"/>
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
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo36.png" class="lozad w-100 rounded"/>
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
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo10.png" class="lozad w-100 rounded"/>
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
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo35.png" class="lozad w-100 rounded"/>
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
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo8.png" class="lozad w-100 rounded"/>
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
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo25.png" class="lozad w-100 rounded"/>
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
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo20.png" class="lozad w-100 rounded"/>
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
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo7.png" class="lozad w-100 rounded"/>
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
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo50.png" class="lozad w-100 rounded"/>
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
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo32.png" class="lozad w-100 rounded"/>
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
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo42.png" class="lozad w-100 rounded"/>
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
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo44.png" class="lozad w-100 rounded"/>
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
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo33.png" class="lozad w-100 rounded"/>
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
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo37.png" class="lozad w-100 rounded"/>
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
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo11.png" class="lozad w-100 rounded"/>
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
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo16.png" class="lozad w-100 rounded"/>
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
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo26.png" class="lozad w-100 rounded"/>
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
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo22.png" class="lozad w-100 rounded"/>
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
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo19.png" class="lozad w-100 rounded"/>
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
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo40.png" class="lozad w-100 rounded"/>
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
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo29.png" class="lozad w-100 rounded"/>
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
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo24.png" class="lozad w-100 rounded"/>
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
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo4.png" class="lozad w-100 rounded"/>
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
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo41.png" class="lozad w-100 rounded"/>
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
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo18.png" class="lozad w-100 rounded"/>
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
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo21.png" class="lozad w-100 rounded"/>
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
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo34.png" class="lozad w-100 rounded"/>
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
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo15.png" class="lozad w-100 rounded"/>
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
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo14.png" class="lozad w-100 rounded"/>
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
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo9.png" class="lozad w-100 rounded"/>
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
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo5.png" class="lozad w-100 rounded"/>
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
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo13.png" class="lozad w-100 rounded"/>
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
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo12.png" class="lozad w-100 rounded"/>
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
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo48.png" class="lozad w-100 rounded"/>
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
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo28.png" class="lozad w-100 rounded"/>
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
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo17.png" class="lozad w-100 rounded"/>
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
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo49.png" class="lozad w-100 rounded"/>
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
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo43.png" class="lozad w-100 rounded"/>
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
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo45.png" class="lozad w-100 rounded"/>
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
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo47.png" class="lozad w-100 rounded"/>
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
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/demos/demo46.png" class="lozad w-100 rounded"/>
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
	href="dashboards/marketing.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Marketing	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/dashboards/marketing.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-md-4">
		
<!--begin::Preview-->
<a 
	href="dashboards/social.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Social	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/dashboards/social.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-md-4">
		
<!--begin::Preview-->
<a 
	href="dashboards/ecommerce.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Ecommerce	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/dashboards/ecommerce.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-md-4">
		
<!--begin::Preview-->
<a 
	href="dashboards/store-analytics.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Store-analytics	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/dashboards/store-analytics.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-md-4">
		
<!--begin::Preview-->
<a 
	href="dashboards/logistics.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Logistics	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/dashboards/logistics.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-md-4">
		
<!--begin::Preview-->
<a 
	href="dashboards/delivery.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Delivery	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/dashboards/delivery.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-md-4">
		
<!--begin::Preview-->
<a 
	href="dashboards/online-courses.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Online-courses	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/dashboards/online-courses.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-md-4">
		
<!--begin::Preview-->
<a 
	href="dashboards/school.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		School	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/dashboards/school.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-md-4">
		
<!--begin::Preview-->
<a 
	href="dashboards/crypto.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Crypto	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/dashboards/crypto.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-md-4">
		
<!--begin::Preview-->
<a 
	href="dashboards/finance-performance.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Finance-performance	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/dashboards/finance-performance.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-md-4">
		
<!--begin::Preview-->
<a 
	href="dashboards/website-analytics.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Website-analytics	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/dashboards/website-analytics.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-md-4">
		
<!--begin::Preview-->
<a 
	href="dashboards/bidding.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Bidding	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/dashboards/bidding.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-md-4">
		
<!--begin::Preview-->
<a 
	href="dashboards/podcast.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Podcast	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/dashboards/podcast.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-md-4">
		
<!--begin::Preview-->
<a 
	href="dashboards/projects.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Projects	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/dashboards/projects.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-md-4">
		
<!--begin::Preview-->
<a 
	href="dashboards/call-center.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Call-center	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/dashboards/call-center.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-md-4">
		
<!--begin::Preview-->
<a 
	href="dashboards/pos.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		POS	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/dashboards/pos.png" class="lozad w-100 rounded"/>
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
	href="apps/projects/list/list.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Projects	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/apps/projects.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
<!--begin::Preview-->
<a 
	href="apps/ecommerce/catalog/products/products.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Ecommerce	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/apps/ecommerce.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
<!--begin::Preview-->
<a 
	href="apps/customers/list/list.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Customers	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/apps/customers.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
<!--begin::Preview-->
<a 
	href="apps/subscriptions/list/list.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Subscriptions	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/apps/subscriptions.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
<!--begin::Preview-->
<a 
	href="apps/user-management/users/list/list.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		User Management	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/apps/user-management.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
<!--begin::Preview-->
<a 
	href="apps/invoices/create/main.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Invoices	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/apps/invoices.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
<!--begin::Preview-->
<a 
	href="apps/support-center/overview/main.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Support Center	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/apps/support-center.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
<!--begin::Preview-->
<a 
	href="apps/chat/private.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Chat	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/apps/chat.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
<!--begin::Preview-->
<a 
	href="apps/calendar/calendar.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Calendar	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/apps/calendar.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
<!--begin::Preview-->
<a 
	href="apps/file-manager/list/folders.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		File Manager	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/apps/file-manager.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
<!--begin::Preview-->
<a 
	href="apps/inbox/listing/listing.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Inbox	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/apps/inbox.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
<!--begin::Preview-->
<a 
	href="apps/contacts/getting-started.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Contacts	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/apps/contacts.png" class="lozad w-100 rounded"/>
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
	href="authentication/layouts/corporate/sign-in.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Corporate	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/auth-corporate.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="authentication/layouts/creative/sign-in.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Creative	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/auth-creative.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="authentication/layouts/fancy/sign-in.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Fancy	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/auth-fancy.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="authentication/layouts/overlay/sign-in.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Overlay	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/auth-overlay.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="authentication/extended/multi-steps-sign-up.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Multi-Step	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/auth-multistep.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="authentication/layouts/corporate/two-factor.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Two-Factor	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/auth-2factor.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="authentication/general/password-confirmation.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Password Changed	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/auth-passwordchanged.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="authentication/general/verify-email.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Verify Email	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/auth-verifyemail.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="authentication/general/welcome.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Welcome	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/auth-welcome.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="authentication/general/coming-soon.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Coming Soon	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/auth-comingsoon.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="authentication/general/account-deactivated.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Account Deactivated	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/auth-accountdeactivated.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="authentication/general/error-404.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		404 Page	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/auth-404.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="authentication/general/error-500.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		505 Page	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/auth-500.png" class="lozad w-100 rounded"/>
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
	href="pages/user-profile/overview.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Profile Overview	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/profile-overview.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->			</div>
			<!--end::Col-->
					
			<!--begin::Col-->
			<div class="col-lg-4">
				
<!--begin::Preview-->
<a 
	href="pages/user-profile/projects.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		User Projects	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/profile-overview.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->			</div>
			<!--end::Col-->
					
			<!--begin::Col-->
			<div class="col-lg-4">
				
<!--begin::Preview-->
<a 
	href="pages/user-profile/campaigns.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		User Campaigns	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/profile-campaigns.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->			</div>
			<!--end::Col-->
					
			<!--begin::Col-->
			<div class="col-lg-4">
				
<!--begin::Preview-->
<a 
	href="pages/user-profile/documents.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		User Documents	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/profile-documents.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->			</div>
			<!--end::Col-->
					
			<!--begin::Col-->
			<div class="col-lg-4">
				
<!--begin::Preview-->
<a 
	href="pages/user-profile/followers.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		User Followers	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/profile-followers.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->			</div>
			<!--end::Col-->
					
			<!--begin::Col-->
			<div class="col-lg-4">
				
<!--begin::Preview-->
<a 
	href="pages/user-profile/activity.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		User Activity	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/profile-activity.png" class="lozad w-100 rounded"/>
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
	href="pages/about.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		About Us	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/corporate-aboutus.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->			</div>
			<!--end::Col-->
					
			<!--begin::Col-->
			<div class="col-lg-4">
				
<!--begin::Preview-->
<a 
	href="pages/contact.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Contact Us	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/corporate-contactus.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->			</div>
			<!--end::Col-->
					
			<!--begin::Col-->
			<div class="col-lg-4">
				
<!--begin::Preview-->
<a 
	href="pages/licenses.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		License	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/corporate-license.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->			</div>
			<!--end::Col-->
					
			<!--begin::Col-->
			<div class="col-lg-4">
				
<!--begin::Preview-->
<a 
	href="pages/team.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Our Team	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/corporate-ourteam.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->			</div>
			<!--end::Col-->
					
			<!--begin::Col-->
			<div class="col-lg-4">
				
<!--begin::Preview-->
<a 
	href="pages/sitemap.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Sitemap	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/corporate-sitemap.png" class="lozad w-100 rounded"/>
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
	href="pages/social/feeds.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Activity	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/social-activity.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->			</div>
			<!--end::Col-->
					
			<!--begin::Col-->
			<div class="col-lg-4">
				
<!--begin::Preview-->
<a 
	href="pages/social/activity.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Feeds	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/social-feeds.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->			</div>
			<!--end::Col-->
					
			<!--begin::Col-->
			<div class="col-lg-4">
				
<!--begin::Preview-->
<a 
	href="pages/social/followers.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Followers	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/social-followers.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->			</div>
			<!--end::Col-->
					
			<!--begin::Col-->
			<div class="col-lg-4">
				
<!--begin::Preview-->
<a 
	href="pages/social/settings.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Settings	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/social-settings.png" class="lozad w-100 rounded"/>
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
	href="pages/faq/classic.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		FAQ Classic	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/faq-classic.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->			</div>
			<!--end::Col-->
					
			<!--begin::Col-->
			<div class="col-lg-4">
				
<!--begin::Preview-->
<a 
	href="pages/faq/extended.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		FAQ Extended	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/faq-extended.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->			</div>
			<!--end::Col-->
					
			<!--begin::Col-->
			<div class="col-lg-4">
				
<!--begin::Preview-->
<a 
	href="pages/blog/home.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Blog Home	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/blog-home.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->			</div>
			<!--end::Col-->
					
			<!--begin::Col-->
			<div class="col-lg-4">
				
<!--begin::Preview-->
<a 
	href="pages/blog/post.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Blog Post	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/blog-post.png" class="lozad w-100 rounded"/>
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
	href="account/overview.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Overview	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/account-overview.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="account/settings.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Settings	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/account-settings.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="account/billing.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Billing	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/account-billing.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="account/security.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Security	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/account-security.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="account/referrals.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Referrals	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/account-referrals.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="account/logs.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Logs	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/account-logs.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="account/api-keys.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		API Keys	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/account-apikeys.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="account/statements.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Statements	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/account-statements.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="account/billing.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Billing	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/account-billing.png" class="lozad w-100 rounded"/>
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
	href="utilities/modals/general/view-users.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		View Friends	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/modal-viewfriends.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="utilities/modals/general/upgrade-plan.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Upgrade Plan	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/modal-upgradeplan.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="utilities/modals/wizards/top-up-wallet.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Topup Wallet	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/modal-topupwallet.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="utilities/modals/general/share-earn.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Share & Earn	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/modal-shareandearn.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="utilities/modals/general/select-users.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Select User	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/modal-selectuser.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="utilities/modals/forms/bidding.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Place Bid	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/modal-placeyourbid.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="utilities/modals/wizards/offer-a-deal.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Offer Deal	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/modal-offeradeal.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="utilities/modals/forms/new-target.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		New Target	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/modal-newtarget.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="utilities/modals/forms/new-card.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		New Card	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/modal-newcard.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="utilities/modals/forms/new-address.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		New Address	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/modal-newaddress.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="utilities/modals/general/invite-friends.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Invite Friend	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/modal-invitefriend.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="utilities/modals/wizards/create-project.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Create Project	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/modal-createproject.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="utilities/modals/wizards/create-campaign.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Create Campaign	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/modal-createcampaign.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="utilities/modals/wizards/create-account.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Create Business Account	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/modal-createbusinessacc.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="utilities/modals/wizards/create-app.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Create App	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/modal-createapp.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="utilities/modals/forms/create-api-key.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Create Api Key	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/modal-createapikey.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="utilities/modals/wizards/two-factor-authentication.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		2 Factor Auth	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/modal-2factorauth.png" class="lozad w-100 rounded"/>
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
	href="utilities/wizards/horizontal.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		2 Factor Auth	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/wizard-2factorauth.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="utilities/wizards/horizontal.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Horizontal	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/wizard-horizontal.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="utilities/wizards/vertical.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Vertical	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/wizard-vertical.png" class="lozad w-100 rounded"/>
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
	href="utilities/search/users.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Search Users	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/search-users.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="utilities/search/horizontal.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Search Horizontal	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/search-horizontal.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="utilities/search/vertical.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Search Vertical	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/search-vertical.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="utilities/search/select-location.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Search Location	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/search-location.png" class="lozad w-100 rounded"/>
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
	href="widgets/charts.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Charts	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/widgets-charts.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="widgets/feeds.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Feeds	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/widgets-feeds.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="widgets/lists.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Lists	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/widgets-lists.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="widgets/mixed.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Mixed	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/widgets-mixed.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="widgets/statistics.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Statistics	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/widgets-stats.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="widgets/tables.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Tables	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/widgets-tables.png" class="lozad w-100 rounded"/>
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
	href="authentication/email/welcome-message.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Welcome	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/email-welcome.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="authentication/email/subscription-confirmed.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Subscription Confirmed	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/email-subscriptionconfirmed.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="authentication/email/reset-password.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Reset Password	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/email-resetpassword.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="authentication/email/card-declined.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Card Declined	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/email-creditcarddeclined.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="authentication/email/promo-1.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Promotion 1	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/email-promo1.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="authentication/email/promo-2.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Promotion 2	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/email-promo2.png" class="lozad w-100 rounded"/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="authentication/email/promo-3.php" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Promotion 3	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo30/assets/media/preview/prebuilts/pages/email-promo3.png" class="lozad w-100 rounded"/>
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

					
		
			
			<a class="fw-6 fw-semibold" href="index.php">
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
		
			<a class="fw-6 fw-semibold" href="index.php">
				Chartmix - Finance Team			</a>

		
			
		
			<a class="fw-6 fw-semibold" href="dashboards/marketing.php">
				Marketing Dashboard			</a>

		
			
		
			<a class="fw-6 fw-semibold" href="dashboards/social.php">
				Social Dashboard			</a>

		
			
		
			<a class="fw-6 fw-semibold" href="dashboards/ecommerce.php">
				eCommerce Dashboard			</a>

		
			
		
			<a class="fw-6 fw-semibold" href="dashboards/store-analytics.php">
				Store Analytics			</a>

										</div>
				<!--end::List-->
			</div>
			<!--end::Col-->
		
			
					<!--begin::Col-->
			<div class="col-lg-3">
				<!--begin::List-->
				<div class="d-flex flex-column gap-3 gap-lg-5">
		
			<a class="fw-6 fw-semibold" href="dashboards/logistics.php">
				Logistics			</a>

		
			
		
			<a class="fw-6 fw-semibold" href="dashboards/delivery.php">
				Delivery			</a>

		
			
		
			<a class="fw-6 fw-semibold" href="dashboards/online-courses.php">
				Online Courses			</a>

		
			
		
			<a class="fw-6 fw-semibold" href="dashboards/school.php">
				Hello Tyler			</a>

		
			
		
			<a class="fw-6 fw-semibold" href="dashboards/crypto.php">
				My Balance: 37,045$			</a>

										</div>
				<!--end::List-->
			</div>
			<!--end::Col-->
		
			
					<!--begin::Col-->
			<div class="col-lg-3">
				<!--begin::List-->
				<div class="d-flex flex-column gap-3 gap-lg-5">
		
			<a class="fw-6 fw-semibold" href="dashboards/finance-performance.php">
				Finance Performance			</a>

		
			
		
			<a class="fw-6 fw-semibold" href="dashboards/website-analytics.php">
				Website Analytics			</a>

		
			
		
			<a class="fw-6 fw-semibold" href="dashboards/bidding.php">
				Bidding Dashboard			</a>

		
			
		
			<a class="fw-6 fw-semibold" href="dashboards/podcast.php">
				Podcast Dashboard			</a>

		
			
		
			<a class="fw-6 fw-semibold" href="dashboards/projects.php">
				Projects Dashboard			</a>

										</div>
				<!--end::List-->
			</div>
			<!--end::Col-->
		
			
					<!--begin::Col-->
			<div class="col-lg-3">
				<!--begin::List-->
				<div class="d-flex flex-column gap-3 gap-lg-5">
		
			<a class="fw-6 fw-semibold" href="dashboards/call-center.php">
				Call Center			</a>

		
			
		
			<a class="fw-6 fw-semibold" href="dashboards/pos.php">
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
				
					<a class="fw-6 fw-semibold" href="authentication/layouts/corporate/sign-in.php">
						Corporate					</a>

											
				
					<a class="fw-6 fw-semibold" href="authentication/layouts/creative/sign-in.php">
						Creative					</a>

											
				
					<a class="fw-6 fw-semibold" href="authentication/layouts/fancy/sign-in.php">
						Fancy					</a>

											
				
					<a class="fw-6 fw-semibold" href="authentication/layouts/overlay/sign-in.php">
						Overlay					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->
											
									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">
				
					<a class="fw-6 fw-semibold" href="authentication/extended/multi-steps-sign-up.php">
						Multi-Step					</a>

											
				
					<a class="fw-6 fw-semibold" href="authentication/layouts/corporate/two-factor.php">
						Two-Factor					</a>

											
				
					<a class="fw-6 fw-semibold" href="authentication/general/password-confirmation.php">
						Password Changed					</a>

											
				
					<a class="fw-6 fw-semibold" href="authentication/general/verify-email.php">
						Verify Email					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->
											
									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">
				
					<a class="fw-6 fw-semibold" href="authentication/general/welcome.php">
						Welcome					</a>

											
				
					<a class="fw-6 fw-semibold" href="authentication/general/coming-soon.php">
						Coming Soon					</a>

											
				
					<a class="fw-6 fw-semibold" href="authentication/general/account-deactivated.php">
						Account Deactivated					</a>

											
				
					<a class="fw-6 fw-semibold" href="authentication/general/error-404.php">
						404 Page					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->
											
									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">
				
					<a class="fw-6 fw-semibold" href="authentication/general/error-500.php">
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
				
					<a class="fw-6 fw-semibold" href="account/overview.php">
						Overview					</a>

											
				
					<a class="fw-6 fw-semibold" href="account/settings.php">
						Settings					</a>

											
				
					<a class="fw-6 fw-semibold" href="account/billing.php">
						Billing					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->
											
									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">
				
					<a class="fw-6 fw-semibold" href="account/security.php">
						Security					</a>

											
				
					<a class="fw-6 fw-semibold" href="account/referrals.php">
						Referrals					</a>

											
				
					<a class="fw-6 fw-semibold" href="account/logs.php">
						Logs					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->
											
									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">
				
					<a class="fw-6 fw-semibold" href="account/api-keys.php">
						API Keys					</a>

											
				
					<a class="fw-6 fw-semibold" href="account/statements.php">
						Statements					</a>

											
				
					<a class="fw-6 fw-semibold" href="account/billing.php">
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
				
					<a class="fw-6 fw-semibold" href="utilities/modals/general/view-users.php">
						View Friends					</a>

											
				
					<a class="fw-6 fw-semibold" href="utilities/modals/general/upgrade-plan.php">
						Upgrade Plan					</a>

											
				
					<a class="fw-6 fw-semibold" href="utilities/modals/wizards/top-up-wallet.php">
						Topup Wallet					</a>

											
				
					<a class="fw-6 fw-semibold" href="utilities/modals/general/share-earn.php">
						Share & Earn					</a>

											
				
					<a class="fw-6 fw-semibold" href="utilities/modals/general/select-users.php">
						Select User					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->
											
									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">
				
					<a class="fw-6 fw-semibold" href="utilities/modals/forms/bidding.php">
						Place Bid					</a>

											
				
					<a class="fw-6 fw-semibold" href="utilities/modals/wizards/offer-a-deal.php">
						Offer Deal					</a>

											
				
					<a class="fw-6 fw-semibold" href="utilities/modals/forms/new-target.php">
						New Target					</a>

											
				
					<a class="fw-6 fw-semibold" href="utilities/modals/forms/new-card.php">
						New Card					</a>

											
				
					<a class="fw-6 fw-semibold" href="utilities/modals/forms/new-address.php">
						New Address					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->
											
									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">
				
					<a class="fw-6 fw-semibold" href="utilities/modals/general/invite-friends.php">
						Invite Friend					</a>

											
				
					<a class="fw-6 fw-semibold" href="utilities/modals/wizards/create-project.php">
						Create Project					</a>

											
				
					<a class="fw-6 fw-semibold" href="utilities/modals/wizards/create-campaign.php">
						Create Campaign					</a>

											
				
					<a class="fw-6 fw-semibold" href="utilities/modals/wizards/create-account.php">
						Create Business Account					</a>

											
				
					<a class="fw-6 fw-semibold" href="utilities/modals/wizards/create-app.php">
						Create App					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->
											
									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">
				
					<a class="fw-6 fw-semibold" href="utilities/modals/forms/create-api-key.php">
						Create Api Key					</a>

											
				
					<a class="fw-6 fw-semibold" href="utilities/modals/wizards/two-factor-authentication.php">
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
				
					<a class="fw-6 fw-semibold" href="utilities/wizards/horizontal.php">
						2 Factor Auth					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->
											
									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">
				
					<a class="fw-6 fw-semibold" href="utilities/wizards/horizontal.php">
						Horizontal					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->
											
									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">
				
					<a class="fw-6 fw-semibold" href="utilities/wizards/vertical.php">
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
				
					<a class="fw-6 fw-semibold" href="utilities/search/users.php">
						Search Users					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->
											
									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">
				
					<a class="fw-6 fw-semibold" href="utilities/search/horizontal.php">
						Search Horizontal					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->
											
									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">
				
					<a class="fw-6 fw-semibold" href="utilities/search/vertical.php">
						Search Vertical					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->
											
									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">
				
					<a class="fw-6 fw-semibold" href="utilities/search/select-location.php">
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
				
					<a class="fw-6 fw-semibold" href="widgets/charts.php">
						Charts					</a>

											
				
					<a class="fw-6 fw-semibold" href="widgets/feeds.php">
						Feeds					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->
											
									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">
				
					<a class="fw-6 fw-semibold" href="widgets/lists.php">
						Lists					</a>

											
				
					<a class="fw-6 fw-semibold" href="widgets/mixed.php">
						Mixed					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->
											
									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">
				
					<a class="fw-6 fw-semibold" href="widgets/statistics.php">
						Statistics					</a>

											
				
					<a class="fw-6 fw-semibold" href="widgets/tables.php">
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
				
					<a class="fw-6 fw-semibold" href="authentication/email/welcome-message.php">
						Welcome					</a>

											
				
					<a class="fw-6 fw-semibold" href="authentication/email/subscription-confirmed.php">
						Subscription Confirmed					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->
											
									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">
				
					<a class="fw-6 fw-semibold" href="authentication/email/reset-password.php">
						Reset Password					</a>

											
				
					<a class="fw-6 fw-semibold" href="authentication/email/card-declined.php">
						Card Declined					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->
											
									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">
				
					<a class="fw-6 fw-semibold" href="authentication/email/promo-1.php">
						Promotion 1					</a>

											
				
					<a class="fw-6 fw-semibold" href="authentication/email/promo-2.php">
						Promotion 2					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->
											
									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">
				
					<a class="fw-6 fw-semibold" href="authentication/email/promo-3.php">
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
				
					<a class="fw-6 fw-semibold" href="pages/user-profile/overview.php">
						Profile Overview					</a>

											
				
					<a class="fw-6 fw-semibold" href="pages/user-profile/projects.php">
						User Projects					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->
											
									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">
				
					<a class="fw-6 fw-semibold" href="pages/user-profile/campaigns.php">
						User Campaigns					</a>

											
				
					<a class="fw-6 fw-semibold" href="pages/user-profile/documents.php">
						User Documents					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->
											
									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">
				
					<a class="fw-6 fw-semibold" href="pages/user-profile/followers.php">
						User Followers					</a>

											
				
					<a class="fw-6 fw-semibold" href="pages/user-profile/activity.php">
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
				
					<a class="fw-6 fw-semibold" href="pages/about.php">
						About Us					</a>

											
				
					<a class="fw-6 fw-semibold" href="pages/contact.php">
						Contact Us					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->
											
									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">
				
					<a class="fw-6 fw-semibold" href="pages/licenses.php">
						License					</a>

											
				
					<a class="fw-6 fw-semibold" href="pages/team.php">
						Our Team					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->
											
									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">
				
					<a class="fw-6 fw-semibold" href="pages/sitemap.php">
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
				
					<a class="fw-6 fw-semibold" href="pages/social/feeds.php">
						Activity					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->
											
									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">
				
					<a class="fw-6 fw-semibold" href="pages/social/activity.php">
						Feeds					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->
											
									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">
				
					<a class="fw-6 fw-semibold" href="pages/social/followers.php">
						Followers					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->
											
									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">
				
					<a class="fw-6 fw-semibold" href="pages/social/settings.php">
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
				
					<a class="fw-6 fw-semibold" href="pages/faq/classic.php">
						FAQ Classic					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->
											
									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">
				
					<a class="fw-6 fw-semibold" href="pages/faq/extended.php">
						FAQ Extended					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->
											
									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">
				
					<a class="fw-6 fw-semibold" href="pages/blog/home.php">
						Blog Home					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->
											
									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">
				
					<a class="fw-6 fw-semibold" href="pages/blog/post.php">
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
		
			<a class="fw-6 fw-semibold" href="apps/projects/list/list.php">
				Projects			</a>

					
		
			<a class="fw-6 fw-semibold" href="apps/ecommerce/catalog/products/products.php">
				Ecommerce			</a>

					
		
			<a class="fw-6 fw-semibold" href="apps/customers/list/list.php">
				Customers			</a>

										</div>
				<!--end::List-->
			</div>
			<!--end::Col-->
					
					<!--begin::Col-->
			<div class="col-lg-3">
				<!--begin::List-->
				<div class="d-flex flex-column gap-3 gap-lg-5">
		
			<a class="fw-6 fw-semibold" href="apps/subscriptions/list/list.php">
				Subscriptions			</a>

					
		
			<a class="fw-6 fw-semibold" href="apps/user-management/users/list/list.php">
				User Management			</a>

					
		
			<a class="fw-6 fw-semibold" href="apps/invoices/create/main.php">
				Invoices			</a>

										</div>
				<!--end::List-->
			</div>
			<!--end::Col-->
					
					<!--begin::Col-->
			<div class="col-lg-3">
				<!--begin::List-->
				<div class="d-flex flex-column gap-3 gap-lg-5">
		
			<a class="fw-6 fw-semibold" href="apps/support-center/overview/main.php">
				Support Center			</a>

					
		
			<a class="fw-6 fw-semibold" href="apps/chat/private.php">
				Chat			</a>

					
		
			<a class="fw-6 fw-semibold" href="apps/calendar/calendar.php">
				Calendar			</a>

										</div>
				<!--end::List-->
			</div>
			<!--end::Col-->
					
					<!--begin::Col-->
			<div class="col-lg-3">
				<!--begin::List-->
				<div class="d-flex flex-column gap-3 gap-lg-5">
		
			<a class="fw-6 fw-semibold" href="apps/file-manager/list/folders.php">
				File Manager			</a>

					
		
			<a class="fw-6 fw-semibold" href="apps/inbox/listing/listing.php">
				Inbox			</a>

					
		
			<a class="fw-6 fw-semibold" href="apps/contacts/getting-started.php">
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

        
        <!--begin::Javascript-->
        <script>
            var hostUrl = "assets/index.php";        </script>

                    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
                            <script src="assets/plugins/global/plugins.bundle.js"></script>
                            <script src="assets/js/scripts.bundle.js"></script>
                        <!--end::Global Javascript Bundle-->
        
                    <!--begin::Vendors Javascript(used for this page only)-->
                            <script src="assets/plugins/custom/fslightbox/fslightbox.bundle.js"></script>
                            <script src="assets/plugins/custom/typedjs/typedjs.bundle.js"></script>
                        <!--end::Vendors Javascript-->
        
                    <!--begin::Custom Javascript(used for this page only)-->
                            <script src="assets/js/custom/landing.js"></script>
                            <script src="assets/js/custom/pages/pricing/general.js"></script>
                        <!--end::Custom Javascript-->
                <!--end::Javascript-->
        
            </body>
    <!--end::Body-->
</html>