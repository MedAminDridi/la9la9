<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Traits\LanguageTrait;

class sessionController extends Controller
{
    use LanguageTrait;
    public function create(Request $request){
        $randomstr = Str::random(32);
        $request->session()->put("session", $randomstr);
        set_Language();


        return view("first",["session"=>$randomstr]);

    }
    public function get(Request $request){
        $get = $request->session()->get("session");
        dd($get);

    }
}
