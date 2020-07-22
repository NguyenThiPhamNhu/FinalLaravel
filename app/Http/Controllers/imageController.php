<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class imageController extends Controller
{
    function index(){
        $database = DB::table('photos')->get();
        return View("index",["db"=> $database]);

        $database1 = DB::table('comments')->get();
        return View("index",["dba"=> $database1]);

        
    }
    function add(Request $request){

        $title = $request->input("title");
        
        $description = $request->input("description");
        $file = $request->file('Image')->store("public");

        DB::table('photos')->insert(["Title" => $title, "Description"=> $description, "Image" => $file]); 
        return redirect('index');

        
    }
    function delete($id){
        DB::table('photos')->where ('Id','=',$id)->delete();
        echo "<script> alert('Xoa Thanh Cong');</script>";
        return redirect('index');
    }
    function edit($id){
        $database = DB::table('photos')->where ('Id','=',$id)->get();
        return View("edit",["dbedit"=> $database]);
        // $information = DB:: table("image")->where('id','=',$id)->get();
        // $photo =$information[0];
    }

    


    // function update($id, Request $request){
    //     echo $id;
    //     echo $request->Name;
       
    //     return redirect('index');

    // }
    
    function update(Request $request){
        $id = $request->input("id");
        $title = $request->input("titleNew");
        $description = $request->input("desNew");
        $file = $request->file('photoNew');
        if(is_null($file)){
            $file = DB::table('photos')->where('Id', $id)->value('Image');
        }else{
            $file->store("public");
        }

        DB::table('photos') ->where('Id', $id)->update(["Title" => $title, "Description"=> $description, "Image" => $file]);
        return redirect('index');

    }
}
