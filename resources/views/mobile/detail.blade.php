@extends('layouts.mobile')

@section('content')
<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
      <div class="row g-5">
        <div class="wow fadeInUp" data-wow-delay="0.1s">
          <p><span class="text-primary me-2">#</span>Apa itu?</p>
          <h1 class="display-5 mb-4">
            {{ $location->name }}
          </h1>
          <p class="mb-4">
            {{$location->description}}
          </p>
          @foreach ($location->animals as $animal)
          <div class="card">
            <div class="row">
                <div class="col-3">
                    <img class="w-100 rounded" src="{{ $animal->animal_images->first()->url }}"/>
                </div>
                <div class="col-9">
                    <div class="card-body">
                    <h4 class="card-title h5 h4-sm">Left image</h4>
                    <p class="card-text">
                        <h5 class="mb-3">
                            <i class="far fa-check-circle text-primary me-3"></i>
                            <span class="text-primary me-2">Habitat </span> {{$location->description}}
                        </h5>
                    </p>
                    </div>
                </div>
          </div>
          @endforeach
        </div>
        </div>
      </div>
    </div>
  </div>
  <!-- About End -->
@stop
