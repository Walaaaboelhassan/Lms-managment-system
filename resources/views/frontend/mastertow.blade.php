<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @php
        $settings = settings();
    @endphp
    {{-- config app charset --}}
    <meta charset="{{ config('app.charset') }}">
    <meta name="viewport" content="{{ __('width=device-width, initial-scale=1.0') }}">
    <meta http-equiv="X-UA-Compatible" content="{{ __('IE=edge') }}" />
    <meta http-equiv="X-UA-Compatible" content="{{ __('ie=edge') }}">
    <!-- App Title -->
    <title>{{ $settings->title }}</title>
    {{-- favicon icon --}}
    <link rel=icon href="{{ $settings->favicon }}" sizes="20x20" type="image/png">

    <!-- Stylesheet -->
    <!-- vendor -->
    <link rel="stylesheet" href="{{ asset('public/frontend/assets/css/vendor.css') }}">
    {{-- style  --}}
    <link rel="stylesheet" href="{{ asset('public/frontend/assets/css/style.css') }}">
    {{-- responsive --}}
    <link rel="stylesheet" href="{{ asset('public/frontend/assets/css/responsive.css') }}">
    <style>

        .thumb{
            background-image: url({{ asset('public/frontend/assets/img/banner/3.png') }});
        }
        .course-area{
            background-image: url({{ asset('public/frontend/assets/img/bg/2.png') }});
        }
        .video-area{
            background-image: url({{ asset('public/frontend/assets/img/other/1.png') }});
        }
        .jarallax{
            background-image: url({{ asset('public/frontend/assets/img/bg/1.png') }});
        }
        .footer-area{
            background-image: url({{asset('public/frontend/assets/img/other/1.png') }});
        }
        .page-title-area{
            background-image: url({{asset('public/frontend/assets/img/bg/3.png') }});
        }


    </style>

</head>
<body>

<!-- preloader area start -->
<div class="preloader" id="preloader">
    <div class="preloader-inner">
        <div class="spinner">
            <div class="dot1"></div>
            <div class="dot2"></div>
        </div>
    </div>
</div>
<!-- preloader area end -->
<div class="body-overlay" id="body-overlay"></div>

<!-- navbar start -->
<div class="navbar-area">
    <!-- navbar top start -->
    <div class="navbar-top">
        <div class="container">
            <div class="row">
                <div class="col-md-8 align-self-center text-md-left text-center">
                    <ul>
                        <li><p><i class="fa fa-phone"></i>{{ __(' +11 0259 3654 2360') }}</p></li>
                        <li><p><i class="fa fa-envelope-o"></i> {{ __('info@website.com') }}</p></li>
                    </ul>
                </div>
                <div class="col-md-4 d-none d-md-inline-block">
                    <ul class="topbar-right social-media text-md-right text-center">
                        <li>
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-area-1 navbar-area navbar-expand-lg">
        <div class="container nav-container">
            <div class="responsive-mobile-menu">
                <button class="menu toggle-btn d-block d-lg-none" data-target="#edumint_main_menu"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-left"></span>
                    <span class="icon-right"></span>
                </button>
            </div>
            <div class="logo">
                <a href="{{ URL('/') }}"><img src="{{ asset($settings->logo) }} " alt="img"></a>
            </div>
            <div class="collapse navbar-collapse" id="edumint_main_menu">
                <ul class="navbar-nav text-right menu-open">

                    <li>
                        <a href="{{ route('home') }}">{{ __('Home') }}</a>
                    </li>
                    <li>
                        <a href="{{ route('course') }}">{{ __('Course') }}</a>
                    </li>
                    <li>
                        <a href="{{ route('instructors') }}">{{ __('Instructors') }}</a>
                    </li>
                    <li>
                        <a href="{{ route('gallery') }}">{{ __('Gallery') }}</a>
                    </li>
                    <li>
                        <a href="{{ route('blog') }}">{{ __('Blog') }}</a>
                    </li>
                    <li>
                        <a href="{{ route('contactus') }}">{{ __('Contact Us') }}</a>
                    </li>

                        <li class="menu-item-has-children">
                            <a href="#">{{ __('Sign In/Sign Up') }}</a>
                            <ul class="sub-menu">
                                <li><a href="{{ route('signin') }}">{{ __('Sign In') }}</a></li>
                                <li><a href="{{ route('signup') }}">{{ __('Sign Up') }}</a></li>
                            </ul>
                        </li>

                </ul>
            </div>
        </div>
    </nav>
