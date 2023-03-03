<!-- Start Navbar Area -->
<div class="navbar-area">
    <div class="main-responsive-nav">
        <div class="container">
            <div class="main-responsive-menu">
                <div class="logo">
                    <a href="{{ route('home') }}">
                        <h1>{{ _settings('SITE_TITLE') }}</h1>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="main-navbar">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <h1>{{ _settings('SITE_TITLE') }}</h1>
                </a>

                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="#" class="nav-link active">
                                Home 
                                <i class='bx bx-chevron-down'></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="index.html" class="nav-link active">
                                        Burger Home
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="index-2.html" class="nav-link">
                                        Pizza Home
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="index-3.html" class="nav-link">
                                        Vegan Home
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                Pages 
                                <i class='bx bx-chevron-down'></i>
                            </a>

                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="about.html" class="nav-link">
                                        About
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="team.html" class="nav-link">
                                        Team
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="faq.html" class="nav-link">
                                        FAQ
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="gallery.html" class="nav-link">
                                        Gallery
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="testimonials.html" class="nav-link">
                                        Testimonials
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Event 
                                        <i class='bx bx-chevron-down'></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="event.html" class="nav-link">
                                                Event
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="event-details.html" class="nav-link">
                                                Event Details
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            
                                <li class="nav-item">
                                    <a href="sign-in.html" class="nav-link">
                                        Sign In
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="sign-up.html" class="nav-link">
                                        Sign Up
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="terms-condition.html" class="nav-link">
                                        Terms & Conditions
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="privacy-policy.html" class="nav-link">
                                        Privacy Policy
                                    </a>
                                </li>
                            
                                <li class="nav-item">
                                    <a href="error-404.html" class="nav-link">
                                        404 Error
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="contact.html" class="nav-link">
                                        Contact
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="menu.html" class="nav-link">
                                Menu
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                Shop 
                                <i class='bx bx-chevron-down'></i>
                            </a>

                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="shop.html" class="nav-link">
                                        Shop List
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="cart.html" class="nav-link">
                                        Cart
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="checkout.html" class="nav-link">
                                        Checkout
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="product-details.html" class="nav-link">
                                        Products Details
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                Blog 
                                <i class='bx bx-chevron-down'></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="blog-1.html" class="nav-link">
                                        Blog Grid
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="blog-2.html" class="nav-link">
                                        Blog Right Sidebar
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="blog-details.html" class="nav-link">
                                        Blog Details
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="contact.html" class="nav-link">
                                Contact
                            </a>
                        </li>
                    </ul>

                    <div class="others-options d-flex align-items-center">
                        <div class="option-item">
                            <div class="cart-btn">
                                <a href="cart.html">
                                    <i class="flaticon-shopping-cart"></i>
                                    <span>0</span>
                                </a>
                            </div>
                        </div>

                        <div class="option-item">
                            <a href="shop.html" class="default-btn">
                                Order Online
                                <span></span>
                            </a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
<!-- End Navbar Area -->