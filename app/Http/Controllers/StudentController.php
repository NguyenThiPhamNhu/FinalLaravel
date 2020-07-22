<?php

namespace App\Http\Controllers;
use\App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class StudentController extends Controller
{ function index(){
    echo "<center>CHÀO MỪNG BẠN ĐẾN VỚI TRANG ADMIN </center>";
        $student = Student::all();
   

    return view('/crud/admin',["students"=>$student]);

}
function create(){
    return view('crud.add');

   }
   public function store(Request $request){
       
    $name=  $request->input("name");
   
    $class= $request->input("class");
    $address= $request->input("address");
    $dob= $request->input("dob");
    


    DB::table('students')->insert(
    ["name" => $name,
   
    "class" => $class,
    "address" =>$address,
    "dob" => $dob,
   
      ]
    );
    return redirect('admin');
    }

    function destroy($id){
        DB::table('students')->where ('id',"=",$id)->delete();
         echo "<script> alert('Xoa Thanh Cong');</script>";
        return redirect('crud/admin');
    
    }
    
    function edit($id)
        { 
            $student = DB::table('students')->find($id);
            return view("crud.edit",["dbedit"=>$student]);
           
        } 
    
        function update(Request $request, $id)
        {
            $name = $request->name;
            $class = $request->class;
            $address = $request->address;
            $dob = $request->dob;
            // $filePath = $request->file('Image')->store("public");
    
            DB::table('students')->where("id",$id)->update(["id"=>$id,"name"=>$name,"class"=>$class,"address"=>$address,"dob"=>$dob]);
            return redirect('/crud/admin');   
        }
 
}