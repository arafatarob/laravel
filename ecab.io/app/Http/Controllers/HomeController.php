<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('index');
    }

    public function contact(){
        return view('contact');
    }

    public function tarifs(){
        return view('tarifs');
    }

    public function benefices(){
        return view('benefices');
    }

    public function documentation(){
        return view('documentation');
    }

    public function fonctionnal(){
        return view('fonctionnal');
    }

    public function landing(){
        return view('landing');
    }

    public function register(){
        return view('client_register');
    }

    public function login(){
        return view('client_login');
    }

    public function affiliation(){
        return view('affiliation');
    }

    public function affiliation_register(){
        return view('affiliation_register');
    }

    public function affiliation_login(){
        return view('affiliation_login');
    }

    public function test(){
        return view('test');
    }

    public function mention(){
        return view('front.legal.Mentions-legales');
    }

    public function condition(){
        return view('front.legal.condition');
    }

    public function privee(){
        return view('front.legal.privee');
    }

    public function remboursement(){
        return view('front.legal.remboursement');
    }

    public function status(){
        return view('status');
    }

    public function update(){
        return view('update');
    }

    public function booking(){
        return view('booking');
    }

}

