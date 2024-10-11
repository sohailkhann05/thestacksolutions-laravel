<footer class="p-0">
    <div class="container">
        <div class="row align-items-center mb-4 sm-mb-6">
            <div class="col-md-10 col-sm-8 text-center text-sm-start xs-mb-25px">
                <h5 class="mb-0 text-dark-gray fw-400 ls-minus-1px">
                    Let's make something great <a href="{{ route('contact') }}" class="text-decoration-line-bottom-medium fw-600 text-dark-gray text-dark-gray-hover">work together?</a>
                </h5>
            </div>
            <div class="col-md-2 col-sm-4 text-center text-sm-end">
                <a href="{{ route('home') }}" class="footer-logo d-inline-block">
                    <img src="{{ asset('assets/images/demo-web-agency-logo-black.png') }}" data-at2x="{{ asset('assets/images/demo-web-agency-logo-black@2x.png') }}" alt="">
                </a>
            </div>
        </div> 
        <div class="row align-items-end mb-6 sm-mb-40px"> 
            <div class="col-lg-3 col-sm-4 text-center text-sm-start xs-mb-25px last-paragraph-no-margin">
                <span class="d-block text-dark-gray ls-minus-05px mb-5px fw-600">Crafto - London</span>
                <p class="w-80 lg-w-100 text-medium-gray fs-15 lh-28">401 Broadway, 24th Floor, Orchard View, London, UK</p>
            </div>
            <div class="col-lg-3 col-sm-4 text-center text-sm-start xs-mb-25px last-paragraph-no-margin">
                <span class="d-block text-dark-gray ls-minus-05px mb-5px fw-600">Crafto - France</span>
                <p class="w-80 lg-w-100 text-medium-gray fs-15 lh-28">27 Eden Walk Eden Centre, Orchard View, Paris, France</p>
            </div>
            <div class="col-md-3 col-sm-4 last-paragraph-no-margin ms-auto text-center text-sm-end"> 
                <a href="tel:1235678901" class="text-dark-gray d-block lh-18 text-dark-gray-hover">+ 123 567 8901</a>
                <a href="mailto:info@domain.com" class="text-dark-gray text-dark-gray-hover fw-600 text-decoration-line-bottom">info@domain.com</a>
            </div>
        </div>
    </div> 
    <div class="footer-bottom pt-25px pb-25px border-top border-color-charcoal-grey">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 text-center text-lg-start md-mb-10px"> 
                    <ul class="footer-navbar fw-600 fs-16"> 
                        <li class="nav-item active"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
                        <li class="nav-item"><a href="{{ route('agency') }}" class="nav-link">Agency</a></li>
                        <li class="nav-item"><a href="{{ route('expertise') }}" class="nav-link">Expertise</a></li>
                        <li class="nav-item"><a href="{{ route('projects') }}" class="nav-link">Projects</a></li>
                        <li class="nav-item"><a href="{{ route('people') }}" class="nav-link">People</a></li> 
                        <li class="nav-item"><a href="{{ route('blog') }}" class="nav-link">Blog</a></li>  
                        <li class="nav-item"><a href="{{ route('contact') }}" class="nav-link">Contact</a></li>
                    </ul>
                </div>   
                <div class="col-lg-5 text-center text-lg-end"> 
                    <span class="fs-15">&copy; {{ date('Y') }} {{ env('APP_NAME') }}</span>
                </div>
            </div>
        </div>
    </div>
</footer>