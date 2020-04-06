<?php

namespace App\Http\Controllers\Listing;

use App\{area, Listing};
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ListingPaymentController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth']);
    }


    public function show(Area $area, Listing $listing)
    {
        $this->authorize('touch', $listing);
        
        if ($listing->live()) {
            return back();
        }

        return view('listings.payment.show', compact('listing'));
    }


    public function store(Request $request, Area $area, Listing $listing)
    {
        $this->authorize('touch', $listing);
        
        if ($listing->live()) {
            return back();
        }

    }

    public function update(Request $request, Area $area, Listing $listing)
    {
        $this->authorize('touch', $listing);

        if ($listing->cost() > 0) {
            return back();
        }

        $listing->live = true;
        $listing->created_at = \Carbon\Carbon::now();
        $listing->save();

        return redirect()
            ->route('listings.show', [$area, $listing])
            ->withSuccess('Congratulations! Your listing is live.');

    }
}
