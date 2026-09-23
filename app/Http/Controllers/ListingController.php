<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function index(Request $request)
    {
        $query = Listing::query();

        if ($request->filled('location')) {
            $query->where('location', 'like', '%' . $request->location . '%');
        }

        if ($request->filled('type')) {
            $query->where('type', $request->type);
        }

        if ($request->filled('min_price')) {
            $query->where('price', '>=', $request->min_price);
        }

        if ($request->filled('max_price')) {
            $query->where('price', '<=', $request->max_price);
        }

        $listings = $query->paginate(9)->withQueryString();

        return view('listings.index', compact('listings'));
    }

    public function show(Listing $listing)
    {
        $listing->load('agent');
        $relatedListings = Listing::where('id', '!=', $listing->id)
            ->where(function($q) use ($listing) {
                $q->where('location', $listing->location)
                  ->orWhere('type', $listing->type);
            })
            ->take(3)
            ->get();

        return view('listings.show', compact('listing', 'relatedListings'));
    }
}
