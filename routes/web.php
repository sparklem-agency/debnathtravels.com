<?php

use Illuminate\Support\Facades\Route;

require __DIR__ . '/auth.php';

Route::view('about', 'pages.about-us')->name('about');
