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
        <link rel="shortcut icon" href="../../../assets/media/logos/favicon.ico"/>

        <!--begin::Fonts(mandatory for all pages)-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700"/>        <!--end::Fonts-->

        
        
                    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
                            <link href="../../../assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css"/>
                            <link href="../../../assets/css/style.bundle.css" rel="stylesheet" type="text/css"/>
                        <!--end::Global Stylesheets Bundle-->
        
                    <!--Begin::Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'../../../../../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
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
    <body  id="kt_body"  class="app-blank" >
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
    
<!--begin::Authentication - Password reset -->
<div class="d-flex flex-column flex-lg-row flex-column-fluid">
    <!--begin::Logo-->
    <a href="../../../index.html" class="d-block d-lg-none mx-auto py-20">
        <img alt="Logo" src="../../../assets/media/logos/default.svg" class="theme-light-show h-25px"/>
        <img alt="Logo" src="../../../assets/media/logos/default-dark.svg" class="theme-dark-show h-25px"/>
    </a>    
    <!--end::Logo-->

    <!--begin::Aside-->
    <div class="d-flex flex-column flex-column-fluid flex-center w-lg-50 p-10">         
        <!--begin::Wrapper-->
        <div class="d-flex justify-content-between flex-column-fluid flex-column w-100 mw-450px">
            <!--begin::Header-->
            <div class="d-flex flex-stack py-2">
                <!--begin::Back link-->
                <div class="me-2">
                                            <a href="sign-in.html" class="btn btn-icon bg-light rounded-circle">
                            <i class="ki-outline ki-black-left fs-2 text-gray-800"></i>                        </a>   
                                 
                </div>                 
                <!--end::Back link-->   

                                
                
                                    <!--begin::Sign Up link-->
                    <div class="m-0">
                        <span class="text-gray-400 fw-bold fs-5 me-2" data-kt-translate="password-reset-head-desc">
                            Already a member ?
                        </span>

                        <a href="sign-in.html" class="link-primary fw-bold fs-5" data-kt-translate="password-reset-head-link">
                            Sign In
                        </a>       
                    </div>
                    <!--end::Sign Up link--->      
                
                                
                        
            </div>
            <!--end::Header-->
            
            <!--begin::Body-->           
            <div class="py-20">
                
<!--begin::Form-->
<form class="form w-100" novalidate="novalidate" id="kt_password_reset_form" data-kt-redirect-url="/metronic8/demo30/../demo30/authentication/layouts/fancy/new-password.html" action="#">
    <!--begin::Heading-->
    <div class="text-start mb-10">
        <!--begin::Title-->
        <h1 class="text-dark mb-3 fs-3x" data-kt-translate="password-reset-title">
            Forgot Password ?
        </h1>
        <!--end::Title-->

        <!--begin::Text-->
        <div class="text-gray-400 fw-semibold fs-6" data-kt-translate="password-reset-desc">
            Enter your email to reset your password.
        </div>
        <!--end::Link-->
    </div>
    <!--begin::Heading-->

    <!--begin::Input group-->
    <div class="fv-row mb-10">         
        <input class="form-control form-control-solid" type="email" placeholder="Email" name="email" autocomplete="off" data-kt-translate="password-reset-input-email"/>
    </div>
    <!--end::Input group-->

    <!--begin::Actions-->
    <div class="d-flex flex-stack">
        <!--begin::Link-->
        <div class="m-0">
            <button id="kt_password_reset_submit" class="btn btn-primary me-2" data-kt-translate="password-reset-submit">
                
<!--begin::Indicator label-->
<span class="indicator-label">
    Submit</span>
<!--end::Indicator label-->

<!--begin::Indicator progress-->
<span class="indicator-progress">
    Please wait...    <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
</span>
<!--end::Indicator progress-->            </button>

            <a href="sign-in.html" class="btn btn-lg btn-light-primary fw-bold" data-kt-translate="password-reset-cancel">Cancel</a>
        </div>    
        <!--end::Link-->
    </div>
    <!--end::Actions-->    
