@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Pay for listing</div>

                <div class="card-body">
                    @if($listing->cost() == 0)
                        <form action="#" method="post">
                            <p>There is nothing for you to pay.</p>
                            <button type="submit" class="btn btn-primary">Complete</button>

                            {{ csrf_field() }}
                            {{ method_field('PATCH') }}
                        </form>
                    @else
                        <p>Total cost: ${{ number_format($listing_cost(), 2) }}</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
