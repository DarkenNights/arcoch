<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Document Title -->
    <title>L'Arcoch | Conciergerie</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('concierge/favicon.png') }}">

    <!-- CSS Files -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rubik:400,500,700%7CSource+Sans+Pro:300i,400,400i,600,700">
    <link rel="stylesheet" href="{{ asset('concierge/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('concierge/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('concierge/plugins/swiper/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('concierge/plugins/magnific-popup/magnific-popup.min.css') }}">
    <link rel="stylesheet" href="{{ asset('concierge/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('concierge/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('concierge/css/colors/theme-color-1.css') }}">
    <link rel="stylesheet" href="{{ asset('concierge/css/custom.css') }}">
</head>

<body>
<!-- Preloader -->
<div class="preLoader"></div>

<!-- Main header -->
<header class="header">

    <div class="main-header" data-animate="fadeInUp" data-delay=".9">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-9">
                    <!-- Logo -->
                    <div class="logo">
                        <a href="index-2.html">
                            <img src="{{ asset('concierge/img/logo.png') }}" data-rjs="2" alt="VPNet">
                        </a>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-5 col-sm-2 col-3">
                    <nav>
                        <!-- Header-menu -->
                        <div class="header-menu">
                            <ul>
                                @include('layout.menu', ['active' => 'concierge'])
                            </ul>
                        </div>
                        <!-- End of Header-menu -->
                    </nav>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 d-none d-sm-block">
                    <!-- Header Call -->
                    <div class="header-call text-right">
                        <span>Contactez-nous</span>
                        <a href="tel:+330559055905">05 59 05 59 05</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- End of Main header -->

<!-- Banner -->
<section>
    <div class="main-slider swiper-container">
        <div class="swiper-wrapper">
            <!-- Single slide -->
            <div class="swiper-slide position-relative">
                <img src="{{ asset('concierge/img/slide1.jpg') }}" data-rjs="2" alt="">
                <div class="slide-content container">
                    <div class="row align-items-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="slide-content-inner">
                                <h4 data-animate="fadeInUp" data-delay=".05">Des offres dont vous avez besoin</h4>
                                <h2 data-animate="fadeInUp" data-delay=".3">Ne perdez plus de temps sur des tâches que l'on peut faire pour vous</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Single slide -->

            <!-- Single slide -->
            <div class="swiper-slide position-relative">
                <img src="{{ asset('concierge/img/slide2.jpg') }}" data-rjs="2" alt="">
                <div class="slide-content container">
                    <div class="row align-items-center">
                        <div class=" col-xl-6 col-lg-8">
                            <div class="slide-content-inner">
                                <h4 data-animate="fadeInUp" data-delay=".05">On s'occupe de tout</h4>
                                <h2 data-animate="fadeInUp" data-delay=".3">De la remise des clés au ménage nous pouvons tout faire pour vous et vos clients</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Single slide -->
        </div>
        <!-- Banner Pagination -->
        <div class="swiper-pagination main-slider-pagination"></div>
    </div>
</section>
<!-- End of Banner -->

<!-- Abut Us -->
<section class="pt-120 pb-55">
    <div class="container">
        <div class="row align-items-center pb-80">
            <div class="col-lg-6 d-none d-lg-block">
                <div class="text-center" data-animate="fadeInUp" data-delay=".1">
                    <img src="{{ asset('concierge/img/number-one.png') }}" alt="" data-rjs="2">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="number-one-content" data-animate="fadeInUp" data-delay=".5">
                    <h2 class="mb-3">We are no. 1 internet service provider company in United States.</h2>
                    <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain.</p>
                    <a href="#" class="btn">View Details</a>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4 col-sm-6">
                <div class="single-feature single-feature-img-top text-center" data-animate="fadeInUp" data-delay=".1">
                    <div class="single-feature-img">
                        <img src="{{ asset('concierge/img/icons/setup.svg') }}" alt="" class="svg">
                    </div>
                    <div class="single-feature-content">
                        <h4>Free Installations & Setup</h4>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="single-feature single-feature-img-top text-center" data-animate="fadeInUp" data-delay=".4">
                    <div class="single-feature-img">
                        <img src="{{ asset('concierge/img/icons/download.svg') }}" alt="" class="svg">
                    </div>
                    <div class="single-feature-content">
                        <h4>Up to 1 Gpbs Download Speed</h4>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="single-feature single-feature-img-top text-center" data-animate="fadeInUp" data-delay=".7">
                    <div class="single-feature-img">
                        <img src="{{ asset('concierge/img/icons/support.svg') }}" alt="" class="svg">
                    </div>
                    <div class="single-feature-content">
                        <h4>24/7 Customer Support</h4>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of About Us -->

