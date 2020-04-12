@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h2 class="card-header">Congratulations</h2>

                <div class="card-body">
                    @if($listing->cost() == 0)
                        <form action="{{ route('listings.payment.update', [$area, $listing]) }}" method="post">
                            <p>Your listing is now live</p>
                            <button type="submit" class="btn btn-primary">Continue</button>

                            {{ csrf_field() }}
                            {{ method_field('PATCH') }}
                        </form>
                    @else
                        <!-- <p>Total cost: ${{ number_format($listing_cost(), 2) }}</p> -->
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
