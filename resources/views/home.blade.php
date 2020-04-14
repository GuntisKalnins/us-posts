
@extends('layouts.app')
@section('content')
<div class="card mt-3 shadow-sm">
    <div class="bg-secondary text-white">
        <div class="row">

            @foreach($areas as $country)
                <div class="col-md-6 bg-light" id="accordion">
                    <div class="card-header bg-secondary" id="heading{{ $country->id }}">
                        <div class="mb-0 text-center">
                            <button class="btn btn-link text-white pb-0" data-toggle="collapse" data-target="#collapse{{ $country->id }}" aria-expanded="true" aria-controls="collapse{{ $country->id }}">
                                <h3 class="mb-0">{{ $country->name }}</h3>
                            </button>
                            <p><a class="text-white" href="{{ route('user.area.store', $country) }}">(show all)</a></p>
                        </div>
                    </div>

                        <div id="collapse{{ $country->id }}" class="collapse hide" aria-labelledby="heading{{ $country->id }}" data-parent="#accordion">
                            <div class="card-body bg-light">
                            <hr>
                            @foreach ($country->children as $state)
                                <div id="accordion-2">
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
                </div>

            @endforeach
        </div>
    </div>
</div>
@endsection