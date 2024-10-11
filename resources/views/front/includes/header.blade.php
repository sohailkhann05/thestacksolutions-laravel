<header> 
    <nav class="navbar navbar-expand-lg header-light header-transparent bg-transparent disable-fixed">
        <div class="container-fluid">
            <div class="col-auto col-lg-2 me-lg-0 me-auto">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="{{ asset('assets/images/demo-web-agency-logo-black.png') }}" data-at2x="{{ asset('assets/images/demo-web-agency-logo-black@2x.png') }}" alt="" class="default-logo">
                    <img src="{{ asset('assets/images/demo-web-agency-logo-black.png') }}" data-at2x="{{ asset('assets/images/demo-web-agency-logo-black@2x.png') }}" alt="" class="alt-logo">
                    <img src="{{ asset('assets/images/demo-web-agency-logo-black.png') }}" data-at2x="{{ asset('assets/images/demo-web-agency-logo-black@2x.png') }}" alt="" class="mobile-logo"> 
                </a>
            </div>
            <div class="col-auto col-lg-8 menu-order position-static">
                <button class="navbar-toggler float-start" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav"> 
                    <ul class="navbar-nav"> 
                        <li class="nav-item"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
                        <li class="nav-item"><a href="{{ route('agency') }}" class="nav-link">Agency</a></li>
                        <li class="nav-item dropdown dropdown-with-icon">
                            <a href="{{ route('expertise') }}" class="nav-link">Expertise</a>
                            <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li>
                                    <a href="{{ route('expertise_web_design') }}">
                                        <img src="https://via.placeholder.com/130x130" class="w-40px" alt=""/> 
                                        <div class="submenu-icon-content">
                                            <span>Web design</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('expertise_web_development') }}">
                                        <img src="https://via.placeholder.com/130x130" class="w-40px" alt=""/> 
                                        <div class="submenu-icon-content">
                                            <span>Web development</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('expertise_ecommerce_solution') }}">
                                        <img src="https://via.placeholder.com/130x130" class="w-40px" alt=""/> 
                                        <div class="submenu-icon-content">
                                            <span>eCommerce solution</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('expertise_content_writing') }}">
                                        <img src="https://via.placeholder.com/130x130" class="w-40px" alt=""/> 
                                        <div class="submenu-icon-content">
                                            <span>Content writing</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item"><a href="{{ route('projects') }}" class="nav-link">Projects</a></li>
                        <li class="nav-item"><a href="{{ route('people') }}" class="nav-link">People</a></li> 
                        <li class="nav-item"><a href="{{ route('blog') }}" class="nav-link">Blog</a></li>  
                        <li class="nav-item"><a href="{{ route('contact') }}" class="nav-link">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-auto col-lg-2 text-end">
                <div class="header-icon"> 
                    <div class="header-button">
                        <a href="{{ route('contact') }}" class="btn btn-rounded btn-dark-gray btn-medium btn-switch-text btn-box-shadow text-transform-none">
                            <span>
                                <span class="btn-double-text" data-text="Hire agency">Hire agency</span>
                                <span><i class="fa-solid fa-arrow-right"></i></span>
                            </span>
                        </a>
                    </div>
                </div>  
            </div>
        </div>
    </nav>
</header>