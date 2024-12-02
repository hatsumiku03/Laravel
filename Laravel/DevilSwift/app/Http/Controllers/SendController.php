<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class SendController extends Controller
{
    //  | Esto trabaja sobre /upload para subir los archivos | //
    public function send(Request $r)
    {
        $file = new File();

        if($r->file('uploaded_content') == null) {
            return redirect('/')->with('status', 'You must put a file');
        }else{
            $file->path = $r->file('uploaded_content')->store();
            $file->name = $r->file('uploaded_content')->getClientOriginalName();
            $file->public_visibility = $r->input('public_visibility'); 
            $file->user_id = Auth::user()->id;
            $file->save();
        }


        return redirect('/');
    }
}
