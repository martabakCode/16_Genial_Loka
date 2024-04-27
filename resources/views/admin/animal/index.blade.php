@extends('adminlte::page')

@section('title', 'Location')

@section('content_header')
    <h1>Location</h1>
@stop

@section('content')
    <p>Location panel.</p>
    <button class="btn btn-sm btn-success mb-3">
        <a href="{{ url('/admin/animals/create') }}" class="text-white">
            Tambah Hewan
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
                                            Lokasi
                                        </th>
                                        <th class="sorting">
                                            Nama
                                        </th>
                                        <th class="sorting">
                                            Spesias
                                        </th>
                                        <th class="sorting">
                                            Nama Latin
                                        </th>
                                        <th class="sorting">
                                            Deskripsi
                                        </th>
                                        <th class="sorting">
                                            Makanan
                                        </th>
                                        <th class="sorting">
                                            Reproduksi
                                        </th>
                                        <th class="sorting">
                                            Waktu Makan
                                        </th>
                                        <th class="sorting">
                                            Lahir
                                        </th>
                                        <th class="sorting">
                                            Berat
                                        </th>
                                        <th class="sorting">
                                            Is Feedable
                                        </th>
                                        <th class="sorting">
                                            Action
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($animals as $animal)
                                        <tr>
                                            <td class="dtr-control sorting_1" tabindex="0">{{ $animal->location->name }}</td>
                                            <td>{{ $animal->name }}</td>
                                            <td>{{ $animal->species }}</td>
                                            <td>{{ $animal->latin_name }}</td>
                                            <td>{{ $animal->description }}</td>
                                            <td>{{ $animal->food }}</td>
                                            <td>{{ $animal->reproduction }}</td>
                                            <td>{{ $animal->feeding_time }}</td>
                                            <td>{{ $animal->date_of_birth }}</td>
                                            <td>{{ $animal->weight }}</td>
                                            <td>{{ $animal->is_feedable }}</td>
                                            <td>
                                                <a href="{{ url('/admin/animals/' . $animal->id . '/update') }}">
                                                    Edit
                                                </a> |
                                                <a href="{{ url('/admin/animals/' . $animal->id . '/destroy') }}">
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
