<?php

use Illuminate\Support\Facades\Route;

require __DIR__ . '/auth.php';

Route::view('about', 'pages.about-us')->name('about');


Route::prefix('admin')->middleware('admin')->group(function () {

    Route::view('dashboard', 'pages.admin.dashboard')->name('dashboard');
});
