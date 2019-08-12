<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <!-- The above 3 meta tags *must* come first in the head -->

    <!-- SITE TITLE -->
    <title>L'Arcoch</title>
    <meta name="description" content="Responsive Multipurpose HTML5 Template"/>
    <meta name="keywords" content="Bootstrap3,cv,resume, portfolio, Template, multipurpose , Responsive, HTML5"/>
    <meta name="author" content="themearth.com"/>

    <!-- twitter card starts from here, if you don't need remove this section -->
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:site" content="@yourtwitterusername"/>
    <meta name="twitter:creator" content="@yourtwitterusername"/>
    <meta name="twitter:url" content="http://yourdomain.com/"/>
    <meta name="twitter:title" content="Your home page title, max 140 char"/>
    <meta name="twitter:title" content="Your home page title, max 140 char"/>
    <!-- maximum 140 char -->
    <meta name="twitter:description" content="Your site description, maximum 140 char "/>
    <!-- maximum 140 char -->
    <meta name="twitter:image" content="{{ asset('index/img/twittercardimg/twittercard-280-150.jpg') }}"/>
    <!-- when you post this page url in twitter , this image will be shown -->
    <!-- twitter card ends from here -->

    <!-- facebook open graph starts from here, if you don't need then delete open graph related  -->
    <meta property="og:title" content="Your home page title"/>
    <meta property="og:url" content="http://your domain here.com"/>
    <meta property="og:locale" content="fr_FR"/>
    <meta property="og:site_name" content="Your site name here"/>
    <!--meta property="fb:admins" content="" /-->  <!-- use this if you have  -->
    <meta property="og:type" content="website"/>
    <meta property="og:image" content="{{ asset('index/img/opengraph/fbphoto.jpg') }}"/>
    <!-- when you post this page url in facebook , this image will be shown -->
    <!-- facebook open graph ends from here -->

    <!--  FAVICON AND TOUCH ICONS -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('index/img/favicon.ico') }}"/>
    <!-- this icon shows in browser toolbar -->
    <link rel="icon" type="image/x-icon" href="{{ asset('index/img/favicon.ico') }}"/>
    <!-- this icon shows in browser toolbar -->
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('index/img/favicon/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('index/img/favicon/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('index/img/favicon/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('index/img/favicon/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('index/img/favicon/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('index/img/favicon/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('index/img/favicon/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('index/img/favicon/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('index/img/favicon/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('index/img/favicon/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('index/img/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('index/img/favicon/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('index/img/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('index/img/favicon/manifest.json') }}">

    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="{{ asset('index/libs/bootstrap/css/bootstrap.min.css') }}" media="all"/>

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="{{ asset('index/libs/fontawesome/css/font-awesome.min.css') }}" media="all"/>

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="{{ asset('index/libs/maginificpopup/magnific-popup.css') }}" media="all"/>

    <!-- Time Circle -->
    <link rel="stylesheet" href="{{ asset('index/libs/timer/TimeCircles.css') }}" media="all"/>

    <!-- OWL CAROUSEL CSS -->
    <link rel="stylesheet" href="{{ asset('index/libs/owlcarousel/owl.carousel.min.css') }}" media="all" />
    <link rel="stylesheet" href="{{ asset('index/libs/owlcarousel/owl.theme.default.min.css') }}" media="all" />

    <!-- GOOGLE FONT -->
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Oswald:400,700%7cLora:400,400i,700,700i"/>

    <link rel="stylesheet" href="{{ asset('index/libs/animate/animate.css') }}" media="all" />

    <!-- MASTER  STYLESHEET  -->
    <link id="lgx-master-style" rel="stylesheet" href="{{ asset('index/css/style-default.min.css') }}" media="all"/>

    <!-- MODERNIZER CSS  -->
    <script src="{{ asset('index/js/vendor/modernizr-2.8.3.min.js') }}"></script>

</head>
<body class="home">

<!--[if lt IE 8]>
<p class="browserupgrade">Vous utilisé un navigateur <strong>incompatible ou trop ancien</strong>. Merci de le mettre à jour.</p>
<![endif]-->

<div class="lgx-container ">
    <!--HEADER-->
    <header>
        <div id="lgx-header" class="lgx-header">
            <div class="lgx-header-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <nav id="menu-offscroll" class="navbar navbar-default lgx-navbar">
                                <div class="container">
                                    <nav class="navbar navbar-default lgx-navbar">
                                        <div class="lgxcontainer">
                                            <div class="navbar-header">
                                                <button type="button" class="navbar-toggle" data-toggle="collapse"
                                                        data-target=".navbar-collapse">
                                                    <span class="sr-only">Navigation</span>
                                                    <span class="icon-bar"></span>
                                                    <span class="icon-bar"></span>
                                                    <span class="icon-bar"></span>
                                                </button>
                                                <div class="lgx-logo">
                                                    <a href="{{ route('index') }}" class="lgx-scroll">
                                                        <img src="{{ asset('index/img/logo.png') }}" alt="Logo"/>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="collapse navbar-collapse">
                                                <ul class="nav navbar-nav lgx-nav">
                                                    <li class="dropdown">
                                                        <ul class="dropdown-menu multi-level">
                                                            @include('layout.menu', ['active' => 'index'])
                                                        </ul>
                                                    </li>
                                                    @include('layout.menu', ['active' => 'index'])
                                                </ul>
                                            </div>
                                            <!--/.nav-collapse -->
                                        </div>
                                    </nav>
                                </div>
                                <!-- /.container -->
                            </nav>
                        </div>
                    </div>
                    <!--//.ROW-->
                </div>
                <!-- //.CONTAINER -->
            </div>
            <!-- //.INNER-->
        </div>
    </header>
    <!--HEADER END-->

    <!--BANNER-->
    <section>
        <div class="lgx-banner lgx-banner-gradient">
            <div class="lgx-banner-style">
                <div class="lgx-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="banner-info">
                                    <div class="circular-countdown-area">
                                        <div id="circular-countdown" data-date="2019-12-20 00:00:00" ></div>
                                    </div>
                                    <h2 class="title">{{ $event->title }}</h2>
                                    <h3 class="date"><span>Du {{ $event->start->day }} au {{ $event->end->day }} {{ $event->end->formatLocalized('%B') }} </span>{{ $event->start->year }}, {{ $event->place }}</h3>
                                </div>
                            </div>
                        </div>
                        <!--//.ROW-->
                    </div>
                    <!-- //.CONTAINER -->
                </div>
                <!-- //.INNER -->
            </div>
        </div>
    </section>
    <!--BANNER END-->

    <!--ABOUT-->
    <section>
        <div class="lgx-about">
            <div class="lgx-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <!--<h2 class="lgx-about-title">What About World Digital Conference 2019</h2>-->
                            <div class="lgx-heading-area">
                                <h2 class="lgx-heading">
                                    <span class="back-heading"><i class="fa fa-info-circle" aria-hidden="true"></i></span>
                                    <span class="heading">L'Arcoch ou le Petit Canada</span>
                                </h2>
                                <p class="text">
                                    Un endroit magique et enchanté aux multiples activités
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="lgx-about-video">
                                <div class="about-video-inner">
                                    <div class="video-icon">
                                        <span class="play-border"><a id="myModalLabel" href="#" data-toggle="modal" data-target="#lgx-modal"><img src="{{ asset('index/img/play.png') }}" alt="play icon"/></a></span>
                                    </div>
                                    <!-- Modal-->
                                    <div id="lgx-modal" class="modal fade lgx-modal">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                </div>
                                                <div class="modal-body">
                                                    <iframe id="modalvideo" src="https://www.youtube.com/embed/EOby5hJh4NI" allowfullscreen></iframe>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- //.Modal-->
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="lgx-about-text">
                                <h4 class="hi-text">Un grand titre pour le texte qui va suivre</h4>
                                <p class="text">Un long texte pour expliquer ce qui est fait à l'Arcoch et aux alentours</p>
                            </div>
                        </div>
                    </div>
                    <!--//.ROW-->
                </div>
                <!-- //.CONTAINER -->
            </div>
            <!-- //.INNER -->
        </div>
    </section>
    <!--ABOUT END-->


    <!--SPEAKERS-->
    <section>
        <div id="lgx-speakers" class="lgx-speakers lgx-speakers-black">
            <div class="lgx-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="lgx-heading-area lgx-heading-brand">
                                <h2 class="lgx-heading">
                                    <span class="back-heading"><i class="fa fa-users" aria-hidden="true"></i></span>
                                    <span class="heading">L'équipe</span>
                                </h2>
                                <p class="text">
                                    Ici pour vous faire passer un moment inoubliable
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--//.ROW-->
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <div class="lgx-single-speaker lgx-single-speaker-sm">
                                <figure>
                                    <img src="{{ asset('index/img/speakers/speaker1.jpg') }}" alt="speaker"/>
                                </figure>
                                <div class="speaker-info">
                                    <h3 class="title"><a href="speakers-list.html">Jhon Soumen</a></h3>
                                    <h4 class="subtitle">Ceo of LogicHunt</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <div class="lgx-single-speaker lgx-single-speaker-sm">
                                <figure>
                                    <img src="{{ asset('index/img/speakers/speaker1.jpg') }}" alt="speaker"/>
                                </figure>
                                <div class="speaker-info">
                                    <h3 class="title"><a href="speakers-list.html">Sujana Jhon</a></h3>
                                    <h4 class="subtitle">Ceo of LogicHunt</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <div class="lgx-single-speaker lgx-single-speaker-sm">
                                <figure>
                                    <img src="{{ asset('index/img/speakers/speaker1.jpg') }}" alt="speaker"/>
                                    <figcaption>
                                        <a class="sp-tw" href="#"><i class="fa fa-twitter"></i></a>
                                        <a class="sp-fb" href="#"><i class="fa fa-facebook"></i></a>
                                        <a class="sp-insta" href="#"><i class="fa fa-instagram"></i></a>
                                        <a class="sp-in" href="#"><i class="fa fa-linkedin"></i></a>
                                    </figcaption>
                                </figure>
                                <div class="speaker-info">
                                    <h3 class="title"><a href="speakers-list.html">Devil Sagar</a></h3>
                                    <h4 class="subtitle">Ceo of LogicHunt</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <div class="lgx-single-speaker lgx-single-speaker-sm">
                                <figure>
                                    <img src="{{ asset('index/img/speakers/speaker1.jpg') }}" alt="speaker"/>
                                    <figcaption>
                                        <a class="sp-tw" href="#"><i class="fa fa-twitter"></i></a>
                                        <a class="sp-fb" href="#"><i class="fa fa-facebook"></i></a>
                                        <a class="sp-insta" href="#"><i class="fa fa-instagram"></i></a>
                                        <a class="sp-in" href="#"><i class="fa fa-linkedin"></i></a>
                                    </figcaption>
                                </figure>
                                <div class="speaker-info">
                                    <h3 class="title"><a href="speakers-list.html">Alina Pavel</a></h3>
                                    <h4 class="subtitle">Ceo of LogicHunt</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <div class="lgx-single-speaker lgx-single-speaker-sm">
                                <figure>
                                    <img src="{{ asset('index/img/speakers/speaker1.jpg') }}" alt="speaker"/>
                                    <figcaption>
                                        <a class="sp-tw" href="#"><i class="fa fa-twitter"></i></a>
                                        <a class="sp-fb" href="#"><i class="fa fa-facebook"></i></a>
                                        <a class="sp-insta" href="#"><i class="fa fa-instagram"></i></a>
                                        <a class="sp-in" href="#"><i class="fa fa-linkedin"></i></a>
                                    </figcaption>
                                </figure>
                                <div class="speaker-info">
                                    <h3 class="title"><a href="speakers-list.html">Jhon Soumen</a></h3>
                                    <h4 class="subtitle">Ceo of LogicHunt</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <div class="lgx-single-speaker lgx-single-speaker-sm">
                                <figure>
                                    <img src="{{ asset('index/img/speakers/speaker1.jpg') }}" alt="speaker"/>
                                    <figcaption>
                                        <a class="sp-tw" href="#"><i class="fa fa-twitter"></i></a>
                                        <a class="sp-fb" href="#"><i class="fa fa-facebook"></i></a>
                                        <a class="sp-insta" href="#"><i class="fa fa-instagram"></i></a>
                                        <a class="sp-in" href="#"><i class="fa fa-linkedin"></i></a>
                                    </figcaption>
                                </figure>
                                <div class="speaker-info">
                                    <h3 class="title"><a href="speakers-list.html">Sujana Jhon</a></h3>
                                    <h4 class="subtitle">Ceo of LogicHunt</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <div class="lgx-single-speaker lgx-single-speaker-sm">
                                <figure>
                                    <img src="{{ asset('index/img/speakers/speaker1.jpg') }}" alt="speaker"/>
                                    <figcaption>
                                        <a class="sp-tw" href="#"><i class="fa fa-twitter"></i></a>
                                        <a class="sp-fb" href="#"><i class="fa fa-facebook"></i></a>
                                        <a class="sp-insta" href="#"><i class="fa fa-instagram"></i></a>
                                        <a class="sp-in" href="#"><i class="fa fa-linkedin"></i></a>
                                    </figcaption>
                                </figure>
                                <div class="speaker-info">
                                    <h3 class="title"><a href="speakers-list.html">Devil Sagar</a></h3>
                                    <h4 class="subtitle">Ceo of LogicHunt</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <div class="lgx-single-speaker lgx-single-speaker-sm">
                                <figure>
                                    <img src="{{ asset('index/img/speakers/speaker1.jpg') }}" alt="speaker"/>
                                    <figcaption>
                                        <a class="sp-tw" href="#"><i class="fa fa-twitter"></i></a>
                                        <a class="sp-fb" href="#"><i class="fa fa-facebook"></i></a>
                                        <a class="sp-insta" href="#"><i class="fa fa-instagram"></i></a>
                                        <a class="sp-in" href="#"><i class="fa fa-linkedin"></i></a>
                                    </figcaption>
                                </figure>
                                <div class="speaker-info">
                                    <h3 class="title"><a href="speakers-list.html">Alina Pavel</a></h3>
                                    <h4 class="subtitle">Ceo of LogicHunt</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--//.ROW-->
                </div>
                <!-- //.CONTAINER -->
            </div>
            <!-- //.INNER -->
        </div>
    </section>
    <!--SPEAKERS END-->

    <!--SCHEDULE-->
    <section>
        <div id="lgx-schedule" class="lgx-schedule">
            <div class="lgx-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="lgx-heading-area">
                                <h2 class="lgx-heading">
                                    <span class="back-heading"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                    <span class="heading">Planning</span>
                                </h2>
                                <p class="text">
                                    Ce qu'il ne faut pas rater !
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="lgx-tab">
                                <ul class="nav nav-pills text-center">
                                    <li class="active"><a data-toggle="pill" href="#home"><h3>Novembre </h3> <p><span>2018 </span></p></a></li>
                                    <li><a data-toggle="pill" href="#menu1"><h3>Décembre </h3> <p><span>2018 </span></p></a></li>
                                    <li><a data-toggle="pill" href="#menu2"><h3>Janvier </h3> <p><span>2019 </span></p></a></li>
                                    <li><a data-toggle="pill" href="#menu3"><h3>Février </h3> <p><span>2019 </span></p></a></li>
                                </ul>
                                <div class="tab-content lgx-tab-content text-center">
                                    <div id="home" class="tab-pane fade in active">
                                        <div class="lgx-single-tab">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-3">
                                                    <div class="time-area">
                                                        <h4 class="time">
                                                            <span>Le </span>14/11 <span>de</span>
                                                            <br>
                                                            09h <span>à</span> 18h
                                                        </h4>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-2">
                                                    <div class="author-info">
                                                        <h5 class="name">L'arcoch</h5>
                                                        <p class="author-title">vous propose</p>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-7">
                                                    <div class="schedule-info">
                                                        <h3 class="title"><a href="#">Digital World Event Introduction</a></h3>
                                                        <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices ipsum primis posuere cubilia Curae Nullam varius a felis eu dictum...</p>
                                                    </div>
                                                    <!--//.single tab-->
                                                </div>
                                            </div>
                                        </div>

                                        <div class="lgx-single-tab">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-2">
                                                    <div class="time-area">
                                                        <h4 class="time">10:30 <span>Am</span></h4>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-3">
                                                    <div class="author">
                                                        <a class="author-img" href="speaker-single.html"><img src="{{ asset('index/img/schedule/speaker2.jpg') }}" alt="Speaker"/></a>
                                                        <div class="author-info">
                                                            <h5 class="name"><a href="speaker-single.html">Elena De Suja</a></h5>
                                                            <p class="author-title">UI Designer</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-7">
                                                    <div class="schedule-info">
                                                        <h3 class="title"><a href="#">Digital World Event Introduction</a></h3>
                                                        <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices ipsum primis posuere cubilia Curae Nullam varius a felis eu dictum...</p>
                                                    </div>
                                                    <!--//.single tab-->
                                                </div>
                                            </div>
                                        </div>

                                        <div class="lgx-single-tab">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-2">
                                                    <div class="time-area">
                                                        <h4 class="time">11:50 <span>Am</span></h4>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-3">
                                                    <div class="author">
                                                        <a class="author-img" href="speaker-single.html"><img src="{{ asset('index/img/schedule/speaker3.jpg') }}" alt="Speaker"/></a>
                                                        <div class="author-info">
                                                            <h5 class="name"><a href="speaker-single.html">Elena De Suja</a></h5>
                                                            <p class="author-title">UI Designer</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-7">
                                                    <div class="schedule-info">
                                                        <h3 class="title"><a href="#">Digital World Event Introduction</a></h3>
                                                        <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices ipsum primis posuere cubilia Curae Nullam varius a felis eu dictum...</p>
                                                    </div>
                                                    <!--//.single tab-->
                                                </div>
                                            </div>
                                        </div>

                                        <div class="lgx-single-tab">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-2">
                                                    <div class="time-area">
                                                        <h4 class="time">12:20 <span>Am</span></h4>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-3">
                                                    <div class="author">
                                                        <a class="author-img" href="speaker-single.html"><img src="{{ asset('index/img/schedule/speaker4.jpg') }}" alt="Speaker"/></a>
                                                        <div class="author-info">
                                                            <h5 class="name"><a href="speaker-single.html">Elena De Suja</a></h5>
                                                            <p class="author-title">UI Designer</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-7">
                                                    <div class="schedule-info">
                                                        <h3 class="title"><a href="#">Digital World Event Introduction</a></h3>
                                                        <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices ipsum primis posuere cubilia Curae Nullam varius a felis eu dictum...</p>
                                                    </div>
                                                    <!--//.single tab-->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="lgx-single-tab">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-2">
                                                    <div class="time-area">
                                                        <h4 class="time">01:20 <span>Am</span></h4>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-3">
                                                    <div class="author">
                                                        <a class="author-img" href="speaker-single.html"><img src="{{ asset('index/img/schedule/speaker5.jpg') }}" alt="Speaker"/></a>
                                                        <div class="author-info">
                                                            <h5 class="name"><a href="speaker-single.html">Elena De Suja</a></h5>
                                                            <p class="author-title">UI Designer</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-7">
                                                    <div class="schedule-info">
                                                        <h3 class="title"><a href="#">Digital World Event Introduction</a></h3>
                                                        <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices ipsum primis posuere cubilia Curae Nullam varius a felis eu dictum...</p>
                                                    </div>
                                                    <!--//.single tab-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="menu1" class="tab-pane fade">
                                        <div class="lgx-single-tab">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-2">
                                                    <div class="time-area">
                                                        <h4 class="time">10:20 <span>Am</span></h4>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-3">
                                                    <div class="author">
                                                        <a class="author-img" href="speaker-single.html"><img src="{{ asset('index/img/schedule/speaker6.jpg') }}" alt="Speaker"/></a>
                                                        <div class="author-info">
                                                            <h5 class="name"><a href="speaker-single.html">Elena De Suja</a></h5>
                                                            <p class="author-title">UI Designer</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-7">
                                                    <div class="schedule-info">
                                                        <h3 class="title"><a href="#">Digital World Event Introduction</a></h3>
                                                        <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices ipsum primis posuere cubilia Curae Nullam varius a felis eu dictum...</p>
                                                    </div>
                                                    <!--//.single tab-->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="lgx-single-tab">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-2">
                                                    <div class="time-area">
                                                        <h4 class="time">12:30 <span>Am</span></h4>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-3">
                                                    <div class="author">
                                                        <a class="author-img" href="speaker-single.html"><img src="{{ asset('index/img/schedule/speaker7.jpg') }}" alt="Speaker"/></a>
                                                        <div class="author-info">
                                                            <h5 class="name"><a href="speaker-single.html">Elena De Suja</a></h5>
                                                            <p class="author-title">UI Designer</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-7">
                                                    <div class="schedule-info">
                                                        <h3 class="title"><a href="#">Digital World Event Introduction</a></h3>
                                                        <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices ipsum primis posuere cubilia Curae Nullam varius a felis eu dictum...</p>
                                                    </div>
                                                    <!--//.single tab-->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="lgx-single-tab">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-2">
                                                    <div class="time-area">
                                                        <h4 class="time">10:20 <span>Am</span></h4>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-3">
                                                    <div class="author">
                                                        <a class="author-img" href="speaker-single.html"><img src="{{ asset('index/img/schedule/speaker8.jpg') }}" alt="Speaker"/></a>
                                                        <div class="author-info">
                                                            <h5 class="name"><a href="speaker-single.html">Elena De Suja</a></h5>
                                                            <p class="author-title">UI Designer</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-7">
                                                    <div class="schedule-info">
                                                        <h3 class="title"><a href="#">Digital World Event Introduction</a></h3>
                                                        <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices ipsum primis posuere cubilia Curae Nullam varius a felis eu dictum...</p>
                                                    </div>
                                                    <!--//.single tab-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="menu2" class="tab-pane fade">
                                        <div class="lgx-single-tab">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-2">
                                                    <div class="time-area">
                                                        <h4 class="time">10:20 <span>Am</span></h4>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-3">
                                                    <div class="author">
                                                        <a class="author-img" href="speaker-single.html"><img src="{{ asset('index/img/schedule/speaker1.jpg') }}" alt="Speaker"/></a>
                                                        <div class="author-info">
                                                            <h5 class="name"><a href="speaker-single.html">Elena De Suja</a></h5>
                                                            <p class="author-title">UI Designer</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-7">
                                                    <div class="schedule-info">
                                                        <h3 class="title"><a href="#">Digital World Event Introduction</a></h3>
                                                        <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices ipsum primis posuere cubilia Curae Nullam varius a felis eu dictum...</p>
                                                    </div>
                                                    <!--//.single tab-->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="lgx-single-tab">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-2">
                                                    <div class="time-area">
                                                        <h4 class="time">10:20 <span>Am</span></h4>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-3">
                                                    <div class="author">
                                                        <a class="author-img" href="speaker-single.html"><img src="{{ asset('index/img/schedule/speaker2.jpg') }}" alt="Speaker"/></a>
                                                        <div class="author-info">
                                                            <h5 class="name"><a href="speaker-single.html">Elena De Suja</a></h5>
                                                            <p class="author-title">UI Designer</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-7">
                                                    <div class="schedule-info">
                                                        <h3 class="title"><a href="#">Digital World Event Introduction</a></h3>
                                                        <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices ipsum primis posuere cubilia Curae Nullam varius a felis eu dictum...</p>
                                                    </div>
                                                    <!--//.single tab-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="menu3" class="tab-pane fade">
                                        <div class="lgx-single-tab">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-2">
                                                    <div class="time-area">
                                                        <h4 class="time">10:20 <span>Am</span></h4>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-3">
                                                    <div class="author">
                                                        <a class="author-img" href="speaker-single.html"><img src="{{ asset('index/img/schedule/speaker3.jpg') }}" alt="Speaker"/></a>
                                                        <div class="author-info">
                                                            <h5 class="name"><a href="speaker-single.html">Elena De Suja</a></h5>
                                                            <p class="author-title">UI Designer</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-7">
                                                    <div class="schedule-info">
                                                        <h3 class="title"><a href="#">Digital World Event Introduction</a></h3>
                                                        <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices ipsum primis posuere cubilia Curae Nullam varius a felis eu dictum...</p>
                                                    </div>
                                                    <!--//.single tab-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--//.ROW-->
                </div>
                <!-- //.CONTAINER -->
            </div>
            <!-- //.INNER -->
        </div>
    </section>
    <!--SCHEDULE END-->

    <!--PHOTO GALLERY-->
    <section>
        <div id="lgx-photo-gallery" class="lgx-photo-gallery">
            <div class="lgx-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="lgx-heading-area">
                                <h2 class="lgx-heading">
                                    <span class="back-heading"><i class="fa fa-picture-o" aria-hidden="true"></i></span>
                                    <span class="heading">Galerie photo</span>
                                </h2>
                                <p class="text">
                                    Ce que Payolle a à vous offrir !
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--//.ROW-->
                </div>
                <!-- //.CONTAINER -->
            </div>
            <div id="lgx-memorisinner" class="lgx-memorisinner">
                <div class="container-fluid text-center">
                    <div class="row">
                        <div  class="lgx-single">
                            <figure>
                                <img title="L'Arcoch de Payolle" src="{{ asset('index/img/gallery/gallery1.jpg') }}" alt="L'Arcoch de Payolle"/>
                                <figcaption class="lgx-figcaption">
                                    <div class="lgx-hover-link">
                                        <div class="lgx-vertical">
                                            <a title="L'Arcoch de Payolle" href="{{ asset('index/img/gallery/gallery1.jpg') }}">
                                                <i class="fa fa-search fa-2x"></i>
                                            </a>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                        <div  class="lgx-single">
                            <figure>
                                <img title="L'Arcoch de Payolle" src="{{ asset('index/img/gallery/gallery1.jpg') }}" alt="L'Arcoch de Payolle"/>
                                <figcaption class="lgx-figcaption">
                                    <div class="lgx-hover-link">
                                        <div class="lgx-vertical">
                                            <a title="L'Arcoch de Payolle" href="{{ asset('index/img/gallery/gallery1.jpg') }}">
                                                <i class="fa fa-search fa-2x"></i>
                                            </a>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                        <div  class="lgx-single">
                            <figure>
                                <img title="L'Arcoch de Payolle" src="{{ asset('index/img/gallery/gallery1.jpg') }}" alt="L'Arcoch de Payolle"/>
                                <figcaption class="lgx-figcaption">
                                    <div class="lgx-hover-link">
                                        <div class="lgx-vertical">
                                            <a title="L'Arcoch de Payolle" href="{{ asset('index/img/gallery/gallery1.jpg') }}">
                                                <i class="fa fa-search fa-2x"></i>
                                            </a>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                        <div  class="lgx-single">
                            <figure>
                                <img title="L'Arcoch de Payolle" src="{{ asset('index/img/gallery/gallery1.jpg') }}" alt="L'Arcoch de Payolle"/>
                                <figcaption class="lgx-figcaption">
                                    <div class="lgx-hover-link">
                                        <div class="lgx-vertical">
                                            <a title="L'Arcoch de Payolle" href="{{ asset('index/img/gallery/gallery1.jpg') }}">
                                                <i class="fa fa-search fa-2x"></i>
                                            </a>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                        <div  class="lgx-single">
                            <figure>
                                <img title="L'Arcoch de Payolle" src="{{ asset('index/img/gallery/gallery1.jpg') }}" alt="L'Arcoch de Payolle"/>
                                <figcaption class="lgx-figcaption">
                                    <div class="lgx-hover-link">
                                        <div class="lgx-vertical">
                                            <a title="L'Arcoch de Payolle" href="{{ asset('index/img/gallery/gallery1.jpg') }}">
                                                <i class="fa fa-search fa-2x"></i>
                                            </a>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                        <div  class="lgx-single">
                            <figure>
                                <img title="L'Arcoch de Payolle" src="{{ asset('index/img/gallery/gallery1.jpg') }}" alt="L'Arcoch de Payolle"/>
                                <figcaption class="lgx-figcaption">
                                    <div class="lgx-hover-link">
                                        <div class="lgx-vertical">
                                            <a title="L'Arcoch de Payolle" href="{{ asset('index/img/gallery/gallery1.jpg') }}">
                                                <i class="fa fa-search fa-2x"></i>
                                            </a>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                        <div  class="lgx-single">
                            <figure>
                                <img title="L'Arcoch de Payolle" src="{{ asset('index/img/gallery/gallery1.jpg') }}" alt="L'Arcoch de Payolle"/>
                                <figcaption class="lgx-figcaption">
                                    <div class="lgx-hover-link">
                                        <div class="lgx-vertical">
                                            <a title="L'Arcoch de Payolle" href="{{ asset('index/img/gallery/gallery1.jpg') }}">
                                                <i class="fa fa-search fa-2x"></i>
                                            </a>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                        <div  class="lgx-single">
                            <figure>
                                <img title="L'Arcoch de Payolle" src="{{ asset('index/img/gallery/gallery1.jpg') }}" alt="L'Arcoch de Payolle"/>
                                <figcaption class="lgx-figcaption">
                                    <div class="lgx-hover-link">
                                        <div class="lgx-vertical">
                                            <a title="L'Arcoch de Payolle" href="{{ asset('index/img/gallery/gallery1.jpg') }}">
                                                <i class="fa fa-search fa-2x"></i>
                                            </a>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                        <div  class="lgx-single">
                            <figure>
                                <img title="L'Arcoch de Payolle" src="{{ asset('index/img/gallery/gallery1.jpg') }}" alt="L'Arcoch de Payolle"/>
                                <figcaption class="lgx-figcaption">
                                    <div class="lgx-hover-link">
                                        <div class="lgx-vertical">
                                            <a title="L'Arcoch de Payolle" href="{{ asset('index/img/gallery/gallery1.jpg') }}">
                                                <i class="fa fa-search fa-2x"></i>
                                            </a>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                        <div  class="lgx-single">
                            <figure>
                                <img title="L'Arcoch de Payolle" src="{{ asset('index/img/gallery/gallery1.jpg') }}" alt="L'Arcoch de Payolle"/>
                                <figcaption class="lgx-figcaption">
                                    <div class="lgx-hover-link">
                                        <div class="lgx-vertical">
                                            <a title="L'Arcoch de Payolle" href="{{ asset('index/img/gallery/gallery1.jpg') }}">
                                                <i class="fa fa-search fa-2x"></i>
                                            </a>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                        <div  class="lgx-single">
                            <figure>
                                <img title="L'Arcoch de Payolle" src="{{ asset('index/img/gallery/gallery1.jpg') }}" alt="L'Arcoch de Payolle"/>
                                <figcaption class="lgx-figcaption">
                                    <div class="lgx-hover-link">
                                        <div class="lgx-vertical">
                                            <a title="L'Arcoch de Payolle" href="{{ asset('index/img/gallery/gallery1.jpg') }}">
                                                <i class="fa fa-search fa-2x"></i>
                                            </a>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                        <div  class="lgx-single">
                            <figure>
                                <img title="L'Arcoch de Payolle" src="{{ asset('index/img/gallery/gallery1.jpg') }}" alt="L'Arcoch de Payolle"/>
                                <figcaption class="lgx-figcaption">
                                    <div class="lgx-hover-link">
                                        <div class="lgx-vertical">
                                            <a title="L'Arcoch de Payolle" href="{{ asset('index/img/gallery/gallery1.jpg') }}">
                                                <i class="fa fa-search fa-2x"></i>
                                            </a>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div> <!--//.CONAINER-->
            </div><!--//.lgx CONTACT INNER-->
        </div>
    </section>
    <!--PHOTO GALLERY END-->

    <!--TRAVEL INFO-->
    <section>
        <div id="lgx-travelinfo" class="lgx-travelinfo">
            <div class="lgx-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 text-center">
                            <div class="lgx-heading-area">
                                <h2 class="lgx-heading">
                                    <span class="back-heading"><i class="fa fa-info-circle" aria-hidden="true"></i></span>
                                    <span class="heading">Comment venir ?</span>
                                </h2>
                                <p class="text">
                                    Vous souhaitez visiter Payolle et ses alentours ?
                                </p>
                            </div>
                        </div>
                        <!--//main COL-->
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="single">
                                <img src="{{ asset('index/img/info-icon1.png') }}" alt="location"/>
                                <h3 class="title">Adresse</h3>
                                <p class="info">Arcoch, Quartier Payolle 65710 Campan</p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="single">
                                <img src="{{ asset('index/img/info-icon2.png') }}" alt="Transport"/>
                                <h3 class="title">Transport</h3>
                                <p class="info">Vous pouvez venir en voiture ou en bus. Les routes sont plus que praticables</p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="single">
                                <img src="{{ asset('index/img/info-icon3.png') }}" alt="Hotel & Restaurant"/>
                                <h3 class="title">Hotel & Restaurant</h3>
                                <p class="info">L'Arcoch vous propose des chambres et un restaurant attenant. Des séances de SPA peuvent être réservées</p>
                            </div>
                        </div>
                    </div>
                    <!--//.ROW-->
                </div>
                <!-- //.CONTAINER -->
            </div>
        </div>
    </section>
    <!--TRAVEL INFO END-->

    <!--FOOTER-->
    <footer>
        <div id="lgx-footer" class="lgx-footer">
            <div class="lgx-footer-bg">
                <div class="lgx-inner">
                    <div class="container">
                        {{--<div class="lgx-subscriber-area">--}}
                            {{--<div class="lgx-testi-inner">--}}
                                {{--<div class="container">--}}
                                    {{--<div class="row">--}}
                                        {{--<div class="col-sm-offset-2 col-sm-8 col-xs-12">--}}
                                            {{--<h3 class="title">To Get Nearly Updates</h3>--}}
                                            {{--<div class="lgx-subscriber">--}}
                                                {{--<form class="subscribe-form lgx-subscribe-form" >--}}
                                                    {{--<div class="form-group">--}}
                                                        {{--<input type="email" id="subscribe" placeholder="Ex: themearth@gmail.com" class="form-control lgx-input-form form-control"  />--}}
                                                    {{--</div>--}}
                                                    {{--<div class="form-group">--}}
                                                        {{--<button type="submit" name="lgx-submit" id="lgx-submit" class="lgx-submit the-submit-btn"><span>Subscribe</span></button>--}}
                                                    {{--</div>--}}
                                                {{--</form>--}}
                                            {{--</div> <!--//.SUBSCRIBE-->--}}
                                        {{--</div>--}}
                                    {{--</div> <!--//ROW-->--}}
                                {{--</div> <!--//container-->--}}
                            {{--</div> <!--//lgx-inner-->--}}
                        {{--</div>--}}
                        <div class="lgx-logo">
                            <a href="{{ route ('index') }}" class="lgx-scroll">
                                <img src="{{ asset('index/img/logo.png') }}" alt="Logo"/>
                            </a>
                        </div>
                        <div class="footer-social">
                            <ul class="list-inline">
                                <li><a class="sp-fb" href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="sp-tw" href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="sp-google" href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a class="sp-in" href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a class="sp-" href="#"><i class="fa fa-soundcloud"></i></a></li>
                                <li><a class="sp-" href="#"><i class="fa fa-video-camera"></i></a></li>
                            </ul>
                        </div>
                        <p class="lgx-copyright"><span class="themename">EventPoint</span> <span class="text">is proudly powered by</span> <a href="http://www.themearth.com/">themearth.com</a></p>
                    </div>
                    <!-- //.CONTAINER -->
                </div>
            </div>
            <!-- //.INNER-->
        </div>
    </footer>
    <!--FOOTER END-->


</div>
<!--//.LGX SITE CONTAINER-->
<!-- *** ADD YOUR SITE SCRIPT HERE *** -->
<!-- JQUERY  -->
<script src="{{ asset('index/js/vendor/jquery-1.12.4.min.js') }}"></script>
<!-- BOOTSTRAP JS  -->
<script src="{{ asset('index/libs/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('index/libs/jquery.smooth-scroll.js') }}"></script>
<!-- SKILLS SCRIPT  -->
<script src="{{ asset('index/libs/jquery.validate.js') }}"></script>
<!-- adding magnific popup js library -->
<script type="text/javascript" src="{{ asset('index/libs/maginificpopup/jquery.magnific-popup.min.js') }}"></script>
<!-- Owl Carousel  -->
<script src="{{ asset('index/libs/owlcarousel/owl.carousel.min.js') }}"></script>
<!-- COUNTDOWN   -->
<script src="{{ asset('index/libs/countdown.js') }}"></script>
<script src="{{ asset('index/libs/timer/TimeCircles.js') }}"></script>
<!-- SMOTH SCROLL -->
<script src="{{ asset('index/libs/jquery.smooth-scroll.min.js') }}"></script>
<script src="{{ asset('index/libs/jquery.easing.min.js') }}"></script>
<!-- type js -->
<script src="{{ asset('index/libs/typed/typed.min.js') }}"></script>
<!-- CUSTOM SCRIPT  -->
<script src="{{ asset('index/js/custom.script.js') }}"></script>

<div class="lgx-switcher-loader"></div>

</body>

</html>
