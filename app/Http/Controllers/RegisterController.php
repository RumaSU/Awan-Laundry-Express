<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\UserRegister;
use Illuminate\Support\Facades\Log;

class RegisterController extends Controller
{
    public function registerIndex()
    {
        return view('login.register');
    }

    public function registerPost(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:newusers',
            'telp' => 'required|string|max:15',
            'password' => 'required|string|min:8',
        ]);

        $user = UserRegister::create([
            'name' => $request->name,
            'email' => $request->email,
            'telp' => $request->telp,
            'password' => Hash::make($request->password),
        ]);

        Session::flash('success', 'Registrasi berhasil!');
        return redirect()->route('loginIndex');
    }
        // return back()->withErrors(['error' => 'Registrasi gagal. Silakan coba lagi.']);
}
