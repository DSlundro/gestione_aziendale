<?php

use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

/* CLIENTS */
Route::resource('/clients', ClientController::class, [
    'except' => ['destroy']
])->middleware('auth');

require __DIR__.'/auth.php';
