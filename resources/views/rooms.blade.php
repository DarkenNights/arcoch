<!DOCTYPE html>
<html lang="fr">

<!-- Mirrored from ravistheme.com/pinar/html/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Sep 2018 08:58:14 GMT -->
<head>
    <meta charset="UTF-8">
    <title>L'Arcoch - Chambres d'hôtes</title><!-- Website's title ( it will be shown in browser's tab ), Change the website's title based on your Hotel information -->
    <meta name="description" content="L'Arcoch - Chambres d'hôtes"><!-- Add your Hotel short description -->
    <meta name="keywords" content="arcoch, payolle, chambres, hôtes"><!-- Add some Keywords based on your Hotel and your business and separate them by comma -->
    <meta name="author" content="Thomas Lenormand, contact@arcoch.fr">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=no">
    <link href='https://fonts.googleapis.com/css?family=Lobster%7cRaleway:400,300,100,600,700,800' rel='stylesheet' type='text/css'><!-- Attach Google fonts -->
    <link rel="stylesheet" type="text/css" href="{{ asset('rooms/css/styles.css') }}"><!-- Attach the main stylesheet file -->
</head>
<body class="homepage trans-header sticky white-datepicker">

<!-- Top Header -->
<div id="top-header">
    <div class="inner-container container">
        <!-- Contact Info -->
        <ul class="contact-info list-inline">
            <li><i class="fa fa-phone"></i>09 54 11 54 16</li>
            <li><i class="fa fa-envelope-o"></i>chambres@arcoch.fr</li>
        </ul>
    </div>
</div>
<!-- End of Top Header -->

<!-- Main Header -->
<header id="main-header">
    <div class="inner-container container">
        <div class="left-sec col-sm-4 col-md-2 clearfix">
            <!-- Top Logo -->
            <div id="top-logo">
                <img src="{{ asset('rooms/img/logo_menu_min.png') }}">
            </div>
        </div>
        <div class="right-sec col-sm-8 col-md-10 clearfix">

            <!-- Main Menu -->
            <nav id="main-menu">
                <ul class="list-inline">
                    @include('layout.menu', ['active' => 'rooms'])
                </ul>
            </nav>

            <!-- Menu Handel -->
            <div id="main-menu-handle" class="hidden-md hidden-lg"><i class="fa fa-bars"></i></div>
        </div>
    </div>
    <div id="mobile-menu-container" class="hidden-md hidden-lg"></div>
</header>
<!-- End of Main Header -->

