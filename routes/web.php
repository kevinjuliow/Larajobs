<?php

use App\Models\Listing;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;

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
    return view('users.loginPage'); 
});

//Show Register Form
Route::get('/register' , [UserController::class , 'create']);

//Store User
Route::post('/users' , [UserController::class,'store']);

//Log user out
Route::post('/logout' , [UserController::class,'logout']);


