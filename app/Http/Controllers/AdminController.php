<?php

namespace App\Http\Controllers;
use App\ Hotel;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function index(){
        echo "<center>CHÀO MỪNG BẠN ĐẾN VỚI TRANG ADMIN </center>";
        $hotels = Hotel::all();
   

    return view('admin.hotel',["hotels"=>$hotels]);
   
}

function admin(){
    // echo "NHƯ NÈ";
    $hotels = Hotel::all();


return view('admin.dashboard',["hotels"=>$hotels]);

}
function create(){
    return view('admin.create');

   }
   function home()
    {
        $hotels=Hotel::all();
        return view('admin.hotel',['admin'=> $hotels]);
    }

   public function store(Request $request){
       
        $name=  $request->input("name");
        $filePath = $request->file('image')->store("public");
        $typeroom= $request->input("typeroom");
        $number= $request->input("number");
        $area= $request->input("area");
        $price= $request->input("price");

    
        DB::table('hotels')->insert(
        ["name" => $name,
        "image" => $filePath,
        "typeroom" => $typeroom,
        "number" =>$number,
        "area" => $area,
        "price" => $price,
          ]
        );
        return redirect('hotels');
        }
     
    
}

