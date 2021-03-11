<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\DataImport;

class CarDataController extends Controller
{
    public function fiterData(Request  $request){

        Excel::import(new DataImport, $request->file('excel'));
        return redirect()->back();
        
    }
}
