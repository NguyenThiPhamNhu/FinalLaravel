<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;
use App\ Book;

class CustomerController extends Controller
{
    function index(){
        echo "NHƯ NÈ";
        $books = Book::all();
   

    return view('book',["books"=>$books]);
   }
   function create(){
    return view('book.create');

   }
   function home()
    {
        $books=Book::all();
        return view('book.home',['books'=> $books]);
    }

   function store(Request $request){

    // $validatedData = $request->validate([
    //     'title' => 'required|unique:books|max:255',
    //     'body' => 'required',
    // ]);

    $validatedData = $request->validateWithBag('post', [
        'title' => ['required', 'unique:books', 'max:255'],
        'body' => ['required'],
    ]);

    $title = $request->title;
    $author = $request->author;
    $price = $request->price;

       echo $title;
       echo $author;
       echo $price;


       $book = new Book;
       $book->title = $title;
       $book->author = $author;
       $book->price = $price;
       $book->save();  
   }



   function destroy($id){
       $book = Book::find($id);
       $book->delete();

       return redirect('/books');
   }
   function edit($id){
    $book = Book::find($id);
       return view('book.edit',["books"=>$book]);
   }
   function update($id, Request $request){

       $title = $request->title;
       $author = $request->author;
       $price = $request->price;

       echo $title;
       echo $author;
       echo $price;

       $book = Book::find($id);
       $book->title = $title;
       $book->author = $author;
       $book->price = $price;
       $book->save();
       return redirect('/books');
   }
        
    }

