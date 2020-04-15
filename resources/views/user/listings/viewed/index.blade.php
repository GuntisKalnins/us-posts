@extends('layouts.app')

@section('content')
<div class="card mt-3 shadow-sm">
    <h3 class="card-header bg-secondary text-white">Recently viewed</h3>
    <div class="row">
            
        <div class="card-body">
            <p>Showing your last {{ $indexLimit }} viewed listings.</p>
            @if ($listings->count())
                @foreach ($listings as $listing)
                    @include ('listings.partials._listing', compact('listing'))
                @endforeach  
        </div>  
            
            @else
            <div class="card-body">
                <p>You have no viewed listings.</p>
            </div>    
            @endif
        
    </div>
</div>
@endsection
