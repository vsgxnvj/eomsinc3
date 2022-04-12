<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController2 extends Controller
{
    public function redirect(){
        $roletype = Auth::user()->role;

        if($roletype == "admin"){
            return view('admin.home');
        }else{
            return view('home');
        }
    }
}