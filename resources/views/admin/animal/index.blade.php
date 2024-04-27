@extends('adminlte::page')

@section('title', 'Location')

@section('content_header')
    <h1>Location</h1>
@stop

@section('content')
    <p>Location panel.</p>
    <button class="btn btn-sm btn-success mb-3">
        <a href="{{ url('/admin/location/create') }}" class="text-white">
            Tambah Lokasi
        </a>
    </button>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Loka website app</h3>
                </div>

                <div class="card-body">
                    <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        <div class="row">
                            <div class="col-sm-12 col-md-6"></div>
                            <div class="col-sm-12 col-md-6"></div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 table-responsive">
                                <table id="example"
                                       class="table table-bordered table-hover dataTable dtr-inline collapsed table-striped"
                                       aria-describedby="example2_info">
                                    <thead>
                                    <tr>
                                        <th class="sorting sorting_asc">
                                            ID
                                        </th>
                                        <th class="sorting">
                                            Name
                                        </th>
                                        <th class="sorting">
                                            description
                                        </th>
                                        <th class="sorting">
                                            weight
                                        </th>
                                        <th class="sorting">
                                            status
                                        </th>
                                        <th class="sorting">
                                            operational time
                                        </th>
                                        <th class="sorting">
                                            action
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($locations as $location)
                                        <tr>
                                            <td class="dtr-control sorting_1" tabindex="0">{{ $location->id }}</td>
                                            <td>{{ $location->name }}</td>
                                            <td>{{ $location->description }}</td>
                                            <td>{{ $location->weight }}</td>
                                            <td>{{ $location->status }}</td>
                                            <td>{{ $location->operational_time }}</td>
                                            <td>
                                                <a href="{{ url('/admin/location/update/' . $location->id) }}">
                                                    Edit
                                                </a> |
                                                <a href="{{ url('/admin/location/destroy/' . $location->id) }}">
                                                    Delete
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script>
        $(document).ready(function () {
            new DataTable('#example');
        });
    </script>
@stop
