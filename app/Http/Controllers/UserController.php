<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Models\User;
use App\Models\Role;

class UserController extends Controller
{
    public function getAll()
    {   
        $users = User::paginate(12);
        return view('user.index', compact ('users'));
    }

    public function create()
    {
        $roles = Role::orderByDesc('id')->get();
        return view('user.create', compact('roles'));
    }

    public function store(UserStoreRequest $request)
    {
        $data = $request->validated();  
        User::create($data);
        return redirect()->route('user.index');
    }

    public function show(User $user)
    {
        return view('user.show', compact ('user'));
    }

    public function edit(User $user){
        $roles = Role::orderByDesc('id')->get();
        return view('user.edit', compact ('user', 'roles'));
    }

    public function update(UserUpdateRequest $request, User $user){
        $data = $request->validated();
        $user->update($data);
        return redirect()->route('user.show', $user->id);
    }

    public function destroy(User $user){
        $user->delete();
        return redirect()->route('user.index');
    }

}