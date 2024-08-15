@extends('frontend.mastertow')

@section('homecontent')


    <!-- page title start -->
    <div class="page-title-area bg-overlay text-center" >
        <div class="container">
            <div class="breadcrumb-inner">
                <!-- page title -->
                <h2 class="page-title">{{ __('Instructors Single') }}</h2>
            </div>
        </div>
    </div>
    <!-- page title end -->

    <!-- single blog page -->
    <div class="main-blog-area pd-top-120 pd-bottom-90">
        <div class="container">
            <div class="team-details-page">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="thumb">
                            <img src="{{ asset($instructor->image) }}" alt="img">
                        </div>
                    </div>
                    <div class="col-lg-8 align-self-center">
                        <div class="details">
                            {{-- Instructor name --}}
                            <h3 class="mb-1">{{ $instructor->name }}</h3>
                            <span>{{ $instructor->designation }}</span>
                            <p class="mt-3">{{$instructor->description }}</p>
                            <ul class="social-media style-base pt-4">
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
            <div class="course-area1 pd-top-100">
                {{-- Instructor course --}}
                <h4 class="mb-4">{{ __('Course by : artincorsese') }}</h4>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-course-inner">
                            <div class="thumb">
                                <img src="{{ asset('public/frontend/assets/img/course/1.png') }}" alt="img">
                                <div class="cat-area">
                                    <a class="cat-yellow" href="#">{{ __('Art') }}</a>
                                    <a class="cat-green" href="#">{{ __('Design') }}</a>
                                </div>
                            </div>
                            <div class="details">
                                {{-- course details --}}
                                <h5><a href="{{ route('coursesingle') }}">{{ __('Music Theory Learn student New & Fundamentals') }}</a></h5>
                                <div class="meta">
                                    <div class="row">
                                        <div class="col-6 align-self-center">
                                            <span><i class="fa fa-clock-o"></i>{{ __('12 Week') }}</span>
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
                                            <span class="price">{{ __('$250.00') }}</span>
                                        </div>
                                        <div class="col-6 align-self-center text-right">
                                            <a class="btn btn-border-base b-animate-3" href="#">{{ __('Details') }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-course-inner">
                            <div class="thumb">
                                <img src="{{ asset('public/frontend/assets/img/course/2.png') }}" alt="img">
                                <div class="cat-area">
                                    <a class="cat-yellow" href="#">{{ __('Data') }}</a>
                                    <a class="cat-green" href="#">{{ __('Design') }}</a>
                                </div>
                            </div>
                            <div class="details">
                                {{-- course details --}}
                                <h5><a href="{{ route('coursesingle') }}">{{ __('Fundamentals Design Theory Learn New student') }}</a></h5>
                                <div class="meta">
                                    <div class="row">
                                        <div class="col-6 align-self-center">
                                            <span><i class="fa fa-clock-o"></i>{{ __('12 Week') }}</span>
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
                                            <span class="price">{{ __('$150.00') }}</span>
                                        </div>
                                        <div class="col-6 align-self-center text-right">
                                            <a class="btn btn-border-base b-animate-3" href="#">{{ __('Details') }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-course-inner">
                            <div class="thumb">
                                <img src="{{ asset('public/frontend/assets/img/course/9.png') }}" alt="img">
                                <div class="cat-area">
                                    <a class="cat-yellow" href="#">{{ __('Marketing') }}</a>
                                    <a class="cat-green" href="#">{{ __('Digital') }}</a>
                                </div>
                            </div>
                            <div class="details">
                                {{-- course details --}}
                                <h5><a href="{{ route('coursesingle') }}">{{ __('Diploma in Teaching Skills for Educators') }}</a></h5>
                                <div class="meta">
                                    <div class="row">
                                        <div class="col-6 align-self-center">
                                            <span><i class="fa fa-clock-o"></i>{{ __('12 Week') }}</span>
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
                                            <span class="price">{{ __('$250.00') }}</span>
                                        </div>
                                        <div class="col-6 align-self-center text-right">
                                            <a class="btn btn-border-base b-animate-3" href="#">{{ __('Details') }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- single blog page end -->

@endsection
