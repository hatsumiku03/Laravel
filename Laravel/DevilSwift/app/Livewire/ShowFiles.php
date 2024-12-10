<?php

namespace App\Livewire;

use App\Models\File;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class ShowFiles extends Component
{
    use WithPagination;

    public $search = '';

    public $previewFile = false;

    public function LetsSee($id)
    {
        $this->previewFile = true;
    }


    public function render()
    {
        $files = File::where('name', 'like' , "%".$this->search."%")->paginate(10);
        return view('livewire.show-files', [
            'files' => $files
        ]);
    }
}
