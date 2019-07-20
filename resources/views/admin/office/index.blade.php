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
                <h2>Offices</h2>
                <table class="table table-nowrap">
                    <thead>
                    <tr>
                        <th>Action</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Timing</th>
                        <th>Contact Person</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($offices as $office)
                        <tr>
                            <th>
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="{{route('office.edit', $office->id)}}"
                                           class="btn btn-outline-info btn-sm">Edit</a>
                                    </div>
                                    <div class="col-auto">
                                        <form method="POST"
                                              action="{{route('office.destroy', $office->id)}}">
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
                            <td>{{$office->name}}</td>
                            <td>{{$office->address}}</td>
                            <td>{{$office->phone}}</td>
                            <td>{{$office->timing}}</td>
                            <td>{{$office->contact_person}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{$offices->links()}}
            </div>
        </div>
    </div>
@endsection
