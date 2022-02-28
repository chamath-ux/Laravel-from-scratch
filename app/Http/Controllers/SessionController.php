<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class SessionController extends Controller
{
    public function create(){
        return view('register.create');
    }

    public function store(){


        $credentials =request()->validate([
            'email'=>'required|email',
            'password'=>'required'

        ]);

            if(!Auth::attempt($credentials)){

                return back()->withErrors([
                    'email'=>'Welcome Back!'
                ]);

            }

            session()->regenerate();

            return redirect('/')->with('status', 'Welcome Back!'.auth()->user()->name);



    }

    public function destroy()
    {
        Auth::logout();

        return redirect('/');
    }
}
