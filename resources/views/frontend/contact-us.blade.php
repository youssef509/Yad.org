@extends('frontend.layout')
@section('title')
    Conatct Us
@endsection
@section('page-content')
<!--Page Header Start-->
        <section class="page-header">
            <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg)">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="index.html">Home</a></li>
                        <li><span>/</span></li>
                        <li>Contact</li>
                    </ul>
                    <h2>Contact</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->
        <!--Google Map Start-->
        <section class="google-map-two">
            <div class="container">
                <div class="google-map-two__box">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd"
                        class="google-map-two__map" allowfullscreen></iframe>
                </div>
                <div class="google-map-two__bottom">
                    <ul class="google-map-two__bottom-list list-unstyled">
                        <li>
                            <div class="icon">
                                <span class="fas fa-envelope-open"></span>
                            </div>
                            <div class="content">
                                <p><a href="mailto:needhelp@company.com">needhelp@company.com</a></p>
                                <p><a href="mailto:info@company.com">info@company.com</a></p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="fas fa-phone"></span>
                            </div>
                            <div class="content">
                                <p><a href="tel:92307760600">+92 (307) 776-0600</a></p>
                                <p><a href="tel:008800680">(+88) 00 76 16
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
        </section>
        <!--Google Map End-->
        <!--Contact One Start-->
        <section class="contact-page-form">
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">Contact With us</span>
                    <h2 class="section-title__title">Leave a Message</h2>
                </div>
                <form action="assets/inc/sendemail.php" class="contact-page-form__form-box contact-form-validated"
                    novalidate="novalidate">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="contact-page-form__input-box">
                                <input type="text" placeholder="Your Name" name="name">
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="contact-page-form__input-box">
                                <input type="email" placeholder="Email Address" name="email">
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="contact-page-form__input-box">
                                <input type="text" placeholder="Phone" name="Phone">
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="contact-page-form__input-box">
                                <input type="text" placeholder="Subject" name="Subject">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="contact-page-form__input-box text-message-box">
                                <textarea name="message" placeholder="Write a Message"></textarea>
                            </div>
                            <div class="contact-page-form__btn-box">
                                <button type="submit" class="thm-btn contact-page-form__btn">Send a message</button>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="result"></div>
            </div>
        </section>
        <!--Contact One End-->
@endsection