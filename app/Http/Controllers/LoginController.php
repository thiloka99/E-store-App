<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use validator; //validate;

class LoginController extends Controller
{
    function checkLogin(Request $request){
        //validation
        $this->validate($request,[
            'email'=>'required',
            'password'=>'required'
        ]);
        //Authentication
        $user_data = array(
            'email'=>$request->get('email'),
            'password'=>$request->get('password')
        );
        if(Auth::attempt($user_data)){
            return redirect('dashboard.admin');
        }
        else{
            return back()->with('error','wrong Login Details');
        }
    }
    function logout(){
        Auth::logout();
        return redirect('/');
    }
}
