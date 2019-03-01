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
    <meta name="description" content="Dawat restaurant is a simple restaraunt website for restaurant business" />
    <meta name="keywords" content="restaurant, pizza, burger, business, house, online, delevery, html, coffee, cafe, bar" />
    <meta name="author" content="BDEXPERT" />

    <!--====== TITLE TAG ======-->
    <title>L'Arcoch | Restaurant</title>

    <!--====== FAVICON ICON =======-->
    <link rel="shortcut icon" type="image/ico" href="{{ asset('dinner/img/favicon.png') }}" />

    <!--====== STYLESHEETS ======-->
    <link rel="stylesheet" href="{{ asset('dinner/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('dinner/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('dinner') }}">
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
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
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
                            <p><i class="fa fa-envelope-o"></i>Email: <a href="#">contact@arcoch.fr</a></p>
                            <p><i class="fa fa-phone"></i>Telephone: <a href="#">05 59 05 59 05</a></p>
                        </div>
                    </div>
                    <div class="col-md-5 col-lg-6 col-sm-4">
                        <div class="book-table-popup">
                            <a href="#reservation-form-modal" data-toggle="modal">Réserver un table</a>
                        </div>
                        <div class="top-social-bookmark">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                <li><a href="#"><i class="fa fa-feed"></i></a></li>
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
                                    <b>Spécialité canadienne</b>
                                </span>
                        </h1>
                        <a class="home-reservation-button"  href="#reservation-form-modal" data-toggle="modal">Réserver une table</a>
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
                    <p><span class="big-text">U</span> n long texte pour expliquer l'histoire du restaurant</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                <div class="right-about-content">
                    <p>Un deuxième long texte pour expliquer l'histoire du restaurant</p>
                </div>
            </div>
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <div class="about-author-sign text-center">
                    <img src="{{ asset('dinner/img/about/about_sign.png') }}" alt="">
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
                    <h2>Mise en avant d'un plat</h2>
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
                <div class="single-promotions">
                    <div class="promotions-img">
                        <img src="{{ asset('dinner/img/promotions/promo_slide_3.jpg') }}" alt="">
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
                <div class="food-menu-list-menu">
                    <ul>
                        <li class="filter active" data-filter="all">All</li>
                        <li class="filter" data-filter=".breakfast">Breakfast</li>
                        <li class="filter" data-filter=".lunch">Lunch</li>
                        <li class="filter" data-filter=".dinner">Dinner</li>
                        <li class="filter" data-filter=".coffee">Coffe</li>
                        <li class="filter" data-filter=".snacks">Snacks</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row food-menu-list">
            <div class="mix col-md-6 col-lg-6 col-sm-12 col-xs-12 single-menu breakfast coffee snacks">
                <div class="single-menu-details">
                    <div class="food-menu-img"><img src="{{ asset('dinner/img/menu/menu_1.jpg') }}" alt=""></div>
                    <div class="food-menu-details">
                        <h3>Cupcake Recipes <span class="menu-price">$20.00</span></h3>
                        <p class="menu-speacification"><span>- Juice Fruit</span> <span>- Checken</span> <span>- Cherry</span></p>
                        <p class="menu-speacification"><span>- Vegetable</span> <span>- Milk</span> <span>- Potato</span></p>
                        <p class="menu-speacification"><span>- Tomato</span> <span>- Chilli</span> <span>- Sesame</span></p>
                    </div>
                </div>
            </div>
            <div class="mix col-md-6 col-lg-6 col-sm-12 col-xs-12 single-menu dinner snacks">
                <div class="single-menu-details">
                    <div class="food-menu-img"><img src="{{ asset('dinner/img/menu/menu_2.jpg') }}" alt=""></div>
                    <div class="food-menu-details">
                        <h3>Cupcake Recipes <span class="menu-price">$22.00</span></h3>
                        <p class="menu-speacification"><span>- Juice Fruit</span> <span>- Checken</span> <span>- Cherry</span></p>
                        <p class="menu-speacification"><span>- Vegetable</span> <span>- Milk</span> <span>- Potato</span></p>
                        <p class="menu-speacification"><span>- Tomato</span> <span>- Chilli</span> <span>- Sesame</span></p>
                    </div>
                </div>
            </div>
            <div class="mix col-md-6 col-lg-6 col-sm-12 col-xs-12 single-menu breakfast">
                <div class="single-menu-details">
                    <div class="food-menu-img"><img src="{{ asset('dinner/img/menu/menu_3.jpg') }}" alt=""></div>
                    <div class="food-menu-details">
                        <h3>Cupcake Recipes <span class="menu-price">$17.00</span></h3>
                        <p class="menu-speacification"><span>- Juice Fruit</span> <span>- Checken</span> <span>- Cherry</span></p>
                        <p class="menu-speacification"><span>- Vegetable</span> <span>- Milk</span> <span>- Potato</span></p>
                        <p class="menu-speacification"><span>- Tomato</span> <span>- Chilli</span> <span>- Sesame</span></p>
                    </div>
                </div>
            </div>
            <div class="mix col-md-6 col-lg-6 col-sm-12 col-xs-12 single-menu dinner lunch breakfast snacks">
                <div class="single-menu-details">
                    <div class="food-menu-img"><img src="{{ asset('dinner/img/menu/menu_4.jpg') }}" alt=""></div>
                    <div class="food-menu-details">
                        <h3>Cupcake Recipes <span class="menu-price">$28.00</span></h3>
                        <p class="menu-speacification"><span>- Juice Fruit</span> <span>- Checken</span> <span>- Cherry</span></p>
                        <p class="menu-speacification"><span>- Vegetable</span> <span>- Milk</span> <span>- Potato</span></p>
                        <p class="menu-speacification"><span>- Tomato</span> <span>- Chilli</span> <span>- Sesame</span></p>
                    </div>
                </div>
            </div>
            <div class="mix col-md-6 col-lg-6 col-sm-12 col-xs-12 single-menu lunch coffee">
                <div class="single-menu-details">
                    <div class="food-menu-img"><img src="{{ asset('dinner/img/menu/menu_5.jpg') }}" alt=""></div>
                    <div class="food-menu-details">
                        <h3>Cupcake Recipes <span class="menu-price">$120.00</span></h3>
                        <p class="menu-speacification"><span>- Juice Fruit</span> <span>- Checken</span> <span>- Cherry</span></p>
                        <p class="menu-speacification"><span>- Vegetable</span> <span>- Milk</span> <span>- Potato</span></p>
                        <p class="menu-speacification"><span>- Tomato</span> <span>- Chilli</span> <span>- Sesame</span></p>
                    </div>
                </div>
            </div>
            <div class="mix col-md-6 col-lg-6 col-sm-12 col-xs-12 single-menu breakfast">
                <div class="single-menu-details">
                    <div class="food-menu-img"><img src="{{ asset('dinner/img/menu/menu_6.jpg') }}" alt=""></div>
                    <div class="food-menu-details">
                        <h3>Cupcake Recipes <span class="menu-price">$100.00</span></h3>
                        <p class="menu-speacification"><span>- Juice Fruit</span> <span>- Checken</span> <span>- Cherry</span></p>
                        <p class="menu-speacification"><span>- Vegetable</span> <span>- Milk</span> <span>- Potato</span></p>
                        <p class="menu-speacification"><span>- Tomato</span> <span>- Chilli</span> <span>- Sesame</span></p>
                    </div>
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
                                <h4 class="modal-title">Merci de remplir les informations ci-dessous pour réserver une table</h4>
                            </div>
                            <div class="modal-body">
                                <div class="reservation-form">
                                    <form class="table-booking-form" id="reservation">
                                        <div class="row">
                                            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                                                <label for="form-name"><i class="fa fa-user-o"></i></label>
                                                <input class="form-input" type="text" name="form-name" id="form-name" placeholder="Nom...">
                                            </div>
                                            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                                                <label for="form-email"><i class="fa fa-at"></i></label>
                                                <input class="form-input" type="email" name="form-email" id="form-email" placeholder="Email...">
                                            </div>
                                            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                                                <label for="form-mobile"><i class="fa fa-phone"></i></label>
                                                <input class="form-input" type="text" name="form-phone" id="form-mobile" placeholder="Téléphone...">
                                            </div>
                                            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                                                <label for="form-date"><i class="fa fa-calendar"></i></label>
                                                <input class="form-input" type="text" name="form-date" id="form-date" data-select="datepicker" placeholder="Date...">
                                            </div>
                                            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                                                <label for="time"><i class="fa fa-clock-o"></i></label>
                                                <input class="form-input" type="text" name="form-time" id="time" placeholder="Heure...">
                                            </div>
                                            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                                                <label for="form-person"><i class="fa fa-user"></i></label>
                                                <select class="form-input" name="form-person" id="form-person">
                                                    <option value="2">2 Personnes</option>
                                                    <option value="3">3 Personnes</option>
                                                    <option value="4">4 Personnes</option>
                                                    <option value="5">5 Personnes</option>
                                                    <option value="6">6 Personnes</option>
                                                    <option value="7">7 Personnes</option>
                                                    <option value="8">8 Personnes</option>
                                                    <option value="9">9 Personnes</option>
                                                    <option value="10">10 Personnes</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 col-lg-6 col-sm-6 col-sm-offset-3  col-md-offset-3  col-lg-offset-3 col-xs-12">
                                                <button type="submit">Réserver une table</button>
                                            </div>
                                        </div>
                                    </form>
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
                        <img src="{{ asset('dinner/img/team/team-1.jpg') }}" alt="">
                    </div>
                    <div class="member-details">
                        <h3>Mark Angelila</h3>
                        <p>Cras senunc massa quisque tempor dolor sit amet </p>
                    </div>
                </div>
                <div class="single-team-member text-center">
                    <div class="team-member-img ">
                        <img src="{{ asset('dinner/img/team/team-2.jpg') }}" alt="">
                    </div>
                    <div class="member-details">
                        <h3>Angel Meskat</h3>
                        <p>Cras senunc massa quisque tempor dolor sit amet </p>
                    </div>
                </div>
                <div class="single-team-member text-center">
                    <div class="team-member-img ">
                        <img src="{{ asset('dinner/img/team/team-3.jpg') }}" alt="">
                    </div>
                    <div class="member-details">
                        <h3>Jon Doe</h3>
                        <p>Cras senunc massa quisque tempor dolor sit amet </p>
                    </div>
                </div>
                <div class="single-team-member text-center">
                    <div class="team-member-img ">
                        <img src="{{ asset('dinner/img/team/team-4.jpg') }}" alt="">
                    </div>
                    <div class="member-details">
                        <h3>Angel Di Maria</h3>
                        <p>Cras senunc massa quisque tempor dolor sit amet </p>
                    </div>
                </div>
                <div class="single-team-member text-center">
                    <div class="team-member-img ">
                        <img src="{{ asset('dinner/img/team/team-5.jpg') }}" alt="">
                    </div>
                    <div class="member-details">
                        <h3>Park Ji Sung</h3>
                        <p>Cras senunc massa quisque tempor dolor sit amet </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--TEAM AREA END-->

<!--INSTAGRAM GALLERY FEED-->
<section class="gallery-area section-padding" id="gallery">
    <div class="container wow fadeIn">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <div class="area-title text-center">
                    <h2>Galerie</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <div class="instagram-feed-content text-center">
                    <div class="instagram" id="instagram"></div>
                </div>
            </div>
        </div>
    </div>
</section>
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
                        <p>Arcoch, Quartier Payolle 65710 Campan</p>
                        <p><a href="mailto:contact@arcoch.fr">contact@arcoch.fr</a></p>
                        <p><a href="callto:+330559055905">+33 0559055905</a></p>
                    </div>
                    <div class="footer-social-bookmark">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-flickr"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="#"><i class="fa fa-skype"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                <div class="footer-menu">
                    <ul>
                        <li><a href="#">Mentions légales</a></li>
                        <li><a href="#">CGU</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                <div class="footer-copyright">
                    <p>&copy; 2018 <a href="#">Arcoch restaurant</a> Tous droits réservés.</p>
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
<script src="{{ asset('dinner/js/instafeed.min.js') }}"></script>
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