<?php

namespace App\Http\Livewire;
use Livewire\WithFileUploads;

use Livewire\Component;

use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;

class FileUpload extends Component
{
    use WithFileUploads;

    public $excel;

    public function save(){

    
    }

    public function import() 
    {
        Excel::import(new DataImport, 'users.xlsx');
    }

    public function render()
    {
        return view('livewire.file-upload');
    }
}
