<?php

use App\Models\Listing;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('listings' , [
        'listings' => Listing::all()
    ]);
});


Route::get('/jobs/{id}' , function($id){
    return view('listing' , [
        'listing' => Listing::find( $id ) , 
    ]); 
});

Route::get('/login' , function() {
    return view('loginPage'); 
});


