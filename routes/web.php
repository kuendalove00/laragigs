<?php

use App\Models\Listing;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// All Listing
Route::get('/', function () {
    return view('listings', [
        'heading' => 'Latest Listing',
        'listings' => Listing::all()
    ]);
});

// Single Listing
Route::get('/listings/{listing}', function(Listing $listing){
    return view('listing', [
        'listing' => $listing
    ]);
});
