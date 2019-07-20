@extends('layouts.app2')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @include('include.message')
                <div class="card">
                    <div class="card-header">Courier Management System</div>
                    @include('include.nav')
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-12">
                <h2>All Shipments</h2>
                <table class="table table-nowrap">
                    <thead>
                    <tr>
                        <th>Action</th>
                        <th>Consignment No</th>
                        <th>Shipper</th>
                        <th>Receiver</th>
                        {{--                        <th>Pickup Date/Time</th>--}}
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($shipments as $ship)
                        <tr>
                            <th>
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="{{route('shipment.edit', $ship->id)}}"
                                           class="btn btn-outline-info btn-sm">Edit</a>
                                    </div>
                                    <div class="col-auto">
                                        <form method="POST"
                                              action="{{route('shipment.destroy', $ship->id)}}">
                                            @csrf
                                            {{ method_field('DELETE') }}
                                            <button type="submit"
                                                    onclick="return confirm('Are you sure you want to delete this item?');"
                                                    class="btn btn-sm btn-outline-danger mb-2">
                                                delete
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </th>
                            <td>{{$ship->consignment_no}}</td>
                            <td>{{$ship->shipper_name}}</td>
                            <td>{{$ship->receiver_name}}</td>
                            {{--                            <td>{{$ship->pickup_date}}</td>--}}
                            <td>{{$ship->status}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{$shipments->links()}}
            </div>
        </div>
    </div>
@endsection
