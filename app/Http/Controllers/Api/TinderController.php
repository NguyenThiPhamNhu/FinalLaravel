<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Posts;


class TinderController extends Controller
{
//     function index(){
//         $posts=DB::table('posts')->get();
//      return json_encode($posts);
//     }
//    function show($id){
//        $post=DB::table('posts')->where("id",$id)->get();
//        return json_encode($post);
//     }

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
    
       

}