@extends('layouts.app')

@section('content')
<div class="card">
    <div class="row">
        <div class="card-body">
            <h3 class="card-header">My listings</h3>
            <div class="card-body">
                @if ($listings->count())
                
                    @each ('listings.partials._listing_own', $listings, 'listing')

                {{ $listings->links() }}
            </div>
            
            @else
                <div class="card-body">
                    <p>No published listings.</p>
                </div>    
            @endif

        </div>
    </div>
</div>
@endsection
