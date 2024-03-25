<?php

use App\Models\Listing;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;

Route::get('/', [ListingController::class,'index']);

//display the create job form
Route::get('jobs/create', [ListingController::class,'create'])->middleware('auth');

//store the job to db
Route::post('/jobs' , [ListingController::class,'store'])->middleware('auth');

//display edit form
Route::get('/jobs/{listing}/edit' , [ListingController::class,'edit'])->middleware('auth');

//Update Listing
Route::put('/jobs/{listing}' , [ListingController::class, 'update'])->middleware('auth');

//Delete Listing
Route::delete('/jobs/{listing}' , [ListingController::class, 'destroy'])->middleware('auth');

//show single listing
Route::get('/jobs/{listing}' , [ListingController::class,'show']);

//Show Register Form
Route::get('/register' , [UserController::class , 'create']);

//Store User
Route::post('/users' , [UserController::class,'store']);

//Log user out
Route::post('/logout' , [UserController::class,'logout'])->middleware('auth');

//User login form
Route::get('/login' , [UserController::class,'login'])->name('login');

//Authenticate User Login
Route::post('/users/authenticate' , [UserController::class,'authenticate']); 
