@extends('front.layout.app')

@section('styles')
@endsection

@section('title')
    Home
@endsection

@section('content')
<!-- Start Main Slider Area -->
<div class="main-slider-area">
    <div class="home-slider owl-carousel owl-theme">
        <div class="home-item item-bg1">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="slider-content">
                                    <img src="{{ asset('frontend/assets/img/slider/burger.png') }}" alt="image">
                                    <span>Updated Menu's Item</span>
                                    <h1>Chickensup Burger</h1>

                                    <ul class="list">
                                        <li>
                                            <i class="flaticon-share"></i>
                                            Integrated With Mushroom
                                        </li>
                                        <li>
                                            <i class="flaticon-share"></i>
                                            Cheese Integrated
                                        </li>
                                        <li>
                                            <i class="flaticon-share"></i>
                                            Bacon Flavour
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="slider-image">
                                    <img src="{{ asset('frontend/assets/img/slider/image1.png') }}" alt="image">

                                    <div class="shape">
                                        <img src="{{ asset('frontend/assets/img/slider/shape.png') }}" alt="image">
                                        <div class="dollar">
                                            <span>Only</span>
                                            <h3>$45.88</h3>
                                            <i class="flaticon-plus"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="home-item item-bg1">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="slider-content">
                                    <img src="{{ asset('frontend/assets/img/slider/burger.png') }}" alt="image">
                                    <span>Updated Menu's Item</span>
                                    <h1>Chickensup Burger</h1>

                                    <ul class="list">
                                        <li>
                                            <i class="flaticon-share"></i>
                                            Integrated With Mushroom
                                        </li>
                                        <li>
                                            <i class="flaticon-share"></i>
                                            Cheese Integrated
                                        </li>
                                        <li>
                                            <i class="flaticon-share"></i>
                                            Bacon Flavour
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="slider-image">
                                    <img src="{{ asset('frontend/assets/img/slider/image2.png') }}" alt="image">

                                    <div class="shape">
                                        <img src="{{ asset('frontend/assets/img/slider/shape.png') }}" alt="image">
                                        <div class="dollar">
                                            <span>Only</span>
                                            <h3>$45.88</h3>
                                            <i class="flaticon-plus"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="home-item item-bg1">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="slider-content">
                                    <img src="{{ asset('frontend/assets/img/slider/burger.png') }}" alt="image">
                                    <span>Updated Menu's Item</span>
                                    <h1>Chickensup Burger</h1>

                                    <ul class="list">
                                        <li>
                                            <i class="flaticon-share"></i>
                                            Integrated With Mushroom
                                        </li>
                                        <li>
                                            <i class="flaticon-share"></i>
                                            Cheese Integrated
                                        </li>
                                        <li>
                                            <i class="flaticon-share"></i>
                                            Bacon Flavour
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="slider-image">
                                    <img src="{{ asset('frontend/assets/img/slider/image3.png') }}" alt="image">

                                    <div class="shape">
                                        <img src="{{ asset('frontend/assets/img/slider/shape.png') }}" alt="image">
                                        <div class="dollar">
                                            <span>Only</span>
                                            <h3>$45.88</h3>
                                            <i class="flaticon-plus"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Main Slider Area -->

<!-- Start Food Area -->
<section class="food-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="food-item">
                    <img src="{{ asset('frontend/assets/img/food/1.png') }}" alt="image">
                    <h3>Hamburger</h3>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="food-item">
                    <img src="{{ asset('frontend/assets/img/food/2.png') }}" alt="image">
                    <h3>Yummy Donuts</h3>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="food-item">
                    <img src="{{ asset('frontend/assets/img/food/3.png') }}" alt="image">
                    <h3>Craft Pizza</h3>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="food-item">
                    <img src="{{ asset('frontend/assets/img/food/4.png') }}" alt="image">
                    <h3>Ice Cream</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Food Area -->

<!-- Start Welcome Area -->
<section class="welcome-area pb-100">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="welcome-image">
                    <img src="{{ asset('frontend/assets/img/welcome.png') }}" alt="image">
                </div>
            </div>

            <div class="col-lg-6">
                <div class="welcome-content">
                    <span>Welcome</span>
                    <h3>Burger With Yummy Test Real Love</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eusmod tempor incididunt ut labore
                        et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                    <div class="welcome-btn">
                        <a href="#" class="default-btn">
                            Explore History
                            <i class="flaticon-play-button"></i>
                            <span></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="welcome-shape">
        <div class="shape1">
            <img src="{{ asset('frontend/assets/img/image-icon/1.png') }}" alt="image">
        </div>
        <div class="shape2">
            <img src="{{ asset('frontend/assets/img/image-icon/2.png') }}" alt="image">
        </div>
    </div>
