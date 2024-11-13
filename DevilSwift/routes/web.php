<?php

use App\Http\Controllers\DeleteController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SendController;
use App\Http\Middleware\LoginControl;
use App\Models\File;
use Illuminate\Support\Facades\Route;

// | HOME | //
Route::get('/', function () {
    $files = File::all();
    return view('welcome')->with('files', $files);
});

// | LOGIN | //

// Get the view of login //
Route::get('/login', function(){
    return view ('login');
})->middleware(LoginControl::class);

// This if for authenticate the login //
Route::post('/login', [LoginController::class, 'authenticate']);

// | REGISTER | //
// Get the view of the register //
Route::get('/register', function(){
    return view('register');
});

// Register send to the form //
Route::post('/register', [RegisterController::class, 'register']);

// | LOG OUT | //
// This if for logout //
Route::get('/logout', [LoginController::class, 'logout']);

// | UPLOAD | //
// Get the files of the users //
// Route::post('/upload', [SendController::class, 'send']);


// | Download files | //
Route::get('/download/{file}', [DownloadController::class, 'downloadFile']);

Route::get('/delete/{file}', [DeleteController::class, 'delete'])->can('delete', 'file');
