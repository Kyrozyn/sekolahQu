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

    function daftarmanual(Request $request){
        if ($request->session()->exists('user')) {
            return redirect('/dashboard');
        }
        return view('home.daftarmanual');
    }

    function masuk(Request $request){
        if ($request->session()->exists('user')) {
            return redirect('/dashboard');
        }
        return view('home.login');
    }

    public function store(Request $request)
    {
        if (\App\Users::where('email', '=', $request->input('email'))->count() > 0) {
            return response("emailduplicate",403);
        }
        else{
            $data = New \App\Users();
            $data->email = $request->input('email');
            $data->password = $request->input('password');
            $data->NPSN = $request->input('NPSN');
            if($data->save()){
                return response(['status' => true]);
            }
            else{
                return response(['status' => false]);
            }
        }

    }
}
