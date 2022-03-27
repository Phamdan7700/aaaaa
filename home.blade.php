<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Memories</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/logo.svg') }}">

    <!-- CSS here -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="./style.css">
</head>

<body data-spy="scroll" data-target="#navigation-scroll" data-offset="75">

    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <embed src="{{ asset('images/logo.svg') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->

    <header>
        <!-- Header Start -->
        <div class="header-area header-transparrent ">
            <div class="main-header header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2 col-md-2">
                            <div class="logo">
                                <a href="/"><embed src="{{ asset('images/logo-home.svg') }}" alt="Memories"
                                        height="50px"></a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10 col-md-10">
                            <!-- Main-menu -->
                            <div class="main-menu f-right d-none d-lg-block">
                                <nav id="navigation-scroll">
                                    <ul id="navigation" class="nav">
                                        <li class="nav-item"><a class="nav-link" href="#home"> Home</a></li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="#features">Feature</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#download">Download
                                                app</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>

    <main>

        <!-- Slider Area Start-->
        <div class="slider-area" id="home">
            <div class="slider-active">
                
                    <div class="single-slider slider-height sky-blue d-flex align-items-center">
                        <div class="container">
                            <div class="row d-flex align-items-center">
                                <div class="col-lg-6 col-md-9 ">
                                    <div class="hero__caption">
                                        <span data-animation="fadeInUp" data-delay=".4s">App Landing Page</span>
                                        <h1 data-animation="fadeInUp" data-delay=".6s">Get things done<br>with Memories
                                        </h1>
                                        <p data-animation="fadeInUp" data-delay=".8s">{{ $text[$i - 1] }}</p>
                                        <!-- Slider btn -->
                                        <div class="slider-btns">
                                            <!-- Hero-btn -->
                                            <a data-animation="fadeInLeft" data-delay="1.0s" href="#download"
                                                class="btn radius-btn">Download</a>
                                            <!-- Video Btn -->
                                            <a data-animation="fadeInRight" data-delay="1.0s"
                                                class="popup-video video-btn ani-btn" href="#"><i
                                                    class="fas fa-play"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="hero__img d-none d-lg-block f-right" data-animation="fadeInRight"
                                        data-delay="1s">
                                        <img src='{{ asset("images/landing-page/$i.png") }}' alt="" width="100%">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

            </div>
        </div>
        <!-- Slider Area End -->
        <!-- Best Features Start -->
        <section class="best-features-area section-padd4" id="features">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-xl-8 col-lg-10">
                        <!-- Section Tittle -->
                        <div class="row">
                            <div class="col-lg-10 col-md-10">
                                <div class="section-tittle">
                                    <h2>Some of the best features Of Our App!</h2>
                                </div>
                            </div>
                        </div>
                        <!-- Section caption -->
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="single-features mb-70">
                                    <div class="features-icon">
                                        <span class="fab fa-connectdevelop"></span>
                                    </div>
                                    <div class="features-caption">
                                        <h3>Easy to Costomize</h3>
                                        <p>Aorem psum olorsit amet ectetur adipiscing elit, sed dov.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="single-features mb-70">
                                    <div class="features-icon">
                                        <span class="fas fa-fingerprint"></span>
                                    </div>
                                    <div class="features-caption">
                                        <h3>Extreme Security</h3>
                                        <p>Aorem psum olorsit amet ectetur adipiscing elit, sed dov.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="single-features mb-70">
                                    <div class="features-icon">
                                        <span class="fab fa-servicestack"></span>
                                    </div>
                                    <div class="features-caption">
                                        <h3>Customer Support</h3>
                                        <p>Aorem psum olorsit amet ectetur adipiscing elit, sed dov.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="single-features mb-70">
                                    <div class="features-icon">
                                        <span class="fab fa-medapps"></span>
                                    </div>
                                    <div class="features-caption">
                                        <h3>Creative Design</h3>
                                        <p>Aorem psum olorsit amet ectetur adipiscing elit, sed dov.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Shpe -->
            <div class="features-shpae d-none d-lg-block">
                <img src="{{ asset('images/landing-page/2.png') }}" alt="" width="600">
            </div>
        </section>
        <!-- Best Features End -->
        <!-- Available App  Start-->
        <div class="available-app-area" id="download">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-5 col-lg-6">
                        <div class="app-caption">
                            <div class="section-tittle section-tittle3">
                                <h2>Our App Available For Any Device Download now</h2>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore fug.</p>
                                <div class="app-btn d-flex">
                                    <a href="#" class="app-btn1"><img
                                            src="{{ asset('images/mail/ios.png') }}" width="180" alt=""></a>
                                    <a href="#" class="app-btn2"><img
                                            src="{{ asset('images/mail/android.png') }}" width="180" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="app-img">
                            <img src="{{ asset('images/landing-page/3.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Shape -->
            <div class="app-shape">
                <img src="{{ asset('images/landing-page/shape/app-shape-top.png') }}" alt=""
                    class="app-shape-top heartbeat d-none d-lg-block">
                <img src="{{ asset('images/landing-page/shape/app-shape-left.png') }}" alt=""
                    class="app-shape-left d-none d-xl-block">
            </div>
        </div>
        <!-- Available App End-->
        <!-- Say Something Start -->
        <div class="say-something-aera pt-90 pb-90 fix" id="contact">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="offset-xl-1 offset-lg-1 col-xl-5 col-lg-5">
                        <div class="say-something-cap">
                            <h2>Say Hello To The Collaboration Hub.</h2>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3">
                        <div class="say-btn">
                            <a href="#" class="btn radius-btn">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- shape -->
            <div class="say-shape">
                <img src="{{ asset('images/landing-page/shape/say-shape-left.png') }}" alt=""
                    class="say-shape1 rotateme d-none d-xl-block">
                <img src="{{ asset('images/landing-page/shape/say-shape-right.png') }}" alt=""
                    class="say-shape2 d-none d-lg-block">
            </div>
        </div>
        <!-- Say Something End -->
    </main>
    <footer>

        <!-- Footer Start-->
        <div class="footer-main">
            <div class="footer-area footer-padding">
                <div class="container">
                    <div class="row  justify-content-between">
                        <div class="col-lg-3 col-md-4 col-sm-8">
                            <div class="single-footer-caption mb-30">
                                <!-- logo -->
                                <div class="footer-logo">
                                    <a href="/"><embed src="{{ asset('images/logo-home.svg') }}" alt="Memories"
                                            height="50px"></a>
                                </div>
                                <div class="footer-tittle">
                                    <div class="footer-pera">
                                        <p class="info1">Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit sed do eiusmod tempor incididunt ut labore.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-5">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Quick Links</h4>
                                    <ul>
                                        <li><a href="/"> Home</a></li>
                                        <li><a href="#features">Feature</a></li>
                                        <li><a href="#download">Download app</a></li>
                                        <li><a href="#contact">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-7">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Support</h4>
                                    <ul id="webview_link">
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-8">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Newsletter</h4>
                                    <div class="footer-pera footer-pera2">
                                        <p>Heaven fruitful doesn't over lesser in days. Appear </p>
                                    </div>
                                    <!-- Form -->
                                    <div class="footer-form">
                                        <div id="mc_embed_signup">
                                            <form target="_blank" action="" method="get"
                                                class="subscribe_form relative mail_part" onsubmit="return false">
                                                <input type="email" name="EMAIL" id="newsletter-form-email"
                                                    placeholder=" Email Address " class="placeholder hide-on-focus"
                                                    onfocus="this.placeholder = ''"
                                                    onblur="this.placeholder = ' Email Address '">
                                                <div class="form-icon">
                                                    <button type="submit" name="submit" id="newsletter-submit"
                                                        class="email_icon newsletter-submit button-contactForm"><img
                                                            src="{{ asset('images/landing-page/shape/form_icon.png') }}"
                                                            alt=""></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Copy-Right -->
                    <div class="row align-items-center">
                        <div class="col-xl-12 ">
                            <div class="footer-copy-right">
                                <p>
                                    Copyright &copy;
                                    
                                    All rights reserved
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End-->

    <!-- Modal -->
    <div class="modal fade" id="webviewModal" tabindex="-1" role="dialog" aria-labelledby="webview"
    aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="webviewTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <iframe src="#" name="webview_iframe" frameborder="0" width="100%" height="500"></iframe>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    
</body>

</html>
