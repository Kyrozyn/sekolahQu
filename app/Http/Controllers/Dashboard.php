<?php

namespace App\Http\Controllers;

use App\Users;
use Illuminate\Http\Request;

class Dashboard extends Controller
{
    function index(){
        return redirect('dashboard/siswa');
    }

    function checkLogin($username,$password){
    }
}
