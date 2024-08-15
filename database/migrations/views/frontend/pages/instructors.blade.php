@extends('frontend.mastertow')

@section('homecontent')

    <!-- page title start -->
    <div class="page-title-area bg-overlay text-center" >
        <div class="container">
            <div class="breadcrumb-inner">
                {{-- page title --}}
                <h2 class="page-title">{{ __('Instructors') }}</h2>
            </div>
        </div>
    </div>
    <!-- page title end -->

    <!-- single blog page -->
    <div class="main-blog-area pd-top-120 pd-bottom-90">
        <div class="container">
            <div class="row">
                @foreach($instructors as $instructor)
                <div class="col-lg-4 col-sm-6">
                    <div class="single-team-inner text-center">
                        <div class="thumb">
                            <img src="{{ asset($instructor->image) }}" alt="img">
                        </div>
                        <div class="details">
                            {{-- instructor details --}}
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
                <div class="col-12">
                    {{ $instructors->links() }}
                </div>

            </div>
        </div>
    </div>
    <!-- single blog page end -->
@endsection
