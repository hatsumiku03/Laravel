<?php

use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MovieController::class, 'index']);

Route::get('movie/{id}', [MovieController::class, 'show']);

Route::get('/create', [MovieController::class, 'create']);
