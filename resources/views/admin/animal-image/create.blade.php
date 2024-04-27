@extends('adminlte::page')

@section('title', 'Animal Image')

@section('content_header')
    <h1>Animal Images</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Create Animal Image</h3>
        </div>
        <form action="{{ route('animal-images.store') }}" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="animal_id">Animal</label>
                    <select name="animal_id" id="animal_id" class="form-control select2">
                        <option>Select Animal</option>
                        @foreach($animals as $animal)
                            <option value="{{ $animal->id }}">{{ $animal->name }} | {{ $animal->species }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" name="image" id="image" class="form-control">
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Create</button>
            </div>
        </form>
    </div>

@endsection

@section('css')

@endsection

@section('js')
    <script>
        $(document).ready(function () {
            $('#animal_id').select2();
        });
    </script>
@endsection
