<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Travel &mdash; 100% Free Fully Responsive HTML5 Template by FREEHTML5.co</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
    <meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
    <meta name="author" content="FREEHTML5.CO" />

    <!--
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE
	DESIGNED & DEVELOPED by FREEHTML5.CO

	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content="" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="" />
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="favicon.ico">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>

    <!-- Animate.css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Superfish -->
    <link rel="stylesheet" href="css/superfish.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="css/bootstrap-datepicker.min.css">
    <!-- CS Select -->
    <link rel="stylesheet" href="css/cs-select.css">
    <link rel="stylesheet" href="css/cs-skin-border.css">

    <link rel="stylesheet" href="css/style.css">


    <!-- Modernizr JS -->
    <script src="js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

</head>

<body>
    <div id="fh5co-wrapper">
        <div id="fh5co-page">

            @include('_partials.header')

            <!-- end:header-top -->

            @include('_partials.jumbotron')

            <div id="fh5co-blog-section" class="fh5co-section-gray">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                            <h3>Artikel Terbaru</h3>
                            <p>Artikel paling up to date seputar pariwisata di Malang</p>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row row-bottom-padded-md">
                        @if(!empty($data) && $data->count())
                            @foreach($data as $key => $value)
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="fh5co-blog animate-box">
                                <a href="#"><img class="img-responsive" src="{{ url($value->photo) }}" alt=""></a>
                                <div class="blog-text">
                                    <div class="prod-title">
                                        <h3><a href="#">{{ $value->title }}</a></h3>
                                        <span class="posted_by">{{ $value->created_at }}</span>
                                        <span class="comment"><a href="">21<i class="icon-bubble2"></i></a></span>
                                        <p>{{ $value->description }}</p>
                                        <p><a href="#">Learn More...</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix visible-sm-block"></div>
                        @endforeach
                        @else
                            <h2>Belum Ada Artikel</h2>
                        @endif
                    </div>


                    <div class="col-md-12 text-center animate-box">
                        <p><a class="btn btn-primary btn-outline btn-lg" href="/blog">Lihat Semua <i class="icon-arrow-right22"></i></a></p>
                    </div>

                </div>
            </div>

            <div id="fh5co-destination">
                <div class="tour-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <ul id="fh5co-destination-list" class="animate-box">
                                <li class="one-forth text-center" style="background-image: url(images/place-1.jpg); ">
                                    <a href="#">
                                        <div class="case-studies-summary">
                                            <h2>Gunung Bromo</h2>
                                        </div>
                                    </a>
                                </li>
                                <li class="one-forth text-center" style="background-image: url(images/place-2.jpg); ">
                                    <a href="#">
                                        <div class="case-studies-summary">
                                            <h2>Cafe Sawah</h2>
                                        </div>
                                    </a>
                                </li>
                                <li class="one-forth text-center" style="background-image: url(images/place-3.jpg); ">
                                    <a href="#">
                                        <div class="case-studies-summary">
                                            <h2>Batu Night Spectacular</h2>
                                        </div>
                                    </a>
                                </li>
                                <li class="one-forth text-center" style="background-image: url(images/place-4.jpg); ">
                                    <a href="#">
                                        <div class="case-studies-summary">
                                            <h2>Alun-Alun Kota Batu</h2>
                                        </div>
                                    </a>
                                </li>

                                <li class="one-forth text-center" style="background-image: url(images/place-5.jpg); ">
                                    <a href="#">
                                        <div class="case-studies-summary">
                                            <h2>Batu Secret Zoo</h2>
                                        </div>
                                    </a>
                                </li>
                                <li class="one-half text-center">
                                    <div class="title-bg">
                                        <div class="case-studies-summary">
                                            <h2>Destinasi Pariwisata Terfavorit</h2>
                                            <span><a href="#">Lihat Semua Destinasi</a></span>
                                        </div>
                                    </div>
                                </li>
                                <li class="one-forth text-center" style="background-image: url(images/place-6.jpg); ">
                                    <a href="#">
                                        <div class="case-studies-summary">
                                            <h2>Museum Angkut</h2>
                                        </div>
                                    </a>
                                </li>
                                <li class="one-forth text-center" style="background-image: url(images/place-7.jpg); ">
                                    <a href="#">
                                        <div class="case-studies-summary">
                                            <h2>Singapore</h2>
                                        </div>
                                    </a>
                                </li>
                                <li class="one-forth text-center" style="background-image: url(images/place-8.jpg); ">
                                    <a href="#">
                                        <div class="case-studies-summary">
                                            <h2>Jatim Park 3</h2>
                                        </div>
                                    </a>
                                </li>
                                <li class="one-forth text-center" style="background-image: url(images/place-9.jpg); ">
                                    <a href="#">
                                        <div class="case-studies-summary">
                                            <h2>Taman Langit Gunung Banyak</h2>
                                        </div>
                                    </a>
                                </li>
                                <li class="one-forth text-center" style="background-image: url(images/place-10.jpg); ">
                                    <a href="#">
                                        <div class="case-studies-summary">
                                            <h2>Coban Rais</h2>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @include('_partials.footer2')

        </div>
        <!-- END fh5co-page -->

    </div>
    <!-- END fh5co-wrapper -->

    <!-- jQuery -->


    <script src="js/jquery.min.js"></script>
    <!-- jQuery Easing -->
    <script src="js/jquery.easing.1.3.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Waypoints -->
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/sticky.js"></script>

    <!-- Stellar -->
    <script src="js/jquery.stellar.min.js"></script>
    <!-- Superfish -->
    <script src="js/hoverIntent.js"></script>
    <script src="js/superfish.js"></script>
    <!-- Magnific Popup -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/magnific-popup-options.js"></script>
    <!-- Date Picker -->
    <script src="js/bootstrap-datepicker.min.js"></script>
    <!-- CS Select -->
    <script src="js/classie.js"></script>
    <script src="js/selectFx.js"></script>

    <!-- Main JS -->
    <script src="js/main.js"></script>

</body>

</html>
