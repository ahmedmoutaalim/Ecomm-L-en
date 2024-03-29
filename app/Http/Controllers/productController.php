<?php

namespace App\Http\Controllers;
use App\Product;
use App\cart;
use App\order;

use Illuminate\Contracts\Session\Session as SessionSession;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use function GuzzleHttp\Promise\all;


class productController extends Controller
{
    function index(){

        $data = Product::all();

        return view("product", ['prd'=>$data]);
    }

    function detail($id){
 
        $data = product::find($id);
        return view("detail" , ['product'=>$data]) ;
    }
    function search(Request $req){
 
         $data = Product::where('name' , 'like' ,'%' . $req->input('query').'%')
       ->get();
       return view('search' ,['prd'=>$data]) ;
    }

    function addToCart(Request $req){
        
        if($req->session()->has('user')){
           
            $cart = new Cart ; 
            $cart -> user_id = $req->session()->get('user')['id'];
            $cart->product_id = $req-> product_id;
            $cart->save();
            return redirect('/');
        }
        else{
           return redirect("login");
        }
    }

    static function cartItem(){

        $userId = Session::get('user')['id'];
        return Cart::where('user_id',$userId)->count();
    }

    function CartList()
    {

       $userId=Session::get('user')['id'];
       $products = DB::table('cart')
       ->join('products' , 'cart.product_id', '=' , 'products.id')
       ->where('cart.user_id' , $userId)
       ->select('products.*','cart.id as cart_id')
       ->get();

       return view('cartList' , ['products' => $products]);
        
    }

    function removeCart($id){
     
        cart::destroy($id);
        return redirect('CartList');
    }

    function ordernow(){

        $userId=Session::get('user')['id'];
       $total  = DB::table('cart')
        ->join('products' , 'cart.product_id', '=' , 'products.id')
        ->where('cart.user_id' , $userId)
        ->select('products.*','cart.id as cart_id')
        ->sum('products.price');
 
        return view('ordernow' , ['total' => $total]);


    }

    function orderPlace(Request $req){
          
     $userId=Session::get('user')['id'];
     $allCart = Cart::where('user_id' , $userId)->get();
     foreach($allCart as $cart)
     {
          $order = new Order ; 
          $order -> product_id = $cart['product_id'];
          $order -> user_id = $cart['user_id'];
          $order -> status="pending";
          $order->payment_method=$req->payment;
          $order->payment_status='pending';
          $order -> adress = $req -> adress;
          $order-> save();
          Cart::where('user_id' , $userId)->delete();
     }
      $req -> input();
      return redirect('/');
    }

    function myOrders()
    {
        $userId=Session::get('user')['id'];
        $Orders = DB::table('Orders')
         ->join('products' , 'Orders.product_id', '=' , 'products.id')
         ->where('Orders.user_id' , $userId)
         ->get();
  
         return view('myorders' , ['orders' => $Orders]);
    }
}
