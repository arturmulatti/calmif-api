<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ValidacaoController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::post('/create', [BookController::class, 'store']);
Route::post('/cadastroUser', [UserController::class, 'store']);
Route::post('/LoginEmail', [ValidacaoController::class, 'store']);