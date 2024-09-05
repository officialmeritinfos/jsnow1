@extends('home.base')
@section('content')

    <section class="page-header" style="background-image: url({{asset('home/lassets/images/background/inner-banner-bg.png')}}");">
    <div class="container">
        <h2>{{$pageName}}</h2>
    </div><!-- /.container -->
    </section><!-- /.page-header -->


    <!-- End Service Details Area -->
    <section class="service-details-area ptb-100" style="margin-bottom: 5rem; margin-top: 5rem;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="service-details-wrap">
                        <div class="service-img">
                            <img src="{{asset('home/serv/'.$service->photo)}}" alt="Image">
                        </div>
                        <h3>{{$service->title}}</h3>
                        <p>
                            {!! str_replace('MYSITE',$siteName,$service->content) !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Service Details Area -->


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
                                            <li><i class="fa fa-check"></i> Daily Profits Return: {{$package->roi}}%</li>
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
