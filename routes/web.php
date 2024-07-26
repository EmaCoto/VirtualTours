<?php

use App\Livewire\ContentTour;
use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('home'); })->name('home');
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', function () { return view('dashboard'); })->name('dashboard');
});

Route::get('/content-tour/{postId}', function ($postId) {
    return view('content', ['postId' => $postId]);
})->name('content-tour');
