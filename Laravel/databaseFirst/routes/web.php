<?php

use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MovieController::class, 'index']);

Route::get('movie/{id}', [MovieController::class, 'show']);

Route::get('/create', [MovieController::class, 'create']);

Route::post('/create/{id}', [MovieController::class, 'store']);

Route::get('/movie/{id}/edit', [MovieController::class, 'edit']);

Route::patch('/movie/{id}', [MovieController::class, 'update']);

Route::delete('/movie/{id}/rmv', [MovieController::class, 'destroy']);
