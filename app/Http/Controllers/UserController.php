<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    public function all(){
        return view('users.all');
    }

    public function add(){
        return view('users.add');
    }


}
