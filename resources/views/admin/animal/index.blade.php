@extends('adminlte::page')

@section('title', 'Location')

@section('content_header')
    <h1>Animals</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="card-title">Loka website app</h3>
                        <a class="btn btn-primary" href="{{ url('/admin/animals/create') }}">
                            <i class="fas fa-plus"></i> Tambah Hewan
                        </a>
                    </div>
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
                                        <th>
                                            No
                                        </th>
                                        <th>
                                            Lokasi
                                        </th>
                                        <th>
                                            Nama
                                        </th>
                                        <th>
                                            Spesias
                                        </th>
                                        <th>
                                            Nama Latin
                                        </th>
                                        <th>
                                            Deskripsi
                                        </th>
                                        <th>
                                            Makanan
                                        </th>
                                        <th>
                                            Reproduksi
                                        </th>
                                        <th>
                                            Waktu Makan
                                        </th>
                                        <th>
                                            Lahir
                                        </th>
                                        <th>
                                            Berat
                                        </th>
                                        <th>
                                            Is Feedable
                                        </th>
                                        <th>
                                            Action
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @php $no = 1; @endphp
                                    @forelse($animals as $animal)
                                        <tr>
                                            <td>{{ $no }}</td>
                                            <td class="dtr-control sorting_1"
                                                tabindex="0">{{ $animal->location->name }}</td>
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
                                                <div class="d-flex justify-content-between">
                                                    <a class="btn btn-warning"
                                                       href="{{ url('/admin/animals/' . $animal->id . '/update') }}">
                                                        <i class="fas fa-edit"></i>
                                                        Edit
                                                    </a>
                                                    <a class="btn btn-danger"
                                                       href="{{ url('/admin/animals/' . $animal->id . '/destroy') }}">
                                                        <i class="fas fa-trash-alt"></i>
                                                        Delete
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        @php $no++; @endphp
                                    @empty
                                        <tr>
                                            <td colspan="12" class="text-center">Tidak ada data</td>
                                        </tr>
                                    @endforelse
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
            $('#example').DataTable();
        });
    </script>
@stop
