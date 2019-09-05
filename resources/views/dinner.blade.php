<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="fr"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="fr"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="fr"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="fr">
<!--<![endif]-->


<!-- Mirrored from quomodosoft.com/html/dawat/demo/index-parallax.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Sep 2018 08:54:39 GMT -->
<head>
    <!--====== USEFULL META ======-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="L'Arcoch, le restautant au bord du lac de Payolle" />
    <meta name="keywords" content="restaurant, poutines, burger, planches, salades, payolle, lac, pub, tapas" />
    <meta name="author" content="Arcoch" />

    <!--====== TITLE TAG ======-->
    <title>L'Arcoch | Restaurant</title>

    <!--====== FAVICON ICON =======-->
    <link rel="shortcut icon" type="image/ico" href="{{ asset('dinner/img/favicon.png') }}" />

    <!--====== STYLESHEETS ======-->
    <link rel="stylesheet" href="{{ asset('dinner/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('dinner/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('dinner/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('dinner/css/datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('dinner/css/timepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dinner/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('dinner/css/typed.css') }}">
    <link href="{{ asset('dinner/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dinner/css/font-awesome.min.css') }}" rel="stylesheet">

    <!--====== MAIN STYLESHEETS ======-->
    <link href="{{ asset('dinner/style.css') }}" rel="stylesheet">
    <link href="{{ asset('dinner/css/responsive.css') }}" rel="stylesheet">

    <script src="{{ asset('dinner/js/vendor/modernizr-2.8.3.min.js') }}"></script>
    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js') }}"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js') }}"></script>
    <![endif]-->
</head>

<body>

<!--[if lt IE 8]>
<p class="browserupgrade">Vous utilisez un navigateur <strong>non mise à jour</strong>. Merci<a href="http://browsehappy.com/">de le mettre à jour</a> pour améliorer votre expérience de navigation</p>
<![endif]-->

<!--- PRELOADER -->
<div class="preeloader">
    <div class="preloader-spinner"><i class="fa fa-cutlery"></i></div>
</div>

<!--SCROLL TO TOP-->
<a href="#home" class="scrolltotop"><i class="fa fa-long-arrow-up"></i></a>

<!--START TOP AREA-->
<header class="top-area" id="home">
    <div class="top-area-bg" data-stellar-background-ratio="0.6"></div>
    <div class="header-top-area">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-lg-6 col-sm-8">
                        <div class="call-to-action">
                            <p><i class="fa fa-envelope-o"></i>Email: <a href="mailto:resto@arcoch.fr">resto@arcoch.fr</a></p>
                            <p><i class="fa fa-phone"></i>Telephone: <a href="tel:+33954115416">09 54 11 54 16</a></p>
                        </div>
                    </div>
                    <div class="col-md-5 col-lg-6 col-sm-4">
                        <div class="book-table-popup">
                            <a href="#reservation-form-modal" data-toggle="modal">Réserver</a>
                        </div>
                        <div class="top-social-bookmark">
                            <ul>
                                <li><a href="https://www.facebook.com/LArcoch-909597672726152/"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-google"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--MAINMENU AREA-->
        <div class="mainmenu-area" id="mainmenu-area">
            <div class="mainmenu-area-bg"></div>
            <nav class="navbar">
                <div class="container">
                    <div class="navbar-header">
                        <button class="collapsed navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-example-js-navbar-scrollspy">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="#home" class="navbar-brand"><img src="{{ asset('dinner/img/main_logo_black.png') }}" alt="logo"></a>
                        <a href="#home" class="navbar-brand white"><img src="{{ asset('dinner/img/main_logo.png') }}" alt="logo"></a>
                    </div>
                    <div class="collapse navbar-collapse bs-example-js-navbar-scrollspy">
                        <div class="search-form-area">
                            <div class="search-form-overlay"></div>
                            <a class="search-form-trigger" href="#search-form">Search<span></span></a>
                            <div id="search-form" class="search-form">
                                <form>
                                    <input type="search" placeholder="Search...">
                                </form>
                            </div>
                        </div>
                        <ul id="nav" class="nav navbar-nav">
                            @include('layout.menu', ['active' => 'dinner'])
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <!--END MAINMENU AREA END-->
    </div>

    <!--WELCOME TEXT AREA-->
    <div class="welcome-text-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="welcome-text">
                        <h2>Bienvenue à </h2>
                        <h1 class="cd-headline clip is-full-width">
                            <span class="hero-text">L'Arcoch</span>
                            <span class="cd-words-wrapper">
                                    <b class="is-visible">Cafe & restaurant</b>
                                    <b>Spécialités canadiennes</b>
                                </span>
                        </h1>
                        <a class="home-reservation-button"  href="#reservation-form-modal" data-toggle="modal">Nous contacter</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--WELCOME TEXT AREA END-->

</header>
<!--END TOP AREA-->