</section>
<!-- End Welcome Area -->

<!-- Start Others Area -->
<section class="others-area ptb-100">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">
                <div class="others-item">
                    <div class="number">
                        <span>01</span>
                    </div>

                    <h3>Mild Butter</h3>
                    <p>Learning do amet contur diiscivt suia non nuameius velit modi</p>
                </div>

                <div class="others-item main-item">
                    <div class="number">
                        <span>02</span>
                    </div>

                    <h3>Slices Beef</h3>
                    <p>Learning do amet contur diiscivt suia non nuameius velit modi</p>
                </div>

                <div class="others-item bottom-0">
                    <div class="number">
                        <span>03</span>
                    </div>

                    <h3>Sleek Onion</h3>
                    <p>Learning do amet contur diiscivt suia non nuameius velit modi</p>
                </div>
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="others-item two main-item-two">
                    <div class="number">
                        <span>04</span>
                    </div>

                    <h3>Fresh Bread</h3>
                    <p>Learning do amet contur diiscivt suia non nuameius velit modi</p>
                </div>

                <div class="others-item two">
                    <div class="number">
                        <span>05</span>
                    </div>

                    <h3>Lettuce Leaf</h3>
                    <p>Learning do amet contur diiscivt suia non nuameius velit modi</p>
                </div>

                <div class="others-item two main-item-two bottom-0">
                    <div class="number">
                        <span>06</span>
                    </div>

                    <h3>Glow Cheese</h3>
                    <p>Learning do amet contur diiscivt suia non nuameius velit modi</p>
                </div>
            </div>
        </div>
    </div>

    <div class="others-shape">
        <div class="shape1">
            <img src="{{ asset('frontend/assets/img/shape/shape1.png') }}" alt="image">
        </div>
        <div class="shape2">
            <img src="{{ asset('frontend/assets/img/shape/shape2.png') }}" alt="image">
        </div>
    </div>
</section>
<!-- End Others Area -->

