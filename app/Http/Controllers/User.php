<?php

namespace App\Http\Controllers;

use App\Users;
use Illuminate\Http\Request;

class User extends Controller
{
    function login(Request $request){
        $email = $request->input('email');
        $password = $request->input('password');
        $usersDB = Users::all()->where('email', $email)->where('password',base64_encode($password))->first();
        if($usersDB == null){
            return redirect('/masuk')->with('error','Maaf username/password anda salah!');
        }
        else{
            $request->session()->put('user',$email);
            return redirect('/dashboard');
        }
    }

    function signup(Request $request){
        $email = $request->input('email');
        $password = $request->input('password');
        $namaSekolah = $request->input('namaSekolah');
        $user = new Users();
        $user->email = $email;
        $user->password = base64_encode($password);
        $user->namaSekolah = $namaSekolah;
        $user->save();
        $request->session()->put('user',$email);
        return redirect('/dashboard');
    }

    function logout(Request $request){
        $request->session()->flush();
        return redirect('/');
    }

    function daftar( Request $request){
        if ($request->session()->exists('user')) {
            return redirect('/dashboard');
        }
        return view('home.daftar');
    }

    function daftardaerah( Request $request,$kodedaerah){
        if ($request->session()->exists('user')) {
            return redirect('/dashboard');
        }
        return view('home.daftardaerah')->with('daerah',$kodedaerah);
    }

    function masuk(Request $request){
        if ($request->session()->exists('user')) {
            return redirect('/dashboard');
        }
        return view('home.login');
    }

}
