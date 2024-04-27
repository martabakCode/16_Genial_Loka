@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <form action="/admin/animals" method="post">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="name">Lokasi</label>
                <select class="form-control" id="exampleFormControlSelect1" name="location_id">
                    @foreach($locations as $location)
                        <option value="{{ $location->id }}">{{ $location->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="ops">Nama</label>
                <input type="text" class="form-control" id="ops" name="name">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="name">Spesias</label>
                <input type="text" class="form-control" id="name" name="species">
            </div>
            <div class="form-group col-md-6">
                <label for="ops">Nama Latin</label>
                <input type="text" class="form-control" id="ops" name="latin_name">
            </div>
        </div>

        <div class="form-group">
            <label for="exampleFormControlTextarea1">Description</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="weight">Makanan</label>
                <input type="text" class="form-control" id="weight" name="food">
            </div>
            <div class="form-group col-md-6">
                <label for="status">Reproduksi</label>
                <input type="text" class="form-control" id="status" name="reproduction">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="weight">Waktu Makan</label>
                <input type="text" class="form-control" id="weight" name="feeding_time">
            </div>
            <div class="form-group col-md-6">
                <label for="status">Lahir</label>
                <input type="date" class="form-control" id="status" name="date_of_birth">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="weight">Berat</label>
                <input type="number" class="form-control" id="weight" name="weight">
            </div>
            <div class="form-group col-md-6">
                <label for="status">Boleh Diberi Makan</label>
                <input type="number" class="form-control" id="status" name="is_feedable">
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop
