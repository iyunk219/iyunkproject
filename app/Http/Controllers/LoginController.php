<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Session;


class LoginController extends Controller
{
     public function index()
    {
        if (Session::get('username')){
            return redirect('/backend_home');
        }
        return view('login.login');
    }
    public function login(Request $request){
        if(Session::get('username')!=''){
            return redirect('/backend_home');
            exit();
        }
        $data = admin::where('username',$request->username)->first();
        if($data!=''){
            if($request->password==$data->password){
            Session::put('username',$data->username);
            return redirect('/backend_home');
            }

            }else{
            Session('message');
            return redirect('/login');
            }
        return redirect('/login')->with('message','Name atau Password Salah');
    }
    public function logout(Request $request){
        $request->session()->flush();
        return redirect('/');
    }
}
