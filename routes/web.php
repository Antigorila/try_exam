<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\Controller;
use Illuminate\Routing\Controller as RoutingController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/getCsrf', [BookController::class, 'getCsrf']);
Route::resource('/books', BookController::class);
