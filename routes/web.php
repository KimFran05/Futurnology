<?php

use App\Http\Controllers\ReservationController;
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
    return view('pagini.home');
});

Route::get('/meniu', function () {
    return view('pagini.meniu');
});

Route::get('/ghid', function () {
    return view('pagini.ghid');
});

Route::get('/rezervari', function () {
    return view('pagini.rezervari');
});

Route::post('/rezervari', [ReservationController::class, 'rezervare']);
