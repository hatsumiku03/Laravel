<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentsController extends Controller
{
    // | FUNCTIONS | //

    // Array of commentaries (better put a database plz)
    // public $acomments = ["Feliz jueves", "Ravvava paga el wifi"];

    // Return view of comments and the wildcard of comments in the view get the information of the array acomments
    function index(){
        return view('comments', ['comments' => session('acomments')]);
    }

  // Return view of the form to insert a comment
    function create(){
    return view('commentscc');
    }

    // This let you to send commentaries from the form
    function store(Request $request){
        session()->push('acomments', $request->comment);
        return redirect('comments');
    }

    // This shows you the comments by id (in this case, by the position of array)
    function show(string $id){
        return view ('comment')
            ->with('comment',session('acomments')[$id])
            ->with('id',$id);
        //return session('acomments');
    }

    // Return to you the form to edit the comments
    function edit(string $id){
        return view('commentsed', ['id'=>$id]);
    }

    // All the functions of the edit form
    function update(Request $request, string $id){
        // ! DON'T WORK, FIX IT
        $comment = session('comment');
        $comment[$id] = $request->comment;
        session()->put('comment', $comment);
        return redirect('comments');
    }

    function remove(string $id){

    }
}
