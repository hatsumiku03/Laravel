<?php

namespace App\Livewire;

use App\Models\File;
use Livewire\Component;
use Livewire\WithPagination;

use function Laravel\Prompts\search;

class ShowFiles extends Component
{

    use WithPagination;

    public $search = '';

    public function render()
    {
        return view('livewire.show-files', [
            'files' => File::search('name', $this->search)->paginate(3),
        ]);
    }
}
