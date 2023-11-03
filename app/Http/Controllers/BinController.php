<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BinController extends Controller
{
    public function getAll(){
        return view('bin.index');
    }

    public function create(){
        
    }
}
