<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Guitar;
use \App\User;
use \App\cart;
use \App\Detail;
use \App\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\View;

class GuitarController extends Controller
{
    function index()
    {
        echo "<center>CHÀO MỪNG BẠN ĐẾN VỚI TRANG ADMIN </center>";
        $guitar = Guitar::all();


        return view('/guitar/admin', ["guitars" => $guitar]);
    }
    function indexUser()
    {
        echo "<center>CHÀO MỪNG BẠN ĐẾN VỚI TRANG ADMIN </center>";
        $user = User::all();


        return view('/guitar/user', ["users" => $user]);
    }
    // function indexUserAdmin()
    // {
    //     echo "<center>CHÀO MỪNG BẠN ĐẾN VỚI TRANG ADMIN </center>";
    //     $user = User::all();


    //     return view('/guitar/adminorder', ["users" => $user]);
    // }
    function home()
    {
        echo "<center>WELCOME TO VIT GUITAR SHOP </center>";
        $guitar = Guitar::all();
        


        return view('/guitar/home', ["guitars" => $guitar]);
    }

    
    function create()
    {
        return view('guitar.add');
    }
    public function store(Request $request)
    {

        $name =  $request->input("name");
        $file = $request->file('image')->store("public");
        $typer = $request->input("typer");
        $quantity = $request->input("quantity");
        $specifications = $request->input("specifications");
        $old_price = $request->input("old_price");
        $new_price = $request->input("new_price");
        $made_in = $request->input("made_in");
        



        DB::table('guitars')->insert(
            [
                "name" => $name,
                "image" => $file,
                "typer" => $typer,
                "quantity" => $quantity,
                "specifications" => $specifications,
                "old_price" => $old_price,
                "new_price" => $new_price,
                "made_in" => $made_in,
                

            ]
        );
        return redirect('guitar/admin');
    }

    function destroy($id)
    {
        DB::table('guitars')->where('id', "=", $id)->delete();
        echo "<script> alert('Deleted successful');</script>";
        $id->delete();
       
        return redirect('guitar.admin');
    }
    

    function edit($id)
    {
        $guitar = DB::table('guitars')->find($id);
        return view("guitar.edit", ["dbedit" => $guitar]);
    }

    function update(Request $request)
    {
        $id = $request->input("id");
        $name = $request->input("nameNew");
        $specifications = $request->input("specificationsNew");
        $quantity = $request->input("quantityNew");
        $old_price = $request->input("old_priceNew");
        $new_price = $request->input("new_priceNew");
        $made_in = $request->input("made_inNew");
       
        $file = $request->file('photoNew');
        if (is_null($file)) {
            $file = DB::table('guitars')->where('id', $id)->value('image');
        } else {
            $file->store("public");
        }

        DB::table('guitars')->where('id', $id)->update(["name" => $name, "specifications" => $specifications, "image" => $file, "old_price" => $old_price, "new_price" => $new_price, "made_in" => $made_in]);
        return redirect('guitar.admin');
    }

    // user

    function createUser()
    {
        return view('guitar.addUser');
    }
    public function storeUser(Request $request)
    {

        $email =  $request->input("email");
        // $file = $request->file('avatar')->store("public");
        $password = $request->input("password");

        DB::table('users')->insert(
            [
                "email" => $email,
                // "avatar"=> $file,
                "password" => $password,


            ]
        );
        return redirect('guitar/user');
    }

    function destroyUser($id)
    {
        DB::table('users')->where('id', "=", $id)->delete();
        echo "<script> alert('Deleted successful');</script>";
        return redirect('guitar/user');
    }

    function editUser($id)
    {
        $user = DB::table('users')->find($id);
        return view("guitar.edit", ["dbedit" => $user]);
    }

    function updateUser(Request $request, $id)
    {
        $name =  $request->input("name");

        $password = $request->input("password");






        DB::table('users')->where("id", $id)->update(["id" => $id, "username" => $name, "password" => $password]);
        return redirect('/guitar/user');
    }




    // log
    function logindex(Request $request)
    {
        return view("guitar.admin");
    }


    function login(Request $request)
    {
        $name = $request->name;
        $password = $request->password;
        

        if (Auth::attempt(["name" => $name, "password" => $password])) {
            $user = Auth::users();
            echo json_encode($user);
            // return;
            if ($user->role == "admin") {
                return redirect()->route('guitar.admin');
            } else {
                return redirect()->route('guitar.home');
            }
        }
        // else {
        //     return redirect()->route("auth.login", ["error" => "Invalid username or password"]);
        // }

    }


    function indexRegist()
    {
        return view("guitar.register");
    }
    function register(Request $request)
    {
        $name = $request->name;
        $password = $request->password;

        $name = $request->name;
        $role = $request->role;



        //max hoas matj khaur
        $hashPassword = Hash::make($password);
        echo $name;
        echo $password;

        DB::table("users")->insert(["name" => $name, "password" => $hashPassword, "role" => $role]);
    }

    

    function search(Request $request)
    {
        $txt = $request->input('txtSearch');
        $search = DB::table('guitars')->where('name', 'LIKE', '%' . $txt . '%' )->get();
        return view('guitar.search', ['research' => $search]);
    }

    function guitarpage(Request $request)
    {
       
        echo "<center>WELCOME TO VIT GUITAR SHOP </center>";
       
        $guitar = DB::table('guitars')->where('name', 'LIKE', '%' . 'guitar' . '%' )->get();
        return view('/guitar/guitarpro', ['guitars' => $guitar]);
    }

    function kalimbapage(Request $request)
    {
       
        echo "<center>WELCOME TO VIT GUITAR SHOP </center>";
       
        $guitar = DB::table('guitars')->where('name', 'LIKE', '%' . 'kalimba' . '%' )->get();
        return view('/guitar/kalimba', ['guitars' => $guitar]);
    }

    function ukulelepage(Request $request)
    {
       
        echo "<center>WELCOME TO VIT GUITAR SHOP </center>";
       
        $guitar = DB::table('guitars')->where('name', 'LIKE', '%' . 'ukulele' . '%' )->get();
        return view('/guitar/ukulele', ['guitars' => $guitar]);
    }


    function adminManagerPage()
    {
        return view("guitar.adminmanager");
    }

    // 

    function viewDetail($id)
    {
        $guitar = DB::table('guitars')->find($id);
        return view("guitar.detail", ["dbedit" => $guitar]);
    }

// order index
function indexOrder()
{
    echo "<center>CHÀO MỪNG BẠN ĐẾN VỚI TRANG ADMIN </center>";
    $order = Order::all();
    $user = User::all();
    $guitar = Guitar::all();



    return view('/guitar/adminorder', ["orders" => $order,"users" => $user,"guitars" => $guitar]);
}
    


    
}
