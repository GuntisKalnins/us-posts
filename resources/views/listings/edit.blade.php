@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-7 mb-4">
        <div class="card mt-3 shadow-sm">
            <h2 class="card-header bg-secondary text-white">Edit / Add image</h2>
                    @if ($listing->live())
                        <a class="m-3" href="{{ route('listings.show', [$area, $listing]) }}">Go to listing</a>
                    @endif
            
            <div class="card-body">

                <form action="{{ route('listings.update', [$area, $listing]) }}" method="post">
                    @include('listings.partials.forms._areas')
                    @include('listings.partials.forms._categories')

                    <div class="form-group{{ $errors->has('title') ? ' text-danger' : '' }}">
                        <label for="title" class="control-label">Title:</label>
                        <input type="text" name="title" id="title" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" value="{{ $listing->title }}">
                    </div>
                    
                        @if ($errors->has('title'))
                            <span class="help-block">
                                {{ $errors->first('title') }}
                            </span>
                        @endif

                    <div class="form-group{{ $errors->has('body') ? ' text-danger' : '' }}">
                        <label for="body" class="control-label">Description:</label>
                        <textarea type="text" name="body" id="body" cols="30" rows="8" class="form-control{{ $errors->has('body') ? ' is-invalid' : '' }}">{{ $listing->body }}</textarea>
                    </div>

                        @if ($errors->has('body'))
                            <span class="help-block">
                                {{ $errors->first('body') }}
                            </span>
                        @endif

                    <div class="form-group clearfix">
                        <button type="submit" name="payment" value="true" class="btn btn-primary">Confirm</button>
                    </div>

                    @if ($listing->live())
                        <input type="hidden" name="category_id" value="{{ $listing->category_id }}">
                    @endif


                    {{ csrf_field() }}
                    {{ method_field('PATCH') }}
                </form>

            </div>
        </div>
    </div>
</div>
@endsection
