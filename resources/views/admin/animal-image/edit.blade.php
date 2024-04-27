@extends('adminlte::page')

@section('title', 'Animal Image')

@section('content_header')
    <h1>Animal Images</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Update Animal Image</h3>
        </div>
        <form action="{{ route('animal-images.update', $animalImage->id) }}" enctype="multipart/form-data" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="form-group">
                    <label for="animal_id">Animal</label>
                    <select name="animal_id" id="animal_id" class="form-control">
                        <option disabled hidden>Select Animal</option>
                        @foreach($animals as $animal)
                            <option value="{{ $animal->id }}" {{ $animalImage->animal_id == $animal->id ? 'selected' : '' }} >{{ $animal->name }} | {{ $animal->species }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" name="image" id="image" class="form-control">
                </div>
            </div>
            <div class="card-footer">
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </div>
        </form>
    </div>

@endsection

@section('css')

@endsection

@section('js')
    <script>
        $(document).ready(function () {
            // $('#animal_id').select2();
        });
    </script>
@endsection