<!-- Start Burger Shop Area -->
<section class="burger-shop-area ptb-100">
    <div class="container">
        <div class="section-title">
            <span>Quality Products</span>
            <h2>Burgers As Expected Dilicious One</h2>
        </div>

        <div class="burger-shop-slider owl-carousel owl-theme">
            <div class="burger-shop-item">
                <div class="image">
                    <img src="{{ asset('frontend/assets/img/burger-shop/1.png') }}" alt="image">

                    <div class="burger-btn">
                        <a href="shop.html" class="default-btn">
                            Order Online
                            <i class="flaticon-play-button"></i>
                            <span></span>
                        </a>
                    </div>
                </div>

                <div class="content">
                    <h3>The Crispy Bun</h3>
                    <p>Learning do amet contur dicivt suia non nuameius velit</p>
                    <span>$56.00</span>
                </div>
            </div>

            <div class="burger-shop-item">
                <div class="image">
                    <img src="{{ asset('frontend/assets/img/burger-shop/2.png') }}" alt="image">

                    <div class="burger-btn">
                        <a href="shop.html" class="default-btn">
                            Order Online
                            <i class="flaticon-play-button"></i>
                            <span></span>
                        </a>
                    </div>
                </div>

                <div class="content">
                    <h3>Beefcakes Burgers</h3>
                    <p>Buarning do amet contur dicivt suia non nuameius velit</p>
                    <span>$30.00</span>
                </div>
            </div>

            <div class="burger-shop-item">
                <div class="image">
                    <img src="{{ asset('frontend/assets/img/burger-shop/3.png') }}" alt="image">

                    <div class="burger-btn">
                        <a href="shop.html" class="default-btn">
                            Order Online
                            <i class="flaticon-play-button"></i>
                            <span></span>
                        </a>
                    </div>
                </div>

                <div class="content">
                    <h3>Bugout Burgers</h3>
                    <p>Rearning do amet contur dicivt suia non nuameius velit</p>
                    <span>$35.00</span>
                </div>
            </div>

            <div class="burger-shop-item">
                <div class="image">
                    <img src="{{ asset('frontend/assets/img/burger-shop/4.png') }}" alt="image">

                    <div class="burger-btn">
                        <a href="shop.html" class="default-btn">
                            Order Online
                            <i class="flaticon-play-button"></i>
                            <span></span>
                        </a>
                    </div>
                </div>

                <div class="content">
                    <h3>Crazy Burger</h3>
                    <p>Rearning do amet contur dicivt suia non nuameius velit</p>
                    <span>$20.00</span>
                </div>
            </div>

            <div class="burger-shop-item">
                <div class="image">
                    <img src="{{ asset('frontend/assets/img/burger-shop/1.png') }}" alt="image">

                    <div class="burger-btn">
                        <a href="shop.html" class="default-btn">
                            Order Online
                            <i class="flaticon-play-button"></i>
                            <span></span>
                        </a>
                    </div>
                </div>

                <div class="content">
                    <h3>The Crispy Bun</h3>
                    <p>Learning do amet contur dicivt suia non nuameius velit</p>
                    <span>$56.00</span>
                </div>
            </div>

            <div class="burger-shop-item">
                <div class="image">
                    <img src="{{ asset('frontend/assets/img/burger-shop/2.png') }}" alt="image">

                    <div class="burger-btn">
                        <a href="shop.html" class="default-btn">
                            Order Online
                            <i class="flaticon-play-button"></i>
                            <span></span>
                        </a>
                    </div>
                </div>

                <div class="content">
                    <h3>Beefcakes Burgers</h3>
                    <p>Buarning do amet contur dicivt suia non nuameius velit</p>
                    <span>$30.00</span>
                </div>
            </div>

            <div class="burger-shop-item">
                <div class="image">
                    <img src="{{ asset('frontend/assets/img/burger-shop/3.png') }}" alt="image">

                    <div class="burger-btn">
                        <a href="shop.html" class="default-btn">
                            Order Online
                            <i class="flaticon-play-button"></i>
                            <span></span>
                        </a>
                    </div>
                </div>

                <div class="content">
                    <h3>Bugout Burgers</h3>
                    <p>Rearning do amet contur dicivt suia non nuameius velit</p>
                    <span>$35.00</span>
                </div>
            </div>

            <div class="burger-shop-item">
                <div class="image">
                    <img src="{{ asset('frontend/assets/img/burger-shop/4.png') }}" alt="image">

                    <div class="burger-btn">
                        <a href="shop.html" class="default-btn">
                            Order Online
                            <i class="flaticon-play-button"></i>
                            <span></span>
                        </a>
                    </div>
                </div>

                <div class="content">
                    <h3>Crazy Burger</h3>
                    <p>Rearning do amet contur dicivt suia non nuameius velit</p>
                    <span>$20.00</span>
                </div>
            </div>
        </div>
    </div>

    <div class="burger-shop-shape">
        <div class="shape1">
            <img src="{{ asset('frontend/assets/img/image-icon/3.png') }}" alt="image">
        </div>
        <div class="shape2">
            <img src="{{ asset('frontend/assets/img/image-icon/4.png') }}" alt="image">
        </div>
        <div class="shape3">
            <img src="{{ asset('frontend/assets/img/image-icon/6.png') }}" alt="image">
        </div>
    </div>
</section>
<!-- End Burger Shop Area -->

<!-- Start Video Area -->
<div class="video-area">
    <div class="container">
        <div class="video-content">
            <div class="image">
                <div class="dollar">
                    <div class="text">
                        <span>Burger</span>
                        <h3>$45</h3>
                    </div>
                </div>

                <a href="https://www.youtube.com/watch?v=qaHWDmFtBl0" class="video-btn popup-youtube">
                    <i class="flaticon-play-button"></i>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- End Video Area -->

<!-- Start Fun Facts Area -->
<section class="fun-facts-area pt-100 pb-70">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-fun-fact">
                    <h3>
                        <span class="odometer" data-count="340">00</span>
                        <span class="sign-icon">+</span>
                    </h3>
                    <p>Cups of Coffee</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-fun-fact">
                    <h3>
                        <span class="odometer" data-count="2678">00</span>
                        <span class="sign-icon">+</span>
                    </h3>
                    <p>Orders Everyday</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-fun-fact">
                    <h3>
                        <span class="odometer" data-count="60">00</span>
                    </h3>
                    <p>Skilled Professionals</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-fun-fact">
                    <h3>
                        <span class="odometer" data-count="130">00</span>
                    </h3>
                    <p>Burgers at Hour</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Fun Facts Area -->