<!-- Services -->
<section class="theme-bg-overlay bg-img-md-none pt-120 pb-90" data-bg-img="{{ asset('concierge/img/rocket.jpg') }}" data-rjs="2">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8 col-md-10">
                <div class="section-title section-title-white text-center" data-animate="fadeInUp" data-delay=".1">
                    <h2>Services We Provide</h2>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form by injected humour.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="single-service single-service-white text-center" data-animate="fadeInUp" data-delay=".1">
                    <img src="{{ asset('concierge/img/icons/earth.svg') }}" alt="" class="svg">
                    <h4>High Speed Internet</h4>
                    <p>Lorem ipsum dolor sit ametteturmpor incididunt most popular.</p>
                    <a href="internet.html">Learn More <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-service single-service-white text-center" data-animate="fadeInUp" data-delay=".4">
                    <img src="{{ asset('concierge/img/icons/phone.svg') }}" alt="" class="svg">
                    <h4>Phone Service</h4>
                    <p>Lorem ipsum dolor sit ametteturmpor incididunt most popular.</p>
                    <a href="mobile.html">Learn More <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-service single-service-white text-center" data-animate="fadeInUp" data-delay=".7">
                    <img src="{{ asset('concierge/img/icons/tv.svg') }}" alt="" class="svg">
                    <h4>Cable TV</h4>
                    <p>Lorem ipsum dolor sit ametteturmpor incididunt most popular.</p>
                    <a href="cable-tv.html">Learn More <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-service single-service-white text-center" data-animate="fadeInUp" data-delay="1">
                    <img src="{{ asset('concierge/img/icons/server.svg') }}" alt="" class="svg">
                    <h4>Dedicated Server</h4>
                    <p>Lorem ipsum dolor sit ametteturmpor incididunt most popular.</p>
                    <a href="dedicated-server.html">Learn More <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of Services -->

<!-- Packages Wrap -->
<section class="pt-120 pb-55">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8 col-md-10">
                <div class="section-title text-center" data-animate="fadeInUp" data-delay=".1">
                    <h2>Choose Affordable Packages</h2>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
                </div>
            </div>
        </div>

        <!-- Packages -->
        <div class="row pb-90">
            <div class="col-lg-3 col-sm-6">
                <div class="single-package text-center" data-animate="fadeInUp" data-delay=".1">
                    <h4>Personal Pack</h4>
                    <span>for personal user</span>
                    <hr>
                    <ul class="list-unstyled">
                        <li>Free installation</li>
                        <li>Up to <span>15 Mpbs</span> download speed</li>
                        <li>Unlimited data usages</li>
                        <li><span>01 year</span> pricing lock guarantee</li>
                        <li>Unlimited bandwidth</li>
                    </ul>
                    <p><sup>$</sup>12.50 <span>/Monthly</span></p>
                    <a href="#" class="btn">Order This Plan</a>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-package text-center" data-animate="fadeInUp" data-delay=".4">
                    <span class="pupular-pack">Most popular package</span>
                    <h4>Family Pack</h4>
                    <span>for family user</span>
                    <hr>
                    <ul class="list-unstyled">
                        <li>Free installation</li>
                        <li>Up to <span>25 Mpbs</span> download speed</li>
                        <li>Unlimited data usages</li>
                        <li><span>02 year</span> pricing lock guarantee</li>
                        <li>Unlimited bandwidth</li>
                    </ul>
                    <p><sup>$</sup>24.50 <span>/Monthly</span></p>
                    <a href="#" class="btn">Order This Plan</a>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-package text-center" data-animate="fadeInUp" data-delay=".7">
                    <h4>Business Pack</h4>
                    <span>for business user</span>
                    <hr>
                    <ul class="list-unstyled">
                        <li>Free installation</li>
                        <li>Up to <span>30 Mpbs</span> download speed</li>
                        <li>Unlimited data usages</li>
                        <li><span>03 year</span> pricing lock guarantee</li>
                        <li>Unlimited bandwidth</li>
                    </ul>
                    <p><sup>$</sup>49.50 <span>/Monthly</span></p>
                    <a href="#" class="btn">Order This Plan</a>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-package text-center" data-animate="fadeInUp" data-delay="1">
                    <h4>Corporate Pack</h4>
                    <span>for corporate user</span>
                    <hr>
                    <ul class="list-unstyled">
                        <li>Free installation</li>
                        <li>Up to <span>39 Mpbs</span> download speed</li>
                        <li>Unlimited data usages</li>
                        <li><span>Unlimited</span> pricing lock guarantee</li>
                        <li>Unlimited bandwidth</li>
                    </ul>
                    <p><sup>$</sup>79.50 <span>/Monthly</span></p>
                    <a href="#" class="btn">Order This Plan</a>
                </div>
            </div>
        </div>
        <!-- End of Packages -->

        <!-- Packages Includes -->
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8 col-md-10">
                <div class="section-title text-center" data-animate="fadeInUp" data-delay=".1">
                    <h2>All Plans Included</h2>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="single-feature single-feature-img-left text-left" data-animate="fadeInUp" data-delay=".05">
                    <div class="single-feature-img">
                        <img src="{{ asset('concierge/img/icons/ftp.svg') }}" alt="" class="svg">
                    </div>
                    <div class="single-feature-content">
                        <h4>Own FTP Server</h4>
                        <p>At vero eos et accusamus et iusto dignissimosus qui blanditiis praesentium uptatum</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="single-feature single-feature-img-left text-left" data-animate="fadeInUp" data-delay=".2">
                    <div class="single-feature-img">
                        <img src="{{ asset('concierge/img/icons/upgrade.svg') }}" alt="" class="svg">
                    </div>
                    <div class="single-feature-content">
                        <h4>Upgrade or Downgrade</h4>
                        <p>At vero eos et accusamus et iusto dignissimosus qui blanditiis praesentium uptatum</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="single-feature single-feature-img-left text-left" data-animate="fadeInUp" data-delay=".35">
                    <div class="single-feature-img">
                        <img src="{{ asset('concierge') }}" alt="" class="svg">
                    </div>
                    <div class="single-feature-content">
                        <h4>No Hard Data Limit</h4>
                        <p>At vero eos et accusamus et iusto dignissimosus qui blanditiis praesentium uptatum</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="single-feature single-feature-img-left text-left" data-animate="fadeInUp" data-delay=".5">
                    <div class="single-feature-img">
                        <img src="{{ asset('concierge/img/icons/lock.svg') }}" alt="" class="svg">
                    </div>
                    <div class="single-feature-content">
                        <h4>Lock in Low Rates</h4>
                        <p>At vero eos et accusamus et iusto dignissimosus qui blanditiis praesentium uptatum</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="single-feature single-feature-img-left text-left" data-animate="fadeInUp" data-delay=".65">
                    <div class="single-feature-img">
                        <img src="{{ asset('concierge/img/icons/cloud.svg') }}" alt="" class="svg">
                    </div>
                    <div class="single-feature-content">
                        <h4>No Video Streaming</h4>
                        <p>At vero eos et accusamus et iusto dignissimosus qui blanditiis praesentium uptatum</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="single-feature single-feature-img-left text-left" data-animate="fadeInUp" data-delay=".8">
                    <div class="single-feature-img">
                        <img src="{{ asset('concierge/img/icons/access.svg') }}" alt="" class="svg">
                    </div>
                    <div class="single-feature-content">
                        <h4>Access to All Website</h4>
                        <p>At vero eos et accusamus et iusto dignissimosus qui blanditiis praesentium uptatum</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Packages Includes -->
    </div>
