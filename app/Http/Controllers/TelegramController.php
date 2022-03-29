<?php

namespace App\Http\Controllers;
use App\Traits\RequestTrait;
use App\Traits\MakeComponents;
use Illuminate\Http\Request;


class TelegramController extends Controller
{
    use RequestTrait;
    use MakeComponents;
    public function webhook(){
        return $this->apiRequest('setWebhook',[
            'url' => url(route('webhook')."/webhook"),
        ]) ?["success"] : ['something wrong']; 
    }
    public function index(){
        $method ="getUpdates";
        $parameters = ["offset" =>"5"];
        $url = "https://api.telegram.org/bot".env("TELEGRAM_TOKEN")."/".$method;
        $handle = curl_init($url);
        curl_setopt($handle,CURLOPT_RETURNTRANSFER,true);
        curl_setopt($handle,CURLOPT_CONNECTTIMEOUT,5);
        curl_setopt($handle,CURLOPT_TIMEOUT,60);
        curl_setopt($handle,CURLOPT_POSTFIELDS,http_build_query($parameters));
        $response = curl_exec($handle);
        $response = json_decode($response);
        $response = $response->result;
        for($i=0;$i<=6;$i++){
            if(isset($response[$i]->callback_query)){
                $cb_data = $response[$i]->callback_query->data;
                    $sms_response = explode("-",$cb_data)[2];
            }
        }
        return $sms_response;

    }

}

