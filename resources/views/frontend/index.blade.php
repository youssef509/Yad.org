@extends('frontend.layout')
@section('title')
   Home
@endsection

@section('page-content')

        <!--Main Slider Start-->
        <section class="main-slider">
            <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
        "effect": "fade",
        "pagination": {
        "el": "#main-slider-pagination",
        "type": "bullets",
        "clickable": true
        },
        "navigation": {
        "nextEl": "#main-slider__swiper-button-next",
        "prevEl": "#main-slider__swiper-button-prev"
        },
        "autoplay": {
        "delay": 5000
        }}'>
                <div class="swiper-wrapper">
                    @foreach ($sliders as $slider)
                    <div class="swiper-slide">
                        <div class="image-layer"
                            style="background-image: url({{ $slider->image_url }})"></div>
                        <!-- /.image-layer -->
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider__content">
                                        <h2 class="main-slider__title">{{$slider->text_1}}</h2>
                                        <p class="main-slider__text">{{$slider->text_2}}</p>
                                        <div class="main-slider__btn-box">
                                            @if(!empty($slider->button1_text) && !empty($slider->button1_url))
                                                <a href="{{ $slider->button1_url }}" class="thm-btn main-slider__btn-one">{{ $slider->button1_text }}</a>
                                            @endif
                                            @if(!empty($slider->button2_text) && !empty($slider->button2_url))
                                                <a href="{{ $slider->button2_url }}" class="thm-btn main-slider__btn-two">{{ $slider->button2_text }}</a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>


                <!-- If we need navigation buttons -->
                <div class="main-slider__nav">
                   
                    <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                        <i class="icon-right-arrow"></i>
                    </div>
                    <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                        <i class="icon-left-arrow"></i>
                    </div>
                </div>

            </div>
        </section>
        <!--Main Slider End-->

        <!--Feature One Start-->
        <section class="feature-one">
            <div class="container">
                <div class="row">
                    <!--Feature One Single Start-->
                    <div class="col-xl-4 col-lg-4">
                        <div class="feature-one__single">
                            <div class="feature-one__img">
                                <img src="{{ asset('frontend-assets/images/resources/feature-1-1.jpg')}}" alt="">
                            </div>
                            <div class="feature-one__content">
                                <h3 class="feature-one__title"><a href="cause-details.html">Education
                                        <br> & Healthy Food</a></h3>
                                <p class="feature-one__text">When nothing prevents our and makers of natural and organic
                                    products to we best be.</p>
                            </div>
                            <div class="feature-one__arrow-box">
                                <a href="cause-details.html" class="feature-one__arrow"><i
                                        class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--Feature One Single End-->
                    <!--Feature One Single Start-->
                    <div class="col-xl-4 col-lg-4">
                        <div class="feature-one__single feature-one__single-2">
                            <div class="feature-one__img">
                                <img src="{{ asset('frontend-assets/images/resources/feature-1-2.jpg')}}" alt="">
                            </div>
                            <div class="feature-one__content">
                                <h3 class="feature-one__title"><a href="cause-details.html">Medical <br>
                                        & Treatment</a></h3>
                                <p class="feature-one__text">When nothing prevents our and makers of natural and organic
                                    products to we best be.</p>
                            </div>
                            <div class="feature-one__arrow-box">
                                <a href="cause-details.html" class="feature-one__arrow feature-one__arrow-2"><i
                                        class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--Feature One Single End-->
                    <!--Feature One Single Start-->
                    <div class="col-xl-4 col-lg-4">
                        <div class="feature-one__single feature-one__single-3">
                            <div class="feature-one__img">
                                <img src="{{ asset('frontend-assets/images/resources/feature-1-3.jpg')}}" alt="">
                            </div>
                            <div class="feature-one__content">
                                <h3 class="feature-one__title"><a href="cause-details.html">Help <br>
                                        & Donate</a></h3>
                                <p class="feature-one__text">When nothing prevents our and makers of natural and organic
                                    products to we best be.</p>
                            </div>
                            <div class="feature-one__arrow-box">
                                <a href="cause-details.html" class="feature-one__arrow feature-one__arrow-3"><i
                                        class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--Feature One Single End-->
                </div>
            </div>
        </section>
        <!--Feature One End-->
        @foreach ($HomeAboutall as $HomeAbout)
        <!--About One Start-->
        <section class="about-one">
            <div class="about-one__shape-2 float-bob-y">
                <img src="{{ asset('frontend-assets/images/shapes/about-one-shape-2.png')}}" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="about-one__left">
                            <div class="about-one__img-box wow slideInLeft" data-wow-delay="100ms"
                                data-wow-duration="2500ms">
                                <div class="about-one__img">
                                    <img src="{{ asset('uploads/homeabout/' . $HomeAbout->image1) }}" alt="">
                                </div>
                                @if(!empty($HomeAbout->image2))
                                <div class="about-one__img-2">
                                    <img src="{{ asset('uploads/homeabout/' . $HomeAbout->image2) }}" alt="">
                                </div>
                                @endif
                                <div class="about-one__shape-1 float-bob-x"></div>
                                @if(!empty($HomeAbout->video_url))
                                <div class="about-one__video-link">
                                    <a href="{{$HomeAbout->video_url}}" class="video-popup">
                                        <div class="about-one__video-icon">
                                            <span class="fa fa-play"></span>
                                            <i class="ripple"></i>
                                        </div>
                                    </a>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="about-one__right">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">{{$HomeAbout->title1}}</span>
                                <h2 class="section-title__title">{{$HomeAbout->title2}}</h2>
                            </div>
                            <p class="about-one__text">{{$HomeAbout->text1}}.</p>
                            <div class="about-one__text-box">
                                <p class="about-one__text-2">{{$HomeAbout->text2}}</p>
                            </div>
                            <ul class="about-one__points list-unstyled">
                                <li>
                                    <div class="about-one__points-icon-box">
                                        <div class="icon">
                                            <span class="fa fa-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>Our Mission</p>
                                        </div>
                                    </div>
                                    <p class="about-one__points-text-2">{{$HomeAbout->our_vision}}</p>
                                </li>
                                <li>
                                    <div class="about-one__points-icon-box">
                                        <div class="icon">
                                            <span class="fa fa-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>Our Story</p>
                                        </div>
                                    </div>
                                    <p class="about-one__points-text-2">{{$HomeAbout->our_messege}}</p>
                                </li>
                            </ul>
                            <div class="about-one__btn-box">
                                <a href="{{$HomeAbout->button_url}}" class="about-one__btn thm-btn">{{$HomeAbout->button_text}}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--About One End-->
        @endforeach
        <!--Counter One Start-->
        <section class="counter-one">
            <div class="counter-one__bg"
                style="background-image: url({{ asset('frontend-assets/images/backgrounds/counter-one-bg-img.png);')}}"></div>
            <div class="container">
                <div class="row">
                    <!--Counter One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="counter-one__single">
                            <div class="counter-one__icon-box">
                                <div class="counter-one__shape-1">
                                    <img src="{{ asset('frontend-assets/images/shapes/counter-one-shape-1.png')}}" alt="">
                                </div>
                                <div class="counter-one__icon">
                                    <span class="icon-campaign"></span>
                                </div>
                            </div>
                            <div class="counter-one__count-box">
                                <h3 class="odometer" data-count="68">00</h3>
                                <span class="counter-one__letter">m</span>
                                <p class="counter-one__text">Total Donations</p>
                            </div>
                        </div>
                    </div>
                    <!--Counter One Single End-->
                    <!--Counter One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="counter-one__single counter-one__single-2">
                            <div class="counter-one__icon-box">
                                <div class="counter-one__shape-1">
                                    <img src="{{ asset('frontend-assets/images/shapes/counter-one-shape-2.png')}}" alt="">
                                </div>
                                <div class="counter-one__icon">
                                    <span class="icon-budget"></span>
                                </div>
                            </div>
                            <div class="counter-one__count-box">
                                <h3 class="odometer" data-count="46">00</h3>
                                <span class="counter-one__letter">k</span>
                                <p class="counter-one__text">Projects Funded</p>
                            </div>
                        </div>
                    </div>
                    <!--Counter One Single End-->
                    <!--Counter One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                        <div class="counter-one__single counter-one__single-3">
                            <div class="counter-one__icon-box">
                                <div class="counter-one__shape-1">
                                    <img src="{{ asset('frontend-assets/images/shapes/counter-one-shape-3.png')}}" alt="">
                                </div>
                                <div class="counter-one__icon">
                                    <span class="icon-social-campaign"></span>
                                </div>
                            </div>
                            <div class="counter-one__count-box">
                                <h3 class="odometer" data-count="38">00</h3>
                                <span class="counter-one__letter">k</span>
                                <p class="counter-one__text">Satisfied Donors</p>
                            </div>
                        </div>
                    </div>
                    <!--Counter One Single End-->
                    <!--Counter One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                        <div class="counter-one__single counter-one__single-4">
                            <div class="counter-one__icon-box">
                                <div class="counter-one__shape-1">
                                    <img src="{{ asset('frontend-assets/images/shapes/counter-one-shape-4.png')}}" alt="">
                                </div>
                                <div class="counter-one__icon">
                                    <span class="icon-help"></span>
                                </div>
                            </div>
                            <div class="counter-one__count-box">
                                <h3 class="odometer" data-count="230">00</h3>
                                <p class="counter-one__text">Our Volunteers</p>
                            </div>
                        </div>
                    </div>
                    <!--Counter One Single End-->
                </div>
            </div>
        </section>
        <!--Counter One End-->

        <!--Fundraising One Start-->
        <section class="fundraising-one">
            <div class="fundraising-one__bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
                style="background-image: url({{ asset('frontend-assets/images/backgrounds/fundraising-one-bg-img.jpg);')}}"></div>
            <div class="container">
                <div class="fundraising-one__inner">
                    <p class="fundraising-one__sub-title">We’re here to support poor people</p>
                    <h3 class="fundraising-one__title">Fundraising for the People and
                        <br> Causes you <span>Care</span> About</h3>
                    <div class="fundraising-one__btn-box">
                        <a href="cause-details.html" class="fundraising-one__btn thm-btn">Start donating them</a>
                    </div>
                </div>
            </div>
        </section>
        <!--Fundraising One End-->

        

        <!--Causes One Start-->
        <section class="causes-one">
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">Start Donating them</span>
                    <h2 class="section-title__title">Find Popular Causes</h2>
                </div>
                <div class="row">
                    <!--Causes One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <div class="causes-one__single">
                            <div class="causes-one__img-box">
                                <div class="causes-one__img">
                                    <img src="{{ asset('frontend-assets/images/causes/causes-1-1.jpg')}}" alt="">
                                </div>
                                <div class="causes-one__category">
                                    <span>Medical</span>
                                </div>
                                <div class="causes-one__border-box"></div>
                            </div>
                            <div class="causes-one__content">
                                <div class="causes-one__title-box">
                                    <h3 class="causes-one__title"><a href="cause-details.html">Your little help can heal
                                            their pains</a></h3>
                                    <p class="causes-one__text">Aellentesque porttitor lacus quis enim varius sed
                                        efficitur...</p>
                                </div>
                                <div class="causes-one__progress-box">
                                    <div class="progress-levels">
                                        <!--Skill Box-->
                                        <div class="progress-box">
                                            <div class="inner count-box">
                                                <div class="bar">
                                                    <div class="bar-innner">
                                                        <div class="skill-percent">
                                                            <span class="count-text" data-speed="3000"
                                                                data-stop="19">0</span>
                                                            <span class="percent">%</span>
                                                        </div>
                                                        <div class="bar-fill" data-percent="19"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="causes-one__goals-box">
                                    <div class="causes-one__goals-left">
                                        <p><span>$25,270</span> Raised</p>
                                        <p><span>$30,000</span> Goal</p>
                                    </div>
                                    <div class="causes-one__goals-right">
                                        <p>Pledge so far</p>
                                    </div>
                                </div>
                                <div class="causes-one__btn-box">
                                    <a href="cause-details.html" class="causes-one__btn thm-btn">Donate now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Causes One Single End-->
                    <!--Causes One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                        <div class="causes-one__single">
                            <div class="causes-one__img-box">
                                <div class="causes-one__img">
                                    <img src="{{ asset('frontend-assets/images/causes/causes-1-2.jpg')}}" alt="">
                                </div>
                                <div class="causes-one__category">
                                    <span>Education</span>
                                </div>
                                <div class="causes-one__border-box"></div>
                            </div>
                            <div class="causes-one__content">
                                <div class="causes-one__title-box">
                                    <h3 class="causes-one__title"><a href="cause-details.html">Give african childrens a
                                            good education</a></h3>
                                    <p class="causes-one__text">Aellentesque porttitor lacus quis enim varius sed
                                        efficitur...</p>
                                </div>
                                <div class="causes-one__progress-box">
                                    <div class="progress-levels">
                                        <!--Skill Box-->
                                        <div class="progress-box">
                                            <div class="inner count-box">
                                                <div class="bar">
                                                    <div class="bar-innner">
                                                        <div class="skill-percent">
                                                            <span class="count-text" data-speed="3000"
                                                                data-stop="19">0</span>
                                                            <span class="percent">%</span>
                                                        </div>
                                                        <div class="bar-fill" data-percent="19"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="causes-one__goals-box">
                                    <div class="causes-one__goals-left">
                                        <p><span>$25,270</span> Raised</p>
                                        <p><span>$30,000</span> Goal</p>
                                    </div>
                                    <div class="causes-one__goals-right">
                                        <p>Pledge so far</p>
                                    </div>
                                </div>
                                <div class="causes-one__btn-box">
                                    <a href="cause-details.html" class="causes-one__btn thm-btn">Donate now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Causes One Single End-->
                    <!--Causes One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                        <div class="causes-one__single">
                            <div class="causes-one__img-box">
                                <div class="causes-one__img">
                                    <img src="{{ asset('frontend-assets/images/causes/causes-1-3.jpg')}}" alt="">
                                </div>
                                <div class="causes-one__category">
                                    <span>Food</span>
                                </div>
                                <div class="causes-one__border-box"></div>
                            </div>
                            <div class="causes-one__content">
                                <div class="causes-one__title-box">
                                    <h3 class="causes-one__title"><a href="cause-details.html">Raise funds for clean &
                                            healthy food</a></h3>
                                    <p class="causes-one__text">Aellentesque porttitor lacus quis enim varius sed
                                        efficitur...</p>
                                </div>
                                <div class="causes-one__progress-box">
                                    <div class="progress-levels">
                                        <!--Skill Box-->
                                        <div class="progress-box">
                                            <div class="inner count-box">
                                                <div class="bar">
                                                    <div class="bar-innner">
                                                        <div class="skill-percent">
                                                            <span class="count-text" data-speed="3000"
                                                                data-stop="19">0</span>
                                                            <span class="percent">%</span>
                                                        </div>
                                                        <div class="bar-fill" data-percent="19"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="causes-one__goals-box">
                                    <div class="causes-one__goals-left">
                                        <p><span>$25,270</span> Raised</p>
                                        <p><span>$30,000</span> Goal</p>
                                    </div>
                                    <div class="causes-one__goals-right">
                                        <p>Pledge so far</p>
                                    </div>
                                </div>
                                <div class="causes-one__btn-box">
                                    <a href="cause-details.html" class="causes-one__btn thm-btn">Donate now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Causes One Single End-->
                </div>
            </div>
        </section>
        <!--Causes One End-->

        <!--Donate One Start-->
        <section class="donate-one">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="donate-one__left">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">Help us Donate</span>
                                <h2 class="section-title__title">Start Donating</h2>
                            </div>
                            <div class="donate-one__shape-1 float-bob-x">
                                <img src="{{ asset('frontend-assets/images/shapes/donate-one-shape-1.png')}}" alt="">
                            </div>
                            <form action="{{ asset('frontend-assets/inc/sendemail.php')}}"
                                class="contact-form-box__form contact-form-validated" novalidate="novalidate">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="contact-form-box__input-box">
                                            <input type="text" placeholder="Value" name="name">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="contact-form-box__input-box">
                                            <input type="email" placeholder="Your Name" name="email">
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12">
                                        <div class="contact-form-box__input-box">
                                            <input type="text" placeholder="Email Address" name="phone">
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12">
                                        <div class="contact-form-box__input-box text-message-box">
                                            <textarea name="message" placeholder="Write a Message"></textarea>
                                        </div>
                                        <div class="contact-form-box__btn-box">
                                            <button type="submit" class="thm-btn contact-form-box__btn">Send a
                                                message</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="result"></div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="donate-one__right">
                            <div class="donate-one__img">
                                <img src="{{ asset('frontend-assets/images/resources/donate-one-img-1.jpg')}}" alt="">
                            </div>
                            <ul class="donate-one__contact list-unstyled">
                                <li>
                                    <div class="icon">
                                        <span class="fas fa-envelope-open"></span>
                                    </div>
                                    <div class="content">
                                        <p><a href="mailto:needhelp@company.com">needhelp@company.com</a></p>
                                        <p><a href="tel:8800761610">(+88) 00 76 16
                                                10</a></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fas fa-map"></span>
                                    </div>
                                    <div class="content">
                                        <p>Suite 80 Golden Street Line
                                            <br> New York, USA</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Donate One End-->

       

        <!--Brand One Start-->
        <section class="brand-one">
            <div class="brand-one__shape-1" style="background-image: url({{ asset('frontend-assets/images/shapes/brand-one-shape-1.png);')}}">
            </div>
            <div class="container">
                <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 100,
                "slidesPerView": 5,
                "loop": true,
                "navigation": {
                    "nextEl": "#brand-one__swiper-button-next",
                    "prevEl": "#brand-one__swiper-button-prev"
                },
                "autoplay": { "delay": 5000 },
                "breakpoints": {
                    "0": {
                        "spaceBetween": 30,
                        "slidesPerView": 2
                    },
                    "375": {
                        "spaceBetween": 30,
                        "slidesPerView": 2
                    },
                    "575": {
                        "spaceBetween": 30,
                        "slidesPerView": 3
                    },
                    "767": {
                        "spaceBetween": 50,
                        "slidesPerView": 4
                    },
                    "991": {
                        "spaceBetween": 50,
                        "slidesPerView": 5
                    },
                    "1199": {
                        "spaceBetween": 100,
                        "slidesPerView": 5
                    }
                }}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="{{ asset('frontend-assets/images/brand/brand-1-1.png')}}" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="{{ asset('frontend-assets/images/brand/brand-1-2.png')}}" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="{{ asset('frontend-assets/images/brand/brand-1-3.png')}}" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="{{ asset('frontend-assets/images/brand/brand-1-4.png')}}" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="{{ asset('frontend-assets/images/brand/brand-1-5.png')}}" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="{{ asset('frontend-assets/images/brand/brand-1-1.png')}}" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="{{ asset('frontend-assets/images/brand/brand-1-2.png')}}" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="{{ asset('frontend-assets/images/brand/brand-1-3.png')}}" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="{{ asset('frontend-assets/images/brand/brand-1-4.png')}}" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="{{ asset('frontend-assets/images/brand/brand-1-5.png')}}" alt="">
                        </div><!-- /.swiper-slide -->
                    </div>
                </div>
            </div>
        </section>
        <!--Brand One End-->
        <br>
        <!--Gallery one Start-->
        <section class="gallery-one">
            <div class="container">
                <div class="gallery-one__carousel thm-owl__carousel owl-theme owl-carousel" data-owl-options='{
                    "items": 5,
                    "margin": 30,
                    "smartSpeed": 700,
                    "loop":true,
                    "autoplay": true,
                    "nav":false,
                    "dots":false,
                    "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"],
                    "responsive":{
                        "0":{
                            "items":1
                        },
                        "768":{
                            "items":2
                        },
                        "992":{
                            "items": 4
                        },
                        "1200":{
                            "items": 5
                        }
                    }
                }'>
                    <!--Gallery one Single Start-->
                    <div class="item">
                        <div class="gallery-one__single">
                            <div class="gallery-one__img">
                                <img src="{{ asset('frontend-assets/images/gallery/gallery-1-1.jpg')}}" alt="">
                                <div class="gallery-one__img-icon">
                                    <a href="#"><span class="fab fa-instagram"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Gallery one Single End-->
                    <!--Gallery one Single Start-->
                    <div class="item">
                        <div class="gallery-one__single">
                            <div class="gallery-one__img">
                                <img src="{{ asset('frontend-assets/images/gallery/gallery-1-2.jpg')}}" alt="">
                                <div class="gallery-one__img-icon">
                                    <a href="#"><span class="fab fa-instagram"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Gallery one Single End-->
                    <!--Gallery one Single Start-->
                    <div class="item">
                        <div class="gallery-one__single">
                            <div class="gallery-one__img">
                                <img src="{{ asset('frontend-assets/images/gallery/gallery-1-3.jpg')}}" alt="">
                                <div class="gallery-one__img-icon">
                                    <a href="#"><span class="fab fa-instagram"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Gallery one Single End-->
                    <!--Gallery one Single Start-->
                    <div class="item">
                        <div class="gallery-one__single">
                            <div class="gallery-one__img">
                                <img src="{{ asset('frontend-assets/images/gallery/gallery-1-4.jpg')}}" alt="">
                                <div class="gallery-one__img-icon">
                                    <a href="#"><span class="fab fa-instagram"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Gallery one Single End-->
                    <!--Gallery one Single Start-->
                    <div class="item">
                        <div class="gallery-one__single">
                            <div class="gallery-one__img">
                                <img src="{{ asset('frontend-assets/images/gallery/gallery-1-5.jpg')}}" alt="">
                                <div class="gallery-one__img-icon">
                                    <a href="#"><span class="fab fa-instagram"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Gallery one Single End-->
                </div>
            </div>
        </section>
        <!--Gallery one End-->
@endsection