@extends('layouts.app')

@section('title', 'Our Trips')
    
@section('content')

    <div class="container">
        @foreach ($trips as $trip)
        {{-- @dd($trip) --}}
            <div class="card">
                <h5 class="card-header">{{ $trip->title}}</h5>
                    <div class="card-body">
                        <h5 class="card-title">{{ $trip->nation}}</h5>
                        <p class="card-text">{{ $trip->description}}</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
            </div>
            
        @endforeach

        <div>
            {{ $trips->links() }}
        </div>
        
    </div>


@endsection