</form>
<!--end::Form-->
            </div>         
            <!--end::Body-->
                
            <!--begin::Footer-->
            <div class="m-0">             
                <!--begin::Toggle-->
                <button class="btn btn-flex btn-link rotate" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" data-kt-menu-offset="0px, 0px">
                    <img  data-kt-element="current-lang-flag" class="w-25px h-25px rounded-circle me-3" src="../../../assets/media/flags/united-states.svg" alt=""/>
                    
                    <span data-kt-element="current-lang-name" class="me-2">English</span>

                    <i class="ki-outline ki-down fs-2 text-muted rotate-180 m-0"></i>                </button>
                <!--end::Toggle-->

                <!--begin::Menu-->
                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-4" data-kt-menu="true" id="kt_auth_lang_menu">
                                            <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link d-flex px-5" data-kt-lang="English">
                                <span class="symbol symbol-20px me-4">
                                    <img data-kt-element="lang-flag" class="rounded-1" src="../../../assets/media/flags/united-states.svg" alt=""/>
                                </span>
                                <span data-kt-element="lang-name">English</span>
                            </a>
                        </div>
                        <!--end::Menu item-->
                                            <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link d-flex px-5" data-kt-lang="Spanish">
                                <span class="symbol symbol-20px me-4">
                                    <img data-kt-element="lang-flag" class="rounded-1" src="../../../assets/media/flags/spain.svg" alt=""/>
                                </span>
                                <span data-kt-element="lang-name">Spanish</span>
                            </a>
                        </div>
                        <!--end::Menu item-->
                                            <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link d-flex px-5" data-kt-lang="German">
                                <span class="symbol symbol-20px me-4">
                                    <img data-kt-element="lang-flag" class="rounded-1" src="../../../assets/media/flags/germany.svg" alt=""/>
                                </span>
                                <span data-kt-element="lang-name">German</span>
                            </a>
                        </div>
                        <!--end::Menu item-->
                                            <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link d-flex px-5" data-kt-lang="Japanese">
                                <span class="symbol symbol-20px me-4">
                                    <img data-kt-element="lang-flag" class="rounded-1" src="../../../assets/media/flags/japan.svg" alt=""/>
                                </span>
                                <span data-kt-element="lang-name">Japanese</span>
                            </a>
                        </div>
                        <!--end::Menu item-->
                                            <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link d-flex px-5" data-kt-lang="French">
                                <span class="symbol symbol-20px me-4">
                                    <img data-kt-element="lang-flag" class="rounded-1" src="../../../assets/media/flags/france.svg" alt=""/>
                                </span>
                                <span data-kt-element="lang-name">French</span>
                            </a>
                        </div>
                        <!--end::Menu item-->
                                    </div>
                <!--end::Menu-->           
            </div>
            <!--end::Footer--> 
        </div>
        <!--end::Wrapper-->    
    </div>
    <!--end::Aside-->       

    <!--begin::Body-->
    <div class="d-none d-lg-flex flex-lg-row-fluid w-50 bgi-size-cover bgi-position-y-center bgi-position-x-start bgi-no-repeat" 
        style="background-image: url(../../../assets/media/auth/bg11.png)">  
    </div>
    <!--begin::Body-->
</div>
<!--end::Authentication - Password reset--></div>
<!--end::Root-->
        
        <!--begin::Javascript-->
        <script>
            var hostUrl = "../../../assets/index.html";        </script>

                    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
                            <script src="../../../assets/plugins/global/plugins.bundle.js"></script>
                            <script src="../../../assets/js/scripts.bundle.js"></script>
                        <!--end::Global Javascript Bundle-->
        
        
                    <!--begin::Custom Javascript(used for this page only)-->
                            <script src="../../../assets/js/custom/authentication/reset-password/reset-password.js"></script>
                            <script src="../../../assets/js/custom/authentication/sign-in/i18n.js"></script>
                        <!--end::Custom Javascript-->
                <!--end::Javascript-->
        
            </body>
    <!--end::Body-->
</html>