<!-- Start Menu Area -->
<section class="menu-area ptb-100">
    <div class="container">
        <div class="section-title">
            <span>Pricing Lists</span>
            <h2>Choose & order now!</h2>
        </div>

        <div class="tab menu-list-tab">
            <ul class="tabs">
                <li>
                    <a href="#">
                        <i class="flaticon-hamburger"></i>
                        <span>Burgers</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="flaticon-boiled"></i>
                        <span>Chickhen</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="flaticon-frappe"></i>
                        <span>Beverage</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="flaticon-tea-cup"></i>
                        <span>Coffee</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="flaticon-pizza-slice"></i>
                        <span>Pizzas</span>
                    </a>
                </li>
            </ul>

            <div class="tab_content">
                <div class="tabs_item">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="menu-bar">
                                <div class="menu-list-content">
                                    <h3>
                                        London Dry Ginger Kai
                                        <b>....................</b>
                                        <span>$30</span>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipiscing ipsum suspendisse ultrices
                                        gravida.</p>
                                </div>

                                <div class="menu-list-content">
                                    <h3>
                                        Magninil's Apple Juice
                                        <b>....................</b>
                                        <span>$12</span>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipiscing ipsum suspendisse ultrices
                                        gravida.</p>
                                </div>

                                <div class="menu-list-content">
                                    <h3>
                                        6 Piece Sostikno Sticks
                                        <b>....................</b>
                                        <span>$45</span>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipiscing ipsum suspendisse ultrices
                                        gravida.</p>
                                </div>

                                <div class="menu-list-content">
                                    <h3>
                                        Dilso Chicken Sandwich
                                        <b>....................</b>
                                        <span>$12</span>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipiscing ipsum suspendisse ultrices
                                        gravida.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="menu-bar">
                                <div class="menu-list-content">
                                    <h3>
                                        Ocean Spray Swits Juice
                                        <b>................</b>
                                        <span>$60</span>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipiscing ipsum suspendisse ultrices
                                        gravida.</p>
                                </div>

                                <div class="menu-list-content">
                                    <h3>
                                        Smoked Brisket Sandwich
                                        <b>..............</b>
                                        <span>$45</span>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipiscing ipsum suspendisse ultrices
                                        gravida.</p>
                                </div>

                                <div class="menu-list-content">
                                    <h3>
                                        Japanies Dilicious Burger
                                        <b>..............</b>
                                        <span>$12</span>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipiscing ipsum suspendisse ultrices
                                        gravida.</p>
                                </div>

                                <div class="menu-list-content">
                                    <h3>
                                        Fotboy Combo Packs
                                        <b>.......................</b>
                                        <span>$12</span>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipiscing ipsum suspendisse ultrices
                                        gravida.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tabs_item">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="menu-bar">
                                <div class="menu-list-content">
                                    <h3>
                                        London Dry Ginger Kai
                                        <b>....................</b>
                                        <span>$30</span>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipiscing ipsum suspendisse ultrices
                                        gravida.</p>
                                </div>

                                <div class="menu-list-content">
                                    <h3>
                                        Magninil's Apple Juice
                                        <b>....................</b>
                                        <span>$12</span>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipiscing ipsum suspendisse ultrices
                                        gravida.</p>
                                </div>

                                <div class="menu-list-content">
                                    <h3>
                                        6 Piece Sostikno Sticks
                                        <b>....................</b>
                                        <span>$45</span>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipiscing ipsum suspendisse ultrices
                                        gravida.</p>
                                </div>

                                <div class="menu-list-content">
                                    <h3>
                                        Dilso Chicken Sandwich
                                        <b>....................</b>
                                        <span>$12</span>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipiscing ipsum suspendisse ultrices
                                        gravida.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="menu-bar">
                                <div class="menu-list-content">
                                    <h3>
                                        Ocean Spray Swits Juice
                                        <b>................</b>
                                        <span>$60</span>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipiscing ipsum suspendisse ultrices
                                        gravida.</p>
                                </div>

                                <div class="menu-list-content">
                                    <h3>
                                        Smoked Brisket Sandwich
                                        <b>..............</b>
                                        <span>$45</span>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipiscing ipsum suspendisse ultrices
                                        gravida.</p>
                                </div>

                                <div class="menu-list-content">
                                    <h3>
                                        Japanies Dilicious Burger
                                        <b>..............</b>
                                        <span>$12</span>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipiscing ipsum suspendisse ultrices
                                        gravida.</p>
                                </div>

                                <div class="menu-list-content">
                                    <h3>
                                        Fotboy Combo Packs
                                        <b>.......................</b>
                                        <span>$12</span>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipiscing ipsum suspendisse ultrices
                                        gravida.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tabs_item">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="menu-bar">
                                <div class="menu-list-content">
                                    <h3>
                                        London Dry Ginger Kai
                                        <b>....................</b>
                                        <span>$30</span>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipiscing ipsum suspendisse ultrices
                                        gravida.</p>
                                </div>

                                <div class="menu-list-content">
                                    <h3>
                                        Magninil's Apple Juice
                                        <b>....................</b>
                                        <span>$12</span>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipiscing ipsum suspendisse ultrices
                                        gravida.</p>
                                </div>

                                <div class="menu-list-content">
                                    <h3>
                                        6 Piece Sostikno Sticks
                                        <b>....................</b>
                                        <span>$45</span>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipiscing ipsum suspendisse ultrices
                                        gravida.</p>
                                </div>

                                <div class="menu-list-content">
                                    <h3>
                                        Dilso Chicken Sandwich
                                        <b>....................</b>
                                        <span>$12</span>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipiscing ipsum suspendisse ultrices
                                        gravida.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="menu-bar">
                                <div class="menu-list-content">
                                    <h3>
                                        Ocean Spray Swits Juice
                                        <b>................</b>
                                        <span>$60</span>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipiscing ipsum suspendisse ultrices
                                        gravida.</p>
                                </div>

                                <div class="menu-list-content">
                                    <h3>
                                        Smoked Brisket Sandwich
                                        <b>..............</b>
                                        <span>$45</span>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipiscing ipsum suspendisse ultrices
                                        gravida.</p>
                                </div>

                                <div class="menu-list-content">
                                    <h3>
                                        Japanies Dilicious Burger
                                        <b>..............</b>
                                        <span>$12</span>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipiscing ipsum suspendisse ultrices
                                        gravida.</p>
                                </div>

                                <div class="menu-list-content">
                                    <h3>
                                        Fotboy Combo Packs
                                        <b>.......................</b>
                                        <span>$12</span>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipiscing ipsum suspendisse ultrices
                                        gravida.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tabs_item">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="menu-bar">
                                <div class="menu-list-content">
                                    <h3>
                                        London Dry Ginger Kai
                                        <b>....................</b>
                                        <span>$30</span>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipiscing ipsum suspendisse ultrices
                                        gravida.</p>
                                </div>

                                <div class="menu-list-content">
                                    <h3>
                                        Magninil's Apple Juice
                                        <b>....................</b>
                                        <span>$12</span>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipiscing ipsum suspendisse ultrices
                                        gravida.</p>
                                </div>

                                <div class="menu-list-content">
                                    <h3>
                                        6 Piece Sostikno Sticks
                                        <b>....................</b>
                                        <span>$45</span>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipiscing ipsum suspendisse ultrices
                                        gravida.</p>
                                </div>

                                <div class="menu-list-content">
                                    <h3>
                                        Dilso Chicken Sandwich
                                        <b>....................</b>
                                        <span>$12</span>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipiscing ipsum suspendisse ultrices
                                        gravida.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="menu-bar">
                                <div class="menu-list-content">
                                    <h3>
                                        Ocean Spray Swits Juice
                                        <b>................</b>
                                        <span>$60</span>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipiscing ipsum suspendisse ultrices
                                        gravida.</p>
                                </div>

                                <div class="menu-list-content">
                                    <h3>
                                        Smoked Brisket Sandwich
                                        <b>..............</b>
                                        <span>$45</span>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipiscing ipsum suspendisse ultrices
                                        gravida.</p>
                                </div>

                                <div class="menu-list-content">
                                    <h3>
                                        Japanies Dilicious Burger
                                        <b>..............</b>
                                        <span>$12</span>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipiscing ipsum suspendisse ultrices
                                        gravida.</p>
                                </div>

                                <div class="menu-list-content">
                                    <h3>
                                        Fotboy Combo Packs
                                        <b>.......................</b>
                                        <span>$12</span>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipiscing ipsum suspendisse ultrices
                                        gravida.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tabs_item">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="menu-bar">
                                <div class="menu-list-content">
                                    <h3>
                                        London Dry Ginger Kai
                                        <b>....................</b>
                                        <span>$30</span>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipiscing ipsum suspendisse ultrices
                                        gravida.</p>
                                </div>

                                <div class="menu-list-content">
                                    <h3>
                                        Magninil's Apple Juice
                                        <b>....................</b>
                                        <span>$12</span>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipiscing ipsum suspendisse ultrices
                                        gravida.</p>
                                </div>

                                <div class="menu-list-content">
                                    <h3>
                                        6 Piece Sostikno Sticks
                                        <b>....................</b>
                                        <span>$45</span>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipiscing ipsum suspendisse ultrices
                                        gravida.</p>
                                </div>

                                <div class="menu-list-content">
                                    <h3>
                                        Dilso Chicken Sandwich
                                        <b>....................</b>
                                        <span>$12</span>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipiscing ipsum suspendisse ultrices
                                        gravida.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="menu-bar">
                                <div class="menu-list-content">
                                    <h3>
                                        Ocean Spray Swits Juice
                                        <b>................</b>
                                        <span>$60</span>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipiscing ipsum suspendisse ultrices
                                        gravida.</p>
                                </div>

                                <div class="menu-list-content">
                                    <h3>
                                        Smoked Brisket Sandwich
                                        <b>..............</b>
                                        <span>$45</span>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipiscing ipsum suspendisse ultrices
                                        gravida.</p>
                                </div>

                                <div class="menu-list-content">
                                    <h3>
                                        Japanies Dilicious Burger
                                        <b>..............</b>
                                        <span>$12</span>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipiscing ipsum suspendisse ultrices
                                        gravida.</p>
                                </div>

                                <div class="menu-list-content">
                                    <h3>
                                        Fotboy Combo Packs
                                        <b>.......................</b>
                                        <span>$12</span>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipiscing ipsum suspendisse ultrices
                                        gravida.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="menu-shape">
        <div class="shape1">
            <img src="{{ asset('frontend/assets/img/image-icon/7.png') }}" alt="image">
        </div>
        <div class="shape2">
            <img src="{{ asset('frontend/assets/img/image-icon/4.png') }}" alt="image">
        </div>
        <div class="shape3">
            <img src="{{ asset('frontend/assets/img/image-icon/5.png') }}" alt="image">
        </div>
        <div class="shape4">
            <img src="{{ asset('frontend/assets/img/image-icon/6.png') }}" alt="image">
        </div>
    </div>
