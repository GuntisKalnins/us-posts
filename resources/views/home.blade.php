@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="card col-lg-4 col-md-12 mb-4">
            <div class="card-body">
                @foreach($areas as $country)
                    <div class="card-body">
                        <h4 class="card-title"><a class="text-dark" href="{{ route('user.area.store', $country) }}">{{ $country->name }}</a></h3>
                        <hr>

                        <div class="row">
                            @foreach ($country->children as $state)
                                <div class="col-md-4">
                                    <h5 class="card-text"><a href="{{ route('user.area.store', $state) }}">{{ $state->name }}</a></h4>

                                    <!-- @foreach ($state->children as $city)
                                        <h5><a href="{{ route('user.area.store', $city) }}">{{ $city->name }}</a></h5>
                                        <hr>
                                    @endforeach -->

                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
