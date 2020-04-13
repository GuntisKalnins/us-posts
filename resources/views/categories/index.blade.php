@extends('layouts.app')

@section('content')

<div class="card">
    
    <h2 class="card-header">Showing all listings in {{ $area->name }}</h2>
    
    <div class="row">
        
        @foreach ($categories as $category)
        <div class="col-md-6">
            <div id="accordion">
                    <div class="card-body" id="heading{{ $category->id }}">
                        <div class="mb-0">
                            <button class="btn btn-link text-dark" data-toggle="collapse" data-target="#collapse{{ $category->id }}" aria-expanded="true" aria-controls="collapse{{ $category->id }}">
                                <h5>{{ $category->name }}</h5>
                            </button>
                            
                        </div>
                        <hr>
                    </div>

                    <div id="collapse{{ $category->id }}" class="collapse hide" aria-labelledby="heading{{ $category->id }}" data-parent="#accordion">
                        <div class="card-body">

                            @foreach($category->children as $sub)
                                <h5><a class="text-dark" href="{{ route('listings.index', [$area, $sub]) }}">{{ $sub->name }}</a> ({{ $sub->listings->count() }})</h5>
                                <hr>
                            @endforeach
                            
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
       
    </div>
</div>

@endsection
