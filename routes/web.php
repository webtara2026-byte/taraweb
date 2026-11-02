<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'hotel')->name('home');
Route::view('/kamar', 'kamar')->name('hotel.kamar');
Route::view('/fasilitas', 'fasilitas')->name('hotel.fasilitas');
Route::view('/tentang', 'tentang')->name('hotel.tentang');
Route::view('/reservasi', 'reservasi')->name('hotel.reservasi');
Route::view('/kontak', 'kontak')->name('hotel.kontak');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

require __DIR__.'/settings.php';
