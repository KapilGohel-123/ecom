<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\admin;

use Illuminate\Http\Request;

class admincontroller extends Controller
{
    function getdata(Request $rq)
    {
    	//$data= DB::table("admin")->get();
    	$user = admin::where(['email'=>$rq->email])->first();
    	if (!$user || !Hash::check($rq->pass,$user->password)) {
    		return "username or password not match";
    	}
    	else{
    	$rq->session()->put('user',$user);
    	return redirect('product');
    	}
    }

    function signup(Request $req)
    {
        /*$req->validate([
            'email'=>'email|unique:admins,email',
            'password'=>'confirmed'
        ]);*/
        $user = admin::where(['email'=>$req->email])->first();
        if (!$user) {
            
        

        $admin = new admin;
        $admin->name=$req->unm;
        $admin->email=$req->email;
        $admin->password=$req->pass;
        $admin->save();
        return redirect('login');
        }
        else
        {
            return "user already registered";
        }
    }
}
