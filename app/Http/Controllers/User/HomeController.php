<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    function index(){
        $database = DB::table('users')->get();
        $database = DB::table('sanpham')->get();
        return View("user.home",["db"=> $database]);

        // return view("user.home");


function index2(){
    
    $database = DB::table('sanpham')->get();
    return View("user.page",["db"=> $database]);

    // return view("user.home");

}

// function details($id){
//     $detail = DB::table('sanpham')->find($id);
//     return view("user.detail", ['dbd' => $detail]);
// }
function indexDetail($id){
    
    $detail = DB::table('sanpham')->get();
    return View("user.detail",["db"=> $detail]);
   

    // return view("user.home");

}




function add(Request $request){


    $ten = $request->ten;
    $gia = $request->input("gia");
    $soluong = $request->input("so_luong");
    $chitiet = $request->input("chi_tiet");
    $thuonghieu = $request->input("thuong_hieu");
    $trangthai = $request->input("trang_thai");

    $file = $request->file('Image')->store("public");

    DB::table('sanpham')->insert(["ten" => $ten, "gia"=> $gia,"so_luong"=> $soluong,"chi_tiet"=> $chitiet,"thuong_hieu"=> $thuonghieu,"trang_thai"=> $trangthai, "Image" => $file]); 
    return redirect('home');

    
}

function logout(){
    Auth::logout();
    return redirect()->route('auth.login');
   }

}

function destroy($id){
    DB::table('sanpham')->where ('id',"=",$id)->delete();
     echo "<script> alert('Xoa Thanh Cong');</script>";
    return redirect('user/home');

}

function edit($id)
    { 
        $product = DB::table('sanpham')->find($id);
        return view("user.edit2",["edit"=>$product]);
       
    } 

    function update(Request $request, $id)
    {
        $ten = $request->ten;
        $gia = $request->gia;
        $soluong = $request->so_luong;
        $chitiet = $request->chi_tiet;
        // $filePath = $request->file('Image')->store("public");

        DB::table('sanpham')->where("id",$id)->update(["id"=>$id,"ten"=>$ten,"gia"=>$gia,"so_luong"=>$soluong,"chi_tiet"=>$chitiet]);
        return redirect('/user/home');   
    }
}