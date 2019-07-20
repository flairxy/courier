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
                <h2>All Managers</h2>
                <table class="table table-nowrap">
                    <thead>
                    <tr>
                        <th>Action</th>
                        <th>Officer Name</th>
                        <th>Address</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Officer</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($managers as $manager)

                    @php $office = \App\Models\Office::whereId($manager->office_id)->first() @endphp
                        <tr>
                            <th>
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="{{route('manager.edit', $manager->id)}}"
                                           class="btn btn-outline-info btn-sm">Edit</a>
                                    </div>
                                    <div class="col-auto">
                                        <form method="POST"
                                              action="{{route('manager.destroy', $manager->id)}}">
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
                            <td>{{$manager->name}}</td>
                            <td>{{$manager->address}}</td>
                            <td>{{$manager->email}}</td>
                            <td>{{$manager->phone}}</td>
                            <td>{{$office->name}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{$managers->links()}}
            </div>
        </div>
    </div>
@endsection
