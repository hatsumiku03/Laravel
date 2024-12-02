<?php

namespace App\Livewire;

use App\Models\File;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;
class FileUploader extends Component
{

    use WithFileUploads;
    public $file;
    public $public_visibility = '1';

    public $error = '';

    public $public_value;

    public function suckyoudomtrickers($value) {
        $this->public_value = $value;
    }

    public function save(){

        $file = new File();

        if($this->file == null) {
            $this->error ='You must put a file';
        }else{
            $file->path = $this->file->store();
            $file->name = $this->file->getClientOriginalName();
            $file->public_visibility = $this->public_visibility;
            $file->user_id = Auth::user()->id;
            $file->save();
            $this->redirect('/', navigate: true);
        }
    }

    public function render()
    {
        return view('livewire.file-uploader');
    }
}
