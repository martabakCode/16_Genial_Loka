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
                        <div class="card mb-3">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img
                                        src="{{ $animal->animal_images->first()->url ?? 'https://placehold.co/150x100' }}"
                                        class="card-img" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h3 class="card-title">{{ $animal->name }}</h3>
                                        <h5 class="card-title"><b>{{ $animal->species }} </b></h5>
                                        <i class="card-text">{{ $animal->latin_name }}</i>
                                        <p class="card-text mt-3">{{ Str::of($animal->description)->limit(300, '...') }}</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
@stop
