@extends('layout.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/travels/app.css') }}">
@endsection




@section('title', 'Home')

@section('content')
    <div class="container">
        <h3 class="title text-center">Le nostre migliori proposte</h3>
        <div class="row">
            @foreach ($plans as $plan)
                <div class="col-4">
                    <div class="card">
                        <div class="image">
                            <img src="{{ $plan->image }}">
                        </div>
                        <div class="info">
                            <h5 class="locations">Destinazione:
                                {{ $plan->location }}
                            </h5>
                            <p class="departure">Partenza: {{ $plan->departure_date }} da
                                {{ $plan->departure_location }}
                            </p>
                            <p class="duration">Durata: {{ $plan->duration }} notti</p>
                            <p class="room">Sistemazione: {{ $plan->room }}</p>
                            <p class="package">Trattamento: {{ $plan->package }}</p>
                            {{-- <p class="package">Prezzo: <strong>{{ $plan->price }}</strong></p> --}}

                            <div class="logo">
                                <img src="https://www.edenviaggi.it/public/uploads/loghi/Logo_Margo_by_Eden_Viaggi.svg"
                                    alt="logo agenzia">
                            </div>
                        </div>

                    </div>
                </div>

            @endforeach
        </div>
    </div>

@endsection
