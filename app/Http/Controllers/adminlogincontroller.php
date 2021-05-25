<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\adminlogin;

class adminlogincontroller extends Controller
{
    function getdata(Request $req)
    {
    	$admin = adminlogin::where(['email'=>$req->email])->first();
    	if (!$admin || !Hash::check($req->pass,$admin->password)) {
    		return "username or password not match";
    	}
    	else
    	{
    		$req->session()->put('admin',$admin);
    		return redirect('adminhome');
    	}
    }
}
