@extends('home.base')

@section('content')

    <!-- START SECTION BANNER -->
    <section class="hero-section ptb-100 gradient-overlay"
             style="background: url('{{asset('home/img/header-bg-5.jpg')}}')no-repeat center center / cover">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-7">
                    <div class="page-header-content text-white text-center pt-sm-5 pt-md-5 pt-lg-0">
                        <h1 class="text-white mb-0">{{$pageName}}</h1>
                        <div class="custom-breadcrumb">
                            <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
                                <li class="list-inline-item breadcrumb-item active">{{$siteName}}</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="our-blog-section ptb-100 gray-light-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="section-heading mb-5">
                        <h2>Our Services</h2>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-md-4">
                    <div class="single-blog-card card border-0 shadow-sm">
                        <div class="blog-img">
                            <span class="category position-absolute">Forex</span>
                            <img src="{{asset('home/img/serv/forex.jpg')}}" class="card-img-top position-relative img-fluid" alt="blog">
                        </div>
                        <div class="card-body">
                            <p class="card-text"></p>
                        </div>

                    </div>
                </div>

                <div class="col-md-4">
                    <div class="single-blog-card card border-0 shadow-sm">
                        <div class="blog-img">
                            <span class="category position-absolute">Agriculture</span>
                            <img src="{{asset('home/img/serv/agric.jpg')}}" class="card-img-top position-relative img-fluid" alt="blog">
                        </div>
                        <div class="card-body">
                            <p class="card-text"></p>
                        </div>

                    </div>
                </div>

                <div class="col-md-4">
                    <div class="single-blog-card card border-0 shadow-sm">
                        <div class="blog-img">
                            <span class="category position-absolute">Oil And Gas</span>
                            <img src="{{asset('home/img/serv/oil.jpg')}}" class="card-img-top position-relative img-fluid" alt="blog">
                        </div>
                        <div class="card-body">
                            <p class="card-text"></p>
                        </div>

                    </div>
                </div>


                <div class="col-md-4">
                    <div class="single-blog-card card border-0 shadow-sm">
                        <div class="blog-img">
                            <span class="category position-absolute">Real Estate</span>
                            <img src="{{asset('home/img/serv/estate.jpg')}}" class="card-img-top position-relative img-fluid" alt="blog">
                        </div>
                        <div class="card-body">
                            <p class="card-text"></p>
                        </div>

                    </div>
                </div>

                <div class="col-md-4">
                    <div class="single-blog-card card border-0 shadow-sm">
                        <div class="blog-img">
                            <span class="category position-absolute">Retirement and Insurance Services</span>
                            <img src="{{asset('home/img/serv/retire.jpg')}}" class="card-img-top position-relative img-fluid" alt="blog">
                        </div>
                        <div class="card-body">
                            <p class="card-text"></p>
                        </div>

                    </div>
                </div>

                <div class="col-md-4">
                    <div class="single-blog-card card border-0 shadow-sm">
                        <div class="blog-img">
                            <span class="category position-absolute">Gold</span>
                            <img src="{{asset('home/img/serv/gold.jpg')}}" class="card-img-top position-relative img-fluid" alt="blog">
                        </div>
                        <div class="card-body">
                            <p class="card-text"></p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pricing-one" id="pricing">
        <div class="container">
            <div class="pricing-one__sep"></div><!-- /.pricing-one__sep -->
            <div class="block-title text-center">
                <span class="block-title__bubbles"></span>

                <h3>Investment Plans</h3>
            </div><!-- /.block-title -->

            <div class="tabed-content">
                <div id="month">
                    <div class="row justify-content-center">
                        @inject('option','App\Defaults\Custom')
                        @foreach($packages as $package)
                            <div class="col-lg-4 wow fadeInUp mt-3" data-wow-duration="1500ms">
                                <div class="pricing-one__single">
                                    <div class="pricing-one__inner">
                                        <img src="{{asset('home/lassets/images/shapes/pricing-line-1-1.png')}}" alt="" class="pricing-one__line">
                                        <img src="{{asset('home/lassets/images/shapes/pricing-icon-1-2.png')}}" alt="" class="pricing-one__icon">
                                        {{--                                                <h3>${{$package->minAmount}} / <small>{{$package->roi}}% Daily</small></h3>--}}
                                        <p>{{$package->name}}</p>
                                        <ul class="list-unstyled pricing-one__list">

                                            <li><i class="fa fa-check"></i> Minimum: £{{$package->minAmount}}</li>
                                            <li><i class="fa fa-check"></i> Maximum: @if($package->isUnlimited !=1)
                                                    £{{number_format($package->maxAmount,2)}}
                                                @else
                                                    Unlimited
                                                @endif</li>
                                            <li><i class="fa fa-check"></i> Daily Profits Return: {{$package->roi}}</li>
                                            <li><i class="fa fa-check"></i> Duration: {{$package->Duration}}</li>
                                            <li><i class="fa fa-check"></i> Referral: {{$package->referral}}%</li>
                                            <li><i class="fa fa-check"></i> Quality investment Experience</li>
                                            <li><i class="fa fa-check"></i> 24/7 phone and email support</li>
                                            <li><i class="fa fa-check"></i> Monthly Withdrawal: @if($package->monthlyWithdrawal)
                                                    Yes
                                                @else
                                                    No
                                                @endif</li>
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

@endsection
