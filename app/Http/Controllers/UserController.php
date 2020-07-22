<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ User;

class UserController extends Controller
{
    function index(){
        $user = User::find(1);
        echo json_encode($user->class);
    }
}
