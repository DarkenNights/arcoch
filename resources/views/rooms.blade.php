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
                <div class="title"><span>L'Arcoch</span></div>
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
        <h2>Nos <span>chambres</span></h2><!-- Title -->
        <div class="subtitle">Avec vue imprenable sur le lac de Payolle</div><!-- Subtitle -->
    </div>

    <!-- Room Box Container -->
    <div class="room-container container">
        <!-- Room box -->
        <div class="room-boxes">
            <img src="{{ asset('rooms/img/rooms/1.jpg') }}" alt="King Suit" class="room-img"><!-- Room Image -->
            <div class="room-details col-xs-6 col-md-4">
                <div class="title">La chambre Cerf</div><!-- Room title -->
                <div class="description"><!-- Room Description -->
                    Chambres de 32m² pour deux personnes. Vue direct sur le lac et les montagnes. Petit déjeuner inclus.
                    Une banquette amovible est disponible pour permettre le couchage de deux à quatre enfants ou adultes supplémentaires.<br>
                    La chambre est à 120 € avec un supplément de 20 € par enfant ou 40 € par adulte.
                </div>
                <div class="btn btn-default">Réserver en appelant au 09 54 11 54 16</div><!-- Detail link -->
            </div>
            <div class="price-container col-xs-6 col-md-8">
                <div class="price text-center">
                    <span>
                        120 € / nuit
                        <br>
                        Pour deux personnes
                    </span>
                </div>
            </div>

        </div>
        <!-- Room box -->
        <div class="room-boxes right">
            <img src="{{ asset('rooms/img/rooms/2.jpg') }}" alt="Royal Suit" class="room-img">
            <div class="room-details col-xs-6 col-md-4">
                <div class="title">La chambre Élan</div>
                <div class="description"><!-- Room Description -->
                    Chambres de 32m² pour deux personnes. Vue direct sur le lac et les montagnes. Petit déjeuner inclus.
                    Une banquette amovible est disponible pour permettre le couchage de deux à quatre enfants ou adultes supplémentaires.<br>
                    La chambre est à 120 € avec un supplément de 20 € par enfant ou 40 € par adulte.
                </div>
                <div class="btn btn-default">Réserver en appelant au 09 54 11 54 16</div>
            </div>
            <div class="price-container col-xs-6 col-md-8">
                <div class="price text-center">
                    <span>
                        120 € / nuit
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
        <h2>Special <span>Packages</span></h2><!-- Title -->
        <div class="subtitle">Choose one of our special offers</div><!-- Subtitle -->
    </div>

    <!-- Package Container -->
    <div class="package-container clearfix">
        <!-- Package Box -->
        <div class="package-box wow fadeInUp col-sm-6 col-md-4">
            <div class="package-inner">
                <div class="title">Diamond</div>
                <div class="price"><span>$450</span>per night</div>
                <div class="package-details">
                    <ul>
                        <li>Flight Ticket</li>
                        <li>Restaurant ( Lunch / Dinner )</li>
                        <li>Music Concert</li>
                        <li>Airport Pick-up</li>
                        <li>Sport Activities</li>
                    </ul>
                </div>
                <a href="#" class="btn btn-default">Select Package</a>
            </div>
        </div>

        <!-- Package Box -->
        <div class="package-box wow fadeInUp col-sm-6 col-md-4" data-wow-delay="0.5s">
            <div class="package-inner">
                <div class="title">Gold</div>
                <div class="price"><span>$340</span>per night</div>
                <div class="package-details">
                    <ul>
                        <li>Flight Ticket</li>
                        <li>Restaurant ( Lunch )</li>
                        <li>Music Concert ( 50% off )</li>
                        <li>Airport Pick-up</li>
                        <li>Sport Activities</li>
                    </ul>
                </div>
                <a href="#" class="btn btn-default">Select Package</a>
            </div>
        </div>

        <!-- Package Box -->
        <div class="package-box wow fadeInUp col-sm-6 col-md-4" data-wow-delay="1s">
            <div class="package-inner">
                <div class="title">Silver</div>
                <div class="price"><span>$230</span>per night</div>
                <div class="package-details">
                    <ul>
                        <li>Flight Ticket</li>
                        <li>Restaurant ( 20% off Lunch )</li>
                        <li>Music Concert ( 30% off )</li>
                        <li>Airport Pick-up</li>
                        <li>Sport Activities</li>
                    </ul>
                </div>
                <a href="#" class="btn btn-default">Select Package</a>
            </div>
        </div>

    </div>
</div>
<!-- End of Special Packages -->

