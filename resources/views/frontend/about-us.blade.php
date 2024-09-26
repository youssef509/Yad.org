@extends('frontend.layout')
@section('title')
    About Us
@endsection
@section('page-content')
    <!--About Three Start-->
    <section class="about-three">
        <div class="about-three__shape-1 float-bob-x">
            <img src="{{ asset('frontend-assets/images/shapes/about-three-shape-1.png')}}" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="about-three__left">
                        <div class="section-title text-left">
                            <span class="section-title__tagline">About us</span>
                            <h2 class="section-title__title">Get to Know About Charity Organization</h2>
                        </div>
                        <p class="about-three__text">Lorem ipsum dolor sit amet, consectetur adipisicing sed
                            deiusmod tempor incididunt ut labore et dolore magna aliqua. Donec scelerisque dolor id
                            nunc dictum.</p>
                        <div class="about-three__progress">
                            <div class="about-three__progress-single">
                                <h4 class="about-three__progress-title">Charity</h4>
                                <div class="bar">
                                    <div class="bar-inner count-bar" data-percent="76%">
                                        <div class="count-text">76%</div>
                                    </div>
                                </div>
                            </div>
                            <div class="about-three__progress-single">
                                <h4 class="about-three__progress-title">Funding</h4>
                                <div class="bar marb-0">
                                    <div class="bar-inner count-bar" data-percent="48%">
                                        <div class="count-text">48%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="about-three__person-details">
                            <div class="about-three__person-contact">
                                <p class="about-three__person-contact-sub-title">Call Anytime</p>
                                <h4 class="about-three__person-contact-number"><a href="tel:92246333-008">+92 (246)
                                        333-008</a></h4>
                            </div>
                            <div class="about-three__person">
                                <div class="about-three__person-img">
                                    <img src="{{ asset('frontend-assets/images/resources/about-three-person-img.jpg')}}" alt="">
                                    <div class="about-three__person-shape-1">
                                        <img src="{{ asset('frontend-assets/images/shapes/about-three-person-shape-1.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="about-three__person-content">
                                    <h3 class="about-three__person-name">Kevin Martin</h3>
                                    <p class="about-three__person-sub-title">Co Founder</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="about-three__right">
                        <div class="about-three__img">
                            <img src="{{ asset('frontend-assets/images/resources/about-three-img-1.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About Three End-->
     <!--Counter Two Start-->
     <section class="counter-two">
        <div class="container">
            <ul class="list-unstyled counter-two__list">
                <li>
                    <div class="counter-two__single">
                        <div class="counter-two__icon">
                            <span class="icon-campaign"></span>
                        </div>
                        <div class="counter-two__content">
                            <h3 class="odometer" data-count="68">00</h3>
                            <span class="counter-two__letter">m</span>
                            <p class="counter-two__text">Total Donations</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="counter-two__single">
                        <div class="counter-two__icon">
                            <span class="icon-budget"></span>
                        </div>
                        <div class="counter-two__content">
                            <h3 class="odometer" data-count="46">00</h3>
                            <span class="counter-two__letter">k</span>
                            <p class="counter-two__text">Projects Funded</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="counter-two__single">
                        <div class="counter-two__icon">
                            <span class="icon-social-campaign"></span>
                        </div>
                        <div class="counter-two__content">
                            <h3 class="odometer" data-count="38">00</h3>
                            <span class="counter-two__letter">m</span>
                            <p class="counter-two__text">Satisfied Donors</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="counter-two__single">
                        <div class="counter-two__icon">
                            <span class="icon-help"></span>
                        </div>
                        <div class="counter-two__content">
                            <h3 class="odometer" data-count="230">00</h3>
                            <p class="counter-two__text">Our Volunteers</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!--Counter Two End-->
     <!--Fundraising One Start-->
     <section class="fundraising-one fundraising-three">
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
    <!--FAQ One Start-->
    <section class="faq-one">
        <div class="faq-one__bg" style="background-image: url({{ asset('frontend-assets/images/backgrounds/faq-one-bg-img.png);')}}"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-5">
                    <div class="faq-one__left">
                        <div class="faq-one__img-box">
                            <div class="faq-one__img">
                                <img src="{{ asset('frontend-assets/images/resources/faq-one-img-1.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7">
                    <div class="faq-one__right">
                        <div class="section-title text-left">
                            <span class="section-title__tagline">Frequently Asked Questions</span>
                            <h2 class="section-title__title">Have any Question?</h2>
                        </div>
                        <div class="faq-one__single">
                            <div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion-1">
                                <div class="accrodion">
                                    <div class="accrodion-title">
                                        <h4>How to donate anonymously to cause?</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>Suspendisse finibus urna mauris, vitae free text consequat quam vel.
                                                Vestibulum leo ligula, vitae commodo nisl.</p>
                                        </div><!-- /.inner -->
                                    </div>
                                </div>
                                <div class="accrodion active">
                                    <div class="accrodion-title">
                                        <h4>How to become a volunteer?</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>Suspendisse finibus urna mauris, vitae free text consequat quam vel.
                                                Vestibulum leo ligula, vitae commodo nisl.</p>
                                        </div><!-- /.inner -->
                                    </div>
                                </div>
                                <div class="accrodion">
                                    <div class="accrodion-title">
                                        <h4>Will they charge monthly or anualy?</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>Suspendisse finibus urna mauris, vitae free text consequat quam vel.
                                                Vestibulum leo ligula, vitae commodo nisl.</p>
                                        </div><!-- /.inner -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--FAQ One End-->
    <!--Team Two Start-->
    <section class="team-two">
        <div class="container">
            <div class="section-title text-center">
                <span class="section-title__tagline">Join Our Team</span>
                <h2 class="section-title__title">Meet Volunteers</h2>
            </div>
            <div class="row">
                <!--Team One Single Start-->
                <div class="col-xl-4 wow fadeInUp" data-wow-delay="100ms">
                    <div class="team-one__single">
                        <div class="team-one__img-box">
                            <div class="team-one__img">
                                <img src="{{ asset('frontend-assets/images/team/team-1-1.jpg')}}" alt="">
                            </div>
                            <div class="team-one__shape-1">
                                <img src="{{ asset('frontend-assets/images/shapes/team-one-shape-1.png')}}" alt="">
                            </div>
                            <div class="team-one__shape-2">
                                <img src="{{ asset('frontend-assets/images/shapes/team-one-shape-2.png')}}" alt="">
                            </div>
                        </div>
                        <div class="team-one__content">
                            <h3 class="team-one__name"><a href="volunteers.html">Kevin Martin</a></h3>
                            <p class="team-one__sub-title">Volunteer</p>
                            <div class="team-one__social">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Team One Single End-->
                <!--Team One Single Start-->
                <div class="col-xl-4 wow fadeInUp" data-wow-delay="200ms">
                    <div class="team-one__single">
                        <div class="team-one__img-box">
                            <div class="team-one__img">
                                <img src="{{ asset('frontend-assets/images/team/team-1-2.jpg')}}" alt="">
                            </div>
                            <div class="team-one__shape-1">
                                <img src="{{ asset('frontend-assets/images/shapes/team-one-shape-1.png')}}" alt="">
                            </div>
                            <div class="team-one__shape-2">
                                <img src="{{ asset('frontend-assets/images/shapes/team-one-shape-2.png')}}" alt="">
                            </div>
                        </div>
                        <div class="team-one__content">
                            <h3 class="team-one__name"><a href="volunteers.html">Aleesha Brown</a></h3>
                            <p class="team-one__sub-title">Volunteer</p>
                            <div class="team-one__social">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Team One Single End-->
                <!--Team One Single Start-->
                <div class="col-xl-4 wow fadeInUp" data-wow-delay="300ms">
                    <div class="team-one__single">
                        <div class="team-one__img-box">
                            <div class="team-one__img">
                                <img src="{{ asset('frontend-assets/images/team/team-1-3.jpg')}}" alt="">
                            </div>
                            <div class="team-one__shape-1">
                                <img src="{{ asset('frontend-assets/images/shapes/team-one-shape-1.png')}}" alt="">
                            </div>
                            <div class="team-one__shape-2">
                                <img src="{{ asset('frontend-assets/images/shapes/team-one-shape-2.png')}}" alt="">
                            </div>
                        </div>
                        <div class="team-one__content">
                            <h3 class="team-one__name"><a href="volunteers.html">David Cooper</a></h3>
                            <p class="team-one__sub-title">Volunteer</p>
                            <div class="team-one__social">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Team One Single End-->
            </div>
        </div>
    </section>
    <!--Team Two End-->
     <!--Brand Two Start-->
     <section class="brand-four">
        <div class="container">
            <div class="brand-four__inner">
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
                            <img src="{{ asset('frontend-assets/images/brand/brand-2-1.png')}}" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="{{ asset('frontend-assets/images/brand/brand-2-2.png')}}" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="{{ asset('frontend-assets/images/brand/brand-2-3.png')}}" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="{{ asset('frontend-assets/images/brand/brand-2-4.png')}}" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="{{ asset('frontend-assets/images/brand/brand-2-5.png')}}" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="{{ asset('frontend-assets/images/brand/brand-2-1.png')}}" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="{{ asset('frontend-assets/images/brand/brand-2-2.png')}}" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="{{ asset('frontend-assets/images/brand/brand-2-3.png')}}" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="{{ asset('frontend-assets/images/brand/brand-2-4.png')}}" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="{{ asset('frontend-assets/images/brand/brand-2-5.png')}}" alt="">
                        </div><!-- /.swiper-slide -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Brand Two End-->
@endsection