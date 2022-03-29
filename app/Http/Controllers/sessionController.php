<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class sessionController extends Controller
{
    public function create(Request $request){
        $randomstr = Str::random(32);
        $request->session()->put("session", $randomstr);
        return view("first",["session"=>$randomstr]);

    }
    public function get(Request $request){
        $get = $request->session()->get("session");
        dd($get);

    }
}