<!-- Gallery -->
<div id="gallery">
    <!-- Heading box -->
    <div class="heading-box">
        <h2>Pinar <span>Gallery</span></h2><!-- Title -->
    </div>

    <!-- Gallery Container -->
    <div class="gallery-container">
        <div class="sort-section">
            <div class="sort-section-container">
                <div class="sort-handle">Filters</div>
                <ul class="list-inline">
                    <li><a href="#" data-filter="*" class="active">All</a></li>
                    <li><a href="#" data-filter=".restaurant">Restaurant</a></li>
                    <li><a href="#" data-filter=".bars">Bars</a></li>
                    <li><a href="#" data-filter=".pool">Pool</a></li>
                    <li><a href="#" data-filter=".rooms">Rooms</a></li>
                    <li><a href="#" data-filter=".lobby">Lobby</a></li>
                </ul>
            </div>
        </div>
        <ul class="image-main-box clearfix">
            <li class="item col-xs-6 col-md-3 lobby">
                <figure>
                    <img src="{{ asset('rooms/img/gallery/1.jpg') }}" alt="11"/>
                    <a href="{{ asset('rooms/img/gallery/1.jpg') }}" class="more-details" data-title="Great View">Enlarge</a>
                    <figcaption>
                        <h4><span>Great</span> View</h4>
                    </figcaption>
                </figure>
            </li>
            <li class="item col-xs-6 col-md-6 pool">
                <figure>
                    <img src="{{ asset('rooms/img/gallery/2.jpg') }}" alt="11"/>
                    <a href="{{ asset('rooms/img/gallery/2.jpg') }}" class="more-details" data-title="Outdoor Pool">Enlarge</a>
                    <figcaption>
                        <h4><span>Outdoor</span> Pool</h4>
                    </figcaption>
                </figure>
            </li>
            <li class="item col-xs-6 col-md-3 bars">
                <figure>
                    <img src="{{ asset('rooms/img/gallery/3.jpg') }}" alt="11"/>
                    <a href="{{ asset('rooms/img/gallery/3.jpg') }}" class="more-details" data-title="Delicious Foods">Enlarge</a>
                    <figcaption>
                        <h4><span>Delicious</span> Foods</h4>
                    </figcaption>
                </figure>
            </li>
            <li class="item col-xs-6 col-md-3 restaurant">
                <figure>
                    <img src="{{ asset('rooms/img/gallery/4.jpg') }}" alt="11"/>
                    <a href="{{ asset('rooms/img/gallery/4.jpg') }}" class="more-details" data-title="International Foods">Enlarge</a>
                    <figcaption>
                        <h4><span>International</span> Foods</h4>
                    </figcaption>
                </figure>
            </li>
            <li class="item col-xs-6 col-md-3 pool">
                <figure>
                    <img src="{{ asset('rooms/img/gallery/5.jpg') }}" alt="11"/>
                    <a href="{{ asset('rooms/img/gallery/5.jpg') }}" class="more-details" data-title="Cozy Spaces">Enlarge</a>
                    <figcaption>
                        <h4><span>Cozy</span> Spaces</h4>
                    </figcaption>
                </figure>
            </li>
            <li class="item col-xs-6 col-md-3 rooms">
                <figure>
                    <img src="{{ asset('rooms/img/gallery/6.jpg') }}" alt="11"/>
                    <a href="{{ asset('rooms/img/gallery/6.jpg') }}" class="more-details" data-title="Comfortable Rooms">Enlarge</a>
                    <figcaption>
                        <h4><span>Comfortable </span> Rooms</h4>
                    </figcaption>
                </figure>
            </li>
            <li class="item col-xs-6 col-md-3 pool">
                <figure>
                    <img src="{{ asset('rooms/img/gallery/7.jpg') }}" alt="11"/>
                    <a href="{{ asset('rooms/img/gallery/7.jpg') }}" class="more-details" data-title="Relaxation Spaces">Enlarge</a>
                    <figcaption>
                        <h4><span>Relaxation</span> Spaces</h4>
                    </figcaption>
                </figure>
            </li>
            <li class="item col-xs-6 col-md-6 pool">
                <figure>
                    <img src="{{ asset('rooms/img/gallery/8.jpg') }}" alt="11"/>
                    <a href="{{ asset('rooms/img/gallery/8.jpg') }}" class="more-details" data-title="Indoor Pool">Enlarge</a>
                    <figcaption>
                        <h4><span>Indoor</span> Pool</h4>
                    </figcaption>
                </figure>
            </li>
        </ul>

    </div>
</div>
<!-- End of Gallery -->


<!-- Top Footer -->
<div id="top-footer">
    <div id="go-up-box"><i class="fa fa-chevron-up"></i></div>
    <div class="inner-container container">
        <div class="widget col-xs-6 col-md-4">
            <h4>Text Widget</h4>
            <div class="widget-content">
                Text widget can be used for putting text, images and some other elements in the widget areas. As an example you can add your short description about your hotel and add your logo in this area. Also you can add some useful information like notification in this area.
            </div>
        </div>
        <div class="widget col-xs-6 col-md-4">
            <h4>Newsletter</h4>
            <div class="widget-content">
                <div class="desc">
                    Some description of how your newsletter works will be located in this section.
                </div>
                <form class="news-letter-form">
                    <input type="text" class="email" placeholder="Email">
                    <input type="submit" class="btn btn-default" value="Sign up Now">
                </form>
            </div>
        </div>
        <div class="widget col-md-4 get-in-touch">
            <h4>Get in Touch</h4>
            <div class="widget-content">
                <ul>
                    <li><i class="fa fa-map-marker "></i>133 Elizabethstreet, Sydney 4000, Australia</li>
                    <li><i class="fa fa-phone"></i>0185 26 37 48 59</li>
                    <li><i class="fa fa-envelope-o"></i>info@pinar.com</li>
                </ul>
                <ul class="list-inline social-icons">
                    <li><a href="#"><i class="fa fa-facebook "></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-skype"></i></a></li>
                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <footer id="footer">
        <div class="copy-right">
            &copy; 2018 Arcoch. Tous droits réservés.
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
