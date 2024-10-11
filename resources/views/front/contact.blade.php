@extends('layouts.front')
@section('title', 'Contact')
@section('css')

@endsection
@section('content')

    @include('front.includes.page_title', [
        'title' => 'Contact',
        'sub_title' => 'We\'d love to hear from you',
    ])

    <section class="p-0">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-3 row-cols-sm-2 mt-4 justify-content-center"
                data-anime='{ "el": "childs", "translateY": [0, 0], "opacity": [0,1], "duration": 300, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <div class="col sm-mb-30px text-center text-sm-start">
                    <span class="fs-14 text-uppercase fw-500 d-block">Have questions?</span>
                    <a href="mailto:help@crafto.com"
                        class="fs-22 ls-minus-05px text-dark-gray fw-500 btn btn-link-gradient expand text-transform-none">help@crafto.com<span
                            class="bg-dark-gray"></span></a>
                </div>
                <div class="col sm-mb-30px text-center text-sm-start">
                    <span class="fs-14 text-uppercase fw-500 d-block">Join our team?</span>
                    <a href="mailto:careers@crafto.com"
                        class="fs-22 ls-minus-05px text-dark-gray fw-500 btn btn-link-gradient expand text-transform-none">careers@crafto.com<span
                            class="bg-dark-gray"></span></a>
                </div>
                <div class="col text-center text-sm-start">
                    <span class="fs-14 text-uppercase fw-500 d-block">Business inquiries?</span>
                    <a href="mailto:hello@crafto.com"
                        class="fs-22 ls-minus-05px text-dark-gray fw-500 btn btn-link-gradient expand text-transform-none">hello@crafto.com<span
                            class="bg-dark-gray"></span></a>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-4 lg-pt-65px">
        <div class="container">
            <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 justify-content-center">
                <div class="col md-mb-60px sm-mb-45px" data-bottom-top="transform: translateY(50px)"
                    data-top-bottom="transform: translateY(-50px)">
                    <div>
                        <img src="https://via.placeholder.com/600x440" class="border-radius-4px" alt="" />
                    </div>
                    <div class="position-relative ps-40px pe-40px pt-50px lg-ps-25px lg-pe-25px sm-pt-35px">
                        <div
                            class="fs-80 fw-700 text-uppercase text-dark-gray position-absolute top-minus-40px left-40px lg-left-25px">
                            Ch</div>
                        <p class="mt-10px mb-15px lh-28">701 Sondanella, 18th floor, Gunsberg, Switzerland</p>
                        <div class="d-block">
                            <span class="text-dark-gray fw-600">Email:</span>
                            <a href="mailto:info@yourdomain.com"
                                class="fw-500 text-decoration-line-bottom text-dark-gray text-dark-gray-hover">info@yourdomain.com</a>
                        </div>
                        <div class="d-block">
                            <span class="text-dark-gray fw-600">Phone:</span>
                            <a href="tel:12345678910" class="text-dark-gray-hover">123 456 78910</a>
                        </div>
                        <div class="text-dark-gray mt-20px">
                            <a href="https://maps.google.com/maps?ll=-37.805688,144.962312&amp;z=17&amp;t=m&amp;hl=en-US&amp;gl=IN&amp;mapclient=embed&amp;cid=13153204942596594449"
                                target="_blank" class="btn btn-large btn-expand-ltr text-dark-gray btn-rounded fw-700"><span
                                    class="bg-base-color"></span>View on google map</a>
                        </div>
                    </div>
                </div>
                <div class="col mt-4 md-mt-0 md-mb-60px sm-mb-45px" data-bottom-top="transform: translateY(-50px)"
                    data-top-bottom="transform: translateY(50px)">
                    <div>
                        <img src="https://via.placeholder.com/600x440" class="border-radius-4px" alt="" />
                    </div>
                    <div class="position-relative ps-40px pe-40px pt-50px lg-ps-25px lg-pe-25px sm-pt-35px">
                        <div
                            class="fs-80 fw-700 text-uppercase text-dark-gray position-absolute top-minus-40px left-40px lg-left-25px">
                            Uk</div>
                        <p class="mt-10px mb-15px lh-28">21 Verneuil street, Office 136, Orchard View, London</p>
                        <div class="d-block">
                            <span class="text-dark-gray fw-600">Email:</span>
                            <a href="mailto:info@yourdomain.com"
                                class="fw-500 text-decoration-line-bottom text-dark-gray text-dark-gray-hover">info@yourdomain.com</a>
                        </div>
                        <div class="d-block">
                            <span class="text-dark-gray fw-600">Phone:</span>
                            <a href="tel:12345678910" class="text-dark-gray-hover">123 456 78910</a>
                        </div>
                        <div class="text-dark-gray mt-20px">
                            <a href="https://maps.google.com/maps?ll=-37.805688,144.962312&amp;z=17&amp;t=m&amp;hl=en-US&amp;gl=IN&amp;mapclient=embed&amp;cid=13153204942596594449"
                                target="_blank" class="btn btn-large btn-expand-ltr text-dark-gray btn-rounded fw-700"><span
                                    class="bg-base-color"></span>View on google map</a>
                        </div>
                    </div>
                </div>
                <div class="col" data-bottom-top="transform: translateY(50px)"
                    data-top-bottom="transform: translateY(-50px)">
                    <div>
                        <img src="https://via.placeholder.com/600x440" class="border-radius-4px" alt="" />
                    </div>
                    <div class="position-relative ps-40px pe-40px pt-50px lg-ps-25px lg-pe-25px sm-pt-35px">
                        <div
                            class="fs-80 fw-700 text-uppercase text-dark-gray position-absolute top-minus-40px left-40px lg-left-25px">
                            Fr</div>
                        <p class="mt-10px mb-15px lh-28">301 Broadway block, 24th floor, Orchard, Paris, France</p>
                        <div class="d-block">
                            <span class="text-dark-gray fw-600">Email:</span>
                            <a href="mailto:info@yourdomain.com"
                                class="fw-500 text-decoration-line-bottom text-dark-gray text-dark-gray-hover">info@yourdomain.com</a>
                        </div>
                        <div class="d-block">
                            <span class="text-dark-gray fw-600">Phone:</span>
                            <a href="tel:12345678910" class="text-dark-gray-hover">123 456 78910</a>
                        </div>
                        <div class="text-dark-gray mt-20px">
                            <a href="https://maps.google.com/maps?ll=-37.805688,144.962312&amp;z=17&amp;t=m&amp;hl=en-US&amp;gl=IN&amp;mapclient=embed&amp;cid=13153204942596594449"
                                target="_blank" class="btn btn-large btn-expand-ltr text-dark-gray btn-rounded fw-700"><span
                                    class="bg-base-color"></span>View on google map</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-2">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6">
                    <h2 class="text-dark-gray fw-600 mb-10 ls-minus-2px">Let us help you get your project started.</h2>
                    <div class="outside-box-left-35 d-none d-lg-inline-block">
                        <div class="fs-350 xl-fs-300 lg-fs-250 text-base-color fw-600 ls-minus-20px word-break-normal"
                            data-bottom-top="transform:scale(1, 1) translate3d(0px, 0px, 0px);"
                            data-top-bottom="transform:scale(1, 1) translate3d(-100px, 0px, 0px);">contact</div>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1 contact-form-style-03"
                    data-anime='{ "el": "childs", "translateY": [-15, 0], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <h6 class="fw-500 text-dark-gray mb-20px sm-mb-10px ls-minus-05px"><span class="fw-700">Hello,</span>
                        Tell us about your project.</h6>
                    <form action="email-templates/contact-form.php" method="post">
                        <div class="position-relative form-group mb-20px">
                            <span class="form-icon"><i class="bi bi-person icon-extra-medium text-dark-gray"></i></span>
                            <input class="ps-0 border-radius-0px border-color-dark-gray form-control required"
                                type="text" name="name" placeholder="Your name*" />
                        </div>
                        <div class="position-relative form-group mb-20px">
                            <span class="form-icon"><i class="bi bi-envelope icon-extra-medium text-dark-gray"></i></span>
                            <input
                                class="ps-0 border-radius-0px border-bottom border-color-dark-gray form-control required"
                                type="email" name="email" placeholder="Your email address*" />
                        </div>
                        <div class="position-relative form-group form-textarea mb-0">
                            <textarea class="ps-0 border-radius-0px border-bottom border-color-dark-gray form-control" name="comment"
                                placeholder="Your message" rows="4"></textarea>
                            <span class="form-icon"><i
                                    class="bi bi-chat-square-dots icon-extra-medium text-dark-gray"></i></span>
                            <input type="hidden" name="redirect" value="">
                            <button
                                class="btn submit btn-small btn-dark-gray btn-box-shadow btn-round-edge mt-35px mb-25px w-100"
                                type="submit">Send message</button>
                            <p class="fs-14 lh-24 w-100 mb-0 text-center text-lg-start">We are committed to protecting your
                                privacy. We will never collect information about you without your explicit consent.</p>
                            <div class="form-results mt-20px d-none"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="py-0">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 p-0">
                    <div id="map" class="map h-650px md-h-500px sm-h-400px"
                        data-map-options='{ "lat": -37.805688, "lng": 144.962312, "style": "Silver", "marker": { "type": "image", "class": "marker01", "src": "images/demo-web-agency-contact-04.png" }, "popup": { "defaultOpen": false, "html": "<div class=infowindow><strong class=\"mb-3 d-inline-block alt-font\">Crafto Web Agency</strong><p class=\"alt-font\">16122 Collins street, Melbourne, Australia</p></div><div class=\"google-maps-link alt-font\"> <a aria-label=\"View larger map\" target=\"_blank\" jstcache=\"31\" href=\"https://maps.google.com/maps?ll=-37.805688,144.962312&amp;z=17&amp;t=m&amp;hl=en-US&amp;gl=IN&amp;mapclient=embed&amp;cid=13153204942596594449\" jsaction=\"mouseup:placeCard.largerMap\">VIEW LARGER MAP</a></div>" } }'>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pb-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12 col-sm-12 text-center elements-social social-icon-style-06 lg-mb-30px">
                    <div class="fs-22 mb-25px text-dark-gray">Connect with <span class="fw-600">social media</span></div>
                    <ul class="extra-large-icon fw-600"
                        data-anime='{ "el": "childs", "translateY": [-15, 0], "opacity": [0,1], "duration": 500, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <li><a class="facebook" href="https://www.facebook.com" target="_blank"><span
                                    class="brand-label text-dark-gray">Fb</span><span
                                    class="brand-icon fa-brands fa-facebook-f"></span></a></li>
                        <li><a class="dribbble" href="http://www.dribbble.com" target="_blank"><span
                                    class="brand-label text-dark-gray">Db</span><span
                                    class="brand-icon fa-brands fa-dribbble"></span></a></li>
                        <li><a class="twitter" href="http://www.twitter.com" target="_blank"><span
                                    class="brand-label text-dark-gray">Tw</span><span
                                    class="brand-icon fa-brands fa-twitter"></span></a></li>
                        <li><a class="behance" href="http://www.behance.com" target="_blank"><span
                                    class="brand-label text-dark-gray">Be</span><span
                                    class="brand-icon fa-brands fa-behance"></span></a></li>
                        <li><a class="pinterest" href="https://in.pinterest.com" target="_blank"><span
                                    class="brand-label text-dark-gray">Pt</span><span
                                    class="brand-icon fa-brands fa-pinterest-p"></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

@endsection
@section('js')

@endsection
