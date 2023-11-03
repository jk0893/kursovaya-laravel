<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\AuthController;

class AuthController extends Controller
{
    public function registration(){
        return view('auth.registration');
    }

    public function authorization(){
        return view('auth.authorization');
    }

    public function lk(){
        return view('auth.lk');
    }

    public function store(){
        $data = request()->validate([
            'username'=>'string',
            'password'=>'string',
            'avatar'=>'string'
        ]);
        User::create($data);
        return redirect()->route('auth.lk');
    }
}
