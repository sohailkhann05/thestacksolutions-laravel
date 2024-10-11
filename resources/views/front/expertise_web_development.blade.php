@extends('layouts.front')
@section('title', 'Web Development')
@section('css')

@endsection
@section('content')

    @include('front.includes.page_title', [
        'title' => 'Web Development',
        'sub_title' => 'Perfect solution for your business',
    ])

    <section>
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6"
                    data-anime='{ "el": "childs", "translateX": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <span class="fs-14 fw-600 text-dark-gray text-uppercase d-block mb-15px"><i
                            class="bi bi-patch-check-fill fs-15 text-dark-gray me-5px"></i> Full service web design
                        agency</span>
                    <h3 class="text-dark-gray fw-600 ls-minus-2px">We make creative and innovative website.</h3>
                </div>
                <div class="col-xl-6 col-lg-6 offset-xl-1"
                    data-anime='{ "el": "childs", "translateX": [-50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <p class="w-90 lg-w-100">We are proudly serving designing solutions to market leaders without any doubt.
                        Our team provides the creative designing solutions that will help you in any stages.</p>
                    <span
                        class="ps-15px pe-15px m-5px text-uppercase text-dark-gray fs-12 fw-600 border-radius-100px bg-white box-shadow-small d-inline-block">UI/UX</span>
                    <span
                        class="ps-15px pe-15px m-5px text-uppercase text-dark-gray fs-12 fw-600 border-radius-100px bg-white box-shadow-small d-inline-block">Landing
                        pages</span>
                    <span
                        class="ps-15px pe-15px m-5px text-uppercase text-dark-gray fs-12 fw-600 border-radius-100px bg-white box-shadow-small d-inline-block">Wireframes</span>
                    <span
                        class="ps-15px pe-15px m-5px text-uppercase text-dark-gray fs-12 fw-600 border-radius-100px bg-white box-shadow-small d-inline-block">E-commerce</span>
                    <span
                        class="ps-15px pe-15px m-5px text-uppercase text-dark-gray fs-12 fw-600 border-radius-100px bg-white box-shadow-small d-inline-block">Web
                        templates</span>
                    <span
                        class="ps-15px pe-15px m-5px text-uppercase text-dark-gray fs-12 fw-600 border-radius-100px bg-white box-shadow-small d-inline-block">Redisigns</span>
                </div>
            </div>
        </div>
    </section>

    <section class="p-0">
        <div class="container-fluid pe-45px ps-45px">
            <div class="row g-0">
                <div class="col-12 skrollr-parallax mx-auto p-8 position-relative" data-bottom-top="width: 100%"
                    data-center-top="width: 100%;" data-parallax-background-ratio="0.5"
                    style="background-image: url(https://via.placeholder.com/1920x1100)"
                    data-anime='{ "el": "childs", "translateY": [15, 0], "translateX": [15, 0], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <div
                        class="bg-white box-shadow-quadruple-large position-relative border-radius-4px w-400px xs-w-100 overflow-hidden z-index-1 float-end">
                        <div class="p-50px lg-p-30px last-paragraph-no-margin text-center">
                            <img src="https://via.placeholder.com/130x130" class="w-85px mb-30px" alt="" />
                            <span class="fs-20 ls-minus-05px alt-font text-dark-gray fw-600 mb-10px d-block">We believe in
                                quality design</span>
                            <p class="w-95 lg-w-100">Lorem ipsum dolor amet onseetur adipiscing elit sed eiusmod tempor
                                incididunt labore magna aliqua.</p>
                        </div>
                        <div class="bg-dark-gray p-15px xs-p-10px text-center">
                            <a href="demo-web-agency-contact.html"
                                class="fs-14 xs-fs-12 ls-minus-05px text-white text-white-hover text-uppercase fw-500"><i
                                    class="feather icon-feather-mail fs-20 me-10px align-middle"></i>Talk with our expert
                                team</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row mb-7">
                <div class="col-lg-5 md-mb-10px"
                    data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <span
                        class="ps-20px pe-20px mb-30px text-uppercase text-dark-gray fs-12 border-radius-100px bg-dark-gray text-white box-shadow-small d-inline-block"
                        style="">Why crafto</span>
                    <h3 class="text-dark-gray fw-600 ls-minus-2px">We made things easier for your business.</h3>
                </div>
                <div class="col-lg-7"
                    data-anime='{ "el": "childs", "translateY": [15, 0], "opacity": [0,1], "duration": 300, "delay": 0, "staggervalue": 100, "easing": "easeOutQuad" }'>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="fs-19 fw-600 text-dark-gray">Originality</div>
                        </div>
                        <div class="col-md-9 last-paragraph-no-margin">
                            <p>We are proudly serving designing solutions to market leaders without any doubt. Our team
                                provides the creative designing solutions that will help you in any stages.</p>
                        </div>
                    </div>
                    <div class="separator-line-1px bg-dark-gray mt-35px mb-35px"></div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="fs-19 fw-600 text-dark-gray">Creativity</div>
                        </div>
                        <div class="col-md-9 last-paragraph-no-margin">
                            <p>We are proudly serving designing solutions to market leaders without any doubt. Our team
                                provides the creative designing solutions that will help you in any stages.</p>
                        </div>
                    </div>
                    <div class="separator-line-1px bg-dark-gray mt-35px mb-35px"></div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="fs-19 fw-600 text-dark-gray">Impactful</div>
                        </div>
                        <div class="col-md-9 last-paragraph-no-margin">
                            <p>We are proudly serving designing solutions to market leaders without any doubt. Our team
                                provides the creative designing solutions that will help you in any stages.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-0">
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
                    <h2
                        class="h1 text-dark-gray fw-600 mb-40px md-mb-25px outside-box-left-15 md-outside-box-left-0 ls-minus-3px word-break-normal">
                        We create unique digital experiences.</h2>
                    <p class="w-85 lg-w-100">We are excited for our work and how it positively impacts clients. With over 12
                        year of experience have been constantly providing excellent.</p>
                    <ul class="p-0 m-0 list-style-02">
                        <li class="text-dark-gray pb-5px"><i class="bi bi-check-lg fs-18 me-10px"></i>The expertise of
                            professional skills.</li>
                        <li class="text-dark-gray pb-5px"><i class="bi bi-check-lg fs-18 me-10px"></i>Support and
                            maintenance of your website.</li>
                        <li class="text-dark-gray pb-5px"><i class="bi bi-check-lg fs-18 me-10px"></i>Visionary with a
                            futuristic approach.</li>
                        <li class="text-dark-gray pb-5px"><i class="bi bi-check-lg fs-18 me-10px"></i>Delivering a high
                            quality website design.</li>
                    </ul>
                    <div
                        class="pt-20px pb-20px ps-30px pe-30px bg-white border-radius-6px box-shadow-medium w-80 lg-w-100 mt-30px mb-15px icon-with-text-style-08">
                        <div class="feature-box feature-box-left-icon-middle d-inline-flex align-top">
                            <div class="feature-box-icon me-15px">
                                <i class="bi bi-people icon-very-medium text-dark-gray"></i>
                            </div>
                            <div class="feature-box-content">
                                <span class="fw-600 text-dark-gray d-block lh-26">10k+ people trusting agency.</span>
                            </div>
                        </div>
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
                        <div class="number d-inline-block fs-90 fw-700 text-outline text-outline-color-extra-medium-gray">
                            01</div>
                    </div>
                    <span class="fs-19 fw-600 text-dark-gray mb-5px d-block position-relative">Luminous color scheme</span>
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
                        <div class="number d-inline-block fs-90 fw-700 text-outline text-outline-color-extra-medium-gray">
                            02</div>
                    </div>
                    <span class="fs-19 fw-600 text-dark-gray mb-5px d-block position-relative">Minimalist navigation</span>
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
                        <div class="number d-inline-block fs-90 fw-700 text-outline text-outline-color-extra-medium-gray">
                            03</div>
                    </div>
                    <span class="fs-19 fw-600 text-dark-gray mb-5px d-block position-relative">Massive font sizes</span>
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

@endsection
@section('js')

@endsection