</section>
<!-- End of Packages Wrap -->



<!-- FAQ -->
<section class="pt-120 pb-70">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="faq pb-50" data-animate="fadeInUp" data-delay=".1">
                    <div class="section-title">
                        <h2>Frequently Asked Questions</h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some</p>
                    </div>
                    <div class="accordion" id="accordionFaq">
                        <div class="single-faq">
                            <div class="faq-title d-flex align-items-center">
                                <h3 class="h5" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">I can’t access my internet. How do i contact with support center?</h3>
                            </div>
                            <div id="collapseOne" class="collapse show" data-parent="#accordionFaq">
                                <div class="faq-answer">
                                    <p><span>Ans: </span>I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.</p>
                                </div>
                            </div>
                        </div>
                        <div class="single-faq">
                            <div class="faq-title d-flex align-items-center">
                                <h3 class="h5" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">I already paid my bill but still its showing Due. Why is that?</h3>
                            </div>
                            <div id="collapseTwo" class="collapse" data-parent="#accordionFaq">
                                <div class="faq-answer">
                                    <p><span>Ans: </span>Pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
                                </div>
                            </div>
                        </div>
                        <div class="single-faq">
                            <div class="faq-title d-flex align-items-center">
                                <h3 class="h5" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">How can I contact with your emergency higher management?</h3>
                            </div>
                            <div id="collapseThree" class="collapse" data-parent="#accordionFaq">
                                <div class="faq-answer">
                                    <p><span>Ans: </span>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="popup-video mb-50" data-animate="fadeInUp" data-delay=".4">
                    <img src="{{ asset('concierge/img/video-thumb.jpg') }}" data-rjs="2" alt="">
                    <a href="https://www.youtube.com/watch?v=6ZfuNTqbHE8" class="youtube-popup play-btn ripple">
                        <i class="fa fa-play"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of FAQ -->

