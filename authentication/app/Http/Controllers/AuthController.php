<?php

namespace App\Http\Controllers;

use App\Models\AuthModel;
use Illuminate\Http\Request;
use Hash;
use Auth;
use Session;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    // Route for dashboard; ensures user can access after login
    public function dashboard()
    {
        return view('dashboard');
    }

    public function signup()
    {
        return view('authentication');
    }

    public function login()
    {
        return view('login');
    }

    public function authLogin(Request $request){
        $user = AuthModel::where('email', $request->email)->first();
        if($user){
            if(Hash::check($request->password, $user->password)){
                $request->Session()->put('loginId', $user->id);
                $request->Session()->put('loginName', $user->first_name);
                return redirect()->route('dashboard');
            }else{
                return redirect()->route('login');
            }
        }else{
            return redirect()->route('login');
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $order_id = time() . random_int(25, 99);

        AuthModel::insert([
            'Order_Id' => $order_id,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'phone' => $request->number,
            'address' => $request->address,
            'country' => $request->country,
            'zip_code' => $request->zip_code,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return redirect()->route('login');
    }

    /**
     * Display the specified resource.
     */
    public function show(cr $cr)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(cr $cr)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, cr $cr)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(cr $cr)
    {
        //
    }
}
