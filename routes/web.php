<?php

use App\Models\Listing;
//use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserConroller;
use App\Http\Controllers\ListingController;





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

// Route::get('/', function () {
//     return view('listings');
// });


Route::get('/lang/{locale}', function (string $locale) {
   //App::setLocale($locale);
    session(['locale' => $locale]);

    //povratak na prethodnu stranicu
     //redirect('/');
    return redirect()->back();
})->whereIn('locale', ['en', 'sr'])->name('lang');



//all listings
Route::get('/', [ListingController::class, 'index'])->name('index');



//create form
Route::get('/listings/create', [ListingController::class, 'create'])->name('create')->middleware('auth');
//store


Route::post('/listings', [ListingController::class, 'store'])->name('store')->middleware('auth');


//edit
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->name('edit')->middleware('auth');

//update 
Route::put('/listings/{listing}', [ListingController::class, 'update'])->name('update')->middleware('auth');

//delete 

Route::delete('/listings/{listing}', [ListingController::class, 'destroy'])->name('delete')->middleware('auth');

//manage Listings

Route::get('/listings/manage', [ListingController::class, 'manage'])->middleware('auth')->name('manage');


//single listings !!!!!!
Route::get('/listings/{listing}', [ListingController::class, 'show'])->name('show');

//register crate form
Route::get('/register', [UserConroller::class, 'crate'])->name('register');



Auth::routes();
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');








