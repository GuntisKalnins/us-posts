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
}
