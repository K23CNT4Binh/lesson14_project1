<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }
    public function loginSubmit(Request $request)
    {
        $res=$request->all();
        return $res;
    }
}
