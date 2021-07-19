@extends('layout.app')

@section('title', 'Home')

@section('content')
    <div class="container">
        <h3 class="title">Le nostre migliori proposte</h3>
        @foreach ($plans as $plan)
            <div class="row">
                <div class="col-4">
                    <div class="card">
                        <img src="{{ $plan->image }}" alt="">
                    </div>
                </div>

            </div>
        @endforeach
    </div>

@endsection
