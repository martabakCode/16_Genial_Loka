@extends('layouts.mobile')

@section('content')
<div class="container-xxl py-5">
    <div class="container">
        <div id="timerContainer" class="text-center bg-white p-4 rounded border border-secondary">
            <span id="timerDisplay" class="display-4 text-primary">00:00:000</span>
        </div>
        <div class="card text-center">
            <div class="card-header">
            <h4 class="text-bold">Pilih Rute yang ingin anda lalui</h4>
            </div>
            <div class="card-body">
            <p class="card-text">Mari bersama belajar mengenal satwa</p>
            <a href="#" class="btn btn-primary">Rute Rekomendasi</a>
            <a href="#" class="btn btn-primary">Rute Tependek</a>
            </div>
        </div>
    </div>
</div>
@endsection
