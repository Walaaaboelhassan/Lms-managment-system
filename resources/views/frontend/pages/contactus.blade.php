@extends('frontend.mastertow')

@section('homecontent')
<style>
    /*
    * contact page thumb
    */
    .contact-page-thumb{
        background-image: url({{ asset($contactthamb) }});
    }
</style>
    <!-- page title start -->
    <div class="page-title-area bg-overlay text-center">
        <div class="container">
            <div class="breadcrumb-inner">
                {{-- CONTACT --}}
                <h2 class="page-title">{{ __('Contact') }}</h2>
            </div>
        </div>
    </div>
    <!-- page title end -->

    <!-- contact area start -->
    <div class="contact-area pd-top-110 pd-bottom-120">
        <div class="container">
            <div class="section-title text-center">
                {{--  form title --}}
                <h2 class="title">{{ __('Get in touch') }}</h2>
            </div>
            <div class="row">
                <div class="col-lg-5 col-md-6">
                    <div class="contact-page-thumb thumb"></div>
                </div>
                <div class="col-lg-7 col-md-6 align-self-center">
                    <form class="contact-form-inner  mt-5 mt-md-0" action="{{ route('contactus') }}" method="POST">
                        @csrf
                        <div class="row custom-gutters-20">
                            <div class="col-lg-6">
                                <label class="single-input-inner style-bg-border">
                                    <input type="text" name="first_name" placeholder="First Name" value="{{ old('first_name') }}">
                                    @error('first_name')
                                    <span class="text-danger">
                            {{$message}}
                        </span>
                                    @enderror
                                </label>
                            </div>
                            <div class="col-lg-6">
                                <label class="single-input-inner style-bg-border">
                                    <input type="text" name="last_name" placeholder="Last Name" value="{{ old('last_name') }}">
                                    @error('last_name')
                                    <span class="text-danger">
                            {{$message}}
                        </span>
                                    @enderror
                                </label>
                            </div>
                            <div class="col-12">
                                <label class="single-input-inner style-bg-border">
                                    <input type="email" name="email" placeholder="Email" value="{{ old('email') }}">
                                    @error('email')
                                    <span class="text-danger">
                            {{$message}}
                        </span>
                                    @enderror
                                </label>
                            </div>
                            <div class="col-12">
                                <label class="single-input-inner style-bg-border">
                                    <textarea placeholder="Message" name="message"> </textarea>
                                    @error('message')
                                    <span class="text-danger">
                            {{$message}}
                        </span>
                                    @enderror
                                </label>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-base">{{ __('Send Message') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- contact area end-->

    <div class="contact-g-map">
        <iframe src="{{ 'https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d29208.601361499546!2d90.3598076!3d23.7803374!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1589109092857!5m2!1sen!2sbd' }}"></iframe>
    </div>


@endsection
