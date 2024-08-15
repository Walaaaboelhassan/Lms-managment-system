@extends('frontend.master')

@section('main_content')

    <!-- Banner Area Start-->
    <section id="banner" class="banner-area">
        <div class="container">
            <div class="row justify-content-center justify-content-xl-start">
                <div class="col-xl-10 align-self-center">
                    <div class="banner-inner text-xl-start text-center">
                        <!-- Banner title -->
                        <h1>{{ __('MAAN LMS') }}</h1>
                        <p class="me-5">{{ __('BEST TEMPLATE FOR') }} <span>{{ __('LMS & Online Courses') }}</span></p>
                        <div class="btn-area">
                            <a class="btn btn-border-white page-scroll" href="{{ route('home') }}">{{ __('View Demos') }}</a>
                            <a class="btn btn-white me-0" href="#"> {{ __('Download Now') }} </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Area End -->


    <!-- demo Section -->
    <section id="demo" class="demo-section pd-top-140">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="section-title">
                        {{-- subtitle --}}
                        <h5 class="subtitle">{{ __('AWESOME DEMOS') }}</h5>
                        {{-- title --}}
                        <h2 class="title">{{ __('Choose Your Demos') }}</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="inner-item style-large">
                        <a href="{{ route('home') }}"><span class="thumb"><img src="{{ asset('public/frontend/demo-landing/img/1.png') }}" alt="img"></span>{{ __('Frontend') }}</a>
                        <a class="btn btn-base" href="{{ route('home') }}">{{ __('Live Demo') }}</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="inner-item style-large">
                        <a href="{{ route('admin.dashboard') }}"><span class="thumb"><img src="{{ asset('public/frontend/demo-landing/img/2.png') }}" alt="img"></span>{{ __('Admin Panel') }}</a>
                        <a class="btn btn-base" href="{{ route('admin.dashboard') }}">{{ __('Live Demo') }}</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="inner-item style-large coming-soon">
                        <a href="#"><span class="thumb"><img src="{{ asset('public/frontend/demo-landing/img/2.png') }}" alt="img"></span><span class="cm-soon-title">{{ __('XChoose Your Demos') }}</span>{{ __('More Features') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- inner Section -->
    <section id="inner" class="inner-section pd-top-130">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="section-title">
                        {{-- inner section title --}}
                        <h2 class="title">{{ __('Great Inner Pages') }}</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="inner-item inner-page-item">
                        <a href="{{ route('course') }}"><span class="thumb"><img src="{{ asset('public/frontend/demo-landing/img/course.pn') }}g" alt="img"></span>{{ __('Course') }}</a>
                        <a class="btn btn-base" href="{{ route('course') }}">{{ __('Live Demo') }}</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="inner-item inner-page-item">
                        <a href="{{ route('blog') }}"><span class="thumb"><img src="{{ asset('public/frontend/demo-landing/img/blog.png') }}" alt="img"></span>{{ __('Blog') }}</a>
                        <a class="btn btn-base" href="{{ route('blog') }}">{{ __('Live Demo') }}</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="inner-item inner-page-item">
                        <a href="{{ route('instructors') }}"><span class="thumb"><img src="{{ asset('public/frontend/demo-landing/img/team.png') }}" alt="img"></span>Team</a>
                        <a class="btn btn-base" href="{{ route('instructors') }}">{{ __('Live Demo') }}</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="inner-item inner-page-item style-none">
                        <a href="{{ route('gallery') }}"><span class="thumb"><img src="{{ asset('public/frontend/demo-landing/img/gallery.png') }}" alt="img"></span>{{ __('Gallery') }}</a>
                        <a class="btn btn-base" href="{{ route('gallery') }}">{{ __('Live Demo') }}</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="inner-item inner-page-item">
                        <a href="#"><span class="thumb"><img src="{{ asset('public/frontend/demo-landing/img/contact.png') }}" alt="img"></span>{{ __('Contact') }}</a>
                        <a class="btn btn-base" href="#">{{ __('Live Demo') }}</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="inner-item inner-page-item style-none">
                        <a href="{{ route('signin') }}"><span class="thumb"><img src="{{ asset('public/frontend/demo-landing/img/signin.png') }}" alt="img"></span>{{ __('Signin') }}</a>
                        <a class="btn btn-base" href="{{ route('signin') }}">{{ __('Live Demo') }}</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="inner-item inner-page-item style-none">
                        <a href="{{ route('signup') }}"><span class="thumb"><img src="{{ asset('public/frontend/demo-landing/img/signup.png') }}" alt="img"></span>{{ __('Signup') }}</a>
                        <a class="btn btn-base" href="{{ route('signup') }}">{{ __('Live Demo') }}</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="inner-item inner-page-item">
                        <a href="single-{{ route('blog') }}"><span class="thumb"><img src="{{ asset('public/frontend/demo-landing/img/blog-details.png') }}" alt="img"></span>{{ __('blog details') }}</a>
                        <a class="btn btn-base" href="single-{{ route('blog') }}">{{ __('Live Demo') }}</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="inner-item inner-page-item">
                        <a href="#"><span class="thumb"><img src="{{ asset('public/frontend/demo-landing/img/course-details.png') }}" alt="img"></span>{{ __('Course Details') }}</a>
                        <a class="btn btn-base" href="#">{{ __('Live Demo') }}</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="inner-item inner-page-item">
                        <a href="single-{{ route('instructors') }}"><span class="thumb"><img src="{{ asset('public/frontend/demo-landing/img/team-details.png') }}" alt="img"></span>{{ __('Team Details') }}</a>
                        <a class="btn btn-base" href="single-{{ route('instructors') }}">{{ __('Live Demo') }}</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="inner-item coming-soon">
                        <a href="#"><span class="thumb"><img src="{{ asset('public/frontend/demo-landing/img/blog.png') }}" alt="img"></span><span class="cm-soon-title">{{ __('Comming Soon') }}</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- inner Section -->
    <section id="featured" class="featured-section pd-top-87 pd-bottom-110">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="section-title">
                        {{-- inner title --}}
                        <h2 class="title">{{ __('Core Features') }}</h2>

                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="featured-item">
                        <img src="{{ asset('public/frontend/demo-landing/img/featured/3.png') }}" alt="img">
                        {{ __('Bootstrap 4+') }}
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="featured-item">
                        <img src="{{ asset('public/frontend/demo-landing/img/featured/1.png') }}" alt="img">
                        {{ __('Sass') }}
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="featured-item">
                        <img src="{{ asset('public/frontend/demo-landing/img/featured/4.png') }}" alt="img">
                        {{ __('Font-Awesome') }}
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="featured-item">
                        <img src="{{ asset('public/frontend/demo-landing/img/featured/2.png') }}" alt="img">
                        {{ __('Owl-Carousel') }}
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="featured-item">
                        <img src="{{ asset('public/frontend/demo-landing/img/featured/5.png') }}" alt="img">
                        {{ __('HTML5') }}
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="featured-item">
                        <img src="{{ asset('public/frontend/demo-landing/img/featured/6.png') }}" alt="img">
                        {{ __('CSS3') }}
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="featured-item">
                        <img src="{{ asset('public/frontend/demo-landing/img/featured/7.png') }}" alt="img">
                        {{ __('Jquery Tilt') }}
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="featured-item">
                        <img src="{{ asset('public/frontend/demo-landing/img/featured/8.png') }}" alt="img">
                        {{ __('W3C Validation') }}
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="featured-item">
                        <img src="{{ asset('public/frontend/demo-landing/img/featured/9.png') }}" alt="img">
                        {{ __('Clean Code') }}
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="featured-item">
                        <img src="{{ asset('public/frontend/demo-landing/img/featured/10.png') }}" alt="img">
                        {{ __('Magnific Popup') }}
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="featured-item">
                        <img src="{{ asset('public/frontend/demo-landing/img/featured/12.png') }}" alt="img">
                        {{ __('100% Responsive') }}
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="featured-item">
                        <img src="{{ asset('public/frontend/demo-landing/img/featured/11.png') }}" alt="img">
                        {{ __('Google Fonts') }}
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="featured-item">
                        <img src="{{ asset('public/frontend/demo-landing/img/featured/14.png') }}" alt="img">
                        {{ __('Well Documented') }}
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="featured-item">
                        <img src="{{ asset('public/frontend/demo-landing/img/featured/15.png') }}" alt="img">
                        {{ __('Counter Up') }}
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="featured-item">
                        <img src="{{ asset('public/frontend/demo-landing/img/featured/13.png') }}" alt="img">
                        {{ __('Wow Js') }}
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
