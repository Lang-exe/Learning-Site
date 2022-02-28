<?php

namespace App\Http\Controllers;

use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('LogIn_Register.Register', [
            "title" => "Register"
        ]);
    }

    public function index2(Request $request)
    {
        $validateddata = $request->validate([
            'name'=> 'required|min:10|max:45',
            'email'=> 'required|email:dns|unique:users|min:3',
            'password'=> 'required_with:password2|same:password2|min:8|max:20',
            'password2'=> 'min:8|max:20',
            'address'=> 'required',
            'phone'=> 'required',
            'age'=> 'required',
            'birth'=> 'required',
        ]);
        $validateddata['password'] = bcrypt($validateddata['password']);
        $user = user::create($validateddata);
        return redirect('/login');
    }
}