
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <title>@yield('title', 'Home') | {{ env('APP_NAME') }}</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width,initial-scale=1.0" />
        <meta name="description" content="">
        <!-- favicon icon -->
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}">
        <link rel="apple-touch-icon" href="{{ asset('assets/images/apple-touch-icon-57x57.png') }}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/images/apple-touch-icon-72x72.png') }}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/images/apple-touch-icon-114x114.png') }}">
        <!-- google fonts preconnect -->
        <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <!-- style sheets and font icons  -->
        <link rel="stylesheet" href="{{ asset('assets/css/vendors.min.css') }}"/>
        <link rel="stylesheet" href="{{ asset('assets/css/icon.min.css') }}"/>
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}"/>
        <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}"/>
        <link rel="stylesheet" href="{{ asset('assets/demos/web-agency/web-agency.css') }}" /> 
        @yield('css')
    </head>
    <body data-mobile-nav-style="classic" class="background-position-center-top" style="background-image: url({{ asset('assets/images/vertical-line-bg-small-medium-gray.svg') }})"> 
        @include('front.includes.header')
        
        @yield('content')        
        
        @include('front.includes.work_together')
        @include('front.includes.footer')
        {{-- @include('front.includes.subscription_popup') --}}

        <div class="sticky-wrap z-index-1 d-none d-xl-inline-block" data-animation-delay="100" data-shadow-animation="true">
            <div class="elements-social social-icon-style-10">
                <ul class="small-icon dark fw-600">
                    <li class="fs-18">Follow us <span class="separator-line-1px w-30px bg-dark-gray d-inline-block align-middle ms-15px"></span></li>
                    <li><a class="facebook" href="https://www.facebook.com/" target="_blank">Fb.</a> </li> 
                    <li><a class="dribbble" href="http://www.dribbble.com" target="_blank">Dr.</a></li>
                    <li><a class="twitter" href="http://www.twitter.com" target="_blank">Tw.</a></li> 
                    <li><a class="behance" href="http://www.behance.com/" target="_blank">Be.</a> </li> 
                </ul>
            </div>
        </div>

        <div class="scroll-progress d-none d-xxl-block">
            <a href="#" class="scroll-top" aria-label="scroll">
                <span class="scroll-text">Scroll to top</span><span class="scroll-line"><span class="scroll-point"></span></span>
            </a>
        </div>

        <script type="text/javascript" src="{{ asset('assets/js/jquery.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/vendors.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/main.js') }}"></script>
        @yield('js')
    </body>
</html>