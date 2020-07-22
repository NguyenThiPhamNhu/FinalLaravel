<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;

class CategoryContrller extends Controller
{
    function index(){
        $categories = Category::all();

        foreach ($categories as $key) {
            $key->photos;
        }
        echo "<pre>" .json_encode( $categories, JSON_PRETTY_PRINT)."</pre>";
        return view("admin.maanger");
    }

}
