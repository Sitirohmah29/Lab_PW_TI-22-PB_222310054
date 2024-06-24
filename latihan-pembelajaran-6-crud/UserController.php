<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email|max:20|unique:users',
            'fullname' => 'required|max:100',
            'address' => 'required',
            'birthdate' => 'required|date',
            'gender' => 'required|in:M,F',
            'phone' => 'required|max:14',
        ]);

        User::create($request->all());

        return redirect()->route('users.index')->with('success', 'User created successfully.');
    }

    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'email' => 'required|email|max:20|unique:users,email,' . $user->id,
            'fullname' => 'required|max:100',
            'address' => 'required',
            'birthdate' => 'required|date',
            'gender' => 'required|in:M,F',
            'phone' => 'required|max:14',
        ]);

        $user->update($request->all());

        return redirect()->route('users.index')->with('success', 'User updated successfully.');
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('users.index')->with('success', 'User deleted successfully.');
    }
}
