@extends('layouts.app')

@section('content')
<div class="card">
    <div class="row">
        <div class="card-body">
            <h3 class="card-header">Favourites</h3>
            <div class="card-body">
            @if ($listings->count())
            
                @foreach ($listings as $listing)
                    @include ('listings.partials._listing_favourite', compact('listing'))
                @endforeach

            {{ $listings->links() }}
            </div>

            @else
                <div class="card-body">
                    <p>No favourite listings.</p>
                </div>
            @endif
            
        </div>
    </div>
</div>
@endsection
