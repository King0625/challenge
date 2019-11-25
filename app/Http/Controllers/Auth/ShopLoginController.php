<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShopLoginController extends Controller
{
    public function index(){
        return view('auth.shopLogin');
    }

    public function post(){
        // dd("HI");

        session(['shop user' => '...']);
        return redirect('/home');
    }
}
