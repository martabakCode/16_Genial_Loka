@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Location</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Add New Location</h3>
        </div>
        <form action="/admin/location" method="post">
            <div class="card-body">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="ops">Operational Time</label>
                        <input type="text" class="form-control" id="ops" name="operational_time">
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Description</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                              name="description"></textarea>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="weight">Weight</label>
                        <input type="number" class="form-control" id="weight" name="weight">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="status">Status</label>
                        <input type="text" class="form-control" id="status" name="status">
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
        </form>
    </div>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop
