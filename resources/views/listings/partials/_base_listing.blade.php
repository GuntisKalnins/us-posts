<div class="media">
    <div class="media-body m-2">
            @if( $listing->image )
                <img src="{{ asset('storage/'.$listing->image) }}" alt="listing-picture" class="img-responsive img-thumbnail mb-3" width="300">
            @endif
        <h5>
            <strong><a href="{{ route('listings.show', [$area, $listing]) }}">{{ $listing->title }}</a></strong>
            @if ($area->children->count())
                in {{ $listing->area->name }}
            @endif
            in {{ $listing->area->name }}        
        </h5>
        <ul class="list-inline">
            <li><time>{{ $listing->created_at->diffForHumans() }}</time></li>
            <li>{{ $listing->user->name }}</li>
            <li>Views: {{ $listing->views() }}</li>
        </ul>

        {{ $links ?? '' }}
        <hr>
    </div>
</div>
