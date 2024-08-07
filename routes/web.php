<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('contact', function () {
    return view('contact');
 });
 Route::get('about', function () {
    return view('about');
 });


 //Route::get('/', [EventController::class, 'index']); // Or whatever route is calling the index method
 Route::get('/events/{id}', [EventController::class, 'show'])->name('events.show');
 Route::get('/', [EventController::class, 'index'])->name('events.index');
// Route::get('/event/{id}', [EventController::class, 'show'])->name('event.show');
