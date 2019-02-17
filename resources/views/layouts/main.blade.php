
<!DOCTYPE html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--=== Favicon ===-->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon" />

    <title>{{ config('app.name','Cannes Luxe Rental') }}</title>

    <!--=== Bootstrap CSS ===-->
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
    <!--=== Vegas Min CSS ===-->
    <link href="{{ asset('/css/plugins/vegas.min.css') }} " rel="stylesheet">
    <!--=== Slicknav CSS ===-->
    <link href="{{ asset('/css/plugins/slicknav.min.css') }} " rel="stylesheet">
    <!--=== Magnific Popup CSS ===-->
    <link href="{{ asset('/css/plugins/magnific-popup.css') }}" rel="stylesheet">
    <!--=== Owl Carousel CSS ===-->
    <link href="{{ asset('/css/plugins/owl.carousel.min.css') }}" rel="stylesheet">
    <!--=== Gijgo CSS ===-->
    <link href="{{ asset('/css/plugins/gijgo.css') }}" rel="stylesheet">
    <!--=== FontAwesome CSS ===-->
    <link href="{{ asset('/css/font-awesome.css') }}" rel="stylesheet">
    <!--=== Theme Reset CSS ===-->
    <link href="{{ asset('/css/reset.css') }}" rel="stylesheet">
    <!--=== Main Style CSS ===-->
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    <!--=== Responsive CSS ===-->
    <link href="{{ asset('/css/responsive.css') }}" rel="stylesheet">
    <!--=== PickADate ===-->
    <link href="{{ asset('/js/plugins/pickadate/themes/default.date.css') }}" rel="stylesheet">
    <link href="{{ asset('/js/plugins/pickadate/themes/default.css') }}" rel="stylesheet">


    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="loader-active">

    <!--== Preloader Area Start ==-->
    <div class="preloader">
        <div class="preloader-spinner">
            <div class="loader-content">
                <img src="{{ asset('/img/preloader2.gif') }}" alt="JSOFT">
            </div>
        </div>
    </div>
    <!--== Preloader Area End ==-->

    @yield('content')

    <!--== Footer Area Start ==-->
    <section id="footer-area">
        <!-- Footer Widget Start -->
        <div class="footer-widget-area">
            <div class="container">
                <div class="row">
                    <!-- Single Footer Widget Start -->
                    <div class="col-lg-4 col-md-6">
                        <div class="single-footer-widget">
                            <h2>About Us</h2>
                            <div class="widget-body">
                                <!-- <img src="{{ asset('/img/logo.png') }}" alt="JSOFT"> -->
                                <h5 class="bizname">Cannes Luxury Rental</h5>
                                
                                <p>We offer Luxurious SuperYacht to discover the beautiful French Riviera beach of Cannes or drive our luxurious Rolls Royce around the city or enjoying the sea breeze of French Riviera while sailing around whith our beautiful Vandutch Speedboat.</p>

                                <!-- <div class="newsletter-area">
                                    <form action="index.html">
                                        <input type="email" placeholder="Subscribe Our Newsletter">
                                        <button type="submit" class="newsletter-btn"><i class="fa fa-send"></i></button>
                                    </form>
                                </div> -->

                            </div>
                        </div>
                    </div>
                    <!-- Single Footer Widget End -->

                    <!-- Single Footer Widget Start -->
                    <div class="col-lg-4 col-md-6">
                        <div class="single-footer-widget">
                            <h2>SEND US YOUR INQUERY</h2>
                            <div class="widget-body">
                                <form action="index.html">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="name-input">
                                                <input type="text" placeholder="Full Name">
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6">
                                            <div class="email-input">
                                                <input type="email" placeholder="Email Address">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="message-input">
                                                <textarea name="review" cols="42" placeholder="Message"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    

                                    <div class="input-submit">
                                        <button type="submit">Submit Message</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                    <!-- Single Footer Widget End -->

                    <!-- Single Footer Widget Start -->
                    <div class="col-lg-4 col-md-6">
                        <div class="single-footer-widget">
                            <h2>contact us</h2>
                            <div class="widget-body">
                                <p>We're looking forward to hearing from you!</p>

                                <ul class="get-touch">
                                    <li><i class="fa fa-map-marker"></i> Cannes, France</li>
                                    <li><i class="fa fa-mobile"></i> +63-917-522-9797</li>
                                    <li><i class="fa fa-envelope"></i> aernout@pldtdsl.net</li>
                                </ul>
                                <a href="https://www.google.com.bd/maps/place/Cannes,+France/@43.5370022,6.97468,13z/data=!3m1!4b1!4m5!3m4!1s0x12ce8180530cffff:0x40819a5fd979e20!8m2!3d43.552847!4d7.017369?hl=en" class="map-show" target="_blank">Show Location</a>
                            </div>
                        </div>
                    </div>
                    <!-- Single Footer Widget End -->
                </div>
            </div>
        </div>
        <!-- Footer Widget End -->

        <!-- Footer Bottom Start -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <p>
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved</a>
</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom End -->
    </section>
    <!--== Footer Area End ==-->

    <!--== Scroll Top Area Start ==-->
    <div class="scroll-top">
        <img src="{{ asset('/img/scroll-top.png') }}" alt="JSOFT">
    </div>
    <!--== Scroll Top Area End ==-->

    <!--=======================Javascript============================-->
    <!--=== Jquery Min Js ===-->
    <script src="{{ asset('/js/jquery-3.2.1.min.js') }}"></script>
    <!--=== Jquery Migrate Min Js ===-->
    <script src="{{ asset('/js/jquery-migrate.min.js') }}"></script>
    <!--=== Popper Min Js ===-->
    <script src="{{ asset('/js/popper.min.js') }}"></script>
    <!--=== Bootstrap Min Js ===-->
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
    <!--=== Gijgo Min Js ===-->
    <script src="{{ asset('/js/plugins/gijgo.js') }}"></script>
    <!--=== Vegas Min Js ===-->
    <script src="{{ asset('/js/plugins/vegas.min.js') }}"></script>
    <!--=== Isotope Min Js ===-->
    <script src="{{ asset('/js/plugins/isotope.min.js') }}"></script>
    <!--=== Owl Caousel Min Js ===-->
    <script src="{{ asset('/js/plugins/owl.carousel.min.js') }}"></script>
    <!--=== Waypoint Min Js ===-->
    <script src="{{ asset('/js/plugins/waypoints.min.js') }}"></script>
    <!--=== CounTotop Min Js ===-->
    <script src="{{ asset('/js/plugins/counterup.min.js') }}"></script>
    <!--=== YtPlayer Min Js ===-->
    <script src="{{ asset('/js/plugins/mb.YTPlayer.js') }}"></script>
    <!--=== Magnific Popup Min Js ===-->
    <script src="{{ asset('/js/plugins/magnific-popup.min.js') }}"></script>
    <!--=== Slicknav Min Js ===-->
    <script src="{{ asset('/js/plugins/slicknav.min.js') }}"></script>
    <!--=== PickADate ===-->
    <script src="{{ asset('/js/plugins/pickadate/picker.js') }}"></script>
    <script src="{{ asset('/js/plugins/pickadate/picker.date.js') }}"></script>
    <script src="{{ asset('/js/plugins/pickadate/legacy.js') }}"></script>

    <!--=== Mian Js ===-->
    <script src="{{ asset('/js/main.js') }}"></script>

</body>

</html>