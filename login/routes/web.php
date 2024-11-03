<?php

use App\Http\Controllers\ProfileController;
use App\Http\Requests\CommentStoreRequest;
use App\Http\Requests\StoreNewsRequest;
use App\Http\Requests\VoteStoreRequest;
use App\Models\Comment;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\News;
use App\Models\Vote;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\alert;

// | The base page to see the news |
Route::get('/', function () {
    return view('welcome')->with('news', News::paginate(10));
});

// | Get the specific new |
Route::get('new/{id}', function (string $id){
    //$new_id = News::where('id', $id);
    $new = News::find($id);
    return view('new', compact('new'));
});

//  | Send a comment to the database  |
Route::post('/comment/{news_id}', function(CommentStoreRequest $commentStoreRequest, string $news_id){
    $comment = new Comment;
    $comment->text = $commentStoreRequest->text;
    $comment->news_id = $news_id;
    $comment->user_id = Auth::user()->id;
    $comment->comment_id = $commentStoreRequest->comment_id;
    $comment->save();

    return redirect()->back();
});

// | Rute send a vote to the database |
Route::post('/vote/{news_id}', function(VoteStoreRequest $votoStoreRequest, $news_id) {
    $vote = new Vote;
    $found = Vote::where('user_id', $vote->user_id = Auth::user()->id)->where('news_id', $news_id)->count();

    if(!$found){
        $vote->news_id = $news_id;
        $vote->user_id = Auth::user()->id;
        $vote->save();
    
        return redirect()->back();
    }else{
        
    return redirect()->back()->with('status', 'You already voted the new number '.$news_id);
}

})->middleware('auth');

// | The route to get the form to send a new |
Route::get('/send', function () {
    return view('send');
})->middleware('auth');

// | How to send to inf of form send to the database |
Route::post('/store', function (StoreNewsRequest $StoreNewsRequest) {
    $news = new News;
    $news->fill($StoreNewsRequest->validated());
    $news->user_id = Auth::id();

    $news->save();

    return redirect('/');
});

// | Get the profile inf |
Route::get('/dashboard', function () {
    $news = Auth::user()->news()->paginate(10);
    return view('dashboard')->with('news', $news);
})->middleware(['auth', 'verified'])->name('dashboard');

// | Auth |
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
