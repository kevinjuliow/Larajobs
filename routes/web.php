<?php

use App\Models\Listing;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('listings' , [
        'listings' => Listing::all()
    ]);
});


Route::get('/jobs/{listing}' , function(Listing $listing) {
    return view('listing' , [
        'listing' => $listing , 
    ]); 
});

Route::get('/login' , function() {
    return view('loginPage'); 
});


