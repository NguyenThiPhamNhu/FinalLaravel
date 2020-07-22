<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Posts;

class PostController extends Controller
{
    function index(){
        $posts=DB::table('posts')->get();
     return json_encode($posts);
    }
   function show($id){
       $post=DB::table('posts')->where("id",$id)->get();
       return json_encode($post);
    }

   
//lay dl api 
//B4
function store(Request $request) {
    $title = $request->input('title');
    $comment = $request->input('comment');
    $image = $request->input('image');

    $price = $request->input('price');
    $address = $request->input('address');
    $size = $request->input('size');

    $service = $request->input('service');
    $description = $request->input('description');
    $discount = $request->input('discount');
    $typeroom = $request->input('typeroom');

    
    DB::table("posts")->insert([
            "title" => $title,
            "comment" => $comment,
            "image"=>$image,
            "typeroom"=>$typeroom,
            "price" => $price,
            "address" => $address,
            "size"=>$size,

            "service" => $service,
            "description" => $description,
            "discount"=>$discount,


    ]);

    $responseData = array("data"=>null);
    return response()->json($responseData, 200);
}

// user login
function indexUser(){
    $posts=DB::table('users')->get();
 return json_encode($posts);
}
function showUser($id){
   $post=DB::table('users')->where("id",$id)->get();
   return json_encode($post);
}
function storeUser(Request $request) {
    $name = $request->input('name');
    $password = $request->input('password');
    
    DB::table("users")->insert([
            "name" => $name,
            "password" => $password
            
    ]);

    $responseData = array("data"=>null);
    return response()->json($responseData, 200);
}

function storeLogin(Request $request){
    
 $userlogin=$request->only('name','password');
   
 if (Auth::attempt($userlogin)) {
                $user = Auth::users();
                $responData=array("id"=>$user->id);
                return response()->json($responData,200);
            }
        //     else{
        //     // return 200;
           
        
        //   }  
    
    }

    function login(Request $request){
        $name = $request->input("name");
        $password = $request->input("password");
    
        $user = DB::table('users')->where('name',$name) ->where('password',$password)->first();
    
        $user_id = $user->id;
    
        $responData=array("id"=>$user_id);
        return response()->json($responData,200);
    
    }

    function detial($id){
        $user = DB::table('users')->where('id',$id)->first();
        return $user;
    }

}


    

