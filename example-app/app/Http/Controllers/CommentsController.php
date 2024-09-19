<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentsController extends Controller
{
    // | FUNCTIONS | // 

    // Array of commentaries (better put a database plz)
    public $acomments = ["Feliz jueves", "Ravvava paga el wifi"];

    // Return view of comments and the wildcard of comments in the view get the information of the array acomments
    function index(){
        return view('comments', ['comments' => $this->acomments]);
  }

  // Return view of the form to insert a comment
  function create(){
    return view('commentscc');
    }

    // This let you to send commentaries from the form
    function store(Request $request){
        array_push($this->acomments, $request->comment);
        return view('comments', ['comments' => $this->acomments]);
    }

    // This shows you the comments by id (in this case, by the position of array)
    function show(string $id){
        return $this->acomments[$id];
    }

    function edit(string $id){
        return view('commentsed');
    }

    function update(Request $request, string $id){
        
    }
}