<!-- Footer -->
<footer class="main-footer">
    <div class="footer-widgets light-bg border-top pt-80 pb-50">
        <div class="container">
            <div class="row">
                <!-- Footer Widget -->
                <div class="col-lg-3 col-sm-6">
                    <div class="footer-widget mb-30" data-animate="fadeInUp" data-delay=".1">
                        <h3 class="h4">Contact Us</h3>
                        <div class="contact-widget-content">
                            <p>Sed ut perspiciatis unde omnis natus vitae dicta sunt explicabo.</p>
                            <ul class="list-unstyled">
                                <li>
                                    <i class="fa fa-phone"></i>
                                    <a href="tel:+1234567890">(+1) 234-567-890</a>
                                </li>
                                <li>
                                    <i class="fa fa-envelope-o"></i>
                                    <a href="mailto:serviney.demo@fakemail.com">serviney.demo@fakemail.com</a>
                                </li>
                                <li>
                                    <i class="fa fa-map-marker"></i>
                                    <span>784/A Zirtoli Bazar, Begumgonj, Noakhali-3800, BD</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End of Footer Widget -->

                <!-- Footer Widget -->
                <div class="col-lg-3 col-sm-6">
                    <div class="footer-widget mb-30" data-animate="fadeInUp" data-delay=".3">
                        <h3 class="h4">My Account</h3>
                        <div class="menu-wrap">
                            <ul class="menu">
                                <li><a href="#">Pay My Bills</a></li>
                                <li><a href="#">Manage My Account</a></li>
                                <li><a href="#">Constant Guard</a></li>
                                <li><a href="#">Cable Customer Agreement</a></li>
                                <li><a href="#">Move Services</a></li>
                                <li><a href="#">Manage Users & Alerts</a></li>
                                <li><a href="#">Log Out</a></li>
                                <li><a href="#">Internet Help</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End of Footer Widget -->

                <!-- Footer Widget -->
                <div class="col-lg-3 col-sm-6">
                    <div class="footer-widget mb-30" data-animate="fadeInUp" data-delay=".5">
                        <h3 class="h4">Support Links</h3>
                        <div class="menu-wrap">
                            <ul class="menu">
                                <li><a href="#">Comcast Customer Service</a></li>
                                <li><a href="#">Bill & Payment Methods</a></li>
                                <li><a href="#">Support Forums</a></li>
                                <li><a href="#">Privacy Statement</a></li>
                                <li><a href="#">Comcast Customer Service</a></li>
                                <li><a href="#">Social Responsibility</a></li>
                                <li><a href="#">Support Forums</a></li>
                                <li><a href="#">Internet Help</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End of Footer Widget -->

                <!-- Footer Widget -->
                <div class="col-lg-3 col-sm-6">
                    <div class="footer-widget mb-30" data-animate="fadeInUp" data-delay=".7">
                        <h3 class="h4">Popular Products</h3>
                        <div class="menu-wrap">
                            <ul class="menu">
                                <li><a href="#">CC TV Camera</a></li>
                                <li><a href="#">Internet Connection Modem</a></li>
                                <li><a href="#">Wireless Router</a></li>
                                <li><a href="#">Update Anti-virus Softwares</a></li>
                                <li><a href="#">Fingerprint Access</a></li>
                                <li><a href="#">Powerful Switch Cable</a></li>
                                <li><a href="#">Wireless USB Adapter/Card</a></li>
                                <li><a href="#">Internet Help</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End of Footer Widget -->
            </div>
        </div>
    </div>

    <div class="bottom-footer dark-bg">
        <div class="container">
            <div class="row align-items-center">
                <!-- Copyright -->
                <div class="col-md-6">
                    <div class="copyright-text text-center text-md-left">
                        <p class="mb-md-0">&copy; 2018 Arcoch. Tous droits réservés.</p>
                    </div>
                </div>

                <!-- Social Profiles -->
                <div class="col-md-6">
                    <ul class="social-profiles nav justify-content-center justify-content-md-end">
                        <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fa fa-vimeo"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End of Footer -->

<!-- Back to top -->
<div class="back-to-top">
    <a href="#"> <i class="fa fa-chevron-up"></i></a>
</div>

<!-- JS Files -->
<script src="{{ asset('concierge/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('concierge/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('concierge/plugins/waypoints/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('concierge/plugins/waypoints/sticky.min.js') }}"></script>
<script src="{{ asset('concierge/plugins/swiper/swiper.min.js') }}"></script>
<script src="{{ asset('concierge/plugins/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('concierge/plugins/parsley/parsley.min.js') }}"></script>
<script src="{{ asset('concierge/plugins/retinajs/retina.min.js') }}"></script>
<script src="{{ asset('concierge/plugins/isotope/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('concierge/js/menu.min.js') }}"></script>
<script src="{{ asset('concierge/js/scripts.js') }}"></script>
<script src="{{ asset('concierge/js/custom.js') }}"></script>
</body>

</html>
