<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Validator;
use session;
use App\Models\admin;




class AdminController extends Controller
{
    // login function for admin show only login page 
    function  AdminLoginShow(){
        return view('admin/login');
    }
    // make admin login 
    function MakeLogin(Request $req){
        $validator=Validator::make($req->all(),[
            'username'=>'required',
            'password'=> 'required'
        ]);

        if($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }
        $UserData=array(
            'username'=>$req->username,
            'password'=>$req->password,
        ); 
        if(Auth::guard('admin')->attempt($UserData))
        {
            return redirect('dashboard');
        }
        else
        {
            return back()->with(['message'=>"Username and password is not valid please enter valid credential"]);
        }
    }
    // redirect after login on dashbord 
    function dashboard(){
        return view('admin.dashboard');
    }
    function logout(){
        // Auth::logout();
        // return redirect('AdminLogin');
        return redirect('login')->with(Auth::logout());
    }
}
