@extends('adminlte::page')

@section('title', 'Animal Image')

@section('content_header')
    <h1>Animal Images</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <h3 class="card-title">Animal Images List</h3>
                <a href="{{ route('animal-images.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah
                    data gambar hewan</a>
            </div>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <table id="animal-image" class="table table-bordered table-striped table-hover">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Spesies</th>
                                <th>Nama File</th>
                                <th>URL</th>
                                <th style="height: 50%; width: 50%">Preview</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php $no = 1 @endphp
                            @forelse($animal_images as $ai)
                                <tr>
                                    <td>{{ $no }}</td>
                                    <td>{{ $ai->animal->name }}</td>
                                    <td>{{ $ai->animal->species }}</td>
                                    <td>{{ $ai->file_name }}</td>
                                    <td><a target="_blank" href="{{ asset('storage/animal_images/'.$ai->file_name) }}"
                                           class="">{{ $ai->url }}</a>
                                    </td>
                                    <td><img src="{{ $ai->url }}" class="img-thumbnail" alt="asd" width="50%"></td>
                                    <td>
                                        <div class="d-flex justify-content-between">
                                            <a href="{{ route('animal-images.edit', $ai->id) }}" class="btn btn-warning"><i class="fas fa-edit"></i> Edit</a>
                                            <form action="{{ route('animal-images.destroy', $ai->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button id="delete-image" class="btn btn-danger" type="submit"><i
                                                        class="fas fa-trash"></i> Delete
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @php $no++ @endphp
                            @empty
                                <tr>
                                    <td colspan="6">Tidak ada data</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
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
        $(document).ready(() => {
            $('#animal-image').DataTable();
        })
    </script>
@stop
