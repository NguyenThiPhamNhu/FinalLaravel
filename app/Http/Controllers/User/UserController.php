<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    function index(){
        $database = DB::table('users')->get();
        
        return View("auth.useradmin",["db"=> $database]);

        // return view("user.home");
}
    function destroy($id){
        DB::table('sanpham')->where ('id',"=",$id)->delete();
        // echo "<script> alert('Xoa Thanh Cong');</script>";
        return redirect('user/home');

    }
//xoa user
    function delete($id){
        DB::table('users')->where ('id',"=",$id)->delete();
        // echo "<script> alert('Xoa Thanh Cong');</script>";
        return redirect('auth/useradmin');
    
    }

    function edit($id){
        $database = DB::table('sanpham')->where ('id','=',$id)->get();
        return View("edit",["dbedit"=> $database]);
        // $information = DB:: table("image")->where('id','=',$id)->get();
        // $photo =$information[0];
    }
    
    // function details($id){
    //     $chitiet = DB::table('sanpham')->find($id);
    //     return view("user.detail", ['chi_tiet' => $chitiet]);
    // }

    function index2(){
    
        $database = DB::table('sanpham')->get();
        return View("user.page",["db"=> $database]);
    
        // return view("user.home");
    
    }

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
    
}