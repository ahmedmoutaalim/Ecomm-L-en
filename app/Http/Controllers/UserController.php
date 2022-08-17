<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    function login(Request $req){

        $user =  User::where (['email' =>$req->email])-> first() ;
        if (!$user || !Hash::check($req->password, $user->password)){

            return "username or password is not matched";
        }else {
            $req->session()-> put('user' , $user);
            return redirect("/");
        }
    }
    function Register(Request $req){
       
        $user = new user ;
        $user -> name = $req -> name ; 
        $user -> email = $req -> email ;
        $user -> password = Hash::make($req->password);

        $user ->save() ;

        return redirect("/login");


}
}