</section>
<!-- End Menu Area -->

<!-- Start Gallery Area -->
<section class="gallery-area pb-100">
    <div class="container-fluid">
        <div class="section-title">
            <span>Photos</span>
            <h2>Our Food Gallery</h2>
        </div>

        <div class="gallery-slider owl-carousel owl-theme">
            <div class="gallery-item">
                <div class="image">
                    <img src="{{ asset('frontend/assets/img/gallery/image1.jpg') }}" alt="image">

                    <div class="content">
                        <span>Burger</span>
                        <h3>Dilicious Burger</h3>
                    </div>
                </div>
            </div>

            <div class="gallery-item">
                <div class="image">
                    <img src="{{ asset('frontend/assets/img/gallery/image2.jpg') }}" alt="image">

                    <div class="content">
                        <span>Burger</span>
                        <h3>Buzz Burgers</h3>
                    </div>
                </div>
            </div>

            <div class="gallery-item">
                <div class="image">
                    <img src="{{ asset('frontend/assets/img/gallery/image3.jpg') }}" alt="image">

                    <div class="content">
                        <span>Burger</span>
                        <h3>Smokin' Burger</h3>
                    </div>
                </div>
            </div>

            <div class="gallery-item">
                <div class="image">
                    <img src="{{ asset('frontend/assets/img/gallery/image4.jpg') }}" alt="image">

                    <div class="content">
                        <span>Burger</span>
                        <h3>Bugout Burgers</h3>
                    </div>
                </div>
            </div>

            <div class="gallery-item">
                <div class="image">
                    <img src="{{ asset('frontend/assets/img/gallery/image5.jpg') }}" alt="image">

                    <div class="content">
                        <span>Burger</span>
                        <h3>Backyard Burgers</h3>
                    </div>
                </div>
            </div>

            <div class="gallery-item">
                <div class="image">
                    <img src="{{ asset('frontend/assets/img/gallery/image6.jpg') }}" alt="image">

                    <div class="content">
                        <span>Burger</span>
                        <h3>Beefcakes Burgers</h3>
                    </div>
                </div>
            </div>

            <div class="gallery-item">
                <div class="image">
                    <img src="{{ asset('frontend/assets/img/gallery/image7.jpg') }}" alt="image">

                    <div class="content">
                        <span>Burger</span>
                        <h3>Dungeon Burgers</h3>
                    </div>
                </div>
            </div>

            <div class="gallery-item">
                <div class="image">
                    <img src="{{ asset('frontend/assets/img/gallery/image8.jpg') }}" alt="image">

                    <div class="content">
                        <span>Burger</span>
                        <h3>Master Burgers</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="gallery-shape">
        <div class="shape1">
            <img src="{{ asset('frontend/assets/img/image-icon/3.png') }}" alt="image">
        </div>
        <div class="shape2">
            <img src="{{ asset('frontend/assets/img/image-icon/4.png') }}" alt="image">
        </div>
    </div>
