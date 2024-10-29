<?php

use App\Http\Controllers\ProfileController;
use App\Http\Requests\StoreNewsRequest;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\News;
use App\Http\Controllers\VoteController;

Route::get('/', function () {
    return view('welcome')->with('news', News::paginate(10));
});

// ! I must fix this shit 
Route::post('/vote/{id}', [VoteController::class, 'store'])->name('votes.store');

Route::get('/send', function () {
    return view('send');
})->middleware('auth');

Route::post('/store', function (StoreNewsRequest $StoreNewsRequest) {
    $news = new News;
    $news->fill($StoreNewsRequest->validated());
    $news->user_id = Auth::id();

    $news->save();

    return redirect('/');
});

Route::get('/dashboard', function () {
    $news = Auth::user()->news()->paginate(10);
    return view('dashboard')->with('news', $news);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
