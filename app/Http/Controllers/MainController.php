<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class MainController extends Controller
{
    public function getAll(){
        $categories = Category::orderby("id", "asc")->get();
        return view('main.index', compact('categories'));
    }
}