</section>
<!-- End Gallery Area -->

<!-- Start Delivery Area -->
<section class="delivery-area ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="delivery-content">
                    <span>Delivery</span>
                    <h3>What You Want to Select A Pick Up Through Online</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eusmod tempor incididunt ut labore
                        et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                    <p>Eusmod tempor incididunt ut labore et dolore magna aliqua. Quis suspendisse ultrices gravida.</p>

                    <div class="delivery-btn">
                        <a href="#" class="default-btn">
                            Order Now
                            <span></span>
                            <i class="flaticon-play-button"></i>
                        </a>

                        <a href="#" class="default-btn-two">
                            Earn Coin
                            <span></span>
                            <i class="flaticon-play-button"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="delivery-image">
                    <img src="{{ asset('frontend/assets/img/delivery.png') }}" alt="image">
                </div>
            </div>
        </div>
    </div>

    <div class="global-shape">
        <img src="{{ asset('frontend/assets/img/global.png') }}" alt="image">
    </div>
</section>
<!-- End Delivery Area -->

<!-- Start Testimonial Area -->
<section class="testimonial-area ptb-100">
    <div class="container">
        <div class="section-title">
            <span>Testimonial</span>
            <h2>Our Clients Review</h2>
        </div>

        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="testimonial-slider owl-carousel owl-theme">
                    <div class="testimonial-item">
                        <div class="info">
                            <h3>David McLean</h3>
                            <span>CEO, Foodplanet</span>
                        </div>
                        <p>I chose Handout because of their value And incredible superior customer Service they really
                            awesome Food with quality service</p>
                    </div>

                    <div class="testimonial-item">
                        <div class="info">
                            <h3>David McLean</h3>
                            <span>CEO, Foodplanet</span>
                        </div>
                        <p>I chose Handout because of their value And incredible superior customer Service they really
                            awesome Food with quality service</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="testimonial-image">
                    <img src="{{ asset('frontend/assets/img/feedback/image.png') }}" alt="image">
                </div>
            </div>
        </div>
    </div>

    <div class="testimonial-shape">
        <div class="shape1">
            <img src="{{ asset('frontend/assets/img/image-icon/5.png') }}" alt="image">
        </div>
        <div class="shape2">
            <img src="{{ asset('frontend/assets/img/image-icon/3.png') }}" alt="image">
        </div>
        <div class="shape3">
            <img src="{{ asset('frontend/assets/img/image-icon/6.png') }}" alt="image">
        </div>
        <div class="shape4">
            <img src="{{ asset('frontend/assets/img/image-icon/2.png') }}" alt="image">
        </div>
        <div class="shape5">
            <img src="{{ asset('frontend/assets/img/image-icon/6.png') }}" alt="image">
        </div>
    </div>
