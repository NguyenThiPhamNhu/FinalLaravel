<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogController extends Controller
{
    function index()
    {
        return view('/book/login');
    }

    function login(Request $request){

        $email=$request->email;
        $password=$request->password;
          if(Auth::attempt(["email"=>$email,"password"=>$password])){
            $user=Auth::users();
           
              if($user->username =="admin"){
                  return redirect()->route('book.dashboard');
    
              }
              else{
                return redirect()->route('home');
            }
          
            // echo "dang nhap thanh cong";
    
          }else{
            return redirect()->route("login",["error"=>"Invalid username or password"]);
          }

       
    }
    function logout(Request $request)
      {
        Auth::logout();
        return redirect()->route('home');
      }
}