<!-- Top Slider and Booking form -->
<div id="home-top-section">

    <!-- Main Slider -->
{{--    <div id="main-slider">--}}
{{--        <div class="items">--}}
{{--            <a href="http://google.com/">--}}
{{--                <img src="{{ asset('rooms/img/slider/1.jpg') }}" alt="3"/><!-- Change the URL section based on your image\'s name -->--}}
{{--            </a>--}}
{{--        </div>--}}
{{--        <div class="items">--}}
{{--            <a href="http://google.com/">--}}
{{--                <img src="{{ asset('rooms/img/slider/3.jpg') }}" alt="3"/>--}}
{{--            </a>--}}
{{--        </div>--}}
{{--        <div class="items">--}}
{{--            <a href="http://google.com/">--}}
{{--                <img src="{{ asset('rooms/img/slider/4.jpg') }}" alt="4"/>--}}
{{--            </a>--}}
{{--        </div>--}}
{{--        <div class="items">--}}
{{--            <a href="http://google.com/">--}}
{{--                <img src="{{ asset('rooms/img/slider/2.jpg') }}" alt="2"/>--}}
{{--            </a>--}}
{{--        </div>--}}
{{--    </div>--}}

    <!-- Booking Form -->
{{--    <div class="booking-form-container container">--}}
{{--        <div class="booking-form-inner-container">--}}
{{--            <div id="main-booking-form" class="style-2">--}}
{{--                <h2>Find A <span>Room</span></h2>--}}
{{--                <form class="booking-form clearfix" action="#"><!-- Do Not remove the classes -->--}}
{{--                    <div class="input-daterange clearfix">--}}
{{--                        <div class="booking-fields col-xs-6 col-md-12">--}}
{{--                            <input placeholder="Choose check in date" class="datepicker-fields check-in" type="text" name="start" /><!-- Date Picker field ( Do Not remove the "datepicker-fields" class ) -->--}}
{{--                            <i class="fa fa-calendar"></i><!-- Date Picker Icon -->--}}
{{--                        </div>--}}
{{--                        <div class="booking-fields col-xs-6 col-md-12">--}}
{{--                            <input placeholder="Choose check out date" class="datepicker-fields check-out" type="text" name="end" />--}}
{{--                            <i class="fa fa-calendar"></i>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="booking-fields col-xs-6 col-md-12">--}}
{{--                        <!-- Select boxes ( you can change the items and its value based on your project's needs ) -->--}}
{{--                        <select name="room-type">--}}
{{--                            <option value="">How Many Adult?</option><!-- Select box items ( you can change the items and its value based on your project's needs ) -->--}}
{{--                            <option value="2">1</option>--}}
{{--                            <option value="3">2</option>--}}
{{--                            <option value="4">3</option>--}}
{{--                            <option value="5">4</option>--}}
{{--                            <option value="6">5</option>--}}
{{--                        </select>--}}
{{--                        <!-- End of Select boxes -->--}}
{{--                    </div>--}}
{{--                    <div class="booking-fields col-xs-6 col-md-12">--}}
{{--                        <select name="guest">--}}
{{--                            <option value="">How Many Children ?</option>--}}
{{--                            <option value="1">1</option>--}}
{{--                            <option value="2">2</option>--}}
{{--                            <option value="3">3</option>--}}
{{--                            <option value="4">4</option>--}}
{{--                            <option value="5">5</option>--}}
{{--                        </select>--}}
{{--                    </div>--}}
{{--                    <div class="booking-button-container">--}}
{{--                        <input class="btn btn-default" value="Check Availability" type="submit"/><!-- Submit button -->--}}
{{--                    </div>--}}
{{--                </form>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
</div>
<!-- End of Top Slider and Booking form -->

<!-- Luxury Rooms -->
<div id="luxury-rooms">
    <!-- Heading box -->
    <div class="heading-box">
        <h2>Nos 5 <span>chambres</span></h2><!-- Title -->
        <div class="subtitle">Avec vue imprenable sur le lac de Payolle</div><!-- Subtitle -->
    </div>

    <!-- Room Box Container -->
    <div class="room-container container">
        <!-- Room box -->
        <div class="room-boxes">
            <img src="{{ asset('rooms/img/rooms/chambre_2.jpg') }}" alt="King Suit" class="room-img"><!-- Room Image -->
            <div class="room-details col-xs-6 col-md-4">
                <div class="title">Les chambres</div><!-- Room title -->
                <div class="description"><!-- Room Description -->
                    Chambres de 32m² pour deux personnes. Vue directe sur le lac et les montagnes. Petit déjeuner inclus.
                    Une banquette amovible est disponible pour permettre le couchage de deux enfants ou un adulte supplémentaire.<br>
                    La chambre est à 110 € avec un supplément de 30 € par enfant ou 50 € par adulte.
                </div>
                <div class="btn btn-default">Réserver en appelant au 09 54 11 54 16</div><!-- Detail link -->
            </div>
            <div class="price-container col-xs-6 col-md-8">
                <div class="price text-center">
                    <span>
                        110 € / nuit
                        <br>
                        Pour deux personnes
                    </span>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- End of Luxury Rooms -->

<!-- Special Packages -->
<div id="special-packages" class="container">
    <!-- Heading box -->
    <div class="heading-box">
        <h2>Nos <span> prestations</span> et <span>tarifs</span></h2><!-- Title -->
    </div>

    <!-- Package Container -->
    <div class="package-container clearfix">
        <!-- Package Box -->
        <div class="package-box wow fadeInUp col-sm-6 col-md-4">
            <div class="package-inner">
                <div class="title">Chambre double</div>
                <div class="price"><span>110 € par nuit</span>pour deux personnes</div>
                <div class="package-details">
                    <ul>
                        <li>Grande chambre de 32m²</li>
                        <li>Lit double 160x200</li>
                        <li>Salle de bain et WC indépendant</li>
                        <li>Petit déjeuner inclus en chambre</li>
                        <li>Au pied du lac de Payolle</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Package Box -->
        <div class="package-box wow fadeInUp col-sm-6 col-md-4" data-wow-delay="0.5s">
            <div class="package-inner">
                <div class="title">Personnes supp.</div>
                <div class="price"><span>De 30 à 60 €</span>par nuit</div>
                <div class="package-details">
                    <ul>
                        <li>30 € par enfant (limité à 2)</li>
                        <li>50 € par adulte (limité à 1)</li>
                        <li>Petit déjeuner inclus en chambre</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Package Box -->
        <div class="package-box wow fadeInUp col-sm-6 col-md-4" data-wow-delay="1s">
            <div class="package-inner">
                <div class="title">Services supp.</div>
                <div class="price"><span>Jusqu'à 30 €</span>par personne et par nuit</div>
                <div class="package-details">
                    <ul>
                        <li>Repas froid en chambres :</li>
                        <li>Assiette de charcuterie 15 €</li>
                        <li>Assiette fromagère 6.50 €</li>
                        <li>Verrine du jour 5.50 €</li>
                        <li>Boisson à partir de 2.20 €</li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- End of Special Packages -->

<!-- Gallery -->
<div id="gallery">
    <!-- Heading box -->
    <div class="heading-box">
        <h2>Notre <span>galerie</span></h2><!-- Title -->
    </div>

    <!-- Gallery Container -->
    <div class="gallery-container">
        <div class="sort-section">
            <div class="sort-section-container">
                <div class="sort-handle">Filters</div>
{{--                <ul class="list-inline">--}}
{{--                    <li><a href="#" data-filter="*" class="active">Tout</a></li>--}}
{{--                </ul>--}}
            </div>
        </div>
        <ul class="image-main-box clearfix">
            @for($i=1; $i<13; $i++)
                <li class="item col-xs-6 col-md-3">
                    <figure>
                        <img src="{{ asset('rooms/img/rooms/chambre_'.$i.'.jpg') }}" alt="{{ $i }}"/>
                        <a href="{{ asset('rooms/img/rooms/chambre_'.$i.'.jpg') }}" class="more-details" data-title="">Enlarge</a>
                    </figure>
                </li>
            @endfor
        </ul>

    </div>
</div>
<!-- End of Gallery -->


<!-- Top Footer -->
<div id="top-footer">
    <div id="go-up-box"><i class="fa fa-chevron-up"></i></div>
    <div class="inner-container container">
        <div class="widget col-xs-12 col-md-6">
            <h4>Nos chambres</h4>
            <div class="widget-content">
                Chambres de 32m² pour deux personnes. Vue directe sur le lac et les montagnes. Petit déjeuner inclus.
                Une banquette amovible est disponible pour permettre le couchage de deux enfants ou un adulte supplémentaire.<br>
                La chambre est à 110 € avec un supplément de 30 € par enfant ou 50 € par adulte.
            </div>
        </div>
        <div class="widget col-xs-12 col-md-6 get-in-touch">
            <h4>Nous contacter</h4>
            <div class="widget-content">
                <ul>
                    <li><i class="fa fa-map-marker "></i>L'Arcoch, route du lac de Payolle - Quartier Serre Crampe, 65710 Campan</li>
                    <li><i class="fa fa-phone"></i>09 54 11 54 16</li>
                    <li><i class="fa fa-envelope-o"></i>chambres@arcoch.fr</li>
                </ul>
                <ul class="list-inline social-icons">
                    <li><a class="sp-fb" target="_blank" href="https://www.facebook.com/LArcoch-909597672726152/"><i class="fa fa-facebook"></i></a></li>
                    <li><a class="sp-google" target="_blank" href="https://www.instagram.com/arcoch65/?hl=fr"><i class="fa fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <footer id="footer">
        <div class="copy-right">
            &copy; 2019 Arcoch. Tous droits réservés.
        </div>
    </footer>
    <!-- End of Footer -->
</div>
<!-- End of Top Footer -->

<!-- Include the js files  -->
<script type="text/javascript" src="{{ asset('rooms/js/jquery.js') }}"></script>
<script type="text/javascript" src="{{ asset('rooms/js/owl.carousel.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('rooms/js/isotope.pkgd.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('rooms/js/jquery.magnific-popup.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('rooms/js/imagesloaded.pkgd.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('rooms/js/helper.js') }}"></script>
<script type="text/javascript" src="{{ asset('rooms/js/template.js') }}"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        "use strict";
        // Init the Wow plugin
        new WOW({mobile: false}).init();
    });
</script>

<!-- End of js files and codes -->
</body>

<!-- Mirrored from ravistheme.com/pinar/html/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Sep 2018 09:04:12 GMT -->
</html>
