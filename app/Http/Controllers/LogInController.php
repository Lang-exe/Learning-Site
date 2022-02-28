<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogInController extends Controller
{
    public function index()
    {
        return view('LogIn_Register.LogIn', [
            "title" => "Log In"
        ]);
    }
}
