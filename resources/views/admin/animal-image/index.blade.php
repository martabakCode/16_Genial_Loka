@extends('adminlte::page')

@section('title', 'Animal Image')

@section('content_header')
    <h1>Animal Images</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Animal Images List</h3>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <table id="animal-image" class="table table-bordered table-striped table-hover">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Spesies</th>
                            <th>Nama File</th>
                            <th>URL</th>
                            <th>Preview</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($animal_images as $ai)
                            <tr>
                                <td>{{ $ai->id }}</td>
                                <td>{{ $ai->animal->name }}</td>
                                <td>{{ $ai->animal->species }}</td>
                                <td>{{ $ai->file_name }}</td>
                                <td><a target="_blank" href="{{ asset('storage/animal_images/'.$ai->file_name) }}"
                                       class="">{{ $ai->url }}</a>
                                </td>
                                <td><img src="{{ $ai->url }}" alt="asd" width="100%" height="150px"></td>
                                <td>
                                    <div class="d-inline">
                                        <a href="#" class="btn btn-warning"><i class="fas fa-edit"></i> Edit</a>
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
