@extends('layouts.app')

@section('content')
<div class="card mt-3 shadow-sm">
    <h3 class="card-header bg-secondary text-white">{{ $category->parent->name }} &nbsp; > &nbsp; {{ $category->name }}</h3>
    <a class="text-dark m-2 p-2" href="{{ route('listings.create', [$area]) }}"><strong>Add new listing</strong></a>
    <div class="row">
        <hr>
        <div class="card-body m-2">

        @if ($listings->count())

            @foreach ($listings as $listing)
                @include ('listings.partials._listing', compact('listing'))
            @endforeach

        {{ $listings->links() }}

        @else
            <p class="m-2">No listings found.</p>
        @endif
        </div>
    </div>
</div>
@endsection
