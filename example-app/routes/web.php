<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentsController;

Route::get('/', function () {
    return view('welcome');
});


// | COMMENTS | //

// Comments get URL
Route::get('/comments', [CommentsController::class, 'index']);

// Comments get the form to create a
Route::get('/comments/create', [CommentsController::class, 'create']);

// Comments post
Route::post('/comments', [CommentsController::class, 'store']);

// Comments get URL comment id
Route::get('/comments/{id}', [CommentsController::class, 'show']);

// Comments get URL for edit a specific comment
Route::get('/comments/{id}/edit', [CommentsController::class, 'edit']);

// Comments for edit and update one comment
Route::patch('/comments', [CommentsController::class, 'update']);

// Comments delete comment
Route::delete('/comments', function () {

});
