@extends('frontend.mastertow')

@section('homecontent')
    <style>
        .banner-area{
            background-image: url({{ asset('public/frontend/assets/img/banner/2.png') }});
        }
    </style>
<!-- banner start -->
<div class="banner-area banner-area-1" >
    <img class="animate-image-1 top_image_bounce" src="{{ asset('public/frontend/assets/img/banner/5.png') }}" alt="img">
    <div class="container">
        <div class="banner-slider owl-carousel">
            @foreach($banners as$banner)
            <div class="item">
                <div class="row justify-content-center">

                    <div class="col-lg-6 col-md-9 order-lg-12 align-self-center">
                        <div class="thumb banner-animate-thumb pl-lg-5" >
                            <img src="{{ asset($banner->image) }}" alt="img">
                        </div>
                    </div>
                    <div class="col-lg-6 order-lg-1 mt-5 mt-lg-0 align-self-center">
                        <div class="banner-inner style-white text-center text-lg-left">
                            {{-- EDUCATION FOR EVERYONE --}}
                            <h6 class="al-animate-1 sub-title">{{ __('EDUCATION FOR EVERYONE') }}</h6>
                            {{-- Classical Education For The Future --}}
                            <h1 class="al-animate-2 title">{{ $banner->title }}</h1>
                            <p class="al-animate-3">{{ $banner->short_description }}</p>
                            <a class="btn btn-white al-animate-4" href="{{ route('course') }}">{{ __('Read More') }}</a>
                        </div>
                    </div>

                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>
<!-- banner end -->

<!-- intro area start -->
<div class="intro-area pd-top-90">
    <div class="container">
        <div class="intro-slider owl-carousel">
            <div class="item">
                <div class="single-intro-inner bg-base style-white text-center">
                    <div class="thumb">
                        <img src="{{ asset('public/frontend/assets/img/intro/1.png') }}" alt="img">
                    </div>
                    <div class="details">
                        {{-- details --}}
                        <h5>{{ __('Apply Online') }}</h5>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="single-intro-inner bg-red style-white text-center">
                    <div class="thumb">
                        <img src="{{ asset('public/frontend/assets/img/intro/2.png') }}" alt="img">
                    </div>
                    <div class="details">
                        {{-- details --}}
                        <h5>{{ __('Press Release') }}</h5>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="single-intro-inner bg-purple style-white text-center">
                    <div class="thumb">
                        <img src="{{ asset('public/frontend/assets/img/intro/3.png') }}" alt="img">
                    </div>
                    <div class="details">
                        {{-- details --}}
                        <h5>{{ __('Online Class') }}</h5>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="single-intro-inner bg-pink style-white text-center">
                    <div class="thumb">
                        <img src="{{ asset('public/frontend/assets/img/intro/4.png') }}" alt="img">
                    </div>
                    <div class="details">
                        {{-- details --}}
                        <h5>{{ __('Scholarship') }}</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- intro area end -->

<!-- about area start -->
<div class="about-area pd-top-90 pd-bottom-90">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 order-lg-12">
                <div class="row">
                    <div class="col-md-6">
                        <div class="thumb about-thumb  wow animated zoomIn" data-wow-duration="0.8s" data-wow-delay="0.1s">
                            <img src="{{ asset('public/frontend/assets/img/about/2.png') }}" alt="img">
                        </div>
                        <div class="thumb about-thumb  wow animated zoomIn" data-wow-duration="0.8s" data-wow-delay="0.2s">
                            <img src="{{ asset('public/frontend/assets/img/about/3.png') }}" alt="img">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="thumb about-thumb  wow animated zoomIn" data-wow-duration="0.8s" data-wow-delay="0.3s">
                            <img src="{{ asset('public/frontend/assets/img/about/1.png') }}" alt="img">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-lg-1 align-self-center mt-3 mt-lg-0 pb-4 pb-lg-0">
                <div class="section-title mb-0">
                    {{--Title online education --}}
                    <h5 class="sub-title">{{ __('About EduGood') }}</h5>
                    <h2 class="title">{{ __('Welcome to Our Online Learning Center') }}</h2>
                    <p class="content">{{ __('we believe everyone should have the opportunity to create progress through technology and develop the skills of tomorrow.  paths should have and learning courses assessments, authored.') }}</p>
                    <a class="btn btn-base" href="{{ route('blog') }}">{{ __('Read More') }}</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- about area end -->

