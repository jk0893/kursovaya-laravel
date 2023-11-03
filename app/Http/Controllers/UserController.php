<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function getAll(){

        $users = User::all();

        return view('user.index', compact ('users'));
    }

    public function create(){
        return view('user.create');
    }

    public function store(){
        $data = request()->validate([
            'username'=>'string',
            'password'=>'string',
            'avatar'=>'string'
        ]);
        User::create($data);
        return redirect()->route('user.index');
    }

    public function show($id){
        $user = User::findOrFail($id);
        return view('user.show', compact ('user'));
    }

    // public function update(){
    //     return view('user.update');
    // }

    // public function delete(){
    //     return view('user.delete');
    // }
    }