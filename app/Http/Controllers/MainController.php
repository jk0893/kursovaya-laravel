<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function getAll(){
        return view('main.index');
    }

    public function test()
    {
        return view('admin-panel.index');
    }
}
