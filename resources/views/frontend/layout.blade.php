<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
        @yield('title')
    </title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('frontend-assets/images/favicons/apple-touch-icon.png')}}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('frontend-assets/images/favicons/favicon-32x32.png')}}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('frontend-assets/images/favicons/favicon-16x16.png')}}" />
    <link rel="manifest" href="{{ asset('frontend-assets/images/favicons/site.webmanifest')}}" />
    <meta name="description" content="wishon HTML 5 Template " />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Kufi+Arabic:wght@100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('frontend-assets/vendors/bootstrap/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('frontend-assets/vendors/animate/animate.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('frontend-assets/vendors/animate/custom-animate.css')}}" />
    <link rel="stylesheet" href="{{ asset('frontend-assets/vendors/fontawesome/css/all.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('frontend-assets/vendors/jarallax/jarallax.css')}}" />
    <link rel="stylesheet" href="{{ asset('frontend-assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css')}}" />
    <link rel="stylesheet" href="{{ asset('frontend-assets/vendors/nouislider/nouislider.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('frontend-assets/vendors/nouislider/nouislider.pips.css')}}" />
    <link rel="stylesheet" href="{{ asset('frontend-assets/vendors/odometer/odometer.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('frontend-assets/vendors/swiper/swiper.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('frontend-assets/vendors/wishon-icons/style.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend-assets/vendors/tiny-slider/tiny-slider.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('frontend-assets/vendors/reey-font/stylesheet.css')}}" />
    <link rel="stylesheet" href="{{ asset('frontend-assets/vendors/owl-carousel/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('frontend-assets/vendors/owl-carousel/owl.theme.default.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('frontend-assets/vendors/bxslider/jquery.bxslider.css')}}" />
    <link rel="stylesheet" href="{{ asset('frontend-assets/vendors/bootstrap-select/css/bootstrap-select.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('frontend-assets/vendors/vegas/vegas.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('frontend-assets/vendors/jquery-ui/jquery-ui.css')}}" />
    <link rel="stylesheet" href="{{ asset('frontend-assets/vendors/timepicker/timePicker.css')}}" />

    <!-- template styles -->
    <link rel="stylesheet" href="{{ asset('frontend-assets/css/wishon-rtl.css')}}" />
    <link rel="stylesheet" href="{{ asset('frontend-assets/css/wishon-rtl-custom.css')}}" />
    <link rel="stylesheet" href="{{ asset('frontend-assets/css/wishon-responsive-rtl.css')}}" />
</head>

<body>



    <div class="preloader">
        <div class="preloader__image"></div>
    </div>
    <!-- /.preloader -->


    <div class="page-wrapper">
        <header class="main-header-four">
            <div class="main-header-four__top">
                <div class="main-header-four__top-wrapper">
                    <div class="container">
                        <div class="main-header-four__top-inner">
                            <div class="main-header-four__top-left">
                                <ul class="list-unstyled main-header-four__contact-list">
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-envelope-open"></i>
                                        </div>
                                        <div class="text">
                                            <p><a href="needhelp@company.com">needhelp@company.com</a></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-mobile"></i>
                                        </div>
                                        <div class="text">
                                            <p><a href="tel:13077760608">+ 1 (307) 776-0608</a></p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="main-header-four__top-right">
                                <ul class="list-unstyled main-header-four__login-reg">
                                    <li><a href="#">Login</a></li>
                                    <li><a href="#">Register</a></li>
                                </ul>
                                <div class="main-header-four__social">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-facebook"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <nav class="main-menu main-menu-four">
                <div class="main-menu-four__wrapper">
                    <div class="container">
                        <div class="main-menu-four__wrapper-inner">
                            <div class="main-menu-four__left">
                                <div class="main-menu-four__logo">
                                    <a href="index.html"><img src="{{ asset('frontend-assets/images/resources/logo-4.png')}}" alt=""></a>
                                </div>
                            </div>
                            <div class="main-menu-four__right">
                                <div class="main-menu-four__main-menu-box">
                                    <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                    <ul class="main-menu__list">
                                        <li class="dropdown">
                                            <a href="index.html">Home </a>
                                            <ul>
                                                <li><a href="index.html">Home One</a></li>
                                                <li><a href="index2.html">Home Two</a></li>
                                                <li><a href="index3.html">Home Three</a></li>
                                                <li><a href="index4.html">Home Four</a></li>
                                                <li><a href="index-rtl.html#googtrans(en%7Car)">Home RTL</a></li>
                                                <li class="dropdown">
                                                    <a href="#">Header Styles</a>
                                                    <ul>
                                                        <li><a href="index.html">Header One</a></li>
                                                        <li><a href="index2.html">Header Two</a></li>
                                                        <li><a href="index3.html">Header Three</a></li>
                                                        <li><a href="index4.html">Header Four</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#">Pages</a>
                                            <ul>
                                                <li><a href="about.html">About</a></li>
                                                <li><a href="volunteers.html">Volunteers</a></li>
                                                <li><a href="become-volunteer.html">Become A Volunteer</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#">Donations</a>
                                            <ul>
                                                <li><a href="causes.html">Causes</a></li>
                                                <li><a href="cause-details.html">Cause Details</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#">Events</a>
                                            <ul>
                                                <li><a href="events.html">Events</a></li>
                                                <li><a href="event-details.html">Event Details</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#">Blog</a>
                                            <ul>
                                                <li><a href="blog.html">Blog</a></li>
                                                <li><a href="blog-details.html">Blog Details</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="contact.html">Contact</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="main-menu-four__search-btn-box">
                                    <div class="main-menu-four__search-box">
                                        <a href="#"
                                            class="main-menu-four__search search-toggler icon-magnifying-glass"></a>
                                    </div>
                                    <div class="main-menu-four__btn-box">
                                        <a href="cause-details.html" class="thm-btn main-menu-four__btn">Donate Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

