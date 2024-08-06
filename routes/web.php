<?php

use App\Livewire\ContentTour;
use App\Livewire\Form\ReservationForm;
use Illuminate\Support\Facades\Route;


Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', function () { return view('dashboard'); })->name('dashboard');
});

Route::get('/', function () { return view('home'); })->name('home');

Route::get('/content-tour/{postId}', ContentTour::class)->name('content-tour');
Route::get('/reservation-form/{postId}', ReservationForm::class)->name('reservation-form');

