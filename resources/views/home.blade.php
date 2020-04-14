@extends('layouts.app')

@section('content')


<div class="card mt-3 shadow-sm">
    <div class="card-body">
        <div class="row">

            @foreach($areas as $country)
                <div class="card-body col-md-6">
                    <h3 class="card-title"><a class="text-dark" href="{{ route('user.area.store', $country) }}">{{ $country->name }}</a></h3>
                    <hr>
                    @foreach ($country->children as $state)
                        <div id="accordion">
                            <div class="card-header" id="heading{{ $state->id }}">
                                <h5 class="mb-0">
                                    <button class="btn btn-link text-dark" data-toggle="collapse" data-target="#collapse{{ $state->id }}" aria-expanded="true" aria-controls="collapse{{ $state->id }}">
                                        {{ $state->name }}
                                    </button>
                                    <p class="d-inline"><small><a class="text-secondary" href="{{ route('user.area.store', $state) }}">(show all)</a></small></p>
                                </h5>
                            </div>

                            <div id="collapse{{ $state->id }}" class="collapse hide" aria-labelledby="heading{{ $state->id }}" data-parent="#accordion">
                                <div class="card-body">

                                    @foreach ($state->children as $city)
                                        <p><a class="text-dark" href="{{ route('user.area.store', $city) }}">{{ $city->name }}</a></p>
                                        <hr>
                                    @endforeach
                                    
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            @endforeach
        </div>
    </div>
</div>



@endsection