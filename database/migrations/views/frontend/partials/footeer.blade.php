<style>
    /*
    * footer area background
    */
    .footer-area{
        background: var(--main-gradient);
    }
</style>

<footer class="footer-area pd-top-100" >
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="footer-widget widget text-center pd-bottom-100">
                    <a class="logo" href="{{ URL('/') }}"><img src="{{ asset(config('app.logo1')) }}" alt="#"></a>
                    <h5 class="text-white mb-5 mt-5 lh-base">{{ __("It is a modern & beautiful LMS & Online Courses Template.
                        It's Specially Designed for LMS & Online Courses.") }}</h5>
                    <a class="btn btn-white" href="#">{{ __('$14 Purchase Now') }}</a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center align-self-center">
                    <p>{{ __('Copyright @ walaazidan 2021 All rights reserved') }}</p>
                </div>
            </div>
        </div>
    </div>
</footer>
