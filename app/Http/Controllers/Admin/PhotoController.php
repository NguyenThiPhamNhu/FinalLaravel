<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Photo;

class PhotoController extends Controller
{
    function index(){
        $photos = Photo::all();

        foreach ($photos as $key) {
            $key->photos;
        }
        echo "<pre>" .json_encode( $photos, JSON_PRETTY_PRINT)."</pre>";
        return view("admin.mananger");
    }
    function edit($id){
        $category = Category::find($id);
        return view('/admin.insert',['categories'=>$category]);
    }
    function update($id, Request $request){
        $name = $request->name;
        $category = Category::find($id);
        $category->name =$name;
        $category->save();
        return redirect('/admin/insert/manager');
    }
}
