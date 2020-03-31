<div class="media">
    <div class="media-body">
        <h5>
            <strong><a href="">{{ $listing->title }}</a></strong>
            @if ($area->children->count())
                in {{ $listing->area->name }}
            @endif        
        </h5>

        <ul>
            <li><time>{{ $listing->created_at->diffForHumans() }}</time></li>
            <li>{{ $listing->user->name }}</li>
        </ul>

    </div>
</div>

@yield('links')