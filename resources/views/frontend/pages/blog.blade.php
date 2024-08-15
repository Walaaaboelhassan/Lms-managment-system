@extends('frontend.mastertow')

@section('homecontent')

    <!-- page title start -->
    <div class="page-title-area bg-overlay text-center" >
        <div class="container">
            <div class="breadcrumb-inner">
            <!-- BLOG SECTION -->
                <h2 class="page-title">{{ __('Blog') }}</h2>
            </div>
        </div>
    </div>
    <!-- page title end -->

    <!--blog-area start-->
    <div class="blog-area pd-top-120 pd-bottom-120">
        <div class="container">
            <div class="row justify-content-center">
                @foreach($blogs as $blog)
                <div class="col-md-6">
                    <div class="single-blog-inner">
                        <div class="thumb">
                            <img src="{{ asset($blog->image) }}" alt="img">
                        </div>
                        <div class="details">
                            <!-- BLOG SINGLE HEAD -->
                            <h4><a href="{{ route('blogsingle',$blog->id) }}">{{ $blog->title }}</a></h4>
                            <p>{{ $blog->short_description }}</p>
                            <div class="blog-meta">
                                <ul>
                                    <li class="author">{{ __('Posted by: MAANLMS') }}</li>
                                    <li>{{ $blog->created_at->format('d M, Y') }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="col-12">

                        {{ $blogs->links() }}

                </div>
            </div>
        </div>
    </div>
    <!--blog-area end-->

@endsection
