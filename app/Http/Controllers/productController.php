<?php

namespace App\Http\Controllers;
use App\Product;
use App\cart;
use Illuminate\Http\Request;

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
}
