<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required|in:Administrador,Consultor',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);

        return redirect()->route('users.index');
    }

    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function destroy(User $user)
    {
        if ($user->role === 'Administrador' && Auth::id() === $user->id) {
            return back()->with('error', 'No te puedes eliminar a ti mismo');
        }

        $user->delete();
        return redirect()->route('users.index');
    }
}