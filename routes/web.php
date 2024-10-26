<?php

use Illuminate\Support\Facades\Route;

require __DIR__ . '/auth.php';

Route::view('about', 'pages.about-us')->name('about');


Route::prefix('admin')->middleware('admin')->group(function () {

    Route::view('dashboard', 'pages.admin.dashboard')->name('dashboard');

    Route::prefix('blogs')->group(function () {

        Route::view('/', 'pages.admin.blogs')->name('admin.blogs');

        Route::view('create', 'pages.admin.save-blog')->name('admin.blogs.create');

        Route::view('edit/{id}', 'pages.admin.save-blog')->name('admin.blogs.edit');
    });
});
