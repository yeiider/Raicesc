<?php

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;

class LoginController extends Controller
{


    function __construct(){
        $this->middleware('guest', ['only'=>'Form']);
    }
    public function form(){

        return view('login');
    }

    public function login(){

        $credenciales=$this->validate(request(),[
         'email'=> 'email|required|string',
         'password'=> 'required|string'
        ]);

        if(Auth::attempt($credenciales)){
            
            return redirect('/');
        }

        return back()
        ->withErrors(['email'=> trans('auth.failed')])
        ->withInput(request(['email']));

    }
    public function logaut(){
        Auth::logout();
        return redirect('/');
    }
}
