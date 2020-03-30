<div class="media">
    <div class="media-body">
        <h5><strong><a href="">{{ $listing->title }}</a></strong></h5>

        @if ($area->children->count())
            in {{ $listing->area->name }}

        @endif


        <ul>
            <li><time>{{ $listing->created_at->diffForHumans() }}</time></li>
            <li>{{ $listing->user->name }}</li>
        </ul>

    </div>
</div>

@yield('links')