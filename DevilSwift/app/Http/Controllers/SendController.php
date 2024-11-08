<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SendController extends Controller
{
    public function send(Request $r){
        $file = new File();
        $file->path = $r->file('uploaded_content')->store();
        $file->name = $r->file('uploaded_content')->getClientOriginalName();
        $file->public_visibility = $r->input('public_visibility'); 
        $file->user_id = Auth::user()->id;
        $file->save();

        return redirect('/');
    }
}
