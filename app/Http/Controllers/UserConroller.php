<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;


class UserConroller extends Controller
{
    //
    public function create() {
        return view('users.register');
    }
   
}
