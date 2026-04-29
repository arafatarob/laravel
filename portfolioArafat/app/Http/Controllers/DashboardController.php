<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
        return view('dashboard.user.index');
    }
    public function orderService(){
        return view('dashboard.user.order_service');
    }
    public function myOrder(){
        return view('dashboard.user.my_order');
    }
    public function myProfile(){
        return view('dashboard.user.profile');
    }
    public function setting(){
        return view('dashboard.user.setting');
    }
}
