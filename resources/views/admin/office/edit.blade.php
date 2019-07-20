@extends('layouts.app2')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('include.message')
                <div class="card">
                    <div class="card-header">Courier Management System</div><h2><span class="badge badge-soft-info">Edit Office</span></h2>
                    @include('include.nav')
                    <div class="card-body">
                        <form method="POST" action="{{route('office.update', $office->id)}}">
                            @csrf
                            {{ method_field('PATCH') }}
                            <div class="form-row">
                                <div class="form-group col">
                                    <label class="form-">Name</label>
                                    <input type="text" class="form-control" value="{{$office->name}}" name="name" >
                                </div>
                                <div class="form-group col">
                                    <label>Phone</label>
                                    <input type="text" class="form-control" value="{{$office->phone}}" name="phone" >
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <label>Address</label>
                                    <input type="text" class="form-control" value="{{$office->address}}" name="address" >
                                </div>
                                <div class="form-group col">
                                    <label>City</label>
                                    <input type="text" class="form-control" value="{{$office->city}}" name="city" >
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <label class="form-">Office Timing</label>
                                    <input type="text" class="form-control" value="{{$office->timing}}" name="timing" >
                                </div>
                                <div class="form-group col">
                                    <label>Contact Person</label>
                                    <input type="text" class="form-control"  value="{{$office->contact_person}}" name="contact_person" >
                                </div>
                            </div>
                            <button type="submit" class="btn btn-block btn-outline-success">Update Office</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
