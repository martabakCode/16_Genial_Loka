@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <form action="/admin/location" method="post">
        @method('PUT')
        @csrf
        <input type="hidden" name="id" value="{{ $location->id }}">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $location->name }}">
            </div>
            <div class="form-group col-md-6">
                <label for="ops">Operational Time</label>
                <input type="text" class="form-control" id="ops" name="operational_time" value="{{ $location->operational_time }}">
            </div>
        </div>

        <div class="form-group">
            <label for="exampleFormControlTextarea1">Description</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description" >{{ $location->description }}</textarea>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="weight">weight</label>
                <input type="number" class="form-control" id="weight" name="weight" value="{{ $location->weight }}">
            </div>
            <div class="form-group col-md-6">
                <label for="status">Status</label>
                <input type="text" class="form-control" id="status" name="status" value="{{ $location->status }}">
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