<!--ABOUT AREA-->
<section class="about-area section-padding" id="about">
    <div class="container wow fadeIn">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <div class="area-title text-center">
                    <h2>Notre histoire</h2>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                <div class="about-content">
                    <p>
                        <span class="big-text">A</span>yant déjà posséder un restaurant et salon de thé dans la ville de Pau. Nous avons fait le choix de recommencer l'aventure sur le lac de Payolle.
                        Après avoir forcément trouvé l'endroit magique nous avons réfléchis pour créer une carte en adéquation avec le lieu et son environnement. Nous avons discuté avec plusieurs personnes
                        habitants non loin du lac pour apprendre que le lac de Payolle s'appellait aussi "Le Petit Canada". C'est pourquoi nous avons choisis de créer une carte et un restaurant sur le thème du Canada.
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                <div class="right-about-content">
                    <p>
                        Le restaurant vous propose donc une multitude de plat, en passant par les poutines, les bugers, mais aussi les planches et les salades. Sur cette carte nous avons fais le choix de ne pas faire
                        de la cuisine traditionnelle pour éviter au maximum les doublons avec les restaurants aux alentours. Ce ne sera donc pas chez nous que vous pourrez goûtter la traditionnelle garbure
                        ou le porc noir de la région. Nous sommes impatients de vous voir et vous invitons à venir goûter notre carte.
                    </p>
                </div>
            </div>
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <div class="about-author-sign text-center">

                </div>
            </div>
        </div>
    </div>
</section>
<!--ABOUT AREA END-->

<!--SPEACIAL PROMOTIONS AREA-->
<section class="promotions-area section-padding" id="promotion">
    <div class="promotion-area-bg" data-stellar-background-ratio="0.6"></div>
    <div class="container wow fadeIn">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <div class="area-title text-center">
                    <h2>Venez déguster</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="menu-discount-offer col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <div class="single-promotions">
                    <div class="promotions-img">
                        <img src="{{ asset('dinner/img/promotions/promo_slide_1.jpg') }}" alt="">
                    </div>
                    <div class="promotions-details">
                        <h3>40% off for 9'' - 12'' pizza - Wed, Thu, Friday only</h3>
                        <p>Pizza 12 inch + 1 Side Dish + 1,5L Coke Bottle Only From 209,000</p>
                        <a href="#" class="read-more">Order now</a>
                    </div>
                </div>
                <div class="single-promotions">
                    <div class="promotions-img">
                        <img src="{{ asset('dinner/img/promotions/promo_slide_2.jpg') }}" alt="">
                    </div>
                    <div class="promotions-details">
                        <h3>40% off for 9'' - 12'' pizza - Wed, Thu, Friday only</h3>
                        <p>Pizza 12 inch + 1 Side Dish + 1,5L Coke Bottle Only From 209,000</p>
                        <a href="#" class="read-more">Order now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--SPEACIAL PROMOTIONS AREA END-->

<!--MENUS AREA-->
<section class="menus-area section-padding" id="menu">
    <div class="container wow fadeIn">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <div class="area-title text-center">
                    <h2>La carte</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <div class="resarvation-from-button text-center wow fadeIn">
                    <a href="{{ route('dinnerCard') }}" class="reservation-button" style="border: solid 2px #ca3d26">Télécharger la carte</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--MENUS AREA END-->

<!--RESERVATION BUTTON AREA-->
<section class="reservation-button-area section-padding" id="reservation-button">
    <div class="reservation-button-area-bg" data-stellar-background-ratio="0.6"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <div class="resarvation-from-button text-center wow fadeIn">
                    <h2>Réserver une table maintenant !</h2>
                    <a href="#reservation-form-modal" class="reservation-button" data-toggle="modal">Réserver</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <!-- RESERVATION FORM MODAL -->
                <div class="modal fade" id="reservation-form-modal" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title">Pour réserver une table merci de nous appeler au numéro</h4>
                            </div>
                            <div class="modal-body">
                                <div class="reservation-form">
                                    <div class="table-booking-form">
                                        <div class="row">
                                            <div class="col-sm-12 text-center" style="margin-bottom: 0; font-size: 40px">
                                                09 54 11 54 16
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- RESERVATION FORM MODAL -->
            </div>
        </div>
    </div>
</section>
<!--RESERVATION BUTTON AREA END-->

<!--TEAM AREA-->
<section class="team-area section-padding" id="team">
    <div class="container wow fadeIn">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <div class="area-title text-center">
                    <h2>L'équipe</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 team-slider">
                <div class="single-team-member text-center">
                    <div class="team-member-img ">
                        <img src="{{ asset('index/img/speakers/julia.png') }}" alt="julia">
                    </div>
                    <div class="member-details">
                        <h3>Julia</h3>
                        <p>Cuisine</p>
                    </div>
                </div>
                <div class="single-team-member text-center">
                    <div class="team-member-img ">
                        <img src="{{ asset('index/img/speakers/pauline.png') }}" alt="">
                    </div>
                    <div class="member-details">
                        <h3>Pauline</h3>
                        <p>Cuisine</p>
                    </div>
                </div>
                <div class="single-team-member text-center">
                    <div class="team-member-img ">
                        <img src="{{ asset('index/img/speakers/catherine.png') }}" alt="">
                    </div>
                    <div class="member-details">
                        <h3>Catherine</h3>
                        <p>Cuisine</p>
                    </div>
                </div>
                <div class="single-team-member text-center">
                    <div class="team-member-img ">
                        <img src="{{ asset('index/img/speakers/patrick.png') }}" alt="">
                    </div>
                    <div class="member-details">
                        <h3>Patrick</h3>
                        <p>Cuisine</p>
                    </div>
                </div>
                <div class="single-team-member text-center">
                    <div class="team-member-img ">
                        <img src="{{ asset('index/img/speakers/luc.png') }}" alt="">
                    </div>
                    <div class="member-details">
                        <h3>Luc</h3>
                        <p>Serveur</p>
                    </div>
                </div>
                <div class="single-team-member text-center">
                    <div class="team-member-img ">
                        <img src="{{ asset('index/img/speakers/thomas.png') }}" alt="">
                    </div>
                    <div class="member-details">
                        <h3>Thomas</h3>
                        <p>Serveur</p>
                    </div>
                </div>
                <div class="single-team-member text-center">
                    <div class="team-member-img ">
                        <img src="{{ asset('index/img/speakers/alex.png') }}" alt="">
                    </div>
                    <div class="member-details">
                        <h3>Alexis</h3>
                        <p>Barman</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--TEAM AREA END-->

<!--INSTAGRAM GALLERY FEED-->
{{--<section class="gallery-area section-padding" id="gallery">--}}
{{--    <div class="container wow fadeIn">--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">--}}
{{--                <div class="area-title text-center">--}}
{{--                    <h2>Galerie</h2>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">--}}
{{--                <div class="instagram-feed-content text-center">--}}
{{--                    <div class="instagram" id="instagram"></div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
<!--INSTAGRAM GALLERY FEED END-->

<!--FOOER AREA-->
<div class="footer-area" id="contact">
    <div class="footer-area-bg" data-stellar-background-ratio="0.6"></div>
    <div class="container wow fadeIn">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <div class="footer-top section-padding text-center">
                    <div class="footer-logo">
                        <a href="#"><img src="{{ asset('dinner/img/main_logo.png') }}" alt=""></a>
                    </div>
                    <div class="footer-address">
                        <p>L'Arcoch, route du lac de Payolle quartier Serre Crampe, 65710 Campan</p>
                        <p><a href="mailto:contact@arcoch.fr">contact@arcoch.fr</a></p>
                        <p><a href="callto:+33954115416">+33954115416</a></p>
                    </div>
                    <div class="footer-social-bookmark">
                        <ul>
                            <li><a class="sp-fb" target="_blank" href="https://www.facebook.com/LArcoch-909597672726152/"><i class="fa fa-facebook"></i></a></li>
                            <li><a class="sp-google" target="_blank" href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a class="sp-google" target="_blank" href="#"><i class="fa fa-google"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                <div class="footer-menu">
                    <ul>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                <div class="footer-copyright">
                    <p>&copy; 2019 <a href="#">Arcoch restaurant</a> Tous droits réservés.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--FOOER AREA END-->


<!--====== SCRIPTS JS ======-->
<script src="{{ asset('dinner/js/vendor/jquery-1.12.4.min.js') }}"></script>
<script src="{{ asset('dinner/js/vendor/bootstrap.min.js') }}"></script>

<!--====== PLUGINS JS ======-->
<script src="{{ asset('dinner/js/vendor/jquery.easing.1.3.js') }}"></script>
<script src="{{ asset('dinner/js/vendor/jquery-migrate-1.2.1.min.js') }}"></script>
<script src="{{ asset('dinner/js/jquery.pogo-slider.js') }}"></script>
<script src="{{ asset('dinner/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('dinner/js/contact-form.js') }}"></script>
<script src="{{ asset('dinner/js/stellar.js') }}"></script>
<script src="{{ asset('dinner/js/jquery.mixitup.min.js') }}"></script>
{{--<script src="{{ asset('dinner/js/instafeed.min.js') }}"></script>--}}
<script src="{{ asset('dinner/js/datepicker.min.js') }}"></script>
<script src="{{ asset('dinner/js/timepicker.min.js') }}"></script>
<script src="{{ asset('dinner/js/wow.min.js') }}"></script>
<script src="{{ asset('dinner/js/typed.js') }}"></script>
<script src="{{ asset('dinner/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('dinner/js/jquery.sticky.js') }}"></script>

<!--===== ACTIVE JS=====-->
<script src="{{ asset('dinner/js/main.js') }}"></script>
</body>

</html>
