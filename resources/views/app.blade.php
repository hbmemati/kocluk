<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->
<head>
    <base href="">
    <title>Koçluk | @yield('title')</title>
    <meta charset="utf-8"/>
    <meta name="description"
          content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free."/>
    <meta name="keywords"
          content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta property="og:locale" content="en_US"/>
    <meta property="og:type" content="article"/>
    <meta property="og:title"
          content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular &amp; Laravel Admin Dashboard Theme"/>
    <meta property="og:url" content="https://keenthemes.com/metronic"/>
    <meta property="og:site_name" content="Keenthemes | Metronic"/>
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8"/>
    <link rel="shortcut icon" href="{{asset('assets/media/logos/favicon.ico')}}"/>
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"/>
    <!--end::Fonts-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="{{asset('assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css"/>
    <!--end::Global Stylesheets Bundle-->
    @yield('head')
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>
<!--end::Head-->
<!--begin::Body-->
<body id="kt_body" class="header-tablet-and-mobile-fixed aside-enabled">
<!--begin::Main-->
<!--begin::Root-->
<div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <div class="page d-flex flex-row flex-column-fluid">
        <!--begin::Aside-->
        <div id="kt_aside" class="aside" data-kt-drawer="true" data-kt-drawer-name="aside"
             data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
             data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start"
             data-kt-drawer-toggle="#kt_aside_mobile_toggle">
            <!--begin::Aside Toolbarl-->
            <div class="aside-toolbar flex-column-auto" id="kt_aside_toolbar">
                <!--begin::Aside user-->
                <!--begin::User-->
                <div class="aside-user d-flex align-items-sm-center justify-content-center py-5">
                    <!--begin::Symbol-->
                    <div class="symbol symbol-50px">
                        @if($user->image != null)
                            <img src="{{ asset($user->image)}}" alt=""/>
                        @else
                            <div class="symbol symbol-45px symbol-circle">
                                <span
                                    class="symbol-label bg-light-warning text-warning fs-2hx fw-bolder">{{$user->name[0]}}</span>
                            </div>
                        @endif
                    </div>
                    <!--end::Symbol-->
                    <!--begin::Wrapper-->
                    <div class="aside-user-info flex-row-fluid flex-wrap ms-5">
                        <!--begin::Section-->
                        <div class="d-flex">
                            <!--begin::Info-->
                            <div class="flex-grow-1 me-2">
                                <!--begin::Username-->
                                <a href="#"
                                   class="text-white text-hover-primary fs-6 fw-bold">{{$user->name}} {{$user->surname}}</a>
                                <!--end::Username-->
                                <!--begin::Description-->
                                <span class="text-gray-600 fw-bold d-block fs-8 mb-1">{{$user->type->name}}</span>
                                <!--end::Description-->
                                <!--begin::Label-->
                                <div class="d-flex align-items-center text-success fs-9">
                                    <span class="bullet bullet-dot bg-success me-1"></span>online
                                </div>
                                <!--end::Label-->
                            </div>
                            <!--end::Info-->

                            <!--end::User menu-->
                        </div>
                        <!--end::Section-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::User-->
                <!--end::Aside user-->
            </div>
            <!--end::Aside Toolbarl-->
            <!--begin::Aside menu-->
            <div class="aside-menu flex-column-fluid">
                <!--begin::Aside Menu-->
                <div class="hover-scroll-overlay-y px-2 my-5 my-lg-5" id="kt_aside_menu_wrapper" data-kt-scroll="true"
                     data-kt-scroll-height="auto"
                     data-kt-scroll-dependencies="{default: '#kt_aside_toolbar, #kt_aside_footer', lg: '#kt_header, #kt_aside_toolbar, #kt_aside_footer'}"
                     data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="5px">
                    <!--begin::Menu-->
                    <div
                        class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500"
                        id="#kt_aside_menu" data-kt-menu="true">
                        <div data-kt-menu-trigger="click" class="menu-item here show menu-accordion">


                            <div class="menu-item">
                                <a class="menu-link @if(request()->routeIs('index')) active @endif"
                                   href="{{route('index')}}">
										<span class="menu-icon">
											<!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
											<span class="svg-icon svg-icon-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none">
													<rect x="2" y="2" width="9" height="9" rx="2" fill="black"/>
													<rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2"
                                                          fill="black"/>
													<rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2"
                                                          fill="black"/>
													<rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2"
                                                          fill="black"/>
												</svg>
											</span>
                                            <!--end::Svg Icon-->
										</span>
                                    <span class="menu-title">Anasayfa</span>
                                </a>
                            </div>


                            @if($user->type->id == 1|| $user->type->id == 2)
                                <div class="menu-item">
                                    <a class="menu-link @if(request()->routeIs('lesson.index')) active @endif"
                                       href="{{route('lesson.index')}}">
										<span class="menu-icon">
											<!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
											<span class="svg-icon svg-icon-2">
											<!--begin::Svg Icon | path: assets/media/icons/duotune/abstract/abs027.svg-->
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.3"
                                                          d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z"
                                                          fill="black"/>
                                                    <path
                                                        d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z"
                                                        fill="black"/>
                                                    </svg>
                                                <!--end::Svg Icon-->
											</span>
                                            <!--end::Svg Icon-->
										</span>
                                        <span class="menu-title">Kurslarım</span>
                                    </a>
                                </div>
                            @endif


                            <div class="menu-item">
                                <a class="menu-link @if(request()->routeIs('user.index')) active @endif"
                                   href="{{route('user.index')}}">
										<span class="menu-icon">
											<!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
											<span class="svg-icon svg-icon-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z"
                                                            fill="black"/>
                                                        <rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4" fill="black"/>
                                                        </svg>
											</span>
                                            <!--end::Svg Icon-->
										</span>
                                    <span class="menu-title">Profil</span>
                                </a>
                            </div>

                        </div>

                    </div>
                    <!--end::Menu-->
                </div>
                <!--end::Aside Menu-->
            </div>
            <!--end::Aside menu-->
            <!--begin::Footer-->
            <div class="aside-footer flex-column-auto py-5" id="kt_aside_footer">
                <a href="{{route('logout')}}" class="btn btn-custom btn-primary w-100"
                   data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss-="click"
                >
                    <span class="btn-label">Çıkış Yap</span>

                </a>
            </div>
            <!--end::Footer-->
        </div>
        <!--end::Aside-->
        <!--begin::Wrapper-->
        <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
            <!--begin::Header-->
            <div id="kt_header" style="" class="header align-items-stretch">
                <!--begin::Brand-->
                <div class="header-brand">
                    <!--begin::Logo-->
                    <a href="../../demo8/dist/index.html">
                        <img alt="Logo" src="{{asset('assets/media/logos/logo-1-dark.svg')}}"
                             class="h-25px h-lg-25px"/>
                    </a>
                    <!--end::Logo-->
                    <!--begin::Aside minimize-->
                    <div id="kt_aside_toggle" class="btn btn-icon w-auto px-0 btn-active-color-primary aside-minimize"
                         data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body"
                         data-kt-toggle-name="aside-minimize">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr092.svg-->
                        <span class="svg-icon svg-icon-1 me-n1 minimize-default">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none">
										<rect opacity="0.3" x="8.5" y="11" width="12" height="2" rx="1" fill="black"/>
										<path
                                            d="M10.3687 11.6927L12.1244 10.2297C12.5946 9.83785 12.6268 9.12683 12.194 8.69401C11.8043 8.3043 11.1784 8.28591 10.7664 8.65206L7.84084 11.2526C7.39332 11.6504 7.39332 12.3496 7.84084 12.7474L10.7664 15.3479C11.1784 15.7141 11.8043 15.6957 12.194 15.306C12.6268 14.8732 12.5946 14.1621 12.1244 13.7703L10.3687 12.3073C10.1768 12.1474 10.1768 11.8526 10.3687 11.6927Z"
                                            fill="black"/>
										<path opacity="0.5"
                                              d="M16 5V6C16 6.55228 15.5523 7 15 7C14.4477 7 14 6.55228 14 6C14 5.44772 13.5523 5 13 5H6C5.44771 5 5 5.44772 5 6V18C5 18.5523 5.44771 19 6 19H13C13.5523 19 14 18.5523 14 18C14 17.4477 14.4477 17 15 17C15.5523 17 16 17.4477 16 18V19C16 20.1046 15.1046 21 14 21H5C3.89543 21 3 20.1046 3 19V5C3 3.89543 3.89543 3 5 3H14C15.1046 3 16 3.89543 16 5Z"
                                              fill="black"/>
									</svg>
								</span>
                        <!--end::Svg Icon-->
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr076.svg-->
                        <span class="svg-icon svg-icon-1 minimize-active">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none">
										<rect opacity="0.3" width="12" height="2" rx="1"
                                              transform="matrix(-1 0 0 1 15.5 11)" fill="black"/>
										<path
                                            d="M13.6313 11.6927L11.8756 10.2297C11.4054 9.83785 11.3732 9.12683 11.806 8.69401C12.1957 8.3043 12.8216 8.28591 13.2336 8.65206L16.1592 11.2526C16.6067 11.6504 16.6067 12.3496 16.1592 12.7474L13.2336 15.3479C12.8216 15.7141 12.1957 15.6957 11.806 15.306C11.3732 14.8732 11.4054 14.1621 11.8756 13.7703L13.6313 12.3073C13.8232 12.1474 13.8232 11.8526 13.6313 11.6927Z"
                                            fill="black"/>
										<path
                                            d="M8 5V6C8 6.55228 8.44772 7 9 7C9.55228 7 10 6.55228 10 6C10 5.44772 10.4477 5 11 5H18C18.5523 5 19 5.44772 19 6V18C19 18.5523 18.5523 19 18 19H11C10.4477 19 10 18.5523 10 18C10 17.4477 9.55228 17 9 17C8.44772 17 8 17.4477 8 18V19C8 20.1046 8.89543 21 10 21H19C20.1046 21 21 20.1046 21 19V5C21 3.89543 20.1046 3 19 3H10C8.89543 3 8 3.89543 8 5Z"
                                            fill="#C4C4C4"/>
									</svg>
								</span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Aside minimize-->
                    <!--begin::Aside toggle-->
                    <div class="d-flex align-items-center d-lg-none ms-n3 me-1" title="Show aside menu">
                        <div class="btn btn-icon btn-active-color-primary w-30px h-30px" id="kt_aside_mobile_toggle">
                            <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                            <span class="svg-icon svg-icon-1">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none">
											<path
                                                d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z"
                                                fill="black"/>
											<path opacity="0.3"
                                                  d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z"
                                                  fill="black"/>
										</svg>
									</span>
                            <!--end::Svg Icon-->
                        </div>
                    </div>
                    <!--end::Aside toggle-->
                </div>
                <!--end::Brand-->
                <!--begin::Toolbar-->
                <div class="toolbar d-flex align-items-stretch">
                    <!--begin::Toolbar container-->
                    <div
                        class="container-fluid py-6 py-lg-0 d-flex flex-column flex-lg-row align-items-lg-stretch justify-content-lg-between">
                        <!--begin::Page title-->
                        <div class="page-title d-flex justify-content-center flex-column me-5">
                            <!--begin::Title-->
                            <h1 class="d-flex flex-column text-dark fw-bolder fs-3 mb-0">@yield('title')</h1>
                            <!--end::Title-->
                            <!--begin::Breadcrumb-->
                            <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 pt-1">
                                <!--begin::Item-->

                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item">
                                    <span class="bullet bg-gray-200 w-5px h-2px"></span>
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->

                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item">
                                    <span class="bullet bg-gray-200 w-5px h-2px"></span>
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item text-dark">Anasayfa</li>
                                <!--end::Item-->
                            </ul>
                            <!--end::Breadcrumb-->
                        </div>
                        <!--end::Page title-->

                    </div>
                    <!--end::Toolbar container-->
                </div>
                <!--end::Toolbar-->
            </div>
            <!--end::Header-->
            <!--begin::Content-->
            <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                <!--begin::Post-->
                <div class="post d-flex flex-column-fluid" id="kt_post">
                    <!--begin::Container-->
                    <div id="kt_content_container" class="container-xxl">
                        <!--begin::Row-->
                        @yield('content')
                        <!--end::Row-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Post-->
            </div>
            <!--end::Content-->
            <!--begin::Footer-->
            <div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
                <!--begin::Container-->
                <div class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
                    <!--begin::Copyright-->

                    <!--end::Copyright-->
                    <!--begin::Menu-->
                    <ul class="menu menu-gray-600 menu-hover-primary fw-bold order-1">
                        <li class="menu-item">
                            <a href="https://keenthemes.com" target="_blank" class="menu-link px-2">Hakkımızda</a>
                        </li>
                        <li class="menu-item">
                            <a href="https://devs.keenthemes.com" target="_blank" class="menu-link px-2">Destek</a>
                        </li>

                    </ul>
                    <!--end::Menu-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Footer-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Page-->
</div>
<!--end::Root-->
<!--begin::Drawers-->

<!--end::Drawers-->
<!--end::Main-->
<!--begin::Engage drawers-->

<!--end::Engage drawers-->

<!--begin::Scrolltop-->
<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
    <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
    <span class="svg-icon">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
					<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)"
                          fill="black"/>
					<path
                        d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                        fill="black"/>
				</svg>
			</span>
    <!--end::Svg Icon-->
</div>
<!--end::Scrolltop-->

<!--begin::Javascript-->

<!--begin::Global Javascript Bundle(used by all pages)-->
<script src="{{asset('assets/plugins/global/plugins.bundle.js')}}"></script>
<script src="{{asset('assets/js/scripts.bundle.js')}}"></script>


@yield('js')

</body>
<!--end::Body-->
</html>
