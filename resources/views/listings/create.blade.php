@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-7 mb-4">
            <div class="card mt-3 shadow-sm">
                <h2 class="card-header bg-secondary text-white">Create listing</h2>
                <div class="card-body">

                    <form action="{{ route('listings.store', [$area]) }}" method="post">
                        @include('listings.partials.forms._areas')
                        @include('listings.partials.forms._categories')

                        <div class="form-group{{ $errors->has('title') ? ' text-danger' : '' }}">
                            <label for="title" class="control-label"><strong>Title:</strong></label>
                            <input type="text" name="title" id="title" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}">
                        </div>
                        
                            @if ($errors->has('title'))
                                <span class="help-block">
                                    {{ $errors->first('title') }}
                                </span>
                            @endif

                        <div class="form-group{{ $errors->has('body') ? ' text-danger' : '' }}">
                            <label for="body" class="control-label"><strong>Description:</strong></label>
                            <textarea type="text" name="body" id="body" cols="30" rows="8" class="form-control{{ $errors->has('body') ? ' is-invalid' : '' }}"></textarea>
                        </div>

                            @if ($errors->has('body'))
                                <span class="help-block">
                                    {{ $errors->first('body') }}
                                </span>
                            @endif

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Continue</button>                        
                        </div>

                        {{ csrf_field() }}
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
