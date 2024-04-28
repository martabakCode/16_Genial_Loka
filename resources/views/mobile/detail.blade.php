@extends('layouts.mobile')

@section('content')
    {{--    @dd($animal)--}}
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <div class="card">
                        <div class="row no-gutters">
                            <div class="col-md-5">
                                <img
                                    src="{{ isset($animal->animal_images->first()->url) ? $animal->animal_images->first()->url : 'https://placehold.co/150x100' }}"
                                    class="card-img">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <h3 class="card-title
                                    ">{{ $animal->name }}
                                    </h3>
                                    <h5 class="card-title
                                    "><b>{{ $animal->species }} </b></h5>
                                    <i class="card-text">{{ $animal->latin_name }}</i>
                                    <p class="card-text mt-3">{{ Str::of($animal->description)->limit(300, '...') }}</p>
                                    <table class="table">
                                        <tr>
                                            <td>Food</td>
                                            <td>:</td>
                                            <td>{{$animal->food}}</td>
                                        </tr>
                                        <tr>
                                            <td>Kelamin</td>
                                            <td>:</td>
                                            <td>{{$animal->reproduction}}</td>
                                        </tr>
                                        <tr>
                                            <td>Jadwal Pemberian Makan</td>
                                            <td>:</td>
                                            <td>{{$animal->feeding_time}}</td>
                                        </tr>
                                        <tr>
                                            <td>Tanggal Lahir</td>
                                            <td>:</td>
                                            <td>{{$animal->date_of_birth}}</td>
                                        </tr>
                                        <tr>
                                            <td>Berat</td>
                                            <td>:</td>
                                            <td>{{$animal->weight}} Kg</td>
                                        </tr>
                                        <tr>
                                            <td>Boleh diberi makan</td>
                                            <td>:</td>
                                            <td>{{$animal->is_feedable == 1 ? 'Ya' : 'Tidak' }}</td>
                                        </tr>
                                    </table>
                                    <div class="mt-5">
                                        <div class="d-flex justify-content-end">
                                            <a href="{{$animal->ar_url}}" class="btn btn-success ">Try On AR</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
