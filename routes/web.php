<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\BookController@index');
Route::get('/teste', 'App\Http\Controllers\BookController@create');
Route::get('/login', 'App\Http\Controllers\ValidacaoController@index');
Route::get('/requestComentario', 'App\Http\Controllers\ComentarioController@index');
Route::get('/Comentarios', 'App\Http\Controllers\BookController@Comentarios');
Route::get('/posts/{id}/comments', 'App\Http\Controllers\ComentarioController@getComentarios');
Route::get('/posts/{texto}/pesquisaPost', 'App\Http\Controllers\BookController@pesquisarPost');
Route::get('/aprovar', 'App\Http\Controllers\BookController@buscarAprovacao');