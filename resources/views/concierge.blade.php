<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Document Title -->
    <title>L'Arcoch | Conciergerie</title>

    <!--  FAVICON AND TOUCH ICONS -->
    @include('layout/favicon')

    <!-- CSS Files -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rubik:400,500,700%7CSource+Sans+Pro:300i,400,400i,600,700">
    <link rel="stylesheet" href="{{ asset('concierge/css/bootstrap.min.css') }}">
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
                            <img src="{{ asset('concierge/img/logo_menu_min.png') }}" data-rjs="2" alt="VPNet">
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
                        <a href="tel:+330954115416">09 54 11 54 16</a>
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

            <!-- Single slide -->
            <div class="swiper-slide position-relative">
                <img src="{{ asset('concierge/img/slide1.jpg') }}" data-rjs="2" alt="">
                <div class="slide-content container">
                    <div class="row align-items-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="slide-content-inner">
                                <h4 data-animate="fadeInUp" data-delay=".05">Des offres dont vous avez besoin</h4>
                                <h2 data-animate="fadeInUp" data-delay=".3">Gagner du temps sur des tâches que l'on peut faire pour vous</h2>
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
                    <h2 class="mb-3">La conciergerie de l'Arcoch vous propose ses services</h2>
                    <p>
                        Nous souhaitons répondre à un besoin simple des propriétaire : "Ne plus avoir à gérer les départs et les arrivées des vacanciers". Pour cela nous avons mis en place plusieurs types de services ainsi
                        que plusieurs offres pour vous permettre de répondre au mieux à vos besoins et vos attentes.
                    </p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4 col-sm-6">
                <div class="single-feature single-feature-img-top text-center" data-animate="fadeInUp" data-delay=".1">
                    <div class="single-feature-img">
                        <i class="fas fa-globe fa-3x"></i>
                    </div>
                    <div class="single-feature-content">
                        <h4>Mise en ligne de vos annonces</h4>
                        <p>
                            Au vu du nombre croissant de site de location, il peut être rapidement compliqué et fastidieux de gérer la mise en ligne de votre location.
                            Nous sommes la pour vous aider et vous accompagner dans cette démarche de visibilité de votre location.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="single-feature single-feature-img-top text-center" data-animate="fadeInUp" data-delay=".4">
                    <div class="single-feature-img">
                        <i class="fas fa-key fa-3x"></i>
                    </div>
                    <div class="single-feature-content">
                        <h4>Remise des clés et états de lieux</h4>
                        <p>Nous nous déplaçons à votre place pour effectuer la remise des clés au départ et à l'arriver ainsi que l'état des lieux d'entrée et de sortie.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="single-feature single-feature-img-top text-center" data-animate="fadeInUp" data-delay=".7">
                    <div class="single-feature-img">
                        <i class="fas fa-broom fa-3x"></i>
                    </div>
                    <div class="single-feature-content">
                        <h4>Ménage</h4>
                        <p>
                            Il est primordial de rendre votre location propre après chaque passage. Nous laissons le choix aux locataires de faire le ménage eux même. une femme de ménage sera commissionner.
                            Ainsi vous êtes toujours sur que votre location est propre et prête à accueillir de nouvelles personnes.
                        </p>
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
{{--<section class="pt-120 pb-70">--}}
{{--    <div class="container">--}}
{{--        <div class="row align-items-center">--}}
{{--            <div class="col-lg-6">--}}
{{--                <div class="faq pb-50" data-animate="fadeInUp" data-delay=".1">--}}
{{--                    <div class="section-title">--}}
{{--                        <h2>Frequently Asked Questions</h2>--}}
{{--                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some</p>--}}
{{--                    </div>--}}
{{--                    <div class="accordion" id="accordionFaq">--}}
{{--                        <div class="single-faq">--}}
{{--                            <div class="faq-title d-flex align-items-center">--}}
{{--                                <h3 class="h5" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">I can’t access my internet. How do i contact with support center?</h3>--}}
{{--                            </div>--}}
{{--                            <div id="collapseOne" class="collapse show" data-parent="#accordionFaq">--}}
{{--                                <div class="faq-answer">--}}
{{--                                    <p><span>Ans: </span>I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="single-faq">--}}
{{--                            <div class="faq-title d-flex align-items-center">--}}
{{--                                <h3 class="h5" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">I already paid my bill but still its showing Due. Why is that?</h3>--}}
{{--                            </div>--}}
{{--                            <div id="collapseTwo" class="collapse" data-parent="#accordionFaq">--}}
{{--                                <div class="faq-answer">--}}
{{--                                    <p><span>Ans: </span>Pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="single-faq">--}}
{{--                            <div class="faq-title d-flex align-items-center">--}}
{{--                                <h3 class="h5" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">How can I contact with your emergency higher management?</h3>--}}
{{--                            </div>--}}
{{--                            <div id="collapseThree" class="collapse" data-parent="#accordionFaq">--}}
{{--                                <div class="faq-answer">--}}
{{--                                    <p><span>Ans: </span>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-6">--}}
{{--                <div class="popup-video mb-50" data-animate="fadeInUp" data-delay=".4">--}}
{{--                    <img src="{{ asset('concierge/img/video-thumb.jpg') }}" data-rjs="2" alt="">--}}
{{--                    <a href="https://www.youtube.com/watch?v=6ZfuNTqbHE8" class="youtube-popup play-btn ripple">--}}
{{--                        <i class="fa fa-play"></i>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
<!-- End of FAQ -->

<!-- Footer -->
<footer class="main-footer">
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
<script src="{{ asset('concierge/js/all.min.js') }}"></script>
<script src="{{ asset('concierge/js/scripts.js') }}"></script>
<script src="{{ asset('concierge/js/custom.js') }}"></script>
</body>

</html>
