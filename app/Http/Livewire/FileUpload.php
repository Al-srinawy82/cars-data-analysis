<?php

namespace App\Http\Livewire;
use Livewire\WithFileUploads;

use Livewire\Component;

use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\DataImport;


class FileUpload extends Component
{
    use WithFileUploads;

    public $excel;

    public function save(){

        $this->validate([
            'excel' => 'required', // 1MB Max
        ],['excel.required'=>'please upload your formatted excel file']);


        Excel::import(new DataImport, $this->excel);


        $this->excel = null;
    
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
