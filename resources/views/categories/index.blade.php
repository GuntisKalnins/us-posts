@extends('layouts.app')

@section('content')

<div class="card mt-3 shadow-sm text-center">
    <div class="card-header bg-secondary text-white">
        <h1>Listings in {{ $area->name }}</h1>
        <a class="text-white" href="{{ route('listings.create', [$area]) }}">Add new listing</a>
    </div>
    
    <div class="row">
        
        @foreach ($categories as $category)
        <div class="col-sm-6 col-lg-4">
            <div id="accordion-{{ $category->id }}">
                    <div class="card-header" id="heading{{ $category->id }}">
                        <div class="mb-0 text-center">
                            <button class="btn btn-link text-dark" data-toggle="collapse" data-target="#collapse{{ $category->id }}" aria-expanded="true" aria-controls="collapse{{ $category->id }}">
                                <h4>{{ $category->name }}</h4>
                            </button>
                            
                        </div>
                    </div>

                    <div id="collapse{{ $category->id }}" class="collapse hide" aria-labelledby="heading{{ $category->id }}" data-parent="#accordion-{{ $category->id }}">
                        <div class="card-body">

                            @foreach($category->children as $sub)
                                <h5 class="text-center"><a class="text-dark" href="{{ route('listings.index', [$area, $sub]) }}">{{ $sub->name }}</a> ({{ $sub->listings->count() }})</h5>
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
