<header class="navbar-area">
    <nav class="navbar navbar-expand-lg navbar-default navbar-fixed-top">
        <div class="container nav-container">
            <div class="logo">
                <a class="main-logo" href="{{URL('/')}}"><img src="{{ asset(config('app.logo1')) }}" alt="img"></a>
            </div>
            <div class="nav-right-part nav-right-part-mobile ms-auto">
                <ul class="text-end">
                    <li>
                        <a class="page-scroll" href="#demo">{{ __('Demos') }}</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#inner">{{ __('Inners') }}</a>
                    </li>
                    <li>
                        <a class="cart" href="#">
                            <img src="{{ asset('public/frontend/demo-landing/img/add-to-cart.svg') }}" alt="img">
                        </a>
                    </li>
                </ul>
            </div>
            <div class="collapse navbar-collapse" id="alamgir_main_menu">
                <ul class="navbar-nav menu-open text-center m-auto">
                    <li>
                        <a class="page-scroll" href="{{ route('home') }}">{{ __('Home') }}</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#demo">{{ __('Demos') }}</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#inner">{{ __('Inner Pages') }}</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#featured">{{ __('Features') }}</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="{{ route('documentation.maanlms') }}" target="_blank">{{ __('Documentation') }}</a>
                    </li>
                </ul>
            </div>
            <div class="nav-right-part nav-right-part-desktop">
                <ul>
                    <li>
                        <a href="#" class="btn btn-white">
                            {{ __('$14 Purchase Now') }}
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
