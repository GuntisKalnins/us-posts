
@extends('layouts.app')
@section('content')

@foreach($areas as $country)
<div class="card mt-3 shadow-sm text-center">
    <div class="card-header bg-secondary text-white">
        <h1 class="mb-0">{{ $country->name }}</h1>
        <p><a class="text-white" href="{{ route('user.area.store', $country) }}">(show all)</a></p>
    </div>

    <div class="row">

        @foreach ($country->children as $state)
            <div class="col-sm-6 col-lg-4" id="accordion-2">
                <div class="card-header" id="heading{{ $state->id }}">
                    <div class="mb-0 text-center">
                        <button class="btn btn-link text-dark pb-0" data-toggle="collapse" data-target="#collapse{{ $state->id }}" aria-expanded="true" aria-controls="collapse{{ $state->id }}">
                            <h4 class="mb-0">{{ $state->name }}</h4>
                        </button>
                        <p><a class="text-dark" href="{{ route('user.area.store', $state) }}">(show all)</a></p>
                    </div>
                </div>

                <div id="collapse{{ $state->id }}" class="collapse hide" aria-labelledby="heading{{ $state->id }}" data-parent="#accordion-2">
                    <div class="card-body">

                        @foreach ($state->children as $city)
                            <p class="text-center"><a class="text-dark" href="{{ route('user.area.store', $city) }}">{{ $city->name }}</a></p>
                            <hr>
                        @endforeach
                        
                    </div>
                </div>
            </div>
        @endforeach
    </div>       
</div>

@endforeach

@endsection