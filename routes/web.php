<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Route::get("/add", function(){
//     return view('add');
// });

// Route::get("/index", "imageController@index");

// Route::post("/add/avatar","imageController@add");

// Route::post("/update/avatar","imageController@update");

// Route::delete('/delete/{id}', "imageController@delete");

// Route::delete('/edit/{id}', "imageController@edit");


// Route:: post('/auth/login',"");

 

 Route::get("/add", function(){
    return view('add');
});




Route::get("/", function(){
    return view('welcome');
});

Route:: post('/auth/login',"DashboardController@login");

Route:: get('/auth/login',"DashboardController@index")->name('auth.login');
// review crud



// Final Project
Route::get('/guitar/admin',"GuitarController@index");
Route::get('/guitar/add',"GuitarController@create");
Route::post('/admin/store',"GuitarController@store");
Route::delete('/guitar/admin/{id}',"GuitarController@destroy");

Route::get('/guitar/admin/{id}/edit', "GuitarController@edit");
Route::patch('/guitar/admin/{id}update',"GuitarController@update");
Route::get('/guitar/home',"GuitarController@home");
Route::get('/guitar/guitarpro',"GuitarController@guitarpage");
Route::get('/guitar/kalimba',"GuitarController@kalimbapage");
Route::get('/guitar/ukulele',"GuitarController@ukulelepage");


Route::get('/guitar/index/cart',"CartController@indexCart")->name('in');

Route::get('/guitar/cart/{id}',"CartController@addCart");
Route::delete('/guitar/cart/{id}',"CartController@destroyCart");
Route::get('/guitar/cart',"CartController@indexCart");

// detail
Route::get('/guitar/detail/{id}', "GuitarController@viewDetail");
// order
Route::get('/guitar/index/order',"CartController@pay");
Route::get('/guitar/index/order',"CartController@orderpay");
Route::get('/guitar/index/order',"CartController@indexCartOrder")->name('order');

// insert order
Route::get('/guitar/insert/order',"CartController@pay");
Route::get('/guitar/insert/order',"CartController@order");
Route::get('/guitar/adminorder',"GuitarController@indexOrder");

// Route::get('/guitar/tang',"CartController@increaseQuantity");


// user manage
Route::get('/guitar/user',"GuitarController@indexUser");
Route::get('/guitar/adduser',"GuitarController@createUser");
Route::post('/admin/storeuser',"GuitarController@storeUser");
Route::delete('/guitar/user/{id}',"GuitarController@destroyUser");

Route::get('/guitar/user/{id}/edit',"GuitarController@editUser");
Route::patch('/guitar/user/{id}',"GuitarController@updateUser");
Route::get('/guitar/search',"GuitarController@search");


// // log in and register
Route:: get('/guitar/login',"HomeController@index");

Route::get('/guitar/adminmanager',"GuitarController@adminManagerPage");


Route::get('/home', 'HomeController@index')->name('home');


// // API WITH REACTJS
// Route::get('/api/posts','Api\PostController@index');
// Route::get('/api/posts/{id}','Api\PostController@show');

// Route::get('/api/login','Api\PostController@indexUser');
// Route::get('/api/login/{id}','Api\PostController@showUser');




