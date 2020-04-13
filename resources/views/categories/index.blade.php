@extends('layouts.app')

@section('content')

<div class="card shadow-sm">
    <div class="card-header">
        <h2 >Showing all listings in {{ $area->name }}</h2>
        <a href="{{ route('listings.create', [$area]) }}">Add new listing</a>
    </div>
    
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
                                <h6><a class="text-dark" href="{{ route('listings.index', [$area, $sub]) }}">{{ $sub->name }}</a> ({{ $sub->listings->count() }})</h6>
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
