<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminControl extends Controller
{
    public function admin(){
        return view ('admin.home');
    }
}
