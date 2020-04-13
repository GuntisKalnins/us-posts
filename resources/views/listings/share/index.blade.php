@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header">Share listing <em>{{ $listing->title }}</em></div>
                <div class="card-body">
                    <p>Share this listing with up to 5 people</p>

                    <form action="{{ route('listings.share.store', [$area, $listing]) }}" method="post">
                        @foreach(range(0, 4) as $n)
                        <div class="form-group{{ $errors->has('emails.' . $n) ? ' text-danger' : '' }}">
                            <label for="emails.{{ $n }}">Email:</label>
                            <input type="text" name="emails[]" id="emails.{{ $n }}" class="form-control{{ $errors->has('emails.' . $n) ? ' is-invalid' : '' }}" placeholder="address" value="{{ old('emails' . $n) }}">

                            @if ($errors->has('emails.' . $n))
                                <span class="help-block">
                                    {{ $errors->first('emails.' . $n) }}
                                </span>
                            @endif
                        </div>
                        @endforeach   

                        <div class="form-group{{ $errors->has('message') ? ' text-danger' : '' }}">
                            <label for="message">Message (optional)</label>
                            <textarea name="message" id="message" cols="30" rows="5" class="form-control"></textarea>
                            @if ($errors->has('message'))
                                <span class="help-block">
                                    {{ $errors->first('message') }}
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Send</button>
                        </div>
                        {{ csrf_field() }}
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
