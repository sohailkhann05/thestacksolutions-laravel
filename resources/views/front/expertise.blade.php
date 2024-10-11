@extends('layouts.front')
@section('title', 'Expertise')
@section('content')

    @include('front.includes.page_title', [
        'title' => 'Expertise',
        'sub_title' => 'Perfect solutions for your business',
    ])

    <section class="p-0">
        <div class="container">
            <div class="row mb-6 mt-7 md-mb-50px">
                <div class="col-xl-5 col-lg-6"
                    data-anime='{ "el": "childs", "translateY": [0, 0], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <h3 class="text-dark-gray fw-600 ls-minus-2px w-95 xl-w-100">Create a unique digital experiences.</h3>
                    <p class="w-95 md-w-100">Lorem ipsum is simply dummy text of the printing and typesetting industry has
                        been the standard.</p>
                </div>
                <div class="col-lg-6 offset-xl-1 progress-bar-style-01 mt-50px"
                    data-anime='{ "el": "childs", "translateY": [15, 0], "translateX": [15, 0], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <!-- start progress bar item -->
                    <div class="progress mb-12 sm-mb-60px bg-extra-medium-gray">
                        <div class="progress-bar-title d-inline-block text-dark-gray fs-17 fw-500">App development</div>
                        <div class="progress-bar bg-dark-gray" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                            aria-valuemax="100" aria-label="app-development">
                            <span
                                class="progress-bar-percent text-center bg-dark-gray fs-11 fw-600 lh-12 text-white">80%</span>
                        </div>
                    </div>
                    <!-- end progress bar item -->
                    <!-- start progress bar item -->
                    <div class="progress mb-12 sm-mb-60px bg-extra-medium-gray">
                        <div class="progress-bar-title d-inline-block text-dark-gray fs-17 fw-500">Branding</div>
                        <div class="progress-bar bg-dark-gray" role="progressbar" aria-valuenow="87" aria-valuemin="0"
                            aria-valuemax="100" aria-label="branding">
                            <span
                                class="progress-bar-percent text-center bg-dark-gray fs-11 fw-600 lh-12 text-white">87%</span>
                        </div>
                    </div>
                    <!-- end progress bar item -->
                    <!-- start progress bar item -->
                    <div class="progress sm-mb-0 bg-extra-medium-gray">
                        <div class="progress-bar-title d-inline-block text-dark-gray fs-17 fw-500">Web development</div>
                        <div class="progress-bar bg-dark-gray" role="progressbar" aria-valuenow="93" aria-valuemin="0"
                            aria-valuemax="100" aria-label="web-development">
                            <span
                                class="progress-bar-percent text-center bg-dark-gray fs-11 fw-600 lh-12 text-white">93%</span>
                        </div>
                    </div>
                    <!-- end progress bar item -->
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-4 row-cols-sm-2 justify-content-center text-center"
                data-anime='{ "el": "childs", "translateY": [15, 0], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <!-- start features box item -->
                <div class="col icon-with-text-style-11 border-0 overflow-visible">
                    <div
                        class="text-box-wrapper align-items-center d-flex position-relative overflow-hidden border-radius-6px">
                        <div class="text-center w-100">
                            <div class="text-box last-paragraph-no-margin p-20">
                                <img src="https://via.placeholder.com/220x220" class="w-110px mb-20px d-block mx-auto"
                                    alt="" />
                                <span class="alt-font text-dark-gray fw-600 fs-20">Discussion</span>
                            </div>
                            <div
                                class="text-box-hover bg-dark-gray h-100 d-flex align-items-center justify-content-center flex-column">
                                <h1
                                    class="text-outline text-outline-color-base-color mb-10px ls-minus-2px fw-600 position-absolute bottom-minus-40px">
                                    01</h1>
                                <p class="d-inline-block w-70 mb-10px text-white opacity-5 lg-w-90">Lorem ipsum simply dummy
                                    text printing dummy industry.</p>
                                <span class="alt-font fw-500 fs-20 text-white mb-20px">Discussion</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end features box item -->
                <!-- start features box item -->
                <div class="col icon-with-text-style-11 border-0 overflow-visible">
                    <div
                        class="text-box-wrapper align-items-center d-flex position-relative overflow-hidden border-radius-6px">
                        <div class="text-center w-100">
                            <div class="text-box last-paragraph-no-margin p-20">
                                <img src="https://via.placeholder.com/220x220" class="w-110px mb-20px d-block mx-auto"
                                    alt="" />
                                <span class="alt-font text-dark-gray fw-600 fs-20">Strategy</span>
                            </div>
                            <div
                                class="text-box-hover bg-dark-gray h-100 d-flex align-items-center justify-content-center flex-column">
                                <h1
                                    class="text-outline text-outline-color-base-color mb-10px ls-minus-2px fw-600 position-absolute bottom-minus-40px">
                                    02</h1>
                                <p class="d-inline-block w-70 mb-10px text-white opacity-5 lg-w-90">Lorem ipsum simply dummy
                                    text printing dummy industry.</p>
                                <span class="alt-font fw-500 fs-20 text-white mb-20px">Strategy</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end features box item -->
                <!-- start features box item -->
                <div class="col icon-with-text-style-11 border-0 overflow-visible">
                    <div
                        class="text-box-wrapper align-items-center d-flex position-relative overflow-hidden border-radius-6px">
                        <div class="text-center w-100">
                            <div class="text-box last-paragraph-no-margin p-20">
                                <img src="https://via.placeholder.com/220x220" class="w-110px mb-20px d-block mx-auto"
                                    alt="" />
                                <span class="alt-font text-dark-gray fw-600 fs-20">Execute</span>
                            </div>
                            <div
                                class="text-box-hover bg-dark-gray h-100 d-flex align-items-center justify-content-center flex-column">
                                <h1
                                    class="text-outline text-outline-color-base-color mb-10px ls-minus-2px fw-600 position-absolute bottom-minus-40px">
                                    03</h1>
                                <p class="d-inline-block w-70 mb-10px text-white opacity-5 lg-w-90">Lorem ipsum simply dummy
                                    text printing dummy industry.</p>
                                <span class="alt-font fw-500 fs-20 text-white mb-20px">Execute</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end features box item -->
                <!-- start features box item -->
                <div class="col icon-with-text-style-11 border-0 overflow-visible">
                    <div
                        class="text-box-wrapper align-items-center d-flex position-relative overflow-hidden border-radius-6px">
                        <div class="text-center w-100">
                            <div class="text-box last-paragraph-no-margin p-20">
                                <img src="https://via.placeholder.com/220x220" class="w-110px mb-20px d-block mx-auto"
                                    alt="" />
                                <span class="alt-font text-dark-gray fw-600 fs-20">Launch</span>
                            </div>
                            <div
                                class="text-box-hover bg-dark-gray h-100 d-flex align-items-center justify-content-center flex-column">
                                <h1
                                    class="text-outline text-outline-color-base-color mb-10px ls-minus-2px fw-600 position-absolute bottom-minus-40px">
                                    04</h1>
                                <p class="d-inline-block w-70 mb-10px text-white opacity-5 lg-w-90">Lorem ipsum simply dummy
                                    text printing dummy industry.</p>
                                <span class="alt-font fw-500 fs-20 text-white mb-20px">Launch</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end features box item -->
            </div>
        </div>
    </section>

    <section class="overflow-hidden position-relative pt-2 pb-0 xl-pt-5 lg-pt-8 md-pt-11 d-none d-md-block">
        <div class="container">
            <div class="row">
                <div class="col-xxl-6 col-lg-5 col-md-6">
                    <div
                        class="fs-300 xl-fs-250 lg-fs-200 text-dark-gray fw-600 ls-minus-20px word-break-normal position-relative">
                        best
                        <div
                            class="position-absolute left-minus-100px top-minus-80px xl-w-230px md-w-200px xl-left-minus-50px xl-top-minus-100px d-none d-md-block z-index-9">
                            <img src="{{ asset('assets/images/demo-web-agency-05.png') }}" class="animation-rotation" alt="">
                            <div class="absolute-middle-center w-100 z-index-minus-1"><img
                                    src="{{ asset('assets/images/demo-web-agency-04.png') }}" alt=""></div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 col-lg-7 col-md-6">
                    <div class="outside-box-right-10 xl-outside-box-right-10 text-end">
                        <div
                            class="fs-300 xl-fs-250 lg-fs-200 text-base-color fw-600 ls-minus-20px d-inline-block word-break-normal">
                            service</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pb-0 half-section">
        <div class="container">
            <div class="row justify-content-center mb-7 sm-mb-40px">
                <div class="col-xl-10"
                    data-anime='{ "el": "childs", "translateY": [15, 0], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <div
                        class="row border-bottom border-2 border-color-dark-gray pb-50px mb-50px sm-pb-35px sm-mb-35px align-items-center">
                        <div class="col-md-1 text-center text-md-end md-mb-15px">
                            <div class="fs-16 fw-600 text-dark-gray">01</div>
                        </div>
                        <div class="col-md-7 offset-lg-1 icon-with-text-style-01 md-mb-25px">
                            <div class="feature-box feature-box-left-icon-middle last-paragraph-no-margin">
                                <div class="feature-box-icon me-50px md-me-35px">
                                    <img src="https://via.placeholder.com/130x130" class="w-75px" alt="" />
                                </div>
                                <div class="feature-box-content">
                                    <span class="d-inline-block text-dark-gray mb-5px fs-20 ls-minus-05px">Pixel perfect
                                        <span class="fw-700">web design</span></span>
                                    <p class="w-90 md-w-100">Lorem ipsum is simply dummy text of the printing typesetting
                                        industry been text.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 text-center text-md-end">
                            <a href="demo-web-agency-services-details.html"
                                class="btn btn-large btn-expand-ltr text-dark-gray btn-rounded fw-700"><span
                                    class="bg-base-color"></span>Get started now</a>
                        </div>
                    </div>
                    <div
                        class="row border-bottom border-2 border-color-dark-gray pb-50px mb-50px sm-pb-35px sm-mb-35px align-items-center">
                        <div class="col-md-1 text-center text-md-end md-mb-15px">
                            <div class="fs-16 fw-600 text-dark-gray">02</div>
                        </div>
                        <div class="col-md-7 offset-lg-1 icon-with-text-style-01 md-mb-25px">
                            <div class="feature-box feature-box-left-icon-middle last-paragraph-no-margin">
                                <div class="feature-box-icon me-50px md-me-35px">
                                    <img src="https://via.placeholder.com/130x130" class="w-75px" alt="" />
                                </div>
                                <div class="feature-box-content">
                                    <span class="d-inline-block text-dark-gray mb-5px fs-20 ls-minus-05px">Creative <span
                                            class="fw-700">web development</span></span>
                                    <p class="w-90 md-w-100">Lorem ipsum is simply dummy text of the printing typesetting
                                        industry been text.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 text-center text-md-end">
                            <a href="demo-web-agency-services-details.html"
                                class="btn btn-large btn-expand-ltr text-dark-gray btn-rounded fw-700"><span
                                    class="bg-base-color"></span>Get started now</a>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-md-1 text-center text-md-end md-mb-15px">
                            <div class="fs-16 fw-600 text-dark-gray">03</div>
                        </div>
                        <div class="col-md-7 offset-lg-1 icon-with-text-style-01 md-mb-25px">
                            <div class="feature-box feature-box-left-icon-middle last-paragraph-no-margin">
                                <div class="feature-box-icon me-50px md-me-35px">
                                    <img src="https://via.placeholder.com/130x130" class="w-75px" alt="" />
                                </div>
                                <div class="feature-box-content">
                                    <span class="d-inline-block text-dark-gray mb-5px fs-20 ls-minus-05px">Best <span
                                            class="fw-700">eCommerce solution</span></span>
                                    <p class="w-90 md-w-100">Lorem ipsum is simply dummy text of the printing typesetting
                                        industry been text.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 text-center text-md-end">
                            <a href="demo-web-agency-services-details.html"
                                class="btn btn-large btn-expand-ltr text-dark-gray btn-rounded fw-700"><span
                                    class="bg-base-color"></span>Get started now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mx-0 justify-content-center"
                data-anime='{ "el": "childs", "translateY": [0, 0], "opacity": [0,1], "duration": 200, "delay": 0, "staggervalue": 100, "easing": "easeOutQuad" }'>
                <div
                    class="col-auto text-center last-paragraph-no-margin bg-dark-gray pt-15px pb-15px ps-8 pe-8 border-radius-100px">
                    <div class="d-inline-block align-middle me-5px text-base-color">
                        <i class="bi bi-envelope"></i>
                    </div>
                    <div class="d-inline-block align-middle text-white sm-lh-24">Our nearly <span
                            class="fw-500">254+</span> creative and expertise people are ready to help! <a
                            href="demo-web-agency-contact.html"
                            class="text-white fw-500 text-decoration-line-bottom">Contact now</a></div>
                </div>
            </div>
        </div>
    </section>

    <section class="pb-4 lg-pb-6 position-relative">
        <div class="container position-relative">
            <div class="row justify-content-center mb-6 sm-mb-30px"
                data-anime='{ "el": "childs", "translateY": [0, 0], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <div class="col-lg-5">
                    <h3 class="text-dark-gray fw-600 ls-minus-2px w-80 lg-w-100">Trusted by genius people.</h3>
                    <div class="mb-30px d-flex align-items-center md-mb-30px">
                        <div class="fw-700 fs-70 text-dark-gray me-10px">4.82</div>
                        <div class="text-center">
                            <div
                                class="bg-base-color text-dark-gray border-radius-30px ps-20px pe-20px fs-16 ls-minus-2px">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <span class="text-dark-gray fs-13 fw-500 text-uppercase">Clutch review</span>
                        </div>
                    </div>
                    <div class="d-flex md-mb-25px">
                        <!-- start slider navigation -->
                        <div
                            class="slider-one-slide-prev-1 bg-white border border-color-extra-medium-gray text-dark-gray swiper-button-prev slider-navigation-style-04">
                            <i class="fa-solid fa-arrow-left"></i></div>
                        <div
                            class="slider-one-slide-next-1 bg-white border border-color-extra-medium-gray text-dark-gray swiper-button-next slider-navigation-style-04">
                            <i class="fa-solid fa-arrow-right"></i></div>
                        <!-- end slider navigation -->
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7 overflow-hidden offset-xl-1">
                    <div class="swiper magic-cursor"
                        data-slider-options='{ "slidesPerView": 1, "spaceBetween": 40, "loop": true, "navigation": { "nextEl": ".slider-one-slide-next-1", "prevEl": ".slider-one-slide-prev-1" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "992": { "slidesPerView": 1 }, "768": { "slidesPerView":1 }, "320": { "slidesPerView": 1 } }, "effect": "slide" }'>
                        <div class="swiper-wrapper">
                            <!-- start review item -->
                            <div class="swiper-slide">
                                <h5 class="text-dark-gray mb-20px w-90 xl-w-100 lh-42 fw-400 ls-minus-1px">The <span
                                        class="text-decoration-line-bottom-medium fw-700">wonderful</span> services you
                                    offer locally are great for our community. People are tired of having to travel out of
                                    town for things.</h5>
                                <span class="text-dark-gray fw-600 d-block fs-15 text-uppercase lh-22 ls-2px">@Herman
                                    miller</span>
                            </div>
                            <!-- end review item -->
                            <!-- start review item -->
                            <div class="swiper-slide">
                                <h5 class="text-dark-gray mb-20px w-90 xl-w-100 lh-42 fw-400 ls-minus-1px">Absolutely
                                    amazing theme and <span
                                        class="text-decoration-line-bottom-medium fw-700">awesome</span> design with
                                    possibilities. It's so very easy to use and to customize everything.</h5>
                                <span class="text-dark-gray fw-600 d-block fs-15 text-uppercase lh-22 ls-2px">@Alexander
                                    Harad</span>
                            </div>
                            <!-- end review item -->
                            <!-- start review item -->
                            <div class="swiper-slide">
                                <h5 class="text-dark-gray mb-20px w-90 xl-w-100 lh-42 fw-400 ls-minus-1px">There are design
                                    companies and then there are user <span
                                        class="text-decoration-line-bottom-medium fw-700">experience.</span> Simply the
                                    great designs and best theme for fast loading.</h5>
                                <span class="text-dark-gray fw-600 d-block fs-15 text-uppercase lh-22 ls-2px">@Jacob
                                    Kalling</span>
                            </div>
                            <!-- end review item -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="separator-line-1px w-100 bg-dark-gray opacity-1 mb-6 sm-mb-30px"></div>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-5 row-cols-md-3 row-cols-sm-2 clients-style-06 justify-content-center"
                data-anime='{ "el": "childs", "translateY": [15, 0], "scale": [0.8, 1], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
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

@endsection