</section>
<!-- End Testimonial Area -->

<!-- Start Overview Area -->
<section class="overview-area pb-70">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="overview-item">
                    <img src="{{ asset('frontend/assets/img/overview/image1.jpg') }}" alt="image">

                    <div class="content">
                        <strong>Pangolin Burger</strong>
                        <h3>
                            <a href="#">Festive Special Burger</a>
                        </h3>
                        <a href="#" class="default-btn">
                            Order Now
                            <i class="flaticon-play-button"></i>
                            <span></span>
                        </a>
                    </div>

                    <div class="dollar">
                        <span>Burger</span>
                        <h4>$12</h4>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="overview-item">
                    <img src="{{ asset('frontend/assets/img/overview/image2.jpg') }}" alt="image">

                    <div class="content">
                        <strong>Flat 30% Off</strong>
                        <h3>
                            <a href="#">Burger King Special</a>
                        </h3>
                        <a href="#" class="default-btn">
                            Order Now
                            <i class="flaticon-play-button"></i>
                            <span></span>
                        </a>
                    </div>

                    <div class="dollar">
                        <span>Burger</span>
                        <h4>$45</h4>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="overview-item">
                    <img src="{{ asset('frontend/assets/img/overview/image3.jpg') }}" alt="image">

                    <div class="content">
                        <strong>Pangolin Burger</strong>
                        <h3>
                            <a href="#">Festive Burger</a>
                        </h3>
                        <a href="#" class="default-btn">
                            Order Now
                            <i class="flaticon-play-button"></i>
                            <span></span>
                        </a>
                    </div>

                    <div class="dollar">
                        <span>Burger</span>
                        <h4>$65</h4>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="overview-item">
                    <img src="{{ asset('frontend/assets/img/overview/image4.jpg') }}" alt="image">

                    <div class="content">
                        <strong>CrazyBurger</strong>
                        <h3>
                            <a href="#">Jurik Burger</a>
                        </h3>
                        <a href="#" class="default-btn">
                            Order Now
                            <i class="flaticon-play-button"></i>
                            <span></span>
                        </a>
                    </div>

                    <div class="dollar">
                        <span>Burger</span>
                        <h4>$09</h4>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="overview-item">
                    <img src="{{ asset('frontend/assets/img/overview/image5.jpg') }}" alt="image">

                    <div class="content">
                        <strong>Summer 30% Off</strong>
                        <h3>
                            <a href="#">Burger Vulso Special</a>
                        </h3>
                        <a href="#" class="default-btn">
                            Order Now
                            <i class="flaticon-play-button"></i>
                            <span></span>
                        </a>
                    </div>

                    <div class="dollar">
                        <span>Burger</span>
                        <h4>$10</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Overview Area -->

