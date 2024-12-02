<?php

namespace App\Http\Controllers;

use App\Models\Vote;
use Illuminate\Http\Request;

class VoteController extends Controller
{
    public function store(Request $request)
    {
/*
        // ! To fix
        $vote = new Vote;
        $vote->news_id = $request->input('news_id');
        $vote->user_id = $request->input('user_id');
        $vote->save();

        return redirect('/');
*/
    }
}
