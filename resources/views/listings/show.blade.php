@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-7 mb-4">
        <div class="card mt-3 shadow-sm">
                <h2 class="card-header bg-secondary text-white">{{ $listing->title }} in {{ $listing->area->name }}</h2>
                
                    @if (Auth::check())
                        <nav class="nav justify-content-center">

                            @if (!$listing->favouritedBy(Auth::user()))
                                <li class="nav-item">
                                    <strong><a class="nav-link text-dark" href="#" onclick="event.preventDefault(); document.getElementById('listings-favourite-form').submit();">Add to favourites</a></strong>
                                    <form action="{{ route('listings.favourites.store', [$area, $listing]) }}" method="post" id="listings-favourite-form" class="hidden">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            @endif

                            <li class="nav-item"><strong><a class="nav-link text-dark" href="{{ route('listings.share.index', [$area, $listing]) }}">Email to a friend</a></strong></li>
                        </nav>
                    @endif
                
                <div class="card-body pt-0">
                <hr>
                    <p class="text-secondary">Description:</p>
                    {!! nl2br(e($listing->body)) !!}
                    
                        <div>
                            <img id="myImg" src="{{ asset($listing->listingImage()) }}" style="width:100%;max-width:250px" alt="listing-picture" class="img-fluid img-thumbnail mt-4">
                            <div id="myModal" class="modal">
                                <span class="close">&times;</span>
                                <img class="modal-content" id="img01">
                                
                            </div>
                        </div>

                    <hr>
                    <p>Viewed {{ $listing->views() }} times</p>
                </div>

                <div class="card-body">

                    Contact <strong>{{ $listing->user->name }}</strong>
                    @if (Auth::guest())
                        <p><a href="/register">Sign up</a> for an account or <a href="/login">sign in</a> to contact listing owners.</p>     
                    @else
                        <form action="{{ route('listings.contact.store', [$area, $listing]) }}" method="post">
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea name="message" id="message" cols="30" rows="5" class="form-control{{ $errors->has('message') ? ' is-invalid' : '' }}"></textarea>

                                @if ($errors->has('message'))
                                    <span class="help-block">
                                        {{ $errors->first('message') }}
                                    </span>
                                @endif

                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Send</button>
                                <span class="help-block pl-2">
                                    This will send email <strong>{{ $listing->user->name }}</strong> and they will be able to reply directly to you by email.
                                </span>
                            </div>
                            {{ csrf_field() }}
                        </form>
                    @endif
                </div> 
           
        </div>
    </div>
</div>

@endsection
@section('scripts')
<script>

    var modal = document.getElementById("myModal");

    var img = document.getElementById("myImg");
    var modalImg = document.getElementById("img01");
    img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    }

    var span = document.getElementsByClassName("close")[0];

    span.onclick = function() {
    modal.style.display = "none";
}
</script>

@endsection