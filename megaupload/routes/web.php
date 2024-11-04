<?php

use App\Http\Controllers\DeleteController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SendController;
use App\Models\File;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $files = File::all();
    return view('welcome')->with('files', $files);
});

Route::get('/login', function(){
    return view ('login');
});

// | This if for authenticate the login | //
Route::post('/login', [LoginController::class, 'authenticate']);

// | This if for logout | //
Route::get('/logout', [LoginController::class, 'logout']);

// | Get the files of the users | //
Route::post('/upload', [SendController::class, 'send']);
// ->can('upload', File::class)
// ! Add this properly!


// | Download files | //
Route::get('/download/{file}', [DownloadController::class, 'downloadFile']);

Route::get('/delete/{file}', [DeleteController::class, 'delete'])->can('delete', 'file');
