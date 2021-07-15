<?php

use App\Http\Controllers\ListingController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',  [ListingController::class,'index'])->name('listings.index');
Route::get('/create',  [ListingController::class,'create'])->name('listings.create');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
Route::get('/{listing}',  [ListingController::class,'show'])
      ->name('listings.show');
Route::get('/{listing}/apply',  [ListingController::class,'apply'])
          ->name('listings.apply');

