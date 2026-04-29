<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\authentication;

class HomeController extends Controller
{
    public function home(){
        return view('index');
    }
    public function portfolio(){
        return view('portfolio');
    }
    public function service(){
        return view('service');
    }
    public function register(){
        return view('auth.authentication');
    }
    public function register_submit(Request $request){

        authentication::create([
            'name' => $request->name,
            'email' => $request->email,
            'number' => $request->number,
            'password' => Hash::make($request->password),
        ]);
        return redirect()->route('login');
    }
    public function login(){
        return view('auth.login');
    }
    public function login_submit(Request $request){
        authentication::where('email', $request->email)->firstOrFail();
        return redirect()->route('dashboard');
    }
}
