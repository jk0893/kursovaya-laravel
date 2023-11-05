<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class BinController extends Controller
{
    public function getAll(){
        $bin = Order::all();
        return view('bin.index', compact('bin'));
    }

    public function create(){
        
    }
}
