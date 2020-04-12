@extends('layouts.app')

@section('content')

<div class="card">
        <div class="row">
            
            @foreach ($categories as $category)
            <div class="col-sm-6">
                <div id="accordion">
                        <div class="card-header" id="heading{{ $category->id }}">
                            <h5 class="mb-0">
                                <button class="btn btn-link text-dark" data-toggle="collapse" data-target="#collapse{{ $category->id }}" aria-expanded="true" aria-controls="collapse{{ $category->id }}">
                                    {{ $category->name }}
                                </button>
                            </h5>
                        </div>

                        <div id="collapse{{ $category->id }}" class="collapse hide" aria-labelledby="heading{{ $category->id }}" data-parent="#accordion">
                            <div class="card-body">

                                @foreach($category->children as $sub)
                                    <h5><a class="text-dark" href="{{ route('listings.index', [$area, $sub]) }}">{{ $sub->name }}</a> ({{ $sub->listings->count() }})</h5>
                                @endforeach
                                
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            
        </div>
</div>

@endsection
