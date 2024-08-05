<!DOCTYPE html>
<html lang="en">
<link rel="icon" type="image/png" sizes="56x56" href="{{asset('home/images/'.$web->logo)}}">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> {{$siteName}} | {{$pageName}}</title>
    <!-- plugin scripts -->
    <link rel="stylesheet" type="text/css" href="{{asset('home/lassets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('home/lassets/css/animate.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('home/lassets/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('home/lassets/css/bootstrap-datepicker.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('home/lassets/css/bootstrap-select.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('home/lassets/css/jquery.mCustomScrollbar.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('home/lassets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('home/lassets/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('home/lassets/css/zimed-icon.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('home/lassets/css/jquery.bxslider.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('home/lassets/css/magnific-popup.css')}}">
    <!-- template styles -->
    <link rel="stylesheet" href="{{asset('home/lassets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('home/lassets/css/responsive.css')}}">
    @stack('css')
    <style>
        .watkey {
            z-index: 9;
            position: fixed;
            bottom: 15px;
            left: 15px;
            padding: 4px;
            border: 1px solid #0d9f16;
            border-radius: 50%;
        }
    </style>

    <style>
        /* Custom CSS for the Float widget */
        .telegram-float-widget {
            position: fixed;
            left: 10px;
            /* Adjust the left positioning as needed */
            bottom: 20px;
            /* Adjust the bottom positioning as needed */
            z-index: 9999;
        }

        .whatsapp-float-widget {
            position: fixed;
            left: 70px;
            /* Adjust the left positioning as needed */
            bottom: 10px;
            /* Adjust the bottom positioning as needed */
            z-index: 9999;
        }
    </style>
</head>

