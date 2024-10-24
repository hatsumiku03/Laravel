<?php

use App\Http\Controllers\ProfileController;
use App\Http\Requests\StoreNewsRequest;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\News;


Route::get('/', function () {
    return view('welcome')->with('news', News::all());
});

Route::get('/send', function () {
    return view('send');
});

Route::post('/store', function (StoreNewsRequest $StoreNewsRequest) {
    $news = new News;
    $news->fill($StoreNewsRequest->validated());
    $news->user_id = Auth::id();

    $news->save();

    return redirect('/');
});

Route::get('/dashboard', function () {
    return view('dashboard')->with('news',Auth::user()->news);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
