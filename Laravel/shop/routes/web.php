<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentsController;

// | THE SHOP | //

Route::get('/', function () {
    return view('main');
});

Route::get('/deals', function (){
    return view('deals');
});

Route::get('/selection', function (){
    return view('selection');
});

Route::get('/topsales', function (){
    return view('topsales');
});

Route::get('/product/{id}', function (){
    return view('product');
});
