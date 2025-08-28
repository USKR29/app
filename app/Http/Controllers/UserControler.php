<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use PhpParser\Node\Expr\Throw_;

class UserControler extends Controller
{
    //

    public function Authpage(){

        return view('Auth');
    }

    public function signup(Request $request){

        $validated = $request->validate([
            'name'=>'required|string',
            'email'=>'required|string|unique:users',
            'password'=>'required|min:6|confirmed'
        ]);

        $user = User::create($validated);

        if($user){

            Auth::login($user);

            return redirect()->route('all')->with('success','Account created');

        }

    }

    public function login(Request $request){

        $validated = $request->validate([
            'email'=>'required|string',
            'password'=>'required|string',
        ]);

       

       if(Auth::attempt($validated)){

        $request->session()->regenerate();

        return redirect()->route('all')->with('success','logged in sucessfully');

       }

        throw ValidationException::withMessages([
            'credentials','invalid credentials'
        ]);
    }

    public function logout(Request $request){

        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');

    }
}