</div>
<!-- navbar end -->

<!-- content start -->

@yield('homecontent')

<!-- content end -->


<!-- footer area start -->
<footer class="footer-area bg-overlay-rgba">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="widget widget_contact">
                        {{--  CONTACE US  --}}
                        <h4 class="widget-title">{{ __('Contact Us') }}</h4>
                        <ul class="details">
                            <li><i class="fa fa-map-marker"></i>{{ __('500 Treat Ave, Suite 200 San Francisco CA 94110') }}</li>
                            <li><i class="fa fa-envelope"></i>{{ __(' info.contact@gmail.com') }}</li>
                            <li><i class="fa fa-phone"></i>{{ __(' 012 345 678 9101') }}</li>
                        </ul>
                        <ul class="social-media">
                            <li>
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                            </li>
                        </ul>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="widget widget_nav_menu">
                        {{-- Categorys --}}
                        <h4 class="widget-title">{{ __('Categorys') }}</h4>
                        <ul>
                            <li><a href="{{ route('course') }}">{{ __('Branding design') }}</a></li>
                            <li><a href="{{ route('course') }}">{{ __('Ui/Ux designing') }} </a></li>
                            <li><a href="{{ route('course') }}">{{ __('Make Elements') }}</a></li>
                            <li><a href="{{ route('course') }}">{{ __('Business') }}</a></li>
                            <li><a href="{{ route('course') }}">{{ __('Graphics design') }}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="widget widget_nav_menu">
                        {{--  about institues link --}}
                        <h4 class="widget-title">{{ __('Uttara ') }}</h4>
                        <ul>
                            <li><a href="{{ route('course') }}">{{ __('Course') }}</a></li>
                            <li><a href="{{ route('instructors') }}">{{ __('Instructors') }}</a></li>
                            <li><a href="{{ route('signin') }}">{{ __('Sign In') }} </a></li>
                            <li><a href="{{ route('signup') }}">{{ __('Sign Up') }}</a></li>
                            <li><a href="{{ route('contactus') }}">{{ __('Contact') }}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 pl-lg-5 pr-5 pr-lg-0">
                    <div class="widget widget_instagram">
                        {{--   GALLERY --}}
                        <h4 class="widget-title">{{ __('Gallery') }}</h4>
                        <div class="instagram-inner">
                            <div class="row custom-gutters-10">
                                <div class="col-6">
                                    <div class="thumb">
                                        <a href="{{ route('gallery') }}"><img src="{{ asset('public/frontend/assets/img/instagram/1.png') }}" alt="img"></a>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="thumb">
                                        <a href="{{ route('gallery') }}"><img src="{{ asset('public/frontend/assets/img/instagram/2.png') }}" alt="img"></a>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="thumb">
                                        <a href="{{ route('gallery') }}"><img src="{{ asset('public/frontend/assets/img/instagram/3.png') }}" alt="img"></a>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="thumb">
                                        <a href="{{ route('gallery') }}"><img src="{{ asset('public/frontend/assets/img/instagram/4.png') }}" alt="img"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-4 align-self-center">
                    <a href="{{URL('/') }}"><img src="{{ asset($settings->logo_footer) }}" alt="img"></a>
                </div>
                <div class="col-md-8 text-md-right align-self-center mt-lg-0 mt-3">
                    <p>{{ __('© 2022 walaahassan. All Rights Reserved.') }}</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer area end -->

<!-- back to top area start -->
<div class="back-to-top">
    <span class="back-top"><i class="fa fa-angle-up"></i></span>
</div>
<!-- back to top area end -->


<!-- all plugins here -->
<script src="{{ asset('public/frontend/assets/js/vendor.js') }}"></script>
<!-- main js  -->
<script src="{{ asset('public/frontend/assets/js/main.js') }}"></script>
</body>
</html>
