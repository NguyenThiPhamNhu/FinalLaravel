<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Guitar;
use \App\Bill;
use \App\BillDetail;
use \App\Customer;
use \App\Session;
use \App\User;
use \App\cart;
use \App\Detail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CartController extends Controller
{
    // cart
    function indexCart()
    {
        if (Auth::user()) {
            $idUser = Auth::user()->id;
            $cartdata = DB::table('carts')
                ->where('user_id', '=', $idUser)
                ->join('users', 'users.id', '=', 'carts.user_id')
                ->join('guitars', 'guitars.id', '=', 'carts.product_id')
                ->select('carts.id', 'guitars.name', 'guitars.new_price', 'guitars.image', 'carts.quantity')
                ->get();
            return view("guitar.cart", ['cartdata' => $cartdata]);
        } else {
            return redirect("/guitar/login");
        }
    }
    
    function addCart($id)
    {

        $idUser = Auth::user()->id;
        $check = DB::table('carts')
            ->where('product_id', $id)
            ->where('user_id', $idUser)
            ->count();

        if ($check == 1) {
            $quantity = DB::table('carts')
                ->where('product_id', $id)
                ->where('user_id', $idUser)
                ->value('quantity') + 1;

            DB::table('carts')
                ->where('product_id', $id)
                ->where('user_id', $idUser)
                ->update(["quantity" => $quantity]);
            return redirect()->route('in', ["carts" => "Thêm vào giỏ hàng Thành Công"]);
        } else {
            DB::table('carts')->insert(["product_id" => $id, "quantity" => 1, "user_id" => $idUser]);
            return redirect()->route('in', ["carts" => "Thêm vào giỏ hàng Thành Công"]);
        }
    }

    function destroyCart($id)
    {
        $cart = cart::find($id);
        $cart->delete();
        return redirect()->route('in', ["carts" => "Xóa Thành Công"]);
    }


   

   
// pay
    function pay(){
        $carts=DB::table('carts')->where("user_id", Auth::user()->id)->get();
        foreach ($carts as $cart) {
           $inforProduct= DB::table('guitars')->where("id", $cart->product_id)->first();
     
           $cart->inforProduct=$inforProduct;
       }
       return view("guitar.order",['carts'=> $carts]);
     }
     function order(Request $request){
         
        $name= $request->name;
        $typer= $request->typer;
        $quantity= $request->quantity;
        $new_price= $request->new_price;
     
        $carts=DB::table('carts')->where("user_id", Auth::user()->id)->get();
        foreach ($carts as $cart) {
           $inforProduct= DB::table('guitars')->where("id", $cart->product_id)->first();
           $cart->inforProduct=$inforProduct;
           $array[]= array(
             "id" =>$cart->inforProduct->id,
             "name" =>$cart->inforProduct->name,
             "image" =>$cart->inforProduct->image,
             "quantity" =>$cart->quantity,
             "new_price" =>$cart->inforProduct->new_price,
             "typer" =>$cart->inforProduct->typer
         );

        
         
       }
       $detail= json_encode($array);
       echo $detail; 

       
       
     
       
       $user_id= Auth::user()->id;
           DB::table('orders')->insert([
            "user_id" =>$user_id,
            "detail" =>$detail
           ]);
     }

     function orderpay()
    {
        return view('guitar.order');
    }

    function indexCartOrder()
    {
        if (Auth::user()) {
            $idUser = Auth::user()->id;
            $cartdata = DB::table('carts')
                ->where('user_id', '=', $idUser)
                ->join('users', 'users.id', '=', 'carts.user_id')
                ->join('guitars', 'guitars.id', '=', 'carts.product_id')
                ->select('carts.id', 'guitars.name', 'guitars.new_price', 'guitars.image', 'carts.quantity')
                ->get();
            return view("guitar.order", ['cartdata' => $cartdata]);
        } else {
            return redirect("/guitar/login");
        }
    }

    // tang giam
    function increaseQuantity($pro_id,Request $request)
    {   
        $cart = DB::table('carts')->where('product_id','=',$pro_id)->first();
        $quantity = $cart->quantity + 1;
        DB::table('carts')
            ->where('product_id','=',$pro_id)
            ->update(
                ['quantity' => $quantity]
            );
            return redirect ('cart');  

    }

    function decreaseQuantity($pro_id,Request $request)
    {
        $cart = DB::table('carts')->where('product_id','=',$pro_id)->first();
        $quantity = $cart->quantity - 1;
        if($quantity < 1)
        {
            $quantity = 1;
            DB::table('carts')
            ->where('product_id','=',$pro_id)
            ->update(
                ['quantity' => $quantity]
            );
            return redirect ('cart');    
        }
        else
        {
            DB::table('carts')
            ->where('product_id','=',$pro_id)
            ->update(
                ['quantity' => $quantity]
            );
            return redirect ('cart');    
        }

    }
       
}
