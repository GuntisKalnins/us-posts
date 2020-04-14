@extends('layouts.app')

@section('content')
<div class="card mt-3 shadow-sm">
    <h3 class="card-header bg-secondary text-white">My listings</h3>
    <div class="row">
            
            <div class="card-body ml-3">
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