<!-- course section start -->
<div class="course-area pd-top-115 pd-bottom-90 bg-parallax">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title style-white text-md-right text-center">
                    {{-- sub-title --}}
                    <h5 class="sub-title">{{ __('New Courses') }}</h5>
                    {{-- title --}}
                    <h2 class="title">{{ __('Featured Courses') }}</h2>
                </div>
            </div>
        </div>
        <div class="course-slider slider-control-round owl-carousel">
            @foreach($courses as $course)
            <div class="item">
                <div class="single-course-inner">
                    <div class="thumb">
                        <img src="{{ asset($course->image) }}" alt="img">
                        <div class="cat-area">
                            <a class="cat-yellow" href="#">{{ __('Art') }}</a>
                            <a class="cat-green" href="#">{{ __('Design') }}</a>
                        </div>
                    </div>
                    <div class="details">
                        {{--  details --}}
                        <h5><a href="{{ route('coursesingle',$course->id) }}">{{ $course->title }}</a></h5>
                        <div class="meta">
                            <div class="row">
                                <div class="col-6 align-self-center">
                                    <span><i class="fa fa-clock-o"></i>{{ $course->duration }}</span>
                                </div>
                                <div class="col-6 align-self-center">
                                    <div class="rating-inner text-right">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="btn-area">
                            <div class="row">
                                <div class="col-6 align-self-center">
                                    <span class="price">{{ __('$') }}{{ $course->price }}</span>
                                </div>
                                <div class="col-6 align-self-center text-right">
                                    <a class="btn btn-border-base b-animate-3" href="{{ route('coursesingle',$course->id) }}">{{ __('Details') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>
<!-- course section End -->

<!-- counter start -->
<div class="counter-area pd-top-115 pd-bottom-90">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-7 col-md-11">
                <div class="section-title text-center">
                    {{-- sub-title --}}
                    <h5 class="sub-title">{{ __('Funfact') }}</h5>
                    {{-- title --}}
                    <h2 class="title">{{ __('Strength in Numbers') }}</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="single-counter-inner text-center">
                    <div class="details">
                        {{-- Download --}}
                        <h2><span class="counter">{{ __('230') }}</span> {{{ __('k') }}}</h2>
                        <p>{{ __('Downloaded') }}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-counter-inner text-center">
                    <div class="details">
                        {{-- Feedback --}}
                        <h2><span class="counter">{{ __('40') }}</span> {{ __('k') }}</h2>
                        <p>{{ __('Feedback') }}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-counter-inner text-center">
                    <div class="details">
                        {{-- worker --}}
                        <h2><span class="counter">{{ __('600') }}</span> {{ __('k') }}</h2>
                        <p>{{ __('Worker') }}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-counter-inner text-center">
                    <div class="details">
                        {{-- Contributors --}}
                        <h2><span class="counter">{{ __('230') }}</span> {{ __('k') }}</h2>
                        <p>{{ __('Contributors') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- counter end -->

<!-- video area start -->
<div class="video-area bg-overlay-rgba pd-top-110 pd-bottom-120 jarallax">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-10">
                <div class="section-title mb-2 text-center">
                    {{-- title--}}
                    <h2 class="title">{{ __('Watch Campus Life Video Tour') }}</h2>
                    <p>{{ __('We believe everyone should have the to create progress through technology and develop the skills of tomorrow. assessments, learning') }}</p>
                    <a class="video-play-btn" href="#" data-effect="mfp-zoom-in"><i class="fa fa-play"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- video area end -->

<!-- case-study start -->
<div class="case-study-area pd-top-115 pd-bottom-90">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-7 col-md-11">
                <div class="section-title text-center">
                    {{-- subtitle --}}
                    <h5 class="sub-title">{{ __('Why Choose Us') }}</h5>
                    {{-- title --}}
                    <h2 class="title">{{ __('Why study with us?') }}</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-case-study-inner">
                    <div class="icon">
                        <img src="{{ asset('public/frontend/assets/img/icon/1.png') }}" alt="img">
                    </div>
                    <div class="details">
                        {{-- course details --}}
                        <h5>{{ __('Top Paid Faculity') }}</h5>
                        <p>{{ __('we believe everyone should have the to create') }}</p>
                        <a class="read-more-text" href="#">{{ __('Read More') }} <i class="la la-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-case-study-inner">
                    <div class="icon">
                        <img src="{{ asset('public/frontend/assets/img/icon/2.png') }}" alt="img">
                    </div>
                    <div class="details">
                        <h5>{{ __('Graduation Certificate') }}</h5>
                        <p>{{ __('we believe everyone should have the to create') }}</p>
                        <a class="read-more-text" href="#">{{ __('Read More') }} <i class="la la-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-case-study-inner">
                    <div class="icon">
                        <img src="{{ asset('public/frontend/assets/img/icon/3.png') }}" alt="img">
                    </div>
                    <div class="details">
                        <h5>{{ __('Course Facilities') }}</h5>
                        <p>{{ __('we believe everyone should have the to create') }}</p>
                        <a class="read-more-text" href="#">{{ __('Read More') }} <i class="la la-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-case-study-inner">
                    <div class="icon">
                        <img src="{{ asset('public/frontend/assets/img/icon/4.png') }}" alt="img">
                    </div>
                    <div class="details">
                        <h5>{{ __('Free Materials') }}</h5>
                        <p>{{ __('we believe everyone should have the to create') }}</p>
                        <a class="read-more-text" href="#">{{ __('Read More') }} <i class="la la-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-case-study-inner">
                    <div class="icon">
                        <img src="{{ asset('public/frontend/assets/img/icon/5.png') }}" alt="img">
                    </div>
                    <div class="details">
                        <h5>{{ __('Free Books Library') }}</h5>
                        <p>{{ __('we believe everyone should have the to create') }}</p>
                        <a class="read-more-text" href="#">{{ __('Read More') }} <i class="la la-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-case-study-inner">
                    <div class="icon">
                        <img src="{{ asset('public/frontend/assets/img/icon/6.png') }}" alt="img">
                    </div>
                    <div class="details">
                        <h5>{{ __('24/7 Support') }}</h5>
                        <p>{{ __('we believe everyone should have the to create') }}</p>
                        <a class="read-more-text" href="#">{{ __('Read More') }} <i class="la la-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- case-study end -->

<!-- course section start -->
<div class="course-area bg-overlay pd-top-115 pd-bottom-90 jarallax">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-10 col-md-11">
                <div class="section-title style-white text-center">
                    {{-- course title --}}
                    <h5 class="sub-title">{{ __('Browse Categories') }}</h5>
                    {{-- course title --}}
                    <h2 class="title">{{ __('Pick a Course to Get Started') }}</h2>
                </div>
            </div>
        </div>
        <div class="lxyz-nav-tab style-white text-center">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="tab1-tab" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="true">{{ __('All Courses') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="tab2-tab" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false">{{ __('Data Science & Analytics') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="tab3-tab" data-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="false">{{ __('Computer Science') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="tab4-tab" data-toggle="tab" href="#tab4" role="tab" aria-controls="tab4" aria-selected="false">{{ __('Foreign Language') }}</a>
                </li>
            </ul>
        </div>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
                <div class="row">
                    @foreach($courses as $course)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-course-inner">
                            <div class="thumb">
                                <img src="{{ asset($course->image) }}" alt="img">
                                <div class="cat-area">
                                    <a class="cat-yellow" href="#">{{ __('Art') }}</a>
                                    <a class="cat-green" href="#">{{ __('Design') }}</a>
                                </div>
                            </div>
                            <div class="details">
                                <h5><a href="{{ route('coursesingle',$course->id) }}">{{ $course->title }}</a></h5>
                                <div class="meta">
                                    <div class="row">
                                        <div class="col-6 align-self-center">
                                            <span><i class="fa fa-clock-o"></i>{{ $course->duration }}</span>
                                        </div>
                                        <div class="col-6 align-self-center">
                                            <div class="rating-inner text-right">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn-area">
                                    <div class="row">
                                        <div class="col-6 align-self-center">
                                            <span class="price">{{ __('$') }}{{ $course->price }}</span>
                                        </div>
                                        <div class="col-6 align-self-center text-right">
                                            <a class="btn btn-border-base b-animate-3" href="{{ route('coursesingle',$course->id) }}">{{ __('Details') }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
            <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
                <div class="row">
                    @foreach($courses as $course)
                        @if($course->category_id==2)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-course-inner">
                            <div class="thumb">
                                <img src="{{ asset($course->image) }}" alt="img">
                                <div class="cat-area">
                                    <a class="cat-green" href="#">{{ __('Data') }}</a>
                                    <a class="cat-yellow" href="#">{{ __('Java') }}</a>
                                </div>
                            </div>
                            <div class="details">
                                <h5><a href="{{ route('coursesingle',$course->id) }}">{{ $course->title }}</a></h5>
                                <div class="meta">
                                    <div class="row">
                                        <div class="col-6 align-self-center">
                                            <span><i class="fa fa-clock-o"></i>{{ $course->duration }}</span>
                                        </div>
                                        <div class="col-6 align-self-center">
                                            <div class="rating-inner text-right">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn-area">
                                    <div class="row">
                                        <div class="col-6 align-self-center">
                                            <span class="price">{{ __('$') }}{{ $course->price }}</span>
                                        </div>
                                        <div class="col-6 align-self-center text-right">
                                            <a class="btn btn-border-base b-animate-3" href="{{ route('coursesingle',$course->id) }}">{{ __('Details') }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach

                </div>
            </div>
            <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
                <div class="row">
                    @foreach($courses as $course)
                        @if($course->category_id==3)
                            <div class="col-lg-4 col-md-6">
                                <div class="single-course-inner">
                                    <div class="thumb">
                                        <img src="{{ asset($course->image) }}" alt="img">
                                        <div class="cat-area">
                                            <a class="cat-green" href="#">{{ __('Data') }}</a>
                                            <a class="cat-yellow" href="#">{{ __('Java') }}</a>
                                        </div>
                                    </div>
                                    <div class="details">
                                        <h5><a href="{{ route('coursesingle',$course->id) }}">{{ $course->title }}</a></h5>
                                        <div class="meta">
                                            <div class="row">
                                                <div class="col-6 align-self-center">
                                                    <span><i class="fa fa-clock-o"></i>{{ $course->duration }}</span>
                                                </div>
                                                <div class="col-6 align-self-center">
                                                    <div class="rating-inner text-right">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btn-area">
                                            <div class="row">
                                                <div class="col-6 align-self-center">
                                                    <span class="price">{{ __('$') }}{{ $course->price }}</span>
                                                </div>
                                                <div class="col-6 align-self-center text-right">
                                                    <a class="btn btn-border-base b-animate-3" href="{{ route('coursesingle',$course->id) }}">{{ __('Details') }}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="tab4" role="tabpanel" aria-labelledby="tab4-tab">
                <div class="row">
                    @foreach($courses as $course)
                        @if($course->category_id==4)
                            <div class="col-lg-4 col-md-6">
                                <div class="single-course-inner">
                                    <div class="thumb">
                                        <img src="{{ asset($course->image) }}" alt="img">
                                        <div class="cat-area">
                                            <a class="cat-green" href="#">{{ __('Data') }}</a>
                                            <a class="cat-yellow" href="#">{{ __('Java') }}</a>
                                        </div>
                                    </div>
                                    <div class="details">
                                        <h5><a href="{{ route('coursesingle',$course->id) }}">{{ $course->title }}</a></h5>
                                        <div class="meta">
                                            <div class="row">
                                                <div class="col-6 align-self-center">
                                                    <span><i class="fa fa-clock-o"></i>{{ $course->duration }}</span>
                                                </div>
                                                <div class="col-6 align-self-center">
                                                    <div class="rating-inner text-right">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btn-area">
                                            <div class="row">
                                                <div class="col-6 align-self-center">
                                                    <span class="price">{{ __('$') }}{{ $course->price }}</span>
                                                </div>
                                                <div class="col-6 align-self-center text-right">
                                                    <a class="btn btn-border-base b-animate-3" href="{{ route('coursesingle',$course->id) }}">{{ __('Details') }}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- course section End -->

<!-- testimonial section start -->
<div class="testimonial-area pd-top-115 pd-bottom-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-10 col-md-11">
                <div class="section-title text-center">
                    <h5 class="sub-title">{{ __('Testimonials') }}</h5>
                    <h2 class="title">{{ __('Student Community Feedback') }}</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="testimonial-slider owl-carousel">
                    @foreach($feedbacks as $feedback)
                    <div class="item">
                        <div class="testimonial-content text-center">
                            <div class="author-thumb">
                                <img src="{{ asset($feedback->image) }}" alt="img">
                            </div>
                            <p>{{ $feedback->comment }} </p>
                            <div class="icon">
                                <img src="{{ asset('public/frontend/assets/img/testimonial/quote.png') }}" alt="img">
                            </div>
                            <h5><a href="#">{{ $feedback->name }}</a></h5>
                            <span class="author-meta">{{ $feedback->institute }}</span>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
<!-- testimonial section End -->

<!--team-area start-->
<div class="team-area bg-gray pd-top-115 pd-bottom-90">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title text-md-right text-center">
                    <h5 class="sub-title">{{ __('Instructors') }}</h5>
                    <h2 class="title">{{ __('World-class Instructors') }}</h2>
                </div>
            </div>
        </div>
        <div class="team-slider slider-control-round owl-carousel">
            @foreach($instructors as $instructor)
            <div class="item">
                <div class="single-team-inner text-center">
                    <div class="thumb">
                        <img src="{{ asset($instructor->image) }}" alt="img">
                    </div>
                    <div class="details">
                        <h5><a href="{{ route('instructorsingle',$instructor->id) }}">{{ $instructor->name }}</a></h5>
                        <p>{{ $instructor->designation }}</p>
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
            </div>
            @endforeach

        </div>
    </div>
</div>
<!--team-area end-->

<!--blog-area start-->
<div class="blog-area pd-top-115 pd-bottom-90">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-7 col-md-11">
                <div class="section-title text-center">
                    <h5 class="sub-title">{{ __('Latest News') }}</h5>
                    <h2 class="title">{{ __('University Latest Blog') }} </h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="single-blog-inner">
                    <div class="thumb">
                        <img src="{{ asset('public/frontend/assets/img/blog/1.png') }}" alt="img">
                    </div>
                    <div class="details">
                        <h4><a href="{{ route('blogsingle') }}">{{ __('Those Other College Expenses You Aren`t Thinking About') }}</a></h4>
                        <p>{{ __('we believe everyone should have the to create progress through and develop the skills of tomorrow. assessments, learning paths and courses authored.') }}</p>
                        <div class="blog-meta">
                            <ul>
                                <li class="author">{{ __('Posted by: EduGood') }}</li>
                                <li>{{ __('25 Jan, 2021') }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="single-blog-inner">
                    <div class="thumb">
                        <img src="{{ asset('public/frontend/assets/img/blog/2.png') }}" alt="img">
                    </div>
                    <div class="details">
                        <h4><a href="{{ route('blogsingle') }}">{{ __('Expenses You Aren`t Thinking About Those Other College') }}</a></h4>
                        <p>{{ __('We believe everyone should have the to create progress through and develop the skills of tomorrow. assessments, learning paths and courses authored.') }}</p>
                        <div class="blog-meta">
                            <ul>
                                <li class="author">{{ __('Posted by: EduGood') }}</li>
                                <li>{{ __('25 Jan, 2021') }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--blog-area end-->
@endsection
