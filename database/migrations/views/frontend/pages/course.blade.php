@extends('frontend.mastertow')

@section('homecontent')
    <!-- page title start -->
    <div class="page-title-area bg-overlay text-center coursetitle" >
        <div class="container">
            <div class="breadcrumb-inner">
                <!-- Page Title -->
                <h2 class="page-title">{{ __('Course') }}</h2>
            </div>
        </div>
    </div>
    <!-- page title end -->
    <!--blog-area start-->
    <div class="blog-area pd-top-120 pd-bottom-120">
        <div class="container">
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
                            <!-- COMMENTS  -->
                            <h5><a href="{{ route('coursesingle') }}">{{ $course->title }}</a></h5>
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

                <div class="col-12">
                  {{ $courses->links() }}
                </div>
            </div>
        </div>
    </div>
    <!--blog-area end-->
@endsection
