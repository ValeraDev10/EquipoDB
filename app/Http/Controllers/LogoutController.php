<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\facades\Auth;
use Illuminate\Support\Facades\Session;

class LogoutController extends Controller
{
   public function logout(){

    Session::flush();

    Auth::logout();
    return redirect()->to('/login');

   }
}
