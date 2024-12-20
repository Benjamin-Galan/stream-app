<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;



Route::get('/', [PagesController::class, 'inicio']);
Route::get('/registro', [PagesController::class, 'registro']);
Route::get('/login', [PagesController::class, 'login']);

Route::get('/admin', function () {
    return view('/admin/index');
});