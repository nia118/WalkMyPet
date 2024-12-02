<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\BookListController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('home');
});

Route::get('/home', function () {
    return view('main');
})->name('home');

Route::get('/service', function () {
    return view('service');
})->name('service');

Route::get('/about', function () {
    return view('about');
})->name('about');


Route::get('/home', [MessageController::class, 'showMessage'])->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/book/{service:id}', [BookingController::class, 'showBookingForm'])->name('book.showBookingForm');
    Route::post('/book/{service:id}/insert', [BookingController::class, 'insert'])->name('book.insert');
    Route::get('/staff/available', [BookingController::class, 'availableStaff'])->name('staff.available');

    Route::get('/contact', function () {
        return view('contact');
    })->name('contact');
    
    Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

    Route::get('/booklist', [BookListController::class, 'showBookList'])->name('booklist');

    Route::delete('/bookings/{booking}', [BookingController::class, 'cancel'])->name('booking.cancel');
});

require __DIR__.'/auth.php';

Route::get('/coba', function () {
    return view('coba');
});
