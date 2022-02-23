<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function create(){
        return view('register.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'=>'required|max:255',
            'email'=>'required|email|max:255',
            'password'=>'required|min:7|max:255',
        ]);

            $user =User::create($validated);
            auth()->login($user);

            return redirect('/');


    }
}
