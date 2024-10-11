@extends('layouts.front')
@section('title', 'Projects')
@section('css')

@endsection
@section('content')

    @include('front.includes.page_title', [
        'title' => 'Projects',
        'sub_title' => 'Explore the some of our finest work',
    ])

    <section class="half-section pb-0">
        <div class="container">
            <div class="row"
                data-anime='{ "el": "childs", "translateY": [0, 0], "opacity": [0,1], "duration": 300, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <div class="col-sm-6 xs-mb-40px" data-bottom-top="transform: translateY(-40px)"
                    data-top-bottom="transform: translateY(40px)">
                    <a href="demo-web-agency-single-project-creative.html"><img src="https://via.placeholder.com/800x635"
                            class="border-radius-6px" alt="" /></a>
                    <div
                        class="d-flex align-items-center justify-content-center flex-column text-center w-100 mt-40px sm-mt-25px">
                        <a href="https://www.awwwards.com/" target="_blank"><img src="https://via.placeholder.com/170x30"
                                alt=""></a>
                        <div class="text-dark-gray mt-10px ls-minus-05px"><span class="fw-600">2023</span> - Site of the day
                            winner</div>
                    </div>
                </div>
                <div class="col-sm-6 mt-4 xs-mt-0" data-bottom-top="transform: translateY(40px)"
                    data-top-bottom="transform: translateY(-40px)">
                    <a href="demo-web-agency-single-project-creative.html"><img src="https://via.placeholder.com/800x635"
                            class="border-radius-6px" alt="" /></a>
                    <div
                        class="d-flex align-items-center justify-content-center flex-column text-center w-100 mt-40px sm-mt-25px">
                        <a href="https://www.envato.com/" target="_blank"><img src="https://via.placeholder.com/170x30"
                                alt=""></a>
                        <div class="text-dark-gray mt-10px ls-minus-05px"><span class="fw-600">2021</span> - Site of the day
                            nomination</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-0 ps-2 pe-2 sm-p-0">
        <div class="container">
            <div class="row align-items-end mb-8 xs-mt-6">
                <div class="col-md-9">
                    <div class="outside-box-left-20">
                        <div class="fs-350 xl-fs-300 lg-fs-250 sm-fs-200 xs-fs-120 text-base-color fw-600 ls-minus-20px position-relative d-inline-block word-break-normal"
                            data-bottom-top="transform:scale(1, 1) translate3d(0px, 0px, 0px);"
                            data-top-bottom="transform:scale(1, 1) translate3d(-100px, 0px, 0px);">projects</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row justify-content-center">
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
                                        class="d-inline-block align-middle w-10px separator-line-1px bg-light-gray ms-10px me-10px xl-ms-5px xl-me-5px"></span>
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
                                        class="d-inline-block align-middle w-10px separator-line-1px bg-light-gray ms-10px me-10px xl-ms-5px xl-me-5px"></span>
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
                                        class="d-inline-block align-middle w-10px separator-line-1px bg-light-gray ms-10px me-10px xl-ms-5px xl-me-5px"></span>
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
                                        class="d-inline-block align-middle w-10px separator-line-1px bg-light-gray ms-10px me-10px xl-ms-5px xl-me-5px"></span>
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
                                        class="d-inline-block align-middle w-10px separator-line-1px bg-light-gray ms-10px me-10px xl-ms-5px xl-me-5px"></span>
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
                                        class="d-inline-block align-middle w-10px separator-line-1px bg-light-gray ms-10px me-10px xl-ms-5px xl-me-5px"></span>
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
                                        class="d-inline-block align-middle w-10px separator-line-1px bg-light-gray ms-10px me-10px xl-ms-5px xl-me-5px"></span>
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
                                        class="d-inline-block align-middle w-10px separator-line-1px bg-light-gray ms-10px me-10px xl-ms-5px xl-me-5px"></span>
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

@endsection
@section('js')

@endsection
