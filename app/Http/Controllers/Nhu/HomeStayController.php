<?php

namespace App\Http\Controllers\Nhu;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeStayController extends Controller
{
    function index(){
        $posts=DB::table('homestays')->get();
     return json_encode($posts);
    }
   function show($id){
       $post=DB::table('homestays')->where("id",$id)->get();
       return json_encode($post);
    }
    function store(Request $request)
    {
        $name = $request->name;
        $price = $request->price;
        $address = $request->address;
        $size = $request->size;
        $service = $request->service;
        $image = $request->image;
        $comment = $request->comment;
        $weight = $request->weight;
        $description = $request->description;
        $description = $request->description;
        $discount = $request->discount;
        $typeroom = $request->typeroom;
    }
}

        $table->id();
        $table->string('name');
        $table->integer('price');
        $table->macAddress('address');
        $table->string('size');
        $table->string('service');
        $table->string('image');
        $table->string('comment');
        $table->string('description');
        $table->integer('discount');
        $table->integer('typeroom');

        $table->timestamps();
