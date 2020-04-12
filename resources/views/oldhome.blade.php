<!-- @extends('layouts.app')

@section('content')
    <div class="row">
        <div class="card">
            <div class="card-body">
                @foreach($areas as $country)
                    <div class="card-body">
                        <h4 class="card-title"><a class="text-dark" href="{{ route('user.area.store', $country) }}">{{ $country->name }}</a></h3>
                        <hr>

                        <div class="row">
                            @foreach ($country->children as $state)
                                <div class="col-md-4">
                                    <h5 class="card-text"><a href="{{ route('user.area.store', $state) }}">{{ $state->name }}</a></h4>

                                     @foreach ($state->children as $city)
                                        <p><a href="{{ route('user.area.store', $city) }}">{{ $city->name }}</a></p>
                                        <hr>
                                    @endforeach

                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection -->

@extends('layouts.app')

@section('content')


<div class="card">
    <div class="card-body">
        @foreach($areas as $country)
            <div class="card-body">
                <h3 class="card-title"><a class="text-dark" href="{{ route('user.area.store', $country) }}">{{ $country->name }}</a></h3>
                <hr>

                    @foreach ($country->children as $state)
                    
                        <div id="accordion">
                            <div class="card">
                                <div class="card-header" id="heading{{ $state->id }}">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapse{{ $state->id }}" aria-expanded="true" aria-controls="collapse{{ $state->id }}">
                                            {{ $state->name }}
                                        </button>
                                    </h5>
                                </div>

                                <div id="collapse{{ $state->id }}" class="collapse hide" aria-labelledby="heading{{ $state->id }}" data-parent="#accordion">
                                    <div class="card-body">
                                        @foreach ($state->children as $city)
                                            <p><a href="{{ route('user.area.store', $city) }}">{{ $city->name }}</a></p>
                                            <hr>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
            </div>
        @endforeach
    </div>
</div>


@endsection