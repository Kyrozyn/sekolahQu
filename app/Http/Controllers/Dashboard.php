<?php

namespace App\Http\Controllers;

use App\Users;
use Illuminate\Http\Request;

class Dashboard extends Controller
{
    function index(){
//        return view('dashboard.dashboard');
        return redirect('/dashboard/siswa');
    }

}
