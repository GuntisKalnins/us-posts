@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-7 mb-4">
            <div class="card">
                <div class="card-header">Create listing</div>
                <div class="card-body">

                    <form action="{{ route('listings.store', [$area]) }}" method="post">
                        @include('listings.partials.forms._areas')
                        @include('listings.partials.forms._categories')

                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            <label for="title" class="control-label">Title</label>
                            <input type="text" name="title" id="title" class="form-control">
                        </div>
                        
                            @if ($errors->has('title'))
                                <span class="help-block">
                                    {{ $errors->first('title') }}
                                </span>
                            @endif

                        <div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
                            <label for="body" class="control-label">Body</label>
                            <textarea type="text" name="body" id="body" cols="30" rows="8" class="form-control"></textarea>
                        </div>

                            @if ($errors->has('body'))
                                <span class="help-block">
                                    {{ $errors->first('body') }}
                                </span>
                            @endif

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Save</button>                        
                        </div>

                        {{ csrf_field() }}
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
