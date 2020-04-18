Hi <strong>{{ $listing->user->name }}</strong>,<br><br>

<strong>{{ $sender->name }}</strong> has contacted you about your listing, 
<a href="{{ route('listings.show', [$listing->area, $listing]) }}">{{ $listing->title }}</a>.<br>

<br>
{!! nl2br(e($body)) !!}
<br><hr><br>

<i>Reply directly to this email to get back to them</i>