@yield('page-content')

<!--Site Footer Start-->
<footer class="site-footer">
    <div class="site-footer__shape-1 float-bob-y">
        <img src="{{ asset('frontend-assets/images/shapes/footer-shape-1.png')}}" alt="">
    </div>
    <div class="site-footer__shape-2 float-bob-x">
        <img src="{{ asset('frontend-assets/images/shapes/footer-shape-2.png')}}" alt="">
    </div>
    <div class="site-footer__top">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <div class="footer-widget__column footer-widget__about">
                        <p class="footer-widget__about-text">Phasellus enim libero, blandit vel sapien
                            vitae, condimentum ultricies magna et.</p>
                        <div class="footer-widget__about-btn-box">
                            <a href="cause-details.html" class="footer-widget__about-btn thm-btn">Donate Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                    <div class="footer-widget__links">
                        <div class="footer-widget__title-box">
                            <h4 class="footer-widget__title">Links</h4>
                        </div>
                        <div class="footer-widget__links-points-box">
                            <ul class="footer-widget__links-list list-unstyled">
                                <li><a href="cause-details.html">Recent Causes</a></li>
                                <li><a href="about.html">About us</a></li>
                                <li><a href="about.html">New Campaign</a></li>
                                <li><a href="about.html">Site Map</a></li>
                                <li><a href="events.html">Events</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                    <div class="footer-widget__non-profit">
                        <div class="footer-widget__title-box">
                            <h4 class="footer-widget__title">Non Profit</h4>
                        </div>
                        <ul class="footer-widget__non-profit-list list-unstyled">
                            <li><a href="about.html">Differently Abled Kids</a></li>
                            <li><a href="about.html">Help Child Cancer</a></li>
                            <li><a href="about.html">Clean Pure Water</a></li>
                            <li><a href="about.html">Give them Education</a></li>
                            <li><a href="about.html">Start a Fundraising</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                    <div class="footer-widget__contact">
                        <div class="footer-widget__title-box">
                            <h4 class="footer-widget__title">Contact</h4>
                        </div>
                        <ul class="list-unstyled footer-widget__contact-list">
                            <li>
                                <div class="icon">
                                    <i class="fas fa-envelope-open"></i>
                                </div>
                                <div class="text">
                                    <p><a href="mailto:needhelp@company.com ">needhelp@company.com</a></p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fas fa-mobile"></i>
                                </div>
                                <div class="text">
                                    <p><a href="tel:13077760608">+ 1 (307) 776-0608</a></p>
                                </div>
                            </li>
                        </ul>
                        <p class="footer-widget__contact-text">60 Broklyn Golden Street, New York
                            United States of America</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="site-footer__bottom">
                        <div class="site-footer__bottom-inner">
                            <p class="site-footer__bottom-text">© Copyright 2023by <a href="#">Company.com</a>
                            </p>
                            <div class="site-footer__social">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--Site Footer End-->


</div><!-- /.page-wrapper -->


