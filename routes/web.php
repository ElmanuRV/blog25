<?php

use Illuminate\Support\Facades\Route;

Route::view('/',view: 'welcome');
Route::view(uri: 'contact', view : 'contact')->name('contact');
Route::view(uri: 'about', view : 'about')->name('about');
Route::view(uri: 'blog', view : 'blog')->name('blog');

