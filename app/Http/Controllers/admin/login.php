<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class login extends Controller
{

    public function login(Request $request){

        if(Auth::attempt(["email"=>$request->email,"password"=>$request->password])){

            return redirect()->route("admin.dashboard");
        }

        return redirect()->back()->withErrors(["error"=>"The Email Or Password is not correct"]);


    }

    public function index(){

        return view("pages.signin");
    }


}



