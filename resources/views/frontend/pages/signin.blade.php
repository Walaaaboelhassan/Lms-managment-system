@extends('frontend.mastertow')

@section('homecontent')
    <!-- page title start -->
    <div class="page-title-area bg-overlay text-center" >
        <div class="container">
            <div class="breadcrumb-inner">
                <!-- page title -->
                <h2 class="page-title">{{ __('SignIn') }}</h2>
            </div>
        </div>
    </div>
    <!-- page title end -->

    <!-- signin area start -->
    <div class="signin-area pd-top-120 pd-bottom-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-8">
                    <form class="contact-form-inner bg-gray" action="{{ route('signin') }}" method="POST">
                        @csrf
                        <div class="single-input-inner">
                            <input type="email" name="email" placeholder="Email">
                        </div>
                        <div class="single-input-inner">
                            <input type="password" name="password" placeholder="Password">
                        </div>
                        <div class="form-quote">
                            <a href="#">{{ __("Don't have an account") }}</a>
                            <a href="{{route('signup')}}"><strong>{{ __('Signup') }}</strong></a>
                        </div>
                        <div class="btn-wrap">
                            <button type="submit" class="btn btn-base" href="#">{{ __('Sign In') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- signin area end-->

@endsection
