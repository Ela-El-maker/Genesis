<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function index()
    {
        return view('login');
    }

    public function handlelogin(LoginRequest $request)
    {
        # code ...
        # dd($request->all());
        // $request -> validate([]);
        return $request;
    }
}