<body>
    @inject('injected','App\Defaults\Custom')
    <div class="preloader">
        <div class="lds-ripple">
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- /.preloader -->
    <div class="page-wrapper">

        <header class="main-nav__header-one ">
            <nav class="header-navigation stricky">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="main-nav__logo-box">
                        <a href="{{url('/')}}" class="main-nav__logo">
                            <img src="{{asset('home/images/'.$web->logo)}}" style="width: 150px;" alt="Awesome Image">
                        </a>

                        <div id="google_translate_element"></div>
                        <a href="#" class="side-menu__toggler"><i class="fa fa-bars"></i>
                            <!-- /.smpl-icon-menu --></a>
                    </div><!-- /.logo-box -->
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="main-nav__main-navigation">
                        <ul class="one-page-scroll-menu main-nav__navigation-box">
                            <li class="current scrollToLink">
                                <a href="{{url('/')}}">Home</a>
                            </li>
                            <li class="dropdown scrollToLink">
                                <a href="{{url('about')}}">About Us</a>
                                <ul>
                                    <li><a href="{{url('about')}}">Our Culture</a></li>
                                    <li><a href="{{url('mission')}}">Our mission</a></li>
                                    <li><a href="{{url('values')}}">Our values</a></li>
                                    <li><a href="{{url('plans')}}">Investment plans</a></li>
                                </ul><!-- /.sub-menu -->
                            </li>
                            <li class="dropdown scrollToLink">
                                <a href="#">What we offer</a>
                                <ul>
                                    @foreach($injected->getServices() as $servi)
                                    <li>
                                        <a href="{{route('service.details',['id'=>$servi->id])}}">{{$servi->title}}</a>
                                    </li>
                                    @endforeach
                                    <li><a href="{{url('tesla')}}">Tesla</a></li>
                                    <li><a href="{{url('atm')}}">Bitcoin ATM</a></li>
                                </ul><!-- /.sub-menu -->
                            </li>
                            <li class="scrollToLink">
                                <a href="{{route('login')}}">Login</a>
                            </li>
                            <li class="scrollToLink">
                                <a href="{{route('register')}}">Register</a>
                            </li>
                            <li class="scrollToLink"><a href="{{url('contact')}}">Contact Us</a></li>

                        </ul>
                    </div><!-- /.navbar-collapse -->

                </div>
                <!-- /.container -->
            </nav>
        </header><!-- /.main-nav__header-one -->

        @yield('content')

        <section class="cta-one">
            <div class="container">
                <div class="cta-one__circle-1"></div><!-- /.cta-one__circle-1 -->
                <div class="cta-one__circle-2"></div><!-- /.cta-one__circle-2 -->
                <div class="cta-one__circle-3"></div><!-- /.cta-one__circle-3 -->
                <div class="cta-one__content text-center">
                    <h3>Our Mobile App <br> (Android & iOS)</h3>
                    <p>Coming soon</p>

                    <img src="{{asset('home/img/play.png')}}" style="width: 100px;">
                    <img src="{{asset('home/img/ios.png')}}" style="width: 100px;">
                </div><!-- /.cta-one__content -->
            </div><!-- /.container -->
        </section><!-- /.cta-one -->

        <footer class="site-footer">
            <img src="{{asset('home/lassets/images/shapes/footer-shape-1.png')}}" class="site-footer__shape-1" alt="">
            <img src="{{asset('home/lassets/images/shapes/footer-shape-2.png')}}" class="site-footer__shape-2" alt="">
            <img src="{{asset('home/lassets/images/shapes/footer-shape-3.png')}}" class="site-footer__shape-3" alt="">
            <div class="site-footer__upper">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="footer-widget footer-widget__about">
                                <a class="footer-widget__logo" href="{{url('/')}}">
                                    <img src="{{asset('home/images/'.$web->logo)}}" style="width: 200px;"
                                        alt="Awesome Image"></a>
                                <p>
                                    As a financial institution, we are well aware that money management requires a
                                    transparent and trusting relationship between a client and a brokerin the market.
                                    Therefore, we are always ready to provide our partners with any information they may
                                    be interested in. We always conduct our business openly, and our activities are
                                    absolutely legal.
                                </p>
                                <p><a href="mailto:{{$web->email}}">
                                        {{$web->email}}
                                    </a> <br>
                                    @if(!empty($web->phone))
                                    <a href="tel:{{$web->phone}}">{{$web->phone}}</a>
                                    @endif

                                </p>
                            </div><!-- /.footer-widget -->
                        </div><!-- /.col-lg-4 -->
                        <div class="col-lg-4">
                            <div class="footer-widget footer-widget__links">
                                <h3 class="footer-widget__title">Explore</h3>
                                <div class="footer-widget__links-wrap">
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="{{url('about')}}">About us</a>
                                        </li>

                                        <li>
                                            <a href="{{url('plans')}}">Investment/contract plans</a>
                                        </li>

                                        <li>
                                            <a href="{{url('faqs')}}">FAQ</a>
                                        </li>
                                        <li>
                                            <a href="{{url('privacy')}}">Privacy Policy</a>
                                        </li>
                                        <li>
                                            <a href="{{url('terms')}}">Terms of Service</a>
                                        </li>
                                        <li>
                                            <a href="{{route('login')}}">Login</a>
                                        </li>
                                        <li>
                                            <a href="{{route('register')}}">Register</a>
                                        </li>
                                    </ul><!-- /.list-unstyled -->
                                    <ul class="list-unstyled">
                                        @foreach($injected->getServices() as $servi)
                                        <li>
                                            <a
                                                href="{{route('service.details',['id'=>$servi->id])}}">{{$servi->title}}</a>
                                        </li>
                                        @endforeach
                                        <li><a href="{{url('tesla')}}">Tesla</a></li>
                                        <li><a href="{{url('atm')}}">Bitcoin ATM</a></li>
                                    </ul><!-- /.list-unstyled -->
                                </div><!-- /.footer-widget__links-wrap -->
                            </div><!-- /.footer-widget footer-widget__links -->
                        </div><!-- /.col-lg-4 -->
                        <div class="col-lg-4">
                            <div class="footer-widget footer-widget__subscribe">
                                <h3 class="footer-widget__title">Subscribe</h3>
                                <form class="footer-widget__mc-form mc-form" method="get" action="#">
                                    <input type="text" name="email" placeholder="Email address">
                                    <button type="submit" class="thm-btn footer-widget__mc-btn">Register Now</button>
                                </form>
                                <div class="mc-form__response"></div><!-- /.mc-form__response -->
                            </div><!-- /.footer-widget footer-widget__subscribe -->
                        </div><!-- /.col-lg-4 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.site-footer__upper -->
            <div class="site-footer__bottom">
                <div class="container">
                    <div class="inner-container">
                        <div class="site-footer__social">
                            <a class="fab fa-facebook-f" href="#"></a>
                            <a class="fab fa-twitter" href="#"></a>
                            <a class="fab fa-instagram" href="#"></a>
                            <a class="fab fa-pinterest-p" href="#"></a>
                        </div><!-- /.site-footer__social -->
                        <p>© copyright {{date('Y')}} {{$siteName}}</p>
                    </div><!-- /.inner-container -->
                </div><!-- /.container -->
            </div><!-- /.site-footer__bottom -->
        </footer><!-- /.site-footer -->

    </div><!-- /.page-wrapper -->
    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>

    <div class="telegram-float-widget">
        <a href="https://wa.me/{{$web->phone}}" target="_blank">
            <img src="https://cdn2.iconfinder.com/data/icons/social-media-applications/64/social_media_applications_23-whatsapp-256.png"
                alt="" width="50">
        </a>
    </div>

    <div class="side-menu__block">


        <div class="side-menu__block-overlay custom-cursor__overlay">
            <div class="cursor"></div>
            <div class="cursor-follower"></div>
        </div><!-- /.side-menu__block-overlay -->
        <div class="side-menu__block-inner ">
            <div class="side-menu__top justify-content-end">

                <a href="#" class="side-menu__toggler side-menu__close-btn"><img
                        src="{{asset('home/lassets/images/shapes/close-1-1.png')}}" alt=""></a>
            </div><!-- /.side-menu__top -->


            <nav class="mobile-nav__container">
                <!-- content is loading via js -->
            </nav>
            <div class="side-menu__sep"></div><!-- /.side-menu__sep -->
            <div class="side-menu__content">
                <p>
                    <a href="mailto:{{$web->email}}">{{$web->email}}</a>
                </p>
                <div class="side-menu__social">
                    <a class="fab fa-facebook-f" href="#"></a>
                    <a class="fab fa-twitter" href="#"></a>
                    <a class="fab fa-instagram" href="#"></a>
                    <a class="fab fa-pinterest-p" href="#"></a>
                </div>
            </div><!-- /.side-menu__content -->
        </div><!-- /.side-menu__block-inner -->
    </div><!-- /.side-menu__block -->



    <script src="{{asset('home/lassets/js/jquery.min.js')}}"></script>
    <script src="{{asset('home/lassets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('home/lassets/js/TweenMax.min.js')}}"></script>
    <script src="{{asset('home/lassets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{asset('home/lassets/js/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{asset('home/lassets/js/jquery.easing.min.js')}}"></script>
    <script src="{{asset('home/lassets/js/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('home/lassets/js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('home/lassets/js/waypoints.min.js')}}"></script>
    <script src="{{asset('home/lassets/js/wow.js')}}"></script>
    <script src="{{asset('home/lassets/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('home/lassets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('home/lassets/js/jquery.bxslider.min.js')}}"></script>
    <script src="{{asset('home/lassets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('home/lassets/js/jquery.ajaxchimp.min.js')}}"></script>
    <!-- template scripts -->
    <script src="{{asset('home/lassets/js/theme.js')}}"></script>
    <!-- Google language start -->
    <style>


    </style>
    <script type="text/javascript">
        window.onload = function googleTranslateElementInit() {
        new google.translate.TranslateElement({ pageLanguage: 'en' }, 'google_translate_element');
    }
    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
    </script>
    <!-- start popup massage -->
    <div class="notifier" style="display: none;">
        <div class="txt" style="color:black;">While you are waiting,someone from <b></b> just traded with <a
                href="javascript:void(0);" onclick="javascript:void(0);"></a></div>
    </div>
    <style>
        .notifier {
            border-radius: 7px;
            position: fixed;
            z-index: 90;
            bottom: 80px;
            right: 50px;
            background: #fff;
            padding: 15px 40px;
            box-shadow: 0px 5px 13px 0px rgba(0, 0, 0, .3);
        }

        .notifier a {
            font-weight: 700;
            display: block;
            color: #0080FF;
        }

        .notifier a,
        .notifier a:active {
            transition: all .2s ease;
            color: #0080FF;
        }
    </style>
    <script data-cfasync="false" src="#"></script>
    <script type="text/javascript">
        var listCountries = ['Germany', 'Spain', 'Russia', 'Italy',
        'Italy',  'United States', 'Egypt',
        'United Kingdom', "United States","England","Germany","Germany","United States","Switzerland",
        "Austria","Austria","Austria","Australia","Australia","Australia","Russia","Russia",
        "United States","United Kingdom","Spain","Spain","India","England","Italy","Ukraine"
    ];
    var listPlans = ['$500','$5000','$1,000','$1000','$550','$3000','$690', '$360',
        '$700', '$600',"$500","$700","$1,000","$1289","$5000","$7000","$10000"];
    interval = Math.floor(Math.random() * (40000 - 8000 + 1) + 8000);
    var run = setInterval(request, interval);

    function request() {
        clearInterval(run);
        interval = Math.floor(Math.random() * (40000 - 8000 + 1) + 8000);
        var country = listCountries[Math.floor(Math.random() * listCountries.length)];
        var plan = listPlans[Math.floor(Math.random() * listPlans.length)];
        var msg = 'While you are still contemplating ,an investor from <b>' + country + '</b> ' + 'just earned' + plan + ' .</a>';
        $(".notifier .txt").html(msg);
        $(".notifier").stop(true).fadeIn(300);
        window.setTimeout(function() {
            $(".notifier").stop(true).fadeOut(300);
        }, 6000);
        run = setInterval(request, interval);
    }
    </script>
    <!-- end popup massage -->
</body>

</html>