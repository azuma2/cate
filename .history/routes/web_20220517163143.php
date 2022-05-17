<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\CateController;


Route::get('/', [TodoController::class, 'index']);
Route::get('/cate', [CateController::class, 'index']);

Route::post('/todo/create', [TodoController::class, 'create']);
Route::post('/todo/update', [TodoController::class, 'update']);
Route::post('/todo/delete', [TodoController::class, 'remove']);
Route::post('/todo/search', [TodoController::class, 'search']);
Route::post('/cate/create', [CateController::class, 'create']);
Route::post('/cate/update', [CateController::class, 'update']);
Route::post('/cate/delete', [CateController::class, 'remove']);
Route::post('/cate/search', [CateController::class, 'search']);
