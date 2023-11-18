<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class MainController extends Controller
{
    public function getAll(){
        $categories = Category::all();
        return view('main.index', compact('categories'));
    }
}
