<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminPanel(){
        return view('dashboard.admin.index');
    }
    public function service(){
        return view('dashboard.admin.services');
    }
    public function order(){
        return view('dashboard.admin.orders');
    }
    public function user(){
        return view('dashboard.admin.users');
    }
    public function team(){
        return view('dashboard.admin.team');
    }
    public function project(){
        return view('dashboard.admin.projects');
    }
    public function blog(){
        return view('dashboard.admin.blog');
    }
    public function testimonials(){
        return view('dashboard.admin.testimonials');
    }
    public function pricing(){
        return view('dashboard.admin.pricing');
    }
    public function setting(){
        return view('dashboard.admin.setting');
    }
    public function analytics(){
        return view('dashboard.admin.analytics');
    }
    public function admin_auth(){
        return view('dashboard.admin.auth.signup');
    }
    public function admin_login(){
        return view('dashboard.admin.auth.login');
    }
}
