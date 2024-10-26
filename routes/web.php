<?php

use App\Http\Controllers\BookingController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('main');
});

Route::get('/service', function () {
    return view('service');
});


Route::get('/home/book/{service:id}', [BookingController::class, 'showBookingForm'])->name('book.showBookingForm');

Route::get('/staff/available', [BookingController::class, 'availableStaff'])->name('staff.available');

