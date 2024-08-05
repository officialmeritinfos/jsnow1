@extends('home.base')
@section('content')


    <section class="banner-one" id="banner" style="background-image: url({{asset('home/lassets/images/background/1.webp')}});">

        <img src="{{asset('home/lassets/images/shapes/banner-shapes-1-1.png')}}" alt="" class="banner-one__shape-1">
        <img src="{{asset('home/lassets/images/shapes/banner-shapes-1-2.png')}}" alt="" class="banner-one__shape-2">

        <img src="{{asset('home/lassets/images/shapes/banner-shapes-1-4.png')}}" alt="" class="banner-one__shape-4">
        <img src="{{asset('home/lassets/images/shapes/banner-shapes-1-5.png')}}" alt="" class="banner-one__shape-5">
        <img src="{{asset('home/lassets/images/shapes/banner-shapes-1-6.png')}}" alt="" class="banner-one__shape-6">
        <img src="{{asset('home/lassets/images/shapes/banner-shapes-1-7.png')}}" alt="" class="banner-one__shape-7">

        <div class="container">
            <img src="{{asset('home/lassets/images/shapes/banner-shapes-1-3.png')}}" alt="" class="banner-one__shape-moc-1">
            <img src="{{asset('home/img/trading1.png')}}" alt="" class="banner-one__moc">
            <div class="row">
                <div class="col-lg-7">
                    <div class="banner-one__content">
                        <p class="" style="font-weight: bolder;font-size: 20px;">Welcome to {{$siteName}} <a href="{{route('login')}}">Join Now</a></p>
                        <h3 style="font-weight: bolder;">We help achieve <br> financial goals</h3>
                        <p style="font-weight: bolder;font-size: 20px;">>We are committed to providing our customers with exceptional financial service <br> while offering our
                            employees
                            the best training.</p>
                        <a href="{{route('login')}}" class="thm-btn banner-one__btn scroll-to-target">Get Started</a><!-- /.thm-btn banner-one__btn -->
                    </div><!-- /.banner-one__content -->
                </div><!-- /.col-lg-7 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.banner-one -->


    <script type="text/javascript" src="https://files.coinmarketcap.com/static/widget/coinMarquee.js"></script><div id="coinmarketcap-widget-marquee" coins="1,1027,825,1839" currency="USD" theme="light" transparent="false" show-symbol-logo="true"></div>



    <!-- TradingView Widget BEGIN -->
    <div class="tradingview-widget-container">
        <div class="tradingview-widget-container__widget"></div>
        <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/markets/currencies/forex-cross-rates/" rel="noopener" target="_blank"><span class="blue-text">Exchange Rates</span></a> by TradingView</div>
        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-forex-cross-rates.js" async>
            {
                "width": "100%",
                "height": 400,
                "currencies": [
                "EUR",
                "USD",
                "JPY",
                "GBP",
                "CHF",
                "AUD",
                "CAD",
                "NZD",
                "CNY"
            ],
                "isTransparent": false,
                "colorTheme": "dark",
                "locale": "en"
            }
        </script>
    </div>
    <!-- TradingView Widget END -->

    <section class="service-one" id="features">
        <div class="container">
            <div class="block-title text-center">
                <span class="block-title__bubbles"></span>
                <p>Checkout Our Features</p>
                <h3>The Only Platform You’ll Need</h3>
            </div><!-- /.block-title -->
            <div class="row">
                <div class="service-one__col wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="000ms">
                    <div class="service-one__single">
                        <i class="zimed-icon-responsive"></i>
                        <h3>Instant Withdrawal</h3>
                    </div><!-- /.service-one__single -->
                </div><!-- /.service-one__col -->
                <div class="service-one__col wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                    <div class="service-one__single">
                        <i class="zimed-icon-computer-graphic"></i>
                        <h3>Quick Access</h3>
                    </div><!-- /.service-one__single -->
                </div><!-- /.service-one__col -->
                <div class="service-one__col wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                    <div class="service-one__single">
                        <i class="zimed-icon-development1"></i>
                        <h3>Manage Users</h3>
                    </div><!-- /.service-one__single -->
                </div><!-- /.service-one__col -->
                <div class="service-one__col wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="300ms">
                    <div class="service-one__single">
                        <i class="zimed-icon-development"></i>
                        <h3>Fully Secured</h3>
                    </div><!-- /.service-one__single -->
                </div><!-- /.service-one__col -->
                <div class="service-one__col wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="400ms">
                    <div class="service-one__single">
                        <i class="zimed-icon-development"></i>
                        <h3>247 Customer service</h3>
                    </div><!-- /.service-one__single -->
                </div><!-- /.service-one__col -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.service-one -->

    <div class="cta-three">

        <img src="{{asset('home/lassets/images/shapes/cta-1-shape-2.png')}}" alt="" class="cta-three__shape-2">
        <img src="{{asset('home/lassets/images/shapes/cta-1-shape-3.png')}}" alt="" class="cta-three__shape-3">
        <div class="container">
            <img src="{{asset('home/lassets/images/shapes/cta-1-shape-1.png')}}" alt="" class="cta-three__shape-1">
            <img src="{{asset('home/img/trading2.png')}}" alt="" class="cta-three__moc">
            <div class="row justify-content-end">
                <div class="col-lg-6">
                    <div class="cta-three__content">
                        <div class="block-title text-left">
                            <span class="block-title__bubbles"></span>
                            <p>Checkout Our Features</p>
                            <h3>Control Everything From One Platform</h3>
                        </div><!-- /.block-title -->
                        <div class="cta-three__box-wrap">
                            <div class="cta-three__box">
                                <div class="cta-three__box-icon">
                                    <i class="zimed-icon-strategy"></i>
                                </div><!-- /.cta-three__box-icon -->
                                <div class="cta-three__box-content">
                                    <h3>Fully secured</h3>
                                    <p>Your account is fully secured by our hybrid system encrypted by SSL Comodo Certificate.</p>
                                </div><!-- /.cta-three__box-content -->
                            </div><!-- /.cta-three__box -->
                            <div class="cta-three__box">
                                <div class="cta-three__box-icon">
                                    <i class="zimed-icon-training"></i>
                                </div><!-- /.cta-three__box-icon -->
                                <div class="cta-three__box-content">
                                    <h3>High ROI</h3>
                                    <p>Our platform is built to produce high Return on Investment to for our customers</p>
                                </div><!-- /.cta-three__box-content -->

                            </div><!-- /.cta-three__box -->
                        </div><!-- /.cta-three__box-wrap -->
                        <a href="{{route('login')}}" class="thm-btn cta-three__btn">Discover More</a><!-- /.thm-btn cta-three__btn -->
                    </div><!-- /.cta-three__content -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.cta-three -->

    <section class="pricing-one" id="pricing">
        <div class="container">
            <div class="pricing-one__sep"></div><!-- /.pricing-one__sep -->
            <div class="block-title text-center">
                <span class="block-title__bubbles"></span>

                <h3>Plans</h3>
            </div><!-- /.block-title -->

            <div class="tabed-content">
                <div id="month">
                    <div class="row justify-content-center">
                        @foreach($packages as $package)
                            @inject('option','App\Defaults\Custom')
                            <div class="col-lg-4 wow fadeInUp mt-3" data-wow-duration="1500ms">
                                <div class="pricing-one__single">
                                    <div class="pricing-one__inner">
                                        <img src="{{asset('home/lassets/images/shapes/pricing-line-1-1.png')}}" alt="" class="pricing-one__line">
                                        <img src="{{asset('home/lassets/images/shapes/pricing-icon-1-2.png')}}" alt="" class="pricing-one__icon">
                                        <h3>${{$package->minAmount}} / <small>{{$package->roi}}% After {{$package->Duration}}</small></h3>
                                        <p>{{$package->name}}</p>
                                        <ul class="list-unstyled pricing-one__list">

                                            <li><i class="fa fa-check"></i> Minimum: ${{$package->minAmount}}</li>
                                            <li><i class="fa fa-check"></i> Maximum: @if($package->isUnlimited !=1)
                                                    ${{number_format($package->maxAmount,2)}}
                                                @else
                                                    Unlimited
                                                @endif</li>
                                            <li><i class="fa fa-check"></i> Duration: {{$package->Duration}}</li>
                                            <li><i class="fa fa-check"></i> Referral: {{$package->referral}}%</li>
                                            <li><i class="fa fa-check"></i> Quality investment Experience</li>
                                            <li><i class="fa fa-check"></i> 24/7 phone and email support</li>
                                            <li><i class="fa fa-check"></i> Instant Withdrawal</li>
                                        </ul><!-- /.list-unstyled pricing-one__list -->
                                        <a href="{{route('register')}}" class="thm-btn pricing-one__btn">Get Started</a><!-- /.thm-btn -->
                                    </div><!-- /.pricing-one__inner -->
                                </div><!-- /.pricing-one__single -->
                            </div><!-- /.col-lg-4 -->
                        @endforeach

                    </div><!-- /.row -->
                </div><!-- /#month -->



            </div><!-- /.tabed-content -->

        </div><!-- /.container -->
    </section><!-- /.pricing-one -->

    <section class="cta-two">
        <img src="{{asset('home/lassets/images/shapes/cta-2-shape-1.png')}}" alt="" class="cta-two__shape-1">
        <img src="{{asset('home/lassets/images/shapes/cta-2-shape-2.png')}}" alt="" class="cta-two__shape-2">
        <div class="container">
            <img src="{{asset('home/lassets/images/shapes/cta-2-shape-3.png')}}" alt="" class="cta-two__shape-3">
            <img src="{{asset('home/img/dashboard.png')}}" alt="" class="cta-two__moc">
            <div class="row">
                <div class="col-xl-5 col-lg-6">
                    <div class="cta-two__content">
                        <div class="block-title text-left">
                            <span class="block-title__bubbles"></span>
                            <p>Checkout Our Features</p>
                            <h3>Discover the Powerful Tools For Your Repeat Customers</h3>
                        </div><!-- /.block-title -->
                        <p>Our platform is built with sophisticated features that helps our customers to increase their income. </p>
                        <a href="{{route('login')}}" class="thm-btn cta-two__btn">Discover More</a><!-- /.thm-btn cta-two__btn -->
                    </div><!-- /.cta-two__content -->
                </div><!-- /.col-lg-5 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.cta-two -->

    <section class="video-one">
        <div class="container">
            <div class="video-one__box wow fadeInUp" data-wow-duration="1500ms">
                <img src="{{asset('home/lassets/images/resources/video-1-1.jpg')}}" alt="">
                <div class="video-one__content">
                    <a href="https://www.youtube.com/watch?v=wt71GWdsxF0" class="video-popup"><i class="fa fa-play"></i></a>
                    <h3>How to Buy Bitcoin</h3>
                </div><!-- /.video-one__content -->
            </div><!-- /.video-one__box -->
        </div><!-- /.container -->
    </section><!-- /.video-one -->

    <section class="funfact-one">
        <img src="{{asset('home/lassets/images/shapes/pricing-shape-1.png')}}" alt="" class="funfact-one__shape-1">
        <img src="{{asset('home/lassets/images/shapes/pricing-shape-2.png')}}" alt="" class="funfact-one__shape-2">
        <img src="{{asset('home/lassets/images/shapes/pricing-shape-3.png')}}" alt="" class="funfact-one__shape-3">


        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="funfact-one__single">
                        <h3 class="counter">7420927</h3>
                        <p>Users</p>
                    </div><!-- /.funfact-one__single -->
                </div><!-- /.col-lg-3 -->
                <div class="col-lg-3 col-md-6">
                    <div class="funfact-one__single">
                        <h3 class="counter">6020</h3>
                        <p>Staff</p>
                    </div><!-- /.funfact-one__single -->
                </div><!-- /.col-lg-3 -->
                <div class="col-lg-3 col-md-6">
                    <div class="funfact-one__single">
                        <h3 class="counter">52</h3>
                        <p>Country</p>
                    </div><!-- /.funfact-one__single -->
                </div><!-- /.col-lg-3 -->
                <div class="col-lg-3 col-md-6">
                    <div class="funfact-one__single">
                        <h3 class="counter">200</h3>
                        <p>Awards</p>
                    </div><!-- /.funfact-one__single -->
                </div><!-- /.col-lg-3 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.funfact-one -->


    <section class="app-shot-one" id="app-shots">
        <img src="{{asset('home/lassets/images/shapes/contact-shape-3.png')}}" alt="" class="app-shot__shape-1">
        <img src="{{asset('home/lassets/images/shapes/contact-shape-2.png')}}" alt="" class="app-shot__shape-2">

        <div class="container-fluid">
            <div class="block-title text-center">
                <span class="block-title__bubbles"></span>
                <p>Checkout Our Interface</p>
                <h3>Dasboard Screenshots</h3>
            </div><!-- /.block-title -->
            <div class="app-shot-one__carousel thm__owl-carousel owl-theme owl-carousel" data-options='{ "loop": true, "margin": 43, "nav": false, "dots": true, "autoWidth": false, "autoplay": true, "smartSpeed": 700, "autoplayTimeout": 5000, "autoplayHoverPause": true, "slideBy": 5, "responsive": { "0": { "items": 1 }, "480": { "items": 2 }, "600": { "items": 3 }, "991": { "items": 4 }, "1000": { "items": 5 }, "1200": { "items": 5 } } }'>
                <div class="item">
                    <img src="{{asset('home/lassets/images/app-shots/app-shot-1-1.jpg')}}" alt="">
                </div><!-- /.item -->
                <div class="item">
                    <img src="{{asset('home/lassets/images/app-shots/app-shot-1-2.jpg')}}" alt="">
                </div><!-- /.item -->
                <div class="item">
                    <img src="{{asset('home/lassets/images/app-shots/app-shot-1-3.jpg')}}" alt="">
                </div><!-- /.item -->
                <div class="item">
                    <img src="{{asset('home/lassets/images/app-shots/app-shot-1-4.jpg')}}" alt="">
                </div><!-- /.item -->
                <div class="item">
                    <img src="{{asset('home/lassets/images/app-shots/app-shot-1-5.jpg')}}" alt="">
                </div><!-- /.item -->
                <div class="item">
                    <img src="{{asset('home/lassets/images/app-shots/app-shot-1-1.jpg')}}" alt="">
                </div><!-- /.item -->
                <div class="item">
                    <img src="{{asset('home/lassets/images/app-shots/app-shot-1-2.jpg')}}" alt="">
                </div><!-- /.item -->
                <div class="item">
                    <img src="{{asset('home/lassets/images/app-shots/app-shot-1-3.jpg')}}" alt="">
                </div><!-- /.item -->
                <div class="item">
                    <img src="{{asset('home/lassets/images/app-shots/app-shot-1-4.jpg')}}" alt="">
                </div><!-- /.item -->
                <div class="item">
                    <img src="{{asset('home/lassets/images/app-shots/app-shot-1-5.jpg')}}" alt="">
                </div><!-- /.item -->
                <div class="item">
                    <img src="{{asset('home/lassets/images/app-shots/app-shot-1-1.jpg')}}" alt="">
                </div><!-- /.item -->
                <div class="item">
                    <img src="{{asset('home/lassets/images/app-shots/app-shot-1-2.jpg')}}" alt="">
                </div><!-- /.item -->
                <div class="item">
                    <img src="{{asset('home/lassets/images/app-shots/app-shot-1-3.jpg')}}" alt="">
                </div><!-- /.item -->
                <div class="item">
                    <img src="{{asset('home/lassets/images/app-shots/app-shot-1-4.jpg')}}" alt="">
                </div><!-- /.item -->
                <div class="item">
                    <img src="{{asset('home/lassets/images/app-shots/app-shot-1-5.jpg')}}" alt="">
                </div><!-- /.item -->
            </div><!-- /.app-shot-one__carousel owl-theme owl-carousel -->
        </div><!-- /.container-fluid -->
    </section><!-- /.app-shot-one -->

    <section class="testimonials__one" id="testimonials">
        <img src="{{asset('home/lassets/images/shapes/map-1-1.png')}}" alt="Awesome Image" class="map-img">
        <img src="{{asset('home/lassets/images/shapes/testi-shape-1.png')}}" alt="" class="testimonials__one-shape-1">
        <img src="{{asset('home/lassets/images/shapes/testi-shape-2.png')}}" alt="" class="testimonials__one-shape-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex">
                    <div class="my-auto wow fadeInUp" data-wow-duration="1500ms">
                        <div id="testimonials-slider-pager">
                            <div class="testimonials-slider-pager-one">
                                <a href="#" class="pager-item active" data-slide-index="0"><img src="{{asset('home/lassets/images/testimonials/testi-1-1.jpg')}}" alt="Awesome Image"></a>
                                <a href="#" class="pager-item" data-slide-index="1"><img src="{{asset('home/lassets/images/testimonials/testi-1-2.jpg')}}" alt="Awesome Image"></a>
                                <a href="#" class="pager-item" data-slide-index="2"><img src="{{asset('home/lassets/images/testimonials/testi-1-3.jpg')}}" alt="Awesome Image"></a>
                                <a href="#" class="pager-item" data-slide-index="3"><img src="{{asset('home/lassets/images/testimonials/testi-1-4.jpg')}}" alt="Awesome Image"></a>
                                <a href="#" class="pager-item" data-slide-index="4"><img src="{{asset('home/lassets/images/testimonials/testi-1-5.jpg')}}" alt="Awesome Image"></a>
                                <a href="#" class="pager-item" data-slide-index="5"><img src="{{asset('home/lassets/images/testimonials/testi-1-6.jpg')}}" alt="Awesome Image"></a>
                            </div><!-- /.testimonials-slider-pager-one -->
                            <div class="testimonials-slider-pager-two">
                                <a href="#" class="pager-item active" data-slide-index="0"><img src="{{asset('home/lassets/images/testimonials/testi-1-1.jpg')}}" alt="Awesome Image"></a>
                                <a href="#" class="pager-item" data-slide-index="1"><img src="{{asset('home/lassets/images/testimonials/testi-1-2.jpg')}}" alt="Awesome Image"></a>
                                <a href="#" class="pager-item" data-slide-index="2"><img src="{{asset('home/lassets/images/testimonials/testi-1-3.jpg')}}" alt="Awesome Image"></a>
                                <a href="#" class="pager-item" data-slide-index="3"><img src="{{asset('home/lassets/images/testimonials/testi-1-4.jpg')}}" alt="Awesome Image"></a>
                                <a href="#" class="pager-item" data-slide-index="4"><img src="{{asset('home/lassets/images/testimonials/testi-1-5.jpg')}}" alt="Awesome Image"></a>
                                <a href="#" class="pager-item" data-slide-index="5"><img src="{{asset('home/lassets/images/testimonials/testi-1-6.jpg')}}" alt="Awesome Image"></a>
                            </div><!-- /.testimonials-slider-pager-two -->
                        </div><!-- /#testimonials-slider-pager -->
                    </div><!-- /.my-auto -->
                </div><!-- /.col-lg-6 -->
                <div class="col-lg-6">
                    <div class="block-title text-left">
                        <span class="block-title__bubbles"></span>

                        <h3>What Our Clients Are Saying</h3>
                    </div><!-- /.block-title -->
                    <ul class="slider testimonials-slider">
                        <li class="slide-item">
                            <div class="testimonials__one__single">
                                <p>This company has always been a support to me in my financial journey. I give them 5 stars.</p>
                                <h3>Delila Rayam</h3>
                            </div><!-- /.testimonials__one__single -->
                        </li>
                        <li class="slide-item">
                            <div class="testimonials__one__single">
                                <p>At first I never trusted the platform but It has proven otherwise. This platform is a go to place</p>
                                <h3>Terrilyn Werme</h3>
                            </div><!-- /.testimonials__one__single -->
                        </li>
                        <li class="slide-item">
                            <div class="testimonials__one__single">
                                <p>WOW. It has always been a wonderful experience using this platform.</p>
                                <h3>Kyle Demayo</h3>
                            </div><!-- /.testimonials__one__single -->
                        </li>
                        <li class="slide-item">
                            <div class="testimonials__one__single">
                                <p>It's without doubt that {{$siteName}} do deliver as promised. I was able to offset all my debts by using the NPF plan and with consistent approach, I am comfortably stable financially.</p>
                                <h3>Minta Hadad</h3>
                            </div><!-- /.testimonials__one__single -->
                        </li>
                        <li class="slide-item">
                            <div class="testimonials__one__single">
                                <p>I started {{$siteName}} been skeptical due to my previous bad experiences, but now I can confidently say that {{$siteName}} can be trusted 100%. I have made for than 150% in my investment.</p>
                                <h3>Sherman Cibrian</h3>
                            </div><!-- /.testimonials__one__single -->
                        </li>
                        <li class="slide-item">
                            <div class="testimonials__one__single">
                                <p>I started since 2018 after been introduced by a friend and I have made more than $85,000 in profit. Joining {{$siteName}} was my one-time decision that paid off in long-term.</p>
                                <h3>Adrianne Hagans</h3>
                            </div><!-- /.testimonials__one__single -->
                        </li>
                    </ul>
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.testimonials__one -->

    <section class="brand-one brand-one__home-one">
        <div class="container">
            <div class="brand-one__carousel owl-carousel thm__owl-carousel owl-theme" data-options='{"loop": true, "autoplay": true, "autoplayHoverPause": true, "autoplayTimeout": 5000, "items": 5, "dots": false, "nav": false, "margin": 100, "smartSpeed": 700, "responsive": { "0": {"items": 2, "margin": 30}, "480": {"items": 3, "margin": 30}, "991": {"items": 4, "margin": 50}, "1199": {"items": 5, "margin": 100}}}'>
                <div class="item">
                    <img src="{{asset('home/lassets/images/brand/brand-1-1.png')}}" alt="">
                </div><!-- /.item -->
                <div class="item">
                    <img src="{{asset('home/lassets/images/brand/brand-1-2.png')}}" alt="">
                </div><!-- /.item -->
                <div class="item">
                    <img src="{{asset('home/lassets/images/brand/brand-1-3.png')}}" alt="">
                </div><!-- /.item -->
                <div class="item">
                    <img src="{{asset('home/lassets/images/brand/brand-1-4.png')}}" alt="">
                </div><!-- /.item -->
                <div class="item">
                    <img src="{{asset('home/lassets/images/brand/brand-1-5.png')}}" alt="">
                </div><!-- /.item -->
                <div class="item">
                    <img src="{{asset('home/lassets/images/brand/brand-1-6.png')}}" alt="">
                </div><!-- /.item -->
                <div class="item">
                    <img src="{{asset('home/lassets/images/brand/brand-1-1.png')}}" alt="">
                </div><!-- /.item -->
                <div class="item">
                    <img src="{{asset('home/lassets/images/brand/brand-1-2.png')}}" alt="">
                </div><!-- /.item -->
                <div class="item">
                    <img src="{{asset('home/lassets/images/brand/brand-1-3.png')}}" alt="">
                </div><!-- /.item -->
                <div class="item">
                    <img src="{{asset('home/lassets/images/brand/brand-1-4.png')}}" alt="">
                </div><!-- /.item -->
                <div class="item">
                    <img src="{{asset('home/lassets/images/brand/brand-1-5.png')}}" alt="">
                </div><!-- /.item -->
                <div class="item">
                    <img src="{{asset('home/lassets/images/brand/brand-1-6.png')}}" alt="">
                </div><!-- /.item -->
            </div><!-- /.brand-one__carousel owl-carousel thm__owl-carousel owl-theme -->
        </div><!-- /.container -->
    </section><!-- /.brand-one -->



    <section class="blog-one blog-one__home" id="blog">
        <img src="{{asset('home/lassets/images/shapes/blog-shape-1-1.png')}}" alt="" class="blog-one__shape-1">
        <div class="container">
            <div class="block-title text-center">
                <span class="block-title__bubbles"></span>

                <h3>Our Products</h3>
            </div><!-- /.block-title -->
            <div class="row">
                <div class="col-lg-4 wow fadeInLeft" data-wow-duration="1500ms">
                    <div class="blog-one__single">
                        <div class="blog-one__image">
                            <img src="{{asset('home/serv/9.jpg')}}" alt="">
                        </div><!-- /.blog-one__image -->
                        <div class="blog-one__content">
                            <ul class="blog-one__meta list-unstyled">
                                <li><a href="#"><i class="far fa-clock"></i> 20 Feb</a></li>
                                <li><a href="#"><i class="far fa-comments"></i> 2 Comments</a></li>
                            </ul><!-- /.blog-one__meta list-unstyled -->
                            <h3><a href="#">Learn about gold</a>
                            </h3>
                            <a href="#" class="blog-one__link"><i class="zimed-icon-right-arrow"></i></a>
                            <!-- /.blog-one__link -->
                        </div><!-- /.blog-one__content -->
                    </div><!-- /.blog-one__single -->
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4 wow fadeInUp" data-wow-duration="1500ms">
                    <div class="blog-one__single">
                        <div class="blog-one__image">
                            <img src="{{asset('home/img/oil.jpg')}}" alt="">
                        </div><!-- /.blog-one__image -->
                        <div class="blog-one__content">
                            <ul class="blog-one__meta list-unstyled">
                                <li><a href="#"><i class="far fa-clock"></i> 20 Feb</a></li>
                                <li><a href="#"><i class="far fa-comments"></i> 2 Comments</a></li>
                            </ul><!-- /.blog-one__meta list-unstyled -->
                            <h3><a href="#">Oil & Gas Investment</a></h3>
                            <a href="#" class="blog-one__link"><i class="zimed-icon-right-arrow"></i></a>
                            <!-- /.blog-one__link -->
                        </div><!-- /.blog-one__content -->
                    </div><!-- /.blog-one__single -->
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4 wow fadeInRight" data-wow-duration="1500ms">
                    <div class="blog-one__single">
                        <div class="blog-one__image">
                            <img src="{{asset('home/img/crypto.jpg')}}" alt="">
                        </div><!-- /.blog-one__image -->
                        <div class="blog-one__content">
                            <ul class="blog-one__meta list-unstyled">
                                <li><a href="#"><i class="far fa-clock"></i> 20 Feb</a></li>
                                <li><a href="#"><i class="far fa-comments"></i> 2 Comments</a></li>
                            </ul><!-- /.blog-one__meta list-unstyled -->
                            <h3><a href="#">Cryptocurrency</a></h3>
                            <a href="#" class="blog-one__link"><i class="zimed-icon-right-arrow"></i></a>
                            <!-- /.blog-one__link -->
                        </div><!-- /.blog-one__content -->
                    </div><!-- /.blog-one__single -->
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.blog-one -->

<section class="cta-two">
        <img src="{{asset('home/lassets/images/shapes/cta-2-shape-1.png')}}" alt="" class="cta-two__shape-1">
        <img src="{{asset('home/lassets/images/shapes/cta-2-shape-2.png')}}" alt="" class="cta-two__shape-2">
        <div class="container">
            <img src="{{asset('home/lassets/images/shapes/cta-2-shape-3.png')}}" alt="" class="cta-two__shape-3">
            <img src="{{asset('home/images/certificate.jpeg')}}" alt="" class="cta-two__moc">
            <div class="row">
                <div class="col-xl-5 col-lg-6">
                    <div class="cta-two__content">
                        <div class="block-title text-left">
                            <span class="block-title__bubbles"></span>
                            <p>Checkout Our Certification</p>
                            <h3>We are registered</h3>
                        </div><!-- /.block-title -->
                        <a href="{{route('login')}}" class="thm-btn cta-two__btn">Discover More</a><!-- /.thm-btn cta-two__btn -->
                    </div><!-- /.cta-two__content -->
                </div><!-- /.col-lg-5 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.cta-two -->


@endsection
