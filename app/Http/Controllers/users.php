<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\user;

use Illuminate\Http\Request;

class users extends Controller
{
     function getdata(Request $rq)
    {
    	//$data= DB::table("users")->get();
    	$user = users::where(['email'=>$rq->email])->first();
    	if (!$user || !Hash::check($req->pass,$user->password)) {
    		return "username or password not match";
    	}
    	else{
    	$rq->session()->put('user',$user);
    	return redirect('home');
    	}
    }
}
