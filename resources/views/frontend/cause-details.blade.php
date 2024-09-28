@extends('frontend.layout')

@section('title')
    Cause Detail
@endsection

@section('page-content')
        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->


        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header-bg" style="background-image: url({{ asset('frontend-assets/images/backgrounds/page-header-bg.jpg)')}}">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="index.html">Home</a></li>
                        <li><span>/</span></li>
                        <li>Donations</li>
                    </ul>
                    <h2>Cause Details</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->
         <!--Cause Details Start-->
         <section class="cause-details">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <div class="cause-details__left">
                            <div class="cause-details__top">
                                <div class="cause-details__img-box">
                                    <div class="cause-details__img">
                                        <img src="{{ asset('frontend-assets/images/causes/cause-details-img-1.jpg')}}" alt="">
                                    </div>
                                    <div class="causes-one__category">
                                        <span>Medical</span>
                                    </div>
                                </div>
                                <div class="cause-details__content">
                                    <div class="cause-details__progress-box">
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
                                    <div class="cause-details__goals-box">
                                        <div class="cause-details__goals-left">
                                            <p><span>$25,270</span> Raised</p>
                                            <p><span>$30,000</span> Goal</p>
                                        </div>
                                        <div class="cause-details__goals-right">
                                            <p>Pledge so far</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h3 class="cause-details__title-1">Give african childrens a good education</h3>
                            <p class="cause-details__text-1">There are many variations of passages of Lorem Ipsum
                                available, but the majority have suffered alteration in some form, by injected humour,
                                or randomised words which don't look even slightly believable. If you are going to use a
                                passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in
                                the middle of text.</p>
                            <p class="cause-details__text-2">Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since
                                the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
                                specimen book. It has survived not only five centuries, but also the leap into
                                electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
                                with the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                                with desktop publishing software like. Lorem Ipsum is simply dummy text of the printing
                                and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
                                since the 1500s, when an unknown printer took a galley of type and scrambled it to make
                                a type specimen book.</p>
                            <h3 class="cause-details__title-2">Summary</h3>
                            <p class="cause-details__text-3">Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since
                                the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
                                specimen book. It has survived not only five centuries, but also the leap into
                                electronic typesetting, remaining essentially unchanged.</p>
                            <ul class="cause-details__points list-unstyled">
                                <li>
                                    <div class="icon">
                                        <span class="fa fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>Making this first true generator lorem</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fa fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>Many desktop publish packages is not simply</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fa fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>If you are going to passage has roots in a piece</p>
                                    </div>
                                </li>
                            </ul>
                            <p class="cause-details__text-4">It was popularised in the 1960s with the release of
                                Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                                publishing software like. Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry.</p>
                            <div class="cause-details__img-box-two">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="cause-details__img-box-two-img">
                                            <img src="{{ asset('frontend-assets/images/causes/cause-details-img-2.jpg')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="cause-details__img-box-two-img">
                                            <img src="{{ asset('frontend-assets/images/causes/cause-details-img-3.jpg')}}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cause-details__btn-and-social">
                                <div class="cause-details__btn-box">
                                    <a href="cause-details.html" class="cause-details__btn thm-btn">Donate us now</a>
                                </div>
                                <div class="cause-details__social">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-facebook"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="cause-details__documents">
                                <div class="cause-details__documents-icon-box">
                                    <div class="cause-details__documents-icon">
                                        <span class="icon-checked"></span>
                                    </div>
                                    <h3 class="cause-details__documents-text">Our Presentation</h3>
                                </div>
                                <div class="cause-details__documents-btn-box">
                                    <a href="cause-details.html" class="cause-details__documents-btn thm-btn">Download
                                        now</a>
                                </div>
                            </div>
                            <div class="comment-one">
                                <h3 class="comment-one__title">2 Comments</h3>
                                <div class="comment-one__single">
                                    <div class="comment-one__image">
                                        <img src="{{ asset('frontend-assets/images/blog/comment-1-1.jpg')}}" alt="">
                                    </div>
                                    <div class="comment-one__content">
                                        <h3>Kevin Martin</h3>
                                        <p>It has survived not only five centuries, but also the leap into
                                            electronic typesetting unchanged. It was popularised in the sheets
                                            containing lorem ipsum is simply free text.</p>
                                        <a href="blog-details.html" class="thm-btn comment-one__btn">Reply</a>
                                    </div>
                                </div>
                                <div class="comment-one__single">
                                    <div class="comment-one__image">
                                        <img src="{{ asset('frontend-assets/images/blog/comment-1-2.jpg')}}" alt="">
                                    </div>
                                    <div class="comment-one__content">
                                        <h3>Jessica Brown</h3>
                                        <p>It has survived not only five centuries, but also the leap into
                                            electronic typesetting unchanged. It was popularised in the sheets
                                            containing lorem ipsum is simply free text.</p>
                                        <a href="blog-details.html" class="thm-btn comment-one__btn">Reply</a>
                                    </div>
                                </div>
                            </div>
                            <div class="comment-form">
                                <h3 class="comment-form__title">Leave a Comment</h3>
                                <form action="{{ asset('frontend-assets/inc/sendemail.php')}}" class="comment-one__form contact-form-validated"
                                    novalidate="novalidate">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="comment-form__input-box">
                                                <input type="text" placeholder="Your Name" name="name">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="comment-form__input-box">
                                                <input type="email" placeholder="Email Address" name="email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="comment-form__input-box text-message-box">
                                                <textarea name="message" placeholder="Write a Comment"></textarea>
                                            </div>
                                            <div class="comment-form__btn-box">
                                                <button type="submit" class="thm-btn comment-form__btn">Submit
                                                    comment</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div class="result"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="cause-details__sidebar">
                            <div class="cause-details__organizer cause-details__sidebar-single">
                                <div class="cause-details__organizer-img">
                                    <img src="{{ asset('frontend-assets/images/causes/cause-details-organizer-img.jpg')}}" alt="">
                                </div>
                                <div class="cause-details__organizer-content">
                                    <p class="cause-details__organizer-date">Created 20 Dec, 2022</p>
                                    <p class="cause-details__organizer-title">Organizer:<span>Jessica Brown</span></p>
                                    <ul class="list-unstyled cause-details__organizer-list">
                                        <li>
                                            <div class="icon">
                                                <span class="fas fa-tag"></span>
                                            </div>
                                            <div class="text">
                                                <p>Health</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="fas fa-map-marker-alt"></span>
                                            </div>
                                            <div class="text">
                                                <p>New York. USA</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="cause-details__sidebar-single cause-details__recent-donation">
                                <h3 class="cause-details__recent-donation-title">Recent Donations</h3>
                                <ul class="list-unstyled cause-details__recent-donation-list">
                                    <li>
                                        <div class="cause-details__recent-donation-img">
                                            <img src="{{ asset('frontend-assets/images/causes/cause-details-recent-donation-img-1.jpg')}}"
                                                alt="">
                                        </div>
                                        <div class="cause-details__recent-donation-content">
                                            <p class="cause-details__recent-donation-amount">$20</p>
                                            <p class="cause-details__recent-donation-name">David Marks<span> 3 hours
                                                    ago</span></p>
                                            <p class="cause-details__recent-donation-text">God bless you dear</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="cause-details__recent-donation-img">
                                            <img src="{{ asset('frontend-assets/images/causes/cause-details-recent-donation-img-2.jpg')}}"
                                                alt="">
                                        </div>
                                        <div class="cause-details__recent-donation-content">
                                            <p class="cause-details__recent-donation-amount">$60</p>
                                            <p class="cause-details__recent-donation-name">Sarah Albert<span> 3 hours
                                                    ago</span></p>
                                            <p class="cause-details__recent-donation-text">God bless you dear</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="cause-details__recent-donation-img">
                                            <img src="{{ asset('frontend-assets/images/causes/cause-details-recent-donation-img-3.jpg')}}"
                                                alt="">
                                        </div>
                                        <div class="cause-details__recent-donation-content">
                                            <p class="cause-details__recent-donation-amount">$30</p>
                                            <p class="cause-details__recent-donation-name">DKevin Martin<span> 3 hours
                                                    ago</span></p>
                                            <p class="cause-details__recent-donation-text">God bless you dear</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="cause-details__recent-donation-img">
                                            <img src="{{ asset('frontend-assets/images/causes/cause-details-recent-donation-img-4.jpg')}}"
                                                alt="">
                                        </div>
                                        <div class="cause-details__recent-donation-content">
                                            <p class="cause-details__recent-donation-amount">$100</p>
                                            <p class="cause-details__recent-donation-name">Anonymous<span> 1 day
                                                    ago</span></p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Cause Details End-->
@endsection