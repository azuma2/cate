<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\CateController;


Route::get('/', [TodoController::class, 'index']);
Route::post('/todo/create', [TodoController::class, 'create']);
Route::post('/todo/update', [TodoController::class, 'update']);
Route::delete('/todo/delete', [TodoController::class, 'remove']);
Route::post('/todo/search', [TodoController::class, 'search']);
Route::post('/cate/create', [CateController::class, 'post']);
Route::post('/Cate/update', [CateController::class, 'update']);
Route::delete('/Cate/delete', [CateController::class, 'dalete']);
Route::post('/Cate/search', [CateController::class, 'search']);
