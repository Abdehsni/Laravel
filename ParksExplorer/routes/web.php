<?php

use App\Http\Controllers\ParksController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[ParksController::class,'home'])->name('Home');

Route::get('/destination/{id?}',[ParksController::class,'destination'])->name('Destination');

Route::get('/destinations',[ParksController::class,'destinations'])->name('Destinations');

Route::get('/park/{id?}',[ParksController::class,'park'])->name('Park');

Route::get('/search',[ParksController::class,'search'])->name('Search');

