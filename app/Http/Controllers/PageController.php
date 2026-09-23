<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use App\Models\Inquiry;
use App\Models\Listing;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $featuredListings = Listing::where('is_featured', true)->take(3)->get();
        if ($featuredListings->count() < 3) {
            $featuredListings = Listing::take(3)->get();
        }
        $testimonials = Testimonial::take(3)->get();
        
        return view('pages.home', compact('featuredListings', 'testimonials'));
    }

    public function about()
    {
        $agents = Agent::all();
        return view('pages.about', compact('agents'));
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function submitContact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:50',
            'message' => 'required|string',
            'listing_id' => 'nullable|exists:listings,id',
        ]);

        Inquiry::create($validated);

        return back()->with('success', 'Your inquiry has been received. We will contact you shortly.');
    }
}
