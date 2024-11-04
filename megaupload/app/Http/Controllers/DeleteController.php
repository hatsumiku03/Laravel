<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DeleteController extends Controller
{
    public function delete(File $file){
        Storage::delete([$file->path]);
        File::destroy($file->id);

        return redirect('/');
    }
}
