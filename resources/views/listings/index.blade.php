@extends('layouts.app')

@section('content')
<div class="card mt-3 shadow-sm">
    <div class="card-header">

            <h4>{{ $category->parent->name }} &nbsp; > &nbsp; {{ $category->name }}</h4>
            <a class="text-dark" href="{{ route('listings.create', [$area]) }}">Add new listing</a>

            <hr>


            @if ($listings->count())

                @foreach ($listings as $listing)
                    @include ('listings.partials._listing', compact('listing'))
                @endforeach

            {{ $listings->links() }}

            @else
                <p>No listings found.</p>
            @endif

    </div>
</div>
@endsection
