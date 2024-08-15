@extends('frontend.mastertow')

@section('homecontent')


    <!-- page title start -->
    <div class="page-title-area bg-overlay text-center">
        <div class="container">
            <div class="breadcrumb-inner">
                <!-- page title -->
                <h2 class="page-title">{{ __('SignUp') }}</h2>
            </div>
        </div>
    </div>
    <!-- page title end -->

    <!-- signin area start -->
    <div class="signin-area pd-top-120 pd-bottom-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-8">
                    <form class="contact-form-inner bg-gray" action="{{ route('signup') }}" method="POST">
                        @csrf
                        <div class="single-input-inner">
                            <input type="text" name="first_name" placeholder="First Name" value="{{ old('first_name') }}">
                            @error('first_name')
                            <span class="text-danger">
                            {{$message}}
                        </span>
                            @enderror
                        </div>
                        <div class="single-input-inner">
                            <input type="text" name="last_name" placeholder="Last Name" value="{{ old('last_name') }}">
                            @error('last_name')
                            <span class="text-danger">
                            {{$message}}
                        </span>
                            @enderror
                        </div>
                        <div class="single-input-inner">
                            <input type="text" name="mobile" placeholder="mobile" value="{{ old('mobile') }}">
                            @error('mobile')
                            <span class="text-danger">
                            {{$message}}
                        </span>
                            @enderror
                        </div>
                        <div class="single-input-inner">
                            <input type="email" name="email" placeholder="Email" value="{{ old('email') }}">
                            @error('email')
                            <span class="text-danger">
                            {{$message}}
                        </span>
                            @enderror
                        </div>
                        <div class="single-input-inner">
                            <input type="password" name="password" placeholder="Password">
                            @error('password')
                            <span class="text-danger">
                            {{$message}}
                        </span>
                            @enderror
                        </div>
                        <div class="single-input-inner">
                            <input type="password" name="password_confirmation" placeholder="Confirm Password">
                            @error('password_confirmation')
                            <span class="text-danger">
                            {{$message}}
                        </span>
                            @enderror
                        </div>
                        <div class="btn-wrap">
                            <button class="btn btn-base" href="#">{{ __('Create Account') }}</button>
                        </div>
                        <div class="form-quote mt-4 mb-0">
                           {{ __(' Already have an account?') }}
                            <a href="{{route('signin')}}"><strong>{{ __('Signin') }}</strong></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- signin area end-->

@endsection
