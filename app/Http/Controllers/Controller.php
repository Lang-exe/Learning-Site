<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public function LogIn(){
        return view('LogIn_Register.LogIn', [
            "title" => "Log In"
        ]);
    }

    public function Regis(){
        return view('LogIn_Register.Register', [
            "title" => "Register"
        ]);
    }
}
