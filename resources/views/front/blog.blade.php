@extends('layouts.front')
@section('title', 'Blog')
@section('css')

@endsection
@section('content')

    @include('front.includes.page_title', [
        'title' => 'Latest Blog',
        'sub_title' => 'News from the digital web agency',
    ])

    <section class="p-0">
        <div class="container">
            <div class="row mt-7">
                <div class="col-lg-5 md-mb-35px">
                    <h2 class="text-dark-gray fw-600 mb-10 ls-minus-2px md-mb-0">Most popular agency articles.</h2>
                    <div class="outside-box-left-25 d-none d-lg-inline-block">
                        <div class="fs-350 xl-fs-300 lg-fs-250 text-base-color fw-600 ls-minus-20px word-break-normal"
                            data-bottom-top="transform:scale(1, 1) translate3d(0px, 0px, 0px);"
                            data-top-bottom="transform:scale(1, 1) translate3d(-50px, 0px, 0px);">article</div>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <ul class="popular-post-sidebar position-relative"
                        data-anime='{ "el": "childs", "translateY": [15, 0], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <li class="d-sm-flex align-items-center mb-35px">
                            <figure>
                                <a href="demo-web-agency-blog-single-creative.html"><img
                                        src="https://via.placeholder.com/600x415" class="border-radius-4px"
                                        alt=""></a>
                            </figure>
                            <div class="col media-body">
                                <a href="demo-web-agency-blog-single-creative.html"
                                    class="fw-600 fs-22 lh-30 ls-minus-05px text-dark-gray text-dark-gray-hover d-inline-block mb-15px w-85 xl-w-100">Everything
                                    is designed things are good designed.</a>
                                <div>
                                    <a href="demo-web-agency-blog.html"
                                        class="d-inline-block fs-14 fw-700 text-uppercase text-dark-gray text-dark-gray-hover">Design</a>
                                    <span
                                        class="d-inline-block fs-10 alt-font align-middle opacity-7 ms-5px me-5px">•</span>
                                    <a href="#"
                                        class="d-inline-block fs-14 text-uppercase fw-500 text-medium-gray-hover">08
                                        December 2023</a>
                                </div>
                            </div>
                        </li>
                        <li class="d-sm-flex align-items-center mb-35px">
                            <figure>
                                <a href="demo-web-agency-blog-single-creative.html"><img
                                        src="https://via.placeholder.com/600x415" class="border-radius-4px"
                                        alt=""></a>
                            </figure>
                            <div class="col media-body">
                                <a href="demo-web-agency-blog-single-creative.html"
                                    class="fw-600 fs-22 lh-30 ls-minus-05px text-dark-gray text-dark-gray-hover d-inline-block mb-15px w-85 xl-w-100">The
                                    golden rule finds no limit application in business.</a>
                                <div>
                                    <a href="demo-web-agency-blog.html"
                                        class="d-inline-block fs-14 fw-700 text-uppercase text-dark-gray text-dark-gray-hover">Application</a>
                                    <span
                                        class="d-inline-block fs-10 alt-font align-middle opacity-7 ms-5px me-5px">•</span>
                                    <a href="#"
                                        class="d-inline-block fs-14 text-uppercase fw-500 text-medium-gray-hover">08
                                        December 2023</a>
                                </div>
                            </div>
                        </li>
                        <li class="d-sm-flex align-items-center">
                            <figure>
                                <a href="demo-web-agency-blog-single-creative.html"><img
                                        src="https://via.placeholder.com/600x415" class="border-radius-4px"
                                        alt=""></a>
                            </figure>
                            <div class="col media-body">
                                <a href="demo-web-agency-blog-single-creative.html"
                                    class="fw-600 fs-22 lh-30 ls-minus-05px text-dark-gray text-dark-gray-hover d-inline-block mb-15px w-85 xl-w-100">Ambition
                                    is to be the spider in the world wide web.</a>
                                <div>
                                    <a href="demo-web-agency-blog.html"
                                        class="d-inline-block fs-14 fw-700 text-uppercase text-dark-gray text-dark-gray-hover">Development</a>
                                    <span
                                        class="d-inline-block fs-10 alt-font align-middle opacity-7 ms-5px me-5px">•</span>
                                    <a href="#"
                                        class="d-inline-block fs-14 text-uppercase fw-500 text-medium-gray-hover">08
                                        December 2023</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="half-section pb-0">
        <div class="container">
            <div class="row align-items-center mb-4 lg-mb-3">
                <div class="col-12 tab-style-04">
                    <!-- filter navigation -->
                    <ul class="portfolio-filter nav nav-tabs justify-content-center text-center border-0 fw-500">
                        <li class="nav active"><a data-filter="*" href="#">All</a></li>
                        <li class="nav"><a data-filter=".design" href="#">Design</a></li>
                        <li class="nav"><a data-filter=".development" href="#">Development</a></li>
                        <li class="nav"><a data-filter=".marketing" href="#">Marketing</a></li>
                        <li class="nav"><a data-filter=".other" href="#">Other</a></li>
                    </ul>
                    <!-- end filter navigation -->
                </div>
            </div>
            <div class="row">
                <div class="col-12 filter-content p-md-0">
                    <ul
                        class="blog-classic portfolio-wrapper grid-loading grid grid-4col xxl-grid-4col xl-grid-4col lg-grid-3col md-grid-2col sm-grid-1col xs-grid-1col gutter-extra-large">
                        <li class="grid-sizer"></li>
                        <!-- start portfolio item -->
                        <li class="grid-item design marketing other">
                            <div class="card bg-transparent border-0 h-100">
                                <div class="blog-image position-relative overflow-hidden border-radius-4px">
                                    <a href="demo-web-agency-blog-single-creative.html"><img
                                            src="https://via.placeholder.com/550x395" alt=""></a>
                                </div>
                                <div class="card-body px-0 pt-30px pb-30px xs-pb-15px">
                                    <span class="fs-14 text-uppercase d-block mb-5px fw-500"><a
                                            href="demo-web-agency-blog.html"
                                            class="text-dark-gray text-dark-gray-hover fw-700 categories-text">Design</a><a
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
                        <li class="grid-item development other">
                            <div class="card bg-transparent border-0 h-100">
                                <div class="blog-image position-relative overflow-hidden border-radius-4px">
                                    <a href="demo-web-agency-blog-single-creative.html"><img
                                            src="https://via.placeholder.com/550x395" alt=""></a>
                                </div>
                                <div class="card-body px-0 pt-30px pb-30px xs-pb-15px">
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
                        <li class="grid-item design development">
                            <div class="card bg-transparent border-0 h-100">
                                <div class="blog-image position-relative overflow-hidden border-radius-4px">
                                    <a href="demo-web-agency-blog-single-creative.html"><img
                                            src="https://via.placeholder.com/550x395" alt=""></a>
                                </div>
                                <div class="card-body px-0 pt-30px pb-30px xs-pb-15px">
                                    <span class="fs-14 text-uppercase d-block mb-5px fw-500"><a
                                            href="demo-web-agency-blog.html"
                                            class="text-dark-gray text-dark-gray-hover fw-700 categories-text">Design</a><a
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
                        <li class="grid-item development other">
                            <div class="card bg-transparent border-0 h-100">
                                <div class="blog-image position-relative overflow-hidden border-radius-4px">
                                    <a href="demo-web-agency-blog-single-creative.html"><img
                                            src="https://via.placeholder.com/550x395" alt=""></a>
                                </div>
                                <div class="card-body px-0 pt-30px pb-30px xs-pb-15px">
                                    <span class="fs-14 text-uppercase d-block mb-5px fw-500"><a
                                            href="demo-web-agency-blog.html"
                                            class="text-dark-gray text-dark-gray-hover fw-700 categories-text">Design</a><a
                                            href="#" class="blog-date text-medium-gray-hover">26 August
                                            2023</a></span>
                                    <a href="demo-web-agency-blog-single-creative.html"
                                        class="card-title fw-600 fs-17 lh-28 text-dark-gray text-dark-gray-hover d-inline-block w-95 sm-w-100">Find
                                        a colour palettes that reflects your passion.</a>
                                </div>
                            </div>
                        </li>
                        <!-- end blog item -->
                        <li class="grid-item design marketing">
                            <div class="card bg-transparent border-0 h-100">
                                <div class="blog-image position-relative overflow-hidden border-radius-4px">
                                    <a href="demo-web-agency-blog-single-creative.html"><img
                                            src="https://via.placeholder.com/550x395" alt=""></a>
                                </div>
                                <div class="card-body px-0 pt-30px pb-30px xs-pb-15px">
                                    <span class="fs-14 text-uppercase d-block mb-5px fw-500"><a
                                            href="demo-web-agency-blog.html"
                                            class="text-dark-gray text-dark-gray-hover fw-700 categories-text">Design</a><a
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
                        <li class="grid-item design marketing">
                            <div class="card bg-transparent border-0 h-100">
                                <div class="blog-image position-relative overflow-hidden border-radius-4px">
                                    <a href="demo-web-agency-blog-single-creative.html"><img
                                            src="https://via.placeholder.com/550x395" alt=""></a>
                                </div>
                                <div class="card-body px-0 pt-30px pb-30px xs-pb-15px">
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
                        <li class="grid-item development other">
                            <div class="card bg-transparent border-0 h-100">
                                <div class="blog-image position-relative overflow-hidden border-radius-4px">
                                    <a href="demo-web-agency-blog-single-creative.html"><img
                                            src="https://via.placeholder.com/550x395" alt=""></a>
                                </div>
                                <div class="card-body px-0 pt-30px pb-30px xs-pb-15px">
                                    <span class="fs-14 text-uppercase d-block mb-5px fw-500"><a
                                            href="demo-web-agency-blog.html"
                                            class="text-dark-gray text-dark-gray-hover fw-700 categories-text">Design</a><a
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
                        <li class="grid-item marketing">
                            <div class="card bg-transparent border-0 h-100">
                                <div class="blog-image position-relative overflow-hidden border-radius-4px">
                                    <a href="demo-web-agency-blog-single-creative.html"><img
                                            src="https://via.placeholder.com/550x395" alt=""></a>
                                </div>
                                <div class="card-body px-0 pt-30px pb-30px xs-pb-15px">
                                    <span class="fs-14 text-uppercase d-block mb-5px fw-500"><a
                                            href="demo-web-agency-blog.html"
                                            class="text-dark-gray text-dark-gray-hover fw-700 categories-text">Design</a><a
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
