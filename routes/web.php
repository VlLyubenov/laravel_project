<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\ListingController;
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

Route::get('/', function () {
    return view('register');
});

Route::post('/register', [Controller::class, 'register'])->name('register');
Route::post('/login', [Controller::class, 'login'])->name('login');
Route::get('/logout', [Controller::class, 'logout'])->name('logout');

Route::resource('listings', ListingController::class);