<!-- Start Blog Area -->
<section class="blog-area pb-70">
    <div class="container">
        <div class="section-title">
            <span>News</span>
            <h2>Read Burger News</h2>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="blog-item">
                    <div class="image">
                        <a href="blog-details.html">
                            <img src="{{ asset('frontend/assets/img/blog/1.jpg') }}" alt="image">
                        </a>

                        <ul class="post-meta d-flex justify-content-between align-items-center">
                            <li>
                                <div class="post-author d-flex align-items-center">
                                    <img src="{{ asset('frontend/assets/img/user/user1.jpg') }}" class="rounded-circle" alt="image">
                                    <span>Adam Smith</span>
                                </div>
                            </li>
                            <li>
                                <i class='flaticon-calendar'></i> 2020-23-06
                            </li>
                        </ul>
                    </div>
                    <div class="content">
                        <h3>
                            <a href="blog-details.html">
                                Burgers Of Melbourne Is Helping
                            </a>
                        </h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscingum suspendisse ultrices gravida.</p>
                        <a href="blog-details.html">
                            <i class="flaticon-plus"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="blog-item">
                    <div class="image">
                        <a href="blog-details.html">
                            <img src="{{ asset('frontend/assets/img/blog/2.jpg') }}" alt="image">
                        </a>

                        <ul class="post-meta d-flex justify-content-between align-items-center">
                            <li>
                                <div class="post-author d-flex align-items-center">
                                    <img src="{{ asset('frontend/assets/img/user/user2.jpg') }}" class="rounded-circle" alt="image">
                                    <span>Julfikar Don</span>
                                </div>
                            </li>
                            <li>
                                <i class='flaticon-calendar'></i> 2020-23-06
                            </li>
                        </ul>
                    </div>
                    <div class="content">
                        <h3>
                            <a href="blog-details.html">
                                Savoir Faire Is Everywhere
                            </a>
                        </h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscingum suspendisse ultrices gravida.</p>
                        <a href="blog-details.html">
                            <i class="flaticon-plus"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="blog-item">
                    <div class="image">
                        <a href="#">
                            <img src="{{ asset('frontend/assets/img/blog/3.jpg') }}" alt="image">
                        </a>

                        <ul class="post-meta d-flex justify-content-between align-items-center">
                            <li>
                                <div class="post-author d-flex align-items-center">
                                    <img src="{{ asset('frontend/assets/img/user/user3.jpg') }}" class="rounded-circle" alt="image">
                                    <span>Adam Smith</span>
                                </div>
                            </li>
                            <li>
                                <i class='flaticon-calendar'></i> 2020-12-6
                            </li>
                        </ul>
                    </div>
                    <div class="content">
                        <h3>
                            <a href="blog-details.html">
                                Brie Burger served with curly
                            </a>
                        </h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscingum suspendisse ultrices gravida.</p>
                        <a href="blog-details.html">
                            <i class="flaticon-plus"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Blog Area -->
@endsection

@section('scripts')
@endsection