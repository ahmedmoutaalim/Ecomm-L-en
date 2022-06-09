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
}
