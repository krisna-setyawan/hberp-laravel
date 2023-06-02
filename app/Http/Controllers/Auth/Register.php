<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class Register extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255|min:3',
            'username' => 'required|max:255|min:3|unique:users',
            'email' => 'required|email:dns|unique:users',
            'no_telp' => 'required|numeric|digits_between:10,15|unique:users',
            'password' => 'required|max:255|min:3',
            'konfirm_password' => 'required|max:255|min:3|same:password',
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        // session()->flash('success', 'Pendaftaran berhasil. silahkan login.');
        return redirect('/login')->with('success', 'Pendaftaran berhasil. silahkan login.');
    }
}
