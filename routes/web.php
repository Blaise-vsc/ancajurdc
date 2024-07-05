<?php

use Illuminate\Support\Facades\Route;
use App\livewire\Book;
use App\livewire\DetailPage;
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
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/bookfile', function () {
        return view('bookfile');
    })->name('bookfile');
    Route::get('/book',Book::class);
    Route::get('/detail',function(){
        return view('details');
    });
    Route::get('/sent', function () {
    return view('message');
});

});
