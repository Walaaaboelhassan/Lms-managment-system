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
    <div class="page-title-area bg-overlay text-center">
        <div class="container">
            <div class="breadcrumb-inner">
                {{-- PAGE TITLE --}}
                <h2 class="page-title">{{ __('Blog Single') }}</h2>
            </div>
        </div>
    </div>
    <!-- page title end -->

    <!-- single blog page -->
    <div class="main-blog-area pd-top-120 pd-bottom-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-12">
                    <div class="single-blog-inner mb-0">
                        <div class="thumb">
                            <img src="{{ asset($blog->image) }}" alt="img">
                        </div>
                        <div class="details">
                            <div class="blog-meta border-0 mt-0 pt-0 mb-2">
                                <ul>
                                    <li class="author">{{ __('Posted by: EduGood') }}</li>
                                    <li>{{ __('25 Jan, 2021') }}</li>
                                </ul>
                            </div>
                            <h4 class="mb-0">{{ $blog->title }}</h4>
                        </div>
                    </div>
                    <div class="blog-content-inner">
                        <p>{{ $blog->description }}</p>

                        <div class="tag-and-sharea-area">
                            <div class="row">
                                <div class="col-md-6 align-self-center">
                                    <div class="tags">
                                        <strong>{{ __('Tags : ') }}</strong>
                                        <a href="#">{{ __('Chicago, ') }}</a>
                                        <a href="#">{{ __('Creative') }}</a>
                                    </div>
                                </div>
                                <div class="col-md-6 align-self-center text-md-right">
                                    <strong>{{ __('Share : ') }}</strong>
                                    <ul class="social-media style-base mt-3 mt-md-0 d-inline-block">
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
                        <form class="blog-comment-form">
                            <div class="section-title style-small mb-4 mt-5">
                                {{-- LEAVE FORM TITLE --}}
                                <h4 class="mb-0">{{ __('Leave a Comments') }}</h4>
                            </div>
                            <div class="row custom-gutters-20">
                                <div class="col-lg-6">
                                    <label class="single-input-inner style-bg-border">
                                        <input type="text" placeholder="Name">
                                    </label>
                                </div>
                                <div class="col-lg-6">
                                    <label class="single-input-inner style-bg-border">
                                        <input type="text" placeholder="Email">
                                    </label>
                                </div>
                                <div class="col-12">
                                    <label class="single-input-inner style-bg-border">
                                        <textarea placeholder="Message"></textarea>
                                    </label>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-base">{{ __('Post Comment') }}</button>
                                </div>
                            </div>
                        </form>
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
                            {{-- RECENT POST TITLE --}}
                            <h4 class="widget-title">{{ __('Recent Post') }}</h4>
                            <ul>
                                @foreach($recentblogs as $recentblog)
                                <li>
                                    <div class="media">
                                        <div class="media-left">
                                            <img src="{{ asset($recentblog->image) }}" alt="blog">
                                        </div>
                                        <div class="media-body align-self-center">
                                            {{-- recent post --}}
                                            <h5 class="title"><a href="{{ route('blogsingle',$recentblog->id) }}">{{ $recentblog->title }}</a></h5>
                                            <div class="post-info">{{ $recentblog->created_at->format('d M, Y') }}</div>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="widget widget_opening_time">
                            <h4 class="widget-title">{{ __('Twitter') }}</h4>
                            <ul class="catagory-items">
                                <li>
                                    <span class="float-left">{{ __('Monday') }}</span>
                                    <span class="float-right">{{ __('9:30 am - 6.00 pm') }}</span>
                                </li>
                                <li>
                                    <span class="float-left">{{ __('Tuesday') }}</span>
                                    <span class="float-right">{{ __('9:30 am - 6.00 pm') }}</span>
                                </li>
                                <li>
                                    <span class="float-left">{{ __('Thursday') }}</span>
                                    <span class="float-right">{{ __('9:30 am - 6.00 pm') }}</span>
                                </li>
                                <li>
                                    <span class="float-left">{{ __('Friday') }}</span>
                                    <span class="float-right">{{ __('9:30 am - 6.00 pm') }}</span>
                                </li>
                                <li>
                                    <span class="float-left">{{ __('Sunday') }}</span>
                                    <span class="float-right">{{ __('9:30 am - 6.00 pm') }}</span>
                                </li>
                                <li>
                                    <span class="float-left">{{ __('Saturday') }}</span>
                                    <span class="float-right">{{ __('9:30 am - 6.00 pm') }}</span>
                                </li>
                            </ul>
                        </div>
                        <div class="widget widget_tags mb-0">
                            <h4 class="widget-title">{{ __('Tags') }}</h4>
                            <div class="tagcloud">
                                <a href="#">{{ __('Art') }}</a>
                                <a href="#">{{ __('Creative') }}</a>
                                <a href="#">{{ __('Article') }}</a>
                                <a href="#">{{ __('Designer') }}</a>
                                <a href="#">{{ __('Portfolio') }}</a>
                                <a href="#">{{ __('Project') }}</a>
                                <a href="#">{{ __('Personal') }}</a>
                                <a href="#">{{ __('Landing') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.sidebar -->
            </div>
        </div>
    </div>
    <!-- single blog page end -->

@endsection
