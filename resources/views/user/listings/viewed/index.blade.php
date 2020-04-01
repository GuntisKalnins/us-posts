@extends('layouts.app')

@section('content')
    <p>Showing your last {{ $indexLimit }} viewed listings.</p>

    @if ($listings->count())
    
        @foreach ($listings as $listing)
            @include ('listings.partials._listing', compact('listing'))
        @endforeach


    @else
        <p>You have no viewed listings.</p>
    @endif


@endsection
