<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KontenControl extends Controller
{
    public function user(){
        return view ('user.home');
    }
}
