@extends('layouts.main')

@if(App::isLocal('fa'))
    @section('styles')
        <style>
            .site-footer p,
            .site-footer h3,
            .site-footer .featured-links{
                text-align: right;
            }
            .service-info, .pricing-tag{
                text-align: center;
                direction: rtl
            }
        </style>
    @endsection
@endif

@section('content')

<div id="hero" class="hero overlay">
    <div class="hero-content">
        <div class="hero-text">
            <h1>{{ __("Websites, SEO and Digital Marketing") }}</h1>
            <p>{{ __('A strategic approach to website design and development') }}</p>
            <a href="#" class="btn btn-border">{{ __('Learn more') }}</a>
        </div><!-- /.hero-text -->
    </div><!-- /.hero-content -->
</div><!-- /.hero -->

<main id="main" class="site-main">

    <section class="site-section section-features">
        <div class="container">
            <div class="row">
                <div class="col-sm-5">
                    <h2>{{ __('Responsive web design') }}</h2>
                    <p>{{ __("Responsive Web design is the approach that suggests that design and development should respond to the user's behavior and environment based on screen size, platform and orientation. The practice consists of a mix of flexible grids and layouts, images and an intelligent use of CSS media queries")}}</p>
                </div>
                <div class="col-sm-7 hidden-xs">
                    <img src="{{ asset('front/assets/img/ipad-pro.png')}}" alt="">
                </div>
            </div>
        </div>
    </section><!-- /.section-features -->

    <section class="site-section section-services gray-bg text-center">
        <div class="container">
            <h2 class="heading-separator">{{ __('Our Services') }}</h2>
            <p class="subheading-text">{{ __('Web design, SEO and website optimization, content creation, logo design') }}</p>
            <div class="row">
                <div class="col-md-3 col-xs-6">
                    <div class="service">
                        <img src="{{ asset('front/assets/img/anchor.svg')}}" alt="">
                        <h3 class="service-title">{{ __('Branding') }}</h3>
                        <p class="service-info"> {{ __('Learn why your brand is a valuable component when it comes to your marketing communication and why you don\'t want to be without one.')}}</p>
                    </div><!-- /.service -->
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="service">
                        <img src="{{ asset('front/assets/img/bycicle.svg')}}" alt="">
                        <h3 class="service-title">{{ __('Design') }}</h3>
                        <p class="service-info">{{ __('The strength of a design lies as much in the steps taken to create it as in the final result.') }} </p>
                    </div><!-- /.service -->
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="service">
                        <img src="{{ asset('front/assets/img/paper-plane.svg')}}" alt="">
                        <h3 class="service-title">{{ __('Development') }}</h3>
                        <p class="service-info">{{ __('Development is a way to make people aware of the services and/or products you are offering.') }}</p>
                    </div><!-- /.service -->
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="service">
                        <img src="{{ asset('front/assets/img/photo.svg')}}" alt="">
                        <h3 class="service-title">{{ __('Photography') }}</h3>
                        <p class="service-info">{{ __('Photographs are the legacy you leave for generations to come.') }}</p>
                    </div><!-- /.service -->
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="service">
                        <img src="{{ asset('front/assets/img/microphone.svg')}}" alt="">
                        <h3 class="service-title">{{ __('Support') }}</h3>
                        <p class="service-info">{{ __('A support network can include a variety of forms of interaction with a range of people who can support you in different ways.') }} </p>
                    </div><!-- /.service -->
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="service">
                        <img src="{{ asset('front/assets/img/rocket.svg')}}" alt="">
                        <h3 class="service-title">{{ __('Marketing') }}</h3>
                        <p class="service-info">{{ __('Marketing is of vital importance to any business. It is the key process of researching, promoting and selling products or services to your target.') }}</p>
                    </div><!-- /.service -->
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="service">
                        <img src="{{ asset('front/assets/img/basket.svg')}}" alt="">
                        <h3 class="service-title">{{ __('Ecommerce') }}</h3>
                        <p class="service-info">{{ __('When customers are deciding on a purchase, they start by looking online.') }}</p>
                    </div><!-- /.service -->
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="service">
                        <img src="{{ asset('front/assets/img/chemestry.svg')}}" alt="">
                        <h3 class="service-title">{{ __('Coding')}}</h3>
                        <p class="service-info">{{ __('We use the best coding practices') }}</p>
                    </div><!-- /.service -->
                </div>
            </div>
        </div>
    </section><!-- /.section-services -->

    <section class="site-section section-map-feature text-center">

        <div class="container">
            <h2>{{ __('Responsive Web Design') }}</h2>
            <p>{{ __('Web design is responsive design. Responsive web design is web design, done right.') }}</p>
            <a href="#" class="btn btn-fill">{{ __('Learn More') }}</a>
            <div class="row">
                <div class="col-sm-3 col-xs-6">
                    <div class="counter-item">
                        <p class="counter" data-to="377" data-speed="2000">0</p>
                        <h3>{{ __('Cofee Cups') }}</h3>
                    </div><!-- /.counter-item -->
                </div>
                <div class="col-sm-3 col-xs-6">
                    <div class="counter-item">
                        <p class="counter" data-to="1204" data-speed="2000">0</p>
                        <h3>{{ __('Projects completed') }}</h3>
                    </div> <!-- /.counter-item -->
                </div>
                <div class="col-sm-3 col-xs-6">
                    <div class="counter-item">
                        <p class="counter" data-to="459" data-speed="1000">0</p>
                        <h3>{{ __('Happy Clients') }}</h3>
                    </div><!-- /.counter-item -->
                </div>
                <div class="col-sm-3 col-xs-6">
                    <div class="counter-item">
                        <p class="counter" data-to="675" data-speed="1000">0</p>
                        <h3>{{ __('Average Deal') }}</h3>
                    </div><!-- /.counter-item -->
                </div>
            </div>
        </div>

    </section><!-- /.section-map-feature -->

    <section class="site-section section-pricing" dir="ltr">
        <div class="container">
            <div class="text-center">
                <h2 class="heading-separator">{{ __('Pricing Table') }}</h2>
            </div>
            <div class="row">
                <!-- Pricing Table 1 -->
                <div class="col-md-4 col-sm-6" data-aos="zoom-out-right" data-aos-duration="2000">
                    <div class="pricing-table basic">
                        <h3 class="pricing-title">{{ __('Basic Plan') }}</h3>
                        <div class="pricing-tag">
                            {{ App::isLocal('fa') ? "3 میلیون" : "$100.00"}}
                            {{-- <span class="pricing-sub-tag">/Month</span> --}}
                        </div>
                        <ul class="pricing-content">
                            <li>Site Speed: <i class="fa fa-star"></i><i class="fa fa-star"></i></li>
                            <li>Customizable: <i class="fa fa-star"></i><i class="fa fa-star"></i></li>
                            <li>7 Days Delivery</li>
                            <li>3 Month Support</li>
                            {{-- <li class="disable">Site Speed:</li> --}}
                            <li>Starting Price</li>
                        </ul>
                        <a href="" class="pricing-signup">{{ __('Sign up') }}</a>
                    </div>
                </div>
                <!-- End of Pricing Table 1 -->
                <!-- Pricing Table 2 -->
                <div class="col-md-4 col-sm-6" data-aos="flip-left" data-aos-duration="2000">
                    <div class="pricing-table standard">
                        <h3 class="pricing-title">{{ __('Standard Plan') }}</h3>
                        <div class="pricing-tag">
                            {{ App::isLocal('fa') ? "9 میلیون" : "$250.00"}}
                            {{-- <span class="pricing-sub-tag">/Month</span> --}}
                        </div>
                        <ul class="pricing-content">
                            <li>Site Speed: <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></li>
                            <li>Customizable: <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></li>
                            <li>7 Days Delivery</li>
                            <li>3 Month Support</li>
                            {{-- <li class="disable">Site Speed:</li> --}}
                            <li>Starting Price</li>
                        </ul>
                        <a href="" class="pricing-signup">{{ __('Sign up') }}</a>
                    </div>
                </div>
                <!-- End of Pricing Table 2 -->
                <!-- Pricing Table 3 -->
                <div class="col-md-4 col-sm-6" data-aos="zoom-out-left" data-aos-duration="2000">
                    <div class="pricing-table professional">
                        <h3 class="pricing-title">{{ __('VIP Plan') }}</h3>
                        <div class="pricing-tag">
                            {{ App::isLocal('fa') ? "19 میلیون" : "$400.00"}}
                            {{-- <span class="pricing-sub-tag">/Month</span> --}}
                        </div>
                        <ul class="pricing-content">
                            <li>Site Speed: <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></li>
                            <li>Customizable: <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></li>
                            <li>7 Days Delivery</li>
                            <li>3 Month Support</li>
                            {{-- <li class="disable">Site Speed:</li> --}}
                            <li>Starting Price</li>
                        </ul>
                        <a href="" class="pricing-signup">{{ __('Sign up')}}</a>
                    </div>
                </div>
                <!-- End of Pricing Table 3 -->
            </div>
        </div>
    </section>

    <section class="site-section section-portfolio">
        <div class="container">
            <div class="text-center">
                <h2 class="heading-separator">{{ __('Latest Work') }}</h2>
                <p class="subheading-text">{{ __('This is some of our best work') }}</p>
            </div>
            <div class="row">
                @foreach ($data['portfolios'] as $portfolio)
                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="portfolio-item">
                            <img src="{{ asset($portfolio->images->first()->src)}}" class="img-res" alt="{{ $portfolio->name }}">
                            <h4 class="portfolio-item-title">{{ $portfolio->name }}</h4>
                            <a href="{{ route('front.portfolios.show', $portfolio->id) }}"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                        </div><!-- /.portfolio-item -->
                    </div>
                @endforeach
                {{-- <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="portfolio-item">
                        <img src="{{ asset('front/assets/img/portfolio-2.jpg')}}" class="img-res" alt="">
                        <h4 class="portfolio-item-title">Portfolio item</h4>
                        <a href="portfolio-item.html"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    </div><!-- /.portfolio-item -->
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="portfolio-item">
                        <img src="{{ asset('front/assets/img/portfolio-3.jpg')}}" class="img-res" alt="">
                        <h4 class="portfolio-item-title">Portfolio item</h4>
                        <a href="portfolio-item.html"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    </div><!-- /.portfolio-item -->
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="portfolio-item">
                        <img src="{{ asset('front/assets/img/portfolio-4.jpg')}}" class="img-res" alt="">
                        <h4 class="portfolio-item-title">Portfolio item</h4>
                        <a href="portfolio-item.html"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    </div><!-- /.portfolio-item -->
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="portfolio-item">
                        <img src="{{ asset('front/assets/img/portfolio-5.jpg')}}" class="img-res" alt="">
                        <h4 class="portfolio-item-title">Portfolio item</h4>
                        <a href="portfolio-item.html"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    </div><!-- /.portfolio-item -->
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="portfolio-item">
                        <img src="{{ asset('front/assets/img/portfolio-6.jpg')}}" class="img-res" alt="">
                        <h4 class="portfolio-item-title">Portfolio item</h4>
                        <a href="portfolio-item.html"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    </div><!-- /.portfolio-item -->
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="portfolio-item">
                        <img src="{{ asset('front/assets/img/portfolio-1.jpg')}}" class="img-res" alt="">
                        <h4 class="portfolio-item-title">Portfolio item</h4>
                        <a href="portfolio-item.html"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    </div><!-- /.portfolio-item -->
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="portfolio-item">
                        <img src="{{ asset('front/assets/img/portfolio-2.jpg')}}" class="img-res" alt="">
                        <h4 class="portfolio-item-title">Portfolio item</h4>
                        <a href="portfolio-item.html"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    </div><!-- /.portfolio-item -->
                </div> --}}
            </div>
        </div>
    </section><!-- /.section-portfolio -->

    <section class="site-section section-newsletter text-center" dir="ltr">
        <div class="container">
            <h2>{{ __('Subscribe our newsletters') }}</h2>
            <form class="form-group newsletter-group">
                <input type="email" class="form-control" placeholder="{{ __('Your e-mail') }}" required>
                <button class="btn btn-green" type="button">{{ __('Subscribe') }}</button>
            </form><!-- /.newsletter-group -->
        </div>
    </section><!-- /.section-newsletter -->

</main><!-- /#main -->

@endsection
