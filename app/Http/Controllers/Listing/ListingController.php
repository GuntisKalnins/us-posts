<?php

namespace App\Http\Controllers\Listing;

use App\{Area, Category, Listing};
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function index(Area $area, Category $category)
    {
        $listings = Listing::with(['user', 'area'])->isLive()->inArea($area)->fromCategory($category)->latestFirst(0)->paginate(10);

        return view('listings.index', compact('listings', 'category'));
    }
}
