<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function getAll(){
        $post = User::all();
        return $post;
    }

    public function createUser(){
        foreach($postsArr as $item){
            Post::create($item);
        }
    }

    public function updateUser(){
        $user = User::find(6);
        $user->update([
            
        ]);
    }

    public function deleteUser(){
        $user=User::find();
        $user->delete();
    }
}