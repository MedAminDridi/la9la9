<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class successController extends Controller
{
    public function index(Request $request){
        
        return view("success");
    }
    public function flash(Request $request){
        $request->session()->flush();
    }
}
