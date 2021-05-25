<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admincontroller;
use App\Http\Controllers\productcontroller;
use App\Http\Controllers\adminlogincontroller;
use App\http\Controllers\categorycontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('login');
});
//Route::view('/login',"login");
Route::view('/header','header');
Route::view('/si',"si");

//login
Route::post("userdata",[admincontroller::class,'getdata']);

/*Route::get('/login',function(){
	if (session()->has('user')){
		return redirect('home');
		}
		return view('login');
	});*/

Route::get('/home', function () {
	if (!session()->has('user')) {
		return redirect('login');
	}
    return view('home');
});



/*Route::get("/logout",function(){
	if(session()->has('user')){
		session()->pull('user',null);
		return redirect('login');
	}
});*/
Route::get("/logout",function(){
	Session::forget('user');
	return redirect('login');
});

//Route::view("/product","product");
Route::get('/product',[productcontroller::class,'index']);
Route::get('detail/{id}',[productcontroller::class,'detail']);
//Route::view('/detail',"productdetail");
//Route::view('/product',"product");
Route::get('/search',[productcontroller::class,'search']);
Route::post('/addtocart',[productcontroller::class,'addtocart']);
Route::get("/cartlist",[productcontroller::class,'cartlist']);
Route::get("/cartdelete/{id}",[productcontroller::class,'cartdelete']);
Route::get("/ordernow",[productcontroller::class,'ordernow']);
Route::post("placeorder",[productcontroller::class,'placeorder']);
Route::get("/myorder",[productcontroller::class,'myorder']);
Route::get("/clearorder/{id}",[productcontroller::class,'clearorder']);
//Route::view('/ordernow','ordernow');
Route::get('/signup', function () {
    return view('signup');
});
Route::post('/signup',[admincontroller::class,'signup']);


//Admin
Route::get('/admin', function () {
    return view('Admin.login');
});

Route::post("admindata",[adminlogincontroller::class,'getdata']);

Route::view('adminhome',"admin.home");
Route::view('cate',"Admin.category.create");
Route::resource('category',categorycontroller::class);
Route::view('index1','Admin.category.index');