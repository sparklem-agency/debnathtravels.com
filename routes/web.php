<?php

use Illuminate\Support\Facades\Route;

require __DIR__ . '/auth.php';

Route::view('/', 'pages.index')->name('home');

Route::view('about', 'pages.about-us')->name('about');

Route::view('packages/{slug}', 'pages.view-package')->name('view-package');


Route::prefix('admin')->middleware('admin')->group(function () {

    Route::view('dashboard', 'pages.admin.dashboard')->name('dashboard');

    Route::prefix('blogs')->group(function () {

        Route::view('/', 'pages.admin.blogs')->name('admin.blogs');

        Route::view('create', 'pages.admin.save-blog')->name('admin.blogs.create');

        Route::view('edit/{id}', 'pages.admin.save-blog')->name('admin.blogs.edit');
    });

    Route::prefix('packages')->group(function () {

        Route::view('/', 'pages.admin.packages')->name('admin.packages');

        Route::view('create', 'pages.admin.save-package')->name('admin.packages.create');

        Route::view('edit/{id}', 'pages.admin.save-package')->name('admin.packages.edit');
    });

    Route::prefix('cars')->group(function () {
        Route::view('/', 'pages.admin.cars')->name('admin.cars');

        Route::view('create', 'pages.admin.save-car')->name('admin.cars.create');

        Route::view('edit/{id}', 'pages.admin.save-car')->name('admin.cars.edit');
    });

    Route::prefix('places')->group(function () {
        Route::view('/', 'pages.admin.places')->name('admin.places');

        Route::view('create', 'pages.admin.save-place')->name('admin.places.create');

        Route::view('edit/{id}', 'pages.admin.save-place')->name('admin.places.edit');
    });

    Route::view('/reviews', 'pages.admin.save-review')->name('admin.review');

    Route::view('/gallery', 'pages.admin.save-gallery')->name('admin.gallery');
});
