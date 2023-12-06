<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomAuthController extends Controller
{
    //
    public function index()
    {
        die();
        return view('main.auth.login');
    }
}
