@extends('layouts.app')

@section('content')
    @include('include.navbar')
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>

    <div class="row">
        <div class="page-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="service-feature-box">
                            <div class="service-media">
                                <img src="images/img01.jpg" alt="Trucking"/>

                                <a href="./" class="read-more02">
                                    <span>
                                        Read more
                                        <i class="fa fa-chevron-right"></i>
                                    </span>
                                </a>
                            </div><!-- .service-media end -->

                            <div class="service-body">
                                <div class="custom-heading">
                                    <h4>GROUND SHIPPING</h4>
                                </div><!-- .custom-heading end -->

                                <p>
                                    We have a wide experience in overland
                                    industry specific logistic solutions like
                                    pharmaceutical logistics, retail and
                                    automotive logistics by train or road.
                                </p>
                            </div><!-- .service-body end -->
                        </div><!-- .service-feature-box-end -->
                    </div><!-- .col-md-4 end --><!-- .col-md-4 end -->

                    <div class="col-md-4 col-sm-4">
                        <div class="service-feature-box">
                            <div class="service-media">
                                <img src="images/img03.jpg" alt="Trucking"/>

                                <a href="./" class="read-more02">
                                    <span>
                                        Read more
                                        <i class="fa fa-chevron-right"></i>
                                    </span>
                                </a>
                            </div><!-- .service-media end -->

                            <div class="service-body">
                                <div class="custom-heading">
                                    <h4>INTERNATIONAL AIR FREIGHT</h4>
                                </div><!-- .custom-heading end -->

                                <p>
                                    We provide full supply chain management
                                    package including cost effective and fast
                                    sea freight. You can also combine this
                                    package with other means of transportation.
                                </p>
                            </div><!-- .service-body end -->
                        </div><!-- .service-feature-box-end -->
                    </div><!-- .col-md-4 end -->
                    <div class="col-md-4 col-sm-4">
                        <div class="service-feature-box">
                            <div class="service-media"><img src="images/img02.jpg" alt="Trucking"/> <a href="./"
                                                                                                       class="read-more02">
                                    <span> Read more <i class="fa fa-chevron-right"></i> </span> </a></div>
                            <!-- .service-media end -->
                            <div class="service-body">
                                <div class="custom-heading">
                                    <h4>LARGE PROJECTS</h4>
                                </div>
                                <!-- .custom-heading end -->
                                <p> We bring your goods safely to worldwide
                                    destinations with our great sea fright
                                    services. We offer LLC and FLC shipments
                                    that are fast and effective with no delays. </p>
                            </div>
                            <!-- .service-body end -->
                        </div>
                        <!-- .service-feature-box-end -->
                    </div>
                </div><!-- .row end -->

                <div class="row">
                    <div class="col-md-12">
                        <a href="{{route('track-shipment')}}" class="btn btn-big btn-yellow btn-centered">
                            <span>
                                Track Your Shipment
                            </span>
                        </a>
                        <p></p>
                    </div><!-- .col-md-12 end -->
                </div><!-- .row end -->
            </div><!-- .container end -->
        </div><!-- .page-content end -->

        <div class="page-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="custom-heading02">
                            <h2>What we Offer</h2>
                            <p>
                                TAILORED LOGISTIC SERVICES
                            </p>
                        </div><!-- .custom-heading02 end -->
                    </div><!-- .col-md-12 end -->
                </div><!-- .row end -->

                <div class="row mb-30">
                    <div class="col-md-6 col-sm-6">
                        <div class="service-icon-left-boxed">
                            <div class="icon-container animated triggerAnimation" data-animate="zoomIn">
                                <img src="img/pi-checklist-2.svg" alt="checklist icon"/>
                            </div><!-- .icon-container end -->

                            <div class="service-details">
                                <h3>Contract logistics</h3>

                                <p>
                                    Need custom logistic service? We got it
                                    covered. From overland, air, rail and sea
                                    transportation. Fast, safe and accurate
                                    shipment provided all over the globe.
                                </p>
                            </div><!-- .service-details end -->
                        </div><!-- .service-icon-left-boxed end -->
                    </div><!-- .col-md-6 end -->

                    <div class="col-md-6 col-sm-6">
                        <div class="service-icon-left-boxed">
                            <div class="icon-container animated triggerAnimation" data-animate="zoomIn">
                                <img src="img/pi-globe-5.svg" alt="globe icon"/>
                            </div><!-- .icon-container end -->

                            <div class="service-details">
                                <h3>Overland, Ocean and Air Freight</h3>

                                <p>
                                    Trucking company offers the best logistics
                                    services using all mens of supply chain. Use
                                    our overland, ocean and air freight solutions
                                    for shipment of your goods.
                                </p>
                            </div><!-- .service-details end -->
                        </div><!-- .service-icon-left-boxed end -->
                    </div><!-- .col-md-6 end -->
                </div><!-- .row.mb-30 end -->

                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="service-icon-left-boxed">
                            <div class="icon-container animated triggerAnimation" data-animate="zoomIn">
                                <img src="img/pi-forklift-truck-5.svg" alt="forktruck icon"/>
                            </div><!-- .icon-container end -->

                            <div class="service-details">
                                <h3>Warehousing and Storage</h3>

                                <p>
                                    Trucking offers intelligent warehouse solution.
                                    Lower your storage and good maintenance by
                                    using our modern and intelligent warehouses.
                                    You can see all locations on location page.
                                </p>
                            </div><!-- .service-details end -->
                        </div><!-- .service-icon-left-boxed end -->
                    </div><!-- .col-md-6 end -->

                    <div class="col-md-6 col-sm-6">
                        <div class="service-icon-left-boxed">
                            <div class="icon-container animated triggerAnimation" data-animate="zoomIn">
                                <img src="img/pi-touch-desktop.svg" alt="touch icon"/>
                            </div><!-- .icon-container end -->

                            <div class="service-details">
                                <h3>Consulting Services</h3>

                                <p>
                                    Don't know what mean of transportation
                                    would be right for you, or you need someone
                                    for full supply chain management? Please contact
                                    us. Our team of professionals will be happy to help.
                                </p>
                            </div><!-- .service-details end -->
                        </div><!-- .service-icon-left-boxed end -->
                    </div><!-- .col-md-6 end -->
                </div><!-- .row.mb-30 end -->
            </div><!-- .container end -->
        </div><!-- .page-content end -->

        <div class="page-content custom-bkg bkg-dark-blue column-img-bkg dark">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4 col-md-offset-2 custom-col-padding-both">
                        <div class="custom-heading">
                            <h3>INDUSTRY SECTORS COVERAGE</h3>
                        </div><!-- .custom-heading end -->

                        <p>
                            We cover different industry sectors, from food and
                            beverage, chemical, retail, durable goods and more.
                            Check the full list.
                        </p>

                        <ul class="service-list clearfix">
                            <li>
                                <div class="icon-container">
                                    <img class="svg-white" src="img/pi-cargo-box-2.svg" alt="icon"/>
                                </div><!-- .icon-container end -->

                                <p>
                                    Consumer Packaged Goods
                                </p>
                            </li>

                            <li>
                                <div class="icon-container">
                                    <img class="svg-white" src="img/pi-mark-energy.svg" alt="icon"/>
                                </div><!-- .icon-container end -->

                                <p>
                                    Chemical Goods
                                </p>
                            </li>

                            <li>
                                <div class="icon-container">
                                    <img class="svg-white" src="img/pi-food-beverage.svg" alt="icon"/>
                                </div><!-- .icon-container end -->

                                <p>
                                    Food and Beverage
                                </p>
                            </li>

                            <li>
                                <div class="icon-container">
                                    <img class="svg-white" src="img/pi-cargo-retail.svg" alt="icon"/>
                                </div><!-- .icon-container end -->

                                <p>
                                    Retail Goods
                                </p>
                            </li>

                            <li>
                                <div class="icon-container">
                                    <img class="svg-white" src="img/pi-truck-8.svg" alt="icon"/>
                                </div><!-- .icon-container end -->

                                <p>
                                    Energy, Oil and Gas
                                </p>
                            </li>
                        </ul><!-- .service-list end -->
                    </div><!-- .col-md-6 end -->

                    <div class="col-md-6 img-bkg01">
                        <div>&nbsp;</div>
                    </div>
                </div><!-- .row end -->
            </div><!-- .container end -->
        </div><!-- .page-content.bkg-dark-blue end -->
        @include('include.footer')

        @endsection
        @section('scripts')
            <script>
                /* <![CDATA[ */
                jQuery(document).ready(function ($) {
                    'use strict';

                    function equalHeight() {
                        $('.page-content.column-img-bkg *[class*="custom-col-padding"]').each(function () {
                            var maxHeight = $(this).outerHeight();
                            $('.page-content.column-img-bkg *[class*="img-bkg"]').height(maxHeight);
                        });
                    };

                    $(document).ready(equalHeight);
                    $(window).resize(equalHeight);

                    // MASTER SLIDER START
                    var slider = new MasterSlider();
                    slider.setup('masterslider', {
                        width: 1140, // slider standard width
                        height: 854, // slider standard height
                        space: 0,
                        speed: 50,
                        layout: "fullwidth",
                        centerControls: false,
                        loop: true,
                        autoplay: true
                        // more slider options goes here...
                        // check slider options section in documentation for more options.
                    });
                    // adds Arrows navigation control to the slider.
                    slider.control('arrows');

                    // CLIENTS CAROUSEL START
                    $('#client-carousel').owlCarousel({
                        items: 6,
                        loop: true,
                        margin: 30,
                        responsiveClass: true,
                        mouseDrag: true,
                        dots: false,
                        responsive: {
                            0: {
                                items: 2,
                                nav: true,
                                loop: true,
                                autoplay: true,
                                autoplayTimeout: 3000,
                                autoplayHoverPause: true,
                                responsiveClass: true
                            },
                            600: {
                                items: 3,
                                nav: true,
                                loop: true,
                                autoplay: true,
                                autoplayTimeout: 3000,
                                autoplayHoverPause: true,
                                responsiveClass: true
                            },
                            1000: {
                                items: 6,
                                nav: true,
                                loop: true,
                                autoplay: true,
                                autoplayTimeout: 3000,
                                autoplayHoverPause: true,
                                responsiveClass: true,
                                mouseDrag: true
                            }
                        }
                    });

                    // TESTIMONIAL CAROUSELS START
                    $('#testimonial-carousel').owlCarousel({
                        items: 1,
                        loop: true,
                        margin: 30,
                        responsiveClass: true,
                        mouseDrag: true,
                        dots: false,
                        autoheight: true,
                        responsive: {
                            0: {
                                items: 1,
                                nav: true,
                                loop: true,
                                autoplay: true,
                                autoplayTimeout: 3000,
                                autoplayHoverPause: true,
                                responsiveClass: true,
                                autoHeight: true
                            },
                            600: {
                                items: 1,
                                nav: true,
                                loop: true,
                                autoplay: true,
                                autoplayTimeout: 3000,
                                autoplayHoverPause: true,
                                responsiveClass: true,
                                autoHeight: true
                            },
                            1000: {
                                items: 1,
                                nav: true,
                                loop: true,
                                autoplay: true,
                                autoplayTimeout: 3000,
                                autoplayHoverPause: true,
                                responsiveClass: true,
                                mouseDrag: true,
                                autoHeight: true
                            }
                        }
                    });
                });
                /* ]]> */
            </script>
    </div>
@endsection
