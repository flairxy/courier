@extends('layouts.app')
@include('include.navbar')

@section('content')
    <p>&nbsp;</p>
    <p  style="margin-top: 50px">&nbsp;</p>
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
                            <img src="../../img/pi-checklist-2.svg" alt="checklist icon"/>
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
                            <img src="../../img/pi-globe-5.svg" alt="globe icon"/>
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
                            <img src="../../img/pi-forklift-truck-5.svg" alt="forktruck icon"/>
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
                            <img src="../../img/pi-touch-desktop.svg" alt="touch icon"/>
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
    @include('include.footer')
@endsection
