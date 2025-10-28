<?php

use Illuminate\Support\Facades\Route;

Route::view('/',view: 'welcome');
Route::view(uri: 'contact', view : 'contact')->name('contact');
Route::view(uri: 'about', view : 'about')->name('about');
Route::get(uri: 'blog', action: function (){
    $posts = [
        ['Title'=>'Post 1'],
        ['Title'=>'Post 2'],
        ['Title'=>'Post 3'],
        ['Title'=>'Post 4'],
    ];
    return view(view:'blog', data: compact(var_name: 'posts'));
        })->name('blog');

