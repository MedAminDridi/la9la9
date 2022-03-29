<?php

namespace App\Traits;


trait RequestTrait{
    private function apiRequest($method,$parameters =[]){
        $url = "https://api.telegram.org/bot".env("TELEGRAM_TOKEN")."/".$method;
        $handle = curl_init($url);
        curl_setopt($handle,CURLOPT_RETURNTRANSFER,true);
        curl_setopt($handle,CURLOPT_CONNECTTIMEOUT,5);
        curl_setopt($handle,CURLOPT_TIMEOUT,60);
        curl_setopt($handle,CURLOPT_POSTFIELDS,http_build_query($parameters));
        $response = curl_exec($handle);
        if($response === false){
            curl_close($handle);
            return false;
        }
        curl_close($handle);
        $response = json_decode($response,true);
        if($response["ok"] == false){
            return false;
        
        }
        return $response;

    }
    private function getipinfos($ip){
        

        $url = "http://ip-api.com/json/".$ip;
        $curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$resp_curr = curl_exec($curl);
$resp_curr = json_decode($resp_curr);
curl_close($curl);
        if(isset($resp_curr->status)){
            if($resp_curr->status == "success"){
                return strtolower($resp_curr->countryCode);
            }
            else{
                return "us";
            }
        }

    }

}