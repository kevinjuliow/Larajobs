<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    //
    public function index(Request $request) {
        $tags = $request->query('tags');
        $search = $request->query('search') ;
        $listings = Listing::filter($tags)->get();
        $listings = Listing::search($search)->get();
        $listings = Listing::locationSearch($search)->get();
        return view('listings.index' , ['listings' => $listings]);
    }

    public function show (Listing $listing) {
        return view('listings.show' , [
            'listing' => $listing , 
        ]); 
    }


}
