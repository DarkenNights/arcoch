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
    <!--  FAVICON AND TOUCH ICONS -->
    @include('layout/favicon')
    <link rel="stylesheet" type="text/css" href="{{ asset('rooms/css/styles.css') }}"><!-- Attach the main stylesheet file -->
</head>
<body class="homepage trans-header sticky white-datepicker">

<!-- Top Header -->
<div id="top-header">
    <div class="inner-container container">
        <!-- Contact Info -->
        <ul class="contact-info list-inline">
            <li><i class="fa fa-phone"></i>09 54 11 54 16</li>
            <li><i class="fa fa-envelope-o"></i>hebergement@arcoch.fr</li>
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
                    Une banquette amovible est disponible pour permettre le couchage de deux enfants ou adultes supplémentaires.<br>
                    La chambre est à 99 € avec un supplément de 40 € par enfant ou par adulte.
                </div>
                <a href="https://www.beds24.com/booking2.php?propid=91751" target="_blank"><div class="btn btn-default">Réserver une chambre</div></a><!-- Detail link -->
            </div>
            <div class="price-container col-xs-6 col-md-8">
                <div class="price text-center">
                    <span>
                        99 € / nuit
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
    <div class="heading-box" style="margin: 80px 0 50px;">
        <h2>Nos <span> prestations</span> et <span>tarifs</span></h2><!-- Title -->
        <br><br>
        <a href="https://www.beds24.com/booking2.php?propid=91751" target="_blank"><div class="btn btn-default" style="font-size: 20px">Réserver une chambre</div></a>
    </div>

    <!-- Package Container -->
    <div class="package-container clearfix">
        <!-- Package Box -->
        <div class="package-box wow fadeInUp col-sm-6 col-md-4">
            <div class="package-inner">
                <div class="title">Chambre double</div>
                <div class="price"><span>99 € par nuit</span>pour deux personnes</div>
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
                <div class="price"><span>40 €</span>par nuit</div>
                <div class="package-details">
                    <ul>
                        <li>40 € par enfant</li>
                        <li>40 € par adulte</li>
                        <li>Petit déjeuner inclus en chambre</li>
                        <li>Maximum deux personnes supplémentaires par chambre</li>
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
                        <li>Repas en chambres :</li>
                        <li>Plat 15 €</li>
                        <li>Dessert 6.50 €</li>
                        <li>Boisson à partir de 2.20 €</li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- End of Special Packages -->

<div id="special-packages" class="container">
    <!-- Heading box -->
    <div class="heading-box">
        <h2><span>Déroulement</span> du <span>séjour</span></h2><!-- Title -->
        <br><br>
        <a href="https://www.beds24.com/booking2.php?propid=91751" target="_blank"><div class="btn btn-default" style="font-size: 20px">Réserver une chambre</div></a>
    </div>

    <!-- Package Container -->
    <div class="package-container clearfix">
        <!-- Package Box -->
        <div class="package-box wow fadeInUp col-sm-6 col-md-4">
            <div class="package-inner">
                <div class="title">Votre arrivée</div>
                <div class="package-details">
                    <ul>
                        <li>Arrivée à partir de 15h00</li>
                        <li>Arrivée au plus tard à 19h00</li>
                        <li>Merci de nous prévenir si vous ne pouvez pas être là avant 19h00</li>
                        <li>Paiement et commande du repas du soir servi à 19h00 en chambre</li>
                        <li>Pas de repas du soir si vous arrivez après 18h45 (les cuisines sont fermées)</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Package Box -->
        <div class="package-box wow fadeInUp col-sm-6 col-md-4" data-wow-delay="0.5s">
            <div class="package-inner">
                <div class="title">Votre séjour</div>
                <div class="package-details">
                    <ul>
                        <li>Machine à café nespresso à disposition (achat de capsules au bar)</li>
                        <li>Petit déjeuner à 09h00 en chambre</li>
                        <li>Possibilité d'amener un repas froid dans vos chambres</li>
                        <li>Restaurant ouvert à quelques kilomètres pour les repas du soir si vous ne souhaitez pas nos repas</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Package Box -->
        <div class="package-box wow fadeInUp col-sm-6 col-md-4" data-wow-delay="1s">
            <div class="package-inner">
                <div class="title">Votre départ</div>
                <div class="package-details">
                    <ul>
                        <li>Vous devez libérer la chambre <br> au plus tard à 10h00</li>
                        <li>Laisser la chambre au maximum dans l'état dans laquelle vous l'avez trouvée.</li>
                        <li>Pensez aux personnes faisant le ménage derrère vous</li>
                        <li>Remise des clés au bar en partant</li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Gallery -->
<div id="gallery">
    <!-- Heading box -->
    <div class="heading-box">
        <h2>Notre <span>galerie</span></h2><!-- Title -->
    </div>

    <!-- Gallery Container -->
    <div class="gallery-container">
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
                La chambre est à 99 € avec un supplément de 40 € par enfant ou par adulte.
            </div>
        </div>
        <div class="widget col-xs-12 col-md-6 get-in-touch">
            <h4>Nous contacter</h4>
            <div class="widget-content">
                <ul>
                    <li><i class="fa fa-map-marker "></i>L'Arcoch, route du lac de Payolle - Quartier Serre Crampe, 65710 Campan</li>
                    <li><i class="fa fa-phone"></i>09 54 11 54 16</li>
                    <li><i class="fa fa-envelope-o"></i>hebergement@arcoch.fr</li>
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
<!-- COOKIES JS -->
<script type="text/javascript" id="cookieinfo"
        src="//cookieinfoscript.com/js/cookieinfo.min.js"
        data-bg="#AAAAAA"
        data-link="#dc4e41"
        data-message="Nous utilisons des cookies pour vous permettre un confort de navigation. En continuant de visiter notre site vous consentez à l'utilisation des cookies sur celui-ci"
        data-linkmsg="Plus d'informations"
        data-close-text="J'accepte"
>
</script>
<!-- End of js files and codes -->
</body>

<!-- Mirrored from ravistheme.com/pinar/html/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Sep 2018 09:04:12 GMT -->
</html>
