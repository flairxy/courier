@extends('layouts.app')

@section('content')
@include('include.navbar')
    <p>&nbsp;</p>
    <p style="margin-top: 50px">&nbsp;</p>
    <div class="page-content">
        <div class="container">
            @if($shipment)
                <div class="row">
                    <div class="col-md-12">
                        <div class="custom-heading02">
                            <h2>{{$shipment->receiver_name}}, Here is your Shipment Information</h2>
                            <br>
                            <p>/home/track/</p>
                        </div><!-- .custom-heading02 end -->
                    </div><!-- .col-md-12 end -->
                </div><!-- .row end -->
                <div class="row mb-30">
                    <div class="col-md-12 col-sm-12">
                        <div class="clear"></div>
                        <div class="container">
                            <div id="display_status">

                                <div class="well">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <table class="table table-striped table-bordered table table-hover">
                                                <tbody>
                                                <tr>
                                                    <td class="text-middle">Shipper Name </td>
                                                    <td>{{$shipment->shipper_name}}</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-middle">Shipper Phone </td>
                                                    <td>{{$shipment->shipper_phone}}</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-middle">Shipper Address </td>
                                                    <td>K{{$shipment->shipper_address}}</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="visible-xs visible-sm"><br><br></div>
                                        <div class="col-md-6">
                                            <table class="table table-striped table-bordered table table-hover">
                                                <tbody>
                                                <tr>
                                                    <td class="text-middle">Receiver Name </td>
                                                    <td>{{$shipment->receiver_name}}</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-middle">Receiver Phone </td>
                                                    <td>{{$shipment->receiver_phone}}</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-middle">Receiver Address </td>
                                                    <td>{{$shipment->receiver_address}}</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <div class="well">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <table class="table table-striped table-bordered table table-hover">
                                                <tbody>
                                                <tr>
                                                    <td class="text-middle">Consignment No. </td>
                                                    <td><h4><span class="label label-danger">{{$shipment->consignment_no}}</span></h4></td>
                                                </tr>

                                                <tr>
                                                    <td class="text-middle">Shipment Type</td>
                                                    <td>{{$shipment->type}}</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-middle">Weight</td>
                                                    <td>{{$shipment->weight}}</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-middle">Invoice no</td>
                                                    <td>{{$shipment->invoice_no}}</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-middle">Booking Mode</td>
                                                    <td>{{$shipment->booking_mode}}</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-middle">Total freight</td>
                                                    <td>{{$shipment->total_freight}}</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-middle">Mode</td>
                                                    <td>{{$shipment->mode}}</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-middle">Pickup Date/Time </td>
                                                    <td>{{$shipment->pickup_date}}
{{--                                                        <span class="gentxt">11:00AM</span>--}}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-middle">Status </td>
                                                    <td>{{$shipment->status}}</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-middle">Comments </td>
                                                    <td>{{$shipment->comments}}
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="visible-xs visible-sm"><br><br></div>
                                        <div class="col-md-6">
                                            <table class="table table-striped table-bordered table table-hover">
                                                <tbody>
                                                <tr>
                                                    <td colspan="2" class="bg-success" align='centre'><h4><span
                                                                class="label label-warning">LOCATIONS</span></h4></td>
                                                </tr>
                                                <tr>
                                                    <td>Origin Service Location </td>
                                                    <td>{{$shipment->origin_sl}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Destination Service Location </td>
                                                    <td>{{$shipment->destination_sl}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Current Service Location </td>
                                                    <td>{{$shipment->current_sl}}</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- .container end -->
            @else
                <div id="display_status">

                    <div class="well">
                        <div class="row">
                            <div class="col-md-6">
                                <table class="table table-striped table-bordered table table-hover">
                                    <tbody>
                                    <tr>
                                        <div class="container">
                                            <h3 style="font-family:Verdana; font-size:12px;">Consignment Number</h3>
                                            <h3><span class="label label-danger">{{$number}}</span></h3>
                                            </font>
                                            <h3 style="font-family:Verdana; font-size:12px;">Was not found. Please
                                                verify the Number.</h3>
                                            <br/>
                                            <a href="/" class="btn btn-info btn-xl col-md-12"
                                               style="margin:0 auto; width:100px; text-align:center;">Go Back</a>
                                            <h3 style="font-family:Verdana; font-size:12px;">to Search Again.</h3>
                                        </div>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
{{--    @include('include.footer')--}}
@endsection
