<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\StoreRequest;
use App\Http\Requests\User\UpdateRequest;
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
        return view('admin.user.create', compact('roles'));
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();  
        User::create($data);
        return redirect()->route('admin.user.index');
    }

    public function show(User $user)
    {
        return view('admin.user.show', compact ('user'));
    }

    public function edit(User $user){
        $roles = Role::orderByDesc('id')->get();
        return view('admin.user.edit', compact ('user', 'roles'));
    }

    public function update(UpdateRequest $request, User $user){
        $data = $request->validated();
        $user->update($data);
        return redirect()->route('admin.user.show', $user->id);
    }

    public function destroy(User $user){
        $user->delete();
        return redirect()->route('admin.user.index');
    }

}