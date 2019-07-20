@extends('layouts.app2')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('include.message')
                <div class="card">
                    <div class="card-header">Courier Management System</div><h2><span class="badge badge-soft-info">Add Shipment</span></h2>
                    @include('include.nav')

                    <div class="card-body">
                        <form method="POST" action="{{route('shipment.store')}}">
                            @csrf
                            <h2>Shipper Information</h2>
                            <div class="form-row">
                                <div class="form-group col">
                                    <label class="form-">Shipper Name</label>
                                    <input type="text" class="form-control" value="{{ old('shipper_name') }}" name="shipper_name" >
                                </div>
                                <div class="form-group col">
                                    <label>Shipper Phone</label>
                                    <input type="text" class="form-control" value="{{ old('shipper_phone') }}" name="shipper_phone" >
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <label>Shipper Address</label>
                                    <input type="text" class="form-control" value="{{ old('shipper_address') }}" name="shipper_address" >
                                </div>
                            </div>
                            <hr>
                            <p><h2>Receiver Information</h2></p>
                            <div class="form-row">
                                <div class="form-group col">
                                    <label class="form-">Receiver Name</label>
                                    <input type="text" class="form-control" value="{{ old('receiver_name') }}" name="receiver_name" >
                                </div>
                                <div class="form-group col">
                                    <label>Receiver Phone</label>
                                    <input type="text" class="form-control"  value="{{ old('receiver_phone') }}" name="receiver_phone" >
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <label>Receiver Email</label>
                                    <input type="text" class="form-control" value="{{ old('receiver_email') }}" name="receiver_email" >
                                </div>
                                <div class="form-group col">
                                    <label>Receiver Address</label>
                                    <input type="text" class="form-control" value="{{ old('receiver_address') }}" name="receiver_address" >
                                </div>
                            </div>
                            <hr>
                            <h2>Shipment Information</h2>
                            <div class="form-row">
                                <div class="form-group col">
                                    <label class="form-">Consignment No</label>
                                    <input type="text" class="form-control" value="{{ old('consignment_no') }}" name="consignment_no" >
                                </div>
                                <div class="form-group col">
                                    <label>Shipment Type</label>
                                    <select class="form-group col" name="type" >
                                        <option value="Document">Document</option>
                                        <option value="Parcel">Parcel</option>
                                        <option value="Sentiment">Sentiments</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <label>Weight (kg)</label>
                                    <input type="text" class="form-control"  value="{{ old('weight') }}"name="weight" >
                                </div>
                                <div class="form-group col">
                                    <label>Invoice No</label>
                                    <input type="text" class="form-control" value="{{ old('invoice_no') }}" name="invoice_no" >
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <label>Quantity</label>
                                    <input type="text" class="form-control" value="{{ old('quantity') }}" name="quantity" >
                                </div>
                                <div class="form-group col">
                                    <label>Total Freight</label>
                                    <input type="text" class="form-control" value="{{ old('total_freight') }}" name="total_freight" >
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <label>Booking Mode</label>
                                    <select class="form-group col" name="booking_mode" >
                                        <option value="Paid">Paid</option>
                                        <option value="ToPay">ToPay</option>
                                        <option value="TBB">TBB</option>
                                    </select>
                                </div>
                                <div class="form-group col">
                                    <label>Mode</label>
                                    <select class="form-group col" name="mode" >
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
                                    <input type="text" class="form-control" value="{{ old('origin_sl') }}" name="origin_sl" >
                                </div>
                                <div class="form-group col">
                                    <label>Destination Service Location</label>
                                    <input type="text" class="form-control" value="{{ old('destination_sl') }}" name="destination_sl" >
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <label>Current Service Location</label>
                                    <input type="text" class="form-control" value="{{ old('current_sl') }}" name="current_sl" >
                                </div>
                                <div class="form-group col">
                                    <label>Departure Time</label>
                                    <input type="datetime-local" class="form-control" value="{{ old('departure_time') }}" name="departure_time" >
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <label>Pick-up Date</label>
                                    <input type="datetime-local" class="form-control" value="{{ old('pickup_date') }}" name="pickup_date" >
                                </div>
                                <div class="form-group col">
                                    <label>Status</label>
                                    <select class="form-group col" name="status" >
                                        <option value="In Transit">In Transit</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <label>Comment</label>
                                    <input type="text" class="form-control" value="{{ old('comments') }}" name="comments">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-block btn-outline-success">Create Shipment</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
