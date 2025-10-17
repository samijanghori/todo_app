<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthManager extends Controller
{
    
 function login(){
        return view('auth.login');
    }
 function loginPost(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required' 
        ]);
        $givenvalues = $request->only('email' , 'password');
        if(Auth::attempt($givenvalues)){
            return redirect()->intended(route('home'));
        }
        return redirect(route('login'))->with('error','Invalid email or password');
    }
    function logout(){
        Auth::logout();
        return redirect(route('login'))->with('success','successfully loged out');
    }


    //registeration functions
    function register(){
        return view('auth.register');
    }

     function registerPost(Request $request){
         $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:4|max:6'
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        if($user->save()){
            return redirect(route('login'))->with('success', ' registration succesfully');
        }
        return redirect(route('register'))->with('error', 'registraion failed');
    }
}
