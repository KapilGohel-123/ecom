<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\product;
use App\models\cart;
use App\models\order;
use Session;
use Illuminate\Support\Facades\DB;

class productcontroller extends Controller
{
    function index()
    {
    	$data = product::all();
    	return view('product',['products'=>$data]);
    }
    function detail($id)
    {
        //return product::find($id);
        $data =  product::find($id);
    	return view('productdetail',['product'=>$data]);
    }
    function search(Request $req)
    {
    	//return $req->input();
    	//$data = $req->input();
    	//return view('product-search',['products'=>$data]);
    	$data = product::where('name','like','%'.$req->input("query").'%')->get();
    	return view('product-search',['products'=>$data]);

    }

    function addtocart(Request $req)
    {
        if ($req->session()->has('user')) {
            //return $req->input();
           
            $cart = new cart;
            $cart->user_id = $req->session()->get('user')['id'];
            $cart->product_id=$req->product_id;
            $cart->save();
            return redirect('product');
        
        }
        else
        {
            return redirect('login');
        }
    }

        static function carttime()
        {
            $userid = session::get('user')['id'];
            return cart::where('user_id',$userid)->count();
        }

        function cartlist()
        {
            $userid = Session::get('user')['id'];
            $data= DB::table('cart')
            ->join('products','cart.product_id','=','products.id')
            ->select('products.*','cart.id as cart_id')
            ->where('cart.user_id',$userid)
            ->get();
            return view('cartlist',['products'=>$data]);

        }
        function cartdelete($id)
        {
            
            $data = cart::find($id);
            $data->delete();
            return redirect('cartlist');
        }

        function ordernow(){
            $userid = Session::get('user')['id'];
            $data=  DB::table('cart')
            ->join('products','cart.product_id','products.id')
            ->select('products.*','cart.id as cart_id')
            ->sum('products.price');
            //->where('cart.user_id',$userid);
            return view('ordernow',['total'=>$data]);
        }

        function placeorder(Request $req)
        {
            $userid = Session::get('user')['id'];
            $allcart = cart::where('user_id',$userid)->get();
            foreach ($allcart as $cart) {
                $order = new order;
                $order->product_id=$cart['product_id'];
                $order->user_id=$cart['user_id'];
                $order->address=$req->address;
                $order->status="order Received";
                $order->payment_method=$req->payment;
                $order->payment_status="pending";
                $order->save();
            }
            cart::where('user_id',$userid)->delete();
            return redirect('product');
        }

        function myorder()
        {
            $userid = Session::get('user')['id'];
            $data= DB::table('orders')
            ->join('products','orders.product_id','=','products.id')
            ->select('products.*','orders.id as orders_id')
            ->where('orders.user_id',$userid)
            ->get();
            return view('myorder',['products'=>$data]);
        }
        function clearorder($id)
        {
            $data = order::find($id);
            $data->delete();
            return redirect('myorder');
        }
    
}
