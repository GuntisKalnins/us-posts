@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create listing</div>
                <div class="card-body">

                    <form action="{{ route('listings.store', [$area]) }}" method="post">
                        @include('listings.partials.forms._areas')
                        @include('listings.partials.forms._categories')

                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" id="title" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="body">Body</label>
                            <textarea type="text" name="body" id="body" cols="30" rows="8" class="form-control"></textarea>
                        </div>
                        <div class="fomr-group">
                            <button type="submit" class="btn btn-default">Save</button>                        
                        </div>

                        {{ csrf_field() }}
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
