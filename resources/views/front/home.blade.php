@extends('layouts.front')
@section('title', 'Home')
@section('css')

@endsection
@section('content')

    <section
        class="p-0 border-radius-6px full-screen md-h-600px sm-h-450px ipad-top-space-margin position-relative overflow-hidden">
        <div id="particles-style-01" class="position-absolute h-100 top-0 left-0 w-100" data-particle="true"
            data-particle-options='{"particles":{"number":{"value":10,"density":{"enable":true,"value_area":800}},"color":{"value":["#000000", "#BEFF01"]},"shape":{"type":"circle","stroke":{"width":0,"color":"#000000"},"polygon":{"nb_sides":5},"image":{"src":"img/github.svg","width":100,"height":100}},"opacity":{"value":1,"random":false,"anim":{"enable":false,"speed":1,"opacity_min":0.1,"sync":false}},"size":{"value":4,"random":true,"anim":{"enable":false,"speed":40,"size_min":0.1,"sync":false}},"line_linked":{"enable":false,"distance":150,"color":"#ffffff","opacity":0.4,"width":1},"move":{"enable":true,"speed":6,"direction":"none","random":false,"straight":false,"out_mode":"out","bounce":false,"attract":{"enable":false,"rotateX":600,"rotateY":1200}}},"interactivity":{"detect_on":"canvas","events":{"onhover":{"enable":true,"mode":"repulse"},"onclick":{"enable":true,"mode":"push"},"resize":true},"modes":{"grab":{"distance":400,"line_linked":{"opacity":1}},"bubble":{"distance":400,"size":40,"duration":2,"opacity":8,"speed":3},"repulse":{"distance":200,"duration":0.4},"push":{"particles_nb":4},"remove":{"particles_nb":2}}},"retina_detect":true}'>
        </div>
        <div class="looping-wrapper md-h-100"></div>
        <div class="text-base-color absolute-middle-center banner-title fw-600 d-none d-md-inline-block"
            data-anime='{ "el": "lines", "translateX": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
            creative</div>
        <div class="container h-100 position-relative">
            <div class="row align-items-center justify-content-center h-100">
                <div class="col-12 text-center">
                    <div class="fs-120 lh-110 sm-fs-100 text-dark-gray fw-600 ls-minus-4px"
                        data-anime='{ "el": "lines", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 500, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        We're a creative digital agency</div>
                </div>
            </div>
        </div>
    </section>

    <section class="p-0">
        <div class="container">
            <div class="row justify-content-center align-items-center flex-column flex-sm-row"
                data-anime='{ "el": "childs", "translateX": [15, 0], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <!-- start features box item -->
                <div class="col-auto icon-with-text-style-08 md-mb-10px text-center text-md-start">
                    <div class="feature-box feature-box-left-icon-middle d-inline-flex align-middle">
                        <div class="feature-box-icon me-5px">
                            <i class="bi bi-patch-check-fill fs-15 text-dark-gray"></i>
                        </div>
                        <div class="feature-box-content">
                            <span class="fs-14 fw-600 text-dark-gray text-uppercase">Full service web design agency</span>
                        </div>
                    </div>
                </div>
                <!-- end features box item -->
                <div class="col-auto md-mb-15px d-none d-md-flex">
                    <span
                        class="progress-step-separator bg-dark-gray w-100px lg-w-70px separator-line-1px d-block mx-auto"></span>
                </div>
                <!-- start features box item -->
                <div class="col-auto icon-with-text-style-08 md-mb-10px text-center text-md-start">
                    <div class="feature-box feature-box-left-icon-middle d-inline-flex align-middle">
                        <div class="feature-box-icon me-5px">
                            <i class="bi bi-geo-alt-fill fs-15 text-dark-gray"></i>
                        </div>
                        <div class="feature-box-content">
                            <span class="fs-14 fw-600 text-dark-gray text-uppercase">Located at london</span>
                        </div>
                    </div>
                </div>
                <!-- end features box item -->
                <div class="col-auto md-mb-15px d-none d-md-flex">
                    <span
                        class="progress-step-separator bg-dark-gray w-100px lg-w-70px separator-line-1px d-block mx-auto"></span>
                </div>
                <!-- start features box item -->
                <div class="col-auto icon-with-text-style-08 text-center text-md-start">
                    <div class="feature-box feature-box-left-icon-middle d-inline-flex align-middle">
                        <div class="feature-box-icon me-5px">
                            <i class="bi bi-heart-fill fs-15 text-dark-gray"></i>
                        </div>
                        <div class="feature-box-content">
                            <span class="fs-14 fw-600 text-dark-gray text-uppercase">Award winning agency</span>
                        </div>
                    </div>
                </div>
                <!-- end features box item -->
            </div>
        </div>
    </section>

    <section class="position-relative overflow-hidden section-dark">
        <div class="container">
            <div class="row align-items-center position-relative">
                <div class="col-lg-6">
                    <div class="outside-box-left-20 md-outside-box-left-0" data-bottom-top="transform:scale(1.1, 1.1)"
                        data-top-bottom="transform:scale(1, 1)">
                        <img src="https://via.placeholder.com/945x785" alt="" />
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1 z-index-9 md-mt-35px"
                    data-anime='{ "el": "childs", "translateX": [15, 0], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <h1
                        class="text-dark-gray fw-600 mb-40px md-mb-25px outside-box-left-15 md-outside-box-left-0 ls-minus-3px word-break-normal">
                        We create unique digital experiences.</h1>
                    <p class="lh-34 w-95 mb-30px lg-w-100">We are excited for our work and how it positively impacts
                        clients. With over <span class="text-dark-gray fw-600 text-decoration-line-bottom">12 years of
                            experience</span> we have been constantly providing excellent web solutions which is best
                        in-class experience for our clients. We mainly focus on clients and their requirements.</p>
                    <a href="demo-web-agency-about.html"
                        class="btn btn-large btn-expand-ltr text-dark-gray btn-rounded fw-700"><span
                            class="bg-base-color"></span>About agency</a>
                    <div
                        class="outside-box-right-30 position-absolute right-0px bottom-minus-50px xl-outside-box-right-25 md-outside-box-right-0 d-none d-md-inline-block">
                        <div class="fs-300 xl-fs-250 lg-fs-200 text-base-color fw-600 ls-minus-20px word-break-normal"
                            data-bottom-top="transform:scale(1, 1) translate3d(0px, 0px, 0px);"
                            data-top-bottom="transform:scale(1, 1) translate3d(-100px, 0px, 0px);">about</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="p-0">
        <div class="container">
            <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 m-0 justify-content-center"
                data-anime='{ "el": "childs", "translateY": [40, 0], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <!-- start process step item -->
                <div class="col process-step-style-10 ps-5 pe-5 pt-3 pb-3 sm-mb-20px position-relative hover-box">
                    <div class="process-step-icon-box position-absolute top-minus-15px left-25px md-left-0px">
                        <div class="number d-inline-block fs-90 fw-700 text-outline text-outline-color-extra-medium-gray">01
                        </div>
                    </div>
                    <span class="fs-19 fw-600 text-dark-gray mb-5px d-block position-relative">Web design</span>
                    <div class="position-relative pb-60px last-paragraph-no-margin">
                        <p class="lh-30 w-90 sm-w-100">We create compelling web designs, which are the right-fit for your
                            target groups.</p>
                        <a href="demo-web-agency-expertise.html"
                            class="hover-content d-flex justify-content-center align-items-center icon-box w-45px h-45px rounded-circle bg-base-color border-2"><i
                                class="feather icon-feather-arrow-right text-dark-gray icon-small"></i></a>
                    </div>
                </div>
                <!-- end process step item -->
                <!-- start process step item -->
                <div
                    class="col process-step-style-10 ps-5 pe-5 pt-3 pb-3 sm-mb-20px position-relative mt-40px md-mt-0 hover-box">
                    <div class="process-step-icon-box position-absolute top-minus-15px left-25px md-left-0px">
                        <div class="number d-inline-block fs-90 fw-700 text-outline text-outline-color-extra-medium-gray">02
                        </div>
                    </div>
                    <span class="fs-19 fw-600 text-dark-gray mb-5px d-block position-relative">Web development</span>
                    <div class="position-relative pb-60px last-paragraph-no-margin">
                        <p class="lh-30 w-90 sm-w-100">We create compelling web designs, which are the right-fit for your
                            target groups.</p>
                        <a href="demo-web-agency-expertise.html"
                            class="hover-content d-flex justify-content-center align-items-center icon-box w-45px h-45px rounded-circle bg-base-color border-2"><i
                                class="feather icon-feather-arrow-right text-dark-gray icon-small"></i></a>
                    </div>
                </div>
                <!-- end process step item -->
                <!-- start process step item -->
                <div class="col process-step-style-10 ps-5 pe-5 pt-3 pb-3 sm-mb-20px position-relative hover-box">
                    <div class="process-step-icon-box position-absolute top-minus-15px left-25px md-left-0px">
                        <div class="number d-inline-block fs-90 fw-700 text-outline text-outline-color-extra-medium-gray">03
                        </div>
                    </div>
                    <span class="fs-19 fw-600 text-dark-gray mb-5px d-block position-relative">eCommerce solutions</span>
                    <div class="position-relative pb-60px last-paragraph-no-margin">
                        <p class="lh-30 w-90 sm-w-100">We create compelling web designs, which are the right-fit for your
                            target groups.</p>
                        <a href="demo-web-agency-expertise.html"
                            class="hover-content d-flex justify-content-center align-items-center icon-box w-45px h-45px rounded-circle bg-base-color border-2"><i
                                class="feather icon-feather-arrow-right text-dark-gray icon-small"></i></a>
                    </div>
                </div>
                <!-- end process step item -->
            </div>
        </div>
    </section>

    <section class="pb-0 pt-0 ps-2 pe-2 lg-pt-3 md-pt-7 sm-p-0">
        <div class="container">
            <div class="row align-items-end mb-6">
                <div class="col-lg-9 col-md-8 d-none d-md-flex">
                    <div class="outside-box-left-25 md-outside-box-left-50">
                        <div class="fs-350 xl-fs-300 lg-fs-250 text-base-color fw-600 ls-minus-20px position-relative d-inline-block word-break-normal"
                            data-bottom-top="transform:scale(1, 1) translate3d(0px, 0px, 0px);"
                            data-top-bottom="transform:scale(1, 1) translate3d(-100px, 0px, 0px);">projects
                            <div class="position-absolute right-minus-100px top-minus-120px z-index-9 md-w-200px d-none d-md-block"
                                data-anime='{ "translateY": [0, 0], "scale": [0.7, 1], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                                <img src="{{ asset('assets/images/demo-web-agency-03.png') }}" class="animation-rotation" alt="">
                                <div class="absolute-middle-center w-100 z-index-minus-1"><img
                                        src="{{ asset('assets/images/demo-web-agency-02.png') }}" alt=""></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 text-start text-md-end">
                    <a href="demo-web-agency-projects.html"
                        class="btn btn-large btn-expand-ltr text-dark-gray btn-rounded fw-700 mb-50px sm-mb-0"><span
                            class="bg-base-color"></span>Explore projects</a>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row justify-content-center m-md-0">
                <div class="col-12 filter-content">
                    <ul
                        class="portfolio-simple portfolio-wrapper grid-loading grid grid-4col xxl-grid-4col xl-grid-4col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large text-center">
                        <li class="grid-sizer"></li>
                        <!-- start portfolio item -->
                        <li class="grid-item selected digital transition-inner-all">
                            <div class="portfolio-box" data-bottom-top="transform: translateY(40px)"
                                data-top-bottom="transform: translateY(-40px)">
                                <div class="portfolio-image bg-medium-gray border-radius-6px">
                                    <a href="demo-web-agency-single-project-creative.html"><img
                                            src="https://via.placeholder.com/800x635" alt="" /></a>
                                </div>
                                <div class="portfolio-caption pt-35px pb-35px md-pt-25px md-pb-25px">
                                    <a href="demo-web-agency-single-project-creative.html"
                                        class="text-dark-gray text-dark-gray-hover fw-600">Tailoring inteo</a>
                                    <span
                                        class="d-inline-block align-middle w-10px separator-line-1px bg-light-gray ms-10px me-10px"></span>
                                    <div class="d-inline-block">Branding</div>
                                </div>
                            </div>
                        </li>
                        <!-- end portfolio item -->
                        <!-- start portfolio item -->
                        <li class="grid-item web selected branding transition-inner-all">
                            <div class="portfolio-box" data-bottom-top="transform: translateY(-40px)"
                                data-top-bottom="transform: translateY(40px)">
                                <div class="portfolio-image bg-medium-gray border-radius-6px">
                                    <a href="demo-web-agency-single-project-creative.html"><img
                                            src="https://via.placeholder.com/800x635" alt="" /></a>
                                </div>
                                <div class="portfolio-caption pt-35px pb-35px md-pt-25px md-pb-25px">
                                    <a href="demo-web-agency-single-project-creative.html"
                                        class="text-dark-gray text-dark-gray-hover fw-600">Design blast</a>
                                    <span
                                        class="d-inline-block align-middle w-10px separator-line-1px bg-light-gray ms-10px me-10px"></span>
                                    <div class="d-inline-block">Photography</div>
                                </div>
                            </div>
                        </li>
                        <!-- end portfolio item -->
                        <!-- start portfolio item -->
                        <li class="grid-item web digital selected branding transition-inner-all">
                            <div class="portfolio-box" data-bottom-top="transform: translateY(40px)"
                                data-top-bottom="transform: translateY(-40px)">
                                <div class="portfolio-image bg-medium-gray border-radius-6px">
                                    <a href="demo-web-agency-single-project-creative.html"><img
                                            src="https://via.placeholder.com/800x635" alt="" /></a>
                                </div>
                                <div class="portfolio-caption pt-35px pb-35px md-pt-25px md-pb-25px">
                                    <a href="demo-web-agency-single-project-creative.html"
                                        class="text-dark-gray text-dark-gray-hover fw-600">Herbal beauty</a>
                                    <span
                                        class="d-inline-block align-middle w-10px separator-line-1px bg-light-gray ms-10px me-10px"></span>
                                    <div class="d-inline-block">Application</div>
                                </div>
                            </div>
                        </li>
                        <!-- end portfolio item -->
                        <!-- start portfolio item -->
                        <li class="grid-item web selected digital transition-inner-all">
                            <div class="portfolio-box" data-bottom-top="transform: translateY(-40px)"
                                data-top-bottom="transform: translateY(40px)">
                                <div class="portfolio-image bg-medium-gray border-radius-6px">
                                    <a href="demo-web-agency-single-project-creative.html"><img
                                            src="https://via.placeholder.com/800x635" alt="" /></a>
                                </div>
                                <div class="portfolio-caption pt-35px pb-35px md-pt-25px md-pb-25px">
                                    <a href="demo-web-agency-single-project-creative.html"
                                        class="text-dark-gray text-dark-gray-hover fw-600">Cropo identity</a>
                                    <span
                                        class="d-inline-block align-middle w-10px separator-line-1px bg-light-gray ms-10px me-10px"></span>
                                    <div class="d-inline-block">Packaging</div>
                                </div>
                            </div>
                        </li>
                        <!-- end portfolio item -->
                        <!-- start portfolio item -->
                        <li class="grid-item web branding transition-inner-all">
                            <div class="portfolio-box" data-bottom-top="transform: translateY(-20px)"
                                data-top-bottom="transform: translateY(-80px)">
                                <div class="portfolio-image bg-medium-gray border-radius-6px">
                                    <a href="demo-web-agency-single-project-creative.html"><img
                                            src="https://via.placeholder.com/800x635" alt="" /></a>
                                </div>
                                <div class="portfolio-caption pt-35px pb-35px md-pt-25px md-pb-25px">
                                    <a href="demo-web-agency-single-project-creative.html"
                                        class="text-dark-gray text-dark-gray-hover fw-600">Harddot stone</a>
                                    <span
                                        class="d-inline-block align-middle w-10px separator-line-1px bg-light-gray ms-10px me-10px"></span>
                                    <div class="d-inline-block">Graphics</div>
                                </div>
                            </div>
                        </li>
                        <!-- end portfolio item -->
                        <!-- start portfolio item -->
                        <li class="grid-item web selected digital transition-inner-all">
                            <div class="portfolio-box" data-bottom-top="transform: translateY(-40px)"
                                data-top-bottom="transform: translateY(40px)">
                                <div class="portfolio-image bg-medium-gray border-radius-6px">
                                    <a href="demo-web-agency-single-project-creative.html"><img
                                            src="https://via.placeholder.com/800x635" alt="" /></a>
                                </div>
                                <div class="portfolio-caption pt-35px pb-35px md-pt-25px md-pb-25px">
                                    <a href="demo-web-agency-single-project-creative.html"
                                        class="text-dark-gray text-dark-gray-hover fw-600">Violator series</a>
                                    <span
                                        class="d-inline-block align-middle w-10px separator-line-1px bg-light-gray ms-10px me-10px"></span>
                                    <div class="d-inline-block">Digital</div>
                                </div>
                            </div>
                        </li>
                        <!-- end portfolio item -->
                        <!-- start portfolio item -->
                        <li class="grid-item selected digital transition-inner-all">
                            <div class="portfolio-box" data-bottom-top="transform: translateY(-20px)"
                                data-top-bottom="transform: translateY(-80px)">
                                <div class="portfolio-image bg-medium-gray border-radius-6px">
                                    <a href="demo-web-agency-single-project-creative.html"><img
                                            src="https://via.placeholder.com/800x635" alt="" /></a>
                                </div>
                                <div class="portfolio-caption pt-35px pb-35px md-pt-25px md-pb-25px">
                                    <a href="demo-web-agency-single-project-creative.html"
                                        class="text-dark-gray text-dark-gray-hover fw-600">Pixflow studio</a>
                                    <span
                                        class="d-inline-block align-middle w-10px separator-line-1px bg-light-gray ms-10px me-10px"></span>
                                    <div class="d-inline-block">Packaging</div>
                                </div>
                            </div>
                        </li>
                        <!-- end portfolio item -->
                        <!-- start portfolio item -->
                        <li class="grid-item web branding transition-inner-all">
                            <div class="portfolio-box" data-bottom-top="transform: translateY(-40px)"
                                data-top-bottom="transform: translateY(40px)">
                                <div class="portfolio-image bg-medium-gray border-radius-6px">
                                    <a href="demo-web-agency-single-project-creative.html"><img
                                            src="https://via.placeholder.com/800x635" alt="" /></a>
                                </div>
                                <div class="portfolio-caption pt-35px pb-35px md-pt-25px md-pb-25px">
                                    <a href="demo-web-agency-single-project-creative.html"
                                        class="text-dark-gray text-dark-gray-hover fw-600">Potato islands</a>
                                    <span
                                        class="d-inline-block align-middle w-10px separator-line-1px bg-light-gray ms-10px me-10px"></span>
                                    <div class="d-inline-block">Design</div>
                                </div>
                            </div>
                        </li>
                        <!-- end portfolio item -->
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row"
                data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <div class="col-lg-5 text-center text-lg-start">
                    <h2 class="text-dark-gray fw-600 mb-25px w-90 md-w-100 ls-minus-3px">Honorable awards</h2>
                    <div
                        class="bg-dark-gray border-radius-100px fs-12 text-white ps-25px pe-25px d-inline-block text-uppercase fw-500 mb-10 ls-05px md-mb-30px">
                        Direct from the heart</div>
                    <div class="outside-box-left-35 md-outside-box-left-0 d-none d-md-block md-mb-6">
                        <div class="fs-350 xl-fs-300 lg-fs-250 text-base-color fw-600 ls-minus-20px word-break-normal"
                            data-bottom-top="transform:scale(1, 1) translate3d(0px, 0px, 0px);"
                            data-top-bottom="transform:scale(1, 1) translate3d(-100px, 0px, 0px);">awards</div>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1 text-center text-lg-start">
                    <p class="w-85 lg-w-100 mb-40px mt-10 md-mt-0 md-mb-25px">We are excited for our work and how it
                        positively impacts clients. With over 12 years of experience we have been constantly providing
                        excellent web solutions.</p>
                    <div class="row border-top border-color-dark-gray g-0">
                        <div class="col-2 text-center align-self-center">
                            <span class="text-dark-gray fs-14 fw-600">9X</span>
                        </div>
                        <div
                            class="col-8 last-paragraph-no-margin ps-30px pe-30px pt-15px pb-15px border-start border-color-dark-gray">
                            <p class="ls-minus-05px">Site of the day - <span class="fw-600 text-dark-gray">Awwwards</span>
                            </p>
                        </div>
                        <div class="col-2 align-self-center text-center">
                            <span class="text-dark-gray fs-14 fw-600">2021</span>
                        </div>
                    </div>
                    <div class="row border-top border-color-dark-gray g-0">
                        <div class="col-2 text-center align-self-center">
                            <span class="text-dark-gray fs-14 fw-600">2X</span>
                        </div>
                        <div
                            class="col-8 last-paragraph-no-margin ps-30px pe-30px pt-15px pb-15px border-start border-color-dark-gray">
                            <p class="ls-minus-05px">Site of the day - <span class="fw-600 text-dark-gray">CSS Design
                                    Awards</span></p>
                        </div>
                        <div class="col-2 align-self-center text-center">
                            <span class="text-dark-gray fs-14 fw-600">2020</span>
                        </div>
                    </div>
                    <div class="row border-top border-color-dark-gray g-0">
                        <div class="col-2 text-center align-self-center">
                            <span class="text-dark-gray fs-14 fw-600">4X</span>
                        </div>
                        <div
                            class="col-8 last-paragraph-no-margin ps-30px pe-30px pt-15px pb-15px border-start border-color-dark-gray">
                            <p class="ls-minus-05px">Site of the month - <span
                                    class="fw-600 text-dark-gray">Awwwards</span></p>
                        </div>
                        <div class="col-2 align-self-center text-center">
                            <span class="text-dark-gray fs-14 fw-600">2019</span>
                        </div>
                    </div>
                    <div class="row border-top border-bottom border-color-dark-gray g-0">
                        <div class="col-2 text-center align-self-center">
                            <span class="text-dark-gray fs-14 fw-600">3X</span>
                        </div>
                        <div
                            class="col-8 last-paragraph-no-margin ps-30px pe-30px pt-15px pb-15px border-start border-color-dark-gray">
                            <p class="ls-minus-05px">Site of the day - <span class="fw-600 text-dark-gray">The
                                    portfolio</span></p>
                        </div>
                        <div class="col-2 align-self-center text-center">
                            <span class="text-dark-gray fs-14 fw-600">2018</span>
                        </div>
                    </div>
                    <div class="row row-cols-2 row-cols-sm-3 align-items-center mt-50px sm-mt-40px justify-content-center">
                        <div class="col xs-mb-30px">
                            <a href="#"><img src="https://via.placeholder.com/170x30" alt="" /></a>
                        </div>
                        <div class="col xs-mb-30px">
                            <a href="#"><img src="https://via.placeholder.com/170x30" alt="" /></a>
                        </div>
                        <div class="col">
                            <a href="#"><img src="https://via.placeholder.com/170x30" alt="" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pb-4 lg-pb-6 sm-pb-50px position-relative bg-dark-gray section-dark">
        <div class="cover-background position-absolute h-100 w-100 left-0px top-0px"
            style="background-image: url('https://via.placeholder.com/1920x640')"></div>
        <div class="container position-relative">
            <div class="row justify-content-center align-items-center mb-9 xl-mb-5 sm-mb-30px"
                data-anime='{ "el": "childs", "translateX": [15, 0], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <div class="col-lg-5">
                    <div class="mb-15 d-flex align-items-center md-mb-30px">
                        <div class="fw-700 fs-80 text-white me-10px">4.82</div>
                        <div class="text-center">
                            <div
                                class="bg-base-color text-dark-gray border-radius-30px ps-20px pe-20px fs-16 ls-minus-2px">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <span class="text-white fs-13 fw-500 text-uppercase">Clutch review</span>
                        </div>
                    </div>
                    <div class="d-flex md-mb-25px">
                        <!-- start slider navigation -->
                        <div
                            class="slider-one-slide-prev-1 bg-sherpa-blue text-white swiper-button-prev slider-navigation-style-04 w-60px h-60px">
                            <i class="fa-solid fa-arrow-left"></i></div>
                        <div
                            class="slider-one-slide-next-1 bg-sherpa-blue text-white swiper-button-next slider-navigation-style-04 w-60px h-60px">
                            <i class="fa-solid fa-arrow-right"></i></div>
                        <!-- end slider navigation -->
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7 overflow-hidden offset-xl-1">
                    <div class="swiper magic-cursor light"
                        data-slider-options='{ "slidesPerView": 1, "spaceBetween": 40, "loop": true, "autoplay": { "delay": 3000, "disableOnInteraction": false }, "navigation": { "nextEl": ".slider-one-slide-next-1", "prevEl": ".slider-one-slide-prev-1" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "992": { "slidesPerView": 1 }, "768": { "slidesPerView":1 }, "320": { "slidesPerView": 1 } }, "effect": "slide" }'>
                        <div class="swiper-wrapper">
                            <!-- start review item -->
                            <div class="swiper-slide">
                                <h5 class="text-white mb-20px w-90 xl-w-100 lh-42 fw-400">The <span
                                        class="text-decoration-line-bottom-medium">wonderful</span> services you offer
                                    locally are great for our community. People are tired of having to travel out of town
                                    for things.</h5>
                                <span class="text-base-color fw-600 d-block fs-15 text-uppercase lh-22 ls-2px">@Herman
                                    miller</span>
                            </div>
                            <!-- end review item -->
                            <!-- start review item -->
                            <div class="swiper-slide">
                                <h5 class="text-white mb-20px w-90 xl-w-100 lh-42 fw-400">Absolutely amazing theme and
                                    <span class="text-decoration-line-bottom-medium">awesome</span> design with
                                    possibilities. It's so very easy to use and to customize everything.</h5>
                                <span class="text-base-color fw-600 d-block fs-15 text-uppercase lh-22 ls-2px">@Alexander
                                    Harad</span>
                            </div>
                            <!-- end review item -->
                            <!-- start review item -->
                            <div class="swiper-slide">
                                <h5 class="text-white mb-20px w-90 xl-w-100 lh-42 fw-400">There are design companies and
                                    then there are user <span class="text-decoration-line-bottom-medium">experience.</span>
                                    Simply the great designs and best theme for fast loading.</h5>
                                <span class="text-base-color fw-600 d-block fs-15 text-uppercase lh-22 ls-2px">@Jacob
                                    Kalling</span>
                            </div>
                            <!-- end review item -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="separator-line-1px w-100 bg-white opacity-1 mb-6 sm-mb-30px"></div>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-5 row-cols-md-3 row-cols-sm-2 clients-style-06 justify-content-center"
                data-anime='{ "el": "childs", "translateY": [0, 0], "scale": [1.1, 1], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <!-- start client item -->
                <div class="col client-box text-center md-mb-40px">
                    <a href="#"><img src="{{ asset('assets/images/logo-walmart-white.svg') }}" class="h-35px" alt=""></a>
                </div>
                <!-- end client item -->
                <!-- start client item -->
                <div class="col client-box text-center md-mb-40px">
                    <a href="#"><img src="{{ asset('assets/images/logo-netflix-white.svg') }}" class="h-35px" alt=""></a>
                </div>
                <!-- end client item -->
                <!-- start client item -->
                <div class="col client-box text-center md-mb-40px">
                    <a href="#"><img src="{{ asset('assets/images/logo-invision-white.svg') }}" class="h-35px" alt=""></a>
                </div>
                <!-- end client item -->
                <!-- start client item -->
                <div class="col client-box text-center sm-mb-40px">
                    <a href="#"><img src="{{ asset('assets/images/logo-yahoo-white.svg') }}" class="h-35px" alt=""></a>
                </div>
                <!-- end client item -->
                <!-- start client item -->
                <div class="col client-box text-center">
                    <a href="#"><img src="{{ asset('assets/images/logo-amazon-white.svg') }}" class="h-35px" alt=""></a>
                </div>
                <!-- end client item -->
            </div>
        </div>
    </section>

    <section class="pb-0">
        <div class="container">
            <div class="row align-items-center mb-4">
                <div class="col-md-6 text-center text-md-start sm-mb-20px">
                    <h2 class="fw-600 text-dark-gray mb-0 ls-minus-3px">Latest blogs</h2>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <a href="demo-web-agency-blog.html"
                        class="btn btn-large btn-expand-ltr text-dark-gray btn-rounded fw-700"><span
                            class="bg-base-color"></span>Explore all blogs</a>
                </div>
            </div>
            <div class="row">
                <div class="col-12 p-md-0">
                    <ul class="blog-classic blog-wrapper grid-loading grid grid-4col xl-grid-4col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large"
                        data-anime='{ "el": "childs", "translateY": [-15, 0], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <li class="grid-sizer"></li>
                        <!-- start blog item -->
                        <li class="grid-item">
                            <div class="card bg-transparent border-0 h-100">
                                <div class="blog-image position-relative overflow-hidden border-radius-4px">
                                    <a href="demo-web-agency-blog-single-creative.html"><img
                                            src="https://via.placeholder.com/550x395" alt=""></a>
                                </div>
                                <div class="card-body p-0 pt-30px sm-pt-20px lg-pb-20px">
                                    <span class="fs-14 text-uppercase d-block mb-5px fw-500"><a
                                            href="demo-web-agency-blog.html"
                                            class="text-dark-gray text-dark-gray-hover fw-700 categories-text">Decor</a><a
                                            href="#" class="blog-date text-medium-gray-hover">08 August
                                            2023</a></span>
                                    <a href="demo-web-agency-blog-single-creative.html"
                                        class="card-title fw-600 fs-17 lh-28 text-dark-gray text-dark-gray-hover d-inline-block w-95 sm-w-100">The
                                        best influencers to follow for sartorial inspiration.</a>
                                </div>
                            </div>
                        </li>
                        <!-- end blog item -->
                        <!-- start blog item -->
                        <li class="grid-item">
                            <div class="card bg-transparent border-0 h-100">
                                <div class="blog-image position-relative overflow-hidden border-radius-4px">
                                    <a href="demo-web-agency-blog-single-creative.html"><img
                                            src="https://via.placeholder.com/550x395" alt=""></a>
                                </div>
                                <div class="card-body p-0 pt-30px sm-pt-20px lg-pb-20px">
                                    <span class="fs-14 text-uppercase d-block mb-5px fw-500"><a
                                            href="demo-web-agency-blog.html"
                                            class="text-dark-gray text-dark-gray-hover fw-700 categories-text">Design</a><a
                                            href="#" class="blog-date text-medium-gray-hover">12 August
                                            2023</a></span>
                                    <a href="demo-web-agency-blog-single-creative.html"
                                        class="card-title fw-600 fs-17 lh-28 text-dark-gray text-dark-gray-hover d-inline-block w-95 sm-w-100">Everything
                                        you need to know about decor's big night out.</a>
                                </div>
                            </div>
                        </li>
                        <!-- end blog item -->
                        <!-- start blog item -->
                        <li class="grid-item">
                            <div class="card bg-transparent border-0 h-100">
                                <div class="blog-image position-relative overflow-hidden border-radius-4px">
                                    <a href="demo-web-agency-blog-single-creative.html"><img
                                            src="https://via.placeholder.com/550x395" alt=""></a>
                                </div>
                                <div class="card-body p-0 pt-30px sm-pt-20px lg-pb-20px">
                                    <span class="fs-14 text-uppercase d-block mb-5px fw-500"><a
                                            href="demo-web-agency-blog.html"
                                            class="text-dark-gray text-dark-gray-hover fw-700 categories-text">Decor</a><a
                                            href="#" class="blog-date text-medium-gray-hover">20 August
                                            2023</a></span>
                                    <a href="demo-web-agency-blog-single-creative.html"
                                        class="card-title fw-600 fs-17 lh-28 text-dark-gray text-dark-gray-hover d-inline-block w-95 sm-w-100">All
                                        the best looks &amp; moments from the met gala 2023.</a>
                                </div>
                            </div>
                        </li>
                        <!-- end blog item -->
                        <!-- start blog item -->
                        <li class="grid-item">
                            <div class="card bg-transparent border-0 h-100">
                                <div class="blog-image position-relative overflow-hidden border-radius-4px">
                                    <a href="demo-web-agency-blog-single-creative.html"><img
                                            src="https://via.placeholder.com/550x395" alt=""></a>
                                </div>
                                <div class="card-body p-0 pt-30px sm-pt-20px lg-pb-20px">
                                    <span class="fs-14 text-uppercase d-block mb-5px fw-500"><a
                                            href="demo-web-agency-blog.html"
                                            class="text-dark-gray text-dark-gray-hover fw-700 categories-text">Decor</a><a
                                            href="#" class="blog-date text-medium-gray-hover">26 August
                                            2023</a></span>
                                    <a href="demo-web-agency-blog-single-creative.html"
                                        class="card-title fw-600 fs-17 lh-28 text-dark-gray text-dark-gray-hover d-inline-block w-95 sm-w-100">Find
                                        a colour palettes that reflects your passion.</a>
                                </div>
                            </div>
                        </li>
                        <!-- end blog item -->
                    </ul>
                </div>
            </div>
        </div>
    </section>

@endsection
@section('js')

@endsection
