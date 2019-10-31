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
    <link href="{{ asset('dinner/css/font-awesome.min.css') }}" rel="stylesheet">
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
                <img src="{{ asset('concierge/img/slide2.jpg') }}" data-rjs="10" alt="">
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
                <img src="{{ asset('concierge/img/slide1.jpg') }}" data-rjs="10" alt="">
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
                            Nous sommes la pour vous aider et vous accompagner dans cette démarche de visibilité.
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
                        <p>Nous nous déplaçons à votre place pour effectuer la remise des clés à l'arrivée et au départ ainsi que pour l'état des lieux d'entrée et de sortie.</p>
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
                            Il est primordial de rendre votre location propre après chaque passage. Une femme de ménage passera après le départ de chaque vacancier pour rendre votre location
                            prête à accueillir de nouvelles personnes.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of About Us -->

<!-- Packages Wrap -->
<section class="theme-bg-overlay bg-img-md-none pt-120 pb-90">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-8 col-md-10">
                <div class="section-title section-title-white text-center" data-animate="fadeInUp" data-delay=".1">
                    <h2>Tarifs</h2>
                    <p>Deux tarifs sont disponibles. Un tarif pour des locations ponctuelles ou un tarif avec reconduction tacite</p>
                </div>
            </div>
        </div>

        <!-- Packages -->
        <div class="row pb-90">
            <div class="col-sm-6">
                <div class="single-package text-center" data-animate="fadeInUp" data-delay=".1">
                    <h4>Services classiques</h4>
                    <span>pour des besoins ponctuels </span>
                    <hr>
                    <ul class="list-unstyled">
                        <li>Remise des clés à l'arrivée</li>
                        <li>État des lieux d'entrée</li>
                        <li>Récupération des clés à la sortie</li>
                        <li>État des lieux de sortie</li>
                        <li>Ménage (50 € supplémentaire)</li>
                    </ul>
                    <p>40 € <span>par location</span></p>
                    <a href="#" class="btn">Contactez-nous pour plus d'informations</a>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="single-package text-center" data-animate="fadeInUp" data-delay=".4">
                    <span class="pupular-pack">Meilleure offre</span>
                    <h4 class="section-title-white">Service tout en un</h4>
                    <span>pour des besoins annuels</span>
                    <hr>
                    <ul class="list-unstyled">
                        <li>Mise en ligne de vos annonces</li>
                        <li>Prise en charge des réservations</li>
                        <li>Remise des clés à l'arrivée</li>
                        <li>État des lieux d'entrée</li>
                        <li>Récupération des clés à la sortie</li>
                        <li>État des lieux de sortie</li>
                        <li>Ménage (50 € supplémentaire par location)</li>
                        <li>Entretien de votre bien</li>
                        <li>Astreinte pour vos locataires</li>
                    </ul>
                    <p>20 € <br> + <br> 20% du montant des locations <span>par mois et par location</span></p>
                    <a href="#" class="btn">Contactez-nous pour plus d'informations</a>
                </div>
            </div>
        </div>
        <!-- End of Packages -->
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
                        <p class="mb-md-0">&copy; 2019 Arcoch. Tous droits réservés.</p>
                    </div>
                </div>

                <!-- Social Profiles -->
{{--                <div class="col-md-6">--}}
{{--                    <ul class="social-profiles nav justify-content-center justify-content-md-end">--}}
{{--                        <li><a target="_blank" href="https://www.facebook.com/LArcoch-909597672726152/"><i class="fa fa-facebook"></i></a></li>--}}
{{--                        <li><a target="_blank" href="https://www.instagram.com/arcoch65/?hl=fr"><i class="fa fa-instagram"></i></a></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
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
