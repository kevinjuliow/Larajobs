<?php

namespace App\Http\Controllers;


use App\Models\Listing;
use Illuminate\Http\Request;
use App\Models\User; 



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

        $formFields['user_id'] = auth()->id();

        Listing::create($formFields);

        return redirect('/')->with('message', 'Your listing has been created!');
    }

    //show edit form
    public function edit(Listing $listing){
        return view('listings.edit' , ['listing' => $listing]);
    }

    //update listing
    public function update (Request $request , Listing $listing) {
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

        

        $listing->update($formFields);

        return back()->with('message', 'Your listing has been Updated!');
    }

    public function destroy(Listing $listing){
        $listing->delete();
        return redirect('/')->with('message', 'Your listing has been Deleted!');
    }

    public function manage()
    {
        $user = auth()->user();
        $listings = $user->listings()->get();
        return view('listings.manage' , ['listings' => $listings]);
    }

}