<div class="mobile-nav__wrapper">
<div class="mobile-nav__overlay mobile-nav__toggler"></div>
<!-- /.mobile-nav__overlay -->
<div class="mobile-nav__content">
    <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

    <div class="logo-box">
        <a href="index.html" aria-label="logo image"><img src="{{ asset('frontend-assets/images/resources/logo-2.png')}}" width="145"
                alt="" /></a>
    </div>
    <!-- /.logo-box -->
    <div class="mobile-nav__container"></div>
    <!-- /.mobile-nav__container -->

    <ul class="mobile-nav__contact list-unstyled">
        <li>
            <i class="fa fa-envelope"></i>
            <a href="mailto:needhelp@packageName__.com">needhelp@wishon.com</a>
        </li>
        <li>
            <i class="fa fa-phone-alt"></i>
            <a href="tel:666-888-0000">666 888 0000</a>
        </li>
    </ul><!-- /.mobile-nav__contact -->
    <div class="mobile-nav__top">
        <div class="mobile-nav__social">
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-facebook-square"></a>
            <a href="#" class="fab fa-pinterest-p"></a>
            <a href="#" class="fab fa-instagram"></a>
        </div><!-- /.mobile-nav__social -->
    </div><!-- /.mobile-nav__top -->



</div>
<!-- /.mobile-nav__content -->
</div>
<!-- /.mobile-nav__wrapper -->

<div class="search-popup">
<div class="search-popup__overlay search-toggler"></div>
<!-- /.search-popup__overlay -->
<div class="search-popup__content">
    <form action="#">
        <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
        <input type="text" id="search" placeholder="Search Here..." />
        <button type="submit" aria-label="search submit" class="thm-btn">
            <i class="icon-magnifying-glass"></i>
        </button>
    </form>
</div>
<!-- /.search-popup__content -->
</div>
<!-- /.search-popup -->

<a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>


<script src="{{ asset('frontend-assets/vendors/jquery/jquery-3.6.0.min.js')}}"></script>
<script src="{{ asset('frontend-assets/vendors/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('frontend-assets/vendors/jarallax/jarallax.min.js')}}"></script>
<script src="{{ asset('frontend-assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js')}}"></script>
<script src="{{ asset('frontend-assets/vendors/jquery-appear/jquery.appear.min.js')}}"></script>
<script src="{{ asset('frontend-assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js')}}"></script>
<script src="{{ asset('frontend-assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js')}}"></script>
<script src="{{ asset('frontend-assets/vendors/jquery-validate/jquery.validate.min.js')}}"></script>
<script src="{{ asset('frontend-assets/vendors/nouislider/nouislider.min.js')}}"></script>
<script src="{{ asset('frontend-assets/vendors/odometer/odometer.min.js')}}"></script>
<script src="{{ asset('frontend-assets/vendors/swiper/swiper.min.js')}}"></script>
<script src="{{ asset('frontend-assets/vendors/tiny-slider/tiny-slider.min.js')}}"></script>
<script src="{{ asset('frontend-assets/vendors/wnumb/wNumb.min.js')}}"></script>
<script src="{{ asset('frontend-assets/vendors/wow/wow.js')}}"></script>
<script src="{{ asset('frontend-assets/vendors/isotope/isotope.js')}}"></script>
<script src="{{ asset('frontend-assets/vendors/countdown/countdown.min.js')}}"></script>
<script src="{{ asset('frontend-assets/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
<script src="{{ asset('frontend-assets/vendors/bxslider/jquery.bxslider.min.js')}}"></script>
<script src="{{ asset('frontend-assets/vendors/bootstrap-select/js/bootstrap-select.min.js')}}"></script>
<script src="{{ asset('frontend-assets/vendors/vegas/vegas.min.js')}}"></script>
<script src="{{ asset('frontend-assets/vendors/jquery-ui/jquery-ui.js')}}"></script>
<script src="{{ asset('frontend-assets/vendors/timepicker/timePicker.js')}}"></script>
<script src="{{ asset('frontend-assets/vendors/circleType/jquery.circleType.js')}}"></script>
<script src="{{ asset('frontend-assets/vendors/circleType/jquery.lettering.min.js')}}"></script>
<script src="{{ asset('frontend-assets/vendors/sidebar-content/jquery-sidebar-content.js')}}"></script>




<!-- template js -->
<script src="{{ asset('frontend-assets/js/wishon.js')}}"></script>
</body>

</html>