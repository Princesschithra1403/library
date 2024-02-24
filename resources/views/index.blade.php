<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Directorate of Public Libraries</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
         include "plugin/css.php";
      ?>
</head>

<body>


    <!-- Scroll-top -->
    <button class="scroll-top scroll-to-target" data-target="html">
        <i class="icon-chevrons-up"></i>
    </button>
    <!-- Scroll-top-end-->

    <header>
        <!-- header-area-start -->
        <!-- Start Top Header -->

             @include("header.top_header")
        <!-- End Top Header -->
        <!-- User Desktop navigation System -->

            @include("header.middile_navigation")
            @include("header.navigation")
        <!-- End User Desktop navigation System -->

        <!-- mobile-menu-area -->

               @include("header.mobile_navigation")
        <!-- mobile-menu-area-end -->
    </header>
    <!-- header-area-end -->

    <main>

        <!-- slider-area-start -->
        @include("slider.slider")
        <!-- slider-area-end -->

        <!-- category-area-start -->
        <section tion class="category-area grey-bg pb-40">
            <div class="container">
                <div class="swiper-container category-active">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="category__item mb-30 cover-photo shadow-lg">
                                <div class="category__thumb fix mb-15">
                                    <a href="#"><img src="assets/img/catagory/1.jpg"
                                            alt="category-thumb"></a>
                                </div>
                                <div class="category__content">
                                    <h5 class="category__title"><a href="#">Book Name </a></h5>
                                    <span class="category__count">05-06-22</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="category__item mb-30 cover-photo shadow-lg">
                                <div class="category__thumb fix mb-15">
                                    <a href="#"><img src="assets/img/catagory/2.jpg"
                                            alt="category-thumb"></a>
                                </div>
                                <div class="category__content">
                                    <h5 class="category__title"><a href="#">Book Name </a></h5>
                                    <span class="category__count">06-03-22</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="category__item mb-30 cover-photo shadow-lg">
                                <div class="category__thumb fix mb-15">
                                    <a href="#"><img src="assets/img/catagory/3.jpg"
                                            alt="category-thumb"></a>
                                </div>
                                <div class="category__content">
                                    <h5 class="category__title"><a href="#">Book Name 6</a></h5>
                                    <span class="category__count">09-09-22</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="category__item mb-30 cover-photo shadow-lg">
                                <div class="category__thumb fix mb-15">
                                    <a href="#"><img src="assets/img/catagory/4.jpg"
                                            alt="category-thumb"></a>
                                </div>
                                <div class="category__content">
                                    <h5 class="category__title"><a href="#">Book Name 4</a></h5>
                                    <span class="category__count">11-09-22</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="category__item mb-30 cover-photo shadow-lg">
                                <div class="category__thumb fix mb-15">
                                    <a href="#"><img src="assets/img/catagory/5.jpg"
                                            alt="category-thumb"></a>
                                </div>
                                <div class="category__content">
                                    <h5 class="category__title"><a href="#">Book Name 8</a></h5>
                                    <span class="category__count">02-09-23</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="category__item mb-30 cover-photo shadow-lg">
                                <div class="category__thumb fix mb-15">
                                    <a href="#"><img src="assets/img/catagory/6.jpg"
                                            alt="category-thumb"></a>
                                </div>
                                <div class="category__content">
                                    <h5 class="category__title"><a href="#">Book Name 6</a></h5>
                                    <span class="category__count">16-09-22</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="category__item mb-30 cover-photo shadow-lg">
                                <div class="category__thumb fix mb-15">
                                    <a href="#"><img src="assets/img/catagory/7.jpg"
                                            alt="category-thumb"></a>
                                </div>
                                <div class="category__content">
                                    <h5 class="category__title"><a href="#">Book Name 7</a></h5>
                                    <span class="category__count">10-11-2022</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="category__item mb-30 cover-photo shadow-lg">
                                <div class="category__thumb fix mb-15">
                                    <a href="#"><img src="assets/img/catagory/8.jpg"
                                            alt="category-thumb"></a>
                                </div>
                                <div class="category__content">
                                    <h5 class="category__title"><a href="#">Book Name 8</a></h5>
                                    <span class="category__count">11-01-2022</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- category-area-end -->

        <!-- about-area-start -->
        <section class="about-area grey-bg pt-100 pb-60">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="tpabout__inner-thumb-2 p-relative mb-30">
                            <img src="assets\img\about\about.jpg" alt="">
                            <div class="tpabout__inner-thumb-shape d-none d-md-block">
                                <div class="tpabout__inner-thumb-shape-one">
                                    <!-- <img src="assets/img/shape/tree-leaf-6.png" alt=""> -->
                                    <img src="assets/img/about/12.png" alt="">
                                </div>
                                <div class="tpabout__inner-thumb-shape-two">
                                    <!-- <img src="assets/img/shape/tree-leaf-7.png" alt=""> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="tpabout__inner-2 mb-30">
                            <div class="tpabout__inner-tag mb-10">
                                <span class="active">About us</span>
                                <span>Welcome to Book Procurement</span>
                            </div>
                            <h4 class="tpabout__inner-title-2 fs-3 mb-25">WELCOME TO DIRECTORATE OF PUBLIC LIBRARIES
                            </h4>
                            <p>Public Libraries were opened in Tamil Nadu as per the “Tamil Nadu Public Libraries Act,
                                1948”. <br>The Directorate of Public Libraries was formed in 1972 in order to improve
                                the library services.<br> The following libraries are functioning in the State under the
                                control of the Directorate of Public Libraries. Public Libraries were opened in Tamil
                                Nadu as per the “Tamil Nadu Public Libraries Act, 1948”.<br>
                                The Directorate of Public Libraries was formed in 1972 in order to improve the library
                                services. The following libraries are functioning in the State under the control of the
                                Directorate of Public Libraries.
                            </p>
                            <!--<div class="tpabout__inner-list">-->
                            <!--    <ul>-->
                            <!--        <li><i class="icon-check"></i> Track your daily activity.</li>-->
                            <!--        <li><i class="icon-check"></i> Start a private group video call.</li>-->
                            <!--        <li><i class="icon-check"></i> All the lorem ipsum generators on the Internet.</li>-->
                            <!--    </ul>-->
                            <!--</div>-->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-area-end -->

        <!-- product-area-start -->
        <section class="product-area grey-bg pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="tpsection mb-35">
                            <!--<h4 class="tpsection__sub-title">~ Procurement ~</h4>-->
                            <h4 class="tpsection__title">Book Procurement Events & Festivals</h4>
                            <!--<p>The liber tempor cum soluta nobis eleifend option congue doming quod mazim.</p>-->
                        </div>
                    </div>
                </div>
                <div class="tpproduct__arrow p-relative">
                    <div class="swiper-container tpproduct-active tpslider-bottom p-relative">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="tpproduct p-relative">
                                    <div class="tpproduct__thumb p-relative text-center">
                                        <a href="#"><img src="assets/img/books/4.webp" alt=""></a>
                                        <a class="tpproduct__thumb-img" href="#"><img
                                                src="assets/img/books/4.webp" alt=""></a>
                                        <!-- <div class="tpproduct__info bage">
                                    <span class="tpproduct__info-discount bage__discount">-50%</span>
                                    <span class="tpproduct__info-hot bage__hot">HOT</span>
                                 </div> -->
                                    </div>
                                    <div class="tpproduct__content">
                                        <span class="tpproduct__content-weight">
                                            <a href="#">Fiction</a>
                                            <!-- <a href="#">Fiction</a>,
                                    <a href="#">Vagetables</a> -->
                                        </span>
                                        <h4 class="tpproduct__title">
                                            <a href="#">Tamil Section</a>
                                        </h4>
                                        <div class="tpproduct__price">
                                            <p class="small">Second Floor of this library is dedicated to “Classical
                                                Language (Semmozhi)” Tamil.</p>
                                        </div>
                                    </div>
                                    <!-- <div class="tpproduct__hover-text">
                                 <div class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                    <a class="tp-btn-2" href="#">Add to cart</a>
                                 </div>
                                 <div class="tpproduct__descrip">
                                    <ul>
                                       <li>Type: Organic</li>
                                       <li>MFG: August 4.2021</li>
                                       <li>LIFE: 60 days</li>
                                    </ul>
                                 </div>
                              </div> -->
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="tpproduct p-relative">
                                    <div class="tpproduct__thumb p-relative text-center">
                                        <a href="#"><img src="assets/img/books/3.webp" alt=""></a>
                                        <a class="tpproduct__thumb-img" href="#"><img
                                                src="assets/img/books/3.webp" alt=""></a>
                                    </div>
                                    <div class="tpproduct__content">
                                        <span class="tpproduct__content-weight">
                                            <a href="#">Fiction</a>
                                        </span>
                                        <h4 class="tpproduct__title">
                                            <a href="#">Own Book Reading </a>
                                        </h4>
                                        <div class="tpproduct__price">
                                            <p class="small">This section located at ground floor. It is a boon to the
                                                users who are searching for...</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="tpproduct p-relative">
                                    <div class="tpproduct__thumb p-relative text-center">
                                        <a href="#"><img src="assets/img/books/2.webp" alt=""></a>
                                        <a class="tpproduct__thumb-img" href="#"><img
                                                src="assets/img/books/2.webp" alt=""></a>
                                    </div>
                                    <div class="tpproduct__content">
                                        <span class="tpproduct__content-weight">
                                            <a href="#">Non-Fiction</a>
                                        </span>
                                        <h4 class="tpproduct__title">
                                            <a href="#">Children Section</a>
                                        </h4>
                                        <div class="tpproduct__price">
                                            <p class="small">Children Section is located in the first floor ' B wing '
                                                it spreads over 15,000 sq.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="tpproduct p-relative">
                                    <div class="tpproduct__thumb p-relative text-center">
                                        <a href="#"><img src="assets/img/books/1.webp" alt=""></a>
                                        <a class="tpproduct__thumb-img" href="#"><img
                                                src="assets/img/books/1.webp" alt=""></a>
                                    </div>
                                    <div class="tpproduct__content">
                                        <span class="tpproduct__content-weight">
                                            <a href="#">Fiction</a>
                                        </span>
                                        <h4 class="tpproduct__title">
                                            <a href="#">Periodicals Section</a>
                                        </h4>
                                        <div class="tpproduct__price">
                                            <p class="small">Periodicals section is located in the ‘A’ Wing of first
                                                floor. Newspapers...</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="tpproduct p-relative">
                                    <div class="tpproduct__thumb p-relative text-center">
                                        <a href="#"><img src="assets/img/books/5.webp" alt=""></a>
                                        <a class="tpproduct__thumb-img" href="#"><img
                                                src="assets/img/books/5.webp" alt=""></a>
                                    </div>
                                    <div class="tpproduct__content">
                                        <span class="tpproduct__content-weight">
                                            <a href="#">Fiction</a>,
                                            <!--<a href="#">Vagetables</a>-->
                                        </span>
                                        <h4 class="tpproduct__title">
                                            <a href="#">Chennai Book </a>
                                        </h4>
                                        <div class="tpproduct__price">
                                            <p class="small">Children Section is located in the first floor ' B wing '
                                                it spreads over 15,000 sq.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="tpproduct p-relative">
                                    <div class="tpproduct__thumb p-relative text-center">
                                        <a href="#"><img src="assets/img/books/6.webp" alt=""></a>
                                        <a class="tpproduct__thumb-img" href="#"><img
                                                src="assets/img/books/6.webp" alt=""></a>
                                    </div>
                                    <div class="tpproduct__content">
                                        <span class="tpproduct__content-weight">
                                            <a href="#">Fiction</a>
                                        </span>
                                        <h4 class="tpproduct__title">
                                            <a href="#">Periodicals Section</a>
                                        </h4>
                                        <div class="tpproduct__price">
                                            <p class="small">Children Section is located in the first floor ' B wing '
                                                it spreads over 15,000 sq.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tpproduct-btn">
                        <div class="tpprduct-arrow tpproduct-btn__prv"><a href="#"><i class="icon-chevron-left"></i></a>
                        </div>
                        <div class="tpprduct-arrow tpproduct-btn__nxt"><a href="#"><i
                                    class="icon-chevron-right"></i></a></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- product-area-end -->


        <!-- product-feature-area-start -->
        <section class="product-feature-area product-feature grey-bg pt-80 pb-40 ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="tpproduct-feature p-relative pt-45 pb-40">
                            <div class="tpsection tpfeature__content mb-35">
                                <!--<h4 class="tpsection__sub-title mb-0">~ The Best For Your ~</h4>-->
                                <h4 class="tpsection__title tpfeature__title mb-25">Upcoming Events</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-5 bg-white pt-80 pb-40">
                    <div class="col-md-2 mt-5">
                        <p><strong class="edate mb-0">Sep 18th, 2023</strong></p>
                        <p class="m-0"><strong class="etime mt-0">09:00 pm</strong></p>
                    </div>
                    <div class="col-md-2 col-sm-2 col-12 mt-5">
                        <img class="w-100" src="assets\img\books\1.jpg" alt="img">
                    </div>
                    <div class="col-md-6 mt-5">
                        <h6><a class="title_up" href="#">Children Section </a></h6>
                        <p><i class="fas fa-map-marker-alt"></i>
                            R. VASUDEVAN (PRESIDENT). No. 1, New Bangaru Naidu Colony,. K.K. Nagar (West), Chennai -
                            600078</p>
                    </div>
                    <div class="col-md-2 mt-5">
                        <a href="#" class="joinnow mt-5">View Blog</a>
                    </div>
                    <div class="col-lg-12">
                        <div class="basic-pagination text-center pt-80">
                            <nav>
                                <ul>
                                    <li>
                                        <span class="current">1</span>
                                    </li>
                                    <li>
                                        <a href="#">2</a>
                                    </li>
                                    <li>
                                        <a href="#">3</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon-chevrons-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- product-feature-area-end -->

        <!-- banner-area-start -->
        <section class="banner-area pb-60 grey-bg">
            <div class="container">
                <div class="row">
                    <img src="assets/img/banner/2.png" alt="">
                </div>
            </div>
        </section>
        <!-- banner-area-end -->

        <!-- product-area-start -->
        <section class="weekly-product-area grey-bg pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="tpsection mb-20">
                            <h4 class="tpsection__sub-title">~ Newly Added Books ~</h4>
                            <h4 class="tpsection__title">Latest Top Rated Books</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tpnavtab__area pb-40">

                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-all" role="tabpanel"
                                    aria-labelledby="nav-all-tab" tabindex="0">
                                    <div class="tpproduct__arrow p-relative">
                                        <div class="swiper-container tpproduct-active tpslider-bottom p-relative">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="tpproduct p-relative">
                                                        <div class="tpproduct__thumb p-relative text-center">
                                                            <a href="#"><img
                                                                    src="assets/img/books/3.webp" alt=""></a>
                                                            <a class="tpproduct__thumb-img"
                                                                href="#"><img
                                                                    src="assets/img/books/3.webp" alt=""></a>
                                                        </div>
                                                        <div class="tpproduct__content">
                                                            <span class="tpproduct__content-weight">
                                                                <a href="#">Chidren</a>
                                                                <!-- <a href="#">Fiction</a>,
                                                                <a href="#">Vagetables</a> -->
                                                            </span>
                                                            <h4 class="tpproduct__title">
                                                                <a href="#">Tamil Section</a>
                                                            </h4>
                                                            <div class="tpproduct__price">
                                                                <p class="small">Second Floor of this library is
                                                                    dedicated to “Classical
                                                                    Language (Semmozhi)” Tamil.</p>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="tpproduct p-relative">
                                                        <div class="tpproduct__thumb p-relative text-center">
                                                            <a href="#"><img
                                                                    src="assets/img/books/3.webp" alt=""></a>
                                                            <a class="tpproduct__thumb-img"
                                                                href="#"><img
                                                                    src="assets/img/books/3.webp" alt=""></a>
                                                        </div>
                                                        <div class="tpproduct__content">
                                                            <span class="tpproduct__content-weight">
                                                                <a href="#">Fiction</a>
                                                                <!-- <a href="#">Fiction</a>,
                                                                    <a href="#">Vagetables</a> -->
                                                            </span>
                                                            <h4 class="tpproduct__title">
                                                                <a href="#">Tamil Section</a>
                                                            </h4>
                                                            <div class="tpproduct__price">
                                                                <p class="small">Second Floor of this library is
                                                                    dedicated to “Classical
                                                                    Language (Semmozhi)” Tamil.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="tpproduct p-relative">
                                                        <div class="tpproduct__thumb p-relative text-center">
                                                            <a href="#"><img
                                                                    src="assets/img/books/3.webp" alt=""></a>
                                                            <a class="tpproduct__thumb-img"
                                                                href="#"><img
                                                                    src="assets/img/books/3.webp" alt=""></a>
                                                        </div>
                                                        <div class="tpproduct__content">
                                                            <span class="tpproduct__content-weight">
                                                                <a href="#">Fiction</a>
                                                                <!-- <a href="#">Fiction</a>,
                                                        <a href="#">Vagetables</a> -->
                                                            </span>
                                                            <h4 class="tpproduct__title">
                                                                <a href="#">Tamil Section</a>
                                                            </h4>
                                                            <div class="tpproduct__price">
                                                                <p class="small">Second Floor of this library is
                                                                    dedicated to “Classical
                                                                    Language (Semmozhi)” Tamil.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="tpproduct p-relative">
                                                        <div class="tpproduct__thumb p-relative text-center">
                                                            <a href="#"><img
                                                                    src="assets/img/books/3.webp" alt=""></a>
                                                            <a class="tpproduct__thumb-img"
                                                                href="#"><img
                                                                    src="assets/img/books/3.webp" alt=""></a>
                                                        </div>
                                                        <div class="tpproduct__content">
                                                            <span class="tpproduct__content-weight">
                                                                <a href="#">Fiction</a>
                                                                <!-- <a href="#">Fiction</a>,
                                                        <a href="#">Vagetables</a> -->
                                                            </span>
                                                            <h4 class="tpproduct__title">
                                                                <a href="#">Tamil Section</a>
                                                            </h4>
                                                            <div class="tpproduct__price">
                                                                <p class="small">Second Floor of this library is
                                                                    dedicated to “Classical
                                                                    Language (Semmozhi)” Tamil.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="tpproduct p-relative">
                                                        <div class="tpproduct__thumb p-relative text-center">
                                                            <a href="#"><img
                                                                    src="assets/img/books/3.webp" alt=""></a>
                                                            <a class="tpproduct__thumb-img"
                                                                href="#"><img
                                                                    src="assets/img/books/3.webp" alt=""></a>
                                                        </div>
                                                        <div class="tpproduct__content">
                                                            <span class="tpproduct__content-weight">
                                                                <a href="#">Fiction</a>
                                                                <!-- <a href="#">Fiction</a>,
                                                        <a href="#">Vagetables</a> -->
                                                            </span>
                                                            <h4 class="tpproduct__title">
                                                                <a href="#">Tamil Section</a>
                                                            </h4>
                                                            <div class="tpproduct__price">
                                                                <p class="small">Second Floor of this library is
                                                                    dedicated to “Classical
                                                                    Language (Semmozhi)” Tamil.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="tpproduct p-relative">
                                                        <div class="tpproduct__thumb p-relative text-center">
                                                            <a href="#"><img
                                                                    src="assets/img/books/3.webp" alt=""></a>
                                                            <a class="tpproduct__thumb-img"
                                                                href="#"><img
                                                                    src="assets/img/books/3.webp" alt=""></a>
                                                        </div>
                                                        <div class="tpproduct__content">
                                                            <span class="tpproduct__content-weight">
                                                                <a href="#">Fiction</a>
                                                                <!-- <a href="#">Fiction</a>,
                                                        <a href="#">Vagetables</a> -->
                                                            </span>
                                                            <h4 class="tpproduct__title">
                                                                <a href="#">Tamil Section</a>
                                                            </h4>
                                                            <div class="tpproduct__price">
                                                                <p class="small">Second Floor of this library is
                                                                    dedicated to “Classical
                                                                    Language (Semmozhi)” Tamil.</p>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tpproduct-btn">
                                            <div class="tpprduct-arrow tpproduct-btn__prv"><a href="#"><i
                                                        class="icon-chevron-left"></i></a></div>
                                            <div class="tpprduct-arrow tpproduct-btn__nxt"><a href="#"><i
                                                        class="icon-chevron-right"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="row">
                    <div class="col-lg-12">
                        <div class="tpproduct__all-item text-center">
                            <span>Discover thousands of other quality products.
                                <a href="#">Shop All Products <i class="icon-chevrons-right"></i></a>
                            </span>
                        </div>
                    </div>
                </div> -->
            </div>
        </section>
        <!-- product-area-end -->

        <!-- product-coundown-area-start -->
        <!-- <section class="product-coundown-area tpcoundown__bg grey-bg pb-25"
            data-background="assets/img/banner/1.png"> -->
        <section class="product-coundown-area tpcoundown__bg grey-bg pb-25">
            <div class="container">
                <div class="row">
                <img src="assets/img/banner/1.png" alt="">
                </div>
            </div>
        </section>
        <!-- product-coundown-area-end -->

        <!-- blog-area-start -->
        {{-- <section class="blog-area pt-100 pb-100 grey-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="tpsection mb-35">
                            <h4 class="tpsection__sub-title">~ Read Our Blog ~</h4>
                            <h4 class="tpsection__title">Our Latest Post</h4>
                            <p>The liber tempor cum soluta nobis eleifend option congue doming quod mazim.</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-container tpblog-active">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="tpblog__item">
                                <div class="tpblog__thumb fix">
                                <div class="ratio ratio-16x9">
                                    <iframe src="https://www.youtube.com/embed/KjG-hfLJ8MM" title="YouTube video"
                                        allowfullscreen></iframe>
                                </div>
                                </div>
                                <div class="tpblog__wrapper">
                                    <div class="tpblog__entry-wap">
                                        <span class="cat-links"><a href="#">Lifestyle</a></span>
                                        <span class="author-by"><a href="#">Admin</a></span>
                                        <span class="post-data"><a href="#">SEP 15. 2022</a></span>
                                    </div>
                                    <h4 class="tpblog__title"><a href="#">Avocado Grilled Salmon, Rich
                                            In Nutrients For The Body</a></h4>
                                    <p>These are the people who make your life easier. Egestas is tristique
                                        vestibulum...</p>
                                    <div class="tpblog__details">
                                        <a href="#">Continue reading <i class="icon-chevrons-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="tpblog__item">
                                <div class="tpblog__thumb fix">
                                <div class="ratio ratio-16x9">
                                    <iframe src="https://www.youtube.com/embed/yntSamKizDY" title="YouTube video"
                                        allowfullscreen></iframe>
                                </div>
                                </div>
                                <div class="tpblog__wrapper">
                                    <div class="tpblog__entry-wap">
                                        <span class="cat-links"><a href="#">Organics</a></span>
                                        <span class="author-by"><a href="#">Admin</a></span>
                                        <span class="post-data"><a href="#">SEP 15. 2022</a></span>
                                    </div>
                                    <h4 class="tpblog__title"><a href="#">The Best Great Benefits Of
                                            Fresh Beef For Women's Health</a></h4>
                                    <p>These are the people who make your life easier. Egestas is tristique
                                        vestibulum...</p>
                                    <div class="tpblog__details">
                                        <a href="#">Continue reading <i
                                                class="icon-chevrons-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="tpblog__item">
                                <div class="tpblog__thumb fix">
                                    <div class="ratio ratio-16x9">
                                        <iframe src="https://www.youtube.com/embed/uCb-YniHI8M" title="YouTube video"
                                            allowfullscreen></iframe>
                                    </div>
                                </div>
                                <div class="tpblog__wrapper">
                                    <div class="tpblog__entry-wap">
                                        <span class="cat-links"><a href="#">Organics</a></span>
                                        <span class="author-by"><a href="#">Admin</a></span>
                                        <span class="post-data"><a href="#">SEP 15. 2022</a></span>
                                    </div>
                                    <h4 class="tpblog__title"><a href="#">Ways To Choose Fruits &
                                            Seafoods Good For Pregnancy</a></h4>
                                    <p>These are the people who make your life easier. Egestas is tristique
                                        vestibulum...</p>
                                    <div class="tpblog__details">
                                        <a href="#">Continue reading <i
                                                class="icon-chevrons-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="tpblog__item">
                                <div class="tpblog__thumb fix">
                                    <div class="ratio ratio-16x9">
                                        <iframe src="https://www.youtube.com/embed/yntSamKizDY" title="YouTube video"
                                            allowfullscreen></iframe>
                                    </div>
                                </div>
                                <div class="tpblog__wrapper">
                                    <div class="tpblog__entry-wap">
                                        <span class="cat-links"><a href="#">Shopping</a></span>
                                        <span class="author-by"><a href="#">Admin</a></span>
                                        <span class="post-data"><a href="#">SEP 15. 2022</a></span>
                                    </div>
                                    <h4 class="tpblog__title"><a href="#">Summer Breakfast For The
                                            Healthy Morning With Tomatoes</a></h4>
                                    <p>These are the people who make your life easier. Egestas is tristique
                                        vestibulum...</p>
                                    <div class="tpblog__details">
                                        <a href="#">Continue reading <i
                                                class="icon-chevrons-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="tpblog__item">
                                <div class="tpblog__thumb fix">
                                    <div class="ratio ratio-16x9">
                                        <iframe src="https://www.youtube.com/embed/uCb-YniHI8M" title="YouTube video"
                                            allowfullscreen></iframe>
                                    </div>
                                </div>
                                <div class="tpblog__wrapper">
                                    <div class="tpblog__entry-wap">
                                        <span class="cat-links"><a href="#">Foods</a></span>
                                        <span class="author-by"><a href="#">Admin</a></span>
                                        <span class="post-data"><a href="#">SEP 15. 2022</a></span>
                                    </div>
                                    <h4 class="tpblog__title"><a href="#">Popular Reasons You Must
                                            Drinks Juice Everyday</a></h4>
                                    <p>These are the people who make your life easier. Egestas is tristique
                                        vestibulum...</p>
                                    <div class="tpblog__details">
                                        <a href="#">Continue reading <i
                                                class="icon-chevrons-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="tpblog__item">
                                <div class="tpblog__thumb fix">
                                    <div class="ratio ratio-16x9">
                                        <iframe src="https://www.youtube.com/embed/uCb-YniHI8M" title="YouTube video"
                                            allowfullscreen></iframe>
                                    </div>
                                </div>
                                <div class="tpblog__wrapper">
                                    <div class="tpblog__entry-wap">
                                        <span class="cat-links"><a href="#">Lifestyle</a></span>
                                        <span class="author-by"><a href="#">Admin</a></span>
                                        <span class="post-data"><a href="#">SEP 15. 2022</a></span>
                                    </div>
                                    <h4 class="tpblog__title"><a href="#">Perfect Quality Reasonable
                                            Price For Your Family</a></h4>
                                    <p>These are the people who make your life easier. Egestas is tristique
                                        vestibulum...</p>
                                    <div class="tpblog__details">
                                        <a href="#">Continue reading <i
                                                class="icon-chevrons-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="tpblog__item">
                                <div class="tpblog__thumb fix">
                                    <div class="ratio ratio-16x9">
                                        <iframe src="https://www.youtube.com/embed/yntSamKizDY" title="YouTube video"
                                            allowfullscreen></iframe>
                                    </div>
                                </div>
                                <div class="tpblog__wrapper">
                                    <div class="tpblog__entry-wap">
                                        <span class="cat-links"><a href="#">Dairy Farm</a></span>
                                        <span class="author-by"><a href="#">Admin</a></span>
                                        <span class="post-data"><a href="#">SEP 15. 2022</a></span>
                                    </div>
                                    <h4 class="tpblog__title"><a href="#">Ways To Choose Fruits Seafoods
                                            Good For Pregnancy</a></h4>
                                    <p>These are the people who make your life easier. Egestas is tristique
                                        vestibulum...</p>
                                    <div class="tpblog__details">
                                        <a href="#">Continue reading <i
                                                class="icon-chevrons-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="tpblog__item">
                                <div class="tpblog__thumb fix">
                                    <div class="ratio ratio-16x9">
                                        <iframe src="https://www.youtube.com/embed/KjG-hfLJ8MM" title="YouTube video"
                                            allowfullscreen></iframe>
                                    </div>
                                </div>
                                <div class="tpblog__wrapper">
                                    <div class="tpblog__entry-wap">
                                        <span class="cat-links"><a href="#">organis</a></span>
                                        <span class="author-by"><a href="#">Admin</a></span>
                                        <span class="post-data"><a href="#">SEP 15. 2022</a></span>
                                    </div>
                                    <h4 class="tpblog__title"><a href="#">The Best Great Benefits Of
                                            Fresh Beef For Women’s Health</a></h4>
                                    <p>These are the people who make your life easier. Egestas is tristique
                                        vestibulum...</p>
                                    <div class="tpblog__details">
                                        <a href="#">Continue reading <i
                                                class="icon-chevrons-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- blog-area-end -->



    </main>

    <!-- footer-area-start -->
    @include("footer.footer")
    <!-- footer-area-end -->
    <?php
         include "plugin/js.php";
      ?>
    <script>
    $(document).ready(function() {
        var items = ["var(--tp-grey-1)", "var(--tp-grey-2)", "var(--tp-grey-3)", "var(--tp-grey-4)",
            "var(--tp-grey-5)", "var(--tp-grey-6)", "var(--tp-grey-7)", "var(--tp-grey-8)",
            "var(--tp-grey-9)"
        ];
        var index = 0;
        var color;
        $(".cover-photo").each(function() {
            if (index == items.length)
                index = 0;

            color = items[index];
            $(this).css('background', color);
            index++;
        });
    });
    </script>
</body>

</html>
<style>
strong.edate {
    display: block;
    color: #d94148;
    font-size: 16px;
    font-weight: 700;
    text-transform: uppercase;
}

strong.etime {
    display: block;
    color: #aaaaaa;
    font-size: 16px;
    font-weight: 500;
    text-transform: uppercase;
}

a.title_up {
    color: #222222;
    margin: 0 0 7px;
    font-weight: 600;
    line-height: 22px;
}

a.joinnow {
    background: #fafafa;
    border: 1px solid #e1e1e1;
    line-height: 28px;
    display: inline-block;
    text-transform: uppercase;
    font-size: 14px;
    color: #a0a0a0;
    padding: 0 20px;
    border-radius: 15px;
}

a.joinnow:hover {
    background: #d94148;
    border-color: #d94148;
    color: #fff;
}
</style>
