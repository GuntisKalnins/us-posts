@extends('layouts.app')

@section('content')
<div class="card mt-3 shadow-sm">
    <h3 class="card-header bg-secondary text-white">Favourites</h3>
    <div class="row">
            
            <div class="card-body ml-3">
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
@endsection
