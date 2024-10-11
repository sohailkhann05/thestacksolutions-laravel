@extends('layouts.front')
@section('title', 'About')
@section('css')

@endsection
@section('content')

    @include('front.includes.page_title', [
        'title' => 'Agency',
        'sub_title' => 'Digital experiences agency',
    ])

    <section>
        <div class="container">
            <div class="row mb-7">
                <div class="col-lg-5 md-mb-10px"
                    data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <div class="icon-with-text-style-08 mb-25px">
                        <div class="feature-box feature-box-left-icon-middle">
                            <div
                                class="feature-box-icon feature-box-icon-rounded w-50px h-50px rounded-circle bg-base-color me-15px">
                                <i class="bi bi-star-fill text-dark-gray"></i>
                            </div>
                            <div class="feature-box-content">
                                <span
                                    class="d-inline-block fs-15 lh-24 fw-700 text-dark-gray text-uppercase text-decoration-line-bottom">5
                                    star rating web agency</span>
                            </div>
                        </div>
                    </div>
                    <h3 class="text-dark-gray fw-600 ls-minus-2px">We're a creative digital agency.</h3>
                </div>
                <div class="col-lg-7"
                    data-anime='{ "el": "childs", "translateY": [15, 0], "opacity": [0,1], "duration": 300, "delay": 0, "staggervalue": 100, "easing": "easeOutQuad" }'>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="fs-19 fw-600 text-dark-gray">Our vision</div>
                        </div>
                        <div class="col-md-9 last-paragraph-no-margin">
                            <p>We value each and every human life placed in our hands and constantly work towards meeting
                                the expectations of our customers and stakeholders.</p>
                        </div>
                    </div>
                    <div class="separator-line-2px bg-dark-gray mt-35px mb-35px"></div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="fs-19 fw-600 text-dark-gray">Our mission</div>
                        </div>
                        <div class="col-md-9 last-paragraph-no-margin">
                            <p>We value each and every human life placed in our hands and constantly work towards meeting
                                the expectations of our customers and stakeholders.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-5 row-cols-md-3 row-cols-sm-2 clients-style-06 justify-content-center"
                data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <!-- start client item -->
                <div class="col client-box text-center md-mb-40px">
                    <a href="#"><img src="{{ asset('assets/images/logo-walmart-dark-gray.svg') }}" class="h-35px" alt=""></a>
                </div>
                <!-- end client item -->
                <!-- start client item -->
                <div class="col client-box text-center md-mb-40px">
                    <a href="#"><img src="{{ asset('assets/images/logo-invision-dark-gray.svg') }}" class="h-40px" alt=""></a>
                </div>
                <!-- end client item -->
                <!-- start client item -->
                <div class="col client-box text-center md-mb-40px">
                    <a href="#"><img src="{{ asset('assets/images/logo-netflix-dark-gray.svg') }}" class="h-35px" alt=""></a>
                </div>
                <!-- end client item -->
                <!-- start client item -->
                <div class="col client-box text-center sm-mb-40px">
                    <a href="#"><img src="{{ asset('assets/images/logo-logitech-dark-gray.svg') }}" class="h-35px" alt=""></a>
                </div>
                <!-- end client item -->
                <!-- start client item -->
                <div class="col client-box text-center">
                    <a href="#"><img src="{{ asset('assets/images/logo-amazon-dark-gray.svg') }}" class="h-35px" alt=""></a>
                </div>
                <!-- end client item -->
            </div>
        </div>
    </section>

    <section class="p-0">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-center">
                <div class="col-11 position-relative h-750px md-h-600px sm-h-350px border-radius-6px border border-color-transparent position-relative"
                    data-parallax-background-ratio="0.5"
                    style="background-image: url('https://via.placeholder.com/1920x1100');">
                    <a href="https://www.youtube.com/watch?v=cfXHhfNy7tU" class="popup-youtube">
                        <div class="absolute-middle-center z-index-9">
                            <img src="{{ asset('assets/images/demo-web-agency-03.png') }}" class="animation-rotation" alt="">
                            <div class="absolute-middle-center w-100 z-index-minus-1"><img
                                    src="{{ asset('assets/images/demo-web-agency-about-02.png') }}" alt=""></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="pb-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 md-mb-30px"
                    data-anime='{ "el": "childs", "translateX": [15, 0], "opacity": [0,1], "duration": 600, "delay": 100, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <div
                        class="bg-dark-gray border-radius-100px fs-12 text-white ps-20px pe-20px d-inline-block text-uppercase fw-500 mb-5 ls-05px">
                        Focused area</div>
                    <h3 class="text-dark-gray fw-600 ls-minus-2px">We want to bring business and the digital world.</h3>
                    <p class="w-90 md-w-100">We are excited for our work and how it positively impacts clients. With over 12
                        years of experience have been constantly providing excellent.</p>
                    <a href="demo-web-agency-expertise.html"
                        class="btn btn-large btn-expand-ltr text-dark-gray btn-rounded fw-700"><span
                            class="bg-base-color"></span>See what we do</a>
                </div>
                <div class="col-xl-6 col-lg-7 offset-xl-1">
                    <div class="row row-cols-auto row-cols-sm-2"
                        data-anime='{ "el": "childs", "translateX": [50, 0], "opacity": [0,1], "duration": 600, "delay":300, "staggervalue": 150, "easing": "easeOutQuad" }'>
                        <!-- start features box item -->
                        <div class="col align-self-start">
                            <div class="feature-box text-start ps-30px">
                                <div class="feature-box-icon position-absolute left-0px top-10px">
                                    <h1
                                        class="fs-85 text-outline text-outline-width-1px text-outline-color-dark-gray fw-700 ls-minus-1px opacity-2 mb-0">
                                        01</h1>
                                </div>
                                <div class="feature-box-content last-paragraph-no-margin pt-25 md-pt-17 sm-pt-40px">
                                    <span class="text-dark-gray fs-19 d-inline-block fw-600 mb-5px">Creative strategy</span>
                                    <p>We create compelling web designs, which are the right for your target groups.</p>
                                    <span class="w-40px h-3px bg-base-color d-inline-block"></span>
                                </div>
                            </div>
                        </div>
                        <!-- end features box item -->
                        <!-- start features box item -->
                        <div class="col align-self-end mt-20 xs-mt-15px">
                            <div class="feature-box text-start ps-30px">
                                <div class="feature-box-icon position-absolute left-0px top-10px">
                                    <h1
                                        class="fs-85 text-outline text-outline-width-1px text-outline-color-dark-gray fw-700 ls-minus-1px opacity-2 mb-0">
                                        02</h1>
                                </div>
                                <div class="feature-box-content last-paragraph-no-margin pt-25 md-pt-17 sm-pt-40px">
                                    <span class="text-dark-gray fs-19 d-inline-block fw-600 mb-5px">Unique design</span>
                                    <p>We create compelling web designs, which are the right for your target groups.</p>
                                    <span class="w-40px h-3px bg-base-color d-inline-block"></span>
                                </div>
                            </div>
                        </div>
                        <!-- end features box item -->
                        <!-- start features box item -->
                        <div class="col align-self-start mt-minus-12 xs-mt-15px">
                            <div class="feature-box text-start ps-30px">
                                <div class="feature-box-icon position-absolute left-0px top-10px">
                                    <h1
                                        class="fs-85 text-outline text-outline-width-1px text-outline-color-dark-gray fw-700 ls-minus-1px opacity-2 mb-0">
                                        03</h1>
                                </div>
                                <div class="feature-box-content last-paragraph-no-margin pt-25 md-pt-17 sm-pt-40px">
                                    <span class="text-dark-gray fs-19 d-inline-block fw-600 mb-5px">Great
                                        development</span>
                                    <p>We create compelling web designs, which are the right for your target groups.</p>
                                    <span class="w-40px h-3px bg-base-color d-inline-block"></span>
                                </div>
                            </div>
                        </div>
                        <!-- end features box item -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="overflow-hidden position-relative half-section">
        <div class="container-fluid">
            <div class="row position-relative">
                <div class="col swiper swiper-width-auto text-center pb-30px sm-pb-20px"
                    data-slider-options='{ "slidesPerView": "auto", "spaceBetween":60, "speed": 10000, "loop": true, "pagination": { "el": ".slider-four-slide-pagination-2", "clickable": false }, "allowTouchMove": false, "autoplay": { "delay":0, "disableOnInteraction": false }, "navigation": { "nextEl": ".slider-four-slide-next-2", "prevEl": ".slider-four-slide-prev-2" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "768": { "spaceBetween": 70 } }, "effect": "slide" }'>
                    <div class="swiper-wrapper marquee-slide">
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <div class="fs-170 sm-fs-150 text-base-color fw-600 ls-minus-8px word-break-normal">developers
                            </div>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <div class="fs-170 sm-fs-150 text-dark-gray fw-600 ls-minus-8px word-break-normal">designers
                            </div>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <div class="fs-170 sm-fs-150 text-base-color fw-600 ls-minus-8px word-break-normal">thinkers
                            </div>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <div class="fs-170 sm-fs-150 text-dark-gray fw-600 ls-minus-8px word-break-normal">innovators
                            </div>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <div class="fs-170 sm-fs-150 text-base-color fw-600 ls-minus-8px word-break-normal">socially
                            </div>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <div class="fs-170 sm-fs-150 text-dark-gray fw-600 ls-minus-8px word-break-normal">dreamers
                            </div>
                        </div>
                        <!-- end client item -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="p-0">
        <div class="container">
            <div class="row mb-6 sm-mb-40px"
                data-anime='{"translateY": [0, 0], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <div class="col-lg-6 md-mb-25px">
                    <h3 class="mb-0 fw-600 text-dark-gray w-85 lg-w-100 ls-minus-2px">We believe in power of unity and its
                        impact in future.</h3>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <p class="w-95 md-w-100">We are excited for our work and how it positively impacts clients. With over
                        12 years of experience we have been constantly providing excellent.</p>
                    <a href="demo-web-agency-people.html"
                        class="btn btn-medium btn-expand-ltr text-dark-gray btn-rounded fw-700"><span
                            class="bg-base-color"></span>Meet the team</a>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-4 row-cols-sm-2 transition-inner-all mb-6 lg-mb-5"
                data-anime='{ "el": "childs", "translateY": [-15, 0], "perspective": [1200,1200], "scale": [1.1, 1], "rotateX": [50, 0], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <!-- start team member item -->
                <div class="col team-style-08 border-radius-6px md-mb-30px mt-2 md-mt-0"
                    data-bottom-top="transform: translateY(40px)" data-top-bottom="transform: translateY(-40px)">
                    <figure class="mb-0 position-relative overflow-hidden border-radius-6px">
                        <img src="https://via.placeholder.com/600x756" alt="" />
                        <figcaption
                            class="w-100 h-100 d-flex align-items-end p-13 lg-p-8 md-p-13 sm-p-10 bg-gradient-gray-light-dark-transparent border-radius-6px">
                            <div class="w-100">
                                <span class="team-member-name fw-500 alt-font text-white d-block">Jeremy dupont</span>
                                <span class="member-designation fs-15 lh-20 text-white d-block">Director</span>
                            </div>
                            <div class="social-icon d-flex flex-column flex-shrink-1">
                                <a href="https://www.twitter.com/" target="_blank" class="text-dark-gray"><i
                                        class="fa-brands fa-twitter icon-small"></i></a>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <!-- end team member item -->
                <!-- start team member item -->
                <div class="col team-style-08 border-radius-6px md-mb-30px" data-bottom-top="transform: translateY(-40px)"
                    data-top-bottom="transform: translateY(40px)">
                    <figure class="mb-0 position-relative overflow-hidden border-radius-6px">
                        <img src="https://via.placeholder.com/600x756" alt="" />
                        <figcaption
                            class="w-100 h-100 d-flex align-items-end p-13 lg-p-8 md-p-13 sm-p-10 bg-gradient-gray-light-dark-transparent border-radius-6px">
                            <div class="w-100">
                                <span class="team-member-name fw-500 alt-font text-white d-block">Jessica dover</span>
                                <span class="member-designation fs-15 lh-20 text-white d-block">Founder</span>
                            </div>
                            <div class="social-icon d-flex flex-column flex-shrink-1">
                                <a href="https://www.linkedin.com/" target="_blank" class="text-dark-gray"><i
                                        class="fa-brands fa-linkedin-in icon-small"></i></a>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <!-- end team member item -->
                <!-- start team member item -->
                <div class="col team-style-08 border-radius-6px xs-mb-30px mt-2 md-mt-0"
                    data-bottom-top="transform: translateY(40px)" data-top-bottom="transform: translateY(-40px)">
                    <figure class="mb-0 position-relative overflow-hidden border-radius-6px">
                        <img src="https://via.placeholder.com/600x756" alt="" />
                        <figcaption
                            class="w-100 h-100 d-flex align-items-end p-13 lg-p-8 md-p-13 sm-p-10 bg-gradient-gray-light-dark-transparent border-radius-6px">
                            <div class="w-100">
                                <span class="team-member-name fw-500 alt-font text-white d-block">Matthew taylor</span>
                                <span class="member-designation fs-15 lh-20 text-white d-block">Manager</span>
                            </div>
                            <div class="social-icon d-flex flex-column flex-shrink-1">
                                <a href="https://www.behance.net/" target="_blank" class="text-dark-gray"><i
                                        class="fa-brands fa-behance icon-small"></i></a>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <!-- end team member item -->
                <!-- start team member item -->
                <div class="col team-style-08 border-radius-6px" data-bottom-top="transform: translateY(-40px)"
                    data-top-bottom="transform: translateY(40px)">
                    <figure class="mb-0 position-relative overflow-hidden border-radius-6px">
                        <img src="https://via.placeholder.com/600x756" alt="" />
                        <figcaption
                            class="w-100 h-100 d-flex align-items-end p-13 lg-p-8 md-p-13 sm-p-10 bg-gradient-gray-light-dark-transparent border-radius-6px">
                            <div class="w-100">
                                <span class="team-member-name fw-500 alt-font text-white d-block">Johncy parker</span>
                                <span class="member-designation fs-15 lh-20 text-white d-block">Manager</span>
                            </div>
                            <div class="social-icon d-flex flex-column flex-shrink-1">
                                <a href="https://www.facebook.com/" target="_blank" class="text-dark-gray"><i
                                        class="fa-brands fa-facebook-f icon-small"></i></a>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <!-- end team member item -->
            </div>
            <div class="row mb-2">
                <div class="col-12 text-center">
                    <div class="text-dark-gray fs-20 ls-minus-05px">Our nearly <span class="fw-700">350+</span> creative
                        team members are ready to help now. <a href="demo-web-agency-contact.html"
                            class="text-dark-gray text-dark-gray-hover fw-600 text-decoration-line-bottom">Contact us
                            now</a></div>
                </div>
            </div>
        </div>
    </section>

@endsection
@section('js')

@endsection
