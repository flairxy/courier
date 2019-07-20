@extends('layouts.app2')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('include.message')
                <div class="card">
                    <div class="card-header">Courier Management System</div><h2><span class="badge badge-soft-info">Edit Shipment</span></h2>
                    @include('include.nav')

                    <div class="card-body">
                        <h2>Shipper Information</h2>
                        <form method="POST" action="{{route('shipment.update', $ship->id)}}">
                            @csrf
                            {{ method_field('PATCH') }}
                            <div class="form-row">
                                <div class="form-group col">
                                    <label class="form-">Shipper Name</label>
                                    <input type="text" class="form-control" name="shipper_name" value="{{$ship->shipper_name}}">
                                </div>
                                <div class="form-group col">
                                    <label>Shipper Phone</label>
                                    <input type="text" class="form-control" name="shipper_phone" value="{{$ship->shipper_phone}}">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <label>Shipper Address</label>
                                    <input type="text" class="form-control" name="shipper_address" value="{{$ship->shipper_address}}">
                                </div>
                            </div>
                            <hr>
                            <h2>Receiver Information</h2>
                            <div class="form-row">
                                <div class="form-group col">
                                    <label class="form-">Receiver Name</label>
                                    <input type="text" class="form-control" name="receiver_name" value="{{$ship->receiver_name}}">
                                </div>
                                <div class="form-group col">
                                    <label>Receiver Phone</label>
                                    <input type="text" class="form-control" name="receiver_phone"  value="{{$ship->receiver_phone}}">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <label>Receiver Email</label>
                                    <input type="text" class="form-control" name="receiver_email"  value="{{$ship->receiver_email}}">
                                </div>
                                <div class="form-group col">
                                    <label>Receiver Address</label>
                                    <input type="text" class="form-control" name="receiver_address"  value="{{$ship->receiver_address}}">
                                </div>
                            </div>
                            <hr>
                            <h2>Shipment Information</h2>
                            <div class="form-row">
                                <div class="form-group col">
                                    <label class="form-">Consignment No</label>
                                    <input type="text" class="form-control" value="{{$ship->consignment_no}}" disabled>
                                </div>
                                <div class="form-group col">
                                    <label>Shipment Type</label>
                                    <select class="form-group col" name="type">
                                        <option value="{{$ship->type}}">{{$ship->type}}</option>
                                        <option value="Document">Document</option>
                                        <option value="Parcel">Parcel</option>
                                        <option value="Sentiment">Sentiments</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <label>Weight (kg)</label>
                                    <input type="text" class="form-control" name="weight" value="{{$ship->weight}}">
                                </div>
                                <div class="form-group col">
                                    <label>Invoice No</label>
                                    <input type="text" class="form-control"  disabled value="{{$ship->invoice_no}}">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <label>Quantity</label>
                                    <input type="text" class="form-control" name="quantity" value="{{$ship->quantity}}">
                                </div>
                                <div class="form-group col">
                                    <label>Total Freight</label>
                                    <input type="text" class="form-control" name="total_freight" value="{{$ship->total_freight}}">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <label>Booking Mode</label>
                                    <select class="form-group col" name="booking_mode" >
                                        <option value="{{$ship->booking_mode}}" selected>{{$ship->booking_mode}}</option>
                                        <option value="Paid">Paid</option>
                                        <option value="ToPay">ToPay</option>
                                        <option value="TBB">TBB</option>
                                    </select>
                                </div>
                                <div class="form-group col">
                                    <label>Mode</label>
                                    <select class="form-group col" name="mode" required>
                                        <option value="{{$ship->mode}}" selected>{{$ship->mode}}</option>
                                        <option value="Air">Air</option>
                                        <option value="Sea">Sea</option>
                                        <option value="Train">Train</option>
                                        <option value="Road">Road</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <label>Origin Service Location</label>
                                    <input type="text" class="form-control" name="origin_sl" value="{{$ship->origin_sl}}">
                                </div>
                                <div class="form-group col">
                                    <label>Destination Service Location</label>
                                    <input type="text" class="form-control" name="destination_sl" value="{{$ship->destination_sl}}">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <label>Current Service Location</label>
                                    <input type="text" class="form-control" name="current_sl" value="{{$ship->current_sl}}">
                                </div>
                                <div class="form-group col">
                                    <label>Departure Time</label>
                                    <input type="datetime-local" class="form-control" name="departure_time" value="{{$ship->departure_time}}">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <label>Status</label>
                                    <input type="text" class="form-control" name="status" value="{{$ship->status}}">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <label>Comment</label>
                                    <input type="text" class="form-control" name="comments" value="{{$ship->comments}}">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-block btn-outline-success">Update Shipment</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
