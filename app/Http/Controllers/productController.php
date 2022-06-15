<?php

namespace App\Http\Controllers;
use App\Product;
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

}
