<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    {{-- config app charset --}}
    <meta charset="{{ config('app.charset') }}">
    <meta name="description" content="{{ __('Maan - LMS & Online Courses Script') }}">
    <meta name="keywords" content="{{ __('Maan, LMS, Courses, Business, Creative') }}">
    <meta name="author" content="{{ __('MaanTheme') }}">
    <meta http-equiv="x-ua-compatible" content="{{ __('ie=edge') }}">
    <!-- favicon -->
    <link rel="icon" href="{{ asset(config('app.icon')) }}">
    <!-- App Title -->
    <title>{{config('app.name')}}</title>
    <meta name="viewport" content="{{ __('width=device-width, initial-scale=1') }}">
    <!-- =====================================
    ============   ALL CSS HERE   ============
    ====================================== -->
    <!-- bootstrap v5.0.0-beta2 -->
    <link rel="stylesheet" href="{{ asset('public/frontend/demo-landing/css/bootstrap.min.css') }}">
    <!-- style css v1.0 -->
    <link rel="stylesheet" href="{{ asset('public/frontend/demo-landing/css/style.css') }}">
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<!-- Navigation -->
{{--  include header --}}
@include('frontend.partials.header')
<style>
    /*
    *banner section in (frontend.pages.index)
    */
    #banner{
        background-image: url({{ asset('public/frontend/demo-landing/img/01.png') }});
    }
</style>
@yield('main_content')

<!-- footer area start -->
@include('frontend.partials.footeer')
<!-- footer area end -->

<!-- back-to-top end -->
<a id="back-to-top"></a>


{{-- jQuery v2.2.4 --}}
<script src="{{ asset('public/frontend/demo-landing/js/jquery.min.js') }}" type="text/javascript"></script>
{{-- Bootstrap v5.0.0-beta2 --}}
<script src="{{ asset('public/frontend/demo-landing/js/bootstrap.min.js') }}" type="text/javascript"></script>
{{-- counterUp v1.0 --}}
<script src="{{ asset('public/frontend/demo-landing/js/counter.js') }}" type="text/javascript"></script>
{{-- demos v1.0 --}}
<script src="{{ asset('public/frontend/demo-landing/js/waypoints.js') }}" type="text/javascript"></script>
{{-- Waypoint v1.0 --}}
<script src="{{ asset('public/frontend/demo-landing/js/demos.js') }}" type="text/javascript"></script>
{{-- main --}}
<script src="{{ asset('public/frontend/demo-landing/js/main.js') }}" type="text/javascript"></script>

</body>

</html>
