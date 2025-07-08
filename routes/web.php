<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;
use App\Http\Controllers\StadiumController;
//use App\Http\Controllers\TicketController; // also needed for tickets route

Route::get('/', function () {
    return view('index');
});

Route::get('/matches', [GameController::class, 'index'])->name('matches.index');
//Route::get('/tickets', [TicketController::class, 'index'])->name('tickets.index');
Route::get('/about', fn() => view('about'));



Route::get('/', [StadiumController::class, 'index']);
