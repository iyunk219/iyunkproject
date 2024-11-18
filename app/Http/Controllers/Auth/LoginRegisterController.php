<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginRegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except(['logout', 'dashboard']);
    }

    // Menampilkan form registrasi
    public function register()
    {
        return view('auth.register');
    }

    // Menyimpan data registrasi
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        User::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('login')->with('success', 'Pendaftaran berhasil! Silakan login.');
    }

    // Menampilkan form login
    public function login()
    {
        return view('auth.login');
    }

    // Mengautentikasi pengguna
    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()->route('index'); // ganti dengan rute dashboard Anda
        }

        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ]);
    }

    // Menampilkan dashboard setelah login
    public function dashboard()
    {
        return view('index'); // Ganti dengan tampilan dashboard Anda
    }

    // Logout pengguna
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login'); // Ganti dengan rute login Anda
    }
}