<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use App\Tag;
use App\Photo;
use App\PhotoDescription;


class AdminController extends Controller
{
        function index(){
           echo "<center><h1>CHÀO MỪNG BẠN ĐẾN VỚI TRANG ADMIN </h1></center>";
            $categories = Category::all();
            $tags = Tag::all();
            $photos = Photo::all();
        

    
            // foreach ($categories as $key) {
            //     $key->photos;
            // }
            // echo "<pre>" .json_encode( $categories, JSON_PRETTY_PRINT)."</pre>";

            return view('admin.manager',["categories"=>$categories],["tags"=>$tags],["photos"=>$photos]);
            
       
   
}
function categoriesSelect(){
    
    $categories = Category::all();
    $photos = Photo::all();

    $tags = Tag::all();
    return view('admin.insert',["categories"=>$categories],["tags"=>$tags],["photos"=>$photos]);


}
function store(Request $request){
  $title = $request->title;
  $cate = $request->category;
  $tag_id = $request->tags;
  $file =$request->file('image')->store("public");

  $content=$request->descrition;


  
  $photo = new Photo;
  $photo->title =$title;
  $photo->category_id =$cate;
  $photo->image =$file;
  $photo->save();

  $idPhoto=$photo->id;


 $descrition = new PhotoDescription;
  $descrition->id =$idPhoto;
  $descrition->content =$content ;
  $descrition->save();

  
  return redirect()->route('admin.manager'); 
}
function create(){
  $categories = Category::all();
  $tags = Tag::all();

  return view('admin.insert',["categories"=>$categories,"tags"=>$tags]);
}
}
