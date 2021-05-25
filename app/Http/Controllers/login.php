<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class login extends Controller
{
    function getdata(Request $rq)
    {
    	//$data= DB::table("users")->get();
    	$user = users::where(['email'=>$rq->email])->first();
    	if (!$user || !Hash::check($req->password,$user->password)) {
    		return "username or password not match";
    	}
    	else{
    	$rq->session()->put('user',$data);
    	return redirect('home');
    	}
    }
}
