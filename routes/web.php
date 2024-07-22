<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// Route::get('posts/{id}', function () {
//     return view('welcome');
// });
Route::get('posts/{id}', function ($id) {
    return "hello my id" .$id;
});
Route::get('home/{id?}', function () {
    return view('index');
});
Route::get('edit', function () {
    return view('edit');
});
Route::get('/page', function () {
    return view('home');
});
Route::get('/login', function () {
    return view('login');
});