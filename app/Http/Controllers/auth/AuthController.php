<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Http\RedirectResponse;


class AuthController extends Controller
{
    public function register(Request $request){


        $validate_data = $request->validate([
            'firstName' => 'required|min:3|max:50',
            'lastName'=> 'required|min:3|max:50',
            'email' => 'required|email',
            'phone'=> 'required|min:8|max:12',
            'password'=> 'required|min:8',
            'confirm_password'=>'required |same:password'
        ]);
        if($validate_data){
        User::create([
            'firstName'=>$request->firstName,
            'lastName' =>$request->lastName,
            'email'=> $request->email,
            'phone' =>$request->phone,
            'password'=>Hash::make($request->password),
        ]);
        return redirect()->route('auth.login');
        
    }

    return redirect()->route('home');
   
    }

    public function  logIn( Request $request){

        $credentials = $request->validate([

            'email' => "required|email",
            'password' => "required",

        ]);
        $remember = $request->remember_me;

        if (Auth::attempt($credentials,$remember)) {

            $user=User::where("email",$request->email)->first();
            $request->session()->regenerate();
            session([
                'user_id'=>$user->id,
                'email'=>$request->email, 
            ]);

            return redirect()->intended('books');

        }
        return back()->withErrors([

            'email' => 'The provided credentials do not match our records.',

        ])->onlyInput('email');

    }
    public function logout(Request $request): RedirectResponse
    {

    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    
    return redirect('/');
    }
}
