<?php

use App\Http\Controllers\distController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\vendorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // SELLER ROUTING
    Route::get('/seller', [vendorController::class, 'resupplyRequestView'])
        ->name('sellerResupply');
    Route::get('/seller/notification', [vendorController::class, 'notificationView'])
        ->name('sellerNotif');
    Route::get('/seller/history', [vendorController::class, 'historyView'])
        ->name('sellerHistory');
    Route::get('/seller/about', [vendorController::class, 'aboutView'])
        ->name('sellerAbout');

    //DISTRIBUTOR ROUTING
    Route::get('/distributor', [distController::class, 'postRequestView'])
        ->name('distSupply');
    Route::get('/distributor/notification', [distController::class, 'notificationView'])
        ->name('distNotif');
    Route::get('/distributor/history', [distController::class, 'historyView'])
        ->name('distHistory');
    Route::get('/distributor/about', [distController::class, 'aboutView'])
        ->name('distAbout');
});


require __DIR__.'/auth.php';