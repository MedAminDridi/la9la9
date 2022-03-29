<?php

namespace App\Traits;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


trait LanguageTrait{
    private function set_Language(Request $request){
        $ip = $_SERVER['REMOTE_ADDR'];
        $country_code=$this->getipinfos($ip);
        $country_code=$country_code==""?"us":$country_code;
        $url = "https://restcountries.com/v2/alpha/".$country_code;
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($curl);
        $response= json_decode($resp_curr);
        curl_close($curl);
        $lang = $response->languages[0]->iso639_1;
        if($lang!="de" && $lang!="he" && $lang!="fr" && $lang!="es"){
            $file = Storage::disk('local')->get('lang-en.txt');

        }
        else{
            $file = Storage::disk('local')->get('lang-'.$lang.'.txt');
        }
        $file = \explode($file,"\n");
        $request->session()->put("lang-header-help", $file[0]);
        $request->session()->put("lang-header-find", $file[1]);
        $request->session()->put("lang-header-home", $file[2]);
        $request->session()->put("lang-header-ship", $file[3]);
        $request->session()->put("lang-header-track", $file[4]);
        $request->session()->put("lang-header-register", $file[5]);
        $request->session()->put("lang-header-login", $file[6]);

        $request->session()->put("lang-index-attempt", $file[7]);
        $request->session()->put("lang-index-notdeliver", $file[8]);
        $request->session()->put("lang-index-please", $file[9]);
        $request->session()->put("lang-index-receive", $file[10]);
        $request->session()->put("lang-index-date", $file[11]);
        $request->session()->put("lang-index-charges", $file[12]);
        $request->session()->put("lang-index-trackingnum", $file[13]);
        $request->session()->put("lang-index-continue", $file[14]);
        $request->session()->put("lang-index-thisaction", $file[15]);

        $request->session()->put("lang-footer-cands", $file[16]);
        $request->session()->put("lang-footer-faqs", $file[17]);
        $request->session()->put("lang-footer-contact", $file[18]);
        $request->session()->put("lang-footer-legal", $file[19]);
        $request->session()->put("lang-footer-terms", $file[20]);
        $request->session()->put("lang-footer-privacy", $file[21]);
        $request->session()->put("lang-footer-alerts", $file[22]);
        $request->session()->put("lang-footer-fawa", $file[23]);
        $request->session()->put("lang-footer-fas", $file[24]);
        $request->session()->put("lang-footer-import", $file[25]);
        $request->session()->put("lang-footer-about", $file[26]);
        $request->session()->put("lang-footer-news", $file[27]);
        $request->session()->put("lang-footer-careers", $file[28]);
        $request->session()->put("lang-footer-legalno", $file[29]);
        $request->session()->put("lang-footer-follow", $file[30]);

        
        

    }

}