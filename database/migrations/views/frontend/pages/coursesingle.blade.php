@extends('frontend.mastertow')

@section('homecontent')
    <style>
        .thumb img{
            width: 100%;
        }
        .media-left{
            width: 100px;
        }
    </style>

    <!-- page title start -->
    <div class="page-title-area bg-overlay text-center coursetitle">
        <div class="container">
            <div class="breadcrumb-inner">
                <!-- page title -->
                <h2 class="page-title">{{ __('Course Details') }}</h2>
            </div>
        </div>
    </div>
    <!-- page title end -->

    <!-- single blog page -->
    <div class="main-blog-area pd-top-120 pd-bottom-90">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-12">
                    <div class="course-details-page">
                        <div class="course-details-meta-list">
                            <div class="row">
                                <div class="col-md-4 align-self-center">
                                    <div class="media">
                                        <div class="media-left">
                                            <img src="{{ asset('public/frontend/assets/img/team/1.png')}}" alt="img">
                                        </div>
                                        <div class="media-body align-self-center">
                                            <span>{{ __('Teacher') }}</span>
                                            <!-- Adward -->
                                            <h6>{{ __('Adward Marin') }}</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5 mt-4 mt-md-0">
                                    <div class="row">
                                        <div class="col-md-6 align-self-center">
                                            <span>{{ __('Category') }}</span>
                                            <!--  Technology -->
                                            <h6>{{ $category }}</h6>
                                        </div>
                                        <div class="col-md-6 mt-4 mt-md-0 align-self-center">
                                            <span>Reviews</span>
                                            <div class="rating-inner">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mt-4 mt-md-0 align-self-center text-md-right">
                                    <div class="enrole-inner">
                                        <strong>{{ __('Free') }}</strong>
                                        <a class="btn btn-base" href="#">{{ __('Get Enroll') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="thumb">
                            <img src="{{ asset($course->image)}}" alt="img">
                        </div>
                        <div class="course-details-nav-tab text-center">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="tab1-tab" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="true"><i class="fa fa-book"></i> {{ __('Overview') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="tab2-tab" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false">
                                        <i class="fa fa-file-text-o"></i> {{ __('Course Features') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="tab3-tab" data-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="false">
                                        <i class="fa fa-graduation-cap"></i> {{ __('Teachers') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="tab4-tab" data-toggle="tab" href="#tab4" role="tab" aria-controls="tab4" aria-selected="false">
                                        <i class="fa fa-th"></i> {{ __('Projects & Resources') }}</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
                                <div class="course-details-content">
                                    <!-- Course Title -->
                                    <h4 class="title">{{ $course->title }}</h4>
                                    <p>{{ $course->description }}</p>

                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
                                <div class="course-details-content">
                                    <!-- Course Features -->
                                    <h4 class="title">{{ __('Course Features Here') }}</h4>
                                    <p> {{ __('eLearning for the learnxyz You can start and finish one of these popular courses in under a day - for free! Check out the list below. “ LearnPress WordPress LMS Plugin designed with flexible & scalable') }}</p>
                                    <div class="course-feature-area">
                                        <ul class="row">
                                            <li class="col-6">
                                                {{ __('Course Features') }}
                                            </li>
                                            <li class="col-6">
                                                <span>{{ __('12') }}</span>
                                            </li>
                                            <li class="col-6">
                                                {{ __('Quizzes') }}
                                            </li>
                                            <li class="col-6">
                                                <span>1</span>
                                            </li>
                                            <li class="col-6">
                                                {{ __('Course Duration') }}
                                            </li>
                                            <li class="col-6">
                                                <span>{{ __('3 Hours') }}</span>
                                            </li>
                                            <li class="col-6">
                                                {{ __('Skill level') }}
                                            </li>
                                            <li class="col-6">
                                                <span>{{ __('All Level') }}</span>
                                            </li>
                                            <li class="col-6">
                                                {{ __('Language') }}
                                            </li>
                                            <li class="col-6">
                                                <span>{{ __('English') }}</span>
                                            </li>
                                            <li class="col-6">
                                                {{ __('Assessments') }}
                                            </li>
                                            <li class="col-6">
                                                <span>{{ __('Yes') }}</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="single-team-inner text-center">
                                            <div class="thumb">
                                                <img src="{{ asset('public/frontend/assets/img/team/1.png')}}" alt="img">
                                            </div>
                                            <div class="details">
                                                <!-- Title  -->
                                                <h5><a href="#">{{ __('Alexandra') }}</a></h5>
                                                <p>{{ __('Teaches Communication') }}</p>
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
                                    <div class="col-md-6">
                                        <div class="single-team-inner text-center">
                                            <div class="thumb">
                                                <img src="{{ asset('public/frontend/assets/img/team/2.png')}}" alt="img">
                                            </div>
                                            <div class="details">
                                                <h5><a href="#">{{ __('Amanda') }}</a></h5>
                                                <p>{{ __('Teaches Communication') }}</p>
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
                                    <div class="col-md-6">
                                        <div class="single-team-inner text-center">
                                            <div class="thumb">
                                                <img src="{{ asset('public/frontend/assets/img/team/5.png')}}" alt="img">
                                            </div>
                                            <div class="details">
                                                <h5><a href="#">{{ __('Hexandra') }}</a></h5>
                                                <p>{{ __('Teaches Communication') }}</p>
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
                                    <div class="col-md-6">
                                        <div class="single-team-inner text-center">
                                            <div class="thumb">
                                                <img src="{{ asset('public/frontend/assets/img/team/4.png')}}" alt="img">
                                            </div>
                                            <div class="details">
                                                <h5><a href="{{ route('instructorsingle') }}">{{ __('Angela') }}</a></h5>
                                                <p>{{ __('Teaches Communication') }}</p>
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
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab4" role="tabpanel" aria-labelledby="tab4-tab">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="single-course-inner">
                                            <div class="thumb">
                                                <img src="{{ asset('public/frontend/assets/img/course/1.png')}}" alt="img">
                                                <div class="cat-area">
                                                    <a class="cat-yellow" href="#">{{ __('Art') }}</a>
                                                    <a class="cat-green" href="#">{{ __('Design') }}</a>
                                                </div>
                                            </div>
                                            <div class="details">
                                                <h5><a href="#">{{ __('Music Theory Learn student New & Fundamentals') }}</a></h5>
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
                                    <div class="col-md-6">
                                        <div class="single-course-inner">
                                            <div class="thumb">
                                                <img src="{{ asset('public/frontend/assets/img/course/2.png')}}" alt="img">
                                                <div class="cat-area">
                                                    <a class="cat-yellow" href="#">{{ __('Data') }}</a>
                                                    <a class="cat-green" href="#">{{ __('Design') }}</a>
                                                </div>
                                            </div>
                                            <div class="details">
                                                {{ __('course details') }}
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
                                    <div class="col-md-6">
                                        <div class="single-course-inner">
                                            <div class="thumb">
                                                <img src="{{ asset('public/frontend/assets/img/course/3.png')}}" alt="img">
                                                <div class="cat-area">
                                                    <a class="cat-yellow" href="#">{{ __('Ui/Ux') }}</a>
                                                    <a class="cat-green" href="#">{{ __('Design') }}</a>
                                                </div>
                                            </div>
                                            <div class="details">
                                                <!-- course details -->
                                                <h5><a href="#">{{ __('Development Theory Learn student in New Batch') }}</a></h5>
                                                <div class="meta">
                                                    <div class="row">
                                                        <div class="col-6 align-self-center">
                                                            <span><i class="fa fa-clock-o"></i>{{ __('11 Week') }}</span>
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
                                                            <span class="price">{{ __('$350.00') }}</span>
                                                        </div>
                                                        <div class="col-6 align-self-center text-right">
                                                            <a class="btn btn-border-base b-animate-3" href="#">{{ __('Details') }}</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single-course-inner">
                                            <div class="thumb">
                                                <img src="{{ asset('public/frontend/assets/img/course/4.png')}}" alt="img">
                                                <div class="cat-area">
                                                    <a class="cat-green" href="#">{{ __('Data') }}</a>
                                                    <a class="cat-yellow" href="#">{{ __('Java') }}</a>
                                                </div>
                                            </div>
                                            <div class="details">
                                                <!-- course details -->
                                                <h5><a href="#">{{ __('Computer Strategy law for all students') }}</a></h5>
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
                                                            <a class="btn btn-border-base b-animate-3" href="{{ route('coursesingle') }}">{{ __('Details') }}</a>
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
                </div>
                <!-- sidebar -->
                <div class="col-lg-4 col-12">
                    <div class="td-sidebar">
                        <div class="widget widget_search">
                            <form class="search-form">
                                <div class="form-group">
                                    <input type="text" placeholder="Search">
                                </div>
                                <button class="submit-btn" type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                        <div class="widget widget-recent-post">
                            <!-- Recent Course -->
                            <h4 class="widget-title">{{ __('Recent Course') }}</h4>
                            <ul>
                                @foreach($recentcourses as $recentcourse)
                                    <li>
                                        <div class="media">
                                            <div class="media-left">
                                                <img src="{{ asset($recentcourse->image)}}" alt="blog">
                                            </div>
                                            <div class="media-body align-self-center">
                                                <!-- course details link -->
                                                <h5 class="title"><a href="{{ route('coursesingle',$recentcourse->id) }}">{{ $recentcourse->title }}</a></h5>
                                                <div class="post-info">{{ $recentcourse->created_at->format('d M Y') }}</div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="widget widget_catagory">
                            <!-- Course Category -->
                            <h4 class="widget-title">{{ __('Course Category') }}</h4>
                            <ul class="catagory-items">
                                @foreach($coursecategories as $coursecategory)
                                <li><a href="#"><i class="fa fa-angle-right"></i>{{ $coursecategory->name }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="widget widget_tags mb-0">
                            <!-- Tags list -->
                            <h4 class="widget-title">{{ __('Tags') }}</h4>
                            <div class="tagcloud">
                                <a href="#">{{ __('Art') }}</a>
                                <a href="#">{{ __('Creative') }}</a>
                                <a href="#">{{ __('Article') }}</a>
                                <a href="#">{{ __('Designe') }}r</a>
                                <a href="#">{{ __('Portfoli') }}o</a>
                                <a href="#">{{ __('Project') }}</a>
                                <a href="#">{{ __('Personal') }}</a>
                                <a href="#">{{ __('Landing') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.sidebar -->
            </div>
            <div class="course-area1 pd-top-100">
                <!-- Related Courses -->
                <h4 class="mb-4">{{ __('Related Courses') }}</h4>
                <div class="row">
                    @foreach($courses as $course)
                        <div class="col-lg-4 col-md-6">
                            <div class="single-course-inner">
                                <div class="thumb">
                                    <img src="{{ asset($course->image)}}" alt="img">
                                    <div class="cat-area">
                                        <a class="cat-yellow" href="#">{{ __('Art') }}</a>
                                        <a class="cat-green" href="#">{{ __('Design') }}</a>
                                    </div>
                                </div>
                                <div class="details">
                                    <!-- course details -->
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
                </div>
            </div>
        </div>
    </div>
    <!-- single blog page end -->
@endsection
