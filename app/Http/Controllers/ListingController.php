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
        $listings = Listing::filter($tags)->paginate(8);
        $listings = Listing::search($search)->paginate(8);
        return view('listings.index' , ['listings' => $listings]);
    }

    
    //Show Single Listing
    public function show (Listing $listing) {
        return view('listings.show' , [
            'listing' => $listing , 
        ]); 
    }
    

    //Show Create form 
    public function create() {
        return view('listings.create');
    }

    public function store (Request $request){
        $formFields =  $request->validate([
            'company' => 'required' ,
            'title' => 'required' , 
            'location' => 'required' , 
            'email' => ['required' , 'email'] , 
            'website' => 'required' ,
            'tags' => 'required' , 
            'description' => 'required' 
        ]);

        if ($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('companyLogos','public') ;
        };

        Listing::create($formFields);

        return redirect('/')->with('message', 'Your listing has been created!');
    }


}
