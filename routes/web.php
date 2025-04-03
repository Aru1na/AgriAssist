<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\vendorHomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

   
});

Route::get('/seller', function () {
    return view('VendorPage.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/seller/notification', function () {
    return view('VendorPage.notification');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/seller/History', function () {
    return view('VendorPage.History');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/seller/about', function () {
    return view('VendorPage.about');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::get('/distributor', function () {
    return view('distributorPage.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/distributor/notification', function () {
    return view('distributorPage.notification');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/distributor/History', function () {
    return view('distributorPage.History');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/distributor/about', function () {
    return view('distributorPage.about');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';