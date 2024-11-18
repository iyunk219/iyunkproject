<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class loginfrontController extends Controller
{
// public function index()
//     {
//         return view('backend_home');
//     }
    // public function login(Request $request)
    // {
    //     // Cek apakah pengguna sudah login
    //     if ($request->session()->has('email')) { 
    //         return redirect('/backend_home'); 
    //     } 

    //     // Validasi input
    //     $request->validate([
    //         'email' => 'required|string|email', 
    //         'password' => 'required|string',
    //     ]);

    //     $data = User::where('email', $request->email)->first(); 
    //     if ($data && Hash::check($request->password, $data->password)) { 
    //         Session::put('email', $data->email); 
    //         Session::put('role', $data->role);
            
    //         // Redirect berdasarkan role
    //         if ($data->role == 'admin') { 
    //             return redirect('/backend_home'); 
    //         } else {  
    //             return redirect('/index'); 
    //         }
    //     }

    //     return back()->withErrors(['message' => 'Email atau Password Salah']); 
    // }
    public function register(Request $request)
    {

        // Validasi input
        $request->validate([
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Buat pengguna baru
        User::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('login')->with('success', 'Pendaftaran berhasil! Silakan login.');
    }

    public function authenticated(Request $request, $user)
{
    if ($user->hasRole('admin')) {
        return redirect()->route('template.main');
    }

    return redirect()->route('template.layout');
}

}