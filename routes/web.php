<?php

use App\Http\Controllers\ListingController;
use App\Models\Listing;
use Illuminate\Support\Facades\Route;

Route::get('/', [ListingController::class,'index']);

//display the create job form
Route::get('jobs/create', [ListingController::class,'create']);

//store the job to db
Route::post('/jobs' , [ListingController::class,'store']);

//display edit form
Route::get('/jobs/{listing}/edit' , [ListingController::class,'edit']);

//Update Listing
Route::put('/jobs/{listing}' , [ListingController::class, 'update']);

//Delete Listing
Route::delete('/jobs/{listing}' , [ListingController::class, 'destroy']);

//show single listing
Route::get('/jobs/{listing}' , [ListingController::class,'show']);

Route::get('/login' , function() {
    return view('loginPage'); 
});


