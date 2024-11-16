<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DownloadController extends Controller
{
    public function downloadFile(File $file, User $user){
        // EL if-else lo hago para que un usuario que no este logeado o no pueda ver un archivo no pueda poner la url de downlaod y pillarse el archivo
        if (!$file->public_visibility && $file->user->id !== $user->id) {  
            return redirect('/');
        }else{
            return Storage::download($file->path, $file->name);

        }
